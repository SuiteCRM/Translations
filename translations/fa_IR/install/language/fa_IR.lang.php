<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'فیلتر سریع',
    'LBL_ADVANCED_SEARCH' => 'فیلتر پیشرفته',
    'LBL_BASIC_TYPE' => 'نوع پایه',
    'LBL_ADVANCED_TYPE' => 'نوع پیشرفته',
    'LBL_SYSOPTS_2' => 'چه نوع پایگاه داده خواهد شد مورد استفاده قرار گیرد برای نمونه SuiteCRM شما در حال نصب آن هستید?',
    'LBL_SYSOPTS_DB' => 'تعیین نوع پایگاه داده',
    'LBL_SYSOPTS_DB_TITLE' => 'نوع پایگاه‌داده',
    'LBL_SYSOPTS_ERRS_TITLE' => 'لطفاً قبل از ادامه، خطاهای ذیل را اصلاح نمایید:',
    'ERR_DB_VERSION_FAILURE' => 'عدم توانایی در بررسی نسخه پایگاه داده.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'نام کاربری مدیریت SuiteCRM را مشخص کنید. ',
    'ERR_ADMIN_PASS_BLANK' => 'رمز عبور کاربر مدیر SuiteCRM را مشخص کنید. ',

    'ERR_CHECKSYS' => 'خطا در طول بررسی سازگاری مشاهده شده است.  به منظور نصب  SuiteCRMتان،برای عملکرد صحیح، لطفا گام های مناسبی برای رسیدگی به مسائل ذکر شده در زیر انجام دهید و یا اینکه دکمه بررسی مجدد را فشار دهید، یا دوباره اقدام به نصب نمایید.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'نشد: SuiteCRM برنامه ریز با قابلیت های محدود اجرا خواهد شد.',
    'ERR_CHECKSYS_IMAP' => 'نشد: کتابخانه های IMAP نیاز InboundEmail و مبارزات (ایمیل). نه کاربردی خواهد بود.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (این مجموعه ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'متر و یا بزرگتر در فایل php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'هشدار: غیر قابل نوشتن',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'اوراکل نسخه SuiteCRM پشتیبانی.  شما باید نسخه است که سازگار با نرم افزار SuiteCRM را نصب کنید.  لطفا با ماتریس سازگاری در نکات انتشار نسخه های اوراکل پشتیبانی مراجعه کنید. نسخه فعلی ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'اوراکل نسخه SuiteCRM پشتیبانی.  شما باید نسخه است که سازگار با نرم افزار SuiteCRM را نصب کنید.  لطفا با ماتریس سازگاری در نکات انتشار نسخه های اوراکل پشتیبانی مراجعه کنید. نسخه فعلی ',
    'ERR_CHECKSYS_FASTCGI' => 'ما تشخیص می دهد که مربی FastCGI پی اچ پی به نقشه برداری استفاده نمی شوند. شما نیاز به نصب/پیکربندی نسخه سازگار با نرم افزار SuiteCRM.  لطفا با ماتریس سازگاری در نکات انتشار نسخه های پشتیبانی شده مراجعه کنید. لطفا <a href="http://www.iis.net/php/" target="_blank"> http://www.iis.net/php/</a> برای اطلاعات بیشتر مراجعه کنید ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'برای اینکه در استفاده از IIS/FastCGI بهترین نتیجه حاصل شود، لازم است در پیکربندی php.ini، مقدار fastcgi.logging را عدد ۰ (صفر) تنظیم کنید.',
    'LBL_DB_UNAVAILABLE' => 'بانک اطلاعاتی در دسترس نیست',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'پشتیبانی پایگاه داده یافت نشد.  لطفا درایور های لازم برای یکی از انواع پایگاه داده پشتیبانی زیر حاصل کنید: MySQL یا SQLServer خانم.  شما ممکن است نیاز به برداشتن توضیح فرمت در فایل php.ini و یا recompile با فایل باینری حق بسته به نسخه شما پی اچ پی.  لطفا به راهنمای پی اچ پی خود را برای اطلاعات بیشتر در مورد چگونگی فعال کردن پشتیبانی از پایگاه داده.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'توابع مربوط به کتابخانه های تجزیه کننده XML است که توسط نرم افزار SuiteCRM مورد نیاز پیدا نشد.  شما ممکن است نیاز به برداشتن توضیح فرمت در فایل php.ini و یا recompile با فایل باینری حق بسته به نسخه شما پی اچ پی.  لطفا به راهنمای پی اچ پی خود را برای اطلاعات بیشتر مراجعه کنید.',
    'ERR_CHECKSYS_MBSTRING' => 'توابع مربوط به فرمت چندبايتی رشته پی اچ پی (mbstring) که توسط نرم افزار SuiteCRM مورد نیاز پیدا نشد. <br/> <br/> به طور کلی، ماژول mbstring پیش فرض در PHP فعال است و با--فعال کردن mbstring فعال باید هنگامی که پی اچ پی دوتایی ساخته شده است. لطفا به راهنمای پی اچ پی خود را برای اطلاعات بیشتر در مورد چگونگی فعال کردن پشتیبانی mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'جایگزینی پیکربندی',
    'ERR_CHECKSYS_SAFE_MODE' => 'ویژگی Safe Mode فعال است (لطفاً در php.ini غیرفعالش کنید)',
    'ERR_CHECKSYS_ZLIB' => 'از ZLib پشتیبانی نمی شود: SuiteCRM با وجود ZLib سرعت بسیار بالا تری خواهد دارد.',
    'ERR_CHECKSYS_ZIP' => 'فایل های فشرده پشتیبانی نشد: SuiteCRM نیاز به پشتیبانی از فایل های فشرده به منظور پردازش فایل های فشرده.',
    'ERR_CHECKSYS_PCRE' => 'کتابخانه PCRE نشد: SuiteCRM نیاز کتابخانه PCRE به منظور سبک پرل عبارت منظم مطابق الگوی پردازش.',
    'ERR_CHECKSYS_PCRE_VER' => 'نسخه ی کتابخانه PCRE: کتابخانه ی PCRE نسخه ۷.۰ یا بالاتر برای برای SuiteCRM لازم است.',
    'ERR_DB_ADMIN' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password.',
    'ERR_DB_EXISTS_NOT' => 'پایگاه اطلاعات مشخص شده وجود ندارد.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database already exists with config data. To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing SuiteCRM tables?". To upgrade, use the Upgrade Wizard in the Admin Console. Please read the upgrade documentation located <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'Database Name ای که وارد کرده اید موجود است -- باید نام دیگری انتخاب کنید.',
    'ERR_DB_EXISTS_PROCEED' => 'نام پایگاه داده ارائه شده در حال حاضر وجود دارد.  شما می توانید 1<br> دکمه برگشت را زده و نام پایگاه داده ی جدید <br>2 انتخاب کنید. روی گزینه ی بعدی کلیک کنید و ادامه دهید اما تمام جداول موجود در بانک اطلاعاتی پاک خواهند شد.  <strong>این به این معنی خواهد بود که جداول و داده های شما از بین خواهند رفت.</strong>',
    'ERR_DB_HOSTNAME' => 'نام میزبان نمی تواند خالی باشد.',
    'ERR_DB_INVALID' => 'نوع پایگاه دادۀ انتخابی نامعتبر است.',
    'ERR_DB_LOGIN_FAILURE' => 'یکی از اطلاعات Database Host، نام کاربری و یا روز آن، نامعتبر است، از این رو امکان اتصال به پایگاه داده وجود ندارد. لطفا اطلاعات نامعتبر را اصلاح و دوباره وارد کنید',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'یکی از اطلاعات Database Host، نام کاربری و یا روز آن، نامعتبر است، از این رو امکان اتصال به پایگاه داده وجود ندارد. لطفا اطلاعات نامعتبر را اصلاح و دوباره وارد کنید',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'یکی از اطلاعات Database Host، نام کاربری و یا روز آن، نامعتبر است، از این رو امکان اتصال به پایگاه داده وجود ندارد. لطفا اطلاعات نامعتبر را اصلاح و دوباره وارد کنید',
    'ERR_DB_MYSQL_VERSION' => 'نسخه MySQL ای که دارید، %s ، در SuiteCRM پشتیبانی نمی شود. لازم است یک نسخه ی سازگار را نصب کنید. لطفا برای آگاهی از آن به ماتریس سازگاری که در Release Notes موجود است مراجعه کنید.',
    'ERR_DB_NAME' => 'نام پایگاه داده نباید خالی باشد.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "نام پایگاه داده نباید شامل  '\\', '/', or '.' باشد",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "نام پایگاه داده نمی تواند با, اعداد یا '#' یا '@' شروع شود و نمی تواند شامل یک فضای خالی(space),'\"',\"'\",'*','\\', '/', '؟',':','<', '>','&','!', یا '-' باشد",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Database name can only consist of alphanumeric characters and the symbols '#', '_' or '$'",
    'ERR_DB_PASSWORD' => 'The passwords provided for the SuiteCRM database administrator do not match. Please re-enter the same passwords in the password fields.',
    'ERR_DB_PRIV_USER' => 'Provide a database administrator user name. The user is required for the initial connection to the database.',
    'ERR_DB_USER_EXISTS' => 'User name for SuiteCRM database user already exists -- cannot create another one with the same name. Please enter a new user name.',
    'ERR_DB_USER' => 'Enter a user name for the SuiteCRM database administrator.',
    'ERR_DBCONF_VALIDATION' => 'لطفاً قبل از ادامه، خطاهای ذیل را اصلاح نمایید:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'The passwords provided for the SuiteCRM database user do not match. Please re-enter the same passwords in the password fields.',
    'ERR_ERROR_GENERAL' => 'The following errors were encountered:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'پرونده را نمی توان حذف کرد: ',
    'ERR_LANG_MISSING_FILE' => 'پرونده را نمی توان پیدا کرد: ',
    'ERR_LANG_NO_LANG_FILE' => 'No language pack file found at include/language inside: ',
    'ERR_LANG_UPLOAD_1' => 'There was a problem with your upload. Please try again.',
    'ERR_LANG_UPLOAD_2' => 'Language Packs must be ZIP archives.',
    'ERR_LANG_UPLOAD_3' => 'PHP could not move the temp file to the upgrade directory.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'ورود به سیستم دایرکتوری ارائه فهرست معتبر نیست.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'ورود به سیستم دایرکتوری ارائه فهرست قابل نوشتن نیست.',
    'ERR_NO_DIRECT_SCRIPT' => 'Unable to process script directly.',
    'ERR_NO_SINGLE_QUOTE' => 'نمی‌توان از علامت نقل قول تکی استفاده کرد برای ',
    'ERR_PASSWORD_MISMATCH' => 'The passwords provided for the SuiteCRM admin user do not match. Please re-enter the same passwords in the password fields.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'امکان نوشتن در فایل<span class=stop>config.php</span> وجود ندارد.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file. However, you <strong>must </strong>create the config.php file before you continue to the next step.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Did you remember to create the config.php file?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Warning: Could not write to config.php file. Please ensure it exists.',
    'ERR_PERFORM_HTACCESS_1' => 'نمی توان نوشت ',
    'ERR_PERFORM_HTACCESS_2' => ' فایل.',
    'ERR_PERFORM_HTACCESS_3' => 'If you want to secure your log file from being accessible via browser, create an .htaccess file in your log directory with the line:',
    'ERR_PERFORM_NO_TCPIP' => '<b>We could not detect an Internet connection.</b> When you do have a connection, please visit <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> to register with SuiteCRM. By letting us know a little bit about how your company plans to use SuiteCRM, we can ensure we are always delivering the right application for your business needs.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory provided is not a valid directory.',
    'ERR_SESSION_DIRECTORY' => 'Session directory provided is not a writable directory.',
    'ERR_SESSION_PATH' => 'Session path is required if you wish to specify your own.',
    'ERR_SI_NO_CONFIG' => 'You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php',
    'ERR_SITE_GUID' => 'Application ID is required if you wish to specify your own.',
    'ERROR_SPRITE_SUPPORT' => "Currently we are not able to locate the GD library, as a result you will not be able to use the CSS Sprite functionality.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'سایز فایل آپلودی',
    'ERR_URL_BLANK' => 'url پایه برای SuiteCRM نمونه فراهم کنید.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Could not locate installation record of',
    'ERROR_MANIFEST_TYPE' => 'Manifest file must specify the package type.',
    'ERROR_PACKAGE_TYPE' => 'Manifest file specifies an unrecognized package type',
    'ERROR_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',

    'LBL_BACK' => 'بازگشت',
    'LBL_CANCEL' => 'لغو',
    'LBL_ACCEPT' => 'من قبول می کنم',
    'LBL_CHECKSYS_CACHE' => 'کش قابل نوشتن زیر دایرکتوری ها',
    'LBL_DROP_DB_CONFIRM' => 'نام پایگاه داده ارائه شده در حال حاضر وجود دارد. <br>شما می توانید یا: <br>1. بر روی دکمه ی "لغو" کلیک کنید و نام پایگاه داده جدیدی انتخاب کنید و یا <br>2. بر روی دکمه ی "پذیرش" کلیک کرده و ادامه دهید.  تمام جداول موجود در پایگاه داده دور ریخته خواهند شد. <strong>این به این معنی که تمام جداول و داده های از قبل موجود از بین خواهند رفت.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'کامپوننت',
    'LBL_CHECKSYS_CONFIG' => 'Writable SuiteCRM Configuration File (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'Writeable Custom Directory',
    'LBL_CHECKSYS_DATA' => 'Writable Data Sub-Directories',
    'LBL_CHECKSYS_IMAP' => 'ماژول های IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'باشه (بدون محدودیت)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'قبول (نامحدود)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limit',
    'LBL_CHECKSYS_MODULE' => 'Writable Modules Sub-Directories and Files',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'غیرقابل دسترسی',
    'LBL_CHECKSYS_OK' => 'باشه',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'نسخه PHP',
    'LBL_CHECKSYS_IISVER' => 'IIS Version',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'بررسی مجدد',
    'LBL_CHECKSYS_STATUS' => 'وضعیت',
    'LBL_CHECKSYS_TITLE' => 'System Check Acceptance',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Compression Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Handling Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Please fix the following files or directories before proceeding:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Please fix the following module directories and the files under them before proceeding:',
    'LBL_CHECKSYS_UPLOAD' => 'Writable Upload Directory',
    'LBL_CLOSE' => 'بستن',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'ساخته شده',
    'LBL_CONFIRM_DB_TYPE' => 'نوع پایگاه‌داده',
    'LBL_CONFIRM_NOT' => 'نه',
    'LBL_CONFIRM_TITLE' => 'تایید تنظیمات',
    'LBL_CONFIRM_WILL' => 'خواهد شد',
    'LBL_DBCONF_DB_DROP' => 'Drop Tables',
    'LBL_DBCONF_DB_NAME' => 'نام پایگاه داده',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Database User Password',
    'LBL_DBCONF_DB_PASSWORD2' => 'Re-enter SuiteCRM Database User Password',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Database Administrator Username',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Database Admin Password',
    'LBL_DBCONF_COLLATION' => 'Collation',
    'LBL_DBCONF_CHARSET' => 'مجموعه کاراکترها',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Populate Database with Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choose Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'نام هاست',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Instance',
    'LBL_DBCONFIG_SECURITY' => 'For security purposes, you can specify an exclusive database user to connect to the SuiteCRM database. This user must be able to write, update and retrieve data on the SuiteCRM database that will be created for this instance. This user can be the database administrator specified above, or you can provide new or existing database user information.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Provide existing user',
    'LBL_DBCONFIG_CREATE_DD' => 'Define user to create',
    'LBL_DBCONFIG_SAME_DD' => 'Same as Admin User',
    'LBL_DBCONF_TITLE' => 'پیکربندی پایگاه داده',
    'LBL_DBCONF_TITLE_NAME' => 'Provide Database Name',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Provide Database User Information',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'کلمه عبور',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'نصب در حال حاضر یک بار اجرا شده است.  به عنوان اندازه گیری ایمنی آن از اجرای دومین بار غیر فعال شده است.  اگر شما کاملا مطمئن هستید که می خواهید اجرا دوباره مراجعه به فایل config.php و قرار دادن (یا اضافه کردن) یک متغیر به نام \'installer_locked\' و تنظیم آن را به "غلط".  خط باید شبیه به این:',
    'LBL_DISABLED_HELP_1' => 'برای راهنمایی در نصب، لطفاً به وب‌سایت SuiteCRM سر بزنید.',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'نصب SuiteCRM غیرفعال شده‌است',
    'LBL_HELP' => 'کمک',
    'LBL_INSTALL' => 'نصب',
    'LBL_INSTALL_TYPE_TITLE' => 'گزینه های نصب',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'انتخاب نوع نصب',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>نصب معمولی</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>نصب سفارشی</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Requires minimum information for the installation. Recommended for new users.',
    'LBL_INSTALL_TYPE_MSG3' => 'Provides additional options to set during the installation. Most of these options are also available after installation in the admin screens. Recommended for advanced users.',
    'LBL_LANG_1' => 'To use a language in SuiteCRM other than the default language (US-English), you can upload and install the language pack at this time. You will be able to upload and install language packs from within the SuiteCRM application as well. If you would like to skip this step, click Next.',
    'LBL_LANG_BUTTON_COMMIT' => 'نصب',
    'LBL_LANG_BUTTON_REMOVE' => 'حذف',
    'LBL_LANG_BUTTON_UNINSTALL' => 'حذف نصب',
    'LBL_LANG_BUTTON_UPLOAD' => 'آپلود',
    'LBL_LANG_NO_PACKS' => 'هیچ‌کدام',
    'LBL_LANG_PACK_INSTALLED' => 'The following language packs have been installed: ',
    'LBL_LANG_PACK_READY' => 'The following language packs are ready to be installed: ',
    'LBL_LANG_SUCCESS' => 'The language pack was successfully uploaded.',
    'LBL_LANG_TITLE' => 'بسته های زبان',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installing SuiteCRM now. This may take up to a few minutes.',
    'LBL_LANG_UPLOAD' => 'Upload a Language Pack',
    'LBL_LICENSE_ACCEPTANCE' => 'پذیرش مجوز',
    'LBL_LICENSE_CHECKING' => 'Checking system for compatibility.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Checking Environment',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifying DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'System passed check for compatibility.',
    'LBL_CREATE_CACHE' => 'آماده سازی برای نصب...',
    'LBL_LICENSE_REDIRECT' => 'Redirecting in ',
    'LBL_LICENSE_I_ACCEPT' => 'من قبول می کنم',
    'LBL_LICENSE_PRINTABLE' => ' مشاهده نسخه چاپی ',
    'LBL_PRINT_SUMM' => 'Print Summary',
    'LBL_LICENSE_TITLE_2' => 'مجوز SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'سیاوش',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'دکتر',

    'LBL_ML_ACTION' => 'عملکرد',
    'LBL_ML_DESCRIPTION' => 'توضیحات',
    'LBL_ML_INSTALLED' => 'تاریخ نصب',
    'LBL_ML_NAME' => 'نام',
    'LBL_ML_PUBLISHED' => 'تاریخ انتشار',
    'LBL_ML_TYPE' => 'نوع',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'نسخه',
    'LBL_MSSQL' => 'سرور MySQL',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'پایگاه داده MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'ادامه',
    'LBL_NO' => 'خير',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setting site admin password',
    'LBL_PERFORM_CONFIG_PHP' => 'Creating SuiteCRM configuration file',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creating the database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>on</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creating the Database username and password...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'ایجاد داده های پیش فرض SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'ایجاد کارهای زمانبندی شده پیشفرض',
    'LBL_PERFORM_DEFAULT_USERS' => 'ایجاد کاربران پیش فرض',
    'LBL_PERFORM_DEMO_DATA' => 'Populating the database tables with demo data (this may take a little while)',
    'LBL_PERFORM_DONE' => 'انجام <br>',
    'LBL_PERFORM_FINISH' => 'پایان',
    'LBL_PERFORM_OUTRO_1' => 'راه اندازی SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' در حال حاضر کامل است!',
    'LBL_PERFORM_OUTRO_3' => 'زمان کل: ',
    'LBL_PERFORM_OUTRO_4' => ' ثانیه.',
    'LBL_PERFORM_OUTRO_5' => 'Approximate memory used: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Success!',
    'LBL_PERFORM_TABLES' => 'Creating SuiteCRM application tables, audit tables and relationship metadata',
    'LBL_PERFORM_TITLE' => 'انجام راه اندازی',
    'LBL_PRINT' => 'چاپی',
    'LBL_REG_CONF_1' => 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SuiteCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
    'LBL_REG_CONF_3' => 'از شما به خاطر ثبت نام. در پایان را فشار دهید برای ورود به SuiteCRM را کلیک کنید. شما باید برای اولین بار با استفاده از نام کاربری "مدیر" و رمز عبور شما را در مرحله 2 وارد شده ورود به سیستم.',
    'LBL_REG_TITLE' => 'ثبت نام',

    'LBL_REQUIRED' => '* اجباری',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Application Admin Name',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Re-enter SuiteCRM Admin User Password',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Admin User Password',
    'LBL_SITECFG_APP_ID' => 'شناسه برنامه',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'If selected, you must provide an application ID to override the auto-generated ID. The ID ensures that sessions of one SuiteCRM instance are not used by other instances. If you have a cluster of SuiteCRM installations, they all must share the same application ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Provide Your Own Application ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'If selected, you must specify a log directory to override the default directory for the SuiteCRM log. Regardless of where the log file is located, access to it through a web browser will be restricted via an .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Use a Custom Log Directory',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'If selected, you must provide a secure folder for storing SuiteCRM session information. This can be done to prevent session data from being vulnerable on shared servers.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Use a Custom Session Directory for SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Please fix the following errors before proceeding:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log Directory',
    'LBL_SITECFG_SESSION_PATH' => 'Path to Session Directory<br>(must be writable)',
    'LBL_SITECFG_SITE_SECURITY' => 'انتخاب گزینه های امنیتی',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'If selected, the system will periodically check for updated versions of the application.',
    'LBL_SITECFG_SUITE_UP' => 'چک شدن به طور خودکار برای به روز رسانی?',
    'LBL_SITECFG_TITLE' => 'پیکربندی سایت',
    'LBL_SITECFG_TITLE2' => 'شناسایی کاربر مدیریتی',
    'LBL_SITECFG_SECURITY_TITLE' => 'امنیت سایت',
    'LBL_SITECFG_URL' => 'URL of SuiteCRM Instance',
    'LBL_SITECFG_ANONSTATS' => 'Send Anonymous Usage Statistics?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'If selected, SuiteCRM will send <b>anonymous</b> statistics about your installation to SuiteCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.',
    'LBL_SITECFG_URL_MSG' => 'Enter the URL that will be used to access the SuiteCRM instance after installation. The URL will also be used as a base for the URLs in the SuiteCRM application pages. The URL should include the web server or machine name or IP address.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Enter a name for your system. This name will be displayed in the browser title bar when users visit the SuiteCRM application.',
    'LBL_SITECFG_PASSWORD_MSG' => 'After installation, you will need to use the SuiteCRM admin user (default username = admin) to log in to the SuiteCRM instance. Enter a password for this administrator user. This password can be changed after the initial login. You may also enter another admin username to use besides the default value provided.',
    'LBL_SITECFG_COLLATION_MSG' => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn\'t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT' => 'Sprite Support',
    'LBL_SYSTEM_CREDS' => 'System Credentials',
    'LBL_SYSTEM_ENV' => 'System Environment',
    'LBL_SHOW_PASS' => 'Show Passwords',
    'LBL_HIDE_PASS' => 'Hide Passwords',
    'LBL_HIDDEN' => '<i>(hidden)</i>',
    'LBL_STEP1' => 'Step 1 of 2 - Pre-Installation requirements',
    'LBL_STEP2' => 'Step 2 of 2 - Configuration',
    'LBL_STEP' => 'گام',
    'LBL_TITLE_WELCOME' => 'به SuiteCRM خوش آمدید ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'آیا آماده برای نصب هستند؟',
    'REQUIRED_SYS_COMP' => 'اجزای سیستم مورد نیاز',
    'REQUIRED_SYS_COMP_MSG' =>
        'Before you begin, please be sure that you have the supported versions of the following system components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the SuiteCRM version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'بررسی اولیه سیستم',
    'REQUIRED_SYS_CHK_MSG' =>
        'When you begin the installation process, a system check will be performed on the web server on which the SuiteCRM files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>PHP version</b> &#8211; must be compatible with the application</li>
                      <li><b>Session Variables</b> &#8211; must be working properly</li>
                      <li><b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li>
                      <li><b>Database Support</b> &#8211; must exist for MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; must exist and must have the appropriate permissions to make it writeable</li>
                      <li>The following SuiteCRM files must be writeable:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation.
                                  An error message will be displayed, explaining why your system did not pass the check.
                                  After making any necessary changes, you can undergo the system check again to continue the installation.<br>',


    'REQUIRED_INSTALLTYPE' => 'نصب معمولی یا سفارشی',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the SuiteCRM data <ul><li>Compatible database
                      types: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your SuiteCRM files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the SuiteCRM data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the SuiteCRM database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the SuiteCRM instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for SuiteCRM information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the SuiteCRM log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one SuiteCRM instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Please read the following important information before proceeding with the installation. The information will help you determine whether or not you are ready to install the application at this time.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Choose your language</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Setup Wizard',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Setup Wizard: ',
    'LBL_YES' => 'بله',

    'LBL_PATCHES_TITLE' => 'نصب آخرین پچ ها',
    'LBL_MODULE_TITLE' => 'نصب بسته های زبان',
    'LBL_PATCH_1' => 'If you would like to skip this step, click Next.',
    'LBL_PATCH_TITLE' => 'پچ سیستم',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'نام سیستم',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provide a System Name for the SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Select a patch file from your local computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum Php version required is 5.1.0. Recommended Php version is 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Your current php version is ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Recommended php version is 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'اطلاعات حساب جدید',
        'type' => 'system',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Here is your account username and temporary password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'System-generated password email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'دوباره سازی گذرواژه حساب شما',
        'type' => 'system',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'فراموشی رمز عبور ایمیل',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Two Factor Authentication Code',
        'type' => 'system',
        'description' => "This template is used to send a user a code for Two Factor Authentication.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Two Factor Authentication code is <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Two Factor Authentication code is $code.',
        'name' => 'Two Factor Authentication email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"از" نام:',
    'LBL_FROM_ADDR' => '"از" آدرس:',

    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ارائه دهنده ایمیل خود انتخاب کنید:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'سایر',
    'LBL_MAIL_SMTP_SETTINGS' => 'مشخصات سرور SMTP',
    'LBL_MAIL_SMTPSERVER' => 'سرور SMTP:',
    'LBL_MAIL_SMTPPORT' => 'پورت SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'استفاده از احراز هویت SMTP؟',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP براساس SSL فعال شود یا TLS؟',
    'LBL_GMAIL_SMTPUSER' => 'آدرس جیمیل:',
    'LBL_GMAIL_SMTPPASS' => 'رمز عبور Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'اجازه به کاربران برای استفاده از این حساب برای ایمیل های خروجی:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'هنگامی که این گزینه انتخاب شده است، همه کاربران قادر به ارسال ایمیل با استفاده از همان حساب ایمیل خروجی استفاده می شود به سیستم اعلان ها و هشدارها ارسال خواهد شد.  اگر گزینه ای انتخاب نشده است، کاربران هنوز هم سرور ایمیل خروجی، پس از ارائه اطلاعات حساب خود استفاده کنید.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'رمز عبور ایمیل یاهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'شناسه ایمیل یاهو:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'نام کاربری Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'پورت سرور Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'سرور Exchange:',


    'LBL_MAIL_SMTPUSER' => 'نام کاربری SMTP:',
    'LBL_MAIL_SMTPPASS' => 'گذرواژه SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'نام تجاری',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'نام:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'NEW_LOGO' => 'لوگو را انتخاب کنید:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'آپلود',
    'CURRENT_LOGO' => 'لوگوی فعلی:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'تنظیمات محلی سیستم',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_DATE_FORMAT' => 'فرمت تاریخ:',
    'LBL_TIME_FORMAT' => 'فرمت زمان:',
    'LBL_TIMEZONE' => 'منطقه زمانی:',
    'LBL_LANGUAGE' => 'زبان:',
    'LBL_CURRENCY' => 'واحد پول:',
    'LBL_CURRENCY_SYMBOL' => 'نماد واحد پول:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'نماد اعشار:',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'The uploaded file was only partially uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'هیچ فایل آپلود نشده است.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Missing a temporary folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'ناتوانی در نوشتن فایل بر روی دیسک.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'در حال نصب...',

    'LBL_EMAIL_ADDRESS' => 'آدرس ایمیل:',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Site URL is required.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'ایجاد پایگاه داده...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'ایجاد تنظیمات پیش فرض...',
    'STAT_INSTALL_FINISH' => 'Install finish...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installation process finished, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'گزینه های بیشتر',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Database error',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'کاربر',
    'LBL_DBCONFIG_MSG3_LABEL' => 'نام پایگاه داده',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'نام هاست',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the SuiteCRM database.'
);
