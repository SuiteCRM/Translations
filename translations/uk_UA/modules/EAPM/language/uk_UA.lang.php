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
    'LBL_ASSIGNED_TO_NAME' => 'Користувач SuiteCRM',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення',
    'LBL_DATE_MODIFIED' => 'Дата зміни',
    'LBL_MODIFIED' => 'Змінено',
    'LBL_MODIFIED_NAME' => 'Змінено користувачем',
    'LBL_CREATED' => 'Ким створено',
    'LBL_DESCRIPTION' => 'Опис',
    'LBL_DELETED' => 'Видалено',
    'LBL_NAME' => 'Ім&#039;я користувача додатка',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_FORM_TITLE' => 'Список зовнішніх облікових записів',
    'LBL_MODULE_NAME' => 'Зовнішній обліковий запис',
    'LBL_MODULE_TITLE' => 'Зовнішні облікові записи',
    'LBL_HOMEPAGE_TITLE' => 'Мої зовнішні облікові записи',
    'LNK_NEW_RECORD' => 'Створити зовнішній обліковий запис',
    'LNK_LIST' => 'Огляд зовнішніх облікових записів',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук зовнішнього джерела',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Створити зовнішній обліковий запис',
    'LBL_PASSWORD' => 'Пароль',
    'LBL_USER_NAME' => 'Ім&#039;я користувача додатка',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Додаток',
    'LBL_API_DATA' => 'Дані API',
    'LBL_API_CONSKEY' => 'Ключ користувача',
    'LBL_API_CONSSECRET' => 'Секретний ключ',
    'LBL_API_OAUTHTOKEN' => 'Токен аутентифікації',
    'LBL_AUTH_UNSUPPORTED' => "Цей метод авторизації не підтримується додатком",
    'LBL_AUTH_ERROR' => 'Спроба авторизації зовнішнього облікового запису не вдалася.',
    'LBL_VALIDATED' => 'Доступ підтверджено',
    'LBL_ACTIVE' => 'Активна',
    'LBL_OAUTH_NAME' => '%',
    'LBL_CONNECT_BUTTON_TITLE' => 'Підключити',
    'LBL_NOTE' => 'Зверніть увагу',
    'LBL_CONNECTED' => 'Доступ підтверджено',

    'LBL_ERR_NO_AUTHINFO' => 'Для цього облікового запису немає інформації для авторизації.',
    'LBL_ERR_NO_TOKEN' => 'Немає дійсних токенів для цього облікового запису',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Ви зараз не перебуваєте в системі під Вашим обліковим записом {0}. Натисніть ОК, щоб увійти в систему ще раз і активувати зовнішній обліковий запис.',

    'LBL_CLICK_TO_EDIT' => 'Натисніть для редагування',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Повторна авторизація',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Обліковий запис для цього додатку вже існує. Ми відновили існуючий обліковий запис.',
    'LBL_OMIT_URL' => '(Без http:// або https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Натисніть <b>Підключити</b>, і вас пернаправить на сторінку, де потрібно буде надати інформацію про ваш обліковий запис та дати дозвіл на нього для SuiteCRM. Після з\'єднання, ви будете направлені назад на SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Натисніть <b>Підключити</b> для з\'єднання цього облікового запису з SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Щоб підключитися, дозвольте виринаючі вікна в браузері або додайте сайт "{0}" до списку винятків з заборони.',

    'LBL_API_OAUTHSECRET' => 'Ключ API OAuth',
);
