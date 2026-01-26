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
    'LBL_MODULE_NAME' => 'Співробітники',
    'LBL_MODULE_TITLE' => 'Співробітники: Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук співробітника',
    'LBL_LIST_FORM_TITLE' => 'Співробітники',
    'LBL_NEW_FORM_TITLE' => 'Створити співробітника',
    'LBL_LOGIN' => 'Логін',
    'LBL_RESET_PREFERENCES' => 'Скинути до стандартних налаштувань',
    'LBL_TIME_FORMAT' => 'Формат часу',
    'LBL_DATE_FORMAT' => 'Формат дати',
    'LBL_TIMEZONE' => 'Часовий пояс',
    'LBL_CURRENCY' => 'Валюта:',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_LIST_EMPLOYEE_NAME' => 'Ім&#039;я співробітника',
    'LBL_LIST_DEPARTMENT' => 'Відділ',
    'LBL_LIST_REPORTS_TO_NAME' => 'Керівник',
    'LBL_LIST_EMAIL' => 'Електронна пошта',
    'LBL_LIST_USER_NAME' => 'Логін',
    'LBL_ERROR' => 'Помилка:',
    'LBL_PASSWORD' => 'Пароль:',
    'LBL_USER_NAME' => 'Ім&#039;я користувача:',
    'LBL_USER_TYPE' => 'Тип користувача',
    'LBL_FIRST_NAME' => 'Ім\'я:',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_THEME' => 'Тема',
    'LBL_LANGUAGE' => 'Переклад:',
    'LBL_ADMIN' => 'Адміністратор',
    'LBL_EMPLOYEE_INFORMATION' => 'Інформація про співробітника',
    'LBL_OFFICE_PHONE' => 'Робочий тел.:',
    'LBL_REPORTS_TO' => 'Керівник',
    'LBL_REPORTS_TO_NAME' => 'Керівник',
    'LBL_OTHER_PHONE' => 'Додатковий тел.:',
    'LBL_NOTES' => 'Замітки',
    'LBL_DEPARTMENT' => 'Відділ:',
    'LBL_TITLE' => 'Посада:',
    'LBL_ANY_ADDRESS' => 'Адреса:',
    'LBL_ANY_PHONE' => 'Тел.:',
    'LBL_ANY_EMAIL' => 'Будь-яка електронна адреса:',
    'LBL_ADDRESS' => 'Адреса:',
    'LBL_CITY' => 'Місто',
    'LBL_STATE' => 'Штат чи регіон:',
    'LBL_POSTAL_CODE' => 'Індекс:',
    'LBL_COUNTRY' => 'Країна:',
    'LBL_NAME' => 'Ім’я:',
    'LBL_MOBILE_PHONE' => 'Мобільний тел.:',
    'LBL_FAX' => 'Факс:',
    'LBL_EMAIL' => 'Електронна пошта:',
    'LBL_EMAIL_LINK_TYPE' => 'Клієнтська програма електронної пошти',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Поштовий клієнт SuiteCRM:</b> Відправляйте пошту за допомогою клієнта в додатку SuiteCRM.<br><b>Зовнішній поштовий клієнт:</b> Відправляйте пошту використовуючи інший, зовнішній для SuiteCRM клієнт, наприклад, вашу копію Microsoft Outlook на комп\'ютері.',
    'LBL_HOME_PHONE' => 'Домашній тел.:',
    'LBL_WORK_PHONE' => 'Робочий тел.:',
    'LBL_EMPLOYEE_STATUS' => 'Статус співробітника:',
    'LBL_PRIMARY_ADDRESS' => 'Основна адреса:',
    'LBL_SAVED_SEARCH' => 'Налаштування зовнішнього вигляду',
    'LBL_MESSENGER_ID' => 'Ім&#039;я в IM:',
    'LBL_MESSENGER_TYPE' => 'IM-служба:',
    'ERR_LAST_ADMIN_1' => 'Ім&#039;я співробітника "',
    'ERR_LAST_ADMIN_2' => '"- останній співробітник з доступом адміністратора. Хоча б один користувач повинен бути адміністратором.',
    'LNK_NEW_EMPLOYEE' => 'Новий співробітник',
    'LNK_EMPLOYEE_LIST' => 'Перегляд Співробітників',
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Статус співробітника',

    'LBL_SUITE_LOGIN' => 'Є користувачем',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Сповіщати при призначенні',
    'LBL_IS_ADMIN' => 'Є адміністратором',
    'LBL_GROUP' => 'Груповий користувач',
    'LBL_PHOTO' => 'Фотографія',
    'LBL_DELETE_USER_CONFIRM' => 'Цей Співробітник також є користувачем. При видаленні запису Співробітника буде також видалено запис Користувача, і Користувач більше не буде мати доступ до додатка. Ви хочете продовжити і видалити цей запис?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Ви впевнені, що хочете видалити цього співробітника?',
    'LBL_ONLY_ACTIVE' => 'Активні співробітники',
    'LBL_SELECT' => 'Вибрати' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Id аутентифікації',
    'LBL_EXT_AUTHENTICATE' => 'Зовнішня авторизація',
    'LBL_GROUP_USER' => 'Груповий користувач',
    'LBL_LIST_ACCEPT_STATUS' => 'Підтвердження',
    'LBL_MODIFIED_BY' => 'Змінено',
    'LBL_MODIFIED_BY_ID' => 'Змінено користувачем',
    'LBL_CREATED_BY_NAME' => 'Ким створено', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Користувач API порталу.',
    'LBL_PSW_MODIFIED' => 'остання зміна паролю',
    'LBL_SHOW_ON_EMPLOYEES' => 'Показати історію співробітника',
    'LBL_USER_HASH' => 'Пароль',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Пароль, згенерований системою',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_FAX_PHONE' => 'Факс',
    'LBL_STATUS' => 'Статус',
    'LBL_ADDRESS_CITY' => 'Адреса - місто',
    'LBL_ADDRESS_COUNTRY' => 'Адреса - країна',
    'LBL_ADDRESS_INFORMATION' => 'Адресна інформація',
    'LBL_ADDRESS_POSTALCODE' => 'Адреса - індекс',
    'LBL_ADDRESS_STATE' => 'Адреса - область',
    'LBL_ADDRESS_STREET' => 'Адреса - вулиця',

    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_DATE_ENTERED' => 'Дата вводу',
    'LBL_DELETED' => 'Видалено',

    'LBL_BUTTON_SELECT' => 'Вибрати',
    'LBL_BUTTON_CLEAR' => 'Очистити',

    'LBL_CONTACTS_SYNC' => 'Синхронізація контактів',
    'LBL_OAUTH_TOKENS' => 'Токени OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Користувачі проєкту з заголовку проєкту',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Контакти проєкту з заголовків контактів',
    'LBL_ROLES' => 'Ролі',
    'LBL_SECURITYGROUPS' => 'Групи Користувачів',
    'LBL_PROSPECT_LIST' => 'Адресати',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Інтерфейс двофакторної автентифікації:',
    'LBL_EDITOR_TYPE' => 'Редактор',
);
