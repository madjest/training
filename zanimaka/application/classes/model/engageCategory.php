<?php
defined('SYSPATH') or die('No direct script access.');

class Model_EngageCategory extends ORM {
    protected $_table_name  = 'engage_category';
    
    public function deleteForId($eId){
	DB::delete($this->_table_name)
		->where('e_id', '=', $eId)
		->execute();
    }
    
    public function getTableName(){
	return $this->_table_name;
    }
    

}