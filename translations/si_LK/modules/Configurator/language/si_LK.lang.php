<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 මුදල් කේතය',
    'DEFAULT_CURRENCY_NAME' => 'ව්යවහාර මුදල් නම',
    'DEFAULT_CURRENCY_SYMBOL' => 'මුදල් සංකේතය',
    'DEFAULT_DATE_FORMAT' => 'පෙරනිමි දිනය දක්වන',
    'DEFAULT_DECIMAL_SEP' => 'දශමය',
    'DEFAULT_LANGUAGE' => 'ප්රකෘති භාෂාව',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'පෙරනිමි කාලය ආකෘතිය',

    'DISPLAY_RESPONSE_TIME' => 'විදහා සේවාදායකය ප්රතිචාර කාලයන්',

    'IMAGES' => 'නිල ලාංඡන',
    'LBL_ALLOW_USER_TABS' => 'පරිශීලකයන් ටැබ් සැඟවීමට ඉඩ දෙන්න',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'දැක්ම ලොග්',
    'LBL_MAIL_SMTPAUTH_REQ' => ' SMTP සත්යාපනය භාවිතා කරන්න?',
    'LBL_MAIL_SMTPPASS' => 'SMTP මුරපදය:',
    'LBL_MAIL_SMTPPORT' => 'SMTP තොට:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ඔබගේ විද්යුත් සපයන්නා තෝරන්න:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'යාහු! තැපැල් මුරපදය:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'යාහු! තැපැල් හැඳු.:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'ජීමේල් වි-තැපෑල:',
    'LBL_EXCHANGE_SMTPPASS' => 'විනිමය රහස් වචනය:',
    'LBL_EXCHANGE_SMTPUSER' => 'විනිමය පරිශීලක නාමය:',
    'LBL_EXCHANGE_SMTPPORT' => 'විනිමය සේවාදායකය තොට:',
    'LBL_EXCHANGE_SMTPSERVER' => 'විනිමය සේවාදායකය:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'තැපැල් ඒකාබද්ධ',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'අවම Dashlet වාහන-ප්රතිපූරණය කරන්න පරතරය',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'මෙම එක් dashlets ස්වයංක්රීය-නැවුම් කරන්න ඇති කිරීමට තෝරාගත හැක අවම අගය වේ. කිසිදා \ \ කිරීමට නියම සම්පූර්ණයෙන්ම dashlets වන ස්වයංක්රීය-නැවුම් අක්රීය කරයි.',
    'LBL_MODULE_FAVICON' => 'Favicon ලෙස විදහා මොඩියුලය අයිකනය',
    'LBL_MODULE_FAVICON_HELP' => 'ඔබ අයිකනය සමඟ ෙම නම් බ්රව්සරය ටැබ් තුළ favicon වෙනුවට තේම්ස් favicon ලෙස මොඩියුලය \ ගේ අයිකනය භාවිතා කරන්න.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'මානකරනය',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'ප්රොක්සි සර්වර් ලිපිනය හා සත්යතාව සැකසුම් සකසන්න',
    'LBL_PROXY_ON' => 'ප්රෝක්සි සේවාදායකයක් භාවිත?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'පරිශීලක නාමය',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'පූර්ණ නම් පෙන්වන්න',
    'LBL_USE_REAL_NAMES_DESC' => 'පරිශීලකයන් ප්රදර්ශනය වෙනුවට පැවරුම ක්ෂේත්රවල තම පරිශීලක නාමය සම්පූර්ණ නම් \.',
    'LBL_DISALBE_CONVERT_LEAD' => 'පරිවර්තනය කරන උපදෙස් ලබා ආගමට හරවා පෙරමුණ පියවර අක්රීය',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'ඉදිරියෙන් දැනටමත් මෙම විකල්පය සක්රීය බවට පරිවර්තනය කොට තිබේ නම් එම ආගමට හරවා පෙරමුණ පියවර ඉවත් කරයි.',
    'LBL_ENABLE_ACTION_MENU' => 'මෙනු තුළ විදහා ක්රියා',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'විස්තර බලන්න සහ ඩ්රොප් ඩවුන් මෙනුවෙන් තුළ උප කමිටු ක්රියා ප්රදර්ශනය කිරීමට තෝරන්න. එක්සත් ජාතීන්ගේ-තෝරා ගත්තේ නම් ක්රියාවන් වෙනම බොත්තම් ලෙස දිස් වනු ඇත.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'ලැයිස්තුව දැක්ම මත පේළිගත සංස්කරණය සක්රීය කරන්න',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'ලැයිස්තුව දැක්ම මත පේළිගත සංස්කරණය ක්ෂේත්රවල සක්රීය කිරීම තෝරන්න. තෝරා නොගෙන පේළිගත සංස්කරණය ලැයිස්තුව දැක්ම මත අක්රීය වේ නම්.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'සවිස්තරාත්මක විස්තර මත පේළිගත සංස්කරණය සක්රීය කරන්න',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'ඇති විස්තර දැක්ම මත පේළිගත සංස්කරණය ක්ෂේත්රවල සක්රීය කිරීම තෝරන්න. තෝරා නොගෙන පේළිගත සංස්කරණය සවිස්තරාත්මක විස්තර මත අක්රීය වේ නම්.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'එක් පිටුවකට Listview භාණ්ඩ',
    'LIST_ENTRIES_PER_SUBPANEL' => 'එක් පිටුවකට උප කමිටු භාණ්ඩ',
    'LOG_MEMORY_USAGE' => 'මතක භාවිතය ලොගින් වන්න',
    'LOG_SLOW_QUERIES' => 'මන්දගාමී විමසුම් ලොගින් වන්න',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'මන්දගාමී විමසුම් කාලය සීමාව (msec)',
    'STACK_TRACE_ERRORS' => 'වැරදි විදහා අඩුක්කුව හෝඩුවාවක්',
    'UPLOAD_MAX_SIZE' => 'උපරිම උඩුගත ප්රමාණය',
    'VERIFY_CLIENT_IP' => 'වලංගු පරිශීලක IP ලිපිනය',
    'LOCK_HOMEPAGE' => 'පරිශීලක රුචි ආරම්භක පිටුව සැකැස්ම වැළැක්වීම',
    'LOCK_SUBPANELS' => 'පරිශීලක රුචි උප කමිටු සැකැස්ම වැළැක්වීම',
    'MAX_DASHLETS' => 'ආරම්භක පිටුව මත SuiteCRM Dashlets උපරිම සංඛ්යාව',
    'SYSTEM_NAME' => 'පද්ධතිය නම:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'මෙය ඔබේ බ්රවුසරයේ ටයිටල් බාර් එකේ දී ප්රදර්ශනය කරන නම.',
    'LBL_LDAP_TITLE' => 'LDAP තහවුරු කරගැනීමේ සහාය',
    'LBL_LDAP_ENABLE' => 'LDAP සක්රිය කරන්න',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'පරිශීලකයන් උදා: <em> is_suitecrm_user = 1 හෝ (is_suitecrm_user = 1) (is_sales = 1) </ em> අනන්යතාවය තහවුරු කරගැනීම විට අයදුම් කිරීමට කිසිදු අතිරේක පෙරහන params',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'සංවර්ධක ප්රකාරය',

    'SHOW_DOWNLOADS_TAB' => 'විදහා භාගත Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'LDAP භාවිතා කරන විට SOAP අනන්යතාවය තහවුරු කරගැනීම සඳහා.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'මෙම php_mcrypt දීර්ඝ ඔබගේ php.ini ගොනුව සක්රිය කල යුතුව ඇත.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'සියල්ල',
    'LBL_MARK_POINT' => 'මාර්ක් පේදුරු',
    'LBL_NEXT_' => 'ඊලඟ',
    'LBL_REFRESH_FROM_MARK' => 'මාර්ක් සිට refresh කරන්න',
    'LBL_SEARCH' => 'ගවේෂණය:',
    'LBL_REG_EXP' => 'Regex:',
    'LBL_IGNORE_SELF' => 'ස්වයං නොසලකා හරින්න:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'ස්ථාන පිවිසීමේදි ආරම්භ කිරීමට සලකුණු',
    'LBL_DISPLAYING_LOG' => 'ඇතුළුවන්න ප්රදර්ශනය',
    'LBL_YOUR_PROCESS_ID' => 'ඔබේ ක්රියාවලිය හැඳුනුම්',
    'LBL_YOUR_IP_ADDRESS' => 'ඔබේ IP ලිපිනය වේ',
    'LBL_IT_WILL_BE_IGNORED' => 'එය නොසලකා හරිනු ලැබේ',
    'LBL_LOG_NOT_CHANGED' => 'ලඝු-සටහන වෙනස් වී නැති',
    'LBL_ALERT_JPG_IMAGE' => 'රූපය ගොනු ආකෘතිය JPG එකේ විය යුතුය. ගොනුව දීර්ඝ .jpg සමග නව ගොනු උඩුගත කරන්න.',
    'LBL_ALERT_TYPE_IMAGE' => 'රූපය ගොනු ආකෘතිය JPG හෝ PNG විය යුතුය. ගොනුව දීර්ඝ .jpg හෝ .png සමග නව ගොනු උඩුගත කරන්න.',
    'LBL_ALERT_SIZE_RATIO' => '1 හා 10: 1 රූපය අනුපාතය 1 අතර විය යුතුය. මෙම රූපය ප්රථිප්රමාණය ඇත.',
    'ERR_ALERT_FILE_UPLOAD' => 'රූපය උඩුගත තුළ දෝෂ.',
    'LBL_LOGGER' => 'Logger සැකසුම්',
    'LBL_LOGGER_FILENAME' => 'ගොනුව නම ලොගින් වන්න',
    'LBL_LOGGER_FILE_EXTENSION' => 'ව්යාප්ති',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'උපරිම ප්රමාණය ලඝු-සටහන',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'ලඝු-සටහන පෙළ',
    'LBL_LEAD_CONV_OPTION' => 'ඊයම් පරිවර්තනය විකල්ප',
    'LEAD_CONV_OPT_HELP' => "<b> පිටපත් </ b> - සාදනු ලබයි සහ පරිවර්තනය තුළ පරිශීලකයා විසින් තෝරාගත් බව නව වාර්තා කිරීමට ඇද්ද කටයුතු සියලු පිටපත් සම්බන්ධ. පිටපත් තෝරාගත් වාර්තා එක් එක් සඳහා නිර්මාණය <br> <br> <b> ගෙනයන්න </ b> -.. පරිවර්තනය තුළ පරිශීලකයා විසින් තෝරාගත් බව නව වාර්තා කිරීම සඳහා ආදර්ශ කටයුතු සියලු යනවා <br> <br> <b> කිසිවක් </ b> කරන්න - පරිවර්තනය තුළ ඇද්ද කටයුතු කිසිවක් කර නැත. මෙම කටයුතු එකම පෙරමුණ හා සම්බන්ධ පවතී.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'විශේෂිත මොඩියුල සඳහා සියල්ලන්ටම AJAX UI භාවිතා සක්රිය හෝ අක්රිය කරන්න.',
    'LBL_LOGGER_MAX_LOGS' => '(හකුළන පෙර) ලඝු-සටහන් හි උපරිම සංඛ්යාව',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Filename පසුව ඇතුලත්',
    'LBL_VCAL_PERIOD' => 'vCal යාවත්කාලීන වේලාව කාලය:',
    'LBL_IMPORT_MAX_RECORDS' => 'ආනයන - පේළි උපරිම අංකය:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'ආනයන ගොනු තුළ ඉඩ කොපමණ පේළි සඳහන් කරන්න. පේළි සංඛ්යාව <br නම්',
    'vCAL_HELP' => 'ඇමතුම් සහ රැස්වීම් සඳහා නිදහස් / කාර්ය බහුල තොරතුරු ප්රකාශයට පත් කරන බව වත්මන් දිනට මාස ගණන තීරණය කිරීමට මෙම සිටුවම භාවිතා කරන්න. <BR',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => ' admin විශාරද',
    'LBL_WIZARD_WELCOME_TAB' => 'සාදරයෙන් පිළිගනිමු',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'වෙළඳ නාමය වෙත <ආ> ඊළඟ </ b> ක්ලික් කරන්න, දැන් SuiteCRM ස්ථානගත හා මාන. පසුව ඔබට SuiteCRM මාන කිරීමට අදහස් කරන්නේ නම්, <b> ඔබ ලොගින් වී නොමැත </ b> ක්ලික් කරන්න.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Next',
    'LBL_WIZARD_BACK_BUTTON' => ' <නැවතත්',
    'LBL_WIZARD_SKIP_BUTTON' => 'මගහරින්න',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'දිගටම',
    'LBL_WIZARD_FINISH_TITLE' => 'මූලික පද්ධතියේ මානකරනය සම්පූර්ණ',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'පූරණය වෙමින්...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'මකා' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'සාදරයෙන් පිළිගනිමු' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'ලාංඡනය' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'මොඩියුල සඳහා ඉතිහාසය subpanel ඊ-තැපැල් \ පෙන්වන්න සම්බන්ධ සබඳතා',
);
