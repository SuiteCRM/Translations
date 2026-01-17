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
    'LBL_CONTRACT_ACCOUNT' => 'Ettevõtted',
    'LBL_OPPORTUNITY' => 'Müügivõimalused',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_MODIFIED' => 'Muutja',
    'LBL_MODIFIED_NAME' => 'Muutja nime järgi',
    'LBL_CREATED' => 'Loodud',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_DELETED' => 'Kustutatud',
    'LBL_NAME' => 'Lepingu pealkiri',
    'LBL_CREATED_USER' => 'Looja',
    'LBL_MODIFIED_USER' => 'Muutja',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_FORM_TITLE' => 'Lepingute nimekiri',
    'LBL_MODULE_NAME' => 'Lepingud',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'Minu lepingud',
    'LNK_NEW_RECORD' => 'Loo leping',
    'LNK_LIST' => 'Vaata lepinguid',
    'LBL_SEARCH_FORM_TITLE' => 'Otsi lepinguid',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vaata ajalugu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_NEW_FORM_TITLE' => 'Uus Leping',
    'LBL_CONTRACT_NAME' => 'Lepingu Nimi',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Alguskuupäev',
    'LBL_END_DATE' => 'Lõppkuupäev',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Olek',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Lepingu tüüp',
    'LBL_CONTACT' => 'Eraisikud',
    'LBL_ADD_GROUP' => 'Lisa grupp',
    'LBL_DELETE_GROUP' => 'Kustuta grupp',
    'LBL_GROUP_NAME' => 'Grupi nimi',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_PRODUCT_QUANITY' => 'Kogus',
    'LBL_PRODUCT_NAME' => 'Artikkel',
    'LBL_PART_NUMBER' => 'Osa number',
    'LBL_PRODUCT_NOTE' => 'Märkused',
    'LBL_PRODUCT_DESCRIPTION' => 'Kirjeldus',
    'LBL_LIST_PRICE' => 'Loend',
    'LBL_DISCOUNT_AMT' => 'Allahindlus',
    'LBL_UNIT_PRICE' => 'Müügihind',
    'LBL_TOTAL_PRICE' => 'Kokku',
    'LBL_VAT' => 'Maks',
    'LBL_VAT_AMT' => 'Maksud kokku',
    'LBL_SERVICE_NAME' => 'Teenus',
    'LBL_SERVICE_LIST_PRICE' => 'Loend',
    'LBL_SERVICE_PRICE' => 'Müügihind',
    'LBL_SERVICE_DISCOUNT' => 'Allahindlus',
    'LBL_LINE_ITEMS' => 'Read',
    'LBL_SUBTOTAL_AMOUNT' => 'Vahesumma',
    'LBL_DISCOUNT_AMOUNT' => 'Allahindlus',
    'LBL_TAX_AMOUNT' => 'Maks',
    'LBL_SHIPPING_AMOUNT' => 'Tarnimine',
    'LBL_TOTAL_AMT' => 'Kokku',
    'LBL_GRAND_TOTAL' => 'Kõik kokku',
    'LBL_SHIPPING_TAX' => 'Saatmiskulu',
    'LBL_SHIPPING_TAX_AMT' => 'Saatmiskulu',
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_PRINT_AS_PDF' => 'Prindi PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Leping',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created an Contract template, go to the PDF templates module and create one',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Contract Value (Default Currency)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Vahesumma (Põhivaluutas)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Allahindlus (Põhivaluutas)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Maksud (Põhivaluutas)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Hind Kokku (Põhivaluutas)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ridade grupid',
    'LBL_AOS_PRODUCT_QUOTES' => 'Toodete hinnapakkumised',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Pakkumised: Lepingud',
);
