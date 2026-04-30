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
    'LBL_MODULE_NAME' => 'Activities',
    'LBL_MODULE_TITLE' => 'Tegevused: Avaleht',
    'LBL_SEARCH_FORM_TITLE' => 'Tegevused: Avaleht',
    'LBL_LIST_FORM_TITLE' => 'Tegevuste loend',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_OVERVIEW' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'ÜLESANDED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'KOOSOLEKUD', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'KÕNED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-KIRJAD', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'MÄRKMED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINDI', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Meeting',
    'LBL_CALL_TYPE' => 'Call',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Note',
    'LBL_DATA_TYPE_START' => 'Algus:',
    'LBL_DATA_TYPE_SENT' => 'Saadetud:',
    'LBL_DATA_TYPE_MODIFIED' => 'Muudetud:',
    'LBL_LIST_CONTACT' => 'Eraisikud',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Asukoht:',
    'LBL_DATE_TIME' => 'Alguskuupäev ja aeg:',
    'LBL_DATE' => 'Alguskuupäev:',
    'LBL_TIME' => 'Algusaeg:',
    'LBL_DURATION' => 'Kestus:',
    'LBL_HOURS_MINS' => '(tunnid/minutid)',
    'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_DESCRIPTION' => 'Description:',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Loo märkus või lisa manus',
    'LNK_NEW_EMAIL' => 'Send Email',
    'LNK_CALL_LIST' => 'Vaata telefonikõnesid',
    'LNK_MEETING_LIST' => 'Vaata kohtumisi',
    'LNK_TASK_LIST' => 'Vaata ülesandeid',
    'LNK_NOTE_LIST' => 'Vaata märkuseid',
    'LBL_DELETE_ACTIVITY' => 'Kas tahad kindlasti selle toimingu kustutada?',
    'ERR_DELETE_RECORD' => 'Ettevõtte kustutamiseks täpsusta kirje numbrit.',
    'LBL_INVITEE' => 'Kutsutud',
    'LBL_LIST_DIRECTION' => 'Suund',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
    'LNK_VIEW_CALENDAR' => 'Vaata kalendrit',
    'LBL_OPEN_ACTIVITIES' => 'Avatud tegevused',
    'LBL_HISTORY' => 'History',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Loo märkus või manus',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LNK_IMPORT_CALLS' => 'Impordi kõned',
    'LNK_IMPORT_MEETINGS' => 'Impordi kohtumised',
    'LNK_IMPORT_TASKS' => 'Impordi ülesanded',
    'LNK_IMPORT_NOTES' => 'Impordi märkused',
    'LBL_ACCEPT_THIS' => 'Kinnitada?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Activities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',

    'LBL_ACCEPT' => 'Accept' /*for 508 compliance fix*/,
);
