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
    'LBL_MODULE_NAME' => 'Задачи по проекта',
    'LBL_MODULE_TITLE' => 'Задачи по проекти',

    'LBL_ID' => 'Идентификационен номер:',
    'LBL_PROJECT_TASK_ID' => 'Задача по проекта:',
    'LBL_PROJECT_ID' => 'Проект:',
    'LBL_DATE_ENTERED' => 'Създадено на:',
    'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
    'LBL_ASSIGNED_USER_ID' => 'Отговорник:',
    'LBL_MODIFIED_USER_ID' => 'Модифицирано от:',
    'LBL_CREATED_BY' => 'Създадено от:',
    'LBL_NAME' => 'Име:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DATE_DUE' => 'Крайна дата:',
    'LBL_TIME_DUE' => 'Краен час:',
    'LBL_PREDECESSORS' => 'Свързани задачи:',
    'LBL_DATE_START' => 'Начална дата:',
    'LBL_DATE_FINISH' => 'Крайна дата:',
    'LBL_TIME_START' => 'Начален час:',
    'LBL_TIME_FINISH' => 'Краен час:',
    'LBL_DURATION' => 'Продължителност:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Отчетено време за изпълнение:',
    'LBL_PARENT_ID' => 'Проект:',
    'LBL_PARENT_TASK_ID' => 'Свързана задача:',
    'LBL_PERCENT_COMPLETE' => 'Прогрес (%):',
    'LBL_PRIORITY' => 'Степен на важност:',
    'LBL_DESCRIPTION' => 'Бележки:',
    'LBL_ORDER_NUMBER' => 'Поредност:',
    'LBL_TASK_NUMBER' => 'Номер на задачата:',
    'LBL_TASK_ID' => 'ID на задачата:',
    'LBL_MILESTONE_FLAG' => 'Критична точка:',
    'LBL_ESTIMATED_EFFORT' => 'Планирани часове (час.):',
    'LBL_ACTUAL_EFFORT' => 'Действителни часове (час.):',
    'LBL_UTILIZATION' => 'Натоварване (%):',
    'LBL_DELETED' => 'Изтрити:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_PARENT_NAME' => 'Проекти',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% завършеност',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Отговорник:',
    'LBL_LIST_DATE_DUE' => 'Крайна дата',
    'LBL_LIST_PRIORITY' => 'Степен на важност',
    'LBL_LIST_CLOSE' => 'Затвори',
    'LBL_PROJECT_NAME' => 'Проект',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Въвеждане на проект',
    'LNK_PROJECT_LIST' => 'Списък с проекти',
    'LNK_NEW_PROJECT_TASK' => 'Въвеждане на задача по проекта',
    'LNK_PROJECT_TASK_LIST' => 'Задачи по проекта',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Моите текущи задачи по проекти',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Задачи по проекта',
    'LBL_NEW_FORM_TITLE' => 'Нова задача по проекта',

    'LBL_HISTORY_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',

    'LBL_ASSIGNED_USER_NAME' => 'Отговорник:',
    'LBL_PARENT_NAME' => 'Проект',
    'LBL_EDITLAYOUT' => 'Редактиране на подредби' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Дни',
    'LBL_HOURS' => 'Часа',
    'LBL_RELATIONSHIP_TYPE' => 'Тип връзка',

    'LBL_ASCENDING' => 'Във възходящ ред',
    'LBL_DESCENDING' => 'В нисходящ ред',
);
