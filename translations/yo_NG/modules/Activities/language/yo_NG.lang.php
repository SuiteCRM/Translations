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
    'LBL_MODULE_NAME' => 'Akitiyan',
    'LBL_MODULE_TITLE' => 'Activities: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Activities Search',
    'LBL_LIST_FORM_TITLE' => 'Activities List',
    'LBL_LIST_SUBJECT' => 'Koko-oro',
    'LBL_OVERVIEW' => 'Isonisoki', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Awon ise sise', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Ipade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Awon ipe', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Emaili', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Akosile', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Te jade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Ipade',
    'LBL_CALL_TYPE' => 'Ipe',
    'LBL_EMAIL_TYPE' => 'Imeeli',
    'LBL_NOTE_TYPE' => 'Akosile',
    'LBL_DATA_TYPE_START' => 'Start:',
    'LBL_DATA_TYPE_SENT' => 'Sent:',
    'LBL_DATA_TYPE_MODIFIED' => 'Modified:',
    'LBL_LIST_CONTACT' => 'Kontati',
    'LBL_LIST_RELATED_TO' => 'Ni ibatan si',
    'LBL_LIST_DATE' => 'Ọjọ',
    'LBL_LIST_CLOSE' => 'Pade',
    'LBL_SUBJECT' => 'Koko-oro:',
    'LBL_STATUS' => 'Ipo:',
    'LBL_LOCATION' => 'Agbegbe:',
    'LBL_DATE_TIME' => 'Ojo ati ago ibeere:',
    'LBL_DATE' => 'Ojo ibeere:',
    'LBL_TIME' => 'Asiko ibeere:',
    'LBL_DURATION' => 'Iye akoko:',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_CONTACT_NAME' => 'Contact Name: ',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Iṣeto ipade',
    'LNK_NEW_TASK' => 'Seda Ise',
    'LNK_NEW_NOTE' => 'Create Note or Add Attachment',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_TASK_LIST' => 'Wo awon ise',
    'LNK_NOTE_LIST' => 'View Notes',
    'LBL_DELETE_ACTIVITY' => 'Are you sure you want to delete this activity?',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LIST_DIRECTION' => 'Itosona',
    'LBL_DIRECTION' => 'Itosona',
    'LNK_NEW_APPOINTMENT' => 'New Appointment',
    'LNK_VIEW_CALENDAR' => 'View Calendar',
    'LBL_OPEN_ACTIVITIES' => 'Open Activities',
    'LBL_HISTORY' => 'Itan',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Seda Ise',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Seda Ise',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Iṣeto ipade',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Iṣeto ipade',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Seda Akosile abi Asomo',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Seda Akosile abi Asomo',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_LIST_STATUS' => 'Ipo',
    'LBL_LIST_DUE_DATE' => 'Asiko to ba to',
    'LBL_LIST_LAST_MODIFIED' => 'Atunse ti o kehin',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LBL_ACCEPT_THIS' => 'Ti gba?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Activities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Onilo ti ayan',

    'LBL_ACCEPT' => 'Ti gba' /*for 508 compliance fix*/,
);
