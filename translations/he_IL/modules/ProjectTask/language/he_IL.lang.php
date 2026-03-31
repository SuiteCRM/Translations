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
    'LBL_MODULE_TITLE' => 'משימות בפרויקט: דף ראשי',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'מזהה משימה בפרויקט:',
    'LBL_PROJECT_ID' => 'זהות פרויקט:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'תאריך עדכון:',
    'LBL_ASSIGNED_USER_ID' => 'הקצה ל:',
    'LBL_MODIFIED_USER_ID' => 'שונה על ידי משתמש זהות:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => 'Name:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'תאריך תפוגה:',
    'LBL_TIME_DUE' => 'שעת תפוגה:',
    'LBL_PREDECESSORS' => 'קודמים:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_FINISH' => 'תאריך סיום:',
    'LBL_TIME_START' => 'Start Time:',
    'LBL_TIME_FINISH' => 'שעת סיום:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_UNIT' => 'יחידות מניה למשך:',
    'LBL_ACTUAL_DURATION' => 'נמשך בפועל:',
    'LBL_PARENT_ID' => 'פרויקט:',
    'LBL_PARENT_TASK_ID' => 'מזהה משימת אב:',
    'LBL_PERCENT_COMPLETE' => '% שהושלמו:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Notes:',
    'LBL_ORDER_NUMBER' => 'הזמנה:',
    'LBL_TASK_NUMBER' => 'משימה מספר:',
    'LBL_TASK_ID' => 'מזהה משימה:',
    'LBL_MILESTONE_FLAG' => 'אבן דרך:',
    'LBL_ESTIMATED_EFFORT' => 'מאמץ נדרש הערכה (בשעות):',
    'LBL_ACTUAL_EFFORT' => 'מאמץ בפועל (בשעות):',
    'LBL_UTILIZATION' => 'ניצול (%):',
    'LBL_DELETED' => 'Deleted:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_PARENT_NAME' => 'Project',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Complete',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'העבר ל',
    'LBL_LIST_DATE_DUE' => 'תאריך תפוגה',
    'LBL_LIST_PRIORITY' => 'עדיפות',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_PROJECT_NAME' => 'Project Name',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => 'Project Tasks',

    'LBL_LIST_MY_PROJECT_TASKS' => 'המשימות שלי בפרויקט',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_NEW_FORM_TITLE' => 'משימה חדשה בפרויקט',

    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',

    'LBL_ASSIGNED_USER_NAME' => 'העבר ל',
    'LBL_PARENT_NAME' => 'Project Name',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'משימת משנה',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_RELATIONSHIP_TYPE' => 'Relationship Type',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
