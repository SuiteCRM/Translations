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
    'LBL_MODULE_NAME' => 'Проект',
    'LBL_MODULE_TITLE' => 'Проекты - ГЛАВНАЯ',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск проекта',
    'LBL_LIST_FORM_TITLE' => 'Список проектов',
    'LBL_HISTORY_TITLE' => 'История',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_ASSIGNED_USER_ID' => 'Ответственное лицо:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Изменено(ID):',
    'LBL_CREATED_BY' => 'Кем создано:',
    'LBL_NAME' => 'Название:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DELETED' => 'Удалено:',
    'LBL_DATE' => 'Дата:',
    'LBL_DATE_START' => 'Дата звонка:',
    'LBL_DATE_END' => 'Дата окончания:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Название',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Предварительная оценка общих усилий (час.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Реальные общие усилия (час.)',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Сделки',
    'LBL_PROJECT_PREDECESSOR_NONE' => '--не выбрано--',
    'LBL_ALL_PROJECTS' => 'Все проекты',
    'LBL_ALL_USERS' => 'Все пользователи',
    'LBL_ALL_CONTACTS' => 'Все контакты',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Новый проект',
    'LNK_NEW_PROJECT' => 'Создать проект',
    'LNK_PROJECT_LIST' => 'Проекты',
    'LNK_NEW_PROJECT_TASK' => 'Создать задачу проекта',
    'LNK_PROJECT_TASK_LIST' => 'Проектные задачи',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Проекты',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Сделки',
    'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Начало',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Предшественники',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Больше...',
    'LBL_OPPORTUNITIES' => 'Сделки',
    'LBL_NEXT_WEEK' => 'Далее',
    'LBL_PROJECT_INFORMATION' => 'Основная информация',
    'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_VIEW_GANTT_TITLE' => 'Представление диаграммы Ганта',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Дней',
    'LBL_HOURS' => 'Часов',
    'LBL_MONTHS' => 'Месяцев',
    'LBL_SUBTASK' => 'Задача',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Предшествующая задача(ID)',
    'LBL_RESOURCE_CHART' => 'Диаграмма ресурсов',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Шаблон проекта',
    'LBL_STATUS' => 'Статус:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Проект',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Задачи на выбранный период',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Участник является пользователем',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Участник является контактом',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Неделя',
    'LBL_RESOURCE_CHART_DAY' => 'День',
    'LBL_RESOURCE_CHART_WARNING' => 'В проект не добавлено ни одного участника.',
    'LBL_PROJECT_DELETE_MSG' => 'Вы действительно хотите удалить этот проект и все входящие в него задачи?',
    'LBL_LIST_MY_PROJECT' => 'Мои проекты',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Отправить E-mail',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Добавить',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Найти',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Отказаться',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Удалить',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Импорт проектов',

    'LBL_PROJECTS_SEARCH' => 'Проекты',
    'LBL_USERS_SEARCH' => 'Пользователи',
    'LBL_CONTACTS_SEARCH' => 'Контакты',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Найти',

    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_WEEKLY' => 'Еженедельно',
    'LBL_CHART_MONTHLY' => 'Ежемесячно',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Месяц',
    'LBL_RESOURCE_CHART_QUARTER' => 'Квартал',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Контакты : Контакты',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Шаблоны проекта',
    'LBL_AOS_QUOTES_PROJECT' => 'Предложения-Проекты',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Восходящая',
    'LBL_DESCENDING' => 'Нисходящая',
);
