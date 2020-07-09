<?php
include_once(dirname(__FILE__) . "/../framework/config.php");

include_once(FRAMEWORK_PATH . "/helper.php");
include_once(FRAMEWORK_PATH . "/logging.php");
include_once(FRAMEWORK_PATH . "/tpl.php");
include_once(FRAMEWORK_PATH . "/cache.php");
include_once(FRAMEWORK_PATH . "/database.php");
include_once(FRAMEWORK_PATH . "/WeChat.php");

include_once(dirname(__FILE__) . "/app/upload.class.php");
include_once(dirname(__FILE__) . "/database/db_book.class.php");

// include_once(dirname(__FILE__) . "/database/db_pool.class.php");
// include_once(dirname(__FILE__) . "/database/db_plan.class.php");
// include_once(dirname(__FILE__) . "/database/db_bonus.class.php");
// include_once(dirname(__FILE__) . "/database/db_approve.class.php");
// include_once(dirname(__FILE__) . "/database/db_sort.class.php");
// include_once(dirname(__FILE__) . "/database/db_setting.class.php");
// include_once(dirname(__FILE__) . "/database/db_balance.class.php");

// include_once(dirname(__FILE__) . "/app/login.class.php");
// include_once(dirname(__FILE__) . "/app/rank.class.php");
// include_once(dirname(__FILE__) . "/app/jiraauth.class.php");
// include_once(dirname(__FILE__) . "/app/setting.class.php");

// database
defined('MYSQL_SERVER') or define('MYSQL_SERVER', 'localhost');
defined('MYSQL_USERNAME') or define('MYSQL_USERNAME', 'libr');
defined('MYSQL_PASSWORD') or define('MYSQL_PASSWORD', 'libr');
defined('MYSQL_DATABASE') or define('MYSQL_DATABASE', 'libr');
defined('MYSQL_PREFIX') or define('MYSQL_PREFIX', 'libr_');


defined('UPLOAD_DIR') or define('UPLOAD_DIR', APP_PATH . '/upload/');
defined('UPLOAD_URL') or define('UPLOAD_URL', rtrim(APP_URL, "/") . '/upload/');


