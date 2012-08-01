<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-29 23:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:12:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\classes\controller\welcome.php [ 43 ]
2012-07-29 23:12:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  name ~ APPPATH\classes\controller\welcome.php [ 43 ]
--
#0 W:\domains\guest\application\classes\controller\welcome.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Welcome->action_bd(Object(Controller_Welcome))
#2 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 W:\domains\guest\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-29 23:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:25:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH\views\bd.php [ 1 ]
2012-07-29 23:25:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting '(' ~ APPPATH\views\bd.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\gues...', Array)
#1 {main}
2012-07-29 23:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:25:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
2012-07-29 23:25:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
--
#0 W:\domains\guest\application\views\bd.php(1): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(38): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_bd(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-29 23:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
2012-07-29 23:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
--
#0 W:\domains\guest\application\views\bd.php(1): Kohana_Core::error_handler('W:\domains\gues...', Array)
#1 W:\domains\guest\system\classes\kohana\view.php(61): include('W:\domains\gues...')
#2 W:\domains\guest\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 W:\domains\guest\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\domains\guest\system\classes\kohana\response.php(160): Kohana_View->__toString(Object(View))
#5 W:\domains\guest\application\classes\controller\welcome.php(38): Kohana_Response->body()
#6 [internal function]: Controller_Welcome->action_bd(Object(Controller_Welcome))
#7 W:\domains\guest\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 W:\domains\guest\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\domains\guest\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 W:\domains\guest\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-29 23:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:33:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
2012-07-29 23:33:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\bd.php [ 1 ]
--
#0 W:\domains\guest\application\views\bd.php(1): Kohana_Core::error_handler('W:\domains\gues...', Array)
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
2012-07-29 23:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:57:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\bd.php [ 2 ]
2012-07-29 23:57:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\bd.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('W:\domains\gues...', Array)
#1 {main}
2012-07-29 23:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-29 23:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-29 23:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\domains\guest\index.php(109): Kohana_Request->execute()
#1 {main}