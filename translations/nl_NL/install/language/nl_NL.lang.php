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
    'LBL_BASIC_SEARCH' => 'Snelfilter',
    'LBL_ADVANCED_SEARCH' => 'Geavanceerd filter',
    'LBL_BASIC_TYPE' => 'Basis type',
    'LBL_ADVANCED_TYPE' => 'Geavanceerd type',
    'LBL_SYSOPTS_2' => 'Welk type database gaat deze SuiteCRM instantie gebruiken?',
    'LBL_SYSOPTS_DB' => 'Specificeer Database Type',
    'LBL_SYSOPTS_DB_TITLE' => 'Database type',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Verhelp de volgende fouten a.u.b. voordat u verder gaat:',
    'ERR_DB_VERSION_FAILURE' => 'Kan de database versie niet controleren',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Geef de gebruikersnaam van de SuiteCRM admin gebruiker. ',
    'ERR_ADMIN_PASS_BLANK' => 'Vul het wachtwoord in van de SuiteCRM admin gebruiker (de beheerder). ',

    'ERR_CHECKSYS' => 'Er zijn fouten ontdekt tijdens de compatibiliteitscheck. Om uw SuiteCRM installatie goed te laten functioneren, dienen onderstaande issues te worden opgelost, druk daarna op de recheck-button of probeer opnieuw te installeren.',
    'ERR_CHECKSYS_CALL_TIME' => 'Toestaan dat de Call Time Pass Referentie is ingeschakeld (dit moet op Uit staan in de php.ini)',
    'ERR_CHECKSYS_CURL' => 'Niet gevonden: SuiteCRM planner zal alleen met beperkte functionaliteit draaien.',
    'ERR_CHECKSYS_IMAP' => 'Niet gevonden: InboundEmail en Campagnes (Email) vereisen de IMAP-bibliotheken. Geen van beiden zullen functioneel zijn.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Zet dit op',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M of hoge in uw php.ini bestand)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Waarschuwing: Niet Schrijfbaar',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Uw versie van PHP wordt niet ondersteund door SuiteCRM. U moet een versie hebben die compatibel is. Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde PHP-versies. Uw versie is ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Uw versie van IIS wordt niet ondersteund door SuiteCRM. Het moet een versie zijn die compatibel is met het te installeren SuiteCRM programma. Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde IIS-versies. Uw versie is ',
    'ERR_CHECKSYS_FASTCGI' => 'Er is geconstateerd dat u geen &#39;FastCGI handler mapping&#39;  voor PHP gebruikt. U dient een versie te installeren/configureren die verenigbaar is met SuiteCRM.  Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde versies.  Bekijk <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> voor meer informatie ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Voor optimale gebruik met IIS / FastCGI sapi, stel fastcgi.logging in op 0 in het php.ini bestand.',
    'LBL_DB_UNAVAILABLE' => 'Database niet beschikbaar',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Database Support is niet gevonden. Zorg ervoor dat u de benodigde drivers voor een van de volgende ondersteunde Database Types heeft: MySQL, MS SQLServer of Oracle. Het kan zijn dat u  de exentie in het php.ini bestand moet uncommenten, of opnieuw te compileren met de juiste binary bestand, afhankelijk van uw versie van PHP. Raadpleeg uw PHP Handleiding voor meer informatie over hoe u Database Support kunt inschakelen',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Functies behorende bij "XML Parser Libraries" benodigd door SuiteCRM zijn niet gevonden. Controleer php.ini of de regels nog als commentaar zijn opgevoerd of hercompileer de binary file, afhankelijk van uw PHP versie. Raadpleeg de PHP handleiding voor meer informatie.',
    'ERR_CHECKSYS_MBSTRING' => 'Functies behorende bij Multibyte Strings PHP Extension benodigd door SuiteCRM zijn niet gevonden. <br/><br/>N. B. Standaard wordt de module niet geinstalleerd in PHP, om deze alsnog te activeren dient deze met "--enable-mbstring" te worden meegegeven als de PHP Binary wordt opgebouwd. Raadpleeg de PHP handleiding voor meer informatie.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functies die gekoppeld zijn aan JSON Parser Libraries die nodig zijn door SuiteCRM zijn niet gevonden. Mogelijk moet u de extensie op de telefoon ongedaan maken. ni bestand, of hercompileren met het juiste binary bestand, afhankelijk van uw PHP. Raadpleeg uw PHP handleiding voor meer informatie.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Configuratie override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode staat aan. Het kan wenselijk zijn dit uit te schakelen in de php.ini',
    'ERR_CHECKSYS_ZLIB' => 'Niet gevonden: SuiteCRM heeft veel betere performance indien zlib compressie is ingeschakeld.',
    'ERR_CHECKSYS_ZIP' => 'ZIP support niet gevonden: SuiteCRM heeft ZIP ondersteuning nodig voor gecomprimeerde bestanden.',
    'ERR_CHECKSYS_PCRE' => 'PCRE bibliotheek niet gevonden: SuiteCRM heeft de PCRE bibliotheek nodig voor Perl style regular expressions pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE bibliotheek versie: SuiteCRM heeft PCRE bibliotheek 7.0 of hoger nodig voor Perl style regular expressions pattern matching',
    'ERR_DB_ADMIN' => 'Gebruikersnaam en/of wachtwoord van de opgegeven database administrator zijn ongeldig. Hierdoor kan er geen koppeling met de database gemaakt worden. Voer een geldige gebruikersnaam en wachtwoord op.(Error:',
    'ERR_DB_ADMIN_MSSQL' => 'Gebruikersnaam en/of wachtwoord van de opgegeven database administrator zijn ongeldig. Hierdoor kan er geen koppeling met de database gemaakt worden.  Voer een geldige gebruikersnaam en wachtwoord op.',
    'ERR_DB_EXISTS_NOT' => 'Gespecificeerde database bestaat niet',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Deze database bestaat reeds en bevat informatie. Om toch deze installatie uit te voeren, dient u de installatie opnieuw te starten en de optie: "Verwijder bestaande tabellen en maak nieuwe SuiteCRM tabellen aan" te selecteren. Om een upgrade uit te voeren dient u de Upgrade Wizard door te lopen in het adminscherm. Voor meer informatie betreffende de upgrade klik <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">hier</a>.',
    'ERR_DB_EXISTS' => 'Deze database bestaat al, het is niet mogelijk nog een met dezelfde naam aan te maken',
    'ERR_DB_EXISTS_PROCEED' => 'Deze database bestaat al. U kunt middels de "terug"-knop een andere databasenaam kiezen, of op volgende drukken en alle bestanden in de bestaande database vernietigen. Al uw gegevens zijn daarna verdwenen.',
    'ERR_DB_HOSTNAME' => 'Host naam mag niet leeg zijn.',
    'ERR_DB_INVALID' => 'Ongeldige database type gekozen.',
    'ERR_DB_LOGIN_FAILURE' => 'De opgegeven database gebruikersnaam en / of wachtwoord is ongeldig, en een verbinding met de database kon niet worden gemaakt. Vul een geldige gebruikersnaam en wachtwoord in.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'De opgegeven database gebruikersnaam en / of wachtwoord is ongeldig, en een verbinding met de database kon niet worden gemaakt. Vul een geldige gebruikersnaam en wachtwoord in.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'De opgegeven database gebruikersnaam en / of wachtwoord is ongeldig, en een verbinding met de database kon niet worden gemaakt. Vul een geldige gebruikersnaam en wachtwoord in.',
    'ERR_DB_MYSQL_VERSION' => 'Uw MySQL versie (%s) wordt niet ondersteund door SuiteCRM. U moet een versie die compatibel is met de SuiteCRM toepassing te installeren. Raadpleeg de compatibiliteit Matrix in de Release notities voor ondersteunde versies van MySQL.',
    'ERR_DB_NAME' => 'Database naam mag niet leeg zijn',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Database naam mag geen &#39;\\&#39;, &#39;/&#39;, or &#39;.&#39; bevatten",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Database naam mag geen &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, or &#39;-&#39; bevatten",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Database naam kan alleen alfanumerieke tekens en symbolen '#', '_' of '$' bevatten",
    'ERR_DB_PASSWORD' => 'De wachtwoorden voor de SuiteCRM Database Administrator komen niet overeen. Voer a.u.b. het wachtwoord opnieuw in.',
    'ERR_DB_PRIV_USER' => 'Voer de Database Administrator Gebruikersnaam in. Dit is benodigd voor de koppeling met de database',
    'ERR_DB_USER_EXISTS' => 'De gebruikersnaam voor de SuiteCRM Database bestaat reeds. Voer een andere op.',
    'ERR_DB_USER' => 'Voer een gebruikersnaam in voor SuiteCRM database administrator.',
    'ERR_DBCONF_VALIDATION' => 'Verhelp de volgende fouten a.u.b. voordat u verder gaat:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'De wachtwoorden komen niet overeen. Vul de wachtwoorden a.u.b. opnieuw in',
    'ERR_ERROR_GENERAL' => 'De volgende fouten zijn geconstateerd:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Kan bestand niet verwijderen:',
    'ERR_LANG_MISSING_FILE' => 'Kan bestand niet vinden:',
    'ERR_LANG_NO_LANG_FILE' => 'Er is geen taalpakket gevonden in include/language:',
    'ERR_LANG_UPLOAD_1' => 'Er is een fout opgetreden bij het uploaden. Probeer het a.u.b. opnieuw.',
    'ERR_LANG_UPLOAD_2' => 'Taalpakket moet een zip-bestand zijn',
    'ERR_LANG_UPLOAD_3' => 'PHP kon de temp niet verplaatsen naar de upgrade directory',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Log directory is niet geldig.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Log directory is niet schrijfbaar.',
    'ERR_NO_DIRECT_SCRIPT' => 'Kan script niet uitvoeren.',
    'ERR_NO_SINGLE_QUOTE' => 'Kan het enkelvoudige aanhalingsteken niet gebruiken voor ',
    'ERR_PASSWORD_MISMATCH' => 'De wachtwoorden voor de SuiteCRM Admin Gebruiker komen niet overeen. Voer a.u.b. het wachtwoord opnieuw in.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Kan niet schrijven naar de <span class=stop>config.php</span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'U kunt verder gaan door de config.php handmatig aan te maken en de onderstaande regels erin te plakken. Hoe dan ook, u MOET de config.php eerst aanmaken alvorens verder te gaan met de volgende stap.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Heeft u de config.php file aangemaakt?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Waarschuwing: Kon de config.php file niet schrijven. Controleer of het bestaat.',
    'ERR_PERFORM_HTACCESS_1' => 'kan niet schrijven naar',
    'ERR_PERFORM_HTACCESS_2' => 'file.',
    'ERR_PERFORM_HTACCESS_3' => 'Als uw logfile niet benaderbaar mag zijn via een browser, maak dan een .htaccess file aan in uw log directory met daarin de volgende regel:',
    'ERR_PERFORM_NO_TCPIP' => '<b>We konden geen internetverbinding detecteren.</b> Wanneer u een verbinding heeft, bezoek dan <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> om te registreren bij SuiteCRM. Door ons te laten weten hoe uw bedrijf van plan is SuiteCRM te gebruiken, we kunnen ervoor zorgen dat we altijd de juiste applicatie leveren voor uw zakelijke behoeften.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory is niet geldig.',
    'ERR_SESSION_DIRECTORY' => 'Session directory provided is niet schrijfbaar.',
    'ERR_SESSION_PATH' => 'Session path is verplicht indien u een eigen wil.',
    'ERR_SI_NO_CONFIG' => 'Er is geen config_si.php in de document root, OF er is geen $sugar_config_si gedefinieerd in de config.php',
    'ERR_SITE_GUID' => 'Application ID is verplicht indien u een eigen wil.',
    'ERROR_SPRITE_SUPPORT' => "Op dit moment zijn we niet instaat om de GD Bibliotheek te vinden, hierdoor is het niet mogelijk gebruik te maken van de CSS Sprite functionaliteit. ",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Upload bestandsgrootte ',
    'ERR_URL_BLANK' => 'Geef de standaard URL in voor deze SuiteCRM instantie.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Kan het installatierecord niet vinden',
    'ERROR_MANIFEST_TYPE' => 'Het Manifest bestand moet het type van deze package aangeven',
    'ERROR_PACKAGE_TYPE' => 'Het manifest bestand geeft een onbekend package type aan',
    'ERROR_VERSION_INCOMPATIBLE' => 'Dit bestand is niet compatible met deze versie van de SuiteCRM:',

    'LBL_BACK' => 'Terug',
    'LBL_CANCEL' => 'Annuleren',
    'LBL_ACCEPT' => 'Ik ga accoord',
    'LBL_CHECKSYS_CACHE' => 'S§chrijfbare Cache Sub-Directories',
    'LBL_DROP_DB_CONFIRM' => 'Deze database bestaat al. U kunt middels de "terug"-knop een andere databasenaam kiezen, of op volgende drukken en alle bestanden in de bestaande database vernietigen. Al uw gegevens zijn daarna verdwenen.',
    'LBL_CHECKSYS_COMPONENT' => 'Component',
    'LBL_CHECKSYS_CONFIG' => 'Schrijfbare SuiteCRM Configuration File (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL module',
    'LBL_CHECKSYS_CUSTOM' => 'Schrijfbare Custom Directory',
    'LBL_CHECKSYS_DATA' => 'Schrijfbare Data Sub-Directories',
    'LBL_CHECKSYS_IMAP' => 'IMAP-Module',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB-Strings-Module',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Geen Limiet)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Ongelimiteerd)',
    'LBL_CHECKSYS_MEM' => 'PHP Memory Limiet',
    'LBL_CHECKSYS_MODULE' => 'Schrijfbare Modules Sub-Directories en Files',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Niet Beschikbaar',
    'LBL_CHECKSYS_OK' => 'OK ',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'PHP Versie',
    'LBL_CHECKSYS_IISVER' => 'IIS Versie',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Opnieuw controleren',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'System Check Aanvaarding',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB compressie Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Handling Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE bibliotheek',
    'LBL_CHECKSYS_FIX_FILES' => 'Bevestig de volgende bestanden en directories voor verder te gaan:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Bevestig de volgende module directories en de bestanden in deze directories voor verder te gaan:',
    'LBL_CHECKSYS_UPLOAD' => 'Beschrijfbare upload map',
    'LBL_CLOSE' => 'Sluiten',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'wordt gemaakt',
    'LBL_CONFIRM_DB_TYPE' => 'Database type',
    'LBL_CONFIRM_NOT' => 'niet',
    'LBL_CONFIRM_TITLE' => 'Bevestig Instellingen',
    'LBL_CONFIRM_WILL' => 'zal',
    'LBL_DBCONF_DB_DROP' => 'Verwijder Tabellen',
    'LBL_DBCONF_DB_NAME' => 'Database Naam',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Database User Wachtwoord',
    'LBL_DBCONF_DB_PASSWORD2' => 'Bevestig SuiteCRM Database User Wachtwoord',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database Gebruiker',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database Gebruiker',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Database Administrator Gebruikersnaam',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Database Admin Wachtwoord',
    'LBL_DBCONF_COLLATION' => 'Collatie',
    'LBL_DBCONF_CHARSET' => 'Tekenset',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Geavanceerde Database Configuratie',
    'LBL_DBCONF_DEMO_DATA' => 'Vul Database met Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Kies Demo Data',
    'LBL_DBCONF_HOST_NAME' => 'Host Naam',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Instance',
    'LBL_DBCONFIG_SECURITY' => 'Voor beveiligingsdoeleinden kunt u ervoor kiezen een exclusieve database gebruiker op te geven om de verbinding te maken met de SuiteCRM Database. Deze gebruiker moet dan wel dezelfde rechten hebben als de database administrator.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Verstrek een bestaande gebruiker',
    'LBL_DBCONFIG_CREATE_DD' => 'Definieer een gebruiker om aan te maken',
    'LBL_DBCONFIG_SAME_DD' => 'Zelfde als Admin Gebruiker',
    'LBL_DBCONF_TITLE' => 'Database Configuratie',
    'LBL_DBCONF_TITLE_NAME' => 'Verstrek Database Naam',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Verstrek Database Gebruiker Informatie',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Wachtwoord',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'De installatieprocedure is reeds uitgevoerd. Voor veiligheidsdoeleinden is het onmogelijk gemaakt het proces een tweede keer op te starten. Mocht u absoluut zeker weten dat u toch opnieuw wil installeren. Ga dan naar de config.php en zet de variabele "installer_locked" op false. De regel moet er zo uitzien:',
    'LBL_DISABLED_HELP_1' => 'Voor hulp bij de installatie bezoek SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM installatie is uitgeschakeld',
    'LBL_HELP' => 'Hulp',
    'LBL_INSTALL' => 'Installeren',
    'LBL_INSTALL_TYPE_TITLE' => 'Installatie Opties',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Kies Installeer Type',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Typische Installatie</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Aangepaste Installatie</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Vereist minimale informatie voor de installatie. Aanbevolen voor nieuwe gebruikers.',
    'LBL_INSTALL_TYPE_MSG3' => 'Biedt extra opties om in te stellen tijdens de installatie. De meeste van deze opties zijn ook beschikbaar na de installatie in de admin-schermen (beheerder-module). Aanbevolen voor gevorderde gebruikers.',
    'LBL_LANG_1' => 'Voor het gebruik van een andere taal dan de standaard taal (US-Engels), kunt u nu het taalpakket uploaden en installeren. Dit kan trouwens ook later vanuit SuiteCRM. Als u deze stap wilt overslaan, druk op -volgende-.',
    'LBL_LANG_BUTTON_COMMIT' => 'Installeren',
    'LBL_LANG_BUTTON_REMOVE' => 'Verwijderen',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Deïnstalleer',
    'LBL_LANG_BUTTON_UPLOAD' => 'Uploaden',
    'LBL_LANG_NO_PACKS' => 'geen',
    'LBL_LANG_PACK_INSTALLED' => 'De volgende taalpakketten zijn geinstalleerd:',
    'LBL_LANG_PACK_READY' => 'De volgende taalpakketten staan klaar om te worden geinstalleerd:',
    'LBL_LANG_SUCCESS' => 'Het taalpakket is succesvol geinstalleerd.',
    'LBL_LANG_TITLE' => 'Taalpakket',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Bezig met het installeren van SuiteCRM.  Dit kan een paar minuten duren.',
    'LBL_LANG_UPLOAD' => 'Upload een taalpakket',
    'LBL_LICENSE_ACCEPTANCE' => 'Licentie Acceptering',
    'LBL_LICENSE_CHECKING' => 'Controle systeem voor de compatibiliteit.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Omgeving controleren',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifieren van DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'Compatibiliteitscheck is gelukt.',
    'LBL_CREATE_CACHE' => 'Voorbereiden om te installeren...',
    'LBL_LICENSE_REDIRECT' => 'U wordt omgeleid naar',
    'LBL_LICENSE_I_ACCEPT' => 'Ik ga accoord',
    'LBL_LICENSE_PRINTABLE' => 'Afdrukvoorbeeld',
    'LBL_PRINT_SUMM' => 'Samenvatting afdrukken',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM Licentie',

    'LBL_LOCALE_NAME_FIRST' => 'Jan',
    'LBL_LOCALE_NAME_LAST' => 'Janssen',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Actie',
    'LBL_ML_DESCRIPTION' => 'Omschrijving',
    'LBL_ML_INSTALLED' => 'Installatiedatum',
    'LBL_ML_NAME' => 'Naam',
    'LBL_ML_PUBLISHED' => 'Releasedatum',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Oninstalleerbaar',
    'LBL_ML_VERSION' => 'Versie',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver voor PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli-extentie)',
    'LBL_NEXT' => 'Volgende',
    'LBL_NO' => 'Nee',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setting site admin wachtwoord',
    'LBL_PERFORM_CONFIG_PHP' => 'Aanmaken SuiteCRM configuratie bestand',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Aanmaken van de database</b>',
    'LBL_PERFORM_CREATE_DB_2' => '<b>van</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'Aanmaken van de database gebruikersnaam en wachtwoord ...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Het creëren van standaard SuiteCRM gegevens ...',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Het creëren van standaard taken planner',
    'LBL_PERFORM_DEFAULT_USERS' => 'Standaard gebruikers aanmaken',
    'LBL_PERFORM_DEMO_DATA' => 'Het vullen van de database met demo-gegevens (dit kan even duren)',
    'LBL_PERFORM_DONE' => 'klaar<br>',
    'LBL_PERFORM_FINISH' => 'Klaar',
    'LBL_PERFORM_OUTRO_1' => 'De setup van SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => 'is nu compleet!',
    'LBL_PERFORM_OUTRO_3' => 'Totale tijd:',
    'LBL_PERFORM_OUTRO_4' => 'seconden.',
    'LBL_PERFORM_OUTRO_5' => 'Geschat geheugen gebruik:',
    'LBL_PERFORM_OUTRO_6' => 'bytes.',
    'LBL_PERFORM_SUCCESS' => 'Succes!',
    'LBL_PERFORM_TABLES' => 'Het creëren van SuiteCRM bestanden, audit bestanden en relatie metadata',
    'LBL_PERFORM_TITLE' => 'Setup Uitvoeren',
    'LBL_PRINT' => 'Afdrukken',
    'LBL_REG_CONF_1' => 'Vul het onderstaande formulier in om product aankondigingen, training nieuws, speciale aanbiedingen en speciale uitnodigingen te ontvangen van SuiteCRM. SuiteCRM zal de verzamelde informatie niet verkopen, verhuren of op andere wijze distribueren aan derden.',
    'LBL_REG_CONF_3' => 'Bedankt voor het registreren. Klik op de knop Voltooien om in te loggen in SuiteCRM. U moet de eerste keer inloggen met gebruikersnaam "admin" en het wachtwoord die u hebt ingevoerd in stap 2.',
    'LBL_REG_TITLE' => 'Registratie',

    'LBL_REQUIRED' => '* Verplicht veld',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Admin Naam',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Geef wachtwoord opnieuw in',
    'LBL_SITECFG_ADMIN_PASS' => 'Wachtwoord',
    'LBL_SITECFG_APP_ID' => 'Applicatie ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Indien geselecteerd, moet u een applicatie-ID invoeren om de automatisch gegenereerde ID te overschrijven. Deze ID zorgt ervoor dat de sessies van 1 SuiteCRM instance niet worden gebruikt bij andere instances. Indien er sprake is van een cluster van installaties, dan dienen deze dezelfde ID te gebruiken.',
    'LBL_SITECFG_CUSTOM_ID' => 'Verstrek uw eigen Applicatie-ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Indien geselecteerd, moet u een log directory specificeren die de standaard directory voor de SuiteCRM log zal overschrijven. Ongeacht waar het log-bestand zich bevindt, de toegang tot dit bestand via een webbrowser zal worden beperkt middels een .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Gebruik een Eigen Log Directory',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Indien geselecteerd, moet u een beveiligde map voor het opslaan van SuiteCRM sessie informatie opgeven. Dit om te voorkomen dat deze data kwetsbaar is op gedeelde servers.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Gebruik een Eigen Sessie directory voor SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Los a.u.b. eerst de volgende fouten op alvorens verder te gaan:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log directory',
    'LBL_SITECFG_SESSION_PATH' => 'Pad naar Session Directory<br>(dient schrijfbaar te zijn)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selecteer Beveiliging Opties',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Indien geselecteerd, zal het systeem regelmatig controleren of er nieuwere versies van de applicatie zijn.',
    'LBL_SITECFG_SUITE_UP' => 'Automatisch controleren op updates?',
    'LBL_SITECFG_TITLE' => 'Site-Configuratie',
    'LBL_SITECFG_TITLE2' => 'Identificeer uw SuiteCRM instance',
    'LBL_SITECFG_SECURITY_TITLE' => 'Site Beveiliging',
    'LBL_SITECFG_URL' => 'URL van de SuiteCRM Instance',
    'LBL_SITECFG_ANONSTATS' => 'Verzend de Anonieme Gebruiks-Statistieken?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Indien geselecteerd, zal SuiteCRM <b>anonieme</b> statistieken over uw installatie naar SuiteCRM Inc sturen (bij elke controle op nieuwere versies). Deze informatie geeft ons inzicht hoe de applicatie wordt gebruikt en dient als gids voor verbeteringen aan het product.',
    'LBL_SITECFG_URL_MSG' => 'Geef de URL op die zal worden gebruikt om toegang tot SuiteCRM te krijgen na de installatie. Deze URL zal ook worden gebruikt als basis-URL in de SuiteCRM pagina&#39;s. De URL moet de webserver of machine naam of IP-adres bevatten.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Voer een naam in voor uw systeem. Deze naam wordt weergegeven in de titelbalk van de browser wanneer gebruikers toegang tot SuiteCRM zoeken.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Na de installatie moet u met de SuiteCRM admin gebruiker (gebruikersnaam = admin) inloggen. Voer een wachtwoord in voor deze gebruiker. Dit wachtwoord kan gewijzigd worden na de eerste login. U kunt ook een andere admin-gebruikersnaam gebruiken naast de standaard-admin.',
    'LBL_SITECFG_COLLATION_MSG' => 'Selecteer sorteerinstellingen (sorteren) voor uw systeem. Deze instellingen zullen de tabellen maken met de specifieke taal die u gebruikt. In het geval uw taal geen speciale instellingen vereist worden de standaard instellingen gebruikt.',
    'LBL_SPRITE_SUPPORT' => 'Sprite-ondersteuning',
    'LBL_SYSTEM_CREDS' => 'Systeem Identiteit',
    'LBL_SYSTEM_ENV' => 'Systeem Omgeving',
    'LBL_SHOW_PASS' => 'Toon Wachtwoorden',
    'LBL_HIDE_PASS' => 'Verberg Wachtwoorden',
    'LBL_HIDDEN' => '<i>(verborgen)</i>',
    'LBL_STEP1' => 'Stap 1 van 2 - Pre-Installatie eisen',
    'LBL_STEP2' => 'Stap 2 van 2 - Instellingen',
    'LBL_STEP' => 'Stap',
    'LBL_TITLE_WELCOME' => 'Welkom bij SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Klaar voor installatie?',
    'REQUIRED_SYS_COMP' => 'Vereiste Systeemcomponenten',
    'REQUIRED_SYS_COMP_MSG' =>
        'Controleer voordat je begint dat je de ondersteunde versies van de onderstaande systeemonderdelen hebt:<br>
                      <ul>
                      <li> Database/Database Management System (Bijvoorbeeld: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Raadpleeg de Compitabiliteitsmatrix in de releasedocumentatie voor
                      ondersteunde systeemonderdelen voor de versie van SuiteCRM die je installeert.<br>',
    'REQUIRED_SYS_CHK' => 'Initiële Systeem Check',
    'REQUIRED_SYS_CHK_MSG' =>
        'Wanneer je de installatie begint, wordt er een controle uitgevoerd op de webserver waarop SuiteCRM zich bevindt. Dit is om 

                      er zeker van te zijn dat de webserver juist is geconfigureerd en alle benodigde modules heeft
                      om de installatie succesvol uit te kunnen voeren. <br><br>
                      Het systeem controleert op de volgende zaken:<br>
                      <ul>
                      <li><b>PHP-versie</b> &#8211; moet compitabel zijn met SuiteCRM</li>
                      <li><b>Session Variables</b> &#8211; must be working properly</li>
                      <li><b>MB Strings</b> &#8211; moet geïnstalleerd en geactiveerd zijn in php.ini</li>
                      <li><b>Databaseondersteuning</b> &#8211; moet geboden zijn for MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; moet bestaan en voldoende rechten hebben om beschreven te worden</li>
                      <li>De volgende SuiteCRM-bestanden moeten schrijfbaar zijn:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Als de controle faalt kan er niet verder worden gegaan met de installatie. 
                                  Een foutmelding wordt getoond met de uitleg waarom SuiteCRM niet kan worden geïnstalleerd.
                                  Na het maken van de benodigde aanpassingen kun je de controle opnieuw uitvoeren.<br>',


    'REQUIRED_INSTALLTYPE' => 'Standaard of Aangepaste installatie',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Nadat de systeemcontrole is uitgevoerd, kunt u kiezen voor de Standaard of de Aangepaste installatie.<br><br><br />                      Voor zowel de <b>Standaard</b> als <b>Aangepast</b> installatie, gelden de volgende zaken:<br><br />                      <ul><br />                      <li> <b>Type database</b> dat de SuiteCRM data zal bevatten <ul><li>Ondersteunde database<br />                      types: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Naam van de web server</b> of machine (host) waar de database staat.<br />                      <ul><li>Dat kan <i>localhost</i> zijn wanneer de database op uw eigen computer of op dezelfde webserver/machine staat waar ook de SuiteCRM bestanden staan.<br><br></li></ul></li><br />                      <li><b>Naam van de database</b> dat de SuiteCRM Data zal bevatten</li><br />                        <ul><br />                          <li> Misschien heeft u al een bestaande database die u wil (her)gebruiken. Vult u de naam in van een bestaande database, dan zullen de tabellen<br />                          in deze bestaande database worden verwijderd en opnieuw aangemaakt bij het aanmaken van het SuiteCRM schema.</li><br />                          <li> Heeft u nog geen database, dan zal die naam worden gebruikt om een nieuwe database aan te maken voor deze installatie..<br><br></li><br />                        </ul><br />                      <li><b>Database administrator gebruikersnaam en wachtwoord</b> <ul><li>De database administrator (beheerder) moet in staat zijn tabellen en gebruikers aan te maken en schrijfrechten <br />                      hebben op de database.</li><li>Misschien is het nodig uw systeembeheerder te contacteren voor deze informatie indien de database<br />                      niet op uw locale computer staat en/of u niet de database administrator (beheerder)  bent.<br><br></ul></li></li><br />                      <li> <b>SuiteCRM database gebruikersnaam en wachtwoord</b><br />                      </li><br />                        <ul><br />                          <li> Deze gebruiker kan de database administrator (beheerder) zijn, of u kunt de naam van geven van  een andere bestaande database gebruiker. </li><br />                          <li> Wilt u een nieuwe database gebruiker voor dit doel maken, dan kan die gebruikersnaam en wachtwoord tijdens het installatieproces worden opgegeven,<br />                          en de gebruiker zal worden aangemaakt tijdens de installatie.</li><br />                        </ul></ul><p><br /><br />                      Voor de <b>Aangepaste</b> setup, moet u ook nog het volgende weten:<br><br />                      <ul><br />                      <li> <b>De URL die zal worden gebruikt</b> na de installatie.<br />                      Deze URL dient de webserver, de machinenaam of het IP-adres te bevatten.<br><br></li><br />                                  <li> [Optioneel] <b>Pad naar de sessie directory</b> als u een eigen<br />                                  sessie directory wil voor SuiteCRM informatie om te voorkomen dat deze informatie kwetsbaar is op een gedeelde server.<br><br></li><br />                                  <li> [Optioneel] <b>Pad naar een aangepaste log directory</b> Als u wil afwijken van de standaard directory voor de SuiteCRM log.<br><br></li><br />                                  <li> [Optioneel] <b>Applicatie ID</b> Als u de automatische aangemaakte ID wil overschrijven om ervoor te zorgen dat<br />                                  sessies van 1 SuiteCRM instance niet worden gebruikt door andere instances.<br><br></li><br />                                  <li><b>Karakter Set</b> die het meest wordt gebruikt.<br><br></li></ul><br />                                Voor meer gedetailleerde informatie kunt u de Installatie Guide raadplegen.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lees de volgende belangrijke informatie voordat u verder gaat met de installatie. De informatie zal u helpen bepalen of u klaar bent om nu te installeren.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Kies uw taal</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Installatiewizard',
    'LBL_WIZARD_TITLE' => 'SuiteCRM installatiewizard: ',
    'LBL_YES' => 'Ja',

    'LBL_PATCHES_TITLE' => 'Nieuwste Patches installeren',
    'LBL_MODULE_TITLE' => 'Installeer taalpakket',
    'LBL_PATCH_1' => 'Klik op <b>Volgende</b> om deze stap over te slaan.',
    'LBL_PATCH_TITLE' => 'Systeem Patch',
    'LBL_PATCH_READY' => 'De volgende patch(es) staan klaar om te worden geinstalleerd:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM vertrouwt op PHP-sessies om belangrijke informatie op te slaan tijdens contact met de webserver. Uw PHP-installatie beschikt niet correct geconfigureerde Session Information.<br />											<br>  Een gebruikelijke fout in de configuratie is dat de <b> &#39;session.save_path&#39; </ b>  niet verwijst naar een geldige map. <br><br />											<br> Corrigeer uw <a target=_new href=&#39;http://us2.php.net/manual/en/ref.session.php&#39;>PHP configuratie</a> in de php.ini die u hieronder ziet.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions configuratie fout',
    'LBL_SYSTEM_NAME' => 'Systeem naam',
    'LBL_COLLATION' => 'Sorteerinstellingen',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Geef een naam op voor de SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Selecteer een patch bestand (op uw eigen computer)',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versie 5 of later is vereist',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimum PHP versie vereist is 5.1.0. Geadviseerde Php versie is 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Uw huidige php versie is',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Geadviseerde php versie is 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility modus is ingeschakeld. Zet zend.ze1_compatibility_mode op Off/Uit voor u verder gaat',
    'LBL_STREAM' => 'PHP allows  to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Nieuwe accountgegevens',
        'type' => 'systeem',
        'description' => 'Dit sjabloon wordt gebruikt wanneer een systeemadmin een nieuw wachtwoord verstuurd aan een gebruiker.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Hier is jouw gebruiksnaam en tijdelijk wachtwoord:</p><p>Gebruiksnaam : $contact_user_user_name </p><p>Wachtwoord: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Nadat u bent ingelogd met behulp van het bovenstaande wachtwoord, kan u gevraagd worden om het wachtwoord opnieuw in te stellen naar een van je eigen keuze..</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Hierbij ontvangt u uw gebruikersnaam en tijdelijk wachtwoord:
Gebruikersnaam: $contact_user_user_name
Wachtwoord: $contact_user_user_hash

$config_site_url

Nadat u succesvol ingelogd bent, kunt u uw wachtwoord desgewenst aanpassen.',
        'name' => 'Door systeem gegenereerd wachtwoord e-mail',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Uw wachtwoord opnieuw instellen',
        'type' => 'systeem',
        'description' => "Dit sjabloon wordt gebruikt om een gebruiker een link te sturen zodat het wachtwoord gereset kan worden.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>U heeft recentelijk op $contact_user_pwd_last_changed een verzoek ingediend om uw wachtwoord te resetten. </p><p>Klik op de onderstaande link om uw wachtwoord te resetten:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
U heeft recentelijk op $contact_user_pwd_last_changed een verzoek ingediend om uw wachtwoord te resetten. 

Klik op de onderstaande link om uw wachtwoord te resetten:

$contact_user_link_guid',
        'name' => 'Wachtwoord email vergeten',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Twee Factor Autorisatie Code',
        'type' => 'systeem',
        'description' => "Dit sjabloon wordt gebruikt voor het verzenden van een twee factoren autorisatie code aan een gebruiker.",
        'body' => '<div>< tabelrand = \ "0\" cellspacing = \ "0\" cellpadding = \ "0\" width = "550" uitlijnen = \ \'\' \ \'center\ \'\' \' > < tbody > < tr > < td colspan = \ "2\" > <p>twee actoren autorisatie code is <b>$code</b>.</p>  </td></tr> <tr><td colspan=\"2\"></td></tr></tbody></table></div>',
        'txt_body' =>
            'Twee factoren autorisatie code is $code.',
        'name' => 'Twee factoren authenticatie email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '\'Van\' naam:',
    'LBL_FROM_ADDR' => '"Van" adres:',

    'LBL_WIZARD_SMTP_DESC' => 'Geef de e-mailaccount die zullen worden gebruikt om e-mails, zoals de toewijzing notificaties en nieuwe wachtwoorden van gebruikers te verzenden. Gebruikers ontvangen e-mails van SuiteCRM, verzonden als vanaf het opgegeven e-mailaccount.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Kies uw e-mailprovider:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Anders',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specificatie',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
    'LBL_MAIL_SMTPPORT' => 'SMTP poort:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gebruik SMTP authenticatie?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Inschakelen SMTP over SSL of TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail-adres:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail-wachtwoord:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Gebruikers in staat stellen om deze account te gebruiken voor uitgaande e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Wanneer deze optie is geselecteerd, zullen alle gebruikers in staat zijn om e-mails met dezelfde uitgaande e-mail account te versturen die ook gebruikt wordt om systeem notificatie en  meldingen te verzenden. Als de optie niet is geselecteerd, kunnen gebruikers nog steeds gebruik maken van de uitgaande mailserver nadat zij hun eigen account informatie ingeven.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo Mail Wachtwoord:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Wachtwoord:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Gebruikersnaam:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Poort:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP gebruikersnaam:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Wachtwoord:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Geef uw organisatie\'s naam en het logo om SuiteCRM te brandmerken.',
    'SYSTEM_NAME_WIZARD' => 'Naam:',
    'SYSTEM_NAME_HELP' => 'Dit is de naam die wordt weergegeven in de titelbalk van uw browser.',
    'NEW_LOGO' => 'Upload nieuw logo',
    'NEW_LOGO_HELP' => 'Het bestandsformaat moet .png of .jpg zijn. De maximale hoogte is 170px, en de maximale breedte is 450px. Een afbeelding die groter is in hoogte of breedte zal geschaald worden naar de maximale waarden.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Uploaden',
    'CURRENT_LOGO' => 'Huidig logo',
    'CURRENT_LOGO_HELP' => 'Dit logo wordt weergegeven in het midden van het inlogscherm van de SuiteCRM toepassing.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario selectie',
    'LBL_WIZARD_SCENARIO_DESC' => 'Dit is om afstemming van de weergegeven modules op basis van uw vereisten.  Elk van de modules kan worden ingeschakeld na de installatie met behulp van de pagina voor webbeheer.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Er zijn geen scenario\'s die momenteel zijn ingesteld in het configuratiebestand (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Lokale Systeem Instellingen',
    'LBL_WIZARD_LOCALE_DESC' => 'Geef aan hoe je gegevens in SuiteCRM wilt tonen, op basis van uw geografische locatie. De instellingen die u hier opgeeft worden de standaardinstellingen. Gebruikers kunnen zelf hun voorkeuren instellen.',
    'LBL_DATE_FORMAT' => 'Datumweergave:',
    'LBL_TIME_FORMAT' => 'Tijdweergave:',
    'LBL_TIMEZONE' => 'Tijdzone:',
    'LBL_LANGUAGE' => 'Taal:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbool',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 valuta code',
    'LBL_NUMBER_GROUPING_SEP' => 'duizendtal scheidingsteken',
    'LBL_DECIMAL_SEP' => 'Decimaalteken',
    'LBL_NAME_FORMAT' => 'Naam weergave',
    'UPLOAD_LOGO' => 'Logo uploaden... Een ogenblik geduld a.u.b.',
    'ERR_UPLOAD_FILETYPE' => 'File type niet toegestaan, upload een jpeg of png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Onbekende bestand upload fout. ',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Het geüploade bestand is groter dan de upload_max_filesize directive in php.ini',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Het geüploade bestand is groter dan de MAX_FILE_SIZE richtlijn die is opgegeven in het HTML-formulier.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Het geüploade bestand is slechts gedeeltelijk geüpload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Er is geen bestand geüpload',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Er ontbreekt een tijdelijke map.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Schrijven van bestand naar schijf is mislukt.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Een PHP extensie heeft de bestands upload gestopt. Welke extensie deze actie veroorzaakt is niet vast te stellen door PHP.',

    'LBL_INSTALL_PROCESS' => 'Installeren...',

    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'ERR_ADMIN_EMAIL' => 'Administrator email adres is onjuist.',
    'ERR_SITE_URL' => 'Site URL is vereist.',

    'STAT_CONFIGURATION' => 'Instellingen relaties...',
    'STAT_CREATE_DB' => 'Database aanmaken...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Standaard instellingen aanmaken',
    'STAT_INSTALL_FINISH' => 'Installeren afronden...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installatie process afgerond, <a href="%s">Log in a.u.b. ...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Accepteer licentie eerst a.u.b.',

    'LBL_MORE_OPTIONS_TITLE' => 'Meer opties',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Databasefout',
    'LBL_OLD_PHP' => 'Verouderde PHP versie gesignaleerd!',
    'LBL_OLD_PHP_MSG' => 'De aanbevolen PHP versie om SuiteCRM te installeren is %s <br />De minimum PHP versie die nodig is is %s<br />U gebruikt PHP versie %s, dit is EOL: <a href="http://php.net/eol.php">http://php. et/eol.php</a>.<br />Overweeg het upgraden van uw PHP-versie. ',
    'LBL_OLD_PHP_OK' => 'Ik ben mij bewust van de risico\'s en wens door te gaan.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Toegewezen aan naam',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Database Naam',
    'LBL_DBCONFIG_MSG3' => 'Naam van de database die de gegevens van uw SuiteCRM instantie zal bevatten:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Host Naam',
    'LBL_DBCONFIG_MSG2' => 'Geef de webserver of computer (host) waarop de database zich bevindt (zoals www.mydomain.com) een naam. Wanneer u lokaal installeert, is het beter om \'localhost\' dan \'127.0.0.1\' te gebruiken, omwille van de prestaties.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'De gebruikersnaam en het wachtwoord van de database-beheerder (database administrator), die tabellen en gebruikers mag aanmaken en wijzigen, is noodzakelijk voor het opzetten van de database'
);
