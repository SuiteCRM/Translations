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
    'ADVANCED' => 'Laiendatud',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuutakood',
    'DEFAULT_CURRENCY_NAME' => 'Valuuta nimi',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valuuta sümbol',
    'DEFAULT_DATE_FORMAT' => 'Vaikekuupäeva formaat',
    'DEFAULT_DECIMAL_SEP' => 'Kümnendkoha sümbol',
    'DEFAULT_LANGUAGE' => 'Vaikekeel',
    'DEFAULT_SYSTEM_SETTINGS' => 'Kasutajaliides',
    'DEFAULT_THEME' => 'Vaiketeema',
    'DEFAULT_TIME_FORMAT' => 'Vaike ajaformaat',

    'DISPLAY_RESPONSE_TIME' => 'Kuva serveri vasteajad',

    'IMAGES' => 'Logod',
    'LBL_ALLOW_USER_TABS' => 'Luba kasutajatel tabeldused peita',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Süsteemi sätted',
    'LBL_LOGVIEW' => 'Vaata logi',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Kasuta SMTP autentimist?',
    'LBL_MAIL_SMTPPASS' => 'SMTP salasõna:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP kasutajanimi:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP serveri andmed',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vali oma e-posti teenusepakkuja:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmaili salasõna:',
    'LBL_GMAIL_SMTPUSER' => 'Gmaili e-posti aadress:',
    'LBL_EXCHANGE_SMTPPASS' => 'Vaheta salasõna:',
    'LBL_EXCHANGE_SMTPUSER' => 'Vaheta kasutajanime:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Luba kasutajatel seda kontot kasutada väljaminevate e-kirjade jaoks:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Kirja mestimine',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Kuva mooduli ikooni favikonina.',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'Süsteemi sätted',
    'LBL_MODULE_ID' => 'Konfigureerija',
    'LBL_MODULE_TITLE' => 'Kasutajaliides',
    'LBL_NOTIFY_FROMADDRESS' => '"Kellelt" aadress',
    'LBL_NOTIFY_SUBJECT' => 'E-kirja teema:',

    'LBL_PROXY_AUTH' => 'Autentimine?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfigureeri proxy serveri aadress ja autentimissätteid',
    'LBL_PROXY_ON' => 'Kasutada proxy serverit?',
    'LBL_PROXY_PASSWORD' => 'Parool:',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxi sätted',
    'LBL_PROXY_USERNAME' => 'Kasutajanimi',
    'LBL_RESTORE_BUTTON_LABEL' => 'Taasta',
    'LBL_SYSTEM_SETTINGS' => 'Süsteemi sätted',
    'LBL_USE_REAL_NAMES' => 'Näita täisnimesid',
    'LBL_USE_REAL_NAMES_DESC' => 'Kuva kasutajate täisnimed nende kasutajanimede asemel määrangute väljadel.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Loendivaade lehekülje kaupa',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Alampaneeli ühikud lehekülje kaupa',
    'LOG_MEMORY_USAGE' => 'Logi mälu kasutamine',
    'LOG_SLOW_QUERIES' => 'Log slow queries',
    'CURRENT_LOGO' => 'Praegune logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Vali logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maksimaalne üleslaadiminse suurus',
    'VERIFY_CLIENT_IP' => 'Kehtiv kasutaja IP aadress',
    'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
    'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Süsteemi nimi:',
    'SYSTEM_NAME_WIZARD' => 'Nimi:',
    'SYSTEM_NAME_HELP' => 'See on nimi, mis kuvatakse sinu brauseri tiitelribal.',
    'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
    'LBL_LDAP_ENABLE' => 'Luba LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Pordi number:',
    'LBL_LDAP_ADMIN_USER' => 'Kasutajanimi:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Salasõna:',
    'LBL_LDAP_AUTHENTICATION' => 'Autentimine:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automaatselt loodud kasutajad:',
    'LBL_LDAP_USER_DN' => 'Kasutaja DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupi DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Näide: ou=groups,dc=example,dc=com',
    'LBL_LDAP_USER_FILTER' => 'Kasutaja filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grupi liikmelisus:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Kasutajad peavad olema teatud grupi liikmed',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Kasutaja atribuut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Grupi atribuut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login atribuut:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Näide: 389 või 636 SSL jaoks',
    'LBL_LDAP_GROUP_NAME' => 'Grupi nimi:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Näide: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kui audentitud kasutajat ei eksisteeri, siis üks luuakse SuiteCRMs.',
    'LBL_LDAP_ENC_KEY' => 'Krüptovõti:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'SOAP autentimise jaoks, kui kasutatakse LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt laiendus peab olema sinu php.ini failis lubatud.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Kõik',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Järgmine>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Otsi:',
    'LBL_REG_EXP' => 'Reg. aegunud:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Logi kuvamine',
    'LBL_YOUR_PROCESS_ID' => 'Sinu protsessi ID',
    'LBL_YOUR_IP_ADDRESS' => 'Sinu IP aadress on',
    'LBL_IT_WILL_BE_IGNORED' => 'seda ignoreeritakse',
    'LBL_LOG_NOT_CHANGED' => 'Logi pole muutunud',
    'LBL_ALERT_JPG_IMAGE' => 'Pildi failiformaat peab olema JEPG. Lae üles uus fail koos faililaiendusega .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Kujutise failiformaat peab olema JPEG või PNG. Lae üles üks fail koos faililaiendusega .jpg või .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Viga kujutise üleslaadimisel',
    'LBL_LOGGER' => 'Loggeri sätted',
    'LBL_LOGGER_FILENAME' => 'Log File Name',
    'LBL_LOGGER_FILE_EXTENSION' => 'Laiendus',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimaalne logi suurus',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Vaikekuupäeva formaat',
    'LBL_LOGGER_LOG_LEVEL' => 'Logi tase',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksimum logide arv (enne rollimist)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Append after filename',
    'LBL_VCAL_PERIOD' => 'vCal Updates Time Period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<BR>To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Sinu stsenaariumid',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admini viisard',
    'LBL_WIZARD_WELCOME_TAB' => 'Teretulemast',
    'LBL_WIZARD_WELCOME_TITLE' => 'Teretulemast SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Järgmine >',
    'LBL_WIZARD_BACK_BUTTON' => '< Tagasi',
    'LBL_WIZARD_SKIP_BUTTON' => 'Jäta vahele',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Jätka',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Firmasümboolika',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Laadimine...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Kustuta' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Teretulemast' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
