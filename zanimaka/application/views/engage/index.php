<div class="namePage"><?php echo $engage->title; ?></div>
<div class="engage">
    <div class="block_left">
	<div class="description"><?php echo $engage->description; ?></div>
	<div class="h30"></div>
	<?php echo View::factory('engage/control')->set('engage', $engage); ?>
    </div>
    <div class="block_right">
	  <div class="images" id="galleria">
	  <?php foreach ($engage->getPhotos() as $photo): ?>
	  <div class="image"><a href="<?php echo Helper::factory('filesystem')->getPhotoUrl($photo); ?>"><img src="<?php echo Helper::factory('filesystem')->getPhotoUrl($photo, 'thumb'); ?>"></img></a></div>
	  <?php endforeach; ?>
	  </div>
    </div>
</div>
<div class="clear h30"></div>
<div class="sociality">
    <div class="block_left">
	<h2 class="nameBlock">Комментарии</h2>
	<div class="comments">
	    <?php echo View::factory('engage/comments')->set('engage', $engage); ?>
	</div>
	<div class="add">
	    <?php echo View::factory('engage/comment_add')->set('engage', $engage); ?>
	</div>
    </div>
    <div class="block_right">
	<h2 class="nameBlock">Места</h2>
	<div class="place">
	    <?php echo View::factory('engage/place')->set('engage', $engage); ?>
	</div>
    </div>
</div>
<div class="clear h30"></div>