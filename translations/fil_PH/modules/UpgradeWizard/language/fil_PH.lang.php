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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Hindi matukoy ng grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Hindi matukoy ang May-ari',
    'ERR_UW_CONFIG_WRITE' => 'Error sa pag-update ng config.php gamit ang bagong bersyon ng impormasyon.',
    'ERR_UW_CONFIG' => 'Mangyaring gawing writable ang iyong config.php file at i-reload ang pahinang ito.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Hindi nasusulatang sa direktoryo',
    'ERR_UW_FILE_NOT_COPIED' => 'File not copied',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema sa pag-alis ng pakete ',
    'ERR_UW_FILE_NOT_READABLE' => 'Hindi mabasa ang file.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Ang file ay hindi maaaring ilipat o nasusulat sa',
    'ERR_UW_FLAVOR_2' => 'I-upgrade ang Lasa: ',
    'ERR_UW_FLAVOR' => 'Lasa ng sistema ng SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log ay hindi maaaring malikha/nakasulat sa. Mangyaring ayusin ang mga pahintulot sa iyong direktoryo ng SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'ang mbstring.func_overload ay nakatakda sa isang halaga na mas mataas kaysa sa 1. Mangyaring baguhin ito sa iyong php.ini at i-restart ang web server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Mangyaring tukuyin ang isang file at subukan muli!',
    'ERR_UW_NO_FILES' => 'May naganap na error, walang nahanap na mga file upang suriin.',
    'ERR_UW_NO_MANIFEST' => 'Ang zip file ay nawawala ang manifest.php file. Hindi maaaring magpatuloy.',
    'ERR_UW_NO_VIEW' => 'Di-wasto ang tinukoy na view.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Hindi wastong pag-upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Hindi maaaring lumikha ng temp directory. Suriin ang mga pahintulot ng file.',
    'ERR_UW_ONLY_PATCHES' => 'Maaari ka lamang mag-upload ng mga patch sa pahinang ito.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Mga error na Natagpuan sa panahon ng Preflight tsek',
    'ERR_UW_UPLOAD_ERR' => 'Nagkaroon ng error sa pag-upload ng file, pakisubukang muli!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Bersyon ng sistema ng SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Bersyon ng PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Bersyon ng sistema ng SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Ang pahinang ito ay hindi para sa pagtakbo ',
    'LBL_BUTTON_BACK' => '< Bumalik',
    'LBL_BUTTON_CANCEL' => 'Kanselahin',
    'LBL_BUTTON_DELETE' => 'Tanggalin ang pakete',
    'LBL_BUTTON_DONE' => 'Tapos na',
    'LBL_BUTTON_EXIT' => 'Labasan',
    'LBL_BUTTON_NEXT' => 'Susunod >',
    'LBL_BUTTON_RECHECK' => 'Suriin uli',
    'LBL_BUTTON_RESTART' => 'I-restart',

    'LBL_UPLOAD_UPGRADE' => 'I-upload ang Upgrade na pakete ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Backup ng File',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Ang mga naka-back up na file mula sa pag-upgrade na ito ay matatagpuan sa',
    'LBL_UW_BACKUP' => 'Backup ng File',
    'LBL_UW_CANCEL_DESC' => 'Kinansela ang pag-upgrade. Ang anumang mga pansamantalang file na kinopya at anumang pag-upgrade ng mga file na na-upload ay tinanggal.',
    'LBL_UW_CHECK_ALL' => 'Tingnan lahat',
    'LBL_UW_CHECKLIST' => 'I-upgrade ang Mga Hakbang',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Ang mga backup ng Overwritten Files ay nasa sumusunod na direktoryo: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manu-manong pagsamahin ang mga sumusunod na file: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'I-upgrade ang Proseso: Manu-manong Pagsamahin ang Mga File',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Mangyaring gamitin ang alinmang paraan ng diff ay pinaka pamilyar sa iyo upang pagsamahin ang mga file na ito. Hanggang sa ito ay kumpleto na, ang iyong pag-install ng SuiteCRM ay nasa isang hindi tiyak na estado, at ang pag-upgrade ay hindi kumpleto.',
    'LBL_UW_COMPLETE' => 'Kumpleto',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Lahat ng Mga Pangangailangan sa Mga Setting ng sistema ay nakamit',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Pagtatakda ng PHP: Tumawag sa Time Pass Ayon sa Sanggunian',
    'LBL_UW_COMPLIANCE_CURL' => 'kulot na modulo',
    'LBL_UW_COMPLIANCE_IMAP' => 'Modulo ng IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Modulo ng MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_sobrang laki ng parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Pagtatakda ng PHP: Limitasyon sa Memory',
    'LBL_UW_COMPLIANCE_STREAM' => 'Pagtatakda ng PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Pinakamababang Bersyon ng Database',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Lokasyon ng php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Pinakamaliit na Bersyon ng PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Pagtatakda ng PHP: Ligtas na mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Mga Natukoy na Setting',
    'LBL_UW_COMPLIANCE_XML' => 'Pag-parse ng XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suporta ng Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE na bersyon',
    'LBL_UW_COPIED_FILES_TITLE' => 'Matagumpay na nai-kopya ang Mga File',

    'LBL_UW_DB_CHOICE1' => 'I-upgrade ang Wizard Nagpapatakbo ng SQL',
    'LBL_UW_DB_CHOICE2' => 'Manu-manong mga tanong ng SQL',
    'LBL_UW_DB_ISSUES_PERMS' => 'Mga Pribilehiyo ng Database',
    'LBL_UW_DB_METHOD' => 'Pamamaraan ng Pag-update ng Database',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'Baguhin ang talahanayan [table] magdagdag ng kolum [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Magagamit ang Lahat ng Mga Pribilehiyo',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Kinakailangang Pribilehiyo',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Na-install ang mga sumusunod na pakete ng pag-upgrade:',
    'LBL_UW_END_LOGOUT_PRE' => 'Kumpleto na ang pag-upgrade.',
    'LBL_UW_END_LOGOUT_PRE2' => 'I-click ang Tapos na upang lumabas sa Upgrade Wizard.',
    'LBL_UW_END_LOGOUT' => 'Kung plano mong mag-aplay ng isa pang pakete sa pag-upgrade gamit ang Upgrade Wizard, mag-log out at mag-log in bago magawa ito.',

    'LBL_UW_FILE_DELETED' => ' ay tinanggal. <br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Mga Pahintulot ng File',
    'LBL_UW_FILE_NO_ERRORS' => '<b> Lahat ng mga File Writable </b>',
    'LBL_UW_FILE_OWNER' => 'May-ari',
    'LBL_UW_FILE_PERMS' => 'Mga pahintulot',
    'LBL_UW_FILE_UPLOADED' => ' na-upload na',
    'LBL_UW_FILE' => 'Pangalan ng file',
    'LBL_UW_FILES_QUEUED' => 'Ang mga sumusunod na mga pakete sa pag-upgrade ay handa nang ma-install:',
    'LBL_UW_FILES_REMOVED' => 'Ang mga sumusunod na file ay aalisin mula sa system: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b> I-click ang Susunod upang mag-upload ng mga pakete ng pag-upgrade. </b>',
    'LBL_UW_FROZEN' => 'Mag-upload ng isang pakete bago magpatuloy.',
    'LBL_UW_HIDE_DETAILS' => 'Itago ang Mga Detalye',
    'LBL_UW_IN_PROGRESS' => 'Isinasagawa',
    'LBL_UW_INCLUDING' => 'Kabilang ang',
    'LBL_UW_INCOMPLETE' => 'Hindi kumpleto',
    'LBL_UW_MANUAL_MERGE' => 'Pagsamahin ang File',
    'LBL_UW_MODULE_READY' => 'Ang Module ay handa nang ma-install. I-click ang "Commit" upang magpatuloy sa pag-install.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Walang naitala na Mga Upgrade na nakita.',
    'LBL_UW_NONE' => 'Wala',
    'LBL_UW_OVERWRITE_DESC' => 'Ang lahat ng mga nabagong file ay mapapatungan, kabilang ang anumang mga pagpapasadya ng code at mga pagbabago sa template na iyong ginawa. Sigurado ka bang gusto mong magpatuloy?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Lumikha ng Task Item para sa Manu-manong Sumanib?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'I-email ang iyong sarili ng isang Paalala para sa Manu-manong Sumanib?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Binago ang mga file na nakalista sa ibaba. i-uncheck ang mga item na nangangailangan ng manu-manong pagsasama. <i> Ang anumang natukoy na mga pagbabago sa layout ay awtomatikong naka-check; suriin ang anumang na dapat mapapatungan.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Walang kinakailangang Manu-manong File Merge.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Hindi kailangan.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Awtomatikong napananatili ang mga File:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Ang lahat ng mga pagsubok sa preflight ay nakapasa na.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'I-click ang Susunod upang kopyahin ang mga na-upgrade na file sa system.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b> Tandaan: </b> Ang natitirang proseso ng pag-upgrade ay sapilitan, at ang pag-click sa Susunod ay hihiling sa iyo upang makumpleto ang proseso. Kung hindi mo nais na magpatuloy, i-click ang button na Kanselahin.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'I-toggle ang Lahat ng Mga File',

    'LBL_UW_REBUILD_TITLE' => 'Muling itayo ang resulta',
    'LBL_UW_SCHEMA_CHANGE' => 'Pagbabago ng Schema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Ipakita ang Detected Settings',
    'LBL_UW_SHOW_DB_PERMS' => 'Ipakita ang Nawawalang Mga Pahintulot sa Database',
    'LBL_UW_SHOW_DETAILS' => 'Ipakita ang mga detalye',
    'LBL_UW_SHOW_DIFFS' => 'Ipakita ang Mga File Kinakailangan ng Manu-manong pagsanib',
    'LBL_UW_SHOW_NW_FILES' => 'Ipakita ang Mga File na May Mga masamang Pahintulot',
    'LBL_UW_SHOW_SCHEMA' => 'Ipakita ang Script Baguhin ang Schema',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Ipakita ang Mga masamang Query',
    'LBL_UW_SHOW' => 'Ipakita',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Mga Nilaktawan na mga file',
    'LBL_UW_SQL_RUN' => 'Suriin kung ang SQL ay manu-manong tumakbo',
    'LBL_UW_START_DESC' => 'Ang wizard na ito ay tutulong sa iyo sa pag-upgrade ng instansiya ng SuiteCRM na ito.',
    'LBL_UW_START_DESC2' => 'Tandaan: Masidhing inirerekumenda namin na lumikha ka ng isang kopya ng halimbawa ng SuiteCRM na ginagamit mo sa produksyon, at subukan ang pag-upgrade na pakete bago i-deploy ang bagong bersyon. Kung binago mo ang "composer.json" na file, mangyaring magpatakbo ng, pagkatapos makumpleto ang proseso ng pag-upgrade:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'I-click ang Susunod upang magsagawa ng tsek sa iyong system upang matiyak na ang sistema ay handa na para sa pag-upgrade. Kasama sa tsek ang mga pahintulot ng file, mga pribilehiyo ng database at mga setting ng server.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Ang bagong Upgrade Wizard ay muling ipagpatuloy ang proseso ng pag-upgrade. Mangyaring ipagpatuloy ang iyong pag-upgrade.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Maligayang pagdating sa bagong Upgrade Wizard',

    'LBL_UW_TITLE_CANCEL' => 'Kanselahin',
    'LBL_UW_TITLE_COMMIT' => 'I-upgrade ang Commit',
    'LBL_UW_TITLE_END' => 'I-debrief',
    'LBL_UW_TITLE_PREFLIGHT' => 'I-check ang Preflight',
    'LBL_UW_TITLE_START' => 'Maligayang pagdating',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'I-check ang Sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Mag-upload ng pakete',
    'LBL_UW_TITLE' => 'Ang wizard ay i-upgrade',
    'LBL_UW_UNINSTALL' => 'Iuninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Tanggapin ang Lisensya',
    'LBL_UW_CONVERT_THE_LICENSE' => 'I-convert ang Lisensya',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Simulan ang progreso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Nasa progreso ang pag-tsek ng Sistema',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Nasa progreso ang pag-tsek ng lisensya',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Nasa progreso and pag-tsek ng Preflight',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Nasa progreso and pagkopya ng File',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Nasa progreso and pag-Upgrade ng commit',
    'LBL_UW_COMMIT_DESC' => 'I-click ang Susunod upang magpatakbo ng mga karagdagang script ng pag-upgrade.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Nasa progreso and pag-Upgrade ng mga Script',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Nasa progreso ang pag-Upgrade ng buod',
    'LBL_UPGRADE_IN_PROGRESS' => 'nasa progreso     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Lumipas ang oras',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Nasa progreso ang pag-upgrade ng Kanselahin at Paglilinis',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Ang pag-upgrade ay maaaring tumagal ng ilang oras',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Nasa progreso ang pag-tsek ng upload',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Mag-upload ng Upgrade Package ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'I-upgrade ang Wizard bumaba ang gulang 451 na panukala',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'I-upgrade ang Manwal na I-drop Schema post',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Paraan ng Drop ng Old Schema',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Ipakita ang Lumang Schema na maaaring bumaba',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Nilaktawan ang Mga Query',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Kinakailangan ang Php na bersyon 5 o mas mataas.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ang iyong bersyon ng PHP ay hindi suportado ng SuiteCRM. Kakailanganin mong i-install ang isang bersyon na katugma sa application ng SuiteCRM. Mangyaring kumunsulta sa Compatibility Matrix sa Release Notes para sa mga sinusuportahang Bersyon ng PHP. Ang iyong bersyon ay ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Naka-on ang mode ng Php Backward Compatibility. Itakda ang zend.ze1_compatibility_mode sa Off para magpatuloy pa',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_CANCEL' => 'Kanselahin',
    'LBL_ML_COMMIT' => 'Gumawa',
    'LBL_ML_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_ML_INSTALLED' => 'Petsa ng pag-install',
    'LBL_ML_NAME' => 'Ang pangalan',
    'LBL_ML_PUBLISHED' => 'Petsa na inilathala',
    'LBL_ML_TYPE' => 'Uri',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Bersyon',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Ang iyong kasalukuyang bersyon ng php ay: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Ang inirerekumendang bersyon ng php ay ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' o mas-mataas.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'UpgradeWizard',
    'LBL_UPLOAD_SUCCESS' => 'Matagumpay na na-upload ang package na na-upload. I-click ang Susunod upang magsagawa ng pangwakas na tseke.',
    'LBL_UW_TITLE_LAYOUTS' => 'Kumpirmahin ang Mga Layout',
    'LBL_LAYOUT_MODULE_TITLE' => 'Mga Layout',
    'LBL_LAYOUT_MERGE_DESC' => 'Mayroong mga bagong field na magagamit na naidagdag bilang bahagi ng pag-upgrade na ito at maaaring awtomatikong idaragdag sa iyong umiiral na mga layout ng module. Upang matuto nang higit pa tungkol sa mga bagong field, mangyaring sumangguni sa Mga Tala ng Paglabas para sa bersyon na iyong ina-upgrade. <br> <br> Kung hindi mo nais na maidagdag ang mga bagong field, mangyaring i-uncheck ang module, at ang iyong custom na layout ay mananatiling hindi nagbabago. Available ang mga field sa Studio pagkatapos ng pag-upgrade. <br> <br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'I-click ang Susunod upang kumpirmahin ang mga pagbabago at upang tapusin ang pag-upgrade.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'I-click ang Susunod upang makumpleto ang pag-upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Kumpirmahin ang Mga Layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Kumpirmahin ang Mga Resulta ng Layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Matagumpay na pinagsama ang mga sumusunod na layout:',
    'LBL_SELECT_FILE' => 'Piliin ang File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang na-upload na file ay hindi magkatugma sa bersyon ng SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Ang na-upload na file ay hindi tugma sa bersyon na ito ng PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Ang na-upload na file ay hindi magkatugma sa bersyon ng SuiteCRM: ',
    'LBL_LANGPACKS' => 'Mga Pakete ng Wika' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Loader ng modyul' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'I-upgrade ang Patch' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Mga Tema' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'I-upgrade' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Nasaproseso' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Ang katugmang bersyon ay hindi naka-set sa manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Mag-a-update ang proseso ng pag-update ng ilang mga file ngunit umiiral din ang mga file na ito sa custom / folder. Mangyaring suriin ang mga pagbabago bago magpatuloy:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Lumagpas ang na-upload na file sa upload_max_filesize na direktiba sa php.ini.',
        2 => 'Lumagpas sa na-upload na file ang direktibong MAX_FILE_SIZE na tinukoy sa form na HTML.',
        3 => 'Ang na-upload na file ay bahagyang na-upload lamang.',
        4 => 'Walang nai-upload na file.',
        5 => 'Hindi kilalang error.',
        6 => 'Nawawala ang pansamantalang folder.',
        7 => 'Nabigong sumulat ng file sa disk.',
        8 => 'Ang pag-upload ng file ay tumigil sa extension.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Babala: ang pagtatapos ng password ay walang nakatakda ni isa!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Mangyaring magpabago ng iyong mga setting dito',
);
