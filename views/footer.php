                <div id="raspi-security-modal" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg modal-raspi-security">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"></h4>
                            </div>

                            <div class="modal-body"></div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div><!-- /.motion -->
        </div><!-- /.container -->

        <footer class="footer">
            <div class="container">
                <p class="text-muted">
                    <div class="version pull-left">RasPi Security v<?php echo $version ?></div>
                    <div class="brand pull-right">
                        <a href="http://jwage.com" target="_blank">
                            <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>
                            WageNet
                        </a>
                    </div>
                </p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <script src="<?php echo $baseUrl ?>/js/raspi-security.js"></script>
    </body>
</html>
