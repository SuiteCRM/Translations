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
    'LBL_MODULE_NAME' => 'Начало',
    'LBL_NEW_FORM_TITLE' => 'Нов контакт',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_PHONE' => 'Телефон:',
    'LBL_EMAIL_ADDRESS' => 'Електронна поща:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Моите възможности категоризирани по етап на преговори',
    'LBL_PIPELINE_FORM_TITLE' => 'Възможности, категоризирани по етап на преговори',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Възможности, категоризирани по етап на преговори',
    'LNK_NEW_CONTACT' => 'Създаване на контакт',
    'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
    'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
    'LNK_NEW_LEAD' => 'Създаване на потенциален клиент',
    'LNK_NEW_CASE' => 'Въвеждане на казус',
    'LNK_NEW_NOTE' => 'Добавяне на бележка или приложение',
    'LNK_NEW_CALL' => 'Планиране на обаждане',
    'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_NEW_TASK' => 'Добавяне на задача',
    'LNK_NEW_BUG' => 'Докладване за проблем',
    'LNK_NEW_SEND_EMAIL' => 'Ново писмо',
    'LBL_NO_ACCESS' => 'Не разполагате с необходимите права за достъп. Моля, свържете се със системния администратор.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Няма намерени резултати --',
    'LBL_NO_RESULTS' => '<h2>Няма намерени резултати. Моля, търсете отново.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Search Tips:</h3><ul><li>Убедете се, че избраните категории са коректни.</li><li>Добавете допълнителни критерии за търсене.</li><li>В случай че няма резултати по заявката, използвайте разширено търсене на модула.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Добавяне на раздели',
    'LBL_WEBSITE_TITLE' => 'Сайт',
    'LBL_RSS_TITLE' => 'Моят портал',
    'LBL_CLOSE_DASHLETS' => 'Затвори',
    'LBL_OPTIONS' => 'Опции',
    // dashlet search fields
    'LBL_TODAY' => 'Днес',
    'LBL_YESTERDAY' => 'Вчера',
    'LBL_TOMORROW' => 'Утре',
    'LBL_NEXT_WEEK' => 'Следващата седмица',
    'LBL_LAST_7_DAYS' => 'Последните 7 дни',
    'LBL_NEXT_7_DAYS' => 'Следващите 7 дни',
    'LBL_LAST_MONTH' => 'Последния месец',
    'LBL_NEXT_MONTH' => 'Следващия месец',
    'LBL_LAST_YEAR' => 'Последната година',
    'LBL_NEXT_YEAR' => 'Следващата година',
    'LBL_LAST_30_DAYS' => 'Последните 30 дни',
    'LBL_NEXT_30_DAYS' => 'Следващите 30 дни',
    'LBL_THIS_MONTH' => 'Текущия месец',
    'LBL_THIS_YEAR' => 'Текущата година',

    'LBL_MODULES' => 'Модули',
    'LBL_CHARTS' => 'Графики',
    'LBL_TOOLS' => 'Други',
    'LBL_WEB' => 'Уеб',
    'LBL_SEARCH_RESULTS' => 'Резултати от търсенето',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Модули:',
        'Portal' => 'Портал',
        'Charts' => 'Графики',
        'Tools' => 'Други',
        'Miscellaneous' => 'Други'
    ),
    'LBL_ADDING_DASHLET' => 'Добавяне на раздел ...',
    'LBL_ADDED_DASHLET' => 'Разделът е добавен',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Сигурни ли сте, че искате да премахнете този раздел?',
    'LBL_REMOVING_DASHLET' => 'Изтриване на раздел ...',
    'LBL_REMOVED_DASHLET' => 'Разделът е изтрит',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Базови настройки',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Филтри',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Моите записи',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Титла',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Показване на редове',

    'LBL_DASHLET_DELETE' => 'Изтриване на раздел',
    'LBL_DASHLET_REFRESH' => 'Обновяване на раздел',
    'LBL_DASHLET_EDIT' => 'Редактиране на раздел',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Затвори',

    'LBL_SEARCH' => 'Търси',
    'LBL_CLEAR' => 'Изчисти',

    'LBL_BASIC_CHARTS' => 'Базови графики',

    'LBL_DASHLET_SEARCH' => 'Намери раздел',

