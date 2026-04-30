<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'ตารางเวลาเรียก',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'นัดประชุม',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'ดูงาน',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'ดูกิจกรรม',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'ปี',

    'LBL_AGENDAWEEK' => 'สัปดาห์',
    'LBL_PREVIOUS_MONTH' => 'เดือนที่แล้ว',
    'LBL_PREVIOUS_DAY' => 'วันที่แล้ว',
    'LBL_PREVIOUS_YEAR' => 'ปีที่แล้ว',
    'LBL_PREVIOUS_WEEK' => 'สัปดาห์ที่แล้ว',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'วันถัดไป',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'สัปดาห์ถัดไป',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'กำหนดการ',
    'LBL_BUSY' => 'ไม่ว่าง',
    'LBL_CONFLICT' => 'ขัดแย้ง',
    'LBL_USER_CALENDARS' => 'ปฏิทินของผู้ใช้',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'ปฏิทินที่ใช้ร่วมกัน',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'รีเฟรช',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'เลือกผู้ใช้สำหรับแสดงปฏิทิน',
    'LBL_FILTER_BY_TEAM' => 'กรองรายการผู้ใช้ โดยทีมงาน:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'วันและเวลาเริ่มต้น',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'ชั่วโมง',
    'LBL_MINS_ABBREV' => 'นาที',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'สร้างกิจกรรม',
    'LBL_LOADING' => 'กำลังโหลด...',
    'LBL_SAVING' => 'กำลังบันทึก...',
    'LBL_SENDING_INVITES' => 'บันทึก และส่งคำเชิญ...',
    'LBL_CONFIRM_REMOVE' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'คุณแน่ใจหรือว่าต้องการลบบันทึกที่เกิดขึ้นทั้งหมดหรือไม่',
    'LBL_EDIT_RECORD' => 'แก้ไขกิจกรรม',
    'LBL_ERROR_SAVING' => 'ข้อผิดพลาดขณะบันทึก',
    'LBL_ERROR_LOADING' => 'ข้อผิดพลาดขณะโหลดข้อมูล',
    'LBL_GOTO_DATE' => 'ไปที่วัน',
    'NOTICE_DURATION_TIME' => 'ระยะเวลาต้องมากกว่า 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'ขั้นสูง', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'ไม่ตรงกับฟิลด์: หมอบหมายให้',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'แสดงช่องเวลาในมุมมองวันและสัปดาห์:',
    'LBL_SETTINGS_TIME_STARTS' => 'เวลาเริ่มต้น:',
    'LBL_SETTINGS_TIME_ENDS' => 'เวลาสิ้นสุด:',
    'LBL_SETTINGS_CALLS_SHOW' => 'แสดงโทร:',
    'LBL_SETTINGS_TASKS_SHOW' => 'แสดงงาน:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'แสดงการประชุม การโทร และการงานที่เสร็จสิ้น:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'ปฏิทินที่ใช้ร่วมกันเฉพาะกิจ:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'นำไปใช้',
    'LBL_SEND_INVITES' => 'บันทึกและส่งคำเชิญ',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'การเกิดขึ้นประจำ',

    'LBL_REPEAT_TYPE' => 'ทำซ้ำ',
    'LBL_REPEAT_INTERVAL' => 'ทุก',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
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
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'เส้นขอบ',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "March",
            '4' => "April",
            '5' => "May",
            '6' => "June",
            '7' => "July",
            '8' => "August",
            '9' => "September",
            '10' => "October",
            '11' => "November",
            '12' => "December",
        ),
);
