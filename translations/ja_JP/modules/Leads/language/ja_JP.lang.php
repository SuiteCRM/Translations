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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => '潜在顧客を削除するにはレコード番号を指定します。',
    'LBL_ACCOUNT_DESCRIPTION' => '口座の説明',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => '取引先名:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => '別の市区町村:',
    'LBL_ALT_ADDRESS_COUNTRY' => '別の国:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '別の郵便番号:',
    'LBL_ALT_ADDRESS_STATE' => '別の都道府県:',
    'LBL_ALT_ADDRESS_STREET_2' => '別の住所 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '別の住所 3:',
    'LBL_ALT_ADDRESS_STREET' => '別の番地その他:',
    'LBL_ALTERNATE_ADDRESS' => '別の住所:',
    'LBL_ALT_ADDRESS' => '別の住所:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先ユーザー:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => '連絡先ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => '潜在顧客名:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潜在顧客-商談:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => '潜在顧客:',
    'LBL_CONVERTED_ACCOUNT' => '変換された口座:',
    'LBL_CONVERTED_CONTACT' => '変換された連絡先:',
    'LBL_CONVERTED_OPP' => 'コンバート済み商談:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '潜在顧客を変換する',
    'LBL_CONVERTLEAD' => '潜在顧客の変換',
    'LBL_CONVERTLEAD_WARNING' => '注意: 変換しようとしているリードの状態は変換済みです。欄楽先や口座のレコードが既に作成されている可能性があります。リードの変換を継続する場合、保存をクリックしてください。リードを変換せずに戻る場合は、キャンセルをクリックしてください。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' 可能性がある連絡先: ',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => '新しいレコードを作成しました',
    'LBL_CREATED_ACCOUNT' => '新しい取引先が作成されました',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => '新規口座が作成されました',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潜在顧客',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => '類似の潜在顧客',
    'LBL_EMAIL_ADDRESS' => 'メールアドレス:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => '既存の興亜を使用',
    'LBL_EXISTING_CONTACT' => '既存の取引先担当者を使用',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'vCardをインポートすることによって新規リードを作成します。',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潜在顧客ソース詳細:',
    'LBL_LEAD_SOURCE' => 'リードソース:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => '取引先名',
    'LBL_LIST_CONTACT_NAME' => '名前',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'メール',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'リード一覧',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潜在顧客ソース詳細',
    'LBL_LIST_LEAD_SOURCE' => '潜在顧客ソース',
    'LBL_LIST_MY_LEADS' => '私の潜在顧客',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => '紹介元',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => '潜在顧客',
    'LBL_MODULE_TITLE' => '潜在顧客: ホーム',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'リード作成',
    'LBL_OFFICE_PHONE' => '勤務先電話番号:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => '商談規模:',
    'LBL_OPPORTUNITY_ID' => '商談ID',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => '他のメール:',
    'LBL_OTHER_PHONE' => '他の電話番号:',
    'LBL_PHONE' => '電話番号:',
    'LBL_PORTAL_APP' => 'ポータルアプリケーション',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'ポータルユーザー名:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => '主となる市区町村:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主となる国:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主となる郵便番号:',
    'LBL_PRIMARY_ADDRESS_STATE' => '主となる都道府県:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '主となる住所 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '主となる住所 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '主となる番地その他:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => '紹介元:',
    'LBL_REPORTS_TO_ID' => '上司ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'リード検索',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'チェック済み潜在顧客の選択',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'チェック済み潜在顧客の選択',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'ステータス詳細:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => '役職',
    'LNK_IMPORT_VCARD' => 'vCardから作成',
    'LNK_LEAD_LIST' => '潜在顧客の表示',
    'LNK_NEW_ACCOUNT' => '取引先の作成',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => '連絡先を作成',
    'LNK_NEW_LEAD' => '潜在顧客を作成',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => '<b>または</b>取引先選択',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b>選択された連絡先',
    'NTC_DELETE_CONFIRMATION' => '本当にこのレコードを削除してよいですか?',
    'NTC_REMOVE_CONFIRMATION' => '本当にこのリードをこのケースから削除して良いですか？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサインされたユーザー',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Campaigns',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => '選択を許可',
    'LBL_CONVERT_COPY' => 'データをコピー',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'モジュールを追加',
    'LBL_CREATE' => '作成',
    'LBL_SELECT' => ' <b>または</b>選択',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => '潜在顧客をインポート',
//Convert lead tooltips
    'LBL_MODULE_TIP' => '新たなレコードを追加するモジュール',
    'LBL_REQUIRED_TIP' => 'リードをコンバートする前に、必要なモジュールが作成されている必要があります。',
    'LBL_COPY_TIP' => 'チェックすると、リードのフィールドの内容は同じ名前を持つフィールドにコピーされます。',
    'LBL_SELECTION_TIP' => 'リードのコンバート処理中は、取引先担当者への関連フィールドが選択可能となります。',
    'LBL_EDIT_TIP' => 'コンバート用のレイアウトを変更',
    'LBL_DELETE_TIP' => 'コンバート用レイアウトからこのモジュールを削除',

    'LBL_ACTIVITIES_MOVE' => 'アクティビティを移動する',
    'LBL_ACTIVITIES_COPY' => 'アクティビティをコピーする',
    'LBL_ACTIVITIES_MOVE_HELP' => "潜在顧客の活動を移動するレコードを選択します。タスク、電話、会議、メモ、メールは選択したレコードに移動されます。",
    'LBL_ACTIVITIES_COPY_HELP' => "潜在顧客の活動のコピーを作成するためのレコードを選択します。新しいタスク、電話、会議、メモは選択されたレコードのそれぞれに対して作成されます。メールは選択されたレコードに関連付けられます。",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => '読み込み中' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
