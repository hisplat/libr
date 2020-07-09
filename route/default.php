<?php

// app
defined('APP_NAME') or define('APP_NAME', "app");

// url
defined('DOMAIN_URL') or define('DOMAIN_URL', "http://www.wuzeyang.cn/");
defined('ROOT_URL') or define('ROOT_URL', "");
defined('INSTANCE_URL') or define('INSTANCE_URL', "/libr/");
defined('HOME_URL') or define('HOME_URL', DOMAIN_URL . INSTANCE_URL);
defined('APP_URL') or define('APP_URL', ROOT_URL . INSTANCE_URL . APP_NAME . "/");
defined('VENDOR_URL') or define('VENDOR_URL', ROOT_URL . INSTANCE_URL . "/vendor/");

defined('DEBUG') or define('DEBUG', true);

// defined('AUTH_TYPE') or define('AUTH_TYPE', "comacc");
// defined('AUTH_TYPE') or define('AUTH_TYPE', "jira");

// defined('COMACC_UI') or define('COMACC_UI', "http://114.215.82.75/comacc/?index");
// defined('COMACC_AUTH') or define('COMACC_AUTH', "http://114.215.82.75/comacc/ajax.php?action=login.authorize");
// defined('JIRA_URL') or define('JIRA_URL', "http://tvjira.hisense.com/rest/api/2/myself");
// defined('JIRA_URL') or define('JIRA_URL', "http://114.215.82.75/hisplat/scoring/test.php");

defined('KEY_WECHAT_APPID') or define('KEY_WECHAT_APPID', 'wx12998d1bcc338c4f');
defined('KEY_WECHAT_APPSECRET') or define('KEY_WECHAT_APPSECRET', '95089bbe7c9651513aaa579c52c06e7a');


