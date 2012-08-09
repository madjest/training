<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-02 05:51:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Fdebug::dump() ~ APPPATH\classes\controller\fronttemplate.php [ 11 ]
2011-12-02 05:51:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Fdebug::dump() ~ APPPATH\classes\controller\fronttemplate.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-02 05:51:22 --- ERROR: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
2011-12-02 05:51:22 --- STRACE: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(111)
#1 {main}
2011-12-02 05:51:41 --- ERROR: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
2011-12-02 05:51:41 --- STRACE: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(111)
#1 {main}
2011-12-02 05:51:58 --- ERROR: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
2011-12-02 05:51:58 --- STRACE: ErrorException [ 1 ]: Class 'FB' not found ~ APPPATH\classes\fdebug.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(111)
#1 {main}
2011-12-02 05:55:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Helper_Debug::warp() ~ APPPATH\classes\controller\fronttemplate.php [ 14 ]
2011-12-02 05:55:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Helper_Debug::warp() ~ APPPATH\classes\controller\fronttemplate.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-02 06:27:00 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`e_id` = `id`) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:27:00 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in on clause is ambiguous [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`e_id` = `id`) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(66): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:27:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'engage_category``.``e_id`` = ``engage``.``id``) WHERE `title` LIKE '%111%' OR `a' at line 1 [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (``engage_category``.``e_id`` = ``engage``.``id``) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:27:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'engage_category``.``e_id`` = ``engage``.``id``) WHERE `title` LIKE '%111%' OR `a' at line 1 [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (``engage_category``.``e_id`` = ``engage``.``id``) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(66): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:28:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` = `IN(2,6,10)`) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:28:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` = `IN(2,6,10)`) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(68): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:32:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `descriptio' at line 1 [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` = IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:32:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `descriptio' at line 1 [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` = IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(68): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:32:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:32:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id` IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(68): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:32:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id`   IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:32:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags.c_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `tags`.`c_id`   IN(2,6,10)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(68): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:37:00 --- ERROR: Database_Exception [ 1051 ]: Unknown table 'distinct engage' [ SELECT `distinct engage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:37:00 --- STRACE: Database_Exception [ 1051 ]: Unknown table 'distinct engage' [ SELECT `distinct engage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `distinc...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(76): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:37:18 --- ERROR: Database_Exception [ 1051 ]: Unknown table 'distinctengage' [ SELECT `distinctengage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:37:18 --- STRACE: Database_Exception [ 1051 ]: Unknown table 'distinctengage' [ SELECT `distinctengage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `distinc...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(76): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:37:22 --- ERROR: Database_Exception [ 1051 ]: Unknown table 'distinct engage' [ SELECT `distinct engage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 06:37:22 --- STRACE: Database_Exception [ 1051 ]: Unknown table 'distinct engage' [ SELECT `distinct engage`.*, `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id`   IN(1,1,1,1)) WHERE `title` LIKE '%111%' OR `announce` LIKE '%111%' OR `description` LIKE '%111%' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `distinc...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(76): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 06:40:48 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
2011-12-02 06:40:48 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 06:40:50 --- ERROR: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
2011-12-02 06:40:50 --- STRACE: ErrorException [ 1 ]: Call to a member function getUrlAvatar() on a non-object ~ APPPATH\views\engage\comments.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 07:24:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id` = `1` AND `engage_category`.`c_id` = `5` AND `engage_category`.`c_id` = `7` AND `engage_category`.`c_id` = `10`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 07:24:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id` AND `engage_category`.`c_id` = `1` AND `engage_category`.`c_id` = `5` AND `engage_category`.`c_id` = `7` AND `engage_category`.`c_id` = `10`) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(75): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 07:39:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'engage_category.c_id' in 'having clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) HAVING `engage_category`.`c_id` = 3 AND `engage_category`.`c_id` = 4 AND `engage_category`.`c_id` = 8 AND `engage_category`.`c_id` = 11 AND `engage_category`.`c_id` = 12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 07:39:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'engage_category.c_id' in 'having clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) HAVING `engage_category`.`c_id` = 3 AND `engage_category`.`c_id` = 4 AND `engage_category`.`c_id` = 8 AND `engage_category`.`c_id` = 11 AND `engage_category`.`c_id` = 12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(75): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 07:39:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'engage_category.c_id' in 'having clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) HAVING `engage_category`.`c_id` = 3 OR `engage_category`.`c_id` = 4 OR `engage_category`.`c_id` = 8 OR `engage_category`.`c_id` = 11 OR `engage_category`.`c_id` = 12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 07:39:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'engage_category.c_id' in 'having clause' [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) HAVING `engage_category`.`c_id` = 3 OR `engage_category`.`c_id` = 4 OR `engage_category`.`c_id` = 8 OR `engage_category`.`c_id` = 11 OR `engage_category`.`c_id` = 12 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(75): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 07:40:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND ()' at line 1 [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) WHERE `engage_category`.`c_id` = 3 OR `engage_category`.`c_id` = 4 OR `engage_category`.`c_id` = 8 OR `engage_category`.`c_id` = 11 OR `engage_category`.`c_id` = 12 HAVING () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 07:40:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND ()' at line 1 [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) WHERE `engage_category`.`c_id` = 3 OR `engage_category`.`c_id` = 4 OR `engage_category`.`c_id` = 8 OR `engage_category`.`c_id` = 11 OR `engage_category`.`c_id` = 12 HAVING () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () AND () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(77): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 07:41:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND () AND (`engage_category`.`c_id` = 3) AND (`engage_category`.`c_id` = 4) A' at line 1 [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) WHERE () AND () AND (`engage_category`.`c_id` = 3) AND (`engage_category`.`c_id` = 4) AND () AND () AND () AND (`engage_category`.`c_id` = 8) AND () AND () AND (`engage_category`.`c_id` = 11) AND (`engage_category`.`c_id` = 12) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 07:41:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND () AND (`engage_category`.`c_id` = 3) AND (`engage_category`.`c_id` = 4) A' at line 1 [ SELECT DISTINCT `engage`.* FROM `engage` AS `engage` JOIN `engage_category` ON (`engage_category`.`e_id` = `engage`.`id`) WHERE () AND () AND (`engage_category`.`c_id` = 3) AND (`engage_category`.`c_id` = 4) AND () AND () AND () AND (`engage_category`.`c_id` = 8) AND () AND () AND (`engage_category`.`c_id` = 11) AND (`engage_category`.`c_id` = 12) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(77): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#5 [internal function]: Controller_List->action_index()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-02 08:11:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query::find_all() ~ APPPATH\classes\model\engage.php [ 46 ]
2011-12-02 08:11:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query::find_all() ~ APPPATH\classes\model\engage.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 08:15:35 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2011-12-02 08:15:35 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler('select * from e...')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(45): Kohana_Database_MySQL->query(Array)
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll()
#3 [internal function]: Controller_List->action_index(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-02 08:16:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 08:16:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 08:16:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: sql ~ APPPATH\classes\model\engage.php [ 46 ]
2011-12-02 08:16:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: sql ~ APPPATH\classes\model\engage.php [ 46 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(46): Kohana_Core::error_handler(Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll()
#2 [internal function]: Controller_List->action_index(Object(Controller_List))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 08:17:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 08:17:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:43:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:43:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:43:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:43:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:44:03 --- ERROR: ErrorException [ 1 ]: Call to a member function fetch() on a non-object ~ APPPATH\classes\model\engage.php [ 46 ]
2011-12-02 12:44:03 --- STRACE: ErrorException [ 1 ]: Call to a member function fetch() on a non-object ~ APPPATH\classes\model\engage.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:44:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:44:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::fetch() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:45:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:45:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:47:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:47:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:47:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:47:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\list\index.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:47:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:47:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:47:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:47:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:47:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:47:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:48:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:48:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:50:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:50:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:52:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\database\classes\kohana\database\result.php [ 98 ]
2011-12-02 12:52:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\database\classes\kohana\database\result.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Kohana_Database...')
#1 {main}
2011-12-02 12:52:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
2011-12-02 12:52:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(22): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:53:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
2011-12-02 12:53:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(22): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:53:10 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\result.php [ 182 ]
2011-12-02 12:53:10 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 45 and defined ~ MODPATH\database\classes\kohana\database\result.php [ 182 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\result.php(182): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(45): Kohana_Database_Result->get(Array)
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll()
#3 [internal function]: Controller_List->action_index(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-02 12:53:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
2011-12-02 12:53:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\list\index.php [ 22 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(22): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-02 12:54:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:54:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:56:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:56:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 12:56:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:56:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:58:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 12:58:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 12:59:37 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_total_rows ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 12:59:37 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_total_rows ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 13:00:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::_load_result() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 13:00:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::_load_result() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 13:03:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 13:03:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 13:07:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\model\engage.php [ 45 ]
2011-12-02 13:07:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\model\engage.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 13:09:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
2011-12-02 13:09:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::getCover() ~ APPPATH\views\list\index.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-02 13:12:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\model\engage.php [ 48 ]
2011-12-02 13:12:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\model\engage.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2011-12-02 13:17:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* 
	    FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)' at line 1 [ 
	    SELECT DISTRICT e.* 
	    FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)
	 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:17:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.* 
	    FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)' at line 1 [ 
	    SELECT DISTRICT e.* 
	    FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)
	 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(52): Kohana_Database_MySQL->query(1, '??    SELECT DI...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:49:54 --- ERROR: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\model\engage.php [ 67 ]
2011-12-02 13:49:54 --- STRACE: ErrorException [ 2 ]: implode() [function.implode]: Invalid arguments passed ~ APPPATH\classes\model\engage.php [ 67 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(67): Kohana_Core::error_handler(' or ', 'c1.c_id = 1')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:50:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id ' at line 5 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id) 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:50:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id ' at line 5 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id) 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(82): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:51:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:51:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(82): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:52:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:52:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(83): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:52:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:52:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(83): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:52:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:52:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:53:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:53:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:53:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:53:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:53:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 8 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:53:55 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 8 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:54:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:54:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:54:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:54:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(85): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:56:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 6) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 9) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:56:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'e.idc1.c_id' in 'where clause' [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 6) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 9) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.idc1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(84): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 13:57:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'c1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN enga' at line 8 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 6) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 9) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 13:57:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'c1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN enga' at line 8 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 1) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 6) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 9) > 0 AND 
		    (SELECT count(*) FROM
				engage as e1
				JOIN engage_category as c1 ON (e1.id = c1.e_id)
			WHERE e1.id = e.id c1.c_id = 12) > 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(83): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 14:02:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE %кайти% and e.announce LIKE %кайти% and e.description' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE %кайти% and e.announce LIKE %кайти% and e.description LIKE %кайти% ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 14:02:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE %кайти% and e.announce LIKE %кайти% and e.description' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE %кайти% and e.announce LIKE %кайти% and e.description LIKE %кайти% ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(89): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 14:03:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE %'кайти'% and e.announce LIKE %'кайти'% and e.descrip' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE %'кайти'% and e.announce LIKE %'кайти'% and e.description LIKE %'кайти'% ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 14:03:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE %'кайти'% and e.announce LIKE %'кайти'% and e.descrip' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE %'кайти'% and e.announce LIKE %'кайти'% and e.description LIKE %'кайти'% ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(89): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-02 14:03:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE 'кайти' and e.announce LIKE 'кайти' and e.description' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE 'кайти' and e.announce LIKE 'кайти' and e.description LIKE 'кайти' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-02 14:03:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and e.title LIKE 'кайти' and e.announce LIKE 'кайти' and e.description' at line 4 [ 
	SELECT DISTINCT e.* 
	FROM 
		engage as e
		JOIN engage_category as c ON (e.id = c.e_id)  WHERE  and e.title LIKE 'кайти' and e.announce LIKE 'кайти' and e.description LIKE 'кайти' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(89): Kohana_Database_MySQL->query(1, '??SELECT DISTIN...', 'Model_Engage')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\list.php(8): Model_Engage->findAll(Array)
#2 [internal function]: Controller_List->action_index()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_List))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}