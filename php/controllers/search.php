<?php
// function get()
// {
//     $search_topic = get_param('search_topic', false);
//     echo $search_topic;

//     if(Auth::searchTopic($search_topic)) {

//         Msg::push(Msg::INFO, '以下のトピックが見つかりました');

//     } else {
//         redirect(GO_REFERER);
//     }

//     // redirect('topic/detail?topic_id=' . $search_topic);
// }

use db\TopicQuery;
use lib\Msg;

$search_topic = get_param('search_topic', false, false);
?>
<div class="container">
<?php
if($search_topic) {
    $topics_by_search = TopicQuery::searchTopicQuery($search_topic);
?>
    <h2>検索結果</h2>
    <?php foreach($topics_by_search as $topic_by_search) { ?>
    <div class="search=result">
        <p><?php echo "{$topic_by_search->title}" ?></p>
    </div>
    <?php 
    } 
} else {
    Msg::push(Msg::ERROR, 'トピックが見つかりませんでした');
}
?>
</div>

