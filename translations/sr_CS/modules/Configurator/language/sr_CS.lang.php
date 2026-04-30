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
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kod valute',
    'DEFAULT_CURRENCY_NAME' => 'Naziv valute',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbol valute',
    'DEFAULT_DATE_FORMAT' => 'Podrazumevani format datuma',
    'DEFAULT_DECIMAL_SEP' => 'Decimalni simbol',
    'DEFAULT_LANGUAGE' => 'Podrazumevani jezik',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Podrazumevani format vremena',

    'DISPLAY_RESPONSE_TIME' => 'Prikaži vremena odziva servera',

    'IMAGES' => 'Logo slike',
    'LBL_ALLOW_USER_TABS' => 'Dozvoli korisnicima da sakriju kartice',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Pregledaj Dnevnik',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimalni interval za automatsko osvežavanje Dašleta',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ovo je najmanja vrednost koju neko može odabrati za automatsko osvežavanje sašleta. Podešavanje na &#39;Nikad&#39; u potpunosti onemogućuje automatsko osvežavanje dašleta.',
    'LBL_MODULE_FAVICON' => 'Prikaži ikonu modula kao favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Ako ste u modulu sa ikonom, koristite ikonu modula kao favicon umesto favicon teme, u kartici internet pretraživača.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfigurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfiguriši podešavanja adrese proksi servera i autentifikacije',
    'LBL_PROXY_ON' => 'Koristi proksi server?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Prikaži puno ime',
    'LBL_USE_REAL_NAMES_DESC' => 'Prikaži puno ime korisnika umesto njegovog korisničkog imena u poljima za zadatke.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Isključi akciju za konverziju potencijalnih klijenata u konvertovane potencijalne klijente',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Ako je potencijalni klijent već konvertovan, omogućavanje ove opcije će ukloniti akciju konverzije',
    'LBL_ENABLE_ACTION_MENU' => 'Prikaži akcije u ovkviru menija',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Odaberite da bi ste prikazali detaljni pregled i podstavke u ovkiru padajućeg menija. Ako nije odabrana ova opcija, akcije će biti prikazane kao pojedinačni dugmići.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Omogući izmene direktno i na prikazu liste',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Odaberite kako biste omogućili dirktne izmene i na prikazu liste predmeta. Ako nije izabrano ova opcija neće biti aktivna.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Omogućite direktno menjanje u detaljnom pregledu',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Odaberite kako biste omogućili dirktne izmene i na detlajnom prikazu. Ako nije izabrano ova opcija neće biti aktivna.',
    'LBL_HIDE_SUBPANELS' => 'Sakriveni podpaneli',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Lista artikala po stranici',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Podpanela po stranici',
    'LOG_MEMORY_USAGE' => 'Log korišćenja memorije',
    'LOG_SLOW_QUERIES' => 'Log sporih upita',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Maksimalno trajanje sporih upita (msec)',
    'STACK_TRACE_ERRORS' => 'Prikaži stack trace grešaka',
    'UPLOAD_MAX_SIZE' => 'Maksimalna veličina uvoza',
    'VERIFY_CLIENT_IP' => 'Proveri IP adresu korisnika',
    'LOCK_HOMEPAGE' => 'Spreči korisnika da prilagođava izgled početne strane',
    'LOCK_SUBPANELS' => 'Spreči korisnika da prilagođava izgled podpanela',
    'MAX_DASHLETS' => 'Maksimalan broj SuiteCRM dašleta na početnoj strani',
    'SYSTEM_NAME' => 'Naziv sistema:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Podrška za LDAP autentifikaciju',
    'LBL_LDAP_ENABLE' => 'Omogući LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Svi dodatni parametri filtera za primenu pri autentifikaciji korisnika npr.\nis_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Primer: 389 ili 636 za SSL',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Primer cn=sugarcrm',
    'LBL_LDAP_USER_DN_DESC' => 'Primer: ou=ljudi,dc=primer,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Developer Mod',

    'SHOW_DOWNLOADS_TAB' => 'Prikaži karticu preuzimanja',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Za SOAP autentifikaciju kada se koristi LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Mora biti omogućena php_mcrypt  ekstenzija u Vašem php.ini fajlu.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Tačka oznake',
    'LBL_NEXT_' => 'Sledeće>>',
    'LBL_REFRESH_FROM_MARK' => 'Osveži od oznake',
    'LBL_SEARCH' => 'Pretraga:',
    'LBL_REG_EXP' => 'Registracija ističe:',
    'LBL_IGNORE_SELF' => 'Ignoriši sebe:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markiraj odakle da počne logovanje',
    'LBL_DISPLAYING_LOG' => 'Prikazivanje loga',
    'LBL_YOUR_PROCESS_ID' => 'ID broj Vašeg procesa',
    'LBL_YOUR_IP_ADDRESS' => 'Vaša IP adresa je',
    'LBL_IT_WILL_BE_IGNORED' => 'Biće ignorisana',
    'LBL_LOG_NOT_CHANGED' => 'Log nije promenjen',
    'LBL_ALERT_JPG_IMAGE' => 'Format slike mora biti JPEG. Uvezite novi fajl čija je ekstenzija .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Format slike mora biti JPEG ili PNG. Uvezite novi fajl čija je ekstenzija .jpg ili .png.',
    'LBL_ALERT_SIZE_RATIO' => '&#39;Razmera slike mora biti između 1:1 i 10:1. Veličina slike će biti promenjena.',
    'ERR_ALERT_FILE_UPLOAD' => 'Greška prilikom uvoza slike.',
    'LBL_LOGGER' => 'Podešavanja logera',
    'LBL_LOGGER_FILENAME' => 'Ime log fajla',
    'LBL_LOGGER_FILE_EXTENSION' => 'Ekstenzija',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimalna veličina loga',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivo loga',
    'LBL_LEAD_CONV_OPTION' => 'Opcije konvertovanja potencijalnih klijenata',
    'LEAD_CONV_OPT_HELP' => "<b>Kopiraj</b> - Kreira i uvezuje kopije svih aktivnosti potencijalnog klijenta u nove zapise koji se biraju prilikom konverzije. Kopije se pravi za svaki odabrani zapis.<br><br><br /><br /><b>Pomeri</b> - Pomera sve aktivnosti potencijalnog klijenta u novi zapis koji se bira prilikom konverzije.<br><br><br /><br /><b>Ne uradi ništa</b> - Ništa se ne radi sa aktivnostima potencijalnog klijenta prilikom konverzije. Aktivnosti ostaju povezane sa jednim potencijalnim klijentom.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Performanse i vreme učitavanja strane su poboljšani u modulima u kojima je omogućen AJAX korisnički interfejs, zato što više nije potrebno osvežavati stranu.',
    'LBL_LOGGER_MAX_LOGS' => 'Maksimalni broj log unosa (pre zatvaranja fajla)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Dodaj iza imena fajla',
    'LBL_VCAL_PERIOD' => 'vCal Ažuriranja Vremenskog perioda:',
    'LBL_IMPORT_MAX_RECORDS' => 'Uvoz - maksimalni broj redova',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Odredite koliko redova je dozvoljeno u okviru datoteka za uvoz.<br>Ako je broj redova u datoteci za uvoz veći od ovog broja, korisnik će biti upozoren.<br>Ukoliko ne unesete ni jedan broj, dozvoljen je neograničen broj redova.',
    'vCAL_HELP' => 'Koristite ovo podešavanje da odredite broj meseci pre tekućeg datuma za koje je informacija poziva i sastanaka Slobodan/Zauzet objavljena.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vaši scenariji',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nisu definisani scenariji',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Izaberite koji su scenariji odgovrajući za vašu instalaciju. Ove opcije mogu biti promenjene posle instalacije.',

    'LBL_WIZARD_TITLE' => 'Čarobnjak za administraciju',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Dobrodošli u SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Kliknite <b>Sledeći</b> da brendujete, lokalizujete i konfigurišete SuiteCRMsada. Ako želite da konfigurišete SuiteCRMkasnije, kliknite <b>Preskoči</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sledeći >',
    'LBL_WIZARD_BACK_BUTTON' => '< Nazad',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Nastavi',
    'LBL_WIZARD_FINISH_TITLE' => 'Osnovno sistemsko konfigurisanje je završeno',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Prikazi e-mail adrese povezanih kontakata u "Istorija" podpanelu za module',
);
