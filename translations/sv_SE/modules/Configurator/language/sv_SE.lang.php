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
    'ADVANCED' => 'Avancerad',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuta kod',
    'DEFAULT_CURRENCY_NAME' => 'Valuta namn',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valuta symbol',
    'DEFAULT_DATE_FORMAT' => 'Standard datumformat',
    'DEFAULT_DECIMAL_SEP' => 'Decimalsymbol',
    'DEFAULT_LANGUAGE' => 'Standardspråk',
    'DEFAULT_SYSTEM_SETTINGS' => 'Användargränssnitt',
    'DEFAULT_THEME' => 'Default tema',
    'DEFAULT_TIME_FORMAT' => 'Standard tidsformat',

    'DISPLAY_RESPONSE_TIME' => 'Visa serverns svarstid',

    'IMAGES' => 'Loggor',
    'LBL_ALLOW_USER_TABS' => 'Tillåt användare att konfigurera flikar',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systeminställningar',
    'LBL_LOGVIEW' => 'Visa logg',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP Authentifikation?',
    'LBL_MAIL_SMTPPASS' => 'SMTP-lösenord:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP användarnamn:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server specifikation',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din Epost leverantör',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lösenord',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Lösenord',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Epost Adress',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lösenord',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Användarnamn',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillåt användare att använda detta konto för utgående epost:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'När denna är vald kommer alla användare att kunna skicka epost från samma utgående epost konto som används för att skicka system notiser och varningar. Om den inte är vald kan användare fortfarande använda den utgående epost servern efter att ha angivit sin egna konto information.',
    'LBL_MAILMERGE' => 'E-postkombinering',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Visa modul ikonen som favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Om du är i en modul med en ikon, använd modulens ikon som favicon, istället för temats favicon i browser fliken.',
    'LBL_MODULE_NAME' => 'Systeminställningar',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Användargränssnitt',
    'LBL_NOTIFY_FROMADDRESS' => '"Avsändar" adress:',
    'LBL_NOTIFY_SUBJECT' => 'E-post ämne:',

    'LBL_PROXY_AUTH' => 'Autenticering?',
    'LBL_PROXY_HOST' => 'Proxy-värd',
    'LBL_PROXY_ON_DESC' => 'Konfigurera proxyserver adress och autentifieringsinställningar',
    'LBL_PROXY_ON' => 'Använd proxyserver?',
    'LBL_PROXY_PASSWORD' => 'Lösenord',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy-inställningar',
    'LBL_PROXY_USERNAME' => 'Användarnamn',
    'LBL_RESTORE_BUTTON_LABEL' => 'Återställ',
    'LBL_SYSTEM_SETTINGS' => 'Systeminställningar',
    'LBL_USE_REAL_NAMES' => 'Visa hela namnet (ej inloggning)',
    'LBL_USE_REAL_NAMES_DESC' => 'Visa användarens hela namn istället för användarnamnet i uppdragsfälten.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Visa åtgärder i menyer',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Antal listade poster per sida',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Antal subpaneler per sida',
    'LOG_MEMORY_USAGE' => 'Logga minnesanvändning',
    'LOG_SLOW_QUERIES' => 'Logga långsamma SQL frågor',
    'CURRENT_LOGO' => 'Aktuell logotyp som används',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Ladda upp ny logo (212x40)',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Långsamma SQL frågor över tröskelvärde',
    'STACK_TRACE_ERRORS' => 'Visa lista på felmeddelanden',
    'UPLOAD_MAX_SIZE' => 'Maximal uppladdningsstorlek',
    'VERIFY_CLIENT_IP' => 'Validera användarens IP-adress',
    'LOCK_HOMEPAGE' => 'Hindra användaren från att skapa anpassade "Hem" sidor',
    'LOCK_SUBPANELS' => 'Hindra användarna från att skapa anpassade subpaneler',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Systemnamn',
    'SYSTEM_NAME_WIZARD' => 'Namn:',
    'SYSTEM_NAME_HELP' => 'Detta namn visas som titel i din browser.',
    'LBL_LDAP_TITLE' => 'Support för LDAP autentifiering',
    'LBL_LDAP_ENABLE' => 'Aktivera LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Nummer:',
    'LBL_LDAP_ADMIN_USER' => 'Användarnamn',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Lösenord:',
    'LBL_LDAP_AUTHENTICATION' => 'Verifiering',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatskapa Användare:',
    'LBL_LDAP_USER_DN' => 'Användar DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupp DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exempel: ou=groups,dc=example,dc=com',
    'LBL_LDAP_USER_FILTER' => 'Användarfilter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppmedlemskap:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Användaren måste vara en medlem i specifik grupp',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Användar attribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Den unika identifieringen av personen som ska användas för kontroll av medlemskap i gruppen, exempelvis: <i>uid</i>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Det attribut på gruppen som skall användas som filter gentemot användar attributen, Exempel: <i>memberUid</i>',
    'LBL_LDAP_GROUP_ATTR' => 'Grupp attribut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exempel: <em>389 eller 636 för SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Gruppnamn:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exempel: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Om det inte finns någon autentifierad användare kommer en skapas i SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Säkerhets Nyckel:',
    'DEVELOPER_MODE' => 'Utvecklingsläge',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'För SOAP autentifiering vid ldap användning.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt ändelsen måste vara aktiverad i er php.ini fil.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Alla',
    'LBL_MARK_POINT' => 'Markera plats',
    'LBL_NEXT_' => 'Nästa>>',
    'LBL_REFRESH_FROM_MARK' => 'Uppdatera från markering',
    'LBL_SEARCH' => 'Sök:',
    'LBL_REG_EXP' => 'Reg Upphör:',
    'LBL_IGNORE_SELF' => 'Ignorera Själv:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markerar var loggning skall starta från',
    'LBL_DISPLAYING_LOG' => 'Visa Logg',
    'LBL_YOUR_PROCESS_ID' => 'Ditt process id',
    'LBL_YOUR_IP_ADDRESS' => 'Din IP-address är',
    'LBL_IT_WILL_BE_IGNORED' => 'kommer att ignoreras',
    'LBL_LOG_NOT_CHANGED' => 'loggen har inte förändrats',
    'LBL_ALERT_JPG_IMAGE' => 'Filformatet på bilden måste vara .jpg. Ladda upp en ny fil med filändelsen .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Filformatet på bilden måste vara .jpg eller .png. Ladda upp en ny fil med filändelsen .jpg eller .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Bildkvoten måste vara mellan 1:1 och 10:1. Bilden kommer att skalas om.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error under uppladdning av bild.',
    'LBL_LOGGER' => 'Logger-inställningar',
    'LBL_LOGGER_FILENAME' => 'Logfil namn',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension/Tillägg',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximal logfilsstorlek',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standard datumformat',
    'LBL_LOGGER_LOG_LEVEL' => 'Lognivå',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximal antal loggar (innan rullning)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Läggtill efter filnamn',
    'LBL_VCAL_PERIOD' => 'vCal uppdaterings period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - maximalt antal rader:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Använd den här inställningen för att bestämma antalet månader före aktuellt datum för lediga/ upptagna för samtal och möten som ska publiceras. För att stänga av lediga/upptagna publiceringar, skriv "0". Minimum är 1 månad och max 12 månader.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Dina scenarier',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Administrationsguide',
    'LBL_WIZARD_WELCOME_TAB' => 'Start',
    'LBL_WIZARD_WELCOME_TITLE' => 'Välkommen till SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Nästa >',
    'LBL_WIZARD_BACK_BUTTON' => '< Tillbaka',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skippa',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsätt',
    'LBL_WIZARD_FINISH_TITLE' => 'Grundläggande system konfiguration är klar',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Märkning',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ange ditt företagsnamn och logga för att märka din SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specificera hur du vill att data i SuiteCRM ska visas baserat på din geografiska belägenhet. Dessa inställningar kommer att vara default inställningar, varje användare kan sätta sina egna.',
    'LBL_WIZARD_SMTP_DESC' => 'Ange det epostkonto som ska användas för att skicka epost såsom tilldelning av notiser och nya användarlösenord. Användare kan ta emot epost från SuiteCRM som skickat från specificerat epostkonto.',
    'LBL_LOADING' => 'Laddar...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Radera' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Start' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
