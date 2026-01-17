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
    'LBL_ACCEPT_THIS' => 'Aksept ?',
    'LBL_ADD_BUTTON' => 'Legg til',
    'LBL_ADD_INVITEE' => 'Legg til deltager',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_CREATED_BY' => 'Opprettet av',
    'LBL_DATE_END' => 'Avslutningsdato',
    'LBL_DATE_TIME' => 'Start dato & klokkeslett:',
    'LBL_DATE' => 'Startdato:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Møter',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DIRECTION' => 'Sorter:',
    'LBL_DURATION_HOURS' => 'Varighet timer:',
    'LBL_DURATION_MINUTES' => 'Varighet minutter:',
    'LBL_DURATION' => 'Varighet:',
    'LBL_EMAIL' => 'E-post',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notater:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(timer/minutter)',
    'LBL_INVITEE' => 'Inviterte',
    'LBL_LAST_NAME' => 'Etternavn',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt brukers navn:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
    'LBL_LIST_CLOSE' => 'Avslutt',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_DATE_MODIFIED' => 'Dato endret',
    'LBL_LIST_DATE' => 'Start dato',
    'LBL_LIST_DIRECTION' => 'Retning',
    'LBL_LIST_DUE_DATE' => 'Frist',
    'LBL_LIST_FORM_TITLE' => 'Møteliste',
    'LBL_LIST_MY_MEETINGS' => 'Mine møter',
    'LBL_LIST_RELATED_TO' => 'Knyttet til',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Ledetråder',
    'LBL_LOCATION' => 'Beliggenhet:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Endret av',
    'LBL_MODULE_NAME' => 'Møter',
    'LBL_MODULE_TITLE' => 'Møter: Forside',
    'LBL_NAME' => 'Navn',
    'LBL_NEW_FORM_TITLE' => 'Ny oppringning',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_SEQUENCE' => 'Oppdateringssekvens for møte',
    'LBL_PHONE' => 'Tlfnr, arbeid:',
    'LBL_REMINDER_TIME' => 'Påminnelse tid',
    'LBL_EMAIL_REMINDER_SENT' => 'E-postpåminnelse sendt',
    'LBL_REMINDER' => 'Påminnelse:',
    'LBL_REMINDER_POPUP' => 'Sprettopp',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Send e-post til alle inviterte',
    'LBL_EMAIL_REMINDER' => 'E-postpåminnelse',
    'LBL_EMAIL_REMINDER_TIME' => 'Tid for e-postpåminnelse',
    'LBL_REMOVE' => 'Fjern',
    'LBL_SCHEDULING_FORM_TITLE' => 'Tidsplan',
    'LBL_SEARCH_BUTTON' => 'Søk',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter møte',
    'LBL_SEND_BUTTON_LABEL' => 'Send møteinvitasjon',
    'LBL_SEND_BUTTON_TITLE' => 'Send møteinvitasjon',
    'LBL_STATUS' => 'Status',
    'LBL_TYPE' => 'Møtetype',
    'LBL_PASSWORD' => 'Møtepassord',
    'LBL_URL' => 'Start / bli med på Møte',
    'LBL_HOST_URL' => 'Verts-URL',
    'LBL_DISPLAYED_URL' => 'Visnings-URL',
    'LBL_CREATOR' => 'Møte oppretter',
    'LBL_EXTERNALID' => 'Ekstern App ID',
    'LBL_SUBJECT' => 'Emne:',
    'LBL_TIME' => 'Start klokkeslett:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Brukere:',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Foreldertype',
    'LBL_PARENT_ID' => 'Forelder ID',
    'LNK_MEETING_LIST' => 'Møter',
    'LNK_NEW_APPOINTMENT' => 'Ny oppringning',
    'LNK_NEW_MEETING' => 'Nytt møte',
    'LNK_IMPORT_MEETINGS' => 'Importer møter',

    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Bruker er endret',
    'NOTICE_DURATION_TIME' => 'Varigheten må väre større enn 0',
    'LBL_MEETING_INFORMATION' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Bli med på Møte',
    'LBL_ACCEPT_STATUS' => 'Aksepter status',
    'LBL_ACCEPT_LINK' => 'Aksepteringslenke',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Du kan ikke delta på dette møtet fordi du ikke er invitert.',
    'LBL_EXTNOT_RECORD_LINK' => 'Se Møte',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Du kan ikke starte dette møtet fordi du ikke er administrator eller eier av møtet.\'',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Opprett en gjest',
    'LBL_CREATE_CONTACT' => 'Som Kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Som kilde',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Opprett og legg til',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
    'LBL_EMPTY_SEARCH_RESULT' => 'Beklager, fant ingen resultater. Opprett en gjest under.',
    'LBL_NO_ACCESS' => 'Du har ikke tilgang til å opprette $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeteringstype',
    'LBL_REPEAT_INTERVAL' => 'Repeteringsintervall',
    'LBL_REPEAT_DOW' => 'Repetering',
    'LBL_REPEAT_UNTIL' => 'Gjenta fram til',
    'LBL_REPEAT_COUNT' => 'Repeteringsantal',
    'LBL_REPEAT_PARENT_ID' => 'Opphavs-ID for Repetering',
    'LBL_RECURRING_SOURCE' => 'Gjentakende kilde',

    'LBL_SYNCED_RECURRING_MSG' => 'Denne møtet kommer fra et annet system og ble synkronisert til SuiteCRM. For å gjøre endringer, gå til det orginale møtet i det andre systemet. Endringer gjort i andre systemer kan bli synkronisert til denne oppføringen.',
    'LBL_RELATED_TO' => 'Relatert til:',

    // for reminders
    'LBL_REMINDERS' => 'Standard Påminnelse:',
    'LBL_REMINDERS_ACTIONS' => 'Handlinger:',
    'LBL_REMINDERS_POPUP' => 'Sprettopp',
    'LBL_REMINDERS_EMAIL' => 'E-post til gjester',
    'LBL_REMINDERS_WHEN' => 'Når:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Fjern påminnelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Legg til alle gjester',
    'LBL_REMINDERS_ADD_REMINDER' => 'Legg til påminnelse',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
