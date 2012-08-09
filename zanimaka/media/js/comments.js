(function($) {
    $.fn.createComments = function(params) {
	this.click(function(){
	    $.ajax({
		url: '/ajax/comments/create',
		type: 'POST',
		dataType: 'json',
		data: {
		    message: $('#message').val()
		    , e_id: params.e_id
		},
		success: function(data){
		    if('ok' == data.status){
			add_comment(data);
		    }
		}
	    });
	    return false;
	});
    }
    
    function add_comment(data){
	$(".comment.clear")
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
})(jQuery);