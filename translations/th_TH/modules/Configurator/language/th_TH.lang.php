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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'ขั้นสูง',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 โค้ดสกุลเงิน',
    'DEFAULT_CURRENCY_NAME' => 'ชื่อสกุลเงิน',
    'DEFAULT_CURRENCY_SYMBOL' => 'สัญลักษณ์สกุลเงิน',
    'DEFAULT_DATE_FORMAT' => 'รูปแบบวันที่เริ่มต้น',
    'DEFAULT_DECIMAL_SEP' => 'สัญลักษณ์ทศนิยม',
    'DEFAULT_LANGUAGE' => 'ภาษาเริ่มต้น',
    'DEFAULT_SYSTEM_SETTINGS' => 'ส่วนติดต่อผู้ใช้',
    'DEFAULT_THEME' => 'ธีมเริ่มต้น',
    'DEFAULT_TIME_FORMAT' => 'รูปแบบเวลาเริ่มต้น',

    'DISPLAY_RESPONSE_TIME' => 'แสดงเวลาการตอบสนองของเซิร์ฟเวอร์',

    'IMAGES' => 'โลโก้',
    'LBL_ALLOW_USER_TABS' => 'อนุญาตให้ผู้ใช้สามารถซ่อนแท็บ',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'การตั้งค่าระบบ',
    'LBL_LOGVIEW' => 'ดูไฟล์บันทึก',
    'LBL_MAIL_SMTPAUTH_REQ' => 'ใช้ SMTP แบบใส่รหัสผ่านหรือไม่',
    'LBL_MAIL_SMTPPASS' => 'รหัสผ่าน SMTP:',
    'LBL_MAIL_SMTPPORT' => 'พอร์ต SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'เซิร์ฟเวอร์ SMTP:',
    'LBL_MAIL_SMTPUSER' => 'ชื่อผู้ใช้ SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'ข้อมูลจำเพาะของเซิร์ฟเวอร์ SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'เลือกผู้ให้บริการอีเมล์:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'รหัสผ่าน yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ไอดี Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'รหัสผ่าน Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'ที่อยู่อีเมล Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'เปลี่ยนรหัสผ่าน:',
    'LBL_EXCHANGE_SMTPUSER' => 'เปลี่ยนชื่อผู้ใช้:',
    'LBL_EXCHANGE_SMTPPORT' => 'เปลี่ยนเซิร์ฟเวอร์พอร์ต:',
    'LBL_EXCHANGE_SMTPSERVER' => 'เปลี่ยนเซิร์ฟเวอร์:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'อนุญาตให้ผู้ใช้บัญชีนี้สำหรับอีเมลขาออก:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'เมื่อเลือกตัวเลือกนี้ผู้ใช้ทุกคนจะสามารถส่งอีเมลโดยใช้บัญชีอีเมลขาออกเดียวกันที่ใช้เพื่อส่งการแจ้งเตือนและการแจ้งเตือนของระบบ หากไม่ได้เลือกตัวเลือกนี้ผู้ใช้ยังคงสามารถใช้เซิร์ฟเวอร์อีเมลขาออกได้หลังจากแจ้งข้อมูลบัญชีของตนเองแล้ว',
    'LBL_MAILMERGE' => 'จดหมายเวียน',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'ช่วงเวลารีเฟรช Dashlet อัตโนมัติอย่างต่ำ',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'นี่คือค่าต่ำสุดที่คุณสามารถเลือกให้รีเฟรชอัตโนมัติได้ การตั้งค่าเป็น \'ไม่เลย\' เป็นการปิดใช้งานรีเฟรชชิ่ง Dashlets โดยอัตโนมัติทั้งหมด',
    'LBL_MODULE_FAVICON' => 'แสดงไอคอนโมดูลเป็น favicon',
    'LBL_MODULE_FAVICON_HELP' => 'ถ้าคุณอยู่ในโมดูลที่มีไอคอน ให้ใช้ไอคอนของโมดูลเป็นไอคอน favicon แทนธีมของ favicon ในแท็บเบราว์เซอร์',
    'LBL_MODULE_NAME' => 'การตั้งค่าระบบ',
    'LBL_MODULE_ID' => 'การตั้งค่า',
    'LBL_MODULE_TITLE' => 'ส่วนติดต่อผู้ใช้',
    'LBL_NOTIFY_FROMADDRESS' => '"จาก"ที่อยู่:',
    'LBL_NOTIFY_SUBJECT' => 'หัวข้ออีเมล:',

    'LBL_PROXY_AUTH' => 'การตรวจสอบ?',
    'LBL_PROXY_HOST' => 'พร็อกซีโฮสต์',
    'LBL_PROXY_ON_DESC' => 'กำหนดค่าที่อยู่เซิร์ฟเวอร์พร็อกซีและการตั้งค่าการตรวจสอบสิทธิ์',
    'LBL_PROXY_ON' => 'ใช้พร็อกซีเซิร์ฟเวอร์หรือไม่',
    'LBL_PROXY_PASSWORD' => 'รหัสผ่าน',
    'LBL_PROXY_PORT' => 'พอร์ต',
    'LBL_PROXY_TITLE' => 'การตั้งค่าพร็อกซี',
    'LBL_PROXY_USERNAME' => 'ชื่อผู้ใช้งาน',
    'LBL_RESTORE_BUTTON_LABEL' => 'คืนค่า',
    'LBL_SYSTEM_SETTINGS' => 'การตั้งค่าระบบ',
    'LBL_USE_REAL_NAMES' => 'แสดงชื่อเต็ม',
    'LBL_USE_REAL_NAMES_DESC' => 'แสดงชื่อเต็มของผู้ใช้แทนชื่อผู้ใช้ในช่องการกำหนด',
    'LBL_DISALBE_CONVERT_LEAD' => 'ปิดใช้งานการดำเนินการรอแปลงแปลงลูกค้าเป้าหมาย',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'หากช่องทางในการขายไปสู่การแปลงแล้วการเปิดใช้งานตัวเลือกนี้จะนำการกระทำ convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'แสดงการกระทำในเมนู',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'เลือกเพื่อแสดงการทำงาน DetailView และ Subpanel ภายในเมนูแบบเลื่อนลง หากยกเลิกการเลือกการดำเนินการจะแสดงเป็นปุ่มแยกต่างหาก',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'เปิดใช้การแก้ไขแบบอินไลน์ในมุมมองรายการ',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'เลือกเพื่อเปิดใช้การแก้ไขแบบอินไลน์สำหรับฟิลด์ในมุมมองรายการ หากยกเลิกการเลือกบรรทัดด้านล่างจะถูกปิดใช้งานในมุมมองรายการ',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'เปิดใช้งานการแก้ไขแบบอินไลน์ในมุมมองรายละเอียด',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'เลือกเพื่อเปิดใช้การแก้ไขแบบอินไลน์สำหรับฟิลด์ในมุมมองรายละเอียด หากการแก้ไขบรรทัดในบรรทัดที่ไม่ได้เลือกจะถูกปิดใช้งานในมุมมองรายละเอียด',
    'LBL_HIDE_SUBPANELS' => 'ยุบแผงควบคุมย่อย',
    'LIST_ENTRIES_PER_LISTVIEW' => 'แสดงรายการต่อหน้า',
    'LIST_ENTRIES_PER_SUBPANEL' => 'แผงควบคุมย่อยต่อหน้า',
    'LOG_MEMORY_USAGE' => 'บันทึกหน่วยความจำที่ใช้',
    'LOG_SLOW_QUERIES' => 'บันทึกคำสั่งล่าช้า',
    'CURRENT_LOGO' => 'โลโก้ปัจจุบัน:',
    'CURRENT_LOGO_HELP' => 'โลโก้นี้แสดงอยู่ตรงกลางหน้าจอการเข้าสู่ระบบของแอปพลิเคชัน SuiteCRM',
    'NEW_LOGO' => 'เลือกโลโก้:',
    'NEW_LOGO_HELP' => 'รูปแบบไฟล์รูปภาพสามารถเป็นได้ทั้งแบบ. png หรือ. jpg ความสูงสูงสุดคือ 170px และความกว้างสูงสุดคือ 450px รูปภาพที่อัพโหลดซึ่งใหญ่กว่าในทุกทิศทางจะถูกปรับขนาดให้เป็นมิติสูงสุดเหล่านี้',
    'NEW_LOGO_HELP_NO_SPACE' => 'รูปแบบไฟล์รูปภาพสามารถเป็นได้ทั้งแบบ. png หรือ. jpg ความสูงสูงสุดคือ 170px และความกว้างสูงสุดคือ 450px รูปภาพที่อัพโหลดซึ่งใหญ่กว่าในทุกทิศทางจะถูกปรับขนาดให้เป็นมิติสูงสุดเหล่านี้',
    'SLOW_QUERY_TIME_MSEC' => 'เกณฑ์เวลาในการสืบค้นข้อมูลแบบช้า (msec)',
    'STACK_TRACE_ERRORS' => 'แสดงร่องรอยของข้อผิดพลาด',
    'UPLOAD_MAX_SIZE' => 'ขนาดอัปโหลดสูงสุด',
    'VERIFY_CLIENT_IP' => 'ตรวจสอบที่อยู่ IP ของผู้ใช้',
    'LOCK_HOMEPAGE' => 'ป้องกันรูปแบบหน้าแรกที่ปรับแต่งได้ของผู้ใช้',
    'LOCK_SUBPANELS' => 'ป้องกันการจัดวางพาร์ทิชันแบบกำหนดเองของผู้ใช้',
    'MAX_DASHLETS' => 'จำนวน SuiteCRM Dashlets สูงสุดในโฮมเพจ',
    'SYSTEM_NAME' => 'ชื่อระบบ:',
    'SYSTEM_NAME_WIZARD' => 'ชื่อ:',
    'SYSTEM_NAME_HELP' => 'นี่คือชื่อที่แสดงในแถบชื่อเรื่องของเบราเซอร์ของคุณ',
    'LBL_LDAP_TITLE' => 'สนับสนุนการรับรองความถูกต้อง LDAP',
    'LBL_LDAP_ENABLE' => 'เปิดใช้งาน LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'เซิร์ฟเวอร์:',
    'LBL_LDAP_SERVER_PORT' => 'หมายเลขพอร์ต:',
    'LBL_LDAP_ADMIN_USER' => 'ชื่อผู้ใช้งาน',
    'LBL_LDAP_ADMIN_USER_DESC' => 'ใช้เพื่อค้นหาผู้ใช้ LDAP ซึ่งอาจจำเป็นต้องมีคุณสมบัติครบถ้วน',
    'LBL_LDAP_ADMIN_PASSWORD' => 'รหัสผ่าน:',
    'LBL_LDAP_AUTHENTICATION' => 'รับรองความถูกต้อง:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'ผูกกับเซิร์ฟเวอร์ LDAP โดยใช้ข้อมูลรับรองผู้ใช้เฉพาะ จะผูกมัดโดยไม่ระบุตัวตนหากไม่ได้ระบุไว้',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'สร้างผู้ใช้อัตโนมัติ:',
    'LBL_LDAP_USER_DN' => 'ผู้ใช้ DN:',
    'LBL_LDAP_GROUP_DN' => 'กลุ่ม DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'ตัวอย่าง: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'ตัวกรองผู้ใช้:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'สมาชิกกลุ่ม:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'ผู้ใช้ต้องเป็นสมาชิกของกลุ่มเฉพาะ',
    'LBL_LDAP_GROUP_USER_ATTR' => 'แอตทริบิวต์ผู้ใช้:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'ตัวระบุที่ไม่ซ้ำกันของบุคคลที่จะใช้เพื่อตรวจสอบว่าเป็นสมาชิกกลุ่มหรือไม่ ตัวอย่าง: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'แอตทริบิวต์ของกลุ่มที่จะใช้ในการกรองกับแอตทริบิวต์ผู้ใช้ ตัวอย่าง:<em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'กลุ่มแอตทริบิวต์:',
    'LBL_LDAP_USER_FILTER_DESC' => 'ตัวกรองพารามิเตอร์เพิ่มเติมเพื่อใช้เมื่อตรวจสอบผู้ใช้เช่น.<em>is_suitecrm_user=1 หรือ (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'เข้าระบบแอ็ตทริบิวต์:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'ผูกแอตทริบิวต์:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'สำหรับการผูกข้อมูลผู้ใช้ LDAP: ตัวอย่าง:&nbsp;<b>AD:</b>&nbsp;userPrincipalName,&nbsp;<b>openLDAP:</b>&nbsp;dn,&nbsp;<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'สำหรับการค้นหาผู้ใช้ LDAP ตัวอย่าง:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'ตัวอย่าง: ldap.example.com หรือ ldaps: //ldap.example.com สำหรับ SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'ตัวอย่าง: <em>389 หรือ 636 สำหรับ SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'ชื่อกลุ่ม:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'ตัวอย่าง <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'ตัวอย่าง: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'หากไม่มีผู้ใช้งานที่ได้รับการรับรองระบบจะสร้างไฟล์หนึ่งขึ้นใน SuiteCRM',
    'LBL_LDAP_ENC_KEY' => 'เข้ารหัส คีย์:',
    'DEVELOPER_MODE' => 'โหมดนักพัฒนา',

    'SHOW_DOWNLOADS_TAB' => 'แสดงแท็บดาวน์โหลด',
    'SHOW_DOWNLOADS_TAB_HELP' => 'เมื่อเลือก แท็บดาวน์โหลดจะปรากฏในการตั้งค่าผู้ใช้และให้ผู้ใช้สามารถเข้าถึงปลั๊กอิน SuiteCRM และไฟล์อื่น ๆ ที่สามารถใช้ได้',
    'LBL_LDAP_ENC_KEY_DESC' => 'สำหรับการตรวจสอบสิทธิ์ SOAP เมื่อใช้ LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'ต้องเปิดใช้ส่วนขยาย php_mcrypt ในไฟล์ php.ini ของคุณ',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'ต้องเปิดใช้ส่วนขยาย php_mcrypt ในไฟล์ php.ini ของคุณ',
    'LBL_ALL' => 'ทั้งหมด',
    'LBL_MARK_POINT' => 'เครื่องหมาย',
    'LBL_NEXT_' => 'ถัดไป >',
    'LBL_REFRESH_FROM_MARK' => 'รีเฟรชจากเครื่องหมาย',
    'LBL_SEARCH' => 'ค้นหา:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'ไม่สน Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'ทำเครื่องหมายตำแหน่งที่จะเริ่มบันทึกจาก',
    'LBL_DISPLAYING_LOG' => 'กำลังแสดงบันทึก',
    'LBL_YOUR_PROCESS_ID' => 'กระบวนการไอดีของคุณ',
    'LBL_YOUR_IP_ADDRESS' => 'ที่อยู่ IP ของคุณคือ',
    'LBL_IT_WILL_BE_IGNORED' => ' มันจะถูกละเว้น ',
    'LBL_LOG_NOT_CHANGED' => 'เปลี่ยนบันทึกไม่ได้',
    'LBL_ALERT_JPG_IMAGE' => 'รูปแบบไฟล์ของรูปภาพต้องเป็น JPEG อัพโหลดไฟล์ใหม่ที่มีนามสกุลไฟล์. jpg',
    'LBL_ALERT_TYPE_IMAGE' => 'รูปแบบไฟล์ของรูปภาพต้องเป็น JPEG หรือ PNG อัพโหลดไฟล์ใหม่ที่มีนามสกุลไฟล์. jpg หรือ. png',
    'LBL_ALERT_SIZE_RATIO' => 'อัตราส่วนภาพควรอยู่ระหว่าง 1: 1 ถึง 10: 1 ภาพจะถูกปรับขนาด',
    'ERR_ALERT_FILE_UPLOAD' => 'เกิดข้อผิดพลาดระหว่างอัพโหลดภาพ',
    'LBL_LOGGER' => 'การตั้งค่า Logger',
    'LBL_LOGGER_FILENAME' => 'บันทึกชื่อไฟล์',
    'LBL_LOGGER_FILE_EXTENSION' => 'ส่วนขยาย',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'ขนาดบันทึกสูงสุด',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'รูปแบบวันที่เริ่มต้น',
    'LBL_LOGGER_LOG_LEVEL' => 'ระดับบันทึก',
    'LBL_LEAD_CONV_OPTION' => 'ตัวเลือกการแปลงช่องทางการขาย',
    'LEAD_CONV_OPT_HELP' => "<b>คัดลอก</b> - สร้างและเชื่อมโยงสำเนากิจกรรมทั้งหมดของช่องทางการขายไปยังบันทึกใหม่ที่ผู้ใช้เลือกระหว่างการแปลง สำเนาถูกสร้างขึ้นสำหรับแต่ละบักทึกที่เลือก.<br><br><b>Move</b> - ย้ายกิจกรรมทั้งหมดของช่องทางการขายไปยังบันทึกใหม่ที่ผู้ใช้เลือกระหว่างการแปลง.<br><br><b>Do Nothing</b> - ไม่ทำอะไรกับกิจกรรมของช่องทางการขายในระหว่างการแปลง กิจกรรมยังคงเกี่ยวข้องกับช่องทางการขายเท่านั้น.",
    'LBL_CONFIG_AJAX' => 'กำหนดค่าส่วนติดต่อผู้ใช้ AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'เปิดหรือปิด การใช้ UI AJAX สำหรับโมดูลเฉพาะ',
    'LBL_LOGGER_MAX_LOGS' => 'จำนวนบันทึกสูงสุด (ก่อน rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'เพิ่มเติมหลังชื่อไฟล์',
    'LBL_VCAL_PERIOD' => 'ช่วงเวลาอัปเดท vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'นำเข้า - จำนวนแถวสูงสุด:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'ระบุจำนวนแถวที่ได้รับอนุญาตภายในไฟล์นำเข้า.<br>ถ้าจำนวนแถวในไฟล์นำเข้าสูงกว่าจำนวนนี้ผู้ใช้จะได้รับการแจ้งเตือน.<br>หากไม่มีการป้อนหมายเลขจะอนุญาตให้มีแถวไม่ จำกัด จำนวน.',
    'vCAL_HELP' => 'ใช้การตั้งค่านี้เพื่อกำหนดจำนวนเดือนล่วงหน้าของวันที่ปัจจุบันซึ่งมีการเผยแพร่ข้อมูล ว่าง/ไม่ว่าง สำหรับการโทรและการประชุม.<BR>To turn Free/Busy การเผยแพร่, ใส่ "0". ต่ำสุดคือ 1 เดือน; สูงสุด 12 เดือน.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'สถานการณ์ของคุณ',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'ไม่มีการกำหนดค่าสถานการณ์',
    'LBL_WIZARD_SCENARIOS_DESC' => 'เลือกสถานการณ์ที่เหมาะสมสำหรับการติดตั้งของคุณ ตัวเลือกเหล่านี้สามารถเปลี่ยนแปลงได้หลังจากติดตั้ง',

    'LBL_WIZARD_TITLE' => 'ตัวช่วยสร้างผู้ดูแล',
    'LBL_WIZARD_WELCOME_TAB' => 'เริ่มต้น',
    'LBL_WIZARD_WELCOME_TITLE' => 'ยินดีต้อนรับสู่ SuiteCRM',
    'LBL_WIZARD_WELCOME' => 'คลิก <b>ถัดไป</b> กำหนดแบรนด์และกำหนดค่า SuiteCRM ในขณะนี้ หากคุณต้องการกำหนดค่า SuiteCRM ในภายหลังให้คลิก <b>ข้าม</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'ถัดไป >',
    'LBL_WIZARD_BACK_BUTTON' => '< ก่อนหน้า',
    'LBL_WIZARD_SKIP_BUTTON' => 'ข้าม',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'ดำเนินการต่อ',
    'LBL_WIZARD_FINISH_TITLE' => 'การกำหนดค่าพื้นฐานของระบบเสร็จ',
    'LBL_WIZARD_SYSTEM_TITLE' => 'การสร้างแบรนด์',
    'LBL_WIZARD_SYSTEM_DESC' => 'ระบุชื่อและโลโก้ขององค์กรเพื่อสร้างตราสินค้า SuiteCRM ของคุณ',
    'LBL_WIZARD_LOCALE_DESC' => 'ระบุว่าคุณต้องการให้ข้อมูลใน SuiteCRM แสดงตามสถานที่ตั้งทางภูมิศาสตร์ของคุณอย่างไร การตั้งค่าที่คุณระบุในที่นี้จะเป็นค่าเริ่มต้น ผู้ใช้จะสามารถตั้งค่ากำหนดเองได้',
    'LBL_WIZARD_SMTP_DESC' => 'ระบุบัญชีอีเมลที่จะใช้เพื่อส่งอีเมลเช่นการแจ้งเตือนการมอบหมายและรหัสผ่านผู้ใช้ใหม่ ผู้ใช้จะได้รับอีเมลจาก SuiteCRM ตามที่ส่งมาจากบัญชีอีเมลที่ระบุ',
    'LBL_LOADING' => 'โหลดข้อมูล...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'ลบ' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'เริ่มต้น' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'โลโก้' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'แสดงอีเมลที่อยู่ติดต่อ \'ในแผงข้อมูลประวัติสำหรับโมดูล',
);
