jQuery(function ($) {
    'use strict';
    var fs = ( $('#blueimp-gallery').attr('data-fullscreen') == '1' );
    var borderless = ( $('#blueimp-gallery').attr('data-useBootstrapModal') == '1' );
    $('#blueimp-gallery').data( 'fullScreen', fs );
    $('#blueimp-gallery').data( 'useBootstrapModal', !borderless );
    $('#blueimp-gallery').toggleClass('blueimp-gallery-controls', borderless);

    jQuery('.wpbgallery_download').click(function() {
        var active_index = jQuery('#blueimp-gallery ol').find('li.active').data('index');
        if(borderless==false)
        {
            var image = $('#blueimp-gallery div[data-index="'+active_index+'"] .modal-content ').find('img').attr('src');
        }
        else
        {
            var image = $('#blueimp-gallery .slides div[data-index="'+active_index+'"]').find('img').attr('src');
        }
        $('.wpbgallery_download').closest('a').attr('href', image);
    });


});
