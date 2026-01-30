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
    'LBL_MODULE_NAME' => 'سوابق',
    'LBL_MODULE_TITLE' => 'تاریخچه: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی تاریخچه',
    'LBL_LIST_FORM_TITLE' => 'سوابق',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_CONTACT' => 'مخاطب',
    'LBL_LIST_RELATED_TO' => 'مربوط به',
    'LBL_LIST_DATE' => 'تاریخ',
    'LBL_LIST_CLOSE' => 'بستن',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_STATUS' => 'وضعیت',
    'LBL_LOCATION' => 'مکان:',
    'LBL_DATE_TIME' => 'زمان و تاریخ شروع:',
    'LBL_DATE' => 'تاریخ شروع:',
    'LBL_TIME' => 'زمان شروع:',
    'LBL_DURATION' => 'مدت:',
    'LBL_HOURS_MINS' => '(ساعت/دقیقه)',
    'LBL_CONTACT_NAME' => 'نام مخاطب: ',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت یا پیوست',
    'LNK_NEW_EMAIL' => 'آرشیو ایمیل',
    'LNK_CALL_LIST' => 'تماس‌ها',
    'LNK_MEETING_LIST' => 'جلسات',
    'LNK_TASK_LIST' => 'وظایف',
    'LNK_NOTE_LIST' => 'یادداشت‌ها',
    'ERR_DELETE_RECORD' => 'برای حذف این حساب باید یک شماره سابقه مشخص شود.',
    'LBL_INVITEE' => 'مدعوین',
    'LBL_LIST_DIRECTION' => 'جهت',
    'LBL_DIRECTION' => 'جهت',
    'LNK_NEW_APPOINTMENT' => 'قرار جدید',
    'LNK_VIEW_CALENDAR' => 'امروز',
    'LBL_OPEN_ACTIVITIES' => 'فعالیت‌های باز',
    'LBL_HISTORY' => 'سوابق',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'ساخت وظیفه',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'ساخت وظیفه',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'ثبت قرار ملاقات یا جلسه',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'ثبت قرار ملاقات یا جلسه',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'ثبت تماس',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'ایجاد یادداشت یا پیوست',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'ایجاد یادداشت یا پیوست',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'آرشیو ایمیل',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'آرشیو ایمیل',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_LIST_DUE_DATE' => 'موعد مقرر',
    'LBL_LIST_LAST_MODIFIED' => 'آخرین ویرایش',
    'LNK_IMPORT_NOTES' => 'درون‌ریزی یادداشت‌ها',
    'LBL_ACCEPT_THIS' => 'پذیرش؟',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'سوابق',

    'LBL_CATEGORY' => 'دسته',
    'LBL_LIST_CATEGORY' => 'دسته',
);
