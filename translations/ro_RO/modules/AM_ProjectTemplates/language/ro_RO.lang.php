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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Manager de proiect',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Nume Șablon',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_EDIT_BUTTON' => 'Editați',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_LIST_FORM_TITLE' => 'Lista de șabloane de Proiect',
    'LBL_MODULE_NAME' => 'Șabloane de proiect',
    'LBL_MODULE_TITLE' => 'Șabloane de proiect',
    'LBL_HOMEPAGE_TITLE' => 'Șabloanele mele de proiect',
    'LNK_NEW_RECORD' => 'Creează șabloanele de Proiect',
    'LNK_LIST' => 'Vezi șabloane de Proiect',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importați șabloane de Proiect',
    'LBL_SEARCH_FORM_TITLE' => 'Caută șabloane de proiect',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'Șabloane noi de Proiect',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritate',
    'LBL_PROJECT_NAME' => 'Nume Proiect',
    'LBL_START_DATE' => 'Dată Început',
    'LBL_CREATE_PROJECT_TITLE' => 'Creați un Proiect nou din acest șablon?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Șabloane de Sarcini',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utilizatori',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacte',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Selectează Resurse',
    'LBL_NEW_PROJECT_CREATED' => 'Șabloane noi de Proiect',
    'LBL_NEW_PROJECT' => 'Creează proiect',
    'LBL_CANCEL_PROJECT' => 'Anulați',

    'LBL_SUBTASK' => 'Sarcină',
    'LBL_MILESTONE_FLAG' => 'Etapa',
    'LBL_RELATIONSHIP_TYPE' => 'Tip relație',
    'LBL_LAG' => 'Întârziere',
    'LBL_DAYS' => 'Zile',
    'LBL_HOURS' => 'Ore',
    'LBL_MONTHS' => 'Luni',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Sarcini Proiect',
    'LBL_VIEW_GANTT_TITLE' => 'Arata Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Durată',
    'LBL_TASK_TITLE' => 'Editare Sarcină',
    'LBL_DURATION_TITLE' => 'Editează Durata',
    'LBL_DESCRIPTION' => 'Note',
    'LBL_ASSIGNED_USER_ID' => 'Atribuit lui:',

    'LBL_LIST_ASSIGNED_USER' => 'Manager de proiect',
    'LBL_UNASSIGNED' => 'Neatribuit',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resurse',
    'LBL_DELETE_TASK' => 'Șterge sarcina',
    'LBL_VIEW_DETAIL' => 'Vezi detalii',
    'LBL_ADD_NEW_TASK' => 'Adăugați Sarcină Nouă',
    'LBL_ASSIGNED_USER_NAME' => 'Manager Proiect:',

    'LBL_TASK_ID' => 'ID-ul',
    'LBL_TASK_NAME' => 'Nume sarcină',
    'LBL_DURATION' => 'Durată',
    'LBL_ACTUAL_DURATION' => 'Durata efectiva',
    'LBL_START' => 'Început',
    'LBL_FINISH' => 'Sfârșit',
    'LBL_PREDECESSORS' => 'Predecesori',
    'LBL_PERCENT_COMPLETE' => '% Complet',
    'LBL_EDIT_TASK_PROPERTIES' => 'Editează proprietățile sarcinii.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Luați în considerare zilele lucrătoare',
    'LBL_COPY_ALL_TASKS' => 'Copiază toate Sarcinile cu resurse aferente',
    'LBL_COPY_SEL_TASKS' => 'Copiază Sarcinile selectate cu resurse aferente',
    'LBL_TOOLTIP_TITLE' => 'Indiciu',
    'LBL_TOOLTIP_TEXT' => 'Copiază toate Sarcinile cu utilizatorii alocați',

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
    'LBL_NONE' => 'Niciun',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Șabloane de proiect: Proiect din titlul proiectului',


);
