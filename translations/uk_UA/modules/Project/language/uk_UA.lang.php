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
    'LBL_MODULE_NAME' => 'Проекти',
    'LBL_MODULE_TITLE' => 'Проекти: Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Знайти проект',
    'LBL_LIST_FORM_TITLE' => 'Список проектів',
    'LBL_HISTORY_TITLE' => 'Історія',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата створення:',
    'LBL_DATE_MODIFIED' => 'Дата зміни:',
    'LBL_ASSIGNED_USER_ID' => 'Відповідальна особа:',
    'LBL_ASSIGNED_USER_NAME' => 'Керівник проекту:',
    'LBL_MODIFIED_USER_ID' => 'Змінено користувачем (ID):',
    'LBL_CREATED_BY' => 'Ким створено:',
    'LBL_NAME' => 'Ім’я:',
    'LBL_DESCRIPTION' => 'Опис:',
    'LBL_DELETED' => 'Видалено:',
    'LBL_DATE' => 'Дата',
    'LBL_DATE_START' => 'Дата початку:',
    'LBL_DATE_END' => 'Дата закінчення:',
    'LBL_PRIORITY' => 'Пріоритет:',
    'LBL_LIST_NAME' => 'Назва',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Попередня оцінка спільних зусиль (год.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Реальні спільні зусилля (год.)',
    'LBL_LIST_END_DATE' => 'Дата закінчення',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Проектні завдання',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Угоди',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Немає',
    'LBL_ALL_PROJECTS' => 'Всі проекти',
    'LBL_ALL_USERS' => 'Всі користувачі',
    'LBL_ALL_CONTACTS' => 'Всі контакти',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Новий проект',
    'LNK_NEW_PROJECT' => 'Новий проект',
    'LNK_PROJECT_LIST' => 'Переглянути список проектів',
    'LNK_NEW_PROJECT_TASK' => 'Створити завдання по проекту',
    'LNK_PROJECT_TASK_LIST' => 'Проектні завдання',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Проекти',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Заходи',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Історія',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенти',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Угоди',
    'LBL_CASES_SUBPANEL_TITLE' => 'Звернення',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Відстеження помилок',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Назва задачі',
    'LBL_DURATION' => 'Тривалість',
    'LBL_ACTUAL_DURATION' => 'Фактична тривалість',
    'LBL_START' => 'Початок',
    'LBL_FINISH' => 'Готово',
    'LBL_PREDECESSORS' => 'Попередники',
    'LBL_PERCENT_COMPLETE' => '% виконання',
    'LBL_MORE' => 'Більше...',
    'LBL_OPPORTUNITIES' => 'Угоди',
    'LBL_NEXT_WEEK' => 'Далі',
    'LBL_PROJECT_INFORMATION' => 'Огляд проекту',
    'LBL_EDITLAYOUT' => 'Правка розташування' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Проектні завдання',
    'LBL_VIEW_GANTT_TITLE' => 'Показ діаграми Ганта',
    'LBL_VIEW_GANTT_DURATION' => 'Тривалість',
    'LBL_TASK_TITLE' => 'Редагувати завдання',
    'LBL_DURATION_TITLE' => 'Змінити тривалість',
    'LBL_LAG' => 'Затримка',
    'LBL_DAYS' => 'Днів',
    'LBL_HOURS' => 'Годин',
    'LBL_MONTHS' => 'Місяців',
    'LBL_SUBTASK' => 'Завдання',
    'LBL_MILESTONE_FLAG' => 'Віха проєкту',
    'LBL_ADD_NEW_TASK' => 'Додати нове завдання',
    'LBL_DELETE_TASK' => 'Видалити завдання',
    'LBL_EDIT_TASK_PROPERTIES' => 'Редагування властивостей завдань.',
    'LBL_PARENT_TASK_ID' => 'Ідентифікатор батьківського завдання',
    'LBL_RESOURCE_CHART' => 'Діаграма ресурсів',
    'LBL_RELATIONSHIP_TYPE' => 'Тип зв\'язку',
    'LBL_ASSIGNED_TO' => 'Керівник проекту',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Шаблон проекту',
    'LBL_STATUS' => 'Статус:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Керівник проекту',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Проекти',
    'LBL_TOOLTIP_TASK_NAME' => 'Назва задачі',
    'LBL_TOOLTIP_TITLE' => 'Завдання в цей день',
    'LBL_TOOLTIP_TASK_DURATION' => 'Тривалість',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Попередній місяць',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Наступний місяць',
    'LBL_RESOURCE_CHART_WEEK' => 'Тиждень',
    'LBL_RESOURCE_CHART_DAY' => 'День',
    'LBL_RESOURCE_CHART_WARNING' => 'Жоден ресурс не був призначений проекту.',
    'LBL_PROJECT_DELETE_MSG' => 'Ви впевнені, що хочете видалити цей проєкт та його завдання?',
    'LBL_LIST_MY_PROJECT' => 'Мої проекти',
    'LBL_LIST_ASSIGNED_USER' => 'Керівник проекту',
    'LBL_UNASSIGNED' => 'Не призначено',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Ресурси',

    'LBL_EMAIL' => 'Електронна пошта',
    'LBL_PHONE' => 'Тел. робочий:',
    'LBL_ADD_BUTTON' => 'Додати',
    'LBL_ADD_INVITEE' => 'Додати ресурс',
    'LBL_FIRST_NAME' => 'Ім\'я',
    'LBL_LAST_NAME' => 'Прізвище',
    'LBL_SEARCH_BUTTON' => 'Знайти',
    'LBL_EMPTY_SEARCH_RESULT' => 'На жаль, нічого не знайдено. Додайте запрошену особу нижче.',
    'LBL_CREATE_INVITEE' => 'Створити ресурс',
    'LBL_CREATE_CONTACT' => 'Як контакт',
    'LBL_CREATE_AND_ADD' => 'Створити та додати',
    'LBL_CANCEL_CREATE_INVITEE' => 'Скасування',
    'LBL_NO_ACCESS' => 'У вас немає доступу для створення $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Список ресурсів',
    'LBL_REMOVE' => 'Видалити',
    'LBL_VIEW_DETAIL' => 'Перегляд деталей',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Вважати робочі дні',

    'LBL_IMPORT_PROJECTS' => 'Імпорт проектів',

    'LBL_PROJECTS_SEARCH' => 'Пошук проектів',
    'LBL_USERS_SEARCH' => 'Пошук користувачів',
    'LBL_CONTACTS_SEARCH' => 'Виберіть контакти',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Знайти',

    'LBL_CHART_TYPE' => 'Тип',
    'LBL_CHART_WEEKLY' => 'Щотижня',
    'LBL_CHART_MONTHLY' => 'Щомісяця',
    'LBL_CHART_QUARTERLY' => 'Щокварталу',

    'LBL_RESOURCE_CHART_MONTH' => 'Місяць',
    'LBL_RESOURCE_CHART_QUARTER' => 'Квартал',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Контакти проєкту з заголовків контактів',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Шаблони проєкту: Проєкт з заголовку проєкту',
    'LBL_AOS_QUOTES_PROJECT' => 'Комерційні пропозиції: Проєкт',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'За зростанням',
    'LBL_DESCENDING' => 'За спаданням',
);
