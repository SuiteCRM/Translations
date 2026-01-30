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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'บันทึกการโทร',
    'LBL_MODULE_TITLE' => 'บันทึกการโทร: หน้าหลัก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาการโทร',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อการโทร',
    'LBL_NEW_FORM_TITLE' => 'สร้างการนัดหมาย',
    'LBL_LIST_CLOSE' => 'ปิด',
    'LBL_LIST_SUBJECT' => 'หัวเรื่อง',
    'LBL_LIST_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_LIST_RELATED_TO' => 'เกี่ยวข้องเป็น',
    'LBL_LIST_RELATED_TO_ID' => 'ที่เกี่ยวข้องกับ ID',
    'LBL_LIST_DATE' => 'วันที่เริ่มต้น',
    'LBL_LIST_DIRECTION' => 'ทิศทาง',
    'LBL_SUBJECT' => 'หัวเรื่อง:',
    'LBL_REMINDER' => 'ช่วยเตือน:',
    'LBL_CONTACT_NAME' => 'ผู้ติดต่อ:',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_STATUS' => 'สถานะ',
    'LBL_DIRECTION' => 'ทิศทาง:',
    'LBL_DATE' => 'วันที่เริ่มต้น:',
    'LBL_DURATION' => 'ระยะเวลา:',
    'LBL_DURATION_HOURS' => 'ระยะเวลาชั่วโมง:',
    'LBL_DURATION_MINUTES' => 'ระยะเวลานาที:',
    'LBL_HOURS_MINUTES' => '(ชั่วโมง/นาที)',
    'LBL_DATE_TIME' => 'ันที่-เวลาที่เริ่มต้น:',
    'LBL_TIME' => 'เวลาเริ่มต้น:',
    'LBL_HOURS_ABBREV' => 'ชั่วโมง',
    'LBL_MINSS_ABBREV' => 'นาที',
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_CALL_LIST' => 'ดูการโทร',
    'LNK_IMPORT_CALLS' => 'นำเข้าการโทร',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขบันทึกเพื่อลบบัญชี',
    'LBL_INVITEE' => 'ผู้ร่วมประชุม',
    'LBL_RELATED_TO' => 'เกี่ยวข้องกับ:',
    'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
    'LBL_SCHEDULING_FORM_TITLE' => 'การจัดกำหนดการ',
    'LBL_ADD_INVITEE' => 'เพิ่มรายชื่อ ผู้ร่วมประชุม',
    'LBL_NAME' => 'ชื่อ',
    'LBL_FIRST_NAME' => 'ชื่อ',
    'LBL_LAST_NAME' => 'นามสกุล',
    'LBL_EMAIL' => 'อีเมล',
    'LBL_PHONE' => 'โทรศัพท์',
    'LBL_REMINDER_POPUP' => 'ป็อปอัพ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'อีเมล์ผู้รับเชิญทั้งหมด',
    'LBL_EMAIL_REMINDER' => 'อีเมล์แจ้งเตือน',
    'LBL_EMAIL_REMINDER_TIME' => 'อีเมล์แจ้งเตือนเวลา',
    'LBL_SEND_BUTTON_TITLE' => 'บันทึกและส่งคำเชิญ',
    'LBL_SEND_BUTTON_LABEL' => 'บันทึกและส่งคำเชิญ',
    'LBL_DATE_END' => 'วันที่สิ้นสุด',
    'LBL_REMINDER_TIME' => 'เวลาแจ้งเตือน',
    'LBL_EMAIL_REMINDER_SENT' => 'ส่งอีเมลแจ้งเตือนแล้ว',
    'LBL_SEARCH_BUTTON' => 'ค้นหา',
    'LBL_ADD_BUTTON' => 'เพิ่ม',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'บันทึกการโทร',
    'LNK_SELECT_ACCOUNT' => 'เลือกบัญชีลูกค้า',
    'LNK_NEW_ACCOUNT' => 'บัญชีลูกค้าใหม่',
    'LNK_NEW_OPPORTUNITY' => 'โอกาสใหม่',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_USERS_SUBPANEL_TITLE' => 'ผู้ใช้งาน',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'สมาชิกของ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'บันทึกย่อ',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_LIST_MY_CALLS' => 'การโทรของฉัน',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ',
    'NOTICE_DURATION_TIME' => 'ระยะเวลาต้องมากกว่า 0',
    'LBL_CALL_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'ลบออก',
    'LBL_ACCEPT_STATUS' => 'สถานะ',
    'LBL_ACCEPT_LINK' => 'ยอมรับลิงค์',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'สร้างผู้ได้รับเชิญ',
    'LBL_CREATE_CONTACT' => 'เป็นผู้ติดต่อ',
    'LBL_CREATE_LEAD' => 'นำไปสู่การ',
    'LBL_CREATE_AND_ADD' => 'สร้าง และเพิ่ม',
    'LBL_CANCEL_CREATE_INVITEE' => 'ยกเลิก',
    'LBL_EMPTY_SEARCH_RESULT' => 'ขออภัย ไม่พบผลลัพธ์ โปรดสร้างการเชิญด้านล่าง',
    'LBL_NO_ACCESS' => 'คุณไม่สามารถเข้าถึงเพื่อสร้าง $module',

    'LBL_REPEAT_TYPE' => 'ทำซ้ำ ประเภท',
    'LBL_REPEAT_INTERVAL' => 'ทำซ้ำ ช่วงเวลา',
    'LBL_REPEAT_DOW' => 'ทำซ้ำ Dow',
    'LBL_REPEAT_UNTIL' => 'ทำซ้ำจนกว่า',
    'LBL_REPEAT_COUNT' => 'ทำซ้ำ นับ',
    'LBL_REPEAT_PARENT_ID' => 'ทำซ้ำ ไอดีผู้ปกครอง',
    'LBL_RECURRING_SOURCE' => 'ที่เกิดขึ้นประจำ',

    'LBL_SYNCED_RECURRING_MSG' => 'สายนี้มาจากระบบอื่นและได้รับการซิงค์กับ SuiteCRM หากต้องการเปลี่ยนแปลงให้ไปที่สายเดิมภายในระบบอื่น การเปลี่ยนแปลงที่เกิดขึ้นในระบบอื่น ๆ สามารถซิงค์กับระเบียนนี้ได้',

    // for reminders
    'LBL_REMINDERS' => 'เตือนความจำ',
    'LBL_REMINDERS_ACTIONS' => 'การดำเนินการ:',
    'LBL_REMINDERS_POPUP' => 'ป็อปอัพ',
    'LBL_REMINDERS_EMAIL' => 'ผู้เชิญอีเมล',
    'LBL_REMINDERS_WHEN' => 'เมื่อ:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'นำการแจ้งเตือนออก',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'เพิ่มผู้รับเชิญทั้งหมด',
    'LBL_REMINDERS_ADD_REMINDER' => 'เพิ่มการแจ้งเตือน',

    'LBL_RESCHEDULE' => 'กำหนดการณ์ใหม่',
    'LBL_RESCHEDULE_COUNT' => 'จำนวนครั้งที่โทร',
    'LBL_RESCHEDULE_DATE' => 'วันที่',
    'LBL_RESCHEDULE_REASON' => 'เหตุผล',
    'LBL_RESCHEDULE_ERROR1' => 'เลือกวันที่ให้ถูกต้อง',
    'LBL_RESCHEDULE_ERROR2' => 'เลือกเหตุผล',
    'LBL_RESCHEDULE_PANEL' => 'กำหนดการณ์ใหม่',
    'LBL_RESCHEDULE_HISTORY' => 'ประวัติการโทร',
    'LBL_CANCEL' => 'ยกเลิก',
    'LBL_SAVE' => 'บันทึก',

    'LBL_CALLS_RESCHEDULE' => 'กำหนดการโทรออก',
    'LBL_LIST_STATUS'=>'สถานะ',
    'LBL_LIST_DATE_MODIFIED'=>'วันที่แก้ไข',
    'LBL_LIST_DUE_DATE'=>'วันที่ที่สิ้นสุด',
    'LBL_RESCHEDULED_BY'=>'โดย',
);
