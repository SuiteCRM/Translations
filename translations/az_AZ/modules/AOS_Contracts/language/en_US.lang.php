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
    'LBL_CONTRACT_ACCOUNT' => 'Hesab',
    'LBL_OPPORTUNITY' => 'Fürsət',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_MODIFIED' => 'Redaktə etdi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_DELETED' => 'Silinib',
    'LBL_NAME' => 'Contract Title',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Contracts List',
    'LBL_MODULE_NAME' => 'Müqavilələr',
    'LBL_MODULE_TITLE' => 'Contracts: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Contracts',
    'LNK_NEW_RECORD' => 'Create Contract',
    'LNK_LIST' => 'View Contracts',
    'LBL_SEARCH_FORM_TITLE' => 'Search Contracts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçəyə bax',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_NEW_FORM_TITLE' => 'New Contract',
    'LBL_CONTRACT_NAME' => 'Contract Name',
    'LBL_REFERENCE_CODE ' => 'Reference Code ',
    'LBL_START_DATE' => 'Başlama tarixi',
    'LBL_END_DATE' => 'Bitmə tarixi',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Contract Value',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Customer Signed Date',
    'LBL_COMPANY_SIGNED_DATE' => 'Company Signed Date',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renewal Reminder Date',
    'LBL_CONTRACT_TYPE' => 'Contract Type',
    'LBL_CONTACT' => 'Əlaqə',
    'LBL_ADD_GROUP' => 'Qrup Artır',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Qrup Adı',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_PRODUCT_QUANITY' => 'Miqdar',
    'LBL_PRODUCT_NAME' => 'Məhsul',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Qeyd',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıqlama',
    'LBL_LIST_PRICE' => 'Siyahı',
    'LBL_DISCOUNT_AMT' => 'Endirim',
    'LBL_UNIT_PRICE' => 'Satış Qiyməti',
    'LBL_TOTAL_PRICE' => 'Yekun',
    'LBL_VAT' => 'Vergi',
    'LBL_VAT_AMT' => 'Vergi məbləği',
    'LBL_SERVICE_NAME' => 'Xidmət',
    'LBL_SERVICE_LIST_PRICE' => 'Siyahı',
    'LBL_SERVICE_PRICE' => 'Satış Qiyməti',
    'LBL_SERVICE_DISCOUNT' => 'Endirim',
    'LBL_LINE_ITEMS' => 'Sətir elementləri',
    'LBL_SUBTOTAL_AMOUNT' => 'Ara cəmi',
    'LBL_DISCOUNT_AMOUNT' => 'Endirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Daşıma',
    'LBL_TOTAL_AMT' => 'Yekun',
    'LBL_GRAND_TOTAL' => 'Ümumi cəmi',
    'LBL_SHIPPING_TAX' => 'Göndərmə Vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Göndərmə Vergisi',
    'LBL_ADD_PRODUCT_LINE' => 'Məhsul xətti əlavə edin',
    'LBL_ADD_SERVICE_LINE' => 'Xidmət xətti əlavə edin ',
    'LBL_PRINT_AS_PDF' => 'PDF olaraq çap edin',
    'LBL_EMAIL_PDF' => 'E-poçt PDF',
    'LBL_PDF_NAME' => 'Müqavilə',
    'LBL_EMAIL_NAME' => 'Contract for',
    'LBL_NO_TEMPLATE' => 'XƏTA\nHeç bir şablon tapılmadı. Müqavilə şablonu yaratmamısınızsa, PDF şablonları moduluna keçin və onu yaradın',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Müqavilə Dəyəri (Defolt Valyuta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ara cəmi (Defolt Valyuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Endirim (Defolt Valyuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (Defolt Valyuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Daşınma(Defolt Valyuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Cəmi (Defolt Valyuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Daşınma Vergisi (Defolt Valyuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Ümumi Cəmi (Defolt Valyuta)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
);
