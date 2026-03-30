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
    'LBL_MODULE_NAME' => 'Төсөл',
    'LBL_MODULE_TITLE' => 'Төсөл: Үндсэн',
    'LBL_SEARCH_FORM_TITLE' => 'Төсөл хайх',
    'LBL_LIST_FORM_TITLE' => 'Төслүүд',
    'LBL_HISTORY_TITLE' => 'Түүх',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Үүссэн:',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн:',
    'LBL_ASSIGNED_USER_ID' => 'Хариуцагч:',
    'LBL_ASSIGNED_USER_NAME' => 'Төслийн удирдагч:',
    'LBL_MODIFIED_USER_ID' => 'Өөрчилсөн хэрэглэгч id:',
    'LBL_CREATED_BY' => 'Үүсгэсэн:',
    'LBL_NAME' => 'Нэр:',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_DELETED' => 'Устгасан:',
    'LBL_DATE' => 'Огноо:',
    'LBL_DATE_START' => 'Эхлэх огноо:',
    'LBL_DATE_END' => 'Дуусах огноо:',
    'LBL_PRIORITY' => 'Эрэмбэ:',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Нийт баримжаа шаардагдах хүч (цагаар)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Нийт бодитоор зарцуулсан хүч (цагаар)',
    'LBL_LIST_END_DATE' => 'Дуусах огноо',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Төслүүд',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Төслийн Ажлууд',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Боломжууд /Opp/',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Байхгүй',
    'LBL_ALL_PROJECTS' => 'Бүх төсөл',
    'LBL_ALL_USERS' => 'Бүх хэрэглэгч',
    'LBL_ALL_CONTACTS' => 'Бүгд харилцагч.х',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Шинэ төсөл',
    'LNK_NEW_PROJECT' => 'Төсөл үүсгэх',
    'LNK_PROJECT_LIST' => 'Төсөл харах',
    'LNK_NEW_PROJECT_TASK' => 'Төслийн ажил үүсгэх',
    'LNK_PROJECT_TASK_LIST' => 'Төслийн ажил харах',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Төслүүд',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүх',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Байгууллагууд',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Боломжууд /Opp/',
    'LBL_CASES_SUBPANEL_TITLE' => 'Кейсүүд',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Прог-ын Алдаа',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ажлын нэр',
    'LBL_DURATION' => 'Үргэжлэх',
    'LBL_ACTUAL_DURATION' => 'Бодитоор үргэлжилсэн',
    'LBL_START' => 'Эхлэх',
    'LBL_FINISH' => 'Дуусгах',
    'LBL_PREDECESSORS' => 'Өмнө нь хийгдэх',
    'LBL_PERCENT_COMPLETE' => 'Гүйцэтгэлийн %',
    'LBL_MORE' => 'Илүү...',
    'LBL_OPPORTUNITIES' => 'Боломжууд /Opp/',
    'LBL_NEXT_WEEK' => 'Дараахи',
    'LBL_PROJECT_INFORMATION' => 'Төслийн тойм',
    'LBL_EDITLAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Төслийн Ажлууд',
    'LBL_VIEW_GANTT_TITLE' => 'Гантт хүснэгт үзэх',
    'LBL_VIEW_GANTT_DURATION' => 'Үргэжлэх',
    'LBL_TASK_TITLE' => 'Ажил засах',
    'LBL_DURATION_TITLE' => 'Үргэлжлэх хугацааг засах',
    'LBL_LAG' => 'Хоцролт',
    'LBL_DAYS' => 'Өдөр',
    'LBL_HOURS' => 'Цаг',
    'LBL_MONTHS' => 'Сар',
    'LBL_SUBTASK' => 'Ажил',
    'LBL_MILESTONE_FLAG' => 'Хяналтын цэг',
    'LBL_ADD_NEW_TASK' => 'Шинэ ажил нэмэх',
    'LBL_DELETE_TASK' => 'Ажил устгах',
    'LBL_EDIT_TASK_PROPERTIES' => 'Ажлын тохиргоо засах.',
    'LBL_PARENT_TASK_ID' => 'Эцэг ажлын Id',
    'LBL_RESOURCE_CHART' => 'Нөөцийн календар',
    'LBL_RELATIONSHIP_TYPE' => 'Хамаарлын төрөл',
    'LBL_ASSIGNED_TO' => 'Төслийн удирдагч',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Төслийн загвар',
    'LBL_STATUS' => 'Төлөв:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Төслийн удирдагч',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Төсөл',
    'LBL_TOOLTIP_TASK_NAME' => 'Ажлын нэр',
    'LBL_TOOLTIP_TITLE' => 'Өнөөдөр хийх ажлууд',
    'LBL_TOOLTIP_TASK_DURATION' => 'Үргэжлэх',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Нөөц нь Хэрэглэгч юм',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Нөөц нь гэрээ юм',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Өмнөх сар',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Ирэх Сар',
    'LBL_RESOURCE_CHART_WEEK' => '7 хоног',
    'LBL_RESOURCE_CHART_DAY' => 'Өдөр',
    'LBL_RESOURCE_CHART_WARNING' => 'Төсөлд ямар нэг нөөц зоогоогүй байна.',
    'LBL_PROJECT_DELETE_MSG' => 'Та энэ төсөл, холбоотой ажлуудыг устгахад итгэлтэй байна уу?',
    'LBL_LIST_MY_PROJECT' => 'Миний төслүүд',
    'LBL_LIST_ASSIGNED_USER' => 'Төслийн удирдагч',
    'LBL_UNASSIGNED' => 'Хуваарилаагүй',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Нөөцүүд',

    'LBL_EMAIL' => 'Е-мэйл',
    'LBL_PHONE' => 'Утас ажлын:',
    'LBL_ADD_BUTTON' => 'Нэмэх',
    'LBL_ADD_INVITEE' => 'Нөөц нэмэх',
    'LBL_FIRST_NAME' => 'Өөрийн Нэр',
    'LBL_LAST_NAME' => 'Овог Нэр',
    'LBL_SEARCH_BUTTON' => 'Хайлт',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'Харилцагч хүнээр',
    'LBL_CREATE_AND_ADD' => 'Үүсгэж нэмэх',
    'LBL_CANCEL_CREATE_INVITEE' => 'Цуцлах',
    'LBL_NO_ACCESS' => 'Та $module үүсгэх эрхгүй байна',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Устгах',
    'LBL_VIEW_DETAIL' => 'Дэлгэрэнгүйг харах',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Хайлт',

    'LBL_CHART_TYPE' => 'Төрөл',
    'LBL_CHART_WEEKLY' => 'Долоо хоног тутамд',
    'LBL_CHART_MONTHLY' => 'Сар тутамд',
    'LBL_CHART_QUARTERLY' => 'Улирал тутамд',

    'LBL_RESOURCE_CHART_MONTH' => 'Сар',
    'LBL_RESOURCE_CHART_QUARTER' => 'Улирал',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Төслийн загвар: Төслийн нэрээр харуулах',
    'LBL_AOS_QUOTES_PROJECT' => 'Үнийн санал: Төсөл',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Өсөх',
    'LBL_DESCENDING' => 'Буурах',
);
