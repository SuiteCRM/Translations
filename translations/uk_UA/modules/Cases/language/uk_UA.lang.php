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
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Рекомендації з бази знань',
    'LBL_TOOL_TIP_TITLE' => 'Назва:',
    'LBL_TOOL_TIP_BODY' => 'Вміст:',
    'LBL_TOOL_TIP_INFO' => 'Додаткова інформація:',
    'LBL_TOOL_TIP_USE' => 'Використовувати як:',
    'LBL_SUGGESTION_BOX' => 'Пропозиції',
    'LBL_NO_SUGGESTIONS' => 'Немає пропозицій',
    'LBL_RESOLUTION_BUTTON' => 'Прийняте рішення',
    'LBL_SUGGESTION_BOX_STATUS' => 'Статус',
    'LBL_SUGGESTION_BOX_TITLE' => 'Посада',
    'LBL_SUGGESTION_BOX_REL' => 'Релевантність',

    'LBL_ACCOUNT_ID' => 'Контрагент',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Відстеження помилок',
    'LBL_CASE_NUMBER' => 'Номер звернення:',
    'LBL_CASE' => 'Звернення:',
    'LBL_CONTACT_NAME' => 'Контактна особа:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Звернення',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_INVITEE' => 'Контакти',
    'LBL_MEMBER_OF' => 'Контрагент',
    'LBL_MODULE_NAME' => 'Звернення',
    'LBL_MODULE_TITLE' => 'Звернення: Головна',
    'LBL_NEW_FORM_TITLE' => 'Нове звернення',
    'LBL_NUMBER' => 'Номер:',
    'LBL_PRIORITY' => 'Пріоритет:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_RESOLUTION' => 'Прийняте рішення:',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти звернення',
    'LBL_STATUS' => 'Статус:',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний користувач',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_ASSIGNED' => 'Відповідальна особа',
    'LBL_LIST_CLOSE' => 'Закрити',
    'LBL_LIST_FORM_TITLE' => 'Список звернень',
    'LBL_LIST_LAST_MODIFIED' => 'Остання зміна',
    'LBL_LIST_MY_CASES' => 'Мої відкриті звернення',
    'LBL_LIST_NUMBER' => 'Ном.',
    'LBL_LIST_PRIORITY' => 'Пріоритет',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Тема',

    'LNK_CASE_LIST' => 'Перегляд звернень',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LBL_LIST_DATE_CREATED' => 'Дата створення',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_TYPE' => 'Тип',
    'LBL_WORK_LOG' => 'Робочий лог:',
    'LNK_IMPORT_CASES' => 'Імпорт звернень',

    'LBL_CREATED_USER' => 'Створено',
    'LBL_MODIFIED_USER' => 'Змінено',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_CASE_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Оновлення - Текст', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Внутрішнє оновлення',
    'LBL_AOP_CASE_UPDATES' => 'Оновлення у Зверненнях',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Оновлення по зверненнях, у вигляді дерева',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Згорнути все',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Розгорнути все',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Вкладення:',

    'LBL_AOP_CASE_EVENTS' => 'Події Звернень',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Прикладені до звернень файли:',
    'LBL_ADD_CASE_FILE' => 'Додати файл',
    'LBL_REMOVE_CASE_FILE' => 'Видалити файл',
    'LBL_SELECT_CASE_DOCUMENT' => 'Виберіть документ',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Очистити документ',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Внутрішній CRM документ',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Зовнішній файл',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Створено контактом',
    'LBL_CONTACT_CREATED_BY' => 'Створено',
    'LBL_CASE_UPDATE_FORM' => 'Оновлення - форма вкладень', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Невідомий контакт',
);
