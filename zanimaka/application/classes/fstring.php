<?php
defined('SYSPATH') or die('No direct script access.');

class FString {

    public static function kbMb($s){
	if($s > 1048576){
	    return round(($s / 1048576), 2).' Мб';
	}
	if($s > 1024){
	    return round(($s / 1024), 2).' Кб';
	}
    }
    
}