//ABOUT page
    'LBL_VERSION' => 'Версия',
    'LBL_BUILD' => 'Версия',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Портал',
    'LBL_DASHLET_OPT_TITLE' => 'Титла',
    'LBL_DASHLET_INCORRECT_URL' => 'Неверен адрес на уебсайта',
    'LBL_DASHLET_OPT_URL' => 'Адрес на уебсайта',
    'LBL_DASHLET_OPT_HEIGHT' => 'Височина на раздела (в пиксели)',
    'LBL_DASHLET_SUITE_NEWS' => 'Новини за SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Открийте SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Бързо филтриране' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Разширен филтър' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Бързо връщане към началната страница с единично кликване.',
    'LBL_TOUR_MODULES' => 'Модули',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Всички важни модули са тук.',
    'LBL_TOUR_MORE' => 'Повече модули',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Останалите ви модули са тук.',
    'LBL_TOUR_SEARCH' => 'Търсене на текст навсякъде',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Търсенето стана още по-добро.',
    'LBL_TOUR_NOTIFICATIONS' => 'Известия',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Профил',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Достъп до профил, настройки и изход.',
    'LBL_TOUR_QUICKCREATE' => 'Създаване на обект',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Свиваем футър',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Лесно разгъване и свиване на футъра.',
    'LBL_TOUR_CUSTOM' => 'Потребителски приложения',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Вашата марка',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Тук се поставя вашето лого. Можете да посочите с мишката за повече информация.',
    'LBL_TOUR_WELCOME' => 'Добре дошли в SuiteCRM',
    'LBL_TOUR_WATCH' => 'Вижте какво е ново в SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'За повече информация, моля посетете нашето приложение',
    'LBL_TOUR_DONE' => 'Готови сте!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'документация',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Сътрудници',
    'LBL_ABOUT_SUITE' => 'За проекта SuiteCRM',
    'LBL_PARTNERS' => 'Партньори',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'Безплатната алтернатива SuiteCRM с отворен изходен код',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'За превода на SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Съвместен превод от общността на SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Превода е направен чрез използването на Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM се разпространява под лиценза за отворен код - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Налични са безплатна и платена опции за поддръжка на SuiteCRM',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => 'Съхрани',
    'LBL_DELETE_BUTTON' => 'Изтрий',
    'LBL_APPLY_BUTTON' => 'Приложи',
    'LBL_SEND_INVITES' => 'Изпращане на покани',
    'LBL_CANCEL_BUTTON' => 'Отмени',
    'LBL_CLOSE_BUTTON' => 'Затвори',

    'LBL_CREATE_NEW_RECORD' => 'Създаване на активност',
    'LBL_CREATE_CALL' => 'Планиране на обаждане',
    'LBL_CREATE_MEETING' => 'Насрочване на среща',

    'LBL_GENERAL_TAB' => 'Допълнителна информация',
    'LBL_PARTICIPANTS_TAB' => 'Поканени потребители',
    'LBL_REPEAT_TAB' => 'Повторение',

    'LBL_REPEAT_TYPE' => 'Повторение',
    'LBL_REPEAT_INTERVAL' => 'Всеки',
    'LBL_REPEAT_END' => 'Край',
    'LBL_REPEAT_END_AFTER' => 'След',
    'LBL_REPEAT_OCCURRENCES' => 'повторения',
    'LBL_REPEAT_END_BY' => 'От',
    'LBL_REPEAT_DOW' => 'На',
    'LBL_REPEAT_UNTIL' => 'Повтаряй докато',
    'LBL_REPEAT_COUNT' => 'Брой повторения',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Събитие',
    'LNK_EVENT_VIEW' => 'Показване на събитие',
    'LBL_DATE' => 'Дата: ',
    'LBL_DURATION' => 'Продължителност: ',
    'LBL_NAME' => 'Заглавие: ',
    'LBL_HOUR_ABBREV' => 'час',
    'LBL_HOURS_ABBREV' => 'час.',
    'LBL_MINSS_ABBREV' => 'мин.',
    'LBL_LOCATION' => 'Място:',
    'LBL_STATUS' => 'Статус:',
    'LBL_DESCRIPTION' => 'Описание:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'По време на търсенето възникна грешка. Възможно е да сте направили синтактична грешка в изписването на термините за търсене.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Не може да се намери заявената търсачка. Опитайте се да извършите търсенето отново.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Неуспешно свързване с Elasticsearch сървър.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Възникна грешка в самия модул за търсене.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Възникна неизвестна грешка по време на извършване на търсенето.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Ако проблемът продължава, моля свържете се с администратор. Повече информация е налична в логовете на програмата.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Няма намерени резултати при търсенето. Опитайте да разширите критериите за търсене.',

    'LNK_TASK_VIEW' => 'View Task',
);
