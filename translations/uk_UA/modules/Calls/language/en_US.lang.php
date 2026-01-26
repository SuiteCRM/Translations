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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Дзвінки',
    'LBL_MODULE_TITLE' => 'Дзвінки - Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук дзвінка',
    'LBL_LIST_FORM_TITLE' => 'Список дзвінків',
    'LBL_NEW_FORM_TITLE' => 'Новий захід',
    'LBL_LIST_CLOSE' => 'Закрити',
    'LBL_LIST_SUBJECT' => 'Тема',
    'LBL_LIST_CONTACT' => 'Контакт',
    'LBL_LIST_RELATED_TO' => 'Відноситься до',
    'LBL_LIST_RELATED_TO_ID' => 'Відноситься до ID',
    'LBL_LIST_DATE' => 'Дата початку',
    'LBL_LIST_DIRECTION' => 'Сортування',
    'LBL_SUBJECT' => 'Тема:',
    'LBL_REMINDER' => 'Нагадати:',
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DIRECTION' => 'Сортування:',
    'LBL_DATE' => 'Дата початку:',
    'LBL_DURATION' => 'Тривалість:',
    'LBL_DURATION_HOURS' => 'Тривалість (год.):',
    'LBL_DURATION_MINUTES' => 'Тривалість (хв.):',
    'LBL_HOURS_MINUTES' => '(годин:хвилин)',
    'LBL_DATE_TIME' => 'Дата і час початку:',
    'LBL_TIME' => 'Час початку:',
    'LBL_HOURS_ABBREV' => 'год.',
    'LBL_MINSS_ABBREV' => 'хвил.',
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_CALL_LIST' => 'Дзвінки',
    'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
    'ERR_DELETE_RECORD' => 'Перед видаленням повинен бути вказаний номер запису.',
    'LBL_INVITEE' => 'Запрошені',
    'LBL_RELATED_TO' => 'Відноситься до:',
    'LNK_NEW_APPOINTMENT' => 'Новий захід',
    'LBL_SCHEDULING_FORM_TITLE' => 'Планування',
    'LBL_ADD_INVITEE' => 'Додати запрошених',
    'LBL_NAME' => 'Назва',
    'LBL_FIRST_NAME' => 'Ім\'я',
    'LBL_LAST_NAME' => 'Прізвище',
    'LBL_EMAIL' => 'Електронна пошта',
    'LBL_PHONE' => 'Тел.',
    'LBL_REMINDER_POPUP' => 'Спливаюче',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Повідомлення всім запрошеним',
    'LBL_EMAIL_REMINDER' => 'Надіслати нагадування',
    'LBL_EMAIL_REMINDER_TIME' => 'Час надсилання нагадування',
    'LBL_SEND_BUTTON_TITLE' => 'Відправка запрошень',
    'LBL_SEND_BUTTON_LABEL' => 'Відправка запрошень',
    'LBL_DATE_END' => 'Дата закінчення',
    'LBL_REMINDER_TIME' => 'Час нагадування',
    'LBL_EMAIL_REMINDER_SENT' => 'Нагадування надіслано електронним листом',
    'LBL_SEARCH_BUTTON' => 'Знайти',
    'LBL_ADD_BUTTON' => 'Додати',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Дзвінки',
    'LNK_SELECT_ACCOUNT' => 'Вибір клієнта',
    'LNK_NEW_ACCOUNT' => 'Новий контрагент',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Попередні контакти',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_USERS_SUBPANEL_TITLE' => 'Користувачі',
    'LBL_OUTLOOK_ID' => 'ID в Outlook',
    'LBL_MEMBER_OF' => 'Входить до',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Нотатки',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_LIST_MY_CALLS' => 'Мої дзвінки',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальний користувач',
    'NOTICE_DURATION_TIME' => 'Тривалість розмови повинна бути більше 0 хвилин',
    'LBL_CALL_INFORMATION' => 'ОГЛЯД', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Видалити',
    'LBL_ACCEPT_STATUS' => 'Підтвердження',
    'LBL_ACCEPT_LINK' => 'Посилання для прийняття',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Додати запрошену особу',
    'LBL_CREATE_CONTACT' => 'Як контакт',
    'LBL_CREATE_LEAD' => 'Як лід',
    'LBL_CREATE_AND_ADD' => 'Створити та додати',
    'LBL_CANCEL_CREATE_INVITEE' => 'Скасування',
    'LBL_EMPTY_SEARCH_RESULT' => 'На жаль, нічого не знайдено. Додайте запрошену особу нижче.',
    'LBL_NO_ACCESS' => 'У вас немає доступу для створення $module',

    'LBL_REPEAT_TYPE' => 'Тип повторення',
    'LBL_REPEAT_INTERVAL' => 'Інтервал повторення',
    'LBL_REPEAT_DOW' => 'Повторити на день тижня',
    'LBL_REPEAT_UNTIL' => 'Повторювати поки',
    'LBL_REPEAT_COUNT' => 'Повторити скільки разів',
    'LBL_REPEAT_PARENT_ID' => 'Батьківський ID повторення',
    'LBL_RECURRING_SOURCE' => 'Повторюване джерело',

    'LBL_SYNCED_RECURRING_MSG' => 'Цей виклик походить з іншої системи і був синхронізований з SuiteCRM. Щоб внести зміни, перейдіть до оригінального виклику в іншій системі. Зміни, внесені в іншій системі, можуть бути синхронізовані з цим записом.',

    // for reminders
    'LBL_REMINDERS' => 'Нагадування',
    'LBL_REMINDERS_ACTIONS' => 'Дії:',
    'LBL_REMINDERS_POPUP' => 'Спливаюче',
    'LBL_REMINDERS_EMAIL' => 'Відіслати листа запрошеним особам',
    'LBL_REMINDERS_WHEN' => 'Коли:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Видалити нагадування',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Додати усіх запрошених',
    'LBL_REMINDERS_ADD_REMINDER' => 'Додати нагадування',

    'LBL_RESCHEDULE' => 'Перепланувати',
    'LBL_RESCHEDULE_COUNT' => 'Спроби дзвінків',
    'LBL_RESCHEDULE_DATE' => 'Дата',
    'LBL_RESCHEDULE_REASON' => 'Причина',
    'LBL_RESCHEDULE_ERROR1' => 'Будь ласка, оберіть дату',
    'LBL_RESCHEDULE_ERROR2' => 'Оберіть причину',
    'LBL_RESCHEDULE_PANEL' => 'Перепланувати',
    'LBL_RESCHEDULE_HISTORY' => 'Історія спроб дзвінків',
    'LBL_CANCEL' => 'Скасування',
    'LBL_SAVE' => 'Зберегти',

    'LBL_CALLS_RESCHEDULE' => 'Перепланувати дзвінки',
    'LBL_LIST_STATUS'=>'Статус',
    'LBL_LIST_DATE_MODIFIED'=>'Дата зміни',
    'LBL_LIST_DUE_DATE'=>'Дата завершення',
    'LBL_RESCHEDULED_BY'=>'Автор:',
);
