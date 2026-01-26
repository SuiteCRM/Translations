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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Nepavyko nustatyti grupės',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Nepavyko nustatyti savininko',
    'ERR_UW_CONFIG_WRITE' => 'Klaida atnaujinant config.php failą su naujos versijos informacija.',
    'ERR_UW_CONFIG' => 'Prašome padaryti config.php failą rašomą ir perkraukite puslapį.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Aplankas nėra įrašomas',
    'ERR_UW_FILE_NOT_COPIED' => 'Failas nenukopijuotas',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema šalinant paketą',
    'ERR_UW_FILE_NOT_READABLE' => 'Nepavyko nuskaityti failo.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Failas negali būti perkeltas ar įrašytas į',
    'ERR_UW_FLAVOR_2' => 'Atnaujinimo metodas:',
    'ERR_UW_FLAVOR' => 'SuiteCRM sistemos charakteristikos:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log negali būti sukurtas/rašomas. Prašome sutvarkyti leidimus jūsų SuiteCRM aplanke.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload nustatyta į reikšmę didesnę negu 1. Prašome pakeisti tai php.ini ir perkrauti web serverį.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Prašome nurodyti failą ir bandyti dar kartą!',
    'ERR_UW_NO_FILES' => 'Įvyko klaida, nerasta jokių failų patikrinimui.',
    'ERR_UW_NO_MANIFEST' => 'Zip failui trūksta manifest.php failo. Negalima tęsti.',
    'ERR_UW_NO_VIEW' => 'Neteisingas forma nurodyta.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Neteisingas užkrautas failas.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Negalima sukurti laikino aplanko. Patikrinkite failų prieigos teises.',
    'ERR_UW_ONLY_PATCHES' => 'Čia Jūs tik gali užkrauti sistemos atnaujinimus.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Rastos klaidos patikrinimo metu',
    'ERR_UW_UPLOAD_ERR' => 'Kraunant failą įvyko klaida, prašome bandyti dar kartą!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM sistemos versija: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM sistemos versija: ',
    'ERR_UW_WRONG_TYPE' => 'Šis puslapis neveikia',
    'LBL_BUTTON_BACK' => '< Atgal',
    'LBL_BUTTON_CANCEL' => 'Atšaukti',
    'LBL_BUTTON_DELETE' => 'Ištrinti paketą',
    'LBL_BUTTON_DONE' => 'Atlikta',
    'LBL_BUTTON_EXIT' => 'Išeiti',
    'LBL_BUTTON_NEXT' => 'Toliau >',
    'LBL_BUTTON_RECHECK' => 'Patikrinti',
    'LBL_BUTTON_RESTART' => 'Perkrauti',

    'LBL_UPLOAD_UPGRADE' => 'Užkrauti atnaujinimo paketą',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Failo kopija',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Atsarginiai failai nuo šio atnaujinimo gali būti rasti čia',
    'LBL_UW_BACKUP' => 'Failo atsarginė kopija',
    'LBL_UW_CANCEL_DESC' => 'Atnaujinimo vedlys buvo atšauktas. Visi laikini failai ir išsiųstas zip failas buvo ištrinti.',
    'LBL_UW_CHECK_ALL' => 'Visus pažymėti',
    'LBL_UW_CHECKLIST' => 'Atnaujinimo žingsniai',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Atnaujinimo procesas: Rankiniu būdu apjunkite failus',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Prašome naudoti bet kokį įrankį, kuris yra Jums patogus failų apjungimui.  Kol tai nebaigta, Jūsų SuiteCRM instaliacija bus nestabilioje būsenoje ir patobulinimai nebus baigti.',
    'LBL_UW_COMPLETE' => 'Baigta',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Visi sistemos nustatymų reikalavimai patenkinti',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP nustatymai: Kiek praėjo laiko pateikus užklausą',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL modelis',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP modulis',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings modulis',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload parametrai',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP nustatymai: Atminties limitas',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP nustatymas: Srautas',
    'LBL_UW_COMPLIANCE_DB' => 'Minimali Duomenų bazės versija',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Vieta php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimali PHP versija',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP nustatymai: Saugus rėžimas',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Aptikti nustatymai',
    'LBL_UW_COMPLIANCE_XML' => 'XML apdorojimas',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Aptarnavimas',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Versija',
    'LBL_UW_COPIED_FILES_TITLE' => 'Failai sėkmingai nukopijuoti',

    'LBL_UW_DB_CHOICE1' => 'Patobulinimo vedlys vykdo SQL užklausas',
    'LBL_UW_DB_CHOICE2' => 'SQL užklausų vykdymas rankiniu būdu',
    'LBL_UW_DB_ISSUES_PERMS' => 'Duomenų bazės privilegijos',
    'LBL_UW_DB_METHOD' => 'Duomenų bazės atnaujinimo metodas',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'Keisti lentelę [table] pridėti stulpelį [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'Keisti lentelę [table] pakeisti stulpelį [column]',
    'LBL_UW_DB_NO_CREATE' => 'Sukurti lentelę [table]',
    'LBL_UW_DB_NO_DELETE' => 'Ištrinti iš [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'Keisti lentelę [table] išmesti stulpelį [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'Išmesti lentelę [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Visos privilegijos yra',
    'LBL_UW_DB_NO_INSERT' => 'Įterpti į [table]',
    'LBL_UW_DB_NO_SELECT' => 'Išrinkti [x]  iš [table]',
    'LBL_UW_DB_NO_UPDATE' => 'Atnaujinti [table]',
    'LBL_UW_DB_PERMS' => 'Privalomos privilegijos',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Šie patobulinimo paketai buvo įdiegti:',
    'LBL_UW_END_LOGOUT_PRE' => 'Atnaujinimas užbaigtas.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Paspauskite Baigti norėdami išeiti iš atnaujinimo vedlio.',
    'LBL_UW_END_LOGOUT' => 'Prašome atsijungti, jeigu planuojate atlikti dar vieną patobulinimą.',

    'LBL_UW_FILE_DELETED' => 'buvo išmestas.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupės',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Failų prieigos teisės',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Visi failai įrašomi</b>',
    'LBL_UW_FILE_OWNER' => 'Savininkas',
    'LBL_UW_FILE_PERMS' => 'Teises',
    'LBL_UW_FILE_UPLOADED' => 'buvo užkrautas',
    'LBL_UW_FILE' => 'Failo pavadinimas',
    'LBL_UW_FILES_QUEUED' => 'Šie atnaujinimo paketai yra paruošti įdiegimui:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Paspauskite Toliau, kad užkrauti atnaujinimo paketus.</b>',
    'LBL_UW_FROZEN' => 'Užkraukite paketą prieš tęsiant toliau.',
    'LBL_UW_HIDE_DETAILS' => 'Slėpti detales',
    'LBL_UW_IN_PROGRESS' => 'Progrese',
    'LBL_UW_INCLUDING' => 'Įtraukiant',
    'LBL_UW_INCOMPLETE' => 'Nebaigtas',
    'LBL_UW_MANUAL_MERGE' => 'Failo apjungimas',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Neaptikta patobulinimų.',
    'LBL_UW_NONE' => 'Nėra',
    'LBL_UW_OVERWRITE_DESC' => 'Visi failų pakeitimai bus perrašyti, įskaitant bet kokį kodo pakeitimą ir šablonų pakeitimus kuriuos atlikote. Ar tikrai norite tęsti?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Sukurti užduotį rankiniam apjungimui?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Išsiųsti sau priminimą apie rankinį apjungimą?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Pateikti failai buvo redaguoti. Nuimkite pažymėjimą nuo failų, kurie reikalauja rankinio sujungimo. <i>Bet koks aptiktas išdėstymo pakeitimas bus automatiškai atžymėtas.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Nereikalingas rankinis failų apjungimas.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Nereikalingas.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-išsaugoti failai:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Visi prieš paleidžiamieji testai praeiti.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Paspauskite "Toliau", kad kopijuoti atnaujinimo failus į sistemą.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Pastaba: </b> Visas atnaujinimo procesas turi būti atliktas vienu kartu. Paspauskite "Toliau" norėdami tęsti arba "Atšaukti", norėdami sustabdyti.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Perjungti visus failus',

    'LBL_UW_REBUILD_TITLE' => 'Atstatyti rezultatą',
    'LBL_UW_SCHEMA_CHANGE' => 'Schemos pakeitimai',

    'LBL_UW_SHOW_COMPLIANCE' => 'Rodyti aptiktus nustatymus',
    'LBL_UW_SHOW_DB_PERMS' => 'Rodyti trūkstamas duomenų bazės teises',
    'LBL_UW_SHOW_DETAILS' => 'Rodyti detales',
    'LBL_UW_SHOW_DIFFS' => 'Rodyti failus reikalaujančius rankinio apjungimo',
    'LBL_UW_SHOW_NW_FILES' => 'Rodyti failus su blogais leidimais',
    'LBL_UW_SHOW_SCHEMA' => 'Rodyti schemos pakeitimo skriptą',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Rodyti blogas užklausas',
    'LBL_UW_SHOW' => 'Rodyti',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Praleisti failai',
    'LBL_UW_SQL_RUN' => 'Patikrinkite kada SQL rankiniu būdu buvo paleistas',
    'LBL_UW_START_DESC' => 'SuiteCRM atnaujinimo vedlys. Prašome atidžiai sekti instrukcijas.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Spustelėkite "Toliau", kad sistema patikrintų ar įmanomas atnaujinimas. Patikrinimas apima failų teises, duomenų bazių privilegijas ir serverio nustatymus.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Naujas patobulinimo vedlys sugrįš atgal į patobulinimo procesą. Prašome tęsti atnaujinimą.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Sveiki atėję į naują patobulinimo vedlį',

    'LBL_UW_TITLE_CANCEL' => 'Atšaukti',
    'LBL_UW_TITLE_COMMIT' => 'Atnaujinimo vykdymas',
    'LBL_UW_TITLE_END' => 'Debrief',
    'LBL_UW_TITLE_PREFLIGHT' => 'Prieš paleidžiamasis patikrinimas',
    'LBL_UW_TITLE_START' => 'Sveiki atvykę',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sistemos patikrinimas',
    'LBL_UW_TITLE_UPLOAD' => 'Užkrauti paketą',
    'LBL_UW_TITLE' => 'Atnaujinimo vedlys',
    'LBL_UW_UNINSTALL' => 'Išdiegti',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Patvirtinti licenciją',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Keisti licenciją',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Pradėta',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Sistema tikrinama',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Licencijos patikrinimas atliekamas',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Prie paleidžiamieji patikrinimai vykdomi',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Atliekamas failų kopijavimas',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Atliekamas patobulinimas',
    'LBL_UW_COMMIT_DESC' => 'Paspauskite "Toliau" norėdami paleisti papildomus atnaujinimo skriptus.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Atliekamas skriptų atnaujinimas',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Atnaujinimo santrauka vykdoma',
    'LBL_UPGRADE_IN_PROGRESS' => 'atliekama',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Laiko praėjo',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Atliekamas atnaujinimo atšaukimas',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Atnaujinimas gali užtrukti',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Atliekamas užkrovimo patikrinimas',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Užkraunamas atnaujinimo paketas',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Patobulinimo vedlys išmeta seną 451 schemą',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Senos schemos išmetimo metodas',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Rodyti seną schemą, kuri gali būti išmesta',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Praleistos užklausos',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP 5 ar aukštesnė versija reikalinga.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Jūsų naudojama PHP versija nesuderinama su SuiteCRM.  Jums reikės įdiegti PHP versiją, kuri yra suderinama su SuiteCRM.  Prašome pasižiūrėti suderinamumo matricą versijos aprašyme. Jūsų versija yra',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP Backward Compatibility mode yra išjungtas. Nustatykite zend.ze1_compatibility_mode į Off prieš tęsiant',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Veiksmas',
    'LBL_ML_CANCEL' => 'Atšaukti',
    'LBL_ML_COMMIT' => 'Vykdyti',
    'LBL_ML_DESCRIPTION' => 'Aprašymas',
    'LBL_ML_INSTALLED' => 'Įdiegimo data',
    'LBL_ML_NAME' => 'Vardas',
    'LBL_ML_PUBLISHED' => 'Paskelbimo data',
    'LBL_ML_TYPE' => 'Tipas:',
    'LBL_ML_UNINSTALLABLE' => 'Nepašalinamas',
    'LBL_ML_VERSION' => 'Versija',
    'LBL_ML_INSTALL' => 'Įdiegti',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Jūsų dabartinė PHP versija yra: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Atnaujinimo vedlys',
    'LBL_UPLOAD_SUCCESS' => 'Atnaujinimo paketas sėkmingai įkeltas. Spustelėkite "Toliau" galutinio patikrinimo atlikimui.',
    'LBL_UW_TITLE_LAYOUTS' => 'Patvirtinti išdėstymą',
    'LBL_LAYOUT_MODULE_TITLE' => 'Išdėstymai',
    'LBL_LAYOUT_MERGE_DESC' => 'Atnaujinant sistemą bus įkelti į modulių išdėstymus nauji laukai. Jeigu nenorite, kad jie būtų įkelti prašome atžymėti modulį.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Paspauskite "Toliau" norėdami patvirtinti pakeitimus ir užbaigti atnaujinimą.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Paspauskite "Toliau" norėdami užbaigti atnaujinimą.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Patvirtinti išdėstymą',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Patvirtinti išdėstymo rezultatus',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Šie išdėstymai buvo sėkmingai sujungti:',
    'LBL_SELECT_FILE' => 'Pasirinkti failą:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Užkrautas failas nesuderinamas su šia SuiteCRM versija:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Užkrautas failas nesuderinamas su šia SuiteCRM versija:',
    'LBL_LANGPACKS' => 'Kalbos paketai' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Modulių įdiegėjas' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Atnaujinimai' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temos' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Darbo eiga' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Atnaujinimai' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Vykdoma' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį upload_max_filesize direktyvą nurodytą php.ini faile.',
        2 => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį MAX_FILE_SIZE direktyvą, kuri buvo nurodyta HTML formoje.',
        3 => 'Išsiųstas failas buvo tik dalinai išsiųstas.',
        4 => 'Jokių failų neišsiųsta.',
        5 => 'Nežinoma klaida.',
        6 => 'Trūksta laikino katalogo.',
        7 => 'Nepavyko įrašyti failo į diską.',
        8 => 'Failo išsiuntimas sustojo dėl plėtinio.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
