<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-06 03:44:46 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
2011-12-06 03:44:46 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\model\engage.php [ 210 ]
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