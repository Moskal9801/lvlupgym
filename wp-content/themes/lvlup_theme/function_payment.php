<?php use YooKassa\Client; require_once 'php_modules/yookassa/vendor/autoload.php';

//ПРОВЕРКА ВСЕХ ПЛАТЕЖЕЙ СО СТАТУСОМ 'PENDING'
$db = new PDO('mysql:host=localhost;dbname=info-db', 'info-db', 'info-db');

$stmt = $db->prepare("SELECT id, checked_number, name, surname, mail, phone, ticket, price FROM wp_youkassa_payment WHERE status = 'pending'");
$stmt->execute();
$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($payments as $payment) {
    $id = $payment['id'];
    $checked_number = $payment['checked_number'];

    if ($checked_number < 15) {
        $status = checkPaymentStatus($id);

        if ($status === 'succeeded') {
            $name = $payment['name'];
            $surname = $payment['surname'];
            $mail = $payment['mail'];
            $phone = $payment['phone'];
            $ticket = $payment['ticket'];
            $price = $payment['price'];

            $purchase = "";
            if ($ticket === "Клубная карта 3 месяца") {
                $purchase = "6986fd59-3609-11f0-8206-005056bffd92";
            } elseif ($ticket === "Полугодовая клубная карта ") {
                $purchase = "d0ec6394-1692-11f0-8206-005056bffd92";
            } elseif ($ticket === "Годовая клубная карта") {
                $purchase = "8fb04971-1258-11ef-81ff-005056bffd92";
            } elseif ($ticket === "Тест") {
                $purchase = "26e5b024-abcf-11ef-8204-005056bffd92";
            }

            $siteTitle = 'LVL UP';
            $siteUrl = 'https://lvlupgym.ru/';

            $comment = 'На вашем веб-сайте (' . $siteTitle . ' - ' . $siteUrl . ') произошла новая покупка абонемента: ' . $ticket . ' (' . $price . ' ₽)';

            //ДЛЯ КЛИЕНТА
            $to = ['skorikovdanila@mail.ru'];
            $subject = $siteTitle . ' - Покупка клубной карты (' . $ticket . ')';
            $message = "От: $name (Электронная почта: $mail; Номер телефона: $phone)\n\nНа вашем веб-сайте ($siteTitle - $siteUrl) произошла новая покупка абонемента: $ticket ($price ₽)";
            $messageClient = "<html><body><img src='https://lvlupgym.ru/wp-content/uploads/2025/05/privet_letter.jpg' alt='Приветственное письмо'></body></html>";
            $headers = 'From: info@lvlupgym.ru' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
            $headersClient = 'From: info@lvlupgym.ru' . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            foreach ($to as $item) {
                mail($item, $subject, $message, $headers);
            }

            mail($mail, $subject, $messageClient, $headersClient);



            //СОЗДАНИЕ ЛИДА В 1С
            $leadFields = json_encode([
                "phone" => $phone,
                "club_id" => "ba88bbb4-2237-11ef-a398-00505683241e",
                "last_name" => $surname,
                "name" => $name,
                "email" => $mail,
                "comment" => $comment,
            ]);

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://domain/brosko_fitness/hs/api/v3/lead");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_USERPWD, "api:api");

            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $leadFields);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "apikey: apikey"
            ));

            $response = curl_exec($ch);

            curl_close($ch);

            $userId = json_decode($response, true)['data']['user_id'];



            //СОЗДАНИЕ НЕПРОВЕДЕННОЙ ПЛАТЕЖКИ
            $paymentFields = json_encode([
                "transaction_id" => $id,
                "cart" => [
                    [
                        "purchase_id" => $purchase,
                        "count" => 1,
                    ]
                ],
                "payment_list" => [
                    [
                        "type" => "card",
                        "amount" => (int)$price,
                    ]
                ],
                "club_id" => "ba88bbb4-2237-11ef-a398-00505683241e",
                "lead_id" => $userId,
            ]);

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "http://domain/brosko_fitness/hs/api/v3/payment");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_USERPWD, "api:api");

            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paymentFields);

            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "apikey: apikey",
            ));

            $response = curl_exec($ch);
            curl_close($ch);
        }
    } else {
        $stmt = $db->prepare("UPDATE wp_youkassa_payment SET status = 'failed' WHERE id = :id");

        $stmt->execute([':id' => $id]);

        echo "Платеж $id не прошел\n";
    }
}

//ФУНКЦИЯ ОБНОВЛЕНИЯ СТАТУСА ПЛАТЕЖА
function checkPaymentStatus ($id) {
    $client = new Client();
    $client->setAuth('shopid', 'shopkey');

    $response = $client->getPaymentInfo($id);

    $status = $response->getStatus();

    $db = new PDO('mysql:host=localhost;dbname=info-db', 'info-db', 'info-db');

    $stmt = $db->prepare("UPDATE wp_youkassa_payment SET status = :status, checked_number = checked_number + 1 WHERE id = :id");

    $stmt->execute([
        ':status' => $status,
        ':id' => $id
    ]);

    return $status;
}