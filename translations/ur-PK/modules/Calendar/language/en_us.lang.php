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

    'LBL_SHAREDWEEK' => 'مشترکہ ہفتے',
    'LBL_SHAREDMONTH' => 'مشترکہ مہینہ',

    'LBL_MODULE_NAME' => 'کیلنڈر',
    'LBL_MODULE_TITLE' => 'کیلنڈر',
    'LNK_NEW_CALL' => 'شیڈول کال',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_CALL_LIST' => 'کال',
    'LNK_MEETING_LIST' => 'ملاقات',
    'LNK_TASK_LIST' => 'کام',
    'LNK_TASK' => 'کام',
    'LNK_TASK_VIEW' => 'ٹاسک دیکھیں',
    'LNK_EVENT' => 'سانحہ',
    'LNK_EVENT_VIEW' => 'ایونٹ دیکھیں',
    'LNK_VIEW_CALENDAR' => 'آج کے دن',
    'LNK_IMPORT_CALLS' => 'کالز درآمد کریں',
    'LNK_IMPORT_MEETINGS' => 'میٹنگز درآمد کریں',
    'LNK_IMPORT_TASKS' => 'کام درآمد کریں',
    'LBL_MONTH' => 'ایک مہینہ',
    'LBL_AGENDADAY' => 'ایک دن',
    'LBL_YEAR' => 'سال',

    'LBL_AGENDAWEEK' => 'ایک ہفتہ',
    'LBL_PREVIOUS_MONTH' => 'پچھلے مہینے',
    'LBL_PREVIOUS_DAY' => 'گزرا ہوا دن',
    'LBL_PREVIOUS_YEAR' => 'گذشتہ برس',
    'LBL_PREVIOUS_WEEK' => 'پچھلا ہفتہ',
    'LBL_NEXT_MONTH' => 'اگلا مہینہ',
    'LBL_NEXT_DAY' => 'اگلے دن',
    'LBL_NEXT_YEAR' => 'اگلا سال',
    'LBL_NEXT_WEEK' => 'آنے والے ہفتے',
    'LBL_AM' => 'صبح کا ٹاۂم',
    'LBL_PM' => 'رات کا ٹاۂم',
    'LBL_SCHEDULED' => 'شیڈول کردہ',
    'LBL_BUSY' => 'مصروف',
    'LBL_CONFLICT' => 'تنازعات',
    'LBL_USER_CALENDARS' => 'صارف کیلنڈر',
    'LBL_SHARED' => 'مشترکہ',
    'LBL_PREVIOUS_SHARED' => 'پچھلا',
    'LBL_NEXT_SHARED' => 'اگے',
    'LBL_SHARED_CAL_TITLE' => 'مشترکہ کیلنڈر',
    'LBL_USERS' => 'صارفین',
    'LBL_REFRESH' => 'تازہ دم',
    'LBL_EDIT_USERLIST' => 'صارف کی فہرست',
    'LBL_SELECT_USERS' => 'کیلنڈردیکھنے کیلئے صارفین کو منتخب کریں',
    'LBL_FILTER_BY_TEAM' => 'ٹیم کی طرف سے صارف کی فہرست فلٹر کریں:',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_DATE' => 'تاریخ اور وقت شروع کریں',
    'LBL_CREATE_MEETING' => 'تَرتيب کار اجلاس',
    'LBL_CREATE_CALL' => 'لاگ کال',
    'LBL_HOURS_ABBREV' => 'ایچ',
    'LBL_MINS_ABBREV' => 'ایم',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'نہيں',
    'LBL_SETTINGS' => 'کسی کام کو ترتیب دینا',
    'LBL_CREATE_NEW_RECORD' => 'سرگرمی بنائیں',
    'LBL_LOADING' => 'لوڈ کر رہا ہے...',
    'LBL_SAVING' => 'محفوظ ہو رہا ہے...',
    'LBL_SENDING_INVITES' => 'محفوظ & دعوت نامہ بھیج رہا ہے...',
    'LBL_CONFIRM_REMOVE' => 'کیا آپ واقعی ریکارڈ کو ہٹانا چاہتے ہیں?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'کیا آپ واقعی منتخب کردہ ریکارڈ کو ختم کرنا چاہتے ہے?',
    'LBL_EDIT_RECORD' => 'سرگرمی میں ترمیم کریں',
    'LBL_ERROR_SAVING' => 'بچانے کے دوران خرابی',
    'LBL_ERROR_LOADING' => 'لوڈنگ کرتے وقت خرابی',
    'LBL_GOTO_DATE' => 'تاریخ پر جائیں',
    'NOTICE_DURATION_TIME' => 'وقت کی میعاد 0 سے زیادہ ہونا چاہئے',
    'LBL_STYLE_BASIC' => 'ابتدائی', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'اعلی', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'فیلڈ کے لئے کوئی میچ نہیں ہے',
    'LBL_SUBJECT' => 'موضوع',
    'LBL_DURATION' => 'دورانیہ',
    'LBL_STATUS' => 'حیثیت',
    'LBL_PRIORITY' => 'ترجیح',

    'LBL_SETTINGS_TITLE' => 'کسی کام کو ترتیب دینا',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'دن اور ہفتہ کے مناظر میں وقت کی سلاٹ دکھائیں:',
    'LBL_SETTINGS_TIME_STARTS' => 'وقت کا آغاز:',
    'LBL_SETTINGS_TIME_ENDS' => 'آخری وقت:',
    'LBL_SETTINGS_CALLS_SHOW' => 'کال دکھائیں:',
    'LBL_SETTINGS_TASKS_SHOW' => 'کام دکھائیں:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'کالز اور ٹاسکس کی مکمل ملاقاتیں دکھائیں:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'مشترکہ کیلنڈر الگ الگ:',

    'LBL_SAVE_BUTTON' => 'محفوظ کریں',
    'LBL_DELETE_BUTTON' => 'ختم کریں',
    'LBL_APPLY_BUTTON' => 'لاگو کرنا',
    'LBL_SEND_INVITES' => 'محفوظ کریں اور دعوت بھیجیں',
    'LBL_CANCEL_BUTTON' => 'منسوخ کریں',
    'LBL_CLOSE_BUTTON' => 'بند کریں',

    'LBL_GENERAL_TAB' => 'تفصیلات',
    'LBL_PARTICIPANTS_TAB' => 'مدعو',
    'LBL_REPEAT_TAB' => 'دوبارہ آنا',

    'LBL_REPEAT_TYPE' => 'دہرائیں',
    'LBL_REPEAT_INTERVAL' => 'ہر کوئی',
    'LBL_REPEAT_END' => 'آخر',
    'LBL_REPEAT_END_AFTER' => 'کے بعد',
    'LBL_REPEAT_OCCURRENCES' => 'بار بار',
    'LBL_REPEAT_END_BY' => 'کی طرف سے',
    'LBL_REPEAT_DOW' => 'چلو',
    'LBL_REPEAT_UNTIL' => 'تک دہرائیں',
    'LBL_REPEAT_COUNT' => 'تکرار کی تعداد',
    'LBL_REPEAT_LIMIT_ERROR' => 'آپ کی درخواست ملاقاتوں $limit سے زیادہ تخلیق کرنے کے لئے جا رہی تھی.',

    'LBL_EDIT_ALL_RECURRENCES' => 'تمام مراحل میں ترمیم کریں',
    'LBL_REMOVE_ALL_RECURRENCES' => 'تمام مراحل حذف کریں',

    'LBL_DATE_END_ERROR' => 'اختتام تاریخ آغاز کی تاریخ سے پہلے ہے',
    'ERR_YEAR_BETWEEN' => 'افسوس، کیلنڈر آپ کی درخواست کردہ سال کو سنبھال نہیں سکتا ہے<br>سال 1970 اور 2037 کے درمیان ہونا ضروری ہے',
    'ERR_NEIGHBOR_DATE' => 'گیٹ_نئیغبور_ڈٹے_ستر: اس قول کے لئے وضاحت نہیں کی گئی',
    'LBL_NO_ITEMS_MOBILE' => 'آپ کے کیلنڈر ہفتے کے لئے واضح ہے.',
    'LBL_GENERAL_SETTINGS' => 'عام ترتیبات',
    'LBL_COLOR_SETTINGS' => 'رنگ کی ترتیبات',
    'LBL_MODULE' => 'ماڈیول',
    'LBL_BODY' => 'جسم',
    'LBL_BORDER' => 'سرحد',
    'LBL_TEXT' => 'ٹیکسٹ',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "اتوار",
            '1' => "پیر",
            '2' => "منگل",
            '3' => "بدھ",
            '4' => "جمعرات",
            '5' => "جمعہ",
            '6' => "ہفتہ",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "اتوار",
            '1' => "پیر",
            '2' => "منگل",
            '3' => "بدھ",
            '4' => "جمعرات",
            '5' => "جمعہ",
            '6' => "ہفتہ",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "جنوری",
            '2' => "فروری",
            '3' => "مارچ",
            '4' => "اپریل",
            '5' => "مئی",
            '6' => "جون",
            '7' => "جولائی",
            '8' => "اگست",
            '9' => "ستمبر",
            '10' => "اکتوبر",
            '11' => "نومبر",
            '12' => "دسمبر",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "جنوری",
            '2' => "فروری",
            '3' => "مارچ",
            '4' => "اپریل",
            '5' => "مئی",
            '6' => "جون",
            '7' => "جولائی",
            '8' => "اگست",
            '9' => "ستمبر",
            '10' => "اکتوبر",
            '11' => "نومبر",
            '12' => "دسمبر",
        ),
);
