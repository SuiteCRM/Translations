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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Kan inte fastställa Grupp',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Kan inte fastställa Ägare',
    'ERR_UW_CONFIG_WRITE' => 'Fel vid uppdatering av config.php med ny versionsinformation.',
    'ERR_UW_CONFIG' => 'Var vänlig gör din config.php fil skribar och ladda om denna sidan.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Katalog ej skrivbar',
    'ERR_UW_FILE_NOT_COPIED' => 'Fil ej kopierad',
    'ERR_UW_FILE_NOT_DELETED' => 'Problem att ta bort paket ',
    'ERR_UW_FILE_NOT_READABLE' => 'Filen kunde inte läsas.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Filen kan inte flyttas eller skrivas till',
    'ERR_UW_FLAVOR_2' => 'Uppgradera Nyans: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM System Nyans: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log kunde inte skapas/skrivas till.  Vänligen fixa tillåtelse på din SuiteCRM katalog.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload sätt till ett värde högre än 1.  Vänligen ändra detta i din php.ini och starta om webservern.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Vänligen specifisera fil och försök igen!',
    'ERR_UW_NO_FILES' => 'Ett fel uppstod, inga filer hittades för markering.',
    'ERR_UW_NO_MANIFEST' => 'Zipfilen saknar manifest.php. Kan inte fortsätta.',
    'ERR_UW_NO_VIEW' => 'Ogiltig vy specifiserad.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Ej giltig uppladdning',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Kunde inte skapa temp katalogen. Kolla filrättigheterna.',
    'ERR_UW_ONLY_PATCHES' => 'Du kan bara ladda upp aptchar på den här sidan.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Fel hittade under snabb kontrollen',
    'ERR_UW_UPLOAD_ERR' => 'Det uppstod ett fel under uppladdningen. Vänligen försök igen!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM System Version: ',
    'ERR_UW_PHP_VERSION' => 'PHP-version: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM System Version: ',
    'ERR_UW_WRONG_TYPE' => 'Denna sidan är inte för att köra ',
    'LBL_BUTTON_BACK' => '< Tillbaka',
    'LBL_BUTTON_CANCEL' => 'Ångra',
    'LBL_BUTTON_DELETE' => 'Radera Paket',
    'LBL_BUTTON_DONE' => 'Klart',
    'LBL_BUTTON_EXIT' => 'Importen färdig',
    'LBL_BUTTON_NEXT' => 'Nästa >',
    'LBL_BUTTON_RECHECK' => 'Dubbelkolla',
    'LBL_BUTTON_RESTART' => 'Starta om',

    'LBL_UPLOAD_UPGRADE' => 'Ladda upp en uppdatering: ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Fil Backup',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Backed-up filer från denna uppdatering kan hitta i',
    'LBL_UW_BACKUP' => 'Fil BACKUP',
    'LBL_UW_CANCEL_DESC' => 'Uppdaterings Guiden har avbrutits.  Alla temporära filer och de uppladdade ZIP filerna har tagits bort.<br><br>Tryck "Klar" för att starta om Uppdaterings Guiden.',
    'LBL_UW_CHECK_ALL' => 'Kontrollera alla',
    'LBL_UW_CHECKLIST' => 'Uppdaterings Steg',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Uppdateringsprocess: Manuell ihopslagning av filer',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Vänligen använd den diff metoden som du bäst känner till för att slå ihop dessa filer.  Tills detta är klart, kommer din SuiteCRM installation att befinna sig på ett osäkert läge, och uppdateringen är inte klar.',
    'LBL_UW_COMPLETE' => 'Avslutad',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Alla nödvändiga system inställningar är gjorda',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Inställning: Tidsåtgång av referens.',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Modul',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Modul',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings Modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Inställning: Minnes Begrännsining',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minsta databasversion',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Sökväg för php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minsta PHP-version',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Inställning: Felsäkert Läge',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Upptäckta Inställningar',
    'LBL_UW_COMPLIANCE_XML' => 'XML-parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE-version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Filer kopierades felfritt',

    'LBL_UW_DB_CHOICE1' => 'Uppdaterings Guiden Kör SQL',
    'LBL_UW_DB_CHOICE2' => 'Manuella SQL Frågor',
    'LBL_UW_DB_ISSUES_PERMS' => 'Databas Rättigheter',
    'LBL_UW_DB_METHOD' => 'Databas Uppdaterings metod',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Alla Rättigheter Tillgängliga',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Nödvändig Rättighet',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Följande uppdateringar har installerats:',
    'LBL_UW_END_LOGOUT_PRE' => 'Uppgraderingen är avslutad.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Klicka på Klar för att avsluta uppgraderingsguiden.',
    'LBL_UW_END_LOGOUT' => 'Vänligen logga ut Please log out of your account if you plan on upgrading further than this patch/upgrade level.',

    'LBL_UW_FILE_DELETED' => ' har tagits bort.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupp',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Fil Tillåtellse',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Alla Filer Skrivbara</b>',
    'LBL_UW_FILE_OWNER' => 'Ägare',
    'LBL_UW_FILE_PERMS' => 'Rättigheter',
    'LBL_UW_FILE_UPLOADED' => ' har laddats upp',
    'LBL_UW_FILE' => 'Filnamn',
    'LBL_UW_FILES_QUEUED' => 'Följande uppdateringar är reda att installeras:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Klicka på Nästa för att ladda upp uppgraderingspaket.',
    'LBL_UW_FROZEN' => 'Krävda steg måste vara klara innan fortsättning kan ske.',
    'LBL_UW_HIDE_DETAILS' => 'Dölj detaljer',
    'LBL_UW_IN_PROGRESS' => 'Pågår',
    'LBL_UW_INCLUDING' => 'Inkluderar',
    'LBL_UW_INCOMPLETE' => 'Ofullständig',
    'LBL_UW_MANUAL_MERGE' => 'Fil Ihopslagning',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Inga sparade Uppdateringar hittades.',
    'LBL_UW_NONE' => 'Ingen',
    'LBL_UW_OVERWRITE_DESC' => 'Alla ändrade filer kommer skrivas över - inklusive egna kodförändringar och mallar som har ändrats. Är du säker på att du vill fortsätta?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Skapa uppgifts objekt för manuell ihopslagning?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Email dig själv en påminnelse om manuell ihopslagning?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Filerna nedanför har ändrats.  Klicka ur objekten som kräver manuell ihopaslagning. <i>Någon hittad layout förändring är automatiskt avmarkerad; markera någon som ska skrivas över.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Ingen manuell ihopaslagning krävs.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Inte nödvändigt.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-bevara Filerna:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'All Snabbtest gick igenom. Tryck "Nästa" för att bekräffta dessa ändringar.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Klicka på nästa för att kopiera uppgraderade filer till systemet.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<B>Notis:</b> Resterande del av uppgraderingsprocessen är obligatorisk och om du klickar på Nästa så måste du avsluta den. Om du inte vill fortsätta så klicka på Avbryt knappen.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Växla till Alla Filer',

    'LBL_UW_REBUILD_TITLE' => 'Bygg om Resultat',
    'LBL_UW_SCHEMA_CHANGE' => 'Schema Ändringar',

    'LBL_UW_SHOW_COMPLIANCE' => 'Visa Funna Inställningar',
    'LBL_UW_SHOW_DB_PERMS' => 'Visa Fattande Databas tillåtelse',
    'LBL_UW_SHOW_DETAILS' => 'Visa detaljer',
    'LBL_UW_SHOW_DIFFS' => 'Visa filer som kräver manuell ihopaslagning',
    'LBL_UW_SHOW_NW_FILES' => 'Visa filer med dålig tillåtelse',
    'LBL_UW_SHOW_SCHEMA' => 'Visa Schema Ändra Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Visa dåliga frågor',
    'LBL_UW_SHOW' => 'Visa',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Överhoppade filer',
    'LBL_UW_SQL_RUN' => 'Kolla när SQL har kördes manuellt',
    'LBL_UW_START_DESC' => 'Välkommen till SuiteCRM Uppdaterings Guiden. Denna guiden är menat att assistera administratörer vid uppdatering av deras SuiteCRM instanser.  Vänligen följ givna instruktioner noggrannt.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Klicka Nästa för att utföra en systemkontroll och säkerställa att systemet är redo för uppgradering. Kontrollen inkluderar filåtkomst, databas regler samt server inställningar.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Den nya Uppdaterings Guiden kommer nu att återta uppdateringsprocessen. Vänligen fortsätt din uppdatering.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Välkommen till den nya Uppdaterings Guiden',

    'LBL_UW_TITLE_CANCEL' => 'Ångra',
    'LBL_UW_TITLE_COMMIT' => 'Utför Uppdatering',
    'LBL_UW_TITLE_END' => 'Granska',
    'LBL_UW_TITLE_PREFLIGHT' => 'Snabb Kontroll',
    'LBL_UW_TITLE_START' => 'Start',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'System Kontroll',
    'LBL_UW_TITLE_UPLOAD' => 'Ladda upp Uppdatering',
    'LBL_UW_TITLE' => 'Uppdateringsguide',
    'LBL_UW_UNINSTALL' => 'Avinstallera',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Acceptera Licens',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konvertera Licens',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start pågår',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'System Kontroll pågår',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Licens Kontroll pågår',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight Kontroll pågår',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopierar filer ...',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Bekräftade Uppdateringar pågår',
    'LBL_UW_COMMIT_DESC' => 'Klicka på Nästa för att köra andra uppgraderings script.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts in Progress',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Uppdateringssammanfattning pågår',
    'LBL_UPGRADE_IN_PROGRESS' => 'pågår     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tid gått',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Uppdatering Avbruten och Städning pågår',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Uppdatering kan ta en stund',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Uppladdnings kontroll pågår',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Laddar upp uppdateringspaket... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Uppdaterings Guiden slänger gammal 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manuell borttagning av Schemapost uppdatering',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Gammal Schema borttagningsmetod',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Visa Gammla Scheman som kan tas bort',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Skippade Förfrågan',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 eller högre krävs.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Din version av PHP stöds inte av SuiteCRM. Du måste installera en version som är kompatibel med SuiteCRM applikationen. Var god se kompatibilitets matrisen i "Release Notes" för att hitta de PHP versioner som stöds. Din version är',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Bakåtskompabilitets läge är påslaget. Sät zend.ze1_compatibility_mode til Off för att fortsätta',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Handling',
    'LBL_ML_CANCEL' => 'Ångra',
    'LBL_ML_COMMIT' => 'Utför',
    'LBL_ML_DESCRIPTION' => 'Beskrivning',
    'LBL_ML_INSTALLED' => 'Installerad datum',
    'LBL_ML_NAME' => 'Namn',
    'LBL_ML_PUBLISHED' => 'Publicerad datum',
    'LBL_ML_TYPE' => 'Typ',
    'LBL_ML_UNINSTALLABLE' => 'Ej avinstallationsbar',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Installation',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Din nuvarande PHP version är: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Den rekommenderade php-versionen är ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' eller över',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Uppgraderingsguide',
    'LBL_UPLOAD_SUCCESS' => 'Uppgraderings paketet är uppladdat. Klicka på Nästa för att utföra slutlig kontroll.',
    'LBL_UW_TITLE_LAYOUTS' => 'Godkänn layouts',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouter',
    'LBL_LAYOUT_MERGE_DESC' => 'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts. To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klicka på Nästa för att bekräfta ändringarna och slutföra uppgraderingen.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Klicka på Nästa för att slutföra uppgraderingen.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Godkänn layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Godkänn layout resultat',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Följande layouts sammanfogades:',
    'LBL_SELECT_FILE' => 'Välj fil:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Den uppladdade filen är inte komptible med den här versionen av SuiteCRM Suite: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Den uppladdade filen är inte komptible med den här versionen av SuiteCRM Suite: ',
    'LBL_LANGPACKS' => 'Språkpaket' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Modul Laddaren' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch-uppgraderingar' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Tema:' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Uppgradera' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Utför' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Den uppladdade filen överstiger max_uppladdnings_fil direktiven i php.ini.',
        2 => 'Den uppladdade filen överstiger MAXIMAL_FIL_STORLEK firektiven som specifiserades i HTML formuläret.',
        3 => 'Den uppladdade filen laddades upp ofullständing.',
        4 => 'Ingen fil laddades upp.',
        5 => 'Okänt fel.',
        6 => 'Saknar en temporär katalog.',
        7 => 'Failed to write file to disk.',
        8 => 'Filuppladdning stoppad av tillägget.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
