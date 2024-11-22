<?php

namespace lib;

use db\UserQuery;
use model\UserModel;
use Throwable;

class Auth
{
    public static function login($id, $pwd)
    {
        try {
            if (!(
                UserModel::validateId($id)
                * UserModel::validatePwd($pwd)
            )) {
                return false;
            }

            $is_success = false;

            $user = UserQuery::fetchById($id);

            if (!empty($user) && $user->del_flg !== 1) {
                if (password_verify($pwd, $user->pwd)) {
                    $is_success = true;
                    UserModel::setSession($user);
                } else {
                    echo 'パスワードが一致しません';
                }
            } else {
                echo 'ユーザーが見つかりません';
            }
        } catch (Throwable $e) {
            $is_success = false;
            echo $e->getMessage();
            echo 'ログイン処理でエラーが発生しました';
        }

        return $is_success;
    }

    public static function regist($user)
    {
        try {
            if (!($user->isValidId()
                * $user->isValidPwd()
                * $user->isValidNickname())) {
                return false;
            }

            $is_success = false;

            $exist_user = UserQuery::fetchById($user->id);

            if (!empty($exist_user)) {
                echo 'ユーザーがすでに存在します';
                return false;
            }

            $is_success = UserQuery::insert($user);

            if ($is_success) {
                UserModel::setSession($user);
            }
        } catch (Throwable $e) {
            $is_success = false;
            echo $e->getMessage();
            echo 'ユーザー登録でエラーが発生しました';
        }
    }

    public static function isLogin()
    {
        try {
            $user = UserModel::getSession();
        } catch (Throwable $e) {
            UserModel::clearSession();
            echo $e->getMessage();
            return false;
        }

        if (isset($user)) {
            return true;
        } else {
            return false;
        }
    }

    public static function logout() {
        try {
            UserModel::clearSession();
        } catch(Throwable $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public static function requireLogin() {
        if(!static::isLogin()) {
            echo 'ログインしてください';
            redirect('login');
        }
    }
}
