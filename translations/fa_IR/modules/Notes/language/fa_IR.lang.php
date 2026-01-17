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
    'LBL_ACCOUNT_ID' => 'شناسه مرکز:',
    'LBL_CASE_ID' => 'شناسه خدمات:',
    'LBL_CLOSE' => 'بستن:',
    'LBL_CONTACT_ID' => 'شناسه مخاطب:',
    'LBL_CONTACT_NAME' => 'مخاطب:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'یادداشت‌ها',
    'LBL_DESCRIPTION' => 'یادداشت',
    'LBL_EMAIL_ADDRESS' => 'آدرس ایمیل:',
    'LBL_EMAIL_ATTACHMENT' => 'پیوست ایمیل',
    'LBL_FILE_MIME_TYPE' => 'نوع MIME',
    'LBL_FILE_URL' => 'URL فایل',
    'LBL_FILENAME' => 'پیوست:',
    'LBL_LEAD_ID' => 'شناسه سرنخ:',
    'LBL_LIST_CONTACT_NAME' => 'مخاطب',
    'LBL_LIST_DATE_MODIFIED' => 'آخرین ویرایش',
    'LBL_LIST_FILENAME' => 'پیوست',
    'LBL_LIST_FORM_TITLE' => 'فهرست یادداشت',
    'LBL_LIST_RELATED_TO' => 'مربوط به',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_LIST_CONTACT' => 'مخاطب',
    'LBL_MODULE_NAME' => 'یادداشت‌ها',
    'LBL_MODULE_TITLE' => 'یادداشت‌ها: صفحه اصلی',
    'LBL_NEW_FORM_TITLE' => 'ایجاد یادداشت یا افزودن پیوست',
    'LBL_NOTE_STATUS' => 'یادداشت',
    'LBL_NOTE_SUBJECT' => 'موضوع:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'پیوست‌ها',
    'LBL_NOTE' => 'یادداشت:',
    'LBL_OPPORTUNITY_ID' => 'شناسه فرصت:',
    'LBL_PARENT_ID' => 'شناسه والد:',
    'LBL_PARENT_TYPE' => 'نوع والد',
    'LBL_PHONE' => 'تلفن:',
    'LBL_PORTAL_FLAG' => 'نمایش در پورتال؟',
    'LBL_EMBED_FLAG' => 'قراردادن در ایمیل؟',
    'LBL_PRODUCT_ID' => 'شناسه محصول:',
    'LBL_QUOTE_ID' => 'شناسه پیش‌فاکتور:',
    'LBL_RELATED_TO' => 'مربوط به:',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی یادداشت',
    'LBL_STATUS' => 'وضعیت',
    'LBL_SUBJECT' => 'موضوع:',
    'LNK_IMPORT_NOTES' => 'درون‌ریزی یادداشت‌ها',
    'LNK_NEW_NOTE' => 'ایجاد یادداشت یا پیوست',
    'LNK_NOTE_LIST' => 'مشاهده یادداشت‌ها',
    'LBL_MEMBER_OF' => 'عضو از:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'کاربر تعیین شده',
    'LBL_REMOVING_ATTACHMENT' => 'حذف پیوست...',
    'ERR_REMOVING_ATTACHMENT' => 'پیوست حذف نشد...',
    'LBL_CREATED_BY' => 'ایجاد کننده',
    'LBL_MODIFIED_BY' => 'تغییر یافته توسط',
    'LBL_SEND_ANYWAYS' => 'این ایمیل هیچ عنوانی ندارد.  ارسال/ذخیره در هر صورت؟',
    'LBL_NOTE_INFORMATION' => 'خلاصه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'یادداشت‌های من',
    'LBL_EDITLAYOUT' => 'ویرایش چیدمان' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'نام',
    'LBL_LAST_NAME' => 'نام خانوادگی',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_DELETED' => 'حذف شده',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'صعودی',
    'LBL_DESCENDING' => 'نزولی',
);
