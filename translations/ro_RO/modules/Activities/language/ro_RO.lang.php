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
    'LBL_MODULE_NAME' => 'Activităţi',
    'LBL_MODULE_TITLE' => 'Activități: Acasă',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare activități',
    'LBL_LIST_FORM_TITLE' => 'Listă activități',
    'LBL_LIST_SUBJECT' => 'Subiect',
    'LBL_OVERVIEW' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'SARCINI', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Întâlniri', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'APELURI TELEFONICE', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Email-uri', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTIȚE', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Tipăriți', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Întâlnire',
    'LBL_CALL_TYPE' => 'Apel',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Notă',
    'LBL_DATA_TYPE_START' => 'Început:',
    'LBL_DATA_TYPE_SENT' => 'Trimis:',
    'LBL_DATA_TYPE_MODIFIED' => 'Modificat:',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Legat de',
    'LBL_LIST_DATE' => 'Dată',
    'LBL_LIST_CLOSE' => 'Închide',
    'LBL_SUBJECT' => 'Subiect:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Locație:',
    'LBL_DATE_TIME' => 'Dată & Oră Începere:',
    'LBL_DATE' => 'Dată Începere:',
    'LBL_TIME' => 'Ora Începere:',
    'LBL_DURATION' => 'Durata:',
    'LBL_HOURS_MINS' => '(ore/minute)',
    'LBL_CONTACT_NAME' => 'Denumire Contact: ',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LNK_NEW_CALL' => 'Nou apel',
    'LNK_NEW_MEETING' => 'Programare Întâlnire',
    'LNK_NEW_TASK' => 'Creați Sarcină',
    'LNK_NEW_NOTE' => 'Creați o notă sau adăugați atașament',
    'LNK_NEW_EMAIL' => 'Arhivează email',
    'LNK_CALL_LIST' => 'Vizualizați Apeluri',
    'LNK_MEETING_LIST' => 'Vizualizați Întâlniri',
    'LNK_TASK_LIST' => 'Vizualizați Sarcini',
    'LNK_NOTE_LIST' => 'Vizualizați Note',
    'LBL_DELETE_ACTIVITY' => 'Sunteți sigur că doriți să ștergeți această activitate?',
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie să fie specificat pentru a șterge contul.',
    'LBL_INVITEE' => 'Invitați',
    'LBL_LIST_DIRECTION' => 'Direcție',
    'LBL_DIRECTION' => 'Direcție',
    'LNK_NEW_APPOINTMENT' => 'Programare Noua',
    'LNK_VIEW_CALENDAR' => 'Vizualizați Calendar',
    'LBL_OPEN_ACTIVITIES' => 'Activități deschise',
    'LBL_HISTORY' => 'Istoric',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Creați Sarcină',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Creați Sarcină',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Programare Întâlnire',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Programare Întâlnire',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Nou apel',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Creează notă sau atașament',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Creează notă sau atașament',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivează email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivează email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Dată Limită',
    'LBL_LIST_LAST_MODIFIED' => 'Data modificării',
    'LNK_IMPORT_CALLS' => 'Importa Apeluri',
    'LNK_IMPORT_MEETINGS' => 'Importa ședințe',
    'LNK_IMPORT_TASKS' => 'Importă sarcini',
    'LNK_IMPORT_NOTES' => 'Importă note',
    'LBL_ACCEPT_THIS' => 'Acceptă?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Activități deschise',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',

    'LBL_ACCEPT' => 'Acceptă' /*for 508 compliance fix*/,
);
