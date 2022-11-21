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
 * * Настройки базы данных
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
define( 'DB_NAME', 'dd_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'rootbat97' );

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
define( 'AUTH_KEY',         '.mk]nlW# Z5B}$<G$!wGmqC0T;^6F&><kZjJNe>^OyeV>pQ!,KcXaZQ-Ol]`uY;6' );
define( 'SECURE_AUTH_KEY',  '_qki`MwgXV^rd={,1//Wh +yp]a@geunepU+M~`^+*atp2X|<fC5%.Fqs[Uv[<TC' );
define( 'LOGGED_IN_KEY',    '*[z?7**3| >1UH/`Ta:D`W0+I@A vOf`9!LvC-YlC(XYe2{/@2fIhdCqqF4{jqfn' );
define( 'NONCE_KEY',        'UO>V)g-[xI$A#,)X!2E76!wP@5vbu)xpyjd}3Rzj:3|Pp7!nzEe.A6n9^O0#hZ7P' );
define( 'AUTH_SALT',        'X]7Ky(oK8kJ$qJTCGm +~YK2Y%CzgLj64ax=WnTT:hu5-5xH6#G*PW?#ie+SdjR+' );
define( 'SECURE_AUTH_SALT', '=KAt`[BzN_-3N#mwPVtT6Q2p?!=AgVh5W{k^r$V3lcpEKQ>1j8WVSa^/h[ja@qB6' );
define( 'LOGGED_IN_SALT',   'N(TLJ^bcxASx</U*y2rl:>eWE9117vDxYN#FBl=?J=x9ZifV-N#ElyD;znIur76E' );
define( 'NONCE_SALT',       'NKpeN$!9)p9]hOBx)EBtp#AtI0>Q)<ms[L61,N}c/Ke+*FWa0V;5dAj3&-0o2m]U' );

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
