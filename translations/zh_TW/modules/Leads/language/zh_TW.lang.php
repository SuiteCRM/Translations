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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => '要刪除潛在客戶必須指定記錄編號。',
    'LBL_ACCOUNT_DESCRIPTION' => '客戶描述',
    'LBL_ACCOUNT_ID' => '客戶編號',
    'LBL_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_ALT_ADDRESS_CITY' => '[其它住址]城市',
    'LBL_ALT_ADDRESS_COUNTRY' => '[其他地址]國家',
    'LBL_ALT_ADDRESS_POSTALCODE' => '[其它地址]郵遞區號',
    'LBL_ALT_ADDRESS_STATE' => '[其它地址]省份',
    'LBL_ALT_ADDRESS_STREET_2' => '[其它地址]街道2',
    'LBL_ALT_ADDRESS_STREET_3' => '[其它地址]街道3',
    'LBL_ALT_ADDRESS_STREET' => '[其它地址]街道',
    'LBL_ALTERNATE_ADDRESS' => '其它地址:',
    'LBL_ALT_ADDRESS' => '其它地址:',
    'LBL_ANY_ADDRESS' => '其它地址：',
    'LBL_ANY_EMAIL' => '任何電子郵件:',
    'LBL_ANY_PHONE' => '任何電話:',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ASSIGNED_TO_ID' => '負責人',
    'LBL_CITY' => '城市:',
    'LBL_CONTACT_ID' => '聯絡人編號',
    'LBL_CONTACT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => '潛在客戶姓名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潛在客戶-商業機會:',
    'LBL_CONTACT_ROLE' => '角色:',
    'LBL_CONTACT' => '潛在客戶:',
    'LBL_CONVERTED_ACCOUNT' => '已轉換的客戶:',
    'LBL_CONVERTED_CONTACT' => '已轉換的聯絡人:',
    'LBL_CONVERTED_OPP' => '已轉換的商業機會:',
    'LBL_CONVERTED' => '已轉換',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '轉換潛在客戶',
    'LBL_CONVERTLEAD' => '轉換潛在客戶',
    'LBL_CONVERTLEAD_WARNING' => '警告: 您正在轉換的潛在客戶的狀態是"已轉換"。 客戶或者聯絡人的記錄可能已經通過這個潛在客戶創建過了。 如果您希望繼續轉換，請點擊儲存按鈕。如果不進行轉換，請點擊取消按鈕。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' 相關聯絡人: ',
    'LBL_COUNTRY' => '國家:',
    'LBL_CREATED_NEW' => '創建了新紀錄 ',
    'LBL_CREATED_ACCOUNT' => '新增的客戶',
    'LBL_CREATED_CALL' => '創建新的通話',
    'LBL_CREATED_CONTACT' => '創建了新的聯絡人',
    'LBL_CREATED_MEETING' => '新增的會議',
    'LBL_CREATED_OPPORTUNITY' => '新增的商業機會',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潛在客戶',
    'LBL_DEPARTMENT' => '部門:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_DO_NOT_CALL' => '不電聯:',
    'LBL_DUPLICATE' => '可能有重覆的潛在客戶',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'LBL_EMAIL_OPT_OUT' => '退出郵件列表:',
    'LBL_EXISTING_ACCOUNT' => '使用了一個已經存在的客戶',
    'LBL_EXISTING_CONTACT' => '使用了一個已經存在的聯絡人',
    'LBL_EXISTING_OPPORTUNITY' => '使用了一個已經存在的商業機會',
    'LBL_FAX_PHONE' => '傳真:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_HOME_PHONE' => '家庭電話:',
    'LBL_IMPORT_VCARD' => '導入vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '通過導入vCard，自動新增潛在客戶。',
    'LBL_INVALID_EMAIL' => '無效的電子郵件:',
    'LBL_INVITEE' => '直接報告人',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潛在客戶來源說明:',
    'LBL_LEAD_SOURCE' => '潛在客戶來源:',
    'LBL_LIST_ACCEPT_STATUS' => '接收狀態',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_CONTACT_NAME' => '潛在客戶姓名',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_DATE_ENTERED' => '建立日期',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵件',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_LIST_FORM_TITLE' => '潛在客戶列表',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潛在客戶來源說明',
    'LBL_LIST_LEAD_SOURCE' => '潛在客戶來源',
    'LBL_LIST_MY_LEADS' => '我的潛在客戶',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_PHONE' => '辦公電話',
    'LBL_LIST_REFERED_BY' => '推薦人',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_TITLE' => '職稱',
    'LBL_MOBILE_PHONE' => '行動電話:',
    'LBL_MODULE_NAME' => '潛在客戶',
    'LBL_MODULE_TITLE' => '潛在客戶:首頁',
    'LBL_NAME' => '名稱:',
    'LBL_NEW_FORM_TITLE' => '新增潛在客戶',
    'LBL_OFFICE_PHONE' => '辦公電話:',
    'LBL_OPP_NAME' => '商業機會名稱:',
    'LBL_OPPORTUNITY_AMOUNT' => '商業機會金額:',
    'LBL_OPPORTUNITY_ID' => '商業機會編號:',
    'LBL_OPPORTUNITY_NAME' => '商業機會名稱:',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它電子郵件:',
    'LBL_OTHER_PHONE' => '其它電話:',
    'LBL_PHONE' => '電話:',
    'LBL_PORTAL_APP' => '門戶網站應用程序',
    'LBL_PORTAL_INFORMATION' => '門戶網站資訊',
    'LBL_PORTAL_NAME' => '門戶網站名稱:',
    'LBL_POSTAL_CODE' => '郵遞區號:',
    'LBL_STREET' => '街道',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]國家',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]郵遞區號',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址] 州/省',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要住址]街道2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要住址]街道3',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道',
    'LBL_PRIMARY_ADDRESS' => '主要地址:',
    'LBL_REFERED_BY' => '推薦人:',
    'LBL_REPORTS_TO_ID' => '彙報給ID',
    'LBL_REPORTS_TO' => '彙報給:',
    'LBL_SALUTATION' => '稱謂',
    'LBL_MODIFIED' => '修改人',
    'LBL_CREATED' => '建立人',
    'LBL_SEARCH_FORM_TITLE' => '潛在客戶搜尋',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '選擇打勾的潛在客戶',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '選擇打勾的潛在客戶',
    'LBL_STATE' => '州或省:',
    'LBL_STATUS_DESCRIPTION' => '狀態說明:',
    'LBL_STATUS' => '狀態:',
    'LBL_TITLE' => '職稱:',
    'LNK_IMPORT_VCARD' => '從vCard新增',
    'LNK_LEAD_LIST' => '潛在客戶',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'LNK_NEW_APPOINTMENT' => '安排會議',
    'LNK_NEW_CONTACT' => '創建聯絡人',
    'LNK_NEW_LEAD' => '新增潛在客戶',
    'LNK_NEW_NOTE' => '新增備忘錄',
    'LNK_NEW_TASK' => '創建任務',
    'LNK_NEW_CASE' => '創建案例',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LNK_SELECT_ACCOUNTS' => ' <b>或者</b> 選擇客戶',
    'LNK_SELECT_CONTACTS' => ' <b>或者</b> 選擇聯絡人',
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',
    'NTC_REMOVE_CONFIRMATION' => '您確定要從這個案例移除這個潛在客戶?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市場活動',
    'LBL_CAMPAIGN' => '市場活動:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責的使用者',
    'LBL_PROSPECT_LIST' => '目標列表',
    'LBL_CAMPAIGN_LEAD' => '市場活動',
    'LBL_BIRTHDATE' => '生日:',
    'LBL_ASSISTANT_PHONE' => '助理電話',
    'LBL_ASSISTANT' => '助理',
    'LBL_CREATED_USER' => '創建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_CAMPAIGNS' => '市場活動',
    'LBL_CONVERT_MODULE_NAME' => '模組',
    'LBL_CONVERT_REQUIRED' => '必須',
    'LBL_CONVERT_SELECT' => '允許選項',
    'LBL_CONVERT_COPY' => '拷貝數據',
    'LBL_CONVERT_EDIT' => '編輯',
    'LBL_CONVERT_DELETE' => '刪除',
    'LBL_CONVERT_ADD_MODULE' => '添加模組',
    'LBL_CREATE' => '建立',
    'LBL_SELECT' => ' <b>或者</b> 選擇',
    'LBL_WEBSITE' => '網站',
    'LNK_IMPORT_LEADS' => '導入潛在客戶',
//Convert lead tooltips
    'LBL_MODULE_TIP' => '將創建記錄的模組。',
    'LBL_REQUIRED_TIP' => '在轉化潛在客戶前，必須先創建或者選擇這些模組。',
    'LBL_COPY_TIP' => '選中該選項，在創建新紀錄時，將把欄位名相同的數據從潛在客戶複製到目標模組。',
    'LBL_SELECTION_TIP' => '轉換的過程中，模組中的聯絡人關聯欄位，將首先嘗試查找而不是創建新的聯絡人。',
    'LBL_EDIT_TIP' => '修改轉化潛在客戶界面。',
    'LBL_DELETE_TIP' => '把模組從轉換佈局中移除。',

    'LBL_ACTIVITIES_MOVE' => '把活動轉移到',
    'LBL_ACTIVITIES_COPY' => '把活動複製到',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => '市場活動ID',
    'LBL_EDITLAYOUT' => '編輯佈局' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => '輸入日期' /*for 508 compliance fix*/,
    'LBL_LOADING' => '載入中' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '編輯' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => '事件',
);
