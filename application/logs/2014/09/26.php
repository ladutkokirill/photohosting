<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-26 11:33:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-09-26 11:33:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 11:34:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-09-26 11:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 11:34:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-09-26 11:34:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-26 11:39:58 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ MODPATH\extasy\classes\extasy\view.php [ 31 ] in D:\work\test\kohana\modules\extasy\classes\extasy\view.php:31
2014-09-26 11:39:58 --- DEBUG: #0 D:\work\test\kohana\modules\extasy\classes\extasy\view.php(31): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\work\test\ko...', 31, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(137): Extasy_View->set_filename(Object(View))
#2 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct(Object(View), NULL)
#3 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory(Object(View))
#4 D:\work\test\kohana\application\classes\Controller\common.php(9): Kohana_Controller_Template->before()
#5 D:\work\test\kohana\system\classes\Kohana\Controller.php(69): Controller_Common->before()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#8 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#11 {main} in D:\work\test\kohana\modules\extasy\classes\extasy\view.php:31
2014-09-26 11:44:43 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:44:43 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:48:07 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:48:07 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:48:19 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:79
2014-09-26 11:48:19 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#4 {main} in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:79
2014-09-26 11:49:14 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:14 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:17 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:17 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:36 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:36 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:37 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:37 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:37 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:37 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:38 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:49:38 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:50:02 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:50:02 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:50:17 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:50:17 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:51:45 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: about ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:51:45 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:51:56 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:51:56 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:54:51 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:54:51 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:54:58 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:54:58 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:55:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:55:05 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 11:57:00 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:79
2014-09-26 11:57:00 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#4 {main} in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:79
2014-09-26 11:58:19 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:80
2014-09-26 11:58:19 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#4 {main} in D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php:80
2014-09-26 12:02:51 --- CRITICAL: HTTP_Exception_403 [ 403 ]:  ~ MODPATH\extasy\classes\extasy\controller.php [ 45 ] in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:02:51 --- DEBUG: #0 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(37): Extasy_Controller->forward_403()
#1 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(24): Extasy_Controller_Auth->on_auth_error()
#2 D:\work\test\kohana\modules\extasy\classes\controller\crud.php(67): Extasy_Controller_Auth->before()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(69): Controller_Crud->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:05:49 --- CRITICAL: HTTP_Exception_403 [ 403 ]:  ~ MODPATH\extasy\classes\extasy\controller.php [ 45 ] in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:05:49 --- DEBUG: #0 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(37): Extasy_Controller->forward_403()
#1 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(24): Extasy_Controller_Auth->on_auth_error()
#2 D:\work\test\kohana\modules\extasy\classes\controller\crud.php(67): Extasy_Controller_Auth->before()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(69): Controller_Crud->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:06:40 --- CRITICAL: HTTP_Exception_403 [ 403 ]:  ~ MODPATH\extasy\classes\extasy\controller.php [ 45 ] in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:06:40 --- DEBUG: #0 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(37): Extasy_Controller->forward_403()
#1 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(24): Extasy_Controller_Auth->on_auth_error()
#2 D:\work\test\kohana\modules\extasy\classes\controller\crud.php(67): Extasy_Controller_Auth->before()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(69): Controller_Crud->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:12:20 --- CRITICAL: HTTP_Exception_403 [ 403 ]:  ~ MODPATH\extasy\classes\extasy\controller.php [ 45 ] in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:12:20 --- DEBUG: #0 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(37): Extasy_Controller->forward_403()
#1 D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php(24): Extasy_Controller_Auth->on_auth_error()
#2 D:\work\test\kohana\modules\extasy\classes\extasy\auth\controller\base.php(11): Extasy_Controller_Auth->before()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(69): Extasy_Auth_Controller_Base->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\extasy\classes\extasy\controller\auth.php:37
2014-09-26 12:57:52 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL picture/loadcomp was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Controller.php:80
2014-09-26 12:57:52 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Controller.php(80): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 [internal function]: Kohana_Controller->execute()
#2 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(98): ReflectionMethod->invoke(Object(Controller_Picture))
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#6 {main} in D:\work\test\kohana\system\classes\Kohana\Controller.php:80
2014-09-26 16:44:12 --- CRITICAL: ErrorException [ 2 ]: include(picture_route): failed to open stream: No such file or directory ~ APPPATH\bootstrap.php [ 157 ] in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:44:12 --- DEBUG: #0 D:\work\test\kohana\application\bootstrap.php(157): Kohana_Core::error_handler(2, 'include(picture...', 'D:\work\test\ko...', 157, Array)
#1 D:\work\test\kohana\application\bootstrap.php(157): include()
#2 D:\work\test\kohana\public\index.php(119): require('D:\work\test\ko...')
#3 {main} in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:18 --- CRITICAL: ErrorException [ 2 ]: include(\application\route\picture_route): failed to open stream: No such file or directory ~ APPPATH\bootstrap.php [ 157 ] in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:18 --- DEBUG: #0 D:\work\test\kohana\application\bootstrap.php(157): Kohana_Core::error_handler(2, 'include(\applic...', 'D:\work\test\ko...', 157, Array)
#1 D:\work\test\kohana\application\bootstrap.php(157): include()
#2 D:\work\test\kohana\public\index.php(119): require('D:\work\test\ko...')
#3 {main} in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:18 --- CRITICAL: ErrorException [ 2 ]: include(\application\route\picture_route): failed to open stream: No such file or directory ~ APPPATH\bootstrap.php [ 157 ] in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:18 --- DEBUG: #0 D:\work\test\kohana\application\bootstrap.php(157): Kohana_Core::error_handler(2, 'include(\applic...', 'D:\work\test\ko...', 157, Array)
#1 D:\work\test\kohana\application\bootstrap.php(157): include()
#2 D:\work\test\kohana\public\index.php(119): require('D:\work\test\ko...')
#3 {main} in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:35 --- CRITICAL: ErrorException [ 2 ]: include(/application/route/picture_route): failed to open stream: No such file or directory ~ APPPATH\bootstrap.php [ 157 ] in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:45:35 --- DEBUG: #0 D:\work\test\kohana\application\bootstrap.php(157): Kohana_Core::error_handler(2, 'include(/applic...', 'D:\work\test\ko...', 157, Array)
#1 D:\work\test\kohana\application\bootstrap.php(157): include()
#2 D:\work\test\kohana\public\index.php(119): require('D:\work\test\ko...')
#3 {main} in D:\work\test\kohana\application\bootstrap.php:157
2014-09-26 16:48:32 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: picture/look ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in D:\work\test\kohana\system\classes\Kohana\Request.php:975
2014-09-26 16:48:32 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Request.php(975): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 D:\work\test\kohana\public\index.php(135): Kohana_Request->execute()
#2 {main} in D:\work\test\kohana\system\classes\Kohana\Request.php:975