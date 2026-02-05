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
    'ADVANCED' => 'پیشرفته',
    'DEFAULT_CURRENCY_ISO4217' => 'کد واحد پول ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'نام واحد پول',
    'DEFAULT_CURRENCY_SYMBOL' => 'نماد واحد پول',
    'DEFAULT_DATE_FORMAT' => 'فرمت پیش‌فرض تاریخ',
    'DEFAULT_DECIMAL_SEP' => 'نماد اعشار',
    'DEFAULT_LANGUAGE' => 'زبان پیش فرض',
    'DEFAULT_SYSTEM_SETTINGS' => 'رابط کاربری',
    'DEFAULT_THEME' => 'تم پیش فرض',
    'DEFAULT_TIME_FORMAT' => 'فرمت پیش فرض زمان',

    'DISPLAY_RESPONSE_TIME' => 'نمایش زمان های پاسخ سرور',

    'IMAGES' => 'لوگو ها',
    'LBL_ALLOW_USER_TABS' => 'Allow users to hide tabs',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'تنظیمات سیستم',
    'LBL_LOGVIEW' => 'مشاهده تاریخچه وقایع',
    'LBL_MAIL_SMTPAUTH_REQ' => 'استفاده از احراز هویت SMTP؟',
    'LBL_MAIL_SMTPPASS' => 'گذرواژه SMTP:',
    'LBL_MAIL_SMTPPORT' => 'پورت SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'سرور SMTP:',
    'LBL_MAIL_SMTPUSER' => 'نام کاربری SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'مشخصات سرور SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ارائه دهنده ایمیل خود انتخاب کنید:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'رمز عبور ایمیل یاهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'شناسه ایمیل یاهو:',
    'LBL_GMAIL_SMTPPASS' => 'رمز عبور Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'آدرس جیمیل:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'نام کاربری Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'پورت سرور Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'سرور Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'اجازه به کاربران برای استفاده از این حساب برای ایمیل های خروجی:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'هنگامی که این گزینه انتخاب شده است، همه کاربران قادر به ارسال ایمیل با استفاده از همان حساب ایمیل خروجی استفاده می شود به سیستم اعلان ها و هشدارها ارسال خواهد شد.  اگر گزینه ای انتخاب نشده است، کاربران هنوز هم سرور ایمیل خروجی، پس از ارائه اطلاعات حساب خود استفاده کنید.',
    'LBL_MAILMERGE' => 'ادغام پست',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'حداقل فاصله Dashlet خودکار تازه کردن',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'این است ارزش حداقل یکی dashlets تازه نمودن خودکار می توانید انتخاب کنید. تنظیمات برای \'هرگز\' خودکار-از dashlets کاملا طراوت را غیرفعال می کند.',
    'LBL_MODULE_FAVICON' => 'ماژول نمایش آیکون به عنوان فاویکون',
    'LBL_MODULE_FAVICON_HELP' => 'اگر شما در یک ماژول با آیکون آیکون این ماژول را به عنوان favicon به جای تم favicon در زبانه مرورگر استفاده کنید.',
    'LBL_MODULE_NAME' => 'تنظیمات سیستم',
    'LBL_MODULE_ID' => 'پیکربندی کننده',
    'LBL_MODULE_TITLE' => 'رابط کاربری',
    'LBL_NOTIFY_FROMADDRESS' => '"از" آدرس:',
    'LBL_NOTIFY_SUBJECT' => 'موضوع ایمیل:',

    'LBL_PROXY_AUTH' => 'تأیید اعتبار?',
    'LBL_PROXY_HOST' => 'میزبان Proxy',
    'LBL_PROXY_ON_DESC' => 'Configure proxy server address and authentication settings',
    'LBL_PROXY_ON' => 'استفاده از سرور های پروکسی?',
    'LBL_PROXY_PASSWORD' => 'کلمه عبور',
    'LBL_PROXY_PORT' => 'درگاه',
    'LBL_PROXY_TITLE' => 'تنظیمات Proxy',
    'LBL_PROXY_USERNAME' => 'نام کاربر',
    'LBL_RESTORE_BUTTON_LABEL' => 'بازگرداندن',
    'LBL_SYSTEM_SETTINGS' => 'تنظیمات سیستم',
    'LBL_USE_REAL_NAMES' => 'نشان دادن نام کامل',
    'LBL_USE_REAL_NAMES_DESC' => 'Display users\' full names instead of their User Names in assignment fields.',
    'LBL_DISALBE_CONVERT_LEAD' => 'غیرفعال کردن تبدیل سرنخ برای سرنخ‌های تبدیل شده',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'اگر سرنخ قبلاً تبدیل شده باشد، فعال کردن این گزینه اکشن تبدیل سرنخ را حذف خواهد کرد.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listview items per page',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel items per page',
    'LOG_MEMORY_USAGE' => 'Log memory usage',
    'LOG_SLOW_QUERIES' => 'Log slow queries',
    'CURRENT_LOGO' => 'لوگوی فعلی:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'لوگو را انتخاب کنید:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximum upload size',
    'VERIFY_CLIENT_IP' => 'تایید اعتبار آدرس IP کاربر',
    'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
    'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'نام سیستم:',
    'SYSTEM_NAME_WIZARD' => 'نام:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
    'LBL_LDAP_ENABLE' => 'Enable LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'سرور:',
    'LBL_LDAP_SERVER_PORT' => 'شماره پورت:',
    'LBL_LDAP_ADMIN_USER' => 'نام كاربر:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'کلمه عبور:',
    'LBL_LDAP_AUTHENTICATION' => 'تأیید هویت:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'ایجاد خودکار کاربران:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'فیلتر کاربر:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'عضویت در گروه:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'ویژگی کاربر:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'ویژگی های گروه:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'ویژگی های ورود به سیستم:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'نام گروه:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'کلید رمزنگاری:',
    'DEVELOPER_MODE' => 'حالت توسعه دهنده',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOAP authentication when using LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt extension must be enabled in your php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'همه',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'بعدی >>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Search:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'چشم پوشی از خود:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'شناسه پردازش',
    'LBL_YOUR_IP_ADDRESS' => 'آدرس آی پی شما',
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
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'فرمت پیش‌فرض تاریخ',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Level',
    'LBL_LEAD_CONV_OPTION' => 'گزینه‌های تبدیل سرنخ',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'پیکربندی رابط کاربری ایجکس',
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

    'LBL_WIZARD_TITLE' => 'برنامه جادویی Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'خوش آمدید',
    'LBL_WIZARD_WELCOME_TITLE' => 'به SuiteCRM خوش آمدید!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'بعدی >',
    'LBL_WIZARD_BACK_BUTTON' => 'بازگشت',
    'LBL_WIZARD_SKIP_BUTTON' => 'صرف‌نظر',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continue',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'نام تجاری',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'در حال بارگذاری...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'حذف' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'خوش آمدید' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'ایمیل مخاطب‌های مرتبط را در پنل تاریخچه ماژول نمایش بده',
);
