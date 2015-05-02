jQuery(document).ready(function($) {
    
    
    
 $('.caption').hide().removeClass('caption').addClass('caption-js');

$('.project').hover(function(){
    $(this).find('.caption-js').fadeToggle("slow");
});

$("div.label-inside input, div.label-inside textarea").focus(function(){
		var label = $("#" + this.id + "_label_hidden").val();
		if( this.value === label ){
			this.value = '';
		}
	});

	$("div.label-inside input, div.label-inside textarea").blur(function(){
		var label = $("#" + this.id + "_label_hidden").val();
		if( this.value === '' ){
			this.value = label;
		}
	});
        

});


