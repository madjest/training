<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-14 01:33:43 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comment_add.php [ 3 ]
2011-11-14 01:33:43 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comment_add.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 01:37:08 --- ERROR: ErrorException [ 1 ]: Call to a member function isGuest() on a non-object ~ APPPATH\views\engage\comment_add.php [ 2 ]
2011-11-14 01:37:08 --- STRACE: ErrorException [ 1 ]: Call to a member function isGuest() on a non-object ~ APPPATH\views\engage\comment_add.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 01:37:42 --- ERROR: ErrorException [ 1 ]: Call to a member function isGuest() on a non-object ~ APPPATH\views\engage\comment_add.php [ 2 ]
2011-11-14 01:37:42 --- STRACE: ErrorException [ 1 ]: Call to a member function isGuest() on a non-object ~ APPPATH\views\engage\comment_add.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 01:39:54 --- ERROR: ErrorException [ 1 ]: Call to a member function thereAvatar() on a non-object ~ APPPATH\views\layout-front\header.php [ 4 ]
2011-11-14 01:39:54 --- STRACE: ErrorException [ 1 ]: Call to a member function thereAvatar() on a non-object ~ APPPATH\views\layout-front\header.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 01:40:57 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comment_add.php [ 8 ]
2011-11-14 01:40:57 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comment_add.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 02:30:42 --- ERROR: Database_Exception [ 1292 ]: Incorrect datetime value: '02:30 14 декабря 2011' for column 'create' at row 1 [ INSERT INTO `engage_comments` (`user_id`, `e_id`, `message`, `create`) VALUES ('13', '23', '123', '02:30 14 декабря 2011') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 02:30:42 --- STRACE: Database_Exception [ 1292 ]: Incorrect datetime value: '02:30 14 декабря 2011' for column 'create' at row 1 [ INSERT INTO `engage_comments` (`user_id`, `e_id`, `message`, `create`) VALUES ('13', '23', '123', '02:30 14 декабря 2011') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `en...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\comments.php(19): Kohana_ORM->create()
#3 [internal function]: Controller_Ajax_Comments->action_create()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Comments))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-11-14 02:38:46 --- ERROR: View_Exception [ 0 ]: The requested view helpers/control_engage could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-14 02:38:46 --- STRACE: View_Exception [ 0 ]: The requested view helpers/control_engage could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('helpers/control...')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('helpers/control...', Array)
#2 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(8): Kohana_View::factory('helpers/control...', Array)
#3 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(13): Helper::paste('control_engage', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#12 [internal function]: Controller_FrontTemplate->after()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#17 {main}
2011-11-14 02:39:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::getCountComments() ~ APPPATH\views\engage\control.php [ 3 ]
2011-11-14 02:39:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::getCountComments() ~ APPPATH\views\engage\control.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 02:40:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\engage\comments.php [ 19 ]
2011-11-14 02:40:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\views\engage\comments.php [ 19 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\engage\comments.php(19): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\index.php(24): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-14 05:20:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: engage ~ APPPATH\views\index\index.php [ 5 ]
2011-11-14 05:20:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: engage ~ APPPATH\views\index\index.php [ 5 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\index\index.php(5): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_Index))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-14 05:20:39 --- ERROR: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-14 05:20:39 --- STRACE: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('helpers/form_se...')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('helpers/form_se...', NULL)
#2 D:\server\htdocs\zanimaka.lc\application\classes\helper\formsearch.php(8): Kohana_View::factory('helpers/form_se...')
#3 D:\server\htdocs\zanimaka.lc\application\views\index\index.php(6): Helper_FormSearch->get()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#12 [internal function]: Controller_FrontTemplate->after()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#17 {main}
2011-11-14 05:21:11 --- ERROR: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-14 05:21:11 --- STRACE: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('helpers/form_se...')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('helpers/form_se...', NULL)
#2 D:\server\htdocs\zanimaka.lc\application\classes\helper\formsearch.php(8): Kohana_View::factory('helpers/form_se...')
#3 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(4): Helper_FormSearch->get()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#12 [internal function]: Controller_FrontTemplate->after()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#17 {main}
2011-11-14 05:21:20 --- ERROR: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-14 05:21:20 --- STRACE: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('helpers/form_se...')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('helpers/form_se...', NULL)
#2 D:\server\htdocs\zanimaka.lc\application\classes\helper\formsearch.php(8): Kohana_View::factory('helpers/form_se...')
#3 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(4): Helper_FormSearch->get()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#12 [internal function]: Controller_FrontTemplate->after()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#17 {main}
2011-11-14 05:21:22 --- ERROR: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-11-14 05:21:22 --- STRACE: View_Exception [ 0 ]: The requested view helpers/form_search could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(137): Kohana_View->set_filename('helpers/form_se...')
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(30): Kohana_View->__construct('helpers/form_se...', NULL)
#2 D:\server\htdocs\zanimaka.lc\application\classes\helper\formsearch.php(8): Kohana_View::factory('helpers/form_se...')
#3 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(4): Helper_FormSearch->get()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#12 [internal function]: Controller_FrontTemplate->after()
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#17 {main}
2011-11-14 05:31:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\helper.php [ 38 ]
2011-11-14 05:31:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH\classes\helper.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Helper')
#1 {main}
2011-11-14 05:45:03 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\model\category.php [ 38 ]
2011-11-14 05:45:03 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\model\category.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-14 05:45:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,4,7,12)'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '(1,4,7,12)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 05:45:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,4,7,12)'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '(1,4,7,12)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(38): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 05:49:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,4,7,12)'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '(1,4,7,12)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 05:49:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''(1,4,7,12)'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '(1,4,7,12)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(41): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 05:49:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,4,7,12' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN 1,4,7,12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 05:49:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,4,7,12' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN 1,4,7,12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(41): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 05:49:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1,4,7,12'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '1,4,7,12' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 05:49:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1,4,7,12'' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN '1,4,7,12' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(41): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 05:50:44 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\helper.php [ 42 ]
2011-11-14 05:50:44 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\helper.php [ 42 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Kohana_Core::error_handler(',', Object(Database_MySQL_Result))
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 05:51:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch() ~ APPPATH\classes\helper.php [ 42 ]
2011-11-14 05:51:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch() ~ APPPATH\classes\helper.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-14 05:52:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch_all() ~ APPPATH\classes\helper.php [ 42 ]
2011-11-14 05:52:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch_all() ~ APPPATH\classes\helper.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-14 05:54:46 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\helper.php [ 43 ]
2011-11-14 05:54:46 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\helper.php [ 43 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(43): Kohana_Core::error_handler(',', Object(Database_MySQL_Result))
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory()
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 06:09:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING_CAST, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\helper.php [ 23 ]
2011-11-14 06:09:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING_CAST, expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\helper.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Helper')
#1 {main}
2011-11-14 06:09:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 33 ]
2011-11-14 06:09:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 33 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(33): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:09:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 33 ]
2011-11-14 06:09:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 33 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(33): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:10:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
2011-11-14 06:10:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(36): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:10:44 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
2011-11-14 06:10:44 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(36): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:10:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
2011-11-14 06:10:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(36): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:10:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
2011-11-14 06:10:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 36 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(36): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:11:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 37 ]
2011-11-14 06:11:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\category.php [ 37 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(37): Kohana_Core::error_handler('Array')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns()
#2 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(3): Helper::getSetectCategory('D:\server\htdoc...', Array)
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#11 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#15 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#16 {main}
2011-11-14 06:11:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ APPPATH\classes\model\category.php [ 31 ]
2011-11-14 06:11:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ APPPATH\classes\model\category.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Category')
#1 {main}
2011-11-14 06:16:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 06:16:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(44): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(5): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 06:18:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 06:18:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(47): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(5): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 06:19:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 06:19:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(48): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(5): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 06:19:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-14 06:19:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `category`.* FROM `category` AS `category` WHERE `id` IN () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Category', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\category.php(48): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(42): Model_Category->findCategoryFromIns(Array)
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(5): Helper::getSetectCategory()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-11-14 06:35:16 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Engage as array ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
2011-11-14 06:35:16 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Engage as array ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-14 06:37:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\classes\model\engage.php [ 131 ]
2011-11-14 06:37:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\classes\model\engage.php [ 131 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(131): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Model_Engage->getSelectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 06:37:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\classes\model\engage.php [ 131 ]
2011-11-14 06:37:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: active ~ APPPATH\classes\model\engage.php [ 131 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(131): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Model_Engage->getSelectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 06:38:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  1 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
2011-11-14 06:38:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  1 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\helpers\bottom_category.php(13): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-14 06:39:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  2 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
2011-11-14 06:39:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  2 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\helpers\bottom_category.php(13): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-14 06:40:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  2 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
2011-11-14 06:40:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  2 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\helpers\bottom_category.php(13): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-14 06:41:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  1 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
2011-11-14 06:41:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  1 ~ APPPATH\views\helpers\bottom_category.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\helpers\bottom_category.php(13): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\engage\form.php(14): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#12 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#13 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#17 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#18 {main}
2011-11-14 06:48:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
2011-11-14 06:48:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(44): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 06:48:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
2011-11-14 06:48:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(44): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 07:21:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
2011-11-14 07:21:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(44): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 07:25:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
2011-11-14 07:25:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 44 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(44): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-11-14 07:26:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 45 ]
2011-11-14 07:26:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\helper.php [ 45 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper.php(45): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(2): Helper::getSetectCategory('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}