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
define( 'DB_NAME', 'ineedsex_db' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm~=nj/f-E`H`2HHiFL<6uP]V{[e4{u44O`xHXIgA?9M0K%K>C f:k))[g5io3/F&' );
define( 'SECURE_AUTH_KEY',  '@CXwENm;A ?@zZQeWKbfiCy/~A)_.W{D^S#QM]OwJo!_(aMTo[nWC2CG]?K-@C$H' );
define( 'LOGGED_IN_KEY',    '?+#$qFkF-y}7nma ?<:?:_^_5W 43i4}K:|d].WUph.>8nQ;w]}V?5}vvG(2|(hf' );
define( 'NONCE_KEY',        ';o^IUTj^h%vPQA?eb-dc`4c}Ezzl&{|n*I)iVssEsS=QL)t/4|D-C!?P /r=Y&EF' );
define( 'AUTH_SALT',        ':rZZH5w^3)P~b^MEIItLoaB%FKr{l?}w!6B(e:V@!m7`>!O{6NgUN>B=Pe(^9n*e' );
define( 'SECURE_AUTH_SALT', '>MU58)YWC(?&cyw~rhbVIvs3YuT}V#cI^h^]tD<*t,oxdABf$8Wml[6wr3o6{B/3' );
define( 'LOGGED_IN_SALT',   'WR1~q~)PIUOW#>IxKA0@<=n#GGvV pb*y%/HG*. zUncU]Gm0mWJS39iW}D9B(x=' );
define( 'NONCE_SALT',       'x%PhK8#/-j/BROXF$uUfK1-II?=m@N>9vUaJsui3QAA^hM0jgrHh%r[<FB`>:[D}' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
