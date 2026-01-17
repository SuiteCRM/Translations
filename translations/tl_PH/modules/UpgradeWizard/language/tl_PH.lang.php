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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Hindi matukoy na Grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Hindi matukoy na may-ari',
    'ERR_UW_CONFIG_WRITE' => 'May kamalian sa pag-update ng config.php sa bagong bersyon ng impormasyon.',
    'ERR_UW_CONFIG' => 'Pakiusap gawin mo na pwedeng masulatan ang config.php na file at i-reload ang page na ito.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Ang direktoryo ay di pwedeng masulatan',
    'ERR_UW_FILE_NOT_COPIED' => 'Hindi nakopya ang file',
    'ERR_UW_FILE_NOT_DELETED' => 'May problema sa pagtanggal sa pakete ',
    'ERR_UW_FILE_NOT_READABLE' => 'Hindi mabasa ang file.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Hindi pwedeng ilipat o masulatan ang file sa',
    'ERR_UW_FLAVOR_2' => 'Mag-upgrade ng Flavor: ',
    'ERR_UW_FLAVOR' => 'Sistema ng SuiteCRM Flavor: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'ang./upgradeWizard.log ay hindi pwedeng malikha/masulatan. Paki-ayos ang mga pahintulot sa iyong SuiteCRM na direktoryo.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'paki-takda ang mbstring.func_overload na higit sa isa ang halaga. Palitan ito sa iyong php.ini at i-restart ang web server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Magspecify ka ng file at ulitin muli!',
    'ERR_UW_NO_FILES' => 'May kamaliang naganap, walang files na nakita para i-check.',
    'ERR_UW_NO_MANIFEST' => 'Ang zip payl ay nawawala sa manifest.php payl. Hindi pwedeng magpatuloy.',
    'ERR_UW_NO_VIEW' => 'Hindi wasto ang view na tinukoy.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Hindi wasto ang pag-upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Hindi makalikha sa temp na direktoryo. I-check ang mga naka pahintulot sa file.',
    'ERR_UW_ONLY_PATCHES' => 'Maari ka lang mag-upload ng mga patche sa payl na ito.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'May nakitang pagkakamali sa panahon ng Preflight Check',
    'ERR_UW_UPLOAD_ERR' => 'Nagkaroon ng pagkakamali habang inu-upload ang file, paki subukan ulit!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Bersyon ng SuiteCRM na sistema: ',
    'ERR_UW_PHP_VERSION' => 'Bersyon ng PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Bersyon ng SuiteCRM na sistema: ',
    'ERR_UW_WRONG_TYPE' => 'Ang page na ito ay hindi para sa pagtakbo ',
    'LBL_BUTTON_BACK' => '< Bumalik',
    'LBL_BUTTON_CANCEL' => 'I-cancel',
    'LBL_BUTTON_DELETE' => 'Tanggalin ang Pakete',
    'LBL_BUTTON_DONE' => 'Tapos na',
    'LBL_BUTTON_EXIT' => 'Lumabas',
    'LBL_BUTTON_NEXT' => 'Susunod >',
    'LBL_BUTTON_RECHECK' => 'Suriin muli',
    'LBL_BUTTON_RESTART' => 'I-restart',

    'LBL_UPLOAD_UPGRADE' => 'Mag-upload at mag-upgrade ng Package ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Ang Back-up sa File',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Ang mga na back-up file na galing sa upgrade na ito ay matatgpuan sa',
    'LBL_UW_BACKUP' => 'File BACKUP',
    'LBL_UW_CANCEL_DESC' => 'Ang upgrade ay kinansela. Anumang mga file na pansamantalang nakopya at anumang mga file na na-upload ay tinanggal na.',
    'LBL_UW_CHECK_ALL' => 'Suriin ang lahat',
    'LBL_UW_CHECKLIST' => 'Mga Hakbang sa pag-upgrade',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Ang mga Back-up sa Overwritten na Files ay nasa sumusunod na direktoryo: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Mano-manong isanib ang mga sumusunod na file: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proseso ng pag-upgrade: Mano-manong isanib ang mga File',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Pumili ng alinmang magkaiba na paraan na pinaka-pamilyar sayo at pagsamahin ang mga files na ito. Hanggang sa ito\'y makumpleto, ang iyong SuiteCRM na installation ay magiging hindi tiyak na estado, at hindi makukumpleto ang pag-upgrade.',
    'LBL_UW_COMPLETE' => 'Kumpleto',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Lahat ng mga kinakailang sa sistema ng Settings ay na-satisfied',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Setting ng PHP: Tumawag sa oras sa pamamagitan ng Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Module',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings Module',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parametro',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Setting: Limitasyon sa Memorya',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Pinakamaliit na bersyon ng Database',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Lokasyon ng php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Pinakamababang bersyon ng PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Ligtas na Paraan',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Natuklasang Settings',
    'LBL_UW_COMPLIANCE_XML' => 'Pag-parse ng XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suporta sa Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Bersyon',
    'LBL_UW_COPIED_FILES_TITLE' => 'Matagumpay na nakopya ang mga Files',

    'LBL_UW_DB_CHOICE1' => 'Ang Upgrade na Wizard ay tumatakbo sa SQL',
    'LBL_UW_DB_CHOICE2' => 'Mano-manong tanong sa SQL',
    'LBL_UW_DB_ISSUES_PERMS' => 'Mga Pribilehiyo ng Database',
    'LBL_UW_DB_METHOD' => 'Paraan ng pag-update sa Database',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Lahat ng Pribilehiyo ay magagamit',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Kinakailangang Pribilehiyo',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Ang mga sumusunod na upgrade packages ay na-install na:',
    'LBL_UW_END_LOGOUT_PRE' => 'Ang update ay kumpleto na.',
    'LBL_UW_END_LOGOUT_PRE2' => 'I-click ang Done para makalabas sa Upgarde Wizard.',
    'LBL_UW_END_LOGOUT' => 'Kung gusto mong mag-aplay ng ibang upgrade package gamit ang Upgrade Wizard, mag-logout at log back ulit bago gawin ito.',

    'LBL_UW_FILE_DELETED' => ' ay tinanggal na.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Mga pahintulot ng File',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Lahat ng File ay maaring sulatan</b>',
    'LBL_UW_FILE_OWNER' => 'May-ari',
    'LBL_UW_FILE_PERMS' => 'Mga Pahintulot',
    'LBL_UW_FILE_UPLOADED' => ' na-upload na',
    'LBL_UW_FILE' => 'Ang Pangalan ng File',
    'LBL_UW_FILES_QUEUED' => 'Ang mga sumusunod na upgrade packages ay handa ng i-install:',
    'LBL_UW_FILES_REMOVED' => 'Ang mga sumusunod na file ay tatanggalin sa sistema:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>I-click ang Next para i-upload ang upgrade packages.</b>',
    'LBL_UW_FROZEN' => 'Mag-upload ng package bago magpatuloy.',
    'LBL_UW_HIDE_DETAILS' => 'Itago ang mga Detalye',
    'LBL_UW_IN_PROGRESS' => 'Nasa pag-unlad',
    'LBL_UW_INCLUDING' => 'Kabilang ang',
    'LBL_UW_INCOMPLETE' => 'Hindi kumpleto',
    'LBL_UW_MANUAL_MERGE' => 'Pagsamahin ang File',
    'LBL_UW_MODULE_READY' => 'Ang Module ay handa ng i-install. I-click ang "Commit" para magpatuloy sa pagi-install.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Walang naitalang Upgrades na nakita.',
    'LBL_UW_NONE' => 'Wala',
    'LBL_UW_OVERWRITE_DESC' => 'Lahat ng binagong files ay mapapalitan, kasama ang kahit anong code na pinasadya at mga kaayusan na binago mo. Sigurado ka bang gusto mong magpatuloy?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Gumawa ng item na gawain para sa mano-manong pag-iisa?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Mag-email sa sarili mo para sa paalala sa mano-manong pag-iisa?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Ang mga files na nailista sa ibaba ay binago. Ang walang check na mga item ay nangangailangan ng mano-manong pag-iisa.<i>Anumang nakitang pagbabago sa kaayusan ay awtomatikong ina-uncheck; i-checkmark ang anumang gusto mong mapalitan.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Walang mano-manong pag-iisa sa File na kinakailangan.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Hindi kailangan.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Awtomatikong napanatili ang mga File:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Lahat ng preflight na pagsusuri ay nakapasa.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'I-click ang Next para kopyahing ang upgraded na file sa system.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Tandaan: </b>Ang iba sa upgrade na proseso ay hindi sapilitan, at sa pag-click ng Next nangangailan itong kumpletuhin ang proseso. Kung gusto mong hindi tumuloy, i-click ang Cancel na button.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'I-toggle lahat ng Files',

    'LBL_UW_REBUILD_TITLE' => 'I-rebuild ang Resulta',
    'LBL_UW_SCHEMA_CHANGE' => 'Mga pagbabago sa Schema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Ipakita ang nakitang Settings',
    'LBL_UW_SHOW_DB_PERMS' => 'Ipakita ang nawawalang Database na mga pahintulot',
    'LBL_UW_SHOW_DETAILS' => 'Ipakita ang mga Detalye',
    'LBL_UW_SHOW_DIFFS' => 'Ipakita ang mga File na nangangailangan ng mano-manong pagsama-samahin',
    'LBL_UW_SHOW_NW_FILES' => 'Ipakita ang mga File na mayroong masamang pahintulot',
    'LBL_UW_SHOW_SCHEMA' => 'Ipakita ang pagbabgo sa Schema na Iskrip',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Ipakita ang mga masamang tanong',
    'LBL_UW_SHOW' => 'Ipakita',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Mga nilaktawan na File',
    'LBL_UW_SQL_RUN' => 'I-check kung ang SQL ay mano-manong tumatakbo',
    'LBL_UW_START_DESC' => 'Tutulungan ka ng wizard sa pagmumungkahi nang pagu-upgrade nitong SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Tandaan: Mataas naming rinerekomenda na lumikha ka ng kopya ng halimbawa ng SuiteCRM na iyong ginamit sa produksyon, at i-sulit ang naka-upgrade na pakete bago maglagay ng bagong bersyon. Kung binago mo ang "composer.json" na payl, mangyaring patakbuhin ang, matapos makumpleto ang proseso ng pag upgrade:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'I-click ang Next para magsagawa ng pagsusuri sa iyong sistema para siguraduhin na ang sistema ay handa na sa pag-upgrade. Ang kabilang sa pagsusuri ay ang file permissions, database privileges at server settings.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Ipagpapatuloy muli ng bagong Upgrade Wizard ang proseso. Magpatuloy ka sa iyong pag-uupgrade.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Maligayang pagdating sa iyong bagong Upgrade na Wizard',

    'LBL_UW_TITLE_CANCEL' => 'I-cancel',
    'LBL_UW_TITLE_COMMIT' => 'Magsagawa ng Upgrade',
    'LBL_UW_TITLE_END' => 'Debrief',
    'LBL_UW_TITLE_PREFLIGHT' => 'Pag-check sa Preflight',
    'LBL_UW_TITLE_START' => 'Walang anuman',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Pagcheck sa sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Mag-upload ng Package',
    'LBL_UW_TITLE' => 'I-upgrade ang mahiko',
    'LBL_UW_UNINSTALL' => 'I-uninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Sumang-ayon sa lisensya',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Palitan ang lisensya',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Pagpapatuloy sa simula',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Pagpapatuloy ng pagsusuri sa sistema',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Pagpapatuloy ng pagsusuri sa lisensya',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Pagpapatuloy ng pagsusuri sa Preflight',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Pagpapatuloy sa pagkopya ng File',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Pagpapatuloy sa Commit Upgrade',
    'LBL_UW_COMMIT_DESC' => 'I-click ang Next para sa karagdagang upgrade scripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Pagpapatuloy ng pag-upgrade sa mga Scripts',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Pagpapatuloy sa pag-upgrade ng kabuuran',
    'LBL_UPGRADE_IN_PROGRESS' => 'sa Pagpapatuloy     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Paglipas ng oras',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Pagpaptuloy ng Pag-upgrade Cancel at Cleanup',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Ang pag-uupgrade ay tumatagal ng ilang oras',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Pagpapatuloy sa Upload Checks',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Nag-uuplaoad ng Upgrade Package ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Ang Upgrade ng Wizard Drops ay luma sa 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Mano-manong Drop Schema Post Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Lumang Schema Drop Mwthod',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Ipakita ang lumang Schema na pwedeng tanggalin',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Laktawan ang mga Tanong',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php bersyon 5 o higit pa ang kinakailangan.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ang bersyon ng iyong PHP ay hindi suportado sa SuiteCRM. Kinakailangan mong mag-install ng bersyon na tugma sa SuiteCRM na aplikasyon. Paki-tingnan ang Compatibility Matrix na nasa Release Notes para sa mga suportadong bersyon ng PHP. Ang bersyon ng PHP mo ay ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Ang Php Backward Compatability na paraan ay binuksan. I-set ang zend.ze1_compatibility_mode sa Off para magpatuloy',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_CANCEL' => 'I-cancel',
    'LBL_ML_COMMIT' => 'Magtapat',
    'LBL_ML_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_ML_INSTALLED' => 'Petsa na na-install',
    'LBL_ML_NAME' => 'Ang Pangalan',
    'LBL_ML_PUBLISHED' => 'Petsa na inilathala',
    'LBL_ML_TYPE' => 'Klase',
    'LBL_ML_UNINSTALLABLE' => 'Hindi na pwedeng ma-uninstall',
    'LBL_ML_VERSION' => 'Ang Bersyon',
    'LBL_ML_INSTALL' => 'I-install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Ang kasalukuyang bersyon ng php mo ay: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Ang nirerekomendang php bersyon ay ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' o higit pa.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'I-upgrade ang Wizard',
    'LBL_UPLOAD_SUCCESS' => 'Matagumpay na na-upload ang Upgrade package. I-click ang Next para gawin ang huling pagsusuri.',
    'LBL_UW_TITLE_LAYOUTS' => 'Kumpermahin ang mga Kaayusan',
    'LBL_LAYOUT_MODULE_TITLE' => 'Mga Kaayusan',
    'LBL_LAYOUT_MERGE_DESC' => 'May mga bagong patlang na pwedeng magagamit na idinagdag bilang parte sa upgrade na ito at pwedeng idagdag awtomatic sa iyong umiiral na module na kaayusan. Para sa karagdagang impormasyon tungkol sa bagong patlang, maaring sumangguni sa Release Notes para sa bersyon kung saan mo i-uupgrade.<br><br>Kung hindi mo gustong idagdag ang mga bagong patlang, paki uncheck ang module, at ang iyong custom na kaayusan ay hindi magbabago. Ang mga patlang ay pwedeng magagamit sa Studio pagkatapos ng pag-upgrade.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'I-click ang Next para kumpirmahin ang mga pagbabago at para matapos ang pag-upgrade.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'I-click ang Next para kumpletuhin ang pag-upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Kumpermahin ang mga Kaayusan',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Kumpermahin ang Resulta ng Kaayusan',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Ang mga sumusunod na kaayusan ay matagumpay na napagsama:',
    'LBL_SELECT_FILE' => 'Pumili ng File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang nai-upload na payl ay hindi tugma nA kasama ang bersyon ng SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Ang ina-upload na file ay hindi tugma sa ganitong bersyon ng PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Ang nai-upload na payl ay hindi tugma nA kasama ang bersyon ng SuiteCRM: ',
    'LBL_LANGPACKS' => 'Mga pakete ng lengguwahe' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Ang Tagapasakay ng Modyul' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Mga Upgrade ng Patch' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Mga Tema' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'I-upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Pagproseso' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Ang tugmang bersyon ay hindi itinakda sa manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Habang prinoproseso ang upgrade ito ay nag-uupdate ang ilang files ngunit ang files na ito ay umiiral rin sa custom/ folder. Suriin muli ang mga pagbabago bago magpatuloy:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Ang ina-upload na file ay lumampas sa upload_max_filesize na direktoryo sa php.ini.',
        2 => 'Ang ina-upload na file ay lumampas sa MAX_FILE_SIZE na nakatukoy sa direktoryo ng HTML form.',
        3 => 'Ang ina-upload na file ay bahagya lamang na naka-upload.',
        4 => 'Waalng file na ina-upload.',
        5 => 'Di matukoy na kamalian.',
        6 => 'Nawawala ang pansamantalang folder.',
        7 => 'Bigong masulatan ang file sa disk.',
        8 => 'Pinatigil ang pag-upload ng extension.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
