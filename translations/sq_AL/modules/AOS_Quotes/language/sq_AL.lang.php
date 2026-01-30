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
    'LBL_ASSIGNED_TO_ID' => 'Id e përdoruesit të caktuar',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_DELETED' => 'E fshirë',
    'LBL_NAME' => 'Titulli',
    'LBL_CREATED_USER' => 'Krijuar nga përdoruesi',
    'LBL_MODIFIED_USER' => 'Modifikuar nga përdoruesi',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë llogarinë',
    'LBL_ACCOUNT_NAME' => 'Titulli',
    'LBL_ACCOUNT' => 'Kompania',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_ANNUAL_REVENUE' => 'Të ardhurat vjetore',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_RATING' => 'Klasifikimi:',
    'LBL_ASSIGNED_USER' => 'Përdorues',
    'LBL_BILLING_ADDRESS_CITY' => 'Qyteti i faturës',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Shteti i faturës',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kodi postal i faturës',
    'LBL_BILLING_ADDRESS_STATE' => 'Shteti i faturës',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rruga 2 e faturës',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rruga 3 e faturës',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rruga 4 e faturës',
    'LBL_BILLING_ADDRESS_STREET' => 'Rruga e faturës',
    'LBL_BILLING_ADDRESS' => 'Adresa e faturës:',
    'LBL_ACCOUNT_INFORMATION' => 'Pasqyra',
    'LBL_CITY' => 'Qyteti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DUPLICATE' => 'Llogari e mundshme e dubluar',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Puntorët',
    'LBL_FAX' => 'faks',
    'LBL_INDUSTRY' => 'Industria',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_CITY' => 'Qyteti',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_LIST_PHONE' => 'Telefoni',
    'LBL_LIST_STATE' => 'Shteti',
    'LBL_MEMBER_OF' => 'Anëtar i:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizatat anëtare',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email tjetër',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_OWNERSHIP' => 'Pronësia',
    'LBL_PARENT_ACCOUNT_ID' => 'ID e llogarisë mëmë',
    'LBL_PHONE_ALT' => 'Telefon tjetër',
    'LBL_PHONE_FAX' => 'telefon faks',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Telefoni',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_SAVE_ACCOUNT' => 'Ruaj llogarinë',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Qyteti i transportit',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shteti i transportit',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Kodi postal i transportit',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shteti i transportit',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rruga e 2 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rruga e 3 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rruga e 4 e transportit',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rruga e transportit',
    'LBL_SHIPPING_ADDRESS' => 'Adresa e transportit',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Simboli i teleshkruesit',
    'LBL_TYPE' => 'Lloji',
    'LBL_WEBSITE' => 'ueb faqja',
    'LNK_ACCOUNT_LIST' => 'Accounts',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
    'LBL_LIST_FORM_TITLE' => 'Quotes List',
    'LBL_MODULE_NAME' => 'Kuotat',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Quotes',
    'LNK_NEW_RECORD' => 'Krijo kuota',
    'LNK_LIST' => 'View Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'Search Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => 'New Quote',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'llogaritë',
    'LBL_BILLING_CONTACT' => 'Kontaktet',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'Mundësite',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Transporti',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titulli',
    'LBL_EMAIL_ADDRESSES' => 'Email Adresat',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Produkti',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Shënimet',
    'LBL_PRODUCT_DESCRIPTION' => 'Përshkrim',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Fshijë',
    'LBL_CONVERT_TO_INVOICE' => 'Convert to Invoice',
    'LBL_PRINT_AS_PDF' => 'Shtyp si PDF',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Quote',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Quotation Date',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Krijo mundësi',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tax (Default Currency)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
