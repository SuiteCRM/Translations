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
    'LBL_CHARTS' => 'チャート',
    'LBL_DEFAULT' => 'ビュー',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => '取引先を削除するためにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => '取引先名:',
    'LBL_ACCOUNT' => '取引先:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名:',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先ユーザー:',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => '更新日:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '取引先',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => '重複の可能性がある取引先',
    'LBL_EMAIL' => 'メールアドレス:',
    'LBL_EMAIL_OPT_OUT' => 'Eメール 受信リストから除外:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOMEPAGE_TITLE' => '私の取引先',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_INVALID_EMAIL' => '無効なEメール:',
    'LBL_INVITEE' => '取引先担当者',
    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_LIST_ACCOUNT_NAME' => '名前',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_CONTACT_NAME' => '取引先担当者',
    'LBL_LIST_EMAIL_ADDRESS' => 'メールアドレス',
    'LBL_LIST_FORM_TITLE' => '取引先一覧',
    'LBL_LIST_PHONE' => '電話番号',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => '取引先',
    'LBL_MODULE_TITLE' => '取引先: ホーム',
    'LBL_MODULE_ID' => '取引先',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => '新規取引先',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => '親取引先ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => '勤務先電話番号:',
    'LBL_PHONE' => '電話番号:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '連絡先ににコピーする',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'コピー...',
    'LBL_RATING' => '格付:',
    'LBL_SAVE_ACCOUNT' => '取引先の保存',
    'LBL_SEARCH_FORM_TITLE' => '取引先検索',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_SIC_CODE' => '業界コード:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LNK_ACCOUNT_LIST' => '取引先を表示する',
    'LNK_NEW_ACCOUNT' => '取引先の作成',
    'LNK_IMPORT_ACCOUNTS' => 'データインポート',
    'MSG_DUPLICATE' => 'あなたが作成しようとしている取引先は既に存在する口座と取引先します。同じ名前を含む取引先は下記に表示されています。<br>保存をクリックすると新たに取引先を作成します。キャンセルをクリックすると取引先を作成せずにモジュールに戻ります。',
    'MSG_SHOW_DUPLICATES' => 'あなたが作成しようとしている取引先は既に存在する取引先と重複します。同じ名前を含む取引先は下記に表示されています。<br>保存をクリックすると新たに取引先を作成します。キャンセルをクリックすると取引先を作成せずにモジュールに戻ります。',
    'LBL_ASSIGNED_USER_NAME' => '担当ユーザー:',
    'LBL_PROSPECT_LIST' => '見込み顧客リスト',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => '製品またはサービスの購入',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => '見積書',
    'LBL_LIST_WEBSITE' => 'ウェブサイト',
);
