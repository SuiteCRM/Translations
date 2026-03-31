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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Přidat',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_END' => 'Datum ukončení',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Datum zahájení:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Schůzky',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_DURATION' => 'Duration:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Jméno',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LAST_NAME' => 'Příjmení',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Přiřazený uživatel',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Datum změny',
    'LBL_LIST_DATE' => 'Datum zahájení',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_LIST_DUE_DATE' => 'Do data',
    'LBL_LIST_FORM_TITLE' => 'Seznam schůzek',
    'LBL_LIST_MY_MEETINGS' => 'Moje schůzky',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciativy',
    'LBL_LOCATION' => 'Location:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modified by',
    'LBL_MODULE_NAME' => 'Schůzky',
    'LBL_MODULE_TITLE' => 'Schůzky: Domů',
    'LBL_NAME' => 'Název',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Posloupnost aktualizace schůzky',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Upomínka:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Odstranit',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání schůzky',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_STATUS' => 'Stav:',
    'LBL_TYPE' => 'Typ schůzky',
    'LBL_PASSWORD' => 'Heslo schůzky',
    'LBL_URL' => 'Spustit/Připojit se ke schůzce',
    'LBL_HOST_URL' => 'URL hostitele',
    'LBL_DISPLAYED_URL' => 'Zobraz URL',
    'LBL_CREATOR' => 'Tvůrce schůzek',
    'LBL_EXTERNALID' => 'Externí App ID',
    'LBL_SUBJECT' => 'Předmět:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PARENT_ID' => 'Nadřazené ID',
    'LNK_MEETING_LIST' => 'Zobrazit schůzky',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_IMPORT_MEETINGS' => 'Import schůzek',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Změněný uživatel',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'PŘEHLED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Připojit se ke schůzce',
    'LBL_ACCEPT_STATUS' => 'Přijmout stav',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nemůžete se připojit k této schůzce, protože nejste pozván.',
    'LBL_EXTNOT_RECORD_LINK' => 'Zobrazit schůzku',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nemůžete spustit tuto schůzku, protože nejste její správce ani vlastník.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Jako Iniciativa',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušit',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Opakovat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'Tato schůzka pochází z jiného systému a byla synchronizována do SuiteCRM. K provedení změn přejděte do záznamu schůzky v tom systému. Změny pak mohou být synchronizovány.',
    'LBL_RELATED_TO' => 'Souvisí s:',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Akce:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Emailové pozvánky',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Odebrání připomenutí',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Přidat všechny pozvánky',
    'LBL_REMINDERS_ADD_REMINDER' => 'Přidat upozornění',

    // for google sync
    'LBL_GSYNC_ID' => 'ID události Google',
    'LBL_GSYNC_LASTSYNC' => 'Poslední časové razítko Google Sync',
);
