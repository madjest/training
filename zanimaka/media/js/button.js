(function($) {
    $.fn.buttonLive = function(params) {
	this.each(function () {
	    var t = $(this);
	    t.mouseenter(function(){
		t.toggleClass('enter');
	    }).mouseleave(function(){
		t.toggleClass('enter');
	    }).mouseup(function(){
		t.toggleClass('press');
	    }).mousedown(function(){
		t.toggleClass('press');
	    }).mouseleave(function(){
		t.removeClass('press');
	    });	
	});
    }
    
    $.fn.buttonCheck = function(params) {
	this.each(function () {
	    var t = $(this);
	    t.click(function(){
		t.toggleClass('check');
		if(t.hasClass('check')){
		    t.find('input').val(1);    
		}else{
		    t.find('input').val(0);
		}
	    })
	});
    }
    
    $.fn.buttonRadio = function(params) {
	this.each(function () {
	    var t = $(this);
	    if(1 == t.find('input').val()){
		t.toggleClass('check');
	    }
	    t.click(function(){
		$('.sort').removeClass('check');
		$('.sort').find('input').val(0);
		t.addClass('check');
		t.find('input').val(1);
	    })
	});
    }    
})(jQuery);

jQuery(document).ready(function($) {
    $("div.button").buttonLive();
    $("div.tag").buttonLive();
    $("div.tag").buttonCheck();    
    
    $('div#logo').click(function(){
	document.location = '/';
    })
});

