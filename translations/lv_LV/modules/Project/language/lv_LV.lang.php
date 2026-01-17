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
    'LBL_MODULE_NAME' => 'Projekts',
    'LBL_MODULE_TITLE' => 'Projekti: sākums',
    'LBL_SEARCH_FORM_TITLE' => 'Meklēt projektu',
    'LBL_LIST_FORM_TITLE' => 'Projektu saraksts',
    'LBL_HISTORY_TITLE' => 'Vēsture',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Izveidots:',
    'LBL_DATE_MODIFIED' => 'Modificēts:',
    'LBL_ASSIGNED_USER_ID' => 'Piešķirts lietotājam:',
    'LBL_ASSIGNED_USER_NAME' => 'Projekta vadītājs:',
    'LBL_MODIFIED_USER_ID' => 'Modificētāja ID:',
    'LBL_CREATED_BY' => 'Izveidoja:',
    'LBL_NAME' => 'Vārds:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_DELETED' => 'Izdzēsts:',
    'LBL_DATE' => 'Datums:',
    'LBL_DATE_START' => 'Sākuma datums:',
    'LBL_DATE_END' => 'Beigu datums:',
    'LBL_PRIORITY' => 'Prioritāte:',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Kopējais paredzamais laiks (h)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Kopējais faktiskais laiks (h)',
    'LBL_LIST_END_DATE' => 'Beigu datums',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projekta uzdevumi',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Iespējas',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nav',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Jauns projekts',
    'LNK_NEW_PROJECT' => 'Izveidot projektu',
    'LNK_PROJECT_LIST' => 'Skatīt projektu sarakstu',
    'LNK_NEW_PROJECT_TASK' => 'Izveidot projekta uzdevumu',
    'LNK_PROJECT_TASK_LIST' => 'Skatīt projekta uzdevumus',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Iespējas',
    'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Uzdevuma nosaukums',
    'LBL_DURATION' => 'Ilgums',
    'LBL_ACTUAL_DURATION' => 'Faktiskais laiks',
    'LBL_START' => 'Sākt',
    'LBL_FINISH' => 'Pabeigts',
    'LBL_PREDECESSORS' => 'Priekšteči',
    'LBL_PERCENT_COMPLETE' => '% Pabeigts',
    'LBL_MORE' => 'Vairāk...',
    'LBL_OPPORTUNITIES' => 'Iespējas',
    'LBL_NEXT_WEEK' => 'Saglabāt un turpināt',
    'LBL_PROJECT_INFORMATION' => 'Projekta pārskats',
    'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekta uzdevumi',
    'LBL_VIEW_GANTT_TITLE' => 'Ganta skats',
    'LBL_VIEW_GANTT_DURATION' => 'Ilgums',
    'LBL_TASK_TITLE' => 'Rediģēt uzdevumu',
    'LBL_DURATION_TITLE' => 'Rediģēt laiku',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dienas',
    'LBL_HOURS' => 'Stundas',
    'LBL_MONTHS' => 'Mēneši',
    'LBL_SUBTASK' => 'Uzdevums',
    'LBL_MILESTONE_FLAG' => 'Starpposms',
    'LBL_ADD_NEW_TASK' => 'Pievienot jaunu uzdevumu',
    'LBL_DELETE_TASK' => 'Dzēst uzdevumu',
    'LBL_EDIT_TASK_PROPERTIES' => 'Rediģēt uzdevuma iestatījumus.',
    'LBL_PARENT_TASK_ID' => 'Vecāku uzdevuma Id',
    'LBL_RESOURCE_CHART' => 'Resource Calendar',
    'LBL_RELATIONSHIP_TYPE' => 'Attiecību tips',
    'LBL_ASSIGNED_TO' => 'Projekta vadītājs',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projekta veidne',
    'LBL_STATUS' => 'Statuss:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projekta vadītājs',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekts',
    'LBL_TOOLTIP_TASK_NAME' => 'Uzdevuma nosaukums',
    'LBL_TOOLTIP_TITLE' => 'Šodienas uzdevumi',
    'LBL_TOOLTIP_TASK_DURATION' => 'Ilgums',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resurss ir lietotājs',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resurss ir kontaktpersona',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Iepriekšējais mēnesis',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Nākamais mēnesis',
    'LBL_RESOURCE_CHART_WEEK' => 'Nedēļa',
    'LBL_RESOURCE_CHART_DAY' => 'Diena',
    'LBL_RESOURCE_CHART_WARNING' => 'Projektam nav piešķirti resursi.',
    'LBL_PROJECT_DELETE_MSG' => 'Vai tiešām vēlaties dzēst šo projektu un tā saistītos uzdevumus?',
    'LBL_LIST_MY_PROJECT' => 'Mani projekti',
    'LBL_LIST_ASSIGNED_USER' => 'Projekta vadītājs',
    'LBL_UNASSIGNED' => 'Nav piešķirts',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',

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
    'LBL_REMOVE' => 'Izņemt',
    'LBL_VIEW_DETAIL' => 'aplūkot papildus informāciju',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Meklēšana',

    'LBL_CHART_TYPE' => 'Tips:',
    'LBL_CHART_WEEKLY' => 'Katru nedēļu',
    'LBL_CHART_MONTHLY' => 'Katru mēnesi',
    'LBL_CHART_QUARTERLY' => 'Reizi ceturksnī',

    'LBL_RESOURCE_CHART_MONTH' => 'Mēnesis',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Augoši',
    'LBL_DESCENDING' => 'Dilstoši',
);
