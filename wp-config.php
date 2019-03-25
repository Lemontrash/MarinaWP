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
define( 'DB_NAME', 'coelix_marinka' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'coelix_dogrof' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Cvthnm12' );

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
define( 'AUTH_KEY',         'd gO`osDS3n O]a;qBSF~iy.6 & P&]2ePmQx./jI!ab1Y-uP}E]wdE[6ix>.4eY' );
define( 'SECURE_AUTH_KEY',  ']F3=o-ctionOp5mzinW.n[En$1M4<W&`qJ&K pLf}mj~[73brn!+,oo$%YM(;D}h' );
define( 'LOGGED_IN_KEY',    'WFD94C:!)L #ReCHW1U8|a?X:ZYmG(5R5/)-XXABDeRDr?7ovC6m#IM.JT(;}&[/' );
define( 'NONCE_KEY',        'pK*v|?J(jJLx{!8Drq>x^}qTH2R0G3;DL+DCX+W.^3gF5(XR4sUvXV] b_mO>u`R' );
define( 'AUTH_SALT',        '1^Aw*QY-fp}@ovf+Ab$Zu,fYY+xIK&i]sOKXQXm9+KqM]@Z]:N-k8/`1:q{aU+IC' );
define( 'SECURE_AUTH_SALT', ':WHi?dE36sk1Pt6lR{M$}}c 6J--y>G<S7OT;e$CQ%kX&%}#3_YQ4RY8D9_/N#y7' );
define( 'LOGGED_IN_SALT',   '|#M?FIPi$2hBY d|mGhS*]1tg<G}D@io,:h_XBKkmBmtZgUs<TwwCg^(e7Nt/I&]' );
define( 'NONCE_SALT',       ';MUdp7W _ev[LTMWh.,Z?Q+bE;Ca;Pb=Y%6iOSO%u`4YXu$F9o6^~V;t^:Cpt2^6' );

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
