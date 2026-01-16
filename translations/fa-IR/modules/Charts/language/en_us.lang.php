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
    'ERR_NO_OPPS' => 'لطفاً تعدادی فرصت ایجاد کنید تا گراف‌های فرصت را ببینید.',
    'LBL_ALL_OPPORTUNITIES' => 'مقدا کل ارزش فرصت‌ها برابر است با',
    'LBL_CHART_TYPE' => 'نوع نمودار:',
    'LBL_CREATED_ON' => 'آخرین اجرا در ',
    'LBL_CLOSE_DATE_START' => 'تاریخ مورد انتظار بستن قرارداد - از:',
    'LBL_CLOSE_DATE_END' => 'تاریخ نزدیک - انتظار می رود:',
    'LBL_DATE_END' => 'تاریخ پایان:',
    'LBL_DATE_RANGE_TO' => 'به',
    'LBL_DATE_RANGE' => 'محدوده تاریخ',
    'LBL_DATE_START' => 'تاریخ شروع:',
    'LBL_EDIT' => 'ویرایش',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'مجموع ارزش فرصت‌ها را بر اساس منبع سرنخ با توجه به نتیجه برای کاربرهای انتخاب شده را نمایش می‌دهد. نتیجه براساس مرحله فروش تعیین می‌شود.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'تمام فرصت‌ها با توجه به منبع سرنخ با توجه به نتیجه',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'مجموع ارزش فرصت‌ها را بر اساس منبع سرنخ برای کاربرهای انتخاب شده را نمایش می‌دهد.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'تمام فرصت‌ها با توجه به منبع سرنخ',
    'LBL_LEAD_SOURCE_OTHER' => 'سایر',
    'LBL_LEAD_SOURCES' => 'منابع سرنخ:',
    'LBL_MODULE_NAME' => 'پیشخوان',
    'LBL_MODULE_TITLE' => 'داشبورد: صفحه اصلی',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'مقدار تجمعی فرصت ماه توسط نتیجه برای کاربران انتخاب شده که در آن تاریخ بسته در محدوده مشخص شده است نشان می دهد.  نتیجه در مرحله فروش برنده بسته بسته را از دست داده یا هر ارزش دیگر بودن استوار است.',
    'LBL_OPP_SIZE' => 'Opportunity size in',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'فرصت‌هایی با منبع سرنخ',
    'LBL_OPPS_IN_STAGE' => ' مرحله فروش کجاست',
    'LBL_OPPS_OUTCOME' => ' where outcome is',
    'LBL_OPPS_WORTH' => 'ارزش فرصتهای فروش',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Shows cumulative amounts by selected sales stages for your opportunities where the expected closed date is within the specified date range.',
    'LBL_REFRESH' => 'بارگزاری مجدد',
    'LBL_ROLLOVER_DETAILS' => 'تغييرات نوار برای اطلاعات بیشتر.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Rollover a wedge for details.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Shows cumulative opportunity amounts by selected sales stages for selected users where the expected closed date is within the specified date range.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'خط لوله توسط مرحله فروش',
    'LBL_SALES_STAGES' => 'مراحل فروش:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline total is',
    'LBL_USERS' => 'کاربران:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline By Month By Outcome',
    'LBL_YEAR' => 'سال:',
    'LNK_NEW_ACCOUNT' => 'ایجاد مرکز',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_CASE' => 'ایجاد خدمات',
    'LNK_NEW_CONTACT' => 'ایجاد مخاطب',
    'LNK_NEW_LEAD' => 'ایجاد سرنخ',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت یا پیوست',
    'LNK_NEW_OPPORTUNITY' => 'ایجاد فرصت',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'NTC_NO_LEGENDS' => 'هیچ‌کدام',

    'LBL_TITLE' => 'عنوان: ',
    'LBL_MY_MODULES_USED_SIZE' => 'تعداد دفعات دسترسی',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'منبع سرنخ با توجه به نتیجه',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'نتیجه با توجه به ماه',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline By Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'My Pipeline by Sales Stage',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
