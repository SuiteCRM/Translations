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
    'LBL_MODULE_NAME' => 'משימות פרוייקטים',
    'LBL_MODULE_TITLE' => 'משימות בפרויקט: דף ראשי',

    'LBL_ID' => 'מזהה:',
    'LBL_PROJECT_TASK_ID' => 'מזהה משימה בפרויקט:',
    'LBL_PROJECT_ID' => 'זהות פרויקט:',
    'LBL_DATE_ENTERED' => 'תאריך יצירה:',
    'LBL_DATE_MODIFIED' => 'תאריך שינוי:',
    'LBL_ASSIGNED_USER_ID' => 'הקצה ל:',
    'LBL_MODIFIED_USER_ID' => 'שונה על ידי משתמש זהות:',
    'LBL_CREATED_BY' => 'נוצר על ידי:',
    'LBL_NAME' => 'שם:',
    'LBL_STATUS' => 'סטטוס',
    'LBL_DATE_DUE' => 'תאריך תפוגה:',
    'LBL_TIME_DUE' => 'שעת תפוגה:',
    'LBL_PREDECESSORS' => 'קודמים:',
    'LBL_DATE_START' => 'תאריך התחלה:',
    'LBL_DATE_FINISH' => 'תאריך סיום:',
    'LBL_TIME_START' => 'זמן התחלה:',
    'LBL_TIME_FINISH' => 'שעת סיום:',
    'LBL_DURATION' => 'משך:',
    'LBL_DURATION_UNIT' => 'יחידות מניה למשך:',
    'LBL_ACTUAL_DURATION' => 'נמשך בפועל:',
    'LBL_PARENT_ID' => 'פרויקט:',
    'LBL_PARENT_TASK_ID' => 'מזהה משימת אב:',
    'LBL_PERCENT_COMPLETE' => '% שהושלמו:',
    'LBL_PRIORITY' => 'סדר עדיפויות:',
    'LBL_DESCRIPTION' => 'תזכורות:',
    'LBL_ORDER_NUMBER' => 'הזמנה:',
    'LBL_TASK_NUMBER' => 'משימה מספר:',
    'LBL_TASK_ID' => 'מזהה משימה:',
    'LBL_MILESTONE_FLAG' => 'אבן דרך:',
    'LBL_ESTIMATED_EFFORT' => 'מאמץ נדרש הערכה (בשעות):',
    'LBL_ACTUAL_EFFORT' => 'מאמץ בפועל (בשעות):',
    'LBL_UTILIZATION' => 'ניצול (%):',
    'LBL_DELETED' => 'נמחק:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_PARENT_NAME' => 'פרוייקטים',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% הושלמו',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_ASSIGNED_USER_ID' => 'העבר ל',
    'LBL_LIST_DATE_DUE' => 'תאריך תפוגה',
    'LBL_LIST_PRIORITY' => 'עדיפות:',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_PROJECT_NAME' => 'שם הפרוייקט',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'צור פרויקט',
    'LNK_PROJECT_LIST' => 'רשימת פרויקטים',
    'LNK_NEW_PROJECT_TASK' => 'צור משימה בפרויקט',
    'LNK_PROJECT_TASK_LIST' => 'משימות פרוייקטים',

    'LBL_LIST_MY_PROJECT_TASKS' => 'המשימות שלי בפרויקט',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'משימות פרוייקטים',
    'LBL_NEW_FORM_TITLE' => 'משימה חדשה בפרויקט',

    'LBL_HISTORY_TITLE' => 'הסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',

    'LBL_ASSIGNED_USER_NAME' => 'העבר ל',
    'LBL_PARENT_NAME' => 'שם הפרוייקט',
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'משימת משנה',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'ימים',
    'LBL_HOURS' => 'שעות',
    'LBL_RELATIONSHIP_TYPE' => 'סוג קשר',

    'LBL_ASCENDING' => 'בסדר עולה',
    'LBL_DESCENDING' => 'סדר יורד',
);
