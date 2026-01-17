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
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Menadžer projekta',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Ime šablona',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Izmeni',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_LIST_FORM_TITLE' => 'Lista šablona za projekte',
    'LBL_MODULE_NAME' => 'Šabloni za projekte',
    'LBL_MODULE_TITLE' => 'Šabloni za projekte',
    'LBL_HOMEPAGE_TITLE' => 'Moji šabloni za projekte',
    'LNK_NEW_RECORD' => 'Napravi šablon za projekte',
    'LNK_LIST' => 'Prikaži šablone za projekte',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Uvezi šablon za projekte',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži šablone za projekte',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi Šablon za projekte',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet',
    'LBL_PROJECT_NAME' => 'Ime projekta',
    'LBL_START_DATE' => 'Datum početka',
    'LBL_CREATE_PROJECT_TITLE' => 'Kreiraj novi projekat od ovog šablona?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Šablon za zadatke u projektima',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Korisnici',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Kontakti',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Odaberi resurse',
    'LBL_NEW_PROJECT_CREATED' => 'Novi šablon je napravljen',
    'LBL_NEW_PROJECT' => 'Kreiraj projekat',
    'LBL_CANCEL_PROJECT' => 'Otkaži',

    'LBL_SUBTASK' => 'Zadatak',
    'LBL_MILESTONE_FLAG' => 'Prekretnica',
    'LBL_RELATIONSHIP_TYPE' => 'Tip veze',
    'LBL_LAG' => 'Zaostatak',
    'LBL_DAYS' => 'Dana',
    'LBL_HOURS' => 'Sati',
    'LBL_MONTHS' => 'Meseci',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektni Zadaci',
    'LBL_VIEW_GANTT_TITLE' => 'Prikaži Gantt tabelu',
    'LBL_VIEW_GANTT_DURATION' => 'Trajanje',
    'LBL_TASK_TITLE' => 'Izmeni zadatak',
    'LBL_DURATION_TITLE' => 'Izmeni trajanje',
    'LBL_DESCRIPTION' => 'Beleške',
    'LBL_ASSIGNED_USER_ID' => 'Dodeljeno:',

    'LBL_LIST_ASSIGNED_USER' => 'Menadžer projekta',
    'LBL_UNASSIGNED' => 'Nedodeljeno',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resursi',
    'LBL_DELETE_TASK' => 'Izbriši zadatak',
    'LBL_VIEW_DETAIL' => 'Prikaz detalja',
    'LBL_ADD_NEW_TASK' => 'Dodaj novi zadatak',
    'LBL_ASSIGNED_USER_NAME' => 'Menadžer projekta:',

    'LBL_TASK_ID' => 'ID broj',
    'LBL_TASK_NAME' => 'Ime zadatka',
    'LBL_DURATION' => 'Trajanje',
    'LBL_ACTUAL_DURATION' => 'Stvarno vreme trajanja',
    'LBL_START' => 'Početak',
    'LBL_FINISH' => 'Kraj',
    'LBL_PREDECESSORS' => 'Prethodnici',
    'LBL_PERCENT_COMPLETE' => '% Završenog',
    'LBL_EDIT_TASK_PROPERTIES' => 'Izmeni karakteristike zadatka.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Uzmi u obzir radne dane',
    'LBL_COPY_ALL_TASKS' => 'Kopiraj sve zadatke sa resursima',
    'LBL_COPY_SEL_TASKS' => 'Kopiraj izabrane zadatke sa resursima',
    'LBL_TOOLTIP_TITLE' => 'Predlog',
    'LBL_TOOLTIP_TEXT' => 'Kopira sve zadatke sa dodeljenim korinsicima',

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
    'LBL_NONE' => 'Nijedno',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
