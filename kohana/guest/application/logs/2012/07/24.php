<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-24 00:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL views/base was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-24 00:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL views/base was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\domains\guest\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 00:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:49:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:49:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 00:59:36 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in W:\domains\guest\application\views\base.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
2012-07-24 00:59:36 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::submit(), called in W:\domains\guest\application\views\base.php on line 4 and defined ~ SYSPATH\classes\kohana\form.php [ 354 ]
--
#0 W:\domains\guest\system\classes\kohana\form.php(354): Kohana_Core::error_handler('Login')
#1 W:\domains\guest\application\views\base.php(4): Kohana_Form::submit('W:\domains\gues...', Array)
#2 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#3 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#5 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#6 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#7 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#8 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 W:\domains\guest\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-24 00:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 00:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:01:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\base.php [ 2 ]
2012-07-24 01:01:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\base.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\gues...', Array)
#1 {main}
2012-07-24 01:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:03:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:03:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:04:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
2012-07-24 01:04:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
--
#0 W:\domains\guest\application\views\base.php(7): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:05:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
2012-07-24 01:05:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
--
#0 W:\domains\guest\application\views\base.php(7): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:05:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
2012-07-24 01:05:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\base.php [ 7 ]
--
#0 W:\domains\guest\application\views\base.php(7): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sumbit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-24 01:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sumbit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\domains\guest\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 01:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sumbit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-24 01:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sumbit was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\domains\guest\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-24 01:22:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:22:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:23:30 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\base.php [ 8 ]
2012-07-24 01:23:30 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\base.php [ 8 ]
--
#0 W:\domains\guest\application\views\base.php(8): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:26:32 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
2012-07-24 01:26:32 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
--
#0 W:\domains\guest\application\views\base.php(8): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:26:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:26:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:26:36 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
2012-07-24 01:26:36 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
--
#0 W:\domains\guest\application\views\base.php(8): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:28:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:28:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:29:17 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
2012-07-24 01:29:17 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\views\base.php [ 8 ]
--
#0 W:\domains\guest\application\views\base.php(8): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(7): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-24 01:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 01:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 01:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-24 02:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-24 02:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}