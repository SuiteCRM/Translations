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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Gruppen kan ikke bestemmes',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Ejeren kan ikke bestemmes',
    'ERR_UW_CONFIG_WRITE' => 'Error updating config.php with new version information.',
    'ERR_UW_CONFIG' => 'Gør filen config.php skrivbar, og genindlæs denne side.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Mappen er ikke skrivbar',
    'ERR_UW_FILE_NOT_COPIED' => 'Filen blev ikke kopieret',
    'ERR_UW_FILE_NOT_DELETED' => 'Der opstod et problem under fjernelsen af pakken',
    'ERR_UW_FILE_NOT_READABLE' => 'Filen kunne ikke læses.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Filen kan ikke flyttes, eller der kan ikke skrives til den',
    'ERR_UW_FLAVOR_2' => 'Opgraderingsvariant:',
    'ERR_UW_FLAVOR' => 'SuiteCRM-systemvariant:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log kunne ikke oprettes, eller der kunne ikke skrives til den. Rediger tilladelserne til mappen SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload er angivet til en værdi, der er højere end 1. Ret dette i php.ini, og genstart webserveren.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Angiv en fil, og prøv igen!',
    'ERR_UW_NO_FILES' => 'Der opstod en fejl. Der blev ikke fundet nogen filer at kontrollere.',
    'ERR_UW_NO_MANIFEST' => 'The zip file is missing a manifest.php file. Cannot proceed.',
    'ERR_UW_NO_VIEW' => 'Der er angivet en ugyldig visning.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Not valid upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Mappen Temp kunne ikke oprettes. Kontrollér filtilladelserne.',
    'ERR_UW_ONLY_PATCHES' => 'You can only upload patches on this page.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Fejl under Preflight-kontrol',
    'ERR_UW_UPLOAD_ERR' => 'Fejl ved upload af filen!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM-systemversion: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM System Version: ',
    'ERR_UW_WRONG_TYPE' => 'Denne side er ikke beregnet til kørsel',
    'LBL_BUTTON_BACK' => '< Back',
    'LBL_BUTTON_CANCEL' => 'Cancel',
    'LBL_BUTTON_DELETE' => 'Delete Package',
    'LBL_BUTTON_DONE' => 'Done',
    'LBL_BUTTON_EXIT' => 'Exit',
    'LBL_BUTTON_NEXT' => 'Next >',
    'LBL_BUTTON_RECHECK' => 'Kontrollér igen',
    'LBL_BUTTON_RESTART' => 'Genstart',

    'LBL_UPLOAD_UPGRADE' => 'Upload en opgradering',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Sikkerhedskopi af fil',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Sikkerhedskopierede filer fra denne opgradering findes i',
    'LBL_UW_BACKUP' => 'SIKKERHEDSKOPI af fil',
    'LBL_UW_CANCEL_DESC' => '"Guiden Opgradering er blevet annulleret. Alle midlertidige filer og den uploadede zip-fil er blevet slettet.<br><br>Tryk på ""Udført"" for at genstarte guiden Opgradering."',
    'LBL_UW_CHECK_ALL' => 'Check All',
    'LBL_UW_CHECKLIST' => 'Opgraderingstrin',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Opgraderingsproces: Flet filer manuelt',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Brug den diff. metode, du kender bedst, til at flette disse filer. Indtil du har fuldført den, er din SuiteCRM-installation usikker, og opgraderingen er ikke fuldført.',
    'LBL_UW_COMPLETE' => 'Complete',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Alle krav til systemindstillinger er opfyldt',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP-indstilling: Overførsel af opkaldstid som reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings-modul',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings-parameteren mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP-indstilling: Hukommelsesgrænse',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimum Database Version',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Placering af php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Mindste PHP-version',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP-indstilling: Sikker tilstand',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Registrerede indstillinger',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Filer blev kopieret',

    'LBL_UW_DB_CHOICE1' => 'Guiden Opgradering kører SQL',
    'LBL_UW_DB_CHOICE2' => 'Manuelle SQL-forespørgsler',
    'LBL_UW_DB_ISSUES_PERMS' => 'Databaserettigheder',
    'LBL_UW_DB_METHOD' => 'Databaseopdateringsmetode',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABEL [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Alle rettigheder er tilgængelige',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Nødvendige rettigheder',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Følgende opgraderinger er installeret:',
    'LBL_UW_END_LOGOUT_PRE' => 'Upgraderingen er gennemført.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Klik "færdig" for at afslutte opgraderingsguiden.',
    'LBL_UW_END_LOGOUT' => 'Log af kontoen, hvis du planlægger at opgradere yderligere end dette programrettelses-/opgraderingsniveau.',

    'LBL_UW_FILE_DELETED' => 'er blevet fjernet.<br>',
    'LBL_UW_FILE_GROUP' => 'Group',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Filtilladelser',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Alle filer er skrivbare</b>',
    'LBL_UW_FILE_OWNER' => 'Owner',
    'LBL_UW_FILE_PERMS' => 'Tilladelser',
    'LBL_UW_FILE_UPLOADED' => 'er blevet uploadet',
    'LBL_UW_FILE' => 'File Name',
    'LBL_UW_FILES_QUEUED' => 'Følgende opgraderinger er klar til at blive installeret:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Klik "næste" for at overføre opgraderingspakkerne.',
    'LBL_UW_FROZEN' => 'Du skal udføre de obligatoriske trin, før du fortsætter.',
    'LBL_UW_HIDE_DETAILS' => 'Hide Details',
    'LBL_UW_IN_PROGRESS' => 'In Progress',
    'LBL_UW_INCLUDING' => 'Including',
    'LBL_UW_INCOMPLETE' => 'Ikke fuldført',
    'LBL_UW_MANUAL_MERGE' => 'Flet fil',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Ingen registrerede opgraderinger blev fundet.',
    'LBL_UW_NONE' => 'None',
    'LBL_UW_OVERWRITE_DESC' => 'Alle ændrede filer overskrives, herunder alle de kodetilpasninger og skabelonændringer, du har foretaget. Er du sikker på, at du vil fortsætte?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Vil du oprette opgaveposten til manuel fletning?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Vil du sende en e-mail-påmindelse om manuel fletning til dig selv?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Filerne nedenfor er blevet ændret. Fjern markeringen af de poster, der kræver manuel fletning. <i>Markeringen fjernes automatisk ved alle registrerede layoutændringer. Markér dem, der skal overskrives.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Ingen manuel filfletning kræves.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Ikke nødvendig.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Automatisk bevarede filer:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => '"Alle Preflight-test er bestået. Tryk på ""Næste"" for at bekræfte disse ændringer."',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Klik "næste" for at kopiere opgraderingsfilerne til systemet.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Resten af opgraderingsprocessen er obligatorisk, og ved at klikke "næste" fuldføres processen. Hvis du ikke ønsker at fortsætte, klik da "annullér".',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Slå alle filer til/fra',

    'LBL_UW_REBUILD_TITLE' => 'Gendan resultat',
    'LBL_UW_SCHEMA_CHANGE' => 'Skemaændringer',

    'LBL_UW_SHOW_COMPLIANCE' => 'Vis registrerede indstillinger',
    'LBL_UW_SHOW_DB_PERMS' => 'Vis manglende databasetilladelser',
    'LBL_UW_SHOW_DETAILS' => 'Show Details',
    'LBL_UW_SHOW_DIFFS' => 'Vis filer, der kræver manuel fletning',
    'LBL_UW_SHOW_NW_FILES' => 'Vis filer med ugyldige tilladelser',
    'LBL_UW_SHOW_SCHEMA' => 'Vis script med skemaændringer',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Vis ugyldige forespørgsler',
    'LBL_UW_SHOW' => 'Show',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Filer sprunget over',
    'LBL_UW_SQL_RUN' => 'Kontrollér, hvornår SQL er blevet kørt manuelt',
    'LBL_UW_START_DESC' => 'Velkommen til guiden Opgradering af SuiteCRM. Denne guide hjælper administratorer med at opgradere deres SuiteCRM-forekomster. Følg vejledningen omhyggeligt.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Tryk "næste" for at udføre et tjek af dit system for at sikre, at systemet er klar til at opgradere. Tjekket inkluderer filtilladelser, databaseprivilegier og serverindstillinger.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Den nye opgraderingsguide fortsætter nu opgraderingsprocessen. Fortsæt opgraderingen.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Velkommen til den nye opgraderingsguide.',

    'LBL_UW_TITLE_CANCEL' => 'Cancel',
    'LBL_UW_TITLE_COMMIT' => 'Forpligt opgradering',
    'LBL_UW_TITLE_END' => 'Rapportér',
    'LBL_UW_TITLE_PREFLIGHT' => 'Preflight-kontrol',
    'LBL_UW_TITLE_START' => 'Welcome',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Systemkontrol',
    'LBL_UW_TITLE_UPLOAD' => 'Upload opgradering',
    'LBL_UW_TITLE' => 'Upgrade Wizard',
    'LBL_UW_UNINSTALL' => 'Uninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Acceptér licens',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konverter licens',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start er startet',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Systemkontrol er startet',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Licenskontrol er startet',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight-kontrol er startet',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Fil kopiering i gang.',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Forpligt opgradering er startet',
    'LBL_UW_COMMIT_DESC' => 'Klik på "næste" for at køre yderligere opgraderingsscripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Opgraderingscripts er i gang.',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Opgraderingsoversigt er startet',
    'LBL_UPGRADE_IN_PROGRESS' => 'startet',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tiden er udløbet',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Opgraderingen blev annulleret, og oprydningen er startet',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Opgraderingen kan tage et stykke tid',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Kontrol af upload er startet',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uploader opgraderingspakke...',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Opgraderingsguiden Drops old 451-skema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manuel dropning af skema efter opgradering',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metoden Drop gamle skema',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Vis det gamle skema, der kan droppes',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Forespørgsler, der springes over',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Your version of PHP is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Action',
    'LBL_ML_CANCEL' => 'Cancel',
    'LBL_ML_COMMIT' => 'Commit',
    'LBL_ML_DESCRIPTION' => 'Description',
    'LBL_ML_INSTALLED' => 'Date Installed',
    'LBL_ML_NAME' => 'Name',
    'LBL_ML_PUBLISHED' => 'Date Published',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Din aktuelle php-version er: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Opgraderingsguide',
    'LBL_UPLOAD_SUCCESS' => 'Opgraderingspakken er overført med succes. Klik "næste" for et sidste tjek.',
    'LBL_UW_TITLE_LAYOUTS' => 'Bekræft layout',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
    'LBL_LAYOUT_MERGE_DESC' => 'Der er nye felter til rådighed, som er blevet tilføjet som en del af denne opgradering, og som automatisk kan blive tilføjet til dit eksisterende modul layout. Hvis du vil vide mere om de nye felter, henvises der til udgivelsesbemærkningerne for den version, som du har opgraderet til.<br><br /><br><br />Hvis du ikke ønsker at føje de nye felter, skal du fjerne afkrydsningen af modulet, og dit brugerdefinerede layout vil forblive uændret. Felterne vil være tilgængelig i Studio efter opgraderingen.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Klik "næste" for at bekræfte ændringerne og for at afslutte opgraderingen.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Klik på "næste" for at gennemføre opgraderingen.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirm Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bekræft layout resultater',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'De følgende layout blev sammeflettet med succes:',
    'LBL_SELECT_FILE' => 'Vælg fil:',
    'ERROR_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        5 => 'Ukendt fejl.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'Upload af filen blev stoppet af filtypen.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
