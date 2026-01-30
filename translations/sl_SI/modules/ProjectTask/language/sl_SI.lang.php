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
    'LBL_MODULE_NAME' => 'Projektne naloge',
    'LBL_MODULE_TITLE' => 'Projektne naloge: Domov',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'ID projektne naloge:',
    'LBL_PROJECT_ID' => 'ID projakta:',
    'LBL_DATE_ENTERED' => 'Vnešeno dne:',
    'LBL_DATE_MODIFIED' => 'Spremenjeno dne:',
    'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',
    'LBL_MODIFIED_USER_ID' => 'Spremenil (ID):',
    'LBL_CREATED_BY' => 'Ustvaril:',
    'LBL_NAME' => 'Ime:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_DATE_DUE' => 'Datum zaključka:',
    'LBL_TIME_DUE' => 'Čas zaključka:',
    'LBL_PREDECESSORS' => 'Predhodniki:',
    'LBL_DATE_START' => 'Datum začetka:',
    'LBL_DATE_FINISH' => 'Datum zaključka:',
    'LBL_TIME_START' => 'Čas začetka:',
    'LBL_TIME_FINISH' => 'Čas zaključka:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_DURATION_UNIT' => 'Enota trajanja:',
    'LBL_ACTUAL_DURATION' => 'Dejasnko trajanje:',
    'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'Id nadrejene naloge: ',
    'LBL_PERCENT_COMPLETE' => 'Napredek (%):',
    'LBL_PRIORITY' => 'Prioreta:',
    'LBL_DESCRIPTION' => 'Opombe:',
    'LBL_ORDER_NUMBER' => 'Vrstni red:',
    'LBL_TASK_NUMBER' => 'Številka naloge:',
    'LBL_TASK_ID' => 'ID naloge:',
    'LBL_MILESTONE_FLAG' => 'Prelomnica:',
    'LBL_ESTIMATED_EFFORT' => 'Predvideno dela (ure):',
    'LBL_ACTUAL_EFFORT' => 'Dejansko potrošen čas (ure):',
    'LBL_UTILIZATION' => 'Izkoristek (%):',
    'LBL_DELETED' => 'Zbrisano:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PARENT_NAME' => 'Projekti',
    'LBL_LIST_PERCENT_COMPLETE' => 'Napredek (%)',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Dodeljeno',
    'LBL_LIST_DATE_DUE' => 'Datum zaključka',
    'LBL_LIST_PRIORITY' => 'Prioriteta',
    'LBL_LIST_CLOSE' => 'Zapri',
    'LBL_PROJECT_NAME' => 'Ime nadrejenega',

    'LNK_NEW_PROJECT' => 'Ustvari projekt',
    'LNK_PROJECT_LIST' => 'Seznam projektov',
    'LNK_NEW_PROJECT_TASK' => 'Ustvari novo projektno nalogo',
    'LNK_PROJECT_TASK_LIST' => 'Projektne naloge',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Moje odprte projektne naloge',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektne naloge',
    'LBL_NEW_FORM_TITLE' => 'Nova projektna naloga',

    'LBL_HISTORY_TITLE' => 'Zgodovina',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',

    'LBL_ASSIGNED_USER_NAME' => 'Dodeljeno',
    'LBL_PARENT_NAME' => 'Ime nadrejenega',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Časovnica',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Ur',
    'LBL_RELATIONSHIP_TYPE' => 'Tip razmerja',

    'LBL_ASCENDING' => 'Naraščajoče',
    'LBL_DESCENDING' => 'Padajče',
);
