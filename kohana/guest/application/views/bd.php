<?php foreach($articles as $post): ?>
  <div style="padding:10px; margin-bottom: 10px; border-bottom: #333 2px solid;">
      <strong> <? echo HTML::chars($post['name']); ?> </strong> </be>
               <? echo HTML::chars($post['message']); ?>
	<i>    <? echo HTML::chars($post['date']); ?> </i> </br>
  </div>
  <?    endforeach;?>
</br>
  <a href="<?php echo URL::base();?>">Назад</a>
