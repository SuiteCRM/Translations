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
    'LBL_MODULE_NAME' => 'Dunay Buhaton',
    'LBL_MODULE_TITLE' => 'Tahas sa Proyekto: Home',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Id sa tahas sa Proyekto:',
    'LBL_PROJECT_ID' => 'Id sa proyekto:',
    'LBL_DATE_ENTERED' => 'Adlaw nga Gihimo:',
    'LBL_DATE_MODIFIED' => 'Adlaw nga Gi-usab:',
    'LBL_ASSIGNED_USER_ID' => 'Gi-assign sa:',
    'LBL_MODIFIED_USER_ID' => 'Gi-usab nga User Id:',
    'LBL_CREATED_BY' => 'Gihimo ni:',
    'LBL_NAME' => 'Pangalan:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DATE_DUE' => 'Gitakdang petsa:',
    'LBL_TIME_DUE' => 'Gitakdang oras:',
    'LBL_PREDECESSORS' => 'Gisundan',
    'LBL_DATE_START' => 'Sugod nga Petsa:',
    'LBL_DATE_FINISH' => 'Petsa sa paghuman:',
    'LBL_TIME_START' => 'Sugod nga Oras:',
    'LBL_TIME_FINISH' => 'Oras sa paghuman:',
    'LBL_DURATION' => 'Kadugayon:',
    'LBL_DURATION_UNIT' => 'Unit sa gidugayon:',
    'LBL_ACTUAL_DURATION' => 'Aktwal nga gidugayon:',
    'LBL_PARENT_ID' => 'Proyekto:',
    'LBL_PARENT_TASK_ID' => 'Id sa tahas sa ginikanan:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'Prayoridad:',
    'LBL_DESCRIPTION' => 'Mga Tima-ilhan:',
    'LBL_ORDER_NUMBER' => 'Sugo:',
    'LBL_TASK_NUMBER' => 'Numero sa tahas:',
    'LBL_TASK_ID' => 'ID sa tahas:',
    'LBL_MILESTONE_FLAG' => 'Kalampusan:',
    'LBL_ESTIMATED_EFFORT' => 'Gibanabana nga paningkamot (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Aktwal nga paningkamot (hrs):',
    'LBL_UTILIZATION' => 'Paggamit (%):',
    'LBL_DELETED' => 'Gi-wagtang:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_PARENT_NAME' => 'Himoun',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Kumpleto',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Na butang sa',
    'LBL_LIST_DATE_DUE' => 'Petsa nga gitakda',
    'LBL_LIST_PRIORITY' => 'Prayoridad',
    'LBL_LIST_CLOSE' => 'Sirado',
    'LBL_PROJECT_NAME' => 'Pangan sa project',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Paghimo og Proyekto',
    'LNK_PROJECT_LIST' => 'Listahan sa Proyekto',
    'LNK_NEW_PROJECT_TASK' => 'Paghimo og Buhatunon sa Proyekto',
    'LNK_PROJECT_TASK_LIST' => 'Dunay Buhaton',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Mga tahas sa akong proyekto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Dunay Buhaton',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong tahas sa proyekto',

    'LBL_HISTORY_TITLE' => 'Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',

    'LBL_ASSIGNED_USER_NAME' => 'Na butang sa',
    'LBL_PARENT_NAME' => 'Pangan sa project',
    'LBL_EDITLAYOUT' => 'I-edit ang Plano' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'Sub-tahas',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Mga Adlaw',
    'LBL_HOURS' => 'Oras',
    'LBL_RELATIONSHIP_TYPE' => 'Relasyong Sulat',

    'LBL_ASCENDING' => 'Pasaka',
    'LBL_DESCENDING' => 'Pakanaog',
);
