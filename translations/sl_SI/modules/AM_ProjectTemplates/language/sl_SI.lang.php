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
    'LBL_ASSIGNED_TO_ID' => 'Dodeljen uporabniški ID',
    'LBL_ASSIGNED_TO_NAME' => 'Projektni vodja',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum nastanka',
    'LBL_DATE_MODIFIED' => 'Datum spremembe',
    'LBL_MODIFIED' => 'Spremenil',
    'LBL_MODIFIED_NAME' => 'Spremenil (ime)',
    'LBL_CREATED' => 'Ustvaril',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Ime predloge',
    'LBL_CREATED_USER' => 'Ustvaril uporabnik',
    'LBL_MODIFIED_USER' => 'Spremenil uporabnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Odstrani',
    'LBL_LIST_FORM_TITLE' => 'Project Templates List',
    'LBL_MODULE_NAME' => 'Predloge projetkov',
    'LBL_MODULE_TITLE' => 'Predloge projetkov',
    'LBL_HOMEPAGE_TITLE' => 'My Project Templates',
    'LNK_NEW_RECORD' => 'Create Project Templates',
    'LNK_LIST' => 'View Project Templates',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Import Project Templates',
    'LBL_SEARCH_FORM_TITLE' => 'Search Project Templates',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poglej zgodovino',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'New Project Templates',
    'LBL_STATUS' => 'Stanje',
    'LBL_PRIORITY' => 'Prioriteta',
    'LBL_PROJECT_NAME' => 'Ime nadrejenega',
    'LBL_START_DATE' => 'Datum začetka',
    'LBL_CREATE_PROJECT_TITLE' => 'Create a new project from this template?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Task Templates',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Uporabniki',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakti',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Select Resources',
    'LBL_NEW_PROJECT_CREATED' => 'New Project Created',
    'LBL_NEW_PROJECT' => 'Ustvari projekt',
    'LBL_CANCEL_PROJECT' => 'Prekliči',

    'LBL_SUBTASK' => 'Naloge',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Ur',
    'LBL_MONTHS' => 'meseci',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektne naloge',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_DESCRIPTION' => 'Beležke',
    'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektni vodja',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_VIEW_DETAIL' => 'Poglej podrobnosti',
    'LBL_ADD_NEW_TASK' => 'Dodaj novo nalogo',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ime naloge',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Dejansko trajanje',
    'LBL_START' => 'Začni',
    'LBL_FINISH' => 'Zaključi',
    'LBL_PREDECESSORS' => 'Predhodniki',
    'LBL_PERCENT_COMPLETE' => 'Napredek (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

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
    'LBL_NONE' => 'Brez',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
