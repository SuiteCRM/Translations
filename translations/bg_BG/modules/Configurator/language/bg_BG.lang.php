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
    'ADVANCED' => 'Разширен',
    'DEFAULT_CURRENCY_ISO4217' => 'Валутен код ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Име на валутата',
    'DEFAULT_CURRENCY_SYMBOL' => 'Валутен символ',
    'DEFAULT_DATE_FORMAT' => 'Формат на дата по подразбиране',
    'DEFAULT_DECIMAL_SEP' => 'Десетичен знак',
    'DEFAULT_LANGUAGE' => 'Език по подразбиране',
    'DEFAULT_SYSTEM_SETTINGS' => 'Потребителски интерфейс',
    'DEFAULT_THEME' => 'Тема по подразбиране',
    'DEFAULT_TIME_FORMAT' => 'Формат на време по подразбиране',

    'DISPLAY_RESPONSE_TIME' => 'Покажи времето за реакция на сървъра',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'На потребителите е разрешено да конфигурират табулатори',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Системни настройки',
    'LBL_LOGVIEW' => 'Вижте лог-а',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Рестриктиран достъп?',
    'LBL_MAIL_SMTPPASS' => 'Парола:',
    'LBL_MAIL_SMTPPORT' => 'Порт:',
    'LBL_MAIL_SMTPSERVER' => 'Сървър за електронна поща:',
    'LBL_MAIL_SMTPUSER' => 'Потребител:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Настройка на SMTP сървър за електронна поща',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Изберете Вашия имейл доставчик:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Парола:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Идентификатор:',
    'LBL_GMAIL_SMTPPASS' => 'Парола:',
    'LBL_GMAIL_SMTPUSER' => 'Ел. адрес:',
    'LBL_EXCHANGE_SMTPPASS' => 'Парола:',
    'LBL_EXCHANGE_SMTPUSER' => 'Потребител:',
    'LBL_EXCHANGE_SMTPPORT' => 'Порт:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Сървър:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Позволи на потребителите да използват този имейл акаунт за изходящата поща:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Сливане на писма',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Покажи иконата на модула като favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Ако сте в модул с икона, използвайте модул иконата като favicon, вместо тема, в таба на браузара.',
    'LBL_MODULE_NAME' => 'Системни настройки',
    'LBL_MODULE_ID' => 'Configurator',
    'LBL_MODULE_TITLE' => 'Потребителски интерфейс',
    'LBL_NOTIFY_FROMADDRESS' => 'Адрес на подателя:',
    'LBL_NOTIFY_SUBJECT' => 'Относно:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Използване на прокси-сървър за достъп до външна информация.',
    'LBL_PROXY_ON' => 'Да се използва прокси-сървър?',
    'LBL_PROXY_PASSWORD' => 'Парола',
    'LBL_PROXY_PORT' => 'Порт',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'Потребител',
    'LBL_RESTORE_BUTTON_LABEL' => 'Възстанови',
    'LBL_SYSTEM_SETTINGS' => 'Системни настройки',
    'LBL_USE_REAL_NAMES' => 'Покажи цялото име (не потребителското)',
    'LBL_USE_REAL_NAMES_DESC' => 'Изписване пълно име на потребителя вместо потребителско име',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Списък със записи на страница',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Списък със субпанели на страница',
    'LOG_MEMORY_USAGE' => 'Записване на използваната памет в дневника',
    'LOG_SLOW_QUERIES' => 'Отчитане на заявките със забавяне в изпълнението',
    'CURRENT_LOGO' => 'Текущо лого в употреба',
    'CURRENT_LOGO_HELP' => 'Тази емблема се показва в средата на екрана за влизане в апликацията SuiteCRM.',
    'NEW_LOGO' => 'Зареждане на ново лого (212x40)',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Максимално време за изпълнение на стандартни заявки (msec)',
    'STACK_TRACE_ERRORS' => 'Покажи трасировката на грешки',
    'UPLOAD_MAX_SIZE' => 'Максимален размер на файла за зареждане',
    'VERIFY_CLIENT_IP' => 'Валидиране на потребителски IP адрес',
    'LOCK_HOMEPAGE' => 'Ограничаване на потребителите да персонализират началната си страница',
    'LOCK_SUBPANELS' => 'Ограничаване на потребителите да персонализират панели със свързани записи',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Име на системата',
    'SYSTEM_NAME_WIZARD' => 'Име:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Поддръжка на идентификация през LDAP',
    'LBL_LDAP_ENABLE' => 'Разреши използването на LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Сървър:',
    'LBL_LDAP_SERVER_PORT' => 'Номер на порт:',
    'LBL_LDAP_ADMIN_USER' => 'Потребителско име:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Парола за идентификация:',
    'LBL_LDAP_AUTHENTICATION' => 'Идентификация:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Автоматично създаване на потребители:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Пример: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Име на групата:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ако идентифицирания потребител не съществува, такъв ще бъде създаден в SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Ключ за криптиране:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Използване на SOAP за идентификация през ldap.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Разширението php_mcrypt трябва да бъде разрешено в конфигурационния файл php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Всички записи',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Next>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Търси:',
    'LBL_REG_EXP' => 'Рег.Exp:',
    'LBL_IGNORE_SELF' => 'Премахни самоуправлението:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Маркирайте от къде да запоне логването',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'id на процеса',
    'LBL_YOUR_IP_ADDRESS' => 'IP адресът Ви е',
    'LBL_IT_WILL_BE_IGNORED' => ' It will be ignored ',
    'LBL_LOG_NOT_CHANGED' => 'Log has not changed',
    'LBL_ALERT_JPG_IMAGE' => 'Форматът на файла с изображение следва да е JPEG.  Заредете нов файл с разширение .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Форматът на файла с изображение следва да е JPEG или PNG.  Заредете нов файл с разширение .jpg или .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Грешка при зареждане на изображението.',
    'LBL_LOGGER' => 'Настройка на логовете',
    'LBL_LOGGER_FILENAME' => 'Име на файла за вход',
    'LBL_LOGGER_FILE_EXTENSION' => 'Разширение',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Максимален размер на лога',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Формат на дата по подразбиране',
    'LBL_LOGGER_LOG_LEVEL' => 'Ниво на входа',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Максимален размер на логовете',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Добавяне след името на файла',
    'LBL_VCAL_PERIOD' => 'vCal актуализации за период от време:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Използвайте тази настройка за определяне на броя на месеците преди текущата дата, че безплатна/ запазена информацията за разговори и срещи се публикува.</BR>За да включите/ изключите, натиснете "0". Минималното е 1 месец, а максималната е 12 месеца.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admin Wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Потребител:',
    'LBL_WIZARD_WELCOME_TITLE' => 'Добре дошли в SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Продължи >',
    'LBL_WIZARD_BACK_BUTTON' => '< Върни',
    'LBL_WIZARD_SKIP_BUTTON' => 'Пропусни',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Продължи',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Зареждане...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Изтрий' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Потребител:' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
