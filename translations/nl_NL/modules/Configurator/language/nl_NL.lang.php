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
    'ADVANCED' => 'Geavanceerd',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuta code',
    'DEFAULT_CURRENCY_NAME' => 'Valuta naam',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valuta symbool',
    'DEFAULT_DATE_FORMAT' => 'Standaard datum formaat',
    'DEFAULT_DECIMAL_SEP' => 'Decimaal symbool',
    'DEFAULT_LANGUAGE' => 'Standaardtaal',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Standaard tijd formaat',

    'DISPLAY_RESPONSE_TIME' => 'Server responstijd weergeven',

    'IMAGES' => 'Logo\'s',
    'LBL_ALLOW_USER_TABS' => 'Sta gebruikers toe om tabbladen te verbergen',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Logboek bekijken',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimale Dashlets Auto-refresh interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Dit is de minimale waarde die men kan kiezen voor Dashlets auto-refresh. Instellen op \'Nooit\' schakelt het zelf verversen van Dashlets geheel uit.',
    'LBL_MODULE_FAVICON' => 'Toon module icoon als favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Als u een module gebruikt met een pictogram, gebruik het pictogram van de module als  favicon, in plaats van favicon van het thema, in het tabblad van de browser.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Insteller',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configureer proxy server adres en authenticatie',
    'LBL_PROXY_ON' => 'Gebruik proxy server?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Laat volledige naam zien (niet de login)',
    'LBL_USE_REAL_NAMES_DESC' => 'Toon gebruikers volledige namen in plaats van hun gebruikersnamen in toegekend aan velden.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Uitzetten converteren Lead actie voor geconverteerde Leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Als een Lead al geconverteerd is, zal het aanzetten van deze optie, de actie omzetten Lead verwijderen.',
    'LBL_ENABLE_ACTION_MENU' => 'Weergeven acties binnen het menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecteer gedetaileerde weergave en subpaneel acties binnen het dropdown menu. Wanneer niet geselecteerd zullen de acties weergegeven worden met aparte knoppen.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Aanzetten inlijn editing op  lijstweergave',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Selecteer om inlijn editing aan te zetten voor de velden in de lijstweergave. Indien niet geselecteerd dan staat inlijn editing niet aan in de lijstweergave.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Aanzetten inlijn editing op lijstweergave',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Selecteer om inlijn editing aan te zetten voor de velden in de lijstweergave. Indien niet geselecteerd dan staat inlijn editing niet aan in de lijstweergave. ',
    'LBL_HIDE_SUBPANELS' => 'Samengevouwen panelen',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Aantal lijst items per pagina',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Aantal subpaneel items per pagina',
    'LOG_MEMORY_USAGE' => 'Log geheugengebruik',
    'LOG_SLOW_QUERIES' => 'Log langzame queries',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Dit logo wordt weergegeven in het midden van het inlogscherm van de SuiteCRM toepassing.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'Het bestandsformaat moet .png of .jpg zijn. De maximale hoogte is 170px, en de maximale breedte is 450px. Een afbeelding die groter is in hoogte of breedte zal geschaald worden naar de maximale waarden.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Het bestandsformaat moet .png of .jpg zijn. De maximale hoogte is 170px, en de maximale breedte is 450px. Een afbeelding die groter is in hoogte of breedte zal geschaald worden naar de maximale waarden.',
    'SLOW_QUERY_TIME_MSEC' => 'Langzame query ondergrens (msec)',
    'STACK_TRACE_ERRORS' => 'Laat stack trace van errors zien',
    'UPLOAD_MAX_SIZE' => 'Maximale upload bestandsgrootte',
    'VERIFY_CLIENT_IP' => 'Valideer IP adres gebruikers',
    'LOCK_HOMEPAGE' => 'Voorkom dat gebruikers hun homepage wijzigen',
    'LOCK_SUBPANELS' => 'Voorkom dat gebruikers hun subpanelen wijzigen',
    'MAX_DASHLETS' => 'Maximum aantal SuiteCRM dashlets op de homepage',
    'SYSTEM_NAME' => 'Systeem naam:',
    'SYSTEM_NAME_WIZARD' => 'Naam: ',
    'LBL_SNOOZE_TIMER' => 'Stel uitstel in voor meldingen',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP authenticatie ondersteuning',
    'LBL_LDAP_LEGACY_WARNING' => 'LDAP Waarschuwing',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'Deze LDAP-configuratie wordt alleen gebruikt voor v4 API-authenticatie. Om SuiteCRM login te configureren voor LDAP, voeg je de benodigde configuraties toe aan het .env.locale bestand. Zie LDAP configuratie documenten voor meer informatie.',
    'LBL_LDAP_ENABLE' => 'LDAP inschakelen',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Gebruikt om te zoeken naar de LDAP-gebruiker. Dit moet mogelijk volledig worden gekwalificeerd.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Verbind met de LDAP-server met behulp van een specifieke gebruikers-referenties. Indien niet opgegeven wordt er verbonden als anoniem.',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Eventuele extra filter parameter om toe te passen bij de authenticatie van gebruikers. Bijvoorbeeld<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Voor het binden van de LDAP-gebruikersvoorbeelden:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Voor het zoeken naar de LDAP-gebruikersvoorbeelden: [<b> AD: </ b> & nbsp; userPrincipalName] [<b> openLDAP: </ b> & nbsp; cn] [<b> Mac & nbsp; OS & nbsp; X: </ b> & nbsp; dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Voorbeeld: ldap.example.com of ldaps://ldap.example.com voor SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Voorbeeld: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Voorbeeld <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Voorbeeld: <em>ou = People, dc = voorbeeld, dc = com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Ontwikkelmodus',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Subpanel paginatie type',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Listview Pagination Type',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Pop up Record List',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Pop up Record List Pagination Type',

    'SHOW_DOWNLOADS_TAB' => 'Display tabblad Downloads',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Na selectie verschijnt het tabblad Downloaden in de gebruikersinstellingen en bied het gebruikers toegang tot SuiteCRM-plug-ins en andere beschikbare bestanden',
    'LBL_LDAP_ENC_KEY_DESC' => 'Voor SOAP authenticatie met gebruik van LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'De php_mcrypt extensie moet ingeschakeld zijn in uw php.ini bestand.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'De OpenSSL-extensie moet ingeschakeld zijn in het php.ini-bestand.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Markeerpunt',
    'LBL_NEXT_' => 'Volgende>>',
    'LBL_REFRESH_FROM_MARK' => 'Vernieuwen vanaf markeerpunt',
    'LBL_SEARCH' => 'Zoeken:',
    'LBL_REG_EXP' => 'Reguliere expressie:',
    'LBL_IGNORE_SELF' => '\'Zelf\' negeren:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Startpunt markeren',
    'LBL_DISPLAYING_LOG' => 'Log',
    'LBL_YOUR_PROCESS_ID' => 'Uw proces ID',
    'LBL_YOUR_IP_ADDRESS' => 'Uw IP adres is',
    'LBL_IT_WILL_BE_IGNORED' => ' Het zal genegeerd worden ',
    'LBL_LOG_NOT_CHANGED' => 'Log is niet gewijzigd',
    'LBL_ALERT_JPG_IMAGE' => 'Het bestandsformaat van de afbeelding moet JPEG zijn. Upload een nieuw bestand met de extensie .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Het bestandsformaat van de afbeelding moet JPEG of PNG zijn. Upload een nieuw bestand met de extensie .jpg of .png.',
    'LBL_ALERT_SIZE_RATIO' => 'De beeldverhouding moet tussen 1:1 en 10:1  zijn. De afbeelding zal worden aangepast.',
    'ERR_ALERT_FILE_UPLOAD' => 'Fout bij het uploaden van de afbeelding.',
    'LBL_LOGGER' => 'Logger instellingen',
    'LBL_LOGGER_FILENAME' => 'Log bestandsnaam',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensie',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximum logbestand grootte',
    'LBL_STACK_TRACE' => 'Stapeltrace inschakelen',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Log niveau',
    'LBL_LEAD_CONV_OPTION' => 'Lead converteer opties',
    'LEAD_CONV_OPT_HELP' => "<b>Kopie</b> - Creëert en relateerd kopieën van alle  activiteiten van een lead met betrekking tot nieuwe records die zijn geselecteerd door de gebruiker tijdens de conversie. Kopieën worden gemaakt voor elk van de geselecteerde records. <br><br><b>Verplaatsen</b> - alle activiteiten van de lead worden verplaatst naar een nieuw record dat is geselecteerd door de gebruiker tijdens de conversie. <br> <br><b>Niets doen</b> -, gebeurt er niets met alle activiteiten van de lead tijdens de conversie. De activiteiten blijven alleen met elkaar verbonden via de voorsprong.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Inschakelen of Uitschakelen voor het gebruik van de AJAX gebruikers interface voor specifieke modulen.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum aantal logs',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Achter bestandsnaam invoegen',
    'LBL_VCAL_PERIOD' => 'vCal Updates tijdsperiode:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importeer - Maximaal aantal rijen:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specificeer hoeveel rijen toegestaan zijn in het te importeren bestand.<br>Als het aantal rijen in het te importeren bestand groter is dan dit getal, dan zal de gebruiker geïnformeerd worden.<br>Als geen nummer wordt ingevoerd, een ongelimiteerd aantal rijen is toegestaan.',
    'vCAL_HELP' => 'Gebruik deze instelling om het aantal maanden te bepalen vanaf de huidige datum dat vrij / bezet informatie voor gesprekken en vergaderingen wordt gepubliceerd. <br> Om vrij / bezet publiceren uit te schakelen, voer \"0\" in. Het minimum is 1 maand; het maximum is 12 maanden.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Uw scenario \'s',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Geen scenario\'s zijn geconfigureerd',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Kies welke scenario\'s geschikt zijn voor uw installatie.  Deze opties kunnen achteraf in de installatie gewijzigd worden.',

    'LBL_WIZARD_TITLE' => 'Beheer wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Welkom bij SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klik op <b>Volgende</b> om SuiteCRM nu te brandmerken, lokaliseren en configureren. Als u SuiteCRM later wilt configureren, klikt u op <b>Overslaan.</b>',
    'LBL_WIZARD_NEXT_BUTTON' => 'Volgende >',
    'LBL_WIZARD_BACK_BUTTON' => '<Terug',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Doorgaan',
    'LBL_WIZARD_FINISH_TITLE' => 'Basis systeem configuratie is voltooid',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Laden...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Laat e-mailadressen van gerelateerde contactpersonen zien in het geschiedenis sub paneel voor modules',
    'LBL_HISTORY_SUBPANEL' => 'History Subpanel',
);
