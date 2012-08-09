<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-13 06:00:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::countComments() ~ APPPATH\views\engage\comments.php [ 1 ]
2011-11-13 06:00:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::countComments() ~ APPPATH\views\engage\comments.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-13 06:08:10 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.commentses' doesn't exist [ SHOW FULL COLUMNS FROM `commentses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-13 06:08:10 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.commentses' doesn't exist [ SHOW FULL COLUMNS FROM `commentses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('commentses')
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1525): Kohana_ORM::factory('comments')
#7 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(560): Kohana_ORM->_related('comments')
#8 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get('comments')
#9 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(21): Kohana_View->__toString()
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#17 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#19 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#20 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#21 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#22 [internal function]: Controller_FrontTemplate->after()
#23 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Engage))
#24 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#25 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#26 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#27 {main}
2011-11-13 06:09:32 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.comments' doesn't exist [ SHOW FULL COLUMNS FROM `comments` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-13 06:09:32 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.comments' doesn't exist [ SHOW FULL COLUMNS FROM `comments` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('comments')
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1525): Kohana_ORM::factory('comments')
#7 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(560): Kohana_ORM->_related('comments')
#8 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get('comments')
#9 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(21): Kohana_View->__toString()
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#17 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#19 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#20 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#21 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#22 [internal function]: Controller_FrontTemplate->after()
#23 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Engage))
#24 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#25 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#26 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#27 {main}
2011-11-13 06:09:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2011-11-13 06:09:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler('comments')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get()
#2 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(21): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#19 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#20 {main}
2011-11-13 06:10:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2011-11-13 06:10:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler('comments')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get()
#2 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(21): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#19 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#20 {main}
2011-11-13 06:10:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2011-11-13 06:10:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler('comments')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get()
#2 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(21): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#19 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#20 {main}
2011-11-13 06:13:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2011-11-13 06:13:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  e_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler('comments')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(102): Kohana_ORM->__get()
#2 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(1): Model_Engage->countComments('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(24): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#19 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#20 {main}
2011-11-13 06:19:34 --- ERROR: Kohana_Exception [ 0 ]: The place property does not exist in the Model_Engage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-13 06:19:34 --- STRACE: Kohana_Exception [ 0 ]: The place property does not exist in the Model_Engage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(114): Kohana_ORM->__get('place')
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\place.php(1): Model_Engage->countPlace()
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(30): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Engage))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-13 07:46:12 --- ERROR: ErrorException [ 1 ]: Call to a member function toPeopleTime() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
2011-11-13 07:46:12 --- STRACE: ErrorException [ 1 ]: Call to a member function toPeopleTime() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-13 07:51:37 --- ERROR: ErrorException [ 1 ]: Call to a member function toPeopleTime() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
2011-11-13 07:51:37 --- STRACE: ErrorException [ 1 ]: Call to a member function toPeopleTime() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-13 07:51:49 --- ERROR: ErrorException [ 1 ]: Call to a member function toPeople() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
2011-11-13 07:51:49 --- STRACE: ErrorException [ 1 ]: Call to a member function toPeople() on a non-object ~ APPPATH\views\engage\comments.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-13 07:56:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: mouth ~ APPPATH\classes\fdate.php [ 71 ]
2011-11-13 07:56:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: mouth ~ APPPATH\classes\fdate.php [ 71 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\fdate.php(71): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(10): FDate->toPeople('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(24): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-13 07:56:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: mouth ~ APPPATH\classes\fdate.php [ 71 ]
2011-11-13 07:56:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: mouth ~ APPPATH\classes\fdate.php [ 71 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\fdate.php(71): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(10): FDate->toPeople('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(24): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-13 08:16:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\engage\comment_add.php [ 3 ]
2011-11-13 08:16:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\engage\comment_add.php [ 3 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\engage\comment_add.php(3): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-13 09:03:05 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-13 09:03:05 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax.php(7): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Ajax->before()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-13 09:03:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\ajax.php [ 9 ]
2011-11-13 09:03:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\ajax.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Controller_Ajax')
#1 {main}
2011-11-13 09:04:19 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-13 09:04:19 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax.php(10): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Ajax->before()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-13 09:04:39 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-13 09:04:39 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax.php(10): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Ajax->before()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-13 09:07:20 --- ERROR: View_Exception [ 0 ]: The requested view common/ajax could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-13 09:07:20 --- STRACE: View_Exception [ 0 ]: The requested view common/ajax could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('common/ajax')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('common/ajax', NULL)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(33): Kohana_View::factory('common/ajax')
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Ajax->before()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-13 09:07:27 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-13 09:07:27 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Ajax->before()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-13 09:10:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\ajax.php [ 11 ]
2011-11-13 09:10:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\controller\ajax.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-13 09:15:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-13 09:15:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('comments')
#1 {main}
2011-11-13 09:15:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-13 09:15:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('comments')
#1 {main}
2011-11-13 09:17:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Engage_comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-11-13 09:17:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Engage_comments' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('engage_comments')
#1 {main}
2011-11-13 09:25:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax_Comments::$auth ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
2011-11-13 09:25:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax_Comments::$auth ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\comments.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax_Comments->action_create(Object(Controller_Ajax_Comments))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-11-13 09:25:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax_Comments::$auth ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
2011-11-13 09:25:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax_Comments::$auth ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\comments.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax_Comments->action_create(Object(Controller_Ajax_Comments))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-11-13 09:27:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
2011-11-13 09:27:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\comments.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\comments.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax_Comments->action_create(Object(Controller_Ajax_Comments))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}