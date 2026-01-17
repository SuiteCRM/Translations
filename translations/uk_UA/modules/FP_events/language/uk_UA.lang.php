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
    'LBL_CREATED_USER' => 'Створено користувачем',
    'LBL_MODIFIED_USER' => 'Змінено користувачем',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_EDIT_BUTTON' => 'Змінити',
    'LBL_REMOVE' => 'Видалити',
    'LBL_LIST_FORM_TITLE' => 'Список заходів',
    'LBL_MODULE_NAME' => 'Подія',
    'LBL_MODULE_TITLE' => 'Подія',
    'LBL_HOMEPAGE_TITLE' => 'Мій захід',
    'LNK_NEW_RECORD' => 'Створити захід',
    'LNK_LIST' => 'Перегляд заходів',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук заходів',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_NEW_FORM_TITLE' => 'Новий захід',
    'LBL_LOCATION' => 'Місце',
    'LBL_START_DATE' => 'дата початку',
    'LBL_END_DATE' => 'Дата/Час закінчення',
    'LBL_BUDGET' => 'Бюджет',
    'LBL_DATE' => 'Дата початку',
    'LBL_DATE_END' => 'Дата закінчення',
    'LBL_DURATION' => 'Тривалість',
    'LBL_INVITE_TEMPLATES' => 'Шаблон запрошення електронним листом',
    'LBL_INVITE_PDF' => 'Надіслати запрошення',
    'LBL_EDITVIEW_PANEL1' => 'Подробиці заходу',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Делегати',
    'LBL_ACCEPT_REDIRECT' => 'Прийняти переадресацію URL',
    'LBL_DECLINE_REDIRECT' => 'Відхилити переадресацію URL',
    'LBL_SELECT_DELEGATES' => 'Оберіть делегатів',
    'LBL_SELECT_DELEGATES_TITLE' => 'Оберіть делегатів:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Цільовий список',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Огляд потенційних клієнтів',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Контакти',
    'LBL_SELECT_DELEGATES_LEADS' => 'Попередні контакти',
    'LBL_MANAGE_DELEGATES' => 'Керування делегатами',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Керування делегатами:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Керування прийняттями запрошень',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Керування прийняттями запрошень:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Прийнято',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Відхилено',
    'LBL_MANAGE_POPUP_ERROR' => 'Делегати не вибрані.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Запрошено',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Не запрошено',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Відвідано',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Не відвідано',
    'LBL_SUCCESS_MSG' => 'Усі запрошення були відправлені.',
    'LBL_ERROR_MSG_1' => 'Всі пов’язані контакти вже були запрошені.',
    'LBL_ERROR_MSG_2' => 'Не вдалося відправити запрошення електронною поштою! Будь ласка, перевірте ваші налаштування електронної пошти.',
    'LBL_ERROR_MSG_3' => 'Понад 10 листів не вдалося відправити. Будь ласка, перевірте, чи всі контакти, яких ви запрошуєте, мають дійсну адресу електронної пошти. (Див. файл журналу suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' листів не вдалося відправити. Будь ласка, перевірте, чи всі контакти, яких ви запрошуєте, мають дійсну адресу електронної пошти. (Див. файл журналу suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Неприпустимий шаблон електронного листа',
    'LBL_EMAIL_INVITE' => 'Запрошення електронною поштою',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Контакти',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Місця',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Попередні контакти',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Огляд потенційних клієнтів',

    'LBL_HOURS_ABBREV' => 'год.',
    'LBL_MINSS_ABBREV' => 'хвил.',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Делегати',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Назва',
    'LBL_ACCOUNT_NAME' => 'Компанія',
    'LBL_SIGNATURE' => 'Підпис',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Запрошено',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Статус',

    'LBL_ACTIVITY_STATUS' => 'Статус активності',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Місця події із заголовку події',
    // Email links
    'LBL_ACCEPT_LINK' => 'Прийнято',
    'LBL_DECLINE_LINK' => 'Відхилено',
    
);
