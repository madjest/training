<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Error extends Controller_Template {

    public $template = 'layout-front/index';
    /**
     * @var string
     */
    protected $_requested_page;

    /**
     * @var string
     */
    protected $_message;

    /**
     * Pre determine error display logic
     */
    public function before() {
	parent::before();

	$this->auth = Auth::instance();
	$this->user = $this->auth->get_user();
	$this->validateErrors = array();

	if (method_exists($this, 'userAccess')) {
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

    /**
     * Serves HTTP 404 error page
     */
    public function action_404() {
	$this->template->description = 'The requested page not found';
	$this->template->keywords = 'not found, 404';
	$this->template->title = 'Page not found';

	$this->template->content = View::factory('error/404')
		->set('error_message', $this->_message)
		->set('requested_page', $this->_requested_page);
    }

    /**
     * Serves HTTP 500 error page
     */
    public function action_500() {
	$this->template->description = 'Internal server error occured';
	$this->template->keywords = 'server error, 500, internal error, error';
	$this->template->title = 'Internal server error occured';

	$this->view = View::factory('error/500');
    }

}