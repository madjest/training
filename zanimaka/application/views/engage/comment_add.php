<div class="comment">
    <?php if (!$user): ?>
        <div class="add">
    	Зарегистрируйтесь
        </div>
    <?php else: ?>
        <div class="avatar">
    	<div><img src="<?php echo $user->getUrlAvatar(); ?>"></div>
        </div>
        <div class="add">
    	<form>
    	    <div class="formrow">
    		<div class="textarea"><textarea name="message" id="message"></textarea></div>
    	    </div>
    	    <div class="formrow">
    		<div class="button right"><input type="submit" id="create_comment" value="Написать"></div>
    	    </div>
    	</form>
        </div>  
    <?php endif; ?>
</div>


<script>
    jQuery(document).ready(function($) {
	$('#create_comment').createComments({'e_id' : <? echo $engage->id ?>});
    });
</script>
