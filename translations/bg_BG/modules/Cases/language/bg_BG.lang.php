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
    'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Предложения от база Знания',
    'LBL_TOOL_TIP_TITLE' => 'Заглавие: ',
    'LBL_TOOL_TIP_BODY' => 'Body:',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Използвай като: ',
    'LBL_SUGGESTION_BOX' => 'Предложения',
    'LBL_NO_SUGGESTIONS' => 'Няма предложения',
    'LBL_RESOLUTION_BUTTON' => 'Решение',
    'LBL_SUGGESTION_BOX_STATUS' => 'Статус',
    'LBL_SUGGESTION_BOX_TITLE' => 'Титла',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'ID на Организацията',
    'LBL_ACCOUNT_NAME' => 'Организация:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',
    'LBL_CASE_NUMBER' => 'Номер на казуса:',
    'LBL_CASE' => 'Казус:',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_CONTACT_ROLE' => 'Роля:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Казуси',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_INVITEE' => 'Контакти',
    'LBL_MEMBER_OF' => 'Организация',
    'LBL_MODULE_NAME' => 'Казуси',
    'LBL_MODULE_TITLE' => 'Казуси',
    'LBL_NEW_FORM_TITLE' => 'Нов казус',
    'LBL_NUMBER' => 'Номер:',
    'LBL_PRIORITY' => 'Степен на важност:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_RESOLUTION' => 'Решение:',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Казуси"',
    'LBL_STATUS' => 'Статус:',
    'LBL_SUBJECT' => 'Относно:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
    'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_LIST_ASSIGNED' => 'Отговорник:',
    'LBL_LIST_CLOSE' => 'Затвори',
    'LBL_LIST_FORM_TITLE' => 'Списък с казуси',
    'LBL_LIST_LAST_MODIFIED' => 'Последно модифициран',
    'LBL_LIST_MY_CASES' => 'Моите текущи казуси',
    'LBL_LIST_NUMBER' => 'Ном.',
    'LBL_LIST_PRIORITY' => 'Степен на важност',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_SUBJECT' => 'Относно',

    'LNK_CASE_LIST' => 'Списък с казуси',
    'LNK_NEW_CASE' => 'Въвеждане на казус',
    'LBL_LIST_DATE_CREATED' => 'Създадено на',
    'LBL_ASSIGNED_TO_NAME' => 'Потребител',
    'LBL_TYPE' => 'Тип',
    'LBL_WORK_LOG' => 'Работен дневник на събития',
    'LNK_IMPORT_CASES' => 'Импортиране на казуси',

    'LBL_CREATED_USER' => 'Създаден потребител',
    'LBL_MODIFIED_USER' => 'Модифициран потребител',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_CASE_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Приложения:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Add file',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Създадено от',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
