<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_NAME' => 'Название',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Название',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_REMOVE' => 'Удалить',
    'LBL_LIST_FORM_TITLE' => 'Event List',
    'LBL_MODULE_NAME' => 'Событие',
    'LBL_MODULE_TITLE' => 'Событие',
    'LBL_HOMEPAGE_TITLE' => 'My Event',
    'LNK_NEW_RECORD' => 'Create Event',
    'LNK_LIST' => 'View Events',
    'LBL_SEARCH_FORM_TITLE' => 'Search Event',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => 'Место',
    'LBL_START_DATE' => 'start date',
    'LBL_END_DATE' => 'End Date/Time',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Start Date',
    'LBL_DATE_END' => 'End Date',
    'LBL_DURATION' => 'Duration',
    'LBL_INVITE_TEMPLATES' => 'Шаблон приглашения',
    'LBL_INVITE_PDF' => 'Send Invites',
    'LBL_EDITVIEW_PANEL1' => 'Детали события',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegates',
    'LBL_ACCEPT_REDIRECT' => 'Показать страницу при принятии приглашения',
    'LBL_DECLINE_REDIRECT' => 'Показать страницу при отказе от приглашения',
    'LBL_SELECT_DELEGATES' => 'Выбрать участников',
    'LBL_SELECT_DELEGATES_TITLE' => 'Выбор участников:',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Target List',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Адресаты',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Контакты',
    'LBL_SELECT_DELEGATES_LEADS' => 'Предварительные контакты',
    'LBL_MANAGE_DELEGATES' => 'Указать статус участников',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Указать статус выбранных участников:',
    'LBL_MANAGE_ACCEPTANCES' => 'Результат отправки приглашений',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Указать результат отправки приглашений:',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Принято',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Отклонено',
    'LBL_MANAGE_POPUP_ERROR' => 'Не выбрано ни одного участника.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Приглашён',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Не приглашён',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Участвовал',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Не участвовал',
    'LBL_SUCCESS_MSG' => 'Все приглашения успешно отправлены.',
    'LBL_ERROR_MSG_1' => 'Все указанные контакты уже были приглашены.',
    'LBL_ERROR_MSG_2' => 'Отправка приглашений не удалась! Проверьте настройки исходящей почты.',
    'LBL_ERROR_MSG_3' => 'Отправка более чем 10 приглашений не удалась. Убедитесь, что у всех приглашаемых контактов указаны корректные E-mail. (детали содержатся в файле suitecrm.log).',
    'LBL_ERROR_MSG_4' => ' приглашений не удалось отправить. Убедитесь, что у всех приглашаемых контактов указаны корректные E-mail. (детали содержатся в файле suitecrm.log).', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Неверный шаблон E-mail',
    'LBL_EMAIL_INVITE' => 'Приглашение',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Контакты',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Места',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Предварительные контакты',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Адресаты',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Название',
    'LBL_ACCOUNT_NAME' => 'Company',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Приглашён',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Статус',

    'LBL_ACTIVITY_STATUS' => 'Статус активности',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Места',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accept',
    'LBL_DECLINE_LINK' => 'Decline',
    
);
