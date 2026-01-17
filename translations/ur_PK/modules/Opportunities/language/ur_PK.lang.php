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
    'LBL_MODULE_NAME' => 'مواقعے',
    'LBL_MODULE_TITLE' => 'گھر کا موقع',
    'LBL_SEARCH_FORM_TITLE' => 'تلاش کا موقع',
    'LBL_LIST_FORM_TITLE' => 'فہرست کا موقع',
    'LBL_OPPORTUNITY_NAME' => 'موقع کا نام:',
    'LBL_OPPORTUNITY' => 'موقع:',
    'LBL_NAME' => 'مواقع مناسب موضوع',
    'LBL_INVITEE' => 'رابطے',
    'LBL_CURRENCIES' => 'کرنسیاں',
    'LBL_LIST_OPPORTUNITY_NAME' => 'نام',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_AMOUNT' => 'رقم کا موقع',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'رقم',
    'LBL_LIST_DATE_CLOSED' => 'بند کریں',
    'LBL_LIST_SALES_STAGE' => 'فروخت کے مرحلے',
    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت',
    'LBL_CURRENCY_NAME' => 'کرنسی کا نام',
    'LBL_CURRENCY_SYMBOL' => 'کرنسی کی علامت',

    'UPDATE' => 'کرنسی ابڈیٹ کا موقع',
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_AMOUNT' => 'رقم کا موقع:',
    'LBL_AMOUNT_USDOLLAR' => 'رقم:',
    'LBL_CURRENCY' => 'کرنسی:',
    'LBL_DATE_CLOSED' => 'متوقع بند تاریخ:',
    'LBL_TYPE' => 'قسم:',
    'LBL_CAMPAIGN' => 'مہم:',
    'LBL_NEXT_STEP' => 'اگلا مرحلہ:',
    'LBL_LEAD_SOURCE' => 'لیڈ ماخذ:',
    'LBL_SALES_STAGE' => 'فروخت کا مرحلہ:',
    'LBL_PROBABILITY' => 'امکان (٪):',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DUPLICATE' => 'ممکنا ایک جیسی ایشیا کا موقع',
    'MSG_DUPLICATE' => 'یہ آپ کے لیے ایک موقع ہے کہ آپ ایک جیسے چیزوں کو حفاظت کریں اور یہ آپ کے لئے موقع ہے کہ پہلے سے موجود چیزوں کے لئے یہ آپکے لیے موقع ہے کہ ایک جیسے نام والی فہرست کی لسٹ جو نیچے موجود ہے <br> اس پر کلک کرکے سے فکر لیں اور یہ ایک نیا موقع ہے یا اس پر کلک کرکے اس کو منسوخ کرکے دوبارہ ماڈل میں واپس آجائیں بغیر کسی موقع کو بنے.',
    'LBL_NEW_FORM_TITLE' => 'موزوں وقت پیدا کرنا',
    'LNK_NEW_OPPORTUNITY' => 'موزوں وقت پیدا کرنا',
    'LNK_OPPORTUNITY_LIST' => 'موقعک دیکھنا',
    'ERR_DELETE_RECORD' => 'محفوظ کیے گئے نمبر ایک مخصوص نمبر پر مشتمل ہوتے ہیں مٹانے کے موقع کے لئے.',
    'LBL_TOP_OPPORTUNITIES' => 'میری سب سے اوپر کلی ہوئی موقع',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'کیا وہ یقینا یہی چاہتے ہیں کہ اس پروجیکٹ میں سے آپ تو موقع کو مٹا دے?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'دستاویزات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_ASSIGNED_TO_NAME' => 'مقرر کردہ سے:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'میرا بند کیا ہوا موقع',
    'LBL_TOTAL_OPPORTUNITIES' => 'مکمل موقع',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'جیتے ہوئے موقع کو بند کرنا',
    'LBL_ASSIGNED_TO_ID' => 'نامزد کردہ صارف:',
    'LBL_MODIFIED_NAME' => 'صارف کے نام کی طرف سے ترمیم',
    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_MODIFIED_USER' => 'صارف میں کچھ تبدیلیاں کرنا',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'مہمات',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'منصوبے',
    'LNK_IMPORT_OPPORTUNITIES' => 'موقع کو درآمد کرنا',
    'LBL_EDITLAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'معاہدے',
    'LBL_AOS_QUOTES' => 'حوالہ جات',
);
