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
    'LBL_ASSIGNED_TO_ID' => ' පවරා පරිශීලක අංකය',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා',
    'LBL_ID' => 'හැඳුනුම්',
    'LBL_DATE_ENTERED' => 'දිනය නිර්මාණය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'නිර්මාණය කළේ',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NAME' => 'ශීර්ෂය',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'ERR_DELETE_RECORD' => 'වාර්තාගත ගිණුම මකා දැමීම නියම කළ යුතු ය.',
    'LBL_ACCOUNT_NAME' => 'ශීර්ෂය',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'කටයුතු',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ANNUAL_REVENUE' => 'වාර්ෂික ආදායම:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_RATING' => 'ණය ශ්රේණිය',
    'LBL_ASSIGNED_USER' => ' පරිශීලක',
    'LBL_BILLING_ADDRESS_CITY' => 'අයපත් නගරය:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'අයපත් රට:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'අයපත් තැපැල් කේතය:',
    'LBL_BILLING_ADDRESS_STATE' => 'අයපත් ප්‍රාන්තය:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'අයපත් වීදිය 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'අයපත් වීදිය 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'අයපත් වීදිය 4',
    'LBL_BILLING_ADDRESS_STREET' => 'අයපත් වීදිය:',
    'LBL_BILLING_ADDRESS' => 'අයපත් ලිපිනය:',
    'LBL_ACCOUNT_INFORMATION' => 'Overview',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => ' ගිණුමේ නම',
    'LBL_LIST_CITY' => ' නගරය',
    'LBL_LIST_EMAIL_ADDRESS' => 'වි-තැපැල් ලිපිනය',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'රජයේ',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
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
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Accounts',
    'LNK_NEW_ACCOUNT' => 'ගිණුම සාදන්න',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'මිල කැඳවීම් ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'Quotes',
    'LBL_MODULE_TITLE' => 'මිල කැඳවීම්: මුල් පිටුව',
    'LBL_HOMEPAGE_TITLE' => 'මගේ මිල කැඳවීම්',
    'LNK_NEW_RECORD' => 'Quote සාදන්න',
    'LNK_LIST' => 'දැක්ම Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_NEW_FORM_TITLE' => 'නව Quote',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'අනුමැතිය තත්ත්වය',
    'LBL_BILLING_ACCOUNT' => 'ගිණුම',
    'LBL_BILLING_CONTACT' => 'සබඳතාව',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_TEMPLATE_DDOWN_C' => 'උපුටා සැකිල්ල',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'එකතුව',
    'VALUE' => 'ශීර්ෂය',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'මුලු එකතුව',
    'LBL_INVOICE_STATUS' => 'වාර්ණාවෙහි තත්වය',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'නිෂ්පාදනය',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'විස්තරය',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'එකතුව',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => ' ඉවත් කරන්න',
    'LBL_CONVERT_TO_INVOICE' => 'ඉන්වොයිසිය පරිවර්තනය කරන්න',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_QUOTE' => 'විද්යුත් උද්ධෘත',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Quote',
    'LBL_EMAIL_NAME' => 'සඳහා උපුටා',
    'LBL_QUOTE_DATE' => 'උද්ධෘත දිනය',
    'LBL_NO_TEMPLATE' => 'කිසිදු සැකිල්ල \ දෝෂය සොයාගෙන ඇත. ඔබ Quote සැකිල්ල නිර්මාණය කර නොමැති නම්, බලන්න PDF සැකිලි මොඩියුලය යන්න හා එක් නිර්මාණය',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_QUOTE_TO' => 'කිරීම සඳහා උපුටා',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tax (Default Currency)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
