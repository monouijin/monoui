<?php

namespace partials;

use lib\Auth;
use lib\Msg;

function header()
{
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dokomori</title>
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_CSS_PATH; ?>style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.19.1/ui/trumbowyg.min.css">
    </head>

    <body>
        <header class="bg-light py-4">
            <div class="container">
                <h1 class="display-4 fw-bold text-dark border-bottom border-primary border-3 pb-3">
                    DOKOMORI
                    <span class="text-primary">.</span>
                </h1>
            </div>
        </header>

        <div class="w3-bar w3-border">
            <a href="<?php the_url('/'); ?>" class="w3-bar-item w3-button w3-pale-green">Home</a>
            <?php if (Auth::isLogin()) : ?>
                <?php //ログイン中
                ?>
                <a href="<?php the_url('topic/create'); ?>" class="w3-bar-item w3-btn">投稿する</a>
                <a href="<?php the_url('logout'); ?>" class="w3-bar-item w3-btn">Logout</a>
            <?php else : ?>
                <?php //ログインしていないとき
                ?>
                <a href="<?php the_url('login') ?>" class="w3-bar-item w3-pale-red">Login</a>
                <a href="<?php the_url('register') ?>" class="w3-bar-item w3-pale-red">アカウント登録</a>
            <?php endif; ?>

        </div>
        <main class="container py-3">
            <div class="w3-container">
                <form action="<?php SOURCE_BASE ?>search.php" method="GET" class="w3-container">
                    <p>
                        <input type="text" name="search_topic" class="w3-input w3-border" placeholder="Search for Anything" required>
                    </p>
                    <p>
                        <input type="submit" class="w3-btn w3-teal w3-round " value="探す">
                    </p>
                </form>
            </div>
        </main>
    </body>

    </html>
<?php
    Msg::flush();
}
?>