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
    'LBL_MODULE_NAME' => 'Projekti',
    'LBL_MODULE_TITLE' => 'Projekti: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje po projektih',
    'LBL_LIST_FORM_TITLE' => 'Seznam projektov',
    'LBL_HISTORY_TITLE' => 'Zgodovina',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Vnešeno dne:',
    'LBL_DATE_MODIFIED' => 'Spremenjeno dne:',
    'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Spremenil (ID):',
    'LBL_CREATED_BY' => 'Ustvaril:',
    'LBL_NAME' => 'Ime:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DELETED' => 'Zbrisano:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Datum začetka:',
    'LBL_DATE_END' => 'Datum konca:',
    'LBL_PRIORITY' => 'Prioreta:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Skupno predvideno delo (ure)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Skupaj dejanski porabljen čas (ure)',
    'LBL_LIST_END_DATE' => 'Datum zaključka',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektne naloge',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Brez',
    'LBL_ALL_PROJECTS' => 'Vsi projekti',
    'LBL_ALL_USERS' => 'Vsi uporabniki',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nov projekt',
    'LNK_NEW_PROJECT' => 'Ustvari projekt',
    'LNK_PROJECT_LIST' => 'Seznam projektov',
    'LNK_NEW_PROJECT_TASK' => 'Ustvari novo projektno nalogo',
    'LNK_PROJECT_TASK_LIST' => 'Projektne naloge',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Računi',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hrošči',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ime naloge',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Dejansko trajanje',
    'LBL_START' => 'Začni',
    'LBL_FINISH' => 'Zaključi',
    'LBL_PREDECESSORS' => 'Predhodniki',
    'LBL_PERCENT_COMPLETE' => 'Napredek (%)',
    'LBL_MORE' => 'Več...',
    'LBL_OPPORTUNITIES' => 'Priložnosti',
    'LBL_NEXT_WEEK' => 'Naprej',
    'LBL_PROJECT_INFORMATION' => 'Pregled projekta',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektne naloge',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Ur',
    'LBL_MONTHS' => 'meseci',
    'LBL_SUBTASK' => 'Naloge',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Dodaj novo nalogo',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'Koledar virov',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Projektni vodja',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Stanje:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektni vodja',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekti',
    'LBL_TOOLTIP_TASK_NAME' => 'Ime naloge',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Trajanje',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Prejšnji mesec',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Naslednji mesec',
    'LBL_RESOURCE_CHART_WEEK' => 'Teden',
    'LBL_RESOURCE_CHART_DAY' => 'Dan',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Moji projekti',
    'LBL_LIST_ASSIGNED_USER' => 'Projektni vodja',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'E-pošta',
    'LBL_PHONE' => 'Telefon, pisarna:',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Priimek',
    'LBL_SEARCH_BUTTON' => 'Iskanje',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'Kot kontakt',
    'LBL_CREATE_AND_ADD' => 'Ustvari & dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Prekliči',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Odstrani',
    'LBL_VIEW_DETAIL' => 'Poglej podrobnosti',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',
    
    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Iskanje',

    'LBL_CHART_TYPE' => 'Tip',
    'LBL_CHART_WEEKLY' => 'Tedensko',
    'LBL_CHART_MONTHLY' => 'Mesečno',
    'LBL_CHART_QUARTERLY' => 'Četrtletno',

    'LBL_RESOURCE_CHART_MONTH' => 'Mesec',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',

    'LBL_ASCENDING' => 'Naraščajoče',
    'LBL_DESCENDING' => 'Padajče',
);
