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
    'LBL_MODULE_TITLE' => 'Projekti: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje projekata',
    'LBL_LIST_FORM_TITLE' => 'Lista projekata',
    'LBL_HISTORY_TITLE' => 'Povijest',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Datum stvaranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_ASSIGNED_USER_ID' => 'Dodijeljeno:',
    'LBL_ASSIGNED_USER_NAME' => 'Projektni menadžer:',
    'LBL_MODIFIED_USER_ID' => 'Id izmijenjenog korisnika:',
    'LBL_CREATED_BY' => 'Kreirano od:',
    'LBL_NAME' => 'Naziv:',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Izbrisano:',
    'LBL_DATE' => 'Datum:',
    'LBL_DATE_START' => 'Početni datum:',
    'LBL_DATE_END' => 'Krajnji datum:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Ukupni procijenjeni napor (sati)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Ukupni stvarni napor (sati)',
    'LBL_LIST_END_DATE' => 'Krajnji datum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektni zadaci',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Prilike',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nijedan',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novi projekt',
    'LNK_NEW_PROJECT' => 'Kreiraj projekt',
    'LNK_PROJECT_LIST' => 'Pregledaj listu projekata',
    'LNK_NEW_PROJECT_TASK' => 'Kreiraj projektni zadatak',
    'LNK_PROJECT_TASK_LIST' => 'Pregledaj projektne zadatke',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Povijest',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tvrtke',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prilike',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugovi',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ime Zadatka',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Stvarno trajanje',
    'LBL_START' => 'Započni',
    'LBL_FINISH' => 'Završi',
    'LBL_PREDECESSORS' => 'Prethodnici',
    'LBL_PERCENT_COMPLETE' => '% Dovršeno',
    'LBL_MORE' => 'Više...',
    'LBL_OPPORTUNITIES' => 'Prilike',
    'LBL_NEXT_WEEK' => 'Sljedeće',
    'LBL_PROJECT_INFORMATION' => 'Pregled projekta',
    'LBL_EDITLAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektni zadaci',
    'LBL_VIEW_GANTT_TITLE' => 'Pogledaj Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Uredi zadatak',
    'LBL_DURATION_TITLE' => 'Uredi trajanje',
    'LBL_LAG' => 'Zaostatak',
    'LBL_DAYS' => 'dana',
    'LBL_HOURS' => 'sati',
    'LBL_MONTHS' => 'mjeseci',
    'LBL_SUBTASK' => 'Zadatak',
    'LBL_MILESTONE_FLAG' => 'Prekretnica',
    'LBL_ADD_NEW_TASK' => 'Dodaj novi zadatak',
    'LBL_DELETE_TASK' => 'Izbriši zadatak',
    'LBL_EDIT_TASK_PROPERTIES' => 'Uredi svojstva zadatka',
    'LBL_PARENT_TASK_ID' => 'ID matičnog zadatka',
    'LBL_RESOURCE_CHART' => 'Kalendar resursa',
    'LBL_RELATIONSHIP_TYPE' => 'Tip relacije',
    'LBL_ASSIGNED_TO' => 'Projektni menadžer',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Predložak projekta',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektni menadžer',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekt',
    'LBL_TOOLTIP_TASK_NAME' => 'Ime Zadatka',
    'LBL_TOOLTIP_TITLE' => 'Zadaci ovog dana',
    'LBL_TOOLTIP_TASK_DURATION' => 'Trajanje',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resurs je korisnik',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resurs je kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Prethodni mjesec',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sljedeći mjesec',
    'LBL_RESOURCE_CHART_WEEK' => 'Tjedan',
    'LBL_RESOURCE_CHART_DAY' => 'Dan',
    'LBL_RESOURCE_CHART_WARNING' => 'Niti jedan resurs nije dodijeljen ovom projektu.',
    'LBL_PROJECT_DELETE_MSG' => 'Jestle li sigurni želite li izbrisati ovaj Projekt i njegove srodne zadatke?',
    'LBL_LIST_MY_PROJECT' => 'Moji projekti',
    'LBL_LIST_ASSIGNED_USER' => 'Projektni menadžer',
    'LBL_UNASSIGNED' => 'Nedodijeljeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',

    'LBL_EMAIL' => 'e-pošta',
    'LBL_PHONE' => 'Uredski telefon:',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodavanje resursa',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Prezime',
    'LBL_SEARCH_BUTTON' => 'Pretraživanje',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nažalost nisu pronađeni rezultati.',
    'LBL_CREATE_INVITEE' => 'Kreiranje resursa',
    'LBL_CREATE_CONTACT' => 'Kao kontakt',
    'LBL_CREATE_AND_ADD' => 'Kreiraj i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Odustani',
    'LBL_NO_ACCESS' => 'Nemate pristup kreiranju $modula',
    'LBL_SCHEDULING_FORM_TITLE' => 'Popis resursa',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_VIEW_DETAIL' => 'Pregledaj detalje',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Uzmite u obzir radne dane',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Pretraživanje',

    'LBL_CHART_TYPE' => 'Tip',
    'LBL_CHART_WEEKLY' => 'tjedno',
    'LBL_CHART_MONTHLY' => 'mjesečno',
    'LBL_CHART_QUARTERLY' => 'Kvartalno',

    'LBL_RESOURCE_CHART_MONTH' => 'Mjesec',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'uzlazno',
    'LBL_DESCENDING' => 'silazno',
);
