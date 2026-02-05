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
    'LBL_SALUTATION' => 'คำอวยพร',
    'LBL_NAME' => 'ชื่อ',
    'LBL_FIRST_NAME' => 'ชื่อ',
    'LBL_LAST_NAME' => 'นามสกุล',
    'LBL_TITLE' => 'ตำแหน่ง',
    'LBL_DEPARTMENT' => 'ฝ่าย',
    'LBL_DO_NOT_CALL' => 'อย่าโทร',
    'LBL_HOME_PHONE' => 'โทรศัพท์บ้าน',
    'LBL_MOBILE_PHONE' => 'โทรศัพท์มือถือ',
    'LBL_OFFICE_PHONE' => 'โทรศัพท์ที่ทำงาน',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่น ๆ',
    'LBL_FAX_PHONE' => 'โทรสาร:',
    'LBL_EMAIL_ADDRESS' => 'ที่อยู่อีเมล',
    'LBL_PRIMARY_ADDRESS' => 'ที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ถนนที่อยู่หลัก 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ถนนที่อยู่หลัก 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'เมืองหลัก',
    'LBL_PRIMARY_ADDRESS_STATE' => 'รัฐหลัก',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์หลัก',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ประเทศที่อยู่หลัก:',
    'LBL_ALT_ADDRESS' => 'ที่อยู่อื่น',
    'LBL_ALT_ADDRESS_STREET' => 'ที่อยู่อื่น',
    'LBL_ALT_ADDRESS_STREET_2' => 'ถนนที่อยู่สำรอง 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'ถนนที่อยู่สำรอง 3:',
    'LBL_ALT_ADDRESS_CITY' => 'เมืองอื่น',
    'LBL_ALT_ADDRESS_STATE' => 'รัฐอื่น',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์อื่น',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ประเทศอื่น',
    'LBL_PRIMARY_STREET' => 'ที่อยู่',
    'LBL_ALT_STREET' => 'ที่อยู่อื่น ๆ',
    'LBL_STREET' => 'ที่อยู่อื่น ๆ',
    'LBL_CITY' => 'อำเภอ/เขต',
    'LBL_STATE' => 'สถานะ',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์',
    'LBL_COUNTRY' => 'ประเทศ',
    'LBL_CONTACT_INFORMATION' => 'ข้อมูลการติดต่อ',
    'LBL_ADDRESS_INFORMATION' => 'ที่อยู่',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมล์อื่นๆ:',
    'LBL_ASSISTANT' => 'ผู้ช่วย',
    'LBL_ASSISTANT_PHONE' => 'โทรศัพท์ของผู้ช่วย',
    'LBL_WORK_PHONE' => 'โทรศัพท์ที่ทำงาน',
    'LNK_IMPORT_VCARD' => 'สร้างจาก vCard',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ',
    'LBL_EMAIL_NON_PRIMARY' => 'ไม่ใช่อีเมลหลัก',
    'LBL_PHOTO' => 'รูปภาพ',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_REMOVE' => 'ลบออก',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'พื้นฐานทางกฎหมาย',
    'LBL_DATE_REVIEWED' => 'วันที่ตรวจสอบพื้นฐานทางกฎหมาย',
    'LBL_LAWFUL_BASIS_SOURCE' => 'แหล่งที่มาโดยชอบด้วยกฎหมาย',
    'LBL_CONSENT' => 'ความยินยอม',
    //End Lawful Basis labels
);
