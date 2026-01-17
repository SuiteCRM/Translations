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
    'LBL_ADD_DOCUMENT' => 'ایک دستاویز شامل کریں',
    'LBL_ADD_FILE' => 'ایک فائل شامل کریں',
    'LBL_ATTACHMENTS' => 'منسلکات',
    'LBL_BODY' => 'جسم: ',
    'LBL_CLOSE' => 'بند کریں:',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_EDIT_ALT_TEXT' => 'ہموار متھن کو اشاعت کرنا',
    'LBL_EMAIL_ATTACHMENT' => 'منسلک ای میل',
    'LBL_HIDE_ALT_TEXT' => 'Hide Plain Text',
    'LBL_HTML_BODY' => 'ایچ ٹی ایم ایل گروہ',
    'LBL_INSERT_VARIABLE' => 'متغیر داخل کریں:',
    'LBL_INSERT_URL_REF' => 'یو آر ایل حوالہ درج کریں',
    'LBL_INSERT_TRACKER_URL' => 'ٹریکر یو آر ایل داخل کریں:',
    'LBL_INSERT' => 'داخل کریں',
    'LBL_LIST_DATE_MODIFIED' => 'آخری ردوبدل',
    'LBL_LIST_DESCRIPTION' => 'تفصیل',
    'LBL_LIST_FORM_TITLE' => 'ای میل سانچے کی فہرست',
    'LBL_LIST_NAME' => 'نام',
    'LBL_MODULE_NAME' => 'ای میل سانچے',
    'LBL_MODULE_TITLE' => 'ای میل سانچے: گھر',
    'LBL_NAME' => 'نام:',
    'LBL_NEW_FORM_TITLE' => 'ای میل سانچہ بنائیں',
    'LBL_PUBLISH' => 'شائع کریں:',
    'LBL_RELATED_TO' => 'سے متعلق:',
    'LBL_SEARCH_FORM_TITLE' => 'ای میل سانچے تلاش',
    'LBL_SHOW_ALT_TEXT' => 'مسطح متن پيش کرنا',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_SUITE_DOCUMENT' => 'دستاویز',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'متن بدن',
    'LBL_USERS' => 'صارفین',

    'LNK_EMAIL_TEMPLATE_LIST' => 'ای میل ٹیمپلیٹس دیکھیں',
    'LNK_IMPORT_NOTES' => 'نوٹس درآمد کریں',
    'LNK_NEW_EMAIL_TEMPLATE' => 'ای میل سانچہ بنائیں',
    'LNK_NEW_EMAIL' => 'محفوظ شدہ ای میل',
    'LNK_NEW_SEND_EMAIL' => 'پیغام لکھنا',
    'LNK_SENT_EMAIL_LIST' => 'بھیجیں ای میل',
    'LNK_VIEW_CALENDAR' => 'آج کے دن',
    // for Inbox
    'LBL_NEW' => 'نیا',
    'LNK_MY_DRAFTS' => 'میرا دستکاری',
    'LNK_MY_INBOX' => 'میرا ای میل',
    'LBL_TEXT_ONLY' => 'متن صرف',
    'LBL_SEND_AS_TEXT' => 'صرف متن بھیجیں',
    'LBL_ACCOUNT' => 'کهاتے',
    'LBL_FROM_NAME' => 'نام کی زریں',
    'LBL_PLAIN_TEXT' => 'سادہ متن',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا',
    'LBL_PUBLISHED' => 'اشاعت',
    'LNK_VIEW_MY_INBOX' => 'میرا ای میل دیکھیں',
    'LBL_ASSIGNED_TO_ID' => 'مقرر کرنا',
    'LBL_EDIT_LAYOUT' => 'لے آؤٹ میں ترمیم کریں' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'منتخب کرنا' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'صاف کرنا' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'قسم',
    'LBL_WIDTH' => 'چوڑائی ڈیفالٹ',
    'LNK_IMPORT_CAMPAIGNS' => 'درآمد کی مہم',
);
