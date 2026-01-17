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
    'LBL_BASIC_SEARCH' => 'Hurtigfilter',
    'LBL_ADVANCED_SEARCH' => 'Avanceret filter',
    'LBL_BASIC_TYPE' => 'Grundlæggende Type',
    'LBL_ADVANCED_TYPE' => 'Avanceret Type',
    'LBL_SYSOPTS_2' => 'Hvilken type database skal bruges til den SuiteCRM-forekomst, du vil installere?',
    'LBL_SYSOPTS_DB' => 'Angiv databasetype',
    'LBL_SYSOPTS_DB_TITLE' => 'Databasetype',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Ret følgende fejl, før du fortsætter:',
    'ERR_DB_VERSION_FAILURE' => 'Ikke i stand til at kontrollere databaseversion.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Angiv brugernavnet for SuiteCRM-administratorbrugeren. ',
    'ERR_ADMIN_PASS_BLANK' => 'Angiv adgangskoden til SuiteCRM-administratorbrugeren. ',

    'ERR_CHECKSYS' => 'Der er fundet fejl under kompatibilitetskontrol. For at din SuiteCRM-installation kan fungere korrekt, skal du sørge for at løse problemerne nedenfor og enten trykke på knappen Tjek igen eller prøve at udføre installationen igen.',
    'ERR_CHECKSYS_CALL_TIME' => '"Allow Call Time Pass Reference" er slået til (dette skal sættes til Fra i php.ini)',
    'ERR_CHECKSYS_CURL' => 'Blev ikke fundet: SuiteCRM-planlægger kører med begrænset funktionalitet.',
    'ERR_CHECKSYS_IMAP' => 'Blev ikke fundet: InboundEmail og Kampagner "e-mail" kræver IMAP-bibliotekerne. Ingen af dem fungerer.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Angiv denne til ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M eller mere i filen php.ini"',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Advarsel: Ikke skrivbar',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Din version af PHP understøttes ikke af SuiteCRM. Du skal installere en version, der er kompatibel med SuiteCRM-programmet. Se kompatibilitetsmatrixen "Compatibility Matrix" i produktbemærkningerne "Release Notes" for understøttede PHP-versioner. Din version er',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Din version af IIS understøttes ikke af SuiteCRM. Du skal installere en version, der er kompatibel med SuiteCRM-programmet. Se kompatibilitetsmatrixen "Compatibility Matrix" i produktbemærkningerne "Release Notes" for understøttede IIS-versioner. Din version er ',
    'ERR_CHECKSYS_FASTCGI' => 'Vi har registeret, at du ikke bruger en FastCGI-handlertilknytning til PHP. Du skal installere eller konfigurere en version, der er kompatibel med SuiteCRM-programmet. Se kompatibilitetsmatrixen "Compatibility Matrix" i produktbemærkningerne "Release Notes" for understøttede versioner. Se <a href=""http://www.iis.net/php/"" target=""_blank"">http://www.iis.net/php/</a> for at få detaljerede oplysninger ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Du kan få den optimale oplevelse med IIS/FastCGI sapi ved at angive fastcgi.logging til 0 i filen php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Databasen er ikke tilgængelig',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Databaseunderstøttelse blev ikke fundet. Kontrollér, at du har de nødvendige drivere til en af følgende understøttede databasetyper: MySQL, MS SQLServer eller Oracle. Du skal måske fjerne kommentaren fra udvidelsen i filen php.ini eller genkompilere med den korrekte binære fil afhængigt af din version af PHP. Du kan finde flere oplysninger om, hvordan du aktiverer databaseunderstøttelse, i PHP-vejledningen.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funktioner knyttet til XML-parserbiblioteker, som skal bruges af SuiteCRM-programmet, blev ikke fundet. Du skal måske fjerne kommentaren fra udvidelsen i filen php.ini eller genkompilere med den korrekte binære fil afhængigt af din version af PHP. Du kan finde flere oplysninger i PHP-vejledningen.',
    'ERR_CHECKSYS_MBSTRING' => 'Funktioner knyttet til udvidelsen Multibyte Strings PHP "mbstring", som skal bruges af SuiteCRM-programmet, blev ikke fundet. <br/><br/>Normalt er mbstring-modulet ikke aktiveret som standard i PHP og skal aktiveres med -aktivér-mbstring, når den binære PHP-fil bygges. Du kan finde flere oplysninger om, hvordan du aktiverer mbstring-understøttelse, i PHP-vejledningen.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Funktioner tilknyttet JSON Parser Libraries der er nødvendige for SuiteCRM programmet blev ikke fundet. Du kan være nødt til at fjerne kommentartegn ud fra udvidelsen i php.ini-filen, eller genkompilere med den rigtige binære fil, afhængigt af din version af PHP. Se venligst din PHP Manual for mere information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Sikker tilstand er aktiveret "Til" "du vil måske deaktivere den i php.ini"',
    'ERR_CHECKSYS_ZLIB' => 'Blev ikke fundet: SuiteCRM opnår enorme fordele mht. ydeevne med zlib-komprimering.',
    'ERR_CHECKSYS_ZIP' => 'ZIP-understøttelse ikke fundet: SuiteCRM behøver ZIP-understøttelse fra at behandle komprimerede filer.',
    'ERR_CHECKSYS_PCRE' => 'PCRE library not found: SuiteCRM needs PCRE library in order to process Perl style of regular expression pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library version: SuiteCRM needs PCRE library 7.0 or above to process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'Den angivne databaseadministrators brugernavn og/eller adgangskode er ugyldige, og der kan ikke oprettes forbindelse til databasen. Angiv et gyldigt brugernavn og en gyldig adgangskode: "Fejl:',
    'ERR_DB_ADMIN_MSSQL' => 'Den angivne databaseadministrators brugernavn og/eller adgangskode er ugyldige, og der kan ikke oprettes forbindelse til databasen. Angiv et gyldigt brugernavn og en gyldig adgangskode:',
    'ERR_DB_EXISTS_NOT' => 'Den angivne database findes ikke.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Der findes allerede en databasen med konfigurationsdata. For at køre en installation med den valgte database, skal du genkøre installationen og vælge: "Drop og genskab eksisterende SuiteCRM tabeller?". For at opgradere skal du bruge opgraderingsguiden i administrationskonsollen. Læs venligst opgraderingsdokumentationen som er placeret <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">her</a>.',
    'ERR_DB_EXISTS' => 'Det angivne databasenavn findes allerede - der kan ikke oprettes en ny med samme navn.',
    'ERR_DB_EXISTS_PROCEED' => 'Det angivne databasenavn findes allerede. Du kan<br>1. trykke på knappen Tilbage og vælge et nyt databasenavn <br>2. klikke på Næste og fortsætte, men så droppes alle eksisterende tabeller i denne database. <strong>Det betyder, at dine tabeller og data forsvinder.</strong>',
    'ERR_DB_HOSTNAME' => 'Værtsnavnet må ikke være tomt.',
    'ERR_DB_INVALID' => 'En ugyldig databasetype er valgt.',
    'ERR_DB_LOGIN_FAILURE' => 'Det databasebrugernavn og/eller den databaseadgangskode, du har angivet, er ugyldig, og der kan ikke oprettes forbindelse til databasen. Angiv et gyldigt brugernavn og en gyldig adgangskode:',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Det databasebrugernavn og/eller den databaseadgangskode, du har angivet, er ugyldig, og der kan ikke oprettes forbindelse til databasen. Angiv et gyldigt brugernavn og en gyldig adgangskode:',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Det databasebrugernavn og/eller den databaseadgangskode, du har angivet, er ugyldig, og der kan ikke oprettes forbindelse til databasen. Angiv et gyldigt brugernavn og en gyldig adgangskode:',
    'ERR_DB_MYSQL_VERSION' => 'Din MySQL-version (%s) understøttes ikke af SuiteCRM. Du skal installere en version, der er kompatibel med SuiteCRM-applikationen. Se venligst Kompatibilitets Matrix\'en i Release Notes for understøttede MySQL-versioner.',
    'ERR_DB_NAME' => 'Databasenavnet må ikke være tomt.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Databasenavnet må ikke indeholde et '\\', '/',  eller '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "\"Databasenavnet må ikke indeholde e  '#', or '@' , '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Databasenavn må kun bestå af alfanumeriske tegn og symbolerne '#', '_' eller '$'",
    'ERR_DB_PASSWORD' => 'De adgangskoder, der er angivet for SuiteCRM-databaseadministratoren, stemmer ikke overens. Angiv de samme adgangskoder igen i adgangskodefelterne.',
    'ERR_DB_PRIV_USER' => 'Angiv et databaseadministratorbrugernavn. Brugeren skal oprette forbindelse til databasen første gang.',
    'ERR_DB_USER_EXISTS' => 'Brugernavnet for SuiteCRM-databasebrugeren findes allerede - der kan ikke oprettes et nyt med samme navn. Angiv et nyt brugernavn.',
    'ERR_DB_USER' => 'Angiv et brugernavn til SuiteCRM-databaseadministratoren.',
    'ERR_DBCONF_VALIDATION' => 'Ret følgende fejl, før du fortsætter:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'De adgangskoder, der er angivet for SuiteCRM-databasebrugeren, stemmer ikke overens. Angiv de samme adgangskoder igen i adgangskodefelterne.',
    'ERR_ERROR_GENERAL' => 'Der er registreret følgende fejl:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Filen kan ikke slettes:',
    'ERR_LANG_MISSING_FILE' => 'Filen blev ikke fundet:',
    'ERR_LANG_NO_LANG_FILE' => 'Ingen sprogpakkefil blev fundet i medtag/sprog i:',
    'ERR_LANG_UPLOAD_1' => 'Der var problemer med din upload. Prøv igen.',
    'ERR_LANG_UPLOAD_2' => 'Sprogpakker skal være ZIP-arkiver.',
    'ERR_LANG_UPLOAD_3' => 'PHP kunne ikke flytte temp-filen til opgraderingsmappen.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Den angivne logmappe er ikke en gyldig mappe.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Den angivne logmappe er ikke en skrivbar mappe.',
    'ERR_NO_DIRECT_SCRIPT' => 'Scriptet kan ikke behandles direkte.',
    'ERR_NO_SINGLE_QUOTE' => 'Du kan ikke angive single quotation for ',
    'ERR_PASSWORD_MISMATCH' => 'De adgangskoder, der er angivet for SuiteCRM-administratorbrugeren, stemmer ikke overens. Angiv de samme adgangskoder igen i adgangskodefelterne.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Der kan ikke skrives til filen <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Du kan fortsætte denne installation ved manuelt at oprette filen config.php og indsætte konfigurationsoplysningerne nedenfor i filen config.php. Du <strong>skal </strong>dog oprette filen config.php, før du fortsætter til næste trin.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Huskede du at oprette filen config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Advarsel: Der kunne ikke skrives til filen config.php. Kontrollér, at den findes.',
    'ERR_PERFORM_HTACCESS_1' => 'Der kan ikke skrives til',
    'ERR_PERFORM_HTACCESS_2' => 'filen.',
    'ERR_PERFORM_HTACCESS_3' => 'Hvis du vil sikre din logfil mod at kunne åbnes via en browser, skal du oprette en .htaccess-fil i logmappen med linjen:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Vi kunne ikke registrere en internetforbindelse.</b> Når du har oprettet forbindelse, skal du gå til <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> for at blive registreret hos SuiteCRM. Hvis du fortæller os lidt om, hvordan dit firma planlægger at bruge SuiteCRM, kan vi sikre dig, at vi altid vil levere det rigtige program i forhold til dine forretningsbehov.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Den angivne sessionsmappe er ikke en gyldig mappe.',
    'ERR_SESSION_DIRECTORY' => 'Den angivne sessionsmappe er ikke en skrivbar mappe.',
    'ERR_SESSION_PATH' => 'Sessionsstien er obligatorisk, hvis du vil angive din egen.',
    'ERR_SI_NO_CONFIG' => 'Du har ikke medtaget config_si.php i dokumentroden, eller du har ikke defineret $sugar_config_si i config.php',
    'ERR_SITE_GUID' => 'Program-id&#39;et er obligatorisk, hvis du vil angive dit egen.',
    'ERROR_SPRITE_SUPPORT' => "I øjeblikket er vi ikke i stand til at finde GD biblioteket, som et resultat heraf vil du ikke være i stand til at bruge CSS Sprite funktionaliteten.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Størrelse på uploadfil',
    'ERR_URL_BLANK' => 'Angiv basis-URL&#39;en til SuiteCRM-forekomsten.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Kan ikke finde installation af',
    'ERROR_MANIFEST_TYPE' => 'Filen skal angive pakke typen.',
    'ERROR_PACKAGE_TYPE' => 'Ikke lovlig pakke type',
    'ERROR_VERSION_INCOMPATIBLE' => 'Den uploaded fil er ikke en SuiteCRM fil: ',

    'LBL_BACK' => 'Tilbage',
    'LBL_CANCEL' => 'Afbryd',
    'LBL_ACCEPT' => 'Jeg accepterer',
    'LBL_CHECKSYS_CACHE' => 'Skrivbare cacheundermapper',
    'LBL_DROP_DB_CONFIRM' => 'Det angivne databasenavn findes allerede.<br>Du kan gøre ét af følgende:<br>1. Klik på knappen Annuller, og vælg et nyt databasenavn, eller <br>2. Klik på knappen Acceptér, og fortsæt. Alle eksisterende tabeller i databasen droppes. <strong>Det betyder, at alle tabellerne og de allerede eksisterende data forsvinder.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponent',
    'LBL_CHECKSYS_CONFIG' => 'Skrivbar SuiteCRM-konfigurationsfil "config.php"',
    'LBL_CHECKSYS_CURL' => 'cURL-modul',
    'LBL_CHECKSYS_CUSTOM' => 'Skrivbar brugerdefineret mappe',
    'LBL_CHECKSYS_DATA' => 'Skrivbare dataundermapper',
    'LBL_CHECKSYS_IMAP' => 'IMAP-modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Modulet MB-strenge',
    'LBL_CHECKSYS_MEM_OK' => 'OK "ingen grænse"',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK "ubegrænset"',
    'LBL_CHECKSYS_MEM' => 'PHP-hukommelsesgrænse',
    'LBL_CHECKSYS_MODULE' => 'Skrivbare modulundermapper og -filer',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Ikke tilgængelig',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK "ver.',
    'LBL_CHECKSYS_PHPVER' => 'PHP-version',
    'LBL_CHECKSYS_IISVER' => 'IIS-version',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Kontrollér igen',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'Accept af systemkontrol',
    'LBL_CHECKSYS_XML' => 'XML-parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB-kompressionsmodul',
    'LBL_CHECKSYS_ZIP' => 'ZIP håndteringsmodul',
    'LBL_CHECKSYS_PCRE' => 'PCRE bibliotek',
    'LBL_CHECKSYS_FIX_FILES' => 'Ret følgende filer eller mapper, før du fortsætter:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Ret følgende modulmapper og filerne under dem, før du fortsætter:',
    'LBL_CHECKSYS_UPLOAD' => 'Skrivbare Upload Mappe',
    'LBL_CLOSE' => 'Luk',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'oprettes',
    'LBL_CONFIRM_DB_TYPE' => 'Databasetype',
    'LBL_CONFIRM_NOT' => 'ikke',
    'LBL_CONFIRM_TITLE' => 'Bekræft indstillinger',
    'LBL_CONFIRM_WILL' => 'vil',
    'LBL_DBCONF_DB_DROP' => 'Drop tabeller',
    'LBL_DBCONF_DB_NAME' => 'Databasenavn',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM-databasebrugerens adgangskode',
    'LBL_DBCONF_DB_PASSWORD2' => 'Angiv SuiteCRM-databasebrugerens adgangskode',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database bruger',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database bruger',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Databaseadministratorens brugernavn',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Databaseadministratorens adgangskode',
    'LBL_DBCONF_COLLATION' => 'Collation',
    'LBL_DBCONF_CHARSET' => 'Karaktersæt',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Avanceret Databasekonfiguration',
    'LBL_DBCONF_DEMO_DATA' => 'Vil du udfylde databasen med demodata?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Vælg demodata',
    'LBL_DBCONF_HOST_NAME' => 'Værtsnavn',
    'LBL_DBCONF_HOST_INSTANCE' => 'Vært forekomsten',
    'LBL_DBCONFIG_SECURITY' => 'Af hensyn til sikkerheden kan du angive en databasebruger med udelt adgang, der kan oprette forbindelse til SuiteCRM-databasen. Denne bruger skal kunne skrive, opdatere og hente data i den SuiteCRM-database, der oprettes til denne forekomst. Denne bruger kan være den databaseadministrator, der er angivet ovenfor, eller du kan angive oplysninger om en ny eller eksisterende databasebruger.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Angiv eksisterende bruger',
    'LBL_DBCONFIG_CREATE_DD' => 'Definer den bruger, der skal oprettes',
    'LBL_DBCONFIG_SAME_DD' => 'Samme som administratorbruger',
    'LBL_DBCONF_TITLE' => 'Databasekonfiguration',
    'LBL_DBCONF_TITLE_NAME' => 'Angiv databasenavn',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Angiv oplysninger om databasebruger',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Adgangskode',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Installationsprogrammer har allerede været kørt én gang. Som en sikkerhedsforanstaltning har det været deaktiveret, så det ikke køres en gang mere. Hvis du er helt sikker på, at du vil køre det igen, skal du gå til filen config.php og finde "eller tilføje" en variabel med navnet &#39;installer_locked&#39; og angive den til &#39;false&#39;. Linjen skal se sådan ud:',
    'LBL_DISABLED_HELP_1' => 'Du kan få hjælp til installationen på SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'Installationen af SuiteCRM er blevet deaktiveret',
    'LBL_HELP' => 'Hjælp',
    'LBL_INSTALL' => 'Installer',
    'LBL_INSTALL_TYPE_TITLE' => 'Installationsindstillinger',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Vælg installationstype',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Standardinstallation</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Specialinstallation</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Kræver minimumoplysninger til installationen. Anbefales til nye brugere.',
    'LBL_INSTALL_TYPE_MSG3' => 'Indeholder yderligere indstillinger, der skal angives under installationen. De fleste af disse indstillinger er også tilgængelige på administratorskærmene efter installationen. Anbefales til avancerede brugere.',
    'LBL_LANG_1' => 'Hvis du vil bruge et andet sprog i SuiteCRM end standardsproget engelsk USA, kan du uploade og installere sprogpakken nu. Du kan også uploade og installere sprogpakker fra SuiteCRM-programmet. Hvis du vil springe over dette trin, skal du klikke på Næste.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installer',
    'LBL_LANG_BUTTON_REMOVE' => 'Slet',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Afinstaller',
    'LBL_LANG_BUTTON_UPLOAD' => 'Upload',
    'LBL_LANG_NO_PACKS' => 'ingen',
    'LBL_LANG_PACK_INSTALLED' => 'Følgende sprogpakker er blevet installeret:',
    'LBL_LANG_PACK_READY' => 'Følgende sprogpakker er klar til at blive installeret:',
    'LBL_LANG_SUCCESS' => 'Sprogpakken blev uploadet.',
    'LBL_LANG_TITLE' => 'Sprogpakke',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Installerer SuiteCRM nu. Det kan tage op til et par minutter.',
    'LBL_LANG_UPLOAD' => 'Upload en sprogpakke',
    'LBL_LICENSE_ACCEPTANCE' => 'Accept af licens',
    'LBL_LICENSE_CHECKING' => 'Kontrollerer systemet for kompatibilitet.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kontrollerer miljøet',
    'LBL_LICENSE_CHKDB_HEADER' => 'Kontrollerer databaselegitimationsoplysninger.',
    'LBL_LICENSE_CHECK_PASSED' => 'Systemet bestod kompatibilitetskontrollen.',
    'LBL_CREATE_CACHE' => 'Forbereder installationen...',
    'LBL_LICENSE_REDIRECT' => 'Omdirigerer i',
    'LBL_LICENSE_I_ACCEPT' => 'Jeg accepterer',
    'LBL_LICENSE_PRINTABLE' => 'Visning, der kan udskrives',
    'LBL_PRINT_SUMM' => 'Udskriv oversigt',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM-licens',

    'LBL_LOCALE_NAME_FIRST' => 'John',
    'LBL_LOCALE_NAME_LAST' => 'Doe',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Handling',
    'LBL_ML_DESCRIPTION' => 'Beskrivelse',
    'LBL_ML_INSTALLED' => 'Installeret den',
    'LBL_ML_NAME' => 'Navn',
    'LBL_ML_PUBLISHED' => 'Udgivet den',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Ikke-installerbar',
    'LBL_ML_VERSION' => 'Version',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server "FreeTDS"',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver for PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli udvidelse)',
    'LBL_NEXT' => 'Næste',
    'LBL_NO' => 'Nej',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Angiver adgangskode for webstedsadministrator',
    'LBL_PERFORM_CONFIG_PHP' => 'Opretter SuiteCRM-konfigurationsfil',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Opretter databasen</b>',
    'LBL_PERFORM_CREATE_DB_2' => '<b>til</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'Opretter databasebrugernavnet og -adgangskoden...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Opretter SuiteCRM-standarddata',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Opretter standardplanlæggerjob',
    'LBL_PERFORM_DEFAULT_USERS' => 'Opretter standardbrugere',
    'LBL_PERFORM_DEMO_DATA' => 'Udfylder databasetabellerne med demodata "det kan tage lidt tid"',
    'LBL_PERFORM_DONE' => 'udført<br>',
    'LBL_PERFORM_FINISH' => 'Avslutt',
    'LBL_PERFORM_OUTRO_1' => 'Konfigurationen af SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => 'er nu fuldført!',
    'LBL_PERFORM_OUTRO_3' => 'Tid i alt:',
    'LBL_PERFORM_OUTRO_4' => 'sekunder.',
    'LBL_PERFORM_OUTRO_5' => 'Omtrentlig anvendt hukommelse:',
    'LBL_PERFORM_OUTRO_6' => 'byte.',
    'LBL_PERFORM_SUCCESS' => 'Handlingen lykkedes!',
    'LBL_PERFORM_TABLES' => 'Opretter SuiteCRM-programtabeller, revisionstabeller og relationsmetadata',
    'LBL_PERFORM_TITLE' => 'Udfør konfiguration',
    'LBL_PRINT' => 'Udskriv',
    'LBL_REG_CONF_1' => 'Udfyld den korte formular nedenfor, hvis du vil modtage produktannonceringer, uddannelsesnyheder, særtilbud og invitationer til særarrangementer fra SuiteCRM. Vi hverken sælger, udlejer, deler eller på anden vis distribuerer de oplysninger, vi indsamler her, til tredjepart.',
    'LBL_REG_CONF_3' => 'Tak for din registrering. Klik på knappen Udfør for at logge på SuiteCRM. Du skal logge på første gang med brugernavnet ""administrator"" og den adgangskode, du angav i trin 2.',
    'LBL_REG_TITLE' => 'Registrering',

    'LBL_REQUIRED' => '* Obligatorisk felt',

    'LBL_SITECFG_ADMIN_Name' => 'Navn på SuiteCRM-programadministrator',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Angiv adgangskode for SuiteCRM-administratorbruger igen',
    'LBL_SITECFG_ADMIN_PASS' => 'Adgangskode for SuiteCRM-administratorbruger',
    'LBL_SITECFG_APP_ID' => 'Program-id',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Hvis dette felt er markeret, skal du angive et program-id for at tilsidesætte det automatisk genererede id. Med id&#39;et sikrer du, at sessioner af én SuiteCRM-forekomst ikke bruges af andre forekomster. Hvis du har en klynge af SuiteCRM-installationer, skal de alle dele det samme program-id.',
    'LBL_SITECFG_CUSTOM_ID' => 'Angiv dit eget program-id',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Hvis dette felt er markeret, skal du angive en logmappe for at tilsidesætte standardmappen til SuiteCRM-logfilen. Uanset hvor logfilen er placeret, er adgangen til den via en webbrowser begrænset via en .htaccess-omdirigering.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Brug en brugerdefineret logmappe',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Hvis dette felt er markeret, skal du angive en sikker mappe til lagring af SuiteCRM-sessionsoplysninger. Dette kan gøres for at forhindre sårbare sessionsdata på delte servere.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Brug en brugerdefineret sessionsmappe til SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Ret følgende fejl, før du fortsætter:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Logmappe',
    'LBL_SITECFG_SESSION_PATH' => 'Sti til sessionsmappe<br>"skal være skrivbar"',
    'LBL_SITECFG_SITE_SECURITY' => 'Vælg sikkerhedsindstillinger',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Hvis dette felt er markeret, tjekker systemet jævnligt, om der er opdaterede versioner af programmet.',
    'LBL_SITECFG_SUITE_UP' => 'Søg automatisk efter opdateringer?',
    'LBL_SITECFG_TITLE' => 'Webstedskonfiguration',
    'LBL_SITECFG_TITLE2' => 'Identificer din SuiteCRM-forekomst',
    'LBL_SITECFG_SECURITY_TITLE' => 'Webstedssikkerhed',
    'LBL_SITECFG_URL' => 'URL til SuiteCRM-forekomst',
    'LBL_SITECFG_ANONSTATS' => 'Send statistik over anonym brug?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Hvis dette felt er markeret, sender SuiteCRM<b>anonyme</b> statistikker over din installation til SuiteCRM Inc., hver gang systemet tjekker, om der er nye versioner. Disse oplysninger hjælper os, så vi bedre kan forstå, hvordan programmet bruges, og vejlede om forbedringer til produktet.',
    'LBL_SITECFG_URL_MSG' => 'Angiv den URL, der skal bruges til at få adgang til SuiteCRM-forekomsten efter installationen. URL&#39; en bruges også som basis for URL&#39; erne på siderne i SuiteCRM-programmet. URL&#39; en skal indeholde navnet eller IP-adressen på webserveren eller computeren.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Angiv et navn på systemet. Dette navn vises i browserens titellinje, når brugerne besøger SuiteCRM-programmet.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Efter installationen skal du bruge SuiteCRM-administratorbrugeren "brugernavn = administrator" til at logge på SuiteCRM-forekomsten. Angiv en adgangskode for denne administratorbruger. Denne adgangskode kan ændres, efter at du har logget på første gang.',
    'LBL_SITECFG_COLLATION_MSG' => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn\'t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT' => 'Sprite støtte',
    'LBL_SYSTEM_CREDS' => 'Systemlegitimationsoplysninger',
    'LBL_SYSTEM_ENV' => 'Systemmiljø',
    'LBL_SHOW_PASS' => 'Vis adgangskoder',
    'LBL_HIDE_PASS' => 'Skjul adgangskoder',
    'LBL_HIDDEN' => '<i>"skjult"</i>',
    'LBL_STEP1' => 'Step 1 of 2 - Pre-Installation requirements',
    'LBL_STEP2' => 'Trin 2 af 2 - Konfiguration',
    'LBL_STEP' => 'Trin',
    'LBL_TITLE_WELCOME' => 'Velkommen til SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Er du klar til at installere?',
    'REQUIRED_SYS_COMP' => 'Obligatoriske systemkomponenter',
    'REQUIRED_SYS_COMP_MSG' =>
        'Før du begynder sikre dig venligst, at du har de understøttede versioner af følgende systemkomponenter:<br>
                      <ul>
                      <li> Database/Database Management System (F. eks.: MariaDB, MySQL eller SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Konsulter kompatibilitetsmatrixen i "Release Notes" for at se
                      kompatible systemkomponenter til den SuiteCRM-version, du installerer.<br>',
    'REQUIRED_SYS_CHK' => 'Indledende systemkontrol',
    'REQUIRED_SYS_CHK_MSG' =>
        'Når du starter installationen, vil der blive kørt et systemtjek på webserver, hvorpå SuiteCRM-filerne er placeret for at
                      sikre, at systemet er konfigureret korrekt og har alle de nødvendige komponenter
                      for at fuldføre installationen. <br><br>
                      Systemet kontrollerer alt nedenstående:<br>
                      <ul>
                      <li><b>PHP version</b> &#8211; skal være kompatibel med applikationen</li>
                      <li><b>Session Variabler</b> &#8211; skal fungere korrekt</li>
                      <li><b>MB Strings</b> &#8211; skal være installeret og aktiveret i php.ini</li>
                      <li><b>Database Understøttelse</b> &#8211; skal være MariaDB MySQL eller SQL Server</li>
                      <li><b>Config.php</b> &#8211; skal eksistere og skal have de nødvendige rettigheder, der gør den skrivbar</li>
                      <li>Følgende SuiteCRM-filer skal være skrivbare:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Hvis tjekket fejler vil du ikke være i stand til at fortsætte med installationen.
                                  Der vil blive vist en fejlmeddelelse, der forklare, hvorfor dit system ikke passerede kontrollen.
                                  Efter at have foretaget nødvendige ændringer, du kan gennemgå systemtjekket igen for at fortsætte installationen.<br>',


    'REQUIRED_INSTALLTYPE' => 'Standardinstallation eller specialinstallation',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Når systemkontrollen er udført, kan du vælge enten Standardinstallation eller Specialinstallation.<br><br> Til både <b>Standardinstallation</b> og <b>Specialinstallation</b> skal du kende følgende:<br> <ul> Den <li> <b>databasetype</b>, der skal rumme SuiteCRM-dataene <ul><li>Kompatible databasetyper: MySQL, MS SQL Server og Oracle.<br><br></li></ul></li> <li> <b>Navnet på den webserver</b> eller computer "vært", som databasen er placeret på <ul><li>Det kan være <i>lokal vært</i>, hvis databasen findes på din lokale computer eller findes på samme webserver eller computer som dine SuiteCRM-filer.<br><br></li></ul></li> <li><b>Navnet på den database</b>, som skal rumme SuiteCRM-dataene</li> <ul> <li> Du har måske allerede en eksisterende database, som du vil bruge. Hvis du angiver navnet på en eksisterende database, droppes tabellerne i databasen under installationen, når skemaet til SuiteCRM-databasen defineres.</li> <li> Hvis du ikke allerede har en database, bruges det navn, du angiver, til den nye database, der oprettes til forekomsten under installationen.<br><br></li> </ul> <li><b>Brugernavn og adgangskode for databaseadministratoren</b> <ul><li>Databaseadministratoren skal kunne oprette tabeller og brugere og skrive til databasen.</li><li>Du skal måske kontakte din databaseadministrator for at få disse oplysninger, hvis databasen ikke er placeret på din lokale computer, og/eller hvis du ikke er databaseadministratoren.<br><br></ul></li></li> <li> <b>Brugernavn og adgangskode til SuiteCRM-databasen</b> </li> <ul> <li> Brugeren kan være databaseadministratoren, eller du kan angive navnet på en anden eksisterende databasebruger. </li> <li> Hvis du vil oprette en ny databasebruger til dette formål, kan du angive et nyt brugernavn og en ny adgangskode under installationsprocessen, og brugeren oprettes under installationen. </li> </ul></ul><p> Til <b>specialinstallationen</b> skal du måske også kende følgende:<br> <ul> <li> <b>Den URL, der skal bruges til at få adgang til SuiteCRM-forekomsten</b>, når den er installeret. Denne URL skal indeholde navnet eller IP-adressen på webserveren eller computeren.<br><br></li> <li> [Valgfrit] <b>Stien til sessionsmappen</b>, hvis du vil bruge en brugerdefineret sessionsmappe til SuiteCRM-oplysninger for at forhindre sårbare sessionsdata på delte servere.<br><br></li> <li> [Valgfrit] <b>Stien til en brugerdefineret logmappe</b>, hvis du vil tilsidesætte standardmappen til SuiteCRM-logfilen.<br><br></li> <li> [Valgfrit] <b>Program-id&#39;et</b>, hvis du vil tilsidesætte det autogenererede id, der sikrer, at sessioner af en SuiteCRM-forekomst ikke bruges af andre forekomster.<br><br></li> <li><b>Det mest almindeligt brugte tegnsæt</b> i din landestandard.<br><br></li></ul> Du kan finde flere oplysninger i installationsvejledningen.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Læs følgende vigtige oplysninger, før du fortsætter med installationen. Oplysningerne hjælper dig med at bestemme, om du er klar til at installere programmet nu.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Vælg sprog</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Guiden Installation',
    'LBL_WIZARD_TITLE' => 'Guiden Installation af SuiteCRM: ',
    'LBL_YES' => 'Ja',

    'LBL_PATCHES_TITLE' => 'Installer de nyeste programrettelser',
    'LBL_MODULE_TITLE' => 'Installer sprogpakker',
    'LBL_PATCH_1' => 'Hvis du vil springe over dette trin, skal du klikke på Næste.',
    'LBL_PATCH_TITLE' => 'Systemrettelse',
    'LBL_PATCH_READY' => 'Følgende programrettelse"r" er klar til at blive installeret:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM er afhængig af PHP sessioner til at gemme vigtige oplysninger, mens den er forbundet til denne webserver. Din PHP-installation har ikke sessionsinformationer konfigureret korrekt.
											_ _ _ _ _ _ _ _											<br><br>En typisk fejlkonfiguration er, at <b>'session.save_path'</b> direktivet ikke peger på en gyldig mappe. <br>
											
											<br> Ret venligst din <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP-konfiguration</a> i php.ini-filen, der er placeret her nedenfor.",
    'LBL_SESSION_ERR_TITLE' => 'Fejl under konfiguration af PHP-sessioner',
    'LBL_SYSTEM_NAME' => 'Systemnavn',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Angiv et systemnavn til SuiteCRM-forekomsten.',
    'LBL_PATCH_UPLOAD' => 'Vælg en rettelsesfil fra den lokale computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 eller nyere er påkrævet.',
    'LBL_MINIMUM_PHP_VERSION' => 'Mindste krævede Php-version er 5.1.0. Anbefalet Php-version er 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Din aktuelle php-version er',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Den anbefalede php-version er 5.2x"',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Tilstanden Php-bagudkompatibilitet er aktiveret. Angiv zend.ze1_compatibility_mode til Fra for at fortsætte',
    'LBL_STREAM' => 'PHP tillader at bruge stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Ny kontoinformation',
        'type' => 'system',
        'description' => 'Denne skabelon bruges, når systemadministratoren sender en ny adgangskode til en bruger.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Her er dit kontonavn og midlertidig adgangskode:</p><p>Brugernavn : $contact_user_user_name </p><p>Adgangskode : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Når du logger ind med ovenstående adgangskode, kan det være du er nødt til at nulstille adgangskoden til et andet efter eget valg.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Her er dit kontonavn og midlertidige adgangskode:
Brugernavn : $contact_user_user_name
Adgangskode : $contact_user_user_hash

$config_site_url

Når du logger ind med ovenstående adgangskode, kan du være nødt til at nulstille adgangskoden til en ny efter eget valg.',
        'name' => 'Systemgenereret adgangskode e-mail',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Nulstil adgangskoden til din konto',
        'type' => 'system',
        'description' => "Denne skabelon bruges til at sende en bruger et link til at klikke for at nulstille brugerens kontoadgangskode.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Du har for nylig anmodet om $contact_user_pwd_last_changed for at kunne nulstille din kontoadgangskode. </p><p>Klik på nedenstående link for at nulstille din adgangskode:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Du har for nylig anmodet $contact_user_pwd_last_changed om at nulstille din kontoadgangskode.

Klik på linket nedenfor for at nulstille din adgangskode:

$contact_user_link_guid',
        'name' => 'Glemt adgangskode e-mail',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'To Faktor Godkendelseskode',
        'type' => 'system',
        'description' => "Denne skabelon bruges til at sende en bruger en kode til to-faktor godkendelse.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>To-Faktor Autentificeringskoden er <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'To-Faktor Autentificeringskoden er $code.',
        'name' => 'To-faktor autentificerings e-mail',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Fra" navn:',
    'LBL_FROM_ADDR' => '"Fra" adresse:',

    'LBL_WIZARD_SMTP_DESC' => 'Angiv e-mail-kontoen som vil blive brugt til at sende e-mails såsom opgavepåmindelser og nye brugeradgangskoder. Brugerne vil modtage e-mails fra SuiteCRM, sendt fra den angivne e-mail-konto.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vælg din e-mail-udbyder:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Andre',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specifikation',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Bruke SMTP godkjenning?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Aktiverer SMTP over SSL eller TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail-adresse:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail adgangskode:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillad at brugerne bruger denne konto til udgående e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Når denne indstilling er valgt, kan alle brugere sende e-mails ved hjælp af den samme udgående <br>e-mail-konto, som bruges til at sende systemmeddelelser og -beskeder. Hvis indstillingen ikke er valgt,<br> kan brugerne stadig bruge den udgående e-mail-server, når de har angivet deres kontooplysninger.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail adgangskode:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail id:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange adgangskode:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange brugernavn:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverport:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP-brugernavn:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Passord:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Opgiv dit firmanavn og logo med henblik på at brande din SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Navn:',
    'SYSTEM_NAME_HELP' => 'Dette er navnet som vises i titelbaren i din browser.',
    'NEW_LOGO' => 'Vælg nyt logo',
    'NEW_LOGO_HELP' => 'Billedfilformatet kan være enten .png eller .jpg. Den maksimale højde er 170px, og den maksimale bredde er 450px. Ethvert uploadet billede, der er større i alle retninger, vil blive skaleret til disse max dimensioner.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Upload',
    'CURRENT_LOGO' => 'Aktuelt logo',
    'CURRENT_LOGO_HELP' => 'Dette logo vises i centrum af login-skærmen i SuiteCRM applikationen.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenarie Valg',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Der er ingen scenarier angivet i konfigurationsfilen (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Indstillinger for systemets landestandard',
    'LBL_WIZARD_LOCALE_DESC' => 'Angive hvordan du gerne vil have data i SuiteCRM til at blive vist baseret på din geografiske placering. De indstillinger, du giver her, vil være standard-indstillingerne. Brugerne vil være i stand til at sætte deres egne præferencer.',
    'LBL_DATE_FORMAT' => 'Datoformat:',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_TIMEZONE' => 'Tidszone:',
    'LBL_LANGUAGE' => 'Sprog:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Valutakode:',
    'LBL_NUMBER_GROUPING_SEP' => 'Tusindtalsseparator',
    'LBL_DECIMAL_SEP' => 'Decimaltegn:',
    'LBL_NAME_FORMAT' => 'Navneformat:',
    'UPLOAD_LOGO' => 'Vent venligst, logo uploades..',
    'ERR_UPLOAD_FILETYPE' => 'Filtypen er ikke tilladt, upload venligst en jpeg eller png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ukendt fil, uploadfejl opstod.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Den uploadede fil overstiger upload_max_filesize-direktivet i php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Den uploadede fil overstiger MAX_FILE_SIZE-direktivet, som er angivet i HTML-formularen.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Den uploadede fil blev kun delvist uploadet.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Ingen fil blev uploadet.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'En midlertidig mappe mangler.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Filen kunne ikke skrives på disken.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'En PHP udvidelse stoppede filen upload. PHP giver ikke en måde at fastslå, hvilken udvidelse der forårsagede, at upload af filen stoppede.',

    'LBL_INSTALL_PROCESS' => 'Install...',

    'LBL_EMAIL_ADDRESS' => 'Email:',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Websted URL er påkrævet.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'Create database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Create default settings...',
    'STAT_INSTALL_FINISH' => 'Installer slut...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installationsprocessen er færdig, <a href="%s">log ind...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'Flere muligheder',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Databasefejl',
    'LBL_OLD_PHP' => 'Gamle PHP Version opdaget!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Jeg er opmærksom på risiciene og ønsker at fortsætte.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Tildelt til',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Databasenavn',
    'LBL_DBCONFIG_MSG3' => 'Navnet på den database, der skal indeholde dataene til den SuiteCRM-forekomst, du er i færd med at installere:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Værtsnavn',
    'LBL_DBCONFIG_MSG2' => 'Navn på webserver eller maskine (vært) hvor databasen er placeret (såsom www.mydomain.com). Hvis du installerer lokalt, er det bedre at bruge \'localhost\' end \'127.0.0.1\', af performance hensyn.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Brugernavnet og adgangskoden på en databaseadministrator, der kan oprette databasetabeller og brugere, og som kan skrive til databasen, skal bruges til at konfigurere SuiteCRM-databasen.'
);
