jQuery(document).ready(function($) {
    $(".colorbox").colorbox({
	rel:'colorbox'
    });
    
    // Initialize Galleria
    Galleria.loadTheme('/media/js/galleria_themes/galleria.classic.min.js');
    
    $('#galleria').galleria({
	lightbox: true
	,
	width: '530px'
    //,autoplay: 5000
    //	,extend: function(options) {
    //	    var gallery = this; // "this" is the gallery instance
    //	    gallery.play(5000); // call the play method
    //	}
    });
    
    $('.controlfav').controlFav();    

    
});

