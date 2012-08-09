<div id="form_search">
    <?php echo Helper::factory('bottomcategory')->selector(Helper::getVar('tags', 'get')); ?>
    <div class="formrow">
	<div class="text"><input type="text" name="search" value="<?php echo Helper::getVar('search', 'get'); ?>"></div>
	<div class="button min"><input type="submit" value="Искать"></div>
    </div>
</div>