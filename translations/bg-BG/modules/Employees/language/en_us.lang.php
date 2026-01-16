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
    'LBL_MODULE_NAME' => 'Служители',
    'LBL_MODULE_TITLE' => 'Служители',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Служители"',
    'LBL_LIST_FORM_TITLE' => 'Служители',
    'LBL_NEW_FORM_TITLE' => 'Нов служител',
    'LBL_LOGIN' => 'Вход',
    'LBL_RESET_PREFERENCES' => 'Връщане към стандартни настройки',
    'LBL_TIME_FORMAT' => 'Формат на часа:',
    'LBL_DATE_FORMAT' => 'Формат на датата:',
    'LBL_TIMEZONE' => 'Текущо време:',
    'LBL_CURRENCY' => 'Валута:',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_LIST_EMPLOYEE_NAME' => 'Име на служителя',
    'LBL_LIST_DEPARTMENT' => 'Отдел',
    'LBL_LIST_REPORTS_TO_NAME' => 'Докладва на',
    'LBL_LIST_EMAIL' => 'Електронна поща',
    'LBL_LIST_USER_NAME' => 'Потребител',
    'LBL_ERROR' => 'Грешка:',
    'LBL_PASSWORD' => 'Парола за идентификация:',
    'LBL_USER_NAME' => 'Потребителско име:',
    'LBL_USER_TYPE' => 'Тип потребител',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_THEME' => 'Визуализация:',
    'LBL_LANGUAGE' => 'Език:',
    'LBL_ADMIN' => 'Администратор:',
    'LBL_EMPLOYEE_INFORMATION' => 'Информация за служителя',
    'LBL_OFFICE_PHONE' => 'Служебен телефон:',
    'LBL_REPORTS_TO' => 'Докладва на:',
    'LBL_REPORTS_TO_NAME' => 'Докладва на',
    'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
    'LBL_NOTES' => 'Бележки:',
    'LBL_DEPARTMENT' => 'Отдел:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Адрес:',
    'LBL_ANY_PHONE' => 'Телефон:',
    'LBL_ANY_EMAIL' => 'Електронна поща:',
    'LBL_ADDRESS' => 'Адрес:',
    'LBL_CITY' => 'Град:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Пощенски код:',
    'LBL_COUNTRY' => 'Държава:',
    'LBL_NAME' => 'Име:',
    'LBL_MOBILE_PHONE' => 'Мобилен номер:',
    'LBL_FAX' => 'Факс:',
    'LBL_EMAIL' => 'Електронна поща:',
    'LBL_EMAIL_LINK_TYPE' => 'Пощенски клиент',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Домашен телефон:',
    'LBL_WORK_PHONE' => 'Телефон:',
    'LBL_EMPLOYEE_STATUS' => 'Статус на служителя:',
    'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
    'LBL_SAVED_SEARCH' => 'Настройки на подредби',
    'LBL_MESSENGER_ID' => 'IM име:',
    'LBL_MESSENGER_TYPE' => 'IM тип:',
    'ERR_LAST_ADMIN_1' => 'Име на служителя "',
    'ERR_LAST_ADMIN_2' => '" е последен служител с администраторски права. Поне един служител трябва да има администраторски права.',
    'LNK_NEW_EMPLOYEE' => 'Добавяне на нов служител',
    'LNK_EMPLOYEE_LIST' => 'Служители',
    'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Статус на служителя',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Уведомление при присвоен запис:',
    'LBL_IS_ADMIN' => 'е администратор:',
    'LBL_GROUP' => 'Групов потребител',
    'LBL_PHOTO' => 'Снимка',
    'LBL_DELETE_USER_CONFIRM' => 'Служителита са също и потребители на системата.
Изтриването на запис на служителите ще изтрие записа на потребителите, и потребителите вече няма да имат достъп до приложението.
Искате ли да продължите с изтриването на този запис?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Наистина ли желаете да изтриете този служител?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Избери' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentication Id',
    'LBL_EXT_AUTHENTICATE' => 'External Authentication',
    'LBL_GROUP_USER' => 'Групов потребител',
    'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
    'LBL_MODIFIED_BY' => 'Модифицирано от',
    'LBL_MODIFIED_BY_ID' => 'Модифицирано от',
    'LBL_CREATED_BY_NAME' => 'Създадено от', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Портален потребител',
    'LBL_PSW_MODIFIED' => 'Password Last Changed',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'Парола',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Системно Генерирана Парола',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_FAX_PHONE' => 'Факс',
    'LBL_STATUS' => 'Статус',
    'LBL_ADDRESS_CITY' => 'Град',
    'LBL_ADDRESS_COUNTRY' => 'Държава',
    'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
    'LBL_ADDRESS_POSTALCODE' => 'Пощенски код',
    'LBL_ADDRESS_STATE' => 'Област',
    'LBL_ADDRESS_STREET' => 'Улица',

    'LBL_DATE_MODIFIED' => 'Модифицирано на',
    'LBL_DATE_ENTERED' => 'Въведено на',
    'LBL_DELETED' => 'Изтрити',

    'LBL_BUTTON_SELECT' => 'Избери',
    'LBL_BUTTON_CLEAR' => 'Изчисти',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Токени',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Роли',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Целева група',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
