<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    // System fields
    'LBL_ASSIGNED_TO_ID' => 'アサインされたユーザーID',
    'LBL_ASSIGNED_TO_NAME' => '割り当て先',
    'LBL_DATE_ENTERED' => '作成日',
    'LBL_DATE_MODIFIED' => '更新日',
    'LBL_MODIFIED' => '更新者',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED' => '作成者',
    'LBL_CREATED_USER' => 'ユーザーが作成',
    'LBL_MODIFIED_USER' => 'ユーザーが更新',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DELETED' => '削除済み',

    // Security groups
    'LBL_SECURITYGROUPS' => 'セキュリティグループ',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'セキュリティグループ',

    // List view labels
    'LBL_LIST_NAME' => '名前',
    'LBL_LIST_DELETE' => '削除',
    'LBL_EDIT_BUTTON' => '編集',
    'LBL_REMOVE' => '削除',
    'LBL_ASCENDING' => '昇順',
    'LBL_DESCENDING' => '降順',

    // Email opt-in labels
    'LBL_OPT_IN' => 'オプト インする',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'オプトインの確認を保留中、オプトインが送信されないことを確認する',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'オプトインの確認を保留中、オプトインの確認の送信',
    'LBL_OPT_IN_CONFIRMED' => 'オプトインされた',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'Calendar Accounts',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'Synced Meetings',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'Import Calendar Accounts',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'Create New Group',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Create Personal Calendar Account',
    'LNK_LIST_INBOUND_EMAILS' => 'Inbound Emails',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Emails',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => '外部OAuthプロバイダ',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => '外部OAuth接続',

    // Basic module labels
    'LBL_MODULE_NAME' => 'Calendar Accounts',
    'LBL_MODULE_TITLE' => 'Calendar Accounts',
    'LBL_LIST_FORM_TITLE' => 'Calendar Accounts List',
    'LBL_SEARCH_FORM_TITLE' => 'Search Calendar Accounts',
    'LBL_NEW_FORM_TITLE' => 'New Calendar Account',
    'LBL_HOMEPAGE_TITLE' => 'My Calendar Accounts',

    // Navigation links
    'LNK_NEW_RECORD' => 'Create Calendar Account',
    'LNK_LIST' => 'View Calendar Accounts',

    // Standard fields
    'LBL_NAME' => '名前',
    'LBL_ID' => 'ID',
    'LBL_TYPE' => 'タイプ',
    'LBL_SOURCE' => 'Calendar Source',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'OAuth Connection',
    'LBL_CONNECT_OAUTH' => 'Connect OAuth',

    // Basic Auth Fields
    'LBL_USERNAME' => 'ユーザー名',
    'LBL_PASSWORD' => 'パスワード',
    'LBL_SERVER_URL' => 'Server URL',
    'LBL_TEST_CONNECTION' => 'Test Connection',

    // API Key Fields
    'LBL_API_KEY' => 'API Key',
    'LBL_API_ENDPOINT' => 'API Endpoint',
    'LBL_VALIDATE_API' => 'Validate API',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'Calendar User ID',
    'LBL_CALENDAR_USER_NAME' => 'Calendar User',
    'LBL_CALENDAR_USER' => 'Calendar User',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'Authentication Actions',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'Sync Status',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'Test successful',
    'LBL_LAST_CONNECTION_TEST' => 'Last Connection Test',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'Last Sync Attempt',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'Sync Status',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'Sync Message',
    'LBL_LAST_SYNC_DATE' => 'Last Sync Date',
    'LBL_EXTERNAL_CALENDAR_ID' => 'External Calendar ID',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'This external calendar is already connected to account',

    // Sync Actions
    'LBL_SYNC_NOW' => 'Sync Now',
    'LBL_SYNC_NOW_TITLE' => 'Synchronize this calendar account now',
    'LBL_SYNC_NOW_CONFIRM' => 'Are you sure you want to sync this calendar account now?',
    'LBL_NO_ACCOUNT_ID' => 'No calendar account ID provided',
    'LBL_SYNCING' => 'Syncing...',
    'LBL_NETWORK_ERROR' => 'Network error occurred while syncing the calendar account. Please try again.',
    'LBL_UNKNOWN' => '未知',
    'LBL_NOW' => 'now',
    'LBL_SYNC_SUCCESS' => 'Calendar synchronization completed successfully',
    'LBL_SYNC_FAILED' => 'Sync failed',
    'LBL_SYNC_FAILED_DEFAULT' => 'Calendar synchronization failed. Please check the logs for details.',
    'LBL_SYNC_RESPONSE_ERROR' => 'An error occurred while processing the sync response. Please check the logs for details.',
    'LBL_SYNC_IN_PROGRESS' => 'Sync already in progress. Please wait...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'Synchronizing calendar events. This may take a while...',
    'LBL_PLEASE_WAIT' => 'Please Wait',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'You do not have permission to perform this action.',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'This user already has a personal calendar account.',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'Only administrators can create group calendar accounts.',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'Please select an OAuth connection first.',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'Please fill in all basic authentication fields (username, password, server URL).',
    'LBL_API_KEY_REQUIRED' => 'Please enter an API key.',
    'LBL_USING_SAVED_API_KEY' => 'Using previously saved API key.',
    'LBL_UNKNOWN_AUTH_METHOD' => 'Unknown authentication method',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'Please select a calendar source first.',

    // Connection test messages
    'LBL_CALENDAR' => 'カレンダー',
    'LBL_SUCCESSFUL' => '成功',
    'LBL_FAILED' => '失敗',
    'LBL_CONNECTION_TEST' => 'Connection Test',
    'LBL_YES' => 'はい',
    'LBL_NO' => 'いいえ',
    'LBL_FOUND_CALENDARS' => 'Found {count} calendars.',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'An error occurred while processing the connection test response. Please check the logs for details.',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'Connection test failed with HTTP status',
    'LBL_CONNECTION_NETWORK_ERROR' => 'Network error occurred while testing the calendar connection. Please try again.',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'Connection test completed successfully.<br>Your credentials are valid and the calendar is accessible.',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'This calendar is already connected to account',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'Error determining authentication method',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'Error parsing authentication method response',
    'LBL_AUTH_METHOD_GET_ERROR' => 'Error getting authentication method for source',

    // Dialog labels
    'LBL_NOTIFICATION' => 'Notification',
    'LBL_CONFIRM' => '確認',
    'LBL_ARE_YOU_SURE' => 'Are you sure?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => '進行中',
    'LBL_SYNC_STATUS_SUCCESS' => '成功',
    'LBL_SYNC_STATUS_WARNING' => '注意',
    'LBL_SYNC_STATUS_ERROR' => 'エラー:',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'All meetings synced.',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'No new meetings to sync.',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'Some meetings failed to sync. Check logs.',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'Some meetings synced. More pending due to limits.',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'Sync error. Check logs.',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'Authentication token expired.',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'Connection error.',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'Calendar not found.',

    // Relationship labels
    'LBL_MEETINGS' => 'ミーティング',
];