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
    'LBL_OOTB_WORKFLOW' => 'عمل کاری کا کام تیزی سے ہو رہا ہے',
    'LBL_OOTB_REPORTS' => 'شکایات کو چلائیں جرنیشن شیڈول کا میں',
    'LBL_OOTB_IE' => 'میلان باؤنڈ کو دیکھیں',
    'LBL_OOTB_BOUNCE' => 'رات کو بونڈ کمپین میل عامل چلائیں',
    'LBL_OOTB_CAMPAIGN' => 'رات کو ماس ای میل کمپیگنس',
    'LBL_OOTB_PRUNE' => 'مہینے کی پہلی تری پر ڈیٹابیس پرون',
    'LBL_OOTB_TRACKER' => 'پرون کو تلاش کرنے والا ٹیبل',
    'LBL_OOTB_SUITEFEEDS' => 'پرانے سوتیکرم جدول ٹیبل',
    'LBL_OOTB_LUCENE_INDEX' => 'لکنے انڈکس کو پورا کرنا',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'ای میل کو چلائیں نوٹیفیکیشن کی یاداشت کے طور پر',
    'LBL_OOTB_CLEANUP_QUEUE' => 'نوکری کی قطار کو صاف کریں',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'فائل سسٹم سے دستاویز کو مٹائیں',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'وقفہ:',
    'LBL_LIST_LIST_ORDER' => 'شیڈول:',
    'LBL_LIST_NAME' => 'شیڈول:',
    'LBL_LIST_RANGE' => 'Range:',
    'LBL_LIST_STATUS' => 'حیثیت:',
    'LBL_LIST_TITLE' => 'Schedule List:',
// human readable:
    'LBL_SUN' => 'اتوار',
    'LBL_MON' => 'پیر',
    'LBL_TUE' => 'منگل',
    'LBL_WED' => 'بدھ',
    'LBL_THU' => 'جمعرات',
    'LBL_FRI' => 'جمعہ',
    'LBL_SAT' => 'ہفتہ',
    'LBL_ALL' => 'Every Day',
    'LBL_EVERY' => 'ہر کوئی',
    'LBL_FROM' => 'سے',
    'LBL_ON_THE' => 'On the',
    'LBL_RANGE' => 'کرنے کے لئے',
    'LBL_AND' => 'and',
    'LBL_MINUTES' => 'منٹ',
    'LBL_HOUR' => 'گھنٹے',
    'LBL_HOUR_SING' => 'گھنٹہ',
    'LBL_OFTEN' => 'As often as possible.',
    'LBL_MIN_MARK' => 'minute mark',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'hrs',
    'LBL_DAY_OF_MONTH' => 'date',
    'LBL_MONTHS' => 'mo',
    'LBL_DAY_OF_WEEK' => 'یوم',
    'LBL_CRONTAB_EXAMPLES' => 'جو اوپر سارے کھڑا ہے وہ کروں تب استعمال کرتا ہے.',
// Labels
    'LBL_ALWAYS' => 'ہمیشہ',
    'LBL_CATCH_UP' => 'اگر یاد ہو تو',
    'LBL_CATCH_UP_WARNING' => 'جانچ پڑتال نہ کریں اگر نوکری اور زیادہ حرکت چلاتی ہے.',
    'LBL_DATE_TIME_END' => 'تاریخ اور وقت ختم',
    'LBL_DATE_TIME_START' => 'تاریخ اور وقت شروع',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Job',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'آخری کامیابی کی دوڑ',
    'LBL_MODULE_NAME' => 'سوتیکرم سچدلر',
    'LBL_MODULE_TITLE' => 'زمان بند',
    'LBL_NAME' => 'نوکری کا نام',
    'LBL_NEVER' => 'کبھی نہیں',
    'LBL_NEW_FORM_TITLE' => 'New Schedule',
    'LBL_PERENNIAL' => 'perpetual',
    'LBL_SEARCH_FORM_TITLE' => 'Scheduler Search',
    'LBL_SCHEDULER' => 'شیڈول:',
    'LBL_STATUS' => 'حیثیت',
    'LBL_TIME_FROM' => 'Active From',
    'LBL_TIME_TO' => 'Active To',
    'LBL_WARN_CURL_TITLE' => 'cURL Warning:',
    'LBL_WARN_CURL' => 'خبردار کرنا:',
    'LBL_WARN_NO_CURL' => 'This system does not have the cURL libraries enabled/compiled into the PHP module (--with-curl=/path/to/curl_library). Please contact your administrator to resolve this issue. Without the cURL functionality, the Scheduler cannot thread its jobs.',
    'LBL_BASIC_OPTIONS' => 'Basic Setup',
    'LBL_ADV_OPTIONS' => 'Advanced Options',
    'LBL_TOGGLE_ADV' => 'اعلی درجے کی اختیارات دکھائیں',
    'LBL_TOGGLE_BASIC' => 'Show Basic Options',
// Links
    'LNK_LIST_SCHEDULER' => 'زمان بند',
    'LNK_NEW_SCHEDULER' => 'Create Scheduler',
// Messages
    'ERR_CRON_SYNTAX' => 'Invalid Cron syntax',
    'NTC_LIST_ORDER' => 'Set the order this schedule will appear in the Scheduler dropdown lists',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'To Setup Windows Scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'To Setup Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'وقت ختم کرنا',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'رات کو ماس ای میل کمپیگنس',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'رات کو بونڈ کمپین میل عامل چلائیں',
    'LBL_PRUNEDATABASE' => 'مہینے کی پہلی تری پر ڈیٹابیس پرون',
    'LBL_TRIMTRACKER' => 'پرون کو تلاش کرنے والا ٹیبل',
    'LBL_TRIMSUGARFEEDS' => 'پرانے سوتیکرم جدول ٹیبل',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'فائل سسٹم سے دستاویز کو مٹائیں',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
