<?php

$type = null;
$pi = $currentPi;
$fqdn = $pis[$currentPi];

$breadcrumbs = [
    null => $currentPi,
];

include __DIR__.'/../_breadcrumbs.php';

include '_tabs.php';

?>

<div class="col-sm-8 col-md-12">
    <div class="thumbnail">
        <?php $lastSnapImageUrl = $url->generate('/motion-images/' . $pi . '/lastsnap.jpg') ?>

        <img
            src="http://<?php echo $pis[$pi] ?>:8081"
            alt="<?php echo $pi ?>"
            width="100%"
        >
    </div>
</div>
