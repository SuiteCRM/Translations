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
    'LBL_ACCEPT_THIS' => 'Приемате ли?',
    'LBL_ADD_BUTTON' => 'Добави',
    'LBL_ADD_INVITEE' => 'Добавяне на покана',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_CREATED_BY' => 'Създадено от',
    'LBL_DATE_END' => 'Крайна дата',
    'LBL_DATE_TIME' => 'Начална дата и час:',
    'LBL_DATE' => 'Начална дата:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Срещи',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DIRECTION' => 'Направление:',
    'LBL_DURATION_HOURS' => 'Продължителност (час.):',
    'LBL_DURATION_MINUTES' => 'Продължителност (мин.):',
    'LBL_DURATION' => 'Продължителност:',
    'LBL_EMAIL' => 'Електронна поща',
    'LBL_FIRST_NAME' => 'Име',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Бележки',
    'LBL_HOURS_ABBREV' => 'час.',
    'LBL_HOURS_MINS' => '(час./мин.)',
    'LBL_INVITEE' => 'Поканени потребители',
    'LBL_LAST_NAME' => 'Фамилия',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
    'LBL_LIST_CLOSE' => 'Затвори',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_DATE_MODIFIED' => 'Модифицирано на',
    'LBL_LIST_DATE' => 'Начална дата',
    'LBL_LIST_DIRECTION' => 'Направление',
    'LBL_LIST_DUE_DATE' => 'Падежна дата',
    'LBL_LIST_FORM_TITLE' => 'Списък със срещи',
    'LBL_LIST_MY_MEETINGS' => 'Моите срещи',
    'LBL_LIST_RELATED_TO' => 'Свързано със:',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Относно',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_LOCATION' => 'Място:',
    'LBL_MINSS_ABBREV' => 'мин.',
    'LBL_MODIFIED_BY' => 'Модифицирано от',
    'LBL_MODULE_NAME' => 'Срещи',
    'LBL_MODULE_TITLE' => 'Срещи:',
    'LBL_NAME' => 'Име',
    'LBL_NEW_FORM_TITLE' => 'Създаване на ангажимент',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Служебен телефон:',
    'LBL_REMINDER_TIME' => 'Напомняне през',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Напомняне:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Изтрий',
    'LBL_SCHEDULING_FORM_TITLE' => 'График на дейностите',
    'LBL_SEARCH_BUTTON' => 'Търси',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Срещи"',
    'LBL_SEND_BUTTON_LABEL' => 'Изпращане на покани',
    'LBL_SEND_BUTTON_TITLE' => 'Изпращане на покани',
    'LBL_STATUS' => 'Статус:',
    'LBL_TYPE' => 'Тип на срещата',
    'LBL_PASSWORD' => 'Парола на срещата',
    'LBL_URL' => 'Start/Join Meeting',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Meeting Creator',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Относно:',
    'LBL_TIME' => 'Начален час:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Потребители',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Parent тип',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'Списък със срещи',
    'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_IMPORT_MEETINGS' => 'Импортиране на срещи',

    'LBL_CREATED_USER' => 'Създаден потребител',
    'LBL_MODIFIED_USER' => 'Модифициран потребител',
    'NOTICE_DURATION_TIME' => 'Продължителността на разговора трябва да надхвърля 0',
    'LBL_MEETING_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Join Meeting',
    'LBL_ACCEPT_STATUS' => 'Статус на поканата',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Не можете да участвате в срещата защото не сте поканен.',
    'LBL_EXTNOT_RECORD_LINK' => 'View Meeting',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Не можете да започнете срещата защото не сте Отговорник за нея или Администратор.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Отмени',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Повтаряй докато',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Отнася се за:',

    // for reminders
    'LBL_REMINDERS' => 'Визуализиране на диалогов прозорец за напомняне?',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
