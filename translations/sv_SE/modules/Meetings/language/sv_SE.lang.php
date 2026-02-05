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
    'LBL_ACCEPT_THIS' => 'Accepteras?',
    'LBL_ADD_BUTTON' => 'Lägg till',
    'LBL_ADD_INVITEE' => 'Lägg till inbjudan',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_CREATED_BY' => 'Skapad av: ',
    'LBL_DATE_END' => 'Slutdatum',
    'LBL_DATE_TIME' => 'Startdatum & tid:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Möten',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DIRECTION' => 'Inriktning:',
    'LBL_DURATION_HOURS' => 'Varaktighet timmar:',
    'LBL_DURATION_MINUTES' => 'Varaktighet minuter:',
    'LBL_DURATION' => 'Varaktighet:',
    'LBL_EMAIL' => 'E-post',
    'LBL_FIRST_NAME' => 'Förnamn',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar:',
    'LBL_HOURS_ABBREV' => 'tim',
    'LBL_HOURS_MINS' => '(timmar/minuter)',
    'LBL_INVITEE' => 'Inbjudningar',
    'LBL_LAST_NAME' => 'Efternamn',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_LIST_DATE' => 'Startdatum',
    'LBL_LIST_DIRECTION' => 'Inriktning',
    'LBL_LIST_DUE_DATE' => 'Förfallodag',
    'LBL_LIST_FORM_TITLE' => 'Lista möten',
    'LBL_LIST_MY_MEETINGS' => 'Mina möten',
    'LBL_LIST_RELATED_TO' => 'Relaterad till',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kundämnen',
    'LBL_LOCATION' => 'Plats:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modifierad av: ',
    'LBL_MODULE_NAME' => 'Möten',
    'LBL_MODULE_TITLE' => 'Möten:Hem',
    'LBL_NAME' => 'Namn',
    'LBL_NEW_FORM_TITLE' => 'Skapa Möte',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Kontorstelefon:',
    'LBL_REMINDER_TIME' => 'Påminnelsetid',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Påminnelse:',
    'LBL_REMINDER_POPUP' => 'Popup-meny',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-posta alla inbjudna',
    'LBL_EMAIL_REMINDER' => 'E-postpåminnelse',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_SCHEDULING_FORM_TITLE' => 'Schemalägger',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_SEARCH_FORM_TITLE' => 'Sök möte',
    'LBL_SEND_BUTTON_LABEL' => 'Skicka inbjudan',
    'LBL_SEND_BUTTON_TITLE' => 'Skicka inbjudan',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Mötestyp',
    'LBL_PASSWORD' => 'Mötets lösenord',
    'LBL_URL' => 'Start/Join Meeting',
    'LBL_HOST_URL' => 'Värd-URL',
    'LBL_DISPLAYED_URL' => 'Visa URL',
    'LBL_CREATOR' => 'Mötets skapare',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_TIME' => 'Starttid:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
    'LBL_PARENT_TYPE' => 'Föräldrertyp',
    'LBL_PARENT_ID' => 'Överordnat ID',
    'LNK_MEETING_LIST' => 'Möten',
    'LNK_NEW_APPOINTMENT' => 'Skapa Möte',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_IMPORT_MEETINGS' => 'Importera Möten',

    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
    'LBL_MEETING_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Delta i möte',
    'LBL_ACCEPT_STATUS' => 'Acceptera status',
    'LBL_ACCEPT_LINK' => 'Acceptera länk',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'Visa möte',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'You cannot start this meeting because you are not an Administrator or the owner of the meeting.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Skapa en inbjudan',
    'LBL_CREATE_CONTACT' => 'Som kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Skapa & lägg till',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Ångra',
    'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Skapa en inbjudan nedan.',
    'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Återkommande källa',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Relaterad till:',

    // for reminders
    'LBL_REMINDERS' => 'Visa påminnelser?',
    'LBL_REMINDERS_ACTIONS' => 'Åtgärder:',
    'LBL_REMINDERS_POPUP' => 'Popup-meny',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'När:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Ta bort påminnelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lägg till alla inbjudna',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lägg till påminnelse',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
