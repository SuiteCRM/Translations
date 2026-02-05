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
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_REMOVE' => 'ลบออก',
    'LBL_LIST_FORM_TITLE' => 'รายการกิจกรรม',
    'LBL_MODULE_NAME' => 'เหตุการณ์',
    'LBL_MODULE_TITLE' => 'เหตุการณ์',
    'LBL_HOMEPAGE_TITLE' => 'กิจกรรมของฉัน',
    'LNK_NEW_RECORD' => 'สร้างกิจกรรม',
    'LNK_LIST' => 'ดูกิจกรรม',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหากิจกรรม',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'กิจกรรมใหม่',
    'LBL_LOCATION' => 'สถานที่',
    'LBL_START_DATE' => 'วันที่เริ่มต้น',
    'LBL_END_DATE' => 'วันที่ / เวลา สิ้นสุด',
    'LBL_BUDGET' => 'งบประมาณ',
    'LBL_DATE' => 'วันที่เริ่มต้น',
    'LBL_DATE_END' => 'วันที่สิ้นสุด',
    'LBL_DURATION' => 'ระยะเวลา',
    'LBL_INVITE_TEMPLATES' => 'เทมเพลตคำเชิญทางอีเมล',
    'LBL_INVITE_PDF' => 'ส่งคำเชิญ',
    'LBL_EDITVIEW_PANEL1' => 'รายละเอียดกิจกรรม',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ผู้ได้รับมอบหมาย',
    'LBL_ACCEPT_REDIRECT' => 'ยอมรับการเปลี่ยนเส้นทาง URL',
    'LBL_DECLINE_REDIRECT' => 'ไม่ยอมรับการเปลี่ยนเส้นทาง URL',
    'LBL_SELECT_DELEGATES' => 'เลือกผู้รับมอบสิทธิ์',
    'LBL_SELECT_DELEGATES_TITLE' => 'เลือกผู้รับมอบสิทธิ์:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'รายชื่อเป้าหมาย',
    'LBL_SELECT_DELEGATES_TARGETS' => 'เป้าหมาย',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'ผู้ติดต่อ',
    'LBL_SELECT_DELEGATES_LEADS' => 'ช่องทางการขาย',
    'LBL_MANAGE_DELEGATES' => 'จัดการผู้รับมอบสิทธิ์',
    'LBL_MANAGE_DELEGATES_TITLE' => 'จัดการผู้รับมอบสิทธิ์:-',
    'LBL_MANAGE_ACCEPTANCES' => 'จัดการการยอมรับ',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'จัดการการยอมรับ:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'ยอมรับ',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'ปฏิเสธ',
    'LBL_MANAGE_POPUP_ERROR' => 'ไม่ได้เลือกผู้รับมอบสิทธิ์',
    'LBL_MANAGE_DELEGATES_INVITED' => 'ได้รับเชิญแล้ว',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'ไม่ได้รับเชิญ',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'เข้าร่วมแล้ว',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'ไม่ได้เข้าร่วม',
    'LBL_SUCCESS_MSG' => 'คำเชิญทั้งหมดถูกส่งเรียบร้อยแล้ว',
    'LBL_ERROR_MSG_1' => 'ผู้ติดต่อที่เชื่อมโยงทั้งหมดได้รับเชิญแล้ว',
    'LBL_ERROR_MSG_2' => 'การส่งอีเมลเชิญจะล้มเหลว! โปรดตรวจสอบการตั้งค่าอีเมลของคุณ',
    'LBL_ERROR_MSG_3' => 'อีเมลมากกว่า 10 ฉบับไม่สามารถส่งได้ โปรดตรวจสอบว่ารายชื่อติดต่อทั้งหมดที่คุณเชิญมีที่อยู่อีเมลที่ถูกต้อง (ดู suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' อีเมลไม่สามารถส่งได้ โปรดตรวจสอบว่ารายชื่อติดต่อทั้งหมดที่คุณเชิญมีที่อยู่อีเมลที่ถูกต้อง (ดู suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'เทมเพลตอีเมลไม่ถูกต้อง',
    'LBL_EMAIL_INVITE' => 'อีเมลเชิญ',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'ผู้ติดต่อ',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'สถานที่',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'ช่องทางการขาย',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'เป้าหมาย',

    'LBL_HOURS_ABBREV' => 'ชั่วโมง',
    'LBL_MINSS_ABBREV' => 'นาที',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'ผู้ได้รับมอบหมาย',

    // Attendance report
    'LBL_CONTACT_NAME' => 'ชื่อ',
    'LBL_ACCOUNT_NAME' => 'บริษัท',
    'LBL_SIGNATURE' => 'ลายเซ็น',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'ได้รับเชิญแล้ว',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'สถานะ',

    'LBL_ACTIVITY_STATUS' => 'สถานะกิจกรรม',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'สถานที่จัดกิจกรรมจากชื่อกิจกรรม',
    // Email links
    'LBL_ACCEPT_LINK' => 'ตกลง',
    'LBL_DECLINE_LINK' => 'ปฏิเสธ',
    
);
