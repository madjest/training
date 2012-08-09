<div class="namePage">Добавить занятие</div>
<?php echo Helper::paste('validate_errors', array('errors' => $errors)); ?>
<form method="post" enctype="multipart/form-data">
    <div class="block_left">
	<div class="formrow">
	    <div class="label"><label for="title">Название</label></div>
	    <div class="text"><input type="text" name="title" id="title" value="<?php echo $engage->title; ?>"></div>
	</div>
	<div class="formrow">
	    <div class="label"><label for="description">Описание</label></div>
	    <div class="textarea"><textarea name="description" id="description"><?php echo $engage->description; ?></textarea></div>
	</div>
	<div class="formrow">
	    <?php echo Helper::factory('bottomcategory')->selector($engage->getSelectCategory()); ?>
	</div>
	<div class="formrow">
	    <div class="button"><input type="submit" value="Сохранить"></div>
	</div>
    </div>

    <div class="block_right">
	<div class="formrow">
	    <div>
		<?php $first = true; foreach ($engage->getPhotos() as $photo): ?>
    		<div class="form_img <? echo (($first) ? 'cover' : '');?>">
    		    <div><a class="colorbox" href="<?php echo Helper::factory('filesystem')->getPhotoUrl($photo); ?>"><img src="<?php echo Helper::factory('filesystem')->getPhotoUrl($photo, 'thumb'); ?>"></img></a></div>
    		    <div><a href="?photocover=<?php echo $photo->id; ?>">Сделать обложкой</a></div>
    		    <div><a href="?photodel=<?php echo $photo->id; ?>">Удалить</a></div>
    		</div>
		<?php $first = false; endforeach; ?>
	    </div>
	    <div class="clear"></div>
	    <div class="label"><label>Добавить фотографию</label></div>
	    <?php for ($i = 0; $i < ( Kohana::$config->load('config.engage.countphoto') - $engage->getCountPhotos()); $i++): ?>
    	    <div><input type="file" name="photo[]"></div>
	    <?php endfor; ?>
	</div>    
    </div>    
    <div class="clear"></div>
    
    <input type="hidden" name="id" value="<?php echo $engage->id; ?>"></input>
</form>