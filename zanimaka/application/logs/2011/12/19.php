<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-19 10:58:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2011-12-19 10:58:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(210): Kohana_Core::error_handler(false)
#1 D:\server\htdocs\zanimaka.lc\application\views\engage\control.php(2): Model_Engage->isFavForUser('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(29): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-19 11:09:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-19 11:09:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add('engages_fav', Object(Model_Engage))
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser(Object(Model_User))
#4 [internal function]: Controller_Ajax_User->action_addFav()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_User))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-12-19 11:58:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 202 ]
2011-12-19 11:58:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 202 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_Core::error_handler(false)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(18): Model_Engage->getFavForUser()
#2 [internal function]: Controller_List->action_my(Object(Controller_List))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}