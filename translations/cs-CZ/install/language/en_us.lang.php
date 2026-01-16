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
    'LBL_BASIC' => 'Základní',
    'LBL_BASIC_SEARCH' => 'Rychlý filtr',
    'LBL_ADVANCED_SEARCH' => 'Rozšířený filtr',
    'LBL_BASIC_TYPE' => 'Základní typ',
    'LBL_ADVANCED_TYPE' => 'Rozšířený typ',
    'LBL_SYSOPTS_2' => 'Jaký typ databáze bude použit pro SuiteCRM instanci, kterou chcete instalovat?',
    'LBL_SYSOPTS_DB' => 'Určete typ databáze',
    'LBL_SYSOPTS_DB_TITLE' => 'Typ databáze',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Opravte prosím následující chyby dříve než budete pokračovat.',
    'ERR_DB_VERSION_FAILURE' => 'Nelze zkontrolovat verzi databáze.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Zadejte uživatelské jméno administrátora SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Zadejte heslo administrátora SuiteCRM. ',
    'LBL_EMPTY' => 'Prázdný',

    'ERR_CHECKSYS' => 'Při kontrole kompatibility byly zjištěny chyby. Aby vaše SuiteCRM instalace fungovala správně, podnikněte příslušné kroky k řešení problémů uvedených níže a buď stiskněte tlačítko "Znovu" nebo zkuste nainstalovat znovu.',
    'ERR_CHECKSYS_CALL_TIME' => 'Projítí času hovoru je povoleno (může být v php.ini zakázáno)',
    'ERR_CHECKSYS_CURL' => 'Nenalezeno: Plánovač SuiteCRM poběží s omezenou funkcionalitou.',
    'ERR_CHECKSYS_IMAP' => 'Nenalezeno: Příchozí emaily a Kampaně (Email) vyžadují IMAP knihovny. Ani jedno nebude funkční.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Nastavte to na ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M nebo vyšší ve vašem php.ini souboru.)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Varování: Nelze zapisovat',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Vaše verze PHP neni SuiteCRM podporována. Budete muset instalovat verzi, která je kompatibilní se SuiteCRM. Zkontrolujte, prosím, podporované PHP verze v tabulce kompatibility v Release Notes. Vaše verze je ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Vaše verze IIS není SuiteCRM podporována. Budete muset nainstalovat verzi, která je podporována aplikací SuiteCRM. Seznam podporovaných verzí IIS najdete v tabulce kompatibility v poznámkách k vydání. Vaše verze je ',
    'ERR_CHECKSYS_FASTCGI' => 'Zjistili jsme, že nepoužíváte FastCGI handler mapování pro PHP. Budete potřebovat instalovat/konfigurovat verzi, která je kompatibilní s aplikací SuiteCRM. Podporované verze naleznete v tabulce kompatibility v poznámkách o vydání. Více detailů na <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pro optimální běh pod IIS/FastCGI sapi, nastavte v souboru php.ini hodnotu fastcgi.logging na 0.',
    'LBL_DB_UNAVAILABLE' => 'Databáze není dostupná',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Podpora databáze nebyla nalezena. Ujistěte se, že máte potřebné ovladače pro jeden z podporovaných typů databází: MySQL nebo MS SQLServer. Možná budete muset zrušit komentář extension v souboru php. ini nebo rekompilovat správný binární soubor v závislosti na vaší verzi PHP. Jak aktivovat podporu databáze najdete v manuálu k PHP.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funkce spojené s XML Parser knihovnami, které jsou potřebné pro SuiteCRM aplikaci, nebyly nalezeny. Možná budete muset zrušit komentář extension v php.ini nebo rekompilovat správný binární soubor v závislosti na vaší verzi PHP. Více informací naleznete v manuálu k PHP.',
    'ERR_CHECKSYS_MBSTRING' => 'Funkce spojené s vícebajtovými řetězci v PHP rozšíření (mbstring), které jsou vyžadovány aplikací SuiteCRM nebyly nalezeny. <br/> <br/> Modul mbstring není ve výchozím nastavení PHP obecně povolen a musí být aktivován pomocí --enable-mbstring při kompilaci PHP binárky. Další informace ohledně povolení podpory mbstring naleznete v PHP manuálu.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable.',
    'ERR_CHECKSYS_CONFIG_NOT_FOUND' => 'Your config.php does not exist. This will be created on install.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. ',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. Please take the necessary steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed above are not writeable or are missing and cannot be created. Please take the necessary steps to make the directories writeable.",
    'ERR_CHECKSYS_LOGS_NOT_WRITABLE' => 'The Logs Directory is currently not writable',
    'ERR_CHECKSYS_CACHE_NOT_WRITABLE' => 'The Cache Directory is currently not writable',
    'ERR_CHECKSYS_EXTENSIONS_NOT_WRITABLE' => 'The Extensions Directory is currently not writable',
    'ERR_CHECKSYS_SECRETS_NOT_WRITABLE' => 'The config/secrets directory is currently not writable',
    'ERR_CHECKSYS_ENV_NOT_WRITABLE' => 'The .env file or the directory it is in is not writable.',
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Funkce spojené s JSON Parser knihovnami, které potřebuje aplikace SuiteCRM, nebyly nalezeny. Možná budete muset zrušit komentář rozšíření v soboru php.ini nebo rekompilovat správným binárním souborem, v závislosti na vaší verzi PHP. Více informací naleznete v manuálu PHP.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Přepsání konfigurace',
    'ERR_CHECKSYS_SAFE_MODE' => 'Bezpečný režim je zapnutý (možná chcete vypnout v php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Nenalezena podpora ZLib: SuiteCRM dosahuje obrovských výkonů se zlib kompresí.',
    'ERR_CHECKSYS_ZIP' => 'Podpora ZIP nenalezena: SuiteCRM vyžaduje podporu ZIP ke zpracování komprimovaných souborů.',
    'ERR_CHECKSYS_PCRE' => 'PCRE knihovna nenalezena: SuiteCRM potřebuje knihovnu PCRE ke zpracování regulérního maticování stylu Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Verze PCRE knihovny: SuiteCRM potřebuje knihovnu PCRE 7.0 nebo vyšší ke zpracování regulérního maticování stylu Perl.',
    'ERR_DB_ADMIN' => 'Zadané uživatelské jméno a/nebo heslo administrátora databáze není platné, nelze se připojit k databázi. Zadejte, prosím, platné uživatelské jméno a heslo. (Chyba: ',
    'ERR_DB_ADMIN_MSSQL' => 'Zadané uživatelské jméno a/nebo heslo administrátora databáze není platné, nelze se připojit k databázi. Zadejte, prosím, platné uživatelské jméno a heslo.',
    'ERR_DB_EXISTS_NOT' => 'Zadaná databáze neexistuje.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Databáze již existuje s konfiguračními daty. Chcete-li spustit instalaci s vybranou databází, spusťte instalaci znovu a zvolte: "Smazat a znovu vytvořit existující tabulky SuiteCRM?" Pro upgrade, použijte Průvodce upgrade v Admin konzoli. Přečtěte si dokumentaci týkající se upgrade umístěné <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> zde</a>.',
    'ERR_DB_EXISTS' => 'Zadaný název databáze již existuje -- nelze vytvořit jinou se stejným názvem.',
    'ERR_DB_EXISTS_PROCEED' => 'Zadaný název databáze již existuje. Můžete<br>1. se vrátit zpět a zadat nový název databáze <br>2. kliknout na další a pokračovat, ale všechny existující tabulky v této databázi budou zahozeny. <strong>To znamená, že vaše tabulky a data budou smazány.</strong>',
    'ERR_DB_HOSTNAME' => 'Host name nemůže být prázdné.',
    'ERR_DB_INVALID' => 'Zvolen nesprávný typ databáze.',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Database Connection Error: The provided database hostname, port, username, and/or password is invalid.',
    'ERR_DB_LOGIN_FAILURE' => 'Zadaný hostitel databáze, uživatelské jméno a/nebo heslo je neplatné a nelze navázat připojení k databázi. Zadejte prosím platného hostitele, uživatelské jméno a heslo',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Zadaný hostitel databáze, uživatelské jméno a/nebo heslo je neplatné a nelze navázat připojení k databázi. Zadejte prosím platného hostitele, uživatelské jméno a heslo',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Zadaný hostitel databáze, uživatelské jméno a/nebo heslo je neplatné a nelze navázat připojení k databázi. Zadejte prosím platného hostitele, uživatelské jméno a heslo',
    'ERR_DB_MYSQL_VERSION' => 'Vaše MySQL verze (%s) není podporována SuiteCRM. Budete muset nainstalovat verzi kompatibilní se SuiteCRM aplikací. Zkontrolujte, prosím, podporované verze MySQL v tabulce kompatibility v poznámkách k vydání.',
    'ERR_DB_NAME' => 'Název databáze nemůže být prázdný.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Název databáze nemůže obsahovat '\\', '/', nebo '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Název databáze nesmí začít číslem, '#', nebo '@' a nesmí obsahovat mezery, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', nebo '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Název databáze může obsahovat pouze alfanumerické znaky a symboly '#', '_' nebo '$'",
    'ERR_DB_PASSWORD' => 'Hesla pro správce databáze SuiteCRM nejsou shodná. Zadejte znovu stejné hesla do polí pro hesla.',
    'ERR_DB_PRIV_USER' => 'Zadejte jméno administrátora databáze. Tento uživatel je vyžadován pro počáteční připojení k databázi.',
    'ERR_DB_USER_EXISTS' => 'Uživatelské jméno pro uživatele databáze SuiteCRM již existuje -- nelze vytvořit jiného se stejným názvem. Zadejte nové uživatelské jméno.',
    'ERR_DB_USER' => 'Zadejte uživatelské jméno správce databáze SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Opravte prosím následující chyby dříve než budete pokračovat.',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Hesla pro správce databáze SuiteCRM nejsou shodná. Zadejte znovu stejné heslo do polí pro hesla.',
    'ERR_ERROR_GENERAL' => 'Následující chyby nalezeny.',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nelze smazat soubor: ',
    'ERR_LANG_MISSING_FILE' => 'Nelze najít soubor: ',
    'ERR_LANG_NO_LANG_FILE' => 'Nebyl nalezen žádný jazykový soubor uvnitř include/language: ',
    'ERR_LANG_UPLOAD_1' => 'Vyskytl se problém s nahráváním. Zkuste to prosím znovu.',
    'ERR_LANG_UPLOAD_2' => 'Jazykové balíčky musí být ZIP archivy.',
    'ERR_LANG_UPLOAD_3' => 'PHP nemohlo přesunout dočasný soubor do adresáře aktualizace.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Název log adresáře není platný.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Do log adresáře nelze zapisovat.',
    'ERR_NO_DIRECT_SCRIPT' => 'Skript nelze provézt přímo.',
    'ERR_NO_SINGLE_QUOTE' => 'Nelze použít jednoduchou uvozovku pro ',
    'ERR_PASSWORD_MISMATCH' => 'Hesla pro správce databáze SuiteCRM nejsou shodná. Zadejte znovu stejné heslo do polí pro hesla.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nelze zapisovat do souboru <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'V instalaci můžete pokračovat tím, že ručně vytvoříte config.php soubor a vložíte konfigurační informace uvedené níže do config.php souboru.   Nicméně, <bold>musíte </bold> vytvořit config.php soubor předtím než přejdete k další kroku.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Vytvořil jste soubor config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Varování: Do souboru config.php nelze zapisovat. Ujistěte se, prosím, že existuje.',
    'ERR_PERFORM_HTACCESS_1' => 'Nelze zapisovat do souboru ',
    'ERR_PERFORM_HTACCESS_2' => 'soubor.',
    'ERR_PERFORM_HTACCESS_3' => 'Pokud chcete zabezpečit váš log soubor před přístupností přes prohlížeč, vytvořte .htaccess soubor ve vašem log adresáři s řádkem:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nezjistili jsme připojení k internetu.</b> Až budete připojeni, navštivte prosím <a href="https://www.suitecrm.com/">https://www.suitecrm.com</a> a zaregistrujte se u SuiteCRM. Tím, že nám umožníte trochu poznat, jak vaše společnost plánuje používat SuiteCRM, si můžeme být jisti, že vždy správně pokryjeme vaše obchodní potřeby.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Poskytnutý session adresář není platným adresářem.',
    'ERR_SESSION_DIRECTORY' => 'Poskytnutý session adresář není zapisovatelný.',
    'ERR_SESSION_PATH' => 'Session cesta  je povinná pokud chcete zvolit vlastní.',
    'ERR_SI_NO_CONFIG' => 'Nevložil jste config_si.php do kořene dokumentu nebo jste nedefinoval $sugar_config_si v config.php',
    'ERR_SITE_GUID' => 'ID aplikace je povinné pokud chcete zvolit vlastní.',
    'ERROR_SPRITE_SUPPORT' => "V současné době nejsme schopni najít knihovnu GD, takže nebudete moci používat funkci CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Varování: Vaše konfigurace PHP by měla být změněna, aby umožnila nahrát soubory o velikosti alespoň 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Velikost souboru k nahrání',
    'ERR_URL_BLANK' => 'Zvolte základní URL pro instanci SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nelze nalézt instalační záznam od',
    'ERROR_MANIFEST_TYPE' => 'Manifest soubor musí být specifikován v souboru',
    'ERROR_PACKAGE_TYPE' => 'Manifest soubor specifikuje neznámý typ balíčku',
    'ERROR_VERSION_INCOMPATIBLE' => 'Nahraný soubor není kompatibilní s verzí SuiteCRM: ',

    'LBL_BACK' => 'Zpět',
    'LBL_CANCEL' => 'Zrušit',
    'LBL_ACCEPT' => 'Přijímám',
    'LBL_CHECKSYS_LEGACY_CACHE' => 'Writable Legacy Cache Sub-Directories',
    'LBL_CHECKSYS_CACHE' => 'Do podadresářů vyrovnávací paměti lze zapisovat',
    'LBL_CHECKSYS_EXTENSIONS' => 'Writable Extensions Directory',
    'LBL_CHECKSYS_SECRETS' => 'Writable Config/Secrets Directory',
    'LBL_CHECKSYS_LOGS' => 'Writable Log Directory',
    'LBL_DROP_DB_CONFIRM' => 'Zadaný název databáze již existuje. <br>Můžete buď: <br>1. kliknout na tlačítko Zrušit a zvolit nový název databáze, nebo <br>2. kliknout na tlačítko Přijmout a pokračovat. Dojde ke ztrátě všech existujících tabulek v databázi. <strong>To znamená, že všechny tabulky a již existující data budou zahozeny.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponenta',
    'LBL_CHECKSYS_CONFIG' => 'Do SuiteCRM konfiguračního souboru (config.php) lze zapisovat',
    'LBL_CHECKSYS_CURL' => 'cURL Modul',
    'LBL_CHECKSYS_CUSTOM' => 'Zapisovatelný vlastní adresář',
    'LBL_CHECKSYS_DATA' => 'Do datových podadresářů  lze zapisovat',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings modul',
    'LBL_CHECKSYS_MEM_OK' => 'OK (bez limitu)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (bez limitu)',
    'LBL_CHECKSYS_MEM' => 'Limit paměti PHP',
    'LBL_CHECKSYS_MODULE' => 'Do podadresářů a souborů modulů lze zapisovat.',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Není dostupné',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Umístění konfiguračního souboru PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (verze ',
    'LBL_CHECKSYS_PHPVER' => 'PHP verze',
    'LBL_CHECKSYS_IISVER' => 'Verze IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Znovu zkontrolovat',
    'LBL_CHECKSYS_STATUS' => 'Stav',
    'LBL_CHECKSYS_TITLE' => 'Přijmutí kontroly sytému',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB kompresní modul',
    'LBL_CHECKSYS_ZIP' => 'ZIP manipulační modul',
    'LBL_CHECKSYS_PCRE' => 'Knihovna PCRE',
    'LBL_CHECKSYS_ENV' => 'Writable .env',
    'LBL_CHECKSYS_FIX_FILES' => 'Před pokračováním, prosím, opravte následující soubory a adresáře:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Pred pokračováním, prosím, opravte následující adresáře modulu a obsažené soubory:',
    'LBL_CHECKSYS_UPLOAD' => 'Zapisovatelný adresář pro nahrávání',
    'LBL_CHECKSYS_INTL_EXTENSIONS' => 'Intl Exists in Extensions',
    'LBL_CHECKSYS_JSON_EXTENSIONS' => 'Json Exists in Extensions',
    'LBL_CHECKSYS_GD_EXTENSIONS' => 'GD Exists in Extensions',
    'LBL_CHECKSYS_OPENSSL_EXTENSIONS' => 'OpenSSL Exists in Extensions',
    'LBL_CHECKSYS_ZIP_EXTENSIONS' => 'Zip Exists in Extensions',
    'LBL_CHECKSYS_PDO_MYSQL_EXTENSIONS' => 'PDO MySQL Exists in Extensions',
    'LBL_CHECKSYS_CURL_EXTENSIONS' => 'cURL Exists in Extensions',
    'LBL_CHECKSYS_MBSTRING_EXTENSIONS' => 'MB Strings Exists in Extensions',
    'LBL_CHECKSYS_MYSQLI_EXTENSIONS' => 'MySQLi Exists in Extensions',
    'LBL_CHECKSYS_SOAP_EXTENSIONS' => 'Soap Exists in Extensions',
    'LBL_CHECKSYS_XML_EXTENSIONS' => 'XML Exists in Extensions',
    'LBL_CHECKSYS_IMAP_EXTENSIONS' => 'IMAP Exists in Extensions (Optional)',
    'LBL_CHECKSYS_LDAP_EXTENSIONS' => 'LDAP Exists in Extensions (Optional)',
    'LBL_PHP_CHECKS' => 'PHP CHECKS',
    'LBL_SERVER_CHECKS' => 'SERVER CHECKS',
    'LBL_PERMISSION_CHECKS' => 'PERMISSION CHECKS',
    'LBL_CHECK_FAILED' => 'Check Failed: ',
    'ERR_CHECKSYS_INTL' => 'The extension Intl is not installed, please contact your system administrator',
    'ERR_CHECKSYS_JSON' => 'The extension JSON is not enabled, please contact your system administrator.',
    'ERR_CHECKSYS_GD' => 'The extension GD is not enabled, please contact your system administrator.',
    'ERR_CHECKSYS_OPENSSL' => 'The extension OpenSSL is not enabled, please contact your system administrator.',
    'ERR_CHECKSYS_PDO_MYSQL' => 'The extension PDO MySQL is not enabled, please contact your system administrator.',
    'ERR_CHECKSYS_MYSQLI' => 'The extension MySQLi is not enabled, please contact your system administrator.',
    'ERR_CHECKSYS_SOAP' => 'The extension Soap is not enabled, please contact your system administrator.',
    'ERR_SUHOSIN' => 'Odesílání proudu je blokováno Suhosin, přidejte "upload" do suhosin.executor.include.whitelist (viz sugarcrm.log pro více informací)',
    'LBL_UNWRITABLE_SUB_DIR' => 'There are some sub directories that are unwritable. Please take the necessary steps to make the directories writeable ',
    'LBL_REFER_TO_LOGS' => 'There has been an issue in one of your pre-installation checks, please refer to the install.log',
    'LBL_NOT_A_VALID_SUITECRM_PAGE' => 'The SuiteCRM Title cannot be found. This is not a valid SuiteCRM Page.',
    'LBL_NOT_COOKIE_OR_TOKEN' => 'Cannot find cookies, no valid token found. Please refer to the install.log for more information.',
    'LBL_CURL_JSON_ERROR' => 'The result of the curl call to the graphql page was empty.',
    'LBL_UNABLE_TO_FIND_SYSTEM_CONFIGS' => 'Unable to retrieve System Configs on Graphql Page. Please refer to the install.log for more information.',
    'LBL_CURL_REQUEST_MAIN_PAGE' => 'Curl Request on Main Page',
    'LBL_CURL_REQUEST_API_PAGE' => 'Curl Request on Api',
    'LBL_ERROR_DETAILS' => 'Error Details',
    'LBL_ERROR' => 'Chyba:',
    'LBL_WARNING_DETAILS' => 'Warning Details',
    'LBL_WARNING' => 'Upozornění',
    'LBL_SYSTEM_CHECKS' => 'SYSTEM CHECKS',
    'LBL_CRON_INSTRUCTIONS_1' => 'In order to run SuiteCRM Schedulers, edit your web server users crontab file with this command:',
    'LBL_CRON_INSTRUCTIONS_2' => 'and add the following line to the crontab file:',
    'LBL_CRON_INSTRUCTIONS_3' => 'Měli byste to udělat pouze po dokončení instalace.',
    'LBL_CRON_CONFIGURATION' => 'CRON CONFIGURATION',
    'LBL_SETUP_CRONTAB' => 'Nastavení Crontabu',
    'LBL_ROUTE_ACCESS_CHECK' => 'ROUTE ACCESS CHECK',
    'LBL_PHP_MEM_1' => 'Your PHP Memory Limit is ',
    'LBL_PHP_MEM_2' => '. This has to be a minimum of ',
    'LBL_PHP_MEM_3' => 'M to continue.',
    'LBL_CLOSE' => 'Zavřít',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'bude vytvořeno',
    'LBL_CONFIRM_DB_TYPE' => 'Typ databáze',
    'LBL_CONFIRM_NOT' => 'ne',
    'LBL_CONFIRM_TITLE' => 'Potvrdit nastavení',
    'LBL_CONFIRM_WILL' => 'bude',
    'LBL_DBCONF_DB_DROP' => 'Smazat tabulky',
    'LBL_DBCONF_DB_NAME' => 'Název databáze',
    'LBL_DBCONF_DB_PORT' => 'Database Port',
    'LBL_DBCONF_DB_PASSWORD' => 'Heslo uživatele databáze SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Znovu zadejte heslo uživatele databáze SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Uživatel databáze SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Uživatel databáze SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Uživatelské jméno administrátora databáze',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Heslo administrátora databáze',
    'LBL_DBCONF_COLLATION' => 'Kolace',
    'LBL_DBCONF_CHARSET' => 'Znaková sada',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Pokročilá konfigurace databáze',
    'LBL_DBCONF_DEMO_DATA' => 'Naplnit databázi demo daty?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Vybrat ukázková data',
    'LBL_DBCONF_HOST_NAME' => 'Jmého počítače',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instance hostitele',
    'LBL_DBCONFIG_SECURITY' => 'Z bezpečnostních důvodů můžete zadat výhradního databázového uživatele pro připojení k databázi SuiteCRM. Tento uživatel musí být schopen zapisovat, aktualizovat a načíst data z databáze SuiteCRM, která bude vytvořena pro tuto instanci. Tento uživatel může být správce databáze uvedené výše, nebo můžete poskytnout informace o novém nebo existujícím uživateli databáze.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Zadat existujícího uživatele',
    'LBL_DBCONFIG_CREATE_DD' => 'Definovat uživatel pro vytvoření',
    'LBL_DBCONFIG_SAME_DD' => 'Stejné jako administrátor',
    'LBL_DBCONF_TITLE' => 'Konfigurace databáze',
    'LBL_DBCONF_TITLE_NAME' => 'Zadat název databáze',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Zadat informace o uživateli databáze',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Heslo',
    'LBL_DISABLED_DESCRIPTION_2' => 'Po provedení této změny, můžete kliknout na tlačítko "Start" a začít s instalací. <i>Po dokončení instalace, budete chtít změnit hodnotu \'installer_locked\' na \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION_3' => 'After this change has been made, please revisit / reload this page to continue.',
    'LBL_DISABLED_DESCRIPTION' => 'Instalátor již byl jednou spuštěn. Kvůli zabezpečení bylo zakázáno spustit jej opakovaně. Pokud jste si opravdu jisti, že jej chcete opět spustit, otevřete, prosím, soubor config.php a přidejte (nebo změňte) proměnnou \'installer_locked\' na \'false\'. Řádek by měl vypadat takto:',
    'LBL_DISABLED_HELP_1' => 'Pro nápovědu, prosím, navštivte SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'fórum podpory',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM is not installed. Entry point needs an installed SuiteCRM, please install first.',
    'LBL_DISABLED_TITLE_2' => 'Instalace SuiteCRM byla zakázána',
    'LBL_HELP' => 'Nápověda',
    'LBL_INSTALL' => 'Instalovat',
    'LBL_INSTALL_TYPE_TITLE' => 'Možnosti instalace',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Zvolit typ instalace',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Typická instalace</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Vlastní instalace</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Vyžaduje minimální množství informací. Doporučeno pro nové uživatele.',
    'LBL_INSTALL_TYPE_MSG3' => 'Poskytuje další možnosti nastavení během instalace. Většina z těchto možností jsou také k dispozici po instalaci v administraci. Doporučeno pro pokročilé uživatele.',
    'LBL_LANG_1' => 'Pro použití jiného jazyku v SuiteCRM než je výchozí jazyk (Angličtina), můžete teď nahrát a nainstalovat jazykový balíček. Bude také možné nahrát a nainstalovat jazykové sady přímo z aplikace SuiteCRM. Pokud chcete tento krok přeskočit, klepněte na tlačítko Další.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalovat',
    'LBL_LANG_BUTTON_REMOVE' => 'Odebrat',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Odinstalovat',
    'LBL_LANG_BUTTON_UPLOAD' => 'Nahrát',
    'LBL_LANG_NO_PACKS' => 'žádný',
    'LBL_LANG_PACK_INSTALLED' => 'Následující jazykové balíčky byly nainstalovány: ',
    'LBL_LANG_PACK_READY' => 'Následující jazykové balíčky jsou připraveny k instalaci: ',
    'LBL_LANG_SUCCESS' => 'Jazykový balíček byl úspěšně nahrán.',
    'LBL_LANG_TITLE' => 'Jazykový balíček',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instaluji nyní SuiteCRM. To může trvat i několik minut.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM is successfully installed.',
    'LBL_SILENT_INSTALL_FAILED' => 'SuiteCRM installation failed.',
    'LBL_LANG_UPLOAD' => 'Nahrát jazykový balíček',
    'LBL_LICENSE_ACCEPTANCE' => 'Přijmout licenční ujednání',
    'LBL_LICENSE_CHECKING' => 'Kontrola kompatibility systému.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kontrola prostředí',
    'LBL_LICENSE_CHKDB_HEADER' => 'Ověřování DB pověření.',
    'LBL_LICENSE_CHECK_PASSED' => 'Systém prošel kontrolou kompatibility.',
    'LBL_CREATE_CACHE' => 'Příprava instalace...',
    'LBL_LICENSE_REDIRECT' => 'Přesměrování v ',
    'LBL_LICENSE_I_ACCEPT' => 'Přijímám',
    'LBL_LICENSE_PRINTABLE' => 'Tisková verze',
    'LBL_PRINT_SUMM' => 'Tisk souhrnu',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM licence',
    'LBL_LICENSE' => 'LICENCE',

    'LBL_LOCALE_NAME_FIRST' => 'Karel',
    'LBL_LOCALE_NAME_LAST' => 'Novák',
    'LBL_LOCALE_NAME_SALUTATION' => 'Ph.D.',

    'LBL_ML_ACTION' => 'Akce',
    'LBL_ML_DESCRIPTION' => 'Popis',
    'LBL_ML_INSTALLED' => 'Datum instalace',
    'LBL_ML_NAME' => 'Název',
    'LBL_ML_PUBLISHED' => 'Datum zveřejnění',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Lze odinstalovat',
    'LBL_ML_VERSION' => 'Verze',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server ovladač pro PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extenze)',
    'LBL_NEXT' => 'Další',
    'LBL_NO' => 'Ne',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Nastavit heslo administrátora webu',
    'LBL_PERFORM_CONFIG_PHP' => 'Vytváření SuiteCRM konfiguračního souboru',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Vytváření databáze</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>ano</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Vytváření uživatelského jména a hesla ...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Vytváření výchozích SuiteCRM dat',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Vytváření výchozích úloh plánovače',
    'LBL_PERFORM_DEFAULT_USERS' => 'Vytváření výchozích uživatelů',
    'LBL_PERFORM_DEMO_DATA' => 'Plnění tabulek databáze demonstračními daty (může to chvíli trvat)',
    'LBL_PERFORM_DONE' => 'dokončeno<br>',
    'LBL_PERFORM_FINISH' => 'Ukončit',
    'LBL_PERFORM_OUTRO_1' => 'Nastavení SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' je nyní dokončen!',
    'LBL_PERFORM_OUTRO_3' => 'Čas celkem: ',
    'LBL_PERFORM_OUTRO_4' => ' vteřin.',
    'LBL_PERFORM_OUTRO_5' => 'Odhad obsazené paměti: ',
    'LBL_PERFORM_OUTRO_6' => ' bajtů.',
    'LBL_PERFORM_SUCCESS' => 'Úspěch',
    'LBL_PERFORM_TABLES' => 'Vytváření SuiteCRM aplikačních tabulek, audit tabulek, relačních metadat',
    'LBL_PERFORM_TITLE' => 'Spustit setup',
    'LBL_PRINT' => 'Tisk',
    'LBL_REG_CONF_1' => 'Vyplňte prosím krátký formulář níže, abyste mohli dostávat oznámení o produktu, novinky, speciální nabídky a speciální pozvánky na události SuiteCRM. Neprodáváme, nepronajímáme, nesdílíme ani jinak nepředáváme shromážděné informace třetím stranám.',
    'LBL_REG_CONF_3' => 'Děkujeme za registraci. Aby jste se přihlásili do SuiteCRM, klikněte na tlačítko &#034;Ukončit&#034;. Poprvé se musíte přihlásit jako uživatel admin a vložit heslo, které jste si zvolili v kroku 2.',
    'LBL_REG_TITLE' => 'Registrace',

    'LBL_REQUIRED' => '* Povinné pole',

    'LBL_SITECFG_ADMIN_Name' => 'Jméno administrátora SuiteCRM aplikace',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Vložte znova heslo administrátora SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Heslo administrátora SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID Aplikace',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Je-li vybráno, je nutné zadat ID aplikace pro přepsání automaticky generovaných ID. ID zajišťuje, že použití session jedné SuiteCRM instance není používána jinou instancí. Pokud máte cluster SuiteCRM instalací, všechny musejí sdílet stejné ID aplikace.',
    'LBL_SITECFG_CUSTOM_ID' => 'Uveďte vlastní ID aplikace',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Je-li vybráno, je třeba určit adresář protokolu k přepsání výchozího adresáře pro protokol SuiteCRM. Bez ohledu na umístění souboru s protokolem, přístup k protokolu prostřednictvím webového prohlížeče bude omezen na .htaccess přesměrování.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Využít zvolený Log adresář',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Je-li vybráno, je nutné zadat bezpečnou složku pro ukládání informací relace SuiteCRM. To slouží jako ochrana před zranitelností dat relace na sdílených serverech.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Využít zvolený Log adresář pro SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Před pokračováním, prosím, opravte následující chyby.</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log adresář',
    'LBL_SITECFG_SESSION_PATH' => 'Cest k Session adresáři<br>(nutné právo zápisu)',
    'LBL_SITECFG_SITE_SECURITY' => 'Vyberte možnosti zabezpečení',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Pokud je zaškrtnuto, systém bude pravidelně kontrolovat dostupnost aktualizované verze aplikace.',
    'LBL_SITECFG_SUITE_UP' => 'Automaticky kontrolovat aktualizace?',
    'LBL_SITECFG_TITLE' => 'Konfigurace webu',
    'LBL_SITECFG_TITLE2' => 'Identifikovat administrátorského uživatele',
    'LBL_SITECFG_SECURITY_TITLE' => 'Zabezpečení webu',
    'LBL_SITECFG_URL' => 'URL SuiteCRM instance',
    'LBL_SITECFG_ANONSTATS' => 'Zasílat anonymní informace o využití?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Je-li vybráno, SuiteCRM odešle <b>anonymní</b> statistiky o vaší instalaci do SuiteCRM Inc. pokaždé, když váš systém kontroluje nové verze. Tyto informace nám pomohou lépe pochopit, jak je aplikace používána, a povedou ke zlepšení produktu.',
    'LBL_SITECFG_URL_MSG' => 'Zadejte URL, které bude použito po instalaci pro přístup k instanci SuiteCRM. URL bude také použito jako základ URL stránek aplikace SuiteCRM. URL by mělo obsahovat webový server, nebo název počítače, nebo adresu IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Zadejte název pro váš systém. Tento název se zobrazí v titulním pruhu prohlížeče, když uživatelé navštíví SuiteCRM aplikaci.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Po instalaci budete muset použít účet administrátora SuiteCRM (výchozí uživatelské jméno = admin) pro přihlášení k instanci SuiteCRM. Zadejte heslo tohoto administrátora. Toto heslo lze změnit po prvotním přihlášení. Můžete také zadat jiné uživatelské jméno správce mimo poskytnuté výchozí hodnoty.',
    'LBL_SITECFG_COLLATION_MSG' => 'Vyberte nastavení řazení (třídění) pro váš systém. Toto nastavení vytvoří tabulky pro konkrétní jazyk, který používáte. V případě, že váš jazyk nevyžaduje zvláštní nastavení použijte výchozí hodnotu.',
    'LBL_SPRITE_SUPPORT' => 'Podpora Sprite',
    'LBL_SYSTEM_CREDS' => 'Systémová pověření',
    'LBL_SYSTEM_ENV' => 'Systémové prostředí',
    'LBL_SHOW_PASS' => 'Zobrazit hesla',
    'LBL_HIDE_PASS' => 'Skrýt hesla',
    'LBL_PRE_INSTALL_REQ' => 'Pre-Installation requirements',
    'LBL_HIDDEN' => '<i>(skryté)</i>',
    'LBL_STEP1' => 'Krok 1 ze 2 - Předinstalační požadavky',
    'LBL_STEP2' => 'Krok 2 ze 2 - Konfigurace',
    'LBL_STEP' => 'Krok',
    'LBL_TITLE_WELCOME' => 'Vítejte v SuiteCRM ',
    'LBL_WELCOME' => 'Vítejte na SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Jste připraveni k instalaci?',
    'REQUIRED_SYS_COMP' => 'Požadované systémové komponenty',
    'REQUIRED_SYS_COMP_MSG' =>
        'Než začnete, ujistěte se prosím, že máte podporované verze následujících systémových částí:<br>
                      <ul>
                      <li>Databáze/Systém správy databáze (příklady: MariaDB, MySQL nebo SQL Server)</li>
                      <li>Webový Server (Apache, IIS)</li>
                      </ul>
                     Nahlédněte do tabulky kompatibility v poznámkách k vydání
                      pro kompatibilní části systému pro verzi SuiteCRM, kterou instalujete<br>',
    'REQUIRED_SYS_CHK' => 'Počáteční kontrola systému',
    'REQUIRED_SYS_CHK_MSG' =>
        'Když zahájíte instalaci, provede se kontrola systému webového serveru, na kterém jsou umístěny soubory SuiteCRM, aby:
                      bylo jisté, že je systém správně nastaven a má všechny potřebné součásti
                      pro úspěšné dokončení instalace. <br><br>
                      Systém zkontroluje toto všechno: <br>
                      <ul>
                      <li><b>verze PHP</b> &#8211; musí být kompatibilní s aplikací</li>
                       <li><b>Proměnné relace</b> &#8211; musí pracovat správně</li>
                       <li><b>MB řetězce</b> &#8211; musí být nainstalované a povolené v php.ini</li>
                       <li><b>Podpora databáze</b> &#8211; musí být přítomna pro MariaDB, MySQL nebo SQL Server</li>
                       <li><b>Config.php</b> &#8211; musí existovat a musí mít příslušná oprávnění k zápisu</li>
                       <li>Následující SuiteCRM soubory musí být zapisovatelné: <ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Pokud se kontrola nezdaří, nebude možné pokračovat v instalaci.
                                  Zobrazí se chybová zpráva s vysvětlením, proč systém kontrolou neprošel.
                                   Po provedení potřebných změn můžete projít kontrolou systému znovu pro pokračování instalace. <br>',


    'REQUIRED_INSTALLTYPE' => 'Typická nebo vlastní instalace',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Po provedení kontroly systému, můžete zvolit typickou nebo vlastní instalaci. <br><br>Pro <b>typické</b> a <b>vlastní</b> instalace, je třeba znát následující: <br><ul><li><b>typ databáze</b>, která bude obsahovat data SuiteCRM <ul><li>typy kompatibilní databáze: MariaDB, MySQL nebo SQL Server. <br> <br></li></ul></li> <li><b>Název webového serveru</b> nebo počítače (hostitele) na kterém je umístěna databáze <ul><li>To může být <i>localhost</i>, pokud je databáze na místním počítači nebo je na stejném webovém serveru, nebo počítače, jako soubory SuiteCRM. <br> <br></li></ul></li> <li><b>Název databáze</b>, které chcete použít k uložení dat SuiteCRM</li> <ul><li>možná již máte existující databázi, která chcete použít. Pokud zadáte název existující databáze, dojde ke ztrátě dat tabulek v databázi během instalace při definování schématu databáze SuiteCRM.</li>                           <li>Pokud ještě nemáte databázi, název, který zadáte, bude použit pro nové databáze, která je vytvořena během instalace. <br><br></li></ul> <li><b>Uživatelské jméno a heslo správce databáze</b> <ul><li>správce databáze by měl být schopen vytvářet tabulky a uživatelů a zapisovat do databáze.</li> <li>Může být nutné kontaktovat správce databáze pro získání těchto informací, pokud se databáze nenachází v místním počítači, nebo pokud nejste správce databáze. <br><br></ul></li></li> <li><b>Uživatelské jméno a heslo SuiteCRM databáze</b></li> <ul><li>Uživatel může být správcem databáze, nebo může poskytnout jméno jiného existujícího databázového uživatele.</li>                           <li>Pokud chcete vytvořit nového uživatele databáze pro tento účel, musíte být schopen poskytnout nové uživatelské jméno a heslo během procesu instalace a uživatel bude vytvořen během instalace.</li>                         </ul></ul> <p>Pro <b>vlastní</b> nastavení, budete také potřebovat znát následující: <br><ul><li><b>adresy URL, které se budou používat pro přístup k SuiteCRM</b> po instalaci.                       Tato adresa URL by měla zahrnovat webový server nebo název počítače nebo adresu IP. <br><br></li> <li>[Volitelně] <b>Cestu k adresáři relace</b>, pokud chcete použít vlastní adresář relace SuiteCRM, s cílem zabránit zranitelnosti dat na sdílených serverech. <br> <br></li> <li>[Volitelně] <b>Cestu k adresáři protokolu</b> Pokud chcete přepsat výchozí adresář pro SuiteCRM log. <br> <br></li> <li>[Volitelně] <b>ID aplikace</b>, pokud si přejete přepsat automaticky generované ID,  if you wish to override the auto-generated ID that ensures that sessions of one SuiteCRM instance are not used by other instances. <br> <br></li> <li><b>Znaková sada</b> nejčastěji používané ve Vašem prostředí. <br> <br></li></ul> Podrobnější informace naleznete v instalační příručce.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Přečtěte si prosím následující důležité informace před pokračováním v instalaci. Informace vám pomůžou určit, zda jste nyní připraveni k instalaci aplikace.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Vyberte svůj jazyk</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Průvodce instalací',
    'LBL_WIZARD_TITLE' => 'Průvodce instalací SuiteCRM: ',
    'LBL_YES' => 'Ano',

    'LBL_PATCHES_TITLE' => 'Nainstalovat nejnovější záplaty',
    'LBL_MODULE_TITLE' => 'Stáhnout a nainstalovat jazykové balíčky',
    'LBL_PATCH_1' => 'Pokud chcete přeskočit tento krok, klikněte na Další.',
    'LBL_PATCH_TITLE' => 'Systémová záplata',
    'LBL_PATCH_READY' => 'Následující záplaty jsou připraveny k instalaci:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM spoléhá na PHP sessions k ukládání důležitých informace při připojení k tomuto webovému serveru. Vaše instalace PHP nemá Session správně nastaveny. <br><br>Běžným chybným nastavením je, že <b>\"session.save_path\"</b> neodkazuje na platný adresář. <br><br>Prosím spravte svou <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> PHP konfiguraci</a> v souboru php.ini umístěným níže.",
    'LBL_SESSION_ERR_TITLE' => 'Chyba konfigurace PHP sessions',
    'LBL_SYSTEM_NAME' => 'Systémový název',
    'LBL_COLLATION' => 'Nastavení shromáždění',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Zadejte název systému pro SuiteCRM instanci.',
    'LBL_PATCH_UPLOAD' => 'Vyberte soubor se záplatou ve svém počítači',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php verze 5 nebo vyšší je vyžadována.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimální požadovaná verze Php je 5.1.0. Doporučená verze Php je 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Tvoje verze PHP je ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Doporučená verze php je 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Tvoje verze Php není kompatibilní s SuiteCRM. Postupuj prosím dle požadovaných parametrů pro systém. Vaše verze je',
    'LBL_STREAM' => 'PHP umožňuje používat stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informace o novém účtu',
        'type' => 'systémový',
        'description' => 'Tato šablona je použita, když správce systému odešle uživateli nové heslo.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Zde je vaše uživatelské jméno a dočasné heslo:</p><p>Uživatelské jméno : $contact_user_user_name </p><p>Heslo : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Po přihlášení pomocí výše uvedeného hesla, můžete být vyzváni ke změně hesla dle vašeho výběru.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Tady je vaše uživatelské jméno a dočasné heslo:
