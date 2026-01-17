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
    'LBL_MODULE_NAME' => 'Projekti',
    'LBL_MODULE_TITLE' => 'Projekti: Početna strana',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga projekata',
    'LBL_LIST_FORM_TITLE' => 'Lista projekata',
    'LBL_HISTORY_TITLE' => 'Istorija',
    'LBL_ID' => 'Id broj:',
    'LBL_DATE_ENTERED' => 'Datum kreiranja:',
    'LBL_DATE_MODIFIED' => 'Datum izmene:',
    'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',
    'LBL_ASSIGNED_USER_NAME' => 'Menadžer projekta:',
    'LBL_MODIFIED_USER_ID' => 'ID broj korisnika koji je izvršio promene:',
    'LBL_CREATED_BY' => 'Autor:',
    'LBL_NAME' => 'Ime:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DELETED' => 'Obrisano:',
    'LBL_DATE' => 'Datum',
    'LBL_DATE_START' => 'Datum početka:',
    'LBL_DATE_END' => 'Datum završetka:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Ukupan broj procenjenih radnih sati',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Ukupan broj utrošenih radnih sati',
    'LBL_LIST_END_DATE' => 'Krajnji datum',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektni Zadaci',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Prodajne prilike',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nijedno',
    'LBL_ALL_PROJECTS' => 'Svi projekti',
    'LBL_ALL_USERS' => 'Svi korisnici',
    'LBL_ALL_CONTACTS' => 'Svi kontakti',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novi projekat',
    'LNK_NEW_PROJECT' => 'Kreiraj projekat',
    'LNK_PROJECT_LIST' => 'Prikaži listu projekata',
    'LNK_NEW_PROJECT_TASK' => 'Kreiraj zadatak projekta',
    'LNK_PROJECT_TASK_LIST' => 'Prikaži projektne zadatke',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prodajne prilike',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Praćenje defekata',
    'LBL_TASK_ID' => 'ID broj',
    'LBL_TASK_NAME' => 'Ime zadatka',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Stvarno vreme trajanja',
    'LBL_START' => 'Početak',
    'LBL_FINISH' => 'Kraj',
    'LBL_PREDECESSORS' => 'Prethodnici',
    'LBL_PERCENT_COMPLETE' => '% Završenog',
    'LBL_MORE' => 'Više...',
    'LBL_OPPORTUNITIES' => 'Prodajne prilike',
    'LBL_NEXT_WEEK' => 'Sledeći',
    'LBL_PROJECT_INFORMATION' => 'Pregled projekta',
    'LBL_EDITLAYOUT' => 'Izmeni izgled' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektni Zadaci',
    'LBL_VIEW_GANTT_TITLE' => 'Prikaži Gantt tabelu',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Izmeni zadatak',
    'LBL_DURATION_TITLE' => 'Izmeni trajanje',
    'LBL_LAG' => 'Zaostatak',
    'LBL_DAYS' => 'Dana',
    'LBL_HOURS' => 'Sati',
    'LBL_MONTHS' => 'Meseci',
    'LBL_SUBTASK' => 'Zadatak',
    'LBL_MILESTONE_FLAG' => 'Prekretnica',
    'LBL_ADD_NEW_TASK' => 'Dodaj novi zadatak',
    'LBL_DELETE_TASK' => 'Izbriši zadatak',
    'LBL_EDIT_TASK_PROPERTIES' => 'Izmeni karakteristike zadatka.',
    'LBL_PARENT_TASK_ID' => 'Id broj matičnog zadatka',
    'LBL_RESOURCE_CHART' => 'Kalendar resursa',
    'LBL_RELATIONSHIP_TYPE' => 'Tip veze',
    'LBL_ASSIGNED_TO' => 'Menadžer projekta',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Šabloni za projekte',
    'LBL_STATUS' => 'Status',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Menadžer projekta',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projekti',
    'LBL_TOOLTIP_TASK_NAME' => 'Ime zadatka',
    'LBL_TOOLTIP_TITLE' => 'Zadaci ovog dana',
    'LBL_TOOLTIP_TASK_DURATION' => 'Trajanje',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resurs je korisnik',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resurs je kontakt',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Prethodni mesec',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Sledeći mesec',
    'LBL_RESOURCE_CHART_WEEK' => 'Nedelja',
    'LBL_RESOURCE_CHART_DAY' => 'Dan',
    'LBL_RESOURCE_CHART_WARNING' => 'Niti jedan resurs nije dodeljen ovom projektu.',
    'LBL_PROJECT_DELETE_MSG' => 'Jeste li sigurni da želite izbrisati ovaj Projekat i njegove srodne zadatke?',
    'LBL_LIST_MY_PROJECT' => 'Moji projekti',
    'LBL_LIST_ASSIGNED_USER' => 'Menadžer projekta',
    'LBL_UNASSIGNED' => 'Nedodeljeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Kancelarijski telefon:',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodaj resurs',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Prezime',
    'LBL_SEARCH_BUTTON' => 'Pretraga',
    'LBL_EMPTY_SEARCH_RESULT' => 'Žao nam je, nije pronađen ni jedan rezultat. Molimo kreirajte pozivnicu ispod:',
    'LBL_CREATE_INVITEE' => 'Napravi resurs',
    'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',
    'LBL_CREATE_AND_ADD' => 'Napravi i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Otkaži',
    'LBL_NO_ACCESS' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako biste dobili pristup.',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lista resursa',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_VIEW_DETAIL' => 'Prikaz detalja',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Uzmi u obzir radne dane',

    'LBL_IMPORT_PROJECTS' => 'Uvezi Projekte',

    'LBL_PROJECTS_SEARCH' => 'Pretraživanje projekata',
    'LBL_USERS_SEARCH' => 'Pretraži korisnike',
    'LBL_CONTACTS_SEARCH' => 'Izaberi kontakt',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Pretraga',

    'LBL_CHART_TYPE' => 'Tip',
    'LBL_CHART_WEEKLY' => 'Nedeljno',
    'LBL_CHART_MONTHLY' => 'Mesečno',
    'LBL_CHART_QUARTERLY' => 'Kvartalno',

    'LBL_RESOURCE_CHART_MONTH' => 'Mesec',
    'LBL_RESOURCE_CHART_QUARTER' => 'Kvartal',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Rastući',
    'LBL_DESCENDING' => 'Opadajući',
);
