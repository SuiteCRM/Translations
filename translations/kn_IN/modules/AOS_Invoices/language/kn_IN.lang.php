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
    'LBL_ASSIGNED_TO_ID' => 'ನಿಯೋಜಿಸಲಾದ ಬಳಕೆದಾರ ಗುರುತು',
    'LBL_ASSIGNED_TO_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ',
    'LBL_ID' => 'ಗುರುತು',
    'LBL_DATE_ENTERED' => 'ರಚಿಸಲಾದ ದಿನಾಂಕ',
    'LBL_DATE_MODIFIED' => 'ತಿದ್ದಲಾದ ದಿನಾಂಕ',
    'LBL_MODIFIED' => 'ಇವರಿಂದ ಮಾರ್ಪಡಿಸಲಾಗಿದೆ',
    'LBL_MODIFIED_NAME' => 'ಮಾರ್ಪಡಿಸಿದವರ ಹೆಸರು',
    'LBL_CREATED' => 'ರಚಿಸಿದವರು',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ',
    'LBL_DELETED' => 'ಅಳಿಸಲಾಗಿದೆ',
    'LBL_NAME' => 'ಶೀರ್ಷಿಕೆ/ಪದವಿ',
    'LBL_CREATED_USER' => 'ರಚಿಸಿದ ಬಳಕೆದಾರ',
    'LBL_MODIFIED_USER' => 'ಮಾರ್ಪಡಿಸಿದ ಬಳಕೆದಾರ',
    'ERR_DELETE_RECORD' => 'ಖಾತೆಯನ್ನು ಅಳಿಸಲು ದಾಖಲೆ ಸಂಖ್ಯೆಯನ್ನು ನಿರ್ದಿಷ್ಟಪಡಿಸಬೇಕು.',
    'LBL_ACCOUNT_NAME' => 'ಶೀರ್ಷಿಕೆ/ಪದವಿ',
    'LBL_ACCOUNT' => 'ಸಂಸ್ಠೆ:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ಚಟುವಟಿಕೆ',
    'LBL_ADDRESS_INFORMATION' => 'ವಿಳಾಸ ಮಾಹಿತಿ',
    'LBL_ANNUAL_REVENUE' => 'ವಾರ್ಷಿಕ ಆದಾಯ:',
    'LBL_ANY_ADDRESS' => 'ಯಾವುದಾದರೂ ವಿಳಾಸ:',
    'LBL_ANY_EMAIL' => 'ಯಾವುದಾದರೂ ಮಿಂಚೆ:',
    'LBL_ANY_PHONE' => 'ಯಾವುದಾದರೂ ದೂರವಾಣಿ:',
    'LBL_RATING' => 'ಶ್ರೇಣಿ',
    'LBL_ASSIGNED_USER' => 'ಬಳಕೆದಾರ',
    'LBL_BILLING_ADDRESS_CITY' => 'ಬಿಲ್ಲಿಂಗ್ ನಗರ:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'ಬಿಲ್ಲಿಂಗ್ ದೇಶ:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'ಬಿಲ್ಲಿಂಗ್ ಪಿನ್ ಕೋಡ್:',
    'LBL_BILLING_ADDRESS_STATE' => 'ಬಿಲ್ಲಿಂಗ್ ರಾಜ್ಯ:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ 4',
    'LBL_BILLING_ADDRESS_STREET' => 'ಬಿಲ್ಲಿಂಗ್ ರಸ್ತೆ:',
    'LBL_BILLING_ADDRESS' => 'ಬಿಲ್ಲಿಂಗ್ ವಿಳಾಸ:',
    'LBL_ACCOUNT_INFORMATION' => 'ಅವಲೋಕನ',
    'LBL_CITY' => 'ನಗರ:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_COUNTRY' => 'ದೇಶ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ಖಾತೆಗಳು',
    'LBL_DUPLICATE' => 'ನಕಲಿ ಖಾತೆಯ ಸಾಧ್ಯತೆ',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'ಉದ್ಯೋಗಿಗಳು:',
    'LBL_FAX' => 'ಫ್ಯಾಕ್ಸ್:',
    'LBL_INDUSTRY' => 'ಉದ್ದಿಮೆ:',
    'LBL_LIST_ACCOUNT_NAME' => 'ಖಾತೆ ಹೆಸರು',
    'LBL_LIST_CITY' => 'ನಗರ',
    'LBL_LIST_EMAIL_ADDRESS' => 'ಮಿಂಚೆ ವಿಳಾಸ',
    'LBL_LIST_PHONE' => 'ದೂರವಾಣಿ',
    'LBL_LIST_STATE' => 'ಸ್ಥಿತಿ',
    'LBL_MEMBER_OF' => 'ಇದರ ಸದಸ್ಯ:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'ಸದಸ್ಯ ಸಂಸ್ಥೆಗಳು',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ಇತರೇ ಮಿಂಚೆ:',
    'LBL_OTHER_PHONE' => 'ಇತರೆ ದೂರವಾಣಿ:',
    'LBL_OWNERSHIP' => 'ಮಾಲೀಕತ್ವ:',
    'LBL_PARENT_ACCOUNT_ID' => 'ಪೋಷಕ ಖಾತೆಯ ಐಡಿ',
    'LBL_PHONE_ALT' => 'ಪರ್ಯಾಯ ಫೋನ್ ಸಂಖ್ಯೆ:',
    'LBL_PHONE_FAX' => 'ಫೋನ್ ಫ್ಯಾಕ್ಸ್:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'ಫೋನ್:',
    'LBL_POSTAL_CODE' => 'ಪೋಸ್ಟಲ್ ಕೋಡ್:',
    'LBL_SAVE_ACCOUNT' => 'ಖಾತೆಯನ್ನು ಉಳಿಸಿ',
    'LBL_SHIPPING_ADDRESS_CITY' => 'ಸಾಗಣಿಕೆಯ ನಗರ:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'ಸಾಗಣಿಕೆಯ ದೇಶ:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'ಸಾಗಣಿಕೆಯ ಪೋಸ್ಟಲ್ ಕೋಡ್:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'ಸಾಗಣಿಕೆಯ ರಾಜ್ಯ:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'ಸಾಗಣಿಕೆಯ ರಸ್ತೆ:',
    'LBL_SHIPPING_ADDRESS' => 'ಸಾಗಣಿಕೆಯ ವಿಳಾಸ:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'ಟಿಕ್ಕರ್ ಚಿಹ್ನೆ:',
    'LBL_TYPE' => 'ಮಾದರಿ:',
    'LBL_WEBSITE' => 'ಜಾಲತಾಣ (ವೆಬ್ಸೈಟ್):',
    'LNK_ACCOUNT_LIST' => 'ಖಾತೆಗಳು',
    'LNK_NEW_ACCOUNT' => 'ಖಾತೆ ತೆರೆಯಿರಿ',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'ಈ ದಾಖಲೆಯನ್ನು ಅಳಿಸಲು ನೀವು ಖಚಿತವಾಗಿ ಬಯಸುವಿರಾ?',
    'LBL_LIST_FORM_TITLE' => 'Invoices List',
    'LBL_MODULE_NAME' => 'ಇನ್ವಾಯ್ಸ್ಗಳು',
    'LBL_MODULE_TITLE' => 'Invoices: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Invoices',
    'LNK_NEW_RECORD' => 'Create Invoice',
    'LNK_LIST' => 'View Invoices',
    'LBL_SEARCH_FORM_TITLE' => 'Search Invoices',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => 'New Invoice',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'ಖಾತೆ',
    'LBL_BILLING_CONTACT' => 'ಸಂಪರ್ಕ',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_INVOICE_NUMBER' => 'Invoice Number',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => 'Invoice Templates',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'ಹಡಗು ರವಾನೆ',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'ಶೀರ್ಷಿಕೆ/ಪದವಿ',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_QUOTE_DATE' => 'Quote Date',
    'LBL_INVOICE_DATE' => 'Invoice Date',
    'LBL_DUE_DATE' => 'Due Date',
    'LBL_STATUS' => 'ಸ್ಥಿತಿ',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'ಉತ್ಪನ್ನ',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'ಸೂಚನೆ',
    'LBL_PRODUCT_DESCRIPTION' => 'ವಿವರಣೆ',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'ತೆಗೆಯಿರಿ',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'Email Invoice',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'ಸರಕುಪಟ್ಟಿ',
    'LBL_EMAIL_NAME' => 'Invoice for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Invoice template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Invoice To',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
);
