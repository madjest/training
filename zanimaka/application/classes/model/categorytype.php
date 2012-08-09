<?php
defined('SYSPATH') or die('No direct script access.');

class Model_CategoryType extends ORM {
    protected $_table_name  = 'category_type';
    
    public function findTypes(){
	return $this->find_all();
    }

}