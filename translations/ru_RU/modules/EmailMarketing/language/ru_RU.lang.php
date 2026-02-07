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
    'LBL_REPLY_ADDR' => 'Ответить (адрес): ',
    'LBL_REPLY_NAME' => 'Ответить (имя): ',

    'LBL_MODULE_NAME' => 'Рассылки E-mail',
    'LBL_MODULE_TITLE' => 'Рассылки E-mail: ГЛАВНАЯ',
    'LBL_LIST_FORM_TITLE' => 'Рассылки E-mail',
    'LBL_NAME' => 'Имя',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_LIST_FROM_ADDR' => 'От',
    'LBL_LIST_DATE_START' => 'Дата начала',
    'LBL_LIST_TEMPLATE_NAME' => 'Шаблон E-mail',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_STATUS' => 'Статус',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Статус:',
    'LBL_TEMPLATE_NAME' => 'Шаблон проекта',
    'LBL_DATE_ENTERED' => 'Дата ввода',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Исправлено: ',
    'LBL_CREATED' => 'Создано: ',
    'LBL_MESSAGE_FOR' => 'Отправить сообщение (кому):',

    'LBL_FROM_NAME' => 'От - имя: ',
    'LBL_FROM_ADDR' => 'От - адрес E-mail: ',
    'LBL_DATE_START' => 'Дата начала',
    'LBL_SEND_DATE' => 'Дата отправки',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Начальное время ',
    'LBL_START_DATE_TIME' => 'Дата и время начала: ',
    'LBL_TEMPLATE' => 'Выбор шаблона письма',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Исправлено: ',
    'LBL_CREATED_BY' => 'Создано: ',

    'LNK_NEW_CAMPAIGN' => 'Создать маркет. кампанию',
    'LNK_CAMPAIGN_LIST' => 'Маркет. кампании',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Создать список адресатов',
    'LNK_PROSPECT_LIST_LIST' => 'Списки адресатов',
    'LNK_NEW_PROSPECT' => 'Создать адресата',
    'LNK_PROSPECT_LIST' => 'Адресаты',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Рассылки E-mail',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Создать',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Правка',
    'LBL_FROM_MAILBOX' => 'Почтовый ящик для возвращаемых писем',
    'LBL_FROM_MAILBOX_NAME' => 'Почтовый ящик для возвращаемых писем:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Учётная запись для исходящей почты:',
    'LBL_FROM' => 'От',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Списки адресатов',
    'LBL_ALL_PROSPECT_LISTS' => 'ВСЕМ спискам адресатов маркетинговой кампании',
    'LBL_RELATED_PROSPECT_LISTS' => 'ВЫБРАННЫМ спискам адресатов маркетинговой кампании.',
    'LBL_PROSPECT_LIST_NAME' => 'Название списка',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Целевые списки',
    'LBL_MODULE_SEND_TEST' => 'Кампания: Отправить тест',
    'LBL_MODULE_SEND_EMAILS' => 'Кампания: Отправить письма',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Пожалуйста, выберите сообщения кампании, которые вы хотели бы проверить:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Пожалуйста, выберите сообщения кампании, которые вы хотите отправить в заданное время:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Отправить',
    'LBL_SEND_BUTTON_LABEL' => 'Отправить',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Расписание',
    'LBL_ERROR_ON_MARKETING' => 'Обязательные поля не заполнены',

    'LBL_CAMPAIGN_ID' => 'Маркет. кампания (ID)',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID учётной записи исходящей почты',
    'LBL_EMAIL_TEMPLATE' => 'Шаблон E-mail',
    'LBL_PROSPECT_LISTS' => 'Список адресатов',
    'LBL_OVERVIEW' => 'Основные данные',
    'LBL_EMAIL_CONFIG' => 'Настройка E-mail',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'Электронная Почта',
    'LBL_BODY' => 'Текст сообщения',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Опрос',
    'LBL_SCHEDULE' => 'Расписание',
    'LBL_DELETE_TEST_ENTRIES' => 'Удаление тестовых данных',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Пользователи',
    'LBL_SEND_TEST_EMAIL' => 'Тестирование',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Сообщения, находящиеся в очереди отправки',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Запускать ночью проверку почтовых ящиков для возвращаемых писем',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Планировщик',
    'LBL_INBOUND_EMAIL' => 'Входящие E-mail',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
