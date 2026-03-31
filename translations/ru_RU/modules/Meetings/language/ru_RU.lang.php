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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Добавить',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_CREATED_BY' => 'Кем создано',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Дата звонка:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Встречи',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_DURATION' => 'Duration:',
    'LBL_EMAIL' => 'Отправить E-mail',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Заметки',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Приглашённые',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственное лицо:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Назначенный пользователь',
    'LBL_LIST_CLOSE' => 'Закрытие',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_DATE_MODIFIED' => 'Дата изменения',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Направление',
    'LBL_LIST_DUE_DATE' => 'Крайний срок платежа',
    'LBL_LIST_FORM_TITLE' => 'Список встреч',
    'LBL_LIST_MY_MEETINGS' => 'Мои встречи',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
    'LBL_LOCATION' => 'Место:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modified by',
    'LBL_MODULE_NAME' => 'Встречи',
    'LBL_MODULE_TITLE' => 'Встречи - ГЛАВНАЯ',
    'LBL_NAME' => 'Название',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Последовательность обновления',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Напоминания:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Удалить',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Найти',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск встречи',
    'LBL_SEND_BUTTON_LABEL' => 'Сохранить и отправить приглашения',
    'LBL_SEND_BUTTON_TITLE' => 'Сохранить и отправить приглашения',
    'LBL_STATUS' => 'Статус:',
    'LBL_TYPE' => 'Тип встречи',
    'LBL_PASSWORD' => 'Пароль встречи',
    'LBL_URL' => 'Начать/Присоединиться к встрече',
    'LBL_HOST_URL' => 'URL хоста',
    'LBL_DISPLAYED_URL' => 'Отобразить URL',
    'LBL_CREATOR' => 'Инициатор встречи',
    'LBL_EXTERNALID' => 'Внешнее приложение (ID)',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
    'LBL_PARENT_TYPE' => 'Тип родителя',
    'LBL_PARENT_ID' => 'ID родителя',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Запланировать встречу',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'Основная информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Присоединиться к встрече',
    'LBL_ACCEPT_STATUS' => 'Статус приглашения',
    'LBL_ACCEPT_LINK' => 'Принять вызов',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Вы не можете присоединиться к данной встрече, поскольку вы не приглашены на неё.',
    'LBL_EXTNOT_RECORD_LINK' => 'Просмотр информации о встрече',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Вы не можете начать данную встречу, поскольку вы не администратор системы, либо встреча была запланирована не вами.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Отказаться',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Дни повторов',
    'LBL_REPEAT_UNTIL' => 'Повторять до',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Родительский ID повтора',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'Данная встреча была создана в другой программе и синхронизирована с SuiteCRM. Для изменения данной записи откройте первоначальную программу, внесите в соответствующую встречу необходимые изменения и вновь синхронизируйте её с SuiteCRM.',
    'LBL_RELATED_TO' => 'Относится к:',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Действия:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Последняя отметка времени Google Sync',
);
