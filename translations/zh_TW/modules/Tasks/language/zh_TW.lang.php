<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Tasks',
    'LBL_MODULE_TITLE' => '任務:首頁',
    'LBL_SEARCH_FORM_TITLE' => ' 任務搜尋',
    'LBL_LIST_FORM_TITLE' => '任務列表',
    'LBL_NEW_FORM_TITLE' => '新增任務',
    'LBL_LIST_CLOSE' => '結束',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RELATED_TO' => '關聯到',
    'LBL_LIST_DUE_DATE' => '到期時間',
    'LBL_LIST_DUE_TIME' => '截止時間',
    'LBL_SUBJECT' => '主旨:',
    'LBL_STATUS' => 'Status:',
    'LBL_DUE_DATE' => '完成日期:',
    'LBL_DUE_TIME' => '開始時間:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DUE_DATE_AND_TIME' => '截止日期和時間:',
    'LBL_START_DATE_AND_TIME' => 'Start Date & Time:',
    'LBL_START_DATE' => 'Start Date:',
    'LBL_LIST_START_DATE' => '開始日期',
    'LBL_START_TIME' => 'Start Time:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_NONE' => 'None',
    'LBL_CONTACT' => 'Contact:',
    'LBL_EMAIL_ADDRESS' => '電子郵件:',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL' => '電子郵件地址:',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_NAME' => '名稱:',
    'LBL_CONTACT_NAME' => '聯絡人姓名 ',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_DATE_DUE_FLAG' => '無截止日期',
    'LBL_DATE_START_FLAG' => '無開始日期',
    'LBL_LIST_MY_TASKS' => '我要完成的任務',
    'LNK_NEW_TASK' => '新增任務',
    'LNK_TASK_LIST' => '任務',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_LIST_DATE_MODIFIED' => '修改日期',
    'LBL_CONTACT_ID' => '聯絡人編號:',
    'LBL_PARENT_ID' => '父類編號:',
    'LBL_CONTACT_PHONE' => '聯繫電話:',
    'LBL_PARENT_TYPE' => '上級類型:',
    'LBL_TASK_INFORMATION' => '任務總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => '備註',
    //For export labels
    'LBL_DATE_DUE' => '截止日期',
    'LBL_RELATED_TO' => 'Related to:',
);
