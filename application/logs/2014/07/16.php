<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-16 15:21:01 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '/picture/e39.jpg' for key 'PRIMARY' [ INSERT INTO `photo` (`way`, `ipuser`, `picturename`, `rating`) VALUES ('/picture/e39.jpg', '192.168.6.244', 'e39', '8') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 15:21:01 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\views\picture\putimage.php(9): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:22:35 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:22:35 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(66): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:23:04 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`, `ipuser`, `picturename`, `rating`) VALUES ('', '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:23:04 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\views\picture\putimage.php(9): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:23:20 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:23:20 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(66): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:24:31 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`, `ipuser`, `picturename`, `rating`) VALUES ('', '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:24:31 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\views\picture\putimage.php(9): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:25:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:25:13 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(66): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:29:24 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:29:24 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(66): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:31:17 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`, `ipuser`, `picturename`, `rating`) VALUES ('', '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:31:17 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\views\picture\putimage.php(9): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:32:07 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`, `ipuser`, `picturename`, `rating`) VALUES ('', '', '', '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:32:07 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\views\picture\putimage.php(9): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#5 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#6 D:\work\test\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 D:\work\test\kohana\application\views\main.php(34): Kohana_View->__toString()
#8 D:\work\test\kohana\system\classes\Kohana\View.php(61): include('D:\work\test\ko...')
#9 D:\work\test\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\work\test\ko...', Array)
#10 D:\work\test\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 D:\work\test\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#14 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#17 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:36:59 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`way`) VALUES ('') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:36:59 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(67): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_putimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:43:52 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '' for key 'PRIMARY' [ INSERT INTO `photo` (`picturename`) VALUES ('vbvhnvbhvhb') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:43:52 --- DEBUG: #0 D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 D:\work\test\kohana\application\classes\Controller\picture.php(52): Kohana_ORM->save()
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\database\classes\Kohana\Database\Query.php:251
2014-07-16 22:59:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmp ~ APPPATH\classes\Controller\picture.php [ 51 ] in D:\work\test\kohana\application\classes\Controller\picture.php:51
2014-07-16 22:59:41 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(51): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\work\test\ko...', 51, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:51
2014-07-16 23:02:55 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/picture/h0naapPF2bQ.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 49 ] in file:line
2014-07-16 23:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 49, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(49): move_uploaded_file('C:\Windows\Temp...', '/picture/h0naap...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line
2014-07-16 23:06:04 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(/public/picture/4qeB2ZfarWU.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\picture.php [ 49 ] in file:line
2014-07-16 23:06:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\work\test\ko...', 49, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(49): move_uploaded_file('C:\Windows\Temp...', '/public/picture...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line