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
    'LBL_ADD_DOCUMENT' => 'Add a Document',
    'LBL_ADD_FILE' => 'Add a file',
    'LBL_ATTACHMENTS' => 'Хавсралт',
    'LBL_BODY' => 'Гол хэсэг:',
    'LBL_CLOSE' => 'Хаах:',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_EDIT_ALT_TEXT' => 'Энэ текст засах',
    'LBL_EMAIL_ATTACHMENT' => 'Мэйлын хавсралт',
    'LBL_HIDE_ALT_TEXT' => 'Hide Plain Text',
    'LBL_HTML_BODY' => 'HTML Body',
    'LBL_INSERT_VARIABLE' => 'Insert Variable:',
    'LBL_INSERT_URL_REF' => 'Insert URL Reference',
    'LBL_INSERT_TRACKER_URL' => 'Tracker URL оруулах:',
    'LBL_INSERT' => 'Оруулах',
    'LBL_LIST_DATE_MODIFIED' => 'Сүүлд өөрчилсөн',
    'LBL_LIST_DESCRIPTION' => 'Тайлбар',
    'LBL_LIST_FORM_TITLE' => 'Email Templates List',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_MODULE_NAME' => 'Email Templates',
    'LBL_MODULE_TITLE' => 'Мэйлийн загвар: Үндсэн',
    'LBL_NAME' => 'Нэр:',
    'LBL_NEW_FORM_TITLE' => 'Мэйл загвар (темплэйт) үүсгэх',
    'LBL_PUBLISH' => 'Нийтлэх:',
    'LBL_RELATED_TO' => 'Холбоотой:',
    'LBL_SEARCH_FORM_TITLE' => 'Мэйл загвар хайх',
    'LBL_SHOW_ALT_TEXT' => 'Энгийн тескстээр үзүүлэх',
    'LBL_SUBJECT' => 'Гарчиг:',
    'LBL_SUITE_DOCUMENT' => 'Баримт',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'Үндсэн текст',
    'LBL_USERS' => 'Хэрэглэгчид',

    'LNK_EMAIL_TEMPLATE_LIST' => 'Мэйл загвар (темплэйт) харах',
    'LNK_IMPORT_NOTES' => 'Тэмдэглэл импортлох',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Мэйл загвар (темплэйт) үүсгэх',
    'LNK_NEW_EMAIL' => 'Мэйл Архивлах',
    'LNK_NEW_SEND_EMAIL' => 'Мэйл бичих',
    'LNK_SENT_EMAIL_LIST' => 'Илгээсэн мэйлүүд',
    'LNK_VIEW_CALENDAR' => 'Өнөөдөр',
    // for Inbox
    'LBL_NEW' => 'Шинэ',
    'LNK_MY_DRAFTS' => 'Миний ноорог',
    'LNK_MY_INBOX' => 'Миний мэйл',
    'LBL_TEXT_ONLY' => 'Зөвхөн текст',
    'LBL_SEND_AS_TEXT' => 'Зөвхөн текстээр илгээх',
    'LBL_ACCOUNT' => 'Байгууллага',
    'LBL_FROM_NAME' => 'Илгээгчийн нэр',
    'LBL_PLAIN_TEXT' => 'Энгийн текст',
    'LBL_CREATED_BY' => 'Үүсгэсэн',
    'LBL_PUBLISHED' => 'Нийтлэгдсэн',
    'LNK_VIEW_MY_INBOX' => 'Өөрийн мэйл үзэх',
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагч',
    'LBL_EDIT_LAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'Сонгох' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Цэвэрлэх' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'Төрөл',
    'LBL_WIDTH' => 'Хуудасны өргөн',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);
