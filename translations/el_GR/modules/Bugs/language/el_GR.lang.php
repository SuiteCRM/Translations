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
    'LBL_MODULE_NAME' => 'Bugs',
    'LBL_MODULE_TITLE' => 'Παρακολουθηση σφαλματων: Αρχικη',
    'LBL_MODULE_ID' => 'Bugs',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση σφαλμάτων',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος σφαλματων',
    'LBL_NEW_FORM_TITLE' => 'Νεο σφαλμα',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_NUMBER' => 'Number:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_CONTACT_NAME' => 'Όνομα επαφής:',
    'LBL_CONTACT_ROLE' => 'Ρόλος:',
    'LBL_LIST_NUMBER' => 'Νούμερο',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'Resolution',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_INVITEE' => 'Contacts',
    'LBL_TYPE' => 'Type:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'Επίλυση:',
    'LBL_RELEASE' => 'Έκδοση',
    'LNK_NEW_BUG' => 'Αναφορά σφάλματος',
    'LNK_BUG_LIST' => 'Σφάλματα',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για να διαγράψετε το σφάλμα.',
    'LBL_LIST_MY_BUGS' => 'Τα ανατεθημένα σφάλματά μου',
    'LNK_IMPORT_BUGS' => 'Εισαγωγή σφαλμάτων',
    'LBL_FOUND_IN_RELEASE' => 'Βρέθηκε στην έκδοση:',
    'LBL_FIXED_IN_RELEASE' => 'Διορθώθηκε στην έκδοση:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Διορθώθηκε στην έκδοση',
    'LBL_WORK_LOG' => 'Work Log:',
    'LBL_SOURCE' => 'Πηγή:',
    'LBL_PRODUCT_CATEGORY' => 'Category:',

    'LBL_CREATED_BY' => 'Created by:',
    'LBL_MODIFIED_BY' => 'Last Modified by:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_PHONE' => 'Phone',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την επαφή από αυτό το σφάλμα;',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Σφάλματαr',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',

    'LBL_BUG_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
