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
    'LBL_BASIC_SEARCH' => 'ตัวกรองด่วน',
    'LBL_ADVANCED_SEARCH' => 'ตัวกรองขั้นสูง',
    'LBL_BASIC_TYPE' => 'ชนิดพื้นฐาน',
    'LBL_ADVANCED_TYPE' => 'ชนิดขั้นสูง',
    'LBL_SYSOPTS_2' => 'จะใช้ไหนของชนิดของฐานข้อมูลสำหรับ SuiteCRM ที่คุณกำลังจะติดตั้ง',
    'LBL_SYSOPTS_DB' => 'ระบุชนิดของฐานข้อมูล',
    'LBL_SYSOPTS_DB_TITLE' => 'ชนิดของฐานข้อมูล',
    'LBL_SYSOPTS_ERRS_TITLE' => 'โปรดแก้ไขข้อผิดพลาดต่อไปนี้ก่อนดำเนินการต่อ:',
    'ERR_DB_VERSION_FAILURE' => 'สามารถตรวจสอบเวอร์ชันของฐานข้อมูล',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'ตั้งชื่อผู้ใช้สำหรับผู้ดูแลระบบ SuiteCRM ',
    'ERR_ADMIN_PASS_BLANK' => 'ใส่รหัสผ่านสำหรับผู้ดูแลระบบ SuiteCRM ',

    'ERR_CHECKSYS' => 'ตรวจพบข้อผิดพลาดระหว่างการตรวจสอบความเข้ากันได้  สำหรับการติดตั้ง SuiteCRM เพื่อทำงานอย่างถูกต้อง โปรดทำตามขั้นตอนที่เหมาะสมเพื่อแก้ไขปัญหาระบุไว้ด้านล่างและหรือกดปุ่มตรวจสอบ หรือลองติดตั้งอีกครั้ง',
    'ERR_CHECKSYS_CALL_TIME' => 'อนุญาตให้เปิดใช้งาน Call Time Reference (ซึ่งควรตั้งค่าเป็นปิดใน php.ini)',
    'ERR_CHECKSYS_CURL' => 'ไม่พบ: จัดกำหนดการ SuiteCRM ที่รัน ด้วยฟังก์ชันที่จำกัด',
    'ERR_CHECKSYS_IMAP' => 'ไม่พบ: อีเมลขาเข้า และ แคมเปญ (อีเมล) ต้องการ IMAP libraries. ไม่สามารถทำงานได้',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (ตั้งค่านี้ ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M หรือใหญ่กว่าในไฟล์ php.ini ของคุณ)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'คำเตือน: ไม่สามารถเขียนได้',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'เวอร์ชันของ PHP ไม่ได้รับการสนับสนุนโดย SuiteCRM. คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอ็พพลิเคชัน SuiteCRM โปรดดูที่ Matrix ความเข้ากันได้ใน Release Notes สำหรับเวอร์ชัน PHP ที่สนับสนุน รุ่นของคุณคือ ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'เวอร์ชันของ IIS ไม่ได้รับการสนับสนุนโดย SuiteCRM. คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอ็พพลิเคชัน SuiteCRM โปรดดูที่ Matrix ความเข้ากันได้ใน Release Notes สำหรับเวอร์ชัน IIS ที่สนับสนุน รุ่นของคุณคือ ',
    'ERR_CHECKSYS_FASTCGI' => 'เราตรวจพบว่าคุณไม่ได้ใช้ a FastCGI handler mapping สำหรับ PHP คุณจะต้อง ติดตั้ง/กำหนดค่า เวอร์ชันที่เข้ากันได้กับแอ็พพลิเคชัน SuiteCRM โปรดดูที่ Matrix ความเข้ากันได้ในหมายเหตุรุ่นสำหรับเวอร์ชันที่ได้รับการสนับสนุน โปรดดู <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> สำหรับรายละเอียด',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'สำหรับประสบการณ์ที่ดีที่สุดในการใช้ IIS / FastCGI sapi ให้ตั้งค่า fastcgi.logging เป็น 0 ในไฟล์ php.ini ของคุณ',
    'LBL_DB_UNAVAILABLE' => 'ฐานข้อมูลไม่พร้อมใช้งาน',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'ไม่พบการสนับสนุนฐานข้อมูล โปรดตรวจสอบว่าคุณมีไดรเวอร์ที่จำเป็นสำหรับหนึ่งในประเภทฐานข้อมูลที่สนับสนุนต่อไปนี้: MySQL หรือ MS SQLServer คุณอาจต้องยกเลิกการขยายส่วนขยายในไฟล์ php.ini หรือคอมไพล์ใหม่ด้วยไฟล์ binary ที่ถูกต้อง ทั้งนี้ขึ้นอยู่กับรุ่นของ PHP โปรดดูคู่มือการใช้งาน PHP สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการเปิดใช้ Database Support',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'ไม่พบฟังก์ชันที่เกี่ยวข้องกับไลบรารีตัวแยกวิเคราะห์ XML ที่จำเป็นโดยแอ็พพลิเคชัน SuiteCRM คุณอาจต้องยกเลิกการขยายส่วนขยายในไฟล์ php.ini หรือคอมไพล์ใหม่ด้วยไฟล์ไบนารีที่ถูกต้องทั้งนี้ขึ้นอยู่กับรุ่นของ PHP โปรดดูคู่มือการใช้งาน PHP สำหรับข้อมูลเพิ่มเติม',
    'ERR_CHECKSYS_MBSTRING' => 'ไม่พบฟังก์ชันที่เกี่ยวข้องกับ Multibyte Strings นามสกุล PHP (mbstring) ที่จำเป็นโดยแอ็พพลิเคชัน SuiteCRM <br/> <br/> โดยทั่วไปโมดูล mbstring ไม่ได้เปิดใช้งานโดยค่าเริ่มต้นใน PHP และต้องเปิดใช้งานด้วย --enable-mbstring เมื่อสร้างไบนารีของ PHP โปรดดูคู่มือการใช้งาน PHP สำหรับข้อมูลเพิ่มเติมเกี่ยวกับวิธีการเปิดใช้งานการสนับสนุน mbstring',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'ไฟล์ config มีอยู่ แต่ไม่สามารถเขียนได้ โปรดทำตามขั้นตอนที่จำเป็นเพื่อทำให้ไฟล์สามารถเขียนได้ ขึ้นอยู่กับระบบปฏิบัติการของคุณคุณอาจต้องการเปลี่ยนสิทธิ์โดยใช้ chmod 766 หรือคลิกขวาที่ชื่อไฟล์เพื่อเข้าถึงคุณสมบัติและยกเลิกการเลือกตัวเลือก read only',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'ไฟล์แทนที่มีอยู่แล้ว แต่ไม่สามารถเขียนได้ โปรดทำตามขั้นตอนที่จำเป็นเพื่อทำให้ไฟล์สามารถเขียนได้ ขึ้นอยู่กับระบบปฏิบัติการของคุณคุณอาจต้องการเปลี่ยนสิทธิ์โดยใช้ chmod 766 หรือคลิกขวาที่ชื่อไฟล์เพื่อเข้าถึงคุณสมบัติและยกเลิกการเลือกตัวเลือก read only',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'ไอเรกทอรี่มีอยู่ แต่ไม่สามารถเขียนได้ คุณอาจต้องเปลี่ยนสิทธิ์ในไฟล์ (chmod 766) หรือคลิกขวาที่มันและยกเลิกการเลือกอ่านอย่างเดียวทั้งนี้ขึ้นอยู่กับระบบปฏิบัติการของคุณ โปรดทำตามขั้นตอนที่จำเป็นเพื่อทำให้ไฟล์สามารถเขียนได้',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "ไฟล์หรือไดเร็กทอรีที่ระบุไว้ด้านล่างไม่สามารถเขียนได้หรือหายไปและไม่สามารถสร้างได้ ทั้งนี้ขึ้นอยู่กับระบบปฏิบัติการของคุณการแก้ไขปัญหานี้อาจทำให้คุณต้องเปลี่ยนสิทธิ์ในไฟล์หรือไดเรกทอรีหลัก (chmod 755) หรือคลิกขวาที่ไดเรกทอรีหลักและยกเลิกการเลือก 'read only' และใช้กับโฟลเดอร์ย่อยทั้งหมด",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "ไม่พบฟังก์ชันที่เกี่ยวข้องกับ JSON Parser Libraries ที่แอปพลิเคชัน SuiteCRM ต้องการ คุณอาจต้องยกเลิกการ uncomment ในส่วน extension ในไฟล์ php.ini หรือคอมไพล์ใหม่ด้วยไฟล์ไบนารีที่ถูกต้อง ทั้งนี้ขึ้นอยู่กับเวอร์ชันของ PHP โปรดดูคู่มือ PHP ของคุณสำหรับข้อมูลเพิ่มเติม",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'แทนที่การตั้งค่า',
    'ERR_CHECKSYS_SAFE_MODE' => 'เปิดเซฟโหมด (คุณอาจต้องการปิดใช้งานใน php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'ไม่พบการสนับสนุน ZLib: SuiteCRM ทำงานเต็มประสิทธิภาพเมื่อบีบอัด ZLib',
    'ERR_CHECKSYS_ZIP' => 'ไม่พบการสนับสนุน ZIP: SuiteCRM ต้องการสนับสนุน ZIP เพื่อดำเนินการบีบอัดไฟล์',
    'ERR_CHECKSYS_PCRE' => 'ไม่พบไลบรารี PCRE: SuiteCRM ต้องการไลบรารี PCRE เพื่อประมวลผลรูปแบบ Perl ของรูปแบบส่วนขยายปกติที่ตรงกัน',
    'ERR_CHECKSYS_PCRE_VER' => 'ไลบรารี PCRE: SuiteCRM ต้องการไลบรารี PCRE 7.0 หรือสูงกว่าเพื่อประมวลผลรูปแบบ Perl ของรูปแบบนิพจน์ปกติที่ตรงกัน',
    'ERR_DB_ADMIN' => 'ชื่อผู้ใช้ และ/หรือ รหัสผ่านผู้ดูแลระบบฐานข้อมูลที่ระบุไม่ถูกต้องและไม่สามารถสร้างการเชื่อมต่อกับฐานข้อมูลได้ โปรดป้อนชื่อผู้ใช้และรหัสผ่านที่ถูกต้อง (ข้อผิดพลาด: ',
    'ERR_DB_ADMIN_MSSQL' => 'ชื่อผู้ใช้ และ/หรือ รหัสผ่านผู้ดูแลระบบฐานข้อมูลที่ระบุไม่ถูกต้องและไม่สามารถสร้างการเชื่อมต่อกับฐานข้อมูลได้ โปรดป้อนชื่อผู้ใช้และรหัสผ่านที่ถูกต้อง',
    'ERR_DB_EXISTS_NOT' => 'ไม่มีฐานข้อมูลที่ระบุ',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'มีฐานข้อมูลพร้อมข้อมูลการกำหนดค่าอยู่แล้ว หากต้องการติดตั้งกับฐานข้อมูลที่เลือก โปรดทำการติดตั้งอีกครั้งและเลือก: "Drop และ สร้างตารางทึ่มีอยู่ของ SuiteCRM ใหม่" หากต้องการอัปเกรด ให้ใช้ Wizard การอัปเกรดในคอนโซลผู้ดูแลระบบ โปรดอ่านเอกสารประกอบการอัปเกรดที่อยู่<a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">ที่นี่</a>.',
    'ERR_DB_EXISTS' => 'ชื่อฐานข้อมูลที่ระบุมีอยู่แล้ว - ไม่สามารถสร้างชื่อฐานข้อมูลที่มีชื่อเดียวกันได้',
    'ERR_DB_EXISTS_PROCEED' => 'มีชื่อฐานข้อมูลที่มีอยู่แล้ว คุณสามารถ <br>1. กดปุ่มย้อนกลับและเลือกชื่อฐานข้อมูลใหม่ <br>2. คลิกถัดไปและดำเนินต่อไป แต่ตารางที่มีอยู่ทั้งหมดในฐานข้อมูลนี้จะถูกลดลง <strong> นั่นหมายความว่าตารางและข้อมูลของคุณจะถูกเป่าออก </strong>',
    'ERR_DB_HOSTNAME' => 'ต้องใส่ชื่อฐานข้อมูล',
    'ERR_DB_INVALID' => 'ประเภทของฐานข้อมูลที่เลือกไม่ถูกต้อง',
    'ERR_DB_LOGIN_FAILURE' => 'โฮสต์ของฐานข้อมูลชื่อผู้ใช้ และ/หรือ รหัสผ่านไม่ถูกต้องและไม่สามารถสร้างการเชื่อมต่อกับฐานข้อมูลได้ โปรดป้อนชื่อโฮสต์และรหัสผ่านที่ถูกต้อง',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'โฮสต์ของฐานข้อมูลชื่อผู้ใช้ และ/หรือ รหัสผ่านไม่ถูกต้องและไม่สามารถสร้างการเชื่อมต่อกับฐานข้อมูลได้ โปรดป้อนชื่อโฮสต์และรหัสผ่านที่ถูกต้อง',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'โฮสต์ของฐานข้อมูลชื่อผู้ใช้ และ/หรือ รหัสผ่านไม่ถูกต้องและไม่สามารถสร้างการเชื่อมต่อกับฐานข้อมูลได้ โปรดป้อนชื่อโฮสต์และรหัสผ่านที่ถูกต้อง',
    'ERR_DB_MYSQL_VERSION' => 'เวอร์ชั่นของ MySQL (%s) ไม่ได้รับการสนับสนุนโดย SuiteCRM คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอ็พพลิเคชัน SuiteCRM โปรดดูที่ Matrix ความเข้ากันได้ในหมายเหตุรีลีสสำหรับ MySQL ที่ได้รับการสนับสนุน',
    'ERR_DB_NAME' => 'ต้องใส่ชื่อฐานข้อมูล',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "ชื่อฐานข้อมูลต้องไม่มี ' \\', '/' หรือ ' .'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "ชื่อฐานข้อมูลไม่สามารถขึ้นต้นด้วยตัวเลข, '#', หรือ '@' และ ต้องไม่มีช่องว่าง, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Database name can only consist of alphanumeric characters and the symbols '#', '_' or '$'
