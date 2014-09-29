<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-19 11:08:29 --- CRITICAL: ErrorException [ 2 ]: imagecreatefromjpeg(): gd-jpeg: JPEG library reports unrecoverable error:  ~ APPPATH\classes\Controller\picture.php [ 163 ] in file:line
2014-09-19 11:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'D:\work\test\ko...', 163, Array)
#1 D:\work\test\kohana\application\classes\Controller\picture.php(163): imagecreatefromjpeg('D:\work\test\ko...')
#2 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#8 {main} in file:line