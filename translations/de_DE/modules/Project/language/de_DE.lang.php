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
    'LBL_MODULE_TITLE' => 'Projekte: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Projekte Suche',
    'LBL_LIST_FORM_TITLE' => 'Projektliste',
    'LBL_HISTORY_TITLE' => 'Verlauf',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Erstellt am:',
    'LBL_DATE_MODIFIED' => 'Geändert am:',
    'LBL_ASSIGNED_USER_ID' => 'Zugewiesen an:',
    'LBL_ASSIGNED_USER_NAME' => 'Projektleiter:',
    'LBL_MODIFIED_USER_ID' => 'Geänder von:',
    'LBL_CREATED_BY' => 'Erstellt von:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DELETED' => 'Gelöscht:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_DATE_END' => 'Enddatum:',
    'LBL_PRIORITY' => 'Priorität:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Gesamtaufwand geplant (Std)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Gesamtaufwand tats. (Std)',
    'LBL_LIST_END_DATE' => 'Enddatum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Kein(e)',
    'LBL_ALL_PROJECTS' => 'Alle Projekte',
    'LBL_ALL_USERS' => 'Alle Benutzer',
    'LBL_ALL_CONTACTS' => 'Alle Kontakte',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Neues Projekt',
    'LNK_NEW_PROJECT' => 'Neues Projekt',
    'LNK_PROJECT_LIST' => 'Projektliste',
    'LNK_NEW_PROJECT_TASK' => 'Neue Projektaufgabe',
    'LNK_PROJECT_TASK_LIST' => 'Projektaufgaben',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekte',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_CASES_SUBPANEL_TITLE' => 'Fälle',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Aufgabenname',
    'LBL_DURATION' => 'Dauer',
    'LBL_ACTUAL_DURATION' => 'Aktuelle Dauer',
    'LBL_START' => 'Starten',
    'LBL_FINISH' => 'Ende',
    'LBL_PREDECESSORS' => 'Vorgänger',
    'LBL_PERCENT_COMPLETE' => 'Fortschritt (%)',
    'LBL_MORE' => 'Mehr...',
    'LBL_OPPORTUNITIES' => 'Verkaufschancen',
    'LBL_NEXT_WEEK' => 'Weiter',
    'LBL_PROJECT_INFORMATION' => 'Projektübersicht',
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt ansehen',
    'LBL_VIEW_GANTT_DURATION' => 'Dauer',
    'LBL_TASK_TITLE' => 'Aufgabe bearbeiten',
    'LBL_DURATION_TITLE' => 'Dauer bearbeiten',
    'LBL_LAG' => 'Verzögerung',
    'LBL_DAYS' => 'Tage',
    'LBL_HOURS' => 'Stunden',
    'LBL_MONTHS' => 'Monate',
    'LBL_SUBTASK' => 'Aufgabe',
    'LBL_MILESTONE_FLAG' => 'Meilenstein',
    'LBL_ADD_NEW_TASK' => 'Neue Aufgabe hinzufügen',
    'LBL_DELETE_TASK' => 'Aufgabe löschen',
    'LBL_EDIT_TASK_PROPERTIES' => 'Aufgabeneingeschaften bearbeiten',
    'LBL_PARENT_TASK_ID' => 'Übergeordnete Aufgaben-ID',
    'LBL_RESOURCE_CHART' => 'Ressourcenkalender',
    'LBL_RELATIONSHIP_TYPE' => 'Beziehungstyp',
    'LBL_ASSIGNED_TO' => 'Projektmanager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projektvorlage',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektmanager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Aufgabenname',
    'LBL_TOOLTIP_TITLE' => 'Aufgaben an diesem Tag',
    'LBL_TOOLTIP_TASK_DURATION' => 'Dauer',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ressource ist ein Benutzer',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ressource ist ein Kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Vorheriger Monat',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Nächster Monat',
    'LBL_RESOURCE_CHART_WEEK' => 'Woche',
    'LBL_RESOURCE_CHART_DAY' => 'Tag',
    'LBL_RESOURCE_CHART_WARNING' => 'Keine Ressourcen wurden einem Projekt zugeordnet',
    'LBL_PROJECT_DELETE_MSG' => 'Sind Sie sicher, dass Sie dieses Projekt mit seinen Aufgaben löschen möchten?',
    'LBL_LIST_MY_PROJECT' => 'Meine Projekte',
    'LBL_LIST_ASSIGNED_USER' => 'Projektmanager',
    'LBL_UNASSIGNED' => 'Nicht zugewiesen',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressourcen',

    'LBL_EMAIL' => 'E-Mail',
    'LBL_PHONE' => 'Telefon Büro:',
    'LBL_ADD_BUTTON' => 'Hinzufügen',
    'LBL_ADD_INVITEE' => 'Ressource erstellen',
    'LBL_FIRST_NAME' => 'Vorname',
    'LBL_LAST_NAME' => 'Nachname',
    'LBL_SEARCH_BUTTON' => 'Suchen',
    'LBL_EMPTY_SEARCH_RESULT' => 'Keine Resultate gefunden, bitte unten einen Teilnehmer erstellen.',
    'LBL_CREATE_INVITEE' => 'Ressource erstellen',
    'LBL_CREATE_CONTACT' => 'Als Kontakt',
    'LBL_CREATE_AND_ADD' => 'Erstellen und hinzufügen',
    'LBL_CANCEL_CREATE_INVITEE' => 'Abbrechen',
    'LBL_NO_ACCESS' => 'Sie haben keine Berechtigung, $module zu erstellen',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ressourcen-Liste',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_VIEW_DETAIL' => 'Details anzeigen',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Arbeitstage berücksichtigen',

    'LBL_IMPORT_PROJECTS' => 'Projekte importieren',

    'LBL_PROJECTS_SEARCH' => 'Suche Projekte',
    'LBL_USERS_SEARCH' => 'Suche Benutzer',
    'LBL_CONTACTS_SEARCH' => 'Kontakte auswählen',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Suchen',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'Wöchentlich',
    'LBL_CHART_MONTHLY' => 'Monatlich',
    'LBL_CHART_QUARTERLY' => 'Vierteljährlich',

    'LBL_RESOURCE_CHART_MONTH' => 'Monat',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quartal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekt Kontakte aus Kontaktetitel',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projektvorlagen: Projekt von Projekttitel',
    'LBL_AOS_QUOTES_PROJECT' => 'Angebote: Projekt',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Aufsteigend',
    'LBL_DESCENDING' => 'Absteigend',
);
