<?php
namespace controller\search;

use db\TopicQuery;
use lib\Msg;

function get()
{
    \view\home_search\index();
}

function post() {
    $search_topic = get_param('search_topic', '');

    if($search_topic) {
        $topics_by_search = TopicQuery::searchTopicQuery($search_topic);
        \view\home\search_home($topics_by_search);
        Msg::push(Msg::INFO, '以下のトピックが見つかりました');
    } else {
        Msg::push(Msg::ERROR, '検索に合致するトピックは見つかりませんでした');
        redirect(GO_REFERER);
    }
}

