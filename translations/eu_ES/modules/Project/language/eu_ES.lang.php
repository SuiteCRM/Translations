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
    'LBL_MODULE_NAME' => 'Proiektuak',
    'LBL_MODULE_TITLE' => 'Proiektuak: hasiera',
    'LBL_SEARCH_FORM_TITLE' => 'Proiektuen bilaketa',
    'LBL_LIST_FORM_TITLE' => 'Proiektuen zerrenda',
    'LBL_HISTORY_TITLE' => 'Historia',
    'LBL_ID' => 'Id-a',
    'LBL_DATE_ENTERED' => 'Sortua',
    'LBL_DATE_MODIFIED' => 'Aldatua',
    'LBL_ASSIGNED_USER_ID' => 'Esleitua izan da',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Aldatzailea',
    'LBL_CREATED_BY' => 'Sortzailea:',
    'LBL_NAME' => 'Izena',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DELETED' => 'Ezabatua',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Hasiera-data',
    'LBL_DATE_END' => 'Amaiera-data',
    'LBL_PRIORITY' => 'Lehentasuna',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Balioetsitako guztizko lana (h)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Guztizko lan erreala (h)',
    'LBL_LIST_END_DATE' => 'Amaiera-data',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Proiektuko',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Bat ere ez',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Proiektu berria',
    'LNK_NEW_PROJECT' => 'Proiektua sortu',
    'LNK_PROJECT_LIST' => 'Proiektuen zerrenda',
    'LNK_NEW_PROJECT_TASK' => 'Proiektuko ataza sortu',
    'LNK_PROJECT_TASK_LIST' => 'Proiektuko atazak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Aukerak',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kasuak',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gorabehera',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Iraupena',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Hasiera',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => 'Aurrerapena (%)',
    'LBL_MORE' => 'More...',
    'LBL_OPPORTUNITIES' => 'Aukerak',
    'LBL_NEXT_WEEK' => 'Hurrengoa',
    'LBL_PROJECT_INFORMATION' => 'Project Overview',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Proiektuko',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Iraupena',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Hilabeteak',
    'LBL_SUBTASK' => 'Atazak',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'Resource Calendar',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Egoera',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proiektuak',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Iraupena',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Aurreko hilabetea',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Hurrengo hilabetea ',
    'LBL_RESOURCE_CHART_WEEK' => 'Astea',
    'LBL_RESOURCE_CHART_DAY' => 'Eguna',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'My Projects',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Posta elektronikoak',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_ADD_BUTTON' => 'Gehitu',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_SEARCH_BUTTON' => 'Bilaketa',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ezeztatu',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Kendu',
    'LBL_VIEW_DETAIL' => 'Xehetasunak ikusi',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Bilaketa',

    'LBL_CHART_TYPE' => 'Mota',
    'LBL_CHART_WEEKLY' => 'Astero',
    'LBL_CHART_MONTHLY' => 'Hilero',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Hilabetea',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
