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
    'LBL_OOTB_WORKFLOW' => 'Process Workflow Tasks',
    'LBL_OOTB_REPORTS' => 'Run Report Generation Scheduled Tasks',
    'LBL_OOTB_IE' => 'Check Inbound Mailboxes',
    'LBL_OOTB_BOUNCE' => 'Обработка на върнати електронни писма от кампании',
    'LBL_OOTB_CAMPAIGN' => 'Изпращане на електронни писма от кампании',
    'LBL_OOTB_PRUNE' => 'Prune на базата на 1-о число всеки месец',
    'LBL_OOTB_TRACKER' => 'Prune Tracker Tables',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Removal of documents from filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Интервал:',
    'LBL_LIST_LIST_ORDER' => 'Запланирани дейности:',
    'LBL_LIST_NAME' => 'График на дейностите:',
    'LBL_LIST_RANGE' => 'Времеви диапазон:',
    'LBL_LIST_STATUS' => 'Статус:',
    'LBL_LIST_TITLE' => 'Списък с автоматизирани задачи:',
// human readable:
    'LBL_SUN' => 'Неделя',
    'LBL_MON' => 'Понеделник',
    'LBL_TUE' => 'Вторник',
    'LBL_WED' => 'Сряда',
    'LBL_THU' => 'Четвъртък',
    'LBL_FRI' => 'Петък',
    'LBL_SAT' => 'Събота',
    'LBL_ALL' => 'Ежедневно',
    'LBL_EVERY' => 'Всеки',
    'LBL_FROM' => 'Подател',
    'LBL_ON_THE' => 'На всеки',
    'LBL_RANGE' => '-',
    'LBL_AND' => 'и',
    'LBL_MINUTES' => 'мин.',
    'LBL_HOUR' => 'час.',
    'LBL_HOUR_SING' => 'час',
    'LBL_OFTEN' => 'Възможной най-често.',
    'LBL_MIN_MARK' => 'minute mark',


// crontabs
    'LBL_MINS' => 'мин.',
    'LBL_HOURS' => 'час.',
    'LBL_DAY_OF_MONTH' => 'число от месеца',
    'LBL_MONTHS' => 'месец',
    'LBL_DAY_OF_WEEK' => 'ден',
    'LBL_CRONTAB_EXAMPLES' => 'The above uses standard crontab notation.',
// Labels
    'LBL_ALWAYS' => 'Винаги',
    'LBL_CATCH_UP' => 'Изпълни, ако е пропуснато',
    'LBL_CATCH_UP_WARNING' => 'Uncheck if this job may take more than a moment to run.',
    'LBL_DATE_TIME_END' => 'Крайна дата и час',
    'LBL_DATE_TIME_START' => 'Начална дата и час',
    'LBL_INTERVAL' => 'Интервал',
    'LBL_JOB' => 'Задача',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Последно успешно изпълнение',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Автоматизирани задачи',
    'LBL_NAME' => 'Име на задачата',
    'LBL_NEVER' => 'Никога',
    'LBL_NEW_FORM_TITLE' => 'Нова дейност',
    'LBL_PERENNIAL' => 'непрекъснато',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене на автоматизирани задачи',
    'LBL_SCHEDULER' => 'График на дейностите:',
    'LBL_STATUS' => 'Статус',
    'LBL_TIME_FROM' => 'Активна от',
    'LBL_TIME_TO' => 'Активна до',
    'LBL_WARN_CURL_TITLE' => 'cURL предупреждение:',
    'LBL_WARN_CURL' => 'Внимание:',
    'LBL_WARN_NO_CURL' => 'This system does not have the cURL libraries enabled/compiled into the PHP module (--with-curl=/path/to/curl_library). Please contact your administrator to resolve this issue. Without the cURL functionality, the Scheduler cannot thread its jobs.',
    'LBL_BASIC_OPTIONS' => 'Базови настройки',
    'LBL_ADV_OPTIONS' => 'Допълнителни настройки',
    'LBL_TOGGLE_ADV' => 'Покажи допълнителните настройки',
    'LBL_TOGGLE_BASIC' => 'Базови настройки',
// Links
    'LNK_LIST_SCHEDULER' => 'Автоматизирани задачи',
    'LNK_NEW_SCHEDULER' => 'Създаване на автоматизирана задача',
// Messages
    'ERR_CRON_SYNTAX' => 'Невалиден Cron синтаксис',
    'NTC_LIST_ORDER' => 'Установете реда, в който да се подреждат автоматизираните задачи в списъка',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'To Setup Windows Scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'To Setup Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'Изпълнена на',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Изпращане на електронни писма от кампании',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Обработка на върнати електронни писма от кампании',
    'LBL_PRUNEDATABASE' => 'Prune на базата на 1-о число всеки месец',
    'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Removal of documents from filesystem',

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
