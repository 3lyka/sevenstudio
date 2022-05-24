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
define( 'DB_NAME', 'cy90154_7studio' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'cy90154_7studio' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Fyz2658212' );

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
define( 'AUTH_KEY',         '0gxd%V`2&~LRqqg}q$}B)]x|C~w3A.vY?/wpqzPo||#wwc5M =^(.5Cyq+7IG.?*' );
define( 'SECURE_AUTH_KEY',  'g|y@VKAw5B6vTAw>?A 38oG*R)Bm9RW1 u.U.!d1B/uY8B&eCeKp]OeRqn?c<]4e' );
define( 'LOGGED_IN_KEY',    ']%g=i}-L,~MlE]!cJyL48*/f<-j!JR%8xC>fCnFP.vVmfo}!di6ME$6qcLue8Sde' );
define( 'NONCE_KEY',        'Z q%*(sU[H?[0B0K037IYpqm|=c;j{YgqZvY]m|~[]uo(S %i&*Ah6.&RhcO<,iA' );
define( 'AUTH_SALT',        'oG,rGCfl}[2`5-#8!=A1-;!z~;k)n?0;&RDYs(_crd@,%inW6}ae6#:D.#%<vsf)' );
define( 'SECURE_AUTH_SALT', '4SIv}wyRcR9h(dDW/t7&K~f@I/~Y/n4o#AF+W_qn6*|Enu[M1kL8F9-r9nsQ=,^b' );
define( 'LOGGED_IN_SALT',   'KNGL^3Go7}DbH!v3>W:g$Hy:m[qxEpOzx.AiO(KU6_/CEB5zX,y-HlS_0T+}W}LM' );
define( 'NONCE_SALT',       'C/,/aF!WaA^kKp+U=[G:DJz[hL5?*kY1p;}iKF yl5*IT/0V5/OnEhIZpcc}-,[~' );

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
