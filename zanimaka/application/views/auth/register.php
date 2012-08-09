<h1>Регистрация</h1>
<?php echo Helper::paste('validate_errors',array('errors' => $errors)); ?>
<form method="post" accept-charset="utf-8">
    <label for="username">Username:</label>
    <input id="username" type="text" name="username" value="<?= Arr::get($values, 'username'); ?>" />
    <br />
    <label for="email">Email:</label>
    <input id="email" type="text" name="email" value="<?= Arr::get($values, 'email'); ?>" />
    <br />
    <label for="password">Password:</label>
    <input id="password" type="password" name="password" />
     <br />
    <label for="password_confirm">Repeat Password:</label>
    <input id="password_confirm" type="password" name="password_confirm" />
    <br />
    <button type="submit">Register</button>
</form>
