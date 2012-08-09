<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_FrontTemplate extends Controller_Template {

	public $template = 'layout-front/index';

	public function before() {
		parent::before();
		$this->auth = Auth::instance();
		$this->user = $this->auth->get_user();
		$this->validateErrors = array();
		
		
		if(method_exists($this, 'userAccess')){		
		    $this->acl($this->userAccess());
		}

		View::set_global('request', $this->request);
		View::set_global('user', $this->user);

		if ($this->auto_render) {
			$this->template->title = Kohana::$config->load('config.title');
			$this->template->meta_keywords = Kohana::$config->load('config.meta_keywords');
			$this->template->meta_description = Kohana::$config->load('config.meta_description');
			$this->template->meta_copywrite = Kohana::$config->load('config.meta_copywrite');

			$this->template->styles = array();
			$this->template->scripts = array();

			$this->template->header = View::factory('layout-front/header');
			$this->template->footer = View::factory('layout-front/footer');
			$this->template->content = View::factory('index/index');
		}
	}

	public function after() {
		if ($this->auto_render) {
			$styles = array(
			    'media/css/style.css' => 'screen'
			    ,'media/css/colorbox.css' => 'screen'
			    ,'media/css/jquery.jgrowl.css' => 'screen'
			);
			$scripts = array(
			    'media/js/commons.js'
			    ,'media/js/button.js'
			    ,'media/js/slider.js'
			    ,'media/js/comments.js'
			    ,'media/js/user.js'
			    ,'media/js/func.js'
			    ,'media/js/galleria-1.2.5.min.js'			    
			    ,'media/js/jquery.jgrowl.js'			    
			    ,'media/js/jquery.colorbox-min.js'
			    ,'media/js/jquery-1.7.min.js'
			);

			$this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
			$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
		}
		parent::after();
	}
	
	public function acl($userAccess = null){
	    $action = $this->request->action();

	    if(isset($userAccess[$action])){
		if(false == $this->user){
		    $userRole = 'quest';
		}else{
		    $userRole = $this->user->getRole()->name;
		}
				
		if(false === array_search($userRole, $userAccess[$action])){
		    $this->request->redirect('error/404');
		    return false;
		}
	    }
	    return true;
	}

}