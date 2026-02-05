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
    'LBL_ADVANCED_SEARCH' => 'Advance Filter',
    'LBL_BASIC_TYPE' => 'Basic type',
    'LBL_ADVANCED_TYPE' => 'Advance Type',
    'LBL_SYSOPTS_2' => 'Which kind database u wan use for de SuiteCRM instance wey u wan install now?',
    'LBL_SYSOPTS_DB' => 'Particular Type of Database ',
    'LBL_SYSOPTS_DB_TITLE' => 'Type of Database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Abeg correct dis mistakes before u begin:',
    'ERR_DB_VERSION_FAILURE' => 'E no fit check database version. ',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Put de person name for de SuiteCRM admin user. ',
    'ERR_ADMIN_PASS_BLANK' => 'Put de password for e SuiteCRM admin user. ',

    'ERR_CHECKSYS' => 'Dey don see mistakes wen dem dey try do combination. If u wan make your SuiteCRM Installation work well for u, abeg follow de steps wey dem list below so that u go fit address de problems well then press de recheck button, or try install am again.  ',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference dey On (dis suppose set to Off for php.ini) ',
    'ERR_CHECKSYS_CURL' => 'E no see am: SuiteCRM Scheduler go run wit small functionality.',
    'ERR_CHECKSYS_IMAP' => 'E no see am: InboundEmail and Campaigns (Email) need de IMAP libraries. Weda i go de functional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Set dis to ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M or large for your php.ini file) ',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Warning: No fit write am',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Dis PHP version wey u get SuiteCRM no support am. U need install version wey go fit work wit SuiteCRM application. Abeg u go need consult de Compatibility Matrix make e Release Notes wey support PHP Versions. Your version be ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Dis IIS version wey u get SuiteCRM no support am. U need install version wey go fit work wit SuiteCRM application. Abeg u go need consult de Compatibility Matrix make e Release Notes wey support IIS Versions. Your version be',
    'ERR_CHECKSYS_FASTCGI' => 'We don see say u no use FastCGI handler mapping for PHP. U go need install/configure de version wey go fit work well wit SuiteCRM application. Abeg u go consult de Compatibility Matrix make e Release Notes for Versions wey de support am. Abeg see <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> for details ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'If u wan get very big experience for dis IIS/FastCGI sapi wey u dey use o, u go set fastcgi.logging to 0 for your php.ini file.',
    'LBL_DB_UNAVAILABLE' => 'Database no dey available',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'E no see Database Support. Abeg make sure say u get all de necessary drivers dem for any of dis kind Database wey dey support: MySQL or MS SQLServer. U fit no wan comment for de extension again for de php.ini file, or u wan compile again wit de right binary file, depending as ur version of PHP be. Abeg go check your PHP Manual for plenty information on how u fit enable Database Support.
',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'SuiteCRM application no fit find functions dem wey relate wit XML Parser Libraries wey im need. U fit no wan comment again for de extension in php.ini file, or compile again wit de correct binary file, depending as your version of PHP be. Abeg go check your PHP Manual for plenty information.',
    'ERR_CHECKSYS_MBSTRING' => 'SuiteCRM application no fit find functions dem wey relate wit de Multibyte Strings PHP extension (mbstring) wey im need. <br/><br/>Generally, de mbstring module no dey enable by default in PHP and na must say dey need activate am wit--enable-mbstring wen de PHP binary dey built. Abeg go check your PHP Manual for plenty information on how u fit enable mbstring support. ',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'De config file don exists but dey no fit write am. Abeg follow de necessary steps so that u go fit dey write de file. Depending as your Operating system be, dis fit need make u change de permissions by running chmod 766, or make u press de filename wey dey for de right hand side so that u go fit access de properties and uncheck de read only option.
