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
    'LBL_MODULE_NAME' => 'Головна',
    'LBL_NEW_FORM_TITLE' => 'Новий контакт',
    'LBL_FIRST_NAME' => 'Ім\'я:',
    'LBL_LAST_NAME' => 'Прізвище:',
    'LBL_LIST_LAST_NAME' => 'Прізвище',
    'LBL_PHONE' => 'Телефон:',
    'LBL_EMAIL_ADDRESS' => 'Електронна пошта:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Діаграма стадій моїх продажів',
    'LBL_PIPELINE_FORM_TITLE' => 'Діаграма стадій загальних продажів',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Діаграма стадій загальних продажів',
    'LNK_NEW_CONTACT' => 'Новий контакт',
    'LNK_NEW_ACCOUNT' => 'Створити контрагента',
    'LNK_NEW_OPPORTUNITY' => 'Нова угода',
    'LNK_NEW_LEAD' => 'Новий попередній контакт',
    'LNK_NEW_CASE' => 'Нове звернення',
    'LNK_NEW_NOTE' => 'Створити примітку або вкладення',
    'LNK_NEW_CALL' => 'Новий дзвінок',
    'LNK_NEW_EMAIL' => 'Відправити листа в архів',
    'LNK_NEW_MEETING' => 'Призначити зустріч',
    'LNK_NEW_TASK' => 'Нове завдання',
    'LNK_NEW_BUG' => 'Нова помилка',
    'LNK_NEW_SEND_EMAIL' => 'Написати листа',
    'LBL_NO_ACCESS' => 'У Вас немає доступу до цієї сторінки. Зв&#039;яжіться з вашим системним адміністратором для отримання відповідних прав.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Немає результатів --',
    'LBL_NO_RESULTS' => '<h2>Нічого не знайдено. Будь ласка, повторіть пошук.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Підказка по пошуку:</h3><ul><li>Переконайтеся, що ви відмітили необхідні категорії.</li><li>Вкажіть більш детальні умови пошуку.</li><li>Якщо ви все ще нічого не знайшли - спробуйте скористатися закладкою "Розширений пошук" відповідного модуля.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Додати розділи SuiteCRM',
    'LBL_WEBSITE_TITLE' => 'Сайт',
    'LBL_RSS_TITLE' => 'Стрічки новин',
    'LBL_CLOSE_DASHLETS' => 'Закрити',
    'LBL_OPTIONS' => 'Опції',
    // dashlet search fields
    'LBL_TODAY' => 'Сьогодні',
    'LBL_YESTERDAY' => 'Вчора',
    'LBL_TOMORROW' => 'Завтра',
    'LBL_NEXT_WEEK' => 'Наступний тиждень',
    'LBL_LAST_7_DAYS' => 'Минулі 7 днів',
    'LBL_NEXT_7_DAYS' => 'Наступні 7 днів',
    'LBL_LAST_MONTH' => 'Минулий місяць',
    'LBL_NEXT_MONTH' => 'Наступний місяць',
    'LBL_LAST_YEAR' => 'Минулий рік',
    'LBL_NEXT_YEAR' => 'Наступний рік',
    'LBL_LAST_30_DAYS' => 'Останні 30 днів',
    'LBL_NEXT_30_DAYS' => 'Наступні 30 днів',
    'LBL_THIS_MONTH' => 'Поточний місяць',
    'LBL_THIS_YEAR' => 'Поточний рік',

    'LBL_MODULES' => 'Модулі',
    'LBL_CHARTS' => 'Графіки',
    'LBL_TOOLS' => 'Інструментарій',
    'LBL_WEB' => 'Веб-реклама',
    'LBL_SEARCH_RESULTS' => 'Результати пошуку',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Перегляди модуля',
        'Portal' => 'Портал',
        'Charts' => 'Графіки',
        'Tools' => 'Інструментарій',
        'Miscellaneous' => 'Різне'
    ),
    'LBL_ADDING_DASHLET' => 'Додавання індикатора SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Додано індикатор SuiteCRM',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Чи бажаєте видалити цей індикатор SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Видалення індикатора SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Індикатор видалено',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Основні налаштування',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Фільтри',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Тільки мої записи',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Посада',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Відображати рядки',

    'LBL_DASHLET_DELETE' => 'Видалити індикатор SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Оновити індикатор SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Редагувати індикатор SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Закрити',

    'LBL_SEARCH' => 'Знайти',
    'LBL_CLEAR' => 'Очистити',

    'LBL_BASIC_CHARTS' => 'Основні графіки',

    'LBL_DASHLET_SEARCH' => 'Знайти індикатор SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Версія',
    'LBL_BUILD' => 'Зборка',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc — провайдери фреймворку CE',

    'LBL_DASHLET_TITLE' => 'Мої сайти',
    'LBL_DASHLET_OPT_TITLE' => 'Посада',
    'LBL_DASHLET_INCORRECT_URL' => 'Задано неправильне розташування веб-сайту',
    'LBL_DASHLET_OPT_URL' => 'Адреса веб-сайту',
    'LBL_DASHLET_OPT_HEIGHT' => 'Висота розділу (в пікселях)',
    'LBL_DASHLET_SUITE_NEWS' => 'Новини SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Відкрийте для себе SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Експрес фільтр' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Розширений фільтр' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Домашня сторінка',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Швидко повернутися до початкової домашньої сторінки одним натиском миші.',
    'LBL_TOUR_MODULES' => 'Модулі',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Всі важливі модулі можна знайти тут.',
    'LBL_TOUR_MORE' => 'Більше модулів',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Решта ваших модулів знаходяться тут.',
    'LBL_TOUR_SEARCH' => 'Пошук за повним текстом',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Пошук став значно краще.',
    'LBL_TOUR_NOTIFICATIONS' => 'Повідомлення',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Тут будуть спливати сповіщення додатку SuiteCRM.',
    'LBL_TOUR_PROFILE' => 'Профіль',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Доступ до профілю, налаштування і вихід.',
    'LBL_TOUR_QUICKCREATE' => 'Швидке створення',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Швидко створюйте записи без втрати положення на сайті.',
    'LBL_TOUR_FOOTER' => 'Нижню частину можна згорнути',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Легко розширюйте та згортайте нижню частину (футер).',
    'LBL_TOUR_CUSTOM' => 'Додатки від користувача',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Інтеграції з іншими додатками будуть розміщені тут.',
    'LBL_TOUR_BRAND' => 'Ваш бренд',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Ваш логотип розміщується тут. Наведіть мишу для отримання додаткової інформації.',
    'LBL_TOUR_WELCOME' => 'Ласкаво просимо в SuiteCRM',
    'LBL_TOUR_WATCH' => 'Дивись, що нового в SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Нова спрощена панель навігації</li><li class="icon-ok">Нова нижня частина, яка згортається</li><li class="icon-ok">Покращений пошук</li><li class="icon-ok">Покращене меню з діями</li></ul><p>і багать всього іншого!</p>',
    'LBL_TOUR_VISIT' => 'Для отримання додаткової інформації, будь ласка, відвідайте наш додаток',
    'LBL_TOUR_DONE' => 'Ось і все!',
    'LBL_TOUR_REFERENCE_1' => 'Ви завжди можете посилатися на нашу',
    'LBL_TOUR_REFERENCE_2' => 'через посилання "Форум підтримки" у вкладці профілю.',
    'LNK_TOUR_DOCUMENTATION' => 'документацію',
    'LBL_TOUR_CALENDAR_URL_1' => 'Ви ділитесь календарем SuiteCRM з іншими додатками, наприклад з Microsoft Outlook або Exchange? Якщо так, то для них тепер буде новий URL. Ця нова адреса включає в себе ваш особистий ключ, який буде перешкоджати несанкціонованій публікації вашого календаря.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Отримайте ваш новий URL, аби поділитись вашим календарем.',
    'LBL_CONTRIBUTORS' => 'Інші учасники проєкту',
    'LBL_ABOUT_SUITE' => 'Про SuiteCRM',
    'LBL_PARTNERS' => 'Партнери',
    'LBL_EDIT_ALL_RECURRENCES' => 'Редагувати всі тексти, де зустрічається зразок',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Видалити всі тексти, де зустрічається зразок',
    'LBL_CONFIRM_REMOVE' => 'Ви впевнені, що хочете видалити запис?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM — CRM з відкритим кодом для всього світу',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite від Джейсона Еггерса',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign мапи Google від Джефрі Джей Уолтерса',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Розраховані поля для Робочого процесу були внесені компанією diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Про переклади SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Спільний переклад спільноти SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Переклад створено за допомогою Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM публікується під ліцензією з відкритим вихідним кодом — AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Весь код SuiteCRM, розроблений у даному проєкті, випущений у вигляді відкритого коду — AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Підтримка SuiteCRM доступна як безкоштовно, так і у платній формі',

    'LBL_SUITE_PARTNERS' => 'Ми маємо лояльних партнерів SuiteCRM, захоплених ідеєю відкритого вихідного коду. Щоб переглянути наш список партнерів, дивіться наш сайт.',

    'LBL_SAVE_BUTTON' => 'Зберегти',
    'LBL_DELETE_BUTTON' => 'Видалити',
    'LBL_APPLY_BUTTON' => 'Застосувати',
    'LBL_SEND_INVITES' => 'Відправка запрошень',
    'LBL_CANCEL_BUTTON' => 'Скасування',
    'LBL_CLOSE_BUTTON' => 'Закрити',

    'LBL_CREATE_NEW_RECORD' => 'Створити дію',
    'LBL_CREATE_CALL' => 'Новий дзвінок',
    'LBL_CREATE_MEETING' => 'Призначити зустріч',

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

    //Events
    'LNK_EVENT' => 'Подія',
    'LNK_EVENT_VIEW' => 'Перегляд подій',
    'LBL_DATE' => 'Дата: ',
    'LBL_DURATION' => 'Тривалість: ',
    'LBL_NAME' => 'Назва: ',
    'LBL_HOUR_ABBREV' => 'год.',
    'LBL_HOURS_ABBREV' => 'годин',
    'LBL_MINSS_ABBREV' => 'хвилин',
    'LBL_LOCATION' => 'Місце:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DESCRIPTION' => 'Опис: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Виникла помилка під час пошуку. Можливо, ваш запит не відповідає вимогам системи пошуку.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Не вдалося знайти систему пошуку. Спробуйте виконати пошук знову.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Не вдалося підключитися до сервера Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Сталася помилка пошуку, десь всередині системи пошуку.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Під час виконання пошуку сталася невідома помилка.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Зверніться до адміністратора, якщо проблема повторюється. Більше інформації доступно в журналах звітів.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'Індекс пошуку одного або декількох модулів не знайдено. Переконайтеся, що crontab налаштовано і запущено, відкрийте конфігурацію Elasticsearch і натисніть "Запланувати повну індексацію" і подумайте про створення завдання планувальника "Elasticsearch Indexer", якщо його немає.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Пошук за обраними вами критеріями не приніс результатів. Спробуйте розширити свій пошук.',

    'LNK_TASK_VIEW' => 'Перегляд завдань',
);
