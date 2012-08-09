<div id="logo"></div>
<?php if ($user): ?>
    <div id="login">
	<?php if($user->thereAvatar()): ?>
	<div class="header_avatar"><img src="<?php echo $user->getUrlAvatar(); ?>"></div>
	<?php endif; ?>	
        <div style="height:25px;">
    	<div class="username"><?php echo $user->username; ?></div>
    	<div class="exit">(<a href="/logout">Выход</a>)</div>
        </div>	
        <div>
    	<a href="/profile">Профиль</a>
    	<a href="/engage/add">Добавить занятие</a>
    	<a href="/list/my">Мой список</a>
        </div>
    </div>
<?php else: ?>
    <div id="login" class="singin">
        <form method="post" action="/login" accept-charset="utf-8">
    	<div class="form text"><input type="text" name="username"></input></div>
    	<div class="form text"><input type="password" name="password"></input></div>
    	<div class="button min"><input type="submit" src="img/botton.png" name="submin" value="Войти"></input></div>
    	<div class="clear"></div>
    	<div style="float:left">
    	    <input type="checkbox" id="member"></input>
    	    <label for="member">Запомнить</label>
    	</div>
    	<div style="float:left; margin-left:55px"><a href="#">Забыли пароль</a></div>
        </form>	
    </div>	    
    <!--<a href="/register">Регистрация</a>
    <a href="/login">Вход</a>-->
<?php endif; ?>    
<div id="navigator">
    <a href="/list"><div class="linkItem">Занятия</div></a>
    <a href="/blog"><div class="linkItem">Блог</div></a>
    <?php if (!$user): ?>
    <a href="/register"><div class="linkItem">Регистрация</div></a>
    <?php endif; ?>        

</div>
<div id="liner"></div>