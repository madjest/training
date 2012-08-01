<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
	  
	  $view = View::factory('base');
	  $view->status = 'Status';
	  
    	  
	 if($_POST)
	  {
	 //Выгружаем массив пост в переменные 
	    $name = Arr::get($_POST, 'username');
	    $mess = Arr::get($_POST, 'message');
	     
	    $post = new Model_Io();
	    
	    if(!empty($name) and !empty($mess))
	    {
	      //Записываем в бд
	      $post->bd_write($name, $mess);
	      	      
	      //Добавление записи в файл
	      $post->file_write($name, $mess);
	      
	      $view->status = 'Saved';
	    }
	    else {
	      $view->status = 'The fields are empty!';
	    }
	  }

	  $this->response->body($view);
	}
	
	
	
	public function action_bd()
	{
	  $view = View::factory('bd')
		  ->bind('articles', $articles);
	  
	  $articles = Model::factory('io')->bd_get_all();
	  
	  $this->response->body($view);
	 
	}
	
	public function action_file()
	{
	   $view = View::factory('file')
		  ->bind('articles', $articles);
	  
	   $articles = Model::factory('io')->file_read();
	  
	   $this->response->body($view);
	}

} // End Welcome
