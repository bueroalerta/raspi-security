<ul class="nav nav-tabs">
    <li role="presentation"<?php if ($type === 'images'): ?> class="active"<?php endif; ?>>
        <a href="<?php echo $url->generate('history_type', ['pi' => $currentPi, 'type' => 'images']) ?>">
            <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
            Images
        </a>
    </li>
    <li role="presentation"<?php if ($type === 'movies'): ?> class="active"<?php endif; ?>>
        <a href="<?php echo $url->generate('history_type', ['pi' => $currentPi, 'type' => 'movies']) ?>">
            <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
            Movies
        </a>
    </li>
    <li role="presentation"<?php if ($type === 'timelapse'): ?> class="active"<?php endif; ?>>
        <a href="<?php echo $url->generate('history_type', ['pi' => $currentPi, 'type' => 'timelapse']) ?>">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
            Timelapses
        </a>
    </li>
</ul>

<br/>
