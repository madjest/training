<?php defined('SYSPATH') or die('No direct script access.');
if(Kohana::$environment !== Kohana::PRODUCTION)
{	
	// Static file serving (CSS, JS, images)
	Route::set('developerbar/media', 'developerbar/media(/<file>)', array('file' => '.+'))
		->defaults(array(
			'controller' => 'developerbar',
			'file'       => NULL,
		));

	// Load Developerbar :)
	register_shutdown_function('developerbar::render');
}