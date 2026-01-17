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
    'LBL_ASSIGNED_TO_ID' => 'Код користувача відповідальної особи',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Видалено',
    'LBL_NAME' => 'Назва',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_EDIT_BUTTON' => 'Змінити',
    'LBL_REMOVE' => 'Видалити',
    'LBL_LIST_FORM_TITLE' => 'Outbound Email Accounts List',
    'LBL_MODULE_NAME' => 'Облікові записи вихідної електронної пошти',
    'LBL_MODULE_TITLE' => 'Облікові записи вихідної електронної пошти',
    'LBL_HOMEPAGE_TITLE' => 'My Outbound Email Accounts',
    'LNK_NEW_RECORD' => 'Create Outbound Email Accounts',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Облікові записи вихідної електронної пошти',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Облікові записи вхідної пошти',
    'LBL_SEARCH_FORM_TITLE' => 'Search Outbound Email Accounts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'New Outbound Email Accounts',
    'LBL_USERNAME' => 'Ім\'я користувача',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_SMTP_SERVERNAME' => 'SMTP Server Name',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTP-порт',
    'LBL_SMTP_PROTOCOL' => 'SMTP Protocol',
    'LBL_EDITVIEW_PANEL1' => 'Account settings',
    'LBL_OUTBOUND_CONFIGURATION' => 'Конфігурація вихідних повідомлень',
    'LBL_CONNECTION_CONFIGURATION' => 'Конфігурація сервера',
    'LBL_CHANGE_PASSWORD' => 'Змінити пароль',
    'LBL_SEND_TEST_EMAIL' => 'Відправити тестове повідомлення',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Адміністратор ще не налаштував вихідний обліковий запис за замовчуванням. Повідомлення не відправлено.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Сервер SMTP вимагає аутентифікацію?',
    'LBL_MAIL_SMTPPASS' => 'Пароль',
    'LBL_MAIL_SMTPPORT' => 'Порт',
    'LBL_MAIL_SMTPSERVER' => 'Elasticsearch сервер',
    'LBL_MAIL_SMTPUSER' => 'Ім\'я користувача',
    'LBL_MAIL_SMTP_SETTINGS' => 'Налаштування SMTP-сервера',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Виберіть поштову службу:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - обліковий запис пошти:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адреса:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логін:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт серверу:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - сервер:',

    'LBL_TYPE' => 'Тип',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Групи Користувачів',

    'LBL_OWNER' => 'Власник',
    'LBL_OWNER_NAME' => 'Власник',

    'LBL_AUTH_TYPE' => 'Тип автентифікації',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Зовнішнє OAuth підключення',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID зовнішнього OAuth підключення',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Зовнішнє OAuth підключення',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Зовнішні OAuth підключення',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
