<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lvlupgym' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bhh+{A1k,=LMrdQpFBn-jt9Sa4 HW>pSybU|6E9m`J[vRgvZ?+LP<vP{`3t2HZRp' );
define( 'SECURE_AUTH_KEY',  'x7L<5qaQ^e*7>uCh1_wD=IH&g)> W#=lf2Z0_HVryX[XnX{ZUGbqS#7B:la2F-5f' );
define( 'LOGGED_IN_KEY',    'Qq>5t/$H{lwD{G#$tS?a^G77erjbTWtKF#R>o5mY~KtVR%ZJe^*x4M0rYi@XRW/|' );
define( 'NONCE_KEY',        '8etD?~7GDLfIjw*5H-F.ha ,(M{Yj>IoWv/h]x<v^1KONqLvnM>J5d.[6X?u_]1[' );
define( 'AUTH_SALT',        '<3G0Z^_mn&)J0^35HGoU(S0O:`3r$W|sOD Hsk1.%s;Akz$FA$pS*1.z{E&-Mh_:' );
define( 'SECURE_AUTH_SALT', 'P.f^z-$r_ltVu2]1$$vQf5@JPP6&Z@E,B^L7jyZh96941Gm,d;mQvz@TLHtL7o,M' );
define( 'LOGGED_IN_SALT',   '=m:mHj-]b%[V&R1=2iHgBdoJdY;>}HYbU+zsR|Ad;[iT=d8Rb:u&wn,nc5N$m^{}' );
define( 'NONCE_SALT',       'evTD`jJNP]R>Y;fROsCr<bZRo%_<}2(Ux^fq$KrzI! zo_,Ou;cy2/w:;]%xn!^=' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
