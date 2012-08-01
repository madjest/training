<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-30 00:02:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  date ~ APPPATH\views\bd.php [ 4 ]
2012-07-30 00:02:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  date ~ APPPATH\views\bd.php [ 4 ]
--
#0 W:\domains\guest\application\views\bd.php(4): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(42): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_bd(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 00:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:03:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:03:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 00:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 00:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:02:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH\classes\model\io.php [ 8 ]
2012-07-30 01:02:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ APPPATH\classes\model\io.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Io')
#1 {main}
2012-07-30 01:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:03:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\model\io.php [ 44 ]
2012-07-30 01:03:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\model\io.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Io')
#1 {main}
2012-07-30 01:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:04:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\io.php [ 44 ]
2012-07-30 01:04:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\model\io.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Io')
#1 {main}
2012-07-30 01:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:10:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:10:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:11:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:11:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:32:58 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH\views\file.php [ 4 ]
2012-07-30 01:32:58 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 2 ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 01:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:33:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:33:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:45:26 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
2012-07-30 01:45:26 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
--
#0 W:\domains\guest\application\classes\model\io.php(71): Kohana_Core::error_handler()
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:00 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
2012-07-30 01:47:00 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
--
#0 W:\domains\guest\application\classes\model\io.php(71): Kohana_Core::error_handler()
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:02 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
2012-07-30 01:47:02 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
--
#0 W:\domains\guest\application\classes\model\io.php(71): Kohana_Core::error_handler()
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:04 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
2012-07-30 01:47:04 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\io.php [ 71 ]
--
#0 W:\domains\guest\application\classes\model\io.php(71): Kohana_Core::error_handler()
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:50:02 --- ERROR: ErrorException [ 8 ]: Undefined offset:  2 ~ APPPATH\classes\model\io.php [ 72 ]
2012-07-30 01:50:02 --- STRACE: ErrorException [ 8 ]: Undefined offset:  2 ~ APPPATH\classes\model\io.php [ 72 ]
--
#0 W:\domains\guest\application\classes\model\io.php(72): Kohana_Core::error_handler()
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:53:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:53:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 01:58:57 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 72 ]
2012-07-30 01:58:57 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 72 ]
--
#0 W:\domains\guest\application\classes\model\io.php(72): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file()
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 01:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 01:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:01:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\model\io.php [ 72 ]
2012-07-30 02:01:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\model\io.php [ 72 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_io')
#1 {main}
2012-07-30 02:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:01:28 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 73 ]
2012-07-30 02:01:28 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 73 ]
--
#0 W:\domains\guest\application\classes\model\io.php(73): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file()
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 02:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:01:56 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 73 ]
2012-07-30 02:01:56 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 73 ]
--
#0 W:\domains\guest\application\classes\model\io.php(73): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file()
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 02:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:14:00 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
2012-07-30 02:14:00 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\gues...', Array)
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_file()
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 02:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:15:47 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
2012-07-30 02:15:47 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\gues...', Array)
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_file()
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 02:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:16:00 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
2012-07-30 02:16:00 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('d-m-Y', '1343628619??')
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\gues...', Array)
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_file()
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 02:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:16:01 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
2012-07-30 02:16:01 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('d-m-Y', '1343628619??')
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\gues...', Array)
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_file()
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 02:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:16:17 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
2012-07-30 02:16:17 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\file.php [ 4 ]
--
#0 W:\domains\guest\application\views\file.php(4): Kohana_Core::error_handler('d', '1343628619??')
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\gues...', Array)
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 W:\domains\guest\application\classes\controller\welcome.php(58): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_file()
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-30 02:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:19:01 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 72 ]
2012-07-30 02:19:01 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\model\io.php [ 72 ]
--
#0 W:\domains\guest\application\classes\model\io.php(72): Kohana_Core::error_handler('d-m-Y H:i:s', '1343628619??')
#1 W:\domains\guest\application\classes\controller\welcome.php(56): Model_Io->file_read()
#2 [internal function]: Controller_Welcome->action_file()
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-30 02:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 02:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 02:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:31:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:31:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:37:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:37:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-30 23:37:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-30 23:37:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}