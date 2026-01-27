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
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DESCRIPTION' => 'یادداشت',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_FORM_TITLE' => 'Products Quotes List',
    'LBL_MODULE_NAME' => 'ردیف',
    'LBL_MODULE_TITLE' => 'به نقل از محصولات: صفحه اصلی',
    'LBL_HOMEPAGE_TITLE' => 'به نقل از محصولات من',
    'LNK_NEW_RECORD' => 'ایجاد محصول نقل قول',
    'LNK_LIST' => 'به نقل از محصولات',
    'LBL_SEARCH_FORM_TITLE' => 'Search Products Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'مشاهده تاریخچه',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_NEW_FORM_TITLE' => 'New Product Quote',
    'LBL_PRODUCT_NAME' => 'نام',
    'LBL_PRODUCT_QTY' => 'تعداد',
    'LBL_PRODUCT_COST_PRICE' => 'قیمت تمام شده',
    'LBL_PRODUCT_LIST_PRICE' => 'لیست قیمت',
    'LBL_PRODUCT_UNIT_PRICE' => 'قیمت واحد',
    'LBL_PRODUCT_DISCOUNT' => 'تخفیف',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'مقدار تخفیف',
    'LBL_PART_NUMBER' => 'شماره قطعه',
    'LBL_PRODUCT_DESCRIPTION' => 'توضیحات',
    'LBL_DISCOUNT' => 'نوع تخفیف',
    'LBL_VAT_AMT' => 'مقدار مالیات',
    'LBL_VAT' => 'مالیات',
    'LBL_PRODUCT_TOTAL_PRICE' => 'قیمت کل',
    'LBL_PRODUCT_NOTE' => 'یادداشت',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'مربوط به',
    'LBL_PRODUCT' => 'مجصول',

    'LBL_SERVICE_MODULE_NAME' => 'خدمات',
    'LBL_LIST_NUM' => 'شماره',
    'LBL_PARENT_ID' => 'شناسه والد',
    'LBL_GROUP_NAME' => 'گروه',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'قیمت تمام شده (ارز پیش فرض)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'لیست قیمت (ارز پیش فرض)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'قیمت واحد (ارز پیش فرض)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'قیمت تمام شده (ارز پیش فرض)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'تخفیف (واحد پول پیش‌فرض)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount Amount (Default Currency)',
    'LBL_VAT_AMT_USDOLLAR' => 'مقدار مالیات (ارز پیش فرض)',
    'LBL_PRODUCTS_SERVICES' => 'کالا / خدمات',
    'LBL_PRODUCT_ID' => 'Product ID',

    'LBL_AOS_CONTRACTS' => 'قراردادها',
    'LBL_AOS_INVOICES' => 'فاکتورها',
    'LBL_AOS_PRODUCTS' => 'محصولات',
    'LBL_AOS_QUOTES' => 'پیش‌فاکتورها',
);
