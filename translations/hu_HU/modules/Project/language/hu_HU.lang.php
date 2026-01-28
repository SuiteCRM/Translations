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
    'LBL_MODULE_NAME' => 'Projekt',
    'LBL_MODULE_TITLE' => 'Projektek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Projekt keresése',
    'LBL_LIST_FORM_TITLE' => 'Projektlista',
    'LBL_HISTORY_TITLE' => 'Előzmények',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma:',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma:',
    'LBL_ASSIGNED_USER_ID' => 'Felelős:',
    'LBL_ASSIGNED_USER_NAME' => 'Projekt felelős:',
    'LBL_MODIFIED_USER_ID' => 'Módosító felhasználó ID:',
    'LBL_CREATED_BY' => 'Létrehozta:',
    'LBL_NAME' => 'Név:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DELETED' => 'Törölve:',
    'LBL_DATE' => 'Dátum',
    'LBL_DATE_START' => 'Kezdés dátum:',
    'LBL_DATE_END' => 'Befejezés dátuma:',
    'LBL_PRIORITY' => 'Prioritás:',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Teljes becsült erőfeszítés (óra):',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Összes tényleges erőfeszítés (óra):',
    'LBL_LIST_END_DATE' => 'Végdátum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektfeladatok',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Semmi',
    'LBL_ALL_PROJECTS' => 'Összes projekt',
    'LBL_ALL_USERS' => 'Összes felhasználó',
    'LBL_ALL_CONTACTS' => 'Összes névjegy',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Új projekt',
    'LNK_NEW_PROJECT' => 'Projekt létrehozása',
    'LNK_PROJECT_LIST' => 'Projektlista megtekintése',
    'LNK_NEW_PROJECT_TASK' => 'Projektfeladat létrehozása',
    'LNK_PROJECT_TASK_LIST' => 'Projektfeladatok megtekintése',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibajegyek',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Feladat neve',
    'LBL_DURATION' => 'Időtartam',
    'LBL_ACTUAL_DURATION' => 'Tényleges időtartam',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Befejezés',
    'LBL_PREDECESSORS' => 'Előzmények',
    'LBL_PERCENT_COMPLETE' => 'Készültség (%)',
    'LBL_MORE' => 'Még több ...',
    'LBL_OPPORTUNITIES' => 'Lehetőségek',
    'LBL_NEXT_WEEK' => 'Következő',
    'LBL_PROJECT_INFORMATION' => 'Projekt áttekintése',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektfeladatok',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt nézet',
    'LBL_VIEW_GANTT_DURATION' => 'Időtartam',
    'LBL_TASK_TITLE' => 'Feladat módosítás',
    'LBL_DURATION_TITLE' => 'Időtartam módosítás',
    'LBL_LAG' => 'Késés',
    'LBL_DAYS' => 'Nap',
    'LBL_HOURS' => 'Óra',
    'LBL_MONTHS' => 'Hónapok',
    'LBL_SUBTASK' => 'Feladat',
    'LBL_MILESTONE_FLAG' => 'Mérföldkő:',
    'LBL_ADD_NEW_TASK' => 'Új feladat hozzáadás',
    'LBL_DELETE_TASK' => 'Feladat törlés',
    'LBL_EDIT_TASK_PROPERTIES' => 'Feladat tulajdonságok módosítása',
    'LBL_PARENT_TASK_ID' => 'Szülő Feladat Id',
    'LBL_RESOURCE_CHART' => 'Erőforrásnaptár',
    'LBL_RELATIONSHIP_TYPE' => 'Összefüggés Típus',
    'LBL_ASSIGNED_TO' => 'Projektmenedzser',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projekt sablon',
    'LBL_STATUS' => 'Állapot:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektmenedzser',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Feladat neve',
    'LBL_TOOLTIP_TITLE' => 'Feladatok ezen a napon',
    'LBL_TOOLTIP_TASK_DURATION' => 'Időtartam',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Forrás felhasználó',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Forrás Kapcsolattartó',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Előző hónap',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Következő hónap',
    'LBL_RESOURCE_CHART_WEEK' => 'Hét',
    'LBL_RESOURCE_CHART_DAY' => 'Nap',
    'LBL_RESOURCE_CHART_WARNING' => 'Nincsenek források rendelve a projekthez',
    'LBL_PROJECT_DELETE_MSG' => 'Biztosan törölni szeretné a projektet és a hozzá kapcsolt feladatokat?',
    'LBL_LIST_MY_PROJECT' => 'Projektjeim',
    'LBL_LIST_ASSIGNED_USER' => 'Projektmenedzser',
    'LBL_UNASSIGNED' => 'Független',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Forrás',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Irodai Telefon:',
    'LBL_ADD_BUTTON' => 'Hozzáadás',
    'LBL_ADD_INVITEE' => 'Erőforrás hozzáadása',
    'LBL_FIRST_NAME' => 'Vezetéknév',
    'LBL_LAST_NAME' => 'Keresztnév',
    'LBL_SEARCH_BUTTON' => 'Keresés',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sajnálom, nem találtam erőforrást. Kérem adjon meg legalább egy meghívottat alább.',
    'LBL_CREATE_INVITEE' => 'Erőforrás létrehozása',
    'LBL_CREATE_CONTACT' => 'kapcsolattartóként',
    'LBL_CREATE_AND_ADD' => 'létrhozás és hozzáadás',
    'LBL_CANCEL_CREATE_INVITEE' => 'Mégsem',
    'LBL_NO_ACCESS' => 'Nincs hozzáférése a $module létrehozásához',
    'LBL_SCHEDULING_FORM_TITLE' => 'Erőforráslista',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_VIEW_DETAIL' => 'Részletek megtekintése',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Adja meg a munkanapokat',

    'LBL_IMPORT_PROJECTS' => 'Projektek importálása',

    'LBL_PROJECTS_SEARCH' => 'Projektek keresése',
    'LBL_USERS_SEARCH' => 'Felhasználók keresése',
    'LBL_CONTACTS_SEARCH' => 'Kapcsolattartó választása',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Keresés',

    'LBL_CHART_TYPE' => 'Típus',
    'LBL_CHART_WEEKLY' => 'Heti',
    'LBL_CHART_MONTHLY' => 'Havi',
    'LBL_CHART_QUARTERLY' => 'Negyedéves',

    'LBL_RESOURCE_CHART_MONTH' => 'Hónap',
    'LBL_RESOURCE_CHART_QUARTER' => 'Negyedév',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekt kapcsolatok a kapcsolat címekből',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projekt-sablonok: Projekt a Projektcímből',
    'LBL_AOS_QUOTES_PROJECT' => 'Árajánlat: Projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Növekvő',
    'LBL_DESCENDING' => 'Csökkenő',
);
