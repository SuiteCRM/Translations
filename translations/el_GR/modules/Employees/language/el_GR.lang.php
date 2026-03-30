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
    'LBL_MODULE_NAME' => 'Employees',
    'LBL_MODULE_TITLE' => 'Υπαλληλοι: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζητηση Υπαλληλου',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Νέος Υπάλληλος',
    'LBL_LOGIN' => 'Εγγραφή (Εισαγωγή)',
    'LBL_RESET_PREFERENCES' => 'Επιστροφή σε προεπιλεγμένες ρυθμίσεις',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Ζώνη ώρας:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'Όνομα υπαλλήλου',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Σφάλμα:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Τύπος Χρήστη',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'Διαχειριστής:',
    'LBL_EMPLOYEE_INFORMATION' => 'Πληροφοριες υπαληλλου',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'Αναφέρεται σε:',
    'LBL_REPORTS_TO_NAME' => 'Αναφέρει σε',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Σημειώσεις:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'Διεύθυνση:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Αποστολή emails χρησιμοποιώντας το email client στην εφαρμογή του SuiteCRM.<br><b>Εξωτερικό Ταχυδρομείο Client:</b> Αποστολή email, χρησιμοποιώντας ένα email client έξω από την εφαρμογή του SuiteCRM, όπως το Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Τηλέφωνο οικίας:',
    'LBL_WORK_PHONE' => 'Τηλέφωνο εργασίας:',
    'LBL_EMPLOYEE_STATUS' => 'Κατάσταση υπαλλήλου:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'Όνομα IM:',
    'LBL_MESSENGER_TYPE' => 'Τύπος IM:',
    'ERR_LAST_ADMIN_1' => 'Το όνομα του υπαλλήλου "',
    'ERR_LAST_ADMIN_2' => '" είναι ο τελευταίος υπάλληλος με διακιώματα administrator.  Τουλάχιστον ένας υπάλληλος πρέπει να είναι administrator.',
    'LNK_NEW_EMPLOYEE' => 'Δημιουργία υπαλλήλου',
    'LNK_EMPLOYEE_LIST' => 'Υπάλληλοι',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Κατάσταση υπαλλήλου',

    'LBL_SUITE_LOGIN' => 'Είναι Χρήστης',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Ειδοποίηση κατά την ανάθεση',
    'LBL_IS_ADMIN' => 'Είναι διαχειρηστής',
    'LBL_GROUP' => 'Χρήστης της Ομάδας Χρηστών',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Αυτός ο υπάλληλος είναι επίσης Χρήστης. Διαγράφοντας τον θα διαγραφεί και σαν Χρήστης, με αποτέλεσμα να μην μπορεί να εισέλθει στην εφαρμογή. Θέλετε να προχωρήσετε στη διαγραφή;',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον υπάλληλο;',
    'LBL_ONLY_ACTIVE' => 'Ενεργοί Υπάλληλοι',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Α/Α Πιστοποίησης (Authentication)',
    'LBL_EXT_AUTHENTICATE' => 'Εξωτερική Πιστοποίηση (Authentication)',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Χρήστης API Πύλης',
    'LBL_PSW_MODIFIED' => 'Τελευταία Αλλαγή Κωδικού Πρόσβασης',
    'LBL_SHOW_ON_EMPLOYEES' => 'Εμφάνιση Εγγραφής Χρήστη',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Κωδικός Πρόσβασης Δημιουργημένος Από Το Σύστημα',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Πόλη',
    'LBL_ADDRESS_COUNTRY' => 'Χώρα',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'ΤΚ',
    'LBL_ADDRESS_STATE' => 'Περιοχή',
    'LBL_ADDRESS_STREET' => 'Οδός',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Deleted',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
