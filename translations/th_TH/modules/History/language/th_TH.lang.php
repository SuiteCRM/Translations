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
    'LBL_MODULE_NAME' => 'ประวัติ',
    'LBL_MODULE_TITLE' => 'ประวัติ: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาประวัติ',
    'LBL_LIST_FORM_TITLE' => 'ประวัติ',
    'LBL_LIST_SUBJECT' => 'หัวเรื่อง',
    'LBL_LIST_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_LIST_RELATED_TO' => 'เกี่ยวข้องเป็น',
    'LBL_LIST_DATE' => 'วันที่',
    'LBL_LIST_CLOSE' => 'ปิด',
    'LBL_SUBJECT' => 'หัวเรื่อง:',
    'LBL_STATUS' => 'สถานะ',
    'LBL_LOCATION' => 'สถานที่:',
    'LBL_DATE_TIME' => 'ันที่-เวลาที่เริ่มต้น:',
    'LBL_DATE' => 'วันที่เริ่มต้น:',
    'LBL_TIME' => 'เวลาเริ่มต้น:',
    'LBL_DURATION' => 'ระยะเวลา:',
    'LBL_HOURS_MINS' => '(ชั่วโมง/นาที)',
    'LBL_CONTACT_NAME' => 'ชื่อผู้ติดต่อ: ',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NEW_EMAIL' => 'เก็บอีเมลถาวร',
    'LNK_CALL_LIST' => 'บันทึกการโทร',
    'LNK_MEETING_LIST' => 'ประชุม',
    'LNK_TASK_LIST' => 'งาน',
    'LNK_NOTE_LIST' => 'บันทึกย่อ',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขบันทึกเพื่อลบบัญชี',
    'LBL_INVITEE' => 'ผู้ร่วมประชุม',
    'LBL_LIST_DIRECTION' => 'ทิศทาง',
    'LBL_DIRECTION' => 'ทิศทาง',
    'LNK_NEW_APPOINTMENT' => 'การนัดหมายใหม่',
    'LNK_VIEW_CALENDAR' => 'วันนี้',
    'LBL_OPEN_ACTIVITIES' => 'เปิดกิจกรรม',
    'LBL_HISTORY' => 'ประวัติ',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'สร้างงาน',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'สร้างงาน',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'จัดตารางการประชุม',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'จัดตารางการประชุม',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'ข้อมูลการโทร',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'เก็บอีเมลถาวร',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'เก็บอีเมลถาวร',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_DUE_DATE' => 'วันที่ที่สิ้นสุด',
    'LBL_LIST_LAST_MODIFIED' => 'แก้ไขล่าสุด ',
    'LNK_IMPORT_NOTES' => 'นำเข้าบันทึกย่อ',
    'LBL_ACCEPT_THIS' => 'ยืนยัน?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ประวัติ',

    'LBL_CATEGORY' => 'หมวดหมู่',
    'LBL_LIST_CATEGORY' => 'หมวดหมู่',
);
