<?php
namespace partials;

use lib\Auth;
use model\UserModel;

function header() {
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css">
</head>

<body>
    <header class="w3-container w3-teal">
        <h1>PHP Blog</h1>
    </header>

    <div class="w3-bar w3-border">
        <a href="<?php the_url('/'); ?>" class="w3-bar-item w3-button w3-pale-green">Home</a>
        <?php if(Auth::isLogin()) :?>
            <?php //ログイン中?>
            <!-- <a href="<?php the_url('new'); ?>" class="w3-bar-item w3-btn">New Post</a> -->
            <!-- <a href="<?php the_url('admin'); ?>" class="w3-bar-item w3-btn">Admin Panel</a> -->
            <a href="<?php the_url('logout'); ?>" class="w3-bar-item w3-btn">Logout</a>
        <?php else : ?>
            <?php //ログインしていないとき?>
            <a href="<?php the_url('login') ?>" class="w3-bar-item w3-pale-red">Login</a>
            <a href="<?php the_url('register') ?>" class="w3-bar-item w3-pale-red">Signup</a>
        <?php endif; ?>
    
    </div>
</body>

</html>
<?php
}
?>