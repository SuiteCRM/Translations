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
    'ADVANCED' => 'Լրացուցիչ կարգավորումներ',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 արտարժույթի կոդը',
    'DEFAULT_CURRENCY_NAME' => 'Տարադրամի անունը',
    'DEFAULT_CURRENCY_SYMBOL' => 'Արժույթի նշանը',
    'DEFAULT_DATE_FORMAT' => 'Ամսաթվի ընդունված ձևաչափը',
    'DEFAULT_DECIMAL_SEP' => 'Տասնորդական նշան',
    'DEFAULT_LANGUAGE' => 'Ընդունված լեզու',
    'DEFAULT_SYSTEM_SETTINGS' => 'Օգտվողի ինտերֆեյսը',
    'DEFAULT_THEME' => 'Ընդունված թեմա',
    'DEFAULT_TIME_FORMAT' => 'Ընդունված ժամանակի ֆորմատ',

    'DISPLAY_RESPONSE_TIME' => 'Ցուցադրել սերվերի պատասխանի ժամանակը',

    'IMAGES' => 'Լոգոներ',
    'LBL_ALLOW_USER_TABS' => 'Allow users to hide tabs',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Համակարգի կարգավորումներ',
    'LBL_LOGVIEW' => 'Դիտել գրանցամատյանը',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Օգտագործե՞լ SMTP-իսկորոշումը։',
    'LBL_MAIL_SMTPPASS' => 'SMTP Գաղտնաբառ․',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP սերվեր․',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Ընտրեք Ձեր էլ-փոստի մատակարարին․',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! էլ-փոստ-գաղտնաբառ․',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! էլ-փոստ ID․',
    'LBL_GMAIL_SMTPPASS' => 'Gmail գաղտնաբառ․',
    'LBL_GMAIL_SMTPUSER' => 'Gmail էլ-փոստի հասցե․',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange սերվեր․',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Փոստի միավորում',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Display module icon as favicon',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'Համակարգի կարգավորումներ',
    'LBL_MODULE_ID' => 'Կարգավորող',
    'LBL_MODULE_TITLE' => 'Օգտվողի ինտերֆեյսը',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Էլ. նամակի թեմա.',

    'LBL_PROXY_AUTH' => 'Իսկորոշո՞ւմ։',
    'LBL_PROXY_HOST' => 'Proxy սերվեր',
    'LBL_PROXY_ON_DESC' => 'Configure proxy server address and authentication settings',
    'LBL_PROXY_ON' => 'Use proxy server?',
    'LBL_PROXY_PASSWORD' => 'Գաղտնաբառ',
    'LBL_PROXY_PORT' => 'Նավահանգիստ',
    'LBL_PROXY_TITLE' => 'Պրոքսի սերվերի կարգավորումները',
    'LBL_PROXY_USERNAME' => 'Օգտվողի անուն',
    'LBL_RESTORE_BUTTON_LABEL' => 'Վերականգնել',
    'LBL_SYSTEM_SETTINGS' => 'Համակարգի կարգավորումներ',
    'LBL_USE_REAL_NAMES' => 'Ցուցադրել բոլոր անունները',
    'LBL_USE_REAL_NAMES_DESC' => 'Display users\' full names instead of their User Names in assignment fields.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Անջատել կոնվերտացիան ավելի վաղ կոնվերտացված պոտենցիալ կլիենտների համար',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Եթե պոտենցիալ կլիենտը արդեն կոնվերտացված է, ակտիվացնելով այս ընտրանքը "Կոնվերտացնել պոտենցիալ կլիենտին" այն անհասանելի կլինի:',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listview items per page',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel items per page',
    'LOG_MEMORY_USAGE' => 'Հիշողություն օգտագործող տեղեկամատյան',
    'LOG_SLOW_QUERIES' => 'Դանդաղ հարցումների տեղեկամատյան',
    'CURRENT_LOGO' => 'Ընթացիկ լոգո․',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Ընտրել Logo.',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximum upload size',
    'VERIFY_CLIENT_IP' => 'Validate user IP address',
    'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
    'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Համակարգի անվանումը',
    'SYSTEM_NAME_WIZARD' => 'Անվանում․',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
    'LBL_LDAP_ENABLE' => 'Միացնել LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Սերվեր.',
    'LBL_LDAP_SERVER_PORT' => 'Պորտի համարը',
    'LBL_LDAP_ADMIN_USER' => 'Օգտագործողի անուն.',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Գաղտնաբառ.',
    'LBL_LDAP_AUTHENTICATION' => 'Վավերացում.',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Ստեղծել օգտագործողներ ավտոմատ.',
    'LBL_LDAP_USER_DN' => 'Օգտվողի DN․',
    'LBL_LDAP_GROUP_DN' => 'Խմբի DN․',
    'LBL_LDAP_GROUP_DN_DESC' => 'Օրինակ․ <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Օգտագործողների ֆիլտրում.',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Անդամության խումբ',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Օգտվողները պետք է լինեն կոնկրետ խմբի անդամ',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Օգտվողի հատկանիշը․',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Խմբի հատկանիշը.',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Մուտքանունի հատկանիշը․',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Կապի հատկանիշը․',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Խումբի անվանումը',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Եթե ​​այդ վավերացված օգտվողը գոյություն չունի, ուրեմն այն կստեղծվի:',
    'LBL_LDAP_ENC_KEY' => 'Կոդավորման բանալի․',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Ցույց տալ ներբեռնումների ներդիրը',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOAP authentication when using LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt extension must be enabled in your php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Բոլորը',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Հաջորդ>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Որոնում.',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Նշել որտեղից սկսել գրառումը գրանցամատյանում',
    'LBL_DISPLAYING_LOG' => 'Գրանցամատյանի ցուցադրում',
    'LBL_YOUR_PROCESS_ID' => 'Your process ID',
    'LBL_YOUR_IP_ADDRESS' => 'Your IP Address is',
    'LBL_IT_WILL_BE_IGNORED' => ' It will be ignored ',
    'LBL_LOG_NOT_CHANGED' => 'Գրանցամատյանը փոփոխված չէ',
    'LBL_ALERT_JPG_IMAGE' => 'The file format of the image must be JPEG. Upload a new file with the file extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'The file format of the image must be JPEG or PNG. Upload a new file with the file extension .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error during the upload of the image.',
    'LBL_LOGGER' => 'Գրանցամատյանի կարգավորումներ',
    'LBL_LOGGER_FILENAME' => 'Գրանցամատյանի ֆայլի անվանումը',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Գրանցամատյանի ֆայլի մաքսիմալ չափը',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Ամսաթվի ընդունված ձևաչափը',
    'LBL_LOGGER_LOG_LEVEL' => 'Գրանցամատյանի մանրամասնության մակարդակը',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Կարգավորել AJAX օգտվողի ինտերֆեյսը',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Գրանցամատյանների ֆայլերի մաքսիմալ քանակը',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Append after filename',
    'LBL_VCAL_PERIOD' => 'vCal Updates Time Period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<BR>To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Համակարգը կառավարող օգնական ուղեցույց',
    'LBL_WIZARD_WELCOME_TAB' => 'Բարի գալուստ',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Հաջորդ >',
    'LBL_WIZARD_BACK_BUTTON' => '< Վերադարձ',
    'LBL_WIZARD_SKIP_BUTTON' => 'Բաց թողնել',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continue',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Տրամադրել էլ․փոստի հաշիվը, որը կօգտագործվի նամակներ ուղարկելու համար, ինպես նաև նոր օգտվողների գաղտնաբառերի ծանուցման համար։',
    'LBL_LOADING' => 'Բեռնվում է...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ջնջել' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Բարի գալուստ' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Լոգո' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
