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
    'LBL_MODULE_NAME' => 'Огляд потенційних клієнтів',
    'LBL_MODULE_ID' => 'Огляд потенційних клієнтів',
    'LBL_INVITEE' => 'Підлеглі',
    'LBL_MODULE_TITLE' => 'Потенційні клієнти: Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук потенційного клієнта',
    'LBL_LIST_FORM_TITLE' => 'Цільовий список',
    'LBL_NEW_FORM_TITLE' => 'Новий потенційний клієнт',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_LIST_TITLE' => 'Посада',
    'LBL_LIST_EMAIL_ADDRESS' => 'Електронна пошта',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_FIRST_NAME' => 'Ім\'я',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальна особа:',
    'LBL_CAMPAIGN_ID' => 'Маркетингова кампанія',
    'LBL_EXISTING_ACCOUNT' => 'Використаний існуючий контрагент',
    'LBL_CREATED_ACCOUNT' => 'Створений новий контрагент',
    'LBL_CREATED_CALL' => 'Створено новий дзвінок',
    'LBL_CREATED_MEETING' => 'Створено нову зустріч',
    'LBL_NAME' => 'Ім’я:',
    'LBL_PROSPECT_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Детальна інформація',
    'LBL_FIRST_NAME' => 'Ім\'я:',
    'LBL_OFFICE_PHONE' => 'Робочий тел.:',
    'LBL_ANY_PHONE' => 'Тел.:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_MOBILE_PHONE' => 'Мобільний тел.:',
    'LBL_HOME_PHONE' => 'Домашній тел.:',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основна адреса - вулиця:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основна адреса - місто:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основна адреса - країна:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основна адреса - область:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основна адреса - індекс:',
    'LBL_ALT_ADDRESS_STREET' => 'Альтернативна адреса - вулиця:',
    'LBL_ALT_ADDRESS_CITY' => 'Альтернативна адреса - місто:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Альтернативна адреса - країна:',
    'LBL_ALT_ADDRESS_STATE' => 'Альтернативна адреса - область:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Альтернативна адреса - індекс:',
    'LBL_TITLE' => 'Посада:',
    'LBL_DEPARTMENT' => 'Відділ:',
    'LBL_BIRTHDATE' => 'Дата народження:',
    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_ASSISTANT' => 'Асистент:',
    'LBL_ASSISTANT_PHONE' => 'Телефон асистента:',
    'LBL_DO_NOT_CALL' => 'Не дзвонити:',
    'LBL_EMAIL_OPT_OUT' => 'Відмова від маркетингового листування:',
    'LBL_PRIMARY_ADDRESS' => 'Основна адреса:',
    'LBL_ALTERNATE_ADDRESS' => 'Додаткова адреса:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_CITY' => 'Місто',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_POSTAL_CODE' => 'Індекс:',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_ADDRESS_INFORMATION' => 'Адресна інформація',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_OPP_NAME' => 'Угода:',
    'LBL_IMPORT_VCARD' => 'Імпортування vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматичне створення нового контакту при імпортуванні файлу vCard.',
    'LBL_DUPLICATE' => 'Можливо, дублюючий потенційний клієнт',
    'MSG_SHOW_DUPLICATES' => 'Запис, який Ви створюєте, можливо, дублює вже наявний запис. Схожі потенційні клієнти показані нижче. Натисніть кнопку "Зберегти" для продовження створення нового потенційного клієнта або кнопку "Скасувати" для повернення в модуль без створення потенційного клієнта.',
    'MSG_DUPLICATE' => 'Запис, який Ви створюєте, можливо, дублює вже наявний запис. Схожі потенційні клієнти показані нижче. Натисніть кнопку "Зберегти" для продовження створення нового потенційного клієнта або кнопку "Скасувати" для повернення в модуль без створення потенційного клієнта.',
    'LNK_IMPORT_VCARD' => 'Створити з vCard',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_EMAIL' => 'Відправити листа в архів',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_NEW_APPOINTMENT' => 'Новий захід',
    'LNK_IMPORT_PROSPECTS' => 'Імпорт потенційних клієнтів',
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис?',
    'NTC_REMOVE_CONFIRMATION' => 'Ви дійсно хочете видалити цей контакт з даного звернення?',
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням контакту.',
    'LBL_SALUTATION' => 'Звернення',
    'LBL_CREATED_OPPORTUNITY' => 'Створено нову угоду',
    'LNK_SELECT_ACCOUNT' => "Вибір клієнта",
    'LNK_NEW_PROSPECT' => 'Новий потенційний клієнт',
    'LNK_PROSPECT_LIST' => 'Огляд потенційних клієнтів',
    'LNK_NEW_CAMPAIGN' => 'Створити маркетингову кампанію',
    'LNK_CAMPAIGN_LIST' => 'Маркетингові кампанії',
    'LNK_NEW_PROSPECT_LIST' => 'Новий цільовий список',
    'LNK_PROSPECT_LIST_LIST' => 'Цільові списки',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Вибрати зазначених потенційних клієнтів',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Вибрати зазначених потенційних клієнтів',
    'LBL_INVALID_EMAIL' => 'Невірна електронна пошта:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Огляд потенційних клієнтів',
    'LBL_PROSPECT_LIST' => 'Адресати',
    'LBL_CONVERT_BUTTON_TITLE' => 'Перетворити потенційного клієнта',
    'LBL_CONVERT_BUTTON_LABEL' => 'Перетворити потенційного клієнта',
    'LNK_NEW_CONTACT' => 'Новий контакт',
    'LBL_CREATED_CONTACT' => "Створено новий контакт",
    'LBL_CAMPAIGNS' => 'Маркетингові кампанії',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Журнал маркетингових кампаній',
    'LBL_TRACKER_KEY' => 'Ключ трекера',
    'LBL_LEAD_ID' => 'Попередній контакт',
    'LBL_CONVERTED_LEAD' => 'Перетворений попередній контакт',
    'LBL_ACCOUNT_NAME' => 'Контрагент',
    'LBL_EDIT_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_CREATED_USER' => 'Створено',
    'LBL_MODIFIED_USER' => 'Змінено',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Події',
);
