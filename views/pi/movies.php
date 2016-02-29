<?php

$currentBreadcrumbsLabel = 'Movies';

include '_header.php';

?>

<?php if ($files): ?>
    <?php foreach ($files as $movie): ?>
        <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
                <div class="embed-responsive embed-responsive-4by3 iframe-link">
                    <object data="<?php echo $movie['url'] ?>"><?php echo $movie['url'] ?></object>
                    <a
                        href="<?php echo $url->generate('embed', ['pi' => $currentPi, 'type' => 'movie', 'url' => $movie['url']]) ?>?url=<?php echo $movie['url'] ?>"
                        class="iframe-link view-movie"
                        data-pi="<?php echo $currentPi ?>"
                        data-movie-url="<?php echo $movie['url'] ?>"
                    ></a>
                </div>
                <div class="caption">
                    <p><?php echo $movie['createdAt']->format('m/d/Y h:i:s A') ?></hp>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="alert alert-info" role="alert">No movies have been recorded yet.</div>
<?php endif; ?>

<?php include '_pagination.php' ?>
