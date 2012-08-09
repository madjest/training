<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Role extends ORM {

	// Relationships
	protected $_has_many = array('users' => array('through' => 'roles_users'));

	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
			),
			'description' => array(
				array('max_length', array(':value', 255)),
			)
		);
	}

} // End Role Model