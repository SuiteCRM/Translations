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
    'LBL_ACCOUNT_NAME' => '公司名称:',
    'LBL_ACCOUNT' => '帳戶:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_ANNUAL_REVENUE' => '年收益:',
    'LBL_ANY_ADDRESS' => '其它地址：',
    'LBL_ANY_EMAIL' => '任何電子郵件:',
    'LBL_EMAIL_NON_PRIMARY' => '非主要電子郵件',
    'LBL_ANY_PHONE' => '任何電話:',
    'LBL_ASSIGNED_TO_NAME' => '使用者:',
    'LBL_RATING' => '分攤',
    'LBL_ASSIGNED_TO' => '負責人:',
    'LBL_ASSIGNED_USER' => '負責人:',
    'LBL_ASSIGNED_TO_ID' => '負責人:',
    'LBL_BILLING_ADDRESS_CITY' => '[付款地址]城市:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '[付款地址]國家:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '[付款地址]郵遞區號:',
    'LBL_BILLING_ADDRESS_STATE' => '[付款地址]省/州:',
    'LBL_BILLING_ADDRESS_STREET_2' => '[付款地址]街道2',
    'LBL_BILLING_ADDRESS_STREET_3' => '[付款地址]街道3',
    'LBL_BILLING_ADDRESS_STREET_4' => '[付款地址]街道4',
    'LBL_BILLING_ADDRESS_STREET' => '[付款地址]街道:',
    'LBL_BILLING_ADDRESS' => '付款地址:',
    'LBL_ACCOUNT_INFORMATION' => '公司資訊',
    'LBL_CITY' => '城市:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_COUNTRY' => '國家:',
    'LBL_DATE_ENTERED' => '創建日期:',
    'LBL_DATE_MODIFIED' => '修改日期:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客戶',
    'LBL_DESCRIPTION_INFORMATION' => '描述資訊',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_DUPLICATE' => '可能有重覆的客戶',
    'LBL_EMAIL' => '電子郵件地址:',
    'LBL_EMPLOYEES' => '員工:',
    'LBL_FAX' => '傳真:',
    'LBL_INDUSTRY' => '行業:',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_CITY' => '城市',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵箱地址',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_STATE' => '州或省',
    'LBL_MEMBER_OF' => '附屬於:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子公司',
    'LBL_NAME' => '名稱:',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它電子郵件:',
    'LBL_OTHER_PHONE' => '其它電話:',
    'LBL_OWNERSHIP' => '所有者',
    'LBL_PARENT_ACCOUNT_ID' => '父類客戶編號',
    'LBL_PHONE_ALT' => '其它電話:',
    'LBL_PHONE_FAX' => '電話傳真:',
    'LBL_PHONE_OFFICE' => '辦公電話:',
    'LBL_PHONE' => '電話:',
    'LBL_EMAIL_ADDRESS' => '電子郵箱地址',
    'LBL_EMAIL_ADDRESSES' => '郵件地址',
    'LBL_POSTAL_CODE' => '郵遞區號:',
    'LBL_SAVE_ACCOUNT' => '保存客戶',
    'LBL_SHIPPING_ADDRESS_CITY' => '[收貨地址]城市:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '[收貨地址]國家:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '[收貨地址]郵遞區號:',
    'LBL_SHIPPING_ADDRESS_STATE' => '[收貨地址]省份:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '[收貨地址]街道2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '[收貨地址]街道3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '[收貨地址]街道4',
    'LBL_SHIPPING_ADDRESS_STREET' => '[收貨地址]街道:',
    'LBL_SHIPPING_ADDRESS' => '收貨地址:',

    'LBL_STATE' => '狀態:',
    'LBL_TICKER_SYMBOL' => '股票代碼:',
    'LBL_TYPE' => '類型:',
    'LBL_WEBSITE' => '網站:',

    'LNK_ACCOUNT_LIST' => '客戶',
    'LNK_NEW_ACCOUNT' => '新增客戶',

    'MSG_DUPLICATE' => '新增這個客戶也許會重覆，您可以從列表中選擇一個客戶或是點擊新增客戶來通過之前的記錄新增一個新客戶。',
    'MSG_SHOW_DUPLICATES' => '您將要創建的客戶紀錄可能與已經存在的客戶紀錄重複。下面列出了包含類似名稱的客戶紀錄。<br>按一下儲存以繼續創建此新的帳戶，或按一下取消以返回到該模組而不創建客戶。',

    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',

    'LBL_EDIT_BUTTON' => '編輯  ',
    'LBL_REMOVE' => '刪除',

);
