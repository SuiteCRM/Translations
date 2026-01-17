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
    'LBL_MODULE_NAME' => 'Samtal',
    'LBL_MODULE_TITLE' => 'Samtal: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök samtal',
    'LBL_LIST_FORM_TITLE' => 'Samtalslista',
    'LBL_NEW_FORM_TITLE' => 'Skapa Möte',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_LIST_RELATED_TO' => 'Relaterad till',
    'LBL_LIST_RELATED_TO_ID' => 'Relaterat till ID',
    'LBL_LIST_DATE' => 'Startdatum',
    'LBL_LIST_DIRECTION' => 'Inriktning',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_REMINDER' => 'Påminnelse:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Inriktning:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_DURATION' => 'Varaktighet:',
    'LBL_DURATION_HOURS' => 'Varaktighet timmar:',
    'LBL_DURATION_MINUTES' => 'Varaktighet minuter:',
    'LBL_HOURS_MINUTES' => '(timmar/minuter)',
    'LBL_DATE_TIME' => 'Startdatum & tid:',
    'LBL_TIME' => 'Starttid:',
    'LBL_HOURS_ABBREV' => 'tim',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Schemalägg samtal',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_CALL_LIST' => 'Samtal',
    'LNK_IMPORT_CALLS' => 'Importera Samtal',
    'ERR_DELETE_RECORD' => 'Ett nummer på posten måste specifiseras för att ta bort kontot.',
    'LBL_INVITEE' => 'Inbjudningar',
    'LBL_RELATED_TO' => 'Relaterad till:',
    'LNK_NEW_APPOINTMENT' => 'Skapa Möte',
    'LBL_SCHEDULING_FORM_TITLE' => 'Schemalägger',
    'LBL_ADD_INVITEE' => 'Lägg till inbjudan',
    'LBL_NAME' => 'Namn',
    'LBL_FIRST_NAME' => 'Förnamn',
    'LBL_LAST_NAME' => 'Efternamn',
    'LBL_EMAIL' => 'E-post',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Popup-meny',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-posta alla inbjudna',
    'LBL_EMAIL_REMINDER' => 'E-postpåminnelse',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Skicka inbjudan',
    'LBL_SEND_BUTTON_LABEL' => 'Skicka inbjudan',
    'LBL_DATE_END' => 'Slutdatum',
    'LBL_REMINDER_TIME' => 'Påminnelsetid',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_ADD_BUTTON' => 'Lägg till',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Samtal',
    'LNK_SELECT_ACCOUNT' => 'Välj företag',
    'LNK_NEW_ACCOUNT' => 'Nytt företag',
    'LNK_NEW_OPPORTUNITY' => 'Ny affär',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kundämnen',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_MEMBER_OF' => 'Medlem av',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_LIST_MY_CALLS' => 'Mina Samtal',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
    'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
    'LBL_CALL_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Ta bort',
    'LBL_ACCEPT_STATUS' => 'Acceptera status',
    'LBL_ACCEPT_LINK' => 'Acceptera länk',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Skapa en inbjudan',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Skapa & lägg till',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ångra',
    'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Skapa en inbjudan nedan.',
    'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Återkommande källa',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Visa påminnelser?',
    'LBL_REMINDERS_ACTIONS' => 'Åtgärder:',
    'LBL_REMINDERS_POPUP' => 'Popup-meny',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'När:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Ta bort påminnelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lägg till alla inbjudna',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lägg till påminnelse',

    'LBL_RESCHEDULE' => 'Omplanera',
    'LBL_RESCHEDULE_COUNT' => 'Uppringningsförsök',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Orsak',
    'LBL_RESCHEDULE_ERROR1' => 'Välj ett giltigt datum',
    'LBL_RESCHEDULE_ERROR2' => 'Välj en anledning',
    'LBL_RESCHEDULE_PANEL' => 'Omplanera',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Ångra',
    'LBL_SAVE' => 'Spara',

    'LBL_CALLS_RESCHEDULE' => 'Planera om samtal',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Datum Ändrad',
    'LBL_LIST_DUE_DATE'=>'Förfallodag',
    'LBL_RESCHEDULED_BY'=>'av',
);
