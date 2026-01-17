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
    'LBL_MODULE_NAME' => 'Үйл ажиллагаа',
    'LBL_MODULE_TITLE' => 'Үйл ажиллагаа: Үндсэн',
    'LBL_SEARCH_FORM_TITLE' => 'Үйл ажиллагаа хайх',
    'LBL_LIST_FORM_TITLE' => 'Үйл ажиллагаа жагсаах',
    'LBL_LIST_SUBJECT' => 'Гарчиг',
    'LBL_OVERVIEW' => 'Тойм', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Ажлууд', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Уулзалтууд', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Дуудлагууд', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Е-мэйлүүд', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Тэмдэглэлүүд', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Хэвлэх', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Уулзалт',
    'LBL_CALL_TYPE' => 'Дуудлага',
    'LBL_EMAIL_TYPE' => 'Е-мэйл',
    'LBL_NOTE_TYPE' => 'Тэмдэглэл',
    'LBL_DATA_TYPE_START' => 'Эхлэх:',
    'LBL_DATA_TYPE_SENT' => 'Илгээсэн:',
    'LBL_DATA_TYPE_MODIFIED' => 'Өөрчилсөн:',
    'LBL_LIST_CONTACT' => 'Харилцагч',
    'LBL_LIST_RELATED_TO' => 'Хамааралтай',
    'LBL_LIST_DATE' => 'Огноо',
    'LBL_LIST_CLOSE' => 'Хаах',
    'LBL_SUBJECT' => 'Гарчиг:',
    'LBL_STATUS' => 'Төлөв:',
    'LBL_LOCATION' => 'Байрлал:',
    'LBL_DATE_TIME' => 'Эхлэх өдөр цаг:',
    'LBL_DATE' => 'Эхлэх огноо:',
    'LBL_TIME' => 'Эхлэх цаг:',
    'LBL_DURATION' => 'Үргэжилэх хугацаа:',
    'LBL_HOURS_MINS' => '(цаг/минут)',
    'LBL_CONTACT_NAME' => 'Харилцагчийн Нэр: ',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LNK_NEW_CALL' => 'Дуудлага бүртгэх',
    'LNK_NEW_MEETING' => 'Уулзалт товлох',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'LNK_NEW_NOTE' => 'Тэмдэглэл эсвэл аттачмент нэмэх',
    'LNK_NEW_EMAIL' => 'Архивлагдсан мэйл үүсгэх',
    'LNK_CALL_LIST' => 'Дуудлага харах',
    'LNK_MEETING_LIST' => 'Уулзалт харах',
    'LNK_TASK_LIST' => 'Ажил харах',
    'LNK_NOTE_LIST' => 'Тэмдэглэл харах',
    'LBL_DELETE_ACTIVITY' => 'Та энэ үйл ажиллагааг устгахад итгэлтэй байна?',
    'ERR_DELETE_RECORD' => 'Та харилцагч устгахын тулд бичлэгийн дугаарыг оруулах ёстой.',
    'LBL_INVITEE' => 'Урьсан хүмүүс',
    'LBL_LIST_DIRECTION' => 'Чиглэл',
    'LBL_DIRECTION' => 'Чиглэл',
    'LNK_NEW_APPOINTMENT' => 'Шинэ уулзалт',
    'LNK_VIEW_CALENDAR' => 'Календарь харах',
    'LBL_OPEN_ACTIVITIES' => 'Үйл ажиллагааг нээх',
    'LBL_HISTORY' => 'Түүх',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Ажил үүсгэх',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Ажил үүсгэх',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Уулзалт товлох',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Уулзалт товлох',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Дуудлага бүртгэх',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Тайлбар, аттачмент үүсгэх',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Тайлбар, аттачмент үүсгэх',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Мэйл Архивлах',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Мэйл Архивлах',
    'LBL_LIST_STATUS' => 'Төлөв',
    'LBL_LIST_DUE_DATE' => 'Дуусах огноо',
    'LBL_LIST_LAST_MODIFIED' => 'Сүүлд өөрчилсөн',
    'LNK_IMPORT_CALLS' => 'Дуудлага импортлох',
    'LNK_IMPORT_MEETINGS' => 'Уулзалт импортлох',
    'LNK_IMPORT_TASKS' => 'Ажил импортлох',
    'LNK_IMPORT_NOTES' => 'Тэмдэглэл импортлох',
    'LBL_ACCEPT_THIS' => 'Зөвшөөрөх эсэх?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Үйл ажиллагааг нээх',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Хариуцагч',

    'LBL_ACCEPT' => 'Зөвшөөрөх' /*for 508 compliance fix*/,
);
