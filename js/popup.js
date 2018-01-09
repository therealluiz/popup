$(function() {    
    $('[data-popup-close]').on('click', function(e)  {
        var popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});