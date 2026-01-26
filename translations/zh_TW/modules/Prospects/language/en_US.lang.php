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
    'LBL_MODULE_NAME' => '目標',
    'LBL_MODULE_ID' => '目標',
    'LBL_INVITEE' => '直接報告人',
    'LBL_MODULE_TITLE' => '目標: 首頁',
    'LBL_SEARCH_FORM_TITLE' => '目標搜尋',
    'LBL_LIST_FORM_TITLE' => '目標列表',
    'LBL_NEW_FORM_TITLE' => '新目標',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_LIST_TITLE' => '職稱',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵件',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_FIRST_NAME' => '名',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ASSIGNED_TO_ID' => '負責人:',
    'LBL_CAMPAIGN_ID' => '市場活動ID',
    'LBL_EXISTING_ACCOUNT' => '使用了一個已經存在的客戶',
    'LBL_CREATED_ACCOUNT' => '新增的客戶',
    'LBL_CREATED_CALL' => '創建新的通話',
    'LBL_CREATED_MEETING' => '新增的會議',
    'LBL_NAME' => '名稱:',
    'LBL_PROSPECT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => '更多資訊',
    'LBL_FIRST_NAME' => '名:',
    'LBL_OFFICE_PHONE' => '辦公電話:',
    'LBL_ANY_PHONE' => '任何電話:',
    'LBL_PHONE' => '電話:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_MOBILE_PHONE' => '行動電話:',
    'LBL_HOME_PHONE' => '家庭電話:',
    'LBL_OTHER_PHONE' => '其它電話:',
    'LBL_FAX_PHONE' => '傳真:',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道:',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]國家:',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址] 州/省:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]郵遞區號:',
    'LBL_ALT_ADDRESS_STREET' => '[其它地址]街道:',
    'LBL_ALT_ADDRESS_CITY' => '[其它地址]城市:',
    'LBL_ALT_ADDRESS_COUNTRY' => '[其它地址]國家:',
    'LBL_ALT_ADDRESS_STATE' => '[其它地址]省份:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '[其它地址]郵遞區號:',
    'LBL_TITLE' => '職稱:',
    'LBL_DEPARTMENT' => '部門:',
    'LBL_BIRTHDATE' => '生日:',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它電子郵件:',
    'LBL_ANY_EMAIL' => '任何電子郵件:',
    'LBL_ASSISTANT' => '助理:',
    'LBL_ASSISTANT_PHONE' => '助理電話:',
    'LBL_DO_NOT_CALL' => '不電聯:',
    'LBL_EMAIL_OPT_OUT' => '退出郵件列表:',
    'LBL_PRIMARY_ADDRESS' => '主要地址:',
    'LBL_ALTERNATE_ADDRESS' => '其它地址:',
    'LBL_ANY_ADDRESS' => '其它地址：',
    'LBL_CITY' => '城市:',
    'LBL_STATE' => '州或省:',
    'LBL_POSTAL_CODE' => '郵遞區號:',
    'LBL_COUNTRY' => '國家:',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_OPP_NAME' => '商業機會名稱:',
    'LBL_IMPORT_VCARD' => '導入vCard',
    'LBL_IMPORT_VCARDTEXT' => '從匯入的vCard自動新增一個新的聯絡人。',
    'LBL_DUPLICATE' => '可能重複的目標',
    'MSG_SHOW_DUPLICATES' => '您將要創建的目標記錄可能有重複的目標記錄已經存在。下面列出了包含類似名稱的目標記錄。<br>按一下創建目標以繼續創建此新的目標，或選擇下面列出的現有目標。',
    'MSG_DUPLICATE' => '本次創建將會複製一個已有帳戶. 您或者從以下列表中<br>選擇了一個帳戶或者點擊保存按鈕再次保存了前一次創建帳戶時輸入的數據.',
    'LNK_IMPORT_VCARD' => '從vCard創建',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LNK_NEW_CASE' => '創建案例',
    'LNK_NEW_NOTE' => '創建備忘或附件',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_EMAIL' => '存檔電子郵件',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_NEW_TASK' => '創建任務',
    'LNK_NEW_APPOINTMENT' => '安排會議',
    'LNK_IMPORT_PROSPECTS' => '導入目標',
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',
    'NTC_REMOVE_CONFIRMATION' => '您確定要從這個案例中移除這個聯絡人嗎?',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_SALUTATION' => '稱謂',
    'LBL_CREATED_OPPORTUNITY' => '新增的商業機會',
    'LNK_SELECT_ACCOUNT' => "選擇帳戶",
    'LNK_NEW_PROSPECT' => '新增目標',
    'LNK_PROSPECT_LIST' => '目標',
    'LNK_NEW_CAMPAIGN' => '新增市場活動',
    'LNK_CAMPAIGN_LIST' => '市場活動',
    'LNK_NEW_PROSPECT_LIST' => '新增目標列表',
    'LNK_PROSPECT_LIST_LIST' => '銷售前景列表',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '選擇已勾選的目標',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '選擇已勾選的目標',
    'LBL_INVALID_EMAIL' => '無效的電子郵件:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '目標',
    'LBL_PROSPECT_LIST' => '目標列表',
    'LBL_CONVERT_BUTTON_TITLE' => '轉換目標',
    'LBL_CONVERT_BUTTON_LABEL' => '轉換目標',
    'LNK_NEW_CONTACT' => '新聯絡人',
    'LBL_CREATED_CONTACT' => "創建了新的聯絡人",
    'LBL_CAMPAIGNS' => '市場活動',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '市場活動日誌',
    'LBL_TRACKER_KEY' => '追蹤索引',
    'LBL_LEAD_ID' => '潛在客戶 Id',
    'LBL_CONVERTED_LEAD' => '已轉換的潛在客戶',
    'LBL_ACCOUNT_NAME' => '客戶名稱',
    'LBL_EDIT_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_CREATED_USER' => '創建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => '事件',
);
