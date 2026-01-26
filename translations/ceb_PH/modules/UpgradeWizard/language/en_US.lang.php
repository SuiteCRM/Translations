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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Dili pwede ibanabana na Grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Dili pwede bananaon nga Tag iya',
    'ERR_UW_CONFIG_WRITE' => 'Mali ang oag upload sa config.php sa bag o na bersyon information.',
    'ERR_UW_CONFIG' => 'Palihug buhati og inyong config.php file writable og reload ang kining project ka.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Directory dili masulatable',
    'ERR_UW_FILE_NOT_COPIED' => 'Ang file dili kopya',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema tangtangon ang package ',
    'ERR_UW_FILE_NOT_READABLE' => 'Ang file dili na ma basa.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Ang file dili ma lihok o masulatan pd',
    'ERR_UW_FLAVOR_2' => 'Bag ong Lasa: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM Sistema Lasa: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './bag-ongWizard.log dili pwede ma buhat/sulat pd. Palihug kog ayoaha ang permission sa iyong SuiteCRM directory.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstrinf.func_subrs ang ge set sa value nga taas kaysa.1 Palihug kog alisdi saimong php.ini og i-restart ang web server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Palihug kog specify sa file og balikon nimo!',
    'ERR_UW_NO_FILES' => 'Ang mali ma occured, walay mga file nakita nga ge check.',
    'ERR_UW_NO_MANIFEST' => 'Ang zip file kay na wal-an og manifest.php file. Dili maka prosiso.',
    'ERR_UW_NO_VIEW' => 'Inbalid maka kita specified.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Dili balid ang pag upload.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Dili maka buhat ang temp directory. I-check ang file mga permiso.',
    'ERR_UW_ONLY_PATCHES' => 'Maka upload raka sa patches sa kini na pahina.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Mga mali nakita gikan sa Prefligjt check',
    'ERR_UW_UPLOAD_ERR' => 'Naay mali sa pag upload sa file, palihug eh balik gehapon!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM Sistema Bersyon: ',
    'ERR_UW_PHP_VERSION' => 'PHP Bersyon: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM Sistema Bersyon: ',
    'ERR_UW_WRONG_TYPE' => 'Kining pahina dlii mo dagan ',
    'LBL_BUTTON_BACK' => '< Balik',
    'LBL_BUTTON_CANCEL' => 'Kanselahon',
    'LBL_BUTTON_DELETE' => 'Dilita ang Package',
    'LBL_BUTTON_DONE' => 'Humana',
    'LBL_BUTTON_EXIT' => 'Paggawas',
    'LBL_BUTTON_NEXT' => 'Sunod >',
    'LBL_BUTTON_RECHECK' => 'Utroha og check',
    'LBL_BUTTON_RESTART' => 'I-restart',

    'LBL_UPLOAD_UPGRADE' => 'Ipasa Bag-ohon Package ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'File Reserba',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Reserba files gikan ge bag o na makit an dayun',
    'LBL_UW_BACKUP' => 'File RESERBA',
    'LBL_UW_CANCEL_DESC' => 'Ang bag o na kancel. Sa laing temperari file nga ge kopya og laing pag bag-o na mga files kanang naay ge bag o nadelete.',
    'LBL_UW_CHECK_ALL' => 'Susiha ang tanan',
    'LBL_UW_CHECKLIST' => 'Bag o na Steps',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Reserba sa Overwritten Files ay naa sa ge sunod na directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Ge manwal og kahiusa ang sumusunod mga file: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Bag ohon pag Prosiso: I-manwal pag sagol ang mga file',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Palihug kog gamit bisag unsa nga klase na method na kailangan i-pamilyar para masagol ang kining mga file. Hantod ma kompleto, imong SuiteCRM installation kay dili sugorado sa state og ang pag bag o dli kompleto.',
    'LBL_UW_COMPLETE' => 'Kompleto',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Tanan Sistem Settings Kinanghanglanon Satisfied',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Settings: Tawag Oras Pas Saimong Pamaagi',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Modyol',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Modyol',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBpisi modyol',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBpisi mbstring.func_bug-at na Sukdanan',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP settings: Memoryang utlanan',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: nag tan aw',
    'LBL_UW_COMPLIANCE_DB' => 'Sakto-sakto na Database Bersyon',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Aha dapita na php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Sakto-sakto na PHP Bersyon',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Ligtas Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Na hibaw-an na Settings',
    'LBL_UW_COMPLIANCE_XML' => 'XML nag Konecta',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Suporta',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Bersyon',
    'LBL_UW_COPIED_FILES_TITLE' => 'Mga file na mga Kopya na nilampus',

    'LBL_UW_DB_CHOICE1' => 'Bag ohon ang Wizard na nagdagan SQL',
    'LBL_UW_DB_CHOICE2' => 'Ge Manual SQL Queries',
    'LBL_UW_DB_ISSUES_PERMS' => 'Database pribihiyo',
    'LBL_UW_DB_METHOD' => 'Database mag bag o pamaagi',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] nag dungag Kulom[column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Tanan prilibiyo ay naa pa',
    'LBL_UW_DB_NO_INSERT' => 'Isulod sa [table]',
    'LBL_UW_DB_NO_SELECT' => 'PILIA [x] GIKAN [table]',
    'LBL_UW_DB_NO_UPDATE' => 'NAG BAG-O[table]',
    'LBL_UW_DB_PERMS' => 'Kinahanglang Prilibiyo',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Ang nagsunod na pag bag-o mga package nga ge ininstol:',
    'LBL_UW_END_LOGOUT_PRE' => 'Ang pag bag-o na kompleto.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Pindutin kung Tapos para maka gawas ang Bag-o na Wizard.',
    'LBL_UW_END_LOGOUT' => 'Og imong plano nga mo apply sa laing mo bag-o gamit ang Upgrade Wizard, log out og log balik sa prior na buhaton.',

    'LBL_UW_FILE_DELETED' => ' na tangtang na. <br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Tugtanan nga File',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Lahat na Files kay Writable</b>',
    'LBL_UW_FILE_OWNER' => 'Tag-iya',
    'LBL_UW_FILE_PERMS' => 'Getugot',
    'LBL_UW_FILE_UPLOADED' => ' na pasa na',
    'LBL_UW_FILE' => 'Pangan sa File',
    'LBL_UW_FILES_QUEUED' => 'Ang nag sunod na bag-ohon ang packages ay handa na sa pag instol:',
    'LBL_UW_FILES_REMOVED' => 'Ang nag susunod nga files kay ma tangtang gikan sa sistem:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Pinduton ang Sunod na i-upload nga mga package.</b>',
    'LBL_UW_FROZEN' => 'I-upload ang package usa eh padayun.',
    'LBL_UW_HIDE_DETAILS' => 'Itago ang Detalyi',
    'LBL_UW_IN_PROGRESS' => 'Ge prosiso',
    'LBL_UW_INCLUDING' => 'Apil ang',
    'LBL_UW_INCOMPLETE' => 'Dili kumpleto',
    'LBL_UW_MANUAL_MERGE' => 'File getingub',
    'LBL_UW_MODULE_READY' => 'Module kay andam na i-install. Pislita "Commit" og padayun sa pag i-install.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Walay nag rekord sa pag bag o na decto.',
    'LBL_UW_NONE' => 'Wala',
    'LBL_UW_OVERWRITE_DESC' => 'Tanan na ge utro nga mga file kay subra ang sulat, apil ang bisag unsang code customization og plaka nga ge utro nga gebuhat. Gusto baka na mo padayun?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Paghimo og sugoun na item para Manu na pag katapom?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Email saimomg kaugalingon para Manual pag tipon?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Ang mga file na sa lista sa ubos na bag o. Ang wala na checkan nga mga item ay apil og manual merge. <i>Sa tanang makit ang layout changes kay awtomatikong ma hindi ma checkan: checkmark lahi lahi dapat overwtitten written.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Walay manual sa. File. Merge Require.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Dili importante.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Awto-naka reserba ang mga File:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Tanan dipa-flight test ay pumasa.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Pisliton Sunod para ma kopya ang bag-ong mga file sa sistem.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Pahibalo:</b> Ang tanang nag bag-ong prosiso ay mandatory, og pinduton sunod para apil saimong kompletong prosiso. Og ikaw dili gusto mo prosiso, pinduton ang Kancel button.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Toggle Tanang mga File',

    'LBL_UW_REBUILD_TITLE' => 'Utrog buhat nga Resulta',
    'LBL_UW_SCHEMA_CHANGE' => 'Schema Kautrohan',

    'LBL_UW_SHOW_COMPLIANCE' => 'Ipakita ang Deteksyong mga Setting',
    'LBL_UW_SHOW_DB_PERMS' => 'Ipakita ang Nawalang Database nga Permiso',
    'LBL_UW_SHOW_DETAILS' => 'Ipakita ang mga Detalye',
    'LBL_UW_SHOW_DIFFS' => 'Ipakita ang mga File sa Requiring Mano-mano Tipokon',
    'LBL_UW_SHOW_NW_FILES' => 'Ipakita ang mga File na kanang dili Maayog mga Permiso',
    'LBL_UW_SHOW_SCHEMA' => 'Ipalita ang Schema na Kalahiang Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Ipakita ang dili Maayong mga Querie',
    'LBL_UW_SHOW' => 'Ipakita',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Wala nanulod nga mga File',
    'LBL_UW_SQL_RUN' => 'I-check kung SQL nag mano-mano og padagan',
    'LBL_UW_START_DESC' => 'Kining wizard kay nag atiman saimo sa pag bag-o kaning SuiteCRM instance.',
    'LBL_UW_START_DESC2' => 'Pahibalo: Kami nagpataas og rekomenda na kamo mag buhat og kopya sa SuiteCRM instance og gamit kaayu ni sa produkto, og test sa pag bag-ong package usa kini i-deploy ang bag-ong bersyon. Og gusto ka utrohun ang "composer.json" file, palihug kog padagan, usa pagka bag-o sa prosiso nga ma kompleto:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Pislita ang Sunod nga i-perform na sistema para sigurado na kini ang sistema kay andam para ibag-o. Ang pag check apil ang mga file permiso, database. pribihiyo og server settings.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Ang bag-ong Gebag-ong. Wizard kay karun i-resume ang pagbag-ong prosiso. Palihug kog padayun saimong ge pabag-o.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Maayong pag abot sa pag bag-o nga gebag-ong Wizard',

    'LBL_UW_TITLE_CANCEL' => 'Kanselahon',
    'LBL_UW_TITLE_COMMIT' => 'Komit Bag-ohon',
    'LBL_UW_TITLE_END' => 'Gebalik og sulti',
    'LBL_UW_TITLE_PREFLIGHT' => 'Utronglupad Check',
    'LBL_UW_TITLE_START' => 'Maayong pagabot',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sistem Check',
    'LBL_UW_TITLE_UPLOAD' => 'Ge Upload na Package',
    'LBL_UW_TITLE' => 'Gepanindut ang barang',
    'LBL_UW_UNINSTALL' => 'Ge tangtang',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Mo dawat og Lisensya',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Konvert Lisensya',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Sugdan ta ang prosiso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Sistem Check sa Prosiso',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Lisesensya Check sa prosiso',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Utronglupad Check sa Prosiso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'File Kopyahon sa Prosiso',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Komit Bag-ong Prosiso',
    'LBL_UW_COMMIT_DESC' => 'Pinduton ang sunod na pasagan og dugangan og bag-ong scripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Pagbag-ong Scripts sa Prosiso',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Pagbag-ong Sumari sa Prosiso',
    'LBL_UPGRADE_IN_PROGRESS' => 'sa prosiso     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Oras na ma elapsed',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Pagbag-ong Kanselon og Limpyohon na Prosiso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Pagbag-o na gusto og oras',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Pagbag-o mga Check na Prosiso',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Pagbag-ong Package ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Pagbag-ong Wizard Nahulog na karaan 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Mano-mano nga Hulog schema Post Bag-o',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Karaang Schema Natagak Method',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Ipakita ang Karaang Schema na kanang maka hulog',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Ni hawang mga Querie',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php bersyon lima. o babaw kay kailangan.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Imong bersyon sa PHP kay dili supportado sa SuiteCRM. Ikaw kay naninghanlan og i-install ang bersyon na pareha sa SuiteCRM application. Palihug kog pacheck up sa Compatibility Matrix sa Pagawas na Pahibalo para supportado PHP Bersyon. Imong bersion kay ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Baliktad Compatibility mode kay naka siga. I-set zend.ze1_compatibility_mode off para sa sunod na kalayoan',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_CANCEL' => 'Kanselahon',
    'LBL_ML_COMMIT' => 'Komit',
    'LBL_ML_DESCRIPTION' => 'Deskripsyon',
    'LBL_ML_INSTALLED' => 'Date ge install',
    'LBL_ML_NAME' => 'Pangalan',
    'LBL_ML_PUBLISHED' => 'Date ge Pasa',
    'LBL_ML_TYPE' => 'Isulat',
    'LBL_ML_UNINSTALLABLE' => 'Dili installable',
    'LBL_ML_VERSION' => 'Bersyon',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Imong Kasalukuyang php bersyon kay: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Ang ge recommendahang php bersyon kay ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' o pataas.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Pagbag-ongWizard',
    'LBL_UPLOAD_SUCCESS' => 'Pagbag-ong package napasang na uppload. Pislita ang sunod nga i-perform na final check.',
    'LBL_UW_TITLE_LAYOUTS' => 'Konfirm mga Layout',
    'LBL_LAYOUT_MODULE_TITLE' => 'Mga layout',
    'LBL_LAYOUT_MERGE_DESC' => 'Naay bag-ong mga field na naa karun og na dugangan na parti sa pag bag-o og pwede ma awtomatiko appended saimong tunghang module na mga layout. Para makantigo og maayu tungkol sa bag-ong mga field, palihug kog refer nga mo Release og mga Pahibalo para sa bersyon nga imong bag-ohonon.<br><br>Og gusto ka na dili ma tuman imong append sa bag-ong mga field, palihug ayaw checki ang module, og imong kustom nga mga layout nag pabiling dili mausab. Ang mga field kay pwede sila naa sa Studio inighuman ang pagbag-o.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Pislita ang Sunod nga eh kompirma nga mga utrohon og humanon ang pagbag-o.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Pislita Sunod para ma kumpleto ang pagbag-o.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Konfirm mga Layout',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Kompirma sa Layout nga mga Resulta',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Ang sumusunod nga mga layout na tiponong napasa:',
    'LBL_SELECT_FILE' => 'Pilia ang File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang pagupload sa file kay dili siya Kompatible sa bersyon og SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Ang ge uppload nga file na dili kompatible nga Bersyon og PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Ang pagupload sa file kay dili siya Kompatible sa bersyon og SuiteCRM: ',
    'LBL_LANGPACKS' => 'Linguaheng mga Sudlanan' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch nga mga ge Bag-o' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Mga Tema' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Bag-ohon' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Nag prosiso' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Kompatibol bersyon kay dili siya set sa manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Pagbag-o nga prosiso ge bag-o ang mga lahing mga file pero kining mga file kay naa na sa kustom/folder. Palihug kog tan-awa ang mga ge-utrong usa siya i-sunod:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Ang pagpasa sa file ni lapas ang pasa_subra_filesize pag utro og activate sa php.ini.',
        2 => 'Ang pag-pasa file ni subra ang MAX_FILE_SIZE pag-utro og activate kanang ge ispesipay na ang HTML porma.',
        3 => 'Ang pagbag-os file kay pwede ra parsyal ma upload.',
        4 => 'Walay file nga ma upload.',
        5 => 'Diliklaro nga mali.',
        6 => 'Nawal-an og temporarya nga folder.',
        7 => 'Na bagsak nga sulat na file paingon sa disk.',
        8 => 'File na ge upload ge hunong sa extension.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
