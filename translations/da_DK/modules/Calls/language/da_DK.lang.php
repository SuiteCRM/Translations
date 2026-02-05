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
    'LBL_MODULE_NAME' => 'Opkald',
    'LBL_MODULE_TITLE' => 'Opkald: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Opkald søg',
    'LBL_LIST_FORM_TITLE' => 'Opkaldsliste',
    'LBL_NEW_FORM_TITLE' => 'Planlæg opkald',
    'LBL_LIST_CLOSE' => 'Luk',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Relateret til',
    'LBL_LIST_RELATED_TO_ID' => 'Relateret til id',
    'LBL_LIST_DATE' => 'Startdato',
    'LBL_LIST_DIRECTION' => 'Retning',
    'LBL_SUBJECT' => 'Emne:',
    'LBL_REMINDER' => 'Påmindelse:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_STATUS' => 'Status',
    'LBL_DIRECTION' => 'Retning:',
    'LBL_DATE' => 'Startdato:',
    'LBL_DURATION' => 'Varighed:',
    'LBL_DURATION_HOURS' => 'Varighed timer:',
    'LBL_DURATION_MINUTES' => 'Varighed minutter:',
    'LBL_HOURS_MINUTES' => '(timer/minutter)',
    'LBL_DATE_TIME' => 'Startdato & tid:',
    'LBL_TIME' => 'Starttid:',
    'LBL_HOURS_ABBREV' => 't',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_CALL_LIST' => 'Opkald',
    'LNK_IMPORT_CALLS' => 'Importér opkald',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
    'LBL_INVITEE' => 'Deltagere',
    'LBL_RELATED_TO' => 'Relateret til:',
    'LNK_NEW_APPOINTMENT' => 'Planlæg opkald',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planlægger',
    'LBL_ADD_INVITEE' => 'Tilføj deltagere',
    'LBL_NAME' => 'Navn',
    'LBL_FIRST_NAME' => 'Fornavn',
    'LBL_LAST_NAME' => 'Efternavn',
    'LBL_EMAIL' => 'Emails',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email alle inviterede',
    'LBL_EMAIL_REMINDER' => 'E-mailpåmindelse',
    'LBL_EMAIL_REMINDER_TIME' => 'Tidspunkt for e-mailpåmindelse',
    'LBL_SEND_BUTTON_TITLE' => 'Send Invitationer',
    'LBL_SEND_BUTTON_LABEL' => 'Send Invitationer',
    'LBL_DATE_END' => 'Slutdato',
    'LBL_REMINDER_TIME' => 'Reminder tidspunkt',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mailpåmindelse er blevet sent',
    'LBL_SEARCH_BUTTON' => 'Søg',
    'LBL_ADD_BUTTON' => 'Tilføj',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opkald',
    'LNK_SELECT_ACCOUNT' => 'Vælg kunde',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'LNK_NEW_OPPORTUNITY' => 'Ny mulighed',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Emner',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_USERS_SUBPANEL_TITLE' => 'Brugere',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Medlem af',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Noter',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_LIST_MY_CALLS' => 'Mine opkald',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger',
    'NOTICE_DURATION_TIME' => 'Varigheden skal være større end 0',
    'LBL_CALL_INFORMATION' => 'Kunde Information', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Slet',
    'LBL_ACCEPT_STATUS' => 'Accepter status',
    'LBL_ACCEPT_LINK' => 'Accepter link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Tilføj en inviteret',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_LEAD' => 'Som emne',
    'LBL_CREATE_AND_ADD' => 'Opret og tilføj',
    'LBL_CANCEL_CREATE_INVITEE' => 'Afbryd',
    'LBL_EMPTY_SEARCH_RESULT' => 'Undskyld, vi fandt ingen resultater. Tilføj venligst en inviteret her under.',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til at oprette $module',

    'LBL_REPEAT_TYPE' => 'Gentagelsestype',
    'LBL_REPEAT_INTERVAL' => 'Gentagelsesinterval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Gentag indtil',
    'LBL_REPEAT_COUNT' => 'Gentagelsesantal',
    'LBL_REPEAT_PARENT_ID' => 'Overordnet ID for gentagelse',
    'LBL_RECURRING_SOURCE' => 'Gentagelseskilde',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Påmindelser',
    'LBL_REMINDERS_ACTIONS' => 'Handlinger:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-mail inviterede',
    'LBL_REMINDERS_WHEN' => 'Hvornår:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Fjern påmindelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tilføj alle inviterede',
    'LBL_REMINDERS_ADD_REMINDER' => 'Tilføj påmindelse',

    'LBL_RESCHEDULE' => 'Ændre aftale',
    'LBL_RESCHEDULE_COUNT' => 'Opkaldsforsøg',
    'LBL_RESCHEDULE_DATE' => 'Dato',
    'LBL_RESCHEDULE_REASON' => 'Begrundelse',
    'LBL_RESCHEDULE_ERROR1' => 'Vælg venligst en gyldig dato',
    'LBL_RESCHEDULE_ERROR2' => 'Angiv venligst en årsag',
    'LBL_RESCHEDULE_PANEL' => 'Ændre aftale',
    'LBL_RESCHEDULE_HISTORY' => 'Historik over opkaldsforsøg',
    'LBL_CANCEL' => 'Afbryd',
    'LBL_SAVE' => 'Gem',

    'LBL_CALLS_RESCHEDULE' => 'Opkald Omplanlæg',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Ændret dato',
    'LBL_LIST_DUE_DATE'=>'Forfaldsdato',
    'LBL_RESCHEDULED_BY'=>'af',
);
