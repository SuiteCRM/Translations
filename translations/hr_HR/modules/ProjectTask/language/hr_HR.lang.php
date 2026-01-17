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
    'LBL_MODULE_NAME' => 'Projektni zadaci',
    'LBL_MODULE_TITLE' => 'Projektni zadatak: Početno',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'Id projektnog zadatka',
    'LBL_PROJECT_ID' => 'Id projekta:',
    'LBL_DATE_ENTERED' => 'Datum stvaranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_ASSIGNED_USER_ID' => 'Dodijeljeno:',
    'LBL_MODIFIED_USER_ID' => 'Id izmijenjenog korisnika:',
    'LBL_CREATED_BY' => 'Kreirano od:',
    'LBL_NAME' => 'Naziv:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => 'Datum dospijeća:',
    'LBL_TIME_DUE' => 'Vrijeme dospijeća:',
    'LBL_PREDECESSORS' => 'Prethodnici:',
    'LBL_DATE_START' => 'Početni datum:',
    'LBL_DATE_FINISH' => 'Datum završetka:',
    'LBL_TIME_START' => 'Početni datum:',
    'LBL_TIME_FINISH' => 'Vrijeme završetka:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_DURATION_UNIT' => 'Jedinica trajanja:',
    'LBL_ACTUAL_DURATION' => 'Stvarno trajanje:',
    'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'Id matičnog zadatka:',
    'LBL_PERCENT_COMPLETE' => '% Dovršeno:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DESCRIPTION' => 'Bilješke:',
    'LBL_ORDER_NUMBER' => 'Narudžba:',
    'LBL_TASK_NUMBER' => 'Broj zadatka',
    'LBL_TASK_ID' => 'Id zadatka:',
    'LBL_MILESTONE_FLAG' => 'Prekretnica:',
    'LBL_ESTIMATED_EFFORT' => 'Procijenjeni trud (sati):',
    'LBL_ACTUAL_EFFORT' => 'Stvarni trud (sati):',
    'LBL_UTILIZATION' => 'Iskorištenje (%):',
    'LBL_DELETED' => 'Izbrisano:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_PARENT_NAME' => 'Projekt',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Dovršeno',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Dodijeljeno',
    'LBL_LIST_DATE_DUE' => 'Datum dospijeća',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_PROJECT_NAME' => 'Ime projekta',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Kreiraj projekt',
    'LNK_PROJECT_LIST' => 'Lista projekata',
    'LNK_NEW_PROJECT_TASK' => 'Kreiraj projektni zadatak',
    'LNK_PROJECT_TASK_LIST' => 'Projektni zadaci',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Moji projektni zadaci',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektni zadaci',
    'LBL_NEW_FORM_TITLE' => 'Novi projektni zadatak',

    'LBL_HISTORY_TITLE' => 'Povijest',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',

    'LBL_ASSIGNED_USER_NAME' => 'Dodijeljeno',
    'LBL_PARENT_NAME' => 'Ime projekta',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Vremenska linija',

    'LBL_SUBTASK' => 'Podzadatak',
    'LBL_LAG' => 'Zaostatak',
    'LBL_DAYS' => 'dana',
    'LBL_HOURS' => 'sati',
    'LBL_RELATIONSHIP_TYPE' => 'Tip Odnosa',

    'LBL_ASCENDING' => 'uzlazno',
    'LBL_DESCENDING' => 'silazno',
);
