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
    'LBL_DESCRIPTION' => 'เนื้อความ',
    'LBL_HEADER' => 'หัวข้อ',
    'LBL_FOOTER' => 'ส่วนท้าย',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_FORM_TITLE' => 'รายการแม่แบบของPDF',
    'LBL_MODULE_NAME' => 'ร่างต้นแบบไฟล์ PDF',
    'LBL_MODULE_TITLE' => 'แม่แบบ PDF: หน้าหลัก',
    'LBL_HOMEPAGE_TITLE' => 'แม่แบบ PDFของฉัน',
    'LNK_NEW_RECORD' => 'สร้างแม่แบบของ PDF',
    'LNK_LIST' => 'ดูแม่แบบของ PDF',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาแม่แบบของ PDF',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'แม่แบบของ PDFใหม่',
    'LBL_TYPE' => 'ประเภท',
    'LBL_ACTIVE' => 'เปิดใช้งาน',
    'LBL_BUTTON_INSERT' => 'เพิ่มในเนื้อหา',
    'LBL_WARNING_OVERWRITE' => 'คำเตือน สิ่งนี้จะเขียนทับงานปัจจุบันของคุณ',
    'LBL_INSERT_FIELDS' => 'แทรกเขตข้อมูล',

    'LBL_SAMPLE' => 'โหลดตัวอย่าง',
    'LBL_PAGE' => 'หน้า',
    'LBL_PREPARED_FOR' => 'เตรียมไว้สำหรับ',
    'LBL_PREPARED_BY' => 'เตรียมโดย',
    'LBL_QUOTE_SAMPLE' => 'Quote Sample',
    'LBL_INVOICE_SAMPLE' => 'Invoice Sample',
    'LBL_ACCOUNT_SAMPLE' => 'Account Sample',
    'LBL_CONTACT_SAMPLE' => 'Contact Sample',
    'LBL_LEAD_SAMPLE' => 'Lead Sample',
    'LBL_ANY_STREET' => 'ถนน',
    'LBL_ANY_TOWN' => 'เมือง',
    'LBL_ANY_WHERE' => 'ทุกที่',

    'LBL_QUOTE_GROUP_SAMPLE' => 'Quote Group Sample',
    'LBL_INVOICE_GROUP_SAMPLE' => 'Invoice Group Sample',
    'LBL_MARGIN_LEFT' => 'ระยะขอบซ้าย',
    'LBL_MARGIN_RIGHT' => 'ระยะขอบขวา',
    'LBL_MARGIN_TOP' => 'ขอบด้านบน',
    'LBL_MARGIN_BOTTOM' => 'ขอบล่าง',
    'LBL_MARGIN_HEADER' => 'ระยะขอบหัวข้อ',
    'LBL_MARGIN_FOOTER' => 'ระยะขอบท้ายกระดาษ',
    'LBL_EDITVIEW_PANEL1' => 'ระยะขอบ',
    'LBL_DETAILVIEW_PANEL1' => 'ระยะขอบ',
    'LBL_PAGE_SIZE' => 'ขนาดหน้า',
    'LBL_ORIENTATION' => 'กำหนดทิศทาง',
);
