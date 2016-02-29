<?php

$currentBreadcrumbsLabel = 'Timelapses';

include '_header.php';

?>

<?php if ($files): ?>
    <table class="table">
        <thead>
            <tr>
                <th>File Name</th>
                <th>Created</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($files as $image): ?>
            <tr>
                <td>
                    <a href="<?php echo $image['url'] ?>">
                        <?php echo $image['fileName'] ?>
                    </a>
                </td>
                <td><?php echo $image['createdAt']->format('m/d/Y') ?></td>
                <td><?php echo $image['size'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert alert-info" role="alert">No timelapses have been recorded yet.</div>
<?php endif; ?>


<?php include '_pagination.php' ?>
