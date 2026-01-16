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
    'LBL_ASSIGNED_TO_NAME' => 'Contract Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Kunder',
    'LBL_OPPORTUNITY' => 'Mulighed',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_DATE_MODIFIED' => 'Ændret dato',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_MODIFIED_NAME' => 'Ændret af navn',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Oprettet af bruger',
    'LBL_MODIFIED_USER' => 'Ændret af bruger',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Kontrakter',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Opret kontrakt',
    'LNK_LIST' => 'View Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vis historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Startdato',
    'LBL_END_DATE' => 'Slutdato',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Tilføj gruppe',
    'LBL_DELETE_GROUP' => 'Slet gruppe',
    'LBL_GROUP_NAME' => 'Gruppenavn',
    'LBL_GROUP_TOTAL' => 'Gruppetotal',
    'LBL_PRODUCT_QUANITY' => 'Antal',
    'LBL_PRODUCT_NAME' => 'Produkt',
    'LBL_PART_NUMBER' => 'Varenummer',
    'LBL_PRODUCT_NOTE' => 'Noter',
    'LBL_PRODUCT_DESCRIPTION' => 'Beskrivelse',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Rabat',
    'LBL_UNIT_PRICE' => 'Salgspris',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Moms',
    'LBL_VAT_AMT' => 'Moms beløb',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Salgspris',
    'LBL_SERVICE_DISCOUNT' => 'Rabat',
    'LBL_LINE_ITEMS' => 'Fakturalinjer',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Rabat',
    'LBL_TAX_AMOUNT' => 'Moms',
    'LBL_SHIPPING_AMOUNT' => 'Fragt',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Samlet total',
    'LBL_SHIPPING_TAX' => 'Fragt skat',
    'LBL_SHIPPING_TAX_AMT' => 'Fragt skat',
    'LBL_ADD_PRODUCT_LINE' => 'Tilføj produktlinje',
    'LBL_ADD_SERVICE_LINE' => 'Tilføj servicelinje ',
    'LBL_PRINT_AS_PDF' => 'Print som PDF',
    'LBL_EMAIL_PDF' => 'E-mail PDF',
    'LBL_PDF_NAME' => 'Kontrakt',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (standardvaluta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Rabat (standardvaluta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Moms (standardvaluta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Fragt (standardvaluta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (standardvaluta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Fragt skat (standardvaluta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Samlet total (standardvaluta)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Fakturalinje grupper',
    'LBL_AOS_PRODUCT_QUOTES' => 'Produkttilbud',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Tilbud: Kontrakter',
);
