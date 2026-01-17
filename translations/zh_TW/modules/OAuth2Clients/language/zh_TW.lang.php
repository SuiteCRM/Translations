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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth 客戶端',
    'LBL_MODULE_TITLE' => 'OAuth 客戶端',
    'LBL_MODULE_ID' => 'OAuth 客戶端',
    'LBL_IS_CONFIDENTIAL' => '保密',
    'LBL_SECRET' => 'Secret',
    'LBL_SECRET_HASHED' => '改變秘密密碼',
    'LBL_LEAVE_BLANK' => '保留空白除非有變更密碼',
    'LBL_REMEMBER_SECRET' => '請記得紀錄秘密密碼因為儲存之後無法在看到.',
    'LBL_REDIRECT_URL' => '重定向超連結',
    'LBL_ALLOWED_GRANT_TYPE' => '允許授權類型',
    'LBL_DURATION_AMOUNT' => '期間總計',
    'LBL_DURATION_UNIT' => '期間單位',
    'LBL_DURATION_VALUE' => 'Duration value',
    'LBL_USER' => '相關使用者',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => '啟用 OAuth2 令牌',
    'LBL_TOKEN_ID' => '令牌',
    'LBL_DATE_ENTERED' => '創建日期',
    'LBL_ACCESS_TOKEN_EXPIRES' => '使用權令牌過期',
    'LBL_REFRESH_TOKEN_EXPIRES' => '刷新令牌過期',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAtuh2 令牌清單',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2 客戶端清單',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',

    'LNK_NEW_OAUTH2_CLIENT' => '建立 OAuth2 客戶端',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => '建立新的密碼客戶端',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => '建立新的客戶端證書',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => '建立新的隱藏式客戶端',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => '建立新的授權客戶端',

];
