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
    'LBL_ASSIGNED_TO_ID' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственное лицо',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED' => 'Кем создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NAME' => 'Статья',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Статья',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_ADDRESS_INFORMATION' => 'Адресная информация',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Любой E-mail:',
    'LBL_ANY_PHONE' => 'Любой тел.:',
    'LBL_RATING' => 'Рейтинг:',
    'LBL_ASSIGNED_USER' => 'Пользователь',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Billing Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Billing Address:',
    'LBL_ACCOUNT_INFORMATION' => 'Основная информация',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_EMAIL_ADDRESS' => 'Адрес E-mail',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_STATE' => 'Область',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Дополнительный E-mail:',
    'LBL_OTHER_PHONE' => 'Другой тел.:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Доп. тел.:',
    'LBL_PHONE_FAX' => 'Тел. (факс):',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Тел.:',
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
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Тип:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Контрагенты',
    'LNK_NEW_ACCOUNT' => 'Создать контрагента',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Вы уверены, что хотите отложить?',
    'LBL_LIST_FORM_TITLE' => 'Список предложений',
    'LBL_MODULE_NAME' => 'Предложения',
    'LBL_MODULE_TITLE' => 'Предложения',
    'LBL_HOMEPAGE_TITLE' => 'Мои предложения',
    'LNK_NEW_RECORD' => 'Создать предложение',
    'LNK_LIST' => 'Предложения',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск предложений',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_NEW_FORM_TITLE' => 'Новое предложение',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'Контрагент',
    'LBL_BILLING_CONTACT' => 'Контакт',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'Сделка',
    'LBL_TEMPLATE_DDOWN_C' => 'Шаблон предложения',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Итоговая строка',
    'VALUE' => 'Статья',
    'LBL_EMAIL_ADDRESSES' => 'Адрес электронной почты',
    'LBL_LINE_ITEMS' => 'Товары/Предложения',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Количество',
    'LBL_PRODUCT_NAME' => 'Продукция',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'Описание',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Итоговая строка',
    'LBL_VAT' => 'Tax', // VAT
    'LBL_VAT_AMT' => 'Tax Amount', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Услуги',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Удалить',
    'LBL_CONVERT_TO_INVOICE' => 'Преобразовать в счёт',
    'LBL_PRINT_AS_PDF' => 'Сохранить в PDF',
    'LBL_EMAIL_QUOTE' => 'Отправить по почте',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Предложение',
    'LBL_EMAIL_NAME' => 'Предложение:',
    'LBL_QUOTE_DATE' => 'Дата Создания',
    'LBL_NO_TEMPLATE' => 'ОШИБКА\nШаблоны предложений не обнаружены.\nЕсли необходимый шаблон предложения отсутствует - откройте модуль PDF-шаблонов и создайте необходимый шаблон.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Итого с учётом скидки и НДС',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Создать сделку',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_QUOTE_TO' => 'Получатель',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Итого с учётом скидки и НДС (основная валюта)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Предложения : Договоры',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Предложения : Счета',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Группа позиций',
    'LBL_AOS_PRODUCT_QUOTES' => 'Предложение-Товары',
    'LBL_AOS_QUOTES_PROJECT' => 'Предложения-Проекты',
);
