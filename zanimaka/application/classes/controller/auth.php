<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_FrontTemplate {

    public function before() {
	parent::before();
    }

    public function action_login() {
	if (Auth::instance()->logged_in()) {
	    return $this->request->redirect(Helper::getBackLink());
	}

	if ($_POST) {
	    $user = ORM::factory('user');
	    $status = Auth::instance()->login($_POST['username'], $_POST['password']);
	    if ($status) {
		return $this->request->redirect(Helper::getBackLink());
	    } else {
		//var_export('auth_error');
		return $this->request->redirect('/page/auth_error');
	    }
	}
	$this->template->content = View::factory('auth/login');
    }

    public function action_register() {
	if (Auth::instance()->logged_in() != 0) {
	    $this->request->redirect('page/already_register');
	}

	$errors = array();
	if ($_POST) { {
		$user = ORM::factory('user');
	    }try {
		$user->create_user($_POST, array('username', 'password', 'email',));
		$user->add('roles', ORM::factory('role')->where('name', '=', 'user')->find());
		Auth::instance()->login($_POST['username'], $_POST['password']);
		$this->request->redirect('page/welcome');
	    } catch (ORM_Validation_Exception $e) {
		$errors = $e->errors('models');
	    }
	}

	$this->template->content = View::factory('auth/register')
		->set('values', $_POST)
		->set('errors', $errors);
    }

    public function action_logout() {
	Auth::instance()->logout();
	return $this->request->redirect(Helper::getBackLink());
    }

    protected function _auto_nav() {
	
    }

}
