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
    'LBL_OOTB_WORKFLOW' => 'Обробити завдання Робочого процесу',
    'LBL_OOTB_REPORTS' => 'Виконувати заплановані завдання створення звітів',
    'LBL_OOTB_IE' => 'Перевіряти вхідні листи',
    'LBL_OOTB_BOUNCE' => 'Запускати вночі перевірку поштових скриньок для листів, що повертаються',
    'LBL_OOTB_CAMPAIGN' => 'Запускати вночі масову розсилку листів',
    'LBL_OOTB_PRUNE' => 'Стискати базу даних першого числа кожного місяця',
    'LBL_OOTB_TRACKER' => 'Очищати історію останніх переглядів першого числа кожного місяця',
    'LBL_OOTB_SUITEFEEDS' => 'Очищення таблиць потоку новин SuiteCRM',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Надіслати поштою повідомлення про нагадування',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Очистити чергу завдань',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Видалення документів з файлової системи',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Інтервал:',
    'LBL_LIST_LIST_ORDER' => 'Планувальник завдань:',
    'LBL_LIST_NAME' => 'Планувальник завдань:',
    'LBL_LIST_RANGE' => 'Порядок:',
    'LBL_LIST_STATUS' => 'Статус:',
    'LBL_LIST_TITLE' => 'Список завдань',
// human readable:
    'LBL_SUN' => 'Неділя',
    'LBL_MON' => 'Понеділок',
    'LBL_TUE' => 'Вівторок',
    'LBL_WED' => 'Середа',
    'LBL_THU' => 'Четвер',
    'LBL_FRI' => 'П&#039;ятниця',
    'LBL_SAT' => 'Субота',
    'LBL_ALL' => 'Кожен день',
    'LBL_EVERY' => 'Кожен',
    'LBL_FROM' => 'Від',
    'LBL_ON_THE' => 'Раз на',
    'LBL_RANGE' => 'у',
    'LBL_AND' => 'і',
    'LBL_MINUTES' => 'хвилин',
    'LBL_HOUR' => 'годин',
    'LBL_HOUR_SING' => 'год.',
    'LBL_OFTEN' => 'Так часто, як можливо.',
    'LBL_MIN_MARK' => 'на початку хвилини',


// crontabs
    'LBL_MINS' => 'хв',
    'LBL_HOURS' => 'год',
    'LBL_DAY_OF_MONTH' => 'дата',
    'LBL_MONTHS' => 'міс',
    'LBL_DAY_OF_WEEK' => 'день',
    'LBL_CRONTAB_EXAMPLES' => 'Значення представлені в стандартній crontab-нотації',
// Labels
    'LBL_ALWAYS' => 'Завжди',
    'LBL_CATCH_UP' => 'Виконати, якщо пропущена',
    'LBL_CATCH_UP_WARNING' => 'Зняти мітку, якщо роботу можна виконати не тільки один раз.',
    'LBL_DATE_TIME_END' => 'Дата і час закінчення',
    'LBL_DATE_TIME_START' => 'Дата і час початку',
    'LBL_INTERVAL' => 'Інтервал',
    'LBL_JOB' => 'Дія:',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Остання вдало запущена',
    'LBL_MODULE_NAME' => 'Планувальник SuiteCRM',
    'LBL_MODULE_TITLE' => 'Planners',
    'LBL_NAME' => 'Завдання',
    'LBL_NEVER' => 'Ніколи',
    'LBL_NEW_FORM_TITLE' => 'Нове завдання',
    'LBL_PERENNIAL' => 'Безстроково',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук завдання',
    'LBL_SCHEDULER' => 'Планувальник завдань:',
    'LBL_STATUS' => 'Статус',
    'LBL_TIME_FROM' => 'Виконувати дію з',
    'LBL_TIME_TO' => 'Виконувати дію до',
    'LBL_WARN_CURL_TITLE' => 'cURL попередження:',
    'LBL_WARN_CURL' => 'Попередження:',
    'LBL_WARN_NO_CURL' => 'Ця система не має cURL-бібліотеку, доступну/відкомпільовану в PHP-модулі (--with-curl=/path/to/curl_library). Будь ласка, зв&#039;яжіться з Вашим адміністратором, щоб вирішити це питання. Без cURL-функціональності планувальник завдань не може виконати необхідні дії.',
    'LBL_BASIC_OPTIONS' => 'Основні параметри',
    'LBL_ADV_OPTIONS' => 'Розширені опції',
    'LBL_TOGGLE_ADV' => 'Показати додаткові налаштування',
    'LBL_TOGGLE_BASIC' => 'Показати основні параметри',
// Links
    'LNK_LIST_SCHEDULER' => 'Planners',
    'LNK_NEW_SCHEDULER' => 'Нове завдання',
// Messages
    'ERR_CRON_SYNTAX' => 'Невірний Cron-синтаксис',
    'NTC_LIST_ORDER' => 'Установка послідовності, в якій завдання з&#039;являться в списку',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Налаштування планувальника завдань Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Налаштування сrontab',
    'LBL_CRON_LINUX_DESC1' => 'Для того, щоб запустити планувальники SuiteCRM, відредагуйте файл crontab веб-сервера і додайте таку команду:',
    'LBL_CRON_LINUX_DESC2' => '... і додайте наступний рядок до файлу crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Слід зробити це лише після завершення встановлення.',
    'LBL_CRON_WINDOWS_DESC' => 'Для запуску планувальників SuiteCRM створіть пакетний файл, який буде виконуватись за допомогою планувальника Windows. Пакетний файл має включати наступні команди:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Журнал робіт',
    'LBL_EXECUTE_TIME' => 'Час виконання',

//jobstrings
    'LBL_REFRESHJOBS' => 'Оновити список робіт',
    'LBL_POLLMONITOREDINBOXES' => 'Перевірити вхідні поштові скриньки',
    'LBL_PERFORMFULLFTSINDEX' => 'Система індексу повнотекстового пошуку',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Запускати вночі масову розсилку листів',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Запускати вночі перевірку поштових скриньок для листів, що повертаються',
    'LBL_PRUNEDATABASE' => 'Стискати базу даних першого числа кожного місяця',
    'LBL_TRIMTRACKER' => 'Очищати історію останніх переглядів першого числа кожного місяця',
    'LBL_TRIMSUGARFEEDS' => 'Очищення таблиць потоку новин SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Надіслати нагадування електронною поштою',
    'LBL_CLEANJOBQUEUE' => 'Очистити чергу робіт',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Видалення документів з файлової системи',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Опитування тек вхідної пошти',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Запустити заплановані звіти',
    'LBL_PROCESSAOW_WORKFLOW' => 'Обробити робочий процес AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Програма індексування Elasticsearch',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Час планувальника',
    'LBL_SYNCGOOGLECALENDAR' => 'Синхронізувати календарі Google',
);

global $sugar_config;
