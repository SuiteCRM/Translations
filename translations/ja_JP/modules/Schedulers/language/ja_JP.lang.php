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
    'LBL_OOTB_WORKFLOW' => 'ワークフロータスクを実行',
    'LBL_OOTB_REPORTS' => 'レポート生成タスクを実行',
    'LBL_OOTB_IE' => 'インバウンド電子メール受信箱を確認',
    'LBL_OOTB_BOUNCE' => 'バウンスしたキャンペーン電子メールの処理を夜間に実行',
    'LBL_OOTB_CAMPAIGN' => 'キャンペーン電子メール送信を夜間に実行',
    'LBL_OOTB_PRUNE' => '月初め（1日）にデータベースを最適化',
    'LBL_OOTB_TRACKER' => '月初め（1日）にユーザー履歴を最適化',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRMフィード テーブル',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'メール リマインダの通知に実行',
    'LBL_OOTB_CLEANUP_QUEUE' => 'ジョブ キューのクリア',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'ファイル システムからのドキュメントの削除',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google カレンダー同期',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => '間隔',
    'LBL_LIST_LIST_ORDER' => 'スケジューラー',
    'LBL_LIST_NAME' => 'スケジューラー',
    'LBL_LIST_RANGE' => '期間',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'スケジュール一覧',
// human readable:
    'LBL_SUN' => 'Sunday',
    'LBL_MON' => 'Monday',
    'LBL_TUE' => 'Tuesday',
    'LBL_WED' => 'Wednesday',
    'LBL_THU' => 'Thursday',
    'LBL_FRI' => 'Friday',
    'LBL_SAT' => 'Saturday',
    'LBL_ALL' => '毎日',
    'LBL_EVERY' => 'Every',
    'LBL_FROM' => 'From',
    'LBL_ON_THE' => '毎正',
    'LBL_RANGE' => 'to',
    'LBL_AND' => ' と ',
    'LBL_MINUTES' => '分',
    'LBL_HOUR' => '時',
    'LBL_HOUR_SING' => 'hour',
    'LBL_OFTEN' => 'できるだけ頻繁に実行',
    'LBL_MIN_MARK' => '分',


// crontabs
    'LBL_MINS' => '分',
    'LBL_HOURS' => '時',
    'LBL_DAY_OF_MONTH' => '日',
    'LBL_MONTHS' => '月',
    'LBL_DAY_OF_WEEK' => 'day',
    'LBL_CRONTAB_EXAMPLES' => '上記は標準のcrontab表記を用いています。',
// Labels
    'LBL_ALWAYS' => 'Always',
    'LBL_CATCH_UP' => '実行していなければ実行: ',
    'LBL_CATCH_UP_WARNING' => 'このジョブの実行に時間がかかる場合はチェックをはずしてください。',
    'LBL_DATE_TIME_END' => '終了日時：',
    'LBL_DATE_TIME_START' => '開始日時：',
    'LBL_INTERVAL' => '間隔：',
    'LBL_JOB' => 'ジョブ：',
    'LBL_JOB_URL' => 'ジョブURL',
    'LBL_LAST_RUN' => '前回の実行',
    'LBL_MODULE_NAME' => 'SuiteCRMスケジューラ',
    'LBL_MODULE_TITLE' => 'Schedulers',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Never',
    'LBL_NEW_FORM_TITLE' => 'スケジューラー作成',
    'LBL_PERENNIAL' => '無期限',
    'LBL_SEARCH_FORM_TITLE' => 'スケジューラー検索',
    'LBL_SCHEDULER' => 'Scheduler:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => '開始時間：',
    'LBL_TIME_TO' => '終了時間：',
    'LBL_WARN_CURL_TITLE' => 'cURL警告：',
    'LBL_WARN_CURL' => 'Warning:',
    'LBL_WARN_NO_CURL' => 'このシステムはcURLライブラリが有効になっていないか、PHPモジュールにコンパイルされていません(--with-curl=/path/to/curl_library)。この問題を解決するためにはシステム管理者に連絡してください。cURLライブラリがなければスケジューラーがジョブを実行できません。',
    'LBL_BASIC_OPTIONS' => '基本オプション',
    'LBL_ADV_OPTIONS' => '拡張オプション',
    'LBL_TOGGLE_ADV' => 'Show Advanced Options',
    'LBL_TOGGLE_BASIC' => '基本オプション',
// Links
    'LNK_LIST_SCHEDULER' => 'Schedulers',
    'LNK_NEW_SCHEDULER' => 'スケジューラー作成',
// Cron
    'ERR_CRON_SYNTAX' => '不正なcron文法',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'このスケジュールがスケジューラードロップダウンで表示される順番を指定してください。',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windowsのスケジューラーを設定するには ',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Crontab設定方法',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => 'インストールの終了後にのみこれを行う必要があります。',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'ジョブのログ',
    'LBL_EXECUTE_TIME' => '実行時間',

//jobstrings
    'LBL_REFRESHJOBS' => 'リフレッシュ ログ',
    'LBL_POLLMONITOREDINBOXES' => '受信メール アカウントの確認',
    'LBL_PERFORMFULLFTSINDEX' => '全文検索インデックス システム',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Run Nightly Mass Email Campaigns',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Run Nightly Process Bounced Campaign Emails',
    'LBL_PRUNEDATABASE' => 'Prune Database on 1st of Month',
    'LBL_TRIMTRACKER' => 'トラッカー テーブルを整理する',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRMフィード テーブル',
    'LBL_SENDEMAILREMINDERS' => 'メール リマインダ 送信の実行',
    'LBL_CLEANJOBQUEUE' => 'ジョブ キューのクリア',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'ファイル システムからのドキュメントの削除',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOPポーリング監視受信トレイ',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'スケジュールされたレポートの実行',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOWワークフローの処理',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticssearchインデクサ',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'スケジューラ時間',
    'LBL_SYNCGOOGLECALENDAR' => 'Googleカレンダーと同期',
);

global $sugar_config;
