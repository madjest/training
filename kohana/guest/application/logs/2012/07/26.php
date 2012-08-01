<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-26 00:09:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-07-26 00:09:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 W:\domains\guest\application\classes\controller\welcome.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#2 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 W:\domains\guest\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-26 00:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:09:51 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\model\io.php [ 19 ]
2012-07-26 00:09:51 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\model\io.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-07-26 00:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:10:39 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\model\io.php [ 20 ]
2012-07-26 00:10:39 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\model\io.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-07-26 00:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:19:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 21 ]
2012-07-26 00:19:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 21 ]
--
#0 W:\domains\guest\application\classes\model\io.php(21): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 00:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:20:57 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 19 ]
2012-07-26 00:20:57 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 19 ]
--
#0 W:\domains\guest\application\classes\model\io.php(19): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 00:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:21:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\classes\model\io.php [ 17 ]
2012-07-26 00:21:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ')' ~ APPPATH\classes\model\io.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_io')
#1 {main}
2012-07-26 00:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:21:26 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 19 ]
2012-07-26 00:21:26 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\model\io.php [ 19 ]
--
#0 W:\domains\guest\application\classes\model\io.php(19): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 00:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 00:23:37 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\model\io.php [ 19 ]
2012-07-26 00:23:37 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\model\io.php [ 19 ]
--
#0 W:\domains\guest\application\classes\model\io.php(19): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 00:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 00:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 22:58:40 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\model\io.php [ 19 ]
2012-07-26 22:58:40 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\model\io.php [ 19 ]
--
#0 W:\domains\guest\application\classes\model\io.php(19): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 22:58:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 22:58:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:01:41 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_io::write(), called in W:\domains\guest\application\classes\controller\welcome.php on line 11 and defined ~ APPPATH\classes\model\io.php [ 17 ]
2012-07-26 23:01:41 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_io::write(), called in W:\domains\guest\application\classes\controller\welcome.php on line 11 and defined ~ APPPATH\classes\model\io.php [ 17 ]
--
#0 W:\domains\guest\application\classes\model\io.php(17): Kohana_Core::error_handler(Array)
#1 W:\domains\guest\application\classes\controller\welcome.php(11): Model_io->write()
#2 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#3 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 W:\domains\guest\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-26 23:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:02:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-07-26 23:02:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 W:\domains\guest\application\classes\controller\welcome.php(11): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_index(Object(Controller_Welcome))
#2 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 W:\domains\guest\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-26 23:02:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:02:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:10:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\base.php [ 4 ]
2012-07-26 23:10:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: posts ~ APPPATH\views\base.php [ 4 ]
--
#0 W:\domains\guest\application\views\base.php(4): Kohana_Core::error_handler('W:\domains\gues...', Array)
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
2012-07-26 23:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ko3/posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-26 23:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ko3/posts was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\domains\guest\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-26 23:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-26 23:15:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-26 23:15:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}