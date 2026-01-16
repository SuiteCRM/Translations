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
    'LBL_MODULE_NAME' => 'Типи валюти',
    'LBL_LIST_FORM_TITLE' => 'Типи валюти',
    'LBL_CURRENCY' => 'Валюта',
    'LBL_ADD' => 'Додати',
    'LBL_MERGE' => 'Об&#039;єднати',
    'LBL_MERGE_TXT' => 'Будь ласка, виберіть валюти, які Ви хочете відображувати як поточні. В результаті будуть видалені всі решта валют, а всі значення будуть асоційовані з обраною валютою.',
    'LBL_US_DOLLAR' => 'Долари США',
    'LBL_DELETE' => 'Видалити',
    'LBL_LIST_SYMBOL' => 'Символ валюти',
    'LBL_LIST_NAME' => 'Валюта',
    'LBL_LIST_ISO4217' => 'Код ISO-4217',
    'LBL_LIST_ISO4217_HELP' => 'Введіть три символи коду валюти у відповідності зі стандартом ISO 4217.',
    'LBL_UPDATE' => 'Оновити',
    'LBL_LIST_RATE' => 'Курс обміну',
    'LBL_LIST_RATE_HELP' => 'Курс обміну 0.5 для Євро означає, що 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Статус',
    'LNK_NEW_CONTACT' => 'Новий контакт',
    'LNK_NEW_ACCOUNT' => 'Новий контрагент',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
    'LNK_NEW_CALL' => 'Призначити дзвінок',
    'LNK_NEW_EMAIL' => 'Написати листа',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_TASK' => 'Нове завдання',
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис? При доступі до будь-якого запису, що використовує цю валюту відбудеться її конвертація у валюту за замовчуванням. Краще всього поставити статус "Не активна"',
    'LBL_BELOW_MIN' => 'Курс обміну повинен бути більше 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Активна',
            'Inactive' => 'Неактивна',
        ),
    'LBL_CREATED_BY' => 'Ким створено',
    'LBL_EDIT_LAYOUT' => 'Правка розташування' /*for 508 compliance fix*/,
);
