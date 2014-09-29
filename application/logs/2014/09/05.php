<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-05 12:30:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\Controller\picture.php [ 72 ] in file:line
2014-09-05 12:30:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 12:30:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'private' (T_PRIVATE) ~ APPPATH\classes\Controller\picture.php [ 72 ] in file:line
2014-09-05 12:30:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 12:37:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\picture.php [ 53 ] in file:line
2014-09-05 12:37:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 12:37:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\picture.php [ 57 ] in file:line
2014-09-05 12:37:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 12:38:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\picture.php [ 51 ] in file:line
2014-09-05 12:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-05 12:56:24 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 12:56:24 --- DEBUG: #0 D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('1')
#1 D:\work\test\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('1')
#2 D:\work\test\kohana\application\classes\Controller\picture.php(47): Kohana_Image::factory('1')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:26 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:26 --- DEBUG: #0 D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('1')
#1 D:\work\test\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('1')
#2 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Image::factory('1')
#3 D:\work\test\kohana\application\classes\Controller\picture.php(42): Model_Photo->turn('1')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:31 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:31 --- DEBUG: #0 D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('1')
#1 D:\work\test\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('1')
#2 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Image::factory('1')
#3 D:\work\test\kohana\application\classes\Controller\picture.php(42): Model_Photo->turn('1')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:54 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:54 --- DEBUG: #0 D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('1')
#1 D:\work\test\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('1')
#2 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Image::factory('1')
#3 D:\work\test\kohana\application\classes\Controller\picture.php(42): Model_Photo->turn('1')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:57 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:37:57 --- DEBUG: #0 D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('1')
#1 D:\work\test\kohana\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('1')
#2 D:\work\test\kohana\application\classes\Model\photo.php(18): Kohana_Image::factory('1')
#3 D:\work\test\kohana\application\classes\Controller\picture.php(42): Model_Photo->turn('1')
#4 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#7 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#10 {main} in D:\work\test\kohana\modules\image\classes\Kohana\Image\GD.php:91
2014-09-05 14:42:33 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:42:33 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(42): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:42:56 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:42:56 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(42): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:43:19 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:43:19 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(42): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:43:49 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:43:49 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(42): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:44:03 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 14:44:03 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(42): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_editimage()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 16:02:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Picture::$first ~ APPPATH\classes\Controller\picture.php [ 69 ] in D:\work\test\kohana\application\classes\Controller\picture.php:69
2014-09-05 16:02:56 --- DEBUG: #0 D:\work\test\kohana\application\classes\Controller\picture.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\work\test\ko...', 69, Array)
#1 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#7 {main} in D:\work\test\kohana\application\classes\Controller\picture.php:69
2014-09-05 16:03:29 --- CRITICAL: Kohana_Exception [ 0 ]: The first property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 16:03:29 --- DEBUG: #0 D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('first')
#1 D:\work\test\kohana\application\classes\Controller\picture.php(69): Kohana_ORM->__get('first')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_look()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in D:\work\test\kohana\modules\orm\classes\Kohana\ORM.php:603
2014-09-05 16:11:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\picture\top.php [ 4 ] in D:\work\test\kohana\application\views\picture\top.php:4
2014-09-05 16:11:04 --- DEBUG: #0 D:\work\test\kohana\application\views\picture\top.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\work\test\ko...', 4, Array)
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