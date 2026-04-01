<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Код користувача відповідальної особи',
    'LBL_ASSIGNED_TO_NAME' => 'Керівник проекту',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Ким змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем (за іменем)',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Назва шаблону',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Список шаблонів проекту',
    'LBL_MODULE_NAME' => 'Шаблони проектів',
    'LBL_MODULE_TITLE' => 'Project Templates',
    'LBL_HOMEPAGE_TITLE' => 'Мої шаблони проектів',
    'LNK_NEW_RECORD' => 'Створити шаблон проекту',
    'LNK_LIST' => 'Переглянути шаблони проєктів',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Імпортувати шаблони проєктів',
    'LBL_SEARCH_FORM_TITLE' => 'Шукати шаблони проєктів',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Нові шаблони проєктів',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Пріоритет',
    'LBL_PROJECT_NAME' => 'Назва проекту',
    'LBL_START_DATE' => 'Дата початку',
    'LBL_CREATE_PROJECT_TITLE' => 'Створити новий проєкт з цього шаблону?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Шаблони завдань',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Users',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Виберіть ресурси',
    'LBL_NEW_PROJECT_CREATED' => 'Новий проєкт створено',
    'LBL_NEW_PROJECT' => 'Create Project',
    'LBL_CANCEL_PROJECT' => 'Cancel',

    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Віха проєкту',
    'LBL_RELATIONSHIP_TYPE' => 'Тип зв\'язку',
    'LBL_LAG' => 'Затримка',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'Показ діаграми Ганта',
    'LBL_VIEW_GANTT_DURATION' => 'Тривалість',
    'LBL_TASK_TITLE' => 'Редагувати завдання',
    'LBL_DURATION_TITLE' => 'Змінити тривалість',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Відповідальна особа:',

    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Не призначено',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ресурси',
    'LBL_DELETE_TASK' => 'Видалити завдання',
    'LBL_VIEW_DETAIL' => 'Перегляд деталей',
    'LBL_ADD_NEW_TASK' => 'Додати нове завдання',
    'LBL_ASSIGNED_USER_NAME' => 'Керівник проекту:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Назва задачі',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Фактична тривалість',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Попередники',
    'LBL_PERCENT_COMPLETE' => '% виконання',
    'LBL_EDIT_TASK_PROPERTIES' => 'Редагування властивостей завдань.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Вважати робочі дні',
    'LBL_COPY_ALL_TASKS' => 'Копіювати всі завдання з ресурсами',
    'LBL_COPY_SEL_TASKS' => 'Копіювати вибрані завдання з ресурсами',
    'LBL_TOOLTIP_TITLE' => 'Підказка',
    'LBL_TOOLTIP_TEXT' => 'Копіює всі задачі з призначеними користувачами',

    'LBL_EMAIL' => 'Розсилка електронною поштою',
    'LBL_PHONE' => 'Тел. робочий:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Додати ресурс',
    'LBL_FIRST_NAME' => 'Ім\'я',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'На жаль, нічого не знайдено. Додайте запрошену особу нижче.',
    'LBL_CREATE_INVITEE' => 'Створити ресурс',
    'LBL_CREATE_CONTACT' => 'Як контакт',
    'LBL_CREATE_AND_ADD' => 'Створити та додати',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'У вас немає доступу для створення $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Список ресурсів',
    'LBL_NONE' => 'None',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Шаблони проєкту: Проєкт з заголовку проєкту',


);
