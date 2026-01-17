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
    'LBL_MODULE_NAME' => 'Layihə',
    'LBL_MODULE_TITLE' => 'Projects: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Project Search',
    'LBL_LIST_FORM_TITLE' => 'Project List',
    'LBL_HISTORY_TITLE' => 'Tarixçə',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi:',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi:',
    'LBL_ASSIGNED_USER_ID' => 'Təyin edilsin:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => 'Ad:',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_DELETED' => 'Deleted:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Başlama tarixi:',
    'LBL_DATE_END' => 'Bitmə tarixi:',
    'LBL_PRIORITY' => 'Birincilik:',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Estimated Effort (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Actual Effort (hrs)',
    'LBL_LIST_END_DATE' => 'Bitmə tarixi',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Layihələr',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Layihə tapşırıqları',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'İmkanlar',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Heç nə',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'New Project',
    'LNK_NEW_PROJECT' => 'Layihə Yarat',
    'LNK_PROJECT_LIST' => 'View Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => 'View Project Tasks',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Layihələr',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçə',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesablar',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'İmkanlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Mübahisələr',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Boşluqlar',
    'LBL_TASK_ID' => 'Kimlik',
    'LBL_TASK_NAME' => 'Tapşırıq adı',
    'LBL_DURATION' => 'Müddət',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Başla',
    'LBL_FINISH' => 'Bitdi',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'More...',
    'LBL_OPPORTUNITIES' => 'İmkanlar',
    'LBL_NEXT_WEEK' => 'Növbəti',
    'LBL_PROJECT_INFORMATION' => 'Project Overview',
    'LBL_EDITLAYOUT' => 'Tərtibatı redaktə et' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Layihə tapşırıqları',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt-a baxın',
    'LBL_VIEW_GANTT_DURATION' => 'Müddət',
    'LBL_TASK_TITLE' => 'Tapşırığı redaktə edin',
    'LBL_DURATION_TITLE' => 'Müddəti redaktə edin',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Günlər',
    'LBL_HOURS' => 'Saatlar',
    'LBL_MONTHS' => 'Aylar',
    'LBL_SUBTASK' => 'Tapşırıq',
    'LBL_MILESTONE_FLAG' => 'Mərhələ',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'Təqvim Resursu',
    'LBL_RELATIONSHIP_TYPE' => 'Əlaqə növü',
    'LBL_ASSIGNED_TO' => 'Layihə meneceri',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Layihə meneceri',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Layihə',
    'LBL_TOOLTIP_TASK_NAME' => 'Tapşırıq adı',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Müddət',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Əvvəlki ay',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Gələn Ay',
    'LBL_RESOURCE_CHART_WEEK' => 'Həftə',
    'LBL_RESOURCE_CHART_DAY' => 'Gün',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'My Projects',
    'LBL_LIST_ASSIGNED_USER' => 'Layihə meneceri',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'E-poçt',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Əlavə et',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_SEARCH_BUTTON' => 'Axtar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Yarat və Artır',
    'LBL_CANCEL_CREATE_INVITEE' => 'İmtina',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Sil',
    'LBL_VIEW_DETAIL' => 'Təfərrüatlara baxın',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Axtar',

    'LBL_CHART_TYPE' => 'Növ',
    'LBL_CHART_WEEKLY' => 'Həftəlik',
    'LBL_CHART_MONTHLY' => 'Aylıq',
    'LBL_CHART_QUARTERLY' => 'Rüblük',

    'LBL_RESOURCE_CHART_MONTH' => 'Ay',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',
);
