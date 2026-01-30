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
    'LBL_BASIC_SEARCH' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_BASIC_TYPE' => 'Basic Type',
    'LBL_ADVANCED_TYPE' => 'Advanced Type',
    'LBL_SYSOPTS_2' => 'What type of database will be used for the SuiteCRM instance you are about to install?',
    'LBL_SYSOPTS_DB' => 'Specify Database Type',
    'LBL_SYSOPTS_DB_TITLE' => 'Database Type',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Please fix the following errors before proceeding:',
    'ERR_DB_VERSION_FAILURE' => 'Unable to check database version.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Provide the user name for the SuiteCRM admin user. ',
    'ERR_ADMIN_PASS_BLANK' => 'Provide the password for the SuiteCRM admin user. ',

    'ERR_CHECKSYS' => 'Errors have been detected during compatibility check. In order for your SuiteCRM Installation to function properly, please take the proper steps to address the issues listed below and either press the recheck button, or try installing again.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Not found: SuiteCRM Scheduler will run with limited functionality.',
    'ERR_CHECKSYS_IMAP' => 'Not found: InboundEmail and Campaigns (Email) require the IMAP libraries. Neither will be functional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Set this to ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M or larger in your php.ini file)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Warning: Not Writable',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP හි ඔබේ අනුවාදය SuiteCRM විසින් පහසුකම් සපයන්නේ නැත. ඔබ SuiteCRM අයදුම් ගැලපෙන අනුවාදය ස්ථාපනයට අවශ්ය වනු ඇත. සහාය, PHP අනුවාද සඳහා කරන ලද මුදා හැරීමේ සටහන් දී ගැලපුම් නියමයන් උපදෙස් ලබාගන්න. ඔබේ අනුවාදය වේ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Your version of IIS is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported IIS Versions. Your version is ',
    'ERR_CHECKSYS_FASTCGI' => 'We detect that you are not using a FastCGI handler mapping for PHP. You will need to install/configure a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported Versions. Please see <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> for details ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS / FastCGI භාවිත කරමින භාවිතා ප්රශස්ත අත්දැකීම් සඳහා, ඔබේ php.ini ගොනුව තුල 0 fastcgi.logging කළේය.',
    'LBL_DB_UNAVAILABLE' => 'Database unavailable',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Database Support was not found. Please make sure you have the necessary drivers for one of the following supported Database Types: MySQL or MS SQLServer. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information on how to enable Database Support.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Functions associated with XML Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the  php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.',
    'ERR_CHECKSYS_MBSTRING' => 'Functions associated with the Multibyte Strings PHP extension (mbstring) that are needed by the SuiteCRM application were not found. <br/><br/>Generally, the mbstring module is not enabled by default in PHP and must be activated with --enable-mbstring when the PHP binary is built. Please refer to your PHP Manual for more information on how to enable mbstring support.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode is On (you may wish to disable in php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib support not found: SuiteCRM reaps enormous performance benefits with zlib compression.',
    'ERR_CHECKSYS_ZIP' => 'ZIP support not found: SuiteCRM needs ZIP support in order to process compressed files.',
    'ERR_CHECKSYS_PCRE' => 'PCRE library not found: SuiteCRM needs PCRE library in order to process Perl style of regular expression pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library version: SuiteCRM needs PCRE library 7.0 or above to process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established. Please enter a valid user name and password.',
    'ERR_DB_EXISTS_NOT' => 'The specified database does not exist.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database already exists with config data. To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing SuiteCRM tables?". To upgrade, use the Upgrade Wizard in the Admin Console. Please read the upgrade documentation located <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'The provided Database Name already exists -- cannot create another one with the same name.',
    'ERR_DB_EXISTS_PROCEED' => 'The provided Database Name already exists. You can<br>1. hit the back button and choose a new database name <br>2. click next and continue but all existing tables on this database will be dropped. <strong>This means your tables and data will be blown away.</strong>',
    'ERR_DB_HOSTNAME' => 'Host name cannot be blank.',
    'ERR_DB_INVALID' => 'Invalid database type selected.',
    'ERR_DB_LOGIN_FAILURE' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established. Please enter a valid host, username and password',
    'ERR_DB_MYSQL_VERSION' => 'Your MySQL version (%s) is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported MySQL versions.',
    'ERR_DB_NAME' => 'Database name cannot be blank.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Database name cannot contain a '\\', '/', or '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Database name cannot begin with a number, '#', or '@' and cannot contain a space, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Database name can only consist of alphanumeric characters and the symbols '#', '_' or '$'",
    'ERR_DB_PASSWORD' => 'The passwords provided for the SuiteCRM database administrator do not match. Please re-enter the same passwords in the password fields.',
    'ERR_DB_PRIV_USER' => 'Provide a database administrator user name. The user is required for the initial connection to the database.',
    'ERR_DB_USER_EXISTS' => 'User name for SuiteCRM database user already exists -- cannot create another one with the same name. Please enter a new user name.',
    'ERR_DB_USER' => 'Enter a user name for the SuiteCRM database administrator.',
    'ERR_DBCONF_VALIDATION' => 'Please fix the following errors before proceeding:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'The passwords provided for the SuiteCRM database user do not match. Please re-enter the same passwords in the password fields.',
    'ERR_ERROR_GENERAL' => 'The following errors were encountered:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Cannot delete file: ',
    'ERR_LANG_MISSING_FILE' => 'Cannot find file: ',
    'ERR_LANG_NO_LANG_FILE' => 'No language pack file found at include/language inside: ',
    'ERR_LANG_UPLOAD_1' => 'There was a problem with your upload. Please try again.',
    'ERR_LANG_UPLOAD_2' => 'Language Packs must be ZIP archives.',
    'ERR_LANG_UPLOAD_3' => 'PHP could not move the temp file to the upgrade directory.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Log directory provided is not a valid directory.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Log directory provided is not a writable directory.',
    'ERR_NO_DIRECT_SCRIPT' => 'Unable to process script directly.',
    'ERR_NO_SINGLE_QUOTE' => 'සඳහා තනි උද්ධෘත ලකුණ භාවිත කල නොහැක',
    'ERR_PASSWORD_MISMATCH' => 'The passwords provided for the SuiteCRM admin user do not match. Please re-enter the same passwords in the password fields.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Cannot write to the <span class=stop>config.php</span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file. However, you <strong>must </strong>create the config.php file before you continue to the next step.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Did you remember to create the config.php file?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Warning: Could not write to config.php file. Please ensure it exists.',
    'ERR_PERFORM_HTACCESS_1' => 'Cannot write to the ',
    'ERR_PERFORM_HTACCESS_2' => ' file.',
    'ERR_PERFORM_HTACCESS_3' => 'If you want to secure your log file from being accessible via browser, create an .htaccess file in your log directory with the line:',
    'ERR_PERFORM_NO_TCPIP' => '<b>We could not detect an Internet connection.</b> When you do have a connection, please visit <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> to register with SuiteCRM. By letting us know a little bit about how your company plans to use SuiteCRM, we can ensure we are always delivering the right application for your business needs.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory provided is not a valid directory.',
    'ERR_SESSION_DIRECTORY' => 'Session directory provided is not a writable directory.',
    'ERR_SESSION_PATH' => 'Session path is required if you wish to specify your own.',
    'ERR_SI_NO_CONFIG' => 'You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php',
    'ERR_SITE_GUID' => 'Application ID is required if you wish to specify your own.',
    'ERROR_SPRITE_SUPPORT' => "Currently we are not able to locate the GD library, as a result you will not be able to use the CSS Sprite functionality.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Upload File Size',
    'ERR_URL_BLANK' => 'Provide the base URL for the SuiteCRM instance.',
    'ERR_UW_NO_UPDATE_RECORD' => 'ස්ථාපනය වාර්තාවක් හැකි ක්රියාවක් නොවේ',
    'ERROR_MANIFEST_TYPE' => 'ප්රකාශ ගොනුව පැකේජය වර්ගය නියම කල යුතුය.',
    'ERROR_PACKAGE_TYPE' => 'ප්රකාශ ගොනු හඳුනා නොගත් පැකේජය වර්ගය දක්වයි',
    'ERROR_VERSION_INCOMPATIBLE' => 'උඩුගත SuiteCRM මෙම සංස්කරණය සමග අනුකූල නොවේ:',

    'LBL_BACK' => 'ආපසු',
    'LBL_CANCEL' => 'අවලංගු කරන්න',
    'LBL_ACCEPT' => 'I Accept',
    'LBL_CHECKSYS_CACHE' => 'Writable Cache Sub-Directories',
    'LBL_DROP_DB_CONFIRM' => 'The provided Database Name already exists.<br>You can either:<br>1. Click on the Cancel button and choose a new database name, or <br>2. Click the Accept button and continue. All existing tables in the database will be dropped. <strong>This means that all of the tables and pre-existing data will be blown away.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Component',
    'LBL_CHECKSYS_CONFIG' => 'Writable SuiteCRM Configuration File (config.php)',
    'LBL_CHECKSYS_CURL' => 'සමහර දත්ත සම්පිණ්ඩක මොඩියුලය',
    'LBL_CHECKSYS_CUSTOM' => 'Writeable Custom Directory',
    'LBL_CHECKSYS_DATA' => 'Writable Data Sub-Directories',
    'LBL_CHECKSYS_IMAP' => 'IMAP මොඩියුලය',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'OK (No Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Unlimited)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limit',
    'LBL_CHECKSYS_MODULE' => 'Writable Modules Sub-Directories and Files',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'ලද නොහැක',
    'LBL_CHECKSYS_OK' => 'හරි',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP Version',
    'LBL_CHECKSYS_IISVER' => 'IIS Version',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Re-check',
    'LBL_CHECKSYS_STATUS' => 'තත්වය',
    'LBL_CHECKSYS_TITLE' => 'System Check Acceptance',
    'LBL_CHECKSYS_XML' => 'XML සටහන',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Compression Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Handling Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Please fix the following files or directories before proceeding:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Please fix the following module directories and the files under them before proceeding:',
    'LBL_CHECKSYS_UPLOAD' => 'Writable Upload Directory',
    'LBL_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'be created',
    'LBL_CONFIRM_DB_TYPE' => 'Database Type',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => 'සැකසුම් තහවුරු කරන්න',
    'LBL_CONFIRM_WILL' => 'will',
    'LBL_DBCONF_DB_DROP' => 'Drop Tables',
    'LBL_DBCONF_DB_NAME' => 'Database Name',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Database User Password',
    'LBL_DBCONF_DB_PASSWORD2' => 'Re-enter SuiteCRM Database User Password',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Database Administrator Username',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Database Admin Password',
    'LBL_DBCONF_COLLATION' => 'සංචයන',
    'LBL_DBCONF_CHARSET' => 'අක්ෂර මාලාව',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Populate Database with Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choose Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'Host Name',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Instance',
    'LBL_DBCONFIG_SECURITY' => 'For security purposes, you can specify an exclusive database user to connect to the SuiteCRM database. This user must be able to write, update and retrieve data on the SuiteCRM database that will be created for this instance. This user can be the database administrator specified above, or you can provide new or existing database user information.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Provide existing user',
    'LBL_DBCONFIG_CREATE_DD' => 'Define user to create',
    'LBL_DBCONFIG_SAME_DD' => 'Same as Admin User',
    'LBL_DBCONF_TITLE' => 'Database Configuration',
    'LBL_DBCONF_TITLE_NAME' => 'Provide Database Name',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Provide Database User Information',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'මුරපදය',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'The installer has already been run once. As a safety measure, it has been disabled from running a second time. If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called \'installer_locked\' and set it to \'false\'. The line should look like this:',
    'LBL_DISABLED_HELP_1' => 'For installation help, please visit the SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM Installation has been Disabled',
    'LBL_HELP' => 'උදව්',
    'LBL_INSTALL' => 'ස්ථාපනය',
    'LBL_INSTALL_TYPE_TITLE' => 'Installation Options',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Choose Install Type',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Requires minimum information for the installation. Recommended for new users.',
    'LBL_INSTALL_TYPE_MSG3' => 'Provides additional options to set during the installation. Most of these options are also available after installation in the admin screens. Recommended for advanced users.',
    'LBL_LANG_1' => 'To use a language in SuiteCRM other than the default language (US-English), you can upload and install the language pack at this time. You will be able to upload and install language packs from within the SuiteCRM application as well. If you would like to skip this step, click Next.',
    'LBL_LANG_BUTTON_COMMIT' => 'ස්ථාපනය',
    'LBL_LANG_BUTTON_REMOVE' => 'ඉවත් කරන්න',
    'LBL_LANG_BUTTON_UNINSTALL' => 'අස්ථාපනය කරන්න',
    'LBL_LANG_BUTTON_UPLOAD' => 'උඩුගත',
    'LBL_LANG_NO_PACKS' => 'කිසිවක් නැත',
    'LBL_LANG_PACK_INSTALLED' => 'The following language packs have been installed: ',
    'LBL_LANG_PACK_READY' => 'The following language packs are ready to be installed: ',
    'LBL_LANG_SUCCESS' => 'The language pack was successfully uploaded.',
    'LBL_LANG_TITLE' => 'භාෂා ඇසුරුම',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installing SuiteCRM now. This may take up to a few minutes.',
    'LBL_LANG_UPLOAD' => 'Upload a Language Pack',
    'LBL_LICENSE_ACCEPTANCE' => 'License Acceptance',
    'LBL_LICENSE_CHECKING' => 'Checking system for compatibility.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Checking Environment',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifying DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'System passed check for compatibility.',
    'LBL_CREATE_CACHE' => 'Preparing to Install...',
    'LBL_LICENSE_REDIRECT' => 'Redirecting in ',
    'LBL_LICENSE_I_ACCEPT' => 'I Accept',
    'LBL_LICENSE_PRINTABLE' => ' Printable View ',
    'LBL_PRINT_SUMM' => 'Print Summary',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM License',

    'LBL_LOCALE_NAME_FIRST' => 'ඩේවිඩ්',
    'LBL_LOCALE_NAME_LAST' => 'ලිවිංස්ටන්',
    'LBL_LOCALE_NAME_SALUTATION' => 'ආචාර්ය.',

    'LBL_ML_ACTION' => 'කටයුතු',
    'LBL_ML_DESCRIPTION' => 'විස්තරය',
    'LBL_ML_INSTALLED' => 'දිනය ප්රාප්ත',
    'LBL_ML_NAME' => 'නම',
    'LBL_ML_PUBLISHED' => 'දිනය ප්රකාශයට පත් කරන',
    'LBL_ML_TYPE' => 'වර්ගය',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'පිටපත',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'ඊලඟ',
    'LBL_NO' => 'නැහැ',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setting site admin password',
    'LBL_PERFORM_CONFIG_PHP' => 'Creating SuiteCRM configuration file',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creating the database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>on</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creating the Database username and password...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creating default SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creating default scheduler jobs',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creating default users',
    'LBL_PERFORM_DEMO_DATA' => 'Populating the database tables with demo data (this may take a little while)',
    'LBL_PERFORM_DONE' => 'done<br>',
    'LBL_PERFORM_FINISH' => 'අවසානයි',
    'LBL_PERFORM_OUTRO_1' => 'The setup of SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' is now complete!',
    'LBL_PERFORM_OUTRO_3' => 'Total time: ',
    'LBL_PERFORM_OUTRO_4' => ' seconds.',
    'LBL_PERFORM_OUTRO_5' => 'Approximate memory used: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Success!',
    'LBL_PERFORM_TABLES' => 'Creating SuiteCRM application tables, audit tables and relationship metadata',
    'LBL_PERFORM_TITLE' => 'Perform Setup',
    'LBL_PRINT' => 'මුද්රණය',
    'LBL_REG_CONF_1' => 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SuiteCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
    'LBL_REG_CONF_3' => 'Thank you for registering. Click on the Finish button to login to SuiteCRM. You will need to log in for the first time using the username "admin" and the password you entered in step 2.',
    'LBL_REG_TITLE' => 'ලියාපදිංචි කිරීම',

    'LBL_REQUIRED' => '* Required field',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Application Admin Name',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Re-enter SuiteCRM Admin User Password',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Admin User Password',
    'LBL_SITECFG_APP_ID' => 'Application ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'If selected, you must provide an application ID to override the auto-generated ID. The ID ensures that sessions of one SuiteCRM instance are not used by other instances. If you have a cluster of SuiteCRM installations, they all must share the same application ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Provide Your Own Application ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'If selected, you must specify a log directory to override the default directory for the SuiteCRM log. Regardless of where the log file is located, access to it through a web browser will be restricted via an .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Use a Custom Log Directory',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'If selected, you must provide a secure folder for storing SuiteCRM session information. This can be done to prevent session data from being vulnerable on shared servers.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Use a Custom Session Directory for SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Please fix the following errors before proceeding:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log Directory',
    'LBL_SITECFG_SESSION_PATH' => 'Path to Session Directory<br>(must be writable)',
    'LBL_SITECFG_SITE_SECURITY' => 'Select Security Options',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'If selected, the system will periodically check for updated versions of the application.',
    'LBL_SITECFG_SUITE_UP' => 'Automatically Check For Updates?',
    'LBL_SITECFG_TITLE' => 'Site Configuration',
    'LBL_SITECFG_TITLE2' => 'Identify Administration User',
    'LBL_SITECFG_SECURITY_TITLE' => 'Site Security',
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
    'LBL_STEP' => 'පියවර',
    'LBL_TITLE_WELCOME' => 'Welcome to the SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Are you ready to install?',
    'REQUIRED_SYS_COMP' => 'Required System Components',
    'REQUIRED_SYS_COMP_MSG' =>
        'Before you begin, please be sure that you have the supported versions of the following system components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the SuiteCRM version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Initial System Check',
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


    'REQUIRED_INSTALLTYPE' => 'Typical or Custom install',
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
    'LBL_YES' => 'ඔව්',

    'LBL_PATCHES_TITLE' => 'Install Latest Patches',
    'LBL_MODULE_TITLE' => 'Install Language Packs',
    'LBL_PATCH_1' => 'If you would like to skip this step, click Next.',
    'LBL_PATCH_TITLE' => 'System Patch',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'පද්ධතිය නම',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provide a System Name for the SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Select a patch file from your local computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP අනුවාදය 5 හෝ ඉහත අවශ්ය වේ.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum Php version required is 5.1.0. Recommended Php version is 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(ඔබේ වත්මන් PHP අනුවාදය වේ ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Recommended php version is 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php පසු ගැළපුම mode සක්රිය කර ඇත. ඉදිරියට සඳහා අක්රිය zend.ze1_compatibility_mode සකසන්න',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'New account information',
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
        'subject' => 'Reset your account password',
        'type' => 'system',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'Forgot Password email',
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

    'LBL_FROM_NAME' => 'නම "වෙතින්":',
    'LBL_FROM_ADDR' => 'ලිපිනය "සිට":',

    'LBL_WIZARD_SMTP_DESC' => 'එවැනි පැවරුම දැනුම්දීම් හා නව පරිශීලක මුරපද ලෙස ඊ-තැපැල් යැවීමට භාවිතා කරනු ඇත යන ඊ-තැපැල් ගිණුම ලබා දීම. මෙම නිශ්චිත ඊ-තැපැල් ගිණුම එවන ලෙස පරිශීලකයන් SuiteCRM ඊ-තැපැල් ලැබෙනු ඇත.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ඔබගේ විද්යුත් සපයන්නා තෝරන්න:',

    'LBL_SMTPTYPE_GMAIL' => 'ජීමේල්',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo තැපෑල',
    'LBL_SMTPTYPE_EXCHANGE' => 'මයික්රොසොෆ්ට් විනිමය',
    'LBL_SMTPTYPE_OTHER' => 'වෙනත්',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP සේවාදායකය පිරිවිතර',
    'LBL_MAIL_SMTPSERVER' => 'SMTP සේවාදායකය:',
    'LBL_MAIL_SMTPPORT' => 'SMTP තොට:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP සත්යාපනය භාවිතා කරන්න?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SSL හෝ TLS කට SMTP සක්රීය කරන්න?',
    'LBL_GMAIL_SMTPUSER' => 'ජීමේල් විද්යුත් ලිපිනය:',
    'LBL_GMAIL_SMTPPASS' => 'ජීමේල් මුරපදය:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'පරිශීලකයන් පිටතට යන විද්යුත් තැපැල් මෙම ගිණුම භාවිතා කිරීමට ඉඩ දෙන්න:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'මෙම විකල්පය තෝරාගෙන තිබෙන විට සියළු පරිශීලකයන් හට පද්ධතිය දැනුම්දීම් හා පණිවිඩ යැවීමට භාවිතා එම ධූරයෙන් ඉවත්ව යන තැපැල් ගිණුම භාවිතා ඊ-තැපැල් යැවීමට හැකි වනු ඇත. එම විකල්පය තෝරා ගෙන නොමැති නම් පරිශීලකයන් තවමත් තමන්ගේ ගිණුම් තොරතුරු ලබා පසු පිටතට යන තැපැල් සේවාදායකය භාවිතා කළ හැකිය.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'යාහු! තැපැල් රහස් වචනය:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'යාහු! තැපැල් හැඳුනුම්පත් අංකය:',

    'LBL_EXCHANGE_SMTPPASS' => 'විනිමය රහස් වචනය:',
    'LBL_EXCHANGE_SMTPUSER' => 'විනිමය පරිශීලක නාමය:',
    'LBL_EXCHANGE_SMTPPORT' => 'විනිමය සේවාදායකය තොට:',
    'LBL_EXCHANGE_SMTPSERVER' => 'විනිමය සේවාදායකය:',


    'LBL_MAIL_SMTPUSER' => 'SMTP පරිශීලක නාමය:',
    'LBL_MAIL_SMTPPASS' => 'SMTP රහස් වචනය:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'හංවඩු ගැසීම',
    'LBL_WIZARD_SYSTEM_DESC' => 'ඔබගේ SuiteCRM හංවඩු කිරීම සඳහා ඔබේ සංවිධානය \ නම සහ ලාංඡනය ලබා දීම.',
    'SYSTEM_NAME_WIZARD' => 'නම:',
    'SYSTEM_NAME_HELP' => 'මෙය ඔබේ බ්රවුසරයේ ටයිටල් බාර් එකේ දී ප්රදර්ශනය කරන නම.',
    'NEW_LOGO' => 'ලාංඡනය තෝරන්න:',
    'NEW_LOGO_HELP' => 'මෙම රූපය ගොනු ආකෘතිය .png හෝ .jpg හෝ විය හැක. උපරිම උස 170 px වන අතර උපරිම පළල 450px වේ. ඕනෑම දිශාවකට විශාල බව රූපයක් උඩුගත මෙම උපරිම මාන පරිමාණ ව ඇත.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'උඩුගත',
    'CURRENT_LOGO' => 'වත්මන් ලාංඡනය:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'පද්ධති ප්රාදේශිකය සැකසුම්',
    'LBL_WIZARD_LOCALE_DESC' => 'ඔබ SuiteCRM දත්ත ඔබගේ භූගෝලීය පිහිටීම මත පදනම් පෙන්නුම් කිරීමට කැමති ආකාරය සඳහන් කරන්න. ඔබ ලබා ඇති සැකසුම් පෙරනිමි වනු ඇත. පරිශීලකයන්ට ඔවුන්ගේ මනාපයන් සැකසිය හැකි වනු ඇත.',
    'LBL_DATE_FORMAT' => 'දිනය ආකෘතිය:',
    'LBL_TIME_FORMAT' => 'වේලාව ආකෘතිය:',
    'LBL_TIMEZONE' => 'වේලා කලාපය:',
    'LBL_LANGUAGE' => 'භාෂා:',
    'LBL_CURRENCY' => 'මුදල්:',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s වෙන්කර:',
    'LBL_DECIMAL_SEP' => 'දශමය:',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'මෙම ගොනුව උඩුගත php.ini දී upload_max_filesize උපදෙස් ඉක්මවා යයි.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'මෙම ගොනුව උඩුගත HTML ආකෘති පත්රය, හි නිශ්චිතව දක්වා ඇති බව ද MAX_FILE_SIZE උපදෙස් ඉක්මවා යයි.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'මෙම ගොනුව උඩුගත කෙරුම භාගික වශයෙන් පමණක් උඩුගත කර ඇත.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'ගොනුව උඩුගත නොමැත කරන ලදි.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'තාවකාලික ෆෝල්ඩරය අතුරුදන්.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'තැටිය වෙත ගොනු ලිවීම අසමත් විය.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Install...',

    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය:',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Site URL is required.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'Create database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Create default settings...',
    'STAT_INSTALL_FINISH' => 'Install finish...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installation process finished, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'More options',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Database error',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'පරිශීලක',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Database Name',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Host Name',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the SuiteCRM database.'
);
