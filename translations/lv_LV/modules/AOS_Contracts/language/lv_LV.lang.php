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
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
    'LBL_CONTRACT_ACCOUNT' => 'Klients',
    'LBL_OPPORTUNITY' => 'Iespēja',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_MODIFIED' => 'Rediģēja',
    'LBL_MODIFIED_NAME' => 'Modificēja vārds',
    'LBL_CREATED' => 'Autors',
    'LBL_DESCRIPTION' => 'Apraksts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_FORM_TITLE' => 'Līgumu saraksts',
    'LBL_MODULE_NAME' => 'Līgumi',
    'LBL_MODULE_TITLE' => 'Līgumi: Sākums',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Izveidot līgumu',
    'LNK_LIST' => 'View Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Līgumu meklēšana',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Aplūkot vēsturi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_NEW_FORM_TITLE' => 'Jauns līgums',
    'LBL_CONTRACT_NAME' => 'Līguma nosaukums:',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Sākuma datums:',
    'LBL_END_DATE' => 'Beigu datums',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Līguma summa:',
    'LBL_STATUS' => 'Statuss',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Klienta parakstīšanas datums:',
    'LBL_COMPANY_SIGNED_DATE' => 'Uzņēmuma parakstīšanas datums:',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Kontaktpersonas',
    'LBL_ADD_GROUP' => 'Pievienot Grupu',
    'LBL_DELETE_GROUP' => 'Dzēst Grupu',
    'LBL_GROUP_NAME' => 'Grupas nosaukums',
    'LBL_GROUP_TOTAL' => 'Grupas kopsumma',
    'LBL_PRODUCT_QUANITY' => 'Daudzums',
    'LBL_PRODUCT_NAME' => 'Produkts',
    'LBL_PART_NUMBER' => 'Daļas numurs',
    'LBL_PRODUCT_NOTE' => 'Piezīme',
    'LBL_PRODUCT_DESCRIPTION' => 'Apraksts',
    'LBL_LIST_PRICE' => 'Saraksts',
    'LBL_DISCOUNT_AMT' => 'Atlaide',
    'LBL_UNIT_PRICE' => 'Pārdošanas cena',
    'LBL_TOTAL_PRICE' => 'Kopā',
    'LBL_VAT' => 'Nodoklis',
    'LBL_VAT_AMT' => 'Nodokļa summa',
    'LBL_SERVICE_NAME' => 'Pakalpojums',
    'LBL_SERVICE_LIST_PRICE' => 'Saraksts',
    'LBL_SERVICE_PRICE' => 'Pārdošanas cena',
    'LBL_SERVICE_DISCOUNT' => 'Atlaide',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_SUBTOTAL_AMOUNT' => 'Starpsumma',
    'LBL_DISCOUNT_AMOUNT' => 'Atlaide',
    'LBL_TAX_AMOUNT' => 'Nodoklis',
    'LBL_SHIPPING_AMOUNT' => 'Piegādes pakalpojumi',
    'LBL_TOTAL_AMT' => 'Kopā',
    'LBL_GRAND_TOTAL' => 'Kopsumma',
    'LBL_SHIPPING_TAX' => 'Nodoklis piegādei',
    'LBL_SHIPPING_TAX_AMT' => 'Nodoklis piegādei',
    'LBL_ADD_PRODUCT_LINE' => 'Pievienot produkta rindu',
    'LBL_ADD_SERVICE_LINE' => 'Pievienot Pakalpojuma rindu ',
    'LBL_PRINT_AS_PDF' => 'Izdrukāt PDF formātā',
    'LBL_EMAIL_PDF' => 'PDF pa E-pastu',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Līguma summa (pamatvalūtā):',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Starpsumma (noklusētajā valūtā)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Atlaide (noklusētajā valūtā)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Nodoklis (noklusētajā valūtā)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Piegāde (noklusētajā valūtā)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Pavisam (noklusētajā valūtā)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Nodoklis piegādei (noklusētajā valūtā)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grupas kopsumma (noklusētajā valūtā)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
