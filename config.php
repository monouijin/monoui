<?php
define('CURRENT_URI', $_SERVER['REQUEST_URI']);
define('BASE_CONTEXT_PATH', rtrim('/dokomori-jisaku-app', '/') . '/');

define('BASE_IMAGE_PATH', BASE_CONTEXT_PATH . 'images/');
define('BASE_CSS_PATH', BASE_CONTEXT_PATH . 'css/');
define('BASE_JS_PATH', BASE_CONTEXT_PATH . 'js/');
define('SOURCE_BASE', __DIR__ . '/php/');

define('GO_HOME', 'home');
define('GO_REFERER', 'referer');

define('DEBUG', true);


