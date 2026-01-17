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
    'LBL_MODULE_NAME' => 'แผนงานโครงการ',
    'LBL_MODULE_TITLE' => 'โครงการงาน: หน้าแรก',

    'LBL_ID' => 'ไอดี:',
    'LBL_PROJECT_TASK_ID' => 'ไอดีงานโครงการ:',
    'LBL_PROJECT_ID' => 'ไอดีโครงการ:',
    'LBL_DATE_ENTERED' => 'วันที่ที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไขครั้งสุดท้าย:',
    'LBL_ASSIGNED_USER_ID' => 'ผู้รับผิดชอบ',
    'LBL_MODIFIED_USER_ID' => 'ไอดีผู้ใช้ที่แก้ไขแล้ว:',
    'LBL_CREATED_BY' => 'สร้างโดย:',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_STATUS' => 'สถานะ',
    'LBL_DATE_DUE' => 'วันที่ที่สิ้นสุด:',
    'LBL_TIME_DUE' => 'เวลาที่สิ้นสุด:',
    'LBL_PREDECESSORS' => 'รุ่นก่อน',
    'LBL_DATE_START' => 'วันที่เริ่มต้น:',
    'LBL_DATE_FINISH' => 'วันสิ้นสุด:',
    'LBL_TIME_START' => 'เวลาเริ่มต้น:',
    'LBL_TIME_FINISH' => 'เวลาเสร็จสิ้น:',
    'LBL_DURATION' => 'ระยะเวลา:',
    'LBL_DURATION_UNIT' => 'หน่วยระยะเวลา:',
    'LBL_ACTUAL_DURATION' => 'ระยะเวลาจริง:',
    'LBL_PARENT_ID' => 'โครงการ:',
    'LBL_PARENT_TASK_ID' => 'ไอดีงานหลัก:',
    'LBL_PERCENT_COMPLETE' => '% Cpl',
    'LBL_PRIORITY' => 'ลำดับความสำคัญ:',
    'LBL_DESCRIPTION' => 'หมายเหตุ:',
    'LBL_ORDER_NUMBER' => 'รายการสั่งซื้อ:',
    'LBL_TASK_NUMBER' => 'หมายเลขงาน:',
    'LBL_TASK_ID' => 'ไอดีงาน:',
    'LBL_MILESTONE_FLAG' => 'ความคืบหน้า:',
    'LBL_ESTIMATED_EFFORT' => 'ความพยายามโดยประมาณ (น.):',
    'LBL_ACTUAL_EFFORT' => 'ความพยายามจริง (น.):',
    'LBL_UTILIZATION' => 'การใช้ประโยชน์ (%):',
    'LBL_DELETED' => 'ลบ:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_PARENT_NAME' => 'แผนงาน',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '%เสร็จสมบูรณ์',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_ASSIGNED_USER_ID' => 'ผู้รับผิดชอบ',
    'LBL_LIST_DATE_DUE' => 'วันครบกำหนด',
    'LBL_LIST_PRIORITY' => 'ลำดับความสำคัญ',
    'LBL_LIST_CLOSE' => 'ปิด',
    'LBL_PROJECT_NAME' => 'ชื่อโครงการ',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'สร้าง Project ใหม่',
    'LNK_PROJECT_LIST' => 'รายชื่อโครงการ',
    'LNK_NEW_PROJECT_TASK' => 'สร้างงานโครงการ',
    'LNK_PROJECT_TASK_LIST' => 'แผนงานโครงการ',

    'LBL_LIST_MY_PROJECT_TASKS' => 'งานโครงการของฉัน',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'แผนงานโครงการ',
    'LBL_NEW_FORM_TITLE' => 'งานโครงการใหม่',

    'LBL_HISTORY_TITLE' => 'ประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',

    'LBL_ASSIGNED_USER_NAME' => 'ผู้รับผิดชอบ',
    'LBL_PARENT_NAME' => 'ชื่อโครงการ',
    'LBL_EDITLAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'ไทม์ไลน์',

    'LBL_SUBTASK' => 'งานย่อย',
    'LBL_LAG' => 'ความล่าช้า',
    'LBL_DAYS' => 'วัน',
    'LBL_HOURS' => 'ชั่วโมง',
    'LBL_RELATIONSHIP_TYPE' => 'ชนิดความสัมพันธ์',

    'LBL_ASCENDING' => 'เรียงจากน้อยไปมาก',
    'LBL_DESCENDING' => 'เรียงจากมากไปน้อย',
);
