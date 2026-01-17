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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => '不能確定群組',
    'ERR_UW_CANNOT_DETERMINE_USER' => '不能確定所有者',
    'ERR_UW_CONFIG_WRITE' => '更新 config.php 與新版本資訊時出錯。',
    'ERR_UW_CONFIG' => '請確認config.php文件可寫，並寫刷新當前頁。',
    'ERR_UW_DIR_NOT_WRITABLE' => '目錄不可寫',
    'ERR_UW_FILE_NOT_COPIED' => '文件未複製',
    'ERR_UW_FILE_NOT_DELETED' => '移除檔案包時有問題 ',
    'ERR_UW_FILE_NOT_READABLE' => '文件不可讀。',
    'ERR_UW_FILE_NOT_WRITABLE' => '文件不可移動或者寫到',
    'ERR_UW_FLAVOR_2' => '升級版本:',
    'ERR_UW_FLAVOR' => 'SuiteCRM系統版本:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upradeWizard.log文件不可創建/寫入。請修復SuiteCRM目錄的權限。',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload設置了大於1的值。請在php.ini文件中更改這個變數的值，並且重新啟動網路伺服器。',
    'ERR_UW_NO_FILE_UPLOADED' => '請指定一個文件，並重試！',
    'ERR_UW_NO_FILES' => '發現了一個錯誤，沒有要檢查的文件。',
    'ERR_UW_NO_MANIFEST' => '壓縮文件缺少manifest.php文件。不能繼續。',
    'ERR_UW_NO_VIEW' => '指定的檢視無效。',
    'ERR_UW_NOT_VALID_UPLOAD' => '無效上傳。',
    'ERR_UW_NO_CREATE_TMP_DIR' => '不能創建臨時目錄。檢查檔案權限。',
    'ERR_UW_ONLY_PATCHES' => '您在這頁只能上傳補丁.',
    'ERR_UW_PREFLIGHT_ERRORS' => '在準備前檢查中發現錯誤',
    'ERR_UW_UPLOAD_ERR' => '更新文件時發生錯誤，請再試!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM系統版本: ',
    'ERR_UW_PHP_VERSION' => 'PHP 版本: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM系統版本: ',
    'ERR_UW_WRONG_TYPE' => '這個頁面不能運行',
    'LBL_BUTTON_BACK' => '< 上一步',
    'LBL_BUTTON_CANCEL' => '取消',
    'LBL_BUTTON_DELETE' => '刪除檔案包',
    'LBL_BUTTON_DONE' => '已完成',
    'LBL_BUTTON_EXIT' => '導入完成',
    'LBL_BUTTON_NEXT' => '下一步',
    'LBL_BUTTON_RECHECK' => '重新檢查',
    'LBL_BUTTON_RESTART' => '重新開始',

    'LBL_UPLOAD_UPGRADE' => '上傳升級包 ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => '文件備份',
    'LBL_UW_BACKUP_FILES_EXIST' => '備份這次升級文件到',
    'LBL_UW_BACKUP' => '文件備份',
    'LBL_UW_CANCEL_DESC' => '取消升級。所有臨時文件和上傳的zip文件已被刪除。',
    'LBL_UW_CHECK_ALL' => '全選',
    'LBL_UW_CHECKLIST' => '升級步驟',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => '覆蓋檔的備份位於以下目錄中: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => '手動合併以下檔案: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => '升級進程:手工合併文件',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => '請使用您最熟悉的 diff 方法來合併這些文件。在完成這些步驟之前，你的SuiteCRM將處於不確定狀態且升級也不完整。',
    'LBL_UW_COMPLETE' => '完成',
    'LBL_UW_COMPLIANCE_ALL_OK' => '所有系統設置都滿足需要',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP 設定: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL 模組',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP 模組',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings 模組',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload 參數',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP設置:安全模式',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP 設定: 串流',
    'LBL_UW_COMPLIANCE_DB' => '最低資料庫版本',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'php.ini位置',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => '最低PHP版本',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP設置:安全模式',
    'LBL_UW_COMPLIANCE_TITLE2' => '檢測到的設定',
    'LBL_UW_COMPLIANCE_XML' => 'XML解析',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip支援',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE版本',
    'LBL_UW_COPIED_FILES_TITLE' => '檔案已成功複製',

    'LBL_UW_DB_CHOICE1' => '用升級精靈運行SQL',
    'LBL_UW_DB_CHOICE2' => '手動運行SQL語句',
    'LBL_UW_DB_ISSUES_PERMS' => '資料庫許可權',
    'LBL_UW_DB_METHOD' => '資料庫更新方法',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => '創建表 [table]',
    'LBL_UW_DB_NO_DELETE' => '刪除窗口 [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => '所有許可權有效',
    'LBL_UW_DB_NO_INSERT' => '插入表 [table]',
    'LBL_UW_DB_NO_SELECT' => '選擇 [x] 從 [table]',
    'LBL_UW_DB_NO_UPDATE' => '更新 [table]',
    'LBL_UW_DB_PERMS' => '必要許可權',

    'LBL_UW_DESC_MODULES_INSTALLED' => '已安裝的更新補丁:',
    'LBL_UW_END_LOGOUT_PRE' => '升級已完成。',
    'LBL_UW_END_LOGOUT_PRE2' => '點完成以離開升級精靈。',
    'LBL_UW_END_LOGOUT' => '如果您計畫使用升級精靈來進行其他升級，在進行之前，請先登出並重新登入。',

    'LBL_UW_FILE_DELETED' => ' 已經被刪除.<br>',
    'LBL_UW_FILE_GROUP' => '群組',
    'LBL_UW_FILE_ISSUES_PERMS' => '文件許可權',
    'LBL_UW_FILE_NO_ERRORS' => '<b>所有文件可寫</b>',
    'LBL_UW_FILE_OWNER' => '負責人',
    'LBL_UW_FILE_PERMS' => '許可權',
    'LBL_UW_FILE_UPLOADED' => '已被上傳',
    'LBL_UW_FILE' => '文件名',
    'LBL_UW_FILES_QUEUED' => '下列更新已安裝:',
    'LBL_UW_FILES_REMOVED' => '以下檔案將從系統中刪除: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>按一下"下一步"來上傳升級包。</b>',
    'LBL_UW_FROZEN' => '在繼續之前，必須完成必要步驟。',
    'LBL_UW_HIDE_DETAILS' => '隱藏細節',
    'LBL_UW_IN_PROGRESS' => '處理中',
    'LBL_UW_INCLUDING' => '包括',
    'LBL_UW_INCOMPLETE' => '未完成',
    'LBL_UW_MANUAL_MERGE' => '文件合併',
    'LBL_UW_MODULE_READY' => '模組己準備。請按Commit繼續進行安裝。',
    'LBL_UW_NO_INSTALLED_UPGRADES' => '沒有檢測到升級記錄。',
    'LBL_UW_NONE' => '無',
    'LBL_UW_OVERWRITE_DESC' => '所有改變的文件將被重寫, 包括任何客戶化編碼和您對範本做的改變. 您確定您要開始嗎?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => '為手工合併新增任務記錄?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => '為手工合併發送電子郵件提醒?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => '下列文件已被修改。沒有選中的文件需要手工合併。<i>任何檢測到的佈局更改都會自動取消選中；選中任何會被覆蓋的文件。',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => '不需要手工合併文件。',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => '不需要。',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => '自動保護文件:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => '通過所有準備前測試。點擊“下一步”來提交這些更改。',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => '按一下"下一步"將升級包複製到系統。',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>注意︰</b>其餘的升級過程是強制性的，按一下"下一步"將會要求您完成此過程。如果你不想要繼續，請按一下"取消"按鈕。',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => '綁定所有文件',

    'LBL_UW_REBUILD_TITLE' => '重建結果',
    'LBL_UW_SCHEMA_CHANGE' => '結構更改',

    'LBL_UW_SHOW_COMPLIANCE' => '顯示檢測到的設置',
    'LBL_UW_SHOW_DB_PERMS' => '現實缺少的資料庫許可權',
    'LBL_UW_SHOW_DETAILS' => '顯示細節',
    'LBL_UW_SHOW_DIFFS' => '顯示需要手工合併的文件',
    'LBL_UW_SHOW_NW_FILES' => '顯示錯誤許可權的文件',
    'LBL_UW_SHOW_SCHEMA' => '顯示結構更改腳本',
    'LBL_UW_SHOW_SQL_ERRORS' => '顯示錯誤的查詢',
    'LBL_UW_SHOW' => '顯示',

    'LBL_UW_SKIPPED_FILES_TITLE' => '忽略的文件',
    'LBL_UW_SQL_RUN' => '當手工運行SQL時檢查',
    'LBL_UW_START_DESC' => '此精靈將協助您升級此 SuiteCRM 實例。',
    'LBL_UW_START_DESC2' => '備註: 我們強烈建議你備份 SuiteCRM 正式區的應用程式,並且在部署新的版本之前先測試要升級的套件. 如果你改變過 "composer.json" 檔案, 請在升級完成之前, 重新再命令列輸入 <br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => '按一下"下一步"執行檢查，以確定系統準備好進行升級。此檢查包括檔案存取權限、 資料庫存取權限和伺服器設定。',
    'LBL_UW_START_UPGRADED_UW_DESC' => '新升級精靈現在將繼續升級過程。請繼續你的升級。',
    'LBL_UW_START_UPGRADED_UW_TITLE' => '歡迎來到新升級精靈',

    'LBL_UW_TITLE_CANCEL' => '取消',
    'LBL_UW_TITLE_COMMIT' => '提交升級',
    'LBL_UW_TITLE_END' => '彙報',
    'LBL_UW_TITLE_PREFLIGHT' => '準備前檢查',
    'LBL_UW_TITLE_START' => '開始',
    'LBL_UW_TITLE_SYSTEM_CHECK' => '系統檢查',
    'LBL_UW_TITLE_UPLOAD' => '上傳升級包',
    'LBL_UW_TITLE' => '升級精靈',
    'LBL_UW_UNINSTALL' => '刪除',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => '接收許可',
    'LBL_UW_CONVERT_THE_LICENSE' => '轉換許可',

    'LBL_START_UPGRADE_IN_PROGRESS' => '開始進行中',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => '系統檢查進行中',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => '許可檢查進行中',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => '安裝前檢查進行中',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => '正在複製檔案',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => '升級進行中',
    'LBL_UW_COMMIT_DESC' => '按一下"下一步"執行額外的升級腳本。',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => '正在升級腳本',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => '升級匯總進行中',
    'LBL_UPGRADE_IN_PROGRESS' => '正在進行     ',
    'LBL_UPGRADE_TIME_ELAPSED' => '過去的時間',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => '升級取消和清除進行中',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => '升級可能花費一些時間',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => '上傳檢查進行中',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => '上載升級文件包... ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => '升級精靈刪除了4.5.1不推薦的表結構。',
    'LBL_UW_DROP_SCHEMA_MANUAL' => '更新後手動刪除架構',
    'LBL_UW_DROP_SCHEMA_METHOD' => '舊模式刪除方法',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => '顯示舊模式以便可以刪除',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => '跳過查詢語句',
    'LBL_INCOMPATIBLE_PHP_VERSION' => '需要Php5或以上版本.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => '你安裝的PHP版本不被SuiteCRM支援。請在Release Notes中參考相容性表格，並安裝有效的PHP版本。你的版本是',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php向後兼容模式已打開. 如果想關閉請將zend.ze1_compatibility_mode設置成off.',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => '動作',
    'LBL_ML_CANCEL' => '取消',
    'LBL_ML_COMMIT' => '執行',
    'LBL_ML_DESCRIPTION' => '描述',
    'LBL_ML_INSTALLED' => '安裝日期',
    'LBL_ML_NAME' => '名稱',
    'LBL_ML_PUBLISHED' => '發佈日期',
    'LBL_ML_TYPE' => '類型',
    'LBL_ML_UNINSTALLABLE' => '可刪除',
    'LBL_ML_VERSION' => '版本',
    'LBL_ML_INSTALL' => '安裝',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => '您目前的PHP版本是 : ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => '推薦的 php 版本為 ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' 或以上',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => '升級精靈',
    'LBL_UPLOAD_SUCCESS' => '升級包已成功上傳。按一下"下一步"進行最後的檢查。',
    'LBL_UW_TITLE_LAYOUTS' => '確認佈局',
    'LBL_LAYOUT_MODULE_TITLE' => '版面佈局',
    'LBL_LAYOUT_MERGE_DESC' => '有新的可用欄位已添加為此升級的一部分，並且可以將自動追加到您現有的模組佈局。 若要瞭解更多關於新添加的欄位，請參閱版本資訊以瞭解你升級到的版本。<br><br>如果你不想追加新的欄位，請取消選擇模組，你的自訂佈局將保持不變。欄位在升級後將可在工作室裡找到。<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => '按一下"下一步"以確認更改並完成升級。',
    'LBL_LAYOUT_MERGE_TITLE2' => '按一下"下一步"以完成升級。',
    'LBL_UW_CONFIRM_LAYOUTS' => '確認佈局',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => '確認佈局結果',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => '以下佈局已被成功合併:',
    'LBL_SELECT_FILE' => '選擇檔案:',
    'ERROR_VERSION_INCOMPATIBLE' => '上傳的檔案和當前版本的SuiteCRM不相容: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => '上傳的檔案和當前版本的PHP不相容: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => '上傳的檔案和當前版本的SuiteCRM不相容: ',
    'LBL_LANGPACKS' => '語言包' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => '模組載入器' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => '升級補丁' /*for 508 compliance fix*/,
    'LBL_THEMES' => '主題設置' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => '工作流程' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => '更新' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => '處理中' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => '未在 manifest 檔案中設定相容版本',
    'LBL_UPGRD_CSTM_CHK' => '升級過程中會更新一些檔案，但這些檔案也存在於custom資料夾中。請在繼續之前查看將要進行更改：',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => '上傳文件大小超出了php.ini文件中變數upload_max_filesize指定的值。',
        2 => '上傳文件大小超出了HTML表單中變數MAX_FILE_SIZE指定的值。',
        3 => '只上傳了部分文件。',
        4 => '沒有上傳文件。',
        5 => '未知錯誤。',
        6 => '缺少臨時文件夾。',
        7 => '寫入磁碟文件錯誤。',
        8 => '由於擴展，文件未能上傳。',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => '警告: 密碼過期期限為無限期!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => '請在這裡更新你的設定',
);
