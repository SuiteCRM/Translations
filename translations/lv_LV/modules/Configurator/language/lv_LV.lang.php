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
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Noklusējuma laika formāts',

    'DISPLAY_RESPONSE_TIME' => 'Rādīt servera atbildes laikus',

    'IMAGES' => 'Logotipi',
    'LBL_ALLOW_USER_TABS' => 'Ļaut lietotājiem slēpt cilnes',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Skatīt žurnālu',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Pasta parole:',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimālais dašletu pašatjaunošanās intervāls',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Minimālais intervāls dašletu informācijas automātiskai atjaunināšanai. Norādot $#39;Nekad$#39; automātiskā atjaunināšana tiks izslēgta viesiem dašletiem.',
    'LBL_MODULE_FAVICON' => 'Rādīt moduļa ikonu favorītu joslā',
    'LBL_MODULE_FAVICON_HELP' => 'Ja esiet modulī ar savu ikonu tad lietojiet moduļa ikonu kā favicon nevis tēmas favicon  pārlūka cilnē.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Kofigurētājs',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfigurējiet starpniekservera adresi un autentifikācijas iestatījumus',
    'LBL_PROXY_ON' => 'Lietot starpniekserveri?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
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
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Lēna vaicājuma laika slieksnis (msek.)',
    'STACK_TRACE_ERRORS' => 'Attēlot pilnu kļūdu steka informāciju',
    'UPLOAD_MAX_SIZE' => 'Maksimālais augšupielādes faila izmērs',
    'VERIFY_CLIENT_IP' => 'Apstiprināt lietotāja IP adresi',
    'LOCK_HOMEPAGE' => 'Neļaut lietotājam pielāgot sākumlapas izkārtojumu',
    'LOCK_SUBPANELS' => 'Neļaut lietotājam pielāgot apakšpaneļa izkārtojumu',
    'MAX_DASHLETS' => 'Maksimālais SuiteCRM dašletu skaits sākumlapā',
    'SYSTEM_NAME' => 'Sistēmas nosaukums:',
    'SYSTEM_NAME_WIZARD' => 'Vārds:',
    'LBL_SNOOZE_TIMER' => 'Set Snooze For Notifications',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP autentifikācijas atbalsts',
    'LBL_LDAP_LEGACY_WARNING' => 'LDAP Warning',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'This LDAP configuration will only be used for v4 API authentication. To configure SuiteCRM login to use LDAP, add the needed configurations to the .env.local file. See LDAP configuration docs for more information.',
    'LBL_LDAP_ENABLE' => 'Atļaut LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Papildus parametri, kuri tiks izmantoti lietotāju autentifikācijā piem.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Piemērs: <em>389 vai 636 priekš SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Piemērs <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Piemērs: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Izstrādātāja režīms',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Subpanel Pagination Type',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Listview Pagination Type',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Pop up Record List',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Pop up Record List Pagination Type',

    'SHOW_DOWNLOADS_TAB' => 'Rādīt lejupielāžu cilni',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'SOAP autentificēšanai, kad izmanto LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt paplašinājums jāaktivē php.ini failā.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
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
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Žurnāla līmenis',
    'LBL_LEAD_CONV_OPTION' => 'Interesenta konvertēšanas opcijas',
    'LEAD_CONV_OPT_HELP' => "<b>Kopēt</b> - Izveidos ierakstus un nokopēs visas darbības no interesenta kartiņas uz jaunajiem ierakstiem. Kopijas tiks izveidotas katram jaunajam konvertēšanas procesā izveidotajam ierakstam.<br><br><b>Pārvietot</b> - Pārvietots visas interesenta kartiņas darbības uz jauno ierakstu ko lietotājs norādīs konvertējot.<br><br><b>Neko nedarīt</b> - Neko nedarīt ar interesenta kartiņas darbībām. Darbības paliks tikai pie interesenta kartiņas.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
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
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Laipni lūgts SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Spied <b>Tālāk</b> lai personificētu, lokalizētu un konfigurētu SuiteCRM tagad. Ja vēlaties to darīt vēlāk, spiediet <b>Izlaist</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Tālāk >',
    'LBL_WIZARD_BACK_BUTTON' => '< Atpakaļ',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Turpināt',
    'LBL_WIZARD_FINISH_TITLE' => 'Sistēmas pamata konfigurācija ir pabeigta',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotips' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Rādīt saistīto kontaktpersonu e-pastus darbību vēstures panelī moduļos',
    'LBL_HISTORY_SUBPANEL' => 'History Subpanel',
);
