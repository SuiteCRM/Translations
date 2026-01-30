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
    'LBL_MODULE_NAME' => 'Įvykiai',
    'LBL_MODULE_TITLE' => 'Priminimai: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Priminimų paieška',
    'LBL_LIST_FORM_TITLE' => 'Priminimų sąrašas',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_OVERVIEW' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'El. paštas', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Spauda', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Susitikimas',
    'LBL_CALL_TYPE' => 'Skambutis',
    'LBL_EMAIL_TYPE' => 'el.paštas',
    'LBL_NOTE_TYPE' => 'Aprašymas',
    'LBL_DATA_TYPE_START' => 'Pradžia:',
    'LBL_DATA_TYPE_SENT' => 'Išsiųsta:',
    'LBL_DATA_TYPE_MODIFIED' => 'Redagavo:',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_DATE' => 'Data',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_LOCATION' => 'Vieta:',
    'LBL_DATE_TIME' => 'Pradžios data ir laikas:',
    'LBL_DATE' => 'Pradžios laikas:',
    'LBL_TIME' => 'Pradžios laikas:',
    'LBL_DURATION' => 'Trukmė:',
    'LBL_HOURS_MINS' => '(val/min)',
    'LBL_CONTACT_NAME' => 'Kontakto vardas:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_EMAIL' => 'Sukurti archyvuotą laišką',
    'LNK_CALL_LIST' => 'Skambučiai',
    'LNK_MEETING_LIST' => 'Susitikimai',
    'LNK_TASK_LIST' => 'Užduotys',
    'LNK_NOTE_LIST' => 'Užrašai',
    'LBL_DELETE_ACTIVITY' => 'Ar tikrai norite naikinti tik šį įvykį?',
    'ERR_DELETE_RECORD' => 'Jūs turite nurodyti įrašo numerį, kad galėtumėte ištrinti klientą.',
    'LBL_INVITEE' => 'Dalyviai',
    'LBL_LIST_DIRECTION' => 'Kryptis',
    'LBL_DIRECTION' => 'Kryptis',
    'LNK_NEW_APPOINTMENT' => 'Naujas paskyrimas',
    'LNK_VIEW_CALENDAR' => 'Kalendorius',
    'LBL_OPEN_ACTIVITIES' => 'Atidaryti veiklą',
    'LBL_HISTORY' => 'Istorija',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Sukurti užduotį',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Sukurti užduotį',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Suplanuoti susitikimą',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Suplanuoti susitikimą',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Registruoti skambutį',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Sukurti užrašą',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Sukurti užrašą',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archyvuoti el. paštą',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archyvuoti el. paštą',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LIST_DUE_DATE' => 'Terminas',
    'LBL_LIST_LAST_MODIFIED' => 'Redagavimo data',
    'LNK_IMPORT_CALLS' => 'Importuoti skambučius',
    'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',
    'LNK_IMPORT_TASKS' => 'Importuoti užduotis',
    'LNK_IMPORT_NOTES' => 'Importuoti užrašus',
    'LBL_ACCEPT_THIS' => 'Patvirtinti?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Atidaryti veiklą',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas vartotojas',

    'LBL_ACCEPT' => 'Pavirtinti' /*for 508 compliance fix*/,
);
