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
    'LBL_MODULE_NAME' => 'ಇತಿಹಾಸ',
    'LBL_MODULE_TITLE' => 'History: Home',
    'LBL_SEARCH_FORM_TITLE' => 'History Search',
    'LBL_LIST_FORM_TITLE' => 'ಇತಿಹಾಸ',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'ಸಂಪರ್ಕ',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'ಮುಚ್ಚಿ',
    'LBL_SUBJECT' => 'ವಿಷಯ:',
    'LBL_STATUS' => 'ಸ್ಥಿತಿ:',
    'LBL_LOCATION' => 'ಸ್ಥಳ:',
    'LBL_DATE_TIME' => 'ಪ್ರಾರಂಭ ದಿನಾಂಕ ಮತ್ತು ಸಮಯ:',
    'LBL_DATE' => 'Start Date:',
    'LBL_TIME' => 'Start Time:',
    'LBL_DURATION' => 'Duration:',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_CONTACT_NAME' => 'Contact Name: ',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_CALL_LIST' => 'ಕರೆಗಳು',
    'LNK_MEETING_LIST' => 'ಸಭೆಗಳು',
    'LNK_TASK_LIST' => 'ಕಾರ್ಯಗಳು',
    'LNK_NOTE_LIST' => 'ಟಿಪ್ಪಣಿಗಳು',
    'ERR_DELETE_RECORD' => 'ಖಾತೆಯನ್ನು ಅಳಿಸಲು ದಾಖಲೆ ಸಂಖ್ಯೆಯನ್ನು ನಿರ್ದಿಷ್ಟಪಡಿಸಬೇಕು.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_DIRECTION' => 'Direction',
    'LNK_NEW_APPOINTMENT' => 'New Appointment',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LBL_OPEN_ACTIVITIES' => 'Open Activities',
    'LBL_HISTORY' => 'ಇತಿಹಾಸ',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Create Note or Attachment',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_LIST_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_LAST_MODIFIED' => 'ಕಡೆಯ ಮಾರ್ಪಾಡು',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ಇತಿಹಾಸ',

    'LBL_CATEGORY' => 'ವರ್ಗ',
    'LBL_LIST_CATEGORY' => 'ವರ್ಗ',
);
