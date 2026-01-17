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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Kan de groep niet bepalen',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Kan de eigenaar niet bepalen',
    'ERR_UW_CONFIG_WRITE' => 'Fouten tijdens het bijwerken van de config.php met nieuwe versie informatie',
    'ERR_UW_CONFIG' => 'Maak uw config.php bestand schrijfbaar en laad deze pagina opnieuw.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Directory is niet schrijfbaar',
    'ERR_UW_FILE_NOT_COPIED' => 'Bestand niet gekopieerd',
    'ERR_UW_FILE_NOT_DELETED' => 'Probleem bij het verwijderen van het pakket',
    'ERR_UW_FILE_NOT_READABLE' => 'Bestand kon niet worden gelezen.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Bestand kon niet worden verplaatst of geschreven',
    'ERR_UW_FLAVOR_2' => 'Upgrade Smaak: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM Systeem Smaak: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log kon niet worden aangemaakt of geschreven.  Herstel de permissies van uw SuiteCRM direcory.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload staat ingesteld op een waarde > 1. Wijzig dit in uw php.ini en restart de webserver',
    'ERR_UW_NO_FILE_UPLOADED' => 'Geeft een bestand op en probeer opnieuw!',
    'ERR_UW_NO_FILES' => 'Een fout is opgetreden. Er zijn geen bestanden gevonden om te controleren.',
    'ERR_UW_NO_MANIFEST' => 'In het zip-bestand ontbreekt een manifest.php bestand. Kan daarom niet doorgaan.',
    'ERR_UW_NO_VIEW' => 'Ongeldige view gespecificeerd.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Geen geldige upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Kan de temp directory niet aanmaken. Controleer bestandspermissies.',
    'ERR_UW_ONLY_PATCHES' => 'U kunt op deze pagina alleen patches uploaden.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Fouten gevonden tijdens de Preflight Controle',
    'ERR_UW_UPLOAD_ERR' => 'Er is een fout opgetreden bij het uploaden van dit bestand, probeer het nogmaals' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM Systeem Versie: ',
    'ERR_UW_PHP_VERSION' => 'PHP Versie: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM Systeem Versie: ',
    'ERR_UW_WRONG_TYPE' => 'Deze pagina is niet voor het uitvoeren van',
    'LBL_BUTTON_BACK' => '<Terug',
    'LBL_BUTTON_CANCEL' => 'Annuleren',
    'LBL_BUTTON_DELETE' => 'Verwijder pakket',
    'LBL_BUTTON_DONE' => 'Klaar',
    'LBL_BUTTON_EXIT' => 'Importeren compleet',
    'LBL_BUTTON_NEXT' => 'Volgende >',
    'LBL_BUTTON_RECHECK' => 'Opnieuw controleren',
    'LBL_BUTTON_RESTART' => 'Opnieuw',

    'LBL_UPLOAD_UPGRADE' => 'Upload an upgrade ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Bestands Backup',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Back-up bestanden van deze upgrade kunnen worden gevonden in',
    'LBL_UW_BACKUP' => 'Bestand BACKUP',
    'LBL_UW_CANCEL_DESC' => 'De upgrade is geannuleerd. Alle tijdelijke bestanden die zijn gekopieerd en alle upgrade bestanden die zijn geüpload zijn verwijderd.',
    'LBL_UW_CHECK_ALL' => 'Selecteer alles',
    'LBL_UW_CHECKLIST' => 'Upgrade Stappen',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Back-ups van de overschreven bestanden staan in de volgende map: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Handmatig samenvoegen van de volgende bestanden: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Upgrade-proces: handmatig bestanden samenvoegen',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Gebruik een diff methode waarmee u vertrouwd bent om deze bestanden samen te voegen. Totdat dit is voltooid, zal uw SuiteCRM installatie in een onzekere toestand verkeren, en is de upgrade onvolledig.',
    'LBL_UW_COMPLETE' => 'Compleet',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'All system settings requirements satisfied',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Instellingen: Call Time Pass by reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP-Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MB-Strings-Module',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP instellingen: Geheugen limiet',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Instelling: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimum Database versie',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Locatie van de php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimale PHP Versie',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP instelling: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Gedetecteerde instellingen',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'ZIP ondersteuning',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE versie',
    'LBL_UW_COPIED_FILES_TITLE' => 'Bestand met succes gekopieerd',

    'LBL_UW_DB_CHOICE1' => 'Upgrade wizards gebruikt SQL',
    'LBL_UW_DB_CHOICE2' => 'Handmatige SQL queries',
    'LBL_UW_DB_ISSUES_PERMS' => 'Database priviliges',
    'LBL_UW_DB_METHOD' => 'Database update methode',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Alle priviliges beschikbaar',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Noodzakelijke Privilege',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'The following upgrades have been installed:',
    'LBL_UW_END_LOGOUT_PRE' => 'De upgrade is voltooid.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Klik op Gereed om de Wizard te verlaten.',
    'LBL_UW_END_LOGOUT' => 'Als u van plan bent een ander upgrade pakket te installeren met behulp van de Upgrade Wizard, log dan uit en log opnieuw in voor dat u verder gaat. ',

    'LBL_UW_FILE_DELETED' => 'is verwijderd.<br>',
    'LBL_UW_FILE_GROUP' => 'Groep',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Bestandspermissies',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Alle bestanden schrijfbaar</b>',
    'LBL_UW_FILE_OWNER' => 'Eigenaar',
    'LBL_UW_FILE_PERMS' => 'Bevoegdheden',
    'LBL_UW_FILE_UPLOADED' => ' is geüpload',
    'LBL_UW_FILE' => 'Bestandsnaam',
    'LBL_UW_FILES_QUEUED' => 'De volgende bestandspakketen zijn klaar om geinstalleerd te worden:',
    'LBL_UW_FILES_REMOVED' => 'De volgende bestanden worden verwijderd uit het systeem: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Klik op Volgende om de pakketten te uploaden',
    'LBL_UW_FROZEN' => 'Upload een bestandspakket voor dat u verder gaat',
    'LBL_UW_HIDE_DETAILS' => 'Ververg Details',
    'LBL_UW_IN_PROGRESS' => 'In behandeling',
    'LBL_UW_INCLUDING' => 'Inclusief',
    'LBL_UW_INCOMPLETE' => 'Incompleet',
    'LBL_UW_MANUAL_MERGE' => 'Bestand Samenvoegen',
    'LBL_UW_MODULE_READY' => 'Module is gereed voor installatie. Klik op Bevestigen om door te gaan met de installatie.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Geen opgenomen Upgrades gedetecteerd.',
    'LBL_UW_NONE' => 'Geen',
    'LBL_UW_OVERWRITE_DESC' => 'Alle gewijzigde bestanden zullen worden overschreven, ook alle aanpassingen in de code en in de sjablonen die u heeft aangebracht. Weet u zeker dat u doorgaat?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Taak aanmaken voor Handmatig Samenvoegen?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Wilt u uzelf een herinnering sturen voor de handmatige samenvoeging?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'De bestanden hieronder zijn gewijzigd. Vink de items uit die handmatig samengevoegd moeten worden. <i> Gedetecteerde lay-out wijzigingen worden automatisch uitgevinkt; vink diegene aan die wel moeten worden overschreven.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Geen handmatige bestandssamenvoeging vereist',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Niet nodig.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-bewaarde Bestanden:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Alle preflight testen zijn gedaan',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Klik op Volgende om de bijgewerkte bestanden naar het systeem te kopiëren.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Opmerking: De rest van het upgrade proces is verplicht. Door op Volgende te klikken verplicht u zich het proces af te maken. Als u niet wilt doorgaan, klik dan op Annuleren.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Toggle Alle Bestanden',

    'LBL_UW_REBUILD_TITLE' => 'Herbouw Resultaat',
    'LBL_UW_SCHEMA_CHANGE' => 'Schema Wijzigingen',

    'LBL_UW_SHOW_COMPLIANCE' => 'Toon Ontdekte Instellingen',
    'LBL_UW_SHOW_DB_PERMS' => 'Toon Ontbrekende Database Permissies',
    'LBL_UW_SHOW_DETAILS' => 'Toon Details',
    'LBL_UW_SHOW_DIFFS' => 'Toon Bestanden die handmatige samenvoeging benodigd zijn',
    'LBL_UW_SHOW_NW_FILES' => 'Toon bestanden met foutieve permissies',
    'LBL_UW_SHOW_SCHEMA' => 'Toon Wijzig Schema Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Toon Foutieve Queries',
    'LBL_UW_SHOW' => 'Toon',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Bestanden overgeslagen',
    'LBL_UW_SQL_RUN' => 'Controleer of SQL handmatig is uitgevoerd',
    'LBL_UW_START_DESC' => 'Deze wizard zal u behulpzaam zijn tijdens de upgrade van SuiteCRM',
    'LBL_UW_START_DESC2' => 'Opmerking: We raden u sterk aan een kopie te maken van de SuiteCRM instantie die u in productie gebruikt, en het upgradepakket test voordat het implementeren van de nieuwe versie. Als u het bestand "composer.json" hebt gewijzigd, voer dan uit, nadat de upgrade procedure is voltooid:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Klik op Volgende om een ​​check op uw systeem uit te voeren om ervoor te zorgen dat het systeem klaar is voor de upgrade. De check bestaat uit bestandspermissies, database voorrechten en server-instellingen.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'De nieuwe Upgrade Wizard zal nu het upgrade proces hervatten. Ga dan verder met uw upgrade.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Welkom bij de nieuwe Upgrade Wizard',

    'LBL_UW_TITLE_CANCEL' => 'Annuleren',
    'LBL_UW_TITLE_COMMIT' => 'Upgrade bevestigen',
    'LBL_UW_TITLE_END' => 'Eindrapport',
    'LBL_UW_TITLE_PREFLIGHT' => 'Preflight Controle',
    'LBL_UW_TITLE_START' => 'Welkom',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Systeem controle',
    'LBL_UW_TITLE_UPLOAD' => 'Upload bestandspakket',
    'LBL_UW_TITLE' => 'Upgradewizard',
    'LBL_UW_UNINSTALL' => 'Deïnstalleer',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Accepteer Licentie',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Converteer Licentie',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Bezig met de Start',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Systeem controles zijn bezig',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Bezig met Licentie Check',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight-controle is bezig',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopiëren van bestanden is bezig',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Bezig met bijwerken',
    'LBL_UW_COMMIT_DESC' => 'Klik op Volgende om aanvullende upgrade scripts uit te voeren.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts is bezig',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Samenvatting is bezig',
    'LBL_UPGRADE_IN_PROGRESS' => 'Bezig ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Verstreken Tijd',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade geannuleerd en Cleanup is bezig',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Upgrade kan enige tijd in beslag nemen',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Controles in vooruitgang uploaden',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uploaden upgrade pakket',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard Verwijderd oud 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Handmatig Verwijderen van Schema na Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Oude Schema Verwijder Methode',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Toon Oude Schema dat kan worden verwijderd',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Overgeslagen Queries',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versie 5 of later is vereist',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Uw versie van PHP wordt niet ondersteund door SuiteCRM. U moet een versie hebben die compatibel is. Raadpleeg de Compatibility Matrix in de Release Notes voor de ondersteunde PHP-versies. Uw versie is ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility modus is ingeschakeld. Zet zend.ze1_compatibility_mode op Off/Uit voor u verder gaat',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Actie',
    'LBL_ML_CANCEL' => 'Annuleren',
    'LBL_ML_COMMIT' => 'Bevestig',
    'LBL_ML_DESCRIPTION' => 'Omschrijving',
    'LBL_ML_INSTALLED' => 'Installatiedatum',
    'LBL_ML_NAME' => 'Naam',
    'LBL_ML_PUBLISHED' => 'Releasedatum',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Oninstalleerbaar',
    'LBL_ML_VERSION' => 'Versie',
    'LBL_ML_INSTALL' => 'Installeren',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Uw huidige php versie is: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'De aanbevolen PHP versie is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' of hoger.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Upgradewizard',
    'LBL_UPLOAD_SUCCESS' => 'Upgrade pakket succesvol geüpload. Klik op Volgende om een laatste controle uit te voeren.',
    'LBL_UW_TITLE_LAYOUTS' => 'Bevestig Layouts',
    'LBL_LAYOUT_MODULE_TITLE' => 'Lay-outs',
    'LBL_LAYOUT_MERGE_DESC' => 'Er zijn nieuwe velden beschikbaar die zijn toegevoegd als onderdeel van deze upgrade. Deze kunnen automatisch worden toegevoegd aan uw bestaande module lay-outs. Voor meer informatie over deze velden verwijzen we naar de Release Notes. Wilt u de nieuwe velden niet toevoegen, vink dan de betreffende modules uit. Deze zullen dan ongewijzigd blijven. De nieuwe velden zijn wel beschikbaar in de Studio nadat de upgrade is voltooid.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klik op Volgende om de wijzigingen te bevestigen en om de upgrade te voltooien.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Klik op Volgende om de upgrade te voltooien.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Bevestig Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bevestig de lay-out resultaten',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'De volgende lay-outs zijn succesvol samengevoegd:',
    'LBL_SELECT_FILE' => 'Selecteer bestand',
    'ERROR_VERSION_INCOMPATIBLE' => 'Dit bestand is niet compatible met deze versie van de SuiteCRM:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Het geuploade bestand is niet compatibel met deze PHP versie: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Dit bestand is niet compatible met deze versie van de SuiteCRM:',
    'LBL_LANGPACKS' => 'Taalpakketen' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Beheer' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Thema instellingen' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Verwerken' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatibele versie niet is ingesteld in het manifestbestand',
    'LBL_UPGRD_CSTM_CHK' => 'Het Upgrade proces zal sommige bestanden bijwerken, maar deze bestanden bestaan ook in de custom map. Bekijk de wijzigingen voordat doorgaat:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Het geüploade bestand is groter dan de upload_max_filesize directive in php.ini',
        2 => 'Het geüploade bestand is groter dan de MAX_FILE_SIZE richtlijn die is opgegeven in het HTML-formulier.',
        3 => 'Het geüploade bestand is slechts gedeeltelijk geüpload.',
        4 => 'Er is geen bestand geüpload',
        5 => 'Onbekende fout',
        6 => 'Er ontbreekt een tijdelijke map.',
        7 => 'Schrijven van bestand naar schijf is mislukt.',
        8 => 'Bestand uploaden gestopt door extensie.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Waarschuwing: wachtwoordvervaldatum is ingesteld op "geen"!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Vernieuw aub jouw instellingen hier',
);
