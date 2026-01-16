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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Неверный логин или пароль',
    'ERR_INI_ZLIB' => 'Невозможно временно отключить zlib-сжатие. Тестирование установок может закончиться неудачно.',
    'ERR_NO_IMAP' => 'Не найдены библиотеки IMAP. Пожалуйста, решите эту проблему перед тем. как продолжить работу с входящей почтой',
    'ERR_NO_OPTS_SAVED' => 'Оптимальные настройки не были сохранены для входящих писем. Пожалуйста, проверьте соответствующие настройки',
    'ERR_TEST_MAILBOX' => 'Пожалуйста, проверьте ваши настройки и попробуйте ещё раз.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Назначить пользователю',
    'LBL_AUTOREPLY' => 'Шаблон автоматического ответа',
    'LBL_AUTOREPLY_HELP' => 'Информировать отправителей электронных писем о том, что их сообщение было получено.',
    'LBL_BASIC' => 'Информация об учётной записи',
    'LBL_CASE_MACRO' => 'Макрос для Обращений',
    'LBL_CASE_MACRO_DESC' => 'Укажите макрос, который будет проанализирован и использован для связи импортированного E-mail с Обращением.',
    'LBL_CASE_MACRO_DESC2' => 'Вы можете установить любое значение вместо <b>CASE</b>, но не меняйте значение <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Закрыть окно',
    'LBL_CREATE_TEMPLATE' => 'Создать',
    'LBL_DELETE_SEEN' => 'Удалить прочтённые письма после импортирования',
    'LBL_EDIT_TEMPLATE' => 'Править',
    'LBL_EMAIL_OPTIONS' => 'Параметры обработки почты',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Параметры обработки возвращаемых E-mail',
    'LBL_FILTER_DOMAIN_DESC' => 'Укажите домен, на который не будут отправляться автоматические ответы.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Автоматически импортировать в систему все входящие электронные письма.',
    'LBL_FILTER_DOMAIN' => 'Не отправлять автоответ на этот домен',
    'LBL_FIND_SSL_WARN' => 'Тестирование SSL может занять продолжительное время. Пожалуйста, подождите...',
    'LBL_FROM_ADDR' => 'С адреса',
    'LBL_FROM_ADDR_DESC' => 'Указанный здесь электронный адрес может не отображаться в поле "От" отправляемого письма из-за возможных ограничений, налагаемых почтовым провайдером. В этом случае будет использоваться адрес сервера исходящей почты.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'От имени',
    'LBL_GROUP_QUEUE' => 'Приписать к группе',
    'LBL_HOME' => 'Главная',
    'LBL_LIST_MAILBOX_TYPE' => 'Действие',
    'LBL_LIST_NAME' => 'Название:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Тип',
    'LBL_LIST_SERVER_URL' => 'Почтовый сервер',
    'LBL_SERVER_ADDRESS' => 'Адрес сервера',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LOGIN' => 'Логин',
    'LBL_USERNAME' => 'Логин',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Использовать SSL',
    'LBL_MAILBOX_TYPE' => 'Возможные действия',
    'LBL_DISTRIBUTION_METHOD' => 'Алгоритм назначения ответственного',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Шаблон автоответа при создании нового Обращения',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Автоматически информировать отправителей электронных писем о создании нового Обращения. В теме письма будет содержаться номер Обращения, формат которого будет сформирован на основе макроса Обращения. Авто-ответ будет отправлен только при получении <b>первого</b> письма от отправителя.',
    'LBL_MAILBOX' => 'Проверяемые папки',
    'LBL_TRASH_FOLDER' => 'Удалённые',
    'LBL_SENT_FOLDER' => 'Отправленные',
    'LBL_SELECT' => 'Обзор',
    'LBL_MARK_READ_NO' => 'E-mail помечаются удалёнными после импортирования',
    'LBL_MARK_READ_YES' => 'Оставлять E-mail на сервере при импорте',
    'LBL_MARK_READ' => 'Оставлять сообщения на сервере',
    'LBL_MAX_AUTO_REPLIES' => 'Ограничение количества автоответов',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Установка максимального количества отправляемых автоматических ответов на уникальный E-mail в течение 24 часов.',
    'LBL_PERSONAL_MODULE_NAME' => 'Персональная учётная запись E-mail',
    'LBL_CREATE_CASE' => 'Создать Обращение из E-mail',
    'LBL_CREATE_CASE_HELP' => 'Автоматически создавать Обращения из входящих электронных писем.',
    'LBL_MODULE_NAME' => 'Учётные записи исходящей почты',
    'LBL_BOUNCE_MODULE_NAME' => 'Учётная запись для обработки возвращаемых E-mail',
    'LBL_MODULE_TITLE' => 'Учётные записи исходящей почты',
    'LBL_NAME' => 'Название',
    'LBL_NONE' => '--не выбрано--',
    'LBL_ONLY_SINCE_NO' => 'Нет. Проверьте соответствующие письма на почтовом сервере.',
    'LBL_ONLY_SINCE_YES' => 'Да.',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_EMAIL_PASSWORD' => 'Пароль',
    'LBL_POP3_SUCCESS' => 'Тест POP3 успешно пройден.',
    'LBL_POPUP_TITLE' => 'Тест настроек',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Выбрать папку/папки',
    'LBL_SELECT_TRASH_FOLDERS' => 'Выбрать папку "Удалённые"',
    'LBL_SELECT_SENT_FOLDERS' => 'Выбрать папку "Отправленные"',
    'LBL_DELETED_FOLDERS_LIST' => 'Следующие папки не существуют или были удалены с сервера: %s',
    'LBL_PORT' => 'Порт',
    'LBL_REPLY_TO_NAME' => 'Ответить на имя',
    'LBL_REPLY_TO_ADDR' => 'Ответить на адрес',
    'LBL_SAME_AS_ABOVE' => 'Использовать Имя/Адрес',
    'LBL_SERVER_OPTIONS' => 'Опции почтового сервера',
    'LBL_SERVER_TYPE' => 'Протокол почтового сервера',
    'LBL_SERVER_PORT' => 'Порт',
    'LBL_SERVER_URL' => 'Сервер входящей почты',
    'LBL_SSL_DESC' => 'Если ваш почтовый сервер поддерживает защищённое соединение, то включение данной опции приведёт к созданию SSL-соединения при импортировании E-mail.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'У выбранной команды есть доступ к учетной почтовой записи.',
    'LBL_SSL' => 'Использовать SSL',
    'LBL_STATUS' => 'Статус',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'По умолчанию',
    'LBL_TEST_BUTTON_TITLE' => 'Тестовый',
    'LBL_TEST_SETTINGS' => 'Тест настроек',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Проверить настройки соединения',
    'LBL_TEST_SUCCESSFUL' => 'Соединение успешно установлено.',
    'LBL_TEST_WAIT_MESSAGE' => 'Пожалуйста, подождите...',
    'LBL_WARN_IMAP_TITLE' => 'IMAP-предупреждение',
    'LBL_WARN_IMAP' => 'Предупреждения:',
    'LBL_WARN_NO_IMAP' => 'Эта система не имеет IMAP-клиента, откомпилированного в PHP-модуле (--with-imap=/path/to/imap_c-client_library).  Пожалуйста, свяжитесь с Вашим администратором для решений этой проблемы.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Account',
    'LNK_LIST_MAILBOXES' => 'Учётные записи исходящей почты',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Серверы исходящей почты (SMTP)',
    'LNK_LIST_SCHEDULER' => 'Планировщик',
    'LNK_SEED_QUEUES' => 'Создать очередь из групп',
    'LBL_GROUPFOLDER_ID' => 'Групповая папка(ID)',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Разрешить пользователям отправлять письма, используя в качестве адреса для ответа данные поля <<b>От</b>>',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Имя и адрес групповой учётной записи появятся в поле <<b>От</b>> при отправке писем пользователям, являющимся членами данной групповой учётной записи.',
    'LBL_STATUS_ACTIVE' => 'Активен',
    'LBL_STATUS_INACTIVE' => 'Неактивен',
    'LBL_IS_PERSONAL' => 'Персональная',
    'LBL_IS_GROUP' => 'групповая',
    'LBL_ENABLE_AUTO_IMPORT' => 'Автоматически импортировать E-mail',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Предупреждение: Вы изменяете параметр автоматического импорта, что может привести к потере данных.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Предупреждение: При автоматическом создании Обращений автоиморт также должен быть включён.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Черновики',
    'LBL_LIST_TITLE_MY_INBOX' => 'Входящие',
    'LBL_LIST_TITLE_MY_SENT' => 'Отправленный E-mail',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Архивированные E-mail',
    'LNK_MY_DRAFTS' => 'Черновики',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Просмотр E-mail',
    'LNK_QUICK_REPLY' => 'Ответить',
    'LNK_SENT_EMAIL_LIST' => 'Отправленные E-mail',
    'LBL_EDIT_LAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Изменено',
    'LBL_SERVICE' => 'Услуги',
    'LBL_STORED_OPTIONS' => 'Сохранённые параметры',
    'LBL_GROUP_ID' => 'ID группы',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Настройка автоматического ответа',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Группы пользователей',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Учётная запись исходящей почты',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Id учётной записи исходящей почты',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Учётная запись исходящей почты',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Протокол',
    'LBL_CONNECTION_STRING' => 'Строка подключения',
    'LBL_DISTRIB_METHOD' => 'Алгоритм назначения ответственного',
    'LBL_DISTRIB_OPTIONS' => 'Параметры распределения',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Внешнее OAuth соединение',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Внешнее OAuth соединение',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Внешние OAuth соединения',

    'LBL_TYPE' => 'Тип',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Стандартный',
    'LBL_SIGNATURE' => 'Подпись',

    'LBL_OWNER_NAME' => 'Владелец',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Установить по умолчанию',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
);
