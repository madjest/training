<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_Debug {
    
    private static $options = array('maxObjectDepth' => 5,
                 'maxArrayDepth' => 5,
                 'maxDepth' => 10,
                 'useNativeJsonEncode' => true,
                 'includeLineNumbers' => true);
    
    function __construct() {
	$fileClass = 'application/classes/exception/phpconsole/phpconsole.php';
	if (!file_exists($fileClass)) {
	    return false;
	}
	require_once $fileClass;
	PhpConsole::start(true, true, dirname(__FILE__));
    }    

    public function log($message, $tags = 'log'){
	return debug_exp($message, $tags);
    }
    
    public function info($message){
	return debug_exp($message, 'info');
    }    
    
    public function warn($message){
	return debug_exp($message, 'warning');
    }    
    
    public function error($message){
	return debug_exp($message, 'error');
    }
}

?>