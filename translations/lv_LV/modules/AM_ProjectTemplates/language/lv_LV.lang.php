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
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam ar ID',
    'LBL_ASSIGNED_TO_NAME' => 'Projekta vadītājs',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_MODIFIED' => 'Rediģēja',
    'LBL_MODIFIED_NAME' => 'Modificēja vārds',
    'LBL_CREATED' => 'Autors',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_NAME' => 'Veidnes nosaukums',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_EDIT_BUTTON' => 'Rediģēt',
    'LBL_REMOVE' => 'Izņemt',
    'LBL_LIST_FORM_TITLE' => 'Projekta veidņu saraksts',
    'LBL_MODULE_NAME' => 'Projektu veidnes',
    'LBL_MODULE_TITLE' => 'Projektu veidnes',
    'LBL_HOMEPAGE_TITLE' => 'Manu projektu veidnes',
    'LNK_NEW_RECORD' => 'Izveidot projekta veidni',
    'LNK_LIST' => 'Skatīt projekta veidnes',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importēt projekta veidnes',
    'LBL_SEARCH_FORM_TITLE' => 'Meklēt projekta veidnes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Aplūkot vēsturi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_NEW_FORM_TITLE' => 'Jana projekta veidne',
    'LBL_STATUS' => 'Statuss',
    'LBL_PRIORITY' => 'Prioritāte',
    'LBL_PROJECT_NAME' => 'Projekta nosaukums',
    'LBL_START_DATE' => 'Sākuma datums:',
    'LBL_CREATE_PROJECT_TITLE' => 'Vai no šīs veidnes izveidot jaunu projektu?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Uzdevuma veidnes',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Lietotājs',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Ielūgtie',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Select Resources',
    'LBL_NEW_PROJECT_CREATED' => 'New Project Created',
    'LBL_NEW_PROJECT' => 'Izveidot projektu',
    'LBL_CANCEL_PROJECT' => 'Atcelt',

    'LBL_SUBTASK' => 'Uzdevums',
    'LBL_MILESTONE_FLAG' => 'Starpposms',
    'LBL_RELATIONSHIP_TYPE' => 'Attiecību tips',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dienas',
    'LBL_HOURS' => 'Stundas',
    'LBL_MONTHS' => 'Mēneši',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekta uzdevumi',
    'LBL_VIEW_GANTT_TITLE' => 'Ganta skats',
    'LBL_VIEW_GANTT_DURATION' => 'Ilgums',
    'LBL_TASK_TITLE' => 'Rediģēt uzdevumu',
    'LBL_DURATION_TITLE' => 'Rediģēt laiku',
    'LBL_DESCRIPTION' => 'Piezīmes',
    'LBL_ASSIGNED_USER_ID' => 'Piešķirts lietotājam:',

    'LBL_LIST_ASSIGNED_USER' => 'Projekta vadītājs',
    'LBL_UNASSIGNED' => 'Nav piešķirts',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',
    'LBL_DELETE_TASK' => 'Dzēst uzdevumu',
    'LBL_VIEW_DETAIL' => 'aplūkot papildus informāciju',
    'LBL_ADD_NEW_TASK' => 'Pievienot jaunu uzdevumu',
    'LBL_ASSIGNED_USER_NAME' => 'Projekta vadītājs:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Uzdevuma nosaukums',
    'LBL_DURATION' => 'Ilgums',
    'LBL_ACTUAL_DURATION' => 'Faktiskais laiks',
    'LBL_START' => 'Sākt',
    'LBL_FINISH' => 'Pabeigts',
    'LBL_PREDECESSORS' => 'Priekšteči',
    'LBL_PERCENT_COMPLETE' => '% Pabeigts',
    'LBL_EDIT_TASK_PROPERTIES' => 'Rediģēt uzdevuma iestatījumus.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

    'LBL_EMAIL' => 'E-pasts',
    'LBL_PHONE' => 'Biroja tālrunis:',
    'LBL_ADD_BUTTON' => 'Pievienot',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Vārds',
    'LBL_LAST_NAME' => 'Uzvārds',
    'LBL_SEARCH_BUTTON' => 'Meklēšana',
    'LBL_EMPTY_SEARCH_RESULT' => 'Atvainojiet, rezultāti netika atrasti. Lūdzu zemāk izveidojiet ielūgumu.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'Kā kontaktu',
    'LBL_CREATE_AND_ADD' => 'Izveidot un Pievienot',
    'LBL_CANCEL_CREATE_INVITEE' => 'Atcelt',
    'LBL_NO_ACCESS' => 'Jums nav tiesības veidot $moduli',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_NONE' => 'Nav',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
