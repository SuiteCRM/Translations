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
    'LBL_MODULE_NAME' => 'Layihə tapşırıqları',
    'LBL_MODULE_TITLE' => 'Project Task: Home',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Project Id:',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi:',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi:',
    'LBL_ASSIGNED_USER_ID' => 'Təyin edilsin:',
    'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => 'Ad:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Bitmə tarixi:',
    'LBL_TIME_DUE' => 'Bitmə zamanı:',
    'LBL_PREDECESSORS' => 'Predecessor',
    'LBL_DATE_START' => 'Başlama tarixi:',
    'LBL_DATE_FINISH' => 'Finish Date:',
    'LBL_TIME_START' => 'Başlama zamanı:',
    'LBL_TIME_FINISH' => 'Finish Time:',
    'LBL_DURATION' => 'Müddət:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
    'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'Birincilik:',
    'LBL_DESCRIPTION' => 'Notes:',
    'LBL_ORDER_NUMBER' => 'Order:',
    'LBL_TASK_NUMBER' => 'Task Number:',
    'LBL_TASK_ID' => 'Task ID:',
    'LBL_MILESTONE_FLAG' => 'Milestone:',
    'LBL_ESTIMATED_EFFORT' => 'Estimated Effort (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Actual Effort (hrs):',
    'LBL_UTILIZATION' => 'Utilization (%):',
    'LBL_DELETED' => 'Deleted:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PARENT_NAME' => 'Layihə',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Complete',
    'LBL_LIST_STATUS' => 'Vəziyyət',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Təyin edilmişdir',
    'LBL_LIST_DATE_DUE' => 'Son tarix',
    'LBL_LIST_PRIORITY' => 'Öncəlik',
    'LBL_LIST_CLOSE' => 'Bağla',
    'LBL_PROJECT_NAME' => 'Layihə Adı',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Layihə Yarat',
    'LNK_PROJECT_LIST' => 'Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => 'Layihə tapşırıqları',

    'LBL_LIST_MY_PROJECT_TASKS' => 'My Project Tasks',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Layihə tapşırıqları',
    'LBL_NEW_FORM_TITLE' => 'New Project Task',

    'LBL_HISTORY_TITLE' => 'Tarixçə',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçə',

    'LBL_ASSIGNED_USER_NAME' => 'Təyin edilmişdir',
    'LBL_PARENT_NAME' => 'Layihə Adı',
    'LBL_EDITLAYOUT' => 'Tərtibatı redaktə et' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Zaman qrafiki',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Günlər',
    'LBL_HOURS' => 'Saatlar',
    'LBL_RELATIONSHIP_TYPE' => 'Relationship Type',

    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',
);
