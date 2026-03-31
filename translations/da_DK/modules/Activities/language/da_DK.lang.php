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
    'LBL_MODULE_NAME' => 'Activities',
    'LBL_MODULE_TITLE' => 'Aktiviteter: Startside',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter aktiviteter',
    'LBL_LIST_FORM_TITLE' => 'Aktivitetsliste',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_OVERVIEW' => 'Oversigt', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'OPGAVER', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MØDER', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'OPKALD', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTER', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Meeting',
    'LBL_CALL_TYPE' => 'Call',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Note',
    'LBL_DATA_TYPE_START' => 'Start:',
    'LBL_DATA_TYPE_SENT' => 'Sendt:',
    'LBL_DATA_TYPE_MODIFIED' => 'Ændret:',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => 'Lokation:',
    'LBL_DATE_TIME' => 'Startdato & tid:',
    'LBL_DATE' => 'Startdato:',
    'LBL_TIME' => 'Starttid:',
    'LBL_DURATION' => 'Varighed:',
    'LBL_HOURS_MINS' => '(timer/minutter)',
    'LBL_CONTACT_NAME' => 'Kontaktnavn: ',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Opkald',
    'LNK_MEETING_LIST' => 'Møder',
    'LNK_TASK_LIST' => 'Opgaver',
    'LNK_NOTE_LIST' => 'Noter',
    'LBL_DELETE_ACTIVITY' => 'Er du sikker på du vil slette denne aktivitet?',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette en kunde.',
    'LBL_INVITEE' => 'Deltagere',
    'LBL_LIST_DIRECTION' => 'Retning',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'Ny aftale',
    'LNK_VIEW_CALENDAR' => 'I dag',
    'LBL_OPEN_ACTIVITIES' => 'Åbne aktiviteter',
    'LBL_HISTORY' => 'History',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Opret note eller vedhæft',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Forfaldsdato',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LNK_IMPORT_CALLS' => 'Importér opkald',
    'LNK_IMPORT_MEETINGS' => 'Importér møder',
    'LNK_IMPORT_TASKS' => 'Importér opgaver',
    'LNK_IMPORT_NOTES' => 'Importer noter',
    'LBL_ACCEPT_THIS' => 'Acceptér?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Activities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',

    'LBL_ACCEPT' => 'Accept' /*for 508 compliance fix*/,
);
