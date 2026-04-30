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
    'LBL_ASSIGNED_TO_ID' => 'アサインされたユーザーID',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => '名称',
    'LBL_CREATED_USER' => 'ユーザが作成',
    'LBL_MODIFIED_USER' => 'ユーザが更新',
    'LBL_LIST_NAME' => '名称',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'イベント リスト',
    'LBL_MODULE_NAME' => 'イベント',
    'LBL_MODULE_TITLE' => 'イベント',
    'LBL_HOMEPAGE_TITLE' => '私のイベント',
    'LNK_NEW_RECORD' => 'イベントの作成',
    'LNK_LIST' => 'イベントを表示',
    'LBL_SEARCH_FORM_TITLE' => 'イベントを検索',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => '新しいイベント',
    'LBL_LOCATION' => 'Location',
    'LBL_START_DATE' => '開始日',
    'LBL_END_DATE' => 'End Date/Time',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Start Date',
    'LBL_DATE_END' => 'End Date',
    'LBL_DURATION' => 'Duration',
    'LBL_INVITE_TEMPLATES' => 'メール招待テンプレート',
    'LBL_INVITE_PDF' => '招待を送る',
    'LBL_EDITVIEW_PANEL1' => 'イベントの詳細',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'デリゲート',
    'LBL_ACCEPT_REDIRECT' => 'リダイレクトURLの受け入れ',
    'LBL_DECLINE_REDIRECT' => 'リダイレクトURLの辞退',
    'LBL_SELECT_DELEGATES' => 'デリゲートの選択',
    'LBL_SELECT_DELEGATES_TITLE' => 'デリゲートの選択:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Target List',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Targets',
    'LBL_SELECT_DELEGATES_CONTACTS' => '連絡先',
    'LBL_SELECT_DELEGATES_LEADS' => '潜在顧客',
    'LBL_MANAGE_DELEGATES' => 'デリゲートの管理',
    'LBL_MANAGE_DELEGATES_TITLE' => 'デリゲートの管理:-',
    'LBL_MANAGE_ACCEPTANCES' => '受け入れの管理',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => '受け入れの管理:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accepted',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Declined',
    'LBL_MANAGE_POPUP_ERROR' => 'デリゲートが選択されていません。',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invited',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Not Invited',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Attended',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Not Attended',
    'LBL_SUCCESS_MSG' => 'すべての招待の送信に成功しました。',
    'LBL_ERROR_MSG_1' => 'すべてのリンクされた連絡先はすでに招待されています。',
    'LBL_ERROR_MSG_2' => '招待メールの送信に失敗しました！メール設定を確認してください。',
    'LBL_ERROR_MSG_3' => '10以上のメールの送信に失敗しました。招待したすべての連絡先のメールアドレスが有効なものであるかを確認してください。（suitecrm.logを参照してください）',
    'LBL_ERROR_MSG_4' => ' メールの送信に失敗しました。招待したすべての連絡先のメールアドレスが有効なものであるかを確認してください。（suitecem.logを参照してください）', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => '招待メールテンプレート',
    'LBL_EMAIL_INVITE' => 'メール招待',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => '連絡先',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locations',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => '潜在顧客',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Targets',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'デリゲート',

    // Attendance report
    'LBL_CONTACT_NAME' => '名前',
    'LBL_ACCOUNT_NAME' => 'Company',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invited',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'アクティビティ ステータス',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'イベント タイトルからイベントの場所',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accept',
    'LBL_DECLINE_LINK' => 'Decline',
    
);
