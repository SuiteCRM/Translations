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
    'LBL_MODULE_NAME' => 'فروش',
    'LBL_MODULE_TITLE' => 'فروش: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی فروش',
    'LBL_LIST_FORM_TITLE' => 'لیست فروش',
    'LBL_NAME' => 'نام فروش',
    'LBL_LIST_SALE_NAME' => 'نام',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_AMOUNT' => 'مقدار',
    'LBL_LIST_DATE_CLOSED' => 'بستن',
    'LBL_LIST_SALE_STAGE' => 'مرحله فروش',
    'LBL_ACCOUNT_ID' => 'شناسه مرکز',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_AMOUNT' => 'مقدار:',
    'LBL_AMOUNT_USDOLLAR' => 'مقدار دلار آمریکا:',
    'LBL_CURRENCY' => 'واحد پول:',
    'LBL_DATE_CLOSED' => 'تاریخ مورد انتظار بستن قرارداد:',
    'LBL_TYPE' => 'نوع:',
    'LBL_CAMPAIGN' => 'کمپین:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_NEXT_STEP' => 'گام بعدی:',
    'LBL_LEAD_SOURCE' => 'منبع سرنخ:',
    'LBL_SALES_STAGE' => 'مرحله فروش:',
    'LBL_PROBABILITY' => 'احتمال (٪):',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_DUPLICATE' => 'امکان فروش تکراری',
    'MSG_DUPLICATE' => 'سابقه فروشی که می خواهید ایجاد کنید ممکن است نسخه دوم از یک سابقه فروش ثبت شده باشد. سوابق فروش شامل نام های مشابه در زیر ذکر شده است. <br> برای ادامه ایجاد این سند فروش جدید ، بر روی کلید ذخیره کلیک کرده و یا جهت بازگشت به ماژول بدون ایجاد سند فروش ، روی کلید لغو کلیک کنید.',
    'LBL_NEW_FORM_TITLE' => 'ایجاد فروش',
    'ERR_DELETE_RECORD' => 'برای حذف فروش باید یک شماره ثبت مشخص شود.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'فروش',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_ASSIGNED_TO_NAME' => 'کاربر:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'کاربر تعیین شده',
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_MODIFIED_NAME' => 'نام کاربری ویرایش کننده',
    'LBL_SALE_INFORMATION' => 'اطلاعات فروش',
    'LBL_CURRENCY_NAME' => 'نام واحد پول',
    'LBL_CURRENCY_SYMBOL' => 'نماد واحد پول',
    'LBL_EDIT_BUTTON' => 'ویرایش',
    'LBL_REMOVE' => 'حذف',

);
