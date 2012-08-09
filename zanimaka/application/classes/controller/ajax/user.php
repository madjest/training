<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_User extends Controller_Ajax {

    public function action_addFav() {
	$id = Helper::getVar('id','post');
	ORM::factory('engage',$id)->addFavForUser($this->user);
	return true;
    }
    
    public function action_removeFav() {
	$id = Helper::getVar('id','post');
	ORM::factory('engage',$id)->removeFavForUser($this->user);
	return true;
    }    

}

?>
