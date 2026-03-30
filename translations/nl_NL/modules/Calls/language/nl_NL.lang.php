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
    'LBL_MODULE_NAME' => 'Telefoongesprekken',
    'LBL_MODULE_TITLE' => 'Telefoongesprekken: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Telefoongesprek zoeken',
    'LBL_LIST_FORM_TITLE' => 'Telefoongesprekken',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe afspraak',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'Gerelateerd aan ID',
    'LBL_LIST_DATE' => 'Start datum',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'Herinnering:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Richting:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duur:',
    'LBL_DURATION_HOURS' => 'Duur (uren):',
    'LBL_DURATION_MINUTES' => 'Duur (minuten):',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Gerelateerd aan:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Inplannen',
    'LBL_ADD_INVITEE' => 'Uitnodigen',
    'LBL_NAME' => 'Naam',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail alle genodigden',
    'LBL_EMAIL_REMINDER' => 'E-mail herinnering',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail herinnering tijd',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'Herrinneringstijd',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail herinnering verzonden',
    'LBL_SEARCH_BUTTON' => 'Zoeken',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefoongesprekken',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_LIST_MY_CALLS' => 'Mijn telefoongesprekken',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Remove',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Accepteer link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Maak een genodigde aan',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'Als Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuleren',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'U heeft geen toegang om $module te maken',

    'LBL_REPEAT_TYPE' => 'Herhaal type',
    'LBL_REPEAT_INTERVAL' => 'Herhaal Interval',
    'LBL_REPEAT_DOW' => 'Herhaal Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Herhaal telling',
    'LBL_REPEAT_PARENT_ID' => 'Herhaal ouder Id',
    'LBL_RECURRING_SOURCE' => 'Periodieke bron',

    'LBL_SYNCED_RECURRING_MSG' => 'Dit telefoon gesprek komt van een ander systeem en was gesynchroniseerd naar SuiteCRM. Om wijzigingen aan te brengen, ga naar de orginele bron in het andere systeem. Wijzigingen in het andere systeem worden gesynchroniseerd met dit record. ',

    // for reminders
    'LBL_REMINDERS' => 'Herinneringen',
    'LBL_REMINDERS_ACTIONS' => 'Acties:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email genodigden',
    'LBL_REMINDERS_WHEN' => 'Wanneer:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Verwijder herinnering',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Voeg alle genodigden toe',
    'LBL_REMINDERS_ADD_REMINDER' => 'Voeg herinnering toe',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Reden',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Belpogingen',
    'LBL_CANCEL' => 'Annuleren',
    'LBL_SAVE' => 'Save',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Datum gewijzigd',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'by',
);
