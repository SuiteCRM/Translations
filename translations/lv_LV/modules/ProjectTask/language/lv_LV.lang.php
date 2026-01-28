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
    'LBL_MODULE_NAME' => 'Projekta uzdevumi',
    'LBL_MODULE_TITLE' => 'Project Task: Home',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Project Id:',
    'LBL_DATE_ENTERED' => 'Izveidots:',
    'LBL_DATE_MODIFIED' => 'Modificēts:',
    'LBL_ASSIGNED_USER_ID' => 'Piešķirts lietotājam:',
    'LBL_MODIFIED_USER_ID' => 'Modificētāja ID:',
    'LBL_CREATED_BY' => 'Izveidoja:',
    'LBL_NAME' => 'Vārds:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_DATE_DUE' => 'Izpildes datums:',
    'LBL_TIME_DUE' => 'Izpildes laiks:',
    'LBL_PREDECESSORS' => 'Predecessor',
    'LBL_DATE_START' => 'Sākuma datums:',
    'LBL_DATE_FINISH' => 'Finish Date:',
    'LBL_TIME_START' => 'Sākuma laiks:',
    'LBL_TIME_FINISH' => 'Finish Time:',
    'LBL_DURATION' => 'Ilgums:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
    'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'Prioritāte:',
    'LBL_DESCRIPTION' => 'Piezīmes:',
    'LBL_ORDER_NUMBER' => 'Secība:',
    'LBL_TASK_NUMBER' => 'Task Number:',
    'LBL_TASK_ID' => 'Task ID:',
    'LBL_MILESTONE_FLAG' => 'Milestone:',
    'LBL_ESTIMATED_EFFORT' => 'Estimated Effort (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Actual Effort (hrs):',
    'LBL_UTILIZATION' => 'Utilization (%):',
    'LBL_DELETED' => 'Izdzēsts:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_PARENT_NAME' => 'Projekts',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Pabeigts',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Piešķirts lietotājam',
    'LBL_LIST_DATE_DUE' => 'Izpildes datums',
    'LBL_LIST_PRIORITY' => 'Prioritāte',
    'LBL_LIST_CLOSE' => 'Slēgt',
    'LBL_PROJECT_NAME' => 'Projekta nosaukums',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Izveidot projektu',
    'LNK_PROJECT_LIST' => 'Projektu saraksts',
    'LNK_NEW_PROJECT_TASK' => 'Izveidot projekta uzdevumu',
    'LNK_PROJECT_TASK_LIST' => 'Projekta uzdevumi',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Mana projekta uzdevumi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekta uzdevumi',
    'LBL_NEW_FORM_TITLE' => 'New Project Task',

    'LBL_HISTORY_TITLE' => 'Vēsture',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',

    'LBL_ASSIGNED_USER_NAME' => 'Piešķirts lietotājam',
    'LBL_PARENT_NAME' => 'Projekta nosaukums',
    'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dienas',
    'LBL_HOURS' => 'Stundas',
    'LBL_RELATIONSHIP_TYPE' => 'Relācijas veids',

    'LBL_ASCENDING' => 'Augoši',
    'LBL_DESCENDING' => 'Dilstoši',
);
