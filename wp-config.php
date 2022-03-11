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
define( 'DB_NAME', 'wp_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Ss238433' );

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
define( 'AUTH_KEY',         'oI@;$V3H  ~K&kB;qg!K~Y$*PPalFX3x)d%1,{.F6]uC wWh^7Pt|e5Q-e)b&Xf?' );
define( 'SECURE_AUTH_KEY',  ' PgQ61fK/l?qhe^cAAV{)a|(,(tmBp4@ZcNRw+#LK?;=wSss::GXuu^jQnj#d`v8' );
define( 'LOGGED_IN_KEY',    'AYG q![{dS/%cKx0m=z&Fx]^#W]c]`G2m_wNQ@_Y4T?x&@>_0nZ~9i7:K[dfS0c4' );
define( 'NONCE_KEY',        'D/8xKiU3CvOfj6Bk_<YdLSK5rA=shHrsm2V)ss9NHA8V^p)4njPP!_h>n6vx<SzZ' );
define( 'AUTH_SALT',        'om@!dXR],v*q@YXJdU(<,QwCu[J]XgIaR%Q:>@vXf9hp+L!*~??/rmH(7y!%BEIj' );
define( 'SECURE_AUTH_SALT', 'jJzAkEv[w+f&6xGGT} N](`QK&8f6NP1Qk5M(;l[[LW~bi:3O~Ipd-R`ll_t(*7u' );
define( 'LOGGED_IN_SALT',   '(_rc .EA%_r7i=[W&S%]rq_.90@V}S}6BX5X<Ozaf9Zf6)o28U5jL%2,f ux},j?' );
define( 'NONCE_SALT',       '4gVFX$eM{pCy?8K,#j#g#,Bu,.r4b)8.:s>?W+hPe(-z_qQJdPC;vX,0zs~uhc;f' );

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
