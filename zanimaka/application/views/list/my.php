<div class="block_left w45 engage_list_vertical">
    <div class="namePage ">Избранные</div>
    <?php if(count($engages_fav) > 0): foreach($engages_fav as $engage):?>
    <div class="myitem">
	<div class="cover"><a href="/engage/view/<?php echo $engage->id; ?>"><img src="<?php echo $engage->getCover('min'); ?>"></a></div>
	<div class="title"><?php echo $engage->title; ?></div>
	<?php echo View::factory('engage/control')->set('engage', $engage); ?>
    </div>
    <?php endforeach; else: ?>
	<h2>пока пусто...</h2>
    <?php endif; ?>
</div>
<div class="block_right w45 engage_list_vertical">
    <div class="namePage">Я добавил</div>
    <?php if(count($engages_author) > 0): foreach($engages_author as $engage):?>
    <div class="myitem">
	<div class="cover"><a href="/engage/view/<?php echo $engage->id; ?>"><img src="<?php echo $engage->getCover('min'); ?>"></a></div>
	<div class="title"><?php echo $engage->title; ?></div>
	<?php echo View::factory('engage/control')->set('engage', $engage); ?>
    </div>
    <?php endforeach; else: ?>
	<h2>пока пусто...</h2>
    <?php endif; ?>    
</div>
<div class="clear"></div>