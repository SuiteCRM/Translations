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
    'LBL_MODULE_NAME' => 'Ang proyekto',
    'LBL_MODULE_TITLE' => 'Mga proyekto: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Paghahanap ng proyekto',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng proyekto',
    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ID' => 'And Id:',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha:',
    'LBL_DATE_MODIFIED' => 'Petsang binago:',
    'LBL_ASSIGNED_USER_ID' => 'Ini-assign sa:',
    'LBL_ASSIGNED_USER_NAME' => 'Tagapamuno ng proyekto:',
    'LBL_MODIFIED_USER_ID' => 'Binago ng gumagamit ng Id:',
    'LBL_CREATED_BY' => 'Nilikha sa pamamagitan ng:',
    'LBL_NAME' => 'Pangalan:',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DELETED' => 'Binura:',
    'LBL_DATE' => 'Petsa:',
    'LBL_DATE_START' => 'Simula ng petsa:',
    'LBL_DATE_END' => 'Katapusan ng petsa:',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Kabuuang tinatayang pagsisikap (oras)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Kabuuang akwtal na pagsisikap (oras)',
    'LBL_LIST_END_DATE' => 'Katapusan ng petsa',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Ang Mga gawain sa Proyekto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Ang mga oportunidad',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Wala',
    'LBL_ALL_PROJECTS' => 'Lahat ng mga proyekto',
    'LBL_ALL_USERS' => 'Lahat ng mga gumagamit',
    'LBL_ALL_CONTACTS' => 'Lahat ng mga kontak',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Bagong proyekto',
    'LNK_NEW_PROJECT' => 'Nilikhang proyekto',
    'LNK_PROJECT_LIST' => 'Tingnan ang listahan ng mga proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Lumikha ng proyektong gawain',
    'LNK_PROJECT_TASK_LIST' => 'Tinganan ang mga proyektong gawain',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga account',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga oportunidad',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga bug',
    'LBL_TASK_ID' => 'Ang ID',
    'LBL_TASK_NAME' => 'Pangalan ng gawain',
    'LBL_DURATION' => 'Agwat',
    'LBL_ACTUAL_DURATION' => 'Akwat na agwat',
    'LBL_START' => 'Simula',
    'LBL_FINISH' => 'Natapos',
    'LBL_PREDECESSORS' => 'Mga predecessor',
    'LBL_PERCENT_COMPLETE' => '%Kompleto',
    'LBL_MORE' => 'Iba pa...',
    'LBL_OPPORTUNITIES' => 'Ang mga oportunidad',
    'LBL_NEXT_WEEK' => 'Susunod',
    'LBL_PROJECT_INFORMATION' => 'Buod ng proyekto',
    'LBL_EDITLAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Ang Mga gawain sa Proyekto',
    'LBL_VIEW_GANTT_TITLE' => 'Tingnan ang Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Agwat',
    'LBL_TASK_TITLE' => 'I-edit ang gawain',
    'LBL_DURATION_TITLE' => 'I-edit ang agwat',
    'LBL_LAG' => 'Ang lag',
    'LBL_DAYS' => 'Ang Mga araw',
    'LBL_HOURS' => 'Mga oras',
    'LBL_MONTHS' => 'Mga buwan',
    'LBL_SUBTASK' => 'Tunkulin',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Magdagdag ng bagong gawain',
    'LBL_DELETE_TASK' => 'Burahin ang gawain',
    'LBL_EDIT_TASK_PROPERTIES' => 'I-edit ang gawaing pagmamay-ari.',
    'LBL_PARENT_TASK_ID' => 'Id ng magulang na gawain',
    'LBL_RESOURCE_CHART' => 'Ang kalendaryong mapagkukunan',
    'LBL_RELATIONSHIP_TYPE' => 'Uri ng pakikipag-ugnayan',
    'LBL_ASSIGNED_TO' => 'Tagapamuno ng proyekto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Template ng proyekto',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Tagapamuno ng proyekto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Ang proyekto',
    'LBL_TOOLTIP_TASK_NAME' => 'Pangalan ng gawain',
    'LBL_TOOLTIP_TITLE' => 'Mga gagawing ngayong araw',
    'LBL_TOOLTIP_TASK_DURATION' => 'Agwat',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Pinagmulan ay isang gumagamit',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Pinagmulan ay kontak',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Nakaraang buwan',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sa susunod na buwan',
    'LBL_RESOURCE_CHART_WEEK' => 'Linggo',
    'LBL_RESOURCE_CHART_DAY' => 'Araw',
    'LBL_RESOURCE_CHART_WARNING' => 'Walang mga pinagmulan naitakdang sa proyekto.',
    'LBL_PROJECT_DELETE_MSG' => 'Sigurado ka bang na gusto mong burahin ang proyekto at ang mga kaugnay na gawain ito?',
    'LBL_LIST_MY_PROJECT' => 'Ang aking mga proyekto',
    'LBL_LIST_ASSIGNED_USER' => 'Tagapamuno ng proyekto',
    'LBL_UNASSIGNED' => 'Hindi itinakda',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Mga pinagmulan',

    'LBL_EMAIL' => 'Ang email',
    'LBL_PHONE' => 'Telepono ng opisina:',
    'LBL_ADD_BUTTON' => 'Idagdag',
    'LBL_ADD_INVITEE' => 'Magdagdag ng pinagmulan',
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_SEARCH_BUTTON' => 'Paghahanap',
    'LBL_EMPTY_SEARCH_RESULT' => 'Paumanhin, walang mga resulta ang natagpuan, mangyaring lumikha ng imbitasyon sa ibaba.',
    'LBL_CREATE_INVITEE' => 'Lumikha ng pinagmulan',
    'LBL_CREATE_CONTACT' => 'Bilang kontak',
    'LBL_CREATE_AND_ADD' => 'Lumikha at magdagdag',
    'LBL_CANCEL_CREATE_INVITEE' => 'Kanselahin',
    'LBL_NO_ACCESS' => 'Wala kang access na lumikha ng $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Listahan ng pinagmulan',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_VIEW_DETAIL' => 'Tingnan ang mga detalye',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Isaalang-alang ang mga araw nay may trabaho',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Paghahanap ng mga proyekto',
    'LBL_USERS_SEARCH' => 'Paghahanap ng mga gumagamit',
    'LBL_CONTACTS_SEARCH' => 'Pumili ng mga kontak',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Paghahanap',

    'LBL_CHART_TYPE' => 'Uri',
    'LBL_CHART_WEEKLY' => 'Lingguhan',
    'LBL_CHART_MONTHLY' => 'Buwanang',
    'LBL_CHART_QUARTERLY' => 'Kada tatlong buwan',

    'LBL_RESOURCE_CHART_MONTH' => 'Buwan',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Ang mga proyektong kontak mula sa mga pamagat ng kontak',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mg proyektong template: Mga proyektong mula sa pamagat na proyekto',
    'LBL_AOS_QUOTES_PROJECT' => 'Mga quote: Proyekto',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
