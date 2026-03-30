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
    'LBL_ASSIGNED_TO_NAME' => 'Manažer smlouvy',
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
    'LBL_NAME' => 'Nadpis smlouvy',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FORM_TITLE' => 'Seznam smluv',
    'LBL_MODULE_NAME' => 'Contracts',
    'LBL_MODULE_TITLE' => 'Smlouvy: domů',
    'LBL_HOMEPAGE_TITLE' => 'Mé smlouvy',
    'LNK_NEW_RECORD' => 'Vytvořit smlouvu',
    'LNK_LIST' => 'Zobrazit smluvy',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat smlouvy',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Nová smlouva',
    'LBL_CONTRACT_NAME' => 'Název smlouvy',
    'LBL_REFERENCE_CODE ' => 'Referenční kód ',
    'LBL_START_DATE' => 'Start Date',
    'LBL_END_DATE' => 'Ukončeno',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Hodnota smlouvy',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Datum podepsání zákazníkem',
    'LBL_COMPANY_SIGNED_DATE' => 'Datum podepsání společností',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Datum připomenutí obnovení',
    'LBL_CONTRACT_TYPE' => 'Typ smlouvy',
    'LBL_CONTACT' => 'Contact',
    'LBL_ADD_GROUP' => 'Přidat skupinu',
    'LBL_DELETE_GROUP' => 'Odstranit skupinu',
    'LBL_GROUP_NAME' => 'Jméno skupiny',
    'LBL_GROUP_TOTAL' => 'Celkem za skupinu',
    'LBL_PRODUCT_QUANITY' => 'Množství',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Číslo položky',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Sleva',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Daň',
    'LBL_VAT_AMT' => 'Výše daně',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_SUBTOTAL_AMOUNT' => 'Mezisoučet',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Celkový součet',
    'LBL_SHIPPING_TAX' => 'Přepravní daň',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_ADD_PRODUCT_LINE' => 'Přidat řadu produktů',
    'LBL_ADD_SERVICE_LINE' => 'Přidat řádek servisu ',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_PDF' => 'Zaslat PDF emailem',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Smlouva o',
    'LBL_NO_TEMPLATE' => 'CHYBA\nNebyla nalezena žádná šablona. Pokud jste nevytvořili žádnou šablonu smlouvy, přejděte na PDF šablony a vytvořte nějakou.',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Hodnota smlouvy (výchozí měna)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Mezisoučet (výchozí měna)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Sleva (výchozí měna)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Daň (výchozí měna)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Doprava (výchozí měna)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Celkem (standartní měna)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Přepravní daň (výchozí měna)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Celkový součet (výchozí měna)',

    'LBL_CALL_ID' => 'ID hovoru',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Nabídky produktů',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Nabídky: smlouvy',
);