',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'De config override file don exist but dey no fit write am. Abeg follow de necessary steps so that u go fit dey write de file. Depending as your Operating system be, dis fit need make u change de permissions by running chmod 766, or make u press de file filename wey dey for de right hand side so that u go fit access de properties and uncheck de read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'De Custom Directory dey exist but dey no fit write am. U go need change change permissions on am (chmod 766) or u press am for de right hand side and uncheck de read only option, depending as your Operating System be. Abeg follow de steps wey dey need so that u go fit dey write am.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "De files or directories wey dem list below, dey no write am or maybe dem don miss and dey no fit create am. Depending as your Operating System be, if u wan correct dis u go need change permissions on de files or parent directory (chmod 755), or u press de right hand side on the parent directory and uncheck de 'read only' option and apply am to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode dey On (you fit wan disable am in php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'No fit find ZLib support: SuiteCRM reaps enormous performance benefits wit zlib compression.',
    'ERR_CHECKSYS_ZIP' => 'No fit find ZIP support: SuiteCRM need ZIP supportso that e go fit process compress files.',
    'ERR_CHECKSYS_PCRE' => 'No fit find PCRE library: SuiteCRM need PCRE library so that e go fit process Perl style of regular expression pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library version: SuiteCRM need PCRE library 7.0 or above so that e fit process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'De database administrator username and/or password wey u put dey invalid, and e no go fit establish de connection to de database. Abeg put user name and password wey dey valid. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'De database administrator username and/or password wey u put dey invalid, and e no go fit establish connection to de database. Abeg put user name and password wey dey valid.
',
    'ERR_DB_EXISTS_NOT' => 'De database wey u wan so no dey.
',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database don dey already wit config data. If u wan run installation wit de database wey u don choose, abeg run de installation again and choose: "Drop and recreate existing SuiteCRM tables?". If u wan upgrade am, u need use de Upgrade Wizard for de Admin Console. Abeg read de upgrade documentation wey e don locate so<a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'De Database Name dey already -- so e no fit create another one wit de same name',
    'ERR_DB_EXISTS_PROCEED' => 'De Database Name don dey already. U fit <br>1. Press de back button and choose new database name <br>2. Press next and continue but all de tables dem wey dey for dis database go drop. <strong>dis mean say your tables and data go blow away.</strong>',
    'ERR_DB_HOSTNAME' => 'Host name no fit dey empty.',
    'ERR_DB_INVALID' => 'Dey don select invalid database type. ',
    'ERR_DB_LOGIN_FAILURE' => 'De database host, username, and/or password wey u put dey invalid, and e no go fit establish connection to de database.  Abeg put valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'De database host, username, and/or password wey u put dey invalid, and e no go fit establish connection to de database.  Abeg put valid host, username and password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'De database host, username, and/or password wey u put dey invalid, and e no go fit establish connection to de database.  Abeg put valid host, username and password',
    'ERR_DB_MYSQL_VERSION' => 'Your MySQL version (%s) no dey support by SuiteCRM. U go need install version wey go fit work well wit de SuiteCRM application. Abeg u go consult Compatibility Matrix make e Release Notes for MySQL versions wey dey support am. ',
    'ERR_DB_NAME' => 'Database name no fit dey empty. ',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Database name no fit contain dis '\\', '/', or '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Database name no fit begin wit number, '#', or '@' and e no fit contain space, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'
",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Database name fit get only alphanumeric characters dem and de symbols '#', '_' or '$'",
    'ERR_DB_PASSWORD' => 'De passwords wey u put for de SuiteCRM database administrator no match. Abeg put de same passwords again for de password fields.',
    'ERR_DB_PRIV_USER' => 'Put database administrator user name. De user dey required for de initial connection to de database.
',
    'ERR_DB_USER_EXISTS' => 'User name for SuiteCRM database user don already dey -- e no fit create another one wit de same name. Abeg put new user name.',
    'ERR_DB_USER' => 'Put user name for de SuiteCRM database administrator.
