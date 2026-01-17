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
    'LBL_MODULE_NAME' => 'Calls',
    'LBL_MODULE_TITLE' => 'Calls: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Call Search',
    'LBL_LIST_FORM_TITLE' => 'Call List',
    'LBL_NEW_FORM_TITLE' => 'Make you Create Appointment',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Contacts',
    'LBL_LIST_RELATED_TO' => 'Id wey e dey related to',
    'LBL_LIST_RELATED_TO_ID' => 'ID wey e dey related to',
    'LBL_LIST_DATE' => 'Date wey e begin',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'Reminder:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DESCRIPTION' => 'Now here you go sabi as the thing be:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_HOURS_MINUTES' => '(hours/mminutes)',
    'LBL_DATE_TIME' => 'Date & time wey you start:',
    'LBL_TIME' => 'Time wey e start:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log call',
    'LNK_NEW_MEETING' => 'Make you Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'E get specific record number before person fit comot the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Related To:',
    'LNK_NEW_APPOINTMENT' => 'Make you Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_NAME' => 'Wetin be your name',
    'LBL_FIRST_NAME' => 'Name wey come first',
    'LBL_LAST_NAME' => 'Name wey last',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'Date wey e end',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'We don send Email reminder',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads dem',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users dem',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Member for',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dem give am',
    'LBL_LIST_MY_CALLS' => 'My Calls',
    'LBL_ASSIGNED_TO_NAME' => 'Dem give am',
    'LBL_ASSIGNED_TO_ID' => 'User wey dem give am to',
    'NOTICE_DURATION_TIME' => 'Duration gats pass 0',
    'LBL_CALL_INFORMATION' => 'Overview', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Comot am',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Accept Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Make an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Clean am',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, we no see any results. Abeg, make you create an invitee below.',
    'LBL_NO_ACCESS' => 'You never get access to create $module',

    'LBL_REPEAT_TYPE' => 'Make you Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Make you Repeat Interval',
    'LBL_REPEAT_DOW' => 'Make you repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Make you repeat until',
    'LBL_REPEAT_COUNT' => 'Make you repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Make you repeat parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'Na from another system this call wey we put for SuiteCRM come from. To change am, go the original call wey dey the original system wey we carry am from. You fit put changes wey you do for other system inside this record.',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Send Email give invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Comot reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call wey you Attempt',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Reason',
    'LBL_RESCHEDULE_ERROR1' => 'Abeg select date wey correct',
    'LBL_RESCHEDULE_ERROR2' => 'Abeg select reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Clean am',
    'LBL_SAVE' => 'Save',

    'LBL_CALLS_RESCHEDULE' => 'Postpone calls',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'De day wey dem modify am',
    'LBL_LIST_DUE_DATE'=>'Date way e due',
    'LBL_RESCHEDULED_BY'=>'by',
);
