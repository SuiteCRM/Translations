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
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 cod valuta',
    'DEFAULT_CURRENCY_NAME' => 'Nume Monedă',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbol Monedă',
    'DEFAULT_DATE_FORMAT' => 'Data format implicita',
    'DEFAULT_DECIMAL_SEP' => 'Simbol zecimal',
    'DEFAULT_LANGUAGE' => 'Limba implicită',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Formatul implicit al orei',

    'DISPLAY_RESPONSE_TIME' => 'Afișează timpul de răspuns al serverului',

    'IMAGES' => 'Logo',
    'LBL_ALLOW_USER_TABS' => 'Permite utilizatorilor să ascundă filele',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Vezi Jurnalul',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Interval minim de reîmprospătare pentru Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Aceasta este valoarea minimă pe care poți alege să ai reîmprospătare pentru Dashlet. Setarea la \'Niciodată\' dezactivează auto-împrospătarea Dashlet-urilor în întregime.',
    'LBL_MODULE_FAVICON' => 'Afișează pictograma modulului ca favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Dacă sunteți într-un modul cu o pictogramă, utilizați pictograma modulului ca favicon, în locul temei favicon, în tab-ul browser-ului.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Configurator',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configurați serverul proxy adresa și setările de autentificare',
    'LBL_PROXY_ON' => 'Utilizați server proxy?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Arată numele complet',
    'LBL_USE_REAL_NAMES_DESC' => 'Afișează numele complete ale utilizatorilor în loc de numele lor de utilizator în câmpurile de atribuire.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Dezactivează acțiunea de convertire a conversiei pentru cele deja convertite',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Dacă o Oportunitate a fost deja convertită, activarea acestei opțiuni va elimina acțiunea de conversie a oportunității.',
    'LBL_ENABLE_ACTION_MENU' => 'Afișează acțiuni în interiorul meniurilor',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selectați pentru a afișa acțiunile Vizualizare detaliată și SubPanouri într-un meniu derulant. Dacă nu sunt selectate, acțiunile vor fi afișate ca butoane separate.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activează editarea în linie la vizualizarea tip listă',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Selectați pentru a activa editarea în linie pentru câmpurile din vizualizarea listei. Dacă nu este selectat, editarea în linie va fi dezactivată în vizualizarea listei.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activează editarea în linie la vizualizarea detaliată',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Selectați pentru a activa editarea în linie pentru câmpurile din vizualizarea detaliilor. Dacă editarea în linie neselectată va fi dezactivată la vizualizarea detaliilor.',
    'LBL_HIDE_SUBPANELS' => 'SubPanouri reduse',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Vedere lista de articole pe pagină',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Elemente SubPanou per pagină',
    'LOG_MEMORY_USAGE' => 'Înregistrează utilizarea memoriei',
    'LOG_SLOW_QUERIES' => 'Înregistrează interogările lente',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Pragul de timp pentru interogările lente (milisecunde)',
    'STACK_TRACE_ERRORS' => 'Afișează urmele stivei ale erorilor',
    'UPLOAD_MAX_SIZE' => 'Dimensiunea maximă de încărcare',
    'VERIFY_CLIENT_IP' => 'Validare adresă IP utilizator',
    'LOCK_HOMEPAGE' => 'Împiedică afișarea paginii de start personalizabile pentru utilizator',
    'LOCK_SUBPANELS' => 'Împiedică utilizatorul să personalizeze aspectul SubPanourilor',
    'MAX_DASHLETS' => 'Numărul maxim de Dashlets pe pagina principala',
    'SYSTEM_NAME' => 'Nume sistem:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Suport autentificare LDAP',
    'LBL_LDAP_ENABLE' => 'Activează LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Orice filtru suplimentar pentru a se aplica la autentificarea utilizatorilor, de ex.<em>is_suitecrm_user=1 sau (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Pentru legarea exemplelor de utilizatori LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Pentru căutare exemplelor de utilizator LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplu: <em>389 sau 636 pentru SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplul <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Mod dezvoltator',

    'SHOW_DOWNLOADS_TAB' => 'Afișează fila de descărcări',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Când este selectată, fila Descărcare va apărea în setările utilizatorului și va oferi acestora acces la plugin-urile SuiteCRM și alte fișiere disponibile',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pentru autentificarea SOAP la utilizarea LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Extensia php_mcrypt trebuie să fie activată în fișierul php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Extensia openssl trebuie să fie activată în fișierul php.ini.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Marchează punctul',
    'LBL_NEXT_' => 'Următorul>>',
    'LBL_REFRESH_FROM_MARK' => 'Reîmprospătare de la Mark',
    'LBL_SEARCH' => 'Căutare:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignoră-te:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcare unde să înceapă autentificarea de la',
    'LBL_DISPLAYING_LOG' => 'Afișare jurnal',
    'LBL_YOUR_PROCESS_ID' => 'ID-ul procesului tău',
    'LBL_YOUR_IP_ADDRESS' => 'Adresa ta de IP este',
    'LBL_IT_WILL_BE_IGNORED' => ' va fi ignorat ',
    'LBL_LOG_NOT_CHANGED' => 'Jurnalul nu a fost schimbat',
    'LBL_ALERT_JPG_IMAGE' => 'Formatul de fișier al imaginii trebuie să fie JPEG. Încărcați un nou fișier cu extensia .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formatul de fișier al imaginii trebuie să fie JPEG sau PNG. Încărcați un nou fișier cu extensia .jpg sau .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Raportul de aspect al imaginii ar trebui să fie 1:1 - 10:1. Imaginea va fi redimensionată.',
    'ERR_ALERT_FILE_UPLOAD' => 'Eroare în timpul încărcării imaginii.',
    'LBL_LOGGER' => 'Setări jurnal',
    'LBL_LOGGER_FILENAME' => 'Nume fișier jurnal',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensie',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Mărimea maximă a însemnărilor',
    'LBL_STACK_TRACE' => 'Activează urmărirea stivelor',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivel jurnal',
    'LBL_LEAD_CONV_OPTION' => 'Opțiuni de conversie a conversiilor clienți',
    'LEAD_CONV_OPT_HELP' => "<b>Copiază</b> - Creează copii ale tuturor activităților Oportunități la înregistrările noi care sunt selectate de utilizator în timpul conversiei. Copiile sunt create pentru fiecare dintre înregistrările selectate.<br><br><b>Mutare</b> - Mută toate activitățile din conversii într-o înregistrare nouă care este selectată de utilizator în timpul conversiei.<br><br><b>Nu fă nimic</b> - Nu face nimic cu activitățile conversiei în acest timp. Activitățile rămân legate numai de conversii.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Activează sau dezactivează utilizarea interfeței AJAX pentru module specifice.',
    'LBL_LOGGER_MAX_LOGS' => 'Numărul maxim de însemnări (înainte de rulare)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Adăugare după numele fișierului',
    'LBL_VCAL_PERIOD' => 'vCal actualizări perioadă de timp:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Numărul maxim de rânduri:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specificați câte rânduri sunt permise în cadrul fișierelor de import.<br>Dacă numărul de rânduri dintr-un fișier de import depășește acest număr, utilizatorul va fi alertat.<br>Dacă nu este introdus niciun număr, este permis un număr nelimitat de rânduri.',
    'vCAL_HELP' => 'Utilizați această setare pentru a determina numărul de luni în avans față de data curentă pentru care sunt publicate informațiile privind disponibilitatea pentru apeluri și întâlniri.<BR>Pentru a dezactiva publicarea disponibilității/indisponibilității, introduceți "0". Minimul este 1 lună; maximul este 12 luni.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Scenariile tale',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nu au fost configurate scenarii',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Alegeți care scenarii sunt potrivite pentru instalare. Aceste opțiuni pot fi schimbate post-instalare.',

    'LBL_WIZARD_TITLE' => 'Asistent Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bun venit la SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Clic pe <b>Următor</b> pentru brand, localizare și configurare SuiteCRM acum. Dacă doriți să configurați SuiteCRM mai târziu, faceți clic pe <b>Omite</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Următor >',
    'LBL_WIZARD_BACK_BUTTON' => '< Înapoi',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuați',
    'LBL_WIZARD_FINISH_TITLE' => 'Configurarea de bază a sistemului este completă',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Arată istoricul e-mailurilor de contact asociate modulului SubPanoul',
);
