<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 12:50:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:50:24 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:36 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:37 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:38 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 12:55:58 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:02:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:02:05 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:02:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:02:53 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:03:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:03:20 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:07:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:07:34 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\views\picture\top.php(11): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#9 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#10 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#11 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#15 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#18 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:22:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$photos' (T_VARIABLE) ~ APPPATH\classes\Controller\picture.php [ 19 ] in file:line
2014-07-14 13:22:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:56 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:27:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:27:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:28:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:28:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:28:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:28:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_allpp() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:29:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::die_() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:29:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::die_() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:29:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:29:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::die_() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:29:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:29:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::die_() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:29:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:30:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\classes\Model\photo.php [ 16 ] in file:line
2014-07-14 13:30:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:31:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Model\photo.php [ 21 ] in file:line
2014-07-14 13:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:31:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: photohosting ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:31:17 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 65, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(320): Kohana_Database::instance('photohosting')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#4 D:\work\test\kohana\application\classes\Controller\picture.php(18): Kohana_ORM::factory('photo')
#5 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#8 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#11 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database.php:65
2014-07-14 13:31:54 --- CRITICAL: Database_Exception [ 1146 ]: Table 'photohosting.photos' doesn't exist [ SHOW FULL COLUMNS FROM `photos` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-07-14 13:31:54 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('photos')
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\work\test\kohana\application\classes\Controller\picture.php(18): Kohana_ORM::factory('photo')
#7 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#13 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2014-07-14 13:32:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::die_() ~ APPPATH\classes\Controller\picture.php [ 21 ] in file:line
2014-07-14 13:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:32:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\picture.php [ 19 ] in file:line
2014-07-14 13:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:33:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 19 ] in file:line
2014-07-14 13:33:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:33:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 19 ] in file:line
2014-07-14 13:33:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:33:46 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:33:46 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('name')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:34:40 --- CRITICAL: Kohana_Exception [ 0 ]: The picrutename property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:34:40 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('picrutename')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('picrutename')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:40:05 --- CRITICAL: Kohana_Exception [ 0 ]: The useripS property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:40:05 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('useripS')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('useripS')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 13:45:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 45 ] in file:line
2014-07-14 13:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:46:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-14 13:46:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 13:47:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 61 ] in file:line
2014-07-14 13:47:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:04:59 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:04:59 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:06:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 46 ] in file:line
2014-07-14 14:06:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:07:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:07:06 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:39 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:40 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:42 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:08:42 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:10:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 45 ] in file:line
2014-07-14 14:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:11:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 45 ] in file:line
2014-07-14 14:11:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:11:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 7 ] in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 14:11:35 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 7, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 14:12:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:12:13 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:14:21 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:14:21 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('find_all')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:14:44 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:14:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->find_all()
#1 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:14:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:14:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:15:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:15:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:16:38 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:16:38 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->find_all()
#1 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:18:49 --- CRITICAL: Kohana_Exception [ 0 ]: The all property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:18:49 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('all')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('all')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:19:15 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ipuser - assumed 'ipuser' ~ APPPATH\classes\Model\photo.php [ 18 ] in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:19:15 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 18, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:18
2014-07-14 14:19:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:19:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:20:26 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:20:26 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:20:32 --- CRITICAL: Kohana_Exception [ 0 ]: The photos property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:20:32 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photos')
#1 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_ORM->__get('photos')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(19): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 14:49:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:49:10 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 14:50:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:50:47 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:50:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:50:55 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:51:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:51:15 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:51:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ipuser ~ APPPATH\views\picture\look.php [ 7 ] in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 14:51:38 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 7, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 14:51:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:51:50 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:53:11 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant picturename - assumed 'picturename' ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:53:11 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:53:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 6 ] in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:53:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 6, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:6
2014-07-14 14:54:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:54:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 14:59:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 14:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:00:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:00:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:00:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:00:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:00:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:00:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:00:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:01:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:05:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:10:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 18 ] in file:line
2014-07-14 15:10:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:11:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:27 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:43 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\picture.php [ 17 ] in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:11:44 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 17, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_top()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:17
2014-07-14 15:14:28 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:14:28 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->find_all()
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:16:07 --- CRITICAL: Kohana_Exception [ 0 ]: The photohosting property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:07 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photohosting')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photohosting')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:07 --- CRITICAL: Kohana_Exception [ 0 ]: The photohosting property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:07 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photohosting')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photohosting')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:08 --- CRITICAL: Kohana_Exception [ 0 ]: The photohosting property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:08 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photohosting')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photohosting')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:08 --- CRITICAL: Kohana_Exception [ 0 ]: The photohosting property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:08 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photohosting')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photohosting')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:13 --- CRITICAL: Kohana_Exception [ 0 ]: The photohosting property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:13 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photohosting')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photohosting')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:42 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:42 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:53 --- CRITICAL: Kohana_Exception [ 0 ]: The photos property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:16:53 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photos')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('photos')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:26:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: picturename ~ APPPATH\views\picture\look.php [ 7 ] in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 15:26:50 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 7, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:7
2014-07-14 15:27:20 --- CRITICAL: Kohana_Exception [ 0 ]: The raring property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:20 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('raring')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('raring')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:52 --- CRITICAL: Kohana_Exception [ 0 ]: The raring property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:52 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('raring')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('raring')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- CRITICAL: Kohana_Exception [ 0 ]: The raring property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('raring')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('raring')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- CRITICAL: Kohana_Exception [ 0 ]: The raring property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('raring')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('raring')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- CRITICAL: Kohana_Exception [ 0 ]: The raring property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:27:53 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('raring')
#1 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_ORM->__get('raring')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-07-14 15:28:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 8 ] in D:\work\test\kohana\application\views\picture\look.php:8
2014-07-14 15:28:29 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 8, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:8
2014-07-14 15:28:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ipuser ~ APPPATH\views\picture\look.php [ 8 ] in D:\work\test\kohana\application\views\picture\look.php:8
2014-07-14 15:28:36 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 8, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:8
2014-07-14 15:29:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:29:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''way'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''way'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''way'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''way'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''way'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:30:48 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ipuser - assumed 'ipuser' ~ APPPATH\classes\Model\photo.php [ 19 ] in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:30:48 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 19, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:37:10 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ipuser - assumed 'ipuser' ~ APPPATH\classes\Model\photo.php [ 19 ] in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:37:10 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 19, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:38:41 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ipuser - assumed 'ipuser' ~ APPPATH\classes\Model\photo.php [ 19 ] in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:38:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Model\photo.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\work\test\ko...', 19, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(45): Model_Photo->get_allpp()
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\application\classes\Model\photo.php:19
2014-07-14 15:39:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '''' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\classes\Model\photo.php [ 19 ] in file:line
2014-07-14 15:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:40:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:40:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:40:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:41:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:41:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:41:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:41:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:46:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:47:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:47:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:47:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:47:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:47:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:48:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:48:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:48:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:48:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:48:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:49:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\Model\photo.php [ 28 ] in file:line
2014-07-14 15:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:56:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:56:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 15:57:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Model\photo.php [ 23 ] in file:line
2014-07-14 15:57:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:02:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:02:04 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:03:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:03:30 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:03:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:03:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:04:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:04:07 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:08:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:08:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:09:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:09:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:09:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:10:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\views\picture\look.php [ 4 ] in file:line
2014-07-14 16:10:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:10:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\views\picture\look.php [ 4 ] in file:line
2014-07-14 16:10:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:10:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:11:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:11:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:11:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:11:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:11:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:11:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:11:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:11:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:11:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\picture\look.php [ 13 ] in file:line
2014-07-14 16:11:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 16:12:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:12:17 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:14:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:14:10 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:20 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:21 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:22 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:36 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:37 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:15:38 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:26 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:33 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:16:41 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:18:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:18:02 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:18:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:18:44 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:36:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:36:15 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:44:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:44:04 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:45:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:45:44 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:17 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:18 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:54 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:48:54 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:49:39 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:56:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 16:56:17 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 21:57:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Photo::get_all() ~ APPPATH\classes\Controller\picture.php [ 59 ] in file:line
2014-07-14 21:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:28:44 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:28:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:29:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: testss ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-07-14 22:29:34 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:4
2014-07-14 22:30:04 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:32:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:32:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:32:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:32:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:32:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:32:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:33:44 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:33:45 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:33:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:33:46 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:35:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\picture\top.php [ 5 ] in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:35:01 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 5, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:35:10 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:35:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:37:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:38:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photos ~ APPPATH\views\picture\look.php [ 4 ] in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 22:38:01 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\look.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\look.php:4
2014-07-14 22:40:34 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\picture\top.php [ 5 ] in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:40:34 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(5): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\work\test\ko...', 5, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:41:47 --- CRITICAL: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH\views\picture\top.php [ 5 ] in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:41:47 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(5): Kohana_Core::error_handler(2, 'Illegal string ...', 'D:\work\test\ko...', 5, Array)
#1 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#3 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#5 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#6 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#7 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#11 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#14 {main} in D:\work\test\kohana\application\views\picture\top.php:5
2014-07-14 22:42:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:42:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:42:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:46:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:46:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:46:23 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\views\picture\top.php [ 5 ] in file:line
2014-07-14 22:46:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 22:56:04 --- CRITICAL: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702
2014-07-14 22:56:04 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('image', '1111')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(90): Kohana_ORM->__set('image', '1111')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:702