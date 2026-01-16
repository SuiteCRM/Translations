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
    'LBL_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_CAMPAIGN' => '市場活動:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_ALT_ADDRESS_CITY' => '[其它地址]城市:',
    'LBL_ALT_ADDRESS_COUNTRY' => '[其它地址]國家:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '[其它地址]郵遞區號:',
    'LBL_ALT_ADDRESS_STATE' => '[其它地址]省份:',
    'LBL_ALT_ADDRESS_STREET_2' => '[其它地址]街道2',
    'LBL_ALT_ADDRESS_STREET_3' => '[其它地址]街道3',
    'LBL_ALT_ADDRESS_STREET' => '[其它地址]街道:',
    'LBL_ALTERNATE_ADDRESS' => '其它地址:',
    'LBL_ALT_ADDRESS' => '其它地址:',
    'LBL_ANY_ADDRESS' => '其它地址：',
    'LBL_ANY_EMAIL' => '任何電子郵件:',
    'LBL_ANY_PHONE' => '任何電話:',
    'LBL_ASSIGNED_TO_NAME' => '負責人:',
    'LBL_ASSIGNED_TO_ID' => '負責的使用者',
    'LBL_ASSISTANT_PHONE' => '助理電話:',
    'LBL_ASSISTANT' => '助理:',
    'LBL_BIRTHDATE' => '生日:',
    'LBL_CITY' => '城市:',
    'LBL_CAMPAIGN_ID' => '市場活動ID',
    'LBL_CONTACT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => '聯絡人姓名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '聯絡人-商業機會:',
    'LBL_CONTACT_ROLE' => '角色:',
    'LBL_CONTACT' => '聯絡人:',
    'LBL_COUNTRY' => '國家:',
    'LBL_CREATED_ACCOUNT' => '新增的客戶',
    'LBL_CREATED_CALL' => '創建新的通話',
    'LBL_CREATED_CONTACT' => '創建了新的聯絡人',
    'LBL_CREATED_MEETING' => '新增的會議',
    'LBL_CREATED_OPPORTUNITY' => '新增的商業機會',
    'LBL_DATE_MODIFIED' => '修改日期:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '連絡人',
    'LBL_DEPARTMENT' => '部門:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => '直接報告人',
    'LBL_DO_NOT_CALL' => '不電聯:',
    'LBL_DUPLICATE' => '可能重複的聯絡人',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'LBL_EMAIL_OPT_OUT' => '退出郵件列表:',
    'LBL_EXISTING_ACCOUNT' => '使用了一個已經存在的客戶',
    'LBL_EXISTING_CONTACT' => '使用了一個已經存在的聯絡人',
    'LBL_EXISTING_OPPORTUNITY' => '使用了一個已經存在的商業機會',
    'LBL_FAX_PHONE' => '傳真:',
    'LBL_FIRST_NAME' => '名:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_HOME_PHONE' => '家庭電話:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => '導入vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '從匯入的vCard自動新增一個新的聯絡人。',
    'LBL_INVALID_EMAIL' => '無效的電子郵件:',
    'LBL_INVITEE' => '直接報告人',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LEAD_SOURCE' => '潛在客戶來源:',
    'LBL_LIST_ACCEPT_STATUS' => '接收狀態',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_CONTACT_NAME' => '聯絡人姓名',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵件',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_LIST_FORM_TITLE' => '聯絡人列表',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_PHONE' => '辦公電話',
    'LBL_LIST_TITLE' => '職稱',
    'LBL_MOBILE_PHONE' => '行動電話:',
    'LBL_MODIFIED' => '修改人編號:',
    'LBL_MODULE_NAME' => '連絡人',
    'LBL_MODULE_TITLE' => '聯絡人: 首頁',
    'LBL_NAME' => '名稱:',
    'LBL_NEW_FORM_TITLE' => '新聯絡人',
    'LBL_NOTE_SUBJECT' => '備忘錄主題',
    'LBL_OFFICE_PHONE' => '辦公電話:',
    'LBL_OPP_NAME' => '商業機會名稱:',
    'LBL_OPPORTUNITY_ROLE_ID' => '商業機會角色編號:',
    'LBL_OPPORTUNITY_ROLE' => '商業機會角色',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它電子郵件:',
    'LBL_OTHER_PHONE' => '其它電話:',
    'LBL_PHONE' => '電話:',
    'LBL_PORTAL_APP' => '門戶網站應用程序:',
    'LBL_PORTAL_INFORMATION' => '門戶網站資訊',
    'LBL_PORTAL_NAME' => '門戶網站名稱:',
    'LBL_STREET' => '街道',
    'LBL_POSTAL_CODE' => '郵遞區號:',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]國家:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]郵遞區號:',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址] 州/省:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要住址]街道2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要住址]街道3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道:',
    'LBL_PRIMARY_ADDRESS' => '主要地址:',
    'LBL_PRODUCTS_TITLE' => '產品',
    'LBL_REPORTS_TO_ID' => '彙報給ID:',
    'LBL_REPORTS_TO' => '彙報給:',
    'LBL_RESOURCE_NAME' => '資源名稱',
    'LBL_SALUTATION' => '稱謂:',
    'LBL_SAVE_CONTACT' => '保存聯絡人',
    'LBL_SEARCH_FORM_TITLE' => '聯絡人搜尋',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '選擇打勾的聯絡人',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '選擇打勾的聯絡人',
    'LBL_STATE' => '州或省:',
    'LBL_SYNC_CONTACT' => '同步Outlook&reg;:',
    'LBL_PROSPECT_LIST' => '目標列表',
    'LBL_TITLE' => '職稱:',
    'LNK_CONTACT_LIST' => '查看聯絡人',
    'LNK_IMPORT_VCARD' => '從vCard新增',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'LNK_NEW_APPOINTMENT' => '安排會議',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_CASE' => '創建案例',
    'LNK_NEW_CONTACT' => '創建聯絡人',
    'LNK_NEW_EMAIL' => '存檔電子郵件',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_NEW_NOTE' => '新增備忘錄',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LNK_NEW_TASK' => '創建任務',
    'LNK_SELECT_ACCOUNT' => "選擇帳戶",
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '新增新商業機會需要一個客戶\n請新增一個新的或是選擇一個已經存在的',
    'NTC_REMOVE_CONFIRMATION' => '您確定要從這個案例中移除這個聯絡人嗎?',

    'LBL_LEADS_SUBPANEL_TITLE' => '潛在客戶',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商業機會',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文件',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => '複製主要地址',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => '複製其它地址',

    'LBL_CASES_SUBPANEL_TITLE' => '案例',
    'LBL_BUGS_SUBPANEL_TITLE' => '程式錯誤',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_PROJECTS_RESOURCES' => '專案資源',
    'LBL_CAMPAIGNS' => '市場活動',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市場活動',
    'LBL_LIST_CITY' => '城市',
    'LBL_LIST_STATE' => '州或省',
    'LBL_HOMEPAGE_TITLE' => '我的聯絡人',
    'LBL_OPPORTUNITIES' => '商業機會',

    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    'LNK_IMPORT_CONTACTS' => '匯入聯絡人',

    // SNIP
    'LBL_USER_SYNC' => '使用者同步',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => '事件',

    'LBL_AOP_CASE_UPDATES' => '案件更新',
    'LBL_CREATE_PORTAL_USER' => '創建Portal使用者',
    'LBL_ENABLE_PORTAL_USER' => '啟用Portal使用者',
    'LBL_DISABLE_PORTAL_USER' => '禁用Portal使用者',
    'LBL_CREATE_PORTAL_USER_FAILED' => '創建Portal使用者失敗',
    'LBL_ENABLE_PORTAL_USER_FAILED' => '啟用Portal使用者失敗',
    'LBL_DISABLE_PORTAL_USER_FAILED' => '禁用Portal使用者失敗',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => '創建的Portal使用者',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => '啟用的Portal使用者',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => '禁用的Portal使用者',
    'LBL_NO_JOOMLA_URL' => '未指定Portal網址',
    'LBL_PORTAL_USER_TYPE' => 'Portal使用者類別',
    'LBL_PORTAL_ACCOUNT_DISABLED' => '帳戶已禁用',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla 帳戶 ID',

    'LBL_AOS_CONTRACTS' => '合約',
    'LBL_AOS_INVOICES' => '發票',
    'LBL_AOS_QUOTES' => '報價單',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => '來自專案標題的專案聯絡人',
    'LBL_LAST_MEETING' => '最近一次開會的時間 :',
    'LBL_LAST_CALL' => '最近一次電訪的時間 :',
    'LBL_LAST_EMAIL' => '最近一次寄信的時間 :',
    'LBL_NO_INTERACTION' => '最近接觸的聯絡人.',

    'LBL_LIST_INVITE_STATUS' => '邀請狀態',
);
