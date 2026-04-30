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
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kodi i monedhës',
    'DEFAULT_CURRENCY_NAME' => 'Emri i monedhës',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simboli i monedhës',
    'DEFAULT_DATE_FORMAT' => 'formatim i gabuar i datës',
    'DEFAULT_DECIMAL_SEP' => 'simboli decimal',
    'DEFAULT_LANGUAGE' => 'gjuhë e gabuar',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Format kohe i çaktivizuar',

    'DISPLAY_RESPONSE_TIME' => 'Tregon kohët e reagimit të serverit',

    'IMAGES' => 'Logot',
    'LBL_ALLOW_USER_TABS' => 'Lejon përdoruesit të fshehin lidhëset',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Shih logon',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum i rifreskimit automatik të intervalit Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Kjo është vlera minimale dikush mund të zgjedhë të ketë rifreskimin automatik dashlets. Vendosja në $#39;Asnjëherë$#39; disaktivizon krejtësisht freskimin automatik të dashlets.',
    'LBL_MODULE_FAVICON' => 'Trego ikonën e modulit si ikonë favorite',
    'LBL_MODULE_FAVICON_HELP' => 'Nëse jeni në modulë me ikonë, shfrytëzo ikonën e modulës si ikonë favorite në vend të albumit favorit në  lidhjen e shfletimit.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfigurues',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfiguro adresat e proksi severit dhe parametrat e autentikimit',
    'LBL_PROXY_ON' => 'Përdor proxy server?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Trego emrat e plotë',
    'LBL_USE_REAL_NAMES_DESC' => 'Shfaqni emrat e plota të përdoruesve në vend të emrave të tyrë të përdoruesve në fushat e detyrës.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disaktivizo veprimin drejtues të konvertuar për drejtimet e konvertuara.',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Nëse një udhëheqës tashmë është konvertuar, duke mundësuar këtë opsion do të heqë veprimin drejtues të konvertuar.',
    'LBL_ENABLE_ACTION_MENU' => 'Shfaqni veprimet brenda menysë',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selektoni për të shfaqur Detajet e Pamjes dhe veprimet e nënpanelit brenda menysë dropdown.Nëse jo-selektohen, veprimet do të shfaqen si butona të veçanta.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Pamja në fomrë listë të artikujve për faqe',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Artikujtë nënpanel për faqe',
    'LOG_MEMORY_USAGE' => 'Përdorimi i memorisë hyrëse',
    'LOG_SLOW_QUERIES' => 'Identifikohuni në pyetjet të ngadalshme',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Koha e ngadaltë e pyetjes së pragut (msec)',
    'STACK_TRACE_ERRORS' => 'Shfaqni gjurmë të grumbulluar të gabimeve',
    'UPLOAD_MAX_SIZE' => 'Madhësia maksimale e ngarkimit',
    'VERIFY_CLIENT_IP' => 'Vërteto IP adresën e përdoruesit',
    'LOCK_HOMEPAGE' => 'Parandalimi i përdoruesit të përshtatshëm për paraqitjen e Faqës Hyrëse',
    'LOCK_SUBPANELS' => 'Parandalimi i përdoruesit të përshtatshëm në formatit e nënpanelit',
    'MAX_DASHLETS' => 'Numri maksimal i Dashlets SuiteCRM në Faqën hyrëse',
    'SYSTEM_NAME' => 'Emri i sistemit:',
    'SYSTEM_NAME_WIZARD' => 'Emri:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP autentikim për mbështetje',
    'LBL_LDAP_ENABLE' => 'Mundëso LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Çdo shtesë të parametrave filtër për të aplikuar kur përdoruesit vërtetohen p.sh. \ nis_sugar_user = 1 ose (is_sugar_user = 1) (is_sales = 1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Shembull: 389 ose 636 për SSL',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Shembull cn=suitecrm',
    'LBL_LDAP_USER_DN_DESC' => 'Shembull: ou= njerëz.dc=shembull.dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Mënyra e zhvilluesit',

    'SHOW_DOWNLOADS_TAB' => 'Shfaq butonin e shkarkimit',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Për SOAP autentikim gjatë përdorimit të LDAP-së.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Zgjerimi php_mcrypt duhet të jetë i aktivizuar në dosjen php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Pika e shënimit',
    'LBL_NEXT_' => 'Vijim>>',
    'LBL_REFRESH_FROM_MARK' => 'Rifresko nga shënimi',
    'LBL_SEARCH' => 'Kërkim',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Injoro veten:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markimi ku të filloje identifikimi nga',
    'LBL_DISPLAYING_LOG' => 'Logoja e shfaqur',
    'LBL_YOUR_PROCESS_ID' => 'ID e procesit tënd',
    'LBL_YOUR_IP_ADDRESS' => 'IP e adresës tënde është',
    'LBL_IT_WILL_BE_IGNORED' => 'Do të injorohet',
    'LBL_LOG_NOT_CHANGED' => 'Logoja nuk  ka ndryshuar',
    'LBL_ALERT_JPG_IMAGE' => 'Format i dosjes së imazhit duhet të jetë JPEG. Ngarkoni një dosje të re me dosjen e vazhdimit .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formati i dosjes së figurës duhet të jetë JPEG ose PNG. Ngarkoni një dosje të re me dosjen e vazhdimit .jpg ose png.',
    'LBL_ALERT_SIZE_RATIO' => 'Raporti i aspektit të imazhit duhet të jetë ndërmjet 1:1 dhe 10:1.Imazhi do të ridimensohet.',
    'ERR_ALERT_FILE_UPLOAD' => 'Gabim gjatë ngarkimit të imazhit.',
    'LBL_LOGGER' => 'Paramterat e memorjes',
    'LBL_LOGGER_FILENAME' => 'Identifikimi i emrit të dosjes',
    'LBL_LOGGER_FILE_EXTENSION' => 'Zgjatje',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Madhësia maksimale e identifikimit',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Identifikimi i nivelit',
    'LBL_LEAD_CONV_OPTION' => 'Drejtues i opsionëve të konvertimit',
    'LEAD_CONV_OPT_HELP' => "Kopjo - Krijoni dhe bëni kopjet e të gjitha aktiviteteve në drejtuesit për regjistrimet e reja që janë selektuar nga përdoruesit gjatë konvertimit. Kopjet janë krijuar për secilin nga regjistrimet e selektuara.<br /><br />Lëviz - lëvizni të gjitha aktivitetet drejtues për një regjistrim të ri që është selektuar nga përdoruesi gjatë konvertimit.<br /><br />Mos Bëni asgjë - Mos bërja asgjë me aktivitetet drejtues gjatë konvertimit. Aktivitetet mbesin të lidhur me drejtues të vetëm.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivizoni ose çaktivizoni përdorimin e AJAX UI për module të veçanta.',
    'LBL_LOGGER_MAX_LOGS' => 'Numri maksimal i shkrimeve (para përsëritjes)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Shtojë mbas emrit të dosjes',
    'LBL_VCAL_PERIOD' => 'vCal azhurnoni Periudhën Kohore:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importo-Numri maksimal i rreshatve',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specifikoni sa rreshta janë të lejuara brenda dosjeve të importit. Nëse numri i rreshtave<br />në një dosje të importit e tejkalon këtë numër, përdoruesi do të njoftohet. Nëse asnjë numër<br />nuk është i regjistruar, një numër i palimituar i rreshtave janë të lejuara.',
    'vCAL_HELP' => 'Përdoreni këtë vendosje për të përcaktuar numrin e muajve përpara datës aktuale të informacionit të Lirë/Zënët për telefonatat dhe takimet që janë publikuar.<br />Për ta kthyer publikimin e lirë/zënët në off, shkruani "0".Minimumi është 1 muaj; maksimumi është 12 muaj.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admin Wizard',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Mirësevini në SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klikoni Vazhdo për brendim, lokalizoni dhe konfiguroni SuiteCRMin tani. Nëse dëshironi të konfiguroni SuiteCRMin më vonë, klikoni Kalo.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Vijim',
    'LBL_WIZARD_BACK_BUTTON' => 'Kthe',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Vazhdoni',
    'LBL_WIZARD_FINISH_TITLE' => 'Konfigurimi i sistemit bazik ka përfunduar',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'logoja' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
