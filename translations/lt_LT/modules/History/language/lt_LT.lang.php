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
    'LBL_MODULE_NAME' => 'History',
    'LBL_MODULE_TITLE' => 'Istorija: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Istorijos paieška',
    'LBL_LIST_FORM_TITLE' => 'History',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_LOCATION' => 'Location:',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Pradžios data:',
    'LBL_TIME' => 'Start Time:',
    'LBL_DURATION' => 'Trukmė',
    'LBL_HOURS_MINS' => '(valandos/minutės)',
    'LBL_CONTACT_NAME' => 'Contact Name: ',
    'LBL_DESCRIPTION' => 'Description:',
    'LNK_NEW_CALL' => 'Suplanuoti skambutį',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_EMAIL' => 'Archyvuoti laišką',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_NOTE_LIST' => 'Notes',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti klientą.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'Naujas susitikimas',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LBL_OPEN_ACTIVITIES' => 'Atidaryti priminimus',
    'LBL_HISTORY' => 'History',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Suplanuoti skambutį',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Create Note or Attachment',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archyvuoti laišką',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archyvuoti el. paštą',
    'LBL_LIST_STATUS' => 'Statusas:',
    'LBL_LIST_DUE_DATE' => 'Atlikimo data',
    'LBL_LIST_LAST_MODIFIED' => 'Redagavimo data',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LBL_ACCEPT_THIS' => 'patvirtinti?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'History',

    'LBL_CATEGORY' => 'Kategorija',
    'LBL_LIST_CATEGORY' => 'Kategorija:',
);
