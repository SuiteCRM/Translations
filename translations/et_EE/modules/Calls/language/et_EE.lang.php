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
    'LBL_MODULE_NAME' => 'Calls',
    'LBL_MODULE_TITLE' => 'Telefonikõned: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Telefonikõne otsing',
    'LBL_LIST_FORM_TITLE' => 'Telefonikõne loend',
    'LBL_NEW_FORM_TITLE' => 'Loo kohtumine',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Eraisikud',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'Seotud ID',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'Meelespea',
    'LBL_CONTACT_NAME' => 'Kontakt',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Suund:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'Kestus tundides:',
    'LBL_DURATION_MINUTES' => 'Kestus minutites:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Seotud:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planeerimine',
    'LBL_ADD_INVITEE' => 'Lisa kutsutuid',
    'LBL_NAME' => 'Nimi',
    'LBL_FIRST_NAME' => 'Eesnimi',
    'LBL_LAST_NAME' => 'Perekonnanimi',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Hüpikaken',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Meeldetuletus kõigile osalejatele',
    'LBL_EMAIL_REMINDER' => 'E-posti meeldetuletus',
    'LBL_EMAIL_REMINDER_TIME' => 'E-posti meeldetuletuse aeg',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'Meeldetuletuse aeg',
    'LBL_EMAIL_REMINDER_SENT' => 'E-posti meeldetuletus saadetud',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'Uus võimalus',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Eraisikud',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_LIST_MY_CALLS' => 'Minu kõned',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Remove',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Nõusoleku link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Kutsu osaleja',
    'LBL_CREATE_CONTACT' => 'Kontaktina',
    'LBL_CREATE_LEAD' => 'Juhtlõngana',
    'LBL_CREATE_AND_ADD' => 'Loo ja lisa',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Vabandust, tulemusi ei leitud. Palun lisa kutse allpool.',
    'LBL_NO_ACCESS' => 'Teil puudub ligipääs moodulile $module',

    'LBL_REPEAT_TYPE' => 'Kordumise liik',
    'LBL_REPEAT_INTERVAL' => 'Kordumise intervall',
    'LBL_REPEAT_DOW' => 'Korda nädalapäeval',
    'LBL_REPEAT_UNTIL' => 'korda kuni',
    'LBL_REPEAT_COUNT' => 'Kordamiste arv',
    'LBL_REPEAT_PARENT_ID' => 'Korduse omaniku ID',
    'LBL_RECURRING_SOURCE' => 'Kordumise allikas',

    'LBL_SYNCED_RECURRING_MSG' => 'See kõne pärineb teisest süsteemist ja oli sünkroonitud SuiteCRM-i. Muudatused tuleb teha algses süsteemis.
Tehtud muudatused sünkroonitakse uuesti SuiteCRM-i.',

    // for reminders
    'LBL_REMINDERS' => 'Meeldetuletused',
    'LBL_REMINDERS_ACTIONS' => 'Tegevused:',
    'LBL_REMINDERS_POPUP' => 'Hüpikaken',
    'LBL_REMINDERS_EMAIL' => 'Saada osalejatele kiri',
    'LBL_REMINDERS_WHEN' => 'Millal:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Eemalda meelespea',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lisa kõik kutsutud',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lisa meelespea',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Põhjus',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Kõneajalugu',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => 'Save',

    'LBL_CALLS_RESCHEDULE' => 'Kõnede graafiku muutmine',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Date Modified',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'liites',
);
