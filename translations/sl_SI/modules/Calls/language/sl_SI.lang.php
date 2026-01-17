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
    'LBL_MODULE_NAME' => 'Klici',
    'LBL_MODULE_TITLE' => 'Klici: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje Klicev',
    'LBL_LIST_FORM_TITLE' => 'Seznam Klicev',
    'LBL_NEW_FORM_TITLE' => 'Načrtuj Klic',
    'LBL_LIST_CLOSE' => 'Zapri',
    'LBL_LIST_SUBJECT' => 'Zadeva',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_LIST_RELATED_TO' => 'Povezano z',
    'LBL_LIST_RELATED_TO_ID' => 'Povezano z ID-jem',
    'LBL_LIST_DATE' => 'Datum začetka',
    'LBL_LIST_DIRECTION' => 'Smer',
    'LBL_SUBJECT' => 'Zadeva:',
    'LBL_REMINDER' => 'Opomnik:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_DIRECTION' => 'Smer:',
    'LBL_DATE' => 'Datum začetka:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_DURATION_HOURS' => 'Trajanje, ure:',
    'LBL_DURATION_MINUTES' => 'Trajanje, minute:',
    'LBL_HOURS_MINUTES' => '(ure/minute)',
    'LBL_DATE_TIME' => 'Datum in čas začetka:',
    'LBL_TIME' => 'Čas začetka:',
    'LBL_HOURS_ABBREV' => 'ur',
    'LBL_MINSS_ABBREV' => 'Spremenil',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_CALL_LIST' => 'Klici',
    'LNK_IMPORT_CALLS' => 'Uvozi klice',
    'ERR_DELETE_RECORD' => 'Števika vnosa mora biti definirana za izbris Partnerja.',
    'LBL_INVITEE' => 'Povabljeni',
    'LBL_RELATED_TO' => 'Povezava z:',
    'LNK_NEW_APPOINTMENT' => 'Načrtuj Klic',
    'LBL_SCHEDULING_FORM_TITLE' => 'Načrtovanje',
    'LBL_ADD_INVITEE' => 'Povabi',
    'LBL_NAME' => 'Ime',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Priimek',
    'LBL_EMAIL' => 'E-pošta',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Pošlji povabila',
    'LBL_SEND_BUTTON_LABEL' => 'Pošlji povabila',
    'LBL_DATE_END' => 'Datum zaključka',
    'LBL_REMINDER_TIME' => 'Čas opomnika',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_SEARCH_BUTTON' => 'Iskanje',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Klici',
    'LNK_SELECT_ACCOUNT' => 'Izberi partnerja',
    'LNK_NEW_ACCOUNT' => 'Nov Partner',
    'LNK_NEW_OPPORTUNITY' => 'Nova priložnost',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uporabniki',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Član',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Beležke',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen ',
    'LBL_LIST_MY_CALLS' => 'Moji klici',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen ',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljen uporabnik',
    'NOTICE_DURATION_TIME' => 'Čas trajanja mora biti večji od 0',
    'LBL_CALL_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Odstrani',
    'LBL_ACCEPT_STATUS' => 'Sprejmi status',
    'LBL_ACCEPT_LINK' => 'Sprejmi povezavo',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'Kot kontakt',
    'LBL_CREATE_LEAD' => 'Kot potencial',
    'LBL_CREATE_AND_ADD' => 'Ustvari & dodaj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Prekliči',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj do',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Prikaži opomnik?',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Termin prestavljen',
    'LBL_RESCHEDULE_COUNT' => 'Poskusi klica',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Razlog',
    'LBL_RESCHEDULE_ERROR1' => 'Prosimo vnesite veljaven datum',
    'LBL_RESCHEDULE_ERROR2' => 'Prosimo vnesite razlog',
    'LBL_RESCHEDULE_PANEL' => 'Termin prestavljen',
    'LBL_RESCHEDULE_HISTORY' => 'Zgodovina klicev',
    'LBL_CANCEL' => 'Prekliči',
    'LBL_SAVE' => 'Shrani',

    'LBL_CALLS_RESCHEDULE' => 'Prestavljanje klica',
    'LBL_LIST_STATUS'=>'Stanje',
    'LBL_LIST_DATE_MODIFIED'=>'Datum spremembe',
    'LBL_LIST_DUE_DATE'=>'Datum zapadlosti',
    'LBL_RESCHEDULED_BY'=>'od',
);
