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
    'LBL_MODULE_NAME' => 'Proiect',
    'LBL_MODULE_TITLE' => 'Proiect: Acasă',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare proiect',
    'LBL_LIST_FORM_TITLE' => 'Listă proiecte',
    'LBL_HISTORY_TITLE' => 'Istoric',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Creat:',
    'LBL_DATE_MODIFIED' => 'Dată Modificare:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuit lui:',
    'LBL_ASSIGNED_USER_NAME' => 'Manager Proiect:',
    'LBL_MODIFIED_USER_ID' => 'Modificare Id utilizator:',
    'LBL_CREATED_BY' => 'Creeat de:',
    'LBL_NAME' => 'Nume:',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DELETED' => 'Șters:',
    'LBL_DATE' => 'Dată:',
    'LBL_DATE_START' => 'Dată Începere:',
    'LBL_DATE_END' => 'Dată sfârșit:',
    'LBL_PRIORITY' => 'Prioritate:',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Efortul total estimativ (ore)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Efortul total real (ore)',
    'LBL_LIST_END_DATE' => 'Dată Sfârșit',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Sarcini Proiect',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunităţi',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Niciun',
    'LBL_ALL_PROJECTS' => 'Toate proiectele',
    'LBL_ALL_USERS' => 'Toți utilizatorii',
    'LBL_ALL_CONTACTS' => 'Toate contactele',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Proiect nou',
    'LNK_NEW_PROJECT' => 'Creează proiect',
    'LNK_PROJECT_LIST' => 'Lista proiect',
    'LNK_NEW_PROJECT_TASK' => 'Creare sarcină proiect',
    'LNK_PROJECT_TASK_LIST' => 'Vezi sarcina de proiect',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Conturi',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunităţi',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cazuri',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug-uri',
    'LBL_TASK_ID' => 'ID-ul',
    'LBL_TASK_NAME' => 'Nume sarcină',
    'LBL_DURATION' => 'Durată',
    'LBL_ACTUAL_DURATION' => 'Durata efectiva',
    'LBL_START' => 'Început',
    'LBL_FINISH' => 'Sfârșit',
    'LBL_PREDECESSORS' => 'Predecesori',
    'LBL_PERCENT_COMPLETE' => '% Complet',
    'LBL_MORE' => 'Mai mult...',
    'LBL_OPPORTUNITIES' => 'Oportunităţi',
    'LBL_NEXT_WEEK' => 'Următor',
    'LBL_PROJECT_INFORMATION' => 'Vedere Generala Proiect',
    'LBL_EDITLAYOUT' => 'Editare aranjament' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Sarcini Proiect',
    'LBL_VIEW_GANTT_TITLE' => 'Arata Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durată',
    'LBL_TASK_TITLE' => 'Editare Sarcină',
    'LBL_DURATION_TITLE' => 'Editează Durata',
    'LBL_LAG' => 'Întârziere',
    'LBL_DAYS' => 'Zile',
    'LBL_HOURS' => 'Ore',
    'LBL_MONTHS' => 'Luni',
    'LBL_SUBTASK' => 'Sarcină',
    'LBL_MILESTONE_FLAG' => 'Etapa',
    'LBL_ADD_NEW_TASK' => 'Adăugați Sarcină Nouă',
    'LBL_DELETE_TASK' => 'Șterge sarcina',
    'LBL_EDIT_TASK_PROPERTIES' => 'Editează proprietățile sarcinii.',
    'LBL_PARENT_TASK_ID' => 'Id sarcina părinte',
    'LBL_RESOURCE_CHART' => 'Calendar Resurse',
    'LBL_RELATIONSHIP_TYPE' => 'Tip relație',
    'LBL_ASSIGNED_TO' => 'Manager de proiect',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Șablon de proiect',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Manager de proiect',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Proiect',
    'LBL_TOOLTIP_TASK_NAME' => 'Nume sarcină',
    'LBL_TOOLTIP_TITLE' => 'Sarcini în această zi',
    'LBL_TOOLTIP_TASK_DURATION' => 'Durată',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resursa este un utilizator',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resursa este un contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Lună Anterioară',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Luna Următoare',
    'LBL_RESOURCE_CHART_WEEK' => 'Săptămână',
    'LBL_RESOURCE_CHART_DAY' => 'Zi',
    'LBL_RESOURCE_CHART_WARNING' => 'Nu au fost alocate resurse unui proiect.',
    'LBL_PROJECT_DELETE_MSG' => 'Sunteți sigur că doriți să ștergeți acest proiect și sarcinile asociate acestuia?',
    'LBL_LIST_MY_PROJECT' => 'Proiectele mele',
    'LBL_LIST_ASSIGNED_USER' => 'Manager de proiect',
    'LBL_UNASSIGNED' => 'Neatribuit',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resurse',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefon birou:',
    'LBL_ADD_BUTTON' => 'Adăugați',
    'LBL_ADD_INVITEE' => 'Adaugă Resursă',
    'LBL_FIRST_NAME' => 'Prenume',
    'LBL_LAST_NAME' => 'Nume de Familie',
    'LBL_SEARCH_BUTTON' => 'Caută',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ne pare rău, nu am găsit niciun rezultat. Vă rugăm să creați un invitat mai jos.',
    'LBL_CREATE_INVITEE' => 'Creează o resursă',
    'LBL_CREATE_CONTACT' => 'Ca și Contact',
    'LBL_CREATE_AND_ADD' => 'Creați & Adăugați',
    'LBL_CANCEL_CREATE_INVITEE' => 'Anulați',
    'LBL_NO_ACCESS' => 'Nu aveți acces pentru a crea $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Listă Resurse',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_VIEW_DETAIL' => 'Vezi detalii',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Luați în considerare zilele lucrătoare',

    'LBL_IMPORT_PROJECTS' => 'Proiecte de import',

    'LBL_PROJECTS_SEARCH' => 'Căutare proiecte',
    'LBL_USERS_SEARCH' => 'Căutare utilizatori',
    'LBL_CONTACTS_SEARCH' => 'Selectare contacte',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Caută',

    'LBL_CHART_TYPE' => 'Tip',
    'LBL_CHART_WEEKLY' => 'Săptămânal',
    'LBL_CHART_MONTHLY' => 'Lunar',
    'LBL_CHART_QUARTERLY' => 'La fiecare 4 luni',

    'LBL_RESOURCE_CHART_MONTH' => 'Lună',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestru',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacte proiect din Titlu Contacte',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Șabloane de proiect: Proiect din titlul proiectului',
    'LBL_AOS_QUOTES_PROJECT' => 'Cotație: Proiect',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascendent',
    'LBL_DESCENDING' => 'Descendent',
);
