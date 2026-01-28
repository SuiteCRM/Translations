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
    'LBL_MODULE_NAME' => 'وظایف پروژه',
    'LBL_MODULE_TITLE' => 'وظیفه پروژه: صفحه اصلی',

    'LBL_ID' => 'شناسه:',
    'LBL_PROJECT_TASK_ID' => 'شناسه وظیفه پروژه:',
    'LBL_PROJECT_ID' => 'شناسه پروژه:',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد:',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_ASSIGNED_USER_ID' => 'اختصاص داده شده به:',
    'LBL_MODIFIED_USER_ID' => 'شناسه ویرایش کننده:',
    'LBL_CREATED_BY' => 'ایجاد کننده:',
    'LBL_NAME' => 'نام:',
    'LBL_STATUS' => 'وضعیت',
    'LBL_DATE_DUE' => 'تاریخ مقرر:',
    'LBL_TIME_DUE' => 'زمان مقرر:',
    'LBL_PREDECESSORS' => 'اسبق',
    'LBL_DATE_START' => 'تاریخ شروع:',
    'LBL_DATE_FINISH' => 'تاریخ پایان:',
    'LBL_TIME_START' => 'زمان شروع:',
    'LBL_TIME_FINISH' => 'تاریخ پایان:',
    'LBL_DURATION' => 'مدت:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'مدت زمان واقعی:',
    'LBL_PARENT_ID' => 'پروژه:',
    'LBL_PARENT_TASK_ID' => 'شناسه مرجع وظیفه:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'اولویت:',
    'LBL_DESCRIPTION' => 'یادداشت‌ها:',
    'LBL_ORDER_NUMBER' => 'ترتیب:',
    'LBL_TASK_NUMBER' => 'شماره وظیفه:',
    'LBL_TASK_ID' => 'شناسه وظیفه:',
    'LBL_MILESTONE_FLAG' => 'نقطه عطف:',
    'LBL_ESTIMATED_EFFORT' => 'Estimated Effort (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Actual Effort (hrs):',
    'LBL_UTILIZATION' => 'استفاده (٪):',
    'LBL_DELETED' => 'حذف شده:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_PARENT_NAME' => 'پروژه',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '٪ کامل شده',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_LIST_ASSIGNED_USER_ID' => 'اختصاص داده شده به',
    'LBL_LIST_DATE_DUE' => 'موعد مقرر',
    'LBL_LIST_PRIORITY' => 'اولویت',
    'LBL_LIST_CLOSE' => 'بستن',
    'LBL_PROJECT_NAME' => 'نام پروژه',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'ایجاد پروژه',
    'LNK_PROJECT_LIST' => 'لیست پروژه',
    'LNK_NEW_PROJECT_TASK' => 'ایجاد وظیفه پروژه',
    'LNK_PROJECT_TASK_LIST' => 'وظایف پروژه',

    'LBL_LIST_MY_PROJECT_TASKS' => 'وظایف پروژه من',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'وظایف پروژه',
    'LBL_NEW_FORM_TITLE' => 'New Project Task',

    'LBL_HISTORY_TITLE' => 'سوابق',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',

    'LBL_ASSIGNED_USER_NAME' => 'اختصاص داده شده به',
    'LBL_PARENT_NAME' => 'نام پروژه',
    'LBL_EDITLAYOUT' => 'ویرایش چیدمان' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'نوار زمان',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'تاخیر',
    'LBL_DAYS' => 'روز',
    'LBL_HOURS' => 'ساعت',
    'LBL_RELATIONSHIP_TYPE' => 'نوع رابطه',

    'LBL_ASCENDING' => 'صعودی',
    'LBL_DESCENDING' => 'نزولی',
);
