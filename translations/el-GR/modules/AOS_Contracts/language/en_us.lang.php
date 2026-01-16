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
    'LBL_ASSIGNED_TO_NAME' => 'Διαχειριστής Συμβολαίου',
    'LBL_CONTRACT_ACCOUNT' => 'Λογαριασμό',
    'LBL_OPPORTUNITY' => 'Ευκαιρία',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Τίτλος Συμβολαίου',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Συμβολαίων',
    'LBL_MODULE_NAME' => 'Συμβάσεις',
    'LBL_MODULE_TITLE' => 'Συμβόλαια: Αρχική ',
    'LBL_HOMEPAGE_TITLE' => 'Τα Συμβόλαιά μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Συμβολαίου',
    'LNK_LIST' => 'Προβολή Συμβολαίων',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτησή Συμβολαίου ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_NEW_FORM_TITLE' => 'Νέο Συμβόλαιο',
    'LBL_CONTRACT_NAME' => 'Όνομα Συμβολαίου',
    'LBL_REFERENCE_CODE ' => 'Κωδικός Αναφοράς',
    'LBL_START_DATE' => 'Ημ/νία έναρξης',
    'LBL_END_DATE' => 'Ημερομηνία Λήξης',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Αξία Συμβολαίου',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Ημερομηνία Υπογραφής Συμβολαίου',
    'LBL_COMPANY_SIGNED_DATE' => 'Ημερομηνία Εταιρικής Υπογραφής',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Ημερομηνία Υπενθύμισης Αναναίωσης',
    'LBL_CONTRACT_TYPE' => 'Τύπος Συμβολαίου',
    'LBL_CONTACT' => 'Επαφή',
    'LBL_ADD_GROUP' => 'Προσθήκη Ομάδας',
    'LBL_DELETE_GROUP' => 'Διαγραφή Ομάδας',
    'LBL_GROUP_NAME' => 'Όνομα Ομάδας',
    'LBL_GROUP_TOTAL' => 'Σύνολο Ομάδας',
    'LBL_PRODUCT_QUANITY' => 'Ποσότητα',
    'LBL_PRODUCT_NAME' => 'Προϊόν',
    'LBL_PART_NUMBER' => 'Όνομα Παρτίδας',
    'LBL_PRODUCT_NOTE' => 'Σημείωση',
    'LBL_PRODUCT_DESCRIPTION' => 'Περιγραφή',
    'LBL_LIST_PRICE' => 'Λίστα',
    'LBL_DISCOUNT_AMT' => 'Έκπτωση',
    'LBL_UNIT_PRICE' => 'Τιμή Πώλησης',
    'LBL_TOTAL_PRICE' => 'Σύνολο',
    'LBL_VAT' => 'Φόρος',
    'LBL_VAT_AMT' => 'Ποσό Φόρου',
    'LBL_SERVICE_NAME' => 'Υπηρεσία',
    'LBL_SERVICE_LIST_PRICE' => 'Λίστα',
    'LBL_SERVICE_PRICE' => 'Τιμή Πώλησης',
    'LBL_SERVICE_DISCOUNT' => 'Έκπτωση',
    'LBL_LINE_ITEMS' => 'Είδη Σειράς',
    'LBL_SUBTOTAL_AMOUNT' => 'Υποσύνολο',
    'LBL_DISCOUNT_AMOUNT' => 'Έκπτωση',
    'LBL_TAX_AMOUNT' => 'Φόρος',
    'LBL_SHIPPING_AMOUNT' => 'Ναυτιλία',
    'LBL_TOTAL_AMT' => 'Σύνολο',
    'LBL_GRAND_TOTAL' => 'Γενικό Σύνολο',
    'LBL_SHIPPING_TAX' => 'Φόρος Μεταφορικών',
    'LBL_SHIPPING_TAX_AMT' => 'Φόρος Μεταφορικών',
    'LBL_ADD_PRODUCT_LINE' => 'Εισαγωγή Γραμμής Προϊόντων',
    'LBL_ADD_SERVICE_LINE' => 'Εισαγωγή Γραμμής Υπηρεσιών',
    'LBL_PRINT_AS_PDF' => 'Εκτύπωση σε PDF',
    'LBL_EMAIL_PDF' => 'PDF μέσω e-mail',
    'LBL_PDF_NAME' => 'Συμβόλαιο',
    'LBL_EMAIL_NAME' => 'Συμβόλαιο για',
    'LBL_NO_TEMPLATE' => 'Σφάλμα\nΔεν βρέθηκε πρότυπο.\nΠαρακαλώ δημιουργήστε ένα στο module των προτύπων PDF',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Αξία Συμβολαίου (Προεπιλεγμένο Νόμισμα)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Μερικό Ποσό (Προκαθορισμένο Νόμισμα)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Έκπτωση (Προκαθορισμένο Νόμισμα)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Φόρος (Προκαθορισμένο Νόμισμα)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Μεταφορικά (Προεπιλεγμένο Νόμισμα)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Σύνολο (Προκαθορισμένο Νόμισμα)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Φόρος Μεταφορικών (Προεπιλεγμένο Νόμισμα)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Γενικό Σύνολο (Προκαθορισμένο Νόμισμα)',

    'LBL_CALL_ID' => 'ID Κλήσης',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ομάδες Ειδών-Τεμαχίων',
    'LBL_AOS_PRODUCT_QUOTES' => 'Προσφορές Προϊόντων',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Προσφορές: Συμβόλαια',
);
