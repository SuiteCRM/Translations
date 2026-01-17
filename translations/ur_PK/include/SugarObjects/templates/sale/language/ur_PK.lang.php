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
    'LBL_MODULE_NAME' => 'فروخت',
    'LBL_MODULE_TITLE' => 'فروخت: ہوم',
    'LBL_SEARCH_FORM_TITLE' => 'فروخت کی تلاش',
    'LBL_LIST_FORM_TITLE' => 'فروخت کی فہرست',
    'LBL_NAME' => 'فروخت کا نام',
    'LBL_LIST_SALE_NAME' => 'نام',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_AMOUNT' => 'رقم',
    'LBL_LIST_DATE_CLOSED' => 'بند کریں',
    'LBL_LIST_SALE_STAGE' => 'فروخت کے مرحلے',
    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_AMOUNT' => 'رقم:',
    'LBL_AMOUNT_USDOLLAR' => 'یو ایس ڈی کی رقم:',
    'LBL_CURRENCY' => 'کرنسی:',
    'LBL_DATE_CLOSED' => 'متوقع بند تاریخ:',
    'LBL_TYPE' => 'قسم:',
    'LBL_CAMPAIGN' => 'مہم:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_NEXT_STEP' => 'اگلا مرحلہ:',
    'LBL_LEAD_SOURCE' => 'لیڈ ماخذ:',
    'LBL_SALES_STAGE' => 'فروخت کا مرحلہ:',
    'LBL_PROBABILITY' => 'امکان (٪):',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DUPLICATE' => 'ممکنہ ڈپلیکیٹ فروخت',
    'MSG_DUPLICATE' => 'فروخت کا ریکارڈ آپ تخلیق کرنے کے بارے میں ہو سکتا ہے کہ وہ ایک فروخت ریکارڈ کا نقل ہو جو پہلے ہی موجود ہے. اس طرح کے نام رکھنے والی فروخت ریکارڈ ذیل میں درج ہیں <br> اس نئی فروخت کو جاری رکھنے کیلئے محفوظ کریں پر کلک کریں، یا فروخت کے بغیر ماڈیول پر واپس آنے کیلئے منسوخ کریں پر کلک کریں.',
    'LBL_NEW_FORM_TITLE' => 'فروخت بنائیں',
    'ERR_DELETE_RECORD' => 'فروخت کو ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'فروخت',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_ASSIGNED_TO_NAME' => 'صارف:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_ASSIGNED_TO_ID' => 'شناخت کو تفویض',
    'LBL_MODIFIED_NAME' => 'صارف کے نام کی طرف سے ترمیم',
    'LBL_SALE_INFORMATION' => 'فروخت کی معلومات',
    'LBL_CURRENCY_NAME' => 'کرنسی کا نام',
    'LBL_CURRENCY_SYMBOL' => 'کرنسی کی علامت',
    'LBL_EDIT_BUTTON' => 'ردوبدل',
    'LBL_REMOVE' => 'ہٹا دیں',

);
