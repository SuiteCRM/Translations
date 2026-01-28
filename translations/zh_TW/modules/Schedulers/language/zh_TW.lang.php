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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => '使工作流程任務進行',
    'LBL_OOTB_REPORTS' => '為計劃任務產生報表',
    'LBL_OOTB_IE' => '檢查收件箱',
    'LBL_OOTB_BOUNCE' => '收取退訂郵件',
    'LBL_OOTB_CAMPAIGN' => '批量發送市場活動郵件',
    'LBL_OOTB_PRUNE' => '清理資料庫',
    'LBL_OOTB_TRACKER' => '修剪追蹤表',
    'LBL_OOTB_SUITEFEEDS' => '修剪 SuiteCRM 訂閱源表',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '運行電子郵件提醒通知.',
    'LBL_OOTB_CLEANUP_QUEUE' => '清除計劃任務隊列',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => '從檔案系統移除文件',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google 日曆同步',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => '間隔:',
    'LBL_LIST_LIST_ORDER' => '排程程序:',
    'LBL_LIST_NAME' => '排程程序:',
    'LBL_LIST_RANGE' => '範圍:',
    'LBL_LIST_STATUS' => '狀態:',
    'LBL_LIST_TITLE' => '計劃任務列表:',
// human readable:
    'LBL_SUN' => '星期日',
    'LBL_MON' => '星期一',
    'LBL_TUE' => '星期二',
    'LBL_WED' => '星期三',
    'LBL_THU' => '星期四',
    'LBL_FRI' => '星期五',
    'LBL_SAT' => '星期六',
    'LBL_ALL' => '每天',
    'LBL_EVERY' => '每',
    'LBL_FROM' => '發件人',
    'LBL_ON_THE' => '於',
    'LBL_RANGE' => '到',
    'LBL_AND' => '和',
    'LBL_MINUTES' => '分鐘',
    'LBL_HOUR' => '小時',
    'LBL_HOUR_SING' => '小時',
    'LBL_OFTEN' => '頻繁。',
    'LBL_MIN_MARK' => '分鐘標示',


// crontabs
    'LBL_MINS' => '分鐘',
    'LBL_HOURS' => '小時',
    'LBL_DAY_OF_MONTH' => '日期',
    'LBL_MONTHS' => '月',
    'LBL_DAY_OF_WEEK' => '天',
    'LBL_CRONTAB_EXAMPLES' => '使用上述標準crontab符號。',
// Labels
    'LBL_ALWAYS' => '始終',
    'LBL_CATCH_UP' => '錯過時執行',
    'LBL_CATCH_UP_WARNING' => '如果這個任務執行需要一些時間就取消選擇。',
    'LBL_DATE_TIME_END' => '結束日期和時間',
    'LBL_DATE_TIME_START' => '開始日期和時間',
    'LBL_INTERVAL' => '間隔',
    'LBL_JOB' => '任務',
    'LBL_JOB_URL' => '計劃任務URL',
    'LBL_LAST_RUN' => '最後執行時間',
    'LBL_MODULE_NAME' => 'SuiteCRM 排程器',
    'LBL_MODULE_TITLE' => '排程程序',
    'LBL_NAME' => '名稱',
    'LBL_NEVER' => '從不',
    'LBL_NEW_FORM_TITLE' => '新增計劃任務',
    'LBL_PERENNIAL' => '永久',
    'LBL_SEARCH_FORM_TITLE' => '排程器搜尋',
    'LBL_SCHEDULER' => '排程程序:',
    'LBL_STATUS' => '狀態',
    'LBL_TIME_FROM' => '啟用從',
    'LBL_TIME_TO' => '啟用到',
    'LBL_WARN_CURL_TITLE' => 'CURL警告:',
    'LBL_WARN_CURL' => '警告:',
    'LBL_WARN_NO_CURL' => '此系統並未在PHP模組中啟用/編譯 cURL 庫 (--with-curl=/path/to/curl_library)。請聯絡你的系統管理員以改善此問題。缺少 cURL 功能，排程程序將無法作業。',
    'LBL_BASIC_OPTIONS' => '基本設置',
    'LBL_ADV_OPTIONS' => '進階選項',
    'LBL_TOGGLE_ADV' => '顯示進階選項',
    'LBL_TOGGLE_BASIC' => '基本選項',
// Links
    'LNK_LIST_SCHEDULER' => '排程程序',
    'LNK_NEW_SCHEDULER' => '新增計劃任務',
// Messages
    'ERR_CRON_SYNTAX' => '非法Cron語法',
    'NTC_LIST_ORDER' => '設置計劃任務的下拉框選項',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => '設置windows的任務計劃',
    'LBL_CRON_INSTRUCTIONS_LINUX' => '設置Crontab',
    'LBL_CRON_LINUX_DESC1' => '為了執行 SuiteCRM 排程程序, 請編輯你的web伺服器使用者 crontab 檔案加入此命令: ',
    'LBL_CRON_LINUX_DESC2' => '.. 並且將下列內容加入 crontab 檔案: ',
    'LBL_CRON_LINUX_DESC3' => '你只需要在安裝結束後做此動作。',
    'LBL_CRON_WINDOWS_DESC' => '注意：為了執行 SuiteCRM 排程程序，建立一個batch檔案以在Windows Scheduled Tasks中執行。此batch檔案需要包含下列指令: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => '任務日誌',
    'LBL_EXECUTE_TIME' => '執行時間',

//jobstrings
    'LBL_REFRESHJOBS' => '刷新作業',
    'LBL_POLLMONITOREDINBOXES' => '檢查入站電子郵件帳戶',
    'LBL_PERFORMFULLFTSINDEX' => '全文檢索索引系統',

    'LBL_RUNMASSEMAILCAMPAIGN' => '批量發送市場活動郵件',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => '收取退訂郵件',
    'LBL_PRUNEDATABASE' => '清理資料庫',
    'LBL_TRIMTRACKER' => '修剪追蹤表',
    'LBL_TRIMSUGARFEEDS' => '修剪 SuiteCRM 訂閱源表',
    'LBL_SENDEMAILREMINDERS' => '發送電子郵件提醒',
    'LBL_CLEANJOBQUEUE' => '清空工作佇列',
    'LBL_REMOVEDOCUMENTSFROMFS' => '從檔案系統移除文件',

    'LBL_AODOPTIMISEINDEX' => '最佳化 AOD(Advanced OpenDiscovery) 索引',
    'LBL_AODINDEXUNINDEXED' => '對未索引的文件建立索引',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP 檢查收件箱',
    'LBL_AORRUNSCHEDULEDREPORTS' => '執行任務生成報表',
    'LBL_PROCESSAOW_WORKFLOW' => '處理 AOW 工作流計畫',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch 索引器',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => '排程程序次數',
    'LBL_SYNCGOOGLECALENDAR' => '同步 Google 日曆',
);

global $sugar_config;
