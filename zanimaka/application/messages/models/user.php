<?php

return array(
    'username' => array(
        'not_empty' => 'нужно заполнить пользователя',
        'min_length' => 'ваше имя должно быть меньше :param2 символов',
        'max_length' => 'ваше имя не должно быть больше :param2 символов',
        'username_available' => 'уже занято',
    ),
    'password' => array(
        'not_empty' => 'нужно заполнить пароль',
    ),
    'email' => array(
        'not_empty' => 'нужно заполнить email',
        'min_length' => 'ваше email не может быть меньше :param2 символов',
        'max_length' => 'ваше email не может быть больше :param2 символов',	
        'email' => 'вы ввели не email, он обычно выглядит так pupkin@mail.ru',	
	'email_available' => 'email уже занят',
    ),    
);

?>
