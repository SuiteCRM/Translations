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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nuk mund të determinoj grupin',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nuk mund të determinoj pronarin',
    'ERR_UW_CONFIG_WRITE' => 'Gabim gjatë rifreskimit të config.php me versionin e ri të informacionit.',
    'ERR_UW_CONFIG' => 'Ju lutemi bënjani dosjen tuaj të config.php të shkruhet dhe ridrejtohet në këtë faqe.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Dosja e pashkruajtshme',
    'ERR_UW_FILE_NOT_COPIED' => 'Dosja nuk është kopjuar',
    'ERR_UW_FILE_NOT_DELETED' => 'problem gjatë largimit të dërgesës',
    'ERR_UW_FILE_NOT_READABLE' => 'Dosja nuk mundej të lexohet',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Dosja nuk mund të lëvizë ose të shënohet në të',
    'ERR_UW_FLAVOR_2' => 'rifresko shijen',
    'ERR_UW_FLAVOR' => 'Shija e sistemit të SuiteCRMCRM',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log nuk mund të krijohet/shkruhet. Ju lutemi të rregulloni lejen në dosjen tuaj të SuiteCRMCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload është vendosur në vlerë më e madhe se 1. Ju lutemi ndryshoni këtë në php.ini tuaj dhe ristartoni ueb serverin.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Ju lutemi, specifikoni një fushë dhe pastaj provoni përsësri.',
    'ERR_UW_NO_FILES' => 'Një gabim ka ndoshur, nuk janë gjetur dosje për tu kontrolluar.',
    'ERR_UW_NO_MANIFEST' => 'Zip dosjes i mungon manifest.php dosje. Nuk mund të vazhdoj.',
    'ERR_UW_NO_VIEW' => 'Pamje jo valide e specifikuar',
    'ERR_UW_NOT_VALID_UPLOAD' => 'ngarkim jo valid',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nuk mundej të krijoj udhëzimin e përkohësishëm. Kontrolloni lejet e dosjeve.',
    'ERR_UW_ONLY_PATCHES' => 'Mundeni të ngarkoni postime vetëm në këtë faqe.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Janë gjetur gabime gjatë kontrollimit paranisjes',
    'ERR_UW_UPLOAD_ERR' => 'Ndodhi gabim gjatë ngarkimit të dosjes, ju lutemi provojeni përsësri!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Versioni i sistemit SuiteCRMCRM :',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'Versioni i sistemit SuiteCRMCRM :',
    'ERR_UW_WRONG_TYPE' => 'Kjo faqe nuk është për në funksion',
    'LBL_BUTTON_BACK' => 'Kthe',
    'LBL_BUTTON_CANCEL' => 'Anulo',
    'LBL_BUTTON_DELETE' => 'Fshini paketën',
    'LBL_BUTTON_DONE' => 'E bërë',
    'LBL_BUTTON_EXIT' => 'Dalje',
    'LBL_BUTTON_NEXT' => 'Vijim',
    'LBL_BUTTON_RECHECK' => 'Riverifikim',
    'LBL_BUTTON_RESTART' => 'Ristartim',

    'LBL_UPLOAD_UPGRADE' => 'Ngarko paketën e përmisuar',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Ruajtja rezervë e dosjes',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Dosjet e ruajtura nga ky përmisim mund të gjinden në',
    'LBL_UW_BACKUP' => 'Dosje BACKUP',
    'LBL_UW_CANCEL_DESC' => 'Përmisimi është anuluar. Çdo dosje e përkohshme që është kopjuar dhe dosje e përmisuar që është ngarkuar është fshirë.',
    'LBL_UW_CHECK_ALL' => 'Verifiko të gjitha',
    'LBL_UW_CHECKLIST' => 'Rinovo hapat',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Procesi i përmisimit: dosjet e bashkuara manualisht',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Ju lutemi përdorni çfardo metode tuaj të familjalizuar për të bashkuar dosjet. Pa plotësim të kësaj, instalimi juaj i SuiteCRMCRM do të jetë në pozitë të paqartë dhe rindëritimi do të jetë i papërfunduar',
    'LBL_UW_COMPLETE' => 'Plotëso',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Të gjitha nevojat e parametrave të sitemit janë të kënaqura',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Parametrat e PHP: Koha e thirjes kalon sipas referencës',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL modula',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Modula',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Moduli MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parametri i MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Parametrat: Limit i memorisë',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Vendosja e: Rrjedhjës',
    'LBL_UW_COMPLIANCE_DB' => 'Versioni minimal i Bazës së të dhënave',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Lokacioni i php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimum PHP Versioni',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP parametrat: Mënyrë e sigurt',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Parametrat e detektuara',
    'LBL_UW_COMPLIANCE_XML' => 'XML Analizë',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Mbështetja Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Kopjimi i suksesshëm i dosjeve',

    'LBL_UW_DB_CHOICE1' => 'Rindërto SQL e drejtimeve të Wizardit',
    'LBL_UW_DB_CHOICE2' => 'Manual SQL pyetjet',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilegjet e bazësë së të dhënave',
    'LBL_UW_DB_METHOD' => 'Metoda e rindërtimit të bazës së të dhënave',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Të gjitha privilegjet e mundëshme',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Privilegjet e nevojshme',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Paketat rindërtuese janë instaluar',
    'LBL_UW_END_LOGOUT_PRE' => 'Rindërtimi ka përfunduar.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Shtyp e Kryer për tu larguar nga Rindërtim të wizardit.',
    'LBL_UW_END_LOGOUT' => 'Nëse planifikoni të aplikoni paketë tjetër të rindërtimit të wizarrdit, çregistrohuni dhe pastaj regjistrohuni për ta bërë atë',

    'LBL_UW_FILE_DELETED' => 'është larguar.',
    'LBL_UW_FILE_GROUP' => 'Grup',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Lejet e dosjeve',
    'LBL_UW_FILE_NO_ERRORS' => 'Të gjtha dosjet e shkrujatura',
    'LBL_UW_FILE_OWNER' => 'Pronari',
    'LBL_UW_FILE_PERMS' => 'Lejet',
    'LBL_UW_FILE_UPLOADED' => 'është ngarkuar',
    'LBL_UW_FILE' => 'emri i dosjes',
    'LBL_UW_FILES_QUEUED' => 'Paketat vijuese të rindërtimit jan[ gati për tu instaluar:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Shytp Vijim për të ngarkuar paketat e rindërtimit',
    'LBL_UW_FROZEN' => 'Ngarko një apketë para se të vazhdoni',
    'LBL_UW_HIDE_DETAILS' => 'fsheh detalet',
    'LBL_UW_IN_PROGRESS' => 'Në progres',
    'LBL_UW_INCLUDING' => 'përfshirë',
    'LBL_UW_INCOMPLETE' => 'e papërfunduar',
    'LBL_UW_MANUAL_MERGE' => 'Bashkimi i dosjes',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nuk është detektuar asnjë regjistrim i rindërtimit.',
    'LBL_UW_NONE' => 'Asnjëra',
    'LBL_UW_OVERWRITE_DESC' => 'Të gjitha dosjet e ndryshuara do të rishkruhen, duke përfshirë çdo kod të rregullimit dhe ndryshimit të shabllonit që keni bërë. A jeni i sigurt që dëshironi të vazhdoni?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Krijo artikull të detyrës për bashkim manual?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Dërdoi vetes email për rikujtim të bashkimit manual?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Dosjet vijuese janë modifikuar. Mos kontrollo artikj që kërkojnë bashkim manual. Çdo ndryshim i detektuar i formatit nuk është kontrolluar automatikisht, nënvizo kontroll të atyre që duhet të rishkruhen.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nuk është e nevojshme asnjë bashkim manual i dosjes.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'nuk është e nevojshme',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Dosjet e ruajtura automatikisht',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Janë kaluar të gjitha testet e paranisjes.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Shtyp Vijim pët të kopjuar dosjet e rindërtimit në sistem.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => 'Shënim: Pjesa e ngelur e procesit të rindërtiit është e detyrueshme dhe duke shtypur Vijim do të duhet ta përfundoni procesin. Nëse nuk doni të vazhdoni, shtypni butonin e Anulimit.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Nyjëzo të gjithë dosjet',

    'LBL_UW_REBUILD_TITLE' => 'Rezultati i rindërtimit',
    'LBL_UW_SCHEMA_CHANGE' => 'Ndryshimet skemtike',

    'LBL_UW_SHOW_COMPLIANCE' => 'Trego parametrat e detektuara',
    'LBL_UW_SHOW_DB_PERMS' => 'Trego lejet që mungojnë të bazës së të dhënave',
    'LBL_UW_SHOW_DETAILS' => 'trego detajet',
    'LBL_UW_SHOW_DIFFS' => 'Trego dosjet që kanë nevojë për bashkim manual',
    'LBL_UW_SHOW_NW_FILES' => 'Trego dosjet me leje të këqija',
    'LBL_UW_SHOW_SCHEMA' => 'Treko skriptë të ndryshimit skematik',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Trego detyrat e këqija',
    'LBL_UW_SHOW' => 'trego',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Dosjet e anashkaluara',
    'LBL_UW_SQL_RUN' => 'Kontrollo kur SQL është drejtuar në mënyrë manuale',
    'LBL_UW_START_DESC' => 'Wizardi do të ndihmojë në rindërtim të shembullit të SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Shtyp Vijim për të performuar kontroll në sistemin tuaj për të siguruar se sistemi është gati për rindërtim. Kontrolli përfshinë lejet e dosjes, privilegjet e bazës së të dhënave dhe parametrat e serverit.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Rindërtimi i ri i Wizardit do të rinisë procesin e rindërtimit. Ju lutemi vazhdoni rindërtimin tuaj.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Mirësevini në Rindërtimin e ri të Wizardit',

    'LBL_UW_TITLE_CANCEL' => 'Anulo',
    'LBL_UW_TITLE_COMMIT' => 'Kryej rindërtimin',
    'LBL_UW_TITLE_END' => 'Ripërmbledh',
    'LBL_UW_TITLE_PREFLIGHT' => 'Kontroll paranisjes',
    'LBL_UW_TITLE_START' => 'Mirësevini',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Kontroll i sistemit',
    'LBL_UW_TITLE_UPLOAD' => 'Ngarko paketën',
    'LBL_UW_TITLE' => 'Rindërto wizardin',
    'LBL_UW_UNINSTALL' => 'çinstalo',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Prano licencën',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konverto licencën',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Nisja në progres',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Kontrolli i sistemit në progres',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Kontrolli i licencës në progres',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Kontrolli paranisjes në progres',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopja e dosjeve në progres',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Kryerja e rindërtimit në progres',
    'LBL_UW_COMMIT_DESC' => 'Shtyp Vijim për të drejtuar skript plotësuese për rindërtim.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Skritpa e rindërtimit në progres',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Përmbledhja e rindërtimit në progres',
    'LBL_UPGRADE_IN_PROGRESS' => 'në progres',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Koha e kaluar',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Anulimi i Rindërtimit dhe fshierjes në progres',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Rindërtimi mund të zgjasë për një kohë të caktuar',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Kontroll i ngarkimit në progres',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Ngarkimi i paketës së rindërtimit',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Rindërtim i wizardit të skemës së larguar të vjetër 451',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Doracaku i Skemës së Rënies Postimi i Përmirësimit',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Metoda e largimit të skemës së vjetër',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Trego skemën e vjetër që mund të largohet',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Detyrat e anashkaluara',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versioni 5 ose më lartë është i nevojshëm.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versioni juaj i PHP nuk është i mbështetur nga SuiteCRM. Do të duhet të instaloni një të përshtashëm me aplikimin e SuiteCRM. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet PHP të mbështetura. Versioni juaj është',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php prapa mënyrës së përputhueshmërise është kthyer në aktive. Vendosni ze1_përputheshmëria_mënyra në Joaktive për vazhdimin më tej.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Veprim',
    'LBL_ML_CANCEL' => 'Anulo',
    'LBL_ML_COMMIT' => 'Angazho',
    'LBL_ML_DESCRIPTION' => 'Përshkrim',
    'LBL_ML_INSTALLED' => 'të dhënat e instaluara',
    'LBL_ML_NAME' => 'Emri',
    'LBL_ML_PUBLISHED' => 'Të dhënat e publikuara',
    'LBL_ML_TYPE' => 'Lloji',
    'LBL_ML_UNINSTALLABLE' => 'E painstalueshme',
    'LBL_ML_VERSION' => 'Versioni',
    'LBL_ML_INSTALL' => 'Instalo',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Versioni php i juaji aktual është: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Rindërto Wizardin',
    'LBL_UPLOAD_SUCCESS' => 'Paketa e rindërtuar është ngarkuar suksesshëm. Shtyp Vijim për të performuar kontrollin përfundimtar',
    'LBL_UW_TITLE_LAYOUTS' => 'Konfrimo formatet',
    'LBL_LAYOUT_MODULE_TITLE' => 'Formatet',
    'LBL_LAYOUT_MERGE_DESC' => 'Ka shumë fusha të reja në dispozicion të cilat janë shtuar si pjesë e këtij përmirësimi dhe mund t&#39;i bashkangjitet automatikisht në paraqitjen e modulit tuaj ekzistues. Për të mësuar më shumë për fushat të reja, ju lutem referojuni Shënimeve të Versionit për versionin të cilin ju keni përmirësuar.<br /><br />Nëse ju nuk dëshironi të bashkangjitni fushat e reja, ju lutem zgjidhni modulin, dhe paraqitjet e porosive tuaja do të mbeten të pandryshuara. Fushat do të jenë në dispozicion në Studio pas përmirësimit.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Shtyp Vijim për të konfirmuar ndryshimet dhe të përfundosh rindërtimin.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Shtyp Vijim për të përfunduar rindërtimin',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Konfrimo formatet',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Rezultatet e confirmimit të formatit',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Formatet vijuese janë bashkuar me sukses:',
    'LBL_SELECT_FILE' => 'Selekto dosje:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Dosja e ngarkuar nuk është e përshtatshme me versionin e SuiteCRM.',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Dosja e ngarkuar nuk është e përshtatshme me versionin e SuiteCRM.',
    'LBL_LANGPACKS' => 'Paketat e gjuhës' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Ngarkuesi i modulës' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Rindërtim i postimeve' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'album' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Rindërto' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Në proces e sipër' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Dosja e ngarkuar ka tejkaluar MADH_MAKS_DOSJ që është specifikuar në php.ini',
        2 => 'Dosja e ngarkuar ka tejkaluar MADH_MAKS_DOSJ që është specifikuar në formën HTML.',
        3 => 'Dosja e ngarkuar është ngarkuar vetëm pjesërisht',
        4 => 'Asnjë dosje nuk është ngarkuar',
        5 => 'Gabim i panjohur',
        6 => 'Mungon dosje e përkohshme',
        7 => 'Dështoi shkruatja e dosjes në disk',
        8 => 'Ngarkimi i dosjes u ndalua nga zgjatja',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
