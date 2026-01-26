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
    'ADVANCED' => 'Avancuar',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kodi i monedhës',
    'DEFAULT_CURRENCY_NAME' => 'Emri i monedhës',
    'DEFAULT_CURRENCY_SYMBOL' => 'Simboli i monedhës',
    'DEFAULT_DATE_FORMAT' => 'formatim i gabuar i datës',
    'DEFAULT_DECIMAL_SEP' => 'simboli decimal',
    'DEFAULT_LANGUAGE' => 'gjuhë e gabuar',
    'DEFAULT_SYSTEM_SETTINGS' => 'Ndërfaqja e përdoruesit',
    'DEFAULT_THEME' => 'Album i çaktivizuar',
    'DEFAULT_TIME_FORMAT' => 'Format kohe i çaktivizuar',

    'DISPLAY_RESPONSE_TIME' => 'Tregon kohët e reagimit të serverit',

    'IMAGES' => 'Logot',
    'LBL_ALLOW_USER_TABS' => 'Lejon përdoruesit të fshehin lidhëset',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Parametrat e sistemit',
    'LBL_LOGVIEW' => 'Shih logon',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Përdor SMTP Autentikim?',
    'LBL_MAIL_SMTPPASS' => 'Fjalëkalimi i SMTP',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'Severi i SMTP',
    'LBL_MAIL_SMTPUSER' => 'Emri i përdorimit SMTP',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifikimi i SMTP Serverit',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Zgjidh furnizuesin e emailit tënd',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Fjalëkalimi i Yahoo! Mailit',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID e Yahoo! Mailit',
    'LBL_GMAIL_SMTPPASS' => 'Fjalëkalimi i Gmailit',
    'LBL_GMAIL_SMTPUSER' => 'Email adresa në Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Ndrysho fjalëkalimin',
    'LBL_EXCHANGE_SMTPUSER' => 'Ndrysho emrin e përdorimit',
    'LBL_EXCHANGE_SMTPPORT' => 'Ndrysho  portin e Serverit',
    'LBL_EXCHANGE_SMTPSERVER' => 'Ndrysho Serverin',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Lejo përdoruesit të përdorin këtë llogari për emailet dalëse',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kur zgjidhet ky opcion, të gjithë përdoruesit do të munden të dërgojnë emaile duke përdorur mail llogaritë e drejtuar për jashta për të dërguar lajmërime dhe alarme të sistemit. Nëse nuk selektohet opcioni, përdoruesit do të mund të përdorin ende serverin e maileve të dërguar për jashta pas sigurimit të informacionit të llogarisë së tyre.',
    'LBL_MAILMERGE' => 'Bashkim i  maileve',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum i rifreskimit automatik të intervalit Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Kjo është vlera minimale dikush mund të zgjedhë të ketë rifreskimin automatik dashlets. Vendosja në $#39;Asnjëherë$#39; disaktivizon krejtësisht freskimin automatik të dashlets.',
    'LBL_MODULE_FAVICON' => 'Trego ikonën e modulit si ikonë favorite',
    'LBL_MODULE_FAVICON_HELP' => 'Nëse jeni në modulë me ikonë, shfrytëzo ikonën e modulës si ikonë favorite në vend të albumit favorit në  lidhjen e shfletimit.',
    'LBL_MODULE_NAME' => 'Parametrat e sistemit',
    'LBL_MODULE_ID' => 'Konfigurues',
    'LBL_MODULE_TITLE' => 'Ndërfaqja e përdoruesit',
    'LBL_NOTIFY_FROMADDRESS' => 'Nga adresa',
    'LBL_NOTIFY_SUBJECT' => 'Subjekti i emailit',

    'LBL_PROXY_AUTH' => 'Autentikim?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfiguro adresat e proksi severit dhe parametrat e autentikimit',
    'LBL_PROXY_ON' => 'Përdor proxy server?',
    'LBL_PROXY_PASSWORD' => 'Fjalëkalimi',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy parametrat',
    'LBL_PROXY_USERNAME' => 'Emri i përdoruesit',
    'LBL_RESTORE_BUTTON_LABEL' => 'Rikrijo',
    'LBL_SYSTEM_SETTINGS' => 'Parametrat e sistemit',
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
    'CURRENT_LOGO' => 'Logoja aktuale',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Selekto logon:',
    'NEW_LOGO_HELP' => 'Dosja e formatit të imazhit mund të jetë .png ose. .jpg. Lartësia maksimale është 170px, dhe gjerësia maksimale është 450px. Çdo imazh i ngarkuar që është më i madhë në çdo drejtim do të jetë i shkallëzuar me këto dimensione maksimale.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Dosja e formatit të imazhit mund të jetë .png ose. .jpg. Lartësia maksimale është 170px, dhe gjerësia maksimale është 450px. Çdo imazh i ngarkuar që është më i madhë në çdo drejtim do të jetë i shkallëzuar me këto dimensione maksimale.',
    'SLOW_QUERY_TIME_MSEC' => 'Koha e ngadaltë e pyetjes së pragut (msec)',
    'STACK_TRACE_ERRORS' => 'Shfaqni gjurmë të grumbulluar të gabimeve',
    'UPLOAD_MAX_SIZE' => 'Madhësia maksimale e ngarkimit',
    'VERIFY_CLIENT_IP' => 'Vërteto IP adresën e përdoruesit',
    'LOCK_HOMEPAGE' => 'Parandalimi i përdoruesit të përshtatshëm për paraqitjen e Faqës Hyrëse',
    'LOCK_SUBPANELS' => 'Parandalimi i përdoruesit të përshtatshëm në formatit e nënpanelit',
    'MAX_DASHLETS' => 'Numri maksimal i Dashlets SuiteCRM në Faqën hyrëse',
    'SYSTEM_NAME' => 'Emri i sistemit:',
    'SYSTEM_NAME_WIZARD' => 'Emri',
    'SYSTEM_NAME_HELP' => 'Ky është emri që shfaqet në shtyllën e titullit të shfletuesit tuaj.',
    'LBL_LDAP_TITLE' => 'LDAP autentikim për mbështetje',
    'LBL_LDAP_ENABLE' => 'Mundëso LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Serveri:',
    'LBL_LDAP_SERVER_PORT' => 'Numri i port:',
    'LBL_LDAP_ADMIN_USER' => 'Emri i përdoruesit:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Fjalëkalimi:',
    'LBL_LDAP_AUTHENTICATION' => 'LDAP autentikimi',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Krijimi automatik i përdoruesve:',
    'LBL_LDAP_USER_DN' => 'DN e përdoruesit',
    'LBL_LDAP_GROUP_DN' => 'DN e grupit',
    'LBL_LDAP_GROUP_DN_DESC' => 'Shembull: ou=grupet, dc=shembull, dc=com',
    'LBL_LDAP_USER_FILTER' => 'Filtri i përdoruesit',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Antarsimi i grupit:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Përdoruesit duhet të jenë anëtarë të një grupi specifik',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Vetitë e përdoruesit',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Identifikuesi unik i personit që do të përdoren për të kontrolluar nëse ata janë anëtar të grupit në Shembullin: uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atributi i grupit që do të përdoret për të filtruar kundër atributit të përdoruesit në shembullin: memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'Atributet e grupit:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Çdo shtesë të parametrave filtër për të aplikuar kur përdoruesit vërtetohen p.sh. \ nis_sugar_user = 1 ose (is_sugar_user = 1) (is_sales = 1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Vetitë e hyrjes',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Vetitë e lidhjes',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Shembull: 389 ose 636 për SSL',
    'LBL_LDAP_GROUP_NAME' => 'Emri grupit:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Shembull cn=suitecrm',
    'LBL_LDAP_USER_DN_DESC' => 'Shembull: ou= njerëz.dc=shembull.dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Nëse një përdorues i legalizuar nuk ekziston një do të krijohet në SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Çelësi i enkriptimit',
    'DEVELOPER_MODE' => 'Mënyra e zhvilluesit',

    'SHOW_DOWNLOADS_TAB' => 'Shfaq butonin e shkarkimit',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Për SOAP autentikim gjatë përdorimit të LDAP-së.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Zgjerimi php_mcrypt duhet të jetë i aktivizuar në dosjen php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Të gjitha',
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
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'formatim i gabuar i datës',
    'LBL_LOGGER_LOG_LEVEL' => 'Identifikimi i nivelit',
    'LBL_LEAD_CONV_OPTION' => 'Drejtues i opsionëve të konvertimit',
    'LEAD_CONV_OPT_HELP' => "Kopjo - Krijoni dhe bëni kopjet e të gjitha aktiviteteve në drejtuesit për regjistrimet e reja që janë selektuar nga përdoruesit gjatë konvertimit. Kopjet janë krijuar për secilin nga regjistrimet e selektuara.<br /><br />Lëviz - lëvizni të gjitha aktivitetet drejtues për një regjistrim të ri që është selektuar nga përdoruesi gjatë konvertimit.<br /><br />Mos Bëni asgjë - Mos bërja asgjë me aktivitetet drejtues gjatë konvertimit. Aktivitetet mbesin të lidhur me drejtues të vetëm.",
    'LBL_CONFIG_AJAX' => 'Konfiguroni përdoruesin AJAX të ndërfaqes',
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
    'LBL_WIZARD_WELCOME_TAB' => 'Mirësevini',
    'LBL_WIZARD_WELCOME_TITLE' => 'Mirësevini në SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klikoni Vazhdo për brendim, lokalizoni dhe konfiguroni SuiteCRMin tani. Nëse dëshironi të konfiguroni SuiteCRMin më vonë, klikoni Kalo.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Vijim',
    'LBL_WIZARD_BACK_BUTTON' => 'Kthe',
    'LBL_WIZARD_SKIP_BUTTON' => 'Anashkalo',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Vazhdoni',
    'LBL_WIZARD_FINISH_TITLE' => 'Konfigurimi i sistemit bazik ka përfunduar',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Brendim',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ofroni emrin e organizatës dhe logon tuaj në mënyrë që të brendoni SuiteCRMin tuaj.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specifikoni se si dëshironi të shfaqen të dhënat në SuiteCRM, bazuar në vendndodhjen tuaj gjeografike. Parametrat tuaja që ju ofroni këtu do të jenë parametrat e parazgjedhura. Përdoruesit do të jenë në gjendje për të vendosur preferencat e tyre.',
    'LBL_WIZARD_SMTP_DESC' => 'Ofroni llogarinë e emailit që ju do të përdorni për të dërguar emailat, të tilla si njoftimet e detyrës dhe fjalëkalimet e përdoruesve të rinjë. Përdoruesit do të marrin emaila nga SuiteCRMi, të dërguar nga llogaria e emailit të caktuar.',
    'LBL_LOADING' => 'Ngarkimi...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Fshi' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Mirësevini' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'logoja' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
