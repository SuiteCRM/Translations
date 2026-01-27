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
    'ADVANCED' => 'מתקדם',
    'DEFAULT_CURRENCY_ISO4217' => 'קוד מטבע ISO 4217 ',
    'DEFAULT_CURRENCY_NAME' => 'שם מטבע',
    'DEFAULT_CURRENCY_SYMBOL' => 'סימן מטבע',
    'DEFAULT_DATE_FORMAT' => 'פורמט ברירת מחדל',
    'DEFAULT_DECIMAL_SEP' => 'מטבע עשרוני',
    'DEFAULT_LANGUAGE' => 'שפת מחדל',
    'DEFAULT_SYSTEM_SETTINGS' => 'ממשק המשתמש',
    'DEFAULT_THEME' => 'נושא מחדל',
    'DEFAULT_TIME_FORMAT' => 'פורמט זמן- ברירת מחדל',

    'DISPLAY_RESPONSE_TIME' => 'הצג זמני תגובה של השרת',

    'IMAGES' => 'לוגוים',
    'LBL_ALLOW_USER_TABS' => 'Allow users to hide tabs',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'הגדרות מערכת',
    'LBL_LOGVIEW' => 'קונפיג הגדרות יומן',
    'LBL_MAIL_SMTPAUTH_REQ' => 'השתמש באישור הגדרות דואר',
    'LBL_MAIL_SMTPPASS' => 'סיסמת SMTP',
    'LBL_MAIL_SMTPPORT' => 'פורט של SMTP',
    'LBL_MAIL_SMTPSERVER' => 'שרת SMTP',
    'LBL_MAIL_SMTPUSER' => 'שם משתמש SMTP',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'מיזוג דואר',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Display module icon as favicon',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'הגדרות מערכת',
    'LBL_MODULE_ID' => 'קונפיגורטור',
    'LBL_MODULE_TITLE' => 'ממשק המשתמש',
    'LBL_NOTIFY_FROMADDRESS' => 'כתובת שולח',
    'LBL_NOTIFY_SUBJECT' => 'נושא המייל:',

    'LBL_PROXY_AUTH' => 'אוטנטיקציה',
    'LBL_PROXY_HOST' => 'מארח PROXY',
    'LBL_PROXY_ON_DESC' => 'קונפיג שרת פרוקסי כתובת והגדרות אוטנטיקציה?',
    'LBL_PROXY_ON' => 'השתמש בשרת הפרוקסי?',
    'LBL_PROXY_PASSWORD' => 'סיסמא',
    'LBL_PROXY_PORT' => 'פורט',
    'LBL_PROXY_TITLE' => 'הגדרות פרוקסי',
    'LBL_PROXY_USERNAME' => 'שם משתמש',
    'LBL_RESTORE_BUTTON_LABEL' => 'אחזר',
    'LBL_SYSTEM_SETTINGS' => 'הגדרות מערכת',
    'LBL_USE_REAL_NAMES' => 'הצג שם מלא (לא שם כניסת משתמש)',
    'LBL_USE_REAL_NAMES_DESC' => 'הצג שם משתמש מלא במקום שם ההתחברות שלהם',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'רשימת צפיה של פריטים פר עמוד',
    'LIST_ENTRIES_PER_SUBPANEL' => 'פריטי תת-פנל פר עמוד',
    'LOG_MEMORY_USAGE' => 'יומן שימוש בזכרון',
    'LOG_SLOW_QUERIES' => 'יומן שאילתות איטיות',
    'CURRENT_LOGO' => 'לוגו נוכחי בשימוש',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'העלה לוגו חדש  (212x40)',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'האט זמן סף שאילתה  (msec)',
    'STACK_TRACE_ERRORS' => 'הצג מעקב רשימת הערות / תקלות',
    'UPLOAD_MAX_SIZE' => 'גודל העלאה מקסימלי',
    'VERIFY_CLIENT_IP' => 'וודא כתובת IP של המשתמש',
    'LOCK_HOMEPAGE' => 'מנע שינוי אישי של עיצוב דף הבית',
    'LOCK_SUBPANELS' => 'מנע שינוי אישי של עיצוב תת-פנל',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'System Name:',
    'SYSTEM_NAME_WIZARD' => 'שם:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP  תמיכת אוטנטיקציה',
    'LBL_LDAP_ENABLE' => 'אפשר LDAP ',
    'LBL_LDAP_SERVER_HOSTNAME' => 'שרת:',
    'LBL_LDAP_SERVER_PORT' => 'מספר פורט:',
    'LBL_LDAP_ADMIN_USER' => 'שם משתמש:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'משמש לחיפוש המשתמש LDAP. יתכן וזה צריך להיות מוסמך במלואו.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'סיסמא:',
    'LBL_LDAP_AUTHENTICATION' => 'אימות:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'צור אוטומטית יוזר:',
    'LBL_LDAP_USER_DN' => 'משתמש DN:',
    'LBL_LDAP_GROUP_DN' => 'קבוצת DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'לדוגמה: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'מסנן משתמשים:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'חברות בקבוצה:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'תכונות שם משתמש וסיסמא:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'תכונות הכרחיות:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'שם קבוצה:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'מפתח הצפנה:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOAP authentication when using LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt extension must be enabled in your php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'הכל',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Next>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Search:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'Your process ID',
    'LBL_YOUR_IP_ADDRESS' => 'Your IP Address is',
    'LBL_IT_WILL_BE_IGNORED' => ' It will be ignored ',
    'LBL_LOG_NOT_CHANGED' => 'Log has not changed',
    'LBL_ALERT_JPG_IMAGE' => 'The file format of the image must be JPEG. Upload a new file with the file extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'The file format of the image must be JPEG or PNG. Upload a new file with the file extension .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error during the upload of the image.',
    'LBL_LOGGER' => 'Logger Settings',
    'LBL_LOGGER_FILENAME' => 'Log File Name',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximum log size',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'פורמט ברירת מחדל',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Level',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'הגדר ממשק משתמש המסתמך על AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum number of logs (before rolling)',
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

    'LBL_WIZARD_TITLE' => 'אשף Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'התחלה',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'הבא',
    'LBL_WIZARD_BACK_BUTTON' => 'קודם',
    'LBL_WIZARD_SKIP_BUTTON' => 'דלג',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continue',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'טוען...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'מחק' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'התחלה' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
