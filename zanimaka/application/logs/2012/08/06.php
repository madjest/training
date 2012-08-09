<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-06 10:59:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-06 10:59:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}
2012-08-06 11:00:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2012-08-06 11:00:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
--
#0 W:\domains\zanimaka\application\classes\exception\phpconsole\phpconsole.php(259): Kohana_Core::error_handler(Array, Array)
#1 W:\domains\zanimaka\application\classes\model\engage.php(210): PhpConsole->handleError(8, 'Trying to get p...', 'W:\domains\zani...', 210, Array)
#2 W:\domains\zanimaka\application\views\engage\control.php(2): Model_Engage->isFavForUser(false)
#3 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#4 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#5 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#6 W:\domains\zanimaka\application\views\list\index.php(29): Kohana_View->__toString()
#7 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#8 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#9 W:\domains\zanimaka\system\classes\kohana\view.php(228): Kohana_View->render()
#10 W:\domains\zanimaka\application\views\layout-front\index.php(27): Kohana_View->__toString()
#11 W:\domains\zanimaka\system\classes\kohana\view.php(61): include('W:\domains\zani...')
#12 W:\domains\zanimaka\system\classes\kohana\view.php(343): Kohana_View::capture('W:\domains\zani...', Array)
#13 W:\domains\zanimaka\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#14 W:\domains\zanimaka\application\classes\controller\fronttemplate.php(61): Kohana_Controller_Template->after()
#15 [internal function]: Controller_FrontTemplate->after()
#16 W:\domains\zanimaka\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_List))
#17 W:\domains\zanimaka\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 W:\domains\zanimaka\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 W:\domains\zanimaka\index.php(110): Kohana_Request->execute()
#20 {main}