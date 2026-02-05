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
    'LBL_ASSIGNED_TO_ID' => 'Təyin Edilmiş İstifadəçi kimliyi',
    'LBL_ASSIGNED_TO_NAME' => 'Layihə meneceri',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_MODIFIED' => 'Redaktə etdi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_DELETED' => 'Silinib',
    'LBL_NAME' => 'Şablon Adı',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_EDIT_BUTTON' => 'Redaktə et',
    'LBL_REMOVE' => 'Sil',
    'LBL_LIST_FORM_TITLE' => 'Layihə Şablonları siyahısı',
    'LBL_MODULE_NAME' => 'Layihə Şablonları',
    'LBL_MODULE_TITLE' => 'Layihə Şablonları',
    'LBL_HOMEPAGE_TITLE' => 'Layihə Şablonlarım',
    'LNK_NEW_RECORD' => 'Layihə Şablonları yaradın',
    'LNK_LIST' => 'Layihə Şablonlarına Baxın',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Layihə Şablonlarını idxal edin',
    'LBL_SEARCH_FORM_TITLE' => 'Layihə Şablonlarını axtarın',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçəyə bax',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_NEW_FORM_TITLE' => 'Yeni Layihə Şablonları',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_PRIORITY' => 'Öncəlik',
    'LBL_PROJECT_NAME' => 'Layihə Adı',
    'LBL_START_DATE' => 'Başlama tarixi',
    'LBL_CREATE_PROJECT_TITLE' => 'Create a new project from this template?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Tapşırıq şablonları',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'İstifadəçilər',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Əlaqələr',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Resursları seçin',
    'LBL_NEW_PROJECT_CREATED' => 'Yeni Layihə Yaradıldı',
    'LBL_NEW_PROJECT' => 'Layihə Yarat',
    'LBL_CANCEL_PROJECT' => 'İmtina',

    'LBL_SUBTASK' => 'Tapşırıq',
    'LBL_MILESTONE_FLAG' => 'Mərhələ',
    'LBL_RELATIONSHIP_TYPE' => 'Əlaqə növü',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Günlər',
    'LBL_HOURS' => 'Saatlar',
    'LBL_MONTHS' => 'Aylar',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Layihə tapşırıqları',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt-a baxın',
    'LBL_VIEW_GANTT_DURATION' => 'Müddət',
    'LBL_TASK_TITLE' => 'Tapşırığı redaktə edin',
    'LBL_DURATION_TITLE' => 'Müddəti redaktə edin',
    'LBL_DESCRIPTION' => 'Qeydlər',
    'LBL_ASSIGNED_USER_ID' => 'Təyin edilsin:',

    'LBL_LIST_ASSIGNED_USER' => 'Layihə meneceri',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_VIEW_DETAIL' => 'Təfərrüatlara baxın',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',

    'LBL_TASK_ID' => 'Kimlik',
    'LBL_TASK_NAME' => 'Tapşırıq adı',
    'LBL_DURATION' => 'Müddət',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Başla',
    'LBL_FINISH' => 'Bitdi',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

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
    'LBL_NONE' => 'Heç nə',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
