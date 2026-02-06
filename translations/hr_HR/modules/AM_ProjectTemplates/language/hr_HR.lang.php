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
    'LBL_ASSIGNED_TO_ID' => 'Id dodijeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Projektni menadžer',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Kreirano:',
    'LBL_DATE_MODIFIED' => 'Izmijenjeno:',
    'LBL_MODIFIED' => 'Izmijenio:',
    'LBL_MODIFIED_NAME' => 'Izmijenjeno prema Nazivu',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_NAME' => 'Ime predloška',
    'LBL_CREATED_USER' => 'Kreirao Korisnik',
    'LBL_MODIFIED_USER' => 'Izmijenio Korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Uredi',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_LIST_FORM_TITLE' => 'Lista predložaka projekata',
    'LBL_MODULE_NAME' => 'Predlošci projekata',
    'LBL_MODULE_TITLE' => 'Predlošci projekata',
    'LBL_HOMEPAGE_TITLE' => 'Moji predlošci projekata',
    'LNK_NEW_RECORD' => 'Kreiraj predložak projekta',
    'LNK_LIST' => 'Pregledaj predloške projekata',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Uvoz predložaka projekata',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje predložaka projekata',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregledaj Povijest',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi predlošci projekata',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet',
    'LBL_PROJECT_NAME' => 'Ime projekta',
    'LBL_START_DATE' => 'Početni datum',
    'LBL_CREATE_PROJECT_TITLE' => 'Kreiraj novi projekt iz predloška?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Predlošci zadataka',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'korisnik',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakti',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Odaberite resurse',
    'LBL_NEW_PROJECT_CREATED' => 'Novi projekat kreiran',
    'LBL_NEW_PROJECT' => 'Kreiraj projekt',
    'LBL_CANCEL_PROJECT' => 'Odustani',

    'LBL_SUBTASK' => 'Zadatak',
    'LBL_MILESTONE_FLAG' => 'Prekretnica',
    'LBL_RELATIONSHIP_TYPE' => 'Tip relacije',
    'LBL_LAG' => 'Zaostatak',
    'LBL_DAYS' => 'dana',
    'LBL_HOURS' => 'sati',
    'LBL_MONTHS' => 'mjeseci',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektni zadaci',
    'LBL_VIEW_GANTT_TITLE' => 'Pogledaj Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Uredi zadatak',
    'LBL_DURATION_TITLE' => 'Uredi trajanje',
    'LBL_DESCRIPTION' => 'Zabilješke',
    'LBL_ASSIGNED_USER_ID' => 'Dodijeljeno:',

    'LBL_LIST_ASSIGNED_USER' => 'Projektni menadžer',
    'LBL_UNASSIGNED' => 'Nedodijeljeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',
    'LBL_DELETE_TASK' => 'Izbriši zadatak',
    'LBL_VIEW_DETAIL' => 'Pregledaj detalje',
    'LBL_ADD_NEW_TASK' => 'Dodaj novi zadatak',
    'LBL_ASSIGNED_USER_NAME' => 'Projektni menadžer:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ime Zadatka',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Stvarno trajanje',
    'LBL_START' => 'Započni',
    'LBL_FINISH' => 'Završi',
    'LBL_PREDECESSORS' => 'Prethodnici',
    'LBL_PERCENT_COMPLETE' => '% Dovršeno',
    'LBL_EDIT_TASK_PROPERTIES' => 'Uredi svojstva zadatka',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Uzmite u obzir radne dane',
    'LBL_COPY_ALL_TASKS' => 'Kopiraj sve zadatke s resursima',
    'LBL_COPY_SEL_TASKS' => 'Kopiraj odabrane zadatke s resursima',
    'LBL_TOOLTIP_TITLE' => 'Savjet',
    'LBL_TOOLTIP_TEXT' => 'Kopira sve zadatke s dodijeljenim korisnicima',

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
    'LBL_NONE' => 'Nijedan',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
