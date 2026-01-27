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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'ಜ್ಞಾನಭಂಡಾರದ ಸಲಹೆಗಳು',
    'LBL_TOOL_TIP_TITLE' => 'Title:',
    'LBL_TOOL_TIP_BODY' => 'Body:',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Use as:',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'No Suggestions',
    'LBL_RESOLUTION_BUTTON' => 'ಸಂಕಲ್ಪ',
    'LBL_SUGGESTION_BOX_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_SUGGESTION_BOX_TITLE' => 'ಶೀರ್ಷಿಕೆ/ಪದವಿ',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'ಖಾತೆಯ ID',
    'LBL_ACCOUNT_NAME' => 'ಖಾತೆಯ ಹೆಸರು:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ಖಾತೆಗಳು',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ಚಟುವಟಿಕೆ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ದೋಷಗಳು',
    'LBL_CASE_NUMBER' => 'Case Number:',
    'LBL_CASE' => 'Case:',
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ಪ್ರಕರಣಗಳು',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ಇತಿಹಾಸ',
    'LBL_INVITEE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_MEMBER_OF' => 'ಖಾತೆ',
    'LBL_MODULE_NAME' => 'ಪ್ರಕರಣಗಳು',
    'LBL_MODULE_TITLE' => 'Cases: Home',
    'LBL_NEW_FORM_TITLE' => 'New Case',
    'LBL_NUMBER' => 'ಸಂಖ್ಯೆ:',
    'LBL_PRIORITY' => 'ಆದ್ಯತೆ:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ದಾಸ್ತವೇಜುಗಳು',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_SEARCH_FORM_TITLE' => 'Case Search',
    'LBL_STATUS' => 'ಸ್ಥಿತಿ:',
    'LBL_SUBJECT' => 'ವಿಷಯ:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ನಿಯೋಜಿತ ಬಳಕೆದಾರ',
    'LBL_LIST_ACCOUNT_NAME' => 'ಖಾತೆ ಹೆಸರು',
    'LBL_LIST_ASSIGNED' => 'Assigned To',
    'LBL_LIST_CLOSE' => 'ಮುಚ್ಚಿ',
    'LBL_LIST_FORM_TITLE' => 'Case List',
    'LBL_LIST_LAST_MODIFIED' => 'ಕಡೆಯ ಮಾರ್ಪಾಡು',
    'LBL_LIST_MY_CASES' => 'My Open Cases',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_LIST_SUBJECT' => 'Subject',

    'LNK_CASE_LIST' => 'View Cases',
    'LNK_NEW_CASE' => 'ಕೇಸ್ ಸೃಷ್ಟಿಸಿ',
    'LBL_LIST_DATE_CREATED' => 'ರಚಿಸಲಾದ ದಿನಾಂಕ',
    'LBL_ASSIGNED_TO_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Work Log',
    'LNK_IMPORT_CASES' => 'Import Cases',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LBL_CASE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Attachments:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Add file',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Created by',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
