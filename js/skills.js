jQuery(document).ready(function($) {
    
    jQuery.fx.interval = 30;
    
    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = 800;             

        if(y_scroll_pos > scroll_pos_test) {
            
            
            $('.skillbar').each(function(){
                jQuery(this).find('.skillbar-bar').animate({
                        width:jQuery(this).attr('data-percent')
                },4000);
            });   
            
        }
        
});
   
     $('li.fade').hide().each(function( i ) {
                $(this).delay( i * 800 ).fadeIn();
            });


   
});
