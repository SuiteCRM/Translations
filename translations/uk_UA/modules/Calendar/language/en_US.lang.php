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

    'LBL_SHAREDWEEK' => 'Спільний тиждень',
    'LBL_SHAREDMONTH' => 'Спільний місяць',

    'LBL_MODULE_NAME' => 'Календар',
    'LBL_MODULE_TITLE' => 'Календар',
    'LNK_NEW_CALL' => 'Призначити дзвінок',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_CALL_LIST' => 'Дзвінки',
    'LNK_MEETING_LIST' => 'Зустрічі',
    'LNK_TASK_LIST' => 'Завдання',
    'LNK_TASK' => 'Завдання',
    'LNK_TASK_VIEW' => 'Перегляд завдань',
    'LNK_EVENT' => 'Подія',
    'LNK_EVENT_VIEW' => 'Перегляд подій',
    'LNK_VIEW_CALENDAR' => 'Сьогодні',
    'LNK_IMPORT_CALLS' => 'Імпорт дзвінків',
    'LNK_IMPORT_MEETINGS' => 'Імпорт зустрічей',
    'LNK_IMPORT_TASKS' => 'Імпорт завдань',
    'LBL_MONTH' => 'Місяць',
    'LBL_AGENDADAY' => 'День',
    'LBL_YEAR' => 'Рік',

    'LBL_AGENDAWEEK' => 'Тиждень',
    'LBL_PREVIOUS_MONTH' => 'Попередній місяць',
    'LBL_PREVIOUS_DAY' => 'Попередній день',
    'LBL_PREVIOUS_YEAR' => 'Попередній рік',
    'LBL_PREVIOUS_WEEK' => 'Попередній тиждень',
    'LBL_NEXT_MONTH' => 'Наступний місяць',
    'LBL_NEXT_DAY' => 'Наступний день',
    'LBL_NEXT_YEAR' => 'Наступний рік',
    'LBL_NEXT_WEEK' => 'Наступний тиждень',
    'LBL_AM' => 'Дня',
    'LBL_PM' => 'Вечора',
    'LBL_SCHEDULED' => 'Заплановано',
    'LBL_BUSY' => 'Зайнятий',
    'LBL_CONFLICT' => 'Конфлікт',
    'LBL_USER_CALENDARS' => 'Користувальницькі календарі',
    'LBL_SHARED' => 'Зведений',
    'LBL_PREVIOUS_SHARED' => 'Попереднє',
    'LBL_NEXT_SHARED' => 'Далі',
    'LBL_SHARED_CAL_TITLE' => 'Зведений календар',
    'LBL_USERS' => 'Користувачі',
    'LBL_REFRESH' => 'Оновити',
    'LBL_EDIT_USERLIST' => 'Список користувачів',
    'LBL_SELECT_USERS' => 'Вибір користувачів для перегляду календаря',
    'LBL_FILTER_BY_TEAM' => 'Фільтрування списку користувачів по групах:',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_DATE' => 'Дата і час початку: ',
    'LBL_CREATE_MEETING' => 'Призначити зустріч',
    'LBL_CREATE_CALL' => 'Новий дзвінок',
    'LBL_HOURS_ABBREV' => 'год.',
    'LBL_MINS_ABBREV' => 'хвил.',


    'LBL_YES' => 'Так',
    'LBL_NO' => 'Ні',
    'LBL_SETTINGS' => 'Налаштування',
    'LBL_CREATE_NEW_RECORD' => 'Створити дію',
    'LBL_LOADING' => 'Завантаження...',
    'LBL_SAVING' => 'Збереження...',
    'LBL_SENDING_INVITES' => 'Збереження та відправка запрошення.....',
    'LBL_CONFIRM_REMOVE' => 'Ви впевнені, що хочете видалити запис?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ви впевнені, що хочете видалити всі поточні записи?',
    'LBL_EDIT_RECORD' => 'Редагувати дію',
    'LBL_ERROR_SAVING' => 'Помилка збереження',
    'LBL_ERROR_LOADING' => 'Помилка завантаження',
    'LBL_GOTO_DATE' => 'Перейти на дату',
    'NOTICE_DURATION_TIME' => 'Тривалість розмови повинна бути більше 0 хвилин',
    'LBL_STYLE_BASIC' => 'Базові', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Розширені', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Немає співпадінь для поля: Призначено для',
    'LBL_SUBJECT' => 'Тема',
    'LBL_DURATION' => 'Тривалість',
    'LBL_STATUS' => 'Статус',
    'LBL_PRIORITY' => 'Пріоритет',

    'LBL_SETTINGS_TITLE' => 'Налаштування',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Відображення інтервалів годин в режимі перегляду за днями і тижнями:',
    'LBL_SETTINGS_TIME_STARTS' => 'Початковий час:',
    'LBL_SETTINGS_TIME_ENDS' => 'Кінцевий час:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Показати дзвінки:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Показати завдання:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Показати завершені зустрічі, дзвінки та завдання:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Спільні календарі окремо:',

    'LBL_SAVE_BUTTON' => 'Зберегти',
    'LBL_DELETE_BUTTON' => 'Видалити',
    'LBL_APPLY_BUTTON' => 'Застосувати',
    'LBL_SEND_INVITES' => 'Відправка запрошень',
    'LBL_CANCEL_BUTTON' => 'Скасування',
    'LBL_CLOSE_BUTTON' => 'Закрити',

    'LBL_GENERAL_TAB' => 'Подробиці',
    'LBL_PARTICIPANTS_TAB' => 'Запрошені',
    'LBL_REPEAT_TAB' => 'Повторення',

    'LBL_REPEAT_TYPE' => 'Повторити',
    'LBL_REPEAT_INTERVAL' => 'Кожен',
    'LBL_REPEAT_END' => 'Кінець',
    'LBL_REPEAT_END_AFTER' => 'Більше, ніж',
    'LBL_REPEAT_OCCURRENCES' => 'повторення',
    'LBL_REPEAT_END_BY' => 'За',
    'LBL_REPEAT_DOW' => 'вкл.',
    'LBL_REPEAT_UNTIL' => 'Повторювати поки',
    'LBL_REPEAT_COUNT' => 'Кількість повтерень',
    'LBL_REPEAT_LIMIT_ERROR' => 'Ваш запит збирався створити більше ніж обмеження у $limit зустрічей.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Редагувати всі тексти, де зустрічається зразок',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Видалити всі тексти, де зустрічається зразок',

    'LBL_DATE_END_ERROR' => 'Дата закінчення передує даті початку',
    'ERR_YEAR_BETWEEN' => 'На жаль, календар не може прийняти рік, який ви ввели,<br>Рік повинен бути між 1970 і 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: не визначено для цього показу',
    'LBL_NO_ITEMS_MOBILE' => 'Ваш календар порожній протягом тижня.',
    'LBL_GENERAL_SETTINGS' => 'Загальні налаштування',
    'LBL_COLOR_SETTINGS' => 'Налаштування кольору',
    'LBL_MODULE' => 'Модуль',
    'LBL_BODY' => 'Вміст',
    'LBL_BORDER' => 'Межа',
    'LBL_TEXT' => 'Текст',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Нд",
            '1' => "Пн",
            '2' => "Вт",
            '3' => "Ср",
            '4' => "Чт",
            '5' => "Пт",
            '6' => "Сб",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Неділя",
            '1' => "Понеділок",
            '2' => "Вівторок",
            '3' => "Середа",
            '4' => "Четвер",
            '5' => "П&#039;ятниця",
            '6' => "Субота",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Січ",
            '2' => "Лют",
            '3' => "Бер",
            '4' => "Кві",
            '5' => "Травень",
            '6' => "Чер",
            '7' => "Лип",
            '8' => "Сер",
            '9' => "Вер",
            '10' => "Жов",
            '11' => "Лис",
            '12' => "Гру",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Січень",
            '2' => "Лютий",
            '3' => "Березень",
            '4' => "Квітень",
            '5' => "Травень",
            '6' => "Червень",
            '7' => "Липень",
            '8' => "Серпень",
            '9' => "Вересень",
            '10' => "Жовтень",
            '11' => "Листопад",
            '12' => "Грудень",
        ),
);
