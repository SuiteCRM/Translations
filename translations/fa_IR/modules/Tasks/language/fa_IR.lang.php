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
    'LBL_MODULE_NAME' => 'وظایف',
    'LBL_MODULE_TITLE' => ' وظایف: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => ' جستجوی وظیفه',
    'LBL_LIST_FORM_TITLE' => ' لیست وظایف',
    'LBL_NEW_FORM_TITLE' => ' ایجاد وظیفه',
    'LBL_LIST_CLOSE' => 'بستن',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_CONTACT' => 'مخاطب',
    'LBL_LIST_PRIORITY' => 'اولویت',
    'LBL_LIST_RELATED_TO' => 'مربوط به',
    'LBL_LIST_DUE_DATE' => 'موعد مقرر',
    'LBL_LIST_DUE_TIME' => 'زمان مقرر',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_STATUS' => 'وضعیت',
    'LBL_DUE_DATE' => 'تاریخ مقرر:',
    'LBL_DUE_TIME' => 'زمان مقرر:',
    'LBL_PRIORITY' => 'اولویت:',
    'LBL_DUE_DATE_AND_TIME' => 'تاریخ و زمان مقرر:',
    'LBL_START_DATE_AND_TIME' => 'زمان و تاریخ شروع:',
    'LBL_START_DATE' => 'تاریخ شروع:',
    'LBL_LIST_START_DATE' => 'تاریخ شروع',
    'LBL_START_TIME' => 'زمان شروع:',
    'DATE_FORMAT' => '(سال-ماه-روز)',
    'LBL_NONE' => 'هیچ‌کدام',
    'LBL_CONTACT' => 'مخاطب:',
    'LBL_EMAIL_ADDRESS' => 'آدرس ایمیل:',
    'LBL_PHONE' => 'تلفن:',
    'LBL_EMAIL' => 'آدرس ایمیل:',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_NAME' => 'نام:',
    'LBL_CONTACT_NAME' => 'نام مخاطب ',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_DATE_DUE_FLAG' => 'بدون تاریخ مقرر',
    'LBL_DATE_START_FLAG' => 'بدون تاریخ شروع',
    'LBL_LIST_MY_TASKS' => 'وظایف باز من',
    'LNK_NEW_TASK' => 'ساخت وظیفه',
    'LNK_TASK_LIST' => 'مشاهده وظایف',
    'LNK_IMPORT_TASKS' => 'درون‌ریزی وظایف',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'کاربر تعیین شده',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به:',
    'LBL_LIST_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_CONTACT_ID' => 'شناسه مخاطب:',
    'LBL_PARENT_ID' => 'شناسه والد:',
    'LBL_CONTACT_PHONE' => 'تلفن مخاطب:',
    'LBL_PARENT_TYPE' => 'نوع والد:',
    'LBL_TASK_INFORMATION' => 'خلاصه وظیفه', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'ویرایش چیدمان' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'یادداشت‌ها',
    //For export labels
    'LBL_DATE_DUE' => 'موعد مقرر',
    'LBL_RELATED_TO' => 'مربوط به:',
);
