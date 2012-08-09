<?php

defined('SYSPATH') or die('No direct script access.');

class Helper_Filesystem {

    public function getPhotosDirFromEngageId($id) {
	return Kohana::$config->load('config.engage_dir') . DS . $id;
    }    
    
    public function getPhotosUrlFromEngageId($id) {
	return '/'.Kohana::$config->load('config.engage_url') . '/' . $id;
    }    

    public function createPhotoName($format = 'jpg') {
	$time = time();
	$rand = mt_rand(1000, 9999);
	return array(
	    'photo' => $time . '_' . $rand . '.' . $format
	    , 'thumb' => $time . '_' . $rand . '_thumb.' . $format
	    , 'min' => $time . '_' . $rand . '_min.' . $format
	);
    }

    public function getPhotoUrl($photo, $type = null) {
	$dir = $this->getPhotosUrlFromEngageId($photo->e_id);
	if(null == $photo->filename){
	    return Kohana::$config->load('config.engage.nofoto');
	} elseif (null == $type) {
	    $filename = $photo->filename;
	} elseif ('thumb' == $type){
	    $filename = $photo->filename_thumb;
	} elseif ('min' == $type){
	    $filename = $photo->filename_min;
	}
	
	return $dir . '/' . $filename;
    }
    
    /**
     * Получить личный каталог пользователя
     * @param type $id
     * @return string 
     */    
    public function getAvatarDirFromUserId($id) {
	$dir = Kohana::$config->load('config.user_dir') . DS . $id;
	if(!is_dir($dir)){
	    mkdir($dir);
	}
	return $dir;
    }  
    
    public function getAvatarUrlFromUserId($id) {
	return '/'.Kohana::$config->load('config.user_url') . '/' . $id;
    }        

}

?>