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
    'LBL_MODULE_NAME' => 'Eργαζόμενοι',
    'LBL_MODULE_TITLE' => 'Υπαλληλοι: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζητηση Υπαλληλου',
    'LBL_LIST_FORM_TITLE' => 'Eργαζόμενοι',
    'LBL_NEW_FORM_TITLE' => 'Νέος Υπάλληλος',
    'LBL_LOGIN' => 'Εγγραφή (Εισαγωγή)',
    'LBL_RESET_PREFERENCES' => 'Επιστροφή σε προεπιλεγμένες ρυθμίσεις',
    'LBL_TIME_FORMAT' => 'Μορφή ώρας:',
    'LBL_DATE_FORMAT' => 'Μορφή ημ/νίας:',
    'LBL_TIMEZONE' => 'Ζώνη ώρας:',
    'LBL_CURRENCY' => 'Νόμισμα:',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_LAST_NAME' => 'Επώνυμο',
    'LBL_LIST_EMPLOYEE_NAME' => 'Όνομα υπαλλήλου',
    'LBL_LIST_DEPARTMENT' => 'Τμήμα',
    'LBL_LIST_REPORTS_TO_NAME' => 'Αναφέρεται Σε',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Όνομα Χειριστή',
    'LBL_ERROR' => 'Σφάλμα:',
    'LBL_PASSWORD' => 'Κωδικός Πρόσβασης:',
    'LBL_USER_NAME' => 'Όνομα Χειριστή:',
    'LBL_USER_TYPE' => 'Τύπος Χρήστη',
    'LBL_FIRST_NAME' => 'Όνομα:',
    'LBL_LAST_NAME' => 'Επώνυμο:',
    'LBL_THEME' => 'Θέμα:',
    'LBL_LANGUAGE' => 'Γλώσσα:',
    'LBL_ADMIN' => 'Διαχειριστής:',
    'LBL_EMPLOYEE_INFORMATION' => 'Πληροφοριες υπαληλλου',
    'LBL_OFFICE_PHONE' => 'Τηλ. γραφείου:',
    'LBL_REPORTS_TO' => 'Αναφέρεται σε:',
    'LBL_REPORTS_TO_NAME' => 'Αναφέρει σε',
    'LBL_OTHER_PHONE' => 'Τηλ. 2:',
    'LBL_NOTES' => 'Σημειώσεις:',
    'LBL_DEPARTMENT' => 'Τμήμα:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Άλλη οδός:',
    'LBL_ANY_PHONE' => 'Άλλο τηλ.:',
    'LBL_ANY_EMAIL' => 'Email 2:',
    'LBL_ADDRESS' => 'Διεύθυνση:',
    'LBL_CITY' => 'Πόλη:',
    'LBL_STATE' => 'Περιοχή:',
    'LBL_POSTAL_CODE' => 'ΤΚ:',
    'LBL_COUNTRY' => 'Χώρα:',
    'LBL_NAME' => 'Όνομα:',
    'LBL_MOBILE_PHONE' => 'Κινητό τηλέφωνο:',
    'LBL_FAX' => 'Φαξ:',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Αποστολή emails χρησιμοποιώντας το email client στην εφαρμογή του SuiteCRM.<br><b>Εξωτερικό Ταχυδρομείο Client:</b> Αποστολή email, χρησιμοποιώντας ένα email client έξω από την εφαρμογή του SuiteCRM, όπως το Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Τηλέφωνο οικίας:',
    'LBL_WORK_PHONE' => 'Τηλέφωνο εργασίας:',
    'LBL_EMPLOYEE_STATUS' => 'Κατάσταση υπαλλήλου:',
    'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση:',
    'LBL_SAVED_SEARCH' => 'Επιλογές Διάταξης',
    'LBL_MESSENGER_ID' => 'Όνομα IM:',
    'LBL_MESSENGER_TYPE' => 'Τύπος IM:',
    'ERR_LAST_ADMIN_1' => 'Το όνομα του υπαλλήλου "',
    'ERR_LAST_ADMIN_2' => '" είναι ο τελευταίος υπάλληλος με διακιώματα administrator.  Τουλάχιστον ένας υπάλληλος πρέπει να είναι administrator.',
    'LNK_NEW_EMPLOYEE' => 'Δημιουργία υπαλλήλου',
    'LNK_EMPLOYEE_LIST' => 'Υπάλληλοι',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Κατάσταση υπαλλήλου',

    'LBL_SUITE_LOGIN' => 'Είναι Χρήστης',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Ειδοποίηση κατά την ανάθεση',
    'LBL_IS_ADMIN' => 'Είναι διαχειρηστής',
    'LBL_GROUP' => 'Χρήστης της Ομάδας Χρηστών',
    'LBL_PHOTO' => 'Φωτογραφία',
    'LBL_DELETE_USER_CONFIRM' => 'Αυτός ο υπάλληλος είναι επίσης Χρήστης. Διαγράφοντας τον θα διαγραφεί και σαν Χρήστης, με αποτέλεσμα να μην μπορεί να εισέλθει στην εφαρμογή. Θέλετε να προχωρήσετε στη διαγραφή;',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτόν τον υπάλληλο;',
    'LBL_ONLY_ACTIVE' => 'Ενεργοί Υπάλληλοι',
    'LBL_SELECT' => 'Επιλογή' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Α/Α Πιστοποίησης (Authentication)',
    'LBL_EXT_AUTHENTICATE' => 'Εξωτερική Πιστοποίηση (Authentication)',
    'LBL_GROUP_USER' => 'Χρήστης της Ομάδας Χρηστών',
    'LBL_LIST_ACCEPT_STATUS' => 'Αποδοχή κατάστασης',
    'LBL_MODIFIED_BY' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_BY_ID' => 'Τροποποιήθηκε από Id:',
    'LBL_CREATED_BY_NAME' => 'Δημιουργήθηκε από', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Χρήστης API Πύλης',
    'LBL_PSW_MODIFIED' => 'Τελευταία Αλλαγή Κωδικού Πρόσβασης',
    'LBL_SHOW_ON_EMPLOYEES' => 'Εμφάνιση Εγγραφής Χρήστη',
    'LBL_USER_HASH' => 'Κωδικός Πρόσβασης',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Κωδικός Πρόσβασης Δημιουργημένος Από Το Σύστημα',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_FAX_PHONE' => 'Φαξ',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_ADDRESS_CITY' => 'Πόλη',
    'LBL_ADDRESS_COUNTRY' => 'Χώρα',
    'LBL_ADDRESS_INFORMATION' => 'Διευθυνση',
    'LBL_ADDRESS_POSTALCODE' => 'ΤΚ',
    'LBL_ADDRESS_STATE' => 'Περιοχή',
    'LBL_ADDRESS_STREET' => 'Οδός',

    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_DATE_ENTERED' => 'Ημ/νία εισαγωγής',
    'LBL_DELETED' => 'Διαγράφηκε',

    'LBL_BUTTON_SELECT' => 'Επιλογή',
    'LBL_BUTTON_CLEAR' => 'Εκκαθάριση',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'Ανοιχτή Εξουσιοδότηση Σημείων',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Ρόλοι',
    'LBL_SECURITYGROUPS' => 'Ομάδες Ασφάλειας',
    'LBL_PROSPECT_LIST' => 'Λίστα Δυνητικών Πελάτης',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