',
    'ERR_DBCONF_VALIDATION' => 'Abeg correct dis mistakes before u begin:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'De passwords wey u put for de SuiteCRM database user no match. Abeg put de same passwords password fields again. ',
    'ERR_ERROR_GENERAL' => 'Na dis mistakes we encounter:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'U no fit comot file: ',
    'ERR_LANG_MISSING_FILE' => 'E no fit find file: ',
    'ERR_LANG_NO_LANG_FILE' => 'De no find any language pack file for include/language inside:',
    'ERR_LANG_UPLOAD_1' => 'U bin get wahala wen u dey upload . Abeg try am again.',
    'ERR_LANG_UPLOAD_2' => 'Na must say Language Packs go be ZIP archives.',
    'ERR_LANG_UPLOAD_3' => 'PHP no fit move de temp file to de upgrade directory.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Log directory wey u put no be valid directory.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Log directory wey u put no be directory wey dey fit write. 
',
    'ERR_NO_DIRECT_SCRIPT' => 'E no fit process script directly.',
    'ERR_NO_SINGLE_QUOTE' => 'E no fit use single quotation mark for ',
    'ERR_PASSWORD_MISMATCH' => 'De passwords we u put for de SuiteCRM admin user no match. Abeg put de passwords for de password fields again.
',
    'ERR_PERFORM_CONFIG_PHP_1' => 'E no fit write to de <span class=stop>config.php</span> file.
',
    'ERR_PERFORM_CONFIG_PHP_2' => 'You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file. However, you <strong>must </strong>create the config.php file before you continue to the next step.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'U bin remember create de config.php file? ',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Warning: E no fit write to config.php file. Abeg dey sure say e exist.
',
    'ERR_PERFORM_HTACCESS_1' => 'E no fit write to de',
    'ERR_PERFORM_HTACCESS_2' => 'file. ',
    'ERR_PERFORM_HTACCESS_3' => 'If u wan secure your log file make dem no fit access am through browser, create de .htaccess file for your log directory wit de line:',
    'ERR_PERFORM_NO_TCPIP' => '<b>We no fit get Internet connection.</b> Wen u dey get connection, abeg visit <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a>if u wan register wit SuiteCRM. As u don let us know small things about your company and de plan on how u go use SuiteCRM, we fit assure u say we dey always deliver better application wey your business need.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory wey u put no be valid directory.
',
    'ERR_SESSION_DIRECTORY' => 'Session directory wey u put no be directory wey dey fit write.
