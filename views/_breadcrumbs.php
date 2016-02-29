<ol class="breadcrumb">
    <li><a href="<?php echo $url->generate('index') ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>

    <?php $count = 0 ?>
    <?php foreach ($breadcrumbs as $path => $label): ?>
        <?php $count++ ?>
        <?php $isActive = count($breadcrumbs) === $count ?>

        <li<?php if ($isActive): ?> class="active"<?php endif; ?>>
            <?php if ($isActive): ?>
                <?php echo $label ?>
            <?php else: ?>
                <a href="<?php echo $path ?>">
                    <?php echo $label ?>
                </a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ol>
