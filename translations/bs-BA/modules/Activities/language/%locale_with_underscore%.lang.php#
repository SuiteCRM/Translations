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
    'LBL_MODULE_NAME' => 'Aktivnosti',
    'LBL_MODULE_TITLE' => 'Aktivnosti: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga aktivnosti',
    'LBL_LIST_FORM_TITLE' => 'Lista aktivnosti',
    'LBL_LIST_SUBJECT' => 'Naziv',
    'LBL_OVERVIEW' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Zadaci', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Sastanci', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Pozivi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Sastanak',
    'LBL_CALL_TYPE' => 'Poziv',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Bilješka',
    'LBL_DATA_TYPE_START' => 'Početak:',
    'LBL_DATA_TYPE_SENT' => 'Poslano:',
    'LBL_DATA_TYPE_MODIFIED' => 'Izmjenjeno:',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_DATE' => 'Datum',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_SUBJECT' => 'Naziv:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_DATE_TIME' => 'Datum i vrijeme početka:',
    'LBL_DATE' => 'Datum početka:',
    'LBL_TIME' => 'Vrijeme početka:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_HOURS_MINS' => '(sati/minuta)',
    'LBL_CONTACT_NAME' => 'Ime kontakta: ',
    'LBL_DESCRIPTION' => 'Opis:',
    'LNK_NEW_CALL' => 'Zabilježite tel.poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreirajte zadatak',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku ili dodaj attachment',
    'LNK_NEW_EMAIL' => 'Kreiraj arhivirani email',
    'LNK_CALL_LIST' => 'Pregledaj pozive',
    'LNK_MEETING_LIST' => 'Pregledaj sastanke',
    'LNK_TASK_LIST' => 'Pregledaj zadatke',
    'LNK_NOTE_LIST' => 'Pregledaj zabilješke',
    'LBL_DELETE_ACTIVITY' => 'Jeste li sigurni da želite izbrisati ovu aktivnost?',
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da obrišete račun.',
    'LBL_INVITEE' => 'Gosti',
    'LBL_LIST_DIRECTION' => 'Smjer',
    'LBL_DIRECTION' => 'Smjer',
    'LNK_NEW_APPOINTMENT' => 'Novi termin',
    'LNK_VIEW_CALENDAR' => 'Pogledaj kalendar',
    'LBL_OPEN_ACTIVITIES' => 'Otvorene aktivnosti',
    'LBL_HISTORY' => 'Historija',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Kreirajte zadatak',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Kreirajte zadatak',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Zakaži sastanak',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Zakaži sastanak',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Zabilježite tel.poziv',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Kreiraj bilješku ili attachment',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Kreiraj bilješku ili attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiviraj email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Datum dospijeća',
    'LBL_LIST_LAST_MODIFIED' => 'Zadnja izmjena',
    'LNK_IMPORT_CALLS' => 'Uvoz poziva',
    'LNK_IMPORT_MEETINGS' => 'Uvoz sastanaka',
    'LNK_IMPORT_TASKS' => 'Uvoz zadataka',
    'LNK_IMPORT_NOTES' => 'Uvoz zabilješki',
    'LBL_ACCEPT_THIS' => 'Prihvati?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Otvorene aktivnosti',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeni korisnik',

    'LBL_ACCEPT' => 'Prihvati' /*for 508 compliance fix*/,
);
