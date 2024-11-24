<?php
namespace model;

use lib\Msg;

class CommentModel extends AbstractModel {
    public int $id;
    public int $topic_id;
    public int $agree;
    public string $body;
    public string $user_id;
    public string $nickname;
    public int $del_flg;
    public ?string $updated_by;
    public ?string $created_at;
    public ?string $updated_at;

    protected static $SESSION_NAME = '_comment';
}