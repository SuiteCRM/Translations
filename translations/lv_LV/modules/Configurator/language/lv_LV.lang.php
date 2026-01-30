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
    'ADVANCED' => 'Papildus',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valūtas kods',
    'DEFAULT_CURRENCY_NAME' => 'Valūtas nosaukums',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valūtas simbols',
    'DEFAULT_DATE_FORMAT' => 'Noklusētais datuma formāts',
    'DEFAULT_DECIMAL_SEP' => 'Decimālais simbols',
    'DEFAULT_LANGUAGE' => 'Noklusētā valoda',
    'DEFAULT_SYSTEM_SETTINGS' => 'Lietotāja saskarne',
    'DEFAULT_THEME' => 'Noklusējuma tēma',
    'DEFAULT_TIME_FORMAT' => 'Noklusējuma laika formāts',

    'DISPLAY_RESPONSE_TIME' => 'Rādīt servera atbildes laikus',

    'IMAGES' => 'Logotipi',
    'LBL_ALLOW_USER_TABS' => 'Ļaut lietotājiem slēpt cilnes',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistēmas iestatījumi',
    'LBL_LOGVIEW' => 'Skatīt žurnālu',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Lietot SMTP autentifikāciju?',
    'LBL_MAIL_SMTPPASS' => 'SMTP parole:',
    'LBL_MAIL_SMTPPORT' => 'SMTP ports:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
    'LBL_MAIL_SMTPUSER' => 'SMTP lietotājvārds:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Servera specifikācija',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izvēlieties e-pasta pakalpojumu sniedzēju:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Pasta parole:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Pasta ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Parole:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-pasta adrese:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange parole:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange lietotājvārds:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange servera ports:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange serveris:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Atļaut lietotājiem lietot šo kontu izejošiem e-pastiem:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ja šī iespēja ir atzīmēta, visi lietotāji var sūtīt e-pastus lietojot vienu izejošā e-pasta kontu sistēmas ziņojumu un rīdinajumu sūtīšanai. Ja iespēja netiek atzīmēta tad lietotājo var lietot to pašu izejošā e-pasta serveri, bet viņiem ir jānorāda katram sava e-pasta konta informācija.',
    'LBL_MAILMERGE' => 'Pasta sapludināšana',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimālais dašletu pašatjaunošanās intervāls',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Minimālais intervāls dašletu informācijas automātiskai atjaunināšanai. Norādot $#39;Nekad$#39; automātiskā atjaunināšana tiks izslēgta viesiem dašletiem.',
    'LBL_MODULE_FAVICON' => 'Rādīt moduļa ikonu favorītu joslā',
    'LBL_MODULE_FAVICON_HELP' => 'Ja esiet modulī ar savu ikonu tad lietojiet moduļa ikonu kā favicon nevis tēmas favicon  pārlūka cilnē.',
    'LBL_MODULE_NAME' => 'Sistēmas iestatījumi',
    'LBL_MODULE_ID' => 'Kofigurētājs',
    'LBL_MODULE_TITLE' => 'Lietotāja saskarne',
    'LBL_NOTIFY_FROMADDRESS' => 'Sūtītāja adrese:',
    'LBL_NOTIFY_SUBJECT' => 'E-pasta temats:',

    'LBL_PROXY_AUTH' => 'Autentifikācija?',
    'LBL_PROXY_HOST' => 'Starpnieksistēma',
    'LBL_PROXY_ON_DESC' => 'Konfigurējiet starpniekservera adresi un autentifikācijas iestatījumus',
    'LBL_PROXY_ON' => 'Lietot starpniekserveri?',
    'LBL_PROXY_PASSWORD' => 'Parole',
    'LBL_PROXY_PORT' => 'Ports',
    'LBL_PROXY_TITLE' => 'Starpnieksistēmas iestatījumi',
    'LBL_PROXY_USERNAME' => 'Lietotāja vārds',
    'LBL_RESTORE_BUTTON_LABEL' => 'Atjaunot',
    'LBL_SYSTEM_SETTINGS' => 'Sistēmas iestatījumi',
    'LBL_USE_REAL_NAMES' => 'Rādīt pilnus vārdus',
    'LBL_USE_REAL_NAMES_DESC' => 'Parādīt lietotāja pilnu vārdu, nevis pieteikšanās vārdu piešķires laukos.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Aizliegt konvertēšanu jau konvertētiem interesentu ierakstiem',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Ja interesenta ieraksts jau ir konvertēts, tad konvertēšanas aizlieguma uzstādījums noņems konvertēšanas darbību interesenta ierakstam',
    'LBL_ENABLE_ACTION_MENU' => 'Darbības rādīt izvēlnēs',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Atzīmējiet lai rādītu detalizētā skata un apakšpaneļu darbības kā izkrītošās izvēlnēs. Ja nav atzīmēts, tad darbības tiks attēlotas kā atsevišķas komandpogas.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Atļaut rediģēt sarakstā',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Saraksta rindu skaits lapā',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Apakšpaneļa rindu skaits lapā',
    'LOG_MEMORY_USAGE' => 'Atmiņas patēriņa reģistrācija',
    'LOG_SLOW_QUERIES' => 'Lēnu vaicājumu reģistrēšana',
    'CURRENT_LOGO' => 'Esošais logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Norādiet logotipu:',
    'NEW_LOGO_HELP' => 'Attēls var būt .png vai .jpg formātā. Maksimālais augstums 170px, un maksimālais platums 450px. Jebkuram ielādētajam attēlam, kurš būs lielāks, tiks izmainīts mērogs līdz maksimāli atļautajam malas izmēram.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Attēls var būt .png vai .jpg formātā. Maksimālais augstums 170px, un maksimālais platums 450px. Jebkuram ielādētajam attēlam, kurš būs lielāks, tiks izmainīts mērogs līdz maksimāli atļautajam malas izmēram.',
    'SLOW_QUERY_TIME_MSEC' => 'Lēna vaicājuma laika slieksnis (msek.)',
    'STACK_TRACE_ERRORS' => 'Attēlot pilnu kļūdu steka informāciju',
    'UPLOAD_MAX_SIZE' => 'Maksimālais augšupielādes faila izmērs',
    'VERIFY_CLIENT_IP' => 'Apstiprināt lietotāja IP adresi',
    'LOCK_HOMEPAGE' => 'Neļaut lietotājam pielāgot sākumlapas izkārtojumu',
    'LOCK_SUBPANELS' => 'Neļaut lietotājam pielāgot apakšpaneļa izkārtojumu',
    'MAX_DASHLETS' => 'Maksimālais SuiteCRM dašletu skaits sākumlapā',
    'SYSTEM_NAME' => 'Sistēmas nosaukums:',
    'SYSTEM_NAME_WIZARD' => 'Vārds:',
    'SYSTEM_NAME_HELP' => 'Šis nosaukums parādās pārlūkprogrammas nosaukuma joslā.',
    'LBL_LDAP_TITLE' => 'LDAP autentifikācijas atbalsts',
    'LBL_LDAP_ENABLE' => 'Atļaut LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveris:',
    'LBL_LDAP_SERVER_PORT' => 'Porta numurs:',
    'LBL_LDAP_ADMIN_USER' => 'Lietotājvārds:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'SMTP parole:',
    'LBL_LDAP_AUTHENTICATION' => 'Autentifikācija',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automātiskā lietotāju izveide:',
    'LBL_LDAP_USER_DN' => 'Lietotāja DN:',
    'LBL_LDAP_GROUP_DN' => 'Groupas DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Piemērs: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Lietotāju filtrs:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grupas piederība:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Lietotājam jābūt noteiktā grupā',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Lietotāja atribūts:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Personas unikālais identifikators, kurš tiks izmantots lai pārbaudīti vai persona ir noteiktā grupā, piemēram: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Grupas atribūts filtrēšanai attiecībā pret lietotāja atribūtu, piemēram: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Grupas atribūts:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Papildus parametri, kuri tiks izmantoti lietotāju autentifikācijā piem.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Pieteikšanās atribūts:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Sasaistes atribūts:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Piemērs: <em>389 vai 636 priekš SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Grupas nosaukums:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Piemērs <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Piemērs: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ja lietotājs neeksistē tad lietotājs tiks izveidots.',
    'LBL_LDAP_ENC_KEY' => 'Šifrēšanas taustiņš:',
    'DEVELOPER_MODE' => 'Izstrādātāja režīms',

    'SHOW_DOWNLOADS_TAB' => 'Rādīt lejupielāžu cilni',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'SOAP autentificēšanai, kad izmanto LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt paplašinājums jāaktivē php.ini failā.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Visus',
    'LBL_MARK_POINT' => 'Atzīmes punkts',
    'LBL_NEXT_' => 'Nākamais>>',
    'LBL_REFRESH_FROM_MARK' => 'Atjaunot no atzīmes',
    'LBL_SEARCH' => 'Meklēšana:',
    'LBL_REG_EXP' => 'Reģ. term.:',
    'LBL_IGNORE_SELF' => 'Automātiska ignorēšana:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Atzīme, no kuras sākt rakstīt žurnālu',
    'LBL_DISPLAYING_LOG' => 'Žurnāla parādīšana',
    'LBL_YOUR_PROCESS_ID' => 'Jūsu procesa ID',
    'LBL_YOUR_IP_ADDRESS' => 'Jūsu IP adrese',
    'LBL_IT_WILL_BE_IGNORED' => 'tā tiks ignorēta',
    'LBL_LOG_NOT_CHANGED' => 'Žurnāls nav mainīts',
    'LBL_ALERT_JPG_IMAGE' => 'Attēla faila formātam jābūt JPEG.  Augšupielādējiet jaunu failu ar .jpg paplašinājumu.',
    'LBL_ALERT_TYPE_IMAGE' => 'Attēla faila formātam jābūt JPEG vai PNG.  Augšupielādējiet jaunu failu ar .jpg vai .png paplašinājumu.',
    'LBL_ALERT_SIZE_RATIO' => 'Attēla novietojuma koeficientam jābūt starp 1:1 un 10:1.  Attēla izmērs tiks izmainīts.',
    'ERR_ALERT_FILE_UPLOAD' => 'Kļūda augšupielādējot attēlu.',
    'LBL_LOGGER' => 'Žurnāla iestatījumi',
    'LBL_LOGGER_FILENAME' => 'Žurnāla faila nosaukums',
    'LBL_LOGGER_FILE_EXTENSION' => 'Paplašinājums',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimālais žurnāla faila izmērs',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Noklusētais datuma formāts',
    'LBL_LOGGER_LOG_LEVEL' => 'Žurnāla līmenis',
    'LBL_LEAD_CONV_OPTION' => 'Interesenta konvertēšanas opcijas',
    'LEAD_CONV_OPT_HELP' => "<b>Kopēt</b> - Izveidos ierakstus un nokopēs visas darbības no interesenta kartiņas uz jaunajiem ierakstiem. Kopijas tiks izveidotas katram jaunajam konvertēšanas procesā izveidotajam ierakstam.<br><br><b>Pārvietot</b> - Pārvietots visas interesenta kartiņas darbības uz jauno ierakstu ko lietotājs norādīs konvertējot.<br><br><b>Neko nedarīt</b> - Neko nedarīt ar interesenta kartiņas darbībām. Darbības paliks tikai pie interesenta kartiņas.",
    'LBL_CONFIG_AJAX' => 'Konfigurēt AJAX izmantošanu saskarnē',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivizēt vai deaktivizēt AJAX izmantošanu saskarnē noteiktos moduļos',
    'LBL_LOGGER_MAX_LOGS' => 'Maksimālais žurnāla failu skaits (pirms pārrakstīšanas)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Pievienot pēc faila nosaukuma',
    'LBL_VCAL_PERIOD' => 'vCal atjaunināšanas laika intervāls:',
    'LBL_IMPORT_MAX_RECORDS' => 'Maksimālais rindu skaits importam:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Norāda maksimālo importējamo rindu skaitu importa failā.<br>Lietotājs tiks brīdināts, ja rindu skaits failā būs lielāks.<br>Ja maksimālais rindu skaits nav norādīts, tas nozīmē ka atļauts neierobežots rindu skaits.',
    'vCAL_HELP' => 'Izmantojiet šo parametru lai noteiktu cik mēnešus uz priekš no šodienas, tiks parādīta kalendāra brīvā/aizņemtā laika informācija.<BR>Lai to atslēgtu ievadiet "0".  Parametrā var norādīt no 1 līdz 12 mēnešiem.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Administrēšanas vednis',
    'LBL_WIZARD_WELCOME_TAB' => 'Sveiks',
    'LBL_WIZARD_WELCOME_TITLE' => 'Laipni lūgts SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Spied <b>Tālāk</b> lai personificētu, lokalizētu un konfigurētu SuiteCRM tagad. Ja vēlaties to darīt vēlāk, spiediet <b>Izlaist</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Tālāk >',
    'LBL_WIZARD_BACK_BUTTON' => '< Atpakaļ',
    'LBL_WIZARD_SKIP_BUTTON' => 'Izlaist',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Turpināt',
    'LBL_WIZARD_FINISH_TITLE' => 'Sistēmas pamata konfigurācija ir pabeigta',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Personificēšana',
    'LBL_WIZARD_SYSTEM_DESC' => 'Norādiet organizācijas nosaukumu un logotipu lai personificētu SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Norādiet kā atkarībā no ģeogrāfiskās atrašanās vietas būtu jāattēlo datu SuiteCRM sistēmā.Norādītie uzstādījumu būs noklusējuma uzstādījumi. Lietotāji vārēs norādīt savus uzstādījumus.',
    'LBL_WIZARD_SMTP_DESC' => 'Norādiet e-pasta kontu no kura tiks sūtīti e-pasti par ieraksta piešķiršanu lietotājam un jaunas paroles piešķiršanu. Lietotāji no SuiteCRM saņems e-pastus, kas sūtīti no norādītā e-pasta konta.',
    'LBL_LOADING' => 'Notiek ielāde ...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Dzēsts' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Sveiks' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotips' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Rādīt saistīto kontaktpersonu e-pastus darbību vēstures panelī moduļos',
);
