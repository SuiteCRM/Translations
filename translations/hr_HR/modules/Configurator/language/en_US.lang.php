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
    'ADVANCED' => 'Napredno',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kod valute',
    'DEFAULT_CURRENCY_NAME' => 'Ime valute',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbol valute',
    'DEFAULT_DATE_FORMAT' => 'Zadani format datuma',
    'DEFAULT_DECIMAL_SEP' => 'Decimalni znak',
    'DEFAULT_LANGUAGE' => 'Zadani jezik',
    'DEFAULT_SYSTEM_SETTINGS' => 'Korisničko sučelje',
    'DEFAULT_THEME' => 'Zadana tema',
    'DEFAULT_TIME_FORMAT' => 'Zadani format sata',

    'DISPLAY_RESPONSE_TIME' => 'Prikaži vrijeme odziva servera',

    'IMAGES' => 'Logo',
    'LBL_ALLOW_USER_TABS' => 'Dopusti korisnicima da sakriju kartice',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistemske Postavke',
    'LBL_LOGVIEW' => 'Prikaži Log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Koristi SMTP provjeru autentičnosti?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Lozinka:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP poslužitelj:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Korisničko Ime:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Detaljan Opis Servera',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Odaberi svog pružatelja E-mail usluga:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lozinka:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Lozinka:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-mail Adresa:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lozinka:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Korisničko Ime:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Port Servera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Dopusti korisnicima da koriste ovaj račun za izlaznu poštu:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kada je ova opcija uključena, svi korisnici će moći slati poštu koristeći isti račun za izlaznu poštu koji se koristi za slanje sistemskih upozorenja i obavijesti. Ako ova opcija nije uključena, korisnici će i dalje moći koristiti server izlazne pošte ali nakon što unesu podatke o svom korisničkom računu.',
    'LBL_MAILMERGE' => 'Spajanje e-pošte',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalni interval auto-osvježivanja dashleta',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ovo je minimalna vrijednost koja se može odabrati za auto-osvježivanje dashleta. Postavljanje na \'Nikad\' onemogućuje auto-osvježivanje dashleta u potpunosti.',
    'LBL_MODULE_FAVICON' => 'Prikaži ikonu modula kao omiljenu ikonu',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'Sistemske Postavke',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'Korisničko sučelje',
    'LBL_NOTIFY_FROMADDRESS' => '"Od" adresa:',
    'LBL_NOTIFY_SUBJECT' => 'Subjekt e-pošte:',

    'LBL_PROXY_AUTH' => 'Autentikacija?',
    'LBL_PROXY_HOST' => 'Proxy host',
    'LBL_PROXY_ON_DESC' => 'Kofigurirajte adrese proxy poslužitelja i postavke autentikacije',
    'LBL_PROXY_ON' => 'Koristiti proxy poslužitelj?',
    'LBL_PROXY_PASSWORD' => 'Lozinka',
    'LBL_PROXY_PORT' => 'Luka',
    'LBL_PROXY_TITLE' => 'Proxy postavke',
    'LBL_PROXY_USERNAME' => 'Korisničko ime',
    'LBL_RESTORE_BUTTON_LABEL' => 'Vrati',
    'LBL_SYSTEM_SETTINGS' => 'Sistemske Postavke',
    'LBL_USE_REAL_NAMES' => 'Prikaži puna imena',
    'LBL_USE_REAL_NAMES_DESC' => 'Prikaži korisnička puna imena umjesto njihovih korisničkih imena u poljima zadataka.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Prikaži akcije unutar izbornika',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Pregled liste stavki po stranici',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Stavke podploče po stranici',
    'LOG_MEMORY_USAGE' => 'Log memory usage',
    'LOG_SLOW_QUERIES' => 'Log slow queries',
    'CURRENT_LOGO' => 'Trenutni logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Odaberi logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maksimalna veličina uploada',
    'VERIFY_CLIENT_IP' => 'Potvrdi korisničku IP adresu',
    'LOCK_HOMEPAGE' => 'Spriječi korisnički prilagodljiv izgled naslovnice',
    'LOCK_SUBPANELS' => 'Spriječi korisničkiprilagodnjiv izgled podploče',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'Ime sustava:',
    'SYSTEM_NAME_WIZARD' => 'Naziv:',
    'SYSTEM_NAME_HELP' => 'Ovo je ime koje se prikazuje na naslovnoj traci Vašeg preglednika.',
    'LBL_LDAP_TITLE' => 'Podrška LDAP Autentikacije',
    'LBL_LDAP_ENABLE' => 'Omogući LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Broj porta:',
    'LBL_LDAP_ADMIN_USER' => 'Korisničko ime:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Koristi se za pretraživanje LDAP korisnika. Ovo će možda trebati biti potpuno kvalificirano.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Lozinka:',
    'LBL_LDAP_AUTHENTICATION' => 'Autentikacija:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Povežite se na LDAP poslužitelj pomoću specifičnih korisničkih vjerodajnica. Veže se anonimno ako nije navedeno.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatsko kreiranje korisnika:',
    'LBL_LDAP_USER_DN' => 'Korisnički DN:',
    'LBL_LDAP_GROUP_DN' => 'Grupni DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Primjer: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Korisnički filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grupno članstvo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Korisnici moraju biti članovi specifične grupne',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Korisnički atribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Jedinstveni identifikator osobe koja će se koristiti za provjeru je li član grupe Primjer: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atribut Grupe koja će se koristiti za filtriranje prema primjeru korisničkog atributa: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Grupni atribut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atribut prijave:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atribut spajanja:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Primjer: <em>389 ili 636 za SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Ime grupe:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Primjer: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ako ovjereni korisnik ne postoji, jedan će se kreirati u SuiteCRM-u.',
    'LBL_LDAP_ENC_KEY' => 'Ključ enkripcije:',
    'DEVELOPER_MODE' => 'Način razvojnog inženjera',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Za SOAP autentikaciju kada se koristi LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Ekstenzija php_mcrypt mora biti omogućena u Vašoj php.ini datoteci.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Sve',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Sljedeće>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Pretraživanje:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'ID vašeg procesa',
    'LBL_YOUR_IP_ADDRESS' => 'Vaša IP adresa je',
    'LBL_IT_WILL_BE_IGNORED' => 'Biti će ignorirano',
    'LBL_LOG_NOT_CHANGED' => 'Log has not changed',
    'LBL_ALERT_JPG_IMAGE' => 'Datotečni format slike mora biti JPEG. Uploadajte novu datoteku sa ekstenzijom datoteke .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Datotečni format slike mora biti JPEG ili PNG. Uploadajte novu datoteku sa ekstenzijom datoteka .jpg ili .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Omjer aspekta slike treba biti između 1:1 i 10:1. Veličina slike će biti prilagođena.',
    'ERR_ALERT_FILE_UPLOAD' => 'Greška tijekom uploadanja slike.',
    'LBL_LOGGER' => 'Postavke zapisnika',
    'LBL_LOGGER_FILENAME' => 'Ime datoteke zapisa',
    'LBL_LOGGER_FILE_EXTENSION' => 'Ekstenzija',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimalna veličina zapisa',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Zadani format datuma',
    'LBL_LOGGER_LOG_LEVEL' => 'Razina zapisa',
    'LBL_LEAD_CONV_OPTION' => 'Opcije glavne konverzije',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Konfigurirajte AJAX korisničko sučelje',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum number of logs (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Dodaj nakon imena datoteke',
    'LBL_VCAL_PERIOD' => 'vCal vremenski period ažuriranja:',
    'LBL_IMPORT_MAX_RECORDS' => 'Uvoz - Maksimalni broj redova:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<BR>To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admin Čarobnjak',
    'LBL_WIZARD_WELCOME_TAB' => 'Dobrodošli',
    'LBL_WIZARD_WELCOME_TITLE' => 'Dobrodošli u SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sljedeće>',
    'LBL_WIZARD_BACK_BUTTON' => '< Natrag',
    'LBL_WIZARD_SKIP_BUTTON' => 'Preskoči',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Nastavi',
    'LBL_WIZARD_FINISH_TITLE' => 'Osnovna konfiguracija sustava je dovršena',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Učitavanje...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Izbriši' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Dobrodošli' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
