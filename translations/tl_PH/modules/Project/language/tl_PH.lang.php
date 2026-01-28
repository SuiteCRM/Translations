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
    'LBL_MODULE_NAME' => 'Proyekto',
    'LBL_MODULE_TITLE' => 'Mga proyekto: Tahanan',
    'LBL_SEARCH_FORM_TITLE' => 'Pagsasaliksik ng Proyekto',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng Proyekto',
    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Ang Petsa ng Pagkagawa:',
    'LBL_DATE_MODIFIED' => 'Huling binago:',
    'LBL_ASSIGNED_USER_ID' => 'Naitalaga Kay:',
    'LBL_ASSIGNED_USER_NAME' => 'Ang manager ng proyekto:',
    'LBL_MODIFIED_USER_ID' => 'Nabago na Id ng gumagamit:',
    'LBL_CREATED_BY' => 'Nilikha Ni:',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DELETED' => 'Nabura:',
    'LBL_DATE' => 'Petsa:',
    'LBL_DATE_START' => 'Magsimula sa petsa:',
    'LBL_DATE_END' => 'Petsa ng Katapusan:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Kabuuang natantiya na sikap (oras)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Kabuuang Aktwal na sikap (oras)',
    'LBL_LIST_END_DATE' => 'Petsa ng katapusan',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Ang mga gawain sa proyekto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Ang mga pagkakataon',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Wala',
    'LBL_ALL_PROJECTS' => 'Lahat ng mga proyekto',
    'LBL_ALL_USERS' => 'Lahat ng mga gumagamit',
    'LBL_ALL_CONTACTS' => 'Lahat ng mga kontak',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Bagong Proyekto',
    'LNK_NEW_PROJECT' => 'Lumikha ng proyekto',
    'LNK_PROJECT_LIST' => 'Tingnan ang listahan ng proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Gumawa ng Gawain ng Proyekto',
    'LNK_PROJECT_TASK_LIST' => 'Tingnan ang mga gawain ng proyekto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga proyekto',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ang mga Akawnt',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga pagkakataon',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga mali',
    'LBL_TASK_ID' => 'Ang ID',
    'LBL_TASK_NAME' => 'Ang pangalan ng gawain',
    'LBL_DURATION' => 'Tagal',
    'LBL_ACTUAL_DURATION' => 'Aktwal na tinatagal',
    'LBL_START' => 'Simula',
    'LBL_FINISH' => 'Tapusin',
    'LBL_PREDECESSORS' => 'Mga hinalinhan',
    'LBL_PERCENT_COMPLETE' => '% na kumpleto',
    'LBL_MORE' => 'Higit pa...',
    'LBL_OPPORTUNITIES' => 'Ang mga pagkakataon',
    'LBL_NEXT_WEEK' => 'Ang susunod',
    'LBL_PROJECT_INFORMATION' => 'Overview ng proyekto',
    'LBL_EDITLAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Ang mga gawain sa proyekto',
    'LBL_VIEW_GANTT_TITLE' => 'Tingnan ang Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Tagal',
    'LBL_TASK_TITLE' => 'I-edit ang gawain',
    'LBL_DURATION_TITLE' => 'I-edit ang tagal',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Ang mga araw',
    'LBL_HOURS' => 'Ang mga oras',
    'LBL_MONTHS' => 'Ang mga linggo',
    'LBL_SUBTASK' => 'Ang Gawain',
    'LBL_MILESTONE_FLAG' => 'Milyahe',
    'LBL_ADD_NEW_TASK' => 'Magdagdag ng bagong gawain',
    'LBL_DELETE_TASK' => 'Burahin ang gawain',
    'LBL_EDIT_TASK_PROPERTIES' => 'I-edit ang mga ari-arian ng gawain.',
    'LBL_PARENT_TASK_ID' => 'Id sa gawain ng magulang',
    'LBL_RESOURCE_CHART' => 'Ang magpagkukunan ng kalendaryo',
    'LBL_RELATIONSHIP_TYPE' => 'Uri ng relasyon',
    'LBL_ASSIGNED_TO' => 'Ang proyekto ng pamahalaan',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Template ng proyekto',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ang proyekto ng pamahalaan',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proyekto',
    'LBL_TOOLTIP_TASK_NAME' => 'Ang pangalan ng gawain',
    'LBL_TOOLTIP_TITLE' => 'Mga gawain sa araw na ito',
    'LBL_TOOLTIP_TASK_DURATION' => 'Tagal',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ang mapagkukunan ay isang gumagamit',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ang mapagkukunan ay isang kontak',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Nakaraang buwan',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sa susunod na Buwan',
    'LBL_RESOURCE_CHART_WEEK' => 'Linggo',
    'LBL_RESOURCE_CHART_DAY' => 'Ang araw',
    'LBL_RESOURCE_CHART_WARNING' => 'Walang mga mapagkukunan ang natalaga sa proyekto.',
    'LBL_PROJECT_DELETE_MSG' => 'Sigurado ka bang burahin ang proyektong ito at ang kaugnay na mga gawain nito?',
    'LBL_LIST_MY_PROJECT' => 'Aking mga proyekto',
    'LBL_LIST_ASSIGNED_USER' => 'Ang proyekto ng pamahalaan',
    'LBL_UNASSIGNED' => 'Hindi itinalaga',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Mga pinagkukunan',

    'LBL_EMAIL' => 'Ang Email',
    'LBL_PHONE' => 'Telopono ng opisina:',
    'LBL_ADD_BUTTON' => 'Magdagdag',
    'LBL_ADD_INVITEE' => 'Magdagdag ng pinagkukunan',
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_SEARCH_BUTTON' => 'Maghanap',
    'LBL_EMPTY_SEARCH_RESULT' => 'Paumanhim, walang mga resulta ang natagpuan. Mangyaring ng imbitado sa ibaba.',
    'LBL_CREATE_INVITEE' => 'Lumikha ng isang pinagkukunan',
    'LBL_CREATE_CONTACT' => 'Bilang kontak',
    'LBL_CREATE_AND_ADD' => 'Gumawa at magdagdag',
    'LBL_CANCEL_CREATE_INVITEE' => 'I-cancel',
    'LBL_NO_ACCESS' => 'Wala kang access upng gumawa ng $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Listahan ng pinagkukunan',
    'LBL_REMOVE' => 'Alisin',
    'LBL_VIEW_DETAIL' => 'Tingnan ang mga Detalye',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Ituring na mga araw ng pagtatrabaho',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Hanapin ang mga proyekto',
    'LBL_USERS_SEARCH' => 'Hanapin ang mga gumagamit',
    'LBL_CONTACTS_SEARCH' => 'Pumili ng mga kontak',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Maghanap',

    'LBL_CHART_TYPE' => 'Klase',
    'LBL_CHART_WEEKLY' => 'Linggo-linggo',
    'LBL_CHART_MONTHLY' => 'Buwan-buwan',
    'LBL_CHART_QUARTERLY' => 'Minsan sa tatlong buwan',

    'LBL_RESOURCE_CHART_MONTH' => 'Buwan',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Mga contact na Proyekto galing sa mga Contact na Titulo',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Ang proyekto ng mga template: Ang proyekto mula sa pamagat ng proyekto',
    'LBL_AOS_QUOTES_PROJECT' => 'Mga Quote: Proyekto',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
