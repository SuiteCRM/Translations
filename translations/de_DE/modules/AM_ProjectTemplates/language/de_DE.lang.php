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
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Projektmanager',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellt am',
    'LBL_DATE_MODIFIED' => 'Geändert am',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Vorlagenname',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_LIST_FORM_TITLE' => 'Liste Projektvorlagen',
    'LBL_MODULE_NAME' => 'Projektvorlagen',
    'LBL_MODULE_TITLE' => 'Projektvorlagen',
    'LBL_HOMEPAGE_TITLE' => 'Meine Projektvorlagen',
    'LNK_NEW_RECORD' => 'Neue Projektvorlage erstellen',
    'LNK_LIST' => 'Projektvorlage anzeigen',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importiere Projektvorlage',
    'LBL_SEARCH_FORM_TITLE' => 'Suche Projektvorlage',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neue Projektvorlage',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priorität',
    'LBL_PROJECT_NAME' => 'Projektname',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_CREATE_PROJECT_TITLE' => 'Neues Projekt aus dieser Vorlage erzeugen?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Aufgabenvorlage',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Benutzer',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakte',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Ressourcen auswählen',
    'LBL_NEW_PROJECT_CREATED' => 'Neues Projekt erstellt',
    'LBL_NEW_PROJECT' => 'Neues Projekt',
    'LBL_CANCEL_PROJECT' => 'Abbrechen',

    'LBL_SUBTASK' => 'Aufgabe',
    'LBL_MILESTONE_FLAG' => 'Meilenstein',
    'LBL_RELATIONSHIP_TYPE' => 'Beziehungstyp',
    'LBL_LAG' => 'Verzögerung',
    'LBL_DAYS' => 'Tage',
    'LBL_HOURS' => 'Stunden',
    'LBL_MONTHS' => 'Monate',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektaufgaben',
    'LBL_VIEW_GANTT_TITLE' => 'Gantt ansehen',
    'LBL_VIEW_GANTT_DURATION' => 'Dauer',
    'LBL_TASK_TITLE' => 'Aufgabe bearbeiten',
    'LBL_DURATION_TITLE' => 'Dauer bearbeiten',
    'LBL_DESCRIPTION' => 'Notizen',
    'LBL_ASSIGNED_USER_ID' => 'Zugewiesen an:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektmanager',
    'LBL_UNASSIGNED' => 'Nicht zugewiesen',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ressourcen',
    'LBL_DELETE_TASK' => 'Aufgabe löschen',
    'LBL_VIEW_DETAIL' => 'Details anzeigen',
    'LBL_ADD_NEW_TASK' => 'Neue Aufgabe hinzufügen',
    'LBL_ASSIGNED_USER_NAME' => 'Projektleiter:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Aufgabenname',
    'LBL_DURATION' => 'Dauer',
    'LBL_ACTUAL_DURATION' => 'Aktuelle Dauer',
    'LBL_START' => 'Starten',
    'LBL_FINISH' => 'Ende',
    'LBL_PREDECESSORS' => 'Vorgänger',
    'LBL_PERCENT_COMPLETE' => 'Fortschritt (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Aufgabeneingeschaften bearbeiten',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Arbeitstage berücksichtigen',
    'LBL_COPY_ALL_TASKS' => 'Kopiert alle Aufgaben mit ihren Resourcen',
    'LBL_COPY_SEL_TASKS' => 'Kopiert alle ausgewählten Aufgaben mit ihren Resourcen',
    'LBL_TOOLTIP_TITLE' => 'Tipp',
    'LBL_TOOLTIP_TEXT' => 'Kopiert alle Aufgaben mit ihren zugeordneten Benutzern',

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
    'LBL_NONE' => 'Kein(e)',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projektvorlagen: Projekt von Projekttitel',


);
