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
    'LBL_MODULE_NAME' => 'Ажлууд',
    'LBL_MODULE_TITLE' => ' Tasks: Home',
    'LBL_SEARCH_FORM_TITLE' => ' Task Search',
    'LBL_LIST_FORM_TITLE' => ' Task List',
    'LBL_NEW_FORM_TITLE' => ' Create Task',
    'LBL_LIST_CLOSE' => 'Хаах',
    'LBL_LIST_SUBJECT' => 'Гарчиг',
    'LBL_LIST_CONTACT' => 'Харилцагч',
    'LBL_LIST_PRIORITY' => 'Эрэмбэ',
    'LBL_LIST_RELATED_TO' => 'Хамааралтай',
    'LBL_LIST_DUE_DATE' => 'Дуусах огноо',
    'LBL_LIST_DUE_TIME' => 'Due Time',
    'LBL_SUBJECT' => 'Гарчиг:',
    'LBL_STATUS' => 'Төлөв:',
    'LBL_DUE_DATE' => 'Due Date:',
    'LBL_DUE_TIME' => 'Due Time:',
    'LBL_PRIORITY' => 'Эрэмбэ:',
    'LBL_DUE_DATE_AND_TIME' => 'Due Date & Time:',
    'LBL_START_DATE_AND_TIME' => 'Эхлэх өдөр цаг:',
    'LBL_START_DATE' => 'Эхлэх огноо:',
    'LBL_LIST_START_DATE' => 'Эхлэх огноо',
    'LBL_START_TIME' => 'Эхлэх цаг:',
    'DATE_FORMAT' => '(онон-са-өд)',
    'LBL_NONE' => 'Байхгүй',
    'LBL_CONTACT' => 'Харилцагч (хүн):',
    'LBL_EMAIL_ADDRESS' => 'Мэйл Хаяг:',
    'LBL_PHONE' => 'Утас:',
    'LBL_EMAIL' => 'Мэйл Хаяг:',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_NAME' => 'Нэр:',
    'LBL_CONTACT_NAME' => 'Харилцагч. Х Нэр ',
    'LBL_LIST_STATUS' => 'Төлөв',
    'LBL_DATE_DUE_FLAG' => 'Дуусах огноогүй',
    'LBL_DATE_START_FLAG' => 'Эхлэх огноогүй',
    'LBL_LIST_MY_TASKS' => 'Миний нээлттэй ажлууд',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'LNK_TASK_LIST' => 'Ажил харах',
    'LNK_IMPORT_TASKS' => 'Ажил импортлох',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч:',
    'LBL_LIST_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_CONTACT_ID' => 'Харилцагч (хүн) ID:',
    'LBL_PARENT_ID' => 'Эцгийн ID:',
    'LBL_CONTACT_PHONE' => 'Харилцах утас:',
    'LBL_PARENT_TYPE' => 'Эцгийн төрөл:',
    'LBL_TASK_INFORMATION' => 'Ажлын тойм харах', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Тэмдэглэлүүд',
    //For export labels
    'LBL_DATE_DUE' => 'Дуусах',
    'LBL_RELATED_TO' => 'Холбоотой:',
);
