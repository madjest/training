<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-12 00:22:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Engage::getDescription() ~ APPPATH\views\list\index.php [ 5 ]
2011-11-12 00:22:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Engage::getDescription() ~ APPPATH\views\list\index.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-12 12:05:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  photo ~ APPPATH\classes\model\photos.php [ 79 ]
2011-11-12 12:05:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  photo ~ APPPATH\classes\model\photos.php [ 79 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\photos.php(79): Kohana_Core::error_handler('23', Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(45): Model_Photos->savePhotos(Array)
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(75): Model_Engage->saveEngage(Array)
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(19): Controller_Engage->action_save()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(61): Controller_Engage->action_form()
#5 [internal function]: Controller_Engage->action_edit(Object(Controller_Engage))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-11-12 12:07:16 --- ERROR: Database_Exception [ 1364 ]: Field 'e_id' doesn't have a default value [ INSERT INTO `engage_photos` (`filename`, `filename_thumb`, `cover`) VALUES ('1321121235_5591.jpg', '1321121235_5591_thumb.jpg', 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-12 12:07:16 --- STRACE: Database_Exception [ 1364 ]: Field 'e_id' doesn't have a default value [ INSERT INTO `engage_photos` (`filename`, `filename_thumb`, `cover`) VALUES ('1321121235_5591.jpg', '1321121235_5591_thumb.jpg', 1) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `en...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\photos.php(123): Kohana_ORM->create()
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(45): Model_Photos->savePhotos(NULL, Array)
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(75): Model_Engage->saveEngage(Array)
#5 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(19): Controller_Engage->action_save(Array)
#6 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(55): Controller_Engage->action_form()
#7 [internal function]: Controller_Engage->action_add()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#12 {main}
2011-11-12 12:31:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 17 ]
2011-11-12 12:31:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 17 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(17): Kohana_Core::error_handler(Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(11): Model_User->updateProfile()
#2 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-11-12 12:32:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 18 ]
2011-11-12 12:32:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 18 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(18): Kohana_Core::error_handler(Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(11): Model_User->updateProfile()
#2 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-11-12 12:36:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 17 ]
2011-11-12 12:36:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\model\user.php [ 17 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(17): Kohana_Core::error_handler(Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(11): Model_User->updateProfile()
#2 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-11-12 12:38:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\user.php [ 17 ]
2011-11-12 12:38:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\user.php [ 17 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(17): Kohana_Core::error_handler(Array)
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(11): Model_User->updateProfile()
#2 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-11-12 12:46:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\controller\profile.php [ 9 ]
2011-11-12 12:46:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  avatar ~ APPPATH\classes\controller\profile.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-11-12 12:56:21 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 54 ]
2011-11-12 12:56:21 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 54 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\filesystem.php(54): Kohana_Core::error_handler('media\users\13')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(25): Helper_Filesystem->getAvatarDirFromUserId('13')
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(18): Model_User->loadAvatar()
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile(Array)
#4 [internal function]: Controller_Profile->action_index()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Profile))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-12 12:56:43 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 55 ]
2011-11-12 12:56:43 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 55 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\filesystem.php(55): Kohana_Core::error_handler('media\users\13')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(25): Helper_Filesystem->getAvatarDirFromUserId('13')
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(18): Model_User->loadAvatar()
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile(Array)
#4 [internal function]: Controller_Profile->action_index()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Profile))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-12 12:57:30 --- ERROR: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 55 ]
2011-11-12 12:57:30 --- STRACE: ErrorException [ 2 ]: mkdir() [function.mkdir]: No such file or directory ~ APPPATH\classes\helper\filesystem.php [ 55 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\filesystem.php(55): Kohana_Core::error_handler('media\users\13')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(25): Helper_Filesystem->getAvatarDirFromUserId('13')
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(18): Model_User->loadAvatar()
#3 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile(Array)
#4 [internal function]: Controller_Profile->action_index()
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Profile))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#9 {main}
2011-11-12 12:58:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\model\user.php [ 38 ]
2011-11-12 12:58:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\model\user.php [ 38 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(38): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(18): Model_User->loadAvatar(Array)
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile()
#3 [internal function]: Controller_Profile->action_index(Object(Controller_Profile))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-11-12 13:00:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getAvarat() ~ APPPATH\views\profile\index.php [ 15 ]
2011-11-12 13:00:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getAvarat() ~ APPPATH\views\profile\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-11-12 13:22:39 --- ERROR: WideImage_InvalidImageSourceException [ 0 ]: String doesn't contain image data. ~ APPPATH\classes\exception\images\WideImage\WideImage.php [ 240 ]
2011-11-12 13:22:39 --- STRACE: WideImage_InvalidImageSourceException [ 0 ]: String doesn't contain image data. ~ APPPATH\classes\exception\images\WideImage\WideImage.php [ 240 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\exception\images\WideImage\WideImage.php(184): WideImage::loadFromString('')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper\images.php(16): WideImage::load(Array, '')
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(28): Helper_Images->load('')
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(20): Model_User->loadAvatar('')
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile()
#5 [internal function]: Controller_Profile->action_index(Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Controller_Profile))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute(Object(Request))
#10 {main}
2011-11-12 13:22:46 --- ERROR: WideImage_InvalidImageSourceException [ 0 ]: String doesn't contain image data. ~ APPPATH\classes\exception\images\WideImage\WideImage.php [ 240 ]
2011-11-12 13:22:46 --- STRACE: WideImage_InvalidImageSourceException [ 0 ]: String doesn't contain image data. ~ APPPATH\classes\exception\images\WideImage\WideImage.php [ 240 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\exception\images\WideImage\WideImage.php(184): WideImage::loadFromString('')
#1 D:\server\htdocs\zanimaka.lc\application\classes\helper\images.php(16): WideImage::load(Array, '')
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(28): Helper_Images->load('')
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\user.php(20): Model_User->loadAvatar('')
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\profile.php(12): Model_User->updateProfile()
#5 [internal function]: Controller_Profile->action_index(Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Controller_Profile))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute(Object(Request))
#10 {main}
2011-11-12 13:38:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\profile\index.php [ 1 ]
2011-11-12 13:38:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\profile\index.php [ 1 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\profile\index.php(1): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(55): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_Profile))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}