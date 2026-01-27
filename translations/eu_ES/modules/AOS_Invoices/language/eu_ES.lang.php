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
    'LBL_ASSIGNED_TO_ID' => 'Esleitutako erabiltzailearen Id',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Sortze-data',
    'LBL_DATE_MODIFIED' => 'Aldaketa-data',
    'LBL_MODIFIED' => 'Nork aldatua',
    'LBL_MODIFIED_NAME' => 'Nork aldatua',
    'LBL_CREATED' => 'Sortzailea',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_DELETED' => 'Ezabatua',
    'LBL_NAME' => 'Izenburua',
    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_MODIFIED_USER' => 'Erabiltzaileak aldatua',
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_ACCOUNT_NAME' => 'Izenburua',
    'LBL_ACCOUNT' => 'Enpresa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_ADDRESS_INFORMATION' => 'Helbidearen informazioa',
    'LBL_ANNUAL_REVENUE' => 'Urteko sarrerak',
    'LBL_ANY_ADDRESS' => 'Edozein helbide:',
    'LBL_ANY_EMAIL' => 'Edozein helbide elektroniko',
    'LBL_ANY_PHONE' => 'Edozein telefono',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'Esleitua izan da',
    'LBL_BILLING_ADDRESS_CITY' => 'Kobrantza-hiria',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Kobrantza-herrialdea',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Kobrantzarako posta-kodea',
    'LBL_BILLING_ADDRESS_STATE' => 'Kobrantza-estatua/probintzia',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Kobratze-helbidearen kalea 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Kobratze-helbidearen kalea 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Kobratze-helbidearen kalea 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Kobrantza-helbidea:',
    'LBL_BILLING_ADDRESS' => 'Kobrantza helbidea',
    'LBL_ACCOUNT_INFORMATION' => 'Hautagaiari buruzko infomazioa',
    'LBL_CITY' => 'Hiria',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_COUNTRY' => 'Herrialdea',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_DUPLICATE' => 'Bikoiztuta egon litekeen kontua',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Langilea',
    'LBL_FAX' => 'Faxa',
    'LBL_INDUSTRY' => 'Industria',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_LIST_CITY' => 'Hiria',
    'LBL_LIST_EMAIL_ADDRESS' => 'Posta elektronikoa',
    'LBL_LIST_PHONE' => 'Telefonoa',
    'LBL_LIST_STATE' => 'Egoera',
    'LBL_MEMBER_OF' => 'Partaidea',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Partaide diren erakundeak',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ordezko helbide elektronikoa',
    'LBL_OTHER_PHONE' => 'Hautazko Tel.',
    'LBL_OWNERSHIP' => 'Jabea',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Ordezko telefonoa',
    'LBL_PHONE_FAX' => 'Faxa',
    'LBL_PHONE_OFFICE' => 'Telefonoa',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_POSTAL_CODE' => 'PK',
    'LBL_SAVE_ACCOUNT' => 'Kontua Gorde',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Bidalketa-hiria',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Bidalketa-herrialdea',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Bidalketa PK',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Bidalketa-estatua/probintzia',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Bidaltze-helbidearen kalea 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Bidaltze-helbidearen kalea 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Bidaltze-helbidearen kalea 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Bidalketa-helbidea',
    'LBL_SHIPPING_ADDRESS' => 'Bidalketa-helbidea',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Burtsako sigla',
    'LBL_TYPE' => 'Mota',
    'LBL_WEBSITE' => 'Web',
    'LNK_ACCOUNT_LIST' => 'Kontuak',
    'LNK_NEW_ACCOUNT' => 'Kontua sortu',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Ziur zaude erregistroa hau ezabatu nahi duzula?',
    'LBL_LIST_FORM_TITLE' => 'Invoices List',
    'LBL_MODULE_NAME' => 'Invoices',
    'LBL_MODULE_TITLE' => 'Invoices: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Invoices',
    'LNK_NEW_RECORD' => 'Create Invoice',
    'LNK_LIST' => 'View Invoices',
    'LBL_SEARCH_FORM_TITLE' => 'Search Invoices',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia ikusi',
    'LBL_NEW_FORM_TITLE' => 'New Invoice',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'Kontuak',
    'LBL_BILLING_CONTACT' => 'Kontaktuak',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_INVOICE_NUMBER' => 'Invoice Number',
    'LBL_OPPORTUNITY' => 'Aukeraren izena',
    'LBL_TEMPLATE_DDOWN_C' => 'Invoice Templates',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Bidalketak',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Izenburua',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_QUOTE_DATE' => 'Quote Date',
    'LBL_INVOICE_DATE' => 'Invoice Date',
    'LBL_DUE_DATE' => 'Iraungitze-data',
    'LBL_STATUS' => 'Egoera',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Oharrak',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskribapena',
    'LBL_LIST_PRICE' => 'Zerrendatu',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Zerrendatu',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Kendu',
    'LBL_PRINT_AS_PDF' => 'PDF Inprimatu ',
    'LBL_EMAIL_INVOICE' => 'Email Invoice',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Invoice',
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
