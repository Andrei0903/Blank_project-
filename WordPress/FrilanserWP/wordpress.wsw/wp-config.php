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
define( 'DB_NAME', 'wp_test_one' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%@ZNCmLX(~`y~g)-fH<tG_%;*0(h8os(REb0xkfFF,u`@>D{K1Sf7Zmlj0-gI?78' );
define( 'SECURE_AUTH_KEY',  '}T8C%?!FnI`_soYRHT,{IHm?EF8iGP/;=,cSJ@-<(YWBg~I5o/XqQH4doy[IyZQ$' );
define( 'LOGGED_IN_KEY',    'tFZ$r5}by&W~v$%dO%^&?^nGnQDQmmH.J||0ui}RfTsGO[D(x:E:ICG1Gl>4<nhh' );
define( 'NONCE_KEY',        ' CWMG|}Yz@m+v)Vv0[cW4&2(B;#/evm?ENX)avJnIZr4{1[SKO~68^Oyx<<e7wjE' );
define( 'AUTH_SALT',        'R&coD~%o{@*`(GmOb}SF?*Xm6~=>q}T.s!`IPXyT&s?yiH,tpkP!eS@OjdIs*/?j' );
define( 'SECURE_AUTH_SALT', '5CDa#K^ZxC n01MXow-W+_&-;MWHzSxn/N)]5#Mk-0ZG%e:&rcjlS|q &)uA!k#v' );
define( 'LOGGED_IN_SALT',   '&*;HZSnbfB RFT]nqLc&txYAcwZx`&q-!o2^z]:=d&.bL/@8q&w**r&ich,o<5L_' );
define( 'NONCE_SALT',       '7%LCi+V+*b8*c?@xx(MB>]T19D&fQ.jlOg:ouG<DBZC>`k*LEg$D/FMrCsc,`)Yv' );

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
