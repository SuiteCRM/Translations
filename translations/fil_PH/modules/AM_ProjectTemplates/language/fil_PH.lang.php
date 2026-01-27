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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Tagapamuno ng proyekto',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Pangalan ng Template',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_REMOVE' => 'Tanggalin',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga template ng proyekto',
    'LBL_MODULE_NAME' => 'Mga template ng proyekto',
    'LBL_MODULE_TITLE' => 'Mga template ng proyekto',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga template ng proyekto',
    'LNK_NEW_RECORD' => 'Lumikha ng mga Template ng Proyekto',
    'LNK_LIST' => 'Tingnan ang mga Template ng Proyekto',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Angkatin ang mga Template ng Proyekto',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng mga Template ng Proyekto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Mga bagong Template ng Proyekto',
    'LBL_STATUS' => 'Katayuan',
    'LBL_PRIORITY' => 'Prayoridad',
    'LBL_PROJECT_NAME' => 'Pangalan ng Proyekto',
    'LBL_START_DATE' => 'Petsa ng pagsimula',
    'LBL_CREATE_PROJECT_TITLE' => 'Lumikha ng bagong proyekto mula sa template na ito?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Mga template ng gawain',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Ang mga gumagamit',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Mga kontak',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Pumili ng mga mapagkukunan',
    'LBL_NEW_PROJECT_CREATED' => 'Bagong Proyekto ang Nailikha',
    'LBL_NEW_PROJECT' => 'Nilikhang proyekto',
    'LBL_CANCEL_PROJECT' => 'Kanselahin',

    'LBL_SUBTASK' => 'Tunkulin',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_RELATIONSHIP_TYPE' => 'Uri ng pakikipag-ugnayan',
    'LBL_LAG' => 'Ang lag',
    'LBL_DAYS' => 'Ang Mga araw',
    'LBL_HOURS' => 'Mga oras',
    'LBL_MONTHS' => 'Mga buwan',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Ang Mga gawain sa Proyekto',
    'LBL_VIEW_GANTT_TITLE' => 'Tingnan ang Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Agwat',
    'LBL_TASK_TITLE' => 'I-edit ang gawain',
    'LBL_DURATION_TITLE' => 'I-edit ang agwat',
    'LBL_DESCRIPTION' => 'Mga tandaan',
    'LBL_ASSIGNED_USER_ID' => 'Ini-assign sa:',

    'LBL_LIST_ASSIGNED_USER' => 'Tagapamuno ng proyekto',
    'LBL_UNASSIGNED' => 'Hindi itinakda',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Mga pinagmulan',
    'LBL_DELETE_TASK' => 'Burahin ang gawain',
    'LBL_VIEW_DETAIL' => 'Tingnan ang mga detalye',
    'LBL_ADD_NEW_TASK' => 'Magdagdag ng bagong gawain',
    'LBL_ASSIGNED_USER_NAME' => 'Tagapamuno ng proyekto:',

    'LBL_TASK_ID' => 'Ang ID',
    'LBL_TASK_NAME' => 'Pangalan ng gawain',
    'LBL_DURATION' => 'Agwat',
    'LBL_ACTUAL_DURATION' => 'Akwat na agwat',
    'LBL_START' => 'Simula',
    'LBL_FINISH' => 'Natapos',
    'LBL_PREDECESSORS' => 'Mga predecessor',
    'LBL_PERCENT_COMPLETE' => '%Kompleto',
    'LBL_EDIT_TASK_PROPERTIES' => 'I-edit ang gawaing pagmamay-ari.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Isaalang-alang ang mga araw nay may trabaho',
    'LBL_COPY_ALL_TASKS' => 'Kopyahin ang lahat ng mga gawain na may mga pinagkunan',
    'LBL_COPY_SEL_TASKS' => 'Kopyahin ang lahat ng mga napiling gawain na may mga pinagkunan',
    'LBL_TOOLTIP_TITLE' => 'Pahiwatig',
    'LBL_TOOLTIP_TEXT' => 'Kopyahin ang lahat ng mga gawain na may mga nakatalagang gumagamit',

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
    'LBL_NONE' => 'Wala',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Mg proyektong template: Mga proyektong mula sa pamagat na proyekto',


);
