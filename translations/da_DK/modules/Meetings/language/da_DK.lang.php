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
    'LBL_ACCEPT_THIS' => 'Acceptér?',
    'LBL_ADD_BUTTON' => 'Tilføj',
    'LBL_ADD_INVITEE' => 'Tilføj deltagere',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_CREATED_BY' => 'Oprettet af',
    'LBL_DATE_END' => 'Slutdato',
    'LBL_DATE_TIME' => 'Startdato & tid:',
    'LBL_DATE' => 'Startdato:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Møder',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DIRECTION' => 'Retning:',
    'LBL_DURATION_HOURS' => 'Varighed timer:',
    'LBL_DURATION_MINUTES' => 'Varighed minutter:',
    'LBL_DURATION' => 'Varighed:',
    'LBL_EMAIL' => 'Emails',
    'LBL_FIRST_NAME' => 'Fornavn',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Noter',
    'LBL_HOURS_ABBREV' => 't',
    'LBL_HOURS_MINS' => '(timer/minutter)',
    'LBL_INVITEE' => 'Deltagere',
    'LBL_LAST_NAME' => 'Efternavn',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_LIST_CLOSE' => 'Luk',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Ændret dato',
    'LBL_LIST_DATE' => 'Startdato',
    'LBL_LIST_DIRECTION' => 'Retning',
    'LBL_LIST_DUE_DATE' => 'Forfaldsdato',
    'LBL_LIST_FORM_TITLE' => 'Møde liste',
    'LBL_LIST_MY_MEETINGS' => 'Mine møder',
    'LBL_LIST_RELATED_TO' => 'Relateret til',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Emner',
    'LBL_LOCATION' => 'Lokation:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Ændret af',
    'LBL_MODULE_NAME' => 'Møder',
    'LBL_MODULE_TITLE' => 'Møder: Hjem',
    'LBL_NAME' => 'Navn',
    'LBL_NEW_FORM_TITLE' => 'Planlæg opkald',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Arbejstelefon:',
    'LBL_REMINDER_TIME' => 'Reminder tidspunkt',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mailpåmindelse er blevet sent',
    'LBL_REMINDER' => 'Reminder:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email alle inviterede',
    'LBL_EMAIL_REMINDER' => 'E-mailpåmindelse',
    'LBL_EMAIL_REMINDER_TIME' => 'Tidspunkt for e-mailpåmindelse',
    'LBL_REMOVE' => 'Slet',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planlægger',
    'LBL_SEARCH_BUTTON' => 'Søg',
    'LBL_SEARCH_FORM_TITLE' => 'Møde søgning',
    'LBL_SEND_BUTTON_LABEL' => 'Send Invitationer',
    'LBL_SEND_BUTTON_TITLE' => 'Send Invitationer',
    'LBL_STATUS' => 'Status',
    'LBL_TYPE' => 'Møde type',
    'LBL_PASSWORD' => 'Møde adgangskode',
    'LBL_URL' => 'Start/Deltag møde',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Møde opretter',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Emne:',
    'LBL_TIME' => 'Starttid:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Brugere',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Moder Type',
    'LBL_PARENT_ID' => 'Overordnet ID',
    'LNK_MEETING_LIST' => 'Møder',
    'LNK_NEW_APPOINTMENT' => 'Planlæg opkald',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_IMPORT_MEETINGS' => 'Importér møder',

    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'NOTICE_DURATION_TIME' => 'Varigheden skal være større end 0',
    'LBL_MEETING_INFORMATION' => 'Kunde Information', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Join Meeting',
    'LBL_ACCEPT_STATUS' => 'Accepter status',
    'LBL_ACCEPT_LINK' => 'Accepter link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'View Meeting',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Du kan ikke starte dette møde fordi du ikke er en administrator eller ejer af dette møde.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Tilføj en inviteret',
    'LBL_CREATE_CONTACT' => 'Som kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Som emne',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Opret og tilføj',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Afbryd',
    'LBL_EMPTY_SEARCH_RESULT' => 'Undskyld, vi fandt ingen resultater. Tilføj venligst en inviteret her under.',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til at oprette $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Gentagelsestype',
    'LBL_REPEAT_INTERVAL' => 'Gentagelsesinterval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Gentag indtil',
    'LBL_REPEAT_COUNT' => 'Gentagelsesantal',
    'LBL_REPEAT_PARENT_ID' => 'Overordnet ID for gentagelse',
    'LBL_RECURRING_SOURCE' => 'Gentagelseskilde',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Relateret til:',

    // for reminders
    'LBL_REMINDERS' => 'Påmindelser',
    'LBL_REMINDERS_ACTIONS' => 'Handlinger:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-mail inviterede',
    'LBL_REMINDERS_WHEN' => 'Hvornår:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Fjern påmindelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tilføj alle inviterede',
    'LBL_REMINDERS_ADD_REMINDER' => 'Tilføj påmindelse',

    // for google sync
    'LBL_GSYNC_ID' => 'Google begivenheds ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
