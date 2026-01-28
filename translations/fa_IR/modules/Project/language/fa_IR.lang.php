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
    'LBL_MODULE_NAME' => 'پروژه',
    'LBL_MODULE_TITLE' => 'پروژه‌ها: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی پروژه',
    'LBL_LIST_FORM_TITLE' => 'لیست پروژه',
    'LBL_HISTORY_TITLE' => 'سوابق',
    'LBL_ID' => 'شناسه:',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد:',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_ASSIGNED_USER_ID' => 'اختصاص داده شده به:',
    'LBL_ASSIGNED_USER_NAME' => 'مدیر پروژه:',
    'LBL_MODIFIED_USER_ID' => 'شناسه ویرایش کننده:',
    'LBL_CREATED_BY' => 'ایجاد کننده:',
    'LBL_NAME' => 'نام:',
    'LBL_DESCRIPTION' => 'توضیحات:',
    'LBL_DELETED' => 'حذف شده:',
    'LBL_DATE' => 'تاریخ:',
    'LBL_DATE_START' => 'تاریخ شروع:',
    'LBL_DATE_END' => 'تاریخ پایان:',
    'LBL_PRIORITY' => 'اولویت:',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'مجموع تلاش پیش‌بینی شده (ساعت)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'مجموع تلاش واقعی (ساعت)',
    'LBL_LIST_END_DATE' => 'تاریخ پایان',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'وظایف پروژه',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'فرصت‌ها',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'هیچ‌کدام',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'پروژه جدید',
    'LNK_NEW_PROJECT' => 'ایجاد پروژه',
    'LNK_PROJECT_LIST' => 'مشاهده لیست پروژه',
    'LNK_NEW_PROJECT_TASK' => 'ایجاد وظیفه پروژه',
    'LNK_PROJECT_TASK_LIST' => 'مشاهده وظایف پروژه',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'پروژه ها',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'حساب ها',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'فرصت‌ها',
    'LBL_CASES_SUBPANEL_TITLE' => 'خدمات',
    'LBL_BUGS_SUBPANEL_TITLE' => 'اشکالات',
    'LBL_TASK_ID' => 'شناسه',
    'LBL_TASK_NAME' => 'نام وظیفه',
    'LBL_DURATION' => 'مدت',
    'LBL_ACTUAL_DURATION' => 'مدت واقعی',
    'LBL_START' => 'شروع',
    'LBL_FINISH' => 'پایان',
    'LBL_PREDECESSORS' => 'پیشینیان',
    'LBL_PERCENT_COMPLETE' => '٪ کامل شده',
    'LBL_MORE' => 'بیشتر...',
    'LBL_OPPORTUNITIES' => 'فرصت‌ها',
    'LBL_NEXT_WEEK' => 'ادامه',
    'LBL_PROJECT_INFORMATION' => 'خلاصه پروژه',
    'LBL_EDITLAYOUT' => 'ویرایش چیدمان' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'وظایف پروژه',
    'LBL_VIEW_GANTT_TITLE' => 'نمای Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'مدت',
    'LBL_TASK_TITLE' => 'ویرایش وظیفه',
    'LBL_DURATION_TITLE' => 'ویرایش مدت',
    'LBL_LAG' => 'تاخیر',
    'LBL_DAYS' => 'روز',
    'LBL_HOURS' => 'ساعت',
    'LBL_MONTHS' => 'ماه',
    'LBL_SUBTASK' => 'وظیفه',
    'LBL_MILESTONE_FLAG' => 'نقطه عطف',
    'LBL_ADD_NEW_TASK' => 'افزودن وظیفه جديد',
    'LBL_DELETE_TASK' => 'حذف وظیفه',
    'LBL_EDIT_TASK_PROPERTIES' => 'ویرایش ویژگی‌های وظیفه.',
    'LBL_PARENT_TASK_ID' => 'شناسه والد وظیفه',
    'LBL_RESOURCE_CHART' => 'تقویم منابع',
    'LBL_RELATIONSHIP_TYPE' => 'نوع رابطه',
    'LBL_ASSIGNED_TO' => 'مدیر پروژه',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'قالب پروژه',
    'LBL_STATUS' => 'وضعیت',
    'LBL_LIST_ASSIGNED_USER_ID' => 'مدیر پروژه',
    'LBL_TOOLTIP_PROJECT_NAME' => 'پروژه',
    'LBL_TOOLTIP_TASK_NAME' => 'نام وظیفه',
    'LBL_TOOLTIP_TITLE' => 'وظیفه در این روز',
    'LBL_TOOLTIP_TASK_DURATION' => 'مدت',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'منابع یک کاربر است',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'منبع یک مخاطب است',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'ماه قبل',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'ماه آینده',
    'LBL_RESOURCE_CHART_WEEK' => 'هفته',
    'LBL_RESOURCE_CHART_DAY' => 'روز',
    'LBL_RESOURCE_CHART_WARNING' => 'هیچ منبعی به این پروژه اختصاص داده نشده است.',
    'LBL_PROJECT_DELETE_MSG' => 'آیا از حذف این پروژه و وظایف مربوط به آن مطمئن هستید؟',
    'LBL_LIST_MY_PROJECT' => 'پروژه‌های من',
    'LBL_LIST_ASSIGNED_USER' => 'مدیر پروژه',
    'LBL_UNASSIGNED' => 'اختصاص داده نشده',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'منابع',

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
    'LBL_REMOVE' => 'حذف',
    'LBL_VIEW_DETAIL' => 'مشاهده جزئیات',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'جستجو',

    'LBL_CHART_TYPE' => 'نوع',
    'LBL_CHART_WEEKLY' => 'هفتگی',
    'LBL_CHART_MONTHLY' => 'ماهیانه',
    'LBL_CHART_QUARTERLY' => 'فصلی',

    'LBL_RESOURCE_CHART_MONTH' => 'ماه',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'صعودی',
    'LBL_DESCENDING' => 'نزولی',
);
