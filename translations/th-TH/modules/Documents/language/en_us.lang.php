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
    //module
    'LBL_MODULE_NAME' => 'เอกสาร',
    'LBL_MODULE_TITLE' => 'เอกสาร: หน้าแรก',
    'LNK_NEW_DOCUMENT' => 'สร้างเอกสาร',
    'LNK_DOCUMENT_LIST' => 'ดูเอกสาร',
    'LBL_DOC_REV_HEADER' => 'ปรับปรุงเอกสาร',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาเอกสาร',
    //vardef labels
    'LBL_NAME' => 'ชื่อเอกสาร',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_CATEGORY' => 'หมวดหมู่',
    'LBL_SUBCATEGORY' => 'ประเภทย่อย',
    'LBL_STATUS' => 'สถานะ',
    'LBL_CREATED_BY' => 'สร้างโดย',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_DELETED' => 'ลบ',
    'LBL_MODIFIED' => 'แก้ไขโดยไอดี',
    'LBL_MODIFIED_USER' => 'แก้ไขโดย',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_REVISIONS' => 'การแก้ไข',
    'LBL_RELATED_DOCUMENT_ID' => 'ไอดีเอกสารที่เกี่ยวข้อง',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'เอกสาร Revision ID ที่เกี่ยวข้อง',
    'LBL_IS_TEMPLATE' => 'เป็นแม่แบบ',
    'LBL_TEMPLATE_TYPE' => 'ชนิดเอกสาร',
    'LBL_ASSIGNED_TO_NAME' => 'กำหนดให้:',
    'LBL_REVISION_NAME' => 'จำนวนการแก้ไข',
    'LBL_MIME' => 'ชนิด mime',
    'LBL_REVISION' => 'การปรับปรุง',
    'LBL_DOCUMENT' => 'เอกสารที่เกี่ยวข้อง',
    'LBL_LATEST_REVISION' => 'แก้ไขล่าสุด',
    'LBL_CHANGE_LOG' => 'บันทึกการเปลี่ยนแปลง',
    'LBL_ACTIVE_DATE' => 'วันเผยแพร่',
    'LBL_EXPIRATION_DATE' => 'วันหมดอายุ',
    'LBL_FILE_EXTENSION' => 'นามสกุลไฟล์',
    'LBL_LAST_REV_MIME_TYPE' => 'การแก้ไขครั้งล่าสุดประเภท MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'ไม่ระบุ',
    'LBL_HOMEPAGE_TITLE' => 'เอกสารของฉัน',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'เอกสารใหม่',
    //document edit and detail view
    'LBL_DOC_NAME' => 'ชื่อเอกสาร:',
    'LBL_FILENAME' => 'ชื่อไฟล์:',
    'LBL_LIST_FILENAME' => 'ไฟล์:',
    'LBL_DOC_VERSION' => 'การปรับปรุง:',
    'LBL_FILE_UPLOAD' => 'ไฟล์:',

    'LBL_CATEGORY_VALUE' => 'หมวดหมู่:',
    'LBL_LIST_CATEGORY' => 'หมวดหมู่',
    'LBL_SUBCATEGORY_VALUE' => 'หมวดหมู่ย่อย:',
    'LBL_DOC_STATUS' => 'สถานะ',
    'LBL_LAST_REV_CREATOR' => 'การแก้ไขที่สร้างขึ้นโดย:',
    'LBL_LASTEST_REVISION_NAME' => 'ชื่อการแก้ไขล่าสุด:',
    'LBL_SELECTED_REVISION_NAME' => 'ชื่อการแก้ไขที่เลือก:',
    'LBL_CONTRACT_STATUS' => 'สถานะสัญญา:',
    'LBL_CONTRACT_NAME' => 'ชื่อสัญญา:',
    'LBL_DET_RELATED_DOCUMENT' => 'เอกสารที่เกี่ยวข้อง:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "เอกสารการแก้ไขที่เกี่ยวข้อง:",
    'LBL_DET_IS_TEMPLATE' => 'เทมเพลต?',
    'LBL_DET_TEMPLATE_TYPE' => 'ชนิดเอกสาร:',
    'LBL_DOC_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DOC_ACTIVE_DATE' => 'วันเผยแพร่:',
    'LBL_DOC_EXP_DATE' => 'วันหมดอายุ:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'รายการเอกสาร',
    'LBL_LIST_DOCUMENT' => 'เอกสาร',
    'LBL_LIST_SUBCATEGORY' => 'ประเภทย่อย',
    'LBL_LIST_REVISION' => 'การปรับปรุง',
    'LBL_LIST_LAST_REV_CREATOR' => 'เผยแพร่โดย',
    'LBL_LIST_LAST_REV_DATE' => 'วันปรับปรุง',
    'LBL_LIST_VIEW_DOCUMENT' => 'ดู',
    'LBL_LIST_ACTIVE_DATE' => 'วันเผยแพร่',
    'LBL_LIST_EXP_DATE' => 'วันหมดอายุ',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LINKED_ID' => 'ไอดีที่เชื่อมโยง',
    'LBL_SELECTED_REVISION_ID' => 'Revision ไอดีที่เลือก',
    'LBL_LATEST_REVISION_ID' => 'Revision ไอดีล่าสุด',
    'LBL_SELECTED_REVISION_FILENAME' => 'ชื่อไฟล์ revision ที่เลือก',
    'LBL_FILE_URL' => 'Url ของไฟล์',

    //document search form.
    'LBL_SF_CATEGORY' => 'หมวดหมู่:',
    'LBL_SF_SUBCATEGORY' => 'หมวดหมู่ย่อย:',

    'DEF_CREATE_LOG' => 'เอกสารที่สร้างขึ้น',

    //error messages
    'ERR_DOC_NAME' => 'ชื่อเอกสาร',
    'ERR_DOC_ACTIVE_DATE' => 'วันเผยแพร่',
    'ERR_FILENAME' => 'ชื่อไฟล์',
    'ERR_DOC_VERSION' => 'เวอร์ชันเอกสาร',
    'ERR_DELETE_CONFIRM' => 'คุณต้องการลบการแก้ไขเอกสารนี้หรือไม่?',
    'ERR_DELETE_LATEST_VERSION' => 'คุณไม่ได้รับอนุญาตให้ลบการแก้ไขล่าสุดของเอกสาร',
    'LNK_NEW_MAIL_MERGE' => 'จดหมายเวียน',
    'ERR_MISSING_FILE' => 'เอกสารนี้ไม่มีไฟล์ซึ่งอาจเกิดจากข้อผิดพลาดระหว่างการอัพโหลด โปรดลองอัพโหลดไฟล์อีกครั้งหรือติดต่อผู้ดูแลระบบของคุณ',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'ชื่อ',
    'LBL_LIST_IS_TEMPLATE' => 'เทมเพลต?',
    'LBL_LIST_TEMPLATE_TYPE' => 'ชนิดเอกสาร',
    'LBL_LAST_REV_CREATE_DATE' => 'การแก้ไขล่าสุดสร้างวันที่',
    'LBL_CONTRACTS' => 'สัญญา',
    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_DOCUMENT_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ไอดีแหล่งที่มาของเอกสาร',
    'LBL_DOC_TYPE' => 'แหล่งที่มา',
    'LBL_DOC_TYPE_POPUP' => 'เลือกแหล่งที่จะอัพโหลดเอกสารนี้<br> ซึ่งจะพร้อมใช้งาน',
    'LBL_DOC_URL' => 'URL ของแหล่งที่มาของเอกสาร',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'ชื่อไฟล์',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'ไฟล์ที่แก้ไขล่าสุด 20 รายการแรกจะแสดงเรียงลำดับจากมากไปน้อยในรายการด้านล่าง ใช้ ค้นหา เพื่อค้นหาไฟล์อื่น',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'ชื่อไฟล์',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'ผู้ใช้พยายามเข้าถึง API ภายนอกที่ไม่ถูกต้อง ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'การตรวจสอบการเข้าสู่ระบบล้มเหลวสำหรับ API ภายนอก ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'โอกาสการขาย',
    'LBL_CASES_SUBPANEL_TITLE' => 'การติดตาม',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ข้อผิดพลาด',

    'LBL_AOS_CONTRACTS' => 'สัญญา',
);
