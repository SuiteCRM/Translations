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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Nag-una',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 code sa salapi',
    'DEFAULT_CURRENCY_NAME' => 'Ngalan sa Salapi',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbolo sa Salapi',
    'DEFAULT_DATE_FORMAT' => 'Default nga pormat sa petsa',
    'DEFAULT_DECIMAL_SEP' => 'Simbolo sa decimal',
    'DEFAULT_LANGUAGE' => 'Default nga Sinultihan',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interface sa Tiggamit',
    'DEFAULT_THEME' => 'Default nga tema',
    'DEFAULT_TIME_FORMAT' => 'Default nga pormat sa oras',

    'DISPLAY_RESPONSE_TIME' => 'Ipakita ang oras sa pag-response sa serber',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Tugoti ang nigamit nga makatago sa mga tab',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistema sa mga kahimtangan',
    'LBL_LOGVIEW' => 'Ipatan-aw ang log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gamiton ang SMTP para authentication?',
    'LBL_MAIL_SMTPPASS' => 'Password sa SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port sa SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Serber sa SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Username sa SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Kangalan sa SMTP nga Serber',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pagpili og imohang email nga kangalan:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Bayloan og password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Bayloan og Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Bayloan og serber Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Bayloan og serber:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tugotan ang mga user nga makagamit aning account para sa mogawas nga email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kung kining kapilian ang napili, tanan nga mga user makahimo og padala og email gamit ang outgoing mail account gigamit sa pagpadala og pahibalo sa sistema og pag-alisto. Kung ang kapilian ang wla napili. Tanan nga mga user pwede gehapon makagamit sa outgoing mail serber pagkahuman og paghatag sa ilang impormasyon sa ilang account.',
    'LBL_MAILMERGE' => 'Ang mail e merge',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum nga Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Mao kini ang minimum nga bili para ang usa pilion og maka-angkon og dashlets auto-refresh. Pagpahimutang sa "dili gyud" dili makahimo og auto-refreshing para sa tanang dashlets.',
    'LBL_MODULE_FAVICON' => 'Ipakita ang modyul icon ingon sa favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Kung ikaw kay naa sa modyul kauban ang icon, gamita ang modyul nga icon ingon sa favicon, imbis ang tema sa favicon, diha sa browser tab.',
    'LBL_MODULE_NAME' => 'Sistema sa mga kahimtangan',
    'LBL_MODULE_ID' => 'Mga configurator',
    'LBL_MODULE_TITLE' => 'Interface sa Tiggamit',
    'LBL_NOTIFY_FROMADDRESS' => '"Gikan sa" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email sa mga hilisgutan:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy host',
    'LBL_PROXY_ON_DESC' => 'I-configure ang proxy serber address og ang mga kahimtang sa authentication',
    'LBL_PROXY_ON' => 'Gamiton ang proxy serber?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Pantalan',
    'LBL_PROXY_TITLE' => 'Mga kahimtang sa proxy',
    'LBL_PROXY_USERNAME' => 'Gigamit nga pangalan',
    'LBL_RESTORE_BUTTON_LABEL' => 'Ibalik',
    'LBL_SYSTEM_SETTINGS' => 'Sistema sa mga kahimtangan',
    'LBL_USE_REAL_NAMES' => 'Ipakita ang tibuok ngalan',
    'LBL_USE_REAL_NAMES_DESC' => 'Ipakita ang tibouk ngalan sa tiggamit imbis nga ilang tiggamit nga ngalan sa assingment fields.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Di-makahimo og kabig sa lead aksyon para sa kabigon nga mga lead',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Kung ang lead aduna nay nakabig, kung mahimo kini kuhaon ang kapilian nga nakabig ng lead aksyon.',
    'LBL_ENABLE_ACTION_MENU' => 'Ipakita ang aksyon sulod sa minus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Pagpili sa ipakita nga DetailView og subpanel nga aksyon sa sulod nga dropdown menu. Kung wla mapili, ang aksyon kay ipakita sa bulag nga mga button.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Makahimo sa inline nga pag-usab sa listahan sa pagtan-aw',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Pagpili aron makahimo og inline nga pag-usab para sa mga field nga naa sa ipakita nga listahan, Kung wla mapili sa Inline nga pag-usab pwede ma disable sa ipakita nga listahan.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'I-enable ang inline nga pag-usab sa detalyado nga pagpakita',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Pagpili para i-enable pag-usab para sa mga field sa detalyado nga pagpakita. Kung wla mapili ang inline nga pagusab pwede madisable ang detalyadong pagpakita.',
    'LBL_HIDE_SUBPANELS' => 'Nahugno nga mga subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listahang pagpakita sa kada item kada panid',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel nga mga item kada panid',
    'LOG_MEMORY_USAGE' => 'Log sa paggamit sa memory',
    'LOG_SLOW_QUERIES' => 'Log para sa mga hinay panguntana',
    'CURRENT_LOGO' => 'Kasamtangang logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Pagpili og logo:',
    'NEW_LOGO_HELP' => 'Ang imahe sa file format pwede i .png o .jpg. Ang maximum nga gitas-on kay 170px. Og ang maximum nga gilapdon kay 450px. Bisag unsa nga imahe ang i-upload nga dako sa bisan asa nga direksyon kay mascaled dayon sa maximum nga sukod.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Ang imahe sa file format pwede i .png o .jpg. Ang maximum nga gitas-on kay 170px. Og ang maximum nga gilapdon kay 450px. Bisag unsa nga imahe ang i-upload nga dako sa bisan asa nga direksyon kay mascaled dayon sa maximum nga sukod.',
    'SLOW_QUERY_TIME_MSEC' => 'Hinay nga oras sa pangunta sukaranan (msec)',
    'STACK_TRACE_ERRORS' => 'Ipakita ang stack sa pagsubay sa mga sayup',
    'UPLOAD_MAX_SIZE' => 'Maximum nga gidak-on nga ma-upload',
    'VERIFY_CLIENT_IP' => 'Pag-balido sa tiggamit sa IP address',
    'LOCK_HOMEPAGE' => 'Pagpugong sa tiggamit sa pag-pahiangay sa homepage layout',
    'LOCK_SUBPANELS' => 'Pagpugong sa tiggamit sa pag-pahiangay sa homepage layout',
    'MAX_DASHLETS' => 'Maximum nga gidaghanon sa SuiteCRM Dashlets sa Homepage',
    'SYSTEM_NAME' => 'Ngalan sa sistema:',
    'SYSTEM_NAME_WIZARD' => 'Pangalan:',
    'SYSTEM_NAME_HELP' => 'Mao ni ang ngalan sa gipakita sa title bar sa imong browser.',
    'LBL_LDAP_TITLE' => 'Suporta sa LDAP Authentication',
    'LBL_LDAP_ENABLE' => 'I-enable LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serber:',
    'LBL_LDAP_SERVER_PORT' => 'Numero sa port:',
    'LBL_LDAP_ADMIN_USER' => 'Gigamit nga pangalan:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Gigamit sa pag-seach sa tiggamit sa LDAP. Nagkinahanglan kini nga mahimo nga hingpit nga kwalipikado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Pagbugkos sa LDAP serber gamit ang espesipiko nga mga kredensyal sa tiggamit, kini mobugkos nga dli magpaila kung wala gihatag.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Pagmugna sa auto sa tiggamit:',
    'LBL_LDAP_USER_DN' => 'Tiggamit sa DN:',
    'LBL_LDAP_GROUP_DN' => 'Groupo sa DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Pananglitan: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filter sa tiggamit:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Pagdumala sa grupo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Ang tiggamit kinahanglan nga myembro sa espesipiko nga grupo',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Attribute sa tiggamit:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Ang talagsaon nga tigpaila sa tao nga gamiton sa pagsusi kon sila usa ka sakop sa grupo Pananglitan: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Ang hiyas sa grupo maoy gamiton batok sa User attribute example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Hiyas sa grupo:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Bisan unsa pay i-dugan sa params nga pagsala sa paggamit sa mataghigayon sa pag-authenticate sa mga tiggamit e.g. <em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Hiyas sa pagbugkos:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Hiyas sa pagbugkos:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Para sa pagbugkos sa LDAP User pananglitan:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Sa pagpangita sa LDAP User pananglitan:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Pananglitan: ldap.pananglitan.com or ldaps://ldap.pananglitan.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Pananglitan: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Ngalan sa Grupo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Pananglitan <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Pananglitan: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kung ang authenticated nga tiggamit wala magluntad, usa maoy maghimo sa SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Yawi nga naay Encyption:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Ipakita ang Tab sa mga download',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Kung napilian, Ang Download tab maoy makita sa tiggamit nga mga kahimtang og mohatag sa mga tiggamit og access sa SuiteCRM plug-ins og uban pang-anaa nga mga file',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para sa SOAP authentication sa paggamit sa LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Ang php_mcrypt kinahanglan ang ekstensyon ma i-enable sa imong php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Tanan',
    'LBL_MARK_POINT' => 'Marka nga punto',
    'LBL_NEXT_' => 'Sunod>>',
    'LBL_REFRESH_FROM_MARK' => 'Pag-refresh sa marka',
    'LBL_SEARCH' => 'Mangita:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Pagbaliwala sa kaugalingon:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markahan kung asa magsugod sa pag-log',
    'LBL_DISPLAYING_LOG' => 'Ipakita ang log',
    'LBL_YOUR_PROCESS_ID' => 'Imohang giproseso nga ID',
    'LBL_YOUR_IP_ADDRESS' => 'Imohang IP Adress kay',
    'LBL_IT_WILL_BE_IGNORED' => ' Kini ibalewala ',
    'LBL_LOG_NOT_CHANGED' => 'Wala ma-usab ang Log',
    'LBL_ALERT_JPG_IMAGE' => 'Ang file format sa imahe kinahanglan nga JPEG. Pag-upload og bag-on file nga naay ekstensyon nga ,jpg,.',
    'LBL_ALERT_TYPE_IMAGE' => 'Ang file format sa imahe kinahanglan nga JPEG o PNG. Pag-upload og bag-on file nga naay ekstensyon nga .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Ang aspect ratio sa imahe kinahanglan nga naa sa 1:! og 10:1. Ang imahe mahimong i-resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Adunay sayuo sa pag-upload sa imahe.',
    'LBL_LOGGER' => 'Mga kahimtang sa logger',
    'LBL_LOGGER_FILENAME' => 'Ngalan sa Log File',
    'LBL_LOGGER_FILE_EXTENSION' => 'Ekstensyon',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximum nga gidak-on sa log',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default nga pormat sa petsa',
    'LBL_LOGGER_LOG_LEVEL' => 'Lebel sa Log',
    'LBL_LEAD_CONV_OPTION' => 'Lead pagkakabig sa mga kapilian',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Naghimo og may kalabutan sa mga copya sa tanan kalihokan sa Lead sa mga bag-ong rekord nga napilian sa tiggamit sa panahon sa pagkabig, ang mga copya kay namugna sa pagpili sa mga rekord.<br><br><b>lihok</b> - nagpalihok sa tanang kalihokan sa lead sa mga bag-ong rekord nga napilian sa tiggamit sa panahon sa pagkabig..<br><br><b>walay buhaton</b> - walay bisan unsa uban sa mga kalihokan sa Lead sa panahon sa pagkabig. Ang mga kalihokan nag pabiling may kalabutan sa ra sa lead.",
    'LBL_CONFIG_AJAX' => 'Konfigure AJAX Manggagamit Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Paghimo og pag-disable sa paggamit sa AJAX UI para sa mga espesipikong mga modyul.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum nga numero sa mga log (sa wla pa maligid)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Pagdugang human sa filename',
    'LBL_VCAL_PERIOD' => 'vcal pag-update sa panahon sa oras:',
    'LBL_IMPORT_MAX_RECORDS' => 'Impor - Maximum nga gidaghanon sa laray:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Pagsulti kung pila ka laray ang gitugotan sa import files.<br>kung ang gidaghanon sa laray sa import file nilapas sa gidaghanon, ang tiggamit kay ma-alerto.<br>kung walay gidaghanon ang gisulod, walay kutob kung pila kadagahanon sa laray ang gitugot.',
    'vCAL_HELP' => 'Gamita ang mga kahimtang sa pagtino kung pila ka buwan ang i-abante sa kasamtangan nga petsa nga libre/Busy nga impormasyon sa mga tawag og sa mga miting nga i-ipatik.<BR>aron ang libre/Busy sa pag-patik ma-off, pagsulod "0". Ang minimum kay 1 ka buwan; ang maximum kay 12 buwan.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Imohang mga sitwasyon',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Walay mga sitwasyon nga na-configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Paghimo kung unsa nga mga sitwasyon ang angayan para sa imong pag-instalar. kini nga mga kapilian kay mamahimong usbon sa post-intall.',

    'LBL_WIZARD_TITLE' => 'Admin Wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Maayong pagabot',
    'LBL_WIZARD_WELCOME_TITLE' => 'Maayong pag-abot sa SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'I-klick<b>sunod</b>sa brand, localize ug i-configure ang SuiteCRM karon. Kung gusto nimo nga i-configure ang SuiteCRM sa ulahi, i-klik ang <b> Skip </ b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sunod >',
    'LBL_WIZARD_BACK_BUTTON' => '< Balik',
    'LBL_WIZARD_SKIP_BUTTON' => 'Iskip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Magpadayon',
    'LBL_WIZARD_FINISH_TITLE' => 'Tukma ang pagsumpo sa sukaranan nga sistema',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Paghatag sa imong ngalan sa organisasyon og logo sa imong brand sa imong SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Paghingalan nimo kung unsa ang gusto nimo nga datos sa SuiteCRM nga ipasundayag, base sa imong nahimutangan. Ang mga setting nga imong gihatag dinhi mao ang default settings. Ang mga tiggamit makahimo sa ilang mga gusto.',
    'LBL_WIZARD_SMTP_DESC' => 'Hatagi ang email account nga gamiton sa pagpadala sa mga email, sama sa mga notipikasyon sa assignment ug mga bag-ong password sa user. Ang mga tigdawat makadawat mga email gikan sa SuiteCRM, ingon nga gipadala gikan sa gitino nga email account.',
    'LBL_LOADING' => 'Ga-loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tangtangon' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Maayong pagabot' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Ipakita ang mga email nga may kalabutan nga kontak sa Kasaysayan subpanel alang sa mga modulo',
);
