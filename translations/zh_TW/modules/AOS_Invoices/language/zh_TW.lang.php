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
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '標題',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_ACCOUNT_NAME' => '標題',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => '年收益:',
    'LBL_ANY_ADDRESS' => '任何地址:',
    'LBL_ANY_EMAIL' => '電子郵件:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_RATING' => '分攤',
    'LBL_ASSIGNED_USER' => '使用者',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_ACCOUNT_INFORMATION' => '總覽',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '聯繫人',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客戶',
    'LBL_DUPLICATE' => '可能重覆帳戶',
    'LBL_EMAIL' => '電子郵件:',
    'LBL_EMPLOYEES' => '員工:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => '產業:',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵箱地址',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_STATE' => '州/省',
    'LBL_MEMBER_OF' => '附屬於:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子公司',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它郵件:',
    'LBL_OTHER_PHONE' => '其它聯繫電話:',
    'LBL_OWNERSHIP' => '所有制:',
    'LBL_PARENT_ACCOUNT_ID' => '父帳戶編號',
    'LBL_PHONE_ALT' => '備用電話:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => '保存帳戶',
    'LBL_SHIPPING_ADDRESS_CITY' => '裝運城市:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '裝運國家:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => '裝運洲:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '裝運地址 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '裝運地址 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '裝運地址 4',
    'LBL_SHIPPING_ADDRESS_STREET' => '裝運街道:',
    'LBL_SHIPPING_ADDRESS' => '裝運地址:',
    'LBL_STATE' => '州或省:',
    'LBL_TICKER_SYMBOL' => '觸發器符號:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => '網站站點:',
    'LNK_ACCOUNT_LIST' => '客戶',
    'LNK_NEW_ACCOUNT' => '新建帳戶',
    'MSG_DUPLICATE' => '創建此帳戶可能會創建一個重複的帳戶。您可以從下面的清單中選擇帳戶或你可以點擊保存以繼續用先前輸入的資料創建一個新帳戶。',
    'MSG_SHOW_DUPLICATES' => '創建此帳戶可能會創建一個重複的帳戶。您可以按保存繼續用先前輸入的資料創建此新帳戶或可以按取消。',
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這條記錄?',
    'LBL_LIST_FORM_TITLE' => '發票清單',
    'LBL_MODULE_NAME' => '發票',
    'LBL_MODULE_TITLE' => '發票: 首頁',
    'LBL_HOMEPAGE_TITLE' => '我的發票',
    'LNK_NEW_RECORD' => '創建發票',
    'LNK_LIST' => '查看發票',
    'LBL_SEARCH_FORM_TITLE' => '搜尋發票',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => '新建發票',
    'LBL_TERMS_C' => '條款',
    'LBL_APPROVAL_ISSUE' => '審核問題',
    'LBL_APPROVAL_STATUS' => '審核狀態',
    'LBL_BILLING_ACCOUNT' => 'Account',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => '有效期至',
    'LBL_INVOICE_NUMBER' => '發票編號',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => '發票範本',
    'LBL_STAGE' => '報價階段',
    'LBL_TERM' => '付款條件',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => '物流',
    'LBL_TOTAL_AMT' => '小計',
    'VALUE' => '標題',
    'LBL_EMAIL_ADDRESSES' => '郵件地址',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => '報價編號',
    'LBL_QUOTE_DATE' => '報價日期',
    'LBL_INVOICE_DATE' => '發票日期',
    'LBL_DUE_DATE' => '到期時間',
    'LBL_STATUS' => '狀態',
    'LBL_INVOICE_STATUS' => '發票狀態',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => '產品',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => '備忘',
    'LBL_PRODUCT_DESCRIPTION' => '說明:',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => '總計',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => '刪除',
    'LBL_PRINT_AS_PDF' => '以PDF格式列印',
    'LBL_EMAIL_INVOICE' => '電子郵件單據',
    'LBL_LIST_NUM' => '編號',
    'LBL_PDF_NAME' => '發票',
    'LBL_EMAIL_NAME' => '發票給',
    'LBL_NO_TEMPLATE' => '錯誤\n找不到範本。如果您沒有創建發票範本，轉到 PDF 範本模組並且創建一個',
    'LBL_SUBTOTAL_TAX_AMOUNT' => '小計+稅金',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => '匯入項目',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => '發票給',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => '報價單: 發票',
);
