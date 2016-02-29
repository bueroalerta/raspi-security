<nav>
    <ul class="pager">
        <?php if ($prevPage): ?>
            <li><a href="<?php echo $url->generate('history', ['pi' => $currentPi, 'type' => $type, 'page' => $prevPage]) ?>">Previous</a></li>
        <?php endif; ?>

        <?php if (count($files) >= $perPage): ?>
            <li><a href="<?php echo $url->generate('history', ['pi' => $currentPi, 'type' => $type, 'page' => $nextPage]) ?>">Next</a></li>
        <?php endif; ?>
    </ul>
</nav>
