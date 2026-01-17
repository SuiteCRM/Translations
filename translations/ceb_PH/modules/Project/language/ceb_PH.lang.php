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
    'LBL_MODULE_NAME' => 'Himoun',
    'LBL_MODULE_TITLE' => 'Mga Proyekto: Balay',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita og Proyekto',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa Proyekto',
    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Adlaw nga Gihimo:',
    'LBL_DATE_MODIFIED' => 'Adlaw nga Gi-usab:',
    'LBL_ASSIGNED_USER_ID' => 'Gi-assign sa:',
    'LBL_ASSIGNED_USER_NAME' => 'Tigdumala sa Proyekto:',
    'LBL_MODIFIED_USER_ID' => 'Gi-usab nga User Id:',
    'LBL_CREATED_BY' => 'Gihimo ni:',
    'LBL_NAME' => 'Pangalan:',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DELETED' => 'Gi-wagtang:',
    'LBL_DATE' => 'Petsa:',
    'LBL_DATE_START' => 'Sugod nga Petsa:',
    'LBL_DATE_END' => 'Katapusang Petsa:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Gibanabana sa kinatibuk-ang Kahago (oras)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktwal sa kinatibuk-ang Kahago (oras)',
    'LBL_LIST_END_DATE' => 'Katapusang Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Dunay Buhaton',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Mga oportunidad',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Wala',
    'LBL_ALL_PROJECTS' => 'Tanang Proyekto',
    'LBL_ALL_USERS' => 'Tanang Users',
    'LBL_ALL_CONTACTS' => 'Tanang Kontaks',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Proyekto',
    'LNK_NEW_PROJECT' => 'Paghimo og Proyekto',
    'LNK_PROJECT_LIST' => 'Tan-awa ang Listahan sa Proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Paghimo og Buhatunon sa Proyekto',
    'LNK_PROJECT_TASK_LIST' => 'Tan-awa ang Buhatunon sa Proyekto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga Proyekto',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Mga oportunidad',
    'LBL_CASES_SUBPANEL_TITLE' => 'Mga Kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Manananap',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Gesugo na pangalan',
    'LBL_DURATION' => 'Kanus-a taman',
    'LBL_ACTUAL_DURATION' => 'Aktwal nga gidugayon',
    'LBL_START' => 'Pag sugod',
    'LBL_FINISH' => 'Paghuman',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Kumpleto',
    'LBL_MORE' => 'Labaw pa...',
    'LBL_OPPORTUNITIES' => 'Mga oportunidad',
    'LBL_NEXT_WEEK' => 'Sunod',
    'LBL_PROJECT_INFORMATION' => 'Overview sa Proyekto',
    'LBL_EDITLAYOUT' => 'I-edit ang Plano' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Dunay Buhaton',
    'LBL_VIEW_GANTT_TITLE' => 'Tan-awa ang Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Kanus-a taman',
    'LBL_TASK_TITLE' => 'Usba ang Buluhaton',
    'LBL_DURATION_TITLE' => 'Usba ang kadugayon',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Mga Adlaw',
    'LBL_HOURS' => 'Oras',
    'LBL_MONTHS' => 'Buwan',
    'LBL_SUBTASK' => 'Sugoun',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Pagdugang og Bag-ong Buluhaton',
    'LBL_DELETE_TASK' => 'Wagtangon ang Buluhaton',
    'LBL_EDIT_TASK_PROPERTIES' => 'Usbon ang properties sa buluhaton.',
    'LBL_PARENT_TASK_ID' => 'Id sa Buluhaton sa ginikanan',
    'LBL_RESOURCE_CHART' => 'Kapanguhaan kalendaryo',
    'LBL_RELATIONSHIP_TYPE' => 'Klase sa Relasyon',
    'LBL_ASSIGNED_TO' => 'Tigdumala sa Proyekto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Template sa Proyekto',
    'LBL_STATUS' => 'Estado:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Tigdumala sa Proyekto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Himoun',
    'LBL_TOOLTIP_TASK_NAME' => 'Gesugo na pangalan',
    'LBL_TOOLTIP_TITLE' => 'Mga buluhaton ani nga adlaw',
    'LBL_TOOLTIP_TASK_DURATION' => 'Kanus-a taman',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ang resource kay usa ka User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ang resource kay usa ka Kontak',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Sa Kaniadtong Buwan',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sunod buwan',
    'LBL_RESOURCE_CHART_WEEK' => 'Semana',
    'LBL_RESOURCE_CHART_DAY' => 'Adlaw',
    'LBL_RESOURCE_CHART_WARNING' => 'Walay mga resource nga gi-assign sa proyekto,.',
    'LBL_PROJECT_DELETE_MSG' => 'Sigurado ka nga nga imong tangtangon ni nga Proyekto og ang may mga kalabutan ani nga buluhaton?',
    'LBL_LIST_MY_PROJECT' => 'Akong mga Proyekto',
    'LBL_LIST_ASSIGNED_USER' => 'Tigdumala sa Proyekto',
    'LBL_UNASSIGNED' => 'Walay gi-assign',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telepono sa Opisina:',
    'LBL_ADD_BUTTON' => 'Dungagi',
    'LBL_ADD_INVITEE' => 'Dungagi og Resource',
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_SEARCH_BUTTON' => 'Pangitaa',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sori, walay resulta nga nakit an. Palihug og buhat sa invitee sa ubos.',
    'LBL_CREATE_INVITEE' => 'Paghimo og Resource',
    'LBL_CREATE_CONTACT' => 'Kontak',
    'LBL_CREATE_AND_ADD' => 'Buhat & Apil',
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahon',
    'LBL_NO_ACCESS' => 'Wala kay access sa pag buhat$module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Listahan sa Resource',
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_VIEW_DETAIL' => 'Tan-aw sa mga Detalye',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Hunahunaa ang mga adlaw nga adunay trabaho',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Pangita og mga Proyekto',
    'LBL_USERS_SEARCH' => 'Pangita og mga User',
    'LBL_CONTACTS_SEARCH' => 'Pili og mga Kontak',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Pangitaa',

    'LBL_CHART_TYPE' => 'Isulat',
    'LBL_CHART_WEEKLY' => 'Simana',
    'LBL_CHART_MONTHLY' => 'Buwan',
    'LBL_CHART_QUARTERLY' => 'Ika upat',

    'LBL_RESOURCE_CHART_MONTH' => 'Buwan',
    'LBL_RESOURCE_CHART_QUARTER' => 'Sud sa ika Upat',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Mga kontak sa Proyekto gikan sa mga titulo sa kontak',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mga Template sa Proyekto: Proyekto gikan sa titulo sa Proyekto',
    'LBL_AOS_QUOTES_PROJECT' => 'Mga Kutlo: Proyekto',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Pasaka',
    'LBL_DESCENDING' => 'Pakanaog',
);
