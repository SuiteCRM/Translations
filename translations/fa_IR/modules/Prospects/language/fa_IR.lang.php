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
    'LBL_MODULE_NAME' => 'اهداف',
    'LBL_MODULE_ID' => 'اهداف',
    'LBL_INVITEE' => 'گزارش‌های مستقیم',
    'LBL_MODULE_TITLE' => 'اهداف: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی هدف',
    'LBL_LIST_FORM_TITLE' => 'لیست هدف',
    'LBL_NEW_FORM_TITLE' => 'هدف جدید',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_LAST_NAME' => 'نام خانوادگی',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'ایمیل',
    'LBL_LIST_PHONE' => 'تلفن',
    'LBL_LIST_FIRST_NAME' => 'نام',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ASSIGNED_TO_ID' => 'اختصاص داده شده به:',
    'LBL_CAMPAIGN_ID' => 'شناسه کمپین',
    'LBL_EXISTING_ACCOUNT' => 'از یک مرکز موجود استفاده شد',
    'LBL_CREATED_ACCOUNT' => 'یک مرکز جدید ایجاد کرد',
    'LBL_CREATED_CALL' => 'یک تماس جدید ایجاد کرد',
    'LBL_CREATED_MEETING' => 'یک جلسه جدید ایجاد کرد',
    'LBL_NAME' => 'نام:',
    'LBL_PROSPECT_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'اطلاعات بیشتر',
    'LBL_FIRST_NAME' => 'نام:',
    'LBL_OFFICE_PHONE' => 'تلفن دفتر:',
    'LBL_ANY_PHONE' => 'هر تلفنی:',
    'LBL_PHONE' => 'تلفن:',
    'LBL_LAST_NAME' => 'نام خانوادگی:',
    'LBL_MOBILE_PHONE' => 'موبایل:',
    'LBL_HOME_PHONE' => 'خانه:',
    'LBL_OTHER_PHONE' => 'تلفن دیگر:',
    'LBL_FAX_PHONE' => 'فکس:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'آدرس خیابان اصلی:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'شهر آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'کشور آدرس اصلی:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'استان آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'کد پستی آدرس اولیه:',
    'LBL_ALT_ADDRESS_STREET' => 'آدرس جایگزین:',
    'LBL_ALT_ADDRESS_CITY' => 'شهر آدرس جایگزین:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'کشور آدرس جایگزین:',
    'LBL_ALT_ADDRESS_STATE' => 'استان آدرس جایگزین:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'کد پستی آدرس جایگزین:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'دپارتمان:',
    'LBL_BIRTHDATE' => 'تاریخ تولد:',
    'LBL_EMAIL_ADDRESS' => 'آدرس ایمیل:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ایمیل دیگر:',
    'LBL_ANY_EMAIL' => 'هر ایمیلی:',
    'LBL_ASSISTANT' => 'دستیار:',
    'LBL_ASSISTANT_PHONE' => 'تلفن دستیار:',
    'LBL_DO_NOT_CALL' => 'تماس نگیرید:',
    'LBL_EMAIL_OPT_OUT' => 'ایمیل انصرافی:',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',
    'LBL_ALTERNATE_ADDRESS' => 'آدرس های دیگر:',
    'LBL_ANY_ADDRESS' => 'هر آدرسی:',
    'LBL_CITY' => 'شهر:',
    'LBL_STATE' => 'استان یا منطقه:',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_ADDRESS_INFORMATION' => 'اطلاعات آدرس',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_OPP_NAME' => 'نام فرصت:',
    'LBL_IMPORT_VCARD' => 'وارد‌سازی vCard',
    'LBL_IMPORT_VCARDTEXT' => 'ایجاد خودکار مخاطب توسط درون‌ریزی vCard از فایل سیستمی شما.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'ایجاد از کارت ویزیت',
    'LNK_NEW_ACCOUNT' => 'ایجاد مرکز',
    'LNK_NEW_OPPORTUNITY' => 'ایجاد فرصت',
    'LNK_NEW_CASE' => 'ایجاد خدمات',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت یا پیوست',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_EMAIL' => 'آرشیو ایمیل',
    'LNK_NEW_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_NEW_APPOINTMENT' => 'ایجاد قرار ملاقات',
    'LNK_IMPORT_PROSPECTS' => 'درون‌ریزی اهداف',
    'NTC_DELETE_CONFIRMATION' => 'آیا از حذف این سابقه مطمئن هستید؟',
    'NTC_REMOVE_CONFIRMATION' => 'آیا از حذف این مخاطب از این خدمات مطمئن هستید؟',
    'ERR_DELETE_RECORD' => 'برای حذف این مخاطب یک شماره سابقه باید مشخص شود.',
    'LBL_SALUTATION' => 'تهنیت',
    'LBL_CREATED_OPPORTUNITY' => 'یک فرصت جدید ایجاد کرد',
    'LNK_SELECT_ACCOUNT' => "انتخاب مرکز",
    'LNK_NEW_PROSPECT' => 'ایجاد هدف',
    'LNK_PROSPECT_LIST' => 'مشاهده اهداف',
    'LNK_NEW_CAMPAIGN' => 'ایجاد کمپین',
    'LNK_CAMPAIGN_LIST' => 'کمپین‌ها',
    'LNK_NEW_PROSPECT_LIST' => 'ایجاد لیست هدف',
    'LNK_PROSPECT_LIST_LIST' => 'لیست‌های هدف',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'انتخاب اهداف بررسی شده',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'انتخاب اهداف بررسی شده',
    'LBL_INVALID_EMAIL' => 'ایمیل نامعتبر:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'اهداف',
    'LBL_PROSPECT_LIST' => 'فهرست مشتری‌های بالقوه',
    'LBL_CONVERT_BUTTON_TITLE' => 'تبدیل هدف',
    'LBL_CONVERT_BUTTON_LABEL' => 'تبدیل هدف',
    'LNK_NEW_CONTACT' => 'مخاطب جدید',
    'LBL_CREATED_CONTACT' => "یک مخاطب ایجاد کرد",
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'گزارش وضعیت کمپین',
    'LBL_TRACKER_KEY' => 'کلید ردیاب',
    'LBL_LEAD_ID' => 'شناسه سرنخ',
    'LBL_CONVERTED_LEAD' => 'سرنخ تبدیل شده',
    'LBL_ACCOUNT_NAME' => 'نام حساب',
    'LBL_EDIT_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_CREATED_USER' => 'کاربر ایجاد شده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش شده',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'رویدادها',
);
