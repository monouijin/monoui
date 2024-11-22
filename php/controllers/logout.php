<?php 

namespace controller\logout;

use lib\Auth;

function get() {
    if(Auth::logout()) {
        echo 'ログアウトが成功しました';
    } else {
        echo 'ログアウトが成功しました';
    }

    redirect(GO_HOME);
}