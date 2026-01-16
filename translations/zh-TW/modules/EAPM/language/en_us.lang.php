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
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM 使用者',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '應用程式使用者名稱',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_FORM_TITLE' => '外部帳戶清單',
    'LBL_MODULE_NAME' => '外部帳戶',
    'LBL_MODULE_TITLE' => '外部帳號',
    'LBL_HOMEPAGE_TITLE' => '我的外部帳戶',
    'LNK_NEW_RECORD' => '創建外部帳戶',
    'LNK_LIST' => '查看外部帳戶',
    'LBL_SEARCH_FORM_TITLE' => '搜尋外部資源',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_NEW_FORM_TITLE' => '新建外部帳戶',
    'LBL_PASSWORD' => '應用程式密碼',
    'LBL_USER_NAME' => '應用程式使用者名稱',
    'LBL_URL' => '超鏈接',
    'LBL_APPLICATION' => '應用程式',
    'LBL_API_DATA' => 'API 資料',
    'LBL_API_CONSKEY' => '消費者key',
    'LBL_API_CONSSECRET' => '消費者Secret',
    'LBL_API_OAUTHTOKEN' => 'OAuth 權杖',
    'LBL_AUTH_UNSUPPORTED' => "由應用程式不支援此授權方法",
    'LBL_AUTH_ERROR' => '嘗試連接到此帳戶失敗。',
    'LBL_VALIDATED' => '已連接',
    'LBL_ACTIVE' => '啟用',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => '連接',
    'LBL_NOTE' => '請注意',
    'LBL_CONNECTED' => '已連接',

    'LBL_ERR_NO_AUTHINFO' => '查無此帳戶的身份驗證資訊。',
    'LBL_ERR_NO_TOKEN' => '查無此帳戶的有效登入權杖。',

    'LBL_ERR_FAILED_QUICKCHECK' => '目前您尚未連接到您的 {0} 帳戶。按一下確定以登入到您的帳戶並重新啟動連線。',

    'LBL_CLICK_TO_EDIT' => '按一下以編輯',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => '重新進行身份驗證',
    'LBL_APPLICATION_FOUND_NOTICE' => '已經存在此應用程式的帳戶。我們已經恢復了現有的帳戶。',
    'LBL_OMIT_URL' => '(省略 http:// 或 https://)',
    'LBL_OAUTH_SAVE_NOTICE' => '按一下 <b>連接</b> 會轉到下個頁面，需要提供您的帳戶資訊並授權 SuiteCRM 對該帳戶的訪問。結束之後，您將重定向回 SuiteCRM。',
    'LBL_BASIC_SAVE_NOTICE' => '按一下 <b>連接</b> 以連接此帳戶到 SuiteCRM。',
    'LBL_ERR_POPUPS_DISABLED' => '請啟用瀏覽器快顯視窗或將網站 "{0}" 添加到例外清單以進行連線。',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
