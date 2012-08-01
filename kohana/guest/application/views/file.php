<?php foreach($articles as $post): ?>
      <strong> <? echo HTML::chars($post['name']); ?> </strong> 
               <? echo HTML::chars($post['message']); ?>
	<i>    <? echo HTML::chars($post['date']); ?> </i> </br>
  <?    endforeach;?>
</br>
  <a href="<?php echo URL::base();?>">Назад</a>