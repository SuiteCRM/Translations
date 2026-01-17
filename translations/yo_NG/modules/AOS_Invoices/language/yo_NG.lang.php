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
    'LBL_ASSIGNED_TO_ID' => 'Onilo ti ayan',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si',
    'LBL_ID' => 'Idanimọ',
    'LBL_DATE_ENTERED' => 'Ojo ti a seda',
    'LBL_DATE_MODIFIED' => 'Ojo ti a se Atunse',
    'LBL_MODIFIED' => 'Se iyipada nipasẹ',
    'LBL_MODIFIED_NAME' => 'Atunse nipa Oruko',
    'LBL_CREATED' => 'Siseda nipa',
    'LBL_DESCRIPTION' => 'Apejuwe',
    'LBL_DELETED' => 'Paare',
    'LBL_NAME' => 'Oye',
    'LBL_CREATED_USER' => 'Seda nipase Onilo',
    'LBL_MODIFIED_USER' => 'Atunse nipa se onilo',
    'ERR_DELETE_RECORD' => 'Nomba igbasile gbodo je pato lati pa akkant re.',
    'LBL_ACCOUNT_NAME' => 'Oye',
    'LBL_ACCOUNT' => 'Ile-ise:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Akitiyan',
    'LBL_ADDRESS_INFORMATION' => 'Alaye Adiresi',
    'LBL_ANNUAL_REVENUE' => 'Owo ti o n wole lododun:',
    'LBL_ANY_ADDRESS' => 'Adiresi eyikeyi:',
    'LBL_ANY_EMAIL' => 'Eyikeyi emaili:',
    'LBL_ANY_PHONE' => 'Foonu eyikeyi:',
    'LBL_RATING' => 'Iwonsi',
    'LBL_ASSIGNED_USER' => 'Olumulo',
    'LBL_BILLING_ADDRESS_CITY' => 'Ilu idiyele:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Orileede idiyele:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Idiyele nomba atejise:',
    'LBL_BILLING_ADDRESS_STATE' => 'Idiyele ipinle:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Idiyele opopona 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Idiyele opopona keta',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Idiyele opopona keji',
    'LBL_BILLING_ADDRESS_STREET' => 'Idiyele ita:',
    'LBL_BILLING_ADDRESS' => 'Adiresi idiyele:',
    'LBL_ACCOUNT_INFORMATION' => 'Isonisoki',
    'LBL_CITY' => 'Ilu:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontati',
    'LBL_COUNTRY' => 'Orile-ede:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akanti',
    'LBL_DUPLICATE' => 'Eda akanti ti o seese',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Awon Osise:',
    'LBL_FAX' => 'Faksi:',
    'LBL_INDUSTRY' => 'Ile ise:',
    'LBL_LIST_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_LIST_CITY' => 'Ilu',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adiresi emaili',
    'LBL_LIST_PHONE' => 'Foonu',
    'LBL_LIST_STATE' => 'Ipo',
    'LBL_MEMBER_OF' => 'Egbe ti:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Omo egbe idasile',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Emaili awon omiran:',
    'LBL_OTHER_PHONE' => 'Foonu miiran:',
    'LBL_OWNERSHIP' => 'Oniwun:',
    'LBL_PARENT_ACCOUNT_ID' => 'Idanimo akanti awon obi',
    'LBL_PHONE_ALT' => 'Foonu miiran:',
    'LBL_PHONE_FAX' => 'Faksi ero ayelujara:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Foonu:',
    'LBL_POSTAL_CODE' => 'Koodu ifiweranse:',
    'LBL_SAVE_ACCOUNT' => 'Fi akkant pamo',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Fifi oko ojuomi ranse lo silu:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Fifi oko oju omi fi ranse lo si orileede:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Idiyele nomba atejise:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Fifi oko oju omi fi ranse si ipinle:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ita keji oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ita 3 oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ita 4 oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ita oko oju omi:',
    'LBL_SHIPPING_ADDRESS' => 'Adiresi ifi oko oju omi se nkan iranse:',
    'LBL_STATE' => 'Ipinle tabi Agbegbe:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Iru:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Akanti',
    'LNK_NEW_ACCOUNT' => 'Seda akkant',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Se o da e loju pe o fe pa igbasile yii re?',
    'LBL_LIST_FORM_TITLE' => 'Invoices List',
    'LBL_MODULE_NAME' => 'Risiti',
    'LBL_MODULE_TITLE' => 'Invoices: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Invoices',
    'LNK_NEW_RECORD' => 'Create Invoice',
    'LNK_LIST' => 'View Invoices',
    'LBL_SEARCH_FORM_TITLE' => 'Search Invoices',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Wo Itan to ti koja',
    'LBL_NEW_FORM_TITLE' => 'New Invoice',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'Akanti',
    'LBL_BILLING_CONTACT' => 'Kontati',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_INVOICE_NUMBER' => 'Invoice Number',
    'LBL_OPPORTUNITY' => 'Oruko anfani',
    'LBL_TEMPLATE_DDOWN_C' => 'Invoice Templates',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Sowo',
    'LBL_TOTAL_AMT' => 'Apapọ',
    'VALUE' => 'Oye',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_QUOTE_DATE' => 'Quote Date',
    'LBL_INVOICE_DATE' => 'Invoice Date',
    'LBL_DUE_DATE' => 'Asiko to ba to',
    'LBL_STATUS' => 'Ipo',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Oja',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Akosile',
    'LBL_PRODUCT_DESCRIPTION' => 'Apejuwe',
    'LBL_LIST_PRICE' => 'Akojo',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Iye tita',
    'LBL_TOTAL_PRICE' => 'Apapọ',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Ise',
    'LBL_SERVICE_LIST_PRICE' => 'Akojo',
    'LBL_SERVICE_PRICE' => 'Iye tita',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Yo kuro',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'Email Invoice',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Rìsíìtì',
    'LBL_EMAIL_NAME' => 'Invoice for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Invoice template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Oruko Akojopo',
    'LBL_GROUP_TOTAL' => 'Apapo Akojopo',
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
