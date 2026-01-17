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
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Tandaan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga quote ng mga produkto',
    'LBL_MODULE_NAME' => 'Ang Aytem sa Linya',
    'LBL_MODULE_TITLE' => 'Mga quote ng mga produkto: Bahay',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga quote ng produkto',
    'LNK_NEW_RECORD' => 'Lumikha ng quote ng produkto',
    'LNK_LIST' => 'Mga quote ng mga produkto',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang mga quote ng mga produkto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Bagong quote ng produkto',
    'LBL_PRODUCT_NAME' => 'Ang Pangalan',
    'LBL_PRODUCT_QTY' => 'Dami',
    'LBL_PRODUCT_COST_PRICE' => 'Presyo ng gastos',
    'LBL_PRODUCT_LIST_PRICE' => 'Listahan ng presyo',
    'LBL_PRODUCT_UNIT_PRICE' => 'Presyo ng yunit',
    'LBL_PRODUCT_DISCOUNT' => 'Diskawnt',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Halaga ng diskwento',
    'LBL_PART_NUMBER' => 'Numero ng Parte',
    'LBL_PRODUCT_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DISCOUNT' => 'Uri ng diskwento',
    'LBL_VAT_AMT' => 'Halaga ng Tax',
    'LBL_VAT' => 'Tax',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Buong presyo',
    'LBL_PRODUCT_NOTE' => 'Tandaan',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Para sa kaugnayan',
    'LBL_PRODUCT' => 'Ang produkto',

    'LBL_SERVICE_MODULE_NAME' => 'Mga serbisyo',
    'LBL_LIST_NUM' => 'Numero',
    'LBL_PARENT_ID' => 'ID ng magulang',
    'LBL_GROUP_NAME' => 'Grupo',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Presyo ng gastos (Default na pera)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Listahan ng presyo (Deafult na pera)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Presyo ng yunit (Default na pera)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Buong presyo (Deafult na pera)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Diskawnt (Default na Kurensiya)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Halaga ng diskwento (Default na pera)',
    'LBL_VAT_AMT_USDOLLAR' => 'Halaga ng buwis (Default na pera)',
    'LBL_PRODUCTS_SERVICES' => 'Produkto / Serbisyo',
    'LBL_PRODUCT_ID' => 'ID ng produkto',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Mga invoice',
    'LBL_AOS_PRODUCTS' => 'Ang mga produkto',
    'LBL_AOS_QUOTES' => 'Mga panipi',
);
