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
    'LBL_NAME' => 'Název:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DELETED' => 'Smazáno:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Datum začátku:',
    'LBL_DATE_END' => 'Ukončeno:',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Odhadovaná celková práce (hodin)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Aktuální celková práce (hodin)',
    'LBL_LIST_END_DATE' => 'Ukončeno',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Úkoly projektů',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Příležitosti',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Žádný',
    'LBL_ALL_PROJECTS' => 'Všechny projekty',
    'LBL_ALL_USERS' => 'Všichni uživatelé',
    'LBL_ALL_CONTACTS' => 'Všechny kontakty',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nový projekt',
    'LNK_NEW_PROJECT' => 'Přidat projekt',
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
    'LBL_DURATION' => 'Doba trvání',
    'LBL_ACTUAL_DURATION' => 'Aktuální doba',
    'LBL_START' => 'Začátek',
    'LBL_FINISH' => 'Ukončit',
    'LBL_PREDECESSORS' => 'Předchůdci',
    'LBL_PERCENT_COMPLETE' => 'Splněno procent (%)',
    'LBL_MORE' => 'Více ...',
    'LBL_OPPORTUNITIES' => 'Příležitosti',
    'LBL_NEXT_WEEK' => 'Další',
    'LBL_PROJECT_INFORMATION' => 'Projektový přehled',
    'LBL_EDITLAYOUT' => 'Úprava rozvržení' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Úkoly projektů',
    'LBL_VIEW_GANTT_TITLE' => 'Zobrazit Ganttův diagram',
    'LBL_VIEW_GANTT_DURATION' => 'Doba trvání',
    'LBL_TASK_TITLE' => 'Upravit úkol',
    'LBL_DURATION_TITLE' => 'Upravit dobu trvání',
    'LBL_LAG' => 'Prodleva',
    'LBL_DAYS' => 'Dny',
    'LBL_HOURS' => 'Hodiny',
    'LBL_MONTHS' => 'Měsíce',
    'LBL_SUBTASK' => 'Úkol',
    'LBL_MILESTONE_FLAG' => 'Milník',
    'LBL_ADD_NEW_TASK' => 'Přidat nový úkol',
    'LBL_DELETE_TASK' => 'Odstranit úkol',
    'LBL_EDIT_TASK_PROPERTIES' => 'Upravit vlastnosti úkolu.',
    'LBL_PARENT_TASK_ID' => 'ID nadřazeného úkolu',
    'LBL_RESOURCE_CHART' => 'Kalendář zdrojů',
    'LBL_RELATIONSHIP_TYPE' => 'Typ vztahu',
    'LBL_ASSIGNED_TO' => 'Vedoucí projektu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Šablona projektu',
    'LBL_STATUS' => 'Stav:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Vedoucí projektu',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Název úkolu',
    'LBL_TOOLTIP_TITLE' => 'Úkoly na tento den',
    'LBL_TOOLTIP_TASK_DURATION' => 'Doba trvání',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Zdroj je uživatel',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Zdroj je kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Předchozí měsíc',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Příští měsíc',
    'LBL_RESOURCE_CHART_WEEK' => 'Týden',
    'LBL_RESOURCE_CHART_DAY' => 'Den',
    'LBL_RESOURCE_CHART_WARNING' => 'K projektu nebyly přiřazeny žádné zdroje.',
    'LBL_PROJECT_DELETE_MSG' => 'Opravdu chcete odstranit tento Projekt a související úkoly?',
    'LBL_LIST_MY_PROJECT' => 'Mé projekty',
    'LBL_LIST_ASSIGNED_USER' => 'Vedoucí projektu',
    'LBL_UNASSIGNED' => 'Nepřiřazeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Zdroje',

    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefon práce:',
    'LBL_ADD_BUTTON' => 'Přidat',
    'LBL_ADD_INVITEE' => 'Přidej zdroj',
    'LBL_FIRST_NAME' => 'Jméno',
    'LBL_LAST_NAME' => 'Příjmení',
    'LBL_SEARCH_BUTTON' => 'Hledat',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nebyly nalezeny žádné výsledky. Prosím vytvořte pozvání níže.',
    'LBL_CREATE_INVITEE' => 'Vytvoř zdroj',
    'LBL_CREATE_CONTACT' => 'Jako kontakt',
    'LBL_CREATE_AND_ADD' => 'Vytvořit & přidat',
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušit',
    'LBL_NO_ACCESS' => 'Nemáte oprávnění k vytvoření $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Seznam zdrojů',
    'LBL_REMOVE' => 'Odebrat',
    'LBL_VIEW_DETAIL' => 'Zobrazit detaily',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Zvažte pracovní dny',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Vyhledej projekty',
    'LBL_USERS_SEARCH' => 'Vyhledej uživatele',
    'LBL_CONTACTS_SEARCH' => 'Vyber Kontakty',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Hledat',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'Týdně',
    'LBL_CHART_MONTHLY' => 'Měsíčně',
    'LBL_CHART_QUARTERLY' => 'Čtvrtletně',

    'LBL_RESOURCE_CHART_MONTH' => 'Měsíc',
    'LBL_RESOURCE_CHART_QUARTER' => 'Čtvrtletí',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z nadpisu kontaktu',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Šablony projektů: Projekt z Nadpisu projektu',
    'LBL_AOS_QUOTES_PROJECT' => 'Nabídky: projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Vzestupně',
    'LBL_DESCENDING' => 'Sestupně',
);
