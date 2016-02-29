$(function() {
    $('.view-snapshot').on('click', function(e) {
        var pi = $(this).data('pi');
        var title = pi + ' snapshot';
        var img = '<img src="' + $(this).data('image-url') + '" width="100%" class="lastsnap" />';

        $('#raspi-security-modal .modal-content .modal-body').html(img);
        $('#raspi-security-modal .modal-content .modal-title').html(title);
        $('#raspi-security-modal').modal('show');

        e.preventDefault();
    });

    $('.view-stream').on('click', function(e) {
        var pi = $(this).data('pi');
        var title = pi + ' live stream';

        var iframe = '<img src="' + $(this).data('stream-url') + '" width="100%" frameborder="0" />';

        $('#raspi-security-modal .modal-content .modal-body').html(iframe);
        $('#raspi-security-modal .modal-content .modal-title').html(title);
        $('#raspi-security-modal').modal('show');

        e.preventDefault();
    });

    $('.view-movie').on('click', function(e) {
        var pi = $(this).data('pi');
        var title = pi + ' movie';

        var iframe = '<iframe src="' + $(this).data('movie-url') + '" width="100%" height="720" frameborder="0"></iframe>';

        $('#raspi-security-modal .modal-content .modal-body').html(iframe);
        $('#raspi-security-modal .modal-content .modal-title').html(title);
        $('#raspi-security-modal').modal('show');

        e.preventDefault();
    });
});
