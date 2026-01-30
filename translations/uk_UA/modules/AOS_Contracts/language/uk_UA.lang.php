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
    'LBL_ASSIGNED_TO_NAME' => 'Керування угодами',
    'LBL_CONTRACT_ACCOUNT' => 'Контрагент',
    'LBL_OPPORTUNITY' => 'Угода',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Видалено',
    'LBL_NAME' => 'Назва угоди',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_FORM_TITLE' => 'Список угод',
    'LBL_MODULE_NAME' => 'Угоди',
    'LBL_MODULE_TITLE' => 'Угоди: Головна сторінка',
    'LBL_HOMEPAGE_TITLE' => 'Мої угоди',
    'LNK_NEW_RECORD' => 'Нова угода',
    'LNK_LIST' => 'Переглянути угоди',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук угод',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Нова угода',
    'LBL_CONTRACT_NAME' => 'Назва угоди',
    'LBL_REFERENCE_CODE ' => 'Код угоди для посилання на неї ',
    'LBL_START_DATE' => 'Дата початку',
    'LBL_END_DATE' => 'Дата закінчення',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Сума угоди',
    'LBL_STATUS' => 'Статус',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Дата підпису покупцем',
    'LBL_COMPANY_SIGNED_DATE' => 'Дата підпису нашою компанією',
    'LBL_RENEWAL_REMINDER' => ' Нагадування про поновлення угоди',
    'LBL_RENEWAL_REMINDER_DATE' => 'Дата, коли нагадати про поновлення',
    'LBL_CONTRACT_TYPE' => 'Тип угоди',
    'LBL_CONTACT' => 'Контакт',
    'LBL_ADD_GROUP' => 'Додати групу',
    'LBL_DELETE_GROUP' => 'Видалити групу',
    'LBL_GROUP_NAME' => 'Назва групи',
    'LBL_GROUP_TOTAL' => 'Підсумки по групі',
    'LBL_PRODUCT_QUANITY' => 'Кількість',
    'LBL_PRODUCT_NAME' => 'Продукт',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_NOTE' => 'Замітка',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_LIST_PRICE' => 'Список',
    'LBL_DISCOUNT_AMT' => 'Знижка',
    'LBL_UNIT_PRICE' => 'Ціна продажу',
    'LBL_TOTAL_PRICE' => 'Всього',
    'LBL_VAT' => 'Податок',
    'LBL_VAT_AMT' => 'Сума податку',
    'LBL_SERVICE_NAME' => 'Послуги',
    'LBL_SERVICE_LIST_PRICE' => 'Список',
    'LBL_SERVICE_PRICE' => 'Ціна продажу',
    'LBL_SERVICE_DISCOUNT' => 'Знижка',
    'LBL_LINE_ITEMS' => 'Позиція',
    'LBL_SUBTOTAL_AMOUNT' => 'Проміжний підсумок',
    'LBL_DISCOUNT_AMOUNT' => 'Знижка',
    'LBL_TAX_AMOUNT' => 'Податок',
    'LBL_SHIPPING_AMOUNT' => 'Вантажні перевезення',
    'LBL_TOTAL_AMT' => 'Всього',
    'LBL_GRAND_TOTAL' => 'Загалом',
    'LBL_SHIPPING_TAX' => 'Податок на доставку',
    'LBL_SHIPPING_TAX_AMT' => 'Податок на доставку',
    'LBL_ADD_PRODUCT_LINE' => 'Додати рядок товарів',
    'LBL_ADD_SERVICE_LINE' => 'Додати рядок послуг ',
    'LBL_PRINT_AS_PDF' => 'Роздрукувати в PDF',
    'LBL_EMAIL_PDF' => 'Надіслати PDF',
    'LBL_PDF_NAME' => 'Угода',
    'LBL_EMAIL_NAME' => 'Угода на',
    'LBL_NO_TEMPLATE' => 'Помилка\nШаблони не знайдено. Якщо ви не створили шаблон угоди, перейдіть на сторінку шаблонів PDF та створіть один новий',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Сума угоди (у валюті за замовчуванням)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Проміжний підсумок (валюта за замовчуванням)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Знижка (валюта за замовчуванням)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Податки (валюта за замовчуванням)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Доставка (валюта за замовчуванням)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Всього (валюта за замовчуванням)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Податок на доставку (валюта за замовчуванням)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Загалом (валюта за замовчуванням)',

    'LBL_CALL_ID' => 'ID дзвінка',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Групи позицій',
    'LBL_AOS_PRODUCT_QUOTES' => 'Пропозиції за товаром',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Пропозиції: Угоди',
);
