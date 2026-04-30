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
    'LBL_MODULE_NAME' => 'Bugs',
    'LBL_MODULE_TITLE' => 'バグトラッカー: ホーム',
    'LBL_MODULE_ID' => 'Bugs',
    'LBL_SEARCH_FORM_TITLE' => 'バグ検索',
    'LBL_LIST_FORM_TITLE' => 'バグ一覧',
    'LBL_NEW_FORM_TITLE' => '不具合作成',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_NUMBER' => 'Number:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_CONTACT_NAME' => '連絡先名:',
    'LBL_CONTACT_ROLE' => '役割:',
    'LBL_LIST_NUMBER' => '合計.',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'Resolution',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_INVITEE' => '取引先担当者',
    'LBL_TYPE' => 'Type:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => '解決:',
    'LBL_RELEASE' => 'リリース:',
    'LNK_NEW_BUG' => '不具合作成',
    'LNK_BUG_LIST' => 'バグトラッカー',
    'ERR_DELETE_RECORD' => 'バグを削除するにはレコード番号を指定する必要があります。',
    'LBL_LIST_MY_BUGS' => '私にアサインされたバグ',
    'LNK_IMPORT_BUGS' => 'データインポート',
    'LBL_FOUND_IN_RELEASE' => '発見リリース:',
    'LBL_FIXED_IN_RELEASE' => '修正リリース:',
    'LBL_LIST_FIXED_IN_RELEASE' => '修正リリース',
    'LBL_WORK_LOG' => 'Work Log:',
    'LBL_SOURCE' => 'ソース:',
    'LBL_PRODUCT_CATEGORY' => 'Category:',

    'LBL_CREATED_BY' => 'Created by:',
    'LBL_MODIFIED_BY' => 'Last Modified by:',

    'LBL_LIST_EMAIL_ADDRESS' => 'メールアドレス',
    'LBL_LIST_CONTACT_NAME' => '取引先担当者',
    'LBL_LIST_ACCOUNT_NAME' => '取引先名',
    'LBL_LIST_PHONE' => '電話番号',
    'NTC_DELETE_CONFIRMATION' => '本当にこの連絡先をこのバグから削除して良いですか？',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'バグトラッカー',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサインされたユーザー',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',

    'LBL_BUG_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
