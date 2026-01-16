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
    'LBL_MODULE_NAME' => 'Awon ipe',
    'LBL_MODULE_TITLE' => 'Calls: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Call Search',
    'LBL_LIST_FORM_TITLE' => 'Call List',
    'LBL_NEW_FORM_TITLE' => 'Ṣẹda ipinnu lati pade',
    'LBL_LIST_CLOSE' => 'Pade',
    'LBL_LIST_SUBJECT' => 'Koko-oro',
    'LBL_LIST_CONTACT' => 'Kontati',
    'LBL_LIST_RELATED_TO' => 'Ni ibatan si',
    'LBL_LIST_RELATED_TO_ID' => 'Related to ID',
    'LBL_LIST_DATE' => 'Ojo ibeere',
    'LBL_LIST_DIRECTION' => 'Itosona',
    'LBL_SUBJECT' => 'Koko-oro:',
    'LBL_REMINDER' => 'Reminder:',
    'LBL_CONTACT_NAME' => 'Kontati:',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_STATUS' => 'Ipo:',
    'LBL_DIRECTION' => 'Itosona:',
    'LBL_DATE' => 'Ojo ibeere:',
    'LBL_DURATION' => 'Iye akoko:',
    'LBL_DURATION_HOURS' => 'Iye wakati:',
    'LBL_DURATION_MINUTES' => 'Iye iseju:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Ojo ati ago ibeere:',
    'LBL_TIME' => 'Asiko ibeere:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Iṣeto ipade',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'Nomba igbasile gbodo je pato lati pa akkant re.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Related To:',
    'LNK_NEW_APPOINTMENT' => 'Ṣẹda ipinnu lati pade',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_NAME' => 'Oruko',
    'LBL_FIRST_NAME' => 'Oruko akoko',
    'LBL_LAST_NAME' => 'Oruko ikehin',
    'LBL_EMAIL' => 'Imeeli',
    'LBL_PHONE' => 'Foonu',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'Ojo to gbehin',
    'LBL_REMINDER_TIME' => 'Aago Oluranti',
    'LBL_EMAIL_REMINDER_SENT' => 'Olurannileti emaili ranṣẹ',
    'LBL_SEARCH_BUTTON' => 'Sawari',
    'LBL_ADD_BUTTON' => 'Fikun',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Awon ipe',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Yorisi',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontati',
    'LBL_USERS_SUBPANEL_TITLE' => 'Onilo',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Egbe ti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Akosile',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ayan si',
    'LBL_LIST_MY_CALLS' => 'My Calls',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si',
    'LBL_ASSIGNED_TO_ID' => 'Onilo ti ayan',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'Isonisoki', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Yo kuro',
    'LBL_ACCEPT_STATUS' => 'Gba Ipo',
    'LBL_ACCEPT_LINK' => 'Accept Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Fagile',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'O ni ase lati seda $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Awon olurannileti',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Ọjọ',
    'LBL_RESCHEDULE_REASON' => 'Reason',
    'LBL_RESCHEDULE_ERROR1' => 'Jowo yan ojo ti o wulo',
    'LBL_RESCHEDULE_ERROR2' => 'Jowo yan idi kan',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Fagile',
    'LBL_SAVE' => 'Fipamọ',

    'LBL_CALLS_RESCHEDULE' => 'Awon atokuro ipe',
    'LBL_LIST_STATUS'=>'Ipo',
    'LBL_LIST_DATE_MODIFIED'=>'Ojo ti a se Atunse',
    'LBL_LIST_DUE_DATE'=>'Asiko to ba to',
    'LBL_RESCHEDULED_BY'=>'nipa',
);
