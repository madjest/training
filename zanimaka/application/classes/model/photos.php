<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Photos extends ORM {

    protected $_table_name = 'engage_photos';

    public function setData($data) {
	$this->e_id = $data['e_id'];
	$this->filename = $data['filename'];
	if (isset($data['cover']) and !empty($data['cover'])) {
	    $this->cover = $data['cover'];
	}
	return $this;
    }

    public function setCoverForEngage($id, $e_id) {
	$photos = $this
		->where('e_id', '=', $e_id)
		->find_all();
	foreach ($photos as $photo) {
	    $photo->set('cover', 0)
		    ->update();
	}

	$this
		->where('e_id', '=', $e_id)
		->where('id', '=', $id)
		->find()
		->set('cover', 1)
		->update()
	;
    }

    public function delPhotoForEngage($id, $e_id) {
	$this
		->where('e_id', '=', $e_id)
		->where('id', '=', $id);
	if ($this->count_all() == 0) {
	    return null;
	}
	$this
	    ->where('e_id', '=', $e_id)
	    ->where('id', '=', $id)	
	    ->find();
	$filesystem = Helper::factory('filesystem');
	if (is_file($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename)) {
	    unlink($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename);
	}
	if (is_file($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename_thumb)) {
	    unlink($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename_thumb);
	}
	if (is_file($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename_min)) {
	    unlink($filesystem->getPhotosDirFromEngageId($e_id) . DS . $this->filename_min);
	}	

	$this->delete();
    }

    public function getCountCoverForEngage($id) {
	return $this
			->where('e_id', '=', $id)
			->where('cover', '=', 1)
			->count_all();
    }

    public function getCoverForEngage($id) {
	return $this
			->where('e_id', '=', $id)
			->where('cover', '=', 1)
			->find();
    }

    public function getCountPhotosForEngage($id) {
	return $this
			->where('e_id', '=', $id)
			->count_all();
    }

    public function savePhotos($id, $images) {
	if(!isset($images['photo']['tmp_name'])){
	    return null;
	}
	if (count($images['photo']['tmp_name']) == 0) {
	    return null;
	}
	$filesystem = Helper::factory('filesystem');
	$cover = (0 == $this->getCountCoverForEngage($id)) ? 1 : 0;
	$imageClass = Helper::factory('images');
	foreach ($images['photo']['tmp_name'] as $image) {
	    $sf = new $this;
	    if (null == $image) {
		continue;
	    }
	    $dir = $filesystem->getPhotosDirFromEngageId($id);
	    if (!is_dir($dir)) {
		mkdir($dir);
	    }
	    $filename = $filesystem->createPhotoName();
	    $imageClass->load($image)
		    ->resize(
			    Kohana::$config->load('config.engage.photo.width')
			    , Kohana::$config->load('config.engage.photo.height')
			    , 'outside'
		    )
		    ->saveToFile($dir . DS . $filename['photo']);
	    $imageClass->load($image)
		    ->resize(
			    Kohana::$config->load('config.engage.thumb.width')
			    , Kohana::$config->load('config.engage.thumb.height')
			    , 'outside'
		    )
		    ->crop(
			    Kohana::$config->load('config.engage.thumb.cropLeft')
			    , Kohana::$config->load('config.engage.thumb.cropTop')
			    , Kohana::$config->load('config.engage.thumb.width')
			    , Kohana::$config->load('config.engage.thumb.height')
		    )
		    ->saveToFile($dir . DS . $filename['thumb']);
	    $imageClass->load($image)
		    ->resize(
			    Kohana::$config->load('config.engage.min.width')
			    , Kohana::$config->load('config.engage.min.height')
			    , 'outside'
		    )
		    ->crop(
			    Kohana::$config->load('config.engage.min.cropLeft')
			    , Kohana::$config->load('config.engage.min.cropTop')
			    , Kohana::$config->load('config.engage.min.width')
			    , Kohana::$config->load('config.engage.min.height')
		    )
		    ->saveToFile($dir . DS . $filename['min']);	    
	    $sf->values(array(
		'e_id' => $id
		, 'filename' => $filename['photo']
		, 'filename_thumb' => $filename['thumb']
		, 'filename_min' => $filename['min']
		, 'cover' => $cover
	    ))->create();
	    $cover = 0;
	}
    }

    public function findFromEngageId($id) {
	return $this
			->where('e_id', '=', $id)
			->order_by('cover', 'DESC')
			->find_all();
    }

}

