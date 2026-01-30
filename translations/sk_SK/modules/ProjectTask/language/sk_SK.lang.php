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
    'LBL_MODULE_NAME' => 'Projektová úloha',
    'LBL_MODULE_TITLE' => 'Úloha projektu: Domov',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'ID úlohy projektu:',
    'LBL_PROJECT_ID' => 'ID projektu:',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia:',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy:',
    'LBL_ASSIGNED_USER_ID' => 'Priradené k:',
    'LBL_MODIFIED_USER_ID' => 'Zmenil užívateľ s Id:',
    'LBL_CREATED_BY' => 'Vytvoril:',
    'LBL_NAME' => 'Meno:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DATE_DUE' => 'do dátumu',
    'LBL_TIME_DUE' => 'do času',
    'LBL_PREDECESSORS' => 'Predchodca',
    'LBL_DATE_START' => 'Dátum začiatku:',
    'LBL_DATE_FINISH' => 'Dátum ukončenia:',
    'LBL_TIME_START' => 'Čas začiatku:',
    'LBL_TIME_FINISH' => 'Čas ukončenia:',
    'LBL_DURATION' => 'Trvanie:',
    'LBL_DURATION_UNIT' => 'Jednotka trvania:',
    'LBL_ACTUAL_DURATION' => 'Aktuálna doba trvania:',
    'LBL_PARENT_ID' => 'Projekt:',
    'LBL_PARENT_TASK_ID' => 'ID nadradenej úlohy:',
    'LBL_PERCENT_COMPLETE' => 'Pokrok (%):',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_DESCRIPTION' => 'Poznámky:',
    'LBL_ORDER_NUMBER' => 'Poradie:',
    'LBL_TASK_NUMBER' => 'Číslo úlohy:',
    'LBL_TASK_ID' => 'ID úlohy:',
    'LBL_MILESTONE_FLAG' => 'Medzník:',
    'LBL_ESTIMATED_EFFORT' => 'Odhadovaná náročnosť (v hodinách):',
    'LBL_ACTUAL_EFFORT' => 'Skutočná náročnosť (v hodinách):',
    'LBL_UTILIZATION' => 'Využitie (%):',
    'LBL_DELETED' => 'Odstránené:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_PARENT_NAME' => 'Projekt',
    'LBL_LIST_PERCENT_COMPLETE' => 'Splnené (%)',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Priradený k',
    'LBL_LIST_DATE_DUE' => 'Priamy dátum',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_PROJECT_NAME' => 'Názov projektu',

    'LNK_NEW_PROJECT' => 'Nový Projekt',
    'LNK_PROJECT_LIST' => 'Zoznam projektov',
    'LNK_NEW_PROJECT_TASK' => 'Nová Projektová Úloha',
    'LNK_PROJECT_TASK_LIST' => 'Projektová úloha',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Moje úlohy projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektová úloha',
    'LBL_NEW_FORM_TITLE' => 'Nová úloha projektu',

    'LBL_HISTORY_TITLE' => 'História',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',

    'LBL_ASSIGNED_USER_NAME' => 'Priradený k',
    'LBL_PARENT_NAME' => 'Názov projektu',
    'LBL_EDITLAYOUT' => 'Upraviť rozloženie' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Časová os',

    'LBL_SUBTASK' => 'Čiastková úloha',
    'LBL_LAG' => 'Oneskorenie',
    'LBL_DAYS' => 'Dni',
    'LBL_HOURS' => 'Hodiny',
    'LBL_RELATIONSHIP_TYPE' => 'Typ väzby',

    'LBL_ASCENDING' => 'Vzostupne (A-Z)',
    'LBL_DESCENDING' => 'Zostupne (Z-A)',
);
