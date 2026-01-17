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
    'LBL_REPLY_ADDR' => 'پتے کا جواب دینا: ',
    'LBL_REPLY_NAME' => 'نام کا جواب دینا: ',

    'LBL_MODULE_NAME' => 'ای میل مارکیٹنگ',
    'LBL_MODULE_TITLE' => 'ایمل مارکیٹنگ کا گھر',
    'LBL_LIST_FORM_TITLE' => 'ایمل مارکیٹنگ کا کمپیگنس',
    'LBL_NAME' => 'نام: ',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FROM_ADDR' => 'ایمیل سے',
    'LBL_LIST_DATE_START' => 'شروع ہونے کی تاریخ',
    'LBL_LIST_TEMPLATE_NAME' => 'ای میل سانچہ',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_STATUS' => 'حیثیت',
    'LBL_STATUS_TEXT' => 'حیثیت:',
    'LBL_TEMPLATE_NAME' => 'سانچے کا نام',
    'LBL_DATE_ENTERED' => 'تاریخ ڈالی',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کے لیے تبدیل کریں: ',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا: ',
    'LBL_MESSAGE_FOR' => 'اس پیغام کو بھیجیں:',

    'LBL_FROM_NAME' => 'نام سے: ',
    'LBL_FROM_ADDR' => 'ای میل ایڈریس سے: ',
    'LBL_DATE_START' => 'شروع ہونے کی تاریخ',
    'LBL_TIME_START' => 'وقت آغاز ',
    'LBL_START_DATE_TIME' => 'شروع کی تاریخ اور وقت: ',
    'LBL_TEMPLATE' => 'ای میل سانچہ: ',

    'LBL_MODIFIED_BY' => 'کے لیے تبدیل کریں: ',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا: ',

    'LNK_NEW_CAMPAIGN' => 'مہم بنائیں',
    'LNK_CAMPAIGN_LIST' => 'مہمات',
    'LNK_NEW_PROSPECT_LIST' => 'ھدف کی فہرست بنائیں',
    'LNK_PROSPECT_LIST_LIST' => 'ہدف کی فہرستیں',
    'LNK_NEW_PROSPECT' => 'ہدف بنائیں',
    'LNK_PROSPECT_LIST' => 'اہداف',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ای میل مارکیٹنگ',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'بنانا',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'ردوبدل',
    'LBL_FROM_MAILBOX' => 'میل باکس سے',
    'LBL_FROM_MAILBOX_NAME' => 'میل باکس کا استعمال کریں:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'باہر نکالے گئے ای میل اکاؤنٹ:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'ہدف کی فہرستیں',
    'LBL_ALL_PROSPECT_LISTS' => 'تمام نشانوں کو انتخاب کریں کمپین فہرست میں.',
    'LBL_RELATED_PROSPECT_LISTS' => 'تمام نشانوں کی فہرست پیغام کے ساتھ تعلق رکھتی ہے.',
    'LBL_PROSPECT_LIST_NAME' => 'نیشانی والی فہرست کا نام',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'نیشانی والی فہرست',
    'LBL_MODULE_SEND_TEST' => 'کمپین بھیجنے کی جانچ پڑتال',
    'LBL_MODULE_SEND_EMAILS' => 'کمپین بھیجنے والے ای میل',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'پیغام والے میدان کو انتخاب کریں جس پیغام کی اور جانچ پڑتال کرنا چاہتے ہیں:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'پیغام والے میدان کو انتخاب کریں کے شیڈول کو اپ پسند کرتے ہیں مخصوص تقسیم کرنے کے لیے تاریخ اور وقت کو چلائیں:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'کوئی چیز بیچنا',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'کوئی چیز بیچنا',
    'LBL_ERROR_ON_MARKETING' => 'مطلوبہ میدان (لاپتہ)',

    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'آؤٹ باؤنڈ ای میل اکاؤنٹ کی شناخت',
    'LBL_EMAIL_TEMPLATE' => 'ای میل سانچہ',
    'LBL_PROSPECT_LISTS' => 'متوقع فہرستیں',

);
