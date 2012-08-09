<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_List extends Controller_FrontTemplate {
    
    public function userAccess(){
	return array(
	    'edit' => array('admin','manager')
	    ,'my'  => array('admin','manager','login')
	);
    }    

    public function action_index() {
	$params['search'] = Helper::factory('list')->getParamsSearch('search'); //Присваиваает $_GET['search'] 
	$params['tags'] = Helper::factory('list')->getParamsSearch('tags');
	$params['sort'] = Helper::factory('list')->getParamsSearch('sort');
	$engages = ORM::factory('engage')->findAll($params);

	$this->template->content = View::factory('list/index')
		->set('engages', $engages);
    }

    public function action_my() {
	$engages_fav = ORM::factory('engage')->getFavForUser($this->user);
	$engages_author = ORM::factory('engage')->getByUser($this->user);
	$this->template->content = View::factory('list/my')
		->set('engages_fav', $engages_fav)
		->set('engages_author', $engages_author)
	;
    }

}