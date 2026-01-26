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
    'ERR_DELETE_RECORD' => 'คุณต้องระบุหมายเลขเรกคอร์ดเพื่อลบบัญชี',
    'LBL_TOOL_TIP_BOX_TITLE' => 'คำแนะนำความรู้',
    'LBL_TOOL_TIP_TITLE' => 'ชื่อเรื่อง: ',
    'LBL_TOOL_TIP_BODY' => 'เนื้อความ: ',
    'LBL_TOOL_TIP_INFO' => 'ข้อมูลเพิ่มเติม: ',
    'LBL_TOOL_TIP_USE' => 'ใช้เป็น: ',
    'LBL_SUGGESTION_BOX' => 'คำแนะนำ',
    'LBL_NO_SUGGESTIONS' => 'ไม่มีข้อเสนอแนะ',
    'LBL_RESOLUTION_BUTTON' => 'การแก้ไข',
    'LBL_SUGGESTION_BOX_STATUS' => 'สถานะ',
    'LBL_SUGGESTION_BOX_TITLE' => 'ตำแหน่ง',
    'LBL_SUGGESTION_BOX_REL' => 'ความเกี่ยวข้อง',

    'LBL_ACCOUNT_ID' => 'รหัสบัญชี',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ข้อผิดพลาด',
    'LBL_CASE_NUMBER' => 'หมายเลขกรณีและปัญหา:',
    'LBL_CASE' => 'การติดตาม:',
    'LBL_CONTACT_NAME' => 'ชื่อผู้ติดต่อ:',
    'LBL_CONTACT_ROLE' => 'หน้าที่:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'การติดตาม',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    'LBL_INVITEE' => 'ผู้ติดต่อ',
    'LBL_MEMBER_OF' => 'ข้อมูลลูกค้า',
    'LBL_MODULE_NAME' => 'การติดตาม',
    'LBL_MODULE_TITLE' => 'กรณี: หน้าหลัก',
    'LBL_NEW_FORM_TITLE' => 'กรณีใหม่',
    'LBL_NUMBER' => 'หมายเลข:',
    'LBL_PRIORITY' => 'ลำดับความสำคัญ:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'เอกสาร',
    'LBL_RESOLUTION' => 'การแก้ไข:',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหากรณี',
    'LBL_STATUS' => 'สถานะ',
    'LBL_SUBJECT' => 'หัวเรื่อง:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_ASSIGNED' => 'ผู้รับผิดชอบ',
    'LBL_LIST_CLOSE' => 'ปิด',
    'LBL_LIST_FORM_TITLE' => 'รายการกรณี',
    'LBL_LIST_LAST_MODIFIED' => 'แก้ไขล่าสุด ',
    'LBL_LIST_MY_CASES' => 'กรณีเปิดของฉัน',
    'LBL_LIST_NUMBER' => 'เลขที่.',
    'LBL_LIST_PRIORITY' => 'ลำดับความสำคัญ',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_SUBJECT' => 'หัวเรื่อง',

    'LNK_CASE_LIST' => 'ดูกรณี',
    'LNK_NEW_CASE' => 'สร้างเคส',
    'LBL_LIST_DATE_CREATED' => 'วันที่สร้าง',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_TYPE' => 'ประเภท',
    'LBL_WORK_LOG' => 'บันทึกงาน',
    'LNK_IMPORT_CASES' => 'กรณีนำเข้า',

    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขผู้ใช้',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_CASE_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'ปรับปรุง ข้อความ', //Field for Case updates with text only
    'LBL_INTERNAL' => 'อัพเดท ภายใน',
    'LBL_AOP_CASE_UPDATES' => 'ปรับปรุงกรณี',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'อัพเดทกรณี',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'ยุบทั้งหมด',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'ขยายทั้งหมด',
    'LBL_AOP_CASE_ATTACHMENTS' => 'สิ่งที่แนบมา:',

    'LBL_AOP_CASE_EVENTS' => 'กรณีเหตุการณ์',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'สิ่งที่แนบมาในกรณี:',
    'LBL_ADD_CASE_FILE' => 'เพิ่มไฟล์',
    'LBL_REMOVE_CASE_FILE' => 'นำไฟล์ออก',
    'LBL_SELECT_CASE_DOCUMENT' => 'เลือกเอกสาร',
    'LBL_CLEAR_CASE_DOCUMENT' => 'ล้างเอกสาร',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'เอกสารภายใน CRM',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'ไฟล์ภายนอก',
    'LBL_CONTACT_CREATED_BY_NAME' => 'สร้างโดยผู้ติดต่อ',
    'LBL_CONTACT_CREATED_BY' => 'สร้างโดย',
    'LBL_CASE_UPDATE_FORM' => 'อัพเดท - ไฟล์แนบจาก', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'ไม่ทราบชื่อผู้ติดต่อ',
);
