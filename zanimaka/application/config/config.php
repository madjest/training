<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'url'   => 'http://zanimaka.lc'
    
	,'title' => 'Занимака'
        ,'meta_keywords' => 'Ключевые слова'
        ,'meta_description' => 'Описание'
        ,'meta_copywrite' => 'Копирайт'
    
	,'user-token-key' => 'gravicapa'
    
	,'engage_dir' => 'media'.DS.'photos'
    
	,'engage_url' => 'media/photos'	
    
	,'engage' => array(
	    'countphoto' => 5
	    ,'nofoto' => '/media/images/nofoto.gif'
	    ,'photo' => array(
		'width' => 500
		,'height' => 500
	    )
	    ,'thumb' => array(
		'width' => 150
		,'height' => 150
		,'cropLeft' => 'center'
		,'cropTop' => 'top'
	    )
	    ,'min' => array(
		'width' => 70
		,'height' => 70
		,'cropLeft' => 'center'
		,'cropTop' => 'top'
	    )	    
	)
    
    	,'user_dir' => 'media'.DS.'users'
    	,'user_url' => 'media/users'
        ,'user'	=> array(
	    'avatar' => array(
		'width' => 70
		,'height' => 70
		,'cropLeft' => 'center'
		,'cropTop' => 'top'		
		,'ext' => 'jpg'		
	    )
	)
	
);