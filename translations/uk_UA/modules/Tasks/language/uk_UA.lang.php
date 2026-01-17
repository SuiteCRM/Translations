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
    'LBL_MODULE_NAME' => 'Завдання',
    'LBL_MODULE_TITLE' => 'Завдання: Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти завдання',
    'LBL_LIST_FORM_TITLE' => 'Список завдань',
    'LBL_NEW_FORM_TITLE' => 'Нове завдання',
    'LBL_LIST_CLOSE' => 'Закрити',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_PRIORITY' => 'Пріоритет',
    'LBL_LIST_RELATED_TO' => 'Відноситься до',
    'LBL_LIST_DUE_DATE' => 'Дата завершення',
    'LBL_LIST_DUE_TIME' => 'Час виконання:',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DUE_DATE' => 'Дата закінчення:',
    'LBL_DUE_TIME' => 'Час закінчення:',
    'LBL_PRIORITY' => 'Пріоритет:',
    'LBL_DUE_DATE_AND_TIME' => 'Дата і час виконання:',
    'LBL_START_DATE_AND_TIME' => 'Дата і час початку:',
    'LBL_START_DATE' => 'Дата початку:',
    'LBL_LIST_START_DATE' => 'Дата початку',
    'LBL_START_TIME' => 'Час початку:',
    'DATE_FORMAT' => '(рррр-мм-дд)',
    'LBL_NONE' => 'Немає',
    'LBL_CONTACT' => 'Контакт:',
    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_EMAIL' => 'Електронна пошта:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_NAME' => 'Ім’я:',
    'LBL_CONTACT_NAME' => 'Контактна особа:',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_DATE_DUE_FLAG' => 'Немає дати виконання',
    'LBL_DATE_START_FLAG' => 'Немає дати початку',
    'LBL_LIST_MY_TASKS' => 'Мої відкриті завдання',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_TASK_LIST' => 'Завдання',
    'LNK_IMPORT_TASKS' => 'Імпорт завдань',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний користувач',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа:',
    'LBL_LIST_DATE_MODIFIED' => 'Дата зміни',
    'LBL_CONTACT_ID' => 'Контакту',
    'LBL_PARENT_ID' => 'Код початкового запису:',
    'LBL_CONTACT_PHONE' => 'Телефон контакту:',
    'LBL_PARENT_TYPE' => 'Тип початкового запису:',
    'LBL_TASK_INFORMATION' => 'ОГЛЯД ЗАВДАННЯ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Правка розташування' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Нотатки',
    //For export labels
    'LBL_DATE_DUE' => 'Дата закінчення',
    'LBL_RELATED_TO' => 'Відноситься до: ',
);
