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
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_ACCOUNT_ID' => '客戶編號:',
    'LBL_CASE_ID' => '案例編號:',
    'LBL_CLOSE' => '關閉:',
    'LBL_CONTACT_ID' => '聯絡人編號:',
    'LBL_CONTACT_NAME' => '聯絡人:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '備註',
    'LBL_DESCRIPTION' => '備註',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'LBL_EMAIL_ATTACHMENT' => '電子郵件附件',
    'LBL_FILE_MIME_TYPE' => 'Mime類型',
    'LBL_FILE_URL' => '文件網址',
    'LBL_FILENAME' => '附件:',
    'LBL_LEAD_ID' => '潛在客戶 ID:',
    'LBL_LIST_CONTACT_NAME' => '聯絡人',
    'LBL_LIST_DATE_MODIFIED' => '最新修改',
    'LBL_LIST_FILENAME' => '附件',
    'LBL_LIST_FORM_TITLE' => '備忘錄列表',
    'LBL_LIST_RELATED_TO' => '相關',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_CONTACT' => '聯絡人',
    'LBL_MODULE_NAME' => '備註',
    'LBL_MODULE_TITLE' => '備忘: 首頁',
    'LBL_NEW_FORM_TITLE' => '新增備忘錄',
    'LBL_NOTE_STATUS' => '備註',
    'LBL_NOTE_SUBJECT' => '主旨:',
    'LBL_NOTES_SUBPANEL_TITLE' => '附件',
    'LBL_NOTE' => '備忘:',
    'LBL_OPPORTUNITY_ID' => '商業機會編號:',
    'LBL_PARENT_ID' => '上級ID:',
    'LBL_PARENT_TYPE' => '父類類型',
    'LBL_PHONE' => '電話:',
    'LBL_PORTAL_FLAG' => '在門戶網站中顯示?',
    'LBL_EMBED_FLAG' => '嵌入到電子郵件中?',
    'LBL_PRODUCT_ID' => '產品編號:',
    'LBL_QUOTE_ID' => '報價編號:',
    'LBL_RELATED_TO' => '相關:',
    'LBL_SEARCH_FORM_TITLE' => '備忘錄搜尋',
    'LBL_STATUS' => '狀態',
    'LBL_SUBJECT' => '主旨:',
    'LNK_IMPORT_NOTES' => '導入備忘錄',
    'LNK_NEW_NOTE' => '創建備忘或附件',
    'LNK_NOTE_LIST' => '查看備忘',
    'LBL_MEMBER_OF' => '附屬於:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責的使用者',
    'LBL_REMOVING_ATTACHMENT' => '移除附件中...',
    'ERR_REMOVING_ATTACHMENT' => '移除附件失敗...',
    'LBL_CREATED_BY' => '建立人',
    'LBL_MODIFIED_BY' => '修改人',
    'LBL_SEND_ANYWAYS' => '沒有電子郵件主題，確定發送或保存嗎？',
    'LBL_NOTE_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => '我的備忘錄',
    'LBL_EDITLAYOUT' => '編輯佈局' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => '名',
    'LBL_LAST_NAME' => '姓',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_DELETED' => '已刪除',
    'LBL_FILE_CONTENTS' => '檔案內容',

    'LBL_ASCENDING' => '升序',
    'LBL_DESCENDING' => '降序',
);
