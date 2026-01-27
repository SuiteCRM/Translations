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
    'ERR_DELETE_RECORD' => 'برای حذف این مرکز باید یک شماره سابقه مشخص کنید.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'پیشنهادات دانش بنیان',
    'LBL_TOOL_TIP_TITLE' => 'عنوان: ',
    'LBL_TOOL_TIP_BODY' => 'متن اصلی: ',
    'LBL_TOOL_TIP_INFO' => 'اطلاعات اضافی: ',
    'LBL_TOOL_TIP_USE' => 'استفاده به عنوان: ',
    'LBL_SUGGESTION_BOX' => 'پیشنهادات',
    'LBL_NO_SUGGESTIONS' => 'بدون پیشنهاد',
    'LBL_RESOLUTION_BUTTON' => 'وضوح',
    'LBL_SUGGESTION_BOX_STATUS' => 'وضعیت',
    'LBL_SUGGESTION_BOX_TITLE' => 'عنوان',
    'LBL_SUGGESTION_BOX_REL' => 'ارتباط',

    'LBL_ACCOUNT_ID' => 'شناسه مرکز',
    'LBL_ACCOUNT_NAME' => 'نام حساب:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_BUGS_SUBPANEL_TITLE' => 'اشکالات',
    'LBL_CASE_NUMBER' => 'شماره خدمات:',
    'LBL_CASE' => 'خدمات:',
    'LBL_CONTACT_NAME' => 'نام مخاطب:',
    'LBL_CONTACT_ROLE' => 'نقش:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'خدمات',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_INVITEE' => 'مخاطب‌ها',
    'LBL_MEMBER_OF' => 'مرکز',
    'LBL_MODULE_NAME' => 'خدمات',
    'LBL_MODULE_TITLE' => 'خدمات: صفحه اصلی',
    'LBL_NEW_FORM_TITLE' => 'خدمات جدید',
    'LBL_NUMBER' => 'شماره:',
    'LBL_PRIORITY' => 'اولویت:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'اسناد',
    'LBL_RESOLUTION' => 'رفع اشکال:',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی خدمات',
    'LBL_STATUS' => 'وضعیت',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'کاربر تعیین شده',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_ASSIGNED' => 'اختصاص داده شده به',
    'LBL_LIST_CLOSE' => 'بستن',
    'LBL_LIST_FORM_TITLE' => 'لیست موارد',
    'LBL_LIST_LAST_MODIFIED' => 'آخرین ویرایش',
    'LBL_LIST_MY_CASES' => 'خدمات باز من',
    'LBL_LIST_NUMBER' => 'شماره',
    'LBL_LIST_PRIORITY' => 'اولویت',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_LIST_SUBJECT' => 'موضوع',

    'LNK_CASE_LIST' => 'مشاهده خدمات',
    'LNK_NEW_CASE' => 'ایجاد خدمات',
    'LBL_LIST_DATE_CREATED' => 'تاریخ ایجاد',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_TYPE' => 'نوع',
    'LBL_WORK_LOG' => 'گزارش کار',
    'LNK_IMPORT_CASES' => 'درون‌ریزی خدمات',

    'LBL_CREATED_USER' => 'کاربر ایجاد شده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش شده',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_CASE_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'متن به‌روز رسانی', //Field for Case updates with text only
    'LBL_INTERNAL' => 'تغییرات داخلی',
    'LBL_AOP_CASE_UPDATES' => 'تغییرات خدمات',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'به روز رسانی موارد خدمات',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'بستن همه',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'گستردن همه',
    'LBL_AOP_CASE_ATTACHMENTS' => 'پیوست‌ها:',

    'LBL_AOP_CASE_EVENTS' => 'رویدادهای خدمات',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'پیوست‌های خدمات:',
    'LBL_ADD_CASE_FILE' => 'افزودن فایل',
    'LBL_REMOVE_CASE_FILE' => 'حذف فایل',
    'LBL_SELECT_CASE_DOCUMENT' => 'انتخاب سند',
    'LBL_CLEAR_CASE_DOCUMENT' => 'حذف سند',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'سند داخلی CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'فایل خارجی',
    'LBL_CONTACT_CREATED_BY_NAME' => 'ایجاد شده توسط مخاطب',
    'LBL_CONTACT_CREATED_BY' => 'ایجاد کننده',
    'LBL_CASE_UPDATE_FORM' => 'فرم به‌روز رسانی پیوست', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'مخاطب ناشناس',
);
