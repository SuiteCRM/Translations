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
    'LBL_MODULE_NAME' => 'Project',
    'LBL_MODULE_TITLE' => 'Projektek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Projekt keresése',
    'LBL_LIST_FORM_TITLE' => 'Projektlista',
    'LBL_HISTORY_TITLE' => 'Előzmények',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_ASSIGNED_USER_ID' => 'Hozzárendelve:',
    'LBL_ASSIGNED_USER_NAME' => 'Projekt felelős:',
    'LBL_MODIFIED_USER_ID' => 'Módosító felhasználó ID:',
    'LBL_CREATED_BY' => 'Létrehozta:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_DELETED' => 'Törölve:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_END' => 'End Date:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Elnevezés',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Teljes becsült erőfeszítés (óra):',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Összes tényleges erőfeszítés (óra):',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'None',
    'LBL_ALL_PROJECTS' => 'Összes projekt',
    'LBL_ALL_USERS' => 'Összes felhasználó',
    'LBL_ALL_CONTACTS' => 'Összes névjegy',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Új projekt',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Projektlista megtekintése',
    'LNK_NEW_PROJECT_TASK' => 'Projektfeladat létrehozása',
    'LNK_PROJECT_TASK_LIST' => 'Projektfeladatok megtekintése',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projects',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Üzenet központ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Előzmények',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Még több ...',
    'LBL_OPPORTUNITIES' => 'Opportunities',
    'LBL_NEXT_WEEK' => 'Next',
    'LBL_PROJECT_INFORMATION' => 'Projekt áttekintése',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Szülő Feladat Id',
    'LBL_RESOURCE_CHART' => 'Resource Calendar',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Projektmenedzser',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projekt sablon',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projekt felelős',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Feladatok ezen a napon',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Forrás felhasználó',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Forrás Kapcsolattartó',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Day',
    'LBL_RESOURCE_CHART_WARNING' => 'Nincsenek források rendelve a projekthez',
    'LBL_PROJECT_DELETE_MSG' => 'Biztosan törölni szeretné a projektet és a hozzá kapcsolt feladatokat?',
    'LBL_LIST_MY_PROJECT' => 'Projektjeim',
    'LBL_LIST_ASSIGNED_USER' => 'Projekt felelős',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Erőforrás hozzáadása',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sajnálom, nem találtam erőforrást. Kérem adjon meg legalább egy meghívottat alább.',
    'LBL_CREATE_INVITEE' => 'Erőforrás létrehozása',
    'LBL_CREATE_CONTACT' => 'kapcsolattartóként',
    'LBL_CREATE_AND_ADD' => 'létrhozás és hozzáadás',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Nincs hozzáférése a $module létrehozásához',
    'LBL_SCHEDULING_FORM_TITLE' => 'Erőforráslista',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Adja meg a munkanapokat',

    'LBL_IMPORT_PROJECTS' => 'Projektek importálása',

    'LBL_PROJECTS_SEARCH' => 'Projektek keresése',
    'LBL_USERS_SEARCH' => 'Felhasználók keresése',
    'LBL_CONTACTS_SEARCH' => 'Kapcsolattartó választása',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Negyedév',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekt kapcsolatok a kapcsolat címekből',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projekt-sablonok: Projekt a Projektcímből',
    'LBL_AOS_QUOTES_PROJECT' => 'Árajánlat: Projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Növekvő',
    'LBL_DESCENDING' => 'Descending',
);
