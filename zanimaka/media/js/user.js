(function($) {
    $.fn.controlFav = function(params) {
	this.each(function() {
	    var element = $(this);
	    element.click(function(){
		if(element.hasClass('on')){
		    url = '/ajax/user/removefav';
		}else{
		    url = '/ajax/user/addfav';
		}
		$.ajax({
		    url: url,
		    type: 'POST',
		    dataType: 'json',
		    data: {
			id: element.attr('engage')
		    },
		    success: function(data){
			if('ok' == data.status){
			    if(element.hasClass('on')){
				element.removeClass('on');
				flash("Удалили из избранного");
			    }else{
				element.addClass('on');
				flash("Добавили в избранного");
			    }
			}
		    }
		});		
		
	    });
	    return this;
	});
    }
/*
	.clone()
	.removeClass('clear')
	.addClass('new')
	.appendTo(".comments")
	.find(".message")
	.text(data.message)
	.parent()
	.find(".date")
	.text(data.create)	
	.parent().parent().parent()
	.animate({
	    "opacity": "show"
	}, 500);
	
	$("#message").val('');
    }
    */
})(jQuery);