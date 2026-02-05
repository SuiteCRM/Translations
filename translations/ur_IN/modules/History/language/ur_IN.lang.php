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
    'LBL_MODULE_NAME' => 'تاریخ',
    'LBL_MODULE_TITLE' => 'History: Home',
    'LBL_SEARCH_FORM_TITLE' => 'History Search',
    'LBL_LIST_FORM_TITLE' => 'تاریخ',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_CONTACT' => 'رابطہ',
    'LBL_LIST_RELATED_TO' => 'متعلقہ سے',
    'LBL_LIST_DATE' => 'تاریخ',
    'LBL_LIST_CLOSE' => 'بند کیجیے',
    'LBL_SUBJECT' => 'موضوع:',
    'LBL_STATUS' => 'حیثیت:',
    'LBL_LOCATION' => 'مقام:',
    'LBL_DATE_TIME' => 'شروع کی تاریخ اور وقت:',
    'LBL_DATE' => 'شروع تاریخ:',
    'LBL_TIME' => 'شروع کرنے کا وقت:',
    'LBL_DURATION' => 'دورانیہ:',
    'LBL_HOURS_MINS' => '(گھنٹے/منٹ)',
    'LBL_CONTACT_NAME' => 'رابطہ کا نام: ',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LNK_NEW_CALL' => 'لاگ کال',
    'LNK_NEW_MEETING' => 'تَرتيب کار اجلاس',
    'LNK_NEW_TASK' => 'ٹاسک بنائیں',
    'LNK_NEW_NOTE' => 'نوٹ یا منسلک بنائیں',
    'LNK_NEW_EMAIL' => 'محفوظ شدہ ای میل',
    'LNK_CALL_LIST' => 'تار',
    'LNK_MEETING_LIST' => 'ملاقاتیں',
    'LNK_TASK_LIST' => 'کام',
    'LNK_NOTE_LIST' => 'خطوط',
    'ERR_DELETE_RECORD' => 'اکاؤنٹ ختم کرنے کے لئے ایک ریکارڈ نمبر مخصوص ہونا ضروری ہے.',
    'LBL_INVITEE' => 'مدعو',
    'LBL_LIST_DIRECTION' => 'سمت',
    'LBL_DIRECTION' => 'سمت',
    'LNK_NEW_APPOINTMENT' => 'نئی تقرر کردہ ملاقات',
    'LNK_VIEW_CALENDAR' => 'آج',
    'LBL_OPEN_ACTIVITIES' => 'کھلی سرگرمیاں',
    'LBL_HISTORY' => 'تاریخ',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'ٹاسک بنائیں',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'ٹاسک بنائیں',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'تَرتيب کار اجلاس',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'تَرتيب کار اجلاس',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'لاگ کال',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'نوٹ یا منسلک بنائیں',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'نوٹ یا منسلک بنائیں',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'محفوظ شدہ ای میل',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'محفوظ شدہ ای میل',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LIST_DUE_DATE' => 'منتخب شدہ تاریخ',
    'LBL_LIST_LAST_MODIFIED' => 'آخری ردوبدل',
    'LNK_IMPORT_NOTES' => 'نوٹس درآمد کیجیے',
    'LBL_ACCEPT_THIS' => 'قبول کیجیے؟',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'تاریخ',

    'LBL_CATEGORY' => 'زمرہ جات',
    'LBL_LIST_CATEGORY' => 'زمرہ جات',
);
