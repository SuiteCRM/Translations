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
    'LBL_ASSIGNED_TO_ID' => 'ID ответственного',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственное лицо',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Название',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Название',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Серверы исходящей почты',
    'LBL_MODULE_NAME' => 'Серверы исходящей почты (SMTP)',
    'LBL_MODULE_TITLE' => 'Серверы исходящей почты (SMTP)',
    'LBL_HOMEPAGE_TITLE' => 'Мои серверы исходящей почты',
    'LNK_NEW_RECORD' => 'Добавить сервер исходящей почты',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Серверы исходящей почты (SMTP)',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Учётные записи исходящей почты',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск серверов исходящей почты',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Серверы исходящей почты',
    'LBL_USERNAME' => 'Логин',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_SMTP_SERVERNAME' => 'Имя сервера SMTP',
    'LBL_SMTP_AUTH' => 'Аутентификация',
    'LBL_SMTP_PORT' => 'Порт',
    'LBL_SMTP_PROTOCOL' => 'Протокол',
    'LBL_EDITVIEW_PANEL1' => 'Параметры сервера SMTP',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Изменение пароля',
    'LBL_SEND_TEST_EMAIL' => 'Отправка тестового письма',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администратор системы ещё не настроил стандартный сервер исходящей почты. Тестовое письмо не может быть отправлено.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию?',
    'LBL_MAIL_SMTPPASS' => 'Пароль',
    'LBL_MAIL_SMTPPORT' => 'Порт',
    'LBL_MAIL_SMTPSERVER' => 'Сервер',
    'LBL_MAIL_SMTPUSER' => 'Логин',
    'LBL_MAIL_SMTP_SETTINGS' => 'Настройка SMTP-сервера',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учётная запись почты:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail - адрес:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',

    'LBL_TYPE' => 'Тип',
    'LBL_MAIL_SENDTYPE' => 'Отправка почты с помощью',
    'LBL_MAIL_SMTPSSL' => 'Параметры SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Имя отправителя',
    'LBL_SMTP_FROM_ADDR' => 'Адрес отправителя',
    'LBL_REPLY_TO_NAME' => 'Ответить на имя',
    'LBL_REPLY_TO_ADDR' => 'Ответить на адрес',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Группы пользователей',

    'LBL_OWNER' => 'Владелец',
    'LBL_OWNER_NAME' => 'Владелец',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Внешнее OAuth соединение',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Внешнее OAuth соединение',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Внешние OAuth соединения',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
