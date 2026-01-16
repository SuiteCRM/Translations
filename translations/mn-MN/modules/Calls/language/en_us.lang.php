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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Дуудлагууд',
    'LBL_MODULE_TITLE' => 'Дуудлага: Үндсэн',
    'LBL_SEARCH_FORM_TITLE' => 'Дуудлага хайх',
    'LBL_LIST_FORM_TITLE' => 'Дуудлагын жагсаалт',
    'LBL_NEW_FORM_TITLE' => 'Дуудлага товлох',
    'LBL_LIST_CLOSE' => 'Хаах',
    'LBL_LIST_SUBJECT' => 'Гарчиг',
    'LBL_LIST_CONTACT' => 'Харилцагч',
    'LBL_LIST_RELATED_TO' => 'Хамааралтай',
    'LBL_LIST_RELATED_TO_ID' => 'Related to ID',
    'LBL_LIST_DATE' => 'Эхлэх огноо',
    'LBL_LIST_DIRECTION' => 'Чиглэл',
    'LBL_SUBJECT' => 'Гарчиг:',
    'LBL_REMINDER' => 'Сануулагч:',
    'LBL_CONTACT_NAME' => 'Харилцагч (хүн):',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_STATUS' => 'Төлөв:',
    'LBL_DIRECTION' => 'Чиглэл:',
    'LBL_DATE' => 'Эхлэх огноо:',
    'LBL_DURATION' => 'Үргэжилэх хугацаа:',
    'LBL_DURATION_HOURS' => 'Үргэлжилсэн цаг:',
    'LBL_DURATION_MINUTES' => 'Үргэлжилсэн минут:',
    'LBL_HOURS_MINUTES' => '(цаг/минут)',
    'LBL_DATE_TIME' => 'Эхлэх өдөр цаг:',
    'LBL_TIME' => 'Эхлэх цаг:',
    'LBL_HOURS_ABBREV' => 'ц',
    'LBL_MINSS_ABBREV' => 'м',
    'LNK_NEW_CALL' => 'Дуудлага бүртгэх',
    'LNK_NEW_MEETING' => 'Уулзалт товлох',
    'LNK_CALL_LIST' => 'Дуудлага харах',
    'LNK_IMPORT_CALLS' => 'Дуудлага импортлох',
    'ERR_DELETE_RECORD' => 'Аккаунт устгахын тулд бүртгэлийн дугаарыг оруулна уу.',
    'LBL_INVITEE' => 'Урьсан хүмүүс',
    'LBL_RELATED_TO' => 'Холбоотой:',
    'LNK_NEW_APPOINTMENT' => 'Дуудлага товлох',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_ADD_INVITEE' => 'Хүн урих',
    'LBL_NAME' => 'Нэр',
    'LBL_FIRST_NAME' => 'Өөрийн Нэр',
    'LBL_LAST_NAME' => 'Овог Нэр',
    'LBL_EMAIL' => 'Е-мэйл',
    'LBL_PHONE' => 'Утас',
    'LBL_REMINDER_POPUP' => 'Цонх гарч ирэх',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Уригдсан бүгдэд мэйлээр илгээх',
    'LBL_EMAIL_REMINDER' => 'Мэйл сануулга',
    'LBL_EMAIL_REMINDER_TIME' => 'Мэйл сануулгын цаг',
    'LBL_SEND_BUTTON_TITLE' => 'Хадгалж урилга илгээх',
    'LBL_SEND_BUTTON_LABEL' => 'Хадгалж урилга илгээх',
    'LBL_DATE_END' => 'Дуусах огноо',
    'LBL_REMINDER_TIME' => 'Сануулагчийн цаг',
    'LBL_EMAIL_REMINDER_SENT' => 'Сануулагч мэйл илгээв',
    'LBL_SEARCH_BUTTON' => 'Хайлт',
    'LBL_ADD_BUTTON' => 'Нэмэх',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Дуудлагууд',
    'LNK_SELECT_ACCOUNT' => 'Аккаунт сонго',
    'LNK_NEW_ACCOUNT' => 'Шинэ харилцагч',
    'LNK_NEW_OPPORTUNITY' => 'Шинэ боломж',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Сонирхогчид',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_USERS_SUBPANEL_TITLE' => 'Хэрэглэгчид',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Гишүүнчлэл',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Тэмдэглэлүүд',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_LIST_MY_CALLS' => 'Миний дуудлага',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагч',
    'NOTICE_DURATION_TIME' => 'Үргэлжлэх хугацаа 0-с их байх ёстой',
    'LBL_CALL_INFORMATION' => 'Тойм', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Устгах',
    'LBL_ACCEPT_STATUS' => 'Урилга зөвшөөрсөн төлөв',
    'LBL_ACCEPT_LINK' => 'Link зөвшөөрөх',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Хүн урих',
    'LBL_CREATE_CONTACT' => 'Харилцагч хүнээр',
    'LBL_CREATE_LEAD' => 'Сонирхогсон байгууллага хүнээр',
    'LBL_CREATE_AND_ADD' => 'Үүсгэж нэмэх',
    'LBL_CANCEL_CREATE_INVITEE' => 'Цуцлах',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'Та $module үүсгэх эрхгүй байна',

    'LBL_REPEAT_TYPE' => 'Давтах хэлбэр',
    'LBL_REPEAT_INTERVAL' => 'Давтах давтамж',
    'LBL_REPEAT_DOW' => 'Давтах гариг',
    'LBL_REPEAT_UNTIL' => 'Хүртэл давтах',
    'LBL_REPEAT_COUNT' => 'Давтах тоо',
    'LBL_REPEAT_PARENT_ID' => 'Давтах эцгийн ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Сануулагч',
    'LBL_REMINDERS_ACTIONS' => 'Үйлдэл:',
    'LBL_REMINDERS_POPUP' => 'Цонх гарч ирэх',
    'LBL_REMINDERS_EMAIL' => 'Уригдсан хүмүүст мэйлд',
    'LBL_REMINDERS_WHEN' => 'Хэзээ:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Сэрүүлэг устгах',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Бүх уридгсан хүмүүсийг нэмэх',
    'LBL_REMINDERS_ADD_REMINDER' => 'Сэрүүлэг нэмэх',

    'LBL_RESCHEDULE' => 'Дахин төлөвлөх',
    'LBL_RESCHEDULE_COUNT' => 'Залгасан оролдлого',
    'LBL_RESCHEDULE_DATE' => 'Огноо',
    'LBL_RESCHEDULE_REASON' => 'Шалтгаан',
    'LBL_RESCHEDULE_ERROR1' => 'Зөв огноо оруулна уу',
    'LBL_RESCHEDULE_ERROR2' => 'Шалтгааныг сонгоно уу',
    'LBL_RESCHEDULE_PANEL' => 'Дахин төлөвлөх',
    'LBL_RESCHEDULE_HISTORY' => 'Залгасан оролдлогын түүх',
    'LBL_CANCEL' => 'Цуцлах',
    'LBL_SAVE' => 'Хадгалах',

    'LBL_CALLS_RESCHEDULE' => 'Дуудлага Дахин Төлөвлөх',
    'LBL_LIST_STATUS'=>'Төлөв',
    'LBL_LIST_DATE_MODIFIED'=>'Өөрчилсөн',
    'LBL_LIST_DUE_DATE'=>'Дуусах огноо',
    'LBL_RESCHEDULED_BY'=>'-',
);