ชื่อฐานข้อมูลสามารถประกอบด้วยตัวอักษรและตัวเลขและสัญลักษณ์ '#', '_' หรือ '$' เท่านั้น",
    'ERR_DB_PASSWORD' => 'รหัสผ่านที่ให้ไว้สำหรับผู้ดูแลระบบฐานข้อมูล SuiteCRM ไม่ตรงกัน โปรดป้อนรหัสผ่านเดียวกันในฟิลด์รหัสผ่าน',
    'ERR_DB_PRIV_USER' => 'ระบุชื่อผู้ใช้ฐานข้อมูลผู้ดูแลระบบ ผู้ใช้จำเป็นสำหรับการเชื่อมต่อเริ่มต้นกับฐานข้อมูล',
    'ERR_DB_USER_EXISTS' => 'มีชื่อผู้ใช้ฐานข้อมูล SuiteCRM อยู่แล้ว - ไม่สามารถสร้างชื่อที่มีชื่อเดียวกันได้ โปรดป้อนชื่อผู้ใช้ใหม่',
    'ERR_DB_USER' => 'ป้อนชื่อผู้ใช้สำหรับผู้ดูแลระบบฐานข้อมูล SuiteCRM',
    'ERR_DBCONF_VALIDATION' => 'โปรดแก้ไขข้อผิดพลาดต่อไปนี้ก่อนดำเนินการต่อ:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'รหัสผ่านที่ให้ไว้สำหรับผู้ใช้ฐานข้อมูล SuiteCRM ไม่ตรงกัน โปรดป้อนรหัสผ่านเดียวกันในฟิลด์รหัสผ่าน',
    'ERR_ERROR_GENERAL' => 'พบข้อผิดพลาดต่อไปนี้:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'ไม่สามารถลบไฟล์: ',
    'ERR_LANG_MISSING_FILE' => 'ไม่พบไฟล์: ',
    'ERR_LANG_NO_LANG_FILE' => 'ไม่มีไฟล์ภาษาแพ็คที่ รวม/ภาษา ภายใน: ',
    'ERR_LANG_UPLOAD_1' => 'เกิดปัญหากับการอัพโหลดของคุณ กรุณาลองอีกครั้ง.',
    'ERR_LANG_UPLOAD_2' => 'ชุดภาษาต้องเป็น ZIP archives.',
    'ERR_LANG_UPLOAD_3' => 'PHP ไม่สามารถย้ายไฟล์ temp ไปยังไดเร็กทอรีการอัพเกรดได้',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'ไดเรกทอรีบันทึกที่ให้มาไม่ใช่ไดเรกทอรีที่ถูกต้อง',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'บันทึกไดเรกทอรีที่ให้มาไม่ใช่ไดเรกทอรีที่เขียนได้',
    'ERR_NO_DIRECT_SCRIPT' => 'ไม่สามารถประมวลผลสคริปต์ได้โดยตรง',
    'ERR_NO_SINGLE_QUOTE' => 'ไม่สามารถใช้เครื่องหมายอัญประกาศเดี่ยวสำหรับ ',
    'ERR_PASSWORD_MISMATCH' => 'รหัสผ่านที่ให้ไว้สำหรับผู้ใช้ผู้ดูแลระบบ SuiteCRM ไม่ตรงกัน โปรดป้อนรหัสผ่านเดียวกันในฟิลด์รหัสผ่าน',
    'ERR_PERFORM_CONFIG_PHP_1' => 'ไม่สามารถเขียนไปยังไฟล์ <span class=stop>config.php</span>',
    'ERR_PERFORM_CONFIG_PHP_2' => 'คุณสามารถดำเนินการติดตั้งต่อได้โดยการสร้างไฟล์ config.php ด้วยตนเองและวางข้อมูลการกำหนดค่าไว้ด้านล่างลงในไฟล์ config.php อย่างไรก็ตามคุณ <strong> ต้อง </ strong> สร้างไฟล์ config.php ก่อนที่จะดำเนินการต่อในขั้นตอนถัดไป',
    'ERR_PERFORM_CONFIG_PHP_3' => 'คุณจำไม่ได้ว่าจะสร้างไฟล์ config.php หรือไม่?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'คำเตือน: ไม่สามารถเขียนไฟล์ config.php ได้ โปรดตรวจสอบว่ามีอยู่แล้ว',
    'ERR_PERFORM_HTACCESS_1' => 'ไม่สามารถเขียนไปยัง ',
    'ERR_PERFORM_HTACCESS_2' => ' ไฟล์',
    'ERR_PERFORM_HTACCESS_3' => 'ถ้าคุณต้องการรักษาความปลอดภัยไฟล์บันทึกของคุณจากการเข้าถึงผ่านทางเบราว์เซอร์ให้สร้างไฟล์. htaccess ในบันทึกไดเร็กทอรีด้วยบรรทัด:',
    'ERR_PERFORM_NO_TCPIP' => '<b> เราไม่พบการเชื่อมต่ออินเทอร์เน็ต </b> เมื่อคุณเชื่อมต่อแล้วโปรดไปที่ <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> เพื่อลงทะเบียนกับ SuiteCRM การแจ้งให้เราทราบสักเล็กน้อยเกี่ยวกับวิธีที่บริษัทของคุณวางแผนจะใช้ SuiteCRM ทำให้เรามั่นใจได้ว่าเรานำเสนอแอปพลิเคชันที่ถูกต้องสำหรับความต้องการทางธุรกิจของคุณอยู่เสมอ',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'ไดเรกทอรีเซสชันที่ระบุไม่ใช่ไดเรกทอรีที่ถูกต้อง',
    'ERR_SESSION_DIRECTORY' => 'บันทึกไดเรกทอรีที่ให้มาไม่ใช่ไดเรกทอรีที่เขียนได้',
    'ERR_SESSION_PATH' => 'ต้องการบันทึกไดเรกทอรีหากคุณต้องการระบุของคุณเอง',
    'ERR_SI_NO_CONFIG' => 'คุณไม่ได้รวม config_si.php ไว้ในรูทเอกสารหรือคุณไม่ได้กำหนด $sugar_config_si ใน config.php',
    'ERR_SITE_GUID' => 'ต้องการแอพพลิเคชั่นไอดีหากคุณต้องการระบุของคุณเอง',
    'ERROR_SPRITE_SUPPORT' => "ขณะนี้เราไม่สามารถค้นหาไลบรารี GD ได้ดังนั้นคุณจะไม่สามารถใช้ฟังก์ชัน CSS Sprite ได้",
    'ERR_UPLOAD_MAX_FILESIZE' => 'คำเตือน: ควรกำหนดค่า PHP ของคุณเพื่อให้สามารถอัพโหลดไฟล์อย่างน้อย 6MB',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'ขนาดไฟล์อัพโหลด',
    'ERR_URL_BLANK' => 'ระบุ URL พื้นฐานสำหรับตัวอย่าง SuiteCRM',
    'ERR_UW_NO_UPDATE_RECORD' => 'ไม่พบข้อมูลการติดตั้งของ',
    'ERROR_MANIFEST_TYPE' => 'ไฟล์ Manifest ต้องระบุประเภทแพ็กเกจ',
    'ERROR_PACKAGE_TYPE' => 'ไฟล์ Manifest ระบุประเภทแพ็กเกจที่ไม่รู้จัก',
    'ERROR_VERSION_INCOMPATIBLE' => 'ไฟล์ที่อัปโหลดไม่สามารถใช้งานร่วมกับ SuiteCRM เวอร์ชันนี้ได้: ',

    'LBL_BACK' => 'ย้อนกลับ',
    'LBL_CANCEL' => 'ยกเลิก',
    'LBL_ACCEPT' => 'ฉันยอมรับ',
    'LBL_CHECKSYS_CACHE' => 'เขียนแคชไดเรกทอรี่ย่อย',
    'LBL_DROP_DB_CONFIRM' => 'ชื่อฐานข้อมูลที่ระบุมีอยู่แล้ว <br> คุณสามารถทำดังนี้:<br> 1. คลิกที่ปุ่มยกเลิกและเลือกชื่อฐานข้อมูลใหม่หรือ <br>2. คลิกปุ่มยอมรับและดำเนินการต่อ ตารางที่มีอยู่ทั้งหมดในฐานข้อมูลจะถูกลดลง <strong> นั่นหมายความว่าตารางทั้งหมดและข้อมูลที่มีอยู่ก่อนหน้าจะถูกนำออกไป </strong>',
    'LBL_CHECKSYS_COMPONENT' => 'ส่วนประกอบ',
    'LBL_CHECKSYS_CONFIG' => 'ไฟล์กำหนดค่า SuiteCRM ที่สามารถเขียนได้ (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'ไดเรกทอรีที่กำหนดเองที่สามารถเขียนได้',
    'LBL_CHECKSYS_DATA' => 'เขียนข้อมูลไดเรกทอรี่ย่อย',
    'LBL_CHECKSYS_IMAP' => 'โมดูล IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'ตกลง (ไม่จำกัด)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'ตกลง (ไม่จำกัด)',
    'LBL_CHECKSYS_MEM' => 'กำจัดหน่วยความจำ PHP',
    'LBL_CHECKSYS_MODULE' => 'โมดูลที่สามารถเขียนไดเรกทอรีย่อยและไฟล์',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'ไม่พร้อมใช้งาน',
    'LBL_CHECKSYS_OK' => 'ตกลง',
    'LBL_CHECKSYS_PHP_INI' => 'ตำแหน่งของไฟล์การกำหนดค่า PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'เวอร์ชัน PHP',
    'LBL_CHECKSYS_IISVER' => 'เวอร์ชั่น IIS',
    'LBL_CHECKSYS_JSON' => 'การแยกวิเคราะห์ JSON',
    'LBL_CHECKSYS_RECHECK' => 'ตรวจสอบอีกที',
    'LBL_CHECKSYS_STATUS' => 'สถานะ',
    'LBL_CHECKSYS_TITLE' => 'ยอมรับการตรวจสอบระบบ',
    'LBL_CHECKSYS_XML' => 'แยกวิเคราะห์ XML',
    'LBL_CHECKSYS_ZLIB' => 'บีบอัด ZLIB',
    'LBL_CHECKSYS_ZIP' => 'จัดการ ZIP',
    'LBL_CHECKSYS_PCRE' => 'PCRE ไลบรารี',
    'LBL_CHECKSYS_FIX_FILES' => 'โปรดแก้ไขไฟล์หรือไดเรกทอรีต่อไปนี้ก่อนดำเนินการต่อ:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'โปรดแก้ไขไดเร็กทอรีโมดูลต่อไปนี้และไฟล์ที่อยู่ในไฟล์ก่อนดำเนินการต่อ:',
    'LBL_CHECKSYS_UPLOAD' => 'อัปโหลดไดเรกทอรี่ที่เขียนได้',
    'LBL_CLOSE' => 'ปิด',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'สร้างแล้ว',
    'LBL_CONFIRM_DB_TYPE' => 'ชนิดของฐานข้อมูล',
    'LBL_CONFIRM_NOT' => 'ไม่',
    'LBL_CONFIRM_TITLE' => 'ยืนยันการตั้งค่า',
    'LBL_CONFIRM_WILL' => 'จะ',
    'LBL_DBCONF_DB_DROP' => 'วางตาราง',
    'LBL_DBCONF_DB_NAME' => 'ชื่อฐานข้อมูล',
    'LBL_DBCONF_DB_PASSWORD' => 'รหัสผ่านผู้ใช้ฐานข้อมูล SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'ใส่รหัสผ่านผู้ใช้ฐานข้อมูล SuiteCRM อีกครั้ง',
    'LBL_DBCONF_DB_USER' => 'ผู้ใช้ฐานข้อมูล SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'ผู้ใช้ฐานข้อมูล SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'ฐานข้อมูลชื่อผู้ดูแลระบบ',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'ฐานข้อมูลรหัสผ่านผู้ดูแลระบบ',
    'LBL_DBCONF_COLLATION' => 'การตรวจทาน',
    'LBL_DBCONF_CHARSET' => 'จำนวนตัวอักษร',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'การตั้งค่าฐานข้อมูลขั้นสูง',
    'LBL_DBCONF_DEMO_DATA' => 'สร้างฐานข้อมูลด้วยตัวอย่างข้อมูลหรือไม่',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'เลือกข้อมูลตัวอย่าง',
    'LBL_DBCONF_HOST_NAME' => 'ชื่อโฮสต์',
    'LBL_DBCONF_HOST_INSTANCE' => 'โฮสต์ตัวอย่าง',
    'LBL_DBCONFIG_SECURITY' => 'เพื่อความปลอดภัยคุณสามารถระบุผู้ใช้ฐานข้อมูลแบบพิเศษเพื่อเชื่อมต่อกับฐานข้อมูล SuiteCRM ผู้ใช้รายนี้ต้องสามารถเขียน อัพเดต และดึงข้อมูลในฐานข้อมูล SuiteCRM ซึ่งจะสร้างขึ้นสำหรับตัวอย่างนี้ ผู้ใช้รายนี้สามารถเป็นผู้ดูแลระบบฐานข้อมูลที่ระบุไว้ด้านบนหรือคุณสามารถให้ข้อมูลผู้ใช้ฐานข้อมูลใหม่หรือที่มีอยู่ได้',
    'LBL_DBCONFIG_PROVIDE_DD' => 'ให้ผู้ใช้ที่มีอยู่แล้ว',
    'LBL_DBCONFIG_CREATE_DD' => 'กำหนดผู้ใช้สร้างขึ้น',
    'LBL_DBCONFIG_SAME_DD' => 'เหมือนกับผู้ดูแลระบบ',
    'LBL_DBCONF_TITLE' => 'การตั้งค่าฐานข้อมูล',
    'LBL_DBCONF_TITLE_NAME' => 'ระบุชื่อฐานข้อมูล',
    'LBL_DBCONF_TITLE_USER_INFO' => 'ให้ข้อมูลผู้ใช้ฐานข้อมูล',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'รหัสผ่าน',
    'LBL_DISABLED_DESCRIPTION_2' => 'หลังจากปรับเปลี่ยนข้อมูลเสร็จ คุณสามารถคลิกปุ่ม "Start" ด้านล่างเพื่อเริ่มการติดตั้ง <i>หลังจากติดตั้งเสร็จสมบูรณ์ คุณจะต้องเปลี่ยนค่าตัวแปร \'installer_locked\' เป็น \'true\'. </i>',
    'LBL_DISABLED_DESCRIPTION' => 'โปรแกรมติดตั้งมีการรันไปแล้วหนึ่งครั้ง เพื่อเป็นการรักษาความปลอดภัย ระบบได้ทำการระงับการติดตั้งซำ้ หากคุณแน่ใจว่าคุณต้องการเรียกใช้อีกครั้ง กรุณาไปที่ไฟล์ config.php และค้นหา (หรือเพิ่ม) ตัวแปร \'installer_locked\' และตั้งค่าเป็น \'false\' ตามตัวอย่างดังนี้:',
    'LBL_DISABLED_HELP_1' => 'หากต้องการความช่วยเหลือในการติดตั้ง โปรดเยี่ยมชม SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'ฟอรั่มช่วยเหลือ',
    'LBL_DISABLED_TITLE_2' => 'ปิดการติดตั้ง SuiteCRM เรียบร้อยแล้ว',
    'LBL_HELP' => 'ช่วยเหลือ',
    'LBL_INSTALL' => 'ติดตั้ง',
    'LBL_INSTALL_TYPE_TITLE' => 'ตัวเลือกการติดตั้ง',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'เลือกประเภทการติดตั้ง',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>ติดตั้งแบบทั่วไป</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>ติดตั้งแบบกำหมดเอง</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'ต้องการข้อมูลขั้นต่ำสำหรับการติดตั้ง แนะนำสำหรับผู้ใช้ใหม่',
    'LBL_INSTALL_TYPE_MSG3' => 'กำหนดตัวเลือกการตั้งค่าเพิ่มเติมระหว่างรอการติดตั้ง ตัวเลือกเหล่านี้จะพร้อมใช้งานหลังจากติดตั้งแล้วในหน้าจอผู้ดูแลระบบ แนะนำสำหรับผู้ใช้ขั้นสูง',
    'LBL_LANG_1' => 'หากต้องการใช้ภาษาใน SuiteCRM นอกเหนือจากภาษาเริ่มต้น (US-English) คุณสามารถอัปโหลดและติดตั้งชุดภาษาได้ในขณะนี้ คุณสามารถอัปโหลดและติดตั้งชุดภาษาจากภายในแอ็พพลิเคชัน SuiteCRM ได้เช่นกัน ถ้าคุณต้องการข้ามขั้นตอนนี้ให้คลิกถัดไป',
    'LBL_LANG_BUTTON_COMMIT' => 'ติดตั้ง',
    'LBL_LANG_BUTTON_REMOVE' => 'ลบออก',
    'LBL_LANG_BUTTON_UNINSTALL' => 'ถอนการติดตั้ง',
    'LBL_LANG_BUTTON_UPLOAD' => 'อัพโหลด',
    'LBL_LANG_NO_PACKS' => 'ไม่มี',
    'LBL_LANG_PACK_INSTALLED' => 'ชุดภาษาต่อไปนี้ได้รับการติดตั้งแล้ว: ',
    'LBL_LANG_PACK_READY' => 'ชุดภาษาต่อไปนี้พร้อมที่จะติดตั้งแล้ว: ',
    'LBL_LANG_SUCCESS' => 'อัพโหลดชุดภาษาเรียบร้อยแล้ว',
    'LBL_LANG_TITLE' => 'ชุดภาษา',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'กำลังติดตั้ง SuiteCRM เดี๋ยวนี้ อาจใช้เวลาถึงสองสามนาที',
    'LBL_LANG_UPLOAD' => 'อัปโหลดชุดภาษา',
    'LBL_LICENSE_ACCEPTANCE' => 'ยอมรับใบอนุญาต',
    'LBL_LICENSE_CHECKING' => 'ตรวจสอบระบบความเข้ากันได้',
    'LBL_LICENSE_CHKENV_HEADER' => 'ตรวจสอบสิ่งรอบข้าง',
    'LBL_LICENSE_CHKDB_HEADER' => 'การยืนยันข้อมูลรับรอง DB',
    'LBL_LICENSE_CHECK_PASSED' => 'ระบบผ่านการตรวจสอบความเข้ากันได้',
    'LBL_CREATE_CACHE' => 'กำลังเตรียมการติดตั้ง...',
    'LBL_LICENSE_REDIRECT' => 'กำลังเปลี่ยนเส้นทาง ',
    'LBL_LICENSE_I_ACCEPT' => 'ฉันยอมรับ',
    'LBL_LICENSE_PRINTABLE' => ' มุมมองสำหรับพิมพ์ ',
    'LBL_PRINT_SUMM' => 'พิมพ์ข้อมูลสรุป',
    'LBL_LICENSE_TITLE_2' => 'ใบอนุญาต SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'ดาวิด',
    'LBL_LOCALE_NAME_LAST' => 'ลิฟวิงสโตน',
    'LBL_LOCALE_NAME_SALUTATION' => 'ดร.',

    'LBL_ML_ACTION' => 'คำสั่ง',
    'LBL_ML_DESCRIPTION' => 'รายละเอียด',
    'LBL_ML_INSTALLED' => 'วันที่ติดตั้ง',
    'LBL_ML_NAME' => 'ชื่อ',
    'LBL_ML_PUBLISHED' => 'วันที่เผยแพร่',
    'LBL_ML_TYPE' => 'ประเภท',
    'LBL_ML_UNINSTALLABLE' => 'ไม่สามารถติดตั้งได้',
    'LBL_ML_VERSION' => 'เวอร์ชั่น',
    'LBL_MSSQL' => 'เซิร์ฟเวอร์ SQL',
    'LBL_MSSQL2' => 'เซิร์ฟเวอร์ SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (โปรแกรมควบคุมเซิร์ฟเวอร์ SQL ของ Microsoft สำหรับ PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (ส่วนขยาย mysqli)',
    'LBL_NEXT' => 'ถัดไป',
    'LBL_NO' => 'ไม่ใช่',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'ตั้งค่ารหัสผ่านไซต์ผู้ดูแลระบบ',
    'LBL_PERFORM_CONFIG_PHP' => 'สร้างไฟล์การตั้งค่า SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>สร้างฐานข้อมูล</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>เปิด</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'กำลังสร้างฐานข้อมูลชื่อผู้ใช้และรหัสผ่าน...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'สร้างข้อมูลเริ่มต้น SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'สร้างตารางเวลางานเริ่มต้น',
    'LBL_PERFORM_DEFAULT_USERS' => 'สร้างผู้ใช้เริ่มต้น',
    'LBL_PERFORM_DEMO_DATA' => 'การสร้างตารางฐานข้อมูลด้วยข้อมูลสาธิต (ซึ่งอาจใช้เวลาสักครู่)',
    'LBL_PERFORM_DONE' => 'เสร็จสิ้น<br>',
    'LBL_PERFORM_FINISH' => 'เสร็จสิ้น',
    'LBL_PERFORM_OUTRO_1' => 'การติดตั้ง SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' เสร็จสมบูรณ์แล้ว!',
    'LBL_PERFORM_OUTRO_3' => 'เวลาทั้งหมด: ',
    'LBL_PERFORM_OUTRO_4' => ' วินาที.',
    'LBL_PERFORM_OUTRO_5' => 'หน่วยความจำที่ใช้โดยประมาณ: ',
    'LBL_PERFORM_OUTRO_6' => ' ไบต์',
    'LBL_PERFORM_SUCCESS' => 'สำเร็จ',
    'LBL_PERFORM_TABLES' => 'การสร้างตารางแอ็พพลิเคชัน SuiteCRM, ตารางการตรวจสอบ และ relationship metadata',
    'LBL_PERFORM_TITLE' => 'ดำเนินการติดตั้ง',
    'LBL_PRINT' => 'พิมพ์',
    'LBL_REG_CONF_1' => 'โปรดกรอกแบบฟอร์มด้านล่างเพื่อรับการแจ้งเกี่ยวกับผลิตภัณฑ์, ข่าวสารการฝึกอบรม, ข้อเสนอพิเศษและคำเชิญเข้าร่วมกิจกรรมพิเศษจาก SuiteCRM เราไม่ขายให้เช่าแบ่งปันหรือแจกจ่ายข้อมูลดังกล่าวให้กับบุคคลที่สาม',
    'LBL_REG_CONF_3' => 'ขอบคุณสำหรับการลงทะเบียน คลิกที่ปุ่ม Finish เพื่อเข้าสู่ระบบ SuiteCRM คุณจะต้องเข้าสู่ระบบครั้งแรกโดยใช้ชื่อผู้ใช้ "admin" และรหัสผ่านที่คุณป้อนในขั้นตอนที่ 2',
    'LBL_REG_TITLE' => 'ลงทะเบียน',

    'LBL_REQUIRED' => '* ต้องกรอก',

    'LBL_SITECFG_ADMIN_Name' => 'ชื่อผู้ดูแลระบบ SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'ใส่รหัสผ่านชื่อผู้ดูแลระบบ SuiteCRM อีกครั้ง',
    'LBL_SITECFG_ADMIN_PASS' => 'รหัสผ่านชื่อผู้ดูแลระบบ SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'แอพลิเคชัน ไอดี',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'หากเลือกคุณต้องระบุแอปพลิเคชันไอดีเพื่อแทนที่ไอดีที่สร้างขึ้นเอง ไอดีนี้จะช่วยให้มั่นใจได้ว่าตัวอย่างอื่น ๆ จะไม่ใช้งานตัวอย่าง SuiteCRM ของหนึ่งตัวอย่าง หากคุณมีกลุ่มของการติดตั้ง SuiteCRM ทุกคนต้องใช้แอ็พพลิเคชันไอดีเดียวกัน',
    'LBL_SITECFG_CUSTOM_ID' => 'ระบุแอปพลิเคชันไอดีของคุณ',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'ถ้าเลือกคุณต้องระบุบันทึกไดเร็กทอรีเพื่อแทนที่ไดเร็กทอรีเริ่มต้นสำหรับไฟล์ SuiteCRM ไม่ว่าตำแหน่งของไฟล์บันทึกจะอยู่ที่ใดก็ตามการเข้าถึงผ่านเว็บเบราเซอร์จะถูก จำกัด โดยผ่าน. htaccess redirect',
    'LBL_SITECFG_CUSTOM_LOG' => 'ใช้บันทึกไดเรกทอรีที่กำหนดเอง',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'หากเลือกคุณต้องจัดเตรียมโฟลเดอร์ที่ปลอดภัยเพื่อจัดเก็บข้อมูลเซสชัน SuiteCRM ซึ่งสามารถทำได้เพื่อป้องกันข้อมูลเซสชันไม่ให้เสี่ยงต่อเซิร์ฟเวอร์ที่ใช้ร่วมกัน',
    'LBL_SITECFG_CUSTOM_SESSION' => 'ใช้บันทึกไดเรกทอรีเซสชันที่กำหนดเองสำหรับ SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b> โปรดแก้ไขข้อผิดพลาดต่อไปนี้ก่อนดำเนินการต่อ: </b>',
    'LBL_SITECFG_LOG_DIR' => 'บันทึกไดเรกทอรี',
    'LBL_SITECFG_SESSION_PATH' => 'โฟลเดอร์ Session Directory<br>(ต้องเปิดสิทธิ์ให้เขียนไฟล์ได้)',
    'LBL_SITECFG_SITE_SECURITY' => 'เลือกตัวเลือกความปลอดภัย',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'หากเลือกระบบจะตรวจสอบเวอร์ชันโปรแกรมที่ได้รับการตรวจสอบเป็นระยะ ๆ',
    'LBL_SITECFG_SUITE_UP' => 'ตรวจหาการอัพเดทโดยอัตโนมัติหรือไม่?',
    'LBL_SITECFG_TITLE' => 'การกำหนดค่าไซต์',
    'LBL_SITECFG_TITLE2' => 'ระบุผู้ดูแลระบบ',
    'LBL_SITECFG_SECURITY_TITLE' => 'ความปลอดภัยของไซต์',
    'LBL_SITECFG_URL' => 'ตัวอย่างของ URL SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'ส่งสถิติการใช้งานแบบไม่ประสงค์ออกนาม?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'หากเลือกไว้ SuiteCRM จะส่งสถิติ<b> ไม่ระบุชื่อ </b>เกี่ยวกับการติดตั้งของคุณไปยัง SuiteCRM Inc. ทุกครั้งที่ระบบของคุณตรวจสอบเวอร์ชันใหม่ๆข้อมูลนี้จะช่วยให้เราเข้าใจวิธีการใช้แอพพลิเคชันและแนะนำการปรับปรุงผลิตภัณฑ์',
    'LBL_SITECFG_URL_MSG' => 'ป้อน URL ที่จะใช้เพื่อเข้าถึงตัวอย่าง SuiteCRM หลังจากติดตั้ง URL นี้จะถูกใช้เป็นฐานสำหรับ URL ในหน้าแอ็พพลิเคชัน SuiteCRM URL ควรประกอบด้วยเว็บเซิร์ฟเวอร์หรือชื่อเครื่องหรือที่อยู่ IP',
    'LBL_SITECFG_SYS_NAME_MSG' => 'ป้อนชื่อสำหรับระบบของคุณ ชื่อนี้จะปรากฏในแถบชื่อเรื่องของเบราเซอร์เมื่อผู้ใช้เข้าเยี่ยมชมแอ็พพลิเคชัน SuiteCRM',
    'LBL_SITECFG_PASSWORD_MSG' => 'หลังจากการติดตั้งคุณจะต้องใช้ผู้ใช้ผู้ดูแลระบบ SuiteCRM (ชื่อผู้ใช้เริ่มต้น = ผู้ดูแลระบบ) เพื่อเข้าสู่ระบบในตัวอย่าง SuiteCRM ป้อนรหัสผ่านสำหรับผู้ใช้ผู้ดูแลระบบรายนี้ รหัสผ่านนี้สามารถเปลี่ยนแปลงได้หลังจากการล็อกอินครั้งแรก นอกจากนี้คุณยังสามารถป้อนชื่อผู้ใช้ผู้ดูแลระบบรายอื่นเพื่อใช้นอกเหนือจากค่าเริ่มต้นที่มีให้',
    'LBL_SITECFG_COLLATION_MSG' => 'เลือกการจัดเรียง (เรียงลำดับ) การตั้งค่าสำหรับระบบของคุณ การตั้งค่านี้จะสร้างตารางด้วยภาษาเฉพาะที่คุณใช้ ในกรณีที่ภาษาของคุณไม่จำเป็นต้องมีการตั้งค่าพิเศษโปรดใช้ค่าเริ่มต้น',
    'LBL_SPRITE_SUPPORT' => 'Sprite Support',
    'LBL_SYSTEM_CREDS' => 'ข้อมูลประจำตัวของระบบ',
    'LBL_SYSTEM_ENV' => 'สภาพแวดล้อมของระบบ',
    'LBL_SHOW_PASS' => 'แสดงรหัสผ่าน',
    'LBL_HIDE_PASS' => 'ซ่อนรหัสผ่าน',
    'LBL_HIDDEN' => '<i>(ซ่อน)</i>',
    'LBL_STEP1' => 'ขั้นตอนที่ 1 จาก 2 - ความต้องการเบื้องต้นสำหรับการติดตั้ง',
    'LBL_STEP2' => 'ขั้นตอนที่ 2 จาก 2 - การกำหนดค่า',
    'LBL_STEP' => 'ขั้นตอนที่',
    'LBL_TITLE_WELCOME' => 'ยินดีต้อนร้บสู่ SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'คุณพร้อมที่จะติดตั้งแล้ว?',
    'REQUIRED_SYS_COMP' => 'ส่วนประกอบระบบที่จำเป็น',
    'REQUIRED_SYS_COMP_MSG' =>
        'ก่อนที่คุณจะเริ่มต้นโปรดตรวจสอบว่าคุณมีคอมโพเนนต์ระบบต่อไปนี้เวอร์ชันที่สนับสนุน: <br>
                       <ul>
                       <li> ระบบการจัดการฐานข้อมูล / ฐานข้อมูล (ตัวอย่าง: MariaDB, MySQL หรือ SQL Server) </li>
                       <li> เว็บเซิร์ฟเวอร์ (Apache, IIS) </li>
                       </ul>
                       ปรึกษาเมทริกซ์ความเข้ากันได้ในหมายเหตุรุ่นสำหรับ
                       คอมโพเนนต์ระบบที่เข้ากันได้สำหรับรุ่น SuiteCRM ที่คุณกำลังติดตั้ง <br>',
    'REQUIRED_SYS_CHK' => 'ตรวจสอบระบบเริ่มต้น',
    'REQUIRED_SYS_CHK_MSG' =>
        'เมื่อคุณเริ่มกระบวนการติดตั้งระบบจะทำการตรวจสอบระบบบนเว็บเซิร์ฟเวอร์ที่มีไฟล์ SuiteCRM อยู่
                      ตรวจสอบให้แน่ใจว่าระบบได้รับการกำหนดค่าอย่างถูกต้องและมีส่วนประกอบที่จำเป็นทั้งหมด
                      เพื่อเสร็จสิ้นการติดตั้ง | <br><br>
                      ระบบจะตรวจสอบสิ่งต่อไปนี้ทั้งหมด: <br>
                      <ul>
                      <li> <b> รุ่น PHP </b> &#8211; ต้องเข้ากันได้กับแอปพลิเคชัน </li>
                      <li> <b> ตัวแปรเซสชัน </b> &#8211; ต้องทำงานอย่างถูกต้อง </li>
                      <li> <b> MB Strings </b> &#8211; ต้องติดตั้งและเปิดใช้งานใน php.ini </li>
                      <li> <b> การสนับสนุนฐานข้อมูล </b> &#8211; ต้องมีสำหรับ MariaDB, MySQL หรือ SQL Server </li>
                      <li> <b> Config.php </b> &#8211; ต้องมีอยู่และต้องมีสิทธิ์ที่เหมาะสมเพื่อให้สามารถเขียนได้ </li>
                      <li> ไฟล์ SuiteCRM ต่อไปนี้ต้องสามารถเขียนได้: <ul> <li> <b> / custom </li>
                      <li> / แคช </li>
                      <li> / โมดูล </li>
                      <li> / อัปโหลด </b> </li> </ul> </li> </ul>
                                  ถ้าการตรวจสอบล้มเหลวคุณจะไม่สามารถดำเนินการติดตั้งต่อไปได้
                                  ระบบจะแสดงข้อความแสดงข้อผิดพลาดอธิบายสาเหตุที่ระบบของคุณไม่ผ่านการตรวจสอบ
                                  หลังจากทำการเปลี่ยนแปลงที่จำเป็นแล้วคุณสามารถผ่านการตรวจสอบระบบอีกครั้งเพื่อดำเนินการติดตั้งต่อไป<br>',


    'REQUIRED_INSTALLTYPE' => 'ติดตั้งปกติ หรือกำหนดเอง',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'หลังจากตรวจสอบระบบแล้วคุณสามารถเลือกได้
                      การติดตั้งแบบปกติหรือแบบกำหนดเอง <br> <br>
                      สำหรับการติดตั้ง <b> ตามแบบฉบับ </b> และ <b> กำหนดเอง </b> โดยทั่วไปคุณจำเป็นต้องทราบข้อมูลต่อไปนี้ <br>
                      <ul>
                      <li> <b> ชนิดของฐานข้อมูล </b> ที่จะเก็บข้อมูล SuiteCRM <ul> <li> ฐานข้อมูลที่ใช้ร่วมกันได้
                      ประเภท: MariaDB, MySQL หรือ SQL Server <br> <br> </ li> </ ul> </ li>
                      <li> <b> ชื่อเว็บเซิร์ฟเวอร์ </b> หรือเครื่อง (โฮสต์) ที่มีฐานข้อมูลอยู่
                      <ul> <li> นี่อาจเป็น <i> localhost </i> หากฐานข้อมูลอยู่ในเครื่องคอมพิวเตอร์ของคุณหรืออยู่บนเว็บเซิร์ฟเวอร์หรือเครื่องเดียวกันเป็นไฟล์ SuiteCRM ของคุณ </li> <li></ul></li>
                      <li> <b> ชื่อฐานข้อมูล </b> ที่คุณต้องการใช้เพื่อจัดเก็บข้อมูล SuiteCRM </li>
                        <ul>
                          <li> คุณอาจมีฐานข้อมูลอยู่แล้วที่คุณต้องการใช้ ถ้า
                          คุณให้ชื่อของฐานข้อมูลที่มีอยู่ตารางในฐานข้อมูลจะ
                          ลดลงระหว่างการติดตั้งเมื่อกำหนดสกีมาสำหรับฐานข้อมูล SuiteCRM </li>
                          <li> หากคุณยังไม่มีฐานข้อมูลชื่อที่คุณระบุจะใช้สำหรับ
                          ฐานข้อมูลใหม่ที่สร้างขึ้นสำหรับอินสแตนซ์ระหว่างการติดตั้ง <br><br></li>
                        </ ul>
                      <li> <b> ชื่อผู้ใช้และรหัสผ่านของผู้ดูแลระบบฐานข้อมูล </b> <ul> <li> ผู้ดูแลระบบฐานข้อมูลควรสามารถสร้างตารางและผู้ใช้และเขียนข้อมูลลงในฐานข้อมูลได้ </li> <li> คุณอาจจำเป็นต้อง
                      ติดต่อผู้ดูแลระบบฐานข้อมูลของคุณสำหรับข้อมูลนี้ถ้าฐานข้อมูลเป็น
                      ไม่อยู่ในเครื่องคอมพิวเตอร์ของคุณและ / หรือถ้าคุณไม่ใช่ผู้ดูแลระบบฐานข้อมูล <br> <br> </ul> </li> </li>
                      <li> <b> ชื่อผู้ใช้ฐานข้อมูลและรหัสผ่าน SuiteCRM </b>
                      </ li>
                        <ul>
                          <li> ผู้ใช้อาจเป็นผู้ดูแลระบบฐานข้อมูลหรือคุณอาจระบุชื่อ
                          ผู้ใช้ฐานข้อมูลอื่นที่มีอยู่ </li>
                          <li> หากคุณต้องการสร้างผู้ใช้ฐานข้อมูลใหม่เพื่อจุดประสงค์นี้คุณจะ
                          สามารถระบุชื่อผู้ใช้และรหัสผ่านใหม่ระหว่างขั้นตอนการติดตั้ง,
                          และผู้ใช้จะถูกสร้างขึ้นระหว่างการติดตั้ง </li>
                        </ul> </ul> <p>

                      สำหรับการตั้งค่า <b> กำหนดเอง </b> คุณอาจจำเป็นต้องทราบข้อมูลต่อไปนี้: <br>
                      <ul>
                      <li> <b> URL ที่จะใช้ในการเข้าถึงอินสแตนซ์ SuiteCRM </b> หลังจากติดตั้ง
                      URL นี้ควรมีเว็บเซิร์ฟเวอร์หรือชื่อเครื่องหรือที่อยู่ IP <br> <br> </li>
                                  <li> [ไม่บังคับ] <b> เส้นทางไปยังไดเรกทอรีเซสชัน </b> หากคุณต้องการใช้แบบกำหนดเอง
                                  เซสชันสำหรับข้อมูล SuiteCRM เพื่อป้องกันข้อมูลเซสชันจาก
                                  เสี่ยงต่อการแชร์เซิร์ฟเวอร์ <br> <br> </li>
                                  <li> [ไม่บังคับ] <b> เส้นทางไปยังไดเรกทอรีบันทึกที่กำหนดเอง </b> หากคุณต้องการแทนที่ไดเรกทอรีเริ่มต้นสำหรับบันทึก SuiteCRM <br> <br> </[Optional][Optional][Optional][Optional] li>
                                  <li> [ไม่บังคับ] <b> รหัสแอปพลิเคชัน </ b> หากคุณต้องการแทนที่ข้อมูลที่สร้างขึ้นเอง
                                  ID ที่ทำให้แน่ใจได้ว่าเซสชันของอินสแตนซ์อื่น ๆ ที่ใช้งาน SuiteCRM ไม่ได้ใช้งาน <br> <br> </li>
                                  <li> <b> ชุดอักขระ </ b> ที่ใช้บ่อยที่สุดในภาษาของคุณ <br> <br> </li> </ ul>
                                  สำหรับข้อมูลเพิ่มเติมโปรดอ่านคู่มือการติดตั้ง                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'โปรดอ่านข้อมูลที่สำคัญต่อไปนี้ก่อนดำเนินการติดตั้ง ข้อมูลนี้จะช่วยให้คุณทราบว่าคุณพร้อมที่จะติดตั้งแอปพลิเคชันหรือไม่ในขณะนี้',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>เลือกภาษาของคุณ</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'ตัวช่วยสร้างการตั้งค่า',
    'LBL_WIZARD_TITLE' => 'SuiteCRM ตัวช่วยการติดตั้ง: ',
    'LBL_YES' => 'ถูกต้อง',

    'LBL_PATCHES_TITLE' => 'ติดตั้งแพทช์ล่าสุด',
    'LBL_MODULE_TITLE' => 'ติดตั้งชุดไฟล์ภาษา',
    'LBL_PATCH_1' => 'หากคุณต้องการข้ามขั้นตอนนี้ให้คลิกถัดไป',
    'LBL_PATCH_TITLE' => 'แพทช์ระบบ',
    'LBL_PATCH_READY' => 'แพทช์ต่อไปนี้พร้อมที่จะติดตั้งแล้ว:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM อาศัยเซสชัน PHP เพื่อเก็บข้อมูลที่สำคัญในขณะที่เชื่อมต่อกับเว็บเซิร์ฟเวอร์นี้ การติดตั้ง PHP ของคุณไม่มีข้อมูลเซสชันถูกกำหนดค่าอย่างถูกต้อง
