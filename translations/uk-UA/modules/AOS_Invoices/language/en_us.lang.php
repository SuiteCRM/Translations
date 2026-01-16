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
    'LBL_NAME' => 'Посада',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'ERR_DELETE_RECORD' => 'Перед видаленням повинен бути вказаний номер запису.',
    'LBL_ACCOUNT_NAME' => 'Посада',
    'LBL_ACCOUNT' => 'Компанія:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_ADDRESS_INFORMATION' => 'Адресна інформація',
    'LBL_ANNUAL_REVENUE' => 'Річний дохід:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_ANY_PHONE' => 'Тел.:',
    'LBL_RATING' => 'Рейтинг',
    'LBL_ASSIGNED_USER' => 'Користувач',
    'LBL_BILLING_ADDRESS_CITY' => 'Юридична адреса - місто:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Юридична адреса - країна:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Юридична адреса - індекс:',
    'LBL_BILLING_ADDRESS_STATE' => 'Юридична адреса - область:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Юридична адреса - вулиця 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Юридична адреса - вулиця 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Юридична адреса - вулиця 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Юридична адреса - вулиця:',
    'LBL_BILLING_ADDRESS' => 'Юридична адреса',
    'LBL_ACCOUNT_INFORMATION' => 'Огляд',
    'LBL_CITY' => 'Місто',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_DUPLICATE' => 'Можливо дублюючий контрагент',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Кількість співробітників:',
    'LBL_FAX' => 'Факс:',
    'LBL_INDUSTRY' => 'Галузь:',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CITY' => 'Місто',
    'LBL_LIST_EMAIL_ADDRESS' => 'Адреса електронної пошти',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_STATE' => 'Область',
    'LBL_MEMBER_OF' => 'Материнська компанія:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Дочірні організації',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_OWNERSHIP' => 'Форма власності:',
    'LBL_PARENT_ACCOUNT_ID' => 'Батьківський контрагент',
    'LBL_PHONE_ALT' => 'Дод. тел.:',
    'LBL_PHONE_FAX' => 'Тел. (факс):',
    'LBL_PHONE_OFFICE' => 'Тел. робочий:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_POSTAL_CODE' => 'Індекс:',
    'LBL_SAVE_ACCOUNT' => 'Збереження контрагента',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Фактична адреса - місто:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Фактична адреса - країна:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Фактична адреса - індекс:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Фактична адреса - область:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Фактична адреса - вулиця 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Фактична адреса - вулиця 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Фактична адреса - вулиця 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Фактична адреса - вулиця:',
    'LBL_SHIPPING_ADDRESS' => 'Фактична адреса:',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_TICKER_SYMBOL' => 'Біржовий код:',
    'LBL_TYPE' => 'Тип:',
    'LBL_WEBSITE' => 'Сайт:',
    'LNK_ACCOUNT_LIST' => 'Контрагенти',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',
    'MSG_DUPLICATE' => 'Створення цього облікового запису може потенційно створити дубльований Контрагент. Ви можете вибрати Контрагента із нижченаведеного списку або натиснути на кнопку "Зберегти" для створення нового Контрагенту із вказаними даними.',
    'MSG_SHOW_DUPLICATES' => 'Створення цього Контрагента може потенційно створити дублікат. Ви можете натиснути на кнопку "Зберегти", щоб продовжити створення нового Контрагента з раніше введеними даними або ж можете натиснути кнопку "Скасувати".',
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис?',
    'LBL_LIST_FORM_TITLE' => 'Список рахунків-фактур',
    'LBL_MODULE_NAME' => 'Рахунок-фактура',
    'LBL_MODULE_TITLE' => 'Рахунки: Головна',
    'LBL_HOMEPAGE_TITLE' => 'Мої рахунки',
    'LNK_NEW_RECORD' => 'Створити рахунок',
    'LNK_LIST' => 'Перегляд рахунків',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук рахунків',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_NEW_FORM_TITLE' => 'Новий рахунок',
    'LBL_TERMS_C' => 'Умови',
    'LBL_APPROVAL_ISSUE' => 'Проблеми затвердження',
    'LBL_APPROVAL_STATUS' => 'Статус затвердження',
    'LBL_BILLING_ACCOUNT' => 'Контрагент',
    'LBL_BILLING_CONTACT' => 'Контакт',
    'LBL_EXPIRATION' => 'Дійсний до',
    'LBL_INVOICE_NUMBER' => 'Номер рахунку',
    'LBL_OPPORTUNITY' => 'Угода:',
    'LBL_TEMPLATE_DDOWN_C' => 'Шаблони рахунка-фактури',
    'LBL_STAGE' => 'Статус пропозиції',
    'LBL_TERM' => 'Умови оплати',
    'LBL_SUBTOTAL_AMOUNT' => 'Проміжний підсумок',
    'LBL_DISCOUNT_AMOUNT' => 'Знижка',
    'LBL_TAX_AMOUNT' => 'Податок',
    'LBL_SHIPPING_AMOUNT' => 'Вантажні перевезення',
    'LBL_TOTAL_AMT' => 'Всього',
    'VALUE' => 'Посада',
    'LBL_EMAIL_ADDRESSES' => 'Адреси електронної пошти',
    'LBL_LINE_ITEMS' => 'Позиція',
    'LBL_GRAND_TOTAL' => 'Загалом',
    'LBL_QUOTE_NUMBER' => 'Номер пропозиції',
    'LBL_QUOTE_DATE' => 'Дата пропозиції',
    'LBL_INVOICE_DATE' => 'Дата рахунку',
    'LBL_DUE_DATE' => 'Дата завершення',
    'LBL_STATUS' => 'Статус',
    'LBL_INVOICE_STATUS' => 'Статус рахунку',
    'LBL_PRODUCT_QUANITY' => 'Кількість',
    'LBL_PRODUCT_NAME' => 'Продукт',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_NOTE' => 'Замітка',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_LIST_PRICE' => 'Список',
    'LBL_DISCOUNT_AMT' => 'Знижка',
    'LBL_UNIT_PRICE' => 'Ціна продажу',
    'LBL_TOTAL_PRICE' => 'Всього',
    'LBL_VAT' => 'Податок', //VAT
    'LBL_VAT_AMT' => 'Сума податку', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Додати рядок товарів',
    'LBL_SERVICE_NAME' => 'Послуги',
    'LBL_SERVICE_LIST_PRICE' => 'Список',
    'LBL_SERVICE_PRICE' => 'Ціна продажу',
    'LBL_SERVICE_DISCOUNT' => 'Знижка',
    'LBL_ADD_SERVICE_LINE' => 'Додати рядок послуг ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Видалити',
    'LBL_PRINT_AS_PDF' => 'Роздрукувати в PDF',
    'LBL_EMAIL_INVOICE' => 'Надіслати рахунок',
    'LBL_LIST_NUM' => '№',
    'LBL_PDF_NAME' => 'Рахунок',
    'LBL_EMAIL_NAME' => 'Рахунок для',
    'LBL_NO_TEMPLATE' => 'Помилка\nШаблони не знайдено. Якщо ви не створили шаблон рахунку, перейдіть на сторінку шаблонів PDF та створіть один новий',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Проміжний підсум + податки',//pre shipping
    'LBL_EMAIL_PDF' => 'Надіслати PDF',
    'LBL_ADD_GROUP' => 'Додати групу',
    'LBL_DELETE_GROUP' => 'Видалити групу',
    'LBL_GROUP_NAME' => 'Назва групи',
    'LBL_GROUP_TOTAL' => 'Підсумки по групі',
    'LBL_SHIPPING_TAX' => 'Податок на доставку',
    'LBL_SHIPPING_TAX_AMT' => 'Податок на доставку',
    'LBL_IMPORT_LINE_ITEMS' => 'Імпортувати позиції прейскуранту',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Проміжний підсумок (валюта за замовчуванням)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Знижка (валюта за замовчуванням)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Податки (валюта за замовчуванням)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Доставка (валюта за замовчуванням)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Всього (валюта за замовчуванням)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Податок на доставку (валюта за замовчуванням)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Загалом (валюта за замовчуванням)',
    'LBL_INVOICE_TO' => 'Рахунок для',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Групи позицій',
    'LBL_AOS_PRODUCT_QUOTES' => 'Пропозиції за товаром',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Пропозиції: Рахунки',
);
