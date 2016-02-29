<?php

$currentBreadcrumbsLabel = 'Images';

include '_header.php';

?>

<?php if ($files): ?>
    <?php foreach ($files as $image): ?>
        <div class="col-xs-6 col-md-3">
            <div class="thumbnail">
                <a
                    href="<?php echo $url->generate('embed', ['pi' => $currentPi, 'type' => 'image', 'url' => $image['url']]) ?>"
                    class="view-snapshot"
                    data-pi="<?php echo $currentPi ?>"
                    data-image-url="<?php echo $image['url'] ?>"
                >
                    <img src="<?php echo $image['url'] ?>" />
                </a>
                <div class="caption">
                    <p>
                        <span class="date"><?php echo $image['createdAt']->format('m/d/Y h:i:s A') ?></span>
                        <span class="size"><?php echo $image['size'] ?></span>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="alert alert-info" role="alert">No images have been recorded yet.</div>
<?php endif; ?>

<?php include '_pagination.php' ?>
