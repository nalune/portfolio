jQuery(document).ready(function($) {
    
    jQuery.fx.interval = 30;
    
    var maxWidth = 600;
    
    if( $(window).width() > maxWidth )
    {
    
    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = 700;             

            if(y_scroll_pos > scroll_pos_test) {


                  animateBars();

            }      
        });
        
       
    }
    
    else
    {
        animateBars();
    }
    
     $('li.fade').hide().each(function( i ) {
                $(this).delay( i * 800 ).fadeIn();
            });

function animateBars()
{
    $('.skillbar').each(function(){
                jQuery(this).find('.skillbar-bar').animate({
                        width:jQuery(this).attr('data-percent')
                },3000);
            }); 
}

});
