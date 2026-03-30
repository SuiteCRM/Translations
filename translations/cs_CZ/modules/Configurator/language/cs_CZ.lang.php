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
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kód měny',
    'DEFAULT_CURRENCY_NAME' => 'Jméno měny',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbol měny',
    'DEFAULT_DATE_FORMAT' => 'Výchozí formát data',
    'DEFAULT_DECIMAL_SEP' => 'Desetinný oddělovač',
    'DEFAULT_LANGUAGE' => 'Výchozí jazyk',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Výchozí formát času',

    'DISPLAY_RESPONSE_TIME' => 'Zobrazovat časy odpovědi serveru',

    'IMAGES' => 'Loga',
    'LBL_ALLOW_USER_TABS' => 'Povolit uživatelům skrýt karty',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Zobrazit log',
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
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimální Interval automatické aktualizace Dashletu',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'To je minimální hodnota, kterou lze vybrat pro automatický refresh dashletu. Nastavení "Nikdy" zakáže automatické aktualizace dashletu.',
    'LBL_MODULE_FAVICON' => 'Zobrazit ikonu modulu jako oblíbené',
    'LBL_MODULE_FAVICON_HELP' => 'Pokud se nacházíte v modulu s ikonou, použijte ikonu modulu jako oblíbenou namísto ikony motivu v panelu prohlížeče.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfigurátor',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Nastavit adresu proxy serveru a přihlašovací údaje',
    'LBL_PROXY_ON' => 'používat proxy server?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Zobrazovat celé jméno (ne přihlašovací)',
    'LBL_USE_REAL_NAMES_DESC' => 'Zobrazovat celé jména uživatelů na místo přihlašovacích jmen v polích přiřazení.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Zakázat převod Iniciativy pro již převedené Iniciativy',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Jestliže již byla Iniciativa převedena, povolením této možnosti odeberete akci Převést iniciativu.',
    'LBL_ENABLE_ACTION_MENU' => 'Zobrazit akce v rámci menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Vyberte pro zobrazení DetailView a subpanelu akcí v rozbalovací nabídce. Pokud není vybrán, zobrazí se akce jako jednotlivé tlačítka.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Povolit vložené úpravy v zobrazení seznamu',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Zvolte k povolení vložené úpravy polí v zobrazení seznamu. Při nezvolení nebudou možné vložené úpravy v zobrazení seznamu.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Povolit vložené úpravy v detailním zobrazení',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Zvolte k povolení vložené úpravy polí v detailním zobrazení. Při nezvolení nebudou možné vložené úpravy v detailním zobrazení.',
    'LBL_HIDE_SUBPANELS' => 'Sbalené podpanely',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Položky na stránku v Pohledu seznam',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanelových položek na stránku',
    'LOG_MEMORY_USAGE' => 'Zaznamenávat využití paměti',
    'LOG_SLOW_QUERIES' => 'Zaznamenávat pomalé dotazy',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Časový limit pro pomalý dotaz (msec)',
    'STACK_TRACE_ERRORS' => 'Zobrazit trasování zásobníků pro chyby',
    'UPLOAD_MAX_SIZE' => 'Maximální velikost uploadu',
    'VERIFY_CLIENT_IP' => 'Ověřovat uživatelovu IP adresu',
    'LOCK_HOMEPAGE' => 'Zabránit uživateli vlastní rozvržení úvodní stránky',
    'LOCK_SUBPANELS' => 'Zabránit uživateli vlastní rozvržení subpanelů',
    'MAX_DASHLETS' => 'Maximální počet widgetů SuiteCRM na domovské stránce',
    'SYSTEM_NAME' => 'Systémový název',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Podpora LDAP autentifikace',
    'LBL_LDAP_ENABLE' => 'Povolit LDAP',
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
    'LBL_LDAP_USER_FILTER_DESC' => 'Jakékoli další parametry filtru pro použít při ověřování uživatelů například<em>is_suitecrm_user=1 nebo (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Pro vazbu uživatele LDAP Příklady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Pro vyhledávání uživatele LDAP Příklady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Příklad: <em>389 nebo 636 pro SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Příklad <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Příklad: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Vývojářský mód',

    'SHOW_DOWNLOADS_TAB' => 'Zobrazit kartu stahování',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Je-li vybráno, karta Stahování se zobrazí v nastavení uživatele a poskytne uživatelům k pluginům SuiteCRM a jiným dostupným souborům',
    'LBL_LDAP_ENC_KEY_DESC' => 'PRO SOAP autentifikaci při použití LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Rozšíření php_encrypt musí být povoleno v souboru php.ini',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'V souboru php.ini musí být povoleno rozšíření openssl.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Bod značky',
    'LBL_NEXT_' => 'Pokračovat>>',
    'LBL_REFRESH_FROM_MARK' => 'Aktualizovat od značky',
    'LBL_SEARCH' => 'Hledat:',
    'LBL_REG_EXP' => 'Registrace vyprší:',
    'LBL_IGNORE_SELF' => 'Ignorovat vlastní:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Označení odkud začít protokolování ',
    'LBL_DISPLAYING_LOG' => 'Zobrazení protokolu',
    'LBL_YOUR_PROCESS_ID' => 'ID procesu',
    'LBL_YOUR_IP_ADDRESS' => 'Vaše IP adresa je',
    'LBL_IT_WILL_BE_IGNORED' => 'Bude ignorováno',
    'LBL_LOG_NOT_CHANGED' => 'Protokol se nezměnil',
    'LBL_ALERT_JPG_IMAGE' => 'Formát obrázku musí být JPEG.  Nahrajte nový soubor s příponou jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formát obrázku musí být JPEG nebo PNG.  Uložite nový soubor s příponou .jpg nebo .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Poměr stran obrazu by měla být v rozmezí od 1:1 do 10:1.  Obrázek bude upraven.',
    'ERR_ALERT_FILE_UPLOAD' => 'Při ukládání obrázku došlo k chybě.',
    'LBL_LOGGER' => 'Nastavení protokolování',
    'LBL_LOGGER_FILENAME' => 'Název souboru protokolu',
    'LBL_LOGGER_FILE_EXTENSION' => 'Rozšíření',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximální velikost souboru protokolu',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Úroveň protokolu',
    'LBL_LEAD_CONV_OPTION' => 'Možnosti převodu Iniciativy',
    'LEAD_CONV_OPT_HELP' => "<b>Kopírovat</b> - vytvoří a propojí kopie všech aktivit Iniciativy do nových záznamů, které jsou vybrány uživatelem v průběhu převodu. Kopie je vytvořena pro každý z vybraných záznamů.<br><br>, <b>Přesun</b> - přesune všechny aktivity Iniciativy do nových záznamů, které jsou vybrány uživatelem v průběhu převodu.<br><br>, <b>Nedělat nic</b> - nedělá nic s aktivitami Iniciativy během převodu. Aktivity zůstávají propojené pouze s Iniciativou.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Povolit nebo zakázat použití rozhraní AJAX pro konkrétní moduly.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximální počet protokolů',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Připojit po názvu souboru',
    'LBL_VCAL_PERIOD' => 'vCal aktualizace časového období:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - maximální počet řádků:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Určete, kolik řádků je povoleno v rámci importu souborů.<br>Je-li toto číslo překročeno, bude uživatel upozorněn.<br>Pokud není zadáno žádné číslo, je povolen neomezený počet řádků.',
    'vCAL_HELP' => 'Toto nastavení určí počet měsíců před aktuálním datumem, kdy jsou zveřejněny informace o dostupnosti pro hovory a schůzky. <BR>Pokud chcete zveřejnění vypnou, zadejte "0". Minimum je 1 měsíc; maximum je 12 měsíců.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vaše scénáře',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nebyly nastaveny žádné scénáře',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Zvolte, které scénáře jsou vhodné pro vaši instalaci. Tyto možnosti lze změnit po instalaci.',

    'LBL_WIZARD_TITLE' => 'Administrátorský průvodce',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Vítejte v SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klikněte <b>Další</b> pro značku, lokalizaci a nastavení SuiteCRM. Pokud chcete nastavit SuiteCRM později, klepněte na tlačítko <b>Přeskočit</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Další',
    'LBL_WIZARD_BACK_BUTTON' => 'Zpět',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Pokračovat',
    'LBL_WIZARD_FINISH_TITLE' => 'Základní systémová konfigurace je dokončena',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Zobrazit emaily kontaktů v subpanelu historie pro moduly.',
);
