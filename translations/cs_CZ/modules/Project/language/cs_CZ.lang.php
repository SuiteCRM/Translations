<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_TITLE' => 'Projekty: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat projekt',
    'LBL_LIST_FORM_TITLE' => 'Seznam projektů',
    'LBL_HISTORY_TITLE' => 'Historie',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Datum vytvoření:',
    'LBL_DATE_MODIFIED' => 'Datum změny:',
    'LBL_ASSIGNED_USER_ID' => 'Přiřazeno k:',
    'LBL_ASSIGNED_USER_NAME' => 'Vedoucí projektu:',
    'LBL_MODIFIED_USER_ID' => 'Změnil Id:',
    'LBL_CREATED_BY' => 'Vytvořil:',
    'LBL_NAME' => 'Jméno:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DELETED' => 'Smazáno:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Datum zahájení:',
    'LBL_DATE_END' => 'Datum ukončení:',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Odhadovaná celková práce (hodin)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktuální celková práce (hodin)',
    'LBL_LIST_END_DATE' => 'Datum ukončení',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Úkoly projektů',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Příležitosti',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Žádný',
    'LBL_ALL_PROJECTS' => 'Všechny projekty',
    'LBL_ALL_USERS' => 'Všichni uživatelé',
    'LBL_ALL_CONTACTS' => 'Všechny kontakty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nový projekt',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Seznam projektů',
    'LNK_NEW_PROJECT_TASK' => 'Vytvořit úkol projektu',
    'LNK_PROJECT_TASK_LIST' => 'Zobrazit úkoly projektu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Příležitosti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Název úkolu',
    'LBL_DURATION' => 'Trvání',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Začátek',
    'LBL_FINISH' => 'Dokončit',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Více ...',
    'LBL_OPPORTUNITIES' => 'Příležitosti',
    'LBL_NEXT_WEEK' => 'Další',
    'LBL_PROJECT_INFORMATION' => 'Projektový přehled',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Úkoly projektu',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trvání',
    'LBL_TASK_TITLE' => 'Upravit úkol',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Dny',
    'LBL_HOURS' => 'Hodiny',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Úkol',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Přidat nový úkol',
    'LBL_DELETE_TASK' => 'Odstranit úkol',
    'LBL_EDIT_TASK_PROPERTIES' => 'Upravit vlastnosti úkolu.',
    'LBL_PARENT_TASK_ID' => 'ID nadřazeného úkolu',
    'LBL_RESOURCE_CHART' => 'Kalendář zdrojů',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Vedoucí projektu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Šablona projektu',
    'LBL_STATUS' => 'Stav:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Vedoucí projektu',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Název úkolu',
    'LBL_TOOLTIP_TITLE' => 'Úkoly na tento den',
    'LBL_TOOLTIP_TASK_DURATION' => 'Trvání',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Zdroj je uživatel',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Zdroj je kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Příští měsíc',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Den',
    'LBL_RESOURCE_CHART_WARNING' => 'K projektu nebyly přiřazeny žádné zdroje.',
    'LBL_PROJECT_DELETE_MSG' => 'Opravdu chcete odstranit tento Projekt a související úkoly?',
    'LBL_LIST_MY_PROJECT' => 'Mé projekty',
    'LBL_LIST_ASSIGNED_USER' => 'Vedoucí projektu',
    'LBL_UNASSIGNED' => 'Nepřiřazeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Přidat',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'Jméno',
    'LBL_LAST_NAME' => 'Příjmení',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušit',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Odstranit',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Zvážit pracovní dny',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Vyhledej projekty',
    'LBL_USERS_SEARCH' => 'Vyhledej uživatele',
    'LBL_CONTACTS_SEARCH' => 'Vyber Kontakty',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'Týdně',
    'LBL_CHART_MONTHLY' => 'Měsíčně',
    'LBL_CHART_QUARTERLY' => 'Čtvrtletně',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Čtvrtletí',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z nadpisu kontaktu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Šablony projektů: Projekt z Nadpisu projektu',
    'LBL_AOS_QUOTES_PROJECT' => 'Nabídky: projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Vzestupně',
    'LBL_DESCENDING' => 'Sestupně',
);
