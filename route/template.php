<?php

// app
defined('APP_NAME') or define('APP_NAME', "app");

// url
defined('DOMAIN_URL') or define('DOMAIN_URL', "http://114.215.82.75/");
defined('ROOT_URL') or define('ROOT_URL', "");
defined('INSTANCE_URL') or define('INSTANCE_URL', "/hisplat/libr/");
defined('HOME_URL') or define('HOME_URL', DOMAIN_URL . INSTANCE_URL);
defined('APP_URL') or define('APP_URL', ROOT_URL . INSTANCE_URL . APP_NAME . "/");
defined('VENDOR_URL') or define('VENDOR_URL', ROOT_URL . INSTANCE_URL . "/vendor/");

defined('DEBUG') or define('DEBUG', true);

defined('KEY_WECHAT_APPID') or define('KEY_WECHAT_APPID', '');
defined('KEY_WECHAT_APPSECRET') or define('KEY_WECHAT_APPSECRET', '');

