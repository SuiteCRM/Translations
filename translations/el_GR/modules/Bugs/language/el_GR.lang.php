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
    'LBL_MODULE_NAME' => 'Σφάλμα Σημείου Εντοπισμού',
    'LBL_MODULE_TITLE' => 'Παρακολουθηση σφαλματων: Αρχικη',
    'LBL_MODULE_ID' => 'Σφάλμα Σημείου Εντοπισμού',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση σφαλμάτων',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος σφαλματων',
    'LBL_NEW_FORM_TITLE' => 'Νεο σφαλμα',
    'LBL_SUBJECT' => 'Θέμα:',
    'LBL_NUMBER' => 'Αριθμός:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_PRIORITY' => 'Προτεραιότητα:',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_CONTACT_NAME' => 'Όνομα επαφής:',
    'LBL_CONTACT_ROLE' => 'Ρόλος:',
    'LBL_LIST_NUMBER' => 'Νούμερο',
    'LBL_LIST_SUBJECT' => 'Θέμα',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_PRIORITY' => 'Προτεραιότητα',
    'LBL_LIST_RESOLUTION' => 'Επίλυση',
    'LBL_LIST_LAST_MODIFIED' => 'Τελευταία τροποποίηση',
    'LBL_INVITEE' => 'Επαφές',
    'LBL_TYPE' => 'Τύπος:',
    'LBL_LIST_TYPE' => 'Τύπος',
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
    'LBL_WORK_LOG' => 'Ημερολόγιο εργασιών:',
    'LBL_SOURCE' => 'Πηγή:',
    'LBL_PRODUCT_CATEGORY' => 'Κατηγορία:',

    'LBL_CREATED_BY' => 'Δημιουργήθηκε από:',
    'LBL_MODIFIED_BY' => 'Τελευταία τροποποίηση από:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_CONTACT_NAME' => 'Όνομα Επαφής',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα λογαριασμού:',
    'LBL_LIST_PHONE' => 'Τηλέφωνο',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την επαφή από αυτό το σφάλμα;',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Σφάλματαr',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ιστορικό',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογαριασμοί',
    'LBL_CASES_SUBPANEL_TITLE' => 'Υποθέσεις',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Έργα',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Έγγραφα',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',

    'LBL_BUG_INFORMATION' => 'Επισκόπηση', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
