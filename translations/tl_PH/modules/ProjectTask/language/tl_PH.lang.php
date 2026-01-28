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
    'LBL_MODULE_NAME' => 'Ang mga gawain sa proyekto',
    'LBL_MODULE_TITLE' => 'Gawain ng Proyekto: Tahanan',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Id ng Gawain ng Proyekto:',
    'LBL_PROJECT_ID' => 'Id ng Proyekto:',
    'LBL_DATE_ENTERED' => 'Ang Petsa ng Pagkagawa:',
    'LBL_DATE_MODIFIED' => 'Huling binago:',
    'LBL_ASSIGNED_USER_ID' => 'Naitalaga Kay:',
    'LBL_MODIFIED_USER_ID' => 'Nabago na Id ng gumagamit:',
    'LBL_CREATED_BY' => 'Nilikha Ni:',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_DATE_DUE' => 'Ang nakatakdang petsa:',
    'LBL_TIME_DUE' => 'Ang Nakatakdang Oras:',
    'LBL_PREDECESSORS' => 'Ang hinalinhan',
    'LBL_DATE_START' => 'Magsimula sa petsa:',
    'LBL_DATE_FINISH' => 'Ang Petsa na Natapos:',
    'LBL_TIME_START' => 'Oras ng simula:',
    'LBL_TIME_FINISH' => 'Ang Oras na Natapos:',
    'LBL_DURATION' => 'Tagal:',
    'LBL_DURATION_UNIT' => 'Ang Tagal ng Yunit:',
    'LBL_ACTUAL_DURATION' => 'Aktwal na Tagal:',
    'LBL_PARENT_ID' => 'Proyekto:',
    'LBL_PARENT_TASK_ID' => 'Id sa Gawain ng Magulang:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_DESCRIPTION' => 'Mga tala:',
    'LBL_ORDER_NUMBER' => 'Pagkasunod-sunod:',
    'LBL_TASK_NUMBER' => 'Ang Numero ng Gawain:',
    'LBL_TASK_ID' => 'Ang gawain ng ID:',
    'LBL_MILESTONE_FLAG' => 'Milyahe:',
    'LBL_ESTIMATED_EFFORT' => 'Ang tantiyahin na Sikap (oras):',
    'LBL_ACTUAL_EFFORT' => 'Aktwal na Sikap (oras):',
    'LBL_UTILIZATION' => 'Paggamit (%):',
    'LBL_DELETED' => 'Nabura:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_PARENT_NAME' => 'Proyekto',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% na kumpleto',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ang Nakatalaga sa',
    'LBL_LIST_DATE_DUE' => 'Ang petsa ng tinakda',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_CLOSE' => 'Sarado',
    'LBL_PROJECT_NAME' => 'Pangalan ng proyekto',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Lumikha ng proyekto',
    'LNK_PROJECT_LIST' => 'Listahan ng Proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Gumawa ng Gawain ng Proyekto',
    'LNK_PROJECT_TASK_LIST' => 'Ang mga gawain sa proyekto',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Ang aking mga gawain sa proyekto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga gawain sa proyekto',
    'LBL_NEW_FORM_TITLE' => 'Bagong gawain sa proyekto',

    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',

    'LBL_ASSIGNED_USER_NAME' => 'Ang Nakatalaga sa',
    'LBL_PARENT_NAME' => 'Pangalan ng proyekto',
    'LBL_EDITLAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Takdang Panahon',

    'LBL_SUBTASK' => 'Pangalawang gawain',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Ang mga araw',
    'LBL_HOURS' => 'Ang mga oras',
    'LBL_RELATIONSHIP_TYPE' => 'Uri ng relasyon',

    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
