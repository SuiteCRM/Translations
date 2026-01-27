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
    'LBL_ASSIGNED_TO_ID' => 'מזהה המשתמש המוקצה',
    'LBL_ASSIGNED_TO_NAME' => 'מנהל פרוייקט',
    'LBL_ID' => 'מזהה',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_MODIFIED' => 'שונה ע"י',
    'LBL_MODIFIED_NAME' => 'שונה על ידי (שם)',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'שם התבנית',
    'LBL_CREATED_USER' => 'נוצר על ידי המשתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי המשתמש',
    'LBL_LIST_NAME' => 'שם',
    'LBL_EDIT_BUTTON' => 'עריכה',
    'LBL_REMOVE' => 'הסרה',
    'LBL_LIST_FORM_TITLE' => 'רשימת תבניות פרוייקט',
    'LBL_MODULE_NAME' => 'תבניות פרוייקט',
    'LBL_MODULE_TITLE' => 'תבניות פרוייקט',
    'LBL_HOMEPAGE_TITLE' => 'My Project Templates',
    'LNK_NEW_RECORD' => 'יצירת תבניות פרוייקט',
    'LNK_LIST' => 'View Project Templates',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Import Project Templates',
    'LBL_SEARCH_FORM_TITLE' => 'Search Project Templates',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'New Project Templates',
    'LBL_STATUS' => 'סטטוס',
    'LBL_PRIORITY' => 'עדיפות:',
    'LBL_PROJECT_NAME' => 'שם הפרוייקט',
    'LBL_START_DATE' => 'תאריך התחלה',
    'LBL_CREATE_PROJECT_TITLE' => 'יצירת פרוייקט חדש מתבנית זו?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'תבניות פעילות',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'משתמשים',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'אנשי קשר',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Select Resources',
    'LBL_NEW_PROJECT_CREATED' => 'פרוייקט חדש נוצר',
    'LBL_NEW_PROJECT' => 'צור פרויקט',
    'LBL_CANCEL_PROJECT' => 'בטל',

    'LBL_SUBTASK' => 'משימה',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'ימים',
    'LBL_HOURS' => 'שעות',
    'LBL_MONTHS' => 'חודשים',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'משימות פרוייקטים',
    'LBL_VIEW_GANTT_TITLE' => 'תצוגת גנט',
    'LBL_VIEW_GANTT_DURATION' => 'משך',
    'LBL_TASK_TITLE' => 'עריכת משימה',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_DESCRIPTION' => 'רשימות',
    'LBL_ASSIGNED_USER_ID' => 'הקצה ל:',

    'LBL_LIST_ASSIGNED_USER' => 'מנהל פרוייקט',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
    'LBL_DELETE_TASK' => 'מחיקת משימה',
    'LBL_VIEW_DETAIL' => 'צפה בפרטים',
    'LBL_ADD_NEW_TASK' => 'הוספת משימה חדשה',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',

    'LBL_TASK_ID' => 'מזהה',
    'LBL_TASK_NAME' => 'שם משימה',
    'LBL_DURATION' => 'משך',
    'LBL_ACTUAL_DURATION' => 'משך בפועל',
    'LBL_START' => 'התחלה',
    'LBL_FINISH' => 'סיום',
    'LBL_PREDECESSORS' => 'קודמים',
    'LBL_PERCENT_COMPLETE' => '% הושלמו',
    'LBL_EDIT_TASK_PROPERTIES' => 'עריכת מאפייני משימה.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

    'LBL_EMAIL' => 'מיילים',
    'LBL_PHONE' => 'טלפון במשרד:',
    'LBL_ADD_BUTTON' => 'הוסף',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'שם פרטי',
    'LBL_LAST_NAME' => 'שם משפחה',
    'LBL_SEARCH_BUTTON' => 'חיפוש',
    'LBL_EMPTY_SEARCH_RESULT' => 'מצטערים, לא נמצאו תוצאות. אנא צור מוזמן למטה.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'כאיש קשר',
    'LBL_CREATE_AND_ADD' => 'ליצור & להוסיף',
    'LBL_CANCEL_CREATE_INVITEE' => 'בטל',
    'LBL_NO_ACCESS' => 'אין לך גישה כדי ליצור $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_NONE' => 'ללא',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
