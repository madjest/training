<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_List {

  //Возвращает элемент $_GET[$type] 
    public function getParamsSearch($type = 'tags'){
	return Helper::getVar($type, 'get');
    }
    
    public function isParamsSearch($type, $id){
	$var = Helper::getVar($type, 'get');
	if(null == $var and 0 == $id){
	    return 1;
	}
	if(null !== $var and false === array_search(1, $var) and 0 == $id){
	    return 1;
	}
	return $var[$id];
    }

}

?>