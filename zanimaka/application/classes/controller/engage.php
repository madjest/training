<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Engage extends Controller_FrontTemplate {

    public function userAccess(){
	return array(
	    'edit' => array('admin','manager')
	    ,'add'  => array('admin','manager')
	);
    }


    private function action_form() {
	if ($_POST) { {
		$values = $_POST;
	    }try {
		$this->action_save($values);
	    } catch (ORM_Validation_Exception $e) {
		$this->validateErrors = $e->errors('models');
	    }
	}

	$engage = ORM::factory('engage');

	if ($id = $this->request->param('id')) {
	    $engage->findFromId($id);
	}

	$this->template->content = View::factory('engage/form')
		->set('errors', $this->validateErrors)
		->set('engage', $engage)
	;
    }    

    public function action_index() {
	return null;
    }

    public function action_view() {
	$engage = ORM::factory('engage');

	if ($id = $this->request->param('id')) {
	    $engage->findFromId($id);
	}

	$this->template->content = View::factory('engage/index')
		->set('engage', $engage)
	;
    }

    public function action_add() {
	//$this->user->getRole()->name
	$this->action_form();
    }

    public function action_edit() {	
	$this->action_setCover(Helper::getVar('photocover','get'));
	$this->action_delPhoto(Helper::getVar('photodel','get'));
	$this->action_form();
    }

    public function action_delete() {
	$engage = ORM::factory('engage');

	if ($id = $this->request->param('id')) {
	    $engage->findFromId($id);
	    $engage->delete();
	    $this->request->redirect('/list');
	}
    }
    
    public function action_save($values) {
	$result = ORM::factory('engage')->saveEngage($values);
	$this->request->redirect('/engage/view/' . $result->id);
    }
    
    public function action_setCover($photo_id) {
	if(empty($photo_id)){
	    return false;
	}
	$this->getEngage()->setCover($photo_id);
    }
    
    public function action_delPhoto($photo_id) {
	if(empty($photo_id)){
	    return false;
	}
	$this->getEngage()->delPhoto($photo_id);
    }
    
    private function getEngage(){
	$engage = ORM::factory('engage');
	$engage->findFromId($this->request->param('id'));
	return $engage;
    }

}