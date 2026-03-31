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
    'LBL_MODULE_NAME' => 'Activities',
    'LBL_MODULE_TITLE' => 'Заходи - ГОЛОВНА',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук заходів',
    'LBL_LIST_FORM_TITLE' => 'Список заходів',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_OVERVIEW' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'ЗАВДАННЯ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'ЗУСТРІЧІ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'ДЗВІНКИ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'ЛИСТИ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'НОТАТКИ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'ДРУК', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Meeting',
    'LBL_CALL_TYPE' => 'Call',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Note',
    'LBL_DATA_TYPE_START' => 'Початок:',
    'LBL_DATA_TYPE_SENT' => 'Надіслано:',
    'LBL_DATA_TYPE_MODIFIED' => 'Змінено:',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Місце:',
    'LBL_DATE_TIME' => 'Дата і час початку:',
    'LBL_DATE' => 'Дата початку:',
    'LBL_TIME' => 'Час початку:',
    'LBL_DURATION' => 'Тривалість:',
    'LBL_HOURS_MINS' => '(годин:хвилин)',
    'LBL_CONTACT_NAME' => 'Контактна особа: ',
    'LBL_DESCRIPTION' => 'Опис: ',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Створити нотатку або вкладення',
    'LNK_NEW_EMAIL' => 'Send Email',
    'LNK_CALL_LIST' => 'Дзвінки',
    'LNK_MEETING_LIST' => 'Зустрічі',
    'LNK_TASK_LIST' => 'Завдання',
    'LNK_NOTE_LIST' => 'Нотатки',
    'LBL_DELETE_ACTIVITY' => 'Чи бажаєте видалити цей запис?',
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням.',
    'LBL_INVITEE' => 'Запрошені',
    'LBL_LIST_DIRECTION' => 'Сортування',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'Нова зустріч/дзвінок',
    'LNK_VIEW_CALENDAR' => 'Перегляд календаря',
    'LBL_OPEN_ACTIVITIES' => 'Відкриті заходи',
    'LBL_HISTORY' => 'History',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Створити примітку або вкладення',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Відправити листа в архів',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Відправити листа в архів',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
    'LNK_IMPORT_MEETINGS' => 'Імпорт зустрічей',
    'LNK_IMPORT_TASKS' => 'Імпорт завдань',
    'LNK_IMPORT_NOTES' => 'Імпорт нотаток',
    'LBL_ACCEPT_THIS' => 'Прийняти?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Activities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальна особа',

    'LBL_ACCEPT' => 'Accept' /*for 508 compliance fix*/,
);
