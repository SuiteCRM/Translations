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
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням контакту.',
    'LBL_ACCOUNT_ID' => 'Контрагент:',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_CAMPAIGN' => 'Маркетингова кампанія:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_ADDRESS_INFORMATION' => 'Адресна інформація',
    'LBL_ALT_ADDRESS_CITY' => 'Альтернативна адреса - місто:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Альтернативна адреса - країна:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Альтернативна адреса - індекс:',
    'LBL_ALT_ADDRESS_STATE' => 'Альтернативна адреса - область:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Альтернативна адреса - вулиця 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Альтернативна адреса - вулиця 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Альтернативна адреса - вулиця:',
    'LBL_ALTERNATE_ADDRESS' => 'Додаткова адреса:',
    'LBL_ALT_ADDRESS' => 'Додаткова адреса:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_ANY_PHONE' => 'Тел.:',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа:',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальний користувач',
    'LBL_ASSISTANT_PHONE' => 'Телефон асистента:',
    'LBL_ASSISTANT' => 'Асистент:',
    'LBL_BIRTHDATE' => 'Дата народження:',
    'LBL_CITY' => 'Місто',
    'LBL_CAMPAIGN_ID' => 'Маркетингова кампанія',
    'LBL_CONTACT_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Контактна особа:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Контакт-Угода:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACT' => 'Контакт:',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_CREATED_ACCOUNT' => 'Створений новий контрагент',
    'LBL_CREATED_CALL' => 'Створено новий дзвінок',
    'LBL_CREATED_CONTACT' => 'Створено новий контакт',
    'LBL_CREATED_MEETING' => 'Створено нову зустріч',
    'LBL_CREATED_OPPORTUNITY' => 'Створено нову угоду',
    'LBL_DATE_MODIFIED' => 'Дата зміни:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контакти',
    'LBL_DEPARTMENT' => 'Відділ:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Підлеглі',
    'LBL_DO_NOT_CALL' => 'Не дзвонити:',
    'LBL_DUPLICATE' => 'Можливо продубльований контакт',
    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'LBL_EMAIL_OPT_OUT' => 'Відмова від маркетингового листування:',
    'LBL_EXISTING_ACCOUNT' => 'Використаний існуючий контрагент',
    'LBL_EXISTING_CONTACT' => 'Використаний існуючий контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Використана існуюча угода',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Ім\'я:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_HOME_PHONE' => 'Домашній тел.:',
    'LBL_ID' => 'Код:',
    'LBL_IMPORT_VCARD' => 'Імпортування vCard',
    'LBL_VCARD' => 'Візитна картка (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматичне створення нового контакту при імпортуванні файлу vCard.',
    'LBL_INVALID_EMAIL' => 'Невірна електронна пошта:',
    'LBL_INVITEE' => 'Підлеглі',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_LEAD_SOURCE' => 'Джерело попереднього контакту:',
    'LBL_LIST_ACCEPT_STATUS' => 'Підтвердження',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_CONTACT_ROLE' => 'Роль',
    'LBL_LIST_EMAIL_ADDRESS' => 'Електронна пошта',
    'LBL_LIST_FIRST_NAME' => 'Ім\'я',
    'LBL_LIST_FORM_TITLE' => 'Список контактів',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_PHONE' => 'Робочий тел.',
    'LBL_LIST_TITLE' => 'Посада',
    'LBL_MOBILE_PHONE' => 'Мобільний тел.:',
    'LBL_MODIFIED' => 'Змінено:',
    'LBL_MODULE_NAME' => 'Контакти',
    'LBL_MODULE_TITLE' => 'Контакти: Головна',
    'LBL_NAME' => 'Ім’я:',
    'LBL_NEW_FORM_TITLE' => 'Новий контакт',
    'LBL_NOTE_SUBJECT' => 'Тема нотатки',
    'LBL_OFFICE_PHONE' => 'Робочий тел.:',
    'LBL_OPP_NAME' => 'Угода:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Роль угоди:',
    'LBL_OPPORTUNITY_ROLE' => 'Роль угоди',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_APP' => 'Портальні додатки',
    'LBL_PORTAL_INFORMATION' => 'Портальна інформація',
    'LBL_PORTAL_NAME' => 'Назва порталу:',
    'LBL_STREET' => 'Вулиця',
    'LBL_POSTAL_CODE' => 'Індекс:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основна адреса - місто:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основна адреса - країна:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основна адреса - індекс:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основна адреса - область:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Основна адреса - вулиця 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Основна адреса - вулиця 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основна адреса - вулиця:',
    'LBL_PRIMARY_ADDRESS' => 'Основна адреса:',
    'LBL_PRODUCTS_TITLE' => 'Товари',
    'LBL_REPORTS_TO_ID' => 'Керівник:',
    'LBL_REPORTS_TO' => 'Керівник:',
    'LBL_RESOURCE_NAME' => 'Назва ресурсу',
    'LBL_SALUTATION' => 'Привітання:',
    'LBL_SAVE_CONTACT' => 'Зберегти контакт',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук контактів',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Вибрати зазначені контакти',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Вибрати зазначені контакти',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_SYNC_CONTACT' => 'Синхронізація з Outlook®:',
    'LBL_PROSPECT_LIST' => 'Адресати',
    'LBL_TITLE' => 'Посада:',
    'LNK_CONTACT_LIST' => 'Перегляд контактів',
    'LNK_IMPORT_VCARD' => 'Новий контакт з vCard',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',
    'LNK_NEW_APPOINTMENT' => 'Новий захід',
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LNK_NEW_CONTACT' => 'Новий контакт',
    'LNK_NEW_EMAIL' => 'Відправити листа в архів',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_NOTE' => 'Нова примітка або вкладення',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_SELECT_ACCOUNT' => "Вибір клієнта",
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис?',
    'NTC_SNOOZE_CONFIRMATION' => 'Чи бажаєте відкласти сповіщення?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Для створення угоди необхідний контрагент. Будь ласка, або створіть новий контрагент, або виберіть один з вже існуючих.',
    'NTC_REMOVE_CONFIRMATION' => 'Ви дійсно хочете видалити цей контакт з даного звернення?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Попередні контакти',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Угоди',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Копіювати в Основна адреса',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Копіювати в Інша адреса',

    'LBL_CASES_SUBPANEL_TITLE' => 'Звернення',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Відстеження помилок',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PROJECTS_RESOURCES' => 'Ресурси проекту',
    'LBL_CAMPAIGNS' => 'Маркетингові кампанії',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Маркетингові кампанії',
    'LBL_LIST_CITY' => 'Місто',
    'LBL_LIST_STATE' => 'Область',
    'LBL_HOMEPAGE_TITLE' => 'Мої контакти',
    'LBL_OPPORTUNITIES' => 'Угоди',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LNK_IMPORT_CONTACTS' => 'Імпорт контактів',

    // SNIP
    'LBL_USER_SYNC' => 'Синхронізація користувачів',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Події',

    'LBL_AOP_CASE_UPDATES' => 'Оновлення у Зверненнях',
    'LBL_CREATE_PORTAL_USER' => 'Створити користувача порталу',
    'LBL_ENABLE_PORTAL_USER' => 'Активувати користувача порталу',
    'LBL_DISABLE_PORTAL_USER' => 'Вимкнути користувача порталу',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Не вдалося створити користувача порталу',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Не вдалося активувати користувача порталу',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Не вдалося вимкнути користувача порталу',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Створений користувач порталу',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Включений користувач порталу',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Вимкнений користувач порталу',
    'LBL_NO_JOOMLA_URL' => 'Не вказано URL порталу',
    'LBL_PORTAL_USER_TYPE' => 'Тип користувача порталу',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Обліковий запис вимкнено',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID облікового запису Joomla',

    'LBL_AOS_CONTRACTS' => 'Угоди',
    'LBL_AOS_INVOICES' => 'Рахунок-фактура',
    'LBL_AOS_QUOTES' => 'Комерційні пропозиції',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Контакти проєкту з заголовку проєкту',
    'LBL_LAST_MEETING' => 'Ваша остання взаємодія була зустріччю:',
    'LBL_LAST_CALL' => 'Ваша остання взаємодія була дзвінком:',
    'LBL_LAST_EMAIL' => 'Ваша остання взаємодія була електронною поштою:',
    'LBL_NO_INTERACTION' => 'Ви ще не взаємодіяли з цим контактом.',

    'LBL_LIST_INVITE_STATUS' => 'Стан запрошення',
);
