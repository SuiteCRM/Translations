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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nevar identificēt grupu',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nevar identificēt īpašnieku',
    'ERR_UW_CONFIG_WRITE' => 'Kļūda, atjauninot versijas informāciju config.php datnē.',
    'ERR_UW_CONFIG' => 'Lūdzu atļaujiet rakstīšanu config.php failā un pārlādējiet šo lapu.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Nav rakstīšanas tiesību katalogā',
    'ERR_UW_FILE_NOT_COPIED' => 'Fails nav nokopēts',
    'ERR_UW_FILE_NOT_DELETED' => 'Problēma noņemot pakotni ',
    'ERR_UW_FILE_NOT_READABLE' => 'Failu nevar nolasīt.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Nav atļauts failā rakstīt vai pārvietot failu',
    'ERR_UW_FLAVOR_2' => 'Jauninājuma paveids:',
    'ERR_UW_FLAVOR' => 'SuiteCRM sistēmas paveids:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log failu nevar izveidot/rakstīt tajā. Lūdzu izlabojiet pieejas tiesības jūsu SuiteCRM katalogam.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload vērtību norādiet lielāku par 1. Lūdzu samainiet to savā php.ini failā un pārstartējiet web serveri.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Lūdzu norādiet failu un mēģiniet vēlreiz!',
    'ERR_UW_NO_FILES' => 'Kļūda - nav atrasti faili pārbaudei.',
    'ERR_UW_NO_MANIFEST' => 'Nevar turpināt - zip arhīvā nav atrodams manifest.php fails.',
    'ERR_UW_NO_VIEW' => 'Norādīts nederīgs skats.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Ielādētā datne nav derīga.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Nevar izveidot temp katalogu. Pārbaudiet failu pieejas tiesības.',
    'ERR_UW_ONLY_PATCHES' => 'Šajā lapā var ielādēt tikai labojumu atjauninājumus.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Sākotnējās pārbaudes laikā atklātās kļūdas',
    'ERR_UW_UPLOAD_ERR' => 'Kļūda augšuplādējot failu, lūdzu mēģini vēlreiz!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM versija: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM versija: ',
    'ERR_UW_WRONG_TYPE' => 'Šī lapa nav paredzēta izpildei',
    'LBL_BUTTON_BACK' => '< Atpakaļ',
    'LBL_BUTTON_CANCEL' => 'Atcelt',
    'LBL_BUTTON_DELETE' => 'Dzēst pakotni',
    'LBL_BUTTON_DONE' => 'Pabeigts',
    'LBL_BUTTON_EXIT' => 'Iziet',
    'LBL_BUTTON_NEXT' => 'Tālāk >',
    'LBL_BUTTON_RECHECK' => 'ATkārtot pārbaudi',
    'LBL_BUTTON_RESTART' => 'Restartēt',

    'LBL_UPLOAD_UPGRADE' => 'Ielādēt jauninājuma pakotni',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Failu dublējums',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Šī jaununājuma failu dublējums atrodas',
    'LBL_UW_BACKUP' => 'Faila rezerves kopēšana',
    'LBL_UW_CANCEL_DESC' => 'Atjaunināšana ir atcelta. Visi nokopētie pagaidu un ielādētie jauninājuma faili ir izdzēsti.',
    'LBL_UW_CHECK_ALL' => 'Pārbaudīt visu',
    'LBL_UW_CHECKLIST' => 'Atjauninājuma soļi',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Atjaunināšanas process: Manuāla failu sapludināšana',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Variet lietot jebkuru jums pazīstamu salīdzināšanas metodi, lai sapludinātu šos failus. Kamēr tas nebūs izdarīts, jūsu SuiteCRM instalācija būs nenoteiktā stāvoklī un atjaunināšana nebūs pabeigta.',
    'LBL_UW_COMPLETE' => 'Plotëso',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Visas sistēmas uzstādījumu prasības ir izpildītas',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP uzstādijums: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Modulis',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Modulis',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modulis',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload parametrs',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP iestatījums: Atmiņas limits',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP iestatījums: Plūsma',
    'LBL_UW_COMPLIANCE_DB' => 'Minimālā datubāzes versija',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'php.ini atrašanās vieta',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimālā PHP versija',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP iestatījums: Drošais režīms',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Atrastie uzstādījumi',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip atbalsts',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Faili veiksmīgi nokopēti',

    'LBL_UW_DB_CHOICE1' => 'Atjauninājuma vednis izpilda SQL',
    'LBL_UW_DB_CHOICE2' => 'Manuāli SQL vaicājumi',
    'LBL_UW_DB_ISSUES_PERMS' => 'Datubāzes tiesības',
    'LBL_UW_DB_METHOD' => 'Datubāzes atjaunināšanas metode',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Visas tiesības pieejamas',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Nepieciešamās tiesības',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Ir uzstādītas sekojošas atjauninājumu pakotnes:',
    'LBL_UW_END_LOGOUT_PRE' => 'Atjaunināšana ir pabeigta.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Spiediet Beigt, lai izietu no atjaunināšanas vedņa.',
    'LBL_UW_END_LOGOUT' => 'Ja vēlaties uzstādīt vēl kādu atjauninājuma pakotni, izmantojot atjaunināšanas vedni, vispirms izejiet no sistēmas un piesakieties vēlreiz.',

    'LBL_UW_FILE_DELETED' => 'ir izņemts.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupa',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Failu pieejas tiesības',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Atļauts rakstīt visos failos</b>',
    'LBL_UW_FILE_OWNER' => 'Īpašnieks',
    'LBL_UW_FILE_PERMS' => 'Tiesības',
    'LBL_UW_FILE_UPLOADED' => 'ir ielādēts',
    'LBL_UW_FILE' => 'Faila nosaukums',
    'LBL_UW_FILES_QUEUED' => 'Sekojošas jauninājumu pakotnes ir gatavas uzstādīšanai:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Spiediet Turpināt, lai ielādētu atjaunināšanas pakotni</b>',
    'LBL_UW_FROZEN' => 'Ielādējiet pakotni pirms turpināt.',
    'LBL_UW_HIDE_DETAILS' => 'Slēpt detaļas',
    'LBL_UW_IN_PROGRESS' => 'Procesā',
    'LBL_UW_INCLUDING' => 'Iekļaujot',
    'LBL_UW_INCOMPLETE' => 'Nepabeigts',
    'LBL_UW_MANUAL_MERGE' => 'Failu sapludināšana',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Nav atrasti ieraksti par jauninājumiem.',
    'LBL_UW_NONE' => 'Nav',
    'LBL_UW_OVERWRITE_DESC' => 'Visi mainītie faili tiks pārrakstīti, tai skaitā arī visas koda izmaiņas un veidnēs veiktās izmaiņas. Vai esat drošs ka vēlaties turpināt?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Vai izveidot uzdevumu manuālai sapludināšanai?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Vai nosūtīt jums atgādinājuma e-pastu par manuālu sapludināšanu?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Zemāk redzamie faili tiks modificēti. Noņemiet atzīmi failiem, kurus jāsapludina manuāli. <i>Ikvienai atrastai izkārtojuma izmaiņai atzīme automātiski ir noņemta; atzīmējiet tās, kuras nepieciešams pārrakstīt.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Manuāla sapludināšana nav nepieciešama.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nav nepieciešams.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Automātiski aizsargāti faili:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Visas sākotnējās pārbaudes ir izpildītas.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Spiediet Tālāk, lai sistēmā iekopētu atjauninājuma failus.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Piezīme: </b> Visi turpmākie atjaunināšanas soļi ir obligāti un, izvēloties Turpināt, process ir jāizpilda līdz galam. Ja nevēlaties turpināt, spiediet Atcelt.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Pārslēgt visus failus',

    'LBL_UW_REBUILD_TITLE' => 'Pārģenerēt rezultātu',
    'LBL_UW_SCHEMA_CHANGE' => 'Shēmas izmaiņas',

    'LBL_UW_SHOW_COMPLIANCE' => 'Parādīt atrastos uzstādījumus',
    'LBL_UW_SHOW_DB_PERMS' => 'Parādīt trūkstošās datubāzes tiesības',
    'LBL_UW_SHOW_DETAILS' => 'Rādīt detaļas',
    'LBL_UW_SHOW_DIFFS' => 'Rādīt manuāli sapludināmos failus',
    'LBL_UW_SHOW_NW_FILES' => 'Rādīt failus ar nepareizām tiesībām',
    'LBL_UW_SHOW_SCHEMA' => 'Rādīt shēmas izmaiņu skriptu',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Rādīt nederīgus vaicājumus',
    'LBL_UW_SHOW' => 'Rādīt',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Izlaistie faili',
    'LBL_UW_SQL_RUN' => 'Pārbaudīt, kad manuāli tiek palaisti SQL',
    'LBL_UW_START_DESC' => 'Vednis jums palīdzēs atjaunināt SuiteCRM instanci.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Spiediet Turpināt, lai sāktu sistēmas pārbaudi, kas nepieciešama, lai pārliecinātos, ka sistēma ir gatava atjaunināšanai. Tiks pārbaudītas tiesības uz failiem, datubāzes tiesības un servera iestatījumi.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Jaunais atjauninājumu vednis tūlīt atsāks procesu. Lūdzu turpiniet atjaunināšanu.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Sveicināti jaunajā atjaunināšanas vednī',

    'LBL_UW_TITLE_CANCEL' => 'Atcelt',
    'LBL_UW_TITLE_COMMIT' => 'Apstiprināt atjaunināšanu',
    'LBL_UW_TITLE_END' => 'Iztaujāt',
    'LBL_UW_TITLE_PREFLIGHT' => 'Sākotnējā pārbaude',
    'LBL_UW_TITLE_START' => 'Sveiks',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sistēmas pārbaude',
    'LBL_UW_TITLE_UPLOAD' => 'Ielādēt pakotni',
    'LBL_UW_TITLE' => 'Atjauninājumu vednis',
    'LBL_UW_UNINSTALL' => 'Atinstalēt',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Akceptēt licenci',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konvertēt licenci',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Notiek atjaunināšanas uzsākšana',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Notiek sistēmas pārbaude',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Notiek licences pārbaude',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Notiek sākotnējā pārbaude',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Kopē failus',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Notiek atjauninājumu apstiprināšana',
    'LBL_UW_COMMIT_DESC' => 'Spiediet Turpināt, lai palaistu atjauninājuma papildus skriptus.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Izpilda atjauninājuma skriptus',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Veido atjauninājuma kopsavilkumu',
    'LBL_UPGRADE_IN_PROGRESS' => 'procesā',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Laiks, kas pagājis',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Atjaunināšana atcelta un notiek sakopšana',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Atjaunināšana var aizņemt noteiktu laiku',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Notiek augšupielādes pārbaudes',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Notiek jauninājuma pakotnes ielāde',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Atjauninājuma vednis dzēš veco 451 shēmu',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manuāla shēmu dzēšana pēc atjaunināšanas',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Veco shēmu dzēšanas metode',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Parādīt vecās shēmas, kas var tikt izdzēstas',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Izlaistie vaicājumi',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Nepieciešama PHP versija 5 vai jaunāka.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'SuiteCRM neatbalsta jūsu PHP versiju. Jums ir jāuzstāda SuiteCRM programmai atbilstoša versija. Lūdzu skatīties PHP atbilstības matricu laidiena piezīmēs. Jūsu pašreizējā versija ir',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php saderības režīms ir ieslēgts. Uzstādiet zend.ze1_compatibility_mode uz režīmu Izslēgts, lai turpinātu tālāk.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Darbība',
    'LBL_ML_CANCEL' => 'Atcelt',
    'LBL_ML_COMMIT' => 'Izpildīt',
    'LBL_ML_DESCRIPTION' => 'Apraksts',
    'LBL_ML_INSTALLED' => 'Instalēšanas datums',
    'LBL_ML_NAME' => 'Vārds:',
    'LBL_ML_PUBLISHED' => 'Publicēšanas datums',
    'LBL_ML_TYPE' => 'Tips:',
    'LBL_ML_UNINSTALLABLE' => 'Atinstalējams',
    'LBL_ML_VERSION' => 'Versija',
    'LBL_ML_INSTALL' => 'Instalēt',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Jūsu pašreizējā php versija ir: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Jauninājuma vednis',
    'LBL_UPLOAD_SUCCESS' => 'Jauninājuma pakotne veiksmīgi ielādēta. Spiediet turpināt, lai veiktu nobeiguma pārbaudi.',
    'LBL_UW_TITLE_LAYOUTS' => 'Apstiprināt izkārtojumus',
    'LBL_LAYOUT_MODULE_TITLE' => 'Izkārtojumi',
    'LBL_LAYOUT_MERGE_DESC' => 'Ir pieejami jauni lauki, kuri ir pievienoti kā daļa no jauninājuma, un var tikt pievienoti esošajiem moduļu izkārtojumiem.  Lai uzzinātu vairāk par jaunajiem laukiem, lūdzu aplūkojiet laidiena piezīmes versijai uz kuru jūs veicat uzlabošanu.<br><br> Ja nevēlaties pievienot jaunos laukus, lūdzu neatzīmējiet moduli, un jūsu pielāgotie izkārtojumi paliks neizmainīti. Pēc jauninājuma uzstādīšanas lauki būs pieejami Studio. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Spiediet turpināt, lai apstiprinātu izmaiņas un pabeigtu atjaunināšanu.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Spiediet turpināt, lai pabeigtu atjaunināšanu.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Apstiprināt izkārtojumus',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Apstiprināt izkārtojuma rezultātus',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Sekojoši izkārtojumi ir veiksmīgi sapludināti:',
    'LBL_SELECT_FILE' => 'Izvēlieties failu:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Augšupielādētais fails nav saderīgs ar šo SuiteCRM versiju: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Augšupielādētais fails nav saderīgs ar šo SuiteCRM versiju: ',
    'LBL_LANGPACKS' => 'Valodas pakas' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Moduļa ielādētājs' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Labojumi' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Tēmas' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Darbplūsma' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Atjaunināšana' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Apstrāde' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Augšupielādētais fails pārsniedz upload_max_filesize ierobežojumu php.ini failā.',
        2 => 'Augšupielādētais fails pārsniedz MAX_FILE_SIZE ierobežojumu, kurš norādīts HTML formā.',
        3 => 'Augšupielādētais fails tika augšupielādēts tikai daļēji.',
        4 => 'Netika augšupielādēts neviens fails.',
        5 => 'Nezināma kļūda.',
        6 => 'Iztrūkst pagaidu katalogs.',
        7 => 'Kļūda, rakstot failu uz diska.',
        8 => 'Faila augšupielāde apturēta paplašinājuma dēļ.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
