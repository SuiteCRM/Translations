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
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Sukūrimo data',
    'LBL_DATE_MODIFIED' => 'Redaguota',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DELETED' => 'Ištrinta',
    'LBL_NAME' => 'Pareigybės',
    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti klientą.',
    'LBL_ACCOUNT_NAME' => 'Pareigybės',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
    'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
    'LBL_ANNUAL_REVENUE' => 'Metinės pajamos:',
    'LBL_ANY_ADDRESS' => 'Bet koks adresas:',
    'LBL_ANY_EMAIL' => 'Bet koks el. paštas:',
    'LBL_ANY_PHONE' => 'Bet koks tel. Nr.:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'Vartotojas',
    'LBL_BILLING_ADDRESS_CITY' => 'Registracijos adreso miestas:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Registracijos adreso šalis:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Registracijos adreso pašto kodas:',
    'LBL_BILLING_ADDRESS_STATE' => 'Sąskaitos adreso rajonas:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Registracijos adreso gatvė 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Registracijos adreso gatvė 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Registracijos adreso gatvė 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Registracijos adreso gatvė:',
    'LBL_BILLING_ADDRESS' => 'Registracijos adresas:',
    'LBL_ACCOUNT_INFORMATION' => 'Apžvalga',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kliento kontaktai',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_DUPLICATE' => 'Galimas kliento dubliavimasis',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_CITY' => 'Miestas:',
    'LBL_LIST_EMAIL_ADDRESS' => 'El. paštas:',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Rajonas',
    'LBL_MEMBER_OF' => 'Priklauso:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Banko sąskaita:',
    'LBL_PARENT_ACCOUNT_ID' => 'Pagrindinio kliento ID',
    'LBL_PHONE_ALT' => 'Kitas telefonas:',
    'LBL_PHONE_FAX' => 'Tel./fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Telefonas',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Saugoti klientą',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Pristatymo adreso miestas:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pristatymo adreso šalis:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pristatymo adreso pašto kodas:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Pristatymo adreso regionas:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Pristatymo adreso gatvė 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Pristatymo adreso gatvė 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Pristatymo adreso gatvė 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Pristatymo adreso gatvė:',
    'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'PVM mokėtojo kodas:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Tinklapis:',
    'LNK_ACCOUNT_LIST' => 'Naudotojai',
    'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
    'MSG_DUPLICATE' => 'Sukuriant šį vartotoją galima sukurti dubliuotį vartotoją. Kuriant tinkama būtų pasirinkti vartotoją iš sąrašo ar spaudziant Saugoti taip bandant sukurti naują vartotoją su prieš tai ivestais duomenimis.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'LBL_LIST_FORM_TITLE' => 'Pasiūlymų Sąrašas',
    'LBL_MODULE_NAME' => 'Quotes',
    'LBL_MODULE_TITLE' => 'Pasiūlymai: Pradžia',
    'LBL_HOMEPAGE_TITLE' => 'Mano Pasiūlymai',
    'LNK_NEW_RECORD' => 'Sukurti pasiūlymą',
    'LNK_LIST' => 'Rodyti Pasiūlymus',
    'LBL_SEARCH_FORM_TITLE' => 'Paieška Pasiūlymai',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Rodyti istoriją',
    'LBL_NEW_FORM_TITLE' => 'Naujas Pasiūlymas',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'Klientas',
    'LBL_BILLING_CONTACT' => 'Adresatas',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'Pardavimas',
    'LBL_TEMPLATE_DDOWN_C' => 'Pasiūlymo šablonas',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Pristatymas',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Pareigybės',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Aprašymas',
    'LBL_PRODUCT_DESCRIPTION' => 'Aprašymas:',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Išmesti',
    'LBL_CONVERT_TO_INVOICE' => 'Konvertuoti į Sąskaitą',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_QUOTE' => 'El. paštu Pasiūlymas',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Quote',
    'LBL_EMAIL_NAME' => 'Pasiūlymas dėl',
    'LBL_QUOTE_DATE' => 'Pasiūlymo Data',
    'LBL_NO_TEMPLATE' => 'Klaida šablonas nerastas. Jei nesate sukūrę pasiūlymo šablono, eikite į PDF šablonų modulį ir sukurtkite',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Nuolaida (Numatytąja Valiuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_QUOTE_TO' => 'Pasiūlymas dėl',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tax (Default Currency)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
