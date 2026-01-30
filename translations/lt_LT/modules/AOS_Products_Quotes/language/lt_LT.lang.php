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
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NAME' => 'Vardas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_FORM_TITLE' => 'Produktų Pasiūlymų Sąrašas',
    'LBL_MODULE_NAME' => 'Pasiūlymai',
    'LBL_MODULE_TITLE' => 'Pasiūlymai: Pradžia',
    'LBL_HOMEPAGE_TITLE' => 'Mano Produktų Pasiūlymai',
    'LNK_NEW_RECORD' => 'Sukurti Produkto Pasiūlymą',
    'LNK_LIST' => 'Produktų Pasiūlymai',
    'LBL_SEARCH_FORM_TITLE' => 'Search Products Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Peržiūros istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_NEW_FORM_TITLE' => 'New Product Quote',
    'LBL_PRODUCT_NAME' => 'Vardas',
    'LBL_PRODUCT_QTY' => 'Kiekis',
    'LBL_PRODUCT_COST_PRICE' => 'Savikaina',
    'LBL_PRODUCT_LIST_PRICE' => 'Kainos Sąrašas',
    'LBL_PRODUCT_UNIT_PRICE' => 'Vieneto Kaina',
    'LBL_PRODUCT_DISCOUNT' => 'Nuolaida',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Nuolaidos Suma',
    'LBL_PART_NUMBER' => 'Vaidmens Numeris',
    'LBL_PRODUCT_DESCRIPTION' => 'Aprašymas',
    'LBL_DISCOUNT' => 'Nuolaidos Tipas',
    'LBL_VAT_AMT' => 'Mokesčio Suma',
    'LBL_VAT' => 'Mokesčiai',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Bendroji Kaina',
    'LBL_PRODUCT_NOTE' => 'Aprašymas',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Susijęs su',
    'LBL_PRODUCT' => 'Prekė',

    'LBL_SERVICE_MODULE_NAME' => 'Paslaugos',
    'LBL_LIST_NUM' => 'Numeris',
    'LBL_PARENT_ID' => 'Šakninio ID',
    'LBL_GROUP_NAME' => 'Grupės',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Savikaina (Numatytąja Valiuta)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Kainos Sąrašas(Numatytąja Valiuta)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Vieneto Kaina (Numatytąja Valiuta)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Visa Kaina (Numatytąja Valiuta)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Nuolaida (Numatytąja valiuta)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Nuolaidos Suma (Numatytąja Valiuta)',
    'LBL_VAT_AMT_USDOLLAR' => 'Mokesčio Suma (Numatytąja Valiuta)',
    'LBL_PRODUCTS_SERVICES' => 'Product / Service',
    'LBL_PRODUCT_ID' => 'Product ID',

    'LBL_AOS_CONTRACTS' => 'Sutartys',
    'LBL_AOS_INVOICES' => 'Sąskaitos',
    'LBL_AOS_PRODUCTS' => 'Produktai',
    'LBL_AOS_QUOTES' => 'Pasiūlymai',
);
