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
    'ERR_DELETE_RECORD' => 'اکاؤنٹ کو ختم کرنے کیلئے آپ کو ایک ریکارڈ نمبر کی وضاحت کرنا ضروری ہے.',
    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت:',
    'LBL_CASE_ID' => 'کیس کی شناخت:',
    'LBL_CLOSE' => 'بند کریں:',
    'LBL_CONTACT_ID' => 'رابطہ کی شناخت:',
    'LBL_CONTACT_NAME' => 'رابطہ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'خطوط',
    'LBL_DESCRIPTION' => 'خط',
    'LBL_EMAIL_ADDRESS' => 'ای میل اڈریس:',
    'LBL_EMAIL_ATTACHMENT' => 'منسلک ای میل',
    'LBL_FILE_MIME_TYPE' => 'مائم کی قسم',
    'LBL_FILE_URL' => 'فائل یوآرایل',
    'LBL_FILENAME' => 'منسلک:',
    'LBL_LEAD_ID' => 'قیادت کی شناخت:',
    'LBL_LIST_CONTACT_NAME' => 'رابطہ',
    'LBL_LIST_DATE_MODIFIED' => 'آخری ردوبدل',
    'LBL_LIST_FILENAME' => 'منسلکہ',
    'LBL_LIST_FORM_TITLE' => 'نوٹ کی فہرست',
    'LBL_LIST_RELATED_TO' => 'سے متعلق',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LIST_CONTACT' => 'رابطہ',
    'LBL_MODULE_NAME' => 'خطوط',
    'LBL_MODULE_TITLE' => 'نوٹ: ہوم',
    'LBL_NEW_FORM_TITLE' => 'نوٹ بنائیں یا منسلک شامل کریں',
    'LBL_NOTE_STATUS' => 'خط',
    'LBL_NOTE_SUBJECT' => 'موضوع:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'منسلکات',
    'LBL_NOTE' => 'نوٹ:',
    'LBL_OPPORTUNITY_ID' => 'موقع کی شناخت:',
    'LBL_PARENT_ID' => 'پیرنٹ کی شناخت:',
    'LBL_PARENT_TYPE' => 'والدین کی طرح',
    'LBL_PHONE' => 'فون:',
    'LBL_PORTAL_FLAG' => 'پورٹل میں ڈسپلے؟',
    'LBL_EMBED_FLAG' => 'ای میل میں شامل کریں؟',
    'LBL_PRODUCT_ID' => 'مصنوعات کی شناخت:',
    'LBL_QUOTE_ID' => 'اقتباس کی شناخت:',
    'LBL_RELATED_TO' => 'سے متعلق:',
    'LBL_SEARCH_FORM_TITLE' => 'نوٹ تلاش کریں',
    'LBL_STATUS' => 'حیثیت',
    'LBL_SUBJECT' => 'موضوع:',
    'LNK_IMPORT_NOTES' => 'نوٹس درآمد کریں',
    'LNK_NEW_NOTE' => 'نوٹ یا منسلک بنائیں',
    'LNK_NOTE_LIST' => 'نوٹس دیکھیں',
    'LBL_MEMBER_OF' => 'کا رکن:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_REMOVING_ATTACHMENT' => 'منسلک ہٹانا...',
    'ERR_REMOVING_ATTACHMENT' => 'منسلک کو ہٹانے میں ناکام...',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا',
    'LBL_MODIFIED_BY' => 'کی طرف سے ترمیم',
    'LBL_SEND_ANYWAYS' => 'اس ای میل کا کوئی مضمون نہی ہے. ویسے بھی بھیجیں / محفوظ کریں?',
    'LBL_NOTE_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'میرے نوٹس',
    'LBL_EDITLAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'پہلا نام',
    'LBL_LAST_NAME' => 'آخری نام',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'سنبھالنے',
    'LBL_DESCENDING' => 'نزولی',
);
