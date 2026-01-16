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
    'LBL_TOOL_TIP_BOX_TITLE' => 'علم بصیرت کی تجاویز',
    'LBL_TOOL_TIP_TITLE' => 'عنوان: ',
    'LBL_TOOL_TIP_BODY' => 'جسم: ',
    'LBL_TOOL_TIP_INFO' => 'اضافی معلومات: ',
    'LBL_TOOL_TIP_USE' => 'استعمال کے طور پر: ',
    'LBL_SUGGESTION_BOX' => 'تجاویز',
    'LBL_NO_SUGGESTIONS' => 'کوئی مشورہ نہیں',
    'LBL_RESOLUTION_BUTTON' => 'قرارداد',
    'LBL_SUGGESTION_BOX_STATUS' => 'حیثیت',
    'LBL_SUGGESTION_BOX_TITLE' => 'عنوان',
    'LBL_SUGGESTION_BOX_REL' => 'متعلقہ',

    'LBL_ACCOUNT_ID' => 'اکاؤنٹ کی شناخت',
    'LBL_ACCOUNT_NAME' => 'اکاؤنٹ کا نام:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_BUGS_SUBPANEL_TITLE' => 'مسئلے',
    'LBL_CASE_NUMBER' => 'کیس نمبر:',
    'LBL_CASE' => 'معاملہ:',
    'LBL_CONTACT_NAME' => 'رابطے کا نام:',
    'LBL_CONTACT_ROLE' => 'کردار:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'معاملے',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_INVITEE' => 'رابطے',
    'LBL_MEMBER_OF' => 'کهاتے',
    'LBL_MODULE_NAME' => 'معاملے',
    'LBL_MODULE_TITLE' => 'مقدمات: گھر',
    'LBL_NEW_FORM_TITLE' => 'نیا کیس',
    'LBL_NUMBER' => 'نمبر:',
    'LBL_PRIORITY' => 'ترجیح:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'دستاویزات',
    'LBL_RESOLUTION' => 'ہمت:',
    'LBL_SEARCH_FORM_TITLE' => 'کیس تلاش',
    'LBL_STATUS' => 'حیثیت:',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'مقرر کردہ صارف',
    'LBL_LIST_ACCOUNT_NAME' => 'اکاؤنٹ کا نام',
    'LBL_LIST_ASSIGNED' => 'مقرر کرنا',
    'LBL_LIST_CLOSE' => 'بند کریں',
    'LBL_LIST_FORM_TITLE' => 'کیس کی فہرست',
    'LBL_LIST_LAST_MODIFIED' => 'آخری ردوبدل',
    'LBL_LIST_MY_CASES' => 'میرا کھلا مقدمہ',
    'LBL_LIST_NUMBER' => 'نیوم.',
    'LBL_LIST_PRIORITY' => 'ترجیح',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LIST_SUBJECT' => 'موضوع',

    'LNK_CASE_LIST' => 'کیس دیکھیں',
    'LNK_NEW_CASE' => 'کیس بنائیں',
    'LBL_LIST_DATE_CREATED' => 'تاریخ بنائی گئی ہے',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_TYPE' => 'قسم',
    'LBL_WORK_LOG' => 'کام کی لاگت',
    'LNK_IMPORT_CASES' => 'درآمدی مقدمات',

    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_MODIFIED_USER' => 'صارف میں کچھ تبدیلیاں کرنا',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'منصوبے',
    'LBL_CASE_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'تازہ ترین معلومات - ٹیکسٹ', //Field for Case updates with text only
    'LBL_INTERNAL' => 'اندرونی تازہ کاری',
    'LBL_AOP_CASE_UPDATES' => 'کیس کی تازہ کاری',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'کیس تازہ ترین موضوعات',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'سب کو ختم کرو',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'تمام توسیع کریں',
    'LBL_AOP_CASE_ATTACHMENTS' => 'منسلکات:',

    'LBL_AOP_CASE_EVENTS' => 'کیس تقریبات',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'کیس منسلک:',
    'LBL_ADD_CASE_FILE' => 'فائل شامل کریں',
    'LBL_REMOVE_CASE_FILE' => 'فائل کو ہٹا دیں',
    'LBL_SELECT_CASE_DOCUMENT' => 'دستاویز منتخب کریں',
    'LBL_CLEAR_CASE_DOCUMENT' => 'دستاویز صاف کریں',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'اندرونی سی آر ایم دستاویز',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'بیرونی فائل',
    'LBL_CONTACT_CREATED_BY_NAME' => 'رابطے سے پیدا',
    'LBL_CONTACT_CREATED_BY' => 'کی طرف سے بنایا گیا',
    'LBL_CASE_UPDATE_FORM' => 'اپ ڈیٹس - منسلک فارم', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
