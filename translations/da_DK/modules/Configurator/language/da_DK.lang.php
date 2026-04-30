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
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217-valutakode',
    'DEFAULT_CURRENCY_NAME' => 'Valutanavn',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valutasymbol',
    'DEFAULT_DATE_FORMAT' => 'Standarddatoformat',
    'DEFAULT_DECIMAL_SEP' => 'Decimaltegn',
    'DEFAULT_LANGUAGE' => 'Standardsprog',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Standardklokkeslætsformat',

    'DISPLAY_RESPONSE_TIME' => 'Vis serverens svartider',

    'IMAGES' => 'Logoer',
    'LBL_ALLOW_USER_TABS' => 'Tillad, at brugere skjuler faner',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Vis log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
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
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Dette er den mindste værdi, man kan vælge til dashlets auto-refresh. Indstilling til \'Aldrig\' deaktiverer auto-refresh af Dashlets helt.',
    'LBL_MODULE_FAVICON' => 'Vis modulikon som favoritikon',
    'LBL_MODULE_FAVICON_HELP' => 'Hvis du er i et modul, der har et ikon, kan du bruge modulets ikon som favoritikon på browserfanen i stedet for temaets favoritikon.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"Fra" adresse:',
    'LBL_NOTIFY_SUBJECT' => 'Email emne:',

    'LBL_PROXY_AUTH' => 'Autentifikation?',
    'LBL_PROXY_HOST' => 'Proxy host',
    'LBL_PROXY_ON_DESC' => 'Konfigurer indstillinger for proxyserveradresse og godkendelse',
    'LBL_PROXY_ON' => 'Vil du bruge proxyserver?',
    'LBL_PROXY_PASSWORD' => 'Adgangskode',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Gendan',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Vis fulde navn',
    'LBL_USE_REAL_NAMES_DESC' => 'Vis en brugerens fulde navn i stedet for brugernavnet.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listevisningsposter pr. side',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Underpanelposter pr. side',
    'LOG_MEMORY_USAGE' => 'Logfør hukommelsesbrug',
    'LOG_SLOW_QUERIES' => 'Logfør langsomme forespørgsler',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Dette logo vises i centrum af login-skærmen i SuiteCRM applikationen.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'Billedfilformatet kan være enten .png eller .jpg. Den maksimale højde er 170px, og den maksimale bredde er 450px. Ethvert uploadet billede, der er større i alle retninger, vil blive skaleret til disse max dimensioner.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Billedfilformatet kan være enten .png eller .jpg. Den maksimale højde er 170px, og den maksimale bredde er 450px. Ethvert uploadet billede, der er større i alle retninger, vil blive skaleret til disse max dimensioner.',
    'SLOW_QUERY_TIME_MSEC' => 'Tidsgrænse for langsomme forespørgsler "msek."',
    'STACK_TRACE_ERRORS' => 'Vis staksporing af fejl',
    'UPLOAD_MAX_SIZE' => 'Maksimal uploadstørrelse',
    'VERIFY_CLIENT_IP' => 'Valider brugerens IP-adresse',
    'LOCK_HOMEPAGE' => 'Forhindre brugerdefinerbart startsidelayout',
    'LOCK_SUBPANELS' => 'Forhindre brugerdefinerbart underpanellayout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Systemnavn',
    'SYSTEM_NAME_WIZARD' => 'Navn:',
    'LBL_SNOOZE_TIMER' => 'Set Snooze For Notifications',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Understøttelse af LDAP-godkendelse',
    'LBL_LDAP_LEGACY_WARNING' => 'LDAP Warning',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'This LDAP configuration will only be used for v4 API authentication. To configure SuiteCRM login to use LDAP, add the needed configurations to the .env.local file. See LDAP configuration docs for more information.',
    'LBL_LDAP_ENABLE' => 'Aktivér LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'Brugernavn:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Bruges til at søge efter LDAP-brugeren. Denne skal muligvis være fuldt kvalificeret.',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Eksempel: <em>389 eller 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Eksempel: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Krypteringsnøgle:',
    'DEVELOPER_MODE' => 'Udviklertilstand',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Subpanel Pagination Type',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Listview Pagination Type',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Pop up Record List',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Pop up Record List Pagination Type',

    'SHOW_DOWNLOADS_TAB' => 'Vis downloadsfane',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Til SOAP-godkendelse, når du bruger LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Udvidelsen php_mcrypt skal være aktiveret i filen php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Markér point',
    'LBL_NEXT_' => 'Næste>>',
    'LBL_REFRESH_FROM_MARK' => 'Opdater fra markering',
    'LBL_SEARCH' => 'Søg:',
    'LBL_REG_EXP' => 'Reg. eksp.:',
    'LBL_IGNORE_SELF' => 'Ignorer selv:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markerer, hvor logføring skal starte',
    'LBL_DISPLAYING_LOG' => 'Viser logfil',
    'LBL_YOUR_PROCESS_ID' => 'Dit proces-id',
    'LBL_YOUR_IP_ADDRESS' => 'Din IP-adresse er',
    'LBL_IT_WILL_BE_IGNORED' => 'Den bliver ignoreret',
    'LBL_LOG_NOT_CHANGED' => 'Logfilen er ikke ændret',
    'LBL_ALERT_JPG_IMAGE' => 'Billedfilformatet skal være JPEG. Upload en ny fil med filtypenavnet .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Billedfilformatet skal være JPEG eller PNG. Upload en ny fil med filtypenavnet .jpg eller .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Højde-bredde-forholdet på billedet skal være mellem 1:1 og 10:1. Størrelsen på billedet tilpasses.',
    'ERR_ALERT_FILE_UPLOAD' => 'Fejl under upload af billedet.',
    'LBL_LOGGER' => 'Logføringsindstillinger',
    'LBL_LOGGER_FILENAME' => 'Logfilnavn',
    'LBL_LOGGER_FILE_EXTENSION' => 'Filtype',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimal logstørrelse',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Logføringsniveau',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Konfigurer AJAX-brugergrænsefladen',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum number of logs (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Tilknyt efter filnavn',
    'LBL_VCAL_PERIOD' => 'vCal opdaterer tidsperiode:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => '"Brug denne indstilling til at bestemme, hvor mange måneder før den aktuelle dato oplysninger om ledig/optaget i forbindelse med opkald og møder udgives.<BR>Du kan slå udgivelse af ledig/optaget fra ved at angive ""0"". Minimum er 1 måned. Maksimum er 12 måneder."',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Dine scenarier',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Administrator guide',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen til SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Næste >',
    'LBL_WIZARD_BACK_BUTTON' => '< Tilbage',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsæt',
    'LBL_WIZARD_FINISH_TITLE' => 'Basis system konfiguration er udført.',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Indlæser ...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
    'LBL_HISTORY_SUBPANEL' => 'History Subpanel',
);
