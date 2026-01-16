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
    'LBL_ACCEPT_THIS' => 'Sprejmi?',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Povabi',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_CREATED_BY' => 'Ustvaril',
    'LBL_DATE_END' => 'Datum zaključka',
    'LBL_DATE_TIME' => 'Datum in čas začetka:',
    'LBL_DATE' => 'Datum začetka:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sestanki',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECTION' => 'Smer:',
    'LBL_DURATION_HOURS' => 'Trajanje, ure:',
    'LBL_DURATION_MINUTES' => 'Trajanje, minute:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_EMAIL' => 'E-pošta',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Beležke',
    'LBL_HOURS_ABBREV' => 'ur',
    'LBL_HOURS_MINS' => '(ure/minute)',
    'LBL_INVITEE' => 'Povabljeni',
    'LBL_LAST_NAME' => 'Priimek',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_LIST_CLOSE' => 'Zapri',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_LIST_DATE_MODIFIED' => 'Datum spremembe',
    'LBL_LIST_DATE' => 'Datum začetka',
    'LBL_LIST_DIRECTION' => 'Smer',
    'LBL_LIST_DUE_DATE' => 'Datum zapadlosti',
    'LBL_LIST_FORM_TITLE' => 'Seznam sestankov',
    'LBL_LIST_MY_MEETINGS' => 'Moji sestanki',
    'LBL_LIST_RELATED_TO' => 'Povezano z',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LIST_SUBJECT' => 'Zadeva',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_MINSS_ABBREV' => 'Spremenil',
    'LBL_MODIFIED_BY' => 'Spremenil',
    'LBL_MODULE_NAME' => 'Sestanki',
    'LBL_MODULE_TITLE' => 'Sestanki: Domov',
    'LBL_NAME' => 'Ime',
    'LBL_NEW_FORM_TITLE' => 'Načrtuj Klic',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Telefon, pisarna:',
    'LBL_REMINDER_TIME' => 'Čas opomnika',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Opomnik:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Odstrani',
    'LBL_SCHEDULING_FORM_TITLE' => 'Načrtovanje',
    'LBL_SEARCH_BUTTON' => 'Iskanje',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje sestankov',
    'LBL_SEND_BUTTON_LABEL' => 'Pošlji povabila',
    'LBL_SEND_BUTTON_TITLE' => 'Pošlji povabila',
    'LBL_STATUS' => 'Stanje:',
    'LBL_TYPE' => 'Meeting Type',
    'LBL_PASSWORD' => 'Meeting Password',
    'LBL_URL' => 'Start/Join Meeting',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Meeting Creator',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Zadeva:',
    'LBL_TIME' => 'Čas začetka:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uporabniki',
    'LBL_PARENT_TYPE' => 'Nadrejeni tip',
    'LBL_PARENT_ID' => 'ID nadrejenega',
    'LNK_MEETING_LIST' => 'Sestanki',
    'LNK_NEW_APPOINTMENT' => 'Načrtuj Klic',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_IMPORT_MEETINGS' => 'Uvozi sestanke',

    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_MODIFIED_USER' => 'Spremenjen uporabnik',
    'NOTICE_DURATION_TIME' => 'Čas trajanja mora biti večji od 0',
    'LBL_MEETING_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Join Meeting',
    'LBL_ACCEPT_STATUS' => 'Sprejmi status',
    'LBL_ACCEPT_LINK' => 'Sprejmi povezavo',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'View Meeting',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'You cannot start this meeting because you are not an Administrator or the owner of the meeting.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'Kot kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Kot potencial',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Ustvari & dodaj',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Prekliči',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj do',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Related to:',

    // for reminders
    'LBL_REMINDERS' => 'Prikaži opomnik?',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
