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
    'LBL_MODULE_NAME' => 'Проекти',
    'LBL_MODULE_TITLE' => 'Проекти',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Проекти"',
    'LBL_LIST_FORM_TITLE' => 'Списък с проекти',
    'LBL_HISTORY_TITLE' => 'История',
    'LBL_ID' => 'Идентификационен номер:',
    'LBL_DATE_ENTERED' => 'Създадено на:',
    'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
    'LBL_ASSIGNED_USER_ID' => 'Отговорник:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Модифицирано от:',
    'LBL_CREATED_BY' => 'Създадено от:',
    'LBL_NAME' => 'Име:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DELETED' => 'Изтрити:',
    'LBL_DATE' => 'Дата',
    'LBL_DATE_START' => 'Начална дата:',
    'LBL_DATE_END' => 'Крайна дата:',
    'LBL_PRIORITY' => 'Степен на важност:',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Планирани часове (ч.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Действителни часове (ч.)',
    'LBL_LIST_END_DATE' => 'Крайна дата',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Задачи по проекта',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Възможности',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Без отговор',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Нов проект',
    'LNK_NEW_PROJECT' => 'Въвеждане на проект',
    'LNK_PROJECT_LIST' => 'Списък с проекти:',
    'LNK_NEW_PROJECT_TASK' => 'Въвеждане на задача по проекта',
    'LNK_PROJECT_TASK_LIST' => 'Задачи по проекта',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
    'LBL_CASES_SUBPANEL_TITLE' => 'Казуси',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',
    'LBL_TASK_ID' => 'Идентификационен номер',
    'LBL_TASK_NAME' => 'Задача',
    'LBL_DURATION' => 'Продължителност',
    'LBL_ACTUAL_DURATION' => 'Отчетено време за изпълнение',
    'LBL_START' => 'Начало',
    'LBL_FINISH' => 'Край',
    'LBL_PREDECESSORS' => 'Свързани задачи',
    'LBL_PERCENT_COMPLETE' => '% завършеност',
    'LBL_MORE' => 'More...',
    'LBL_OPPORTUNITIES' => 'Възможности',
    'LBL_NEXT_WEEK' => 'Следваща стъпка',
    'LBL_PROJECT_INFORMATION' => 'Проект',
    'LBL_EDITLAYOUT' => 'Редактиране на подредби' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Задачи по проекта',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Продължителност',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Дни',
    'LBL_HOURS' => 'Часа',
    'LBL_MONTHS' => 'Месеци',
    'LBL_SUBTASK' => 'Задача',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'Планиране на ресурсите',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Ръководител на проекта',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Статус:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ръководител на проекта',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Проекти',
    'LBL_TOOLTIP_TASK_NAME' => 'Задача',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Продължителност',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Миналия месец',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Следващия месец',
    'LBL_RESOURCE_CHART_WEEK' => 'Седмица',
    'LBL_RESOURCE_CHART_DAY' => 'Ден',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Моите проекти',
    'LBL_LIST_ASSIGNED_USER' => 'Ръководител на проекта',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Електронна поща',
    'LBL_PHONE' => 'Служебен телефон:',
    'LBL_ADD_BUTTON' => 'Добави',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Име',
    'LBL_LAST_NAME' => 'Фамилия',
    'LBL_SEARCH_BUTTON' => 'Търси',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Отмени',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Изтрий',
    'LBL_VIEW_DETAIL' => 'Подробности за кампанията',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Търси',

    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_WEEKLY' => 'Седмично',
    'LBL_CHART_MONTHLY' => 'Месечно',
    'LBL_CHART_QUARTERLY' => 'На тримесечие',

    'LBL_RESOURCE_CHART_MONTH' => 'Месец',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Във възходящ ред',
    'LBL_DESCENDING' => 'В нисходящ ред',
);
