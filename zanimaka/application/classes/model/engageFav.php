<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_EngageComments extends ORM {
    
    protected $_table_name = 'engage_fav';
     
    protected $_belongs_to = array(
        'fav' => array('model' => 'user', 'foreign_key' => 'user_id')
    );    

}