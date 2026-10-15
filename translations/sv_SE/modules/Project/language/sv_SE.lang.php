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
    'LBL_MODULE_TITLE' => 'Projekt: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök projekt',
    'LBL_LIST_FORM_TITLE' => 'Projektlista',
    'LBL_HISTORY_TITLE' => 'Historik',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Skapad den:',
    'LBL_DATE_MODIFIED' => 'Ändrad den:',
    'LBL_ASSIGNED_USER_ID' => 'Tilldelad till:',
    'LBL_ASSIGNED_USER_NAME' => 'Projektledare:',
    'LBL_MODIFIED_USER_ID' => 'Ändrad användaridentitet:',
    'LBL_CREATED_BY' => 'Skapad av:',
    'LBL_NAME' => 'Namn:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DELETED' => 'Borttagen:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Startdatum:',
    'LBL_DATE_END' => 'Slutdatum:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total uppskattad arbetsinsats (timmar)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total faktisk arbetsinsats (timmar)',
    'LBL_LIST_END_DATE' => 'Slutdatum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektuppgifter',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affärsmöjligheter',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Ingen',
    'LBL_ALL_PROJECTS' => 'Alla projekt',
    'LBL_ALL_USERS' => 'Alla användare',
    'LBL_ALL_CONTACTS' => 'Alla kontakter',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nytt projekt',
    'LNK_NEW_PROJECT' => 'Skapa projekt',
    'LNK_PROJECT_LIST' => 'Visa projektlista',
    'LNK_NEW_PROJECT_TASK' => 'Skapa projektuppgift',
    'LNK_PROJECT_TASK_LIST' => 'Visa projektuppgifter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekt',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Konton',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affärsmöjligheter',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fel',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Uppgiftsnamn',
    'LBL_DURATION' => 'Varaktighet',
    'LBL_ACTUAL_DURATION' => 'Faktisk varaktighet',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Slut',
    'LBL_PREDECESSORS' => 'Föregångare',
    'LBL_PERCENT_COMPLETE' => 'Andel klar',
    'LBL_MORE' => 'Mer…',
    'LBL_OPPORTUNITIES' => 'Affärsmöjligheter',
    'LBL_NEXT_WEEK' => 'Nästa',
    'LBL_PROJECT_INFORMATION' => 'Projektöversikt',
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektuppgifter',
    'LBL_VIEW_GANTT_TITLE' => 'Visa Gantt diagram',
    'LBL_VIEW_GANTT_DURATION' => 'Varaktighet',
    'LBL_TASK_TITLE' => 'Redigera uppgift',
    'LBL_DURATION_TITLE' => 'Redigera varaktighet',
    'LBL_LAG' => 'Fördröjning',
    'LBL_DAYS' => 'Dagar',
    'LBL_HOURS' => 'Timmar',
    'LBL_MONTHS' => 'Månader',
    'LBL_SUBTASK' => 'Uppgift',
    'LBL_MILESTONE_FLAG' => 'Etappmål',
    'LBL_ADD_NEW_TASK' => 'Lägg till ny uppgift',
    'LBL_DELETE_TASK' => 'Ta bort uppgift',
    'LBL_EDIT_TASK_PROPERTIES' => 'Redigera uppgiftens egenskaper.',
    'LBL_PARENT_TASK_ID' => 'Överordnad uppgiftsidentitet',
    'LBL_RESOURCE_CHART' => 'Resurskalender',
    'LBL_RELATIONSHIP_TYPE' => 'Relationstyp',
    'LBL_ASSIGNED_TO' => 'Projektledare',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projektmall',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektledare',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Uppgiftsnamn',
    'LBL_TOOLTIP_TITLE' => 'Uppgifter denna dag',
    'LBL_TOOLTIP_TASK_DURATION' => 'Varaktighet',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resursen är en användare',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resursen är en kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Föregående månad',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Nästa månad',
    'LBL_RESOURCE_CHART_WEEK' => 'Vecka',
    'LBL_RESOURCE_CHART_DAY' => 'Dag',
    'LBL_RESOURCE_CHART_WARNING' => 'Inga resurser har tilldelats ett projekt.',
    'LBL_PROJECT_DELETE_MSG' => 'Är du säker på att du vill ta bort det här projektet och dess tillhörande uppgifter?',
    'LBL_LIST_MY_PROJECT' => 'Mina projekt',
    'LBL_LIST_ASSIGNED_USER' => 'Projektledare',
    'LBL_UNASSIGNED' => 'Inte tilldelad',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resurser',

    'LBL_EMAIL' => 'E-post',
    'LBL_PHONE' => 'Arbetstelefon:',
    'LBL_ADD_BUTTON' => 'Lägg till',
    'LBL_ADD_INVITEE' => 'Lägg till resurs',
    'LBL_FIRST_NAME' => 'Förnamn',
    'LBL_LAST_NAME' => 'Efternamn',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr hittades inga resultat. Skapa en inbjuden person nedan.',
    'LBL_CREATE_INVITEE' => 'Skapa en resurs',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_AND_ADD' => 'Skapa och lägg till',
    'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
    'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resurslista',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_VIEW_DETAIL' => 'Visa detaljer',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Ta hänsyn till arbetsdagar',

    'LBL_IMPORT_PROJECTS' => 'Importera projekt',

    'LBL_PROJECTS_SEARCH' => 'Sök projekt',
    'LBL_USERS_SEARCH' => 'Sök användare',
    'LBL_CONTACTS_SEARCH' => 'Välj kontakter',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Sök',

    'LBL_CHART_TYPE' => 'Typ',
    'LBL_CHART_WEEKLY' => 'Varje vecka',
    'LBL_CHART_MONTHLY' => 'Varje månad',
    'LBL_CHART_QUARTERLY' => 'Varje kvartal',

    'LBL_RESOURCE_CHART_MONTH' => 'Månad',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kvartal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projektkontakter från kontaktens rubrik',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Projektmallar: projekt från projektrubrik',
    'LBL_AOS_QUOTES_PROJECT' => 'Offerter: projekt',
    'LBL_TASKS_NOT_FOUND' => 'Det finns inga uppgifter att bygga Gantt tabellen från',


    'LBL_ASCENDING' => 'Stigande',
    'LBL_DESCENDING' => 'Fallande',
);
