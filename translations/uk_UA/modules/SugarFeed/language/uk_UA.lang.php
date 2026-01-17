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
    'LBL_NAME' => 'Назва',
    'LBL_SAVING' => 'Збереження...',
    'LBL_SAVED' => 'Збережено',
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_FORM_TITLE' => 'Стрічка подій',
    'LBL_MODULE_NAME' => 'Стрічка подій',
    'LBL_MODULE_TITLE' => 'Стрічка подій',
    'LBL_DASHLET_DISABLED' => 'Увага: Стрічка подій відключена, нові події не будуть відображатися в системі до активації.',
    'LBL_RECORDS_DELETED' => 'Всі дані стрічки подій були видалені, якщо стрічка подій включена, нові події будуть відображатися в системі автоматично.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Ви дійсно бажаєте видалити усі дані зі стрічки подій?',
    'LBL_FLUSH_RECORDS' => 'Очистити стрічку подій',
    'LBL_ENABLE_FEED' => 'Включити стрічку подій',
    'LBL_ENABLE_MODULE_LIST' => 'Включити для наступних модулів',
    'LBL_HOMEPAGE_TITLE' => 'Стрічка подій',
    'LNK_NEW_RECORD' => 'Створити подію',
    'LNK_LIST' => 'Стрічка подій',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти подію',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Нова подія',
    'LBL_ALL' => 'Всі відповідні',
    'LBL_USER_FEED' => 'Користувальницькі посилання',
    'LBL_ENABLE_USER_FEED' => 'Включити користувальницькі посилання',
    'LBL_TO' => 'Відправити Команді',
    'LBL_IS' => ':',
    'LBL_DONE' => 'Готово',
    'LBL_TITLE' => 'Посада',
    'LBL_ROWS' => 'Рядки',
    'LBL_CATEGORIES' => 'Модулі',
    'LBL_TIME_LAST_WEEK' => 'Минулий тиждень',
    'LBL_TIME_WEEKS' => 'тижнів',
    'LBL_TIME_DAYS' => 'днів',
    'LBL_TIME_YESTERDAY' => 'Вчора',
    'LBL_TIME_HOURS' => 'Годин',
    'LBL_TIME_HOUR' => 'Годин',
    'LBL_TIME_MINUTES' => 'Хвилин',
    'LBL_TIME_MINUTE' => 'Хвилину',
    'LBL_TIME_SECONDS' => 'Секунд',
    'LBL_TIME_SECOND' => 'Секунду',
    'LBL_TIME_AND' => 'і',
    'LBL_TIME_AGO' => 'тому',
// Activity stream
    'CREATED_CONTACT' => 'створили <b>НОВИЙ</b> {0}',
    'CREATED_OPPORTUNITY' => 'створили <b>НОВИЙ</b> {0}',
    'CREATED_CASE' => 'створили <b>НОВИЙ</b> {0}',
    'CREATED_LEAD' => 'створили <b>НОВИЙ</b> {0}',
    'FOR' => 'для', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>ЗАКРИЛИ</b> {0} ',
    'CONVERTED_LEAD' => '<b>ПЕРЕТВОРИЛИ</b> {0}',
    'WON_OPPORTUNITY' => '<b>ВИГРАЛИ</b> {0}',
    'WITH' => 'з',

    'LBL_LINK_TYPE_Link' => 'Посилання',
    'LBL_LINK_TYPE_Image' => 'Зображення',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Вибрати',
    'LBL_POST' => 'Опублікувати',
    'LBL_AUTHENTICATE' => 'Авторизація',
    'LBL_AUTHENTICATION_PENDING' => 'Не всі з вибраних зовнішніх облікових записів були авторизовані. Натисніть "Скасувати", щоб повернутися до вікна Опцій для авторизації зовнішніх облікових записів, або натисніть "Ок", щоб продовжити без авторизації.',
    'LBL_ADVANCED_SEARCH' => 'Розширений фільтр' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Show More Options',
    'LBL_HIDE_OPTIONS' => 'Сховати опції',
    'LBL_VIEW' => 'Перегляд',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
