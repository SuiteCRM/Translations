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
    'LBL_BASIC_SEARCH' => 'Rychlý filter',
    'LBL_ADVANCED_SEARCH' => 'Rozšírený filter',
    'LBL_BASIC_TYPE' => 'Základný typ',
    'LBL_ADVANCED_TYPE' => 'Pokročilý typ',
    'LBL_SYSOPTS_2' => 'Aký typ databázy bude použitý pre inštaláciu SuiteCRM inštancie ?',
    'LBL_SYSOPTS_DB' => 'Určenie typu databázy',
    'LBL_SYSOPTS_DB_TITLE' => 'Typ databázy',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Prosím, pred pokračovaním opravte nasledovné chyby:',
    'ERR_DB_VERSION_FAILURE' => 'Nemožno skontrolovať verziu databázy.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Zadajte používateľské meno pre používateľa SuiteCRM admin .',
    'ERR_ADMIN_PASS_BLANK' => 'Zadať heslo pre užívateľa SuiteCRM admin.',

    'ERR_CHECKSYS' => 'Boli nájdené chyby pri kontrole kompatibility. Aby vaša SuiteCRM inštalácia správne fungovala, prosím o správne kroky k riešeniu problémov uvedených nižšie, a to buď stlačením tlačidla znovu skontrolujte, alebo skúste inštaláciu znova.',
    'ERR_CHECKSYS_CALL_TIME' => 'Povoliť Volanie Čas Heslo Odkaz je On (tu by malo byť nastavené Vypnuté v php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nenašli sa: SuiteCRM Scheduler pobeží s obmedzenou funkčnosťou. Službu Archivácia emailov nemožno spustiť.',
    'ERR_CHECKSYS_IMAP' => 'Nenájdené: Prichádzajúce emaily a kampane (email) vyžadujú IMAP knižnice. Žiadne nebudú funkčné.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Nastavte toto na',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M alebo väčšie v súbore php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Upozornenie: nedá sa zapisovať',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Vaša verzia PHP nepodporuje SuiteCRM. Budete potrebovať nainštalovať verziu, kompatibilnú s aplikáciou SuiteCRM. Postupujte podľa matice kompatibility a vzťahujúcich sa poznámok pre podporovanú verziu PHP. Vaša verzia je',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Vaša verzia IIS nepodporuje SuiteCRM. Budete potrebovať nainštalovať verziu, kompatibilnú s aplikáciou SuiteCRM. Postupujte podľa matice kompatibility a vzťahujúcich sa poznámok pre podporovanú verziu PHP. Vaša verzia je',
    'ERR_CHECKSYS_FASTCGI' => 'Zistili sme, že nepoužívate FastCGI na mapovanie PHP. Poutrebujete inštalovať/konfigurovať verziu, ktorá je kompatibilná s SuiteCRM aplikáciou. Prosím, pozrite si Maticu Kompatibility v poznámkach k vidaniu pre podporované verzie. Pozrite si  <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> pre dalšie detaily',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pre optimálne skúsenosti s používaním IIS / FastCGI SAPI, nastaviť fastcgi.logging na 0 v súbore php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Databáza nie je k dispozícii',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Databáza Support nebola nájdená. Prosím, uistite sa, že máte potrebné ovládače pre jednu z nasledujúcich podporovaných typov databáz: MySQL, MS SQLServer, Oracle, DB2 alebo. Možno bude potrebné odkomentovat rozšírenie v súbore php.ini, alebo prekompilovať so správnym binárnym súborom, v závislosti od vašej verzii PHP. Pozrite sa do príručky PHP pre viac informácií o tom, ako povoliť podporu databázy.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funkcie spojené s XML parserom knižnice, ktoré sú potrebné v SuiteCRM aplikácii,  neboli nájdené. Možno bude potrebné odkomentovat rozšírenie v súbore php.ini, alebo prekompilovať so správnym binárnym súborom, v závislosti od vašej verzii PHP. Pozrite sa do príručky PHP pre viac informácií.',
    'ERR_CHECKSYS_MBSTRING' => 'Funkcie spojené s Viacbytovým Reťazcom PHP (mbstring), ktoré sú potrebné pre SuiteCRM aplikáciu neboli nájdené.<br /><br />Všeobecne platí, že je mbstring modul nie je povolený v predvolenom nastavení v PHP a musí byť aktivovaný pomocou - povoliť-mbstring, keď binárny PHP je postavený. Opýtajte sa  admina.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Config súbor existuje, ale nie je zapisovateľný. Prosím, podniknite potrebné kroky, aby bol súbor zapisovateľný. V závislosti na vašom operačnom systéme, mohlo by to vyžadovať zmeny v oprávneniach spustením chmod 766, alebo kliknite pravým tlačidlom myši na názov súboru pre prístup k vlastnostiam a zrušte možnosť len na čítanie.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Config súbor override existuje, ale nie je zapisovateľný. Podniknite potrebné kroky, aby bol súbor zapisovateľný. mohlo by to vyžadovať zmeny v oprávneniach spustením chmod 766, alebo kliknite pravým tlačidlom myši na názov súboru pre prístup k vlastnostiam a zrušte možnosť len na čítanie.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Vlastné Directory existuje, ale nie je zapisovateľný. Možno sa budete musieť meniť oprávnenia (chmod 766), alebo kliknite pravým tlačidlom myši a zrušte nastavenie len na čítanie, v závislosti na vašom operačnom systéme. Podniknite potrebné kroky, aby bol súbor zapisovateľný.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Súbory alebo adresáre nižšie uvedené nie sú zapisovateľné alebo sú chýbajúce a nemôžu byť vytvorené. V závislosti na vašom operačnom systéme, oprava môže vyžadovať zmeniť povolenia u súborov alebo nadradeného adresára (chmod 755), alebo kliknite pravým tlačidlom na nadradený adresár a zrušte možnosť \"len pre čítanie\" a použiť ju na všetky podzložky.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Prepísať konfiguráciu',
    'ERR_CHECKSYS_SAFE_MODE' => 'Núdzový režim je On (možno budete chcieť zakázať v php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib podpora nebola nájdená: SuiteCRM má obrovské výkonnostné výhody vdaka zlib kompresie.',
    'ERR_CHECKSYS_ZIP' => 'ZIP podpora nebola nájdená: SuiteCRM potrebuje ZIP podporu, aby bolo možné spracovať komprimované súbory.',
    'ERR_CHECKSYS_PCRE' => 'Nebola nájdená knižnica PCRE: SuiteCRM potrebuje knižnicu PCRE za účelom spracovania zhody regulárnych výrazov pomocou štýlu Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Verzia knižnice PCRE: SuiteCRM potrebuje knižnicu PCRE 7.0 alebo vyššiu, za účelom spracovania zhody regulárnych výrazov pomocou štýlu Perl.',
    'ERR_DB_ADMIN' => 'Ak používateľské meno správcu databázy a / alebo heslo je neplatné a pripojenie k databáze nemožno vytvoriť, prosím zadajte platné používateľské meno a heslo. (Chyba:',
    'ERR_DB_ADMIN_MSSQL' => 'Ak používateľské meno správcu databázy a / alebo heslo je neplatné a pripojenie k databáze nemožno vytvoriť, prosím zadajte platné používateľské meno a heslo.',
    'ERR_DB_EXISTS_NOT' => 'Uvedená databáza neexistuje.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Databáza s konfiguračnými už existuje. Pre spustenie inštalácie s vybranou databázou, opäť spusťte inštaláciu a zvoľte: "Zmazať a opäť vytvoriť existujúce tabuľky SuiteCRM?" Pre aktualizáciu, použite Sprievodcu aktualizáciou v admistrátorskom ovládacom paneli. Prečítajte si dokumentáciu týkajúcu sa aktualizácie, nacházajúcu sa <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> tu</a>.',
    'ERR_DB_EXISTS' => 'Za predpokladu, že meno databázy už existuje, nie je možné vytvoriť ďalšiu s rovnakým názvom.',
    'ERR_DB_EXISTS_PROCEED' => 'Za predpokladu, že názov databázy už existuje, môžete<br />1. kliknúť tlačidlo späť a zvoliť nový názov databázy<br />2. kliknite na tlačidlo Ďalej a pokračovať, ale všetky existujúce tabuľky tejto databázy budú zrušené. To znamená, že vaše tabuľky a údaje budú preč.',
    'ERR_DB_HOSTNAME' => 'Názov servera nemôže byť prázdny.',
    'ERR_DB_INVALID' => 'Vybraný neplatný typ databázy.',
    'ERR_DB_LOGIN_FAILURE' => 'Ak používateľské meno správcu databázy a / alebo heslo je neplatné a pripojenie k databáze nemožno vytvoriť, prosím zadajte platné používateľské meno a heslo.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Ak používateľské meno správcu databázy a / alebo heslo je neplatné a pripojenie k databáze nemožno vytvoriť, prosím zadajte platné používateľské meno a heslo.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Ak používateľské meno správcu databázy a / alebo heslo je neplatné a pripojenie k databáze nemožno vytvoriť, prosím zadajte platné používateľské meno a heslo.',
    'ERR_DB_MYSQL_VERSION' => 'Vaša MySQL verzia (%s) nie je podporovaný aplikáciou SuiteCRM. Budete musieť nainštalovať verziu, ktorá je kompatibilná so SuiteCRM aplikáciou. Prosím, konzultujte maticu kompatibility v poznámkach pre podporované verzie MySQL.',
    'ERR_DB_NAME' => 'Názov databázy nemôže byť prázdny.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Názov databázy nemôže obsahovať &#39;\\&#39;, &#39;/&#39;, alebo &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Názov databázy nemôže začínať číslom, &#39;#&#39;, alebo &#39;@&#39; a nesmie obsahovať medzery, \"\" \",\" \"\", \"*\", \"/\", \"\\\", \"\", \":?\", &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, alebo &#39;!&#39; \"-\"",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Názov databázy môže obsahovať len alfanumerické znaky a \"#\" symboly, &#39;_&#39; alebo &#39;$&#39;",
    'ERR_DB_PASSWORD' => 'Heslá uvedené správcom SuiteCRM databázy sa nezhodujú. Prosím, zadajte znova rovnaké heslo v poli pre heslo.',
    'ERR_DB_PRIV_USER' => 'Uveďte používateľské meno správcu databázy. Používateľ je vyžadovaný pre počiatočné pripojenie k databáze.',
    'ERR_DB_USER_EXISTS' => 'Používateľské meno používateľa SuiteCRM databázy už existuje - nie je možné vytvoriť ďalšieho s rovnakým menom. Prosím zadajte nové používateľské meno.',
    'ERR_DB_USER' => 'Zadajte používateľské meno pre správcu SuiteCRM databázy.',
    'ERR_DBCONF_VALIDATION' => 'Prosím, pred pokračovaním opravte nasledovné chyby:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Heslá stanovená pre používateľov SuiteCRM databázy sa nezhodujú. Prosím, zadajte znova rovnaké heslo v poli pre heslo.',
    'ERR_ERROR_GENERAL' => 'Došlo k nasledujúcim chybám:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nemožno zmazať súbor:',
    'ERR_LANG_MISSING_FILE' => 'Nemožno nájsť súbor:',
    'ERR_LANG_NO_LANG_FILE' => 'Jazykový balíček nebol nájdený v obsahu/ jazyk vnútri:',
    'ERR_LANG_UPLOAD_1' => 'Problém s načítaním. Prosím, skúste to znova.',
    'ERR_LANG_UPLOAD_2' => 'Jazykové balíčky musia byť ZIP archívy.',
    'ERR_LANG_UPLOAD_3' => 'PHP nemôže presunúť dočasný súbor do upgrad adresára.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Prihlásiť ak adresár nie je platný adresár.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Prihlásiť ak adresár nie je zapisovateľný adresár.',
    'ERR_NO_DIRECT_SCRIPT' => 'Nemožno spracovať skript priamo.',
    'ERR_NO_SINGLE_QUOTE' => 'Nedá sa použiť apostrof pre',
    'ERR_PASSWORD_MISMATCH' => 'Heslá stanovená pre používateľov SuiteCRM admin sa nezhodujú. Prosím, zadajte znova rovnaké heslo v poli pre heslo.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nemožno zapisovať do súboru config.php.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Môžete pokračovať v inštalácii ručným vytvorením súboru config.php a vkladanie informácií o konfigurácii nižšie do súboru config.php. Avšak, musíte vytvoriť súbor config.php predtým ako budete pokračovať k ďalšiemu kroku.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Nezabudli ste na vytvorenie súboru config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Upozornenie: Nemožno zapisovať do súboru config.php. Prosím, uistite sa, že existuje.',
    'ERR_PERFORM_HTACCESS_1' => 'Nemožno zapisovať do',
    'ERR_PERFORM_HTACCESS_2' => 'súbor',
    'ERR_PERFORM_HTACCESS_3' => 'Ak chcete zabezpečiť prístupnosť svojho ​​súbor prostredníctvom prehliadača, vytvorte htaccess súbor vo vašom adresári protokolu s linkou.:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nemohli sme detekovať pripojenie k Internetu.</b> Keď máte pripojenie, navštívte <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> sa zaregistrovať SuiteCRM. Tým, že nechá nám vedieť niečo málo o tom, ako vaša spoločnosť plánuje využiť SuiteCRM, môžeme zaistiť, aby sme sa vždy dodávať správnej aplikácii pre vaše obchodné potreby.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Sedenia ak adresár nie je platný adresár.',
    'ERR_SESSION_DIRECTORY' => 'Sedenia ak adresár nie je zapisovateľný adresára.',
    'ERR_SESSION_PATH' => 'Sedenia cesta je vyžadovaný, ak chcete určiť vlastné.',
    'ERR_SI_NO_CONFIG' => 'Vy ste nezahŕňa config_si.php v koreň dokumentu, alebo ste nedefinovali $sugar_config_si v config.php',
    'ERR_SITE_GUID' => 'ID aplikácie je vyžadovaný, ak chcete určiť vlastné.',
    'ERROR_SPRITE_SUPPORT' => "V súčasnej dobe nie sme schopní nájsť knižnicu GD, ako výsledok nebudete môcť používať Sprite CSS funkčnosť.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Upozornenie: Vaša PHP konfigurácia by mala byť zmenená, aby súbory aspoň 6 MB, ktoré chcete nahrať.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'nahrať veľkosť súboru',
    'ERR_URL_BLANK' => 'Uveďte základné URL pre SuiteCRM inštancie.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nepodarilo sa nájsť inštalačný záznam',
    'ERROR_MANIFEST_TYPE' => 'Súbor manifestu musí špecifikovať typ balíka.',
    'ERROR_PACKAGE_TYPE' => 'Súbor manifestu ukazuje na neznámy typ balíka',
    'ERROR_VERSION_INCOMPATIBLE' => 'Nahratý súbor nie je kompatibilný s touto verziou SuiteCRM: ',

    'LBL_BACK' => 'Späť',
    'LBL_CANCEL' => 'Zrušiť',
    'LBL_ACCEPT' => 'Súhlasím',
    'LBL_CHECKSYS_CACHE' => 'Podadresáre vyrovnávacej pamäte sú zapisovateľné',
    'LBL_DROP_DB_CONFIRM' => 'Za predpokladu, Názov databázy už existuje.<br />Môžete buď:<br />1. Kliknite na tlačidlo Cancel a vyberte nový názov databázy, alebo<br />2. Kliknite na tlačidlo Prijať a pokračovať. Všetky existujúce tabuľky v databáze budú vylúčené. To znamená, že všetky tabuľky a pre-existujúce dáta budú unesený.',
    'LBL_CHECKSYS_COMPONENT' => 'zložka',
    'LBL_CHECKSYS_CONFIG' => 'Zapisovateľný SuiteCRM Konfiguračný súbor (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL modul',
    'LBL_CHECKSYS_CUSTOM' => 'Zapisovať Vlastné Kategórie',
    'LBL_CHECKSYS_DATA' => 'Zapisovateľné dát podadresárov',
    'LBL_CHECKSYS_IMAP' => 'IMAP modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings modul',
    'LBL_CHECKSYS_MEM_OK' => 'OK (No Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (neobmedzený)',
    'LBL_CHECKSYS_MEM' => 'PHP pamäťový limit',
    'LBL_CHECKSYS_MODULE' => 'Zapisovateľné Moduly podadresárov a súborov',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Nedostupné',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => 'Umiestnenie konfiguračného súboru PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'PHP Verzia',
    'LBL_CHECKSYS_IISVER' => 'IIS Verzia',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Znovu skontrolujte',
    'LBL_CHECKSYS_STATUS' => 'Stav',
    'LBL_CHECKSYS_TITLE' => 'System Check Prijatie',
    'LBL_CHECKSYS_XML' => 'XML Parsing - spracovanie XML súborov',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Kompresný modul',
    'LBL_CHECKSYS_ZIP' => 'ZIP Manipulácia modul',
    'LBL_CHECKSYS_PCRE' => 'Knižnica PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Opravte prosím nasledujúce súbory alebo adresáre pred začatím:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Opravte prosím nasledujúci modul adresáre a súbory pod nimi pred začatím:',
    'LBL_CHECKSYS_UPLOAD' => 'Zapisovateľný adresár pre upload',
    'LBL_CLOSE' => 'Uzavrieť',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'byť vytvorený',
    'LBL_CONFIRM_DB_TYPE' => 'Typ databázy',
    'LBL_CONFIRM_NOT' => 'nie',
    'LBL_CONFIRM_TITLE' => 'Potvrdiť Nadstavenia',
    'LBL_CONFIRM_WILL' => 'chcieť',
    'LBL_DBCONF_DB_DROP' => 'Drop tabuľky',
    'LBL_DBCONF_DB_NAME' => 'Názov databázy',
    'LBL_DBCONF_DB_PASSWORD' => 'Databáza Užívateľ Heslo',
    'LBL_DBCONF_DB_PASSWORD2' => 'Re-enter SuiteCRM_ databázy Užívateľ Heslo',
    'LBL_DBCONF_DB_USER' => 'Užívateľ databázy SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Užívateľ databázy SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Užívateľské meno databázy Administrátora',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'databáza hesla admin',
    'LBL_DBCONF_COLLATION' => 'Porovnanie',
    'LBL_DBCONF_CHARSET' => 'Znaková sada',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Pokročilé nastavenie databázy',
    'LBL_DBCONF_DEMO_DATA' => 'Naplniť databázu s demo dáta?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Vyberte demo dáta',
    'LBL_DBCONF_HOST_NAME' => 'Názov servera',
    'LBL_DBCONF_HOST_INSTANCE' => 'hostiteľ Instance',
    'LBL_DBCONFIG_SECURITY' => 'Z bezpečnostných dôvodov, môžete zadať exkluzívneho užívateľa databázy pre pripojenie k databáze SuiteCRM. Tento užívateľ musí mať oprávnenie zapisovať, aktualizovať a získať údaje v databáze, ktorá bude vytvorená pre túto inštaláciu. Tento užívateľ môže byť správca databázy uvedený vyššie, alebo môžete poskytnúť nového, alebo existujúceho užívateľa databázy.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Zadať existujúceho užívateľa',
    'LBL_DBCONFIG_CREATE_DD' => 'Vytvoriť nového užívateľa',
    'LBL_DBCONFIG_SAME_DD' => 'Rovnaký ako administrátor',
    'LBL_DBCONF_TITLE' => 'Nastavenie databázy',
    'LBL_DBCONF_TITLE_NAME' => 'Uveďte názov databázy',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Poskytnite informáciu o užívateľovi databázy',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Heslo',
    'LBL_DISABLED_DESCRIPTION_2' => 'Po tejto zmene došlo, môžete kliknúť na "Štart" tlačidlo nižšie zahájite inštaláciu. Po dokončení inštalácie, budete chcieť zmeniť hodnotu pre &#39;installer_locked "na" true ".',
    'LBL_DISABLED_DESCRIPTION' => 'Inštalačné už len raz. Ako bezpečnostné opatrenia, bolo zakázané od spustenia druhýkrát. Ak ste si úplne istí, že chcete spustiť znovu, obráťte sa na svojho súboru config.php a vyhľadajte (alebo pridať) premennú s názvom "installer_locked" a nastavte ju na "false". Linka by mala vyzerať takto',
    'LBL_DISABLED_HELP_1' => 'Pre inštaláciu pomôcť, navštívte SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'podpora fóra',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM Inštalácia bola zakázaná',
    'LBL_HELP' => 'Pomoc',
    'LBL_INSTALL' => 'Inštalovať',
    'LBL_INSTALL_TYPE_TITLE' => 'Inštalácia',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Vyberte Typ inštalácie',
    'LBL_INSTALL_TYPE_TYPICAL' => 'typická inštalácia',
    'LBL_INSTALL_TYPE_CUSTOM' => 'Vlastná inštalácia',
    'LBL_INSTALL_TYPE_MSG2' => 'Vyžaduje minimálne informácie o inštalácii. Odporúča sa pre nových používateľov.',
    'LBL_INSTALL_TYPE_MSG3' => 'Poskytuje ďalšie možnosti pre nastavenie počas inštalácie. Väčšina z týchto možností sú tiež k dispozícii po inštalácii v admin obrazovkách. Doporučené pre pokročilých užívateľov.',
    'LBL_LANG_1' => 'Ak chcete použiť jazyk v SuiteCRM_, než je predvolený jazyk (US-English), môžete nahrať a nainštalovať jazykový balík v tomto okamihu. Budete mať možnosť nahrať a nainštalovať jazykové balíky priamo z SuiteCRM_ aplikácie, rovnako. Ak by ste chceli, aby tento krok preskočiť, kliknite na tlačidlo Ďalej.',
    'LBL_LANG_BUTTON_COMMIT' => 'Inštalovať',
    'LBL_LANG_BUTTON_REMOVE' => 'Odstrániť',
    'LBL_LANG_BUTTON_UNINSTALL' => '<i>Odinštalovať</i>',
    'LBL_LANG_BUTTON_UPLOAD' => 'nahrať',
    'LBL_LANG_NO_PACKS' => 'nič',
    'LBL_LANG_PACK_INSTALLED' => 'Nasledujúci jazykové balíčky, ktoré boli nainštalované:',
    'LBL_LANG_PACK_READY' => 'Nasledujúce jazykové balíčky sú pripravené na inštaláciu:',
    'LBL_LANG_SUCCESS' => 'jazykový balíček bol úspešne nahraný.',
    'LBL_LANG_TITLE' => 'jazykový balíček',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Inštalácia SuiteCRM_ teraz. To môže trvať až niekoľko minút.',
    'LBL_LANG_UPLOAD' => 'nahrať jazykový balíček',
    'LBL_LICENSE_ACCEPTANCE' => 'licencia akceptovaná',
    'LBL_LICENSE_CHECKING' => 'Kontrola systému pre kompatibilitu.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kontrola prosredia',
    'LBL_LICENSE_CHKDB_HEADER' => 'Overenie DB poverenia.',
    'LBL_LICENSE_CHECK_PASSED' => 'Systém prešiel skontrolovať kompatibilitu.',
    'LBL_CREATE_CACHE' => 'Príprava inštalácie...',
    'LBL_LICENSE_REDIRECT' => 'presmerovanie v',
    'LBL_LICENSE_I_ACCEPT' => 'Súhlasím',
    'LBL_LICENSE_PRINTABLE' => ' Zobrazenie pre tlač ',
    'LBL_PRINT_SUMM' => 'tlač Zhrnutie',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM Licencia',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Doktor',

    'LBL_ML_ACTION' => 'Akcia',
    'LBL_ML_DESCRIPTION' => 'Popis',
    'LBL_ML_INSTALLED' => 'Dátum inštalácie',
    'LBL_ML_NAME' => 'Meno',
    'LBL_ML_PUBLISHED' => 'Dátum zverejnenia',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Neinštalovateľné',
    'LBL_ML_VERSION' => 'Verzia',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server ovládač pre PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli rozšírenie)',
    'LBL_NEXT' => 'Ďalší',
    'LBL_NO' => 'Nie',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Nastavenie stránky admin heslo',
    'LBL_PERFORM_CONFIG_PHP' => 'vytvoriť SuiteCRM konfiguračný súbor',
    'LBL_PERFORM_CREATE_DB_1' => 'vytvoriť databázu',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>do</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'vytvoriť databázu užívateľské meno a heslo',
    'LBL_PERFORM_CREATE_DEFAULT' => 'vytvorť základné SuiteCRM dáta',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Vytvorenie predvoleného plánovača úloh',
    'LBL_PERFORM_DEFAULT_USERS' => 'vytvoriť základných užívateľov',
    'LBL_PERFORM_DEMO_DATA' => 'yplnenie databázových tabuliek s demo dátami (to môže chvíľu trvať)',
    'LBL_PERFORM_DONE' => 'dokončené<br>',
    'LBL_PERFORM_FINISH' => 'Koniec',
    'LBL_PERFORM_OUTRO_1' => 'Nastavenie SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'teraz je to kompletné!',
    'LBL_PERFORM_OUTRO_3' => 'celkový čas',
    'LBL_PERFORM_OUTRO_4' => 'sekundy',
    'LBL_PERFORM_OUTRO_5' => 'Orientačná použitá pamäť:',
    'LBL_PERFORM_OUTRO_6' => 'byty',
    'LBL_PERFORM_SUCCESS' => 'Úspech!',
    'LBL_PERFORM_TABLES' => 'Vytváranie tabuliek SuiteCRM aplikácie, auditu tabuľky a vzťah metadáta',
    'LBL_PERFORM_TITLE' => 'vykonajte nastavenia',
    'LBL_PRINT' => 'Tlač',
    'LBL_REG_CONF_1' => 'Prosím, vyplňte krátky formulár nižšie a dostanete produktu oznámenia, školenia správy, špeciálne ponuky a špeciálne udalosti pozvánky od SuiteCRM. Nechceme predávať, prenajímať, zdieľať alebo inak distribuovať informácie zhromaždené tu tretím stranám.',
    'LBL_REG_CONF_3' => 'Ďakujeme za registráciu. Kliknite na tlačidlo Dokončiť pre prihlásenie do SuiteCRM. Budete musieť prihlásiť prvýkrát pomocou užívateľského mena "admin" a heslo, ktoré ste zadali v kroku 2.',
    'LBL_REG_TITLE' => 'Registrácia',

    'LBL_REQUIRED' => 'Povinné pole',

    'LBL_SITECFG_ADMIN_Name' => 'Meno administrátora SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Opätovné zadanie hesla',
    'LBL_SITECFG_ADMIN_PASS' => 'Heslo administrátora SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'Aplikačné ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Ak je vybraná, je nutné zadať ID aplikácie prepísať automaticky generované ID. ID zaisťuje, že zasadnutie jedného SuiteCRM_ napríklad nie sú používané inými prípadmi. Ak máte cluster SuiteCRM_ zariadenia, všetci musia zdieľať rovnaký ID aplikácie.',
    'LBL_SITECFG_CUSTOM_ID' => 'IProvide vlastné aplikácie ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Ak je vybraná, je nutné zadať adresár protokolu prepísať predvolený priečinok pre SuiteCRM_ log. Bez ohľadu na to, kde sa nachádza súbor protokolu, bude prístup k nemu cez webový prehliadač obmedzený pomocou. Htaccess presmerovania.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Použite vlastné Log Directory',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Ak je vybraná, musíte poskytnúť bezpečné zložku pre ukladanie informácií SuiteCRM_ relácie. To možno vykonať, aby sa zabránilo dáta relácie od bytia zraniteľný na zdieľaných serveroch.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Použite vlastné Sedenia Directory pre SuiteCRM_',
    'LBL_SITECFG_FIX_ERRORS' => 'Please fix the following errors before proceeding:',
    'LBL_SITECFG_LOG_DIR' => 'Prihlásiť Directory',
    'LBL_SITECFG_SESSION_PATH' => 'Cesta k Sedenia Directory<br />(Musí byť zapisovateľný)',
    'LBL_SITECFG_SITE_SECURITY' => 'Vyberte položku Možnosti zabezpečenia',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Ak je zvolené, bude systém pravidelne kontrolovať aktualizovanej verzie aplikácie.',
    'LBL_SITECFG_SUITE_UP' => 'Automaticky kontrolovať aktualizácie?',
    'LBL_SITECFG_TITLE' => 'Nastavenie webu',
    'LBL_SITECFG_TITLE2' => 'Nastavenie administrátora',
    'LBL_SITECFG_SECURITY_TITLE' => 'miestna ochrana',
    'LBL_SITECFG_URL' => 'URL inštalácie SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Poslať anonymný štatistiku používanie?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Ak je zvolené, bude SuiteCRM_ posielať anonymné štatistiky o vašej inštalácii do SuiteCRM Inc zakaždým váš systém kontroluje nové verzie. Táto informácia nám pomôže lepšie pochopiť, ako sa používa aplikácie a sprievodca zlepšenie výrobku.',
    'LBL_SITECFG_URL_MSG' => 'Zadajte adresu URL, ktorá bude použitá pre prístup k SuiteCRM_ inštancie po inštalácii. URL bude tiež slúžiť ako podklad pre adresy URL vo stranách SuiteCRM_ aplikácie. URL by mala obsahovať webový server alebo názov zariadenia alebo IP adresu.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Zadajte názov svojho systému. Tento názov sa bude zobrazovať v riadku prehliadača titulu, keď používateľ navštívi SuiteCRM_ aplikácie.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Po inštalácii, budete musieť použiť meno administrátora (predvolené meno je admin) pre prihlásenie k SuiteCRM. Zadajte heslo tohto administrátora. Toto heslo sa dá zmeniť po prvom prihlásení. Okrem predvolenej hodnoty, môžete zadať iné meno administrátora.',
    'LBL_SITECFG_COLLATION_MSG' => 'Vyberte radenie (triedenie) nastavenia pre váš systém. Toto nastavenie vytvorí tabuľky s konkrétny jazyk, ktorý používate. V prípade, že váš jazyk nevyžaduje špeciálne nastavenia, použite predvolenú hodnotu.',
    'LBL_SPRITE_SUPPORT' => 'podpora skriatka',
    'LBL_SYSTEM_CREDS' => 'Systémové poverenia',
    'LBL_SYSTEM_ENV' => 'Systémové prostredie',
    'LBL_SHOW_PASS' => 'zobrazit heslo',
    'LBL_HIDE_PASS' => 'skryť heslo',
    'LBL_HIDDEN' => '<i>(skrytý)</i>',
    'LBL_STEP1' => 'Krok 1 z 2 - Systémové požiadavky - analýza pred inštaláciou',
    'LBL_STEP2' => 'Krok 2 z 2 - Konfigurácia',
    'LBL_STEP' => 'Krok',
    'LBL_TITLE_WELCOME' => 'Vitajte v SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Ste pripravení na inštaláciu?',
    'REQUIRED_SYS_COMP' => 'Potrebné systémové komponenty',
    'REQUIRED_SYS_COMP_MSG' =>
        'Pred tým, než začnete, presvedčte sa prosím, že máte podporované verzie následujúcich súčasti:<br>
                      <ul>
                      <li>Databázu/Systém správy databázy (Príklady: MariaDB, MySQL alebo SQL Server)</li>
                      <li>Webový Server (Apache, IIS)</li>
                      </ul>
                      Pozrite si tabuľku kompatibility v poznámkach k vydaniu pre
                      kompatibilné súčasti systému pre verziu SuiteCRM, ktorú inštalujete<br>',
    'REQUIRED_SYS_CHK' => 'Počiatočná kontrola systému',
    'REQUIRED_SYS_CHK_MSG' =>
        'Ak začnete inštaláciu, na webovom serveri, na ktorom sú umiestnené súbory SuiteCRM, sa vykoná kontrola systému,
                      aby ste sa uistili, že systém je nakonfigurovaný správne a obsahuje všetky potrebné komponenty
                      na úspešné dokončenie inštalácie.<br><br>
                      Systém kontroluje následovné:<br>
                      <ul>
                      <li><b>Verziu PHP</b>&#8211;musí byť kompatibilný s aplikáciou</li>
                      <li><b>Premenné relácie</b>&#8211;musia pracovať správne</li>
                      <li><b>Reťazce MB</b>&#8211;musia byť inštalované a povolené v php.ini</li>
                      <li><b>Podpora databázy</b>&#8211;musí existovať pre MariaDB, MySQL alebo SQL Server</li>
                      <li><b>Config.php</b>&#8211;musí existovať a musí mať príslušné povolenia aby mol zapisovateľný</li>
                      <li>Následovné súbory SuiteCRM musia byť zapisovateľné:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Ak zistíte chybu, nemôžete pokračovať v inštalácii.
                                  Bude zobrazené oznámenie o chybe s vysvetlením, prečo systém neprešiel kontrolou.
                                  Po vykonaní potrebných zmien, môžete znovu spustiť kontrolu systému, pre pokračovanie inštalácie.<br>',


    'REQUIRED_INSTALLTYPE' => 'Typická alebo Vlastná inštalácia',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'After the system check is performed, you can choose either the Typical or the Custom installation.<br /><br />For both Typical and Custom installations, you will need to know the following:<br />Type of database that will house the SuiteCRM data<br />Compatible database types: MySQL, MS SQL Server, Oracle, DB2.<br /><br />Name of the web server or machine (host) on which the database is located<br />This may be localhost if the database is on your local computer or is on the same web server or machine as your SuiteCRM files.<br /><br />Name of the database that you would like to use to house the SuiteCRM data<br />You might already have an existing database that you would like to use. If you provide the name of an existing database, the tables in the database will be dropped during installation when the schema for the SuiteCRM database is defined.<br />If you do not already have a database, the name you provide will be used for the new database that is created for the instance during installation.<br /><br />Database administrator user name and password<br />The database administrator should be able to create tables and users and write to the database.<br />You might need to contact your database administrator for this information if the database is not located on your local computer and/or if you are not the database administrator.<br /><br />SuiteCRM database user name and password<br />The user may be the database administrator, or you may provide the name of another existing database user.<br />If you would like to create a new database user for this purpose, you will be able to provide a new username and password during the installation process, and the user will be created during installation.<br />For the Custom setup, you might also need to know the following:<br />URL that will be used to access the SuiteCRM instance after it is installed. This URL should include the web server or machine name or IP address.<br /><br />[Optional] Path to the session directory if you wish to use a custom session directory for SuiteCRM information in order to prevent session data from being vulnerable on shared servers.<br /><br />[Optional] Path to a custom log directory if you wish to override the default directory for the SuiteCRM log.<br /><br />[Optional] Application ID if you wish to override the auto-generated ID that ensures that sessions of one SuiteCRM instance are not used by other instances.<br /><br />Character Set most commonly used in your locale.<br /><br />For more detailed information, please consult the Installation Guide.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Prosím, prečítajte si nasledujúce dôležité informácie pred pokračovaním v inštalácii. Informácie vám pomôžu určiť, či ste alebo nie ste pripravení na inštaláciu aplikácie v tomto okamihu.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Vyberte svoj ​​jazyk',
    'LBL_WELCOME_SETUP_WIZARD' => 'Sprievodca inštaláciou',
    'LBL_WIZARD_TITLE' => 'Sprievodca inštaláciou SuiteCRM',
    'LBL_YES' => 'Áno',

    'LBL_PATCHES_TITLE' => 'Nainštalujte najnovšie záplaty.',
    'LBL_MODULE_TITLE' => 'Jazyk inštalácie',
    'LBL_PATCH_1' => 'Ak by ste chceli, aby tento krok preskočiť, kliknite na tlačidlo Ďalej.',
    'LBL_PATCH_TITLE' => 'Systémová záplata',
    'LBL_PATCH_READY' => 'Nasledujúci patch (es) sú pripravené na inštaláciu:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM spolieha na PHP zasadnutí na ukladanie dôležitých informácií pri pripojení k tomuto webovému serveru. Vaša PHP inštalácia nemá Sedenia informácie správne nakonfigurovaný.<br /><br />Spoločný konfiguráciou je, že \"session.save_path\" smernica neukazuje na platný adresár.<br /><br />Opravte PHP konfiguráciu v súbore php.ini umiestnený nižšie.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Chyba konfigurácie',
    'LBL_SYSTEM_NAME' => 'System Name',
    'LBL_COLLATION' => 'kontrolné nastavenia',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Uveďte názov systému pre SuiteCRM_ inštancie.',
    'LBL_PATCH_UPLOAD' => 'Vyberte opravu súboru z lokálneho počítača',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Je požadovaná Verzia PHP 5 alebo vyššia.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimálna Php vyžadovaná verzia je 5.1.0. Odporúčaná Php verzia 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Vaša aktuálna php verzia je',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Odporúčaná verzia PHP je 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP Backward Compatibility - kompatibilita na nižšie verzie PHP - je zapnutá. Nastavte zend.ze1_compatibility_mode na OFF, pre pokračovanie ďalej',
    'LBL_STREAM' => 'PHP umožňuje používať prúdy',

    'advanced_password_new_account_email' => array(
        'subject' => 'Nové informácie o účte',
        'type' => 'systém',
        'description' => 'popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Here is your account username and temporary password: Username : $contact_user_user_name Password : $contact_user_user_hash $config_site_url After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Nové informácie o účte',
        'type' => 'systém',
        'description' => "popis<br />Toto je Popis balíka, ktorý je zobrazený počas inštalácie.",
        'body' => 'Tu je Váš účet užívateľské meno a dočasné heslo:<br />Užívateľské meno: $ contact_user_user_name<br />Heslo: $ contact_user_user_hash<br /><br />$ Config_site_url<br /><br />Po prihlásení pomocou vyššie uvedeného hesla, môže byť potrebné resetovať heslo k jednému z vášho vlastného výberu.',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'meno<br />Toto je Meno súčastného balíka.<br /><br />Zadávané meno musí byť alfanumerické, začínať písmenom a nesmie obsahovať medzery:(Príklad:HR_Management)',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kód dvojfaktorového overenia',
        'type' => 'systém',
        'description' => "Tato šablóna sa používa na odosielanie užívateľského kódu pre dvojfaktorové overovanie.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kód dvojfaktorového overenia je <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kód dvojfaktorového overenia je $code.',
        'name' => 'Email dvojfaktorového overenia',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Od" mena:',
    'LBL_FROM_ADDR' => '"Od" adresy:',

    'LBL_WIZARD_SMTP_DESC' => 'Zadajte svoj ​​e-mailový účet užívateľské meno a heslo pre predvolený odchádzajúce e-mailový server.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si poskytovateľa e-mailu',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostatné',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP špecifikácia servera',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použiť overenie SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Povoliť SMTP cez SSL alebo TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-mailová adresa:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Heslo:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Povoliť používateľom používať tento účet pre odchádzajúce e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Pokiaľ je vybraná táto možnosť, všetci užívatelia budú môcť posielať správy pomocou jedného účtu odchádzajúcej pošty, používaného pre odosielanie systémových  hlásení a upozornení. Ak možnosť nie je vybraná, užívatelia stále môžu používať server pre odchádzajúcu poštu po poskytnutí ich vlastných informácii o účte.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! heslo mailu',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Zmena hesla',
    'LBL_EXCHANGE_SMTPUSER' => 'Zmena používateľkského mena',
    'LBL_EXCHANGE_SMTPPORT' => 'Zmena portu servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zmena servera',


    'LBL_MAIL_SMTPUSER' => 'SMTP užívateľské meno',
    'LBL_MAIL_SMTPPASS' => 'Heslo SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'značkovanie',
    'LBL_WIZARD_SYSTEM_DESC' => 'Poskytnite vašej organizácie názov a logo, aby sa značky váš SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Meno:',
    'SYSTEM_NAME_HELP' => 'To je názov, ktorý sa zobrazí v záhlaví prehliadača.',
    'NEW_LOGO' => 'Vybrať Logo:',
    'NEW_LOGO_HELP' => 'Formát súboru obrázku môže byť buď. Png alebo. Jpg. Maximálna výška je 170px, a maximálna šírka je 450px. Akékoľvek odoslať obrázok, ktorý je väčší v každom smere bude zmenšený na tieto max rozmerov.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'nahrať',
    'CURRENT_LOGO' => 'Aktuálne Logo:',
    'CURRENT_LOGO_HELP' => 'Toto logo sa zobrazí v strede prihlasovacej obrazovky SuiteCRM aplikácie.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Výber scenára',
    'LBL_WIZARD_SCENARIO_DESC' => 'Toto umožňuje prispôsobenie zobrazených modulov, na základe vašich požiadaviek. Každý z modulov možno povoliť po inštalácii pomocou administračných stránok.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Nie sú žiadne scenáre aktuálne nastavené v konfiguračnom súbore (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Nastavenie systémových miest',
    'LBL_WIZARD_LOCALE_DESC' => 'Zadajte svoje časové pásmo a ako by ste chceli, dáta, meny a názvy sa objaví v .',
    'LBL_DATE_FORMAT' => 'Formát dátumu:',
    'LBL_TIME_FORMAT' => 'Formát času:',
    'LBL_TIMEZONE' => 'časová zóna',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_CURRENCY_SYMBOL' => 'Symbol meny:',
    'LBL_CURRENCY_ISO4217' => 'Kód meny ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'oddeľovač tisícov',
    'LBL_DECIMAL_SEP' => 'Desatinný znak',
    'LBL_NAME_FORMAT' => 'Formát mena:',
    'UPLOAD_LOGO' => 'Počkajte prosím, nahrávam logo...',
    'ERR_UPLOAD_FILETYPE' => 'Nie je dovolený typ súboru, nahrajte jpeg alebo png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Neznáma chyba pri nahrávaní súboru.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Nahraté súbory presiahli direktívu upload_max_filesize v súbore php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Nahraté súbory presiahli direktívu MAX_FILE_SIZE tak, že boli určené formulárom HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Nahrávané súbory boli nahraté len čiastočne.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Neboli nahraté žiadne súbory.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Chýba dočasná zložka.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Chyba pri zápise súboru na disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Rozšírenie PHP zastavilo nahrávanie súboru. PHP neposkytuje spôsob, ako zistiť, ktoré rozšírene spôsobilo zastavenie nahrávania súboru.',

    'LBL_INSTALL_PROCESS' => 'Inštalácia...',

    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'ERR_ADMIN_EMAIL' => 'Emailová adresa administrátora je nesprávna.',
    'ERR_SITE_URL' => 'Je požadovaná URL stránky.',

    'STAT_CONFIGURATION' => 'Konfigurácia vzťahov...',
    'STAT_CREATE_DB' => 'Vytváram databázu...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Vytváram predvolené nastavenia...',
    'STAT_INSTALL_FINISH' => 'Inštalácia dokončená...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Proces inštalácie skončený, <a href="%s">Priháste sa, prosím...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Prosím, najprv súhlaste s licenciou',

    'LBL_MORE_OPTIONS_TITLE' => 'Viac možností',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Chyba databázy',
    'LBL_OLD_PHP' => 'Zistená stará verzia PHP!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Som oboznámený s rizikami a prajem si pokračovať.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Užívateľ',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Názov databázy',
    'LBL_DBCONFIG_MSG3' => 'Názov databázy, ktorá bude obsahovať údaje pre túto inštaláciu SuiteCRM.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Názov servera',
    'LBL_DBCONFIG_MSG2' => 'Meno web servera alebo počítača (host), kde je umiestnená databáza (napr. www.mojadomena.sk). Pri lokálnej inštalácii odporúčame z výkonnostných dôvodov uviesť skôr \'localhost\' ako \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Užívateľské meno a heslo správcu databázy, ktorý môže vytvárať databázové tabuľky a užívatelia, a ktoré môžu zapisovať do databázy je nevyhnutné nastaviť SuiteCRM_ databázy.'
);
