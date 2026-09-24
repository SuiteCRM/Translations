<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Relaterad till',
    'LBL_LIST_RELATED_TO_ID' => 'Relaterat till ID',
    'LBL_LIST_DATE' => 'Startdatum',
    'LBL_LIST_DIRECTION' => 'Riktning',
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
    'LBL_DATE_TIME' => 'Startdatum och starttid:',
    'LBL_TIME' => 'Starttid:',
    'LBL_HOURS_ABBREV' => 't',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Logga samtal',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_CALL_LIST' => 'Visa samtal',
    'LNK_IMPORT_CALLS' => 'Importera samtal',
    'ERR_DELETE_RECORD' => 'Du måste ange ett postnummer för att ta bort företaget.',
    'LBL_INVITEE' => 'Inbjudna',
    'LBL_RELATED_TO' => 'Relaterad till:',
    'LNK_NEW_APPOINTMENT' => 'Skapa bokning',
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
    'LBL_EMAIL_REMINDER_TIME' => 'Tid för e-postpåminnelse',
    'LBL_SEND_BUTTON_TITLE' => 'Spara och skicka inbjudningar',
    'LBL_SEND_BUTTON_LABEL' => 'Spara och skicka inbjudningar',
    'LBL_DATE_END' => 'Slutdatum',
    'LBL_REMINDER_TIME' => 'Påminnelsetid',
    'LBL_EMAIL_REMINDER_SENT' => 'E-postpåminnelse skickad',
    'LBL_SEARCH_BUTTON' => 'Sök',
    'LBL_ADD_BUTTON' => 'Lägg till',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Samtal',
    'LNK_SELECT_ACCOUNT' => 'Välj företag',
    'LNK_NEW_ACCOUNT' => 'Nytt företag',
    'LNK_NEW_OPPORTUNITY' => 'Ny affär',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_MEMBER_OF' => 'Medlem i',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Anteckningar:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_LIST_MY_CALLS' => 'Mina Samtal',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
    'NOTICE_DURATION_TIME' => 'Varaktigheten måste vara större än 0',
    'LBL_CALL_INFORMATION' => 'ÖVERSIKT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Ta bort',
    'LBL_ACCEPT_STATUS' => 'Svarsstatus',
    'LBL_ACCEPT_LINK' => 'Acceptera länk',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Skapa en inbjudan',
    'LBL_CREATE_CONTACT' => 'Som kontakt',
    'LBL_CREATE_LEAD' => 'Som lead',
    'LBL_CREATE_AND_ADD' => 'Skapa och lägg till',
    'LBL_CANCEL_CREATE_INVITEE' => 'Avbryt',
    'LBL_EMPTY_SEARCH_RESULT' => 'Tyvärr, inga resultat hittades. Skapa en inbjudan nedan.',
    'LBL_NO_ACCESS' => 'Du har inte behörighet att skapa $module',

    'LBL_REPEAT_TYPE' => 'Upprepningstyp',
    'LBL_REPEAT_INTERVAL' => 'Upprepningsintervall',
    'LBL_REPEAT_DOW' => 'Upprepa veckodag',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Antal upprepningar',
    'LBL_REPEAT_PARENT_ID' => 'ID för överordnad upprepning',
    'LBL_RECURRING_SOURCE' => 'Återkommande källa',

    'LBL_SYNCED_RECURRING_MSG' => 'Samtalet skapades i ett annat system och synkroniserades med SuiteCRM. Gör ändringar i det ursprungliga samtalet i det andra systemet. Ändringar som görs i det andra systemet kan synkroniseras till den här posten.',

    // for reminders
    'LBL_REMINDERS' => 'Visa påminnelser?',
    'LBL_REMINDERS_ACTIONS' => 'Åtgärder:',
    'LBL_REMINDERS_POPUP' => 'Popup-meny',
    'LBL_REMINDERS_EMAIL' => 'Skicka e-post till inbjudna',
    'LBL_REMINDERS_WHEN' => 'När:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Ta bort påminnelse',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lägg till alla inbjudna',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lägg till påminnelse',

    'LBL_RESCHEDULE' => 'Omplanera',
    'LBL_RESCHEDULE_COUNT' => 'Samtalsförsök',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Orsak',
    'LBL_RESCHEDULE_ERROR1' => 'Välj ett giltigt datum',
    'LBL_RESCHEDULE_ERROR2' => 'Välj en anledning',
    'LBL_RESCHEDULE_PANEL' => 'Omplanera',
    'LBL_RESCHEDULE_HISTORY' => 'Historik över samtalsförsök',
    'LBL_CANCEL' => 'Avbryt',
    'LBL_SAVE' => 'Spara',

    'LBL_CALLS_RESCHEDULE' => 'Omboka samtal',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Ändringsdatum',
    'LBL_LIST_DUE_DATE'=>'Förfallodatum',
    'LBL_RESCHEDULED_BY'=>'av',
);
