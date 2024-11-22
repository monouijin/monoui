<?php
require_once 'config.php';

//library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';
require_once SOURCE_BASE . 'libs/router.php';

//Model
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';

//Message

//DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

//Partials
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

//View
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/login.php';

use function lib\route;

session_start();

try {
    \partials\header();

    $url = parse_url(CURRENT_URI);
    $rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    route($rpath, $method);
    
    \partials\footer();

} catch(Throwable $e) {
    die('<h1>何かが凄くおかしいようです。</h1>');
}