<div class="raspi-security-dashboard">
    <?php foreach ($pis as $pi => $fqdn): ?>
        <div class="col-sm-8 col-md-6">
            <div class="thumbnail">
                <?php $lastSnapImageUrl = $url->generate('/motion-images/' . $pi . '/lastsnap.jpg') ?>

                <a
                    href="<?php echo $lastSnapImageUrl ?>"
                    class="view-stream"
                    data-pi="<?php echo $pi ?>"
                    data-stream-url="http://<?php echo $pis[$pi] ?>:8081"
                >
                    <img
                        src="http://<?php echo $pis[$pi] ?>:8081"
                        class="lastsnap"
                        alt="<?php echo $pi ?>"
                    >
                </a>
                <div class="caption">
                    <h3>
                        <a href="<?php echo $url->generate('dashboard', ['pi' => $pi]) ?>">
                            <?php echo $pi ?>
                        </a>
                    </h3>
                    <p>
                        <a
                            href="<?php echo $url->generate('stream', ['pi' => $pi]) ?>"
                            class="btn btn-default view-stream"
                            data-pi="<?php echo $pi ?>"
                            data-stream-url="http://<?php echo $fqdn ?>:8081/"
                            role="button"
                        >
                            <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
                            Stream
                        </a>

                        <a
                            href="<?php echo $url->generate('snapshot', ['pi' => $pi]) ?>"
                            class="btn btn-default view-snapshot"
                            data-pi="<?php echo $pi ?>"
                            data-image-url="<?php echo $lastSnapImageUrl ?>"
                            role="button"
                        >
                            <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                            Image
                        </a>

                        <a
                            href="<?php echo $url->generate('history', ['pi' => $pi]) ?>"
                            class="btn btn-default"
                            role="button"
                        >
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            History
                        </a>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
