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
    'LBL_MODULE_NAME' => 'اشکالات',
    'LBL_MODULE_TITLE' => 'ردیاب اشکال: صفحه اصلی',
    'LBL_MODULE_ID' => 'اشکالات',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی اشکال',
    'LBL_LIST_FORM_TITLE' => 'لیست اشکال',
    'LBL_NEW_FORM_TITLE' => 'اشکال جدید',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_NUMBER' => 'شماره:',
    'LBL_STATUS' => 'وضعیت',
    'LBL_PRIORITY' => 'اولویت:',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_CONTACT_NAME' => 'نام مخاطب:',
    'LBL_CONTACT_ROLE' => 'نقش:',
    'LBL_LIST_NUMBER' => 'شماره',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_LIST_PRIORITY' => 'اولویت',
    'LBL_LIST_RESOLUTION' => 'وضوح',
    'LBL_LIST_LAST_MODIFIED' => 'آخرین ویرایش',
    'LBL_INVITEE' => 'مخاطب‌ها',
    'LBL_TYPE' => 'نوع:',
    'LBL_LIST_TYPE' => 'نوع',
    'LBL_RESOLUTION' => 'رفع اشکال:',
    'LBL_RELEASE' => 'انتشار:',
    'LNK_NEW_BUG' => 'گزارش اشکال(باگ)',
    'LNK_BUG_LIST' => 'مشاهده اشکالات',
    'ERR_DELETE_RECORD' => 'به منظور حذف اشکال باید یک شماره سابقه مشخص کنید.',
    'LBL_LIST_MY_BUGS' => 'اشکالات اختصاص یافته به من',
    'LNK_IMPORT_BUGS' => 'درون‌ریزی اشکالات',
    'LBL_FOUND_IN_RELEASE' => 'یافت شده در انتشار:',
    'LBL_FIXED_IN_RELEASE' => 'رفع شده در انتشار:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'رفع شده در انتشار',
    'LBL_WORK_LOG' => 'گزارش کار:',
    'LBL_SOURCE' => 'منبع:',
    'LBL_PRODUCT_CATEGORY' => 'دسته:',

    'LBL_CREATED_BY' => 'ایجاد شده توسط:',
    'LBL_MODIFIED_BY' => 'آخرین ویرایش بوسیله:',

    'LBL_LIST_EMAIL_ADDRESS' => 'آدرس ایمیل',
    'LBL_LIST_CONTACT_NAME' => 'نام مخاطب',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_PHONE' => 'تلفن',
    'NTC_DELETE_CONFIRMATION' => 'آیا از حذف این مخاطب از این اشکال مطمئن هستید؟',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ردیاب اشکال',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_CASES_SUBPANEL_TITLE' => 'خدمات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'اسناد',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'کاربر تعیین شده',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',

    'LBL_BUG_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
