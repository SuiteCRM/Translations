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
    'LBL_MODULE_NAME' => 'Төслийн Ажлууд',
    'LBL_MODULE_TITLE' => 'Project Task: Home',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Project Id:',
    'LBL_DATE_ENTERED' => 'Үүссэн:',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн:',
    'LBL_ASSIGNED_USER_ID' => 'Хариуцагч:',
    'LBL_MODIFIED_USER_ID' => 'Өөрчилсөн хэрэглэгч id:',
    'LBL_CREATED_BY' => 'Үүсгэсэн:',
    'LBL_NAME' => 'Нэр:',
    'LBL_STATUS' => 'Төлөв:',
    'LBL_DATE_DUE' => 'Due Date:',
    'LBL_TIME_DUE' => 'Due Time:',
    'LBL_PREDECESSORS' => 'Predecessor',
    'LBL_DATE_START' => 'Эхлэх огноо:',
    'LBL_DATE_FINISH' => 'Finish Date:',
    'LBL_TIME_START' => 'Эхлэх цаг:',
    'LBL_TIME_FINISH' => 'Finish Time:',
    'LBL_DURATION' => 'Үргэжилэх хугацаа:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
    'LBL_PARENT_ID' => 'Project:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'Эрэмбэ:',
    'LBL_DESCRIPTION' => 'Тэмдэглэл:',
    'LBL_ORDER_NUMBER' => 'Order:',
    'LBL_TASK_NUMBER' => 'Task Number:',
    'LBL_TASK_ID' => 'Task ID:',
    'LBL_MILESTONE_FLAG' => 'Milestone:',
    'LBL_ESTIMATED_EFFORT' => 'Estimated Effort (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Actual Effort (hrs):',
    'LBL_UTILIZATION' => 'Utilization (%):',
    'LBL_DELETED' => 'Устгасан:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_PARENT_NAME' => 'Төсөл',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => 'Гүйцэтгэлийн %',
    'LBL_LIST_STATUS' => 'Төлөв',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Хариуцагч',
    'LBL_LIST_DATE_DUE' => 'Дуусах',
    'LBL_LIST_PRIORITY' => 'Эрэмбэ',
    'LBL_LIST_CLOSE' => 'Хаах',
    'LBL_PROJECT_NAME' => 'Project Name',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Төсөл үүсгэх',
    'LNK_PROJECT_LIST' => 'Төслүүд',
    'LNK_NEW_PROJECT_TASK' => 'Төслийн ажил үүсгэх',
    'LNK_PROJECT_TASK_LIST' => 'Төслийн Ажлууд',

    'LBL_LIST_MY_PROJECT_TASKS' => 'My Project Tasks',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Төслийн Ажлууд',
    'LBL_NEW_FORM_TITLE' => 'New Project Task',

    'LBL_HISTORY_TITLE' => 'Түүх',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүх',

    'LBL_ASSIGNED_USER_NAME' => 'Хариуцагч',
    'LBL_PARENT_NAME' => 'Project Name',
    'LBL_EDITLAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Хоцролт',
    'LBL_DAYS' => 'Өдөр',
    'LBL_HOURS' => 'Цаг',
    'LBL_RELATIONSHIP_TYPE' => 'Хамаарлын төрөл',

    'LBL_ASCENDING' => 'Өсөх',
    'LBL_DESCENDING' => 'Буурах',
);
