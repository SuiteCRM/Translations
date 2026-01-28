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
    'LBL_MODULE_NAME' => 'Projekter',
    'LBL_MODULE_TITLE' => 'Projekter: Startside',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter projekt',
    'LBL_LIST_FORM_TITLE' => 'Projektliste',
    'LBL_HISTORY_TITLE' => 'Historik',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Oprettet dato:',
    'LBL_DATE_MODIFIED' => 'Ændret dato:',
    'LBL_ASSIGNED_USER_ID' => 'Tildelt til:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Ændret bruger-id:',
    'LBL_CREATED_BY' => 'Oprettet af:',
    'LBL_NAME' => 'Navn:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DELETED' => 'Slettet:',
    'LBL_DATE' => 'Dato',
    'LBL_DATE_START' => 'Startdato:',
    'LBL_DATE_END' => 'Slutdato:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Samlet anslåede indsats "hrs":',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Samlet faktiske indsats "hrs":',
    'LBL_LIST_END_DATE' => 'Slutdato',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektopgaver',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Muligheder',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Ingen',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nyt projekt',
    'LNK_NEW_PROJECT' => 'Opret projekt',
    'LNK_PROJECT_LIST' => 'Projektliste',
    'LNK_NEW_PROJECT_TASK' => 'Opret projektopgave',
    'LNK_PROJECT_TASK_LIST' => 'Projektopgaver',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekter',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kunder',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Muligheder',
    'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fejlrapport',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Opgavenavn',
    'LBL_DURATION' => 'Varighed',
    'LBL_ACTUAL_DURATION' => 'Faktisk varighed',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Avslutt',
    'LBL_PREDECESSORS' => 'Foregående',
    'LBL_PERCENT_COMPLETE' => 'Fremdrift (%)',
    'LBL_MORE' => 'Mere...',
    'LBL_OPPORTUNITIES' => 'Muligheder',
    'LBL_NEXT_WEEK' => 'Næste',
    'LBL_PROJECT_INFORMATION' => 'Projektoversigt',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektopgaver',
    'LBL_VIEW_GANTT_TITLE' => 'Vis Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Varighed',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Forsinkelse',
    'LBL_DAYS' => 'Dage',
    'LBL_HOURS' => 'Timer',
    'LBL_MONTHS' => 'Måneder',
    'LBL_SUBTASK' => 'Opgaver',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Overordnet opgave-id',
    'LBL_RESOURCE_CHART' => 'Ressourcekalender',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekter',
    'LBL_TOOLTIP_TASK_NAME' => 'Opgavenavn',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Varighed',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Forrige måned',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Næste måned',
    'LBL_RESOURCE_CHART_WEEK' => 'Uge',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Mine projekter',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Emails',
    'LBL_PHONE' => 'Arbejstelefon:',
    'LBL_ADD_BUTTON' => 'Tilføj',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Fornavn',
    'LBL_LAST_NAME' => 'Efternavn',
    'LBL_SEARCH_BUTTON' => 'Søg',
    'LBL_EMPTY_SEARCH_RESULT' => 'Undskyld, vi fandt ingen resultater. Tilføj venligst en inviteret her under.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_AND_ADD' => 'Opret og tilføj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Afbryd',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til at oprette $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Slet',
    'LBL_VIEW_DETAIL' => 'Vis detaljer',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Søg',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Ugentlig',
    'LBL_CHART_MONTHLY' => 'Månedlig',
    'LBL_CHART_QUARTERLY' => 'Kvartal',

    'LBL_RESOURCE_CHART_MONTH' => 'Måned',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Tilbud: Projekter',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Stigende',
    'LBL_DESCENDING' => 'Faldende',
);
