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
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ صارف کی شناخت',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'خط',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_FORM_TITLE' => 'مصنوعات کی قیمتوں کی فہرست',
    'LBL_MODULE_NAME' => 'لائن اشیاء',
    'LBL_MODULE_TITLE' => 'پروڈکٹ کا حوالہ جات: گھر',
    'LBL_HOMEPAGE_TITLE' => 'میری مصنوعات کا حوالہ',
    'LNK_NEW_RECORD' => 'پروڈکٹ کا اقتباس بنائیں',
    'LNK_LIST' => 'مصنوعات کی قیمتیں',
    'LBL_SEARCH_FORM_TITLE' => 'مصنوعات تلاش کریں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نیا پروڈکٹ کا اقتباس',
    'LBL_PRODUCT_NAME' => 'نام',
    'LBL_PRODUCT_QTY' => 'مقدار',
    'LBL_PRODUCT_COST_PRICE' => 'لاگت قیمت',
    'LBL_PRODUCT_LIST_PRICE' => 'فہرست قیمت',
    'LBL_PRODUCT_UNIT_PRICE' => 'اکائی قیمت',
    'LBL_PRODUCT_DISCOUNT' => 'ڈسکاؤنٹ',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'ڈسکاؤنٹ مال',
    'LBL_PART_NUMBER' => 'حصے کا نمبر',
    'LBL_PRODUCT_DESCRIPTION' => 'تفصیل',
    'LBL_DISCOUNT' => 'ڈسکاؤنٹ کی قسم',
    'LBL_VAT_AMT' => 'ٹیکس کی رقم',
    'LBL_VAT' => 'ٹیکس',
    'LBL_PRODUCT_TOTAL_PRICE' => 'کل قیمت',
    'LBL_PRODUCT_NOTE' => 'خط',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'متعلقہ سے',
    'LBL_PRODUCT' => 'مصنوعات',

    'LBL_SERVICE_MODULE_NAME' => 'خدمات',
    'LBL_LIST_NUM' => 'نمبر',
    'LBL_PARENT_ID' => 'والدین کی شناخت',
    'LBL_GROUP_NAME' => 'گروپ',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'لاگت قیمت (ڈیفالٹ کرنسی)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'لاگت قیمت (ڈیفالٹ کرنسی)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'یونٹ قیمت (ڈیفالٹ کرنسی)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'کل قیمت (پہلے سے طے شدہ کرنسی)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'کرنسی کی غفلت کی کٹوتی',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'ڈسکاؤنٹ رقم (ڈیفالٹ کرنسی)',
    'LBL_VAT_AMT_USDOLLAR' => 'ٹیکس کی رقم (ڈیفالٹ کرنسی)',
    'LBL_PRODUCTS_SERVICES' => 'پروڈکٹ / سروس',
    'LBL_PRODUCT_ID' => 'مصنوعات کی شناخت',

    'LBL_AOS_CONTRACTS' => 'معاہدے',
    'LBL_AOS_INVOICES' => 'تِجارتی سامان کی فہرِست',
    'LBL_AOS_PRODUCTS' => 'مصنوعات',
    'LBL_AOS_QUOTES' => 'حوالہ جات',
);
