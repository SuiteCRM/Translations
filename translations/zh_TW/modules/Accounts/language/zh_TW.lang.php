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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    // Dashlet Categories
    'LBL_CHARTS' => 'Charts',
    'LBL_DEFAULT' => '檢視',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_ACCOUNT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_ACCOUNT' => '客戶:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => '年收益:',
    'LBL_ANY_ADDRESS' => '任何地址:',
    'LBL_ANY_EMAIL' => '電子郵件:',
    'LBL_ANY_PHONE' => '電話:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_BUGS_SUBPANEL_TITLE' => '缺陷追蹤',
    'LBL_CAMPAIGN_ID' => '市場活動ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '聯繫人',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => '創建日期:',
    'LBL_DATE_MODIFIED' => '修改日期:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '客戶',
    'LBL_DESCRIPTION_INFORMATION' => '描述資訊',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_DUPLICATE' => '可能重覆帳戶',
    'LBL_EMAIL' => '電子郵件地址:',
    'LBL_EMAIL_OPT_OUT' => '退出郵件列表:',
    'LBL_EMAIL_ADDRESSES' => '郵件地址',
    'LBL_EMPLOYEES' => '員工:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史記錄',
    'LBL_HOMEPAGE_TITLE' => '我的客戶',
    'LBL_INDUSTRY' => '產業:',
    'LBL_INVALID_EMAIL' => '無效的電子郵件:',
    'LBL_INVITEE' => '聯繫人',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_LIST_ACCOUNT_NAME' => '名稱:',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_CONTACT_NAME' => '聯絡人姓名',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵箱地址',
    'LBL_LIST_FORM_TITLE' => '客戶列表',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_STATE' => '州/省',
    'LBL_MEMBER_OF' => '附屬於:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '子公司',
    'LBL_MODULE_NAME' => '客戶',
    'LBL_MODULE_TITLE' => '客戶:首頁',
    'LBL_MODULE_ID' => '客戶',
    'LBL_NAME' => '名稱:',
    'LBL_NEW_FORM_TITLE' => '新增客戶',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_OTHER_EMAIL_ADDRESS' => '其它郵件:',
    'LBL_OTHER_PHONE' => '其它聯繫電話:',
    'LBL_OWNERSHIP' => '所有制:',
    'LBL_PARENT_ACCOUNT_ID' => '父帳戶編號',
    'LBL_PHONE_ALT' => '備用電話:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => '辦公電話:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '複製到聯絡人',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => '複製地址...',
    'LBL_RATING' => '評價:',
    'LBL_SAVE_ACCOUNT' => '保存帳戶',
    'LBL_SEARCH_FORM_TITLE' => '客戶搜尋',
    'LBL_SHIPPING_ADDRESS_CITY' => '裝運城市:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '裝運國家:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => '裝運洲:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '裝運地址 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '裝運地址 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '裝運地址 4',
    'LBL_SHIPPING_ADDRESS_STREET' => '裝運街道:',
    'LBL_SHIPPING_ADDRESS' => '裝運地址:',
    'LBL_SIC_CODE' => '標準行業代碼:',
    'LBL_STATE' => '州或省:',
    'LBL_TICKER_SYMBOL' => '觸發器符號:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => '網站站點:',
    'LBL_CAMPAIGNS' => '市場活動',
    'LNK_ACCOUNT_LIST' => '客戶',
    'LNK_NEW_ACCOUNT' => '新建帳戶',
    'LNK_IMPORT_ACCOUNTS' => '導入客戶',
    'MSG_DUPLICATE' => '本次創建將會複製一個已有帳戶. 您或者從以下列表中選擇了一個帳戶或者點擊保存按鈕再次保存了前一次創建帳戶時輸入的數據.',
    'MSG_SHOW_DUPLICATES' => '本次創建將會複製一個已有帳戶. 您可以點擊保存繼續創建數據與前一帳戶相同的新帳戶或者點擊取消按鈕.',
    'LBL_ASSIGNED_USER_NAME' => 'Assigned to:',
    'LBL_PROSPECT_LIST' => '目標列表',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => '已購買的產品和服務',

    'LBL_AOS_CONTRACTS' => '合約',
    'LBL_AOS_INVOICES' => '發票',
    'LBL_AOS_QUOTES' => '報價單',
    'LBL_LIST_WEBSITE' => '網站',
);
