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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Pozivi',
    'LBL_MODULE_TITLE' => 'Pozivi: Početno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga poziva',
    'LBL_LIST_FORM_TITLE' => 'Lista poziva',
    'LBL_NEW_FORM_TITLE' => 'Kreiraj sastanak',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_LIST_SUBJECT' => 'Subjekt',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_RELATED_TO_ID' => 'Povezano s ID',
    'LBL_LIST_DATE' => 'Početni datum',
    'LBL_LIST_DIRECTION' => 'Smjer',
    'LBL_SUBJECT' => 'Subjekt:',
    'LBL_REMINDER' => 'Podsjetnik:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Smjer:',
    'LBL_DATE' => 'Početni datum:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_DURATION_HOURS' => 'Trajanje sati:',
    'LBL_DURATION_MINUTES' => 'Trajanje minuta:',
    'LBL_HOURS_MINUTES' => '(sati/minuta)',
    'LBL_DATE_TIME' => 'Početni datum i vrijeme:',
    'LBL_TIME' => 'Početni datum:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Zabilježi poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_CALL_LIST' => 'Pogledaj pozive',
    'LNK_IMPORT_CALLS' => 'Uvoz poziva',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti specificiran za brisanje računa.',
    'LBL_INVITEE' => 'Gosti',
    'LBL_RELATED_TO' => 'Povezano sa:',
    'LNK_NEW_APPOINTMENT' => 'Kreiraj sastanak',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_ADD_INVITEE' => 'Dodaj goste',
    'LBL_NAME' => 'Ime',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Prezime',
    'LBL_EMAIL' => 'e-pošta',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Iskočni prozor',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Pošalji e-poštu svim gostima',
    'LBL_EMAIL_REMINDER' => 'Podsjetnik e-pošte',
    'LBL_EMAIL_REMINDER_TIME' => 'Vrijeme podsjetnika e-pošte',
    'LBL_SEND_BUTTON_TITLE' => 'Spremi i pošalji pozivnice',
    'LBL_SEND_BUTTON_LABEL' => 'Spremi i pošalji pozivnice',
    'LBL_DATE_END' => 'Krajnji datum',
    'LBL_REMINDER_TIME' => 'Vrijeme podsjetnika',
    'LBL_EMAIL_REMINDER_SENT' => 'Podsjetnik e-pošte poslan',
    'LBL_SEARCH_BUTTON' => 'Pretraživanje',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pozivi',
    'LNK_SELECT_ACCOUNT' => 'Odaberi tvrtku',
    'LNK_NEW_ACCOUNT' => 'Nova tvrtka',
    'LNK_NEW_OPPORTUNITY' => 'Nova prodajna prilika',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_USERS_SUBPANEL_TITLE' => 'korisnik',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Član od',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zabilješke',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_LIST_MY_CALLS' => 'Moji pozivi',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno',
    'LBL_ASSIGNED_TO_ID' => 'Dodijeljeni korisnik',
    'NOTICE_DURATION_TIME' => 'Vrijeme trajanja mora biti veće od 0',
    'LBL_CALL_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Ukloni',
    'LBL_ACCEPT_STATUS' => 'Status prihvaćanja',
    'LBL_ACCEPT_LINK' => 'Prihvati poveznicu',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'Kao kontakt',
    'LBL_CREATE_LEAD' => 'Kao potencijalnog klijenta',
    'LBL_CREATE_AND_ADD' => 'Kreiraj i dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Odustani',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nažalost nisu pronađeni rezultati.',
    'LBL_NO_ACCESS' => 'Nemate pristup kreiranju $modula',

    'LBL_REPEAT_TYPE' => 'Tip ponavljanja',
    'LBL_REPEAT_INTERVAL' => 'Interval ponavljanja',
    'LBL_REPEAT_DOW' => 'Dow ponavljanja',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj dok',
    'LBL_REPEAT_COUNT' => 'Broj ponavljanja',
    'LBL_REPEAT_PARENT_ID' => 'Matični ID ponavljanja',
    'LBL_RECURRING_SOURCE' => 'Izvor ponavljanja',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Podsjetnici',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Iskočni prozor',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Napravi novi raspored',
    'LBL_RESCHEDULE_COUNT' => 'Pokušaji poziva',
    'LBL_RESCHEDULE_DATE' => 'datum',
    'LBL_RESCHEDULE_REASON' => 'Razlog',
    'LBL_RESCHEDULE_ERROR1' => 'Molim odaberite važeći datum',
    'LBL_RESCHEDULE_ERROR2' => 'Molim odaberite razlog',
    'LBL_RESCHEDULE_PANEL' => 'Napravi novi raspored',
    'LBL_RESCHEDULE_HISTORY' => 'Povijest pokušaja poziva',
    'LBL_CANCEL' => 'Odustani',
    'LBL_SAVE' => 'Spremi',

    'LBL_CALLS_RESCHEDULE' => 'Planiranje poziva',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Izmijenjeno:',
    'LBL_LIST_DUE_DATE'=>'Datum dospijeća',
    'LBL_RESCHEDULED_BY'=>'od',
);
