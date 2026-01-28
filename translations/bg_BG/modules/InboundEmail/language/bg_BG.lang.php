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


    'LBL_RE' => 'Отговор:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Грешно потребителско име или парола',
    'ERR_INI_ZLIB' => 'Проблем при временно изключване на Zlib компресиране.  Проверката на настройките може да се окаже неуспешна.',
    'ERR_NO_IMAP' => 'Не са намерени IMAP библиотеки.  Моля, елиминирайте проблема преди да продължите с конфигурацията на Входяща поща',
    'ERR_NO_OPTS_SAVED' => 'Не бяха определени оптимални настройки за входяща поща.  Моля, проверете съответните настройки',
    'ERR_TEST_MAILBOX' => 'Моля, проверете настройките и опитайте отново.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Отговорник',
    'LBL_AUTOREPLY' => 'Шаблон за автоматичен отговор',
    'LBL_AUTOREPLY_HELP' => 'Маркирайте шаблон, който да бъде автоматично изпращан като уведомление при получаване на електронно писмо.',
    'LBL_BASIC' => 'Базови настройки',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Задайте macro, които ще бъдат анализирани и използвани за свързване на имейли внесени по делото',
    'LBL_CASE_MACRO_DESC2' => 'Задаване на тази стойност за всички, без <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Затвори прозореца',
    'LBL_CREATE_TEMPLATE' => 'Създай',
    'LBL_DELETE_SEEN' => 'Изтриване на прочетени писма след импортиране',
    'LBL_EDIT_TEMPLATE' => 'Редактиране',
    'LBL_EMAIL_OPTIONS' => 'Опции за обработка на електронните писма',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Опции за обработка на грешки',
    'LBL_FILTER_DOMAIN_DESC' => 'Да не се изпращат автоматични отговори към този домейн.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'Да не се изпраща автоматичен отговор до този домейн',
    'LBL_FIND_SSL_WARN' => '<br>Тестването на SSL изисква време.  Моля, изчакайте.<br>',
    'LBL_FROM_ADDR' => 'Адрес на подателя',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Име на подателя',
    'LBL_GROUP_QUEUE' => 'Assign To Group',
    'LBL_HOME' => 'Начало',
    'LBL_LIST_MAILBOX_TYPE' => 'Пощенска кутия за',
    'LBL_LIST_NAME' => 'Име:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Тип',
    'LBL_LIST_SERVER_URL' => 'Сървър за електронна поща:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LOGIN' => 'Потребител',
    'LBL_USERNAME' => 'Потребител',
    'LBL_MAILBOX_DEFAULT' => 'Входящи',
    'LBL_MAILBOX_SSL' => 'Използване на SSL',
    'LBL_MAILBOX_TYPE' => 'Възможни действия',
    'LBL_DISTRIBUTION_METHOD' => 'Метод на дистрибутиране',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Шаблон за автоматичен отговор при създаване на казус',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Изберете шаблон, който да бъде изпращан в отговор на създаден казус. Отговорът съдържа номера на казуса от полето Относно, който кореспондира с Case Macro настройките. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => 'Папка с получени съобщения',
    'LBL_TRASH_FOLDER' => 'Папка за изтрити съобщения',
    'LBL_SENT_FOLDER' => 'Папка за изпратени съобщения',
    'LBL_SELECT' => 'Избери',
    'LBL_MARK_READ_NO' => 'Маркиране на писмата като изтрити след импортиране',
    'LBL_MARK_READ_YES' => 'Запазване на писмата на сървъра след импортиране',
    'LBL_MARK_READ' => 'Запазване на писмата на сървъра',
    'LBL_MAX_AUTO_REPLIES' => 'Брой автоматични отговори',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Задаване на максимален брой автоматични отговори за изпращане в рамките на 24 часа.',
    'LBL_PERSONAL_MODULE_NAME' => 'Персонална пощенска кутия',
    'LBL_CREATE_CASE' => 'Създаване на казус при получаване на писмо',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Пощенска кутия за обработка на грешки',
    'LBL_MODULE_TITLE' => 'Входяща поща',
    'LBL_NAME' => 'Име',
    'LBL_NONE' => 'Без отговор',
    'LBL_ONLY_SINCE_NO' => 'Не. Проверка за всички налични писма на пощенския сървър.',
    'LBL_ONLY_SINCE_YES' => 'Да.',
    'LBL_PASSWORD' => 'Парола',
    'LBL_EMAIL_PASSWORD' => 'Парола',
    'LBL_POP3_SUCCESS' => 'POP3 проверка е премината успешно.',
    'LBL_POPUP_TITLE' => 'Проверка на настройките',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Select Subscribed Folder(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Select Trash Folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Select Sent Folder',
    'LBL_DELETED_FOLDERS_LIST' => 'Следната(ите) папка(и) %s не съществуват или са били изтрити от сървъра',
    'LBL_PORT' => 'Порт на сървъра',
    'LBL_REPLY_TO_NAME' => 'Отговор до',
    'LBL_REPLY_TO_ADDR' => 'Адрес за отговор',
    'LBL_SAME_AS_ABOVE' => 'Using From Name/Address',
    'LBL_SERVER_OPTIONS' => 'Допълнителни настройки',
    'LBL_SERVER_TYPE' => 'Протокол за получаване',
    'LBL_SERVER_PORT' => 'Порт на сървъра',
    'LBL_SERVER_URL' => 'Сървър за електронна поща',
    'LBL_SSL_DESC' => 'Ако сървърът за електронна поща поддържа SSL, маркирането на тази опция ще активира SSL връзка при изтегляне на електронни писма.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'The selected team has access to the mail account.',
    'LBL_SSL' => 'Използване на SSL',
    'LBL_STATUS' => 'Статус',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'По подразбиране',
    'LBL_TEST_BUTTON_TITLE' => 'Тестов',
    'LBL_TEST_SETTINGS' => 'Проверка на настройките',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Връзката е осъществена успешно.',
    'LBL_TEST_WAIT_MESSAGE' => 'Моля, изчакайте...',
    'LBL_WARN_IMAP_TITLE' => 'Inbound Email Disabled',
    'LBL_WARN_IMAP' => 'Внимание:',
    'LBL_WARN_NO_IMAP' => 'Модулът за Входяща електронна поща <b>не може</b> да функционира без IMAP бибилиотеките да са компилирaни и разрешени в PHP дистрибуцията. Моля свържете се с администратора за разрешаване на проблема.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Автоматизирани задачи',
    'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
    'LBL_GROUPFOLDER_ID' => 'Групова папка',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Потребителите могат да изпращат електронни писма от името и през адреса на груповата пощенска кутия',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Когато опцията е маркирана, потребителите с достъп до груповата пощенска кутия имат опцията да изберат името и адреса в нея като свои данни при изпращане на електронни писма.',
    'LBL_STATUS_ACTIVE' => 'Активен',
    'LBL_STATUS_INACTIVE' => 'Неактивен',
    'LBL_IS_PERSONAL' => 'Персонална',
    'LBL_IS_GROUP' => 'група',
    'LBL_ENABLE_AUTO_IMPORT' => 'Автоматично импортиране на писмата',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Предупреждение: Правите изменения в настройките за автоматичен импорт, което може да довете до загуба на данни.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Предупреждение: Автоматичният импорт трябва да бъде разрешен когато създавате казуси в следствие на получено писмо.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Архивирани писма',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Електронна поща',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Отговор',
    'LNK_SENT_EMAIL_LIST' => 'Изпратени',
    'LBL_EDIT_LAYOUT' => 'Редактиране на подредби' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Модифицирано от',
    'LBL_SERVICE' => 'Услуга',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Метод на дистрибутиране',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Тип',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'По подразбиране',
    'LBL_SIGNATURE' => 'Подпис',

    'LBL_OWNER_NAME' => 'Собствени записи',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