Uživatelské jméno: $contact_user_user_name 
Heslo: $contact_user_user_hash

$config_site_url 

Po přihlášení pomocí výše uvedeného hesla, může být vyžadována změna hesla na nějaké dle vašeho vlastního výběru.',
        'name' => 'Email systémem generovaného hesla',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Obnovit heslo k účtu',
        'type' => 'systémový',
        'description' => "Tato šablona slouží k odesílání uživateli odkazu pro obnovení hesla.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Nedávno jste požádal na $contact_user_pwd_last_changed o obnovení hesla k vašemu účtu. </p><p>Klikněte na níže uvedený odkaz pro obnovu hesla:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Nedávno jste požádovali na $contact_user_pwd_last_changed o obnovení hesla k vašemu účtu.

Klikněte na odkaz níže pro obnovu hesla:

$contact_user_link_guid',
        'name' => 'Email pro obnovu hesla',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kód dvoufázového ověření',
        'type' => 'systémový',
        'description' => "Tato šablona se používá k odesílání kódu pro dvoufaktorové ověřování uživateli.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Kód dvoufaktorového ověření je <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kód dvoufázového ověření je $code.',
        'name' => 'Email dvoufaktorového ověření',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Odesílatel:',
    'LBL_FROM_ADDR' => 'Adresa odesílatele:',

    'LBL_WIZARD_SMTP_DESC' => 'Zadejte e-mailový účet, který bude použit k odeslání e-mailů, například upozornění na přiřazení a hesla nových uživatelů. Uživatelé budou dostávat e-maily ze SuiteCRM, odeslané ze zadaného e-mailového účtu.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si Vašeho poskytovatele e-mailu:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostatní',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifikace serveru SMTP',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použít SMTP autentifikaci?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Povolit SMTP přes SSL nebo TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mailová adresa:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail heslo:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Uživatelé mohou používat tento účet pro odchozí e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Je-li vybrána tato možnost, budou všichni uživatelé moci posílat e-maily pomocí stejného odchozího poštovníhí účtu, který slouží k odesílání upozornění systému a výstrah.  Pokud není vybrána tato možnost, uživatelé mohou nadále používat server pro odchozí poštu, ale musí zada vlastní přihlašovací údaje.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail heslo:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Vyměnit heslo:',
    'LBL_EXCHANGE_SMTPUSER' => 'Vyměnit uživatelské jméno:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port serveru Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Vyměnit server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP uživatelské jméno:',
    'LBL_MAIL_SMTPPASS' => 'SMTP heslo:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Brandování',
    'LBL_WIZARD_SYSTEM_DESC' => 'Zadejte jméno a logo vaší organizace pro brandování vašeho SuiteCRM systému.',
    'SYSTEM_NAME_WIZARD' => 'Název:',
    'SYSTEM_NAME_HELP' => 'To je název, který se zobrazí v záhlaví prohlížeče.',
    'NEW_LOGO' => 'Vybrat logo:',
    'NEW_LOGO_HELP' => 'Formát obrazového souboru může být buď Png nebo jpg. Maximální výška je 170px, a maximální šířka je 450px. Jakýkoliv větší obrázek v libovolném směru bude zmenšen na tyto maximální rozměry.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Nahrát',
    'CURRENT_LOGO' => 'Nyní používané logo',
    'CURRENT_LOGO_HELP' => 'Toto logo je zobrazeno uprostřed přihlašovací obrazovky do SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Výběr scénáře',
    'LBL_WIZARD_SCENARIO_DESC' => 'Toto umožňuje přizpůsobení zobrazených modulů na základě vašich požadavků. Každý z modulů lze povolit po instalaci pomocí stránky administrace.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'V současnosti nejsou nastavené žádné scénáře v konfiguračním souboru (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Lokální nastavení systému',
    'LBL_WIZARD_LOCALE_DESC' => 'Určete, jak chcete data v SuiteCRM systému zobrazit z ohledem na Vaší geografickou polohu. Zde nastavené nastavení bude použité jako výchozí. Uživatelé si mohou vytvořit vlastní nastavení.',
    'LBL_DATE_FORMAT' => 'Formát datumu:',
    'LBL_TIME_FORMAT' => 'Formát času:',
    'LBL_TIMEZONE' => 'Časové pásmo:',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_CURRENCY' => 'Měna:',
    'LBL_CURRENCY_SYMBOL' => 'Symbol měny:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 kód měny:',
    'LBL_NUMBER_GROUPING_SEP' => 'oddělovač tisíců:',
    'LBL_DECIMAL_SEP' => 'Desetinný oddělovač:',
    'LBL_NAME_FORMAT' => 'Formát jména:',
    'UPLOAD_LOGO' => 'Počkejte, prosím, nahrávání loga...',
    'ERR_UPLOAD_FILETYPE' => 'Typ souboru není povolen, nahrajte prosím jpeg nebo png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Došlo k neznámé chybě při nahrávání souboru.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Nahrávaný soubor přesahuje upload_max_filesize direktivu v  php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Nahrávaný soubor přesahuje MAX_FILE_SIZE direktivu v  HTML formuláři.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Soubor byl nahrán pouze částečně.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Nebyl nahrán soubor.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Chybí dočasný adresář.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Chyba zápisu na disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Rozšíření PHP zastavilo nahrání souboru. PHP neposkytuje způsob, jak zjistit, které rozšíření způsobilo zastavení nahrávání souboru.',

    'LBL_INSTALL_PROCESS' => 'Instalovat...',

    'LBL_EMAIL_ADDRESS' => 'Emailová adresa:',
    'ERR_ADMIN_EMAIL' => 'E-mailová adresa administrátora není správná.',
    'ERR_SITE_URL' => 'Je požadováno URL webu.',

    'STAT_CONFIGURATION' => 'Konfigurace vztahů...',
    'STAT_CREATE_DB' => 'Vytvořit databázi...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Vytvořit výchozí nastavení...',
    'STAT_INSTALL_FINISH' => 'Instalace dokončena...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Proces instalace dokončen, <a href="%s"> Přihlaste se prosím...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Nejdříve prosím odsouhlaste licenci',

    'LBL_MORE_OPTIONS_TITLE' => 'Více možností',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Chyba databáze',
    'LBL_OLD_PHP' => 'Zjištěna stará verze PHP!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Jsem obeznámen s riziky a přeji si pokračovat.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Uživatel',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Název databáze',
    'LBL_DBCONFIG_MSG3' => 'Název databáze, která bude obsahovat data SuiteCRM instance, kterou se chystáte nainstalovat.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Jmého počítače',
    'LBL_DBCONFIG_MSG2' => 'Název web serveru nebo počítače (host), kde je umístěna databáze (např. www.mojedomena.cz). Při lokální instalaci doporučujeme kvůli výkonu uvést spíše \'localhost\' než \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'V databázi SuiteCRM je nutné nastavit uživatelské jméno a heslo správce databáze, který může vytvářet databázové tabulky a uživatele a který může zapisovat do databáze.',
    'LBL_SYS_CHECK_WARNING' => 'Ignore System Check Warnings',
    'LBL_PROCEED' => 'PROCEED',
    'LBL_RECHECK' => 'RECHECK',
    'LBL_CONFIG' => 'CONFIGURATION',
    'LBL_VALIDATION_ERRORS' => 'Došlo k chybám při ověření, nelze provést akci.'
);
