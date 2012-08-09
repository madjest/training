<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_Images {
    
    function __construct() {
	$fileClass = 'application/classes/exception/images/WideImage/WideImage.php';
	if (!file_exists($fileClass)) {
	    return false;
	}
	require_once $fileClass;
    }
    
    public function load($image) {
	return WideImage::load($image);
    }

}

?>