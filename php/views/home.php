<?php 
namespace view\home;


function index($topics) {
    $topics = escape($topics);
    
    $topic = array_shift($topics);
    \partials\topic_header_item($topic, true);
    
    ?>
    <ul class="container">
        <?php
        foreach($topics as $topic) {
            $url = get_url('topic/detail?topic_id=' . $topic->id);
            \partials\topic_list_item($topic, $url, false);
        }
        ?>
    </ul>
<?php }?>

<?php
function search_home($topics_by_search) {
?>
    <h2>検索結果</h2>
    <?php foreach($topics_by_search as $topic_by_search) { ?>
        <?php 
            $url = get_url('topic/detail?topic_id=' . $topic_by_search->id);
            \partials\topic_list_item($topic_by_search, $url, false);
        ?>
    <?php } ?>
<?php
}
?>


