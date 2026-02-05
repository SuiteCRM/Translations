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
    'LBL_MODULE_NAME' => 'ದೋಷಗಳು',
    'LBL_MODULE_TITLE' => 'Bug Tracker: Home',
    'LBL_MODULE_ID' => 'ದೋಷಗಳು',
    'LBL_SEARCH_FORM_TITLE' => 'Bug Search',
    'LBL_LIST_FORM_TITLE' => 'Bug List',
    'LBL_NEW_FORM_TITLE' => 'New Bug',
    'LBL_SUBJECT' => 'ವಿಷಯ:',
    'LBL_NUMBER' => 'ಸಂಖ್ಯೆ:',
    'LBL_STATUS' => 'ಸ್ಥಿತಿ:',
    'LBL_PRIORITY' => 'ಆದ್ಯತೆ:',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'ಸಂಕಲ್ಪ',
    'LBL_LIST_LAST_MODIFIED' => 'ಕಡೆಯ ಮಾರ್ಪಾಡು',
    'LBL_INVITEE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_TYPE' => 'ಮಾದರಿ:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_RELEASE' => 'Release:',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_BUG_LIST' => 'View Bugs',
    'ERR_DELETE_RECORD' => 'You must specify a record number in order to delete the bug.',
    'LBL_LIST_MY_BUGS' => 'My Assigned Bugs',
    'LNK_IMPORT_BUGS' => 'Import Bugs',
    'LBL_FOUND_IN_RELEASE' => 'Found in Release:',
    'LBL_FIXED_IN_RELEASE' => 'Fixed in Release:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Fixed in Release',
    'LBL_WORK_LOG' => 'ಕೆಲಸದ ದ ಲಾಗ್:',
    'LBL_SOURCE' => 'Source:',
    'LBL_PRODUCT_CATEGORY' => 'ವರ್ಗ:',

    'LBL_CREATED_BY' => 'ರಚಿಸಿದವರು:',
    'LBL_MODIFIED_BY' => 'ಇವರಿಂದ ಕೊನೆಯದಾಗಿ ಮಾರ್ಪಡಿಸಲಾಗಿದೆ:',

    'LBL_LIST_EMAIL_ADDRESS' => 'ಮಿಂಚೆ ವಿಳಾಸ',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_ACCOUNT_NAME' => 'ಖಾತೆ ಹೆಸರು',
    'LBL_LIST_PHONE' => 'ದೂರವಾಣಿ',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to remove this contact from this bug?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bug Tracker',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ಚಟುವಟಿಕೆ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ಇತಿಹಾಸ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ಖಾತೆಗಳು',
    'LBL_CASES_SUBPANEL_TITLE' => 'ಪ್ರಕರಣಗಳು',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ದಾಸ್ತವೇಜುಗಳು',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ನಿಯೋಜಿತ ಬಳಕೆದಾರ',
    'LBL_ASSIGNED_TO_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ',

    'LBL_BUG_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
