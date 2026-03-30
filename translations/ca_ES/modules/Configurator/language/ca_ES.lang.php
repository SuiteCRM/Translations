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
    'DEFAULT_CURRENCY_ISO4217' => 'Codi de moneda ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nom de moneda',
    'DEFAULT_CURRENCY_SYMBOL' => 'Símbol de moneda',
    'DEFAULT_DATE_FORMAT' => 'Format de data predeterminat',
    'DEFAULT_DECIMAL_SEP' => 'Símbol decimal',
    'DEFAULT_LANGUAGE' => 'Llenguatge predeterminat',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Format d\'hora predeterminat',

    'DISPLAY_RESPONSE_TIME' => 'Mostrar els temps de resposta del servidor',

    'IMAGES' => 'Logotips',
    'LBL_ALLOW_USER_TABS' => 'Permetre que els usuaris puguin ocultar pestanyes',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Mostra registre',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Interval mínim de l\'actualització automàtica del Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Aquest és el valor mínim que un pot triar per a l\'actualització automàtica dels dashlets. Ajustar a \'Mai\' desactiva que s\'actualitzin automàticament els dashlets.',
    'LBL_MODULE_FAVICON' => 'Mostrar la icona del mòdul com a favicon ',
    'LBL_MODULE_FAVICON_HELP' => 'Si està a un mòdul amb icona, utilitza la icona del mòdul com a favicon, en comptes del favicon del tema, a la pestanya del navegador.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configura la direcció del servidor proxy i la configuració de l\'autentificació',
    'LBL_PROXY_ON' => 'Utilitzar servidor proxy?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Mostrar nom complet (no id usuari)',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostra el nom complert d\'un usuario enlloc del seu identificador',
    'LBL_DISALBE_CONVERT_LEAD' => 'Deshabilitar l\'acció de convertir clients potencials per a clients potencials convertits',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un client potencial ja ha estat convertit, activant aquesta opció no es permetrà tornar-lo a convertir en client potencial.',
    'LBL_ENABLE_ACTION_MENU' => 'Mostrar accions a dins dels menús',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleccioni per a mostrar la vista detallada i el quadre d\'accions a dins d\'un menú desplegable. Si no es selecciona, les accions es mostraran com a botons separats.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Habilitar l\'editor de línia en aquesta vista',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Seleccionar per habilitar l\'edició en línia dels camps de la vista de detalls. Si no està seleccionada l\'edició en línia, aquesta serà deshabilitada en la llista de la vista.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Habilitar l\'edició de línia en la vista',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Sel·leccionar per habilitar l\'edició en línia dels camps de detalls de la vista. Si no està sel·leccionada l\'edició en línia, aquesta serà deshabilitada.',
    'LBL_HIDE_SUBPANELS' => 'Subpanells col·lapsats',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Elements per pàgina per llistes',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Elements per pàgina per subpanells',
    'LOG_MEMORY_USAGE' => 'Registrar utilització de memòria',
    'LOG_SLOW_QUERIES' => 'Registrar consultes lentas',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Temps umbral per consultes lentes (ms)',
    'STACK_TRACE_ERRORS' => 'Mostrar traça de la pila d\'errors',
    'UPLOAD_MAX_SIZE' => 'Tamany màxim per pujada d\'arxius',
    'VERIFY_CLIENT_IP' => 'Validar direcció IP de l\'usuari',
    'LOCK_HOMEPAGE' => 'No permetre el disseny personalitzat de la Pàgina d\'Inici',
    'LOCK_SUBPANELS' => 'No permetre el disseny personalitzat dels subpanells',
    'MAX_DASHLETS' => 'Nombre màxim de Dashlets de SuiteCRM a la pàgina d\'inici',
    'SYSTEM_NAME' => 'Nom del Sistema',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Suport d\'Autentificació LDAP',
    'LBL_LDAP_ENABLE' => 'Habilitar LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Qualsevol filtre addicional de paràmetres per aplicar quan autentica els usuaris, per exemple <em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemples per enllaçar amb l\'usuari LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemples per cercar l\'usuari de LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemple <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemple: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Manera Desenvolupador',

    'SHOW_DOWNLOADS_TAB' => 'Mostrar la pestanya de descarregues',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Quan es selecciona, la pestanya de Baixada apareixerà en la configuració d\'usuari i proporcionarà als usuaris amb accés per SuiteCRM plug-ins i uns altres arxius disponibles',
    'LBL_LDAP_ENC_KEY_DESC' => 'Per l\'autentificació SOAP al usar LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'L\'extensió php_mcrypt ha d\'estar habilitada en el seu arxiu php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'L\'extensió openssl es pot habilitar al vostre fitxer php.ini.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Marcar Punt',
    'LBL_NEXT_' => 'Següent>>',
    'LBL_REFRESH_FROM_MARK' => 'Actualitzar Desde Marca',
    'LBL_SEARCH' => 'Cercar:',
    'LBL_REG_EXP' => 'Exp. Reg.:',
    'LBL_IGNORE_SELF' => 'Ignorar dades Pròpies:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcant des d\'on iniciar el registre',
    'LBL_DISPLAYING_LOG' => 'Mostrant registre',
    'LBL_YOUR_PROCESS_ID' => 'El seu ID de procés',
    'LBL_YOUR_IP_ADDRESS' => 'La seva Direcció IP es',
    'LBL_IT_WILL_BE_IGNORED' => ' Serà ignorat ',
    'LBL_LOG_NOT_CHANGED' => 'El registre no ha canviat',
    'LBL_ALERT_JPG_IMAGE' => 'El format d\'arxiu de la imatge ha de ser JPEG.	Pugi un nou arxiu l\'extensió del qual sigui .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'El format d\'arxiu de la imatge ha de ser JPEG o PNG.	Pugi un nou arxiu l\'extensió del qual sigui .jpg o .png.',
    'LBL_ALERT_SIZE_RATIO' => 'La relació d\'aspecte de la imatge hauria de ser entre 1:1 i 10:1. La imatge serà redimensionada.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error en pujar la imatge.',
    'LBL_LOGGER' => 'Configuració de registre',
    'LBL_LOGGER_FILENAME' => 'Nom del fitxer de registre',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensió',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Mida màxima del registre',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivell de registre',
    'LBL_LEAD_CONV_OPTION' => 'Opcions de conversa de client potencial',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - crea i fa còpies de totes les activitats de la iniciativa a registres nous que són seleccionats per l'usuari durant la conversió. Les còpies són creades per a cadascun dels registres seleccionats. <br><br><b>Move</b> - totes les activitats de la iniciativa es traslladen a un nou rècord que és seleccionat per l'usuari durant la conversió. <br> <br><b>Do Nothing</b> - no fa res amb activitats de la iniciativa durant la conversió. Les activitats queden relacionades només amb el Potencial.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Activar o desactivar l\'ús de la interfície d\'usuari d\'AJAX per a mòduls específics.',
    'LBL_LOGGER_MAX_LOGS' => 'Número màxim de traçes (abans de rotació)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Afegir després el nom d\'arxiu',
    'LBL_VCAL_PERIOD' => 'Període de Temps per Actualizacions vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar - Màxim nombre de registres:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quants registres es permeten dins dels arxius d\'importació.<br>Si el nombre de registres en un arxiu d\'importació excedeix aquest nombre, l\'usuari serà avisat.<br>Si no s\'entra cap nombre s\'acceptarà un nombre il·limitat de registres.',
    'vCAL_HELP' => 'Faci servir aquesta opció per determinar el número de mesos per endavant sobre la data actual amb la que es pública la informació relativa al estat de Disponible/Ocupat sobre trucades i reunions.</BR>Per desactivar la publicació del estat Disponible/Ocupat, posi "0".  El mínim es 1 mes; el màxim 12.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Els seus escenaris',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No s\'han configurat escenaris',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Triar quins escenaris són apropiats per a la seva instal·lació.  Aquestes opcions es poden canviar post-instal·lació.',

    'LBL_WIZARD_TITLE' => 'Assistent d\'administració',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Benvingut a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Feu clic a <b> Següent </ b> localitzar i configurar SuiteCRM ara. Si voleu configurar SuiteCRM després, feu clic a <b> Saltar </ b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Següent',
    'LBL_WIZARD_BACK_BUTTON' => 'Enrera',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'S\'ha completat la configuració bàsica del sistema',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotip' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mosta els correus electrònics relacionats a l\'historial subpanell per mòduls',
);
