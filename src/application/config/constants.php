<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);
define('ATTENDANCE_TIME_LIMIT',20);
define('GRADE_TIME_LIMIT', 1);
define('HIDE_ALL_TOTAL_IN_GRADE_FOR_TEACHER_ONLY', 1);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/* security site key used for password encryption */
define('SITE_KEY', 'dsadas43sdf234fd3654sgjbnjbdnb4jenbd');

define('ADMINISTRATOR', "administrator");
define('MASTER_URL', "http://localhost:8080/");
define('CURR_DIR', rtrim(str_replace(array("/sg","/vn","/in","/id","/ph"),"",str_replace("\\", "/", getcwd())),"/").'/');

/* End of file constants.php */
/* Location: ./application/config/constants.php */