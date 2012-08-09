<?php

defined('SYSPATH') or die('No direct script access.');

class Helper {

    public static function paste($name, $params = null) {
	return View::factory('helpers/' . $name, $params);
    }

    public static function factory($helper) {
	$helper = 'Helper_' . ucfirst($helper);
	return new $helper();
    }

    //Возвращает элемент массива $_POST или $_GET, с индексом $name
    public static function getVar($name, $method = 'post', $default = null) {
	if ('post' == $method) {
	    $var = (isset($_POST[$name])) ? $_POST[$name] : $default;
	}
	if ('get' == $method) {
	    $var = (isset($_GET[$name])) ? $_GET[$name] : $default;
	}	
	if (!empty($var)) {
	    $result = str_replace('\'','\\\'',$var);
	    $result = str_replace('"','\"',$result);
	    $result = str_replace('<','',$result);
	    $result = str_replace('>','',$result);
	    return $result;
	} else {
	    return $default;
	}
    }
    
    public static function getBackLink() {
	return $_SERVER['HTTP_REFERER'];
    }
    
    public static function getSetectCategory($ins = null){
	if(null == $ins){
	    $ins = Helper::factory('list')->getParamsSearch('tags');
	}
	$select = ORM::factory('category')->findCategoryFromIns($ins);
	if(empty($select)){
	    return array();
	}
	$result = array();
	foreach($select as $s){
	    $result[] = $s->title;
	}
	return $result;
    }    
}

?>
