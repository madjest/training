<div class="namePage">Профиль пользователя <?php echo $user->username; ?></div>
<?php echo Helper::paste('validate_errors', array('errors' => $errors)); ?>
<form method="post" enctype="multipart/form-data">
    <div class="formrow">
	<div class="label"><label for="email">Email</label></div>
	<div class="text"><input type="text" name="email" id="email" value="<?php echo $user->email; ?>"></div>
    </div>
    <div class="formrow">
	<div class="label"><label for="password">Пароль</label></div>
	<div class="text"><input type="password" name="password" id="password" value=""></div>
	<div class="label"><label for="password_confirm">Повторите пароль</label></div>
	<div class="text"><input type="password" name="password_confirm" id="password_confirm" value=""></div>
    </div>
    <div class="formrow">
	<?php if($user->thereAvatar()): ?>
	<div class="profile_avatar"><img src="<?php echo $user->getUrlAvatar(); ?>"></div>
	<?php endif; ?>
	<div class="label"><label for="password">Загрузить аватарку</label></div>
	<input type="file" name="avatar">
    </div>          
    <div class="clear h20"></div>
    <div class="formrow">
	<div class="button"><input type="submit" value="Сохранить"></div>
    </div>    

</form>