',
    'ERR_SESSION_PATH' => 'U need session path if u wan specify your own. ',
    'ERR_SI_NO_CONFIG' => 'U bin no include config_si.php for de document root, or u bin no define $sugar_config_si in config.php',
    'ERR_SITE_GUID' => 'U need Application ID if u wan specify your own.',
    'ERROR_SPRITE_SUPPORT' => "Right now we no fit locate de GD library, because of that u no go fit use des CSS Sprite functionality.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration need make eey change am so that e go fit allow files wey be at least 6MB to upload.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Upload File Size',
    'ERR_URL_BLANK' => 'Put de base URL for de SuiteCRM instance.',
    'ERR_UW_NO_UPDATE_RECORD' => 'No fit locate installation record of',
    'ERROR_MANIFEST_TYPE' => 'This manifest so, suppose contain the kind package wey e dey carry.',
    'ERROR_PACKAGE_TYPE' => 'Manifest file don show package type wey e no sabi',
    'ERROR_VERSION_INCOMPATIBLE' => 'This file so no go work for here, the version no dey compatible with this SuiteCRM:',

    'LBL_BACK' => 'Back',
    'LBL_CANCEL' => 'Clean am',
    'LBL_ACCEPT' => 'I Agree',
    'LBL_CHECKSYS_CACHE' => ' Cache Sub-Directories Wey dey fit wite',
    'LBL_DROP_DB_CONFIRM' => 'De Database Name wey u put don dey already.<br>U fit either:<br>1. Press de Cancel button and choose new database name, or <br>2. Press de Accept button and continue. All de tables wey don dey already for de database go drop. <strong>Dis mean say all de tables and data wey don dey already  go blow away.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Component',
    'LBL_CHECKSYS_CONFIG' => 'SuiteCRM Configuration File (config.php) wey dey fit write',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'Custom Directory wey dey fit write',
    'LBL_CHECKSYS_DATA' => 'Data Sub-Directories wey dey fit write',
    'LBL_CHECKSYS_IMAP' => 'IMAP Module',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'OK (No Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Unlimited)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limit',
    'LBL_CHECKSYS_MODULE' => 'Modules Sub-Directories and Fileswey dey fit write',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'E no dey Available ',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP Version',
    'LBL_CHECKSYS_IISVER' => 'IIS Version',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Check am again ',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'System Check Acceptance',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Compression Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Handling Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Abeg correct dis files or directories before u begin:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Abeg correct dis module directories and de files wey dey under dem before u begin:',
    'LBL_CHECKSYS_UPLOAD' => 'Upload Directory wey dey fit write',
    'LBL_CLOSE' => 'Close',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'Dey create am',
    'LBL_CONFIRM_DB_TYPE' => 'Type of Database',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => 'Confam settings',
    'LBL_CONFIRM_WILL' => 'will',
    'LBL_DBCONF_DB_DROP' => 'Drop Tables',
    'LBL_DBCONF_DB_NAME' => 'Database Name',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Database User Password',
    'LBL_DBCONF_DB_PASSWORD2' => 'Put SuiteCRM Database User Password again',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database User',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Username of Database Administrator ',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Database Admin Password',
    'LBL_DBCONF_COLLATION' => 'Collation',
    'LBL_DBCONF_CHARSET' => 'Character set',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Populate Database wit Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Choose Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'Host Name',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Instance',
    'LBL_DBCONFIG_SECURITY' => 'For security purpose dem, u fit specify exclusive database user make e connect to de SuiteCRM database. Dis user must sabi write, update and retrieve data for de SuiteCRM database wey dey go create for dis instance. Dis user fit be database administrator wey dey don mention above, or u put new or database user information wey don dey already.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Put user wey don dey already ',
    'LBL_DBCONFIG_CREATE_DD' => 'Define user make e create',
    'LBL_DBCONFIG_SAME_DD' => 'De Same like Admin User',
    'LBL_DBCONF_TITLE' => 'Database Configuration',
    'LBL_DBCONF_TITLE_NAME' => 'Put Database Name',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Put de information of Database User',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Password',
    'LBL_DISABLED_DESCRIPTION_2' => 'After u don make dis change, u fit press de "Start" button below make e begin your installation. <i>After de installation don  complete, u go wan change de value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Dey bin don run de installer once already. As e be safety measure, dey don disable am make e no run de second time. If u don very sure say u wan run am again, abeg go your config.php file and locate (or add) de variable wey dey call \'installer_locked\' and set am to \'false\'. De line go dey like dis:',
    'LBL_DISABLED_HELP_1' => 'If u wan help for installation, abeg visit de SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'Dey don Disable SuiteCRM Installation ',
    'LBL_HELP' => 'Help',
    'LBL_INSTALL' => 'Install',
    'LBL_INSTALL_TYPE_TITLE' => 'Options dem for Installation',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Choose de kind installation wey u wan',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG2' => ' Information wey dey need for de installation dey small. Recommend for new users.',
    'LBL_INSTALL_TYPE_MSG3' => 'Put additional options make e set wen installation dey go on. Most of dis options dem also dey available after installation for de admin screens. Recommend for users wey don dey advance. ',
    'LBL_LANG_1' => 'If u wan use language for SuiteCRM wey no be default language (US-English), u fit upload and install de language pack dis time. U go fit upload and install language packs from around de SuiteCRM application also. If u wan  skip dis step, press Next. ',
    'LBL_LANG_BUTTON_COMMIT' => 'Install',
    'LBL_LANG_BUTTON_REMOVE' => 'Comot am',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Uninstall',
    'LBL_LANG_BUTTON_UPLOAD' => 'Upload',
    'LBL_LANG_NO_PACKS' => 'none',
    'LBL_LANG_PACK_INSTALLED' => 'Dey don already install dis language packs dem:',
    'LBL_LANG_PACK_READY' => 'Dis language packs dem don dey ready for installation:',
    'LBL_LANG_SUCCESS' => 'De language pack don upload successfully ',
    'LBL_LANG_TITLE' => 'Language Pack',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installing SuiteCRM now. Dis fit take some minutes.',
    'LBL_LANG_UPLOAD' => 'Upload de Language Pack',
    'LBL_LICENSE_ACCEPTANCE' => 'License Acceptance',
    'LBL_LICENSE_CHECKING' => 'Check system so that u go fit know if e dey compatible.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Checking Environment',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifying DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'System pass check if e dey compatible. ',
    'LBL_CREATE_CACHE' => 'Prepare to Install...',
    'LBL_LICENSE_REDIRECT' => 'E don direct u again enter',
    'LBL_LICENSE_I_ACCEPT' => 'I Agree',
    'LBL_LICENSE_PRINTABLE' => 'Printable View ',
    'LBL_PRINT_SUMM' => 'Print Summary',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM License',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_DESCRIPTION' => 'Na for here you go sabi as the thing be',
    'LBL_ML_INSTALLED' => 'Day wey e Install',
    'LBL_ML_NAME' => 'Wetin be your name',
    'LBL_ML_PUBLISHED' => 'Day wey e set for people to use',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'E no fit uninstall',
    'LBL_ML_VERSION' => 'Version',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)
