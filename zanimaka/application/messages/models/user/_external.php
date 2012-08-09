<?php

return array(
    'password' => array(
        'min_length' => 'пароль должен быть больше :param2 символов',
	'not_empty' => 'нужно заполнить пароль',
    ),    
    'password_confirm' => array(
        'matches' => 'ваши пароли не совпадают, попробуйте еще раз',
    ),
);

?>
