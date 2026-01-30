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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Календар',
    'LBL_MODULE_TITLE' => 'Календар',
    'LNK_NEW_CALL' => 'Планиране на обаждане',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_NEW_TASK' => 'Добавяне на задача',
    'LNK_CALL_LIST' => 'Обаждания',
    'LNK_MEETING_LIST' => 'Срещи',
    'LNK_TASK_LIST' => 'Задачи',
    'LNK_TASK' => 'Задача',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Събитие',
    'LNK_EVENT_VIEW' => 'Показване на събитие',
    'LNK_VIEW_CALENDAR' => 'Днес',
    'LNK_IMPORT_CALLS' => 'Импортиране на обаждания',
    'LNK_IMPORT_MEETINGS' => 'Импортиране на срещи',
    'LNK_IMPORT_TASKS' => 'Импортиране на задачи',
    'LBL_MONTH' => 'Месец',
    'LBL_AGENDADAY' => 'Ден',
    'LBL_YEAR' => 'Година',

    'LBL_AGENDAWEEK' => 'Седмица',
    'LBL_PREVIOUS_MONTH' => 'Миналия месец',
    'LBL_PREVIOUS_DAY' => 'Вчера',
    'LBL_PREVIOUS_YEAR' => 'Миналата година',
    'LBL_PREVIOUS_WEEK' => 'Миналата седмица',
    'LBL_NEXT_MONTH' => 'Следващия месец',
    'LBL_NEXT_DAY' => 'Утре',
    'LBL_NEXT_YEAR' => 'Следващата година',
    'LBL_NEXT_WEEK' => 'Следващата седмица',
    'LBL_AM' => 'Сутрин',
    'LBL_PM' => 'Следобед',
    'LBL_SCHEDULED' => 'Насрочен',
    'LBL_BUSY' => 'Изпълняван',
    'LBL_CONFLICT' => 'Конфликт',
    'LBL_USER_CALENDARS' => 'Потребителски календар',
    'LBL_SHARED' => 'Групов',
    'LBL_PREVIOUS_SHARED' => 'Предишна',
    'LBL_NEXT_SHARED' => 'Следваща стъпка',
    'LBL_SHARED_CAL_TITLE' => 'Групов календар',
    'LBL_USERS' => 'Потребители',
    'LBL_REFRESH' => 'Обнови',
    'LBL_EDIT_USERLIST' => 'Списък с потребители',
    'LBL_SELECT_USERS' => 'Избор на потребители за показване в календара',
    'LBL_FILTER_BY_TEAM' => 'Филтриране на списък с потребители по екип:',
    'LBL_ASSIGNED_TO_NAME' => 'Потребител',
    'LBL_DATE' => 'Начален час и дата',
    'LBL_CREATE_MEETING' => 'Насрочване на среща',
    'LBL_CREATE_CALL' => 'Планиране на обаждане',
    'LBL_HOURS_ABBREV' => 'час.',
    'LBL_MINS_ABBREV' => 'мин.',


    'LBL_YES' => 'Да',
    'LBL_NO' => 'Не',
    'LBL_SETTINGS' => 'Настройки',
    'LBL_CREATE_NEW_RECORD' => 'Създаване на активност',
    'LBL_LOADING' => 'Зареждане...',
    'LBL_SAVING' => 'Запазване...',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites...',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Error while loading',
    'LBL_GOTO_DATE' => 'Go to Date',
    'NOTICE_DURATION_TIME' => 'Продължителността на разговора трябва да надхвърля 0',
    'LBL_STYLE_BASIC' => 'Свързани с тип базов', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Разширено търсене', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Относно',
    'LBL_DURATION' => 'Продължителност',
    'LBL_STATUS' => 'Статус',
    'LBL_PRIORITY' => 'Степен на важност',

    'LBL_SETTINGS_TITLE' => 'Настройки',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Съхрани',
    'LBL_DELETE_BUTTON' => 'Изтрий',
    'LBL_APPLY_BUTTON' => 'Приложи',
    'LBL_SEND_INVITES' => 'Изпращане на покани',
    'LBL_CANCEL_BUTTON' => 'Отмени',
    'LBL_CLOSE_BUTTON' => 'Затвори',

    'LBL_GENERAL_TAB' => 'Допълнителна информация',
    'LBL_PARTICIPANTS_TAB' => 'Поканени потребители',
    'LBL_REPEAT_TAB' => 'Повторение',

    'LBL_REPEAT_TYPE' => 'Повторение',
    'LBL_REPEAT_INTERVAL' => 'Всеки',
    'LBL_REPEAT_END' => 'Край',
    'LBL_REPEAT_END_AFTER' => 'След',
    'LBL_REPEAT_OCCURRENCES' => 'повторения',
    'LBL_REPEAT_END_BY' => 'От',
    'LBL_REPEAT_DOW' => 'На',
    'LBL_REPEAT_UNTIL' => 'Повтаряй докато',
    'LBL_REPEAT_COUNT' => 'Брой повторения',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Модул',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Граница',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Нд",
            '1' => "Пн",
            '2' => "Вт",
            '3' => "Ср",
            '4' => "Чт",
            '5' => "Пт",
            '6' => "Сб",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Неделя",
            '1' => "Понеделник",
            '2' => "Вторник",
            '3' => "Сряда",
            '4' => "Четвъртък",
            '5' => "Петък",
            '6' => "Събота",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Ян.",
            '2' => "Февр.",
            '3' => "Март",
            '4' => "Апр.",
            '5' => "Май",
            '6' => "Юни",
            '7' => "Юли",
            '8' => "Авг.",
            '9' => "Септ.",
            '10' => "Окт.",
            '11' => "Ноем.",
            '12' => "Дек.",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Януари",
            '2' => "Февруари",
            '3' => "Март",
            '4' => "Април",
            '5' => "Май",
            '6' => "Юни",
            '7' => "Юли",
            '8' => "Август",
            '9' => "Септември",
            '10' => "Октомври",
            '11' => "Ноември",
            '12' => "Декември",
        ),
);
