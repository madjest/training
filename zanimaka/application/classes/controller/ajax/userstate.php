<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_UserState extends Controller_Ajax {

    public function action_set() {
	$key = Helper::getVar('key','post');
	$value = Helper::getVar('value','post');
	Helper::factory('userState')->set($key,$value,false);
	return true;
    }

}

?>
