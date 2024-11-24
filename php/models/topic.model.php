<?php 
namespace model;

use lib\Msg;

class TopicModel extends AbstractModel {
    public int $id;
    public string $title;
    public int $published;
    public int $views;
    public int $likes;
    public int $dislikes;
    public string $user_id;
    public string $nickname;
    public int $del_flg;
    public ?string $updated_by;
    public ?string $created_at;
    public ?string $updated_at;
    public string $content;

    protected static $SESSION_NAME = '_topic';

    public function isValidId() {
        return true;
    }

    public static function validateId($val) {
        return true;
    }
}