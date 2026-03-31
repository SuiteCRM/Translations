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
    'LBL_ASSIGNED_TO_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
    'LBL_ID' => 'Ταυτότητα',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημ/νία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε Από',
    'LBL_MODIFIED_NAME' => 'Τροποποιήθηκε Από Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε Από',
    'LBL_DESCRIPTION' => 'Σημείωση',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Όνομα',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Προσφορών Προ¨΄οντων',
    'LBL_MODULE_NAME' => 'Line Items',
    'LBL_MODULE_TITLE' => 'Προσφορές Προϊόντων: Αρχική',
    'LBL_HOMEPAGE_TITLE' => 'Οι Προσφορές Προϊόντων μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Προσφοράς Προϊόντος',
    'LNK_LIST' => 'Προσφορές Προϊόντων',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Προσφορών Προϊόντων',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Νέα Προσφορά Προϊόντος',
    'LBL_PRODUCT_NAME' => 'Όνομα',
    'LBL_PRODUCT_QTY' => 'Quantity',
    'LBL_PRODUCT_COST_PRICE' => 'Τιμή Κόστους',
    'LBL_PRODUCT_LIST_PRICE' => 'Τιμοκατάλογος ',
    'LBL_PRODUCT_UNIT_PRICE' => 'Τιμή Τεμαχίου',
    'LBL_PRODUCT_DISCOUNT' => 'Discount',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Ποσό Έκπτωσης',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_DESCRIPTION' => 'Περιγραφή',
    'LBL_DISCOUNT' => 'Τύπος Έκπτωσης',
    'LBL_VAT_AMT' => 'Tax Amount',
    'LBL_VAT' => 'Tax',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Συνολική Τιμή',
    'LBL_PRODUCT_NOTE' => 'Σημείωση',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Σχετίζεται με',
    'LBL_PRODUCT' => 'Προϊόν',

    'LBL_SERVICE_MODULE_NAME' => 'Υπηρεσίες',
    'LBL_LIST_NUM' => 'Number',
    'LBL_PARENT_ID' => 'Parent ID',
    'LBL_GROUP_NAME' => 'Γκρουπ',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Τιμή κόστους (Προεπιλεγμένο Νόμισμα)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Τιμοκατάλογος (Προεπιλεγμένο Νόμισμα)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Τιμή Μονάδας (Προκαθορισμένο Νόμισμα)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Συνολική Τιμή (Προκαθορισμένο Νόμισμα)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Ποσό Έκπτωσης (Προκαθορισμένο Νόμισμα)',
    'LBL_VAT_AMT_USDOLLAR' => 'Ποσό Φόρου (Προκαθορισμένο Νόμισμα)',
    'LBL_PRODUCTS_SERVICES' => 'Προϊόν / Υπηρεσία',
    'LBL_PRODUCT_ID' => 'ID Προϊόντος',

    'LBL_AOS_CONTRACTS' => 'Συμβάσεις',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_PRODUCTS' => 'Products',
    'LBL_AOS_QUOTES' => 'Προσφορές',
);
