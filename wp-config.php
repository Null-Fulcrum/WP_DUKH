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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_dp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         's5Jy|B+&nSR)waXdn2zdhKhK&We|/e$zrzHYI]x!8{*)luyP<R<~]tI|INM83k[/' );
define( 'SECURE_AUTH_KEY',  '5?e&0oh+K+mjaTm=IQvnG#*cgR;/`_huUY5]a}Q/p52GPrU7K&Wb9o`Q+?DYgYRW' );
define( 'LOGGED_IN_KEY',    'jOSgpzWpZ:;hH=;Kt96B&VS^9&bd.Czo{37l?7* C:BQ`bfG9)Ah_fQbL;:x[2J+' );
define( 'NONCE_KEY',        'J<5l&J[+v*4ZfCt,X/3cHLfx/;w[g8b*_xqwylumNd:d5lE){2(e{DpnPHaN@Js#' );
define( 'AUTH_SALT',        'V^mwIW%D]?q9?{4flh}L9qTct`KW<k*<{+gq#yVkT--X>.#SU|RE8dHI4hqlh]D}' );
define( 'SECURE_AUTH_SALT', '&+m6`=sx%Pv1qEKj1!=!+<0KhnnsL:rwUS!=Z|@WpsYD)aRRkeVtOx{X+`/[]&BK' );
define( 'LOGGED_IN_SALT',   'M(9T$f2Y`.HBS-xM;Vr{9E$$;z^.!Hc_k$B!y;N@8@jt7d~Xv j.;KJNb? +:v4?' );
define( 'NONCE_SALT',       '[2(5]J8GfJ2>22KWXT#v jnFx/t68vGq1Lm[@x:60G#orBfRr!}8)(GW,Ih0Jdc}' );

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
