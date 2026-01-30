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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Номер запису має бути зазначений для видалення попереднього контакту.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Описання контрагента',
    'LBL_ACCOUNT_ID' => 'Контрагент',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
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
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальний користувач:',
    'LBL_CITY' => 'Місто',
    'LBL_CONTACT_ID' => 'Контакт',
    'LBL_CONTACT_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Попередній контакт:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Попередній контакт-Угода:',
    'LBL_CONTACT_ROLE' => 'Роль:',
    'LBL_CONTACT' => 'Попередній контакт',
    'LBL_CONVERTED_ACCOUNT' => 'Перетворений контрагент:',
    'LBL_CONVERTED_CONTACT' => 'Перетворений контакт:',
    'LBL_CONVERTED_OPP' => 'Перетворена угода:',
    'LBL_CONVERTED' => 'Перетворений',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Перетворити попередній контакт',
    'LBL_CONVERTLEAD' => 'Перетворити попередній контакт',
    'LBL_CONVERTLEAD_WARNING' => 'Попередження: Статус даного попереднього контакту встановлено у значення "Перетворений". Можливо, відповідні контакт і/або контрагент вже були створені. Якщо ви хочете продовжити перетворення, натисніть на кнопку "Зберегти", в іншому разі натисніть на кнопку "Скасувати".',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Можливий контакт:',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_CREATED_NEW' => 'Створено новий',
    'LBL_CREATED_ACCOUNT' => 'Створений новий контрагент',
    'LBL_CREATED_CALL' => 'Створено новий дзвінок',
    'LBL_CREATED_CONTACT' => 'Створено новий контакт',
    'LBL_CREATED_MEETING' => 'Створено нову зустріч',
    'LBL_CREATED_OPPORTUNITY' => 'Створено нову угоду',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Попередні контакти',
    'LBL_DEPARTMENT' => 'Відділ:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DO_NOT_CALL' => 'Не дзвонити:',
    'LBL_DUPLICATE' => 'Можливо, дублюючий попередній контакт',
    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'LBL_EMAIL_OPT_OUT' => 'Відмова від маркетингового листування:',
    'LBL_EXISTING_ACCOUNT' => 'Використаний існуючий контрагент',
    'LBL_EXISTING_CONTACT' => 'Використаний існуючий контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Використана існуюча угода',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Ім\'я:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_HOME_PHONE' => 'Домашній тел.:',
    'LBL_IMPORT_VCARD' => 'Імпортування vCard',
    'LBL_VCARD' => 'Візитна картка (vCard)',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматичне створення нового попереднього контакту при імпортуванні файлу vCard.',
    'LBL_INVALID_EMAIL' => 'Невірна електронна пошта:',
    'LBL_INVITEE' => 'Підлеглі',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Описання джерела попереднього контакту:',
    'LBL_LEAD_SOURCE' => 'Джерело попереднього контакту:',
    'LBL_LIST_ACCEPT_STATUS' => 'Підтвердження',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_CONTACT_NAME' => 'Попередній контакт',
    'LBL_LIST_CONTACT_ROLE' => 'Роль',
    'LBL_LIST_DATE_ENTERED' => 'Дата створення',
    'LBL_LIST_EMAIL_ADDRESS' => 'Електронна пошта',
    'LBL_LIST_FIRST_NAME' => 'Ім\'я',
    'LBL_LIST_FORM_TITLE' => 'Список попередніх контактів',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Описання джерела попереднього контакту',
    'LBL_LIST_LEAD_SOURCE' => 'Джерело попереднього контакту:',
    'LBL_LIST_MY_LEADS' => 'Мої попередні контакти',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_PHONE' => 'Робочий тел.',
    'LBL_LIST_REFERED_BY' => 'Рекомендований:',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_TITLE' => 'Посада',
    'LBL_MOBILE_PHONE' => 'Мобільний тел.:',
    'LBL_MODULE_NAME' => 'Попередні контакти',
    'LBL_MODULE_TITLE' => 'Попередні контакти: Головна',
    'LBL_NAME' => 'Ім’я:',
    'LBL_NEW_FORM_TITLE' => 'Створити попередній контакт',
    'LBL_OFFICE_PHONE' => 'Робочий тел.:',
    'LBL_OPP_NAME' => 'Угода:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Сума по угоді:',
    'LBL_OPPORTUNITY_ID' => 'Угода',
    'LBL_OPPORTUNITY_NAME' => 'Угода:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Додаткова електронна адреса:',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_APP' => 'Портальні додатки',
    'LBL_PORTAL_INFORMATION' => 'Портальна інформація',
    'LBL_PORTAL_NAME' => 'Назва порталу:',
    'LBL_POSTAL_CODE' => 'Індекс:',
    'LBL_STREET' => 'Вулиця',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основна адреса - місто:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основна адреса - країна:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основна адреса - індекс:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основна адреса - область:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Основна адреса - вулиця 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Основна адреса - вулиця 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основна адреса - вулиця:',
    'LBL_PRIMARY_ADDRESS' => 'Основна адреса:',
    'LBL_REFERED_BY' => 'Рекомендований:',
    'LBL_REPORTS_TO_ID' => 'Керівник',
    'LBL_REPORTS_TO' => 'Керівник:',
    'LBL_SALUTATION' => 'Звернення',
    'LBL_MODIFIED' => 'Змінено',
    'LBL_CREATED' => 'Ким створено',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти попередній контакт',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Вибрати зазначені попередні контакти',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Вибрати зазначені попередні контакти',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_STATUS_DESCRIPTION' => 'Описання статусу ',
    'LBL_STATUS' => 'Статус:',
    'LBL_TITLE' => 'Посада:',
    'LNK_IMPORT_VCARD' => 'Створити попередній контакт з vCard',
    'LNK_LEAD_LIST' => 'Огляд попередніх контактів',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',
    'LNK_NEW_APPOINTMENT' => 'Новий захід',
    'LNK_NEW_CONTACT' => 'Новий контакт',
    'LNK_NEW_LEAD' => 'Новий попередній контакт',
    'LNK_NEW_NOTE' => 'Нова примітка або вкладення',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LNK_SELECT_ACCOUNTS' => 'Вибрати контрагента',
    'LNK_SELECT_CONTACTS' => ' <b>АБО</b> Оберіть контакт',
    'NTC_DELETE_CONFIRMATION' => 'Ви дійсно хочете видалити цей запис?',
    'NTC_REMOVE_CONFIRMATION' => 'Ви дійсно хочете видалити цей попередній контакт з даної угоди?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Маркетингові кампанії',
    'LBL_CAMPAIGN' => 'Маркетингова кампанія:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальний користувач',
    'LBL_PROSPECT_LIST' => 'Адресати',
    'LBL_CAMPAIGN_LEAD' => 'Маркетингові кампанії',
    'LBL_BIRTHDATE' => 'Дата народження:',
    'LBL_ASSISTANT_PHONE' => 'Телефон асистента',
    'LBL_ASSISTANT' => 'Асистент',
    'LBL_CREATED_USER' => 'Створено',
    'LBL_MODIFIED_USER' => 'Змінено',
    'LBL_CAMPAIGNS' => 'Маркетингові кампанії',
    'LBL_CONVERT_MODULE_NAME' => 'Модуль',
    'LBL_CONVERT_REQUIRED' => 'Необхідне',
    'LBL_CONVERT_SELECT' => 'Дозволити виділення',
    'LBL_CONVERT_COPY' => 'Копіювати дані',
    'LBL_CONVERT_EDIT' => 'Змінити',
    'LBL_CONVERT_DELETE' => 'Видалити',
    'LBL_CONVERT_ADD_MODULE' => 'Додати модуль',
    'LBL_CREATE' => 'Створити',
    'LBL_SELECT' => 'АБО вибрати',
    'LBL_WEBSITE' => 'Сайт',
    'LNK_IMPORT_LEADS' => 'Імпорт попередніх контактів',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Модуль, в якому буде створено новий запис.',
    'LBL_REQUIRED_TIP' => 'Необхідні модулі повинні бути створені або обрані до процесу конвертації попереднього контакту.',
    'LBL_COPY_TIP' => 'Якщо опція відмічена, то дані з полів попереднього контакту будуть скопійовані у відповідні поля створюваних записів.',
    'LBL_SELECTION_TIP' => 'Записи інших модулів, пов&#039;язані з модулем "Контакти", можуть бути або створені в процесі конвертації, або вибрані зі списку вже існуючих записів.',
    'LBL_EDIT_TIP' => 'Редагування макета сторінки конвертації для даного модуля.',
    'LBL_DELETE_TIP' => 'Видалення даного модуля з макета сторінки конвертації.',

    'LBL_ACTIVITIES_MOVE' => 'Перемістити діяльність до',
    'LBL_ACTIVITIES_COPY' => 'Скопіювати діяльність в',
    'LBL_ACTIVITIES_MOVE_HELP' => "Оберіть запис, у який потрібно перемістити активність Попереднього контакту. Завдання, дзвінки, зустрічі, нотатки та листи будуть переміщені у вибрані записи.",
    'LBL_ACTIVITIES_COPY_HELP' => "Виберіть запис(и), для яких потрібно створювати копії діяльності Попереднього контакту. Нові завдання, дзвінки, Зустрічі та Нотатки будуть створені для кожного з вибраних записів. Електронні листи будуть пов'язані з вибраними записами.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Маркетингова кампанія',
    'LBL_EDITLAYOUT' => 'Правка розташування' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Введіть дату' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Завантаження' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Змінити' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Події',
);
