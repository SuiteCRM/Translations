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
    'LBL_ADD_DOCUMENT' => 'เพิ่มเอกสาร',
    'LBL_ADD_FILE' => 'เพิ่มไฟล์',
    'LBL_ATTACHMENTS' => 'สิ่งที่แนบมา',
    'LBL_BODY' => 'เนื้อความ: ',
    'LBL_CLOSE' => 'ปิด:',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_EDIT_ALT_TEXT' => 'แก้ไขข้อความล้วน',
    'LBL_EMAIL_ATTACHMENT' => 'เอกสารแนบอีเมล',
    'LBL_HIDE_ALT_TEXT' => 'ซ่อนข้อความล้วน',
    'LBL_HTML_BODY' => 'เนื้อความ HTML',
    'LBL_INSERT_VARIABLE' => 'แทรกตัวแปร:',
    'LBL_INSERT_URL_REF' => 'แทรก URL การอ้างอิง',
    'LBL_INSERT_TRACKER_URL' => 'แทรก URL ติดตาม:',
    'LBL_INSERT' => 'เพิ่มในเนื้อหา',
    'LBL_LIST_DATE_MODIFIED' => 'แก้ไขล่าสุด ',
    'LBL_LIST_DESCRIPTION' => 'รายละเอียด',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อเทมเพลตอีเมล',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_MODULE_NAME' => ' แบบร่างจดหมาย',
    'LBL_MODULE_TITLE' => 'เทมเพลตอีเมล: หน้าแรก',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_NEW_FORM_TITLE' => 'สร้างอีเมลเทมเพลต',
    'LBL_PUBLISH' => 'เผยแพร่:',
    'LBL_RELATED_TO' => 'เกี่ยวข้องกับ:',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาเทมเพลตอีเมล',
    'LBL_SHOW_ALT_TEXT' => 'แสดงข้อความธรรมดา',
    'LBL_SUBJECT' => 'หัวเรื่อง:',
    'LBL_SUITE_DOCUMENT' => 'เอกสาร',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'เนื้อหาข้อความ',
    'LBL_USERS' => 'ผู้ใช้งาน',

    'LNK_EMAIL_TEMPLATE_LIST' => 'ดูอีเมลเทมเพลต',
    'LNK_IMPORT_NOTES' => 'นำเข้าบันทึกย่อ',
    'LNK_NEW_EMAIL_TEMPLATE' => 'สร้างอีเมลเทมเพลต',
    'LNK_NEW_EMAIL' => 'เก็บอีเมลถาวร',
    'LNK_NEW_SEND_EMAIL' => 'เขียนอีเมล',
    'LNK_SENT_EMAIL_LIST' => 'ส่งอีเมล',
    'LNK_VIEW_CALENDAR' => 'วันนี้',
    // for Inbox
    'LBL_NEW' => 'มาใหม่',
    'LNK_MY_DRAFTS' => 'ร่างจดหมายของฉัน',
    'LNK_MY_INBOX' => 'อีเมลของฉัน',
    'LBL_TEXT_ONLY' => 'ข้อความเท่านั้น',
    'LBL_SEND_AS_TEXT' => 'ส่งข้อความเท่านั้น',
    'LBL_ACCOUNT' => 'ข้อมูลลูกค้า',
    'LBL_FROM_NAME' => 'ชื่อผู้ส่ง',
    'LBL_PLAIN_TEXT' => 'ข้อความธรรมดา',
    'LBL_CREATED_BY' => 'สร้างโดย',
    'LBL_PUBLISHED' => 'เผยแพร่',
    'LNK_VIEW_MY_INBOX' => 'ดูอีเมลของฉัน',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ',
    'LBL_EDIT_LAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'เลือก' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'ล้างออก' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'ประเภท',
    'LBL_WIDTH' => 'ความกว้างเริ่มต้น',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);
