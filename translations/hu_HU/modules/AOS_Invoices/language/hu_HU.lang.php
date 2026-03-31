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
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó ID',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozva',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Üzenet tartalma',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Megnevezés',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Megnevezés',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ANNUAL_REVENUE' => 'Éves bevétel:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Minősítés:',
    'LBL_ASSIGNED_USER' => 'Felhasználó',
    'LBL_BILLING_ADDRESS_CITY' => 'Számlázási cím, város:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Számlázási ország:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Számlázási irányítószám:',
    'LBL_BILLING_ADDRESS_STATE' => 'Számlázási megye/régió:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Számlázási cím, utca 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Számlázási cím, utca 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Számlázási cím, utca 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Számlázási cím, utca:',
    'LBL_BILLING_ADDRESS' => 'Számlázási cím:',
    'LBL_ACCOUNT_INFORMATION' => 'Áttekintés',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Alkalmazottak:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_CITY' => 'Város',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email:',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Megye/régió',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb eMail:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Ügyfelek',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'MSG_DUPLICATE' => 'Az Ügyfél létrehozása duplikációt eredményezhet. Kérem, válasszon egy már meglevőt a listából, vagy a Mentés gombra kattintva hozza létre az új Ügyfelet az előzőleg rögzített adatokkal.',
    'MSG_SHOW_DUPLICATES' => 'Az Ügyfél létrehozása duplikációt eredményezhet. A Mentés gombra kattintva hozza létre az új Ügyfelet vagy a Mégsem gombra kattintva hagyja a csudába.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'Számlák listája',
    'LBL_MODULE_NAME' => 'Invoices',
    'LBL_MODULE_TITLE' => 'Számlák: Főoldal',
    'LBL_HOMEPAGE_TITLE' => 'Számláim',
    'LNK_NEW_RECORD' => 'Számla létrehozása',
    'LNK_LIST' => 'Számla nézet',
    'LBL_SEARCH_FORM_TITLE' => 'Keresés számlák között',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_NEW_FORM_TITLE' => 'Új számla',
    'LBL_TERMS_C' => 'Feltételek',
    'LBL_APPROVAL_ISSUE' => 'Jóváhagyási kérdések',
    'LBL_APPROVAL_STATUS' => 'Jóváhagyási állapot',
    'LBL_BILLING_ACCOUNT' => 'Ügyfél',
    'LBL_BILLING_CONTACT' => 'Kapcsolattartó',
    'LBL_EXPIRATION' => 'Érvényes-ig',
    'LBL_INVOICE_NUMBER' => 'Számlaszám',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => 'Számla sablonok',
    'LBL_STAGE' => 'Ajánlat állapota',
    'LBL_TERM' => 'Fizetési feltételek',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Összesen',
    'VALUE' => 'Megnevezés',
    'LBL_EMAIL_ADDRESSES' => 'Email címek',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Ajánlat száma',
    'LBL_QUOTE_DATE' => 'Ajánlatadás dátuma',
    'LBL_INVOICE_DATE' => 'Számlázás dátuma',
    'LBL_DUE_DATE' => 'Határidő dátum',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Számla állapota',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Üzenet tartalma',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Összesen',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Eltávolítás',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'Számlalevél',
    'LBL_LIST_NUM' => 'Szám',
    'LBL_PDF_NAME' => 'Invoice',
    'LBL_EMAIL_NAME' => 'Számla részére',
    'LBL_NO_TEMPLATE' => 'Hiba\nNem található sablon. Kérem, a PDF-sablonok modulban hozzon létre egyet!',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Részösszeg Brutto',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Tételek importálása',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Számla ide',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Termék idézetek',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Idézetek: számlák',
);
