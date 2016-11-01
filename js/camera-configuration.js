/*
 * Custom Camera configuration
 *
 *
 */
jQuery(document).ready( function($){
    $('#camera_wrap').camera({
        height: artfolio_IsLargeResolution() ? '500px' : '300px',
        loader: 'bar',
        pagination: true,
        thumbnails: false,
        time: 4500,
        fx: 'simpleFade'
    });
});

function artfolio_IsLargeResolution() {

    return (jQuery(window).width() >= 800);
}