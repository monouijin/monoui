<?php

namespace model;

use lib\Msg;

class UserModel extends AbstractModel
{
    public string $id;
    public string $pwd;
    public string $nickname;
    public int $del_flg;
    public ?string $updated_by;
    public ?string $created_by;
    public ?string $updated_at;

    protected static $SESSION_NAME = '_user';

    public function isValidId()
    {
        return static::validateId($this->id);
    }

    public static function validateId($val)
    {

        $res = true;
        if (empty($val)) {
            Msg::push(Msg::ERROR, 'ユーザーIDを入力してください');
        } else {
            if (strlen($val) > 10) {
                Msg::push(Msg::ERROR, 'ユーザーIDは10文字以内で入力してください');
                $res = false;
            }

            if (!is_alnum($val)) {
                Msg::push(Msg::ERROR, 'ユーザーIDは半角英数字入力してください');
                $res = false;
            }
        }

        return $res;
    }

    public static function validatePwd($val)
    {
        $res = true;

        if (empty($val)) {
            Msg::push(Msg::ERROR, 'パスワードを入力してください');
        } else {
            if (strlen($val) < 4) {
                Msg::push(Msg::ERROR, 'パスワードは4桁以上で入力してください。');
                $res = false;
            }

            if (!is_alnum($val)) {
                Msg::push(Msg::ERROR, 'パスワードは半角英数字で入力してください');
                $res = false;
            }
        }

        return $res;
    }

    public function isValidPwd()
    {
        return static::validatePwd($this->pwd);
    }

    public static function validateNickname($val)
    {
        $res = true;

        if (empty($val)) {
            Msg::push(Msg::ERROR, "ニックネームを入力してください");
            $res = false;
        } else {
            if (mb_strlen($val) > 10) {
                Msg::push(Msg::ERROR, 'ニックネームは10桁以下で入力してください');
                $res = false;
            }
        }
    }

    public function isValidNicknae()
    {
        return static::validateNickname($this->nickname);
    }
}
