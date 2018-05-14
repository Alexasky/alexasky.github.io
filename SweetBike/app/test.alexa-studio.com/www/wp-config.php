<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u201656_black');

/** Имя пользователя MySQL */
define('DB_USER', 'u201656');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'AS9.9_IeRSi');

/** Имя сервера MySQL */
define('DB_HOST', 'u201656.mysql.masterhost.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9YBEk{gT5o;,nb!y<9@:vRZuRs;Ww,D@l>+nT ~,SD-PEQXZcWD#(O~qG.H)in,f');
define('SECURE_AUTH_KEY',  'L*#O1dU)h-QT`.5l/]*AH~3bDD;U*1dbY`ZC)DGh)C:OGPY{#@#GK/Xr~}<;IRRR');
define('LOGGED_IN_KEY',    'E@pV-`/{`%*pbZOu{w&_DujQ[U(;`uQQXY(9R3D/jbIpGL?7S4w?(HjY!J]s.&Xv');
define('NONCE_KEY',        '8*!DbWUI<8U]j{7we,j_t0NSl3~x#}2s#qEnoxu`*~n.#v115AJ,#-+5O&g[&8+(');
define('AUTH_SALT',        'ME8V-e,{j}>MFu<vKpUOZXSfE<1{LSdfi]VFv}D|Y<Gai/I|7KM?#s/`W{MpzzJO');
define('SECURE_AUTH_SALT', 'Yfbfw[0&-Mb3]QtM/RD-*Ezzfw6l2)#U0`C8g}~R`UbCv#}FgQrL,HSdQ|GQ!n$#');
define('LOGGED_IN_SALT',   'U*sphKoL}~z)A/oM4!?p 0o.L]]DXIHI`7GsQI7f,9~h&9$bA5uH&*.zlt&xc+Y<');
define('NONCE_SALT',       '^+dFz`R<NefTZjM70-|ngK{Y;fPSqN#{d8Bn)ld qZ[6KJm>&eDF%Xw44ZViP^@s');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
