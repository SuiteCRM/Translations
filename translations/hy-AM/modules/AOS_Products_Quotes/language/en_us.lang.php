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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Նշում',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Անվանում',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_FORM_TITLE' => 'Ապրանքներ/Առաջարկներ',
    'LBL_MODULE_NAME' => 'Տողի նյութեր',
    'LBL_MODULE_TITLE' => 'Արտադրանքի առաջարկներ․ Գլխավոր',
    'LBL_HOMEPAGE_TITLE' => 'Իմ արտադրանքի առաջարկները',
    'LNK_NEW_RECORD' => 'Ստեղծել արտադրանքի առաջարկ',
    'LNK_LIST' => 'Արտադրանքի առաջարկներ',
    'LBL_SEARCH_FORM_TITLE' => 'Search Products Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'New Product Quote',
    'LBL_PRODUCT_NAME' => 'Անվանում',
    'LBL_PRODUCT_QTY' => 'Քանակ',
    'LBL_PRODUCT_COST_PRICE' => 'Ինքնարժեք',
    'LBL_PRODUCT_LIST_PRICE' => 'Գնացուցակ',
    'LBL_PRODUCT_UNIT_PRICE' => 'Մեկ միավորի գինը',
    'LBL_PRODUCT_DISCOUNT' => 'Զեղչ',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Զեղչի գումարը',
    'LBL_PART_NUMBER' => 'Կոդի համարը',
    'LBL_PRODUCT_DESCRIPTION' => 'Նկարագրություն',
    'LBL_DISCOUNT' => 'Զեղչի տեսակը',
    'LBL_VAT_AMT' => 'Հարկային գումարը',
    'LBL_VAT' => 'Հարկ',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Ընդհանուր գինը',
    'LBL_PRODUCT_NOTE' => 'Նշում',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Առնչվում է',
    'LBL_PRODUCT' => 'Արտադրանք',

    'LBL_SERVICE_MODULE_NAME' => 'Սպասարկում',
    'LBL_LIST_NUM' => 'Համար',
    'LBL_PARENT_ID' => 'Ծնողի ID',
    'LBL_GROUP_NAME' => 'Խումբ',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Գնացուցակ (հիմնական արժույթը)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Գնացուցակ (հիմնական արժույթը)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Միավորի գինը (հիմնական արժույթը)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Ընդամենը (հիմնական արժույթը)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Զեղչ (ընդունված արտարժույթ)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Զեղչի գումարը (ընդունված արտարժույթ)',
    'LBL_VAT_AMT_USDOLLAR' => 'Հարկի գումարը (ընդունված արտարժույթ)',
    'LBL_PRODUCTS_SERVICES' => 'Ապրանքներ / սպասարկում',
    'LBL_PRODUCT_ID' => 'Product ID',

    'LBL_AOS_CONTRACTS' => 'Պայմանագրեր',
    'LBL_AOS_INVOICES' => 'Հաշիվ-ապրանքագիր',
    'LBL_AOS_PRODUCTS' => 'Արտադրանք',
    'LBL_AOS_QUOTES' => 'Առաջարկներ',
);
