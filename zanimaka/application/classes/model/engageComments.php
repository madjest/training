<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_EngageComments extends ORM {
    
    protected $_table_name = 'engage_comments';
     
    protected $_belongs_to = array(
        'user' => array('model' => 'user', 'foreign_key' => 'user_id')
    );    

}