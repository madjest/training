<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Comments extends Controller_Ajax {

    public function action_create() {
	$message = Helper::getVar('message');
	$e_id = Helper::getVar('e_id');
	if (empty($message) or empty($e_id)) {
	    $this->error = 'Не все поля заполнены';
	    return false;
	}
	$date = FDate::create();

	$comment = ORM::factory('engagecomments');
	$comment->user_id = $this->user->id;
	$comment->e_id = Helper::getVar('e_id');
	$comment->message = Helper::getVar('message');
	$comment->create = $date->toSql();
	$comment->create();

	$this->done['message'] = $comment->message;
	$this->done['create'] = $date->toPeopleTime(true);

	return true;
    }

}

?>
