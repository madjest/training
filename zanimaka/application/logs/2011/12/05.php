<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-05 08:36:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:36:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 08:37:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:37:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 08:37:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:37:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 08:37:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:37:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 08:38:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:38:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCount() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 08:39:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCountss() ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 08:39:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getCountss() ~ APPPATH\views\list\index.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\server\htdoc...', Array)
#1 {main}
2011-12-05 09:05:17 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:05:17 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler(1, NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:05:43 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:05:43 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler(1, NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:05:57 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:05:57 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler(1, NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:06:51 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:06:51 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler('1', NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:07:23 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:07:23 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler('1', NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:07:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_BOOLEAN_AND ~ APPPATH\classes\helper\list.php [ 15 ]
2011-12-05 09:07:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_BOOLEAN_AND ~ APPPATH\classes\helper\list.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Helper_List')
#1 {main}
2011-12-05 09:07:38 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:07:38 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler('1', NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:07:48 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:07:48 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(13): Kohana_Core::error_handler('1', NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(4): Helper_List->isParamsSearch('sort', 0)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:08:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\helper\list.php [ 13 ]
2011-12-05 09:08:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\helper\list.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Helper_List')
#1 {main}
2011-12-05 09:09:40 --- ERROR: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 16 ]
2011-12-05 09:09:40 --- STRACE: ErrorException [ 2 ]: array_search() [function.array-search]: Wrong datatype for second argument ~ APPPATH\classes\helper\list.php [ 16 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\helper\list.php(16): Kohana_Core::error_handler(1, NULL)
#1 D:\server\htdocs\zanimaka.lc\application\views\parts\form_sort.php(5): Helper_List->isParamsSearch('sort', 1)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(16): Kohana_View->__toString()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#13 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#14 [internal function]: Controller_FrontTemplate->after()
#15 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#16 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#19 {main}
2011-12-05 09:25:56 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically ~ APPPATH\views\list\index.php [ 9 ]
2011-12-05 09:25:56 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Session::get() should not be called statically ~ APPPATH\views\list\index.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(9): Kohana_Core::error_handler('searchOpen', false)
#1 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(9): Kohana_Session::get('D:\server\htdoc...', Array)
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(56): Kohana_Controller_Template->after()
#10 [internal function]: Controller_FrontTemplate->after(Object(Controller_List))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#15 {main}
2011-12-05 10:17:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\model\engage.php [ 202 ]
2011-12-05 10:17:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\model\engage.php [ 202 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_myEngages(Object(Controller_Engage))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:18:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\model\engage.php [ 202 ]
2011-12-05 10:18:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\model\engage.php [ 202 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my(Object(Controller_Engage))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:18:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-12-05 10:18:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('auth')
#1 {main}
2011-12-05 10:21:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'engage_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_fav` ON (`engage_fav`.`engages_fav_id` = `engage`.`id`) WHERE `engage_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:21:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'engage_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_fav` ON (`engage_fav`.`engages_fav_id` = `engage`.`id`) WHERE `engage_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 10:22:14 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.e_id' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `e_id` ON (`e_id`.`engages_fav_id` = `engage`.`id`) WHERE `e_id`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:22:14 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.e_id' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `e_id` ON (`e_id`.`engages_fav_id` = `engage`.`id`) WHERE `e_id`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 10:25:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'engage_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_fav` ON (`engage_fav`.`engages_fav_id` = `engage`.`id`) WHERE `engage_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:25:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'engage_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `engage_fav` ON (`engage_fav`.`engages_fav_id` = `engage`.`id`) WHERE `engage_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 10:27:20 --- ERROR: Kohana_Exception [ 0 ]: The engages_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-12-05 10:27:20 --- STRACE: Kohana_Exception [ 0 ]: The engages_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->__get('engages_fav')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:53:42 --- ERROR: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-12-05 10:53:42 --- STRACE: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->__get('engage_fav')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:54:37 --- ERROR: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-12-05 10:54:37 --- STRACE: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->__get('engage_fav')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:54:48 --- ERROR: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-12-05 10:54:48 --- STRACE: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->__get('engage_fav')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:55:49 --- ERROR: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-12-05 10:55:49 --- STRACE: Kohana_Exception [ 0 ]: The engage_fav property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->__get('engage_fav')
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 10:55:58 --- ERROR: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages` ON (`user_engages`.`engage_id` = `engage`.`id`) WHERE `user_engages`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:55:58 --- STRACE: Database_Exception [ 1146 ]: Table 'zanimaka.user_engages' doesn't exist [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages` ON (`user_engages`.`engage_id` = `engage`.`id`) WHERE `user_engages`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 10:57:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:57:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 10:59:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 10:59:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 11:00:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`engage_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 11:00:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.engages_fav_id' in 'on clause' [ SELECT `engage`.* FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engages_fav_id` = `engage`.`id`) WHERE `user_engages_fav`.`engage_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `engage`...', 'Model_Engage', Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(202): Kohana_ORM->find_all()
#4 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#5 [internal function]: Controller_Engage->action_my()
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Engage))
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#10 {main}
2011-12-05 11:01:43 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Engage::getFavForUser(), called in D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php on line 94 and defined ~ APPPATH\classes\model\engage.php [ 201 ]
2011-12-05 11:01:43 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Engage::getFavForUser(), called in D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php on line 94 and defined ~ APPPATH\classes\model\engage.php [ 201 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(201): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my(Object(Controller_Engage))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 11:02:06 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Engage::getFavForUser(), called in D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php on line 94 and defined ~ APPPATH\classes\model\engage.php [ 201 ]
2011-12-05 11:02:06 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Engage::getFavForUser(), called in D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php on line 94 and defined ~ APPPATH\classes\model\engage.php [ 201 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(201): Kohana_Core::error_handler()
#1 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Model_Engage->getFavForUser()
#2 [internal function]: Controller_Engage->action_my(Object(Controller_Engage))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#7 {main}
2011-12-05 11:02:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\engage.php [ 94 ]
2011-12-05 11:02:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\engage.php [ 94 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(94): Kohana_Core::error_handler()
#1 [internal function]: Controller_Engage->action_my(Object(Controller_Engage))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-12-05 11:05:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\model\engage.php [ 209 ]
2011-12-05 11:05:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH\classes\model\engage.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Engage')
#1 {main}
2011-12-05 11:05:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: engage ~ APPPATH\classes\controller\engage.php [ 96 ]
2011-12-05 11:05:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: engage ~ APPPATH\classes\controller\engage.php [ 96 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\engage.php(96): Kohana_Core::error_handler()
#1 [internal function]: Controller_Engage->action_my(Object(Controller_Engage))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-12-05 11:08:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: engages ~ APPPATH\views\list\my.php [ 24 ]
2011-12-05 11:08:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: engages ~ APPPATH\views\list\my.php [ 24 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\views\list\my.php(24): Kohana_Core::error_handler('D:\server\htdoc...', Array)
#1 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString('D:\server\htdoc...', Array)
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#9 [internal function]: Controller_FrontTemplate->after(Object(Controller_Engage))
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#11 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#14 {main}
2011-12-05 12:04:22 --- ERROR: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:04:22 --- STRACE: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `user_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 D:\server\htdocs\zanimaka.lc\application\views\engage\control.php(3): Model_Engage->isFavForUser(Object(Model_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(29): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#21 {main}
2011-12-05 12:04:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.e_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `user_engages_fav`.`e_id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:04:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_engages_fav.e_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `engage` AS `engage` JOIN `user_engages_fav` ON (`user_engages_fav`.`engage_id` = `engage`.`id`) WHERE `user_engages_fav`.`user_id` = '13' AND `user_engages_fav`.`e_id` = '31' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(210): Kohana_ORM->count_all()
#3 D:\server\htdocs\zanimaka.lc\application\views\engage\control.php(3): Model_Engage->isFavForUser(Object(Model_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\server\htdocs\zanimaka.lc\application\views\list\index.php(29): Kohana_View->__toString()
#8 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#9 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#10 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(228): Kohana_View->render()
#11 D:\server\htdocs\zanimaka.lc\application\views\layout-front\index.php(27): Kohana_View->__toString()
#12 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(61): include('D:\server\htdoc...')
#13 D:\server\htdocs\zanimaka.lc\system\classes\kohana\view.php(343): Kohana_View::capture('D:\server\htdoc...', Array)
#14 D:\server\htdocs\zanimaka.lc\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#15 D:\server\htdocs\zanimaka.lc\application\classes\controller\fronttemplate.php(57): Kohana_Controller_Template->after()
#16 [internal function]: Controller_FrontTemplate->after()
#17 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#18 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#21 {main}
2011-12-05 12:21:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\user.php [ 9 ]
2011-12-05 12:21:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\user.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-12-05 12:21:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\user.php [ 9 ]
2011-12-05 12:21:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\ajax\user.php [ 9 ]
--
#0 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#2 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#6 {main}
2011-12-05 12:22:07 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
2011-12-05 12:22:07 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1399): Kohana_Core::error_handler(Object(Model_Engage))
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:23:05 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
2011-12-05 12:23:05 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1399): Kohana_Core::error_handler(Object(Model_Engage))
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:24:16 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
2011-12-05 12:24:16 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1399): Kohana_Core::error_handler(Object(Model_Engage))
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:26:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
2011-12-05 12:26:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php on line 214 and defined ~ MODPATH\orm\classes\kohana\orm.php [ 1399 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1399): Kohana_Core::error_handler(Object(Model_Engage))
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:27:51 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-12-05 12:27:51 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler(Object(Model_Engage), 'engage_id')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:28:29 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-12-05 12:28:29 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler(Object(Model_Engage), 'user_id')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:28:44 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-12-05 12:28:44 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler(Object(Model_Engage), 'id')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:29:52 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
2011-12-05 12:29:52 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\orm.php [ 1403 ]
--
#0 D:\server\htdocs\zanimaka.lc\modules\orm\classes\kohana\orm.php(1403): Kohana_Core::error_handler(Object(Model_Engage), '31')
#1 D:\server\htdocs\zanimaka.lc\application\classes\model\engage.php(214): Kohana_ORM->add(Object(Model_User))
#2 D:\server\htdocs\zanimaka.lc\application\classes\controller\ajax\user.php(9): Model_Engage->addFavForUser()
#3 [internal function]: Controller_Ajax_User->action_addFav(Object(Controller_Ajax_User))
#4 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\server\htdocs\zanimaka.lc\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\server\htdocs\zanimaka.lc\index.php(110): Kohana_Request->execute()
#8 {main}
2011-12-05 12:30:53 --- ERROR: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:30:53 --- STRACE: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2011-12-05 12:31:14 --- ERROR: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:31:14 --- STRACE: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2011-12-05 12:31:18 --- ERROR: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '29') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:31:18 --- STRACE: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '29') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2011-12-05 12:32:00 --- ERROR: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-05 12:32:00 --- STRACE: Database_Exception [ 1364 ]: Field 'created' doesn't have a default value [ INSERT INTO `user_engages_fav` (`user_id`, `engage_id`) VALUES ('13', '31') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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