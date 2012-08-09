<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_UserEngage extends ORM {
    
    protected $_table_name = 'user_engages';
     
    protected $_belongs_to = array(
        'fav' => array('model' => 'user', 'foreign_key' => 'user_id')
    );    

}