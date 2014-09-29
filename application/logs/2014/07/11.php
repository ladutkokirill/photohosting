<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-11 16:27:14 --- CRITICAL: View_Exception [ 0 ]: The requested view /picture/loadkomp/putimage could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\work\test\kohana\system\classes\Kohana\View.php:137
2014-07-11 16:27:14 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/picture/loadko...')
#1 D:\work\test\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('/picture/loadko...', NULL)
#2 D:\work\test\kohana\application\classes\Controller\picture.php(52): Kohana_View::factory('/picture/loadko...')
#3 D:\work\test\kohana\system\classes\Kohana\Controller.php(84): Controller_Picture->action_loadkomp()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\work\test\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Picture))
#6 D:\work\test\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\work\test\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\work\test\kohana\public\index.php(120): Kohana_Request->execute()
#9 {main} in D:\work\test\kohana\system\classes\Kohana\View.php:137