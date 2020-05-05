<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/* USSER DEFINE CONSTANTS FOR APPLICATION */
define('BASE_URL','http://localhost:8080/Main_project');

define('COMPANY_LOGO',BASE_URL.'/Assets/Recruiter_Dashboard/img/logo/CompanyLogo.png');
define('COMPANY_NAME',BASE_URL.'/Assets/Recruiter_Dashboard/img/logo/CompanyName.png');
define('TAB_LOGO',BASE_URL.'/Assets/Recruiter_Dashboard/img/logo/tablogo.png');
define('SENDER_EMAIL','Bot Email Address'); // Enter Email Address
define('SENDER_PASSWORD','Bot Email Password'); // Enter Email id Password

// for assets
define('REC_ASSETS_PATH',BASE_URL.'/Assets/Recruiter_Dashboard');
define('ADMIN_ASSETS_PATH',BASE_URL.'/Assets/Admin_Dashboard');
define('CAL_ASSETS_PATH',BASE_URL.'/Assets/Calendar_script/fullcalendar');
define('SIGN_LOGIN_ASSETS_PATH',BASE_URL.'/Assets/login_page');

// TBLs
define('TBL_USERS','users');
define('TBL_CANDIDATE_DETAILS','candidate_details');
define('TBL_CALENDAR','calendar_events');
define('TBL_PROFILE','profile_info'); // profile INFO TABLE



//Controller
define('LOGIN_URL',BASE_URL.'/index.php/Login');
define('SIGNUP_URL',BASE_URL.'/index.php/Login/signup');
define('FORGOT_PASSWORD_URL',BASE_URL.'/index.php/Login/forgotpassword');
define('RESET_PASSWORD_URL',BASE_URL.'/index.php/Login/reset_password');

define('R_DASHBOARD_URL',BASE_URL.'/index.php/R_dashboard');
define('R_CALENDAR_URL',BASE_URL.'/index.php/R_dashboard/Rcalendar_view');
define('R_CANDIDATE_URL',BASE_URL.'/index.php/R_dashboard/Rcandidate_view');
define('R_AC_DETAILS_URL',BASE_URL.'/index.php/R_dashboard/Raccount_details_view');
define('R_SCANDIDATE_URL',BASE_URL.'/index.php/R_dashboard/Rscandidate_view');
define('R_SCHEDULE_URL',BASE_URL.'/index.php/R_dashboard/Rschedule_view');
define('R_STATUS_URL',BASE_URL.'/index.php/R_dashboard/Rstatus_view');
define('R_LOGOUT_URL',BASE_URL.'/index.php/R_dashboard/logout');



define('A_DASHBOARD_URL',BASE_URL.'/index.php/A_dashboard');
define('A_CALENDAR_URL',BASE_URL.'/index.php/A_dashboard/Acalendar_view');
define('A_RECRUITER_URL',BASE_URL.'/index.php/A_dashboard/Arecruiter_view');
define('A_AC_DETAILS_URL',BASE_URL.'/index.php/A_dashboard/Aaccount_details_view');
define('A_SCANDIDATE_URL',BASE_URL.'/index.php/A_dashboard/Ascandidate_view');
define('A_HISTORY_URL',BASE_URL.'/index.php/A_dashboard/Ahistory_view');
define('A_TIMESHEET_URL',BASE_URL.'/index.php/A_dashboard/Atime_sheet_view');
define('A_LOGOUT_URL',BASE_URL.'/index.php/A_dashboard/logout');
