<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Io extends Model
{
  //Назване таблицы с которой работаем  
  protected $_tableIo = 'posts';
  protected $_filename = 'guest.txt';
  protected $_directory = 'Files/';
 
  //Функция получения записей из таблицы БД
  public function bd_get_all()
    {
      $query = DB::select('name', 'message', 'date')
                ->from($this->_tableIo)
	        ->order_by('date', 'DESC')
                ->execute()
                ->as_array();
      
      if($query)
            return $query;
        else
            return array();
    }
   
    //Записывает данные в таблицу БД
   public function bd_write($g_name, $g_message)
   {
     $query = DB::insert($this->_tableIo, array('name','message'))
		  ->values(array($g_name, $g_message))
		  ->execute();
   } 
   
   //Записывает данные в файл
   public function file_write($g_name, $g_message)
   {
     $arr = array(
           'name' => $g_name,
           'text' => $g_message,
           'time' => time()
                  );
     
     $_path = APPPATH.$this->_directory.$this->_filename;
       
     if(!is_file($_path))
     {
      fopen($_path, 'w');
     }
	
     //Пишем
     $file = fopen($_path, "a"); //открыли файл
     fwrite($file, implode("::", $arr).PHP_EOL); //запихали массив с раздилителем
     fclose($file); //закрыли файл
     
    } 
    
   //Выводит данные из файла 
   Public function file_read()
   {
     $_path = APPPATH.$this->_directory.$this->_filename;
     
     $file = fopen($_path, "r"); //открыли файл
     $arr  = file($_path);
     fclose($file);
     
     $i = 0;
     
     foreach ($arr as $str) //Делим строки на куски
       {
	  $e_str = explode('::', $str); 
	  $result[$i]['name'] = Arr::get($e_str, 0, 'Нет имени');
	  $result[$i]['message'] = Arr::get($e_str, 1, 'Нет сообщения');
	  $result[$i]['date'] = date('d-m-Y H:i:s', (int)Arr::get($e_str, 2, 0));
	  $i++;
       }
     
     return array_reverse($result);
       
    }
   
}

