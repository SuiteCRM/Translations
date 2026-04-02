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
    'LBL_MODULE_TITLE' => 'Projektid: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Projekti Otsing',
    'LBL_LIST_FORM_TITLE' => 'Projekti loend',
    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',
    'LBL_ASSIGNED_USER_NAME' => 'Projektihaldur:',
    'LBL_MODIFIED_USER_ID' => 'Muudetud kasutaja Id',
    'LBL_CREATED_BY' => 'Looja:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => 'Kustutatud:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_END' => 'End Date:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Hinnanguline ajakulu (tunde):',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Tegelik ajakulu (tunde):',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Puudub',
    'LBL_ALL_PROJECTS' => 'Kõik projektid',
    'LBL_ALL_USERS' => 'Kõik kasutajad',
    'LBL_ALL_CONTACTS' => 'Kõik kontaktid',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Uus projekt',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Vaata projekti loendit',
    'LNK_NEW_PROJECT_TASK' => 'Loo projekti ülesanne',
    'LNK_PROJECT_TASK_LIST' => 'Vaata projekti ülesandeid',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projects',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Eraisikud',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Eelnevad',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Rohkem...',
    'LBL_OPPORTUNITIES' => 'Opportunities',
    'LBL_NEXT_WEEK' => 'Next',
    'LBL_PROJECT_INFORMATION' => 'Projekti ülevaade',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Muuda ülesannet',
    'LBL_DURATION_TITLE' => 'Muuda kestust',
    'LBL_LAG' => 'Viivitus',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Eesmärk',
    'LBL_ADD_NEW_TASK' => 'Lisa uus ülesanne',
    'LBL_DELETE_TASK' => 'Kustuta ülesanne',
    'LBL_EDIT_TASK_PROPERTIES' => 'Muuda ülesande omadusi.',
    'LBL_PARENT_TASK_ID' => 'Peamise ülesande ID',
    'LBL_RESOURCE_CHART' => 'Resource Calendar',
    'LBL_RELATIONSHIP_TYPE' => 'Seose liik',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projekti mall',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Ülesanded selleks päevaks',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resurss on kasutaja',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resurss on kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Day',
    'LBL_RESOURCE_CHART_WARNING' => 'Sellele projektile pole määratud ühtegi ressurssi.',
    'LBL_PROJECT_DELETE_MSG' => 'Oled sa kindel, et soovid seda projekti ja sellega seotud ülesandeid kustutada?',
    'LBL_LIST_MY_PROJECT' => 'Minu projektid',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Määramata',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressursid',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Lisa ressurss',
    'LBL_FIRST_NAME' => 'Eesnimi',
    'LBL_LAST_NAME' => 'Perekonnanimi',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Vabandust, tulemusi ei leitud. Palun lisa kutse allpool.',
    'LBL_CREATE_INVITEE' => 'Loo ressurss',
    'LBL_CREATE_CONTACT' => 'Kontaktina',
    'LBL_CREATE_AND_ADD' => 'Loo ja lisa',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Teil puudub ligipääs moodulile $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ressursside nimekiri',
    'LBL_REMOVE' => 'Remove',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Arvesta tööpäevi',

    'LBL_IMPORT_PROJECTS' => 'Impordi Projekte',

    'LBL_PROJECTS_SEARCH' => 'Otsi projekte',
    'LBL_USERS_SEARCH' => 'Otsi kasutajaid',
    'LBL_CONTACTS_SEARCH' => 'Vali kontakte',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kvartal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekti kontaktid kontaktide pealkirjast',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projekti mallid: Projekt projekti pealkirjast',
    'LBL_AOS_QUOTES_PROJECT' => 'Hinnapakkumised: Projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
