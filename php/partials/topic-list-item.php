<?php

namespace partials;

function topic_list_item($topic, $title_url, $with_status)
{
    $published_label = $topic->published ? '公開' : '非公開';
    $published_cls = $topic->published ? 'badge-primary' : 'badge-danger';

?>
    <li class="topic-card row bg-white shadow-sm mb-3 rounded p-3">
        <div class="col-md-8 d-flex align-items-center">
            <h2 class="mb-2 mb-md-0">
                <?php if ($with_status) : ?>
                    <span class="badge status-badge mr-2 <?php echo $published_cls; ?>"><?php echo $published_label; ?></span>
                <?php endif; ?>
                <a class="topic-title" href="<?php echo $title_url; ?>"><?php echo $topic->title ?></a>
            </h2>
        </div>
        <div class="col-md-4">
            <div class="topic-stats text-center row g-2">
                <div class="col-4 topic-stats-item">
                    <div class="topic-stats-number"><?php echo $topic->views ?></div>
                    <div class="topic-stats-label">Views</div>
                </div>
                <div class="col-4 topic-stats-item">
                    <div class="topic-stats-number text-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up-fill svg-icon" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                        </svg>
                        <?php echo $topic->likes ?>
                    </div>
                    <div class="topic-stats-label">Likes</div>
                </div>
                <div class="col-4 topic-stats-item">
                    <div class="topic-stats-number text-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-down-fill svg-icon" viewBox="0 0 16 16">
                            <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                        </svg>
                        <?php echo $topic->dislikes ?>
                    </div>
                    <div class="topic-stats-label">Dislikes</div>
                </div>
            </div>
        </div>
    </li>
<?php
}
?>