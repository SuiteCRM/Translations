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
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_ASSIGNED_TO_NAME' => 'مدیر پروژه',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'نام قالب',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_NAME' => 'نام',
    'LBL_EDIT_BUTTON' => 'ویرایش',
    'LBL_REMOVE' => 'حذف',
    'LBL_LIST_FORM_TITLE' => 'لیست قالب‌های پروژه',
    'LBL_MODULE_NAME' => 'قالب‌های پروژه',
    'LBL_MODULE_TITLE' => 'قالب‌های پروژه',
    'LBL_HOMEPAGE_TITLE' => 'قالب‌های پروژه من',
    'LNK_NEW_RECORD' => 'ایجاد قالب‌های پروژه',
    'LNK_LIST' => 'مشاهده قالب‌های پروژه',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'درون‌ریزی قالب‌های پروژه',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی قالب‌های پروژه',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'مشاهده تاریخچه',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_NEW_FORM_TITLE' => 'قالب‌های پروژه جدید',
    'LBL_STATUS' => 'وضعیت',
    'LBL_PRIORITY' => 'اولویت',
    'LBL_PROJECT_NAME' => 'نام پروژه',
    'LBL_START_DATE' => 'تاریخ شروع',
    'LBL_CREATE_PROJECT_TITLE' => 'یک پروژه جدید از این الگو ایجاد شود؟',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'قالب‌های وظیفه',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'کاربرها',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'مخاطب‌ها',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Select Resources',
    'LBL_NEW_PROJECT_CREATED' => 'New Project Created',
    'LBL_NEW_PROJECT' => 'ایجاد پروژه',
    'LBL_CANCEL_PROJECT' => 'لغو',

    'LBL_SUBTASK' => 'وظیفه',
    'LBL_MILESTONE_FLAG' => 'نقطه عطف',
    'LBL_RELATIONSHIP_TYPE' => 'نوع رابطه',
    'LBL_LAG' => 'تاخیر',
    'LBL_DAYS' => 'روز',
    'LBL_HOURS' => 'ساعت',
    'LBL_MONTHS' => 'ماه',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'وظایف پروژه',
    'LBL_VIEW_GANTT_TITLE' => 'نمای Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'مدت',
    'LBL_TASK_TITLE' => 'ویرایش وظیفه',
    'LBL_DURATION_TITLE' => 'ویرایش مدت',
    'LBL_DESCRIPTION' => 'یادداشت‌ها',
    'LBL_ASSIGNED_USER_ID' => 'اختصاص داده شده به:',

    'LBL_LIST_ASSIGNED_USER' => 'مدیر پروژه',
    'LBL_UNASSIGNED' => 'اختصاص داده نشده',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'منابع',
    'LBL_DELETE_TASK' => 'حذف وظیفه',
    'LBL_VIEW_DETAIL' => 'مشاهده جزئیات',
    'LBL_ADD_NEW_TASK' => 'افزودن وظیفه جديد',
    'LBL_ASSIGNED_USER_NAME' => 'مدیر پروژه:',

    'LBL_TASK_ID' => 'شناسه',
    'LBL_TASK_NAME' => 'نام وظیفه',
    'LBL_DURATION' => 'مدت',
    'LBL_ACTUAL_DURATION' => 'مدت واقعی',
    'LBL_START' => 'شروع',
    'LBL_FINISH' => 'پایان',
    'LBL_PREDECESSORS' => 'پیشینیان',
    'LBL_PERCENT_COMPLETE' => '٪ کامل شده',
    'LBL_EDIT_TASK_PROPERTIES' => 'ویرایش ویژگی‌های وظیفه.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',
    'LBL_COPY_ALL_TASKS' => 'Copy All Tasks With Resources',
    'LBL_COPY_SEL_TASKS' => 'Copy Selected Tasks With Resources',
    'LBL_TOOLTIP_TITLE' => 'Hint',
    'LBL_TOOLTIP_TEXT' => 'Copies All tasks with assigned users',

    'LBL_EMAIL' => 'ایمیل',
    'LBL_PHONE' => 'تلفن دفتر:',
    'LBL_ADD_BUTTON' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'نام',
    'LBL_LAST_NAME' => 'نام خانوادگی',
    'LBL_SEARCH_BUTTON' => 'جستجو',
    'LBL_EMPTY_SEARCH_RESULT' => 'با عرض پوزش، هیچ نتیجه ای یافت نشد. لطفاً یک مدعو در زیر ایجاد کنید.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'به عنوان مخاطب',
    'LBL_CREATE_AND_ADD' => 'ایجاد و افزودن',
    'LBL_CANCEL_CREATE_INVITEE' => 'لغو',
    'LBL_NO_ACCESS' => 'شما هیچ دسترسی برای ایجاد $module ندارید',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_NONE' => 'هیچ‌کدام',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
