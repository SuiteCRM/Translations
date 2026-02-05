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
    'ADVANCED' => 'Pokročilé',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 kód meny',
    'DEFAULT_CURRENCY_NAME' => 'Názov meny',
    'DEFAULT_CURRENCY_SYMBOL' => 'Symbol meny',
    'DEFAULT_DATE_FORMAT' => 'Predvolený formát dátumu',
    'DEFAULT_DECIMAL_SEP' => 'Desatinný symbol',
    'DEFAULT_LANGUAGE' => 'Predvolený jazyk',
    'DEFAULT_SYSTEM_SETTINGS' => 'Užívateľské rozhranie',
    'DEFAULT_THEME' => 'Predvolený motív',
    'DEFAULT_TIME_FORMAT' => 'Predvolený formát času',

    'DISPLAY_RESPONSE_TIME' => 'Zobrazenie času odozvy servera',

    'IMAGES' => 'Logá',
    'LBL_ALLOW_USER_TABS' => 'Umožní používateľom schovať záložky',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Nadstavenia Systému',
    'LBL_LOGVIEW' => 'Zobraziť denník',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použiť overenie SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Heslo SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server',
    'LBL_MAIL_SMTPUSER' => 'SMTP užívateľské meno',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP špecifikácia servera',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si poskytovateľa e-mailu',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! heslo mailu',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Heslo:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-mailová adresa:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zmena hesla',
    'LBL_EXCHANGE_SMTPUSER' => 'Zmena používateľkského mena',
    'LBL_EXCHANGE_SMTPPORT' => 'Zmena portu servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zmena servera',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Povoliť používateľom používať tento účet pre odchádzajúce e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Pokiaľ je vybraná táto možnosť, všetci užívatelia budú môcť posielať správy pomocou jedného účtu odchádzajúcej pošty, používaného pre odosielanie systémových  hlásení a upozornení. Ak možnosť nie je vybraná, užívatelia stále môžu používať server pre odchádzajúcu poštu po poskytnutí ich vlastných informácii o účte.',
    'LBL_MAILMERGE' => 'Zlúčenie emailov',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimálný Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Toto je minimálna hodnota, ktorú môžete vybrať aby ste mali dashlet auto-obnovovanie. Ak to nastavíte na nikdy, úplne deaktivujete auto-obnovovanie.',
    'LBL_MODULE_FAVICON' => 'Zobraz ikonu modulu ako favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Ak ste v moduli s ikonou, použite modulovú ikonu ako favicon, namiesto témovej favicon v karte priehliadača.',
    'LBL_MODULE_NAME' => 'Nadstavenia Systému',
    'LBL_MODULE_ID' => 'Konfigurátor',
    'LBL_MODULE_TITLE' => 'Užívateľské rozhranie',
    'LBL_NOTIFY_FROMADDRESS' => '"Od" adresy:',
    'LBL_NOTIFY_SUBJECT' => 'Subjekt emailu:',

    'LBL_PROXY_AUTH' => 'Antentifikácia?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Konfiguruj proxy server adresu a autentifikačné nastavenia.',
    'LBL_PROXY_ON' => 'Používať proxy server?',
    'LBL_PROXY_PASSWORD' => 'Heslo',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'Užívateľské meno',
    'LBL_RESTORE_BUTTON_LABEL' => 'Obnoviť',
    'LBL_SYSTEM_SETTINGS' => 'Nadstavenia Systému',
    'LBL_USE_REAL_NAMES' => 'Ukáž celé mená',
    'LBL_USE_REAL_NAMES_DESC' => 'Zobraziť celé uživateľské meno namiesto mena užívateľa v priradených poliach.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Zakázať previesť vedúci akcie pre prevedené vedenie',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Ak vedenie už bolo prevedené, bude povolenie tejto možnosti odobratia konvertu na hlavnú akciu.',
    'LBL_ENABLE_ACTION_MENU' => 'Zobraziť akcie v rámci menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Zvoľte pre zobrazenie zobrazenie podrobností a čiastkový panel akcií v rozbaľovacom menu. Ak nezvolené, budú akcie zobrazí ako samostatné tlačidlá.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Povoliť úpravy v riadku pri zobrazení zoznamu',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Týmto výberom povolíte úpravy polí v riadku pre zobrazený zoznam. V opačnom prípade budú úpravy v riadku pre zobrazený zoznam zakázané.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Povolenie úpravy v riadku pri podrobnom zobrazení',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Týmto výberom povolíte úpravy polí v riadku pre podrobné zobrazenie. V opačnom prípade budú úpravy v riadku pre podrobné zobrazenie zakázané.',
    'LBL_HIDE_SUBPANELS' => 'Podpanely zbalené',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Zobrazenie zoznamu položiek na stránku',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Zobrazenie zoznamu položiek na stránku',
    'LOG_MEMORY_USAGE' => 'Prihlásiť využitie pamäte',
    'LOG_SLOW_QUERIES' => 'Prihlásiť pomalé otázky',
    'CURRENT_LOGO' => 'Aktuálne Logo:',
    'CURRENT_LOGO_HELP' => 'Toto logo sa zobrazí v strede prihlasovacej obrazovky SuiteCRM aplikácie.',
    'NEW_LOGO' => 'Vybrať Logo:',
    'NEW_LOGO_HELP' => 'Formát súboru obrázku môže byť buď. Png alebo. Jpg. Maximálna výška je 170px, a maximálna šírka je 450px. Akékoľvek odoslať obrázok, ktorý je väčší v každom smere bude zmenšený na tieto max rozmerov.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Formát súboru obrázku môže byť buď. Png alebo. Jpg. Maximálna výška je 170px, a maximálna šírka je 450px. Akékoľvek odoslať obrázok, ktorý je väčší v každom smere bude zmenšený na tieto max rozmerov.',
    'SLOW_QUERY_TIME_MSEC' => 'Pomalá doba hľadania prah (ms)',
    'STACK_TRACE_ERRORS' => 'Zobraziť trasovanie zásobníka chýb',
    'UPLOAD_MAX_SIZE' => 'Maximálna veľkosť nahrávaných súborov',
    'VERIFY_CLIENT_IP' => 'Overenie užívateľa IP adresu',
    'LOCK_HOMEPAGE' => 'Zabrániť užívateľovi prispôsobiteľné Úvodná stránka rozvrhnutie',
    'LOCK_SUBPANELS' => 'Zabrániť užívateľovi prispôsobiteľné čiastkové panel rozvrhnutie',
    'MAX_DASHLETS' => 'Maximálny počet pomlčiek umožňuje na úvodnú stranu',
    'SYSTEM_NAME' => 'Systémové meno',
    'SYSTEM_NAME_WIZARD' => 'Meno:',
    'SYSTEM_NAME_HELP' => 'To je názov, ktorý sa zobrazí v záhlaví prehliadača.',
    'LBL_LDAP_TITLE' => 'LDAP podpora',
    'LBL_LDAP_ENABLE' => 'Zapnúť LDAP autentifikáciu',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Číslo portu:',
    'LBL_LDAP_ADMIN_USER' => 'Meno užívateľa:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Používa sa k vyhľadaniu užívateľa LDAP. Môže vyžadovať plné oprávnenie.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Heslo:',
    'LBL_LDAP_AUTHENTICATION' => 'Overenie LDAP',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Pripojiť na LDAP server pomocou poverení konkrétnych užívateľov. Ak nie sú k dispozícii, pripojiť anonymne.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automaticky vytvoriť užívateľov:',
    'LBL_LDAP_USER_DN' => 'Užívateľské DN:',
    'LBL_LDAP_GROUP_DN' => 'Skupinové DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Príklad: <em>ou=skupiny,dc=príklad,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Užívateľský filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Členstvo s skupine:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Užívateľ musí byť členom určitej skupiny',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Užívateľský atribút:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Unikátny identifikátor človeka, ktorý bude používatá pre kontrolu či sú členom skupiny. Príklad: <em> uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Atribút skupiny, ktoré budú použité na filtrovanie proti Príklad užívateľa atribútu: memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'skupinové atribúty',
    'LBL_LDAP_USER_FILTER_DESC' => 'Akékoľvek ďalšie filter params použiť pri overovaní užívateľov egis_superuser = 1 alebo (is_superuser = 1) (is_sales = 1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Prihlásiť sa do atribút:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Zviažte atribúty:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Pre pripojenie LDAP užívateľa Príklady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Pre vyhľadanie LDAP užívateľa Príklady:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Príklad: ldap.example.com alebo LDAPS :/ / ldap.example.com pre SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Príklad: 389 alebo 636 pre SSL',
    'LBL_LDAP_GROUP_NAME' => 'Meno skupiny',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Príklad cn = SuiteCRM',
    'LBL_LDAP_USER_DN_DESC' => 'Príklad: ou = people, dc = example, dc = com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ak overený užívateľ neexistuje jeden bude vytvorená v .',
    'LBL_LDAP_ENC_KEY' => 'Šifrovací kľúč',
    'DEVELOPER_MODE' => 'rozvýjateľný mód',

    'SHOW_DOWNLOADS_TAB' => 'Zobraziť Sťahovanie Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Výber zobrazí v Nastavení užívateľa záložku Stiahnuť a umožní používateľom SuiteCRM prístup k pluginom a ďalším dostupným súborom',
    'LBL_LDAP_ENC_KEY_DESC' => 'Pre SOAP overovanie pri použití LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Predĺženie php_mcrypt musí byť povolený vo vašom php.ini súboru.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Rozšírenie openssl musí byť povolené v súbore php.ini.',
    'LBL_ALL' => 'Všetko',
    'LBL_MARK_POINT' => 'Označiť bod',
    'LBL_NEXT_' => 'ďalšie >>',
    'LBL_REFRESH_FROM_MARK' => 'obnovíť označený pormulár',
    'LBL_SEARCH' => 'Výber',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'ignorovať self',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Označenie Kde začína protokolovanie Fromuláru',
    'LBL_DISPLAYING_LOG' => 'Zobrazujem Prihlásienia',
    'LBL_YOUR_PROCESS_ID' => 'Vaše ID procesu',
    'LBL_YOUR_IP_ADDRESS' => 'Vaša IP adresa je',
    'LBL_IT_WILL_BE_IGNORED' => 'To bude ignorované',
    'LBL_LOG_NOT_CHANGED' => 'Prihlásenie sa nezmenilo',
    'LBL_ALERT_JPG_IMAGE' => 'Formát súboru obrázku musí byť JPEG. Nahrať nový súbor s príponou. Jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Formát súboru obrázku musí byť vo formáte JPEG alebo PNG. Nahrať nový súbor s príponou. Jpg alebo. Png.',
    'LBL_ALERT_SIZE_RATIO' => 'Pomer strán obrazu by mali byť 01:01-10:01. Obrázok bude upravovaný.',
    'ERR_ALERT_FILE_UPLOAD' => 'Chyba pri nahratí obrázku.',
    'LBL_LOGGER' => 'nastavenie zapisovača',
    'LBL_LOGGER_FILENAME' => 'Názov súboru protokolu',
    'LBL_LOGGER_FILE_EXTENSION' => 'predĺženie',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximálna veľkosť protokolu',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Predvolený formát dátumu',
    'LBL_LOGGER_LOG_LEVEL' => 'level protokolu',
    'LBL_LEAD_CONV_OPTION' => 'príležitosť možnosti prevodu',
    'LEAD_CONV_OPT_HELP' => "kopírovať- vytvorí a týka sa kópie všetkých príležitostných činnosti nových záznamov, ktoré sú vybrané užívateľom počas prevodu. Kópie sú vytvorené pre každú z vybraných záznamov.<br /><br />Presunúť - Presunie všetky príležitostné činnosti na nový rekord, ktorý je vybraný užívateľom pri prevode.<br /><br />Nerobiť nič - nič nerobí s hlavnými činnosťami počas prevodu. Činnosti zostávajú súvisiace s príležitosť iba.",
    'LBL_CONFIG_AJAX' => 'Konfigurácia používateľského rozhrania AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Výkon a čas spodobovania stránky sú vylepšené v AJAX UI-povolených moduloch, pretože pre ne nie sú vyžadované obnovovanie celých stránok. Ak máte problémy so zobrazením modulov, ktoré nie sú komptibilné s AJAX-om, AJAX UI pre tieto moduly môže byť deaktivovaný.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximálny počet protokolov (pred valcovaním)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Pripojiť po súbore',
    'LBL_VCAL_PERIOD' => 'vCal Aktualizácia časovéhp obdobia:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - maximálny počet riadkov:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Určite, koľko riadkov je povolených v rámci dovozných súborov.<br>Ak sa počet riadkov v importe súboru prekročí toto číslo, bude užívateľ upozornený.<br>Ak toto číslo je súčasťou, neobmedzený počet riadkov sú povolené.',
    'vCAL_HELP' => 'Toto nastavenie použite pre určený počet mesiacov pred aktuálnym dátumom, ktoré voľné / obsadené informácie pre volanie a stretnutie je zverejnený.<br />Ak chcete zapnúť voľné / obsadené publikovanie off, zadajte "0". Minimum je 1 mesiac, maximálna je 12 mesiacov.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Vaše scenáre',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Neboli nakofigurované žiadne scenáre',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Vyberte si, aké scenáre sú vhodné pre vašu inštaláciu. Tieto možnosti scenárov je možné meniť aj po inštalácii aplikácie.',

    'LBL_WIZARD_TITLE' => 'Sprievodca Administráciou.',
    'LBL_WIZARD_WELCOME_TAB' => 'Vitajte',
    'LBL_WIZARD_WELCOME_TITLE' => 'Vitajte v SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Kliknite na tlačidlo Ďalšie nastavenia niekoľko základných nastavení pre použitie .',
    'LBL_WIZARD_NEXT_BUTTON' => 'Ďalší >',
    'LBL_WIZARD_BACK_BUTTON' => '< Späť',
    'LBL_WIZARD_SKIP_BUTTON' => 'Preskočiť',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Pokračovanie',
    'LBL_WIZARD_FINISH_TITLE' => 'Možete používať SuiteCRM!',
    'LBL_WIZARD_SYSTEM_TITLE' => 'značkovanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Poskytnite vašej organizácie názov a logo, aby sa značky váš SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Zadajte svoje časové pásmo a ako by ste chceli, dáta, meny a názvy sa objaví v .',
    'LBL_WIZARD_SMTP_DESC' => 'Zadajte svoj ​​e-mailový účet užívateľské meno a heslo pre predvolený odchádzajúce e-mailový server.',
    'LBL_LOADING' => 'Načítavanie...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Vymazať' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Vitajte' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Zobraziť e-maily alebo súvisiace kontakty v subpanely História pre moduly',
);
