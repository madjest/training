<?php
  echo Form::open(NULL, array('method' => 'post'));
    echo Form::input('username', NULL, NULL); ?> </br> <?
    echo Form::textarea('message', NULL, NULL, NULL); ?> </br> <?
    echo Form::submit('sumbit', 'Отправить', NULL);
  echo Form::close();
  ?>
  <? echo $status; ?>
 </br>
  <a href="<?php echo URL::site('welcome/bd')?>">Вывод из базы данных</a>
  </br>
  <a href="<?php echo URL::site('welcome/file')?>">Вывод из файла</a>  <?
?>

