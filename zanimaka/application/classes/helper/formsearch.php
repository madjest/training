<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_FormSearch {

    public function get($engage = null) {
	return View::factory('helpers/form_search');
    }

}

?>