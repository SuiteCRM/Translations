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
    'ERR_NO_OPPS' => 'مواقع گرافس دیکھنے کے لئے برائے مہربانی کچھ مواقع پیدا کریں.',
    'LBL_ALL_OPPORTUNITIES' => 'یہ تمام مواقع کی کل رقم ہے ',
    'LBL_CHART_TYPE' => 'چارٹ کی قسم:',
    'LBL_CREATED_ON' => 'آخری بار چلنے پر ',
    'LBL_CLOSE_DATE_START' => 'قریبی تاریخ سے- متوقع:',
    'LBL_CLOSE_DATE_END' => 'قریبی تاریخ کی- متوقع:',
    'LBL_DATE_END' => 'آخری تاریخ:',
    'LBL_DATE_RANGE_TO' => 'کرنے کے لئے',
    'LBL_DATE_RANGE' => 'تاریخ کی حد ہے',
    'LBL_DATE_START' => 'تاریخ کا آغاز کریں:',
    'LBL_EDIT' => 'ردوبدل',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'منتخب صارفین کے لئے نتائج کی طرف سے اور منتخب لیڈ سورس کی طرف سے بہت سے مواقع دکھاتا ہے. نتیجے سیلز اسٹیج پر مبنی ہے کہ وہ بند جیت، بند ہار، یا کسی اور قیمت پر ہو گی.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'تمام مواقع نتائج کی طرف سے اور لیڈ سورس کی طرف سے',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'منتخب صارفین کے لئے منتخب لیڈ سورس کے مجموعی موقع کی مقدار دکھاتا ہے.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'تمام مواقع لیڈ سورس کی طرف سے',
    'LBL_LEAD_SOURCE_OTHER' => 'دیگر',
    'LBL_LEAD_SOURCES' => 'لیڈ سورس:',
    'LBL_MODULE_NAME' => 'ڈیش بورڈ',
    'LBL_MODULE_TITLE' => 'ڈیش بورڈ: ہوم',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'موقع کی مجموعی مقدار ایک مہینہ میں صارف کے منتخب کرنے کے نتیجے سے جہاں پر توقع تھی وہاں پر تاریخ کو بند کردیا گیا ایک مخصوص تاریخ کے اندر نتائج کی بنیاد ہے خط کے بیچنے والا سٹیج بند ہوگیا ہوں نقصان یا کسی اور کی مت میں.',
    'LBL_OPP_SIZE' => 'موقع کے سائز میں',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'وہ موقع جہاں پر قیادت کے ذریعے کی گئی',
    'LBL_OPPS_IN_STAGE' => ' بیچنے کا مرلا کہاں پر ہے',
    'LBL_OPPS_OUTCOME' => ' نتائج کہاں پر ہیں',
    'LBL_OPPS_WORTH' => 'موکے کے لائق ہونا',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'مجموعی قیمت کو دکھائیں منتخب بیچنے والے مرحلہ کے مطابق اپنے موقع کے لئے جہاں پر مقصوص تاریخ کی متوقع ہے 1 رینج میں.',
    'LBL_REFRESH' => 'تازہ دم',
    'LBL_ROLLOVER_DETAILS' => 'معلومات کے لیے قانون ختم ہوگئے ہیں.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'بچھڑ کے لیے قانون ختم ہوگئے.',
    'LBL_SALES_STAGE_FORM_DESC' => 'مجموعی موقع کی قیمت کو دکھائیں منتخب فروخت کے ذریعے جہاں پر صارف تاریخ بند کرنے کی امید کرتا ہے تاریخ ایک موقع میں ایک رینج میں ہے.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'سیلز اسٹیج کی طرف سے پائپ لائن',
    'LBL_SALES_STAGES' => 'فروخت کرنے کا مرلہ:',
    'LBL_TOTAL_PIPELINE' => 'کل پائپ لائن ہیں ',
    'LBL_USERS' => 'صارف:',
    'LBL_YEAR_BY_OUTCOME' => 'ایک مہینے میں پیپ لائن نتائج دیتا ہے',
    'LBL_YEAR' => 'سال:',
    'LNK_NEW_ACCOUNT' => 'اکاؤنٹ بنائیں',
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_CASE' => 'کیس بنائیں',
    'LNK_NEW_CONTACT' => 'رابطہ بنانا',
    'LNK_NEW_LEAD' => 'قیادت بنیں',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_NOTE' => 'نوٹ یا منسلک بنائیں',
    'LNK_NEW_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'NTC_NO_LEGENDS' => 'کوئی نہیں',

    'LBL_TITLE' => 'عنوان: ',
    'LBL_MY_MODULES_USED_SIZE' => 'رسائی کا شمار',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'ذرائع کو لیجانا نتیجے کے طور پر',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'ایک مہینے کے نتائج',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'پائپ لائن کو ذرائع کے طور پر لے جانا',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'پائپ لائن کو بیچنے کے ذرائع کے طور پر',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'میرے ماڈل استعمال ہوتے ہیں آخری تیس دن میں',
);
