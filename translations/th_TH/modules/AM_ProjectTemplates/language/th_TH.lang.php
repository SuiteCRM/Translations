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
    'LBL_ASSIGNED_TO_ID' => 'ชื่อไอดีผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้จัดการโครงการ',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อต้นแบบ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_REMOVE' => 'ลบออก',
    'LBL_LIST_FORM_TITLE' => 'รายการแม่แบบโครงการ',
    'LBL_MODULE_NAME' => 'แม่แบบโครงการ',
    'LBL_MODULE_TITLE' => 'แม่แบบโครงการ',
    'LBL_HOMEPAGE_TITLE' => 'แม่แบบโครงการของฉัน',
    'LNK_NEW_RECORD' => 'สร้างแม่แบบโครงการ',
    'LNK_LIST' => 'ดูแม่แบบโครงการ',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'นำเข้าแม่แบบโครงการ',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาแม่แบบโครงการ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'แม่แบบโครงการใหม่',
    'LBL_STATUS' => 'สถานะ',
    'LBL_PRIORITY' => 'ลำดับความสำคัญ',
    'LBL_PROJECT_NAME' => 'ชื่อโครงการ',
    'LBL_START_DATE' => 'วันที่เริ่มต้น',
    'LBL_CREATE_PROJECT_TITLE' => 'สร้างโครงการใหม่จากแม่แบบนี้หรือไม่',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'แม่แบบงาน',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'ผู้ใช้งาน',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'ผู้ติดต่อ',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'เลือกทรัพยากร',
    'LBL_NEW_PROJECT_CREATED' => 'สร้างโครงการใหม่แล้ว',
    'LBL_NEW_PROJECT' => 'สร้าง Project ใหม่',
    'LBL_CANCEL_PROJECT' => 'ยกเลิก',

    'LBL_SUBTASK' => 'ภารกิจ',
    'LBL_MILESTONE_FLAG' => 'เหตุการณ์สำคัญ',
    'LBL_RELATIONSHIP_TYPE' => 'ชนิดความสัมพันธ์',
    'LBL_LAG' => 'ความล่าช้า',
    'LBL_DAYS' => 'วัน',
    'LBL_HOURS' => 'ชั่วโมง',
    'LBL_MONTHS' => 'เดือน',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'แผนงานโครงการ',
    'LBL_VIEW_GANTT_TITLE' => 'แสดง Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'ระยะเวลา',
    'LBL_TASK_TITLE' => 'แก้ไขงาน',
    'LBL_DURATION_TITLE' => 'แก้ไขระยะเวลา',
    'LBL_DESCRIPTION' => 'บันทึกย่อ',
    'LBL_ASSIGNED_USER_ID' => 'ผู้รับผิดชอบ',

    'LBL_LIST_ASSIGNED_USER' => 'ผู้จัดการโครงการ',
    'LBL_UNASSIGNED' => 'ไม่ได้กำหนด',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'ทรัพยากร',
    'LBL_DELETE_TASK' => 'ลบงาน',
    'LBL_VIEW_DETAIL' => 'ดูรายละเอียด',
    'LBL_ADD_NEW_TASK' => 'เพิ่มงานใหม่',
    'LBL_ASSIGNED_USER_NAME' => 'ผู้จัดการโครงการ:',

    'LBL_TASK_ID' => 'ไอดี',
    'LBL_TASK_NAME' => 'ชื่องาน',
    'LBL_DURATION' => 'ระยะเวลา',
    'LBL_ACTUAL_DURATION' => 'ระยะเวลาจริง',
    'LBL_START' => 'เริ่มต้น',
    'LBL_FINISH' => 'เสร็จสิ้น',
    'LBL_PREDECESSORS' => 'อันก่อนหน้า',
    'LBL_PERCENT_COMPLETE' => '%เสร็จสมบูรณ์',
    'LBL_EDIT_TASK_PROPERTIES' => 'แก้ไขคุณสมบัติของงาน',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'พิจารณาวันทำการ',
    'LBL_COPY_ALL_TASKS' => 'คัดลอกงาน ด้วยทรัพยากรทั้งหมด',
    'LBL_COPY_SEL_TASKS' => 'คัดลอกงานที่เลือกด้วยทรัพยากร',
    'LBL_TOOLTIP_TITLE' => 'คำแนะนำ',
    'LBL_TOOLTIP_TEXT' => 'คัดลอกงานทั้งหมดกับผู้ใช้ที่กำหนด',

    'LBL_EMAIL' => 'อีเมล',
    'LBL_PHONE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_ADD_BUTTON' => 'เพิ่ม',
    'LBL_ADD_INVITEE' => 'เพิ่มทรัพยากร',
    'LBL_FIRST_NAME' => 'ชื่อ',
    'LBL_LAST_NAME' => 'นามสกุล',
    'LBL_SEARCH_BUTTON' => 'ค้นหา',
    'LBL_EMPTY_SEARCH_RESULT' => 'ขออภัย ไม่พบผลลัพธ์ โปรดสร้างการเชิญด้านล่าง',
    'LBL_CREATE_INVITEE' => 'สร้างทรัพยากร',
    'LBL_CREATE_CONTACT' => 'เป็นผู้ติดต่อ',
    'LBL_CREATE_AND_ADD' => 'สร้าง และเพิ่ม',
    'LBL_CANCEL_CREATE_INVITEE' => 'ยกเลิก',
    'LBL_NO_ACCESS' => 'คุณไม่สามารถเข้าถึงเพื่อสร้าง $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'รายการทรัพยากร',
    'LBL_NONE' => 'ไม่มี',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'เทมเพลตโครงการ: จากชื่อเทมเพลตโครงการ',


);
