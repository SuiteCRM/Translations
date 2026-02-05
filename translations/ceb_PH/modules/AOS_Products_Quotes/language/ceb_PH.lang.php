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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Libro',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Pangalan',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga Quote sa Produkto',
    'LBL_MODULE_NAME' => 'Linya sa mga Butang',
    'LBL_MODULE_TITLE' => 'Quote sa mga Produkto: Balay',
    'LBL_HOMEPAGE_TITLE' => 'Ang akong mga Quotes sa Produkto',
    'LNK_NEW_RECORD' => 'Paghimo og Quote sa Produkto',
    'LNK_LIST' => 'Mga Quote sa Produkto',
    'LBL_SEARCH_FORM_TITLE' => 'Pangita og mga Quote sa Produkto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong Quote sa Produkto',
    'LBL_PRODUCT_NAME' => 'Pangalan',
    'LBL_PRODUCT_QTY' => 'Kantidad',
    'LBL_PRODUCT_COST_PRICE' => 'Gasto sa Presyo',
    'LBL_PRODUCT_LIST_PRICE' => 'Listahan sa Presyo',
    'LBL_PRODUCT_UNIT_PRICE' => 'Presyo kada-yunit',
    'LBL_PRODUCT_DISCOUNT' => 'Diskwento',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Diskwento nga Kantidad',
    'LBL_PART_NUMBER' => 'Kabahin nga Numero',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsyon',
    'LBL_DISCOUNT' => 'Klase sa diskwento',
    'LBL_VAT_AMT' => 'Kantidad sa Buhis',
    'LBL_VAT' => 'Buhis',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Kinatibuk-ang Presyo',
    'LBL_PRODUCT_NOTE' => 'Libro',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Nga may kalabutan sa',
    'LBL_PRODUCT' => 'Produkto',

    'LBL_SERVICE_MODULE_NAME' => 'Mga Serbisyo',
    'LBL_LIST_NUM' => 'Numero',
    'LBL_PARENT_ID' => 'Ginikanan ID',
    'LBL_GROUP_NAME' => 'Grupo',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Presyo (Default nga Kurensiya)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Listahan sa Presyo (Default nga Kurensiya)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Presyo kada-yunit (Default nag kurensiya)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Kinatibuk-ang Presyo (Default nga Kurensiya)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Diskwento (Gitakda nga Salapi)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Kantidad sa Diskwento (Default nga Kurensiya)',
    'LBL_VAT_AMT_USDOLLAR' => 'Kantidad sa Buwis (Default nga Kurensiya)',
    'LBL_PRODUCTS_SERVICES' => 'Produkto / Serbisyo',
    'LBL_PRODUCT_ID' => 'ID sa Produkto',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Mga Resibo',
    'LBL_AOS_PRODUCTS' => 'Mga Produkto',
    'LBL_AOS_QUOTES' => 'Mga Quote',
);
