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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Prosjekt Manager',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Navn på mal',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Liste over prosjektmaler',
    'LBL_MODULE_NAME' => 'Prosjektmaler',
    'LBL_MODULE_TITLE' => 'Project Templates',
    'LBL_HOMEPAGE_TITLE' => 'Mine prosjektmaler',
    'LNK_NEW_RECORD' => 'Opprett prosjektmaler',
    'LNK_LIST' => 'Vis prosjektmaler',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importer prosjektmaler',
    'LBL_SEARCH_FORM_TITLE' => 'Søk i prosjektmaler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Se på historikk',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Nye prosjektmaler',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet',
    'LBL_PROJECT_NAME' => 'Prosjektbetegnelse',
    'LBL_START_DATE' => 'Start dato',
    'LBL_CREATE_PROJECT_TITLE' => 'Opprette et nytt prosjekt fra denne malen?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Oppgave maler',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Users',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Velg ressurser',
    'LBL_NEW_PROJECT_CREATED' => 'Nytt prosjekt opprettet',
    'LBL_NEW_PROJECT' => 'Create Project',
    'LBL_CANCEL_PROJECT' => 'Cancel',

    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Milepæl',
    'LBL_RELATIONSHIP_TYPE' => 'Relasjonstype',
    'LBL_LAG' => 'Etterslep',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Varighet',
    'LBL_TASK_TITLE' => 'Rediger oppgave',
    'LBL_DURATION_TITLE' => 'Rediger varighet',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',

    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Ikke tilordnet',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressurser',
    'LBL_DELETE_TASK' => 'Slett oppgave',
    'LBL_VIEW_DETAIL' => 'Vis detaljer',
    'LBL_ADD_NEW_TASK' => 'Legg til ny oppgave',
    'LBL_ASSIGNED_USER_NAME' => 'Prosjekt styrer:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Oppgavenavn',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Faktisk varighet',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Forgjengere',
    'LBL_PERCENT_COMPLETE' => 'Fremdrift (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Rediger egenskaper for oppgave',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Vurdere arbeidsdager',
    'LBL_COPY_ALL_TASKS' => 'Kopier alle aktiviteter med ressurser',
    'LBL_COPY_SEL_TASKS' => 'Kopier merkede aktiviteter med ressurser',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Kopierer alle aktiviteter med tildelte brukere',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Tlfnr, arbeid:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Legge til ressurs',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Beklager, fant ingen resultater. Opprett en gjest under.',
    'LBL_CREATE_INVITEE' => 'Opprette en ressurs',
    'LBL_CREATE_CONTACT' => 'Som Kontakt',
    'LBL_CREATE_AND_ADD' => 'Opprett og legg til',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Du har ikke tilgang til å opprette $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ressurslisten',
    'LBL_NONE' => 'None',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
