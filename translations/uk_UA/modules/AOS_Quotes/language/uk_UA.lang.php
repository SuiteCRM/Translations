<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODIFIED' => 'Ким змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем (за іменем)',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Title',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Title',
    'LBL_ACCOUNT' => 'Компанія:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Рейтинг',
    'LBL_ASSIGNED_USER' => 'User',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_ACCOUNT_INFORMATION' => 'Огляд',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_DUPLICATE' => 'Можливо дублікат контрагента',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_EMAIL_ADDRESS' => 'Адреса електронної пошти',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Контрагенти',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'MSG_DUPLICATE' => 'Створення цього облікового запису може потенційно створити дубльований Контрагент. Ви можете вибрати Контрагента із нижченаведеного списку або натиснути на кнопку "Зберегти" для створення нового Контрагенту із вказаними даними.',
    'MSG_SHOW_DUPLICATES' => 'Створення цього Контрагента може потенційно створити дублікат. Ви можете натиснути на кнопку "Зберегти", щоб продовжити створення нового Контрагента з раніше введеними даними або ж можете натиснути кнопку "Скасувати".',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'Список комерційних пропозицій',
    'LBL_MODULE_NAME' => 'Комерційні пропозиції',
    'LBL_MODULE_TITLE' => 'Комерційні пропозиції: Головна',
    'LBL_HOMEPAGE_TITLE' => 'Мої пропозиції',
    'LNK_NEW_RECORD' => 'Створити комерційну пропозицію',
    'LNK_LIST' => 'Переглянути пропозиції',
    'LBL_SEARCH_FORM_TITLE' => 'Шукати пропозиції',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_NEW_FORM_TITLE' => 'Нова пропозиція',
    'LBL_TERMS_C' => 'Умови',
    'LBL_APPROVAL_ISSUE' => 'Проблеми затвердження',
    'LBL_APPROVAL_STATUS' => 'Статус затвердження',
    'LBL_BILLING_ACCOUNT' => 'Account',
    'LBL_BILLING_CONTACT' => 'Контакт',
    'LBL_EXPIRATION' => 'Дійсний до',
    'LBL_QUOTE_NUMBER' => 'Номер пропозиції',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_TEMPLATE_DDOWN_C' => 'Шаблон пропозиції',
    'LBL_STAGE' => 'Статус пропозиції',
    'LBL_TERM' => 'Умови оплати',
    'LBL_SUBTOTAL_AMOUNT' => 'Проміжний підсумок',
    'LBL_DISCOUNT_AMOUNT' => 'Знижка',
    'LBL_TAX_AMOUNT' => 'Податок',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Всього',
    'VALUE' => 'Title',
    'LBL_EMAIL_ADDRESSES' => 'Адреси електронної пошти',
    'LBL_LINE_ITEMS' => 'Позиції',
    'LBL_GRAND_TOTAL' => 'Загалом',
    'LBL_INVOICE_STATUS' => 'Статус рахунку',
    'LBL_PRODUCT_QUANITY' => 'Кількість',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Опис',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Знижка',
    'LBL_UNIT_PRICE' => 'Ціна продажу',
    'LBL_TOTAL_PRICE' => 'Всього',
    'LBL_VAT' => 'Податок', // VAT
    'LBL_VAT_AMT' => 'Сума податку', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Додати рядок товарів',
    'LBL_SERVICE_NAME' => 'Послуги',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Ціна продажу',
    'LBL_SERVICE_DISCOUNT' => 'Знижка',
    'LBL_ADD_SERVICE_LINE' => 'Додати рядок послуг ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remove',
    'LBL_CONVERT_TO_INVOICE' => 'Перетворити на рахунок',
    'LBL_PRINT_AS_PDF' => 'Роздрукувати в PDF',
    'LBL_EMAIL_QUOTE' => 'Відіслати пропозицію на електронну пошту',
    'LBL_CREATE_CONTRACT' => 'Нова угода',
    'LBL_LIST_NUM' => '№',
    'LBL_PDF_NAME' => 'Пропозиція',
    'LBL_EMAIL_NAME' => 'Пропозиція на',
    'LBL_QUOTE_DATE' => 'Дата пропозиції',
    'LBL_NO_TEMPLATE' => 'Помилка\nШаблони не знайдено. Якщо ви не створили шаблон Пропозиції, перейдіть на сторінку шаблонів PDF та створіть один новий',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Проміжний підсум + податки',//pre shipping
    'LBL_EMAIL_PDF' => 'Надіслати PDF',
    'LBL_ADD_GROUP' => 'Додати групу',
    'LBL_DELETE_GROUP' => 'Видалити групу',
    'LBL_GROUP_NAME' => 'Назва групи',
    'LBL_GROUP_TOTAL' => 'Проміжний підсумок по групі',
    'LBL_SHIPPING_TAX' => 'Податок на доставку',
    'LBL_SHIPPING_TAX_AMT' => 'Податок на доставку',
    'LBL_IMPORT_LINE_ITEMS' => 'Імпортувати позиції прейскуранту',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Проміжний підсумок (валюта за замовчуванням)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Знижка (валюта за замовчуванням)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Податок (валюта за замовчуванням)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Доставка (валюта за замовчуванням)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Всього (валюта за замовчуванням)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Податок на доставку (валюта за замовчуванням)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Загалом (валюта за замовчуванням)',
    'LBL_QUOTE_TO' => 'Пропозиція на',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Проміжний підсумок та податок (валюта за замовчуванням)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Пропозиції: Угоди',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Пропозиції: Рахунки',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Групи позицій',
    'LBL_AOS_PRODUCT_QUOTES' => 'Пропозиції товарів',
    'LBL_AOS_QUOTES_PROJECT' => 'Комерційні пропозиції: Проєкт',
);
