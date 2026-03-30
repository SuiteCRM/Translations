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
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Title',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Title',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => '(Deel van) e-mail:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'Gebruiker',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturering plaats:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturering land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturering postcode:',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturering Provincie:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_ACCOUNT_INFORMATION' => 'Verzoeken overzicht',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'E-mail',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Status',
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
    'LBL_SHIPPING_ADDRESS_CITY' => 'Plaats:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Verzend provincie:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Verzend straat 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Verzend straat 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Verzend straat 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Straat + huisnummer:',
    'LBL_SHIPPING_ADDRESS' => 'Afleveradres:',
    'LBL_STATE' => 'Provincie of regio:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Accounts',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'MSG_DUPLICATE' => 'Door dit account aan te maken ontstaat er waarschijnlijk een dubbel account. U kunt of een account uit de lijst hieronder selecteren of selecteer Opslaan om een nieuw account aan te maken',
    'MSG_SHOW_DUPLICATES' => 'Door dit account aan te maken ontstaat er waarschijnlijk een dubbel account. U kunt of voor Opslaan kiezen of doorgaan om een nieuw account aan te maken met zojuist ingevoerde gegegevens.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'Facturen lijst',
    'LBL_MODULE_NAME' => 'Invoices',
    'LBL_MODULE_TITLE' => 'Facturen Home',
    'LBL_HOMEPAGE_TITLE' => 'Mijn facturen',
    'LNK_NEW_RECORD' => 'Maak factuur',
    'LNK_LIST' => 'Bekijk facturen',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek facturen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe factuur',
    'LBL_TERMS_C' => 'Voorwaarden',
    'LBL_APPROVAL_ISSUE' => 'Goedkeuring probleem',
    'LBL_APPROVAL_STATUS' => 'Goedkeuring status',
    'LBL_BILLING_ACCOUNT' => 'Account',
    'LBL_BILLING_CONTACT' => 'Contactpersonen',
    'LBL_EXPIRATION' => 'Geldig tot',
    'LBL_INVOICE_NUMBER' => 'Factuurnummer',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => 'Factuur template',
    'LBL_STAGE' => 'Aanbieding status',
    'LBL_TERM' => 'Betalingsvoorwaarden',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Verzendkosten',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Title',
    'LBL_EMAIL_ADDRESSES' => 'Email adressen',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Offerte nr.',
    'LBL_QUOTE_DATE' => 'Aanbiedingsdatum',
    'LBL_INVOICE_DATE' => 'Factuurdatum',
    'LBL_DUE_DATE' => 'Verloopdatum',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Factuur status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
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
    'LBL_REMOVE_PRODUCT_LINE' => 'Remove',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'E-mail factuur',
    'LBL_LIST_NUM' => 'Nr',
    'LBL_PDF_NAME' => 'Invoice',
    'LBL_EMAIL_NAME' => 'Factuur voor',
    'LBL_NO_TEMPLATE' => 'ERROR\nGeen sjabloon gevonden. Als er nog geen factuurtemplate is, ga dan naar de PDF template module en maak er een aan',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotaal + BTW',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'BTW verzendkosten',
    'LBL_SHIPPING_TAX_AMT' => 'BTW verzendkosten',
    'LBL_IMPORT_LINE_ITEMS' => 'Importeren van regelitems',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Factuur aan',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product offertes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Offertes: Facturen',
);
