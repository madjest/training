<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_Debug {
    
    private static $options = array('maxObjectDepth' => 5,
                 'maxArrayDepth' => 5,
                 'maxDepth' => 10,
                 'useNativeJsonEncode' => true,
                 'includeLineNumbers' => true);
    
    function __construct() {
	$fileClass = 'application/classes/exception/phpconsole/FirePHPCore/fb.php';
	if (!file_exists($fileClass)) {
	    return false;
	}
	require_once $fileClass;
	FB::setOptions(self::$options);
    }    

    public function log($message = 'tags'){
	return FB::log($message);
    }
    
    public function info($message = 'tags'){
	return FB::info($message);
    }    
    
    public function warn($message = 'tags'){
	return FB::warn($message);
    }    
    
    public function error($message = 'tags'){
	return FB::error($message);
    }
}

?>