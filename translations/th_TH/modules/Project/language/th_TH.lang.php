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
    'LBL_MODULE_NAME' => 'แผนงาน',
    'LBL_MODULE_TITLE' => 'โครงการ: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาโครงการ',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อโครงการ',
    'LBL_HISTORY_TITLE' => 'ประวัติ',
    'LBL_ID' => 'ไอดี:',
    'LBL_DATE_ENTERED' => 'วันที่ที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไขครั้งสุดท้าย:',
    'LBL_ASSIGNED_USER_ID' => 'ผู้รับผิดชอบ',
    'LBL_ASSIGNED_USER_NAME' => 'ผู้จัดการโครงการ:',
    'LBL_MODIFIED_USER_ID' => 'ไอดีผู้ใช้ที่แก้ไขแล้ว:',
    'LBL_CREATED_BY' => 'สร้างโดย:',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DELETED' => 'ลบ:',
    'LBL_DATE' => 'วันที่',
    'LBL_DATE_START' => 'วันที่เริ่มต้น:',
    'LBL_DATE_END' => 'วันที่สิ้นสุด:',
    'LBL_PRIORITY' => 'ลำดับความสำคัญ:',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'ความพยายามโดยรวม (ชม.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'ความพยายามจริงทั้งหมด (ชม.)',
    'LBL_LIST_END_DATE' => 'วันที่สิ้นสุด',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'แผนงานโครงการ',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'โอกาสการขาย',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'ไม่มี',
    'LBL_ALL_PROJECTS' => 'โครงการทั้งหมด',
    'LBL_ALL_USERS' => 'ผู้ใช้ทั้งหมด',
    'LBL_ALL_CONTACTS' => 'รายชื่อทั้งหมด',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'โครงการใหม่',
    'LNK_NEW_PROJECT' => 'สร้าง Project ใหม่',
    'LNK_PROJECT_LIST' => 'ดูรายชื่อโครงการ',
    'LNK_NEW_PROJECT_TASK' => 'สร้างงานโครงการ',
    'LNK_PROJECT_TASK_LIST' => 'ดูงานโครงการ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'โอกาสการขาย',
    'LBL_CASES_SUBPANEL_TITLE' => 'การติดตาม',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ข้อผิดพลาด',
    'LBL_TASK_ID' => 'ไอดี',
    'LBL_TASK_NAME' => 'ชื่องาน',
    'LBL_DURATION' => 'ระยะเวลา',
    'LBL_ACTUAL_DURATION' => 'ระยะเวลาจริง',
    'LBL_START' => 'เริ่มต้น',
    'LBL_FINISH' => 'เสร็จสิ้น',
    'LBL_PREDECESSORS' => 'อันก่อนหน้า',
    'LBL_PERCENT_COMPLETE' => '%เสร็จสมบูรณ์',
    'LBL_MORE' => 'เพิ่มเติม...',
    'LBL_OPPORTUNITIES' => 'โอกาสการขาย',
    'LBL_NEXT_WEEK' => 'ถัดไป',
    'LBL_PROJECT_INFORMATION' => 'ภาพรวมโครงการ',
    'LBL_EDITLAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'แผนงานโครงการ',
    'LBL_VIEW_GANTT_TITLE' => 'แสดง Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'ระยะเวลา',
    'LBL_TASK_TITLE' => 'แก้ไขงาน',
    'LBL_DURATION_TITLE' => 'แก้ไขระยะเวลา',
    'LBL_LAG' => 'ความล่าช้า',
    'LBL_DAYS' => 'วัน',
    'LBL_HOURS' => 'ชั่วโมง',
    'LBL_MONTHS' => 'เดือน',
    'LBL_SUBTASK' => 'ภารกิจ',
    'LBL_MILESTONE_FLAG' => 'เหตุการณ์สำคัญ',
    'LBL_ADD_NEW_TASK' => 'เพิ่มงานใหม่',
    'LBL_DELETE_TASK' => 'ลบงาน',
    'LBL_EDIT_TASK_PROPERTIES' => 'แก้ไขคุณสมบัติของงาน',
    'LBL_PARENT_TASK_ID' => 'ไอดีงานหลัก',
    'LBL_RESOURCE_CHART' => 'ตารางงาน',
    'LBL_RELATIONSHIP_TYPE' => 'ชนิดความสัมพันธ์',
    'LBL_ASSIGNED_TO' => 'ผู้จัดการโครงการ',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'เทมเพลตโครงการ',
    'LBL_STATUS' => 'สถานะ',
    'LBL_LIST_ASSIGNED_USER_ID' => 'ผู้จัดการโครงการ',
    'LBL_TOOLTIP_PROJECT_NAME' => 'แผนงาน',
    'LBL_TOOLTIP_TASK_NAME' => 'ชื่องาน',
    'LBL_TOOLTIP_TITLE' => 'งานในวันนี้',
    'LBL_TOOLTIP_TASK_DURATION' => 'ระยะเวลา',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'ทรัพยากรคือผู้ใช้',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'ทรัพยากรคือผู้ติดต่อ',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'เดือนที่แล้ว',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'เดือนถัดไป',
    'LBL_RESOURCE_CHART_WEEK' => 'สัปดาห์',
    'LBL_RESOURCE_CHART_DAY' => 'วัน',
    'LBL_RESOURCE_CHART_WARNING' => 'ไม่มีการจัดสรรทรัพยากรให้กับโครงการ',
    'LBL_PROJECT_DELETE_MSG' => 'คุณแน่ใจหรือไม่ว่าต้องการลบโครงการนี้และงานที่เกี่ยวข้อง',
    'LBL_LIST_MY_PROJECT' => 'โครงการของฉัน',
    'LBL_LIST_ASSIGNED_USER' => 'ผู้จัดการโครงการ',
    'LBL_UNASSIGNED' => 'ไม่ได้กำหนด',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'ทรัพยากร',

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
    'LBL_REMOVE' => 'ลบออก',
    'LBL_VIEW_DETAIL' => 'ดูรายละเอียด',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'พิจารณาวันทำการ',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'ค้นหาโครงการ',
    'LBL_USERS_SEARCH' => 'ค้นหาผู้ใช้',
    'LBL_CONTACTS_SEARCH' => 'เลือกผู้ติดต่อ',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'ค้นหา',

    'LBL_CHART_TYPE' => 'ประเภท',
    'LBL_CHART_WEEKLY' => 'รายสัปดาห์',
    'LBL_CHART_MONTHLY' => 'รายเดือน',
    'LBL_CHART_QUARTERLY' => 'รายไตรมาส',

    'LBL_RESOURCE_CHART_MONTH' => 'เดือน',
    'LBL_RESOURCE_CHART_QUARTER' => 'ไตรมาส',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'รายชื่อโครงการจากชื่อผู้ติดต่อ',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'เทมเพลตโครงการ: จากชื่อเทมเพลตโครงการ',
    'LBL_AOS_QUOTES_PROJECT' => 'ในเสนอราคา:แม่แบบ',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'เรียงจากน้อยไปมาก',
    'LBL_DESCENDING' => 'เรียงจากมากไปน้อย',
);
