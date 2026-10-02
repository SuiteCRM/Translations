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
 * this program; if not, see https://www.gnu.org/licenses or write to the Free
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
    'LBL_BASIC' => 'Grundläggande',
    'LBL_BASIC_SEARCH' => 'Snabbfilter',
    'LBL_ADVANCED_SEARCH' => 'Avancerat filter',
    'LBL_BASIC_TYPE' => 'Grundläggande typ',
    'LBL_ADVANCED_TYPE' => 'Avancerad typ',
    'LBL_SYSOPTS_2' => 'Vilken typ av databas kommer att användas för SuiteCRM instansen du tänker installera?',
    'LBL_SYSOPTS_DB' => 'Ange databastyp',
    'LBL_SYSOPTS_DB_TITLE' => 'Databastyp',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Åtgärda följande fel innan du fortsätter:',
    'ERR_DB_VERSION_FAILURE' => 'Det går inte att kontrollera databasversion.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Ange användarnman för SuiteCRM administratörs användaren.',
    'ERR_ADMIN_PASS_BLANK' => 'Ange lösenord för SuiteCRM admin-användaren. ',
    'LBL_EMPTY' => 'Tom',

    'ERR_CHECKSYS' => 'Fel har upptäckts under kompatibilitetskontrollen. För att SuiteCRM ska fungera korrekt, vänligen vidta lämpliga åtgärder gällande de punkter som anges nedan, eller försök installera igen.',
    'ERR_CHECKSYS_CALL_TIME' => 'Inställningen `allow_call_time_pass_reference` är aktiverad (den ska vara avaktiverad i php.ini)',
    'ERR_CHECKSYS_CURL' => 'Hittades inte: SuiteCRM Schemaläggaren körs med begränsad funktionalitet.',
    'ERR_CHECKSYS_IMAP' => 'Hittades inte: IngåendeEpost och kampanjer (epost) kräver IMAP-biblioteket. Ingen av tidigare nämnda kommer att fungera.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Ställ värdet till ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M eller större i din php.ini-fil)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Varning: Inte skrivbar',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Din version av PHP stöds inte av SuiteCRM. Du måste installera en version som är kompatibel med SuiteCRM applikationen. Var god se kompatibilitets matrisen i "Release Notes" för att hitta de PHP versioner som stöds. Din version är',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Din version av IIS stöds inte av SuiteCRM. Kontrollera kompatibilitets matrisen i "Release notes" för vilka versioner som stöds.',
    'ERR_CHECKSYS_FASTCGI' => 'Vi har upptäckt att du inte använder en FastCGI-hanterarmappning för PHP. Du måste installera eller konfigurera en version som är kompatibel med SuiteCRM. Information om versioner som stöds finns i kompatibilitetsmatrisen i versionsinformationen. Mer information finns på <a href="https://php.iis.net/" target="_blank">https://php.iis.net/</a> ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'För bästa resultat med IIS/FastCGI SAPI anger du fastcgi.logging till 0 i php.ini-filen.',
    'LBL_DB_UNAVAILABLE' => 'Databasen ej tillgänglig',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Databasen hittades inte.  Vänligen kontrollera att du har nödvändiga drivrutiner för en av följande databastyper: MySQL eller MS SQLServer.  Du kan behöva avkommentera tillägget i php.ini-filen, eller kompilera om med korrekta binär filen, beroende på PHP-version.  Se din PHP Manual för mer information om hur du aktiverar databas stöd.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funktioner som är associerade med XML Parser biblioteket som behövs av programmet SuiteCRM hittades inte.  Du kan behöva avkommentera tillägget i php.ini-filen, eller kompilera om med den korrekta binärfilen, beroende på PHP-version.  Se din PHP Manual för mer information.',
    'ERR_CHECKSYS_MBSTRING' => 'Funktioner för PHP-tillägget Multibyte Strings (mbstring), som SuiteCRM behöver, hittades inte. Modulen mbstring är normalt inte aktiverad som standard i PHP och måste aktiveras med --enable-mbstring när PHP-binären byggs. I PHP-handboken finns mer information om hur mbstring-stöd aktiveras.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Konfigurationsfilen finns men är inte skrivbar. Gör filen skrivbar.',
    'ERR_CHECKSYS_CONFIG_NOT_FOUND' => 'Filen config.php finns inte. Den skapas vid installationen.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Filen för åsidosatt konfiguration finns men är inte skrivbar. Gör filen skrivbar. ',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Katalogen Custom finns men är inte skrivbar. Gör katalogen skrivbar.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Filerna eller katalogerna ovan är inte skrivbara, saknas eller kan inte skapas. Gör katalogerna skrivbara.",
    'ERR_CHECKSYS_LOGS_NOT_WRITABLE' => 'Katalogen Logs är inte skrivbar',
    'ERR_CHECKSYS_CACHE_NOT_WRITABLE' => 'Katalogen Cache är inte skrivbar',
    'ERR_CHECKSYS_EXTENSIONS_NOT_WRITABLE' => 'Katalogen Extensions är inte skrivbar',
    'ERR_CHECKSYS_ROOT_NOT_WRITABLE' => 'Rotkatalogen är inte skrivbar. Du kan inte fortsätta installationen.',
    'ERR_CHECKSYS_SECRETS_NOT_WRITABLE' => 'Katalogen config/secrets är inte skrivbar',
    'ERR_CHECKSYS_ENV_NOT_WRITABLE' => 'Filen .env eller katalogen där den finns är inte skrivbar.',
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Funktioner för JSON-tolkbibliotek som SuiteCRM behöver hittades inte. Beroende på PHP-version kan du behöva avkommentera tillägget i php.ini-filen eller kompilera om med rätt binärfil. I PHP-handboken finns mer information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Åsidosätta Config',
    'ERR_CHECKSYS_SAFE_MODE' => 'Felsäkert läge är på (On) (du kanske vill inaktivera det i php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib stöd hittades inte: SuiteCRM har enorma prestandafördelar med zlib-komprimering.',
    'ERR_CHECKSYS_ZIP' => 'ZIP stöd hittades inte: SuiteCRM behöver ZIP stöd för att bearbeta komprimerade filer.',
    'ERR_CHECKSYS_PCRE' => 'PCRE biblioteket hittades inte: SuiteCRM behöver PCRE biblioteket för att bearbeta Perl liknande syntax för reguljärt matchning.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE-biblioteksversion: SuiteCRM behöver PCRE-bibliotek 7.0 eller senare för att bearbeta Perl-formatet för regular expression mönster matchning.',
    'ERR_DB_ADMIN' => 'Felaktigt användarnamn och/eller lösenordet för databas administratören är angivet, en anslutning till databasen kunde inte uprättas. Ange ett giltigt användarnamn och/eller lösenord.  (Fel: ',
    'ERR_DB_ADMIN_MSSQL' => 'Felaktigt användarnamn och/eller lösenordet för databas administratören är angivet, en anslutning till databasen kunde inte uprättas. Ange ett giltigt användarnamn och/eller lösenord.',
    'ERR_DB_EXISTS_NOT' => 'Den angivna databasen finns inte.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Databasen finns redan med konfigurationsuppgifter. Om du vill köra en installation med den valda databasen, vänligen kör installationen igen och välj: "Släpp och återskapa befintliga SuiteCRM-tabeller?". Uppgradera genom att använda guiden Uppgradera i Admin Console. Läs Uppgraderingsdokumentationen som finns <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> här</a>.',
    'ERR_DB_EXISTS' => 'Detta databasnamnet finns redan -- det går inte att skapa en till med samma namn.',
    'ERR_DB_EXISTS_PROCEED' => 'Det angivna databasnamnet finns redan. Du kan <br> 1. tryck på bakåtknappen och välj ett nytt databasnamn <br> 2. klicka på nästa och fortsätt men alla befintliga tabeller i den här databasen kommer att släppas. <strong> Det betyder att dina tabeller och data kommer att raderas. </strong>',
    'ERR_DB_HOSTNAME' => 'Värdnamnet kan inte vara tomt.',
    'ERR_DB_INVALID' => 'Ogiltig databastyp valt.',
    'ERR_DB_LOGIN_FAILURE_SHORT' => 'Databasanslutningsfel: det angivna databasvärdnamnet, porten, användarnamnet eller lösenordet är ogiltigt.',
    'ERR_DB_LOGIN_FAILURE' => 'Den angivna databasvärden, användarnamnet och / eller lösenordet är ogiltigt, och en anslutning till databasen kunde inte etableras. Ange en giltig värd, användarnamn och lösenord',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Den angivna databasvärden, användarnamnet och / eller lösenordet är ogiltigt, och en anslutning till databasen kunde inte etableras. Ange en giltig värd, användarnamn och lösenord',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Den angivna databasvärden, användarnamnet och / eller lösenordet är ogiltigt, och en anslutning till databasen kunde inte etableras. Ange en giltig värd, användarnamn och lösenord',
    'ERR_DB_MYSQL_VERSION' => 'Din MySQL-version (%s) stöds inte av SuiteCRM. Du måste installera en version som är kompatibel med SuiteCRM. Information om MySQL-versioner som stöds finns i kompatibilitetsmatrisen i versionsinformationen.',
    'ERR_DB_NAME' => 'Databasnamnet får inte vara tomt.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Databasnamnet kan inte innehålla ' \\', '/', eller '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Databasnamnet kan inte innehålla  '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', eller '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Databasnamnet kan endast bestå av alfanumeriska tecken och symbolerna '#', '_' eller '$'",
    'ERR_DB_PASSWORD' => 'Lösenorden för SuiteCRM databasadministratören matchar inte.  Ange samma lösenord i båda lösenords fälten.',
    'ERR_DB_PRIV_USER' => 'Ange ett administratör användarnamn till databasen, för att skapa anslutningen till databasen.',
    'ERR_DB_USER_EXISTS' => 'Användarnamnet ni försökte skapa finns redan. Vänligen ange ett nytt användarnamn till SuiteCRM databasen.',
    'ERR_DB_USER' => 'Ange ett användarnamn för SuiteCRM-databasadministratören.',
    'ERR_DBCONF_VALIDATION' => 'Åtgärda följande fel innan du fortsätter:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Lösenorden för SuiteCRM-databasanvändaren stämmer inte överens. Ange samma lösenord igen i lösenordsfälten.',
    'ERR_ERROR_GENERAL' => 'Följande fel påträffades:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Kan inte ta bort fil: ',
    'ERR_LANG_MISSING_FILE' => 'Kan inte hitta fil: ',
    'ERR_LANG_NO_LANG_FILE' => 'Ingen språkpaketfil hittades i include/language i: ',
    'ERR_LANG_UPLOAD_1' => 'Ett fel uppstod vid uppladdningen. Försök igen.',
    'ERR_LANG_UPLOAD_2' => 'Språkpaket måste vara ZIP-arkiv.',
    'ERR_LANG_UPLOAD_3' => 'PHP kunde inte flytta den tillfälliga filen till uppgraderingskatalogen.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Loggkatalog som tillhandahålls är inte en giltig katalog.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Loggkatalog som tillhandahålls är inte en skrivbar katalog.',
    'ERR_NO_DIRECT_SCRIPT' => 'Det gick inte att bearbeta skriptet direkt.',
    'ERR_NO_SINGLE_QUOTE' => 'Enkelt citattecken kan inte användas för ',
    'ERR_PASSWORD_MISMATCH' => 'Lösenorden som tillhandahålls för SuiteCRM admin-användare matchar inte. Ange samma lösenord igen i lösenordsfälten.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Kan inte skriva till <span class=stop>config.php</span> filen.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Du kan fortsätta installationen genom att manuellt skapa config.php filen och klistra in den konfiguration som anges nedan i config.php filen. Men du <strong>måste</strong> skapa config.php filen innan du fortsätter till nästa steg.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Kom du ihåg att skapa config.php filen?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Varning: Kunde inte skriva till config.php-fil.  Kontrollera att den finns.',
    'ERR_PERFORM_HTACCESS_1' => 'Kan inte skriva till ',
    'ERR_PERFORM_HTACCESS_2' => ' filen.',
    'ERR_PERFORM_HTACCESS_3' => 'Om du vill säkra din loggfil från att vara tillgänglig via webbläsare, skapa en .htaccess fil i loggkatalogen med raden:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Det gick inte att upptäcka någon internetanslutning.</b> När du har en anslutning kan du besöka <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> för att registrera SuiteCRM. Genom att berätta lite om hur företaget planerar att använda SuiteCRM hjälper du oss att fortsätta leverera rätt program för era behov.',
    'ERR_PERFORM_NO_TCPIP_SIMPLE' => 'Det gick inte att upptäcka någon internetanslutning.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Sessionskatalogen som tillhandahålls är inte en giltig katalog.',
    'ERR_SESSION_DIRECTORY' => 'Sessionskatalogen som tillhandahålls är inte en skrivbar katalog.',
    'ERR_SESSION_PATH' => 'Sessionssökväg krävs om du vill ange din egen.',
    'ERR_SI_NO_CONFIG' => 'Du inkluderade inte config_si.php i dokumentroten eller du har inte definierat $sugar_config_si i config.php',
    'ERR_SITE_GUID' => 'Program-ID är obligatorisk om du vill ange din egen.',
    'ERROR_SPRITE_SUPPORT' => "För närvarande kan vi inte hitta GD-biblioteket, därför kan du inte använda CSS Sprite-funktionen.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'PHP-konfigurationen bör ändras så att filer på minst 6 MB kan laddas upp.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Uppladdningsstorlek Filer',
    'ERR_URL_BLANK' => 'Ange bas-URL för SuiteCRM-instansen.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Kunde inte hitta installationsposten för',
    'ERROR_MANIFEST_TYPE' => 'Manifestfilen måste ange pakettypen.',
    'ERROR_PACKAGE_TYPE' => 'Manifestfilen anger en ej igenkänningsbar pakettyp.',
    'ERROR_VERSION_INCOMPATIBLE' => 'Den uppladdade filen är inte komptible med den här versionen av SuiteCRM Suite: ',

    'LBL_BACK' => 'Tillbaka',
    'LBL_CANCEL' => 'Avbryt',
    'LBL_ACCEPT' => 'Jag accepterar',
    'LBL_CHECKSYS_LEGACY_CACHE' => 'Skrivbara underkataloger för äldre cache',
    'LBL_CHECKSYS_CACHE' => 'Skrivbara Cache-underkataloger',
    'LBL_CHECKSYS_EXTENSIONS' => 'Skrivbar tilläggskatalog',
    'LBL_CHECKSYS_SECRETS' => 'Skrivbar katalog för config/secrets',
    'LBL_CHECKSYS_LOGS' => 'Skrivbar loggkatalog',
    'LBL_CHECKSYS_ROOT' => 'Skrivbar rotkatalog',
    'LBL_DROP_DB_CONFIRM' => 'Det angivna databasnamnet finns redan.<br>Du kan antingen:<br>1. Klicka på Avbryt och välj ett nytt databasnamn, eller<br>2. Klicka på Acceptera-knappen och fortsätt. Alla befintliga tabeller i databasen kommer att släppas. <strong>Detta innebär att alla tabeller och befintliga data kommer att blåses bort.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponent',
    'LBL_CHECKSYS_CONFIG' => 'Skrivbar SuiteCRM konfigurationsfil (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Modul',
    'LBL_CHECKSYS_CUSTOM' => 'Skrivbar Anpassad Katalog',
    'LBL_CHECKSYS_DATA' => 'Underkataloger För Skrivbara Data',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Sträng Modul',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Ingen begränsning)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Obegränsat)',
    'LBL_CHECKSYS_MEM' => 'PHP-minnesgräns',
    'LBL_CHECKSYS_MODULE' => 'Skrivbara underkataloger och filer för moduler',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Inte Tillgänglig',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Platsen för PHP-konfigurationsfilen (php.ini)',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP-version',
    'LBL_CHECKSYS_IISVER' => 'IIS-version',
    'LBL_CHECKSYS_JSON' => 'JSON-tolkning',
    'LBL_CHECKSYS_RECHECK' => 'Kontrollera igen',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'Bekräftelse av systemkontroll',
    'LBL_CHECKSYS_XML' => 'XML-parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Komprimerings Modul',
    'LBL_CHECKSYS_ZIP' => 'ZIP-Hanteringsmodul',
    'LBL_CHECKSYS_PCRE' => 'PCRE-bibliotek',
    'LBL_CHECKSYS_ENV' => 'Skrivbar .env',
    'LBL_CHECKSYS_FIX_FILES' => 'Fixa följande filer eller kataloger innan du fortsätter:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Fixa följande modulkataloger och filerna under dem inann du fortsätter:',
    'LBL_CHECKSYS_UPLOAD' => 'Skrivbar Uppladdningskatalog',
    'LBL_CHECKSYS_INTL_EXTENSIONS' => 'Intl finns i tilläggen',
    'LBL_CHECKSYS_JSON_EXTENSIONS' => 'Json finns i tilläggen',
    'LBL_CHECKSYS_GD_EXTENSIONS' => 'GD finns i tilläggen',
    'LBL_CHECKSYS_OPENSSL_EXTENSIONS' => 'OpenSSL finns i tilläggen',
    'LBL_CHECKSYS_ZIP_EXTENSIONS' => 'Zip finns i tilläggen',
    'LBL_CHECKSYS_PDO_MYSQL_EXTENSIONS' => 'PDO MySQL finns i tilläggen',
    'LBL_CHECKSYS_CURL_EXTENSIONS' => 'cURL finns i tilläggen',
    'LBL_CHECKSYS_MBSTRING_EXTENSIONS' => 'MB Strings finns i tilläggen',
    'LBL_CHECKSYS_MYSQLI_EXTENSIONS' => 'MySQLi finns i tilläggen',
    'LBL_CHECKSYS_SOAP_EXTENSIONS' => 'Soap finns i tilläggen',
    'LBL_CHECKSYS_XML_EXTENSIONS' => 'XML finns i tilläggen',
    'LBL_CHECKSYS_IMAP_EXTENSIONS' => 'IMAP finns i tilläggen (valfritt)',
    'LBL_CHECKSYS_LDAP_EXTENSIONS' => 'LDAP finns i tilläggen (valfritt)',
    'LBL_PHP_CHECKS' => 'PHP-KONTROLLER',
    'LBL_SERVER_CHECKS' => 'SERVERKONTROLLER',
    'LBL_PERMISSION_CHECKS' => 'BEHÖRIGHETSKONTROLLER',
    'LBL_CHECK_FAILED' => 'Kontroll misslyckades: ',
    'ERR_CHECKSYS_INTL' => 'Tillägget Intl är inte installerat. Kontakta systemadministratören',
    'ERR_CHECKSYS_JSON' => 'Tillägget JSON är inte aktiverat. Kontakta systemadministratören.',
    'ERR_CHECKSYS_GD' => 'Tillägget GD är inte aktiverat. Kontakta systemadministratören.',
    'ERR_CHECKSYS_OPENSSL' => 'Tillägget OpenSSL är inte aktiverat. Kontakta systemadministratören.',
    'ERR_CHECKSYS_PDO_MYSQL' => 'Tillägget PDO MySQL är inte aktiverat. Kontakta systemadministratören.',
    'ERR_CHECKSYS_MYSQLI' => 'Tillägget MySQLi är inte aktiverat. Kontakta systemadministratören.',
    'ERR_CHECKSYS_SOAP' => 'Tillägget Soap är inte aktiverat. Kontakta systemadministratören.',
    'ERR_SUHOSIN' => 'Uppladdningsströmmen blockeras av Suhosin. Lägg till "upload" i suhosin.executor.include.whitelist (mer information finns i suitecrm.log)',
    'LBL_UNWRITABLE_SUB_DIR' => 'Det finns underkataloger som inte är skrivbara. Gör katalogerna skrivbara ',
    'LBL_REFER_TO_LOGS' => 'Ett problem uppstod i en av förinstallationskontrollerna. Se logs/install.log',
    'LBL_NOT_A_VALID_SUITECRM_PAGE' => 'SuiteCRM-titeln kan inte hittas. Det här är inte en giltig SuiteCRM-sida.',
    'LBL_NOT_COOKIE_OR_TOKEN' => 'Det går inte att hitta cookies och ingen giltig token hittades. Mer information finns i logs/install.log.',
    'LBL_CURL_JSON_ERROR' => 'Resultatet av cURL-anropet till GraphQL-sidan var tomt.',
    'LBL_UNABLE_TO_FIND_SYSTEM_CONFIGS' => 'Det gick inte att hämta systemkonfigurationer på GraphQL-sidan. Mer information finns i logs/install.log.',
    'LBL_CURL_REQUEST_MAIN_PAGE' => 'Begäran med cURL på huvudsidan',
    'LBL_CURL_REQUEST_API_PAGE' => 'Begäran med cURL till API:t',
    'LBL_ERROR_DETAILS' => 'Felinformation',
    'LBL_ERROR' => 'Fel',
    'LBL_WARNING_DETAILS' => 'Varningsdetaljer',
    'LBL_WARNING' => 'Varning',
    'LBL_SYSTEM_CHECKS' => 'SYSTEMKONTROLLER',
    'LBL_CRON_INSTRUCTIONS_1' => 'För att köra SuiteCRM-schemaläggarna redigerar du crontab-filen för webbserveranvändaren med följande kommando:',
    'LBL_CRON_INSTRUCTIONS_2' => 'och lägger till följande rad i crontab-filen:',
    'LBL_CRON_INSTRUCTIONS_3' => 'Detta bör endast göras när installationen är klar.',
    'LBL_CRON_CONFIGURATION' => 'CRON-KONFIGURATION',
    'LBL_SETUP_CRONTAB' => 'Konfigurera crontab',
    'LBL_ROUTE_ACCESS_CHECK' => 'KONTROLL AV RUTTÅTKOMST',
    'LBL_PHP_MEM_1' => 'Din PHP-minnesgräns är ',
    'LBL_PHP_MEM_2' => '. Den måste vara minst ',
    'LBL_PHP_MEM_3' => 'M för att fortsätta.',
    'LBL_CLOSE' => 'Stäng',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'skapas',
    'LBL_CONFIRM_DB_TYPE' => 'Databastyp',
    'LBL_CONFIRM_NOT' => 'inte',
    'LBL_CONFIRM_TITLE' => 'Bekräfta inställningar',
    'LBL_CONFIRM_WILL' => 'kommer',
    'LBL_DBCONF_DB_DROP' => 'Droppa Tabeller',
    'LBL_DBCONF_DB_NAME' => 'Databasnamn',
    'LBL_DBCONF_DB_PORT' => 'Databasport',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM-databasanvändarlösenord',
    'LBL_DBCONF_DB_PASSWORD2' => 'Skriv om SuiteCRM Databas Användarlösenord',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM-databasanvändare',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM-databasanvändare',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Databas Administratör Användarnamn',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Databas Administratör Lösenord',
    'LBL_DBCONF_COLLATION' => 'Kollation',
    'LBL_DBCONF_CHARSET' => 'Teckenuppsättning',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Avancerad Databas Konfiguration',
    'LBL_DBCONF_DEMO_DATA' => 'Befolka databasen med demodata?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Välj demodata',
    'LBL_DBCONF_HOST_NAME' => 'Värdnamn',
    'LBL_DBCONF_HOST_INSTANCE' => 'Värd-instans',
    'LBL_DBCONFIG_SECURITY' => 'För säkerhetsändamål kan du ange en exklusiv databasanvändare som ska ansluta till SuiteCRM-databasen. Den här användaren måste kunna skriva, uppdatera och hämta data i SuiteCRM-databasen som skapas för den här instansen. Den här användaren kan vara databasadministratören som anges ovan, eller du kan tillhandahålla ny eller befintlig databas användarinformation.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Ange existerande användare',
    'LBL_DBCONFIG_CREATE_DD' => 'Ange användare att skapas',
    'LBL_DBCONFIG_SAME_DD' => 'Samma som Admin Användare',
    'LBL_DBCONF_TITLE' => 'Databaskonfiguration',
    'LBL_DBCONF_TITLE_NAME' => 'Ange databasnamn',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Ange Databas Användare Information',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Lösenord',
    'LBL_DISABLED_DESCRIPTION_2' => 'När ändringen har gjorts kan du klicka på knappen "Start" nedan för att påbörja installationen. När installationen är klar bör du ändra värdet för \'installer_locked\' till \'true\'',
    'LBL_DISABLED_DESCRIPTION_3' => 'När ändringen har gjorts går du tillbaka till eller läser in sidan igen för att fortsätta.',
    'LBL_DISABLED_DESCRIPTION' => 'Installeraren har redan körts en gång.  Som en säkerhetsåtgärd har den inaktiverats från att köra en andra gång.  Om du är helt säker på att du vill köra den igen, vänligen gå till din config.php-fil och leta upp (eller lägga till) en variabeln \'installer_locked\' och ange den till \'false\'.  Raden bör se ut så här:',
    'LBL_DISABLED_HELP_1' => 'För installationshjälp, vänligen besök SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'Supportforum',
    'LBL_APP_NOT_INSTALLED' => 'SuiteCRM är inte installerat. Ingångspunkten behöver ett installerat system, installera först.',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM Installation har inaktiverats',
    'LBL_HELP' => 'Hjälp',
    'LBL_INSTALL' => 'Installera',
    'LBL_INSTALL_TYPE_TITLE' => 'Installationsval',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Välj Installationstyp',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Typisk Installation</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Egen Installation</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Kräver minimiinformation för installationen. Rekommenderas för nya användare.',
    'LBL_INSTALL_TYPE_MSG3' => 'Ger ytterligare alternativ att ställa in under installationen. De flesta av dessa alternativ är också tillgängliga efter installation på admin-skärmarna. Rekommenderas för avancerade användare.',
    'LBL_LANG_1' => 'Om du vill använda ett annat språk i SuiteCRM än standardspråket (USA-engelska) kan du ladda upp och installera språkpaketet just nu. Du kommer också att kunna ladda upp och installera språkpaket från SuiteCRM-applikationen. Om du vill hoppa över det här steget klickar du på Nästa.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installera',
    'LBL_LANG_BUTTON_REMOVE' => 'Ta bort',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Avinstallera',
    'LBL_LANG_BUTTON_UPLOAD' => 'Ladda upp',
    'LBL_LANG_NO_PACKS' => 'ingen',
    'LBL_LANG_PACK_INSTALLED' => 'Följande språkpaket har installerats: ',
    'LBL_LANG_PACK_READY' => 'Följande språkpaket är redo att installeras: ',
    'LBL_LANG_SUCCESS' => 'Språkpaketet laddades upp.',
    'LBL_LANG_TITLE' => 'Språkpaket',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installerar SuiteCRM nu, det här kan ta upp tilll ett par minuter.',
    'LBL_SILENT_INSTALL_SUCCESS' => 'SuiteCRM har installerats.',
    'LBL_SILENT_INSTALL_FAILED' => 'Installationen av SuiteCRM misslyckades.',
    'LBL_LANG_UPLOAD' => 'Ladda upp ett språkpaket',
    'LBL_LICENSE_ACCEPTANCE' => 'Licensacceptans',
    'LBL_LICENSE_CHECKING' => 'Kontrollerar systemet för kompatibilitet.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kontrollerar miljö',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifierar DB-referenser.',
    'LBL_LICENSE_CHECK_PASSED' => 'Systemkontroll godkänd för kompatibilitet.',
    'LBL_CREATE_CACHE' => 'Förbereder att installera...',
    'LBL_LICENSE_REDIRECT' => 'Omdirigerar om ',
    'LBL_LICENSE_I_ACCEPT' => 'Jag accepterar',
    'LBL_LICENSE_PRINTABLE' => ' Utskriftbar Visning ',
    'LBL_PRINT_SUMM' => 'Skriv ut sammanfattning',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM-licens',
    'LBL_LICENSE' => 'LICENS',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Åtgärd',
    'LBL_ML_DESCRIPTION' => 'Beskrivning',
    'LBL_ML_INSTALLED' => 'Installerad datum',
    'LBL_ML_NAME' => 'Namn',
    'LBL_ML_PUBLISHED' => 'Publicerad datum',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Ej avinstallationsbar',
    'LBL_ML_VERSION' => 'Version',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'Nästa',
    'LBL_NO' => 'Nej',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Ställer in webbplatsens administratörslösenord',
    'LBL_PERFORM_CONFIG_PHP' => 'Skapar SuiteCRM konfigurationsfil',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Skapar databasen</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>på</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Skapar databasanvändarnamnet och lösenordet...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Skapar SuiteCRM standarddata',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Skapar standard schemalagda jobb',
    'LBL_PERFORM_DEFAULT_USERS' => 'Skapar standardanvändare',
    'LBL_PERFORM_DEMO_DATA' => 'Fyller databastabellerna med demodata (det kan ta lite tid)',
    'LBL_PERFORM_DONE' => 'klart<br>',
    'LBL_PERFORM_FINISH' => 'Klart/Mål',
    'LBL_PERFORM_OUTRO_1' => 'Inställningen av SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' är nu klar!',
    'LBL_PERFORM_OUTRO_3' => 'Total tid: ',
    'LBL_PERFORM_OUTRO_4' => ' sekunder.',
    'LBL_PERFORM_OUTRO_5' => 'Ungefärligt minne använt: ',
    'LBL_PERFORM_OUTRO_6' => ' byte.',
    'LBL_PERFORM_SUCCESS' => 'Lyckades!',
    'LBL_PERFORM_TABLES' => 'Skapar SuiteCRM-applikationstabeller, granskningstabeller och relations metadata',
    'LBL_PERFORM_TITLE' => 'Gör inställningar',
    'LBL_PRINT' => 'Skriv ut',
    'LBL_REG_CONF_1' => 'Fyll i det korta formuläret nedan för att få produktmeddelanden, träningsnyheter, specialerbjudanden och specialinbjudningar från SuiteCRM. Vi säljer, hyr inte, delar eller på annat sätt distribuerar den information som samlas in här till tredje part.',
    'LBL_REG_CONF_3' => 'Tack för din registrering. Klicka på knappen Slutför för att logga in på SuiteCRM. Du måste logga in för första gången med användarnamnet "admin" och lösenordet du angav i steg 2.',
    'LBL_REG_TITLE' => 'Registrering',

    'LBL_REQUIRED' => '* Obligatoriskt fält',

    'LBL_SITECFG_ADMIN_Name' => 'Administratörsnamn för SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Ange lösenordet för SuiteCRM-administratören igen',
    'LBL_SITECFG_ADMIN_PASS' => 'Lösenord för SuiteCRM-administratören',
    'LBL_SITECFG_APP_ID' => 'Applikation-ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Om detta väljs måste du ange ett program-ID för att ersätta det automatiskt genererade ID:t. ID:t säkerställer att sessioner från en SuiteCRM-instans inte används av andra instanser. Om du har ett kluster med SuiteCRM-installationer måste de använda samma program-ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Ange ditt eget program-ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Om detta väljs måste du ange en loggkatalog som ersätter standardkatalogen för SuiteCRM-loggen. Oavsett var loggfilen finns begränsas åtkomsten via en webbläsare med en .htaccess-omdirigering.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Använd en anpassad logg-katalog',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Om detta väljs måste du ange en säker katalog för lagring av SuiteCRM-sessionsinformation. Det kan förhindra att sessionsdata blir sårbara på delade servrar.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Använd en anpassad sessionsmapp för SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Åtgärda följande fel innan du fortsätter:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Loggmapp',
    'LBL_SITECFG_SESSION_PATH' => 'Sökväg till sessionskatalog<br>(måste vara skrivbar)',
    'LBL_SITECFG_SITE_SECURITY' => 'Välj säkerhetsalternativ',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Om detta väljs söker systemet regelbundet efter uppdaterade versioner av programmet.',
    'LBL_SITECFG_SUITE_UP' => 'Sök automatiskt efter uppdateringar?',
    'LBL_SITECFG_TITLE' => 'Sajtkonfiguration',
    'LBL_SITECFG_TITLE2' => 'Identifiera administrationsanvändaren',
    'LBL_SITECFG_SECURITY_TITLE' => 'Webbplatssäkerhet',
    'LBL_SITECFG_URL' => 'URL för SuiteCRM-instans',
    'LBL_SITECFG_ANONSTATS' => 'Skicka anonym användningsstatistik?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Om detta väljs skickar SuiteCRM <b>anonym</b> statistik om installationen till SuiteCRM Inc. varje gång systemet söker efter nya versioner. Informationen hjälper oss att bättre förstå hur programmet används och att förbättra produkten.',
    'LBL_SITECFG_URL_MSG' => 'Ange URL:en som ska användas för att komma åt SuiteCRM-instansen efter installationen. URL:en används även som bas för URL:erna på SuiteCRM-programsidorna. URL:en ska innehålla webbserverns eller datorns namn eller IP-adress.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Ange ett namn för systemet. Namnet visas i webbläsarens namnlist när användare besöker SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Efter installationen använder du SuiteCRM-administratören (standardanvändarnamn = admin) för att logga in på SuiteCRM-instansen. Ange ett lösenord för administratören. Lösenordet kan ändras efter den första inloggningen. Du kan också ange ett annat administratörsanvändarnamn än standardvärdet.',
    'LBL_SITECFG_COLLATION_MSG' => 'Välj sorteringsinställningar för systemet. Inställningarna skapar tabellerna med språkspecifika regler. Använd standardvärdet om språket inte kräver särskilda inställningar.',
    'LBL_SPRITE_SUPPORT' => 'Sprite-stöd',
    'LBL_SYSTEM_CREDS' => 'Systeminloggningsuppgifter',
    'LBL_SYSTEM_ENV' => 'Systemmiljö',
    'LBL_SHOW_PASS' => 'Visa lösenord',
    'LBL_HIDE_PASS' => 'Dölj lösenord',
    'LBL_PRE_INSTALL_REQ' => 'Krav före installation',
    'LBL_HIDDEN' => '<i>(dold)</i>',
    'LBL_STEP1' => 'Steg 1 av 2 - Förinstallationskrav',
    'LBL_STEP2' => 'Steg 2 av 2 - Konfiguration',
    'LBL_STEP' => 'Steg',
    'LBL_CHECKS_PASSED' => 'Alla kontroller godkändes!',
    'LBL_WARNINGS_FOUND' => 'Varningar hittades: kontrollera dem innan du fortsätter.',
    'LBL_ERRORS_FOUND' => ' Fel hittades: vi rekommenderar att du åtgärdar dem innan du fortsätter.',
    'LBL_ERRORS_AND_WARNINGS_FOUND' => 'Fel och varningar hittades: vi rekommenderar att du kontrollerar och åtgärdar dem innan du fortsätter.',
    'LBL_TITLE_WELCOME' => 'Välkommen till SuiteCRM ',
    'LBL_WELCOME' => 'Välkommen till SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Är du redo att installera?',
    'REQUIRED_SYS_COMP' => 'Nödvändiga systemkomponenter',
    'REQUIRED_SYS_COMP_MSG' =>
        'Kontrollera innan du börjar att du har versioner som stöds av följande systemkomponenter:<br>
                      <ul>
                      <li>Databas/databashanteringssystem (exempelvis MariaDB, MySQL eller SQL Server)</li>
                      <li>Webbserver (Apache, IIS)</li>
                      </ul>
                      Information om kompatibla systemkomponenter finns i kompatibilitetsmatrisen i versionsinformationen för
                      den SuiteCRM-version du installerar.<br>',
    'REQUIRED_SYS_CHK' => 'Inledande systemkontroll',
    'REQUIRED_SYS_CHK_MSG' =>
        'När du påbörjar installationen utförs en systemkontroll på webbservern där SuiteCRM-filerna finns för att
                      säkerställa att systemet är korrekt konfigurerat och har alla nödvändiga komponenter
                      för att slutföra installationen. <br><br>
                      Systemet kontrollerar följande:<br>
                      <ul>
                      <li><b>PHP-version</b> &#8211; måste vara kompatibel med programmet</li>
                      <li><b>Sessionsvariabler</b> &#8211; måste fungera korrekt</li>
                      <li><b>MB Strings</b> &#8211; måste vara installerat och aktiverat i php.ini</li>
                      <li><b>Databasstöd</b> &#8211; måste finnas för MariaDB, MySQL eller SQL Server</li>
                      <li><b>Config.php</b> &#8211; måste finnas och ha rätt behörigheter för att kunna skrivas till</li>
                      <li>Följande SuiteCRM-filer måste vara skrivbara:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Om kontrollen misslyckas kan du inte fortsätta installationen.
                                  Ett felmeddelande visas och förklarar varför systemet inte klarade kontrollen.
                                  När du har gjort nödvändiga ändringar kan du köra systemkontrollen igen för att fortsätta installationen.<br>',


    'REQUIRED_INSTALLTYPE' => 'Typisk eller anpassad installation',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Efter systemkontrollen kan du välja antingen
                      den typiska eller den anpassade installationen.<br><br>
                      För både <b>Typisk</b> and <b>Anpassad</b> -installationer behöver du känna till följande:<br>
                      <ul>
                      <li> <b>Databastyp</b> som ska lagra SuiteCRM-data <ul><li>Kompatibla databastyper: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Namn på webbservern</b> eller datorn (värden) där databasen finns
                      <ul><li>Det kan vara <i>localhost</i> om databasen finns på den lokala datorn eller samma webbserver eller dator som SuiteCRM-filerna.<br><br></li></ul></li>
                      <li><b>Databasens namn</b> som du vill använda för att lagra SuiteCRM-data</li>
                        <ul>
                          <li> Du kanske redan har en befintlig databas som du vill använda. Om
                          du anger namnet på en befintlig databas tas tabellerna i databasen bort under installationen när schemat för SuiteCRM-databasen definieras.</li>
                          <li> Om du inte redan har en databas används namnet du anger för den nya databas som skapas för instansen under installationen.<br><br></li>
                        </ul>
                      <li><b>Databasadministratörens användarnamn och lösenord</b> <ul><li>Databasadministratören ska kunna skapa tabeller och användare samt skriva till databasen.</li><li>Du kan behöva kontakta databasadministratören för denna information om databasen inte finns på den lokala datorn eller om du inte är databasadministratör.<br><br></ul></li></li>
                      <li> <b>SuiteCRM-databasanvändarens användarnamn och lösenord</b>
                      </li>
                        <ul>
                          <li> Användaren kan vara databasadministratören eller en annan befintlig databasanvändare. </li>
                          <li> Om du vill skapa en ny databasanvändare för detta kan du ange ett nytt användarnamn och lösenord under installationen, och användaren skapas då under installationen. </li>
                        </ul></ul><p>

                      För den <b>Anpassad</b> -installationen kan du även behöva känna till följande:<br>
                      <ul>
                      <li> <b>URL som ska användas för att komma åt SuiteCRM-instansen</b> efter installationen. URL:en ska innehålla webbserverns eller datorns namn eller IP-adress.<br><br></li>
                                  <li> [Valfritt] <b>Sökväg till sessionskatalogen</b> om du vill använda en anpassad sessionskatalog för SuiteCRM-information för att skydda sessionsdata på delade servrar.<br><br></li>
                                  <li> [Valfritt] <b>Sökväg till en anpassad loggkatalog</b> om du vill ersätta standardkatalogen för SuiteCRM-loggen.<br><br></li>
                                  <li> [Valfritt] <b>Program-ID</b> om du vill ersätta det automatiskt genererade ID:t som säkerställer att sessioner från en SuiteCRM-instans inte används av andra instanser.<br><br></li>
                                  <li><b>Teckenuppsättning</b> som används oftast i din språkregion.<br><br></li></ul>
                                  Mer detaljerad information finns i installationshandboken.
                                











 ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Läs följande viktiga information innan du fortsätter installationen. Informationen hjälper dig att avgöra om du är redo att installera programmet.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Välj ditt språk</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Installationsguide',
    'LBL_WIZARD_TITLE' => 'Installationsguide för SuiteCRM: ',
    'LBL_YES' => 'Ja',

    'LBL_PATCHES_TITLE' => 'Installera de senaste korrigeringarna',
    'LBL_MODULE_TITLE' => 'Installera språkpaket',
    'LBL_PATCH_1' => 'Om du vill hoppa över detta steg klickar du på Nästa.',
    'LBL_PATCH_TITLE' => 'Systemkorrigering',
    'LBL_PATCH_READY' => 'Följande korrigeringar är redo att installeras:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM använder PHP-sessioner för att lagra viktig information under anslutningen till webbservern. PHP-installationen har inte konfigurerat sessionsinformationen korrekt.
											<br><br>En vanlig felkonfiguration är att direktivet <b>'session.save_path'</b> inte pekar på en giltig katalog. <br>
											<br> Rätta <a target=_new href='https://www.php.net/manual/en/ref.session.php'>PHP-konfigurationen</a> i php.ini-filen nedan.",
    'LBL_SESSION_ERR_TITLE' => 'Konfigurationsfel för PHP-sessioner',
    'LBL_SYSTEM_NAME' => 'Systemnamn',
    'LBL_COLLATION' => 'Sorteringsinställningar',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Ange ett systemnamn för SuiteCRM-instansen.',
    'LBL_PATCH_UPLOAD' => 'Välj en korrigeringsfil från den lokala datorn',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 eller högre krävs.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minsta PHP-version som krävs är 5.1.0. Rekommenderad PHP-version är 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Din nuvarande PHP version är',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Rekommenderad PHP-version är 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Bakåtskompabilitets läge är påslaget. Sät zend.ze1_compatibility_mode til Off för att fortsätta',
    'LBL_STREAM' => 'PHP tillåter användning av ström',

    'advanced_password_new_account_email' => array(
        'subject' => 'Nya kontouppgifter',
        'type' => 'system',
        'description' => 'Den här mallen används när systemadministratören skickar ett nytt lösenord till en användare.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Här är användarnamnet för ditt konto och ditt tillfälliga lösenord:</p><p>Användarnamn: $contact_user_user_name </p><p>Lösenord: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>När du har loggat in med lösenordet ovan kan du behöva byta lösenordet till ett eget.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Här är användarnamnet för ditt konto och ditt tillfälliga lösenord:
Användarnamn: $contact_user_user_name
Lösenord: $contact_user_user_hash

$config_site_url

När du har loggat in med lösenordet ovan kan du behöva byta lösenordet till ett eget.',
        'name' => 'Systemgenererat lösenordsmeddelande',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Återställ ditt kontolösenord',
        'type' => 'system',
        'description' => "Den här mallen används för att skicka en länk som användaren kan klicka på för att återställa kontolösenordet.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Du begärde den $contact_user_pwd_last_changed att få återställa lösenordet för ditt konto. </p><p>Klicka på länken nedan för att återställa lösenordet:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Du begärde den $contact_user_pwd_last_changed att få återställa lösenordet för ditt konto.

Klicka på länken nedan för att återställa lösenordet:

$contact_user_link_guid',
        'name' => 'Email Glömt Lösenord',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Tvåfaktorsautentiseringskod',
        'type' => 'system',
        'description' => "Denna mall används för att skicka en användare en kod för tvåfaktorautentisering.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Två Faktor Autentisering Koden är <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Två Faktor Autentisering Koden är $code.',
        'name' => 'Två Faktor Autentisering Email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Från" Namn:',
    'LBL_FROM_ADDR' => '"Avsändar" adress:',

    'LBL_WIZARD_SMTP_DESC' => 'Ange det epostkonto som ska användas för att skicka epost såsom tilldelning av notiser och nya användarlösenord. Användare kan ta emot epost från SuiteCRM som skickat från specificerat epostkonto.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din Epost leverantör',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Annat',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server specifikation',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP autentisering?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Aktivera SMTP via SSL eller TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Epost Adress',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Lösenord',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillåt användare att använda detta konto för utgående epost:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'När denna är vald kommer alla användare att kunna skicka epost från samma utgående epost konto som används för att skicka system notiser och varningar. Om den inte är vald kan användare fortfarande använda den utgående epost servern efter att ha angivit sin egna konto information.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lösenord',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lösenord',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Användarnamn',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',


    'LBL_MAIL_SMTPUSER' => 'SMTP användarnamn:',
    'LBL_MAIL_SMTPPASS' => 'SMTP-lösenord:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Märkning',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ange ditt företagsnamn och logga för att märka din SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Namn:',
    'SYSTEM_NAME_HELP' => 'Detta namn visas som titel i din browser.',
    'NEW_LOGO' => 'Ladda upp ny logo (212x40)',
    'NEW_LOGO_HELP' => 'Bildfilformatet kan vara .png eller .jpg. Den största höjden är 170 px och den största bredden är 450 px. Bilder som är större i någon riktning skalas ned till dessa mått.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Ladda upp',
    'CURRENT_LOGO' => 'Aktuell logotyp som används',
    'CURRENT_LOGO_HELP' => 'Den här logotypen visas mitt på inloggningsskärmen i SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Val av scenario',
    'LBL_WIZARD_SCENARIO_DESC' => 'Detta används för att anpassa de visade modulerna efter dina behov. Varje modul kan aktiveras efter installationen från administrationssidan.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Inga scenarier är för närvarande angivna i konfigurationsfilen (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Lokala System inställningar',
    'LBL_WIZARD_LOCALE_DESC' => 'Specificera hur du vill att data i SuiteCRM ska visas baserat på din geografiska belägenhet. Dessa inställningar kommer att vara default inställningar, varje användare kan sätta sina egna.',
    'LBL_DATE_FORMAT' => 'Datumformat:',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_TIMEZONE' => 'Tidszon:',
    'LBL_LANGUAGE' => 'Språk:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217-valutakod:',
    'LBL_NUMBER_GROUPING_SEP' => '1000-tals separator',
    'LBL_DECIMAL_SEP' => 'Decimalsymbol',
    'LBL_NAME_FORMAT' => 'Namnformat:',
    'UPLOAD_LOGO' => 'Vänta, logotyp laddas upp..',
    'ERR_UPLOAD_FILETYPE' => 'Filtypen är inte tillåten. Ladda upp en JPEG- eller PNG-fil.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ett okänt fel uppstod vid filuppladdningen.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Den uppladdade filen överstiger max_uppladdnings_fil direktiven i php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Den uppladdade filen överstiger MAXIMAL_FIL_STORLEK firektiven som specifiserades i HTML formuläret.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Den uppladdade filen laddades upp ofullständing.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Ingen fil laddades upp.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Saknar en temporär katalog.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Det gick inte att skriva filen till disken.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Ett PHP-tillägg stoppade filuppladdningen. PHP kan inte avgöra vilket tillägg som stoppade filuppladdningen.',

    'LBL_INSTALL_PROCESS' => 'Installera...',

    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'ERR_ADMIN_EMAIL' => 'Administratörens e-postadress är felaktig.',
    'ERR_SITE_URL' => 'Webbplats-URL krävs.',

    'STAT_CONFIGURATION' => 'Konfigurerar relationer…',
    'STAT_CREATE_DB' => 'Skapa databas...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Skapa standardinställningar...',
    'STAT_INSTALL_FINISH' => 'Slutför installationen…',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installationen är klar. <a href="%s">Logga in…</a>',
    'LBL_LICENCE_TOOLTIP' => 'Godkänn licensen först',

    'LBL_MORE_OPTIONS_TITLE' => 'Fler alternativ',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Databasfel',
    'LBL_OLD_PHP' => 'Gammal PHP-version upptäckt!',
    'LBL_OLD_PHP_MSG' => 'Den rekommenderade PHP-versionen för att installera SuiteCRM är %s <br />Den lägsta PHP-version som krävs är %s<br />Du använder PHP-version %s, som har nått slutet av sin livscykel: <a href="https://www.php.net/eol.php">https://www.php.net/eol.php</a>.<br />Överväg att uppgradera PHP-versionen. ',
    'LBL_OLD_PHP_OK' => 'Jag är medveten om riskerna och vill fortsätta.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Användare',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Databasnamn',
    'LBL_DBCONFIG_MSG3' => 'Namnet på databasen som ska innehålla data för SuiteCRM-instansen du ska installera.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Värdnamn',
    'LBL_DBCONFIG_MSG2' => 'Namnet på webbservern eller datorn (värden) där databasen finns, till exempel www.mydomain.com. Vid lokal installation är det bättre att använda \'localhost\' än \'127.0.0.1\' av prestandaskäl.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Användarnamnet och lösenordet för en databasadministratör som kan skapa databastabeller och användare samt skriva till databasen krävs för att konfigurera SuiteCRM-databasen.',
    'LBL_SYS_CHECK_WARNING' => 'Ignorera systemkontrollvarningar',
    'LBL_PROCEED' => 'FORTSÄTT',
    'LBL_PROCEED_WITH_WARNINGS' => 'IGNORERA VARNINGAR OCH FORTSÄTT',
    'LBL_PROCEED_WITH_ERRORS' => 'IGNORERA FEL OCH FORTSÄTT',
    'LBL_PROCEED_WITH_ERRORS_AND_WARNINGS' => 'IGNORERA FEL OCH VARNINGAR FÖR ATT FORTSÄTTA',
    'LBL_RECHECK' => 'KONTROLLERA IGEN',
    'LBL_VIEW_FULL_ERROR' => 'Visa hela felet',
    'LBL_CLOSE_DESCRIPTION' => 'Stäng beskrivningen',
    'LBL_CONFIG' => 'KONFIGURATION',
    'LBL_VALIDATION_ERRORS' => 'Det finns valideringsfel, kan inte utföra åtgärden.',
    'LBL_CRON_UNRECOMMENDED_USER' => 'Du kör för närvarande som root. Det rekommenderas inte. Vill du fortsätta (y,n)? '
);
