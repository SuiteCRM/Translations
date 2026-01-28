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
    'LBL_MODULE_NAME' => 'Úkoly projektů',
    'LBL_MODULE_TITLE' => 'Úkoly projektu: Domů',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'ID úkolu projektu:',
    'LBL_PROJECT_ID' => 'ID projektu:',
    'LBL_DATE_ENTERED' => 'Datum vytvoření:',
    'LBL_DATE_MODIFIED' => 'Datum změny:',
    'LBL_ASSIGNED_USER_ID' => 'Přiřazeno k:',
    'LBL_MODIFIED_USER_ID' => 'Změnil Id:',
    'LBL_CREATED_BY' => 'Vytvořil:',
    'LBL_NAME' => 'Název:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DATE_DUE' => 'Do data:',
    'LBL_TIME_DUE' => 'Udělat do (čas):',
    'LBL_PREDECESSORS' => 'Předchůdci:',
    'LBL_DATE_START' => 'Datum začátku:',
    'LBL_DATE_FINISH' => 'Datum ukončení:',
    'LBL_TIME_START' => 'Čas začátku:',
    'LBL_TIME_FINISH' => 'Čas ukončení:',
    'LBL_DURATION' => 'Doba trvání:',
    'LBL_DURATION_UNIT' => 'Jednotka trvání:',
    'LBL_ACTUAL_DURATION' => 'Aktuální doba:',
    'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'ID nadřazeného úkolu:',
    'LBL_PERCENT_COMPLETE' => 'Splněno procent (%):',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_DESCRIPTION' => 'Poznámky:',
    'LBL_ORDER_NUMBER' => 'Pořadí:',
    'LBL_TASK_NUMBER' => 'Číslo úkolu:',
    'LBL_TASK_ID' => 'ID úkolu:',
    'LBL_MILESTONE_FLAG' => 'Mezník:',
    'LBL_ESTIMATED_EFFORT' => 'Odhadovaná náročnost (hodin):',
    'LBL_ACTUAL_EFFORT' => 'Skutečná náročnost (hodin):',
    'LBL_UTILIZATION' => 'Utilizace (%):',
    'LBL_DELETED' => 'Smazáno:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_PARENT_NAME' => 'Projekt',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => 'Splněno procent (%)',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Přiřazeno k',
    'LBL_LIST_DATE_DUE' => 'Do data',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_PROJECT_NAME' => 'Název projektu',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Přidat projekt',
    'LNK_PROJECT_LIST' => 'Seznam projektů',
    'LNK_NEW_PROJECT_TASK' => 'Vytvořit úkol projektu',
    'LNK_PROJECT_TASK_LIST' => 'Úkoly projektů',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Moje úkoly projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Úkoly projektů',
    'LBL_NEW_FORM_TITLE' => 'Nové úkoly projektu',

    'LBL_HISTORY_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',

    'LBL_ASSIGNED_USER_NAME' => 'Přiřazeno k',
    'LBL_PARENT_NAME' => 'Název projektu',
    'LBL_EDITLAYOUT' => 'Úprava rozvržení' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Časová osa',

    'LBL_SUBTASK' => 'Dílčí úkol',
    'LBL_LAG' => 'Prodleva',
    'LBL_DAYS' => 'Dny',
    'LBL_HOURS' => 'Hodiny',
    'LBL_RELATIONSHIP_TYPE' => 'Typ vztahu',

    'LBL_ASCENDING' => 'Vzestupně',
    'LBL_DESCENDING' => 'Sestupně',
);
