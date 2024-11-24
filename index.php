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
require_once SOURCE_BASE . 'libs/message.php';

//DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';

//Partials
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

//View
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/login.php';
require_once SOURCE_BASE . 'views/register.php';


use function lib\route;

session_start();

try {
    \partials\header();

    $url = parse_url(CURRENT_URI);
    if($url['path'] !== '/dokomori-jisaku-app/') {
        $url['path'] = rtrim($url['path'], '/');
    }
    $rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    echo $url['path'];
    echo '<br>';
    echo BASE_CONTEXT_PATH;
    echo '<br>';
    echo BASE_CSS_PATH . 'style.css';

    route($rpath, $method);
    
    \partials\footer();

} catch(Throwable $e) {

    die('<h1>何かが凄くおかしいようです。</h1>');

}