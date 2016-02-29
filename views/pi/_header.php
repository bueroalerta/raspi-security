<?php

$breadcrumbs = [
    $url->generate('dashboard', ['pi' => $currentPi]) => $currentPi,
    null => $currentBreadcrumbsLabel,
];

include __DIR__.'/../_breadcrumbs.php';

include '_tabs.php';

?>
