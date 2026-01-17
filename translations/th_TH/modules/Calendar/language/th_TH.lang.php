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

    'LBL_SHAREDWEEK' => 'สัปดาห์ที่แชร์',
    'LBL_SHAREDMONTH' => 'เดือนที่แชร์',

    'LBL_MODULE_NAME' => 'ปฏิทิน',
    'LBL_MODULE_TITLE' => 'ปฏิทิน',
    'LNK_NEW_CALL' => 'ตารางเวลาเรียก',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_CALL_LIST' => 'บันทึกการโทร',
    'LNK_MEETING_LIST' => 'ประชุม',
    'LNK_TASK_LIST' => 'งาน',
    'LNK_TASK' => 'ภารกิจ',
    'LNK_TASK_VIEW' => 'ดูงาน',
    'LNK_EVENT' => 'เหตุการณ์',
    'LNK_EVENT_VIEW' => 'ดูกิจกรรม',
    'LNK_VIEW_CALENDAR' => 'วันนี้',
    'LNK_IMPORT_CALLS' => 'นำเข้าการโทร',
    'LNK_IMPORT_MEETINGS' => 'นำเข้าประชุม',
    'LNK_IMPORT_TASKS' => 'นำเข้างาน',
    'LBL_MONTH' => 'เดือน',
    'LBL_AGENDADAY' => 'วัน',
    'LBL_YEAR' => 'ปี',

    'LBL_AGENDAWEEK' => 'สัปดาห์',
    'LBL_PREVIOUS_MONTH' => 'เดือนที่แล้ว',
    'LBL_PREVIOUS_DAY' => 'วันที่แล้ว',
    'LBL_PREVIOUS_YEAR' => 'ปีที่แล้ว',
    'LBL_PREVIOUS_WEEK' => 'สัปดาห์ที่แล้ว',
    'LBL_NEXT_MONTH' => 'เดือนถัดไป',
    'LBL_NEXT_DAY' => 'วันถัดไป',
    'LBL_NEXT_YEAR' => 'ปีถัดไป',
    'LBL_NEXT_WEEK' => 'สัปดาห์ถัดไป',
    'LBL_AM' => 'น. เช้า',
    'LBL_PM' => 'น. บ่าย',
    'LBL_SCHEDULED' => 'กำหนดการ',
    'LBL_BUSY' => 'ไม่ว่าง',
    'LBL_CONFLICT' => 'ขัดแย้ง',
    'LBL_USER_CALENDARS' => 'ปฏิทินของผู้ใช้',
    'LBL_SHARED' => 'ใช้ร่วมกัน',
    'LBL_PREVIOUS_SHARED' => 'ย้อนกลับ',
    'LBL_NEXT_SHARED' => 'ถัดไป',
    'LBL_SHARED_CAL_TITLE' => 'ปฏิทินที่ใช้ร่วมกัน',
    'LBL_USERS' => 'ผู้ใช้งาน',
    'LBL_REFRESH' => 'รีเฟรช',
    'LBL_EDIT_USERLIST' => 'รายชื่อผู้ใช้',
    'LBL_SELECT_USERS' => 'เลือกผู้ใช้สำหรับแสดงปฏิทิน',
    'LBL_FILTER_BY_TEAM' => 'กรองรายการผู้ใช้ โดยทีมงาน:',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_DATE' => 'วันและเวลาเริ่มต้น',
    'LBL_CREATE_MEETING' => 'จัดตารางการประชุม',
    'LBL_CREATE_CALL' => 'ข้อมูลการโทร',
    'LBL_HOURS_ABBREV' => 'ชั่วโมง',
    'LBL_MINS_ABBREV' => 'นาที',


    'LBL_YES' => 'ถูกต้อง',
    'LBL_NO' => 'ไม่ใช่',
    'LBL_SETTINGS' => 'ตั้งค่า',
    'LBL_CREATE_NEW_RECORD' => 'สร้างกิจกรรม',
    'LBL_LOADING' => 'โหลดข้อมูล...',
    'LBL_SAVING' => 'บันทึก...',
    'LBL_SENDING_INVITES' => 'บันทึก และส่งคำเชิญ...',
    'LBL_CONFIRM_REMOVE' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'คุณแน่ใจหรือว่าต้องการลบบันทึกที่เกิดขึ้นทั้งหมดหรือไม่',
    'LBL_EDIT_RECORD' => 'แก้ไขกิจกรรม',
    'LBL_ERROR_SAVING' => 'ข้อผิดพลาดขณะบันทึก',
    'LBL_ERROR_LOADING' => 'ข้อผิดพลาดขณะโหลดข้อมูล',
    'LBL_GOTO_DATE' => 'ไปที่วัน',
    'NOTICE_DURATION_TIME' => 'ระยะเวลาต้องมากกว่า 0',
    'LBL_STYLE_BASIC' => 'พื้นฐาน', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'ขั้นสูง', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'ไม่ตรงกับฟิลด์: หมอบหมายให้',
    'LBL_SUBJECT' => 'หัวเรื่อง',
    'LBL_DURATION' => 'ระยะเวลา',
    'LBL_STATUS' => 'สถานะ',
    'LBL_PRIORITY' => 'ลำดับความสำคัญ',

    'LBL_SETTINGS_TITLE' => 'ตั้งค่า',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'แสดงช่องเวลาในมุมมองวันและสัปดาห์:',
    'LBL_SETTINGS_TIME_STARTS' => 'เวลาเริ่มต้น:',
    'LBL_SETTINGS_TIME_ENDS' => 'เวลาสิ้นสุด:',
    'LBL_SETTINGS_CALLS_SHOW' => 'แสดงโทร:',
    'LBL_SETTINGS_TASKS_SHOW' => 'แสดงงาน:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'แสดงการประชุม การโทร และการงานที่เสร็จสิ้น:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'ปฏิทินที่ใช้ร่วมกันเฉพาะกิจ:',

    'LBL_SAVE_BUTTON' => 'บันทึก',
    'LBL_DELETE_BUTTON' => 'ลบ',
    'LBL_APPLY_BUTTON' => 'นำไปใช้',
    'LBL_SEND_INVITES' => 'บันทึกและส่งคำเชิญ',
    'LBL_CANCEL_BUTTON' => 'ยกเลิก',
    'LBL_CLOSE_BUTTON' => 'ปิด',

    'LBL_GENERAL_TAB' => 'ราย​ละเอียด',
    'LBL_PARTICIPANTS_TAB' => 'ผู้ร่วมประชุม',
    'LBL_REPEAT_TAB' => 'การเกิดขึ้นประจำ',

    'LBL_REPEAT_TYPE' => 'ทำซ้ำ',
    'LBL_REPEAT_INTERVAL' => 'ทุก',
    'LBL_REPEAT_END' => 'สุดท้าย',
    'LBL_REPEAT_END_AFTER' => 'หลังจาก',
    'LBL_REPEAT_OCCURRENCES' => 'เกิดขึ้นประจำ',
    'LBL_REPEAT_END_BY' => 'โดย',
    'LBL_REPEAT_DOW' => 'เปิด',
    'LBL_REPEAT_UNTIL' => 'ทำซ้ำจนกว่า',
    'LBL_REPEAT_COUNT' => 'จำนวนการเกิดซ้ำ',
    'LBL_REPEAT_LIMIT_ERROR' => 'การร้องขอของคุณกำลังจะสร้างรประชุมมากกว่ากา $limit',

    'LBL_EDIT_ALL_RECURRENCES' => 'แก้ไขการเกิดซ้ำทั้งหมด',
    'LBL_REMOVE_ALL_RECURRENCES' => 'ลบการเกิดซ้ำทั้งหมด',

    'LBL_DATE_END_ERROR' => 'วันที่สิ้นสุดอยู่ก่อนวันเริ่มต้น',
    'ERR_YEAR_BETWEEN' => 'ขออภัย ปฏิทินไม่สามารถจัดการปีที่คุณร้องขอได้ <br>ปีต้องอยู่ระหว่างปี 1970 ถึง 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: ไม่ได้กำหนดไว้สำหรับมุมมองนี้',
    'LBL_NO_ITEMS_MOBILE' => 'ปฏิทินของคุณว่างสำหรับสัปดาห์',
    'LBL_GENERAL_SETTINGS' => 'การตั้งค่าทั่วไป',
    'LBL_COLOR_SETTINGS' => 'การตั้งค่าสี',
    'LBL_MODULE' => 'โมดูล',
    'LBL_BODY' => 'เนื้อความ',
    'LBL_BORDER' => 'เส้นขอบ',
    'LBL_TEXT' => 'ข้อความ',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "อา",
            '1' => "จ",
            '2' => "อ",
            '3' => "พ",
            '4' => "พฤ",
            '5' => "ศ",
            '6' => "ส",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "วันอาทิตย์",
            '1' => "วันจันทร์",
            '2' => "วันอังคาร",
            '3' => "วันพุธ",
            '4' => "วันพฤหัสบดี",
            '5' => "วันศุกร์",
            '6' => "วันเสาร์",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "ม. ค.",
            '2' => "ก. พ.",
            '3' => "มี. ค.",
            '4' => "เม. ย.",
            '5' => "พฤษภาคม",
            '6' => "มิ. ย.",
            '7' => "ก. ค.",
            '8' => "ส. ค.",
            '9' => "ก. ย.",
            '10' => "ต. ค.",
            '11' => "พ. ย.",
            '12' => "ธ. ค.",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "มกราคม",
            '2' => "กุมภาพันธ์",
            '3' => "มีนาคม",
            '4' => "เมษายน",
            '5' => "พฤษภาคม",
            '6' => "มิถุนายน",
            '7' => "กรกฎาคม",
            '8' => "สิงหาคม",
            '9' => "กันยายน",
            '10' => "ตุลาคม",
            '11' => "พฤศจิกายน",
            '12' => "ธันวาคม",
        ),
);
