<?php

namespace view\topic\detail;

function index($topic, $comments)
{
    $topic = escape($topic);
    $comments = escape($comments);

    \partials\topic_header_item($topic, false);
?>
    <ul class="list-unstyled">
        <?php foreach ($comments as $comment) : ?>
            <?php
            $agree_label = $comment->agree ? '賛成' : '反対';
            $agree_cls = $comment->agree ? 'badge-success' : 'badge-danger';
            $comment_type_class = $comment->agree ? 'agree-comment' : 'disagree-comment';
            ?>
            <li class="comment-card bg-white shadow-sm mb-3 rounded p-3 <?php echo $comment_type_class; ?>">
                <div class="d-flex align-items-start">
                    <span class="badge comment-badge mr-2 <?php echo $agree_cls; ?>"><?php echo $agree_label; ?></span>
                    <div>
                        <p class="comment-body mb-2"><?php echo $comment->body; ?></p>
                        <div class="comment-meta">
                            コメント by <span class="comment-nickname ms-1"><?php echo $comment->nickname; ?></span>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
}
