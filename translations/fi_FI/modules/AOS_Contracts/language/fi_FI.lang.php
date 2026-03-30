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
    'LBL_ASSIGNED_TO_NAME' => 'Sopimusvastaava',
    'LBL_CONTRACT_ACCOUNT' => 'Account',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Nimi',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Sopimukset',
    'LBL_MODULE_NAME' => 'Contracts',
    'LBL_MODULE_TITLE' => 'Sopimukset',
    'LBL_HOMEPAGE_TITLE' => 'Omat sopimukset',
    'LNK_NEW_RECORD' => 'Uusi sopimus',
    'LNK_LIST' => 'Sopimukset',
    'LBL_SEARCH_FORM_TITLE' => 'Sopimuksien haku',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Luo sopimus',
    'LBL_CONTRACT_NAME' => 'Sopimuksen nimi',
    'LBL_REFERENCE_CODE ' => 'Sopimusnumero ',
    'LBL_START_DATE' => 'Start Date',
    'LBL_END_DATE' => 'Vanhentumispäivä',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Sopimuksen kokonaissumma',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Asiakkaan allekirjoituspäivä',
    'LBL_COMPANY_SIGNED_DATE' => 'Yrityksen allekirjoituspäivä',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Sopimuksen uusinnan muistutus',
    'LBL_CONTRACT_TYPE' => 'Sopimustyyppi',
    'LBL_CONTACT' => 'Contact',
    'LBL_ADD_GROUP' => 'Lisää ryhmä',
    'LBL_DELETE_GROUP' => 'Poista ryhmä',
    'LBL_GROUP_NAME' => 'Ryhmän nimi',
    'LBL_GROUP_TOTAL' => 'Ryhmä yhteensä',
    'LBL_PRODUCT_QUANITY' => 'Määrä',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Osanumero',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Alennus',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Alv',
    'LBL_VAT_AMT' => 'Alv:n summa',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_SUBTOTAL_AMOUNT' => 'Nettosumma',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Kokonaissumma',
    'LBL_SHIPPING_TAX' => 'Toimituskulujen ALV',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_ADD_PRODUCT_LINE' => 'Lisää tuoterivi',
    'LBL_ADD_SERVICE_LINE' => 'Lisää palvelutuoterivi',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_PDF' => 'Lähetä PDF sähköpostilla',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Sopimus asiakkaalle',
    'LBL_NO_TEMPLATE' => 'VIRHE\nEi mallipohjia. Ellet ole luonut sopimuspohjaa, siirry PDF-pohjien moduuliin ja luo pohja',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Sopimuksen Arvo (Oletusvaluutta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Yhteensä (Oletusvaluutta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Alennus (oletus valuutta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vero (Oletus valuutta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Toimituskulut (Oletusvaluutta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Yhteensä (Oletus valuutta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Toimituskulujen vero (Oletusvaluutta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Yhteensä (Oletus valuutta)',

    'LBL_CALL_ID' => 'Puhelun Tunnus',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Tuotetarjoukset',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Tarjoukset: Sopimukset',
);
