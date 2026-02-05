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
    'ADVANCED' => 'Avansat',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 cod valuta',
    'DEFAULT_CURRENCY_NAME' => 'Nume Monedă',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simbol Monedă',
    'DEFAULT_DATE_FORMAT' => 'Data format implicita',
    'DEFAULT_DECIMAL_SEP' => 'Simbol zecimal',
    'DEFAULT_LANGUAGE' => 'Limba implicită',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfața utilizator',
    'DEFAULT_THEME' => 'Tema implicită',
    'DEFAULT_TIME_FORMAT' => 'Formatul implicit al orei',

    'DISPLAY_RESPONSE_TIME' => 'Afișează timpul de răspuns al serverului',

    'IMAGES' => 'Logo',
    'LBL_ALLOW_USER_TABS' => 'Permite utilizatorilor să ascundă filele',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configurare sistem',
    'LBL_LOGVIEW' => 'Vezi Jurnalul',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizați autentificare SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Parolă SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nume Utilizator SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specificații SMTP Server',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Alegeți furnizorul de e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Parola Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Parolă Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Adresă Mail Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Parolă Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Numele Utilizator Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Portul serverului Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permiteți utilizatorilor să utilizeze acest cont pentru e-mail de ieșire:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Când este selectată această opțiune, toți utilizatorii vor putea trimite e-mailuri folosind același cont de e-mail de ieșire utilizat pentru a trimite notificări și alerte de sistem. În cazul în care opțiunea nu este selectată, utilizatorii pot utiliza în continuare serverul de mail de ieșire după ce au furnizat informații despre propriul cont.',
    'LBL_MAILMERGE' => 'Preluare email',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Interval minim de reîmprospătare pentru Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Aceasta este valoarea minimă pe care poți alege să ai reîmprospătare pentru Dashlet. Setarea la \'Niciodată\' dezactivează auto-împrospătarea Dashlet-urilor în întregime.',
    'LBL_MODULE_FAVICON' => 'Afișează pictograma modulului ca favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Dacă sunteți într-un modul cu o pictogramă, utilizați pictograma modulului ca favicon, în locul temei favicon, în tab-ul browser-ului.',
    'LBL_MODULE_NAME' => 'Configurare sistem',
    'LBL_MODULE_ID' => 'Configurator',
    'LBL_MODULE_TITLE' => 'Interfața utilizator',
    'LBL_NOTIFY_FROMADDRESS' => '„De la„ Adresa:',
    'LBL_NOTIFY_SUBJECT' => 'Subiect:',

    'LBL_PROXY_AUTH' => 'Autentificare?',
    'LBL_PROXY_HOST' => 'Proxy',
    'LBL_PROXY_ON_DESC' => 'Configurați serverul proxy adresa și setările de autentificare',
    'LBL_PROXY_ON' => 'Utilizați server proxy?',
    'LBL_PROXY_PASSWORD' => 'Parolă',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Configurare proxy',
    'LBL_PROXY_USERNAME' => 'Utilizator',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restaurează',
    'LBL_SYSTEM_SETTINGS' => 'Configurare sistem',
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
    'CURRENT_LOGO' => 'Logo-ul actual:',
    'CURRENT_LOGO_HELP' => 'Acest logo este afișat in centrul ecranului de autentificare al aplicației Sugar.',
    'NEW_LOGO' => 'Selectați Logo:',
    'NEW_LOGO_HELP' => 'Formatul imaginii poate fi fie .png, fie .jpg. Înălțimea maximă este 170px, iar lățimea maximă este de 450px. Orice imagine încărcată care este mai mare în orice direcție va fi scalată la aceste dimensiuni maxime.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Formatul imaginii poate fi fie .png, fie .jpg. Înălțimea maximă este 170px, iar lățimea maximă este de 450px. Orice imagine încărcată care este mai mare în orice direcție va fi scalată la aceste dimensiuni maxime.',
    'SLOW_QUERY_TIME_MSEC' => 'Pragul de timp pentru interogările lente (milisecunde)',
    'STACK_TRACE_ERRORS' => 'Afișează urmele stivei ale erorilor',
    'UPLOAD_MAX_SIZE' => 'Dimensiunea maximă de încărcare',
    'VERIFY_CLIENT_IP' => 'Validare adresă IP utilizator',
    'LOCK_HOMEPAGE' => 'Împiedică afișarea paginii de start personalizabile pentru utilizator',
    'LOCK_SUBPANELS' => 'Împiedică utilizatorul să personalizeze aspectul SubPanourilor',
    'MAX_DASHLETS' => 'Numărul maxim de Dashlets pe pagina principala',
    'SYSTEM_NAME' => 'Nume sistem:',
    'SYSTEM_NAME_WIZARD' => 'Nume:',
    'SYSTEM_NAME_HELP' => 'Acesta este numele care se afișează în bara de titlu a browser-ului dvs.',
    'LBL_LDAP_TITLE' => 'Suport autentificare LDAP',
    'LBL_LDAP_ENABLE' => 'Activează LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Număr Port:',
    'LBL_LDAP_ADMIN_USER' => 'Nume Utilizator:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Folosit pentru a căuta utilizator LDAP. Acest lucru ar putea necesita o calificare completă.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Parolă:',
    'LBL_LDAP_AUTHENTICATION' => 'Autentificare:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Conectează-te la serverul LDAP folosind acreditările unui utilizator specific. Se va conecta anonim dacă nu sunt furnizate.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Creați Utilizatori:',
    'LBL_LDAP_USER_DN' => 'Utilizator DN:',
    'LBL_LDAP_GROUP_DN' => 'Grup DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exemplu: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtru utilizator:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membru al grupului:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Utilizatorii trebuie sa fie membrii al unui grup specific',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Utilizator atribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Identificatorul unic al persoanei care va fi folosit pentru a verifica dacă este membru al grupului. Exemplu: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atributul grupului care va fi folosit pentru filtrare în funcție de atributul utilizatorului. Exemplu:<em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Atribut grupului:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Orice filtru suplimentar pentru a se aplica la autentificarea utilizatorilor, de ex.<em>is_suitecrm_user=1 sau (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atribut de login:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atribut de legare:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Pentru legarea exemplelor de utilizatori LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Pentru căutare exemplelor de utilizator LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemplu: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplu: <em>389 sau 636 pentru SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Nume grup:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplul <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Dacă un utilizator autentificat nu există, unul va fi creat în SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Criptare cheie:',
    'DEVELOPER_MODE' => 'Mod dezvoltator',

    'SHOW_DOWNLOADS_TAB' => 'Afișează fila de descărcări',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Când este selectată, fila Descărcare va apărea în setările utilizatorului și va oferi acestora acces la plugin-urile SuiteCRM și alte fișiere disponibile',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pentru autentificarea SOAP la utilizarea LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Extensia php_mcrypt trebuie să fie activată în fișierul php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Extensia openssl trebuie să fie activată în fișierul php.ini.',
    'LBL_ALL' => 'Toate',
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
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Data format implicita',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivel jurnal',
    'LBL_LEAD_CONV_OPTION' => 'Opțiuni de conversie a conversiilor clienți',
    'LEAD_CONV_OPT_HELP' => "<b>Copiază</b> - Creează copii ale tuturor activităților Oportunități la înregistrările noi care sunt selectate de utilizator în timpul conversiei. Copiile sunt create pentru fiecare dintre înregistrările selectate.<br><br><b>Mutare</b> - Mută toate activitățile din conversii într-o înregistrare nouă care este selectată de utilizator în timpul conversiei.<br><br><b>Nu fă nimic</b> - Nu face nimic cu activitățile conversiei în acest timp. Activitățile rămân legate numai de conversii.",
    'LBL_CONFIG_AJAX' => 'Configurează interfața utilizator Ajax',
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
    'LBL_WIZARD_WELCOME_TAB' => 'Bine ai venit',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bun venit la SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Clic pe <b>Următor</b> pentru brand, localizare și configurare SuiteCRM acum. Dacă doriți să configurați SuiteCRM mai târziu, faceți clic pe <b>Omite</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Următor >',
    'LBL_WIZARD_BACK_BUTTON' => '< Înapoi',
    'LBL_WIZARD_SKIP_BUTTON' => 'Săriți',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuați',
    'LBL_WIZARD_FINISH_TITLE' => 'Configurarea de bază a sistemului este completă',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Identitate vizuală',
    'LBL_WIZARD_SYSTEM_DESC' => 'Furnizați numele organizației dvs. și logo-ul pentru a marca SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specificați cum doriți să fie afișate datele în SuiteCRM funcție de locația geografica. Setările pe care le furnizați aici vor fi setări implicite. Utilizatorii vor putea să își seteze propriile preferințe.',
    'LBL_WIZARD_SMTP_DESC' => 'Furnizați contul de e-mail care va fi utilizat pentru a trimite e-mailuri, cum ar fi notificările de atribuire și noile parole de utilizator. Utilizatorii vor primi e-mailuri de la SuiteCRM, ca trimis de la contul de e-mail specificat.',
    'LBL_LOADING' => 'Încărcare...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ștergere' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bine ai venit' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Arată istoricul e-mailurilor de contact asociate modulului SubPanoul',
);
