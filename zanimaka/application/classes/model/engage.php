<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Engage extends ORM {

    protected $_table_name = 'engage';
    static protected $category = null;
    protected $_belongs_to = array(
//        'user' => array('model' => 'user', 'foreign_key' => 'user_id')
//	'comments' => array('model' => 'comments', 'foreign_key' => 'e_id')
    );
    protected $_has_many = array(
	'comments' => array(
	    'model' => 'engageComments',
	    'foreign_key' => 'e_id',
	),
	'place' => array(
	    'model' => 'engagePlace',
	    'foreign_key' => 'e_id',
	),
    );

    //protected $_has_many = array('comments' => array('through' => 'roles_users'));

    public function rules() {
	return array(
	    'title' => array(
		array('not_empty'),
	    ),
	    'description' => array(
		array('not_empty'),
	    ),
	);
    }

    public function labels() {
	return array(
	    'title' => 'заголовок',
	    'description' => 'описание',
	);
    }

    public function findAll($params) {
	$where = array();
	$tags = $params['tags'];
	$tags_group = array(
	    0 => array(1, 2, 3)
	    , 1 => array(4, 5, 6)
	    , 2 => array(7, 8, 9)
	    , 3 => array(10, 11, 12)
	);
	if (!empty($params['tags']) and count($params['tags']) > 0) {
	    $where_tags = array();
	    foreach ($tags_group as $g => $group) {
		$tags_key = array();
		foreach ($group as $tag) {
		    if (1 == $tags[$tag]) {
			$tags_key[] = 'c1.c_id = ' . (int) $tag;
		    }
		}
		if (count($tags_key) > 0) {
		    $where_tags[] = '
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (' . implode(" OR ", $tags_key) . ')) > 0';
		}
	    }
	    if (count($where_tags) > 0) {
		$where[] = implode(" AND ", $where_tags);
	    }
	}

	if (!empty($params['search'])) {
	    $where[] = '(e.title LIKE ' . $this->_db->quote('%' . $params['search'] . '%')
		    . 'OR e.announce LIKE ' . $this->_db->quote('%' . $params['search'] . '%')
		    . 'OR e.description LIKE ' . $this->_db->quote('%' . $params['search'] . '%') . ')';
	}
	
	$sortType = array('title','rating','hits');
	$sortParams = null;
	if (count($params['sort']) > 0) {
	    foreach ($params['sort'] as $k => $sort) {
		if (1 == $sort) {
		    $sortParams = $sortType[$k].',';
		}
	    }
	}
	
	$sort = ' ORDER BY '.$sortParams.' e.title ';

	$where = (count($where) > 0) ? ' WHERE ' . implode(' and ', $where) : null;

	$query = '
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id) '
		. $where
		. $sort
	;
	


	$items = $this->_db->query(Database::SELECT, $query, 'Model_Engage');
	Helper::factory('debug')->log($query);
	return $items;
    }

    public function findFromId($id) {
	return $this->where('id', '=', $id)->find();
    }

    public function saveEngage($values) {
	$id = $values['id'];
	if (null != $id) {
	    $this->findFromId($id);
	}
	$this->values($values);
	$this->save();
	ORM::factory('photos')->savePhotos($this->id, $_FILES);
	ORM::factory('category')->saveForEngage($this->id, $values['tags']);
	return $this;
    }

    public function getPhotos() {
	return ORM::factory('photos')->findFromEngageId($this->id);
    }

    public function getCountPhotos() {
	return ORM::factory('photos')->getCountPhotosForEngage($this->id);
    }

    public function getCover($type = 'thumb') {
	$cover = ORM::factory('photos')->getCoverForEngage($this->id);
	return Helper::factory('filesystem')->getPhotoUrl($cover, $type);
    }

    public function setCover($id) {
	return ORM::factory('photos')->setCoverForEngage($id, $this->id);
    }

    public function delPhoto($id) {
	return ORM::factory('photos')->delPhotoForEngage($id, $this->id);
    }

    public function getCategory() {
	if (null == self::$category) {
	    self::$category = ORM::factory('engagecategory')->where('e_id', '=', $this->id)->find_all();
	}
	return self::$category;
    }

    public function belongsToCategory($c_id) {
	foreach ($this->getCategory() as $cat) {
	    if ($cat->c_id == $c_id) {
		return true;
	    }
	}
	return false;
    }

    public function getAnnounce() {
	if (!empty($this->announce)) {
	    return $this->announce;
	} else {
	    return $this->description;
	}
    }

    public function countComments() {
	return $this->comments->count_all();
    }

    public function getComments() {
	return $this->comments->find_all();
    }

    public function countPlace() {
	return $this->place->count_all();
    }

    public function getPlace() {
	return $this->place->find_all();
    }

    public function getNameTags($tags) {
	var_export($tags);
    }

    public function getSelectCategory() {
	$check = array();
	$category = $this->getCategory();
	foreach ($category as $cat) {
	    $check[$cat->c_id] = 1;
	}
	return $check;
    }
    
    public function getFavForUser($user){
	return $user->engages_fav->find_all();
    }
    
    public function getByUser($user){
	return $user->engages_author->find_all();
    }    
    
    public function isFavForUser($user){
	return ($user->engages_fav->where('engage.id','=',$this->id)->count_all() > 0) ? true : false;
    }
    
    public function addFavForUser($user){
	$user->add('engages_fav',$this);
    }
    
    public function removeFavForUser($user){
	$user->remove('engages_fav',$this);
    }
    
}