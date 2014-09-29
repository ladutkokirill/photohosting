<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-29 11:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$update_View ~ APPPATH\classes\Controller\picture.php [ 55 ] in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:22:26 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 55, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:23:21 --- CRITICAL: Kohana_Exception [ 0 ]: The update_View property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:23:21 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('update_View')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_ORM->__get('update_View')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:24:11 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: update_View ~ SYSPATH\classes\Kohana\View.php [ 171 ] in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:24:11 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_View->__get('update_View')
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:29:33 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$update_View ~ APPPATH\classes\Controller\picture.php [ 55 ] in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:29:33 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 55, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:39:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$update_View ~ APPPATH\classes\Controller\picture.php [ 55 ] in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:39:37 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 55, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:39:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$update_View ~ APPPATH\classes\Controller\picture.php [ 55 ] in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:39:42 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 55, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:55
2014-08-29 11:50:06 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:50:06 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(56): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:52:24 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:52:24 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(56): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:52:59 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:52:59 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(57): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:53:31 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:53:31 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(57): Model_Photo->update_View('1')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:53:39 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 11:53:39 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(57): Model_Photo->update_View('1')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 12:36:57 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 12:36:57 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(57): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 13:06:02 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 13:06:02 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(55): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 13:06:05 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 13:06:05 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 D:\work\test\kohana\application\classes\Model\photo.php(21): Kohana_ORM->__get('photo')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(55): Model_Photo->update_View()
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_looking()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-08-29 14:24:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Picture::updateView() ~ APPPATH\classes\Controller\picture.php [ 54 ] in file:line
2014-08-29 14:24:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line