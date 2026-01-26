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

    'LBL_SHAREDWEEK' => 'هفته مشترک',
    'LBL_SHAREDMONTH' => 'ماه مشترک',

    'LBL_MODULE_NAME' => 'تقویم',
    'LBL_MODULE_TITLE' => 'تقویم',
    'LNK_NEW_CALL' => 'برنامه‌ریزی تماس',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_CALL_LIST' => 'تماس‌ها',
    'LNK_MEETING_LIST' => 'جلسات',
    'LNK_TASK_LIST' => 'وظایف',
    'LNK_TASK' => 'وظیفه',
    'LNK_TASK_VIEW' => 'مشاهده وظیفه',
    'LNK_EVENT' => 'رویداد',
    'LNK_EVENT_VIEW' => 'مشاهده رویداد',
    'LNK_VIEW_CALENDAR' => 'امروز',
    'LNK_IMPORT_CALLS' => 'درون‌ریزی تماس‌ها',
    'LNK_IMPORT_MEETINGS' => 'درون‌ریزی جلسات',
    'LNK_IMPORT_TASKS' => 'درون‌ریزی وظایف',
    'LBL_MONTH' => 'ماه',
    'LBL_AGENDADAY' => 'روز',
    'LBL_YEAR' => 'سال',

    'LBL_AGENDAWEEK' => 'هفته',
    'LBL_PREVIOUS_MONTH' => 'ماه قبل',
    'LBL_PREVIOUS_DAY' => 'روز قبل',
    'LBL_PREVIOUS_YEAR' => 'سال قبل',
    'LBL_PREVIOUS_WEEK' => 'هفته قبل',
    'LBL_NEXT_MONTH' => 'ماه آینده',
    'LBL_NEXT_DAY' => 'روز بعد',
    'LBL_NEXT_YEAR' => 'سال آینده',
    'LBL_NEXT_WEEK' => 'هفته بعد',
    'LBL_AM' => 'قبل از ظهر',
    'LBL_PM' => 'بعد از ظهر',
    'LBL_SCHEDULED' => 'برنامه ریزی شده',
    'LBL_BUSY' => 'مشغول',
    'LBL_CONFLICT' => 'تداخل',
    'LBL_USER_CALENDARS' => 'تقویم‌های کاربر',
    'LBL_SHARED' => 'اشتراک‌گذاری‌شده',
    'LBL_PREVIOUS_SHARED' => 'قبلی',
    'LBL_NEXT_SHARED' => 'ادامه',
    'LBL_SHARED_CAL_TITLE' => 'تقویم اشتراکی',
    'LBL_USERS' => 'کاربرها',
    'LBL_REFRESH' => 'بارگزاری مجدد',
    'LBL_EDIT_USERLIST' => 'لیست کاربران',
    'LBL_SELECT_USERS' => 'انتخاب کاربران برای نمایش تقویم',
    'LBL_FILTER_BY_TEAM' => 'فیلتر لیست کاربر با توجه به تیم:',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_DATE' => 'زمان و تاریخ شروع',
    'LBL_CREATE_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LBL_CREATE_CALL' => 'ثبت تماس',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'بله',
    'LBL_NO' => 'خير',
    'LBL_SETTINGS' => 'تنطیمات',
    'LBL_CREATE_NEW_RECORD' => 'ایجاد فعالیت',
    'LBL_LOADING' => 'در حال بارگذاری...',
    'LBL_SAVING' => 'درحال ذخیره...',
    'LBL_SENDING_INVITES' => 'در حال ذخیره و ارسال دعوت‌نامه‌ها .....',
    'LBL_CONFIRM_REMOVE' => 'آیا از حذف این سابقه مطمئن هستید؟',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'آیا از حذف تمام سوابق تکراری مطمئن هستید؟',
    'LBL_EDIT_RECORD' => 'ویرایش فعالیت',
    'LBL_ERROR_SAVING' => 'خطا هنگام ذخیره',
    'LBL_ERROR_LOADING' => 'خطا هنگام بارگذاری',
    'LBL_GOTO_DATE' => 'برو به تاریخ',
    'NOTICE_DURATION_TIME' => 'مدت زمان باید بزرگ‌تر از 0 باشد',
    'LBL_STYLE_BASIC' => 'ساده', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'پیشرفته', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'هیچ تطبیقی وجود ندارد برای فیلد: اختصاص داده شده به',
    'LBL_SUBJECT' => 'موضوع',
    'LBL_DURATION' => 'مدت',
    'LBL_STATUS' => 'وضعیت',
    'LBL_PRIORITY' => 'اولویت',

    'LBL_SETTINGS_TITLE' => 'تنطیمات',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'بخش نمایش زمان در نمایش روز و هفته:',
    'LBL_SETTINGS_TIME_STARTS' => 'زمان شروع:',
    'LBL_SETTINGS_TIME_ENDS' => 'زمان پایان:',
    'LBL_SETTINGS_CALLS_SHOW' => 'نمایش تماس‌ها:',
    'LBL_SETTINGS_TASKS_SHOW' => 'نمایش وظایف:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'نمایش جلسات، تماس‌ها و وظایف:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'تقویم جداگانه مشترک:',

    'LBL_SAVE_BUTTON' => 'ذخيره',
    'LBL_DELETE_BUTTON' => 'حذف',
    'LBL_APPLY_BUTTON' => 'اعمال',
    'LBL_SEND_INVITES' => 'ذخیره و ارسال دعوت‌نامه‌ها',
    'LBL_CANCEL_BUTTON' => 'لغو',
    'LBL_CLOSE_BUTTON' => 'بستن',

    'LBL_GENERAL_TAB' => 'جزئيات',
    'LBL_PARTICIPANTS_TAB' => 'مدعوین',
    'LBL_REPEAT_TAB' => 'بازگشت',

    'LBL_REPEAT_TYPE' => 'تکرار',
    'LBL_REPEAT_INTERVAL' => 'هر',
    'LBL_REPEAT_END' => 'پايان',
    'LBL_REPEAT_END_AFTER' => 'بعد از',
    'LBL_REPEAT_OCCURRENCES' => 'بازگشت‌ها',
    'LBL_REPEAT_END_BY' => 'توسط',
    'LBL_REPEAT_DOW' => 'در',
    'LBL_REPEAT_UNTIL' => 'تکرار تا',
    'LBL_REPEAT_COUNT' => 'تعداد بازگشت‌ها',
    'LBL_REPEAT_LIMIT_ERROR' => 'درخواست شما قصد ایجاد جلسات بیشتر از تعداد مجاز ($limit) را داشت.',

    'LBL_EDIT_ALL_RECURRENCES' => 'ویرایش تمام بازگشت‌ها',
    'LBL_REMOVE_ALL_RECURRENCES' => 'حذف تمام بازگشت‌ها',

    'LBL_DATE_END_ERROR' => 'تاریخ پایان قبل از تاریخ شروع است',
    'ERR_YEAR_BETWEEN' => 'با عرض پوزش، تقویم قادر به رسیدگی به سال درخواستی شما نیست<br>سال باید بین 1970 و 2037 باشد',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: برای این نمایش تعریف نشده است',
    'LBL_NO_ITEMS_MOBILE' => 'تقویم شما برای این هفته پاک است.',
    'LBL_GENERAL_SETTINGS' => 'تنظیمات عمومی',
    'LBL_COLOR_SETTINGS' => 'تنظیمات رنگ',
    'LBL_MODULE' => 'ماژول',
    'LBL_BODY' => 'متن اصلی',
    'LBL_BORDER' => 'Border',
    'LBL_TEXT' => 'متن',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "یکشنبه",
            '1' => "دوشنبه",
            '2' => "سه‌شنبه",
            '3' => "چهارشنبه",
            '4' => "پنج‌شنبه",
            '5' => "جمعه",
            '6' => "شنبه",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "یکشنبه",
            '1' => "دوشنبه",
            '2' => "سه‌شنبه",
            '3' => "چهارشنبه",
            '4' => "پنج‌شنبه",
            '5' => "جمعه",
            '6' => "شنبه",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "ژانویه",
            '2' => "فوریه",
            '3' => "مارس",
            '4' => "آوریل",
            '5' => "می",
            '6' => "ژوئن",
            '7' => "جولای",
            '8' => "آگوست",
            '9' => "سپتامبر",
            '10' => "اکتبر",
            '11' => "نوامبر",
            '12' => "دسامبر",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "ژانویه",
            '2' => "فوریه",
            '3' => "مارس",
            '4' => "آوریل",
            '5' => "می",
            '6' => "ژوئن",
            '7' => "جولای",
            '8' => "آگوست",
            '9' => "سپتامبر",
            '10' => "اکتبر",
            '11' => "نوامبر",
            '12' => "دسامبر",
        ),
);
