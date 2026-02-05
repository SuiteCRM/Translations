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
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος Χρήστης Α/Α ',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Τίτλος',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού',
    'LBL_ACCOUNT_NAME' => 'Τίτλος',
    'LBL_ACCOUNT' => 'Εταιρεία:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_ADDRESS_INFORMATION' => 'Διευθυνση',
    'LBL_ANNUAL_REVENUE' => 'Ετήσιο εισόδημα:',
    'LBL_ANY_ADDRESS' => 'Άλλη οδός:',
    'LBL_ANY_EMAIL' => 'Email 2:',
    'LBL_ANY_PHONE' => 'Άλλο τηλ.:',
    'LBL_RATING' => 'Βαθμολογία',
    'LBL_ASSIGNED_USER' => 'Χρήστης',
    'LBL_BILLING_ADDRESS_CITY' => 'Πόλη:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Χώρα:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'ΤΚ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Περιοχή:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Διεύθυνση Τιμολόγησης 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Διεύθυνση Τιμολόγησης 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Διεύθυνση Τιμολόγησης 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Οδός:',
    'LBL_BILLING_ADDRESS' => 'Διεύθυνση Τιμολόγησης:',
    'LBL_ACCOUNT_INFORMATION' => 'Επισκόπηση',
    'LBL_CITY' => 'Πόλη:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
    'LBL_COUNTRY' => 'Χώρα:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Λογαριασμοί',
    'LBL_DUPLICATE' => 'Πιθανότητα διπλότυπης εγγραφής λογαριασμού',
    'LBL_EMAIL' => 'Ηλεκτρονικό ταχυδρομείο:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => 'Άλλο email:',
    'LBL_OTHER_PHONE' => 'Τηλ. 2:',
    'LBL_OWNERSHIP' => 'Υπεύθυνος:',
    'LBL_PARENT_ACCOUNT_ID' => 'Σύσταση από',
    'LBL_PHONE_ALT' => 'Τηλέφωνο 2:',
    'LBL_PHONE_FAX' => 'Fax γραφείου:',
    'LBL_PHONE_OFFICE' => 'Τηλέφωνο γραφείου:',
    'LBL_PHONE' => 'Τηλέφωνο:',
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
    'LBL_STATE' => 'Περιοχή:',
    'LBL_TICKER_SYMBOL' => 'Σύμβολο τηλετύπων:',
    'LBL_TYPE' => 'Τύπος:',
    'LBL_WEBSITE' => 'Ιστοσελίδα:',
    'LNK_ACCOUNT_LIST' => 'Λογαριασμοί',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία λογαριασμού',
    'MSG_DUPLICATE' => 'Η δημιουργία αυτού του λογαριασμού ενδεχομένως να δημιουργήσει αντίγραφο λογαριασμού. Μπορείτε είτε να δημιουργήσετε ένα λογαριασμό από την παρακάτω λίστα είτε να πιέσετε στην Αποθήκευση για τη δημιουργία νέου λογαριασμού με τα προεισαγμένα δεδομένα.',
    'MSG_SHOW_DUPLICATES' => 'Η δημιουργία αυτού του λογαριασμού ενδεχομένως να δημιουργήσει αντίγραφο λογαριασμού. Μπορείτε είτε να πατήσετε στην Αποθήκευση για τη δημιουργία νέου λογαριασμού με τα προεισαγμένα δεδομένα είτε να πατήσετε Ακύρωση.',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέαιοι ότι θέλετε να διαγράψετε αυτήν την εγγραφή;',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Τιμολογίων',
    'LBL_MODULE_NAME' => 'Τιμολόγια ',
    'LBL_MODULE_TITLE' => 'Τιμολόγια: Αρχική',
    'LBL_HOMEPAGE_TITLE' => 'Τα Τιμολόγια μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Τιμολογίου',
    'LNK_LIST' => 'Προβολή Τιμολογίων',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Τιμολογίων',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_NEW_FORM_TITLE' => 'Νέο Τιμολόγιο',
    'LBL_TERMS_C' => 'Όροι',
    'LBL_APPROVAL_ISSUE' => 'Θέματα Έγκρισης',
    'LBL_APPROVAL_STATUS' => 'Κατάσταση Έγκρισης',
    'LBL_BILLING_ACCOUNT' => 'Λογαριασμό',
    'LBL_BILLING_CONTACT' => 'Επαφή',
    'LBL_EXPIRATION' => 'Έγκυρο Εώς',
    'LBL_INVOICE_NUMBER' => 'Αριθμός Τιμολογίου',
    'LBL_OPPORTUNITY' => 'Όνομα Ευκαιρίας',
    'LBL_TEMPLATE_DDOWN_C' => 'Πρότυπα Τιμολογίου',
    'LBL_STAGE' => 'Στάδιο Προσφοράς',
    'LBL_TERM' => 'Όροι Πληρωμής',
    'LBL_SUBTOTAL_AMOUNT' => 'Υποσύνολο',
    'LBL_DISCOUNT_AMOUNT' => 'Έκπτωση',
    'LBL_TAX_AMOUNT' => 'Φόρος',
    'LBL_SHIPPING_AMOUNT' => 'Ναυτιλία',
    'LBL_TOTAL_AMT' => 'Σύνολο',
    'VALUE' => 'Τίτλος',
    'LBL_EMAIL_ADDRESSES' => 'Διεύθυνσεις Email',
    'LBL_LINE_ITEMS' => 'Είδη Σειράς',
    'LBL_GRAND_TOTAL' => 'Γενικό Σύνολο',
    'LBL_QUOTE_NUMBER' => 'Αριθμός Προσφοράς',
    'LBL_QUOTE_DATE' => 'Ημερομηνία Προσφοράς',
    'LBL_INVOICE_DATE' => 'Ημερομηνία Τιμολογίου',
    'LBL_DUE_DATE' => 'Ημ/νία λήξης',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_INVOICE_STATUS' => 'Κατάσταση Τιμολογίου',
    'LBL_PRODUCT_QUANITY' => 'Ποσότητα',
    'LBL_PRODUCT_NAME' => 'Προϊόν',
    'LBL_PART_NUMBER' => 'Όνομα Παρτίδας',
    'LBL_PRODUCT_NOTE' => 'Σημείωση',
    'LBL_PRODUCT_DESCRIPTION' => 'Περιγραφή',
    'LBL_LIST_PRICE' => 'Λίστα',
    'LBL_DISCOUNT_AMT' => 'Έκπτωση',
    'LBL_UNIT_PRICE' => 'Τιμή Πώλησης',
    'LBL_TOTAL_PRICE' => 'Σύνολο',
    'LBL_VAT' => 'Φόρος', //VAT
    'LBL_VAT_AMT' => 'Ποσό Φόρου', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Εισαγωγή Γραμμής Προϊόντων',
    'LBL_SERVICE_NAME' => 'Υπηρεσία',
    'LBL_SERVICE_LIST_PRICE' => 'Λίστα',
    'LBL_SERVICE_PRICE' => 'Τιμή Πώλησης',
    'LBL_SERVICE_DISCOUNT' => 'Έκπτωση',
    'LBL_ADD_SERVICE_LINE' => 'Εισαγωγή Γραμμής Υπηρεσιών',
    'LBL_REMOVE_PRODUCT_LINE' => 'Αφαίρεση',
    'LBL_PRINT_AS_PDF' => 'Εκτύπωση σε PDF',
    'LBL_EMAIL_INVOICE' => 'Αποστολή Τιμολογίου με Email',
    'LBL_LIST_NUM' => 'Αριθ',
    'LBL_PDF_NAME' => 'Τιμολόγιο',
    'LBL_EMAIL_NAME' => 'Τιμολόγιο για',
    'LBL_NO_TEMPLATE' => 'ΣΦΑΛΜΑ\nΔεν βρέθηκαν πρότυπα. Εάν δεν εχετε δημιουργήσει ένα πρότυπο Τιμολογίου, πηγαίνετε στην ενότητα Πρότυπα PDF και δημιουργήστε ένα',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Υποσύνολο + Φόρος',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF μέσω e-mail',
    'LBL_ADD_GROUP' => 'Προσθήκη Ομάδας',
    'LBL_DELETE_GROUP' => 'Διαγραφή Ομάδας',
    'LBL_GROUP_NAME' => 'Όνομα Ομάδας',
    'LBL_GROUP_TOTAL' => 'Σύνολο Ομάδας',
    'LBL_SHIPPING_TAX' => 'Φόρος Μεταφορικών',
    'LBL_SHIPPING_TAX_AMT' => 'Φόρος Μεταφορικών',
    'LBL_IMPORT_LINE_ITEMS' => 'Εισαγωγή Στοιχείων Γραμμής',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Μερικό Ποσό (Προκαθορισμένο Νόμισμα)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Έκπτωση (Προκαθορισμένο Νόμισμα)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Φόρος (Προκαθορισμένο Νόμισμα)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Μεταφορικά (Προεπιλεγμένο Νόμισμα)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Σύνολο (Προκαθορισμένο Νόμισμα)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Φόρος Μεταφορικών (Προεπιλεγμένο Νόμισμα)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Γενικό Σύνολο (Προκαθορισμένο Νόμισμα)',
    'LBL_INVOICE_TO' => 'Τιμολόγιο προς',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ομάδες Ειδών-Τεμαχίων',
    'LBL_AOS_PRODUCT_QUOTES' => 'Προσφορές Προϊόντων',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Προσφορές: Τιμολόγια',
);
