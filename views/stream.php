<?php

$breadcrumbs = [
    '/pi/'.$currentPi => $currentPi,
    null => 'Stream',
];

include '_breadcrumbs.php';

?>

<img style="-webkit-user-select: none" src="http://<?php echo $pis[$currentPi] ?>:8081" width="100%" />
