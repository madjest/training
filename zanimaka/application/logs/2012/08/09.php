<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-09 03:00:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 03:00:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:22:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 04:22:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:24:56 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.engage_place' doesn't exist [ SHOW FULL COLUMNS FROM `engage_place` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 04:24:56 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.engage_place' doesn't exist [ SHOW FULL COLUMNS FROM `engage_place` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\domains\zanimaka\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('engage_place')
#2 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('engagePlace')
#7 W:\domains\zanimaka\application\classes\model\engage.php(181): Kohana_ORM->__get('place')
#8 W:\domains\zanimaka\application\views\engage\control.php(4): Model_Engage->countPlace()
#9 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#10 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#11 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#12 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#13 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#14 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#15 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#16 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#17 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#18 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#19 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#20 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#21 [internal function]: Controller_FrontTemplate->after()
#22 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#23 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#24 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#25 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#26 {main}
2012-08-09 04:26:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 04:26:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:26:39 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
2012-08-09 04:26:39 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\zani...', Array)
#1 {main}
2012-08-09 04:27:07 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`zanimaka`.`engage_photos`, CONSTRAINT `engage_photos_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `engage` (`id`)) [ DELETE FROM `engage` WHERE `id` = '25' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 04:27:07 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`zanimaka`.`engage_photos`, CONSTRAINT `engage_photos_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `engage` (`id`)) [ DELETE FROM `engage` WHERE `id` = '25' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\domains\zanimaka\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `en...', false, Array)
#1 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\domains\zanimaka\application\classes\controller\engage.php(69): Kohana_ORM->delete()
#3 [internal function]: Controller_Engage->action_delete()
#4 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#5 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#8 {main}
2012-08-09 04:27:30 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 04:27:30 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:28:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\engage.php [ 209 ]
2012-08-09 04:28:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IS_EQUAL, expecting ')' ~ APPPATH\classes\model\engage.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Engage')
#1 {main}
2012-08-09 04:33:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\engage\control.php [ 2 ]
2012-08-09 04:33:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\engage\control.php [ 2 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\views\engage\control.php(2): PhpConsole->handleError(8, 'Use of undefine...', 'W:\domains\zani...', 2, Array)
#2 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#3 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#4 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#5 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#6 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#7 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#8 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#9 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#11 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#12 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#19 {main}
2012-08-09 04:35:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\engage\control.php [ 2 ]
2012-08-09 04:35:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\engage\control.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\zani...', Array)
#1 {main}
2012-08-09 04:35:33 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`zanimaka`.`engage_photos`, CONSTRAINT `engage_photos_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `engage` (`id`)) [ DELETE FROM `engage` WHERE `id` = '25' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 04:35:33 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`zanimaka`.`engage_photos`, CONSTRAINT `engage_photos_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `engage` (`id`)) [ DELETE FROM `engage` WHERE `id` = '25' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\domains\zanimaka\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `en...', false, Array)
#1 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\domains\zanimaka\application\classes\controller\engage.php(69): Kohana_ORM->delete()
#3 [internal function]: Controller_Engage->action_delete()
#4 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#5 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#8 {main}
2012-08-09 04:35:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 04:35:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser('Gypsyk')
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:43:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-09 04:43:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-09 04:45:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF, expecting ',' or ';' ~ APPPATH\views\engage\control.php [ 4 ]
2012-08-09 04:45:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF, expecting ',' or ';' ~ APPPATH\views\engage\control.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\zani...', Array)
#1 {main}
2012-08-09 04:46:14 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
2012-08-09 04:46:14 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\zani...', Array)
#1 {main}
2012-08-09 04:47:27 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.engage_place' doesn't exist [ SHOW FULL COLUMNS FROM `engage_place` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-09 04:47:27 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.engage_place' doesn't exist [ SHOW FULL COLUMNS FROM `engage_place` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\domains\zanimaka\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('engage_place')
#2 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 W:\domains\zanimaka\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('engagePlace')
#7 W:\domains\zanimaka\application\classes\model\engage.php(181): Kohana_ORM->__get('place')
#8 W:\domains\zanimaka\application\views\engage\control.php(4): Model_Engage->countPlace()
#9 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#10 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#11 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#12 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#13 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#14 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#15 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#16 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#17 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#18 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#19 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#20 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#21 [internal function]: Controller_FrontTemplate->after()
#22 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#23 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#24 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#25 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#26 {main}