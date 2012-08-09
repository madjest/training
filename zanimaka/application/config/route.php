<?php

defined('SYSPATH') or die('No direct script access.');

Route::set('default', '')->defaults(array('controller' => 'index', 'action' => 'index',));

Route::set('list', 'list(/<action>)')->defaults(array('controller' => 'list', 'action' => 'index',));

Route::set('pages', 'page(/<url>)')->defaults(array('controller' => 'pages', 'action' => 'index', 'url' => 'index',));

Route::set('login', 'login')->defaults(array('controller' => 'auth', 'action' => 'login',));
Route::set('logout', 'logout')->defaults(array('controller' => 'auth', 'action' => 'logout',));
Route::set('register', 'register(/<action>)')->defaults(array('controller' => 'auth', 'action' => 'register',));

Route::set('profile', 'profile(/<action>)')->defaults(array('controller' => 'profile', 'action' => 'index',));

Route::set('engage', 'engage(/<action>(/<id>))')->defaults(array('controller' => 'engage', 'action' => 'index', 'id' => null,));

Route::set('404', 'error/<action>')->defaults(array('controller' => 'error', 'action' => '404',));

Route::set('ajax_comment', 'ajax/comments(/<action>(/<id>))')->defaults(array('controller' => 'ajax_comments', 'action' => 'create', 'id' => null,));
Route::set('ajax_userstate', 'ajax/userstate(/<action>)')->defaults(array('controller' => 'ajax_userstate', 'action' => 'set'));
Route::set('ajax_user', 'ajax/user(/<action>)')->defaults(array('controller' => 'ajax_user'));