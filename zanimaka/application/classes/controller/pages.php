<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pages extends Controller_FrontTemplate {

	public function action_index() {
	    $url = $this->request->param('url');
	    if('index' == $url){
		$this->request->redirect('/');
	    }
            $this->template->content = View::factory('pages/'.$url);
	}

}