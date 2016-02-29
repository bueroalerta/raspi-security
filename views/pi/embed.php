<?php

$currentBreadcrumbsLabel = 'View '.ucfirst($type);

include '_header.php';

?>


<?php if ($type === 'image'): ?>
    <img src="<?php echo $embedUrl ?>" width="100%" />
<?php elseif ($type === 'movie'): ?>
    <iframe src="<?php echo $embedUrl ?>" width="100%" height="850" frameborder="0" />
<?php endif; ?>
