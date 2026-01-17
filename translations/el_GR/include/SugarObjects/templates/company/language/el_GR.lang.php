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
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού',
    'LBL_ACCOUNT_NAME' => 'Επωνυμία',
    'LBL_ACCOUNT' => 'Εταιρεία:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_ADDRESS_INFORMATION' => 'Διευθυνση',
    'LBL_ANNUAL_REVENUE' => 'Ετήσιο εισόδημα:',
    'LBL_ANY_ADDRESS' => 'Άλλη οδός:',
    'LBL_ANY_EMAIL' => 'Email 2:',
    'LBL_EMAIL_NON_PRIMARY' => 'Μη πρωτεύοντα E-mails',
    'LBL_ANY_PHONE' => 'Άλλο τηλ.:',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος:',
    'LBL_RATING' => 'Βαθμολογία',
    'LBL_ASSIGNED_TO' => 'Υπεύθυνος:',
    'LBL_ASSIGNED_USER' => 'Υπεύθυνος:',
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος:',
    'LBL_BILLING_ADDRESS_CITY' => 'Πόλη:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Χώρα:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'ΤΚ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Περιοχή:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Διεύθυνση Τιμολόγησης 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Διεύθυνση Τιμολόγησης 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Διεύθυνση Τιμολόγησης 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Οδός:',
    'LBL_BILLING_ADDRESS' => 'Διεύθυνση Τιμολόγησης:',
    'LBL_ACCOUNT_INFORMATION' => 'Εταιρικές Πληροφορίες',
    'LBL_CITY' => 'Πόλη:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
    'LBL_COUNTRY' => 'Χώρα:',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης:',
    'LBL_DATE_MODIFIED' => 'Ημ/νία τροποποίησης:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Λογαριασμοί',
    'LBL_DESCRIPTION_INFORMATION' => 'Πληροφορίες',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_DUPLICATE' => 'Πιθανότητα διπλότυπης εγγραφής λογαριασμού',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Υπάλληλοι:',
    'LBL_FAX' => 'Φαξ:',
    'LBL_INDUSTRY' => 'Επάγγελμα:',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα λογαριασμού:',
    'LBL_LIST_CITY' => 'Πόλη',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Τηλέφωνο',
    'LBL_LIST_STATE' => 'Νομός',
    'LBL_MEMBER_OF' => 'Μέλος των:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Ανήκει σε',
    'LBL_NAME' => 'Όνομα:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Άλλο email:',
    'LBL_OTHER_PHONE' => 'Τηλ. 2:',
    'LBL_OWNERSHIP' => 'Υπεύθυνος:',
    'LBL_PARENT_ACCOUNT_ID' => 'Σύσταση από',
    'LBL_PHONE_ALT' => 'Τηλέφωνο 2:',
    'LBL_PHONE_FAX' => 'Fax γραφείου:',
    'LBL_PHONE_OFFICE' => 'Τηλ. γραφείου:',
    'LBL_PHONE' => 'Τηλέφωνο:',
    'LBL_EMAIL_ADDRESS' => 'Email',
    'LBL_EMAIL_ADDRESSES' => 'Email Διεύθυνση(εις)',
    'LBL_POSTAL_CODE' => 'ΤΚ:',
    'LBL_SAVE_ACCOUNT' => 'Αποθήκευση λογαριασμού',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Πόλη:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Χώρα:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'ΤΚ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Περιοχή:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Διεύθυνση Παράδοσης 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Διεύθυνση Παράδοσης 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Διεύθυνση Παράδοσης 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Οδός:',
    'LBL_SHIPPING_ADDRESS' => 'Διεύθυνση Παράδοσης:',

    'LBL_STATE' => 'Κατάσταση:',
    'LBL_TICKER_SYMBOL' => 'Σύμβολο τηλετύπων:',
    'LBL_TYPE' => 'Τύπος:',
    'LBL_WEBSITE' => 'Ιστοσελίδα:',

    'LNK_ACCOUNT_LIST' => 'Λογαριασμοί',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία λογαριασμού',

    'MSG_DUPLICATE' => 'Δημιουργώντας αυτόν τον λογαριασμό πιθανόν να δημιουργήσετε διπλότυπη εγγραφή. Μπορείτε ή να επιλέξετε ένα λογαριασμό από τη λίστα ή να πατήσετε στη Δημιουργία Λογαριασμού για να καταχωρήσετε το νέο λογαριασμό με τα ίδια δεδομένα.',
    'MSG_SHOW_DUPLICATES' => 'Δημιουργώντας αυτόν τον λογαριασμό πιθανόν να δημιουργήσετε διπλότυπη εγγραφή. Πατήστε στη Δημιουργία Λογαριασμού για να καταχωρήσετε το νέο λογαριασμό με τα ίδια δεδομένα ή πατήστε Ακύρωση.',

    'NTC_DELETE_CONFIRMATION' => 'Είστε βέαιοι ότι θέλετε να διαγράψετε αυτήν την εγγραφή;',

    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',

);
