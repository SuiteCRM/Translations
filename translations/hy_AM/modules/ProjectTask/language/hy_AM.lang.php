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
    'LBL_MODULE_NAME' => 'Project Tasks',
    'LBL_MODULE_TITLE' => 'Նախագծի խնդիրներ. Գլխավոր',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Նախագծի խնդրի ID․',
    'LBL_PROJECT_ID' => 'Նախագծի ID.',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',
    'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => 'Name:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Վերջնաժամկետը․',
    'LBL_TIME_DUE' => 'Տրված ժամանակ․',
    'LBL_PREDECESSORS' => 'Նախորդները',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_FINISH' => 'Վերջնաժամկետը․',
    'LBL_TIME_START' => 'Start Time:',
    'LBL_TIME_FINISH' => 'Վերջնաժամկետը․',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_UNIT' => 'Տևողության միավոր․',
    'LBL_ACTUAL_DURATION' => 'Փաստացի տևողություն․',
    'LBL_PARENT_ID' => 'Նախագիծ․',
    'LBL_PARENT_TASK_ID' => 'Ծնողի խնդրի ID․',
    'LBL_PERCENT_COMPLETE' => '% Ավարտված',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Notes:',
    'LBL_ORDER_NUMBER' => 'Կարգ․',
    'LBL_TASK_NUMBER' => 'Խնդրի համարը',
    'LBL_TASK_ID' => 'Խնդիրներ ID․',
    'LBL_MILESTONE_FLAG' => 'Ստուգակետ․',
    'LBL_ESTIMATED_EFFORT' => 'Մոտավոր ժամանակը (ժամ)․',
    'LBL_ACTUAL_EFFORT' => 'Ընդհանուր իրական ժամանակ (ժամ)․',
    'LBL_UTILIZATION' => 'Օգտագործման (%)․',
    'LBL_DELETED' => 'Deleted:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PARENT_NAME' => 'Project',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Complete',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Assigned To',
    'LBL_LIST_DATE_DUE' => 'Կատարման ամսաթիվը',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_PROJECT_NAME' => 'Project Name',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => 'Project Tasks',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Իմ նախագծի խնդիրները',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_NEW_FORM_TITLE' => 'Նոր նախագծի խնդիր',

    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',

    'LBL_ASSIGNED_USER_NAME' => 'Assigned To',
    'LBL_PARENT_NAME' => 'Project Name',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Ժամանակացույց',

    'LBL_SUBTASK' => 'Ենթախնդիր',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_RELATIONSHIP_TYPE' => 'Relationship Type',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
