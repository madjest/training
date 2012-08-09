<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_BottomCategory {

    public function selector($select = array()) {
	$categoryType = ORM::factory('categoryType')->find_all();
	$category = ORM::factory('category')->findCategoryForTypes();
	return View::factory('helpers/bottom_category')
			->set('categoryType', $categoryType)
			->set('category', $category)
			->set('select', $select)
	;
    }

}

?>