',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP) ',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'Next',
    'LBL_NO' => 'No',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setting site admin password',
    'LBL_PERFORM_CONFIG_PHP' => 'E dey create SuiteCRM configuration file',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Creating database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>on</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creating the Database username and password...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creating default SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creating default scheduler jobs',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creating default users',
    'LBL_PERFORM_DEMO_DATA' => 'Populating the database tables with demo data (this may take a little while)',
    'LBL_PERFORM_DONE' => 'done<br>',
    'LBL_PERFORM_FINISH' => 'Finish',
    'LBL_PERFORM_OUTRO_1' => 'The setup of SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' is now complete!',
    'LBL_PERFORM_OUTRO_3' => 'Total time: ',
    'LBL_PERFORM_OUTRO_4' => ' seconds.',
    'LBL_PERFORM_OUTRO_5' => 'Approximate memory used: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Success!',
    'LBL_PERFORM_TABLES' => 'Creating SuiteCRM application tables, audit tables and relationship metadata',
    'LBL_PERFORM_TITLE' => 'Perform Setup',
    'LBL_PRINT' => 'Print',
    'LBL_REG_CONF_1' => 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SuiteCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
    'LBL_REG_CONF_3' => 'Thank you for registering. Click on the Finish button to login to SuiteCRM. You will need to log in for the first time using the username "admin" and the password you entered in step 2.',
    'LBL_REG_TITLE' => 'Registration',

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
    'LBL_STEP' => 'Step',
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
    'LBL_YES' => 'Yes',

    'LBL_PATCHES_TITLE' => 'Install Latest Patches',
    'LBL_MODULE_TITLE' => 'Install Language Packs',
    'LBL_PATCH_1' => 'If you would like to skip this step, click Next.',
    'LBL_PATCH_TITLE' => 'System Patch',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'System Name',
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

    'LBL_FROM_NAME' => '"From" Name:',
    'LBL_FROM_ADDR' => '"From" Address:',

    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft exchange',
    'LBL_SMTPTYPE_OTHER' => 'Other',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Instead of make u activate SMTP u activate SSL or TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Make you Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Make you Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Make you Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Upload',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'System Locale Settings',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_CURRENCY' => 'Money dem:',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator:',
    'LBL_DECIMAL_SEP' => 'Decimal symbol:',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'The uploaded file was only partially uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'No file was uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Missing a temporary folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Failed to write file to disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Install...',

    'LBL_EMAIL_ADDRESS' => 'Email Address:',
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

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'User',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Database Name',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Host Name',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the SuiteCRM database.'
);
