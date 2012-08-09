<?php

abstract class Controller_Ajax extends Controller {
    
    public $error = null;
    public $done = array();

    public function before() {
	parent::before();
	$this->auth = Auth::instance();
	$this->user = $this->auth->get_user();

	if (!$this->request->is_ajax() AND Kohana::$environment == Kohana::PRODUCTION) {
	    throw new HTTP_Exception_403('non-ajax request!');
	}
	$this->request->headers['Content-Type'] = 'application/json; charset=utf-8';
    }

    public function after() {
	$json = array();
	if(!empty($this->error)){
	    $json['status'] = 'error';
	    $json['error'] = $this->error;
	}else{
	    $json = $this->done;
	    if(!isset($json['status'])){
		$json['status'] = 'ok';
	    }
	}
	echo json_encode($json);
	return true;
    }

}