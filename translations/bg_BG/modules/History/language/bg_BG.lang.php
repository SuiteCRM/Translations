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
    'LBL_MODULE_NAME' => 'История',
    'LBL_MODULE_TITLE' => 'История',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "История"',
    'LBL_LIST_FORM_TITLE' => 'История',
    'LBL_LIST_SUBJECT' => 'Относно',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_RELATED_TO' => 'Свързано със:',
    'LBL_LIST_DATE' => 'Дата:',
    'LBL_LIST_CLOSE' => 'Затвори',
    'LBL_SUBJECT' => 'Относно:',
    'LBL_STATUS' => 'Статус:',
    'LBL_LOCATION' => 'Място:',
    'LBL_DATE_TIME' => 'Начална дата и час:',
    'LBL_DATE' => 'Начална дата:',
    'LBL_TIME' => 'Начален час:',
    'LBL_DURATION' => 'Продължителност:',
    'LBL_HOURS_MINS' => '(час./мин.)',
    'LBL_CONTACT_NAME' => 'Контакт: ',
    'LBL_DESCRIPTION' => 'Описание:',
    'LNK_NEW_CALL' => 'Планиране на обаждане',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_NEW_TASK' => 'Добавяне на задача',
    'LNK_NEW_NOTE' => 'Добавяне на бележка или приложение',
    'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
    'LNK_CALL_LIST' => 'Обаждания',
    'LNK_MEETING_LIST' => 'Срещи',
    'LNK_TASK_LIST' => 'Задачи',
    'LNK_NOTE_LIST' => 'Бележки',
    'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
    'LBL_INVITEE' => 'Поканени потребители',
    'LBL_LIST_DIRECTION' => 'Направление',
    'LBL_DIRECTION' => 'Направление',
    'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
    'LNK_VIEW_CALENDAR' => 'Днес',
    'LBL_OPEN_ACTIVITIES' => 'Текущи дейности',
    'LBL_HISTORY' => 'История',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Добавяне на задача',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Добавяне на задача',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Насрочване на среща',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Насрочване на среща',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Планиране на обаждане',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Добавяне на бележка или приложение',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Добавяне на бележка или приложение',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Създаване на запис за изпратена поща',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Създаване на запис за изпратена поща',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_DUE_DATE' => 'Падежна дата',
    'LBL_LIST_LAST_MODIFIED' => 'Последно модифициран',
    'LNK_IMPORT_NOTES' => 'Импортиране на бележки',
    'LBL_ACCEPT_THIS' => 'Приемате ли?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'История',

    'LBL_CATEGORY' => 'Категория',
    'LBL_LIST_CATEGORY' => 'Категория',
);
