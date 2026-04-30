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
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Meetings',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_DURATION' => 'Duration:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_ASSIGNED_TO_NAME' => 'Hozzárendelve:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_CONTACT' => 'Kapcsolattartó',
    'LBL_LIST_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_FORM_TITLE' => 'Találkozók listája',
    'LBL_LIST_MY_MEETINGS' => 'Találkozóim',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_LOCATION' => 'Location:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modified by',
    'LBL_MODULE_NAME' => 'Meetings',
    'LBL_MODULE_TITLE' => 'Találkozók: Főoldal',
    'LBL_NAME' => 'Név',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail emlékeztető elküldve',
    'LBL_REMINDER' => 'Emlékeztető:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail az összes meghívott részére',
    'LBL_EMAIL_REMINDER' => 'E-mail emlékeztető',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail emlékeztető időpontja',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_SEARCH_FORM_TITLE' => 'Találkozó keresése',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Megbeszélés típusa',
    'LBL_PASSWORD' => 'Megbeszélés jelszava',
    'LBL_URL' => 'Megbeszélés Kezdete',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Megbeszélés Létrehozása',
    'LBL_EXTERNALID' => 'Külső App azonosító',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Megbeszéléshez csatlakozás',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Link elfogadása',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nem tud bekapcsolódni a megbeszélésre, mert nem Meghívott.',
    'LBL_EXTNOT_RECORD_LINK' => 'Megbeszélés Nézet',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nem tudja elindítani a megbeszélést mert nem Adminisztrátor vagy nem tulajdonosa a megbeszélésnek.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Meghívott létrehozása',
    'LBL_CREATE_CONTACT' => 'kapcsolattartóként',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Érdeklődőként',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'létrhozás és hozzáadás',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sajnálom, nem találtam erőforrást. Kérem adjon meg legalább egy meghívottat alább.',
    'LBL_NO_ACCESS' => 'Nincs hozzáférése a $module létrehozásához',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Ismétlődés típusa',
    'LBL_REPEAT_INTERVAL' => 'Ismétlődési időköz',
    'LBL_REPEAT_DOW' => 'Ismétlődés Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Ismétlődések száma',
    'LBL_REPEAT_PARENT_ID' => 'Ismétlődés szülő ID',
    'LBL_RECURRING_SOURCE' => 'Ismétlődés forrása',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Összefüggésben:',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Műveletek:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-mail a meghívottaknak',
    'LBL_REMINDERS_WHEN' => 'mikor:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Összes meghívott hozzáadása',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
