(function($) {  
    $.fn.slider = function(params) {
	this.each(function () {
	    var t = $(this);
	    t.mouseenter(function(){
		t.toggleClass('enter');
	    }).mouseleave(function(){
		t.toggleClass('enter');
	    });
	    
	    t.click(function(){
		var slider = $('#' + t.attr('link'));
		var openheight = t.attr('openheight');
		if(slider.is(':visible')){
		    setUserState('searchSlider',false);
		    slider.animate({
			height: 0
		    }, 300, function(){
			slider.hide()
		    });
		}else{
		    setUserState('searchSlider',true);
		    slider.show();
		    slider.animate({
			height: openheight
		    }, 300 );
		}
	    });
	});
    }
})(jQuery);

jQuery(document).ready(function($) {
    $("div.sliderlink").slider();
});

