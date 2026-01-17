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
    'LBL_REPLY_ADDR' => 'Адреса для відповіді: ',
    'LBL_REPLY_NAME' => 'Ім&#039;я для відповіді: ',

    'LBL_MODULE_NAME' => 'Розсилки електронної пошти',
    'LBL_MODULE_TITLE' => 'Розсилки електронною поштою: Головна',
    'LBL_LIST_FORM_TITLE' => 'Список маркетингових кампаній',
    'LBL_NAME' => 'Назва: ',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_FROM_ADDR' => 'З адреси',
    'LBL_LIST_DATE_START' => 'Дата початку',
    'LBL_LIST_TEMPLATE_NAME' => 'Шаблон листа',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_STATUS' => 'Статус',
    'LBL_STATUS_TEXT' => 'Статус:',
    'LBL_TEMPLATE_NAME' => 'Назва шаблону',
    'LBL_DATE_ENTERED' => 'Дата вводу',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Автор змін:',
    'LBL_CREATED' => 'Створено:',
    'LBL_MESSAGE_FOR' => 'Надіслати повідомлення (кому):',

    'LBL_FROM_NAME' => 'Від: ',
    'LBL_FROM_ADDR' => 'Адреса відправника',
    'LBL_DATE_START' => 'Дата початку',
    'LBL_TIME_START' => 'Час початку ',
    'LBL_START_DATE_TIME' => 'Дата і час початку: ',
    'LBL_TEMPLATE' => 'Шаблон листа: ',

    'LBL_MODIFIED_BY' => 'Автор змін:',
    'LBL_CREATED_BY' => 'Створено:',

    'LNK_NEW_CAMPAIGN' => 'Створити маркетингову кампанію',
    'LNK_CAMPAIGN_LIST' => 'Маркетингові кампанії',
    'LNK_NEW_PROSPECT_LIST' => 'Новий цільовий список',
    'LNK_PROSPECT_LIST_LIST' => 'Цільові списки',
    'LNK_NEW_PROSPECT' => 'Новий потенційний клієнт',
    'LNK_PROSPECT_LIST' => 'Огляд потенційних клієнтів',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Розсилки електронної пошти',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Створити',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Змінити',
    'LBL_FROM_MAILBOX' => 'Від (обліковий запис)',
    'LBL_FROM_MAILBOX_NAME' => 'Використати обліковий запис:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Обліковий запис вихідної електронної пошти:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Цільові списки',
    'LBL_ALL_PROSPECT_LISTS' => 'Всім цільовим спискам кампанії',
    'LBL_RELATED_PROSPECT_LISTS' => 'Всі цільові списки, співвіднесені з цим повідомленням.',
    'LBL_PROSPECT_LIST_NAME' => 'Назва списку',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Цільові списки',
    'LBL_MODULE_SEND_TEST' => 'Кампанія: Відправити пробний лист',
    'LBL_MODULE_SEND_EMAILS' => 'Кампанія: Відправити листи',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Будь ласка, виберіть повідомлення кампанії, які ви хочете протестувати:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Будь ласка, виберіть повідомлення кампанії, які ви хочете підготувати для розсилки в обрані дату і час:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Відправити',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Відправити',
    'LBL_ERROR_ON_MARKETING' => 'Деякі обов\'язкові поля відсутні',

    'LBL_CAMPAIGN_ID' => 'Маркетингова кампанія',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID облікового запису вихідної електронної пошти',
    'LBL_EMAIL_TEMPLATE' => 'Шаблон листа',
    'LBL_PROSPECT_LISTS' => 'Списки потенційних клієнтів',

);