<br> <br> การกำหนดคอนฟิกที่ผิดกันคือ <b> 'session.save_path' </b> คำสั่งไม่ได้ชี้ไปยังไดเร็กทอรีที่ถูกต้อง<br>
<br> โปรดแก้ไข <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>การกำหนดค่า PHP </a>ในไฟล์ php.ini ที่ด้านล่าง",
    'LBL_SESSION_ERR_TITLE' => 'ข้อผิดพลาดในการตั้งค่าเซสชัน PHP',
    'LBL_SYSTEM_NAME' => 'ชื่อระบบ',
    'LBL_COLLATION' => 'การตั้งค่า Collation',
    'LBL_REQUIRED_SYSTEM_NAME' => 'ระบุชื่อระบบสำหรับตัวอย่าง SuiteCRM',
    'LBL_PATCH_UPLOAD' => 'เลือกไฟล์แพทช์จากเครื่องคอมพิวเตอร์ของคุณ',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'ต้องใช้ Php เวอร์ชัน 5 หรือสูงกว่า',
    'LBL_MINIMUM_PHP_VERSION' => 'ต้องมีเวอร์ชัน Php ขั้นต่ำคือ 5.1.0 เวอร์ชัน Php ที่แนะนำคือ 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(เวอร์ชัน php ปัจจุบันของคุณคือ ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' เวอร์ชัน Php ที่แนะนำคือ 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'เปิดโหมด Php Backward Compatibility แล้ว ตั้งค่า zend.ze1_compatibility_mode เป็น Off เพื่อดำเนินการต่อ',
    'LBL_STREAM' => 'PHP อนุญาตให้ใช้สตรีม',

    'advanced_password_new_account_email' => array(
        'subject' => 'ข้อมูลบัญชีใหม่',
        'type' => 'ระบบ',
        'description' => 'แม่แบบนี้จะใช้เมื่อผู้ดูแลระบบส่งรหัสผ่านใหม่ให้กับผู้ใช้',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>นี่คือชื่อผู้ใช้และรหัสผ่านชั่วคราวของบัญชีของคุณ:</p><p>ชื่อผู้ใช้ : $contact_user_user_name </p><p>รหัสผ่าน : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>หลังจากที่คุณเข้าสู่ระบบโดยใช้รหัสผ่านข้างต้นคุณอาจจำเป็นต้องตั้งรหัสผ่านใหม่ให้เป็นทางเลือกหนึ่งของคุณเอง</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
นี่คือชื่อผู้ใช้และรหัสผ่านชั่วคราวของบัญชีของคุณ:
ชื่อผู้ใช้ : $contact_user_user_name
รหัสผ่าน : $contact_user_user_hash

$config_site_url',
        'name' => 'อีเมลรหัสผ่านที่สร้างโดยระบบ',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'รีเซ็ตรหัสผ่านบัญชีของคุณ',
        'type' => 'ระบบ',
        'description' => "แม่แบบนี้ใช้เพื่อส่งผู้ใช้ไปยังลิงก์เพื่อคลิกเพื่อรีเซ็ตรหัสผ่านบัญชีผู้ใช้",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>คุณเพิ่งร้องขอเมื่อ $contact_user_pwd_last_changed เพื่อให้สามารถรีเซ็ตรหัสผ่านบัญชีของคุณได้ </p><p>คลิกลิงก์ด้านล่างเพื่อรีเซ็ตรหัสผ่าน::</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
คุณเพิ่งขอให้ $contact_user_pwd_last_changed เพื่อให้สามารถรีเซ็ตรหัสผ่านบัญชีของคุณได้

คลิกลิงก์ด้านล่างเพื่อรีเซ็ตรหัสผ่าน:

$contact_user_link_guid',
        'name' => 'อีเมลลืมรหัสผ่าน',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'รหัสการตรวจสอบสิทธิ์แบบสองปัจจัย',
        'type' => 'ระบบ',
        'description' => "เทมเพลตนี้ใช้เพื่อส่งรหัสสำหรับการยืนยันตัวตนแบบสองปัจจัยให้กับผู้ใช้",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>รหัสสำหรับใช้งาน Two Factor Authentication code <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'รหัสการตรวจสอบสิทธิ์แบบสองปัจจัยคือ $code',
        'name' => 'รหัสตรวจสอบแบบสองปัจจัยทางเมล์',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"จาก" ชื่อ:',
    'LBL_FROM_ADDR' => '"จาก"ที่อยู่:',

    'LBL_WIZARD_SMTP_DESC' => 'ระบุบัญชีอีเมลที่จะใช้เพื่อส่งอีเมลเช่นการแจ้งเตือนการมอบหมายและรหัสผ่านผู้ใช้ใหม่ ผู้ใช้จะได้รับอีเมลจาก SuiteCRM ตามที่ส่งมาจากบัญชีอีเมลที่ระบุ',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'เลือกผู้ให้บริการอีเมล์:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'อื่นๆ',
    'LBL_MAIL_SMTP_SETTINGS' => 'ข้อมูลจำเพาะของเซิร์ฟเวอร์ SMTP',
    'LBL_MAIL_SMTPSERVER' => 'เซิร์ฟเวอร์ SMTP:',
    'LBL_MAIL_SMTPPORT' => 'พอร์ต SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'ใช้ SMTP แบบใส่รหัสผ่านหรือไม่',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'เปิดใช้งาน SMTP ผ่าน SSL หรือ TLS',
    'LBL_GMAIL_SMTPUSER' => 'ที่อยู่อีเมล Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'รหัสผ่าน Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'อนุญาตให้ผู้ใช้บัญชีนี้สำหรับอีเมลขาออก:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'เมื่อเลือกตัวเลือกนี้ผู้ใช้ทุกคนจะสามารถส่งอีเมลโดยใช้บัญชีอีเมลขาออกเดียวกันที่ใช้เพื่อส่งการแจ้งเตือนและการแจ้งเตือนของระบบ หากไม่ได้เลือกตัวเลือกนี้ผู้ใช้ยังคงสามารถใช้เซิร์ฟเวอร์อีเมลขาออกได้หลังจากแจ้งข้อมูลบัญชีของตนเองแล้ว',

    'LBL_YAHOOMAIL_SMTPPASS' => 'รหัสผ่าน yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ไอดี Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'เปลี่ยนรหัสผ่าน:',
    'LBL_EXCHANGE_SMTPUSER' => 'เปลี่ยนชื่อผู้ใช้:',
    'LBL_EXCHANGE_SMTPPORT' => 'เปลี่ยนเซิร์ฟเวอร์พอร์ต:',
    'LBL_EXCHANGE_SMTPSERVER' => 'เปลี่ยนเซิร์ฟเวอร์:',


    'LBL_MAIL_SMTPUSER' => 'ชื่อผู้ใช้ SMTP:',
    'LBL_MAIL_SMTPPASS' => 'รหัสผ่าน SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'การสร้างแบรนด์',
    'LBL_WIZARD_SYSTEM_DESC' => 'ระบุชื่อและโลโก้ขององค์กรเพื่อสร้างตราสินค้า SuiteCRM ของคุณ',
    'SYSTEM_NAME_WIZARD' => 'ชื่อ:',
    'SYSTEM_NAME_HELP' => 'นี่คือชื่อที่แสดงในแถบชื่อเรื่องของเบราเซอร์ของคุณ',
    'NEW_LOGO' => 'เลือกโลโก้:',
    'NEW_LOGO_HELP' => 'รูปแบบไฟล์รูปภาพสามารถเป็นได้ทั้งแบบ. png หรือ. jpg ความสูงสูงสุดคือ 170px และความกว้างสูงสุดคือ 450px รูปภาพที่อัพโหลดซึ่งใหญ่กว่าในทุกทิศทางจะถูกปรับขนาดให้เป็นมิติสูงสุดเหล่านี้',
    'COMPANY_LOGO_UPLOAD_BTN' => 'อัพโหลด',
    'CURRENT_LOGO' => 'โลโก้ปัจจุบัน:',
    'CURRENT_LOGO_HELP' => 'โลโก้นี้แสดงอยู่ตรงกลางหน้าจอการเข้าสู่ระบบของแอปพลิเคชัน SuiteCRM',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'เลือกสถานการณ์',
    'LBL_WIZARD_SCENARIO_DESC' => 'เพื่อให้สามารถปรับแต่งโมดูลที่แสดงขึ้นอยู่กับความต้องการของคุณ โมดูลแต่ละโมดูลสามารถเปิดใช้งานได้หลังจากติดตั้งโดยใช้หน้าการบริหาร',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'ไม่มีสถานการณ์ที่กำหนดไว้ในไฟล์การตั้งค่า (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'การตั้งที่อยู่ของระบบ',
    'LBL_WIZARD_LOCALE_DESC' => 'ระบุว่าคุณต้องการให้ข้อมูลใน SuiteCRM แสดงตามสถานที่ตั้งทางภูมิศาสตร์ของคุณอย่างไร การตั้งค่าที่คุณระบุในที่นี้จะเป็นค่าเริ่มต้น ผู้ใช้จะสามารถตั้งค่ากำหนดเองได้',
    'LBL_DATE_FORMAT' => 'รูปแบบวัน:',
    'LBL_TIME_FORMAT' => 'รูปแบบเวลา:',
    'LBL_TIMEZONE' => 'โซนเวลา:',
    'LBL_LANGUAGE' => 'ภาษา:',
    'LBL_CURRENCY' => 'สกุลเงิน:',
    'LBL_CURRENCY_SYMBOL' => 'สัญลักษณ์สกุลเงิน:',
    'LBL_CURRENCY_ISO4217' => 'รหัสสกุลเงิน ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'แบ่ง 1000s:',
    'LBL_DECIMAL_SEP' => 'สัญลักษณ์ทศนิยม:',
    'LBL_NAME_FORMAT' => 'รูปแบบชื่อ:',
    'UPLOAD_LOGO' => 'กรุณารอสักครู่ กำลังอัปโหลดโลโก้...',
    'ERR_UPLOAD_FILETYPE' => 'ไม่รองรับไฟล์ที่เลือก กรุณาอัพโหลดเป็น a jpeg หรือ png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'ข้อผิดพลาดในการอัปโหลดแฟ้มที่ไม่รู้จัก',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'ไฟล์ที่อัพโหลดเกิน upload_max_filesize directive in php.ini. คำสั่งใน php.ini',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'ไฟล์อัปโหลดเกิน MAX_FILE_SIZE คำสั่งที่ระบุไว้ใน HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'อัปโหลดไฟล์เพียงบางส่วนเท่านั้น',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'ไม่มีการอัปโหลดไฟล์.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'ไม่มีโฟลเดอร์ชั่วคราว',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'ล้มเหลวในการเขียนไฟล์ลงดิสก์',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'ส่วนขยายของ PHP หยุดการอัพโหลดไฟล์ PHP ไม่มีวิธีการตรวจสอบว่าส่วนขยายใดทำให้ไฟล์อัพโหลดหยุดลง',

    'LBL_INSTALL_PROCESS' => 'การติดตั้ง...',

    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'ERR_ADMIN_EMAIL' => 'อีเมลผู้ดูแลไม่ถูกต้อง',
    'ERR_SITE_URL' => 'ต้องการไซต์ URL',

    'STAT_CONFIGURATION' => 'ตั้งค่าความสัมพันธ์...',
    'STAT_CREATE_DB' => 'สร้างฐานข้อมูล...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'สร้างการตั้งค่าเริ่มต้น...',
    'STAT_INSTALL_FINISH' => 'ติดตั้งเสร็จสิ้น...',
    'STAT_INSTALL_FINISH_LOGIN' => 'ตั้งค่าเสร็จสิ้น, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'โปรดยอมรับใบอนุญาตก่อน',

    'LBL_MORE_OPTIONS_TITLE' => 'ตัวเลือกเพิ่มเติม',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'ข้อผิดพลาดของฐานข้อมูล',
    'LBL_OLD_PHP' => 'ตรวจพบเวอร์ชัน PHP เก่าแล้ว!',
    'LBL_OLD_PHP_MSG' => 'เวอร์ชัน PHP ที่แนะนำให้ติดตั้ง SuiteCRM คือ %s <br />เวอร์ชัน PHP ขั้นต่ำที่ต้องการคือ %s<br />คุณกำลังใช้ PHP เวอร์ชัน %s ซึ่งก็คือ EOL: <a href="http://php.net /eol.php">http://php.net/eol.php</a><br />โปรดพิจารณาอัปเกรดเวอร์ชัน PHP ของคุณ ',
    'LBL_OLD_PHP_OK' => 'ฉันตระหนักถึงความเสี่ยงและต้องการดำเนินการต่อ',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'ผู้รับผิดชอบ',
    'LBL_DBCONFIG_MSG3_LABEL' => 'ชื่อฐานข้อมูล',
    'LBL_DBCONFIG_MSG3' => 'ชื่อของฐานข้อมูลที่จะมีข้อมูลสำหรับอินสแตนซ์ SuiteCRM ที่คุณกำลังจะติดตั้ง:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'ชื่อโฮสต์',
    'LBL_DBCONFIG_MSG2' => 'ชื่อของเว็บเซิร์ฟเวอร์หรือเครื่อง (โฮสต์) ที่ฐานข้อมูลตั้งอยู่ (เช่น www.mydomain.com) หากติดตั้งในเครื่อง ควรใช้ \'localhost\' ดีกว่าใช้ \'127.0.0.1\' ด้วยเหตุผลด้านประสิทธิภาพ',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'ชื่อผู้ใช้และรหัสผ่านของผู้ดูแลระบบฐานข้อมูลที่สามารถสร้างตารางฐานข้อมูลและผู้ใช้และผู้ที่สามารถเขียนข้อมูลลงในฐานข้อมูลเป็นสิ่งจำเป็นเพื่อที่จะตั้งค่าฐานข้อมูล SuiteCRM'
);
