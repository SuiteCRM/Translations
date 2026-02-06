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
    'LBL_OOTB_WORKFLOW' => '执行工作流任务计划',
    'LBL_OOTB_REPORTS' => '运行报表生成任务计划',
    'LBL_OOTB_IE' => '检查收件箱',
    'LBL_OOTB_BOUNCE' => '每晚处理营销活动退信邮件',
    'LBL_OOTB_CAMPAIGN' => '每晚批量发送营销活动邮件',
    'LBL_OOTB_PRUNE' => '每月 1 号精简数据库',
    'LBL_OOTB_TRACKER' => '精简 Tracker 表',
    'LBL_OOTB_SUITEFEEDS' => '精简 SuiteCRM Feed 数据表',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => '发送邮件通知提醒',
    'LBL_OOTB_CLEANUP_QUEUE' => '清理任务队列',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => '将文件从文件系统中删除',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => '谷歌日历同步',
    'LBL_OOTB_ELASTIC_INDEX' => '执行Elasticsearch 索引',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => '间隔',
    'LBL_LIST_LIST_ORDER' => '任务计划',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_RANGE' => '范围',
    'LBL_LIST_STATUS' => '状态',
    'LBL_LIST_TITLE' => '任务计划',
// human readable:
    'LBL_SUN' => '星期日',
    'LBL_MON' => '星期一',
    'LBL_TUE' => '星期二',
    'LBL_WED' => '星期三',
    'LBL_THU' => '星期四',
    'LBL_FRI' => '星期五',
    'LBL_SAT' => '星期六',
    'LBL_ALL' => '全选',
    'LBL_EVERY' => '间隔',
    'LBL_FROM' => '发件人地址',
    'LBL_ON_THE' => '于',
    'LBL_RANGE' => '到',
    'LBL_AND' => '和',
    'LBL_MINUTES' => '分钟',
    'LBL_HOUR' => '小时',
    'LBL_HOUR_SING' => ' 小时',
    'LBL_OFTEN' => '每分钟',
    'LBL_MIN_MARK' => '分',


// crontabs
    'LBL_MINS' => '分',
    'LBL_HOURS' => '时',
    'LBL_DAY_OF_MONTH' => '日',
    'LBL_MONTHS' => '月',
    'LBL_DAY_OF_WEEK' => '星期',
    'LBL_CRONTAB_EXAMPLES' => '上述使用标准的 crontab 格式',
// Labels
    'LBL_ALWAYS' => '始终',
    'LBL_CATCH_UP' => '错过时执行',
    'LBL_CATCH_UP_WARNING' => '如果此任务需要一段时间才能执行完成就取消勾选。',
    'LBL_DATE_TIME_END' => '结束日期/时间',
    'LBL_DATE_TIME_START' => '开始日期/时间',
    'LBL_INTERVAL' => '间隔',
    'LBL_JOB' => '任务',
    'LBL_JOB_URL' => '任务 URL',
    'LBL_LAST_RUN' => '最近运行时间',
    'LBL_MODULE_NAME' => '任务计划',
    'LBL_MODULE_TITLE' => '查看任务计划',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => '从不',
    'LBL_NEW_FORM_TITLE' => '新建',
    'LBL_PERENNIAL' => '永久',
    'LBL_SEARCH_FORM_TITLE' => '搜索',
    'LBL_SCHEDULER' => '名称',
    'LBL_STATUS' => '状态',
    'LBL_TIME_FROM' => '从',
    'LBL_TIME_TO' => '到',
    'LBL_WARN_CURL_TITLE' => 'cURL 警告',
    'LBL_WARN_CURL' => '警告',
    'LBL_WARN_NO_CURL' => '系统的 PHP 环境未启用 cURL 库或编译时未启用 cURL 库支持(--with-curl=/path/to/curl_library)。请联系管理员解决此问题。否则 SuiteCRM 任务计划功能将受限。',
    'LBL_BASIC_OPTIONS' => '基本选项',
    'LBL_ADV_OPTIONS' => '高级选项',
    'LBL_TOGGLE_ADV' => '显示高级选项',
    'LBL_TOGGLE_BASIC' => '显示基本选项',
// Links
    'LNK_LIST_SCHEDULER' => '查看任务计划',
    'LNK_NEW_SCHEDULER' => '创建任务计划',
// Cron
    'ERR_CRON_SYNTAX' => 'Cron 语法错误',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => '设置在下拉列表中的显示顺序',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windows 任务计划设置',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Linux Crontab 设置',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => '您应该在安装完成后来做这些。',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => '任务日志',
    'LBL_EXECUTE_TIME' => '执行时间',

//jobstrings
    'LBL_REFRESHJOBS' => '刷新任务',
    'LBL_POLLMONITOREDINBOXES' => '检查收件箱',
    'LBL_PERFORMFULLFTSINDEX' => '运行全文搜索索引',

    'LBL_RUNMASSEMAILCAMPAIGN' => '每晚批量发送营销活动邮件',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => '每晚处理营销活动退信邮件',
    'LBL_PRUNEDATABASE' => '每月 1 号精简数据库',
    'LBL_TRIMTRACKER' => '精简 Tracker 表',
    'LBL_TRIMSUGARFEEDS' => '精简 SuiteCRM Feed 数据表',
    'LBL_SENDEMAILREMINDERS' => '发送邮件通知提醒',
    'LBL_CLEANJOBQUEUE' => '清理任务队列',
    'LBL_REMOVEDOCUMENTSFROMFS' => '将文件从文件系统中删除',

    'LBL_POLLMONITOREDINBOXESAOP' => '检查收件箱',
    'LBL_AORRUNSCHEDULEDREPORTS' => '运行报表生成任务计划',
    'LBL_PROCESSAOW_WORKFLOW' => '执行工作流任务计划',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch 索引计划任务',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => '调度次数',
    'LBL_SYNCGOOGLECALENDAR' => '同步谷歌日历',
);

global $sugar_config;
