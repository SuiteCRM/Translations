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
    'LBL_ASSIGNED_TO_ID' => '負責人Id',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '標題',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_ACCOUNT_NAME' => '標題',
    'LBL_ACCOUNT' => '帳戶:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_ANNUAL_REVENUE' => '年收益:',
    'LBL_ANY_ADDRESS' => '其它地址：',
    'LBL_ANY_EMAIL' => '任何電子郵件:',
    'LBL_ANY_PHONE' => '任何電話:',
    'LBL_RATING' => '分攤',
    'LBL_ASSIGNED_USER' => '使用者',
    'LBL_BILLING_ADDRESS_CITY' => '[付款地址]城市:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '[付款地址]國家:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '[付款地址]郵遞區號:',
    'LBL_BILLING_ADDRESS_STATE' => '[付款地址]省/州:',
    'LBL_BILLING_ADDRESS_STREET_2' => '[付款地址]街道2',
    'LBL_BILLING_ADDRESS_STREET_3' => '[付款地址]街道3',
    'LBL_BILLING_ADDRESS_STREET_4' => '[付款地址]街道4',
    'LBL_BILLING_ADDRESS_STREET' => '[付款地址]街道:',
    'LBL_BILLING_ADDRESS' => '付款地址:',
    'LBL_ACCOUNT_INFORMATION' => '總覽',
    'LBL_CITY' => '城市:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_COUNTRY' => '國家:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客戶',
    'LBL_DUPLICATE' => '可能有重覆的客戶',
    'LBL_EMAIL' => '電子郵件:',
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
    'LBL_OTHER_EMAIL_ADDRESS' => '其它電子郵件:',
    'LBL_OTHER_PHONE' => '其它電話:',
    'LBL_OWNERSHIP' => '所有者',
    'LBL_PARENT_ACCOUNT_ID' => '父類客戶編號',
    'LBL_PHONE_ALT' => '其它電話:',
    'LBL_PHONE_FAX' => '電話傳真:',
    'LBL_PHONE_OFFICE' => '客戶電話:',
    'LBL_PHONE' => '電話:',
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
    'LBL_STATE' => '州或省:',
    'LBL_TICKER_SYMBOL' => '股票代碼:',
    'LBL_TYPE' => '類型:',
    'LBL_WEBSITE' => '網站:',
    'LNK_ACCOUNT_LIST' => '客戶',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'MSG_DUPLICATE' => '創建此帳戶可能會創建一個重複的帳戶。您可以從下面的清單中選擇帳戶或你可以點擊保存以繼續用先前輸入的資料創建一個新帳戶。',
    'MSG_SHOW_DUPLICATES' => '創建此帳戶可能會創建一個重複的帳戶。您可以按保存繼續用先前輸入的資料創建此新帳戶或可以按取消。',
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',
    'LBL_LIST_FORM_TITLE' => '報價清單',
    'LBL_MODULE_NAME' => '報價單',
    'LBL_MODULE_TITLE' => '報價: 首頁',
    'LBL_HOMEPAGE_TITLE' => '我的報價',
    'LNK_NEW_RECORD' => '新增報價',
    'LNK_LIST' => '查看報價',
    'LBL_SEARCH_FORM_TITLE' => '搜尋報價',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_NEW_FORM_TITLE' => '新建報價',
    'LBL_TERMS_C' => '條款',
    'LBL_APPROVAL_ISSUE' => '審核問題',
    'LBL_APPROVAL_STATUS' => '審核狀態',
    'LBL_BILLING_ACCOUNT' => '客戶',
    'LBL_BILLING_CONTACT' => '聯絡人',
    'LBL_EXPIRATION' => '有效期至',
    'LBL_QUOTE_NUMBER' => '報價編號',
    'LBL_OPPORTUNITY' => '商業機會',
    'LBL_TEMPLATE_DDOWN_C' => '報價範本',
    'LBL_STAGE' => '報價階段',
    'LBL_TERM' => '付款條件',
    'LBL_SUBTOTAL_AMOUNT' => '小計',
    'LBL_DISCOUNT_AMOUNT' => '折扣',
    'LBL_TAX_AMOUNT' => '稅金',
    'LBL_SHIPPING_AMOUNT' => '物流',
    'LBL_TOTAL_AMT' => '總計',
    'VALUE' => '標題',
    'LBL_EMAIL_ADDRESSES' => '郵件地址',
    'LBL_LINE_ITEMS' => '行項目',
    'LBL_GRAND_TOTAL' => '總計',
    'LBL_INVOICE_STATUS' => '發票狀態',
    'LBL_PRODUCT_QUANITY' => '數量',
    'LBL_PRODUCT_NAME' => '產品',
    'LBL_PART_NUMBER' => '部件編號',
    'LBL_PRODUCT_NOTE' => '備註',
    'LBL_PRODUCT_DESCRIPTION' => '描述',
    'LBL_LIST_PRICE' => '列表',
    'LBL_DISCOUNT_AMT' => '折扣',
    'LBL_UNIT_PRICE' => '銷售價格',
    'LBL_TOTAL_PRICE' => '總計',
    'LBL_VAT' => '稅金', // VAT
    'LBL_VAT_AMT' => '稅額', // VAT
    'LBL_ADD_PRODUCT_LINE' => '添加產品線',
    'LBL_SERVICE_NAME' => '服務',
    'LBL_SERVICE_LIST_PRICE' => '列表',
    'LBL_SERVICE_PRICE' => '銷售價格',
    'LBL_SERVICE_DISCOUNT' => '折扣',
    'LBL_ADD_SERVICE_LINE' => '添加服務線 ',
    'LBL_REMOVE_PRODUCT_LINE' => '刪除',
    'LBL_CONVERT_TO_INVOICE' => '轉換為發票',
    'LBL_PRINT_AS_PDF' => '以PDF格式列印',
    'LBL_EMAIL_QUOTE' => '電子郵件報價',
    'LBL_CREATE_CONTRACT' => '創建合約',
    'LBL_LIST_NUM' => '編號',
    'LBL_PDF_NAME' => '報價單',
    'LBL_EMAIL_NAME' => '報價給',
    'LBL_QUOTE_DATE' => '報價日期',
    'LBL_NO_TEMPLATE' => '錯誤\n找不到範本。如果您沒有創建報價範本，請到 PDF 範本模組並且創建一個',
    'LBL_SUBTOTAL_TAX_AMOUNT' => '小計+稅金',//pre shipping
    'LBL_EMAIL_PDF' => '以PDF格式發送電子郵件',
    'LBL_ADD_GROUP' => '新增群組',
    'LBL_DELETE_GROUP' => '刪除群組',
    'LBL_GROUP_NAME' => '群組名稱',
    'LBL_GROUP_TOTAL' => '群組總計',
    'LBL_SHIPPING_TAX' => '貨運稅',
    'LBL_SHIPPING_TAX_AMT' => '貨運稅',
    'LBL_IMPORT_LINE_ITEMS' => '匯入項目',
    'LBL_CREATE_OPPORTUNITY' => '新增商業機會',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => '小計(預設貨幣)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => '折扣(預設貨幣)',
    'LBL_TAX_AMOUNT_USDOLLAR' => '稅金(預設貨幣)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => '貨運 (預設貨幣)',
    'LBL_TOTAL_AMT_USDOLLAR' => '總計(預設貨幣)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => '貨運稅 (預設貨幣)',
    'LBL_GRAND_TOTAL_USDOLLAR' => '總計 (預設貨幣)',
    'LBL_QUOTE_TO' => '報價給',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => '小計+稅金(預設貨幣)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => '報價 : 合約',
    'LBL_AOS_QUOTES_AOS_INVOICES' => '報價單: 發票',
    'LBL_AOS_LINE_ITEM_GROUPS' => '行項目群組',
    'LBL_AOS_PRODUCT_QUOTES' => '產品報價',
    'LBL_AOS_QUOTES_PROJECT' => '報價: 專案',
);
