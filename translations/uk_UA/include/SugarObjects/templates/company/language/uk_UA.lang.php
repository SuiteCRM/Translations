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
    'ERR_DELETE_RECORD' => 'Перед видаленням повинен бути вказаний номер запису.',
    'LBL_ACCOUNT_NAME' => 'Назва компанії:',
    'LBL_ACCOUNT' => 'Компанія:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_ADDRESS_INFORMATION' => 'Адресна інформація',
    'LBL_ANNUAL_REVENUE' => 'Річний дохід:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_EMAIL_NON_PRIMARY' => 'Не основна електронна пошта',
    'LBL_ANY_PHONE' => 'Тел.:',
    'LBL_ASSIGNED_TO_NAME' => 'Користувач:',
    'LBL_RATING' => 'Рейтинг',
    'LBL_ASSIGNED_TO' => 'Відповідальна особа:',
    'LBL_ASSIGNED_USER' => 'Відповідальна особа:',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальна особа:',
    'LBL_BILLING_ADDRESS_CITY' => 'Юридична адреса - місто:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Юридична адреса - країна:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Юридична адреса - індекс:',
    'LBL_BILLING_ADDRESS_STATE' => 'Юридична адреса - область:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Юридична адреса - вулиця 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Юридична адреса - вулиця 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Юридична адреса - вулиця 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Юридична адреса - вулиця:',
    'LBL_BILLING_ADDRESS' => 'Юридична адреса',
    'LBL_ACCOUNT_INFORMATION' => 'Відомості про компанію',
    'LBL_CITY' => 'Місто',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_DATE_ENTERED' => 'Дата створення:',
    'LBL_DATE_MODIFIED' => 'Дата зміни:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_DESCRIPTION_INFORMATION' => 'Опис інформації',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DUPLICATE' => 'Можливо дублюючий контрагент',
    'LBL_EMAIL' => 'Електронна пошта:',
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
    'LBL_NAME' => 'Ім’я:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_OWNERSHIP' => 'Форма власності:',
    'LBL_PARENT_ACCOUNT_ID' => 'Батьківський контрагент',
    'LBL_PHONE_ALT' => 'Дод. тел.:',
    'LBL_PHONE_FAX' => 'Тел. (факс):',
    'LBL_PHONE_OFFICE' => 'Робочий тел.:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_EMAIL_ADDRESS' => 'Адреса електронної пошти',
    'LBL_EMAIL_ADDRESSES' => 'Адрес(и) електронної пошти',
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

    'LBL_STATE' => 'Область:',
    'LBL_TICKER_SYMBOL' => 'Біржовий код:',
    'LBL_TYPE' => 'Тип:',
    'LBL_WEBSITE' => 'Сайт:',

    'LNK_ACCOUNT_LIST' => 'Контрагенти',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',

    'MSG_DUPLICATE' => 'Контрагент, якого Ви створюєте, можливо, дублює вже наявний запис. Схожі контрагенти показані нижче. Натисніть кнопку "Зберегти" для продовження створення нового контрагента або кнопку "Відмовитися" для повернення в модуль.',
    'MSG_SHOW_DUPLICATES' => 'Контрагент, якого Ви створюєте, можливо, дублює вже наявний запис. Схожі контрагенти показані нижче. Натисніть кнопку "Зберегти" для продовження створення нового контрагента або кнопку "Відмовитися" для повернення в модуль.',

    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис?',

    'LBL_EDIT_BUTTON' => 'Редагувати  ',
    'LBL_REMOVE' => 'Видалити',

);
