<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {
    protected $_table_name  = 'category';
    
    static private $findCategoryFromIns = null;
    
    public function findCategory(){
	return $this->find_all();
    }
    
    public function findCategoryForTypes(){
	$result = array();
	foreach($this->findCategory() as $cat){
	    $result[$cat->type_id][] = $cat;
	}
	return $result;
    }    
    
    public function saveForEngage($eId, $tags){
	ORM::factory('engagecategory')->deleteForId($eId);
	foreach($tags as $tag_id => $value){
	    if(1 == $value){
		$tag = ORM::factory('engagecategory');
		$tag->e_id = $eId;
		$tag->c_id = $tag_id;
		$tag->create();
	    }
	}
    }
    
     public function findCategoryFromIns($ins){
	if(null == self::$findCategoryFromIns){
	    if(count($ins) == 0){
		return null;
	    }
	    $active_id = array();
	    foreach($ins as $k => $i){
		if(1 == $i){
		    $active_id[] = $k;
		}
	    }
	    if(0 == count($active_id)){
		self::$findCategoryFromIns = array();
	    }else{
		self::$findCategoryFromIns = $this->where('id','in',$active_id)->find_all();
	    }
	}
	return self::$findCategoryFromIns;
    }

}