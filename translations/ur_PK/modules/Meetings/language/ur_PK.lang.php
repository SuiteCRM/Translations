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
    'LBL_ACCEPT_THIS' => 'قبول کریں؟',
    'LBL_ADD_BUTTON' => 'شامل کریں',
    'LBL_ADD_INVITEE' => 'دعوت میں اضافہ',
    'LBL_CONTACT_NAME' => 'رابطہ:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا',
    'LBL_DATE_END' => 'آخری تاریخ',
    'LBL_DATE_TIME' => 'شروع کی تاریخ اور وقت:',
    'LBL_DATE' => 'شروع کی تاریخ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ملاقات',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DIRECTION' => 'سمت:',
    'LBL_DURATION_HOURS' => 'وقت کے دوران:',
    'LBL_DURATION_MINUTES' => 'منٹس کے دوران:',
    'LBL_DURATION' => 'دورانیہ:',
    'LBL_EMAIL' => 'ای میل',
    'LBL_FIRST_NAME' => 'پہلا نام',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'خطوط',
    'LBL_HOURS_ABBREV' => 'ایچ',
    'LBL_HOURS_MINS' => '(گھنٹے / منٹ)',
    'LBL_INVITEE' => 'مدعو',
    'LBL_LAST_NAME' => 'آخری نام',
    'LBL_ASSIGNED_TO_NAME' => 'مقرر کردہ سے:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_LIST_CLOSE' => 'بند کریں',
    'LBL_LIST_CONTACT' => 'رابطہ',
    'LBL_LIST_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_LIST_DATE' => 'شروع ہونے کی تاریخ',
    'LBL_LIST_DIRECTION' => 'سمت',
    'LBL_LIST_DUE_DATE' => 'تاریخ کی وجہ سے',
    'LBL_LIST_FORM_TITLE' => 'اجلاس کی فہرست',
    'LBL_LIST_MY_MEETINGS' => 'میری ملاقاتیں',
    'LBL_LIST_RELATED_TO' => 'متعلقہ سے',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ممکنہ گاہک',
    'LBL_LOCATION' => 'مقام:',
    'LBL_MINSS_ABBREV' => 'ایم',
    'LBL_MODIFIED_BY' => 'کسی کی طرف سے درست کرنا',
    'LBL_MODULE_NAME' => 'ملاقات',
    'LBL_MODULE_TITLE' => 'ملاقاتیں: ہوم',
    'LBL_NAME' => 'نام',
    'LBL_NEW_FORM_TITLE' => 'جگہ منصب کرنا',
    'LBL_OUTLOOK_ID' => 'آؤٹ لک کی شناخت',
    'LBL_SEQUENCE' => 'اجلاس کے ترتیب کو اپ ڈیٹ کریں',
    'LBL_PHONE' => 'آفس کا فون:',
    'LBL_REMINDER_TIME' => 'یاد دہانی کا وقت',
    'LBL_EMAIL_REMINDER_SENT' => 'بھیجے گئے عمل کی یاد دہانی',
    'LBL_REMINDER' => 'یاد دہانیاں:',
    'LBL_REMINDER_POPUP' => 'پاپ اپ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'سبکی ای میل دعوت',
    'LBL_EMAIL_REMINDER' => 'ای میل یاد دہانی',
    'LBL_EMAIL_REMINDER_TIME' => 'ای میل یاد دہانی کا وقت',
    'LBL_REMOVE' => 'ہٹا دیں',
    'LBL_SCHEDULING_FORM_TITLE' => 'شیڈولنگ',
    'LBL_SEARCH_BUTTON' => 'تلاش کریں',
    'LBL_SEARCH_FORM_TITLE' => 'اجلاس کی تلاش',
    'LBL_SEND_BUTTON_LABEL' => 'محفوظ کریں اور دعوت بھیجیں',
    'LBL_SEND_BUTTON_TITLE' => 'محفوظ کریں اور دعوت بھیجیں',
    'LBL_STATUS' => 'حیثیت:',
    'LBL_TYPE' => 'اجلاس کی قسم',
    'LBL_PASSWORD' => 'اجلاس کا پاس ورڈ',
    'LBL_URL' => 'میٹنگ شروع کریں / شامل کریں',
    'LBL_HOST_URL' => 'میزبان یو آر ایل',
    'LBL_DISPLAYED_URL' => 'ڈسپلے یو آر ایل',
    'LBL_CREATOR' => 'اجلاس بنانے والا',
    'LBL_EXTERNALID' => 'بیرونی ایپ کی شناخت',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_TIME' => 'شروع کرنے کا وقت:',
    'LBL_USERS_SUBPANEL_TITLE' => 'صارفین',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'والدین کی طرح',
    'LBL_PARENT_ID' => 'والدین کی شناخت',
    'LNK_MEETING_LIST' => 'ملاقاتیں دیکھیں',
    'LNK_NEW_APPOINTMENT' => 'جگہ منصب کرنا',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_IMPORT_MEETINGS' => 'میٹنگز درآمد کریں',

    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_MODIFIED_USER' => 'صارف میں کچھ تبدیلیاں کرنا',
    'NOTICE_DURATION_TIME' => 'وقت کی میعاد 0 سے زیادہ ہونا چاہئے',
    'LBL_MEETING_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'اجلاس میں شمولیت',
    'LBL_ACCEPT_STATUS' => 'حیثیت قبول کریں',
    'LBL_ACCEPT_LINK' => 'لنک قبول کریں',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'آپ اس میٹنگ میں شامل نہیں ہوسکتے کیونکہ آپ مدعو نہیں ہیں.',
    'LBL_EXTNOT_RECORD_LINK' => 'اجلاس دیکھیں',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'آپ اس اجلاس کو شروع نہیں کرسکتے کیونکہ آپ میٹنگ کے منتظم یا مالک نہیں ہیں.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'ایک دعوت نامہ بنائیں',
    'LBL_CREATE_CONTACT' => 'رابطے کے طور پر',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'لیڈ کے طور پر',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'بنائیں اور شامل کریں',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'منسوخ کریں',
    'LBL_EMPTY_SEARCH_RESULT' => 'معذرت، کوئی نتیجہ نہیں مل سکا. براہ مہربانی ذیل میں ایک دعوت نامہ بنائیں.',
    'LBL_NO_ACCESS' => '$module بنانے کے لئے آپ تک رسائی حاصل نہیں ہے',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'دہرائیں قسم',
    'LBL_REPEAT_INTERVAL' => 'وقفہ دوبارہ کریں',
    'LBL_REPEAT_DOW' => 'ڈو دہرائیں',
    'LBL_REPEAT_UNTIL' => 'تک دہرائیں',
    'LBL_REPEAT_COUNT' => 'شمار دوبارہ کریں',
    'LBL_REPEAT_PARENT_ID' => 'والدین کی شناخت دوبارہ کریں',
    'LBL_RECURRING_SOURCE' => 'دوبارہ آمدنی کا ذریعہ',

    'LBL_SYNCED_RECURRING_MSG' => 'یہ میٹنگ ایک دوسرے کے نظام میں ہوا اور سویٹ آر آر ایم میں مطابقت پذیری تھی. تبدیلیوں کے لۓ، دوسرے نظام کے اندر اصل میٹنگ پر جائیں. دوسرے نظام میں بنائے گئے تبدیلیاں اس ریکارڈ میں مطابقت پذیر ہوسکتی ہیں.',
    'LBL_RELATED_TO' => 'سے متعلق:',

    // for reminders
    'LBL_REMINDERS' => 'یاد دہانیوں',
    'LBL_REMINDERS_ACTIONS' => 'رد عمل:',
    'LBL_REMINDERS_POPUP' => 'پاپ اپ',
    'LBL_REMINDERS_EMAIL' => 'ای میل مدعو',
    'LBL_REMINDERS_WHEN' => 'کب:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'یاد دہانی کو ہٹا دیں',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'تمام مدعو شامل کریں',
    'LBL_REMINDERS_ADD_REMINDER' => 'یاد دہانی شامل کریں',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
