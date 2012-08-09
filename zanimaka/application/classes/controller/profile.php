<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_FrontTemplate {

    public function action_index() {
	if ($_POST) { {
		$this->user->values($_POST);
	    }try {
		$this->user->setAvatar($_FILES['avatar']);
		$this->user->updateProfile($_POST);
		$this->request->redirect('/profile');
	    } catch (ORM_Validation_Exception $e) {
		$this->validateErrors = $e->errors('models');
	    }
	}
	$this->template->content = View::factory('profile/index')
		->set('errors', $this->validateErrors)
		->set('user', $this->user);
    }

}