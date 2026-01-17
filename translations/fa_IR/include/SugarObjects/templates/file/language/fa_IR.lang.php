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
    //module
    'LBL_MODULE_NAME' => 'اسناد',
    'LBL_MODULE_TITLE' => 'اسناد: صفحه اصلی',
    'LNK_NEW_DOCUMENT' => 'ایجاد سند',
    'LNK_DOCUMENT_LIST' => 'فهرست اسناد',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی سند',
    //vardef labels
    'LBL_NAME' => 'نام سند',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_ASSIGNED_TO' => 'اختصاص داده شده به:',
    'LBL_CATEGORY' => 'دسته',
    'LBL_SUBCATEGORY' => 'زیر دسته',
    'LBL_STATUS' => 'وضعیت',
    'LBL_IS_TEMPLATE' => 'یک قالب است',
    'LBL_TEMPLATE_TYPE' => 'نوع سند',
    'LBL_REVISION_NAME' => 'شماره تجدید نظر',
    'LBL_MIME' => 'نوع MIME',
    'LBL_REVISION' => 'بازبینی',
    'LBL_DOCUMENT' => 'سند مرتبط',
    'LBL_LATEST_REVISION' => 'آخرین نسخه',
    'LBL_CHANGE_LOG' => 'سوابق تغییرات',
    'LBL_ACTIVE_DATE' => 'تاریخ نشر',
    'LBL_EXPIRATION_DATE' => 'تاریخ انقضا',
    'LBL_FILE_EXTENSION' => 'پسوند فایل',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'مشخص نشده',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'سند جدید',
    //document edit and detail view
    'LBL_DOC_NAME' => 'نام سند:',
    'LBL_FILENAME' => 'نام فایل:',
    'LBL_FILE_UPLOAD' => 'فایل:',
    'LBL_DOC_VERSION' => 'تجدید نظر:',
    'LBL_CATEGORY_VALUE' => 'دسته:',
    'LBL_SUBCATEGORY_VALUE' => 'زیر دسته:',
    'LBL_DOC_STATUS' => 'وضعیت',
    'LBL_DET_TEMPLATE_TYPE' => 'نوع سند:',
    'LBL_DOC_DESCRIPTION' => 'توضیحات:',
    'LBL_DOC_ACTIVE_DATE' => 'تاریخ نشر:',
    'LBL_DOC_EXP_DATE' => 'تاریخ انقضا:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'لیست اسناد',
    'LBL_LIST_DOCUMENT' => 'سند',
    'LBL_LIST_CATEGORY' => 'دسته',
    'LBL_LIST_SUBCATEGORY' => 'زیر دسته',
    'LBL_LIST_REVISION' => 'بازبینی',
    'LBL_LIST_LAST_REV_CREATOR' => 'منتشر شده توسط',
    'LBL_LIST_LAST_REV_DATE' => 'تاریخ تجدید نظر',
    'LBL_LIST_VIEW_DOCUMENT' => 'نمايش',
    'LBL_LIST_ACTIVE_DATE' => 'تاریخ نشر',
    'LBL_LIST_EXP_DATE' => 'تاریخ انقضا',
    'LBL_LIST_STATUS' => 'وضعیت',

    //document search form.
    'LBL_SF_CATEGORY' => 'دسته:',
    'LBL_SF_SUBCATEGORY' => 'زیر دسته:',

    'DEF_CREATE_LOG' => 'سند ایجاد شد',

    //error messages
    'ERR_DOC_NAME' => 'نام سند',
    'ERR_DOC_ACTIVE_DATE' => 'تاریخ نشر',
    'ERR_FILENAME' => 'نام فایل',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'نام سند',

    'LBL_EDIT_BUTTON' => 'ویرایش ',
    'LBL_REMOVE' => 'حذف',

);
