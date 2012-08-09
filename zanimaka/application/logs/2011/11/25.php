<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-25 08:25:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Helper_List::getParams() ~ APPPATH\classes\controller\list.php [ 8 ]
2011-11-25 08:25:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Helper_List::getParams() ~ APPPATH\classes\controller\list.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-25 08:25:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Helper_List::getParams() ~ APPPATH\classes\controller\list.php [ 8 ]
2011-11-25 08:25:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Helper_List::getParams() ~ APPPATH\classes\controller\list.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-25 08:29:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::whereOR() ~ APPPATH\classes\model\engage.php [ 47 ]
2011-11-25 08:29:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::whereOR() ~ APPPATH\classes\model\engage.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:29:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::ORwhere() ~ APPPATH\classes\model\engage.php [ 47 ]
2011-11-25 08:29:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::ORwhere() ~ APPPATH\classes\model\engage.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:43:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::fetch() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:43:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::fetch() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:44:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::fetch_all() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:44:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::fetch_all() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:44:55 --- ERROR: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Engage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-11-25 08:44:55 --- STRACE: Kohana_Exception [ 0 ]: The db property does not exist in the Model_Engage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(60): Kohana_ORM->__get('db')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(7): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-11-25 08:45:26 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH\classes\model\engage.php [ 57 ]
2011-11-25 08:45:26 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH\classes\model\engage.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:47:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::result() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:47:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::result() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:53:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:53:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:53:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:53:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:53:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:53:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:54:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `SELECT * FROM engage` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-25 08:54:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'field list' [ SELECT `1`, `SELECT * FROM engage` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `1`, `SE...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(60): Kohana_Database_Query->execute()
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(7): Model_Engage->findAll(Array)
#3 [internal function]: Controller_List->action_index()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-11-25 08:54:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:54:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:55:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:55:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:55:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:55:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-11-25 08:56:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:56:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-25 08:56:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:56:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:59:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-11-25 08:59:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-25 08:59:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::query() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:59:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::query() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-11-25 08:59:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::query() ~ APPPATH\classes\model\engage.php [ 60 ]
2011-11-25 08:59:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::query() ~ APPPATH\classes\model\engage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}