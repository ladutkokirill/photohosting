<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-29 12:51:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\work\test\kohana\system\classes\Kohana\Cookie.php:67
2014-06-29 12:51:49 --- DEBUG: #0 D:\work\test\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('ZDEDebuggerPres...', NULL)
#1 D:\work\test\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('ZDEDebuggerPres...')
#2 D:\work\test\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\work\test\kohana\system\classes\Kohana\Cookie.php:67