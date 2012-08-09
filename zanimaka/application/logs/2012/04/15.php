<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-15 10:26:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-04-15 10:26:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\html\zanimaka.lc\www\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\html\zanimak...', 210, Array)
#2 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#13 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#20 {main}
2012-04-15 10:26:57 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:26:57 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:27:07 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:27:07 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 W:\html\zanimaka.lc\www\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 W:\html\zanimaka.lc\www\application\classes\controller\list.php(25): Model_Engage->getFavForUser(Object(Model_User))
#5 [internal function]: Controller_List->action_my()
#6 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#10 {main}
2012-04-15 10:30:22 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:30:22 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:30:27 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:30:27 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\engage\index.php(6): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Engage))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:36:21 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:36:21 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:37:23 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:37:23 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\engage\index.php(6): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Engage))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:37:27 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:37:27 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:38:11 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:38:11 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:38:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hits' in 'order clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 2)) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 5)) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 7)) > 0 ORDER BY hits, e.title  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:38:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hits' in 'order clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 2)) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 5)) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id AND (c1.c_id = 7)) > 0 ORDER BY hits, e.title  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\application\classes\model\engage.php(106): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 W:\html\zanimaka.lc\www\application\classes\controller\list.php(18): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#7 {main}
2012-04-15 10:38:32 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:38:32 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}
2012-04-15 10:39:20 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-04-15 10:39:20 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages_fav' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `engage`.`id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\zanimaka.lc\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 W:\html\zanimaka.lc\www\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\zanimaka.lc\www\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 W:\html\zanimaka.lc\www\application\views\engage\control.php(2): Model_Engage->isFavForUser(Object(Model_User))
#4 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#5 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#6 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#7 W:\html\zanimaka.lc\www\application\views\list\index.php(29): Kohana_View->__toString()
#8 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#9 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#10 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(228): Kohana_View->render()
#11 W:\html\zanimaka.lc\www\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(61): include('W:\html\zanimak...')
#13 W:\html\zanimaka.lc\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\zanimak...', Array)
#14 W:\html\zanimaka.lc\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 W:\html\zanimaka.lc\www\application\classes\controller\fronttemplate.php(60): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 W:\html\zanimaka.lc\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 W:\html\zanimaka.lc\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 W:\html\zanimaka.lc\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 W:\html\zanimaka.lc\www\index.php(110): Kohana_Request->execute()
#21 {main}