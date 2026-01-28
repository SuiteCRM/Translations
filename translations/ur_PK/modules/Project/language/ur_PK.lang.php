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
    'LBL_MODULE_NAME' => 'منصوبہ',
    'LBL_MODULE_TITLE' => 'Projects: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Project Search',
    'LBL_LIST_FORM_TITLE' => 'Project List',
    'LBL_HISTORY_TITLE' => 'تاریخ',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'تاریخ کی تشکیل:',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم:',
    'LBL_ASSIGNED_USER_ID' => 'اس کو تفویض:',
    'LBL_ASSIGNED_USER_NAME' => 'پروجیکٹ مینیجر:',
    'LBL_MODIFIED_USER_ID' => 'Modified User Id:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => 'نام:',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_DELETED' => 'Deleted:',
    'LBL_DATE' => 'تاریخ:',
    'LBL_DATE_START' => 'شروع کی تاریخ:',
    'LBL_DATE_END' => 'آخری تاریخ:',
    'LBL_PRIORITY' => 'ترجیح:',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Total Estimated Effort (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Total Actual Effort (hrs)',
    'LBL_LIST_END_DATE' => 'آخری تاریخ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'منصوبے کے کام',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'کوئی نہیں',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'New Project',
    'LNK_NEW_PROJECT' => 'منصوبہ بنائیں',
    'LNK_PROJECT_LIST' => 'View Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => 'View Project Tasks',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_CASES_SUBPANEL_TITLE' => 'معاملے',
    'LBL_BUGS_SUBPANEL_TITLE' => 'مسئلے',
    'LBL_TASK_ID' => 'شناخت',
    'LBL_TASK_NAME' => 'ٹاسک کا نام',
    'LBL_DURATION' => 'دورانیہ',
    'LBL_ACTUAL_DURATION' => 'اصل دورانیہ',
    'LBL_START' => 'شروع کریں',
    'LBL_FINISH' => 'ختم',
    'LBL_PREDECESSORS' => 'پیشگوئی',
    'LBL_PERCENT_COMPLETE' => '% مکمل',
    'LBL_MORE' => 'More...',
    'LBL_OPPORTUNITIES' => 'مواقعے',
    'LBL_NEXT_WEEK' => 'اگے',
    'LBL_PROJECT_INFORMATION' => 'Project Overview',
    'LBL_EDITLAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'منصوبے کے کام',
    'LBL_VIEW_GANTT_TITLE' => 'گانٹ دیکھیں',
    'LBL_VIEW_GANTT_DURATION' => 'دورانیہ',
    'LBL_TASK_TITLE' => 'ٹاسک میں ترمیم کریں',
    'LBL_DURATION_TITLE' => 'مدت میں ردوبدل کریں',
    'LBL_LAG' => 'اندراج',
    'LBL_DAYS' => 'دنوں',
    'LBL_HOURS' => 'گھنٹے',
    'LBL_MONTHS' => 'مہینے',
    'LBL_SUBTASK' => 'کام',
    'LBL_MILESTONE_FLAG' => 'سنگ میل',
    'LBL_ADD_NEW_TASK' => 'نیا کام شامل کریں',
    'LBL_DELETE_TASK' => 'ٹاسک کو ختم کریں',
    'LBL_EDIT_TASK_PROPERTIES' => 'کام کی خصوصیات میں ترمیم کریں.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'جنتری وسائل ',
    'LBL_RELATIONSHIP_TYPE' => 'رشتے کی قسم',
    'LBL_ASSIGNED_TO' => 'پروجیکٹ مینیجر',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Project Template',
    'LBL_STATUS' => 'حیثیت:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'پروجیکٹ مینیجر',
    'LBL_TOOLTIP_PROJECT_NAME' => 'منصوبہ',
    'LBL_TOOLTIP_TASK_NAME' => 'ٹاسک کا نام',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'دورانیہ',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'پچھلے مہینے',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'اگلا مہینہ',
    'LBL_RESOURCE_CHART_WEEK' => 'ایک ہفتہ',
    'LBL_RESOURCE_CHART_DAY' => 'ایک دن',
    'LBL_RESOURCE_CHART_WARNING' => 'No resources have been assigned to a project.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'My Projects',
    'LBL_LIST_ASSIGNED_USER' => 'پروجیکٹ مینیجر',
    'LBL_UNASSIGNED' => 'غیر مرتب شدہ',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'وسائل',

    'LBL_EMAIL' => 'ای میل',
    'LBL_PHONE' => 'آفس کا فون:',
    'LBL_ADD_BUTTON' => 'شامل کریں',
    'LBL_ADD_INVITEE' => 'وسائل کو شامل کریں',
    'LBL_FIRST_NAME' => 'پہلا نام',
    'LBL_LAST_NAME' => 'آخری نام',
    'LBL_SEARCH_BUTTON' => 'تلاش کریں',
    'LBL_EMPTY_SEARCH_RESULT' => 'معذرت، کوئی نتیجہ نہیں مل سکا. براہ مہربانی ذیل میں ایک دعوت نامہ بنائیں.',
    'LBL_CREATE_INVITEE' => 'ایک وسائل بنائیں',
    'LBL_CREATE_CONTACT' => 'رابطے کے طور پر',
    'LBL_CREATE_AND_ADD' => 'بنائیں اور شامل کریں',
    'LBL_CANCEL_CREATE_INVITEE' => 'منسوخ کریں',
    'LBL_NO_ACCESS' => '$module بنانے کے لئے آپ تک رسائی حاصل نہیں ہے',
    'LBL_SCHEDULING_FORM_TITLE' => 'وسائل کی فہرست',
    'LBL_REMOVE' => 'ہٹا دیں',
    'LBL_VIEW_DETAIL' => 'تفصیلات دیکھیں',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'کام کے دنوں پر غور کریں',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'تلاش کریں',

    'LBL_CHART_TYPE' => 'قسم',
    'LBL_CHART_WEEKLY' => 'ہفتہ وار',
    'LBL_CHART_MONTHLY' => 'ماہانہ وار',
    'LBL_CHART_QUARTERLY' => 'سہ ماہی',

    'LBL_RESOURCE_CHART_MONTH' => 'ایک مہینہ',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'رابطہ عنوان سے پروجیکٹ رابطے',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'پروجیکٹ سانچے: پراجیکٹ عنوان سے پروجیکٹ',
    'LBL_AOS_QUOTES_PROJECT' => 'حوالہ جات: پروجیکٹ',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'سنبھالنے',
    'LBL_DESCENDING' => 'نزولی',
);
