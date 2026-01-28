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
    'LBL_MODULE_NAME' => 'Ang Mga gawain sa Proyekto',
    'LBL_MODULE_TITLE' => 'Gawain ng Proyekto: Home',

    'LBL_ID' => 'And Id:',
    'LBL_PROJECT_TASK_ID' => 'Id ng gawaing proyekto:',
    'LBL_PROJECT_ID' => 'Id ng proyekto:',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha:',
    'LBL_DATE_MODIFIED' => 'Petsang binago:',
    'LBL_ASSIGNED_USER_ID' => 'Ini-assign sa:',
    'LBL_MODIFIED_USER_ID' => 'Binago ng gumagamit ng Id:',
    'LBL_CREATED_BY' => 'Nilikha sa pamamagitan ng:',
    'LBL_NAME' => 'Pangalan:',
    'LBL_STATUS' => 'Katayuan:',
    'LBL_DATE_DUE' => 'Nakatakdang petsa:',
    'LBL_TIME_DUE' => 'Nakatakdang Oras:',
    'LBL_PREDECESSORS' => 'Hinahinlan',
    'LBL_DATE_START' => 'Simula ng petsa:',
    'LBL_DATE_FINISH' => 'Petsa na matapos:',
    'LBL_TIME_START' => 'Oras ng simula:',
    'LBL_TIME_FINISH' => 'Oras ng matapos:',
    'LBL_DURATION' => 'Durasyon:',
    'LBL_DURATION_UNIT' => 'Agwat ng unit:',
    'LBL_ACTUAL_DURATION' => 'Aktwal na agwat:',
    'LBL_PARENT_ID' => 'Proyekto:',
    'LBL_PARENT_TASK_ID' => 'Id ng magulang na gawain:',
    'LBL_PERCENT_COMPLETE' => '%Cpl',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_DESCRIPTION' => 'Tandaan:',
    'LBL_ORDER_NUMBER' => 'Order:',
    'LBL_TASK_NUMBER' => 'Bilang ng gawain:',
    'LBL_TASK_ID' => 'ID ng gawain:',
    'LBL_MILESTONE_FLAG' => 'Milestone:',
    'LBL_ESTIMATED_EFFORT' => 'Tinatayang pagsisikap (oras):',
    'LBL_ACTUAL_EFFORT' => 'Aktwal na pagsisikap (oras):',
    'LBL_UTILIZATION' => 'Pag-utilize (%):',
    'LBL_DELETED' => 'Binura:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_PARENT_NAME' => 'Ang proyekto',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '%Kompleto',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ini-assign sa',
    'LBL_LIST_DATE_DUE' => 'Petsang nakatakda',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_CLOSE' => 'Ang pagsasara',
    'LBL_PROJECT_NAME' => 'Pangalan ng Proyekto',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Nilikhang proyekto',
    'LNK_PROJECT_LIST' => 'Listahan ng proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Lumikha ng proyektong gawain',
    'LNK_PROJECT_TASK_LIST' => 'Ang Mga gawain sa Proyekto',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Ang aking proyektong gawain',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang Mga gawain sa Proyekto',
    'LBL_NEW_FORM_TITLE' => 'Bagong proyektong gawain',

    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',

    'LBL_ASSIGNED_USER_NAME' => 'Ini-assign sa',
    'LBL_PARENT_NAME' => 'Pangalan ng Proyekto',
    'LBL_EDITLAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'Sub-task',
    'LBL_LAG' => 'Ang lag',
    'LBL_DAYS' => 'Ang Mga araw',
    'LBL_HOURS' => 'Mga oras',
    'LBL_RELATIONSHIP_TYPE' => 'Uri ng relasyon',

    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
