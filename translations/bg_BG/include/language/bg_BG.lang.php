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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'български (Bulgarian) - bg_BG',
    'moduleList' => array(
        'Home' => 'Начало',
        'ResourceCalendar' => 'Планиране на ресурсите',
        'Contacts' => 'Контакти',
        'Accounts' => 'Организации',
        'Alerts' => 'Напомняния',
        'Opportunities' => 'Възможности',
        'Cases' => 'Казуси',
        'Notes' => 'Бележки',
        'Calls' => 'Обаждания',
        'TemplateSectionLine' => 'Фрагменти на шаблоните',
        'Calls_Reschedule' => 'Повторно планиране на разговори',
        'Emails' => 'Електронна поща',
        'EAPM' => 'Външен API модул',
        'Meetings' => 'Срещи',
        'Tasks' => 'Задачи',
        'Calendar' => 'Календар',
        'Leads' => 'Потенциални клиенти',
        'Currencies' => 'Валути',
        'Activities' => 'Дейности',
        'Bugs' => 'Проблеми',
        'Feeds' => 'RSS новини',
        'iFrames' => 'Портал',
        'TimePeriods' => 'Периоди',
        'ContractTypes' => 'Типове договори',
        'Schedulers' => 'Автоматизирани задачи',
        'Project' => 'Проекти',
        'ProjectTask' => 'Задачи по проекта',
        'Campaigns' => 'Кампании',
        'CampaignLog' => 'Дневник на събития на кампанията',
        'Documents' => 'Документи',
        'DocumentRevisions' => 'Ревизии на документа',
        'Connectors' => 'Връзки със социални мрежи',
        'Roles' => 'Роли',
        'Notifications' => 'Известия',
        'Sync' => 'Синхронизация',
        'Users' => 'Потребители',
        'Employees' => 'Служители',
        'Administration' => 'Административен',
        'ACLRoles' => 'Роли',
        'InboundEmail' => 'Входяща поща',
        'Releases' => 'Версии',
        'Prospects' => 'Целеви клиенти',
        'Queues' => 'Опашки',
        'EmailMarketing' => 'Маркетингови послания',
        'EmailTemplates' => 'Шаблони - Електронна Поща',
        'ProspectLists' => 'Цели - Списъци',
        'SavedSearch' => 'Съхранени критерии за търсене',
        'UpgradeWizard' => 'Актуализиране',
        'Trackers' => 'Маркери',
        'TrackerSessions' => 'Потребителски сесии',
        'TrackerQueries' => 'Заявки',
        'FAQ' => 'Често задавани въпроси',
        'Newsletters' => 'Бюлетини',
        'SugarFeed' => 'SuiteCRM новини',
        'SugarFavorites' => 'Любими',

        'OAuthKeys' => 'OAuth Потребителски ключове',
        'OAuthTokens' => 'OAuth Токени',
        'OAuth2Clients' => 'OAuth клиенти',
        'OAuth2Tokens' => 'OAuth Токени',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Начало',
        'Dashboard' => 'Електронно табло',
        'Contacts' => 'Контакт',
        'Accounts' => 'Организация',
        'Opportunities' => 'Възможност',
        'Cases' => 'Казус',
        'Notes' => 'Бележки',
        'Calls' => 'Обаждане',
        'Emails' => 'Електронна поща',
        'EmailTemplates' => 'Шаблон на електронно писмо',
        'Meetings' => 'Среща',
        'Tasks' => 'Задача',
        'Calendar' => 'Календар',
        'Leads' => 'Потенциален клиент',
        'Activities' => 'Дейност',
        'Bugs' => 'Проблеми',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'RSS новини',
        'iFrames' => 'Портал',
        'TimePeriods' => 'Период от време',
        'Project' => 'Проекти',
        'ProjectTask' => 'Задача по проект',
        'Prospects' => 'Целеви клиенти',
        'Campaigns' => 'Кампании',
        'Documents' => 'Документ',
        'Sync' => 'Синхронизация',
        'Users' => 'Потребител',
        'SugarFavorites' => 'Любими',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Да',
        '2' => 'Не',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Анализатор',
        'Competitor' => 'Конкурент',
        'Customer' => 'Клиент',
        'Integrator' => 'Интегратор',
        'Investor' => 'Инвеститор',
        'Partner' => 'Партньор',
        'Press' => 'Медиа',
        'Prospect' => 'В процес на преговори',
        'Reseller' => 'Дистрибутор',
        'Other' => 'Други',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Текстилна промишленост',
        'Banking' => 'Банково дело',
        'Biotechnology' => 'Биотехнологии',
        'Chemicals' => 'Химическа промишленост',
        'Communications' => 'Комуникации',
        'Construction' => 'Строителство',
        'Consulting' => 'Консултантски услуги',
        'Education' => 'Образование',
        'Electronics' => 'Електроника',
        'Energy' => 'Природни ресурси и енергия',
        'Engineering' => 'Инженерна дейност',
        'Entertainment' => 'Забавление',
        'Environmental' => 'Екология',
        'Finance' => 'Финанси',
        'Government' => 'Правителствено и политика',
        'Healthcare' => 'Здравеопазване',
        'Hospitality' => 'Хотелиерство',
        'Insurance' => 'Застрахователна дейност',
        'Machinery' => 'Оборудване',
        'Manufacturing' => 'Производство',
        'Media' => 'Медии',
        'Not For Profit' => 'С нестопанска цел',
        'Recreation' => 'Ваканционни услуги',
        'Retail' => 'Търговия на дребно',
        'Shipping' => 'Превоз',
        'Technology' => 'Технологии',
        'Telecommunications' => 'Телекомуникации',
        'Transportation' => 'Транспортна дейност',
        'Utilities' => 'Комунални услуги',
        'Other' => 'Други',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Телефонен разговор',
        'Existing Customer' => 'Съществуващ клиент',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Служител',
        'Partner' => 'Партньор',
        'Public Relations' => 'Връзки с обществеността',
        'Direct Mail' => 'Стационарна поща',
        'Conference' => 'Конференция',
        'Trade Show' => 'Търговско изложение',
        'Web Site' => 'Сайт на компанията',
        'Word of mouth' => 'Препоръка',
        'Email' => 'Електронна поща',
        'Campaign' => 'Кампании',
        'Other' => 'Други',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Съществуващ бизнес',
        'New Business' => 'Нов бизнес',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Приходи',
        'Investment' => 'Инвестиция',
        'Expected_Revenue' => 'Очаквани приходи',
        'Budget' => 'Бюджет',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Вземащ бизнес решения',
        'Business Evaluator' => 'Бизнес оценител',
        'Technical Decision Maker' => 'Вземащ технически решения',
        'Technical Evaluator' => 'Технически оценител',
        'Executive Sponsor' => 'Спонсор',
        'Influencer' => 'Лобист',
        'Other' => 'Други',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Алтернативни контакти',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Отложено плащане - 15 дни',
        'Net 30' => 'Отложено плащане - 30 дни',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Класификация на потенциалната сделка',
        'Needs Analysis' => 'Анализ на нуждите на клиента',
        'Value Proposition' => 'Разработване на решение',
        'Id. Decision Makers' => 'Идентифициране на вземащите решения',
        'Perception Analysis' => 'Определяне на стратегия за преговорите',
        'Proposal/Price Quote' => 'Предложение/Ценова оферта',
        'Negotiation/Review' => 'Преговори/Преглед на офертата',
        'Closed Won' => 'Спечелена',
        'Closed Lost' => 'Загубена',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Обаждане',
        'Meeting' => 'Среща',
        'Task' => 'Задача',
        'Email' => 'Електронна поща',
        'Note' => 'Бележки',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Г-н',
        'Ms.' => 'Г-ца.',
        'Mrs.' => 'Г-жа.',
        'Miss' => 'Госпожица',
        'Dr.' => 'Д-р.',
        'Prof.' => 'Проф.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 минута по-рано',
        300 => '5 минути по-рано',
        600 => '10 минути по-рано',
        900 => '15 минути по-рано',
        1800 => '30 минути по-рано',
        3600 => '1 час по-рано',
        7200 => '2 часа предварително',
        10800 => '3 часа предварително',
        18000 => '5 часа предварително',
        86400 => '1 ден предварително',
    ),

    'task_priority_default' => 'Средна',
    'task_priority_dom' => array(
        'High' => 'Висока',
        'Medium' => 'Средна',
        'Low' => 'Ниска',
    ),
    'task_status_default' => 'Планирана',
    'task_status_dom' => array(
        'Not Started' => 'Планирана',
        'In Progress' => 'В процес на изпълнение',
        'Completed' => 'Приключена',
        'Pending Input' => 'Висяща',
        'Deferred' => 'Отложена',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Проведена',
        'Not Held' => 'Несъстояла се',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Други',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Проведена',
        'Not Held' => 'Несъстояла се',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Входящо',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Нов',
        'Assigned' => 'Разпределен',
        'In Process' => 'В опашката?',
        'Converted' => 'Преобразуван:',
        'Recycled' => 'Възобновен',
        'Dead' => 'Загубен',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Висока',
        'P2' => 'Средна',
        'P3' => 'Ниска',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Потребител на системата',
        'Administrator' => 'Администратор',
    ),
    'user_status_dom' => array(
        'Active' => 'Активен',
        'Inactive' => 'Неактивен',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Код на електронната поща',
    ),
    'employee_status_dom' => array(
        'Active' => 'Активен',
        'Terminated' => 'Напуснал',
        'Leave of Absence' => 'В отпуска',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Висока',
        'Medium' => 'Средна',
        'Low' => 'Ниска',
    ),
    'project_task_priority_default' => 'Средна',

    'project_task_status_options' => array(
        'Not Started' => 'Планирана',
        'In Progress' => 'В процес на изпълнение',
        'Completed' => 'Приключена',
        'Pending Input' => 'Висяща',
        'Deferred' => 'Отложена',
    ),
    'project_task_utilization_options' => array(
        '0' => 'няма',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Работен вариант',
        'In Review' => 'В процес на планиране',
        'Underway' => 'В ход',
        'On_Hold' => 'Висяща',
        'Completed' => 'Приключена',
    ),
    'project_status_default' => 'Работен вариант',

    'project_duration_units_dom' => array(
        'Days' => 'Дни',
        'Hours' => 'Часа',
    ),

    'activity_status_type_dom' => array(
        '' => '--Няма въведени данни--',
        'active' => 'Активен',
        'inactive' => 'Неактивен',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Организации',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Организация',
        'Opportunities' => 'Възможност',
        'Cases' => 'Казус',
        'Leads' => 'Потенциален клиент',
        'Contacts' => 'Контакт', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Проблеми',
        'Project' => 'Проекти',

        'Prospects' => 'Целеви клиенти',
        'ProjectTask' => 'Задача по проект',

        'Tasks' => 'Задача',

        'AOS_Contracts' => 'Договор',
        'AOS_Invoices' => 'Фактура',
        'AOS_Quotes' => 'Оферта',
        'AOS_Products' => 'Продукт',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Организация',
        'Contacts' => 'Контакт',
        'Opportunities' => 'Възможност',
        'Campaigns' => 'Кампании',
        'Tasks' => 'Задача',
        'Emails' => 'Електронна поща',

        'Bugs' => 'Проблеми',
        'Project' => 'Проекти',
        'ProjectTask' => 'Задача по проект',
        'Prospects' => 'Целеви клиенти',
        'Cases' => 'Казус',
        'Leads' => 'Потенциален клиент',

        'Meetings' => 'Среща',
        'Calls' => 'Обаждане',

        'AOS_Contracts' => 'Договор',
        'AOS_Invoices' => 'Фактура',
        'AOS_Quotes' => 'Оферта',
        'AOS_Products' => 'Продукт',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Организация',
        'Contacts' => 'Контакт',
        'Tasks' => 'Задача',
        'Opportunities' => 'Възможност',

        'Bugs' => 'Проблеми',
        'Cases' => 'Казус',
        'Leads' => 'Потенциален клиент',

        'Project' => 'Проекти',
        'ProjectTask' => 'Задача по проект',

        'Prospects' => 'Целеви клиенти',

        'AOS_Contracts' => 'Договор',
        'AOS_Invoices' => 'Фактура',
        'AOS_Quotes' => 'Оферта',
        'AOS_Products' => 'Продукт',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Оферти',
        'AOS_Invoices' => 'Фактури',
        'AOS_Contracts' => 'Договори',
    ),
    'issue_priority_default_key' => 'Средна',
    'issue_priority_dom' => array(
        'Urgent' => 'Належаща',
        'High' => 'Висока',
        'Medium' => 'Средна',
        'Low' => 'Ниска',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Приет',
        'Duplicate' => 'Дублирай',
        'Closed' => 'Затворен',
        'Out of Date' => 'С изтекъл срок',
        'Invalid' => 'Невалиден',
    ),

    'issue_status_default_key' => 'Нов',
    'issue_status_dom' => array(
        'New' => 'Нов',
        'Assigned' => 'Разпределен',
        'Closed' => 'Затворен',
        'Pending' => 'Висяща',
        'Rejected' => 'Отхвърлен',
    ),

    'bug_priority_default_key' => 'Средна',
    'bug_priority_dom' => array(
        'Urgent' => 'Належаща',
        'High' => 'Висока',
        'Medium' => 'Средна',
        'Low' => 'Ниска',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Приет',
        'Duplicate' => 'Дублирай',
        'Fixed' => 'Оправен',
        'Out of Date' => 'С изтекъл срок',
        'Invalid' => 'Невалиден',
        'Later' => 'Отложен',
    ),
    'bug_status_default_key' => 'Нов',
    'bug_status_dom' => array(
        'New' => 'Нов',
        'Assigned' => 'Разпределен',
        'Closed' => 'Затворен',
        'Pending' => 'Висяща',
        'Rejected' => 'Отхвърлен',
    ),
    'bug_type_default_key' => 'Проблеми',
    'bug_type_dom' => array(
        'Defect' => 'Недостатък (Дефект)',
        'Feature' => 'Свойство (Черта)',
    ),
    'case_type_dom' => array(
        'Administration' => 'Административен',
        'Product' => 'Продукт',
        'User' => 'Потребител',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Вътрешен',
        'Forum' => 'Форум',
        'Web' => 'Уеб',
        'InboundEmail' => 'Електронна поща',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Организации',
        'Activities' => 'Дейности',
        'Bugs' => 'Проблеми',
        'Calendar' => 'Календар',
        'Calls' => 'Обаждания',
        'Campaigns' => 'Кампании',
        'Cases' => 'Казуси',
        'Contacts' => 'Контакти',
        'Currencies' => 'Валути',
        'Dashboard' => 'Електронно табло',
        'Documents' => 'Документи',
        'Emails' => 'Електронна поща',
        'Feeds' => 'Външни новини',
        'Forecasts' => 'Планиране',
        'Help' => 'Помощ',
        'Home' => 'Начало',
        'Leads' => 'Потенциални клиенти',
        'Meetings' => 'Срещи',
        'Notes' => 'Бележки',
        'Opportunities' => 'Възможности',
        'Outlook Plugin' => 'Outlook Plugin',
        'Projects' => 'Проекти',
        'Quotes' => 'Оферти',
        'Releases' => 'Версии',
        'RSS' => 'RSS новини',
        'Studio' => 'Студио',
        'Upgrade' => 'Актуализация',
        'Users' => 'Потребители',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Планирана',
        'Active' => 'Активен',
        'Inactive' => 'Неактивен',
        'Complete' => 'Завършена',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Телемаркетинг',
        'Mail' => 'Поща',
        'Email' => 'Електронна поща',
        'Print' => 'Печат',
        'Web' => 'Уеб',
        'Radio' => 'Radio бутон',
        'Television' => 'Телевизия',
        'NewsLetter' => 'Бюлетин',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Седмично',
        'Monthly' => 'Месечно',
        'Quarterly' => 'На тримесечие',
        'Annually' => 'Годишно',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Януари',
        '2' => 'Февруари',
        '3' => 'Март',
        '4' => 'Април',
        '5' => 'Май',
        '6' => 'Юни',
        '7' => 'Юли',
        '8' => 'Август',
        '9' => 'Септември',
        '10' => 'Октомври',
        '11' => 'Ноември',
        '12' => 'Декември',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Ян.',
        '2' => 'Февр.',
        '3' => 'Март',
        '4' => 'Апр.',
        '5' => 'Май',
        '6' => 'Юни',
        '7' => 'Юли',
        '8' => 'Авг.',
        '9' => 'Септ.',
        '10' => 'Окт.',
        '11' => 'Ноем.',
        '12' => 'Дек.',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Неделя',
        '2' => 'Понеделник',
        '3' => 'Вторник',
        '4' => 'Сряда',
        '5' => 'Четвъртък',
        '6' => 'Петък',
        '7' => 'Събота',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Нд',
        '2' => 'Пн',
        '3' => 'Вт',
        '4' => 'Ср',
        '5' => 'Чт',
        '6' => 'Пт',
        '7' => 'Сб',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Сутрин',
        'PM' => 'Следобед',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Персонална',
        'group' => 'Група',
        'bounce' => 'Bounce',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Персонална',
        'group' => 'Група',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Персонална',
        'group' => 'Група',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Персонална',
        'group' => 'Група',
        'system' => 'Системни настройки',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Активен',
        'Inactive' => 'Неактивен',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Изпратено',
        'archived' => 'Архивни',
        'draft' => 'Работен вариант',
        'inbound' => 'Входящо',
        'campaign' => 'Кампании',
    ),
    'dom_email_status' => array(
        'archived' => 'Архивни',
        'closed' => 'Затворен',
        'draft' => 'Чернова',
        'read' => 'Прочетено',
        'replied' => 'Отговорено',
        'sent' => 'Изпратено',
        'send_error' => 'С грешка при изпращане',
        'unread' => 'Нечетени',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Архивни',
    ),

    'dom_email_server_type' => array(
        '' => '--Няма въведени данни--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Няма въведени данни--',
        'createcase' => 'Въвеждане на казус',
        'bounce' => 'Обработка на върнатата поща',
    ),
    'dom_email_distribution' => array(
        '' => '--Няма въведени данни--',
        'direct' => 'Пряко обвързване',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Least-Busy',
    ),
    'dom_email_errors' => array(
        1 => 'Изберете само един потребител, когато директно присвоявате елемент.',
        2 => 'Трябва да присвоите само отбелязани елементи, когато директно присвоявате елемент.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Да',
        'bool_false' => 'Не',
    ),
    'dom_int_bool' => array(
        1 => 'Да',
        0 => 'Не',
    ),
    'dom_switch_bool' => array(
        'on' => 'Да',
        'off' => 'Не',
        '' => 'Не',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM клиент',
        'mailto' => 'Външна програма',
    ),

    'dom_editor_type' => array(
        'none' => 'Директен HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Email формат по подразбиране',
        'html' => 'HTML формат',
        'plain' => 'Текст формат',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Не е извършен, с пропуснато време за стартиране',
        'ready' => 'Готов за изпълнение',
        'in progress' => 'В процес на изпълнение',
        'failed' => 'Завършил неуспешно',
        'completed' => 'Приключена',
        'no curl' => 'Не е извършен: Няма cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Активен',
        'Inactive' => 'Неактивен',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Минути',
        'hour' => 'Часа',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Маркетинг',
        'Knowledege Base' => 'База от знания',
        'Sales' => 'Продажби',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Архивни',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Маркетингови материали',
        'Product Brochures' => 'Брошури',
        'FAQ' => 'Често задавани въпроси',
    ),

    'document_status_dom' => array(
        'Active' => 'Активен',
        'Draft' => 'Работен вариант',
        'FAQ' => 'Често задавани въпроси',
        'Expired' => 'С изтекъл срок на валидност',
        'Under Review' => 'В процес на обработка',
        'Pending' => 'Висяща',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Сливане на писма',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Лицензионно споразумение',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Приеми',
        'decline' => 'Отклони',
        'tentative' => 'Може би',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Приет',
        'decline' => 'Отхвърлена',
        'tentative' => 'Може би',
        'none' => 'Без отговор',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Без отговор',
        'Daily' => 'Дневно',
        'Weekly' => 'Седмично',
        'Monthly' => 'Месечно',
        'Yearly' => 'Годишно',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'ден (дни)',
        'Weekly' => 'седмица(и)',
        'Monthly' => 'месец(и)',
        'Yearly' => 'година(и)',
    ),

    'duration_dom' => array(
        '' => 'Без отговор',
        '900' => '15 минути',
        '1800' => '30 минути',
        '2700' => '45 минути',
        '3600' => '1 час',
        '5400' => '1.5 часа',
        '7200' => '2 часа',
        '10800' => '3 часа',
        '21600' => '6 часа',
        '86400' => '1 ден',
        '172800' => '2 дни',
        '259200' => '3 дни',
        '604800' => '1 седмица',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'По подразбиране',
        'seed' => 'За сведение',
        'exempt_domain' => 'Блокиращ - по домейн',
        'exempt_address' => 'Блокиращ - по адрес',
        'exempt' => 'Блокиращ - по идентификатор',
        'test' => 'Тестов',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Активен',
        'inactive' => 'Неактивен',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Изпратени / направен опит за изпращане',
        'send error' => 'Върнати, други грешки',
        'invalid email' => 'Върнати, невалиден адрес',
        'link' => 'Посетили адреса',
        'viewed' => 'Прочели съобщението',
        'removed' => 'Да не се изпраща електронна поща',
        'lead' => 'Създадени потенциални клиенти',
        'contact' => 'Създадени контакти',
        'blocked' => 'Блокирани:',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Контакти',
        'Users' => 'Потребители',
        'Prospects' => 'Целеви клиенти',
        'Leads' => 'Потенциални клиенти',
        'Accounts' => 'Организации',
    ),
    'merge_operators_dom' => array(
        'like' => 'Съдържа',
        'exact' => 'По цялото име',
        'start' => 'По първата част от името',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Да',
        'false' => 'Не',
        'required' => 'Задължително',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Забранени модули',
        1 => 'Активирано',
        2 => 'Филтър',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Висока',
        'medium' => 'Средна',
        'low' => 'Ниска',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Планирана',
        'inprogress' => 'В процес на изпълнение',
        'completed' => 'Приключена',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Легенда',
        'collapselegend' => 'Скриване на легенда',
        'clickfordrilldown' => 'Натиснете за детайлна справка',
        'detailview' => 'Допълнителна информация...',
        'piechart' => 'Диаграма тип "Pie"',
        'groupchart' => 'Групова диаграма',
        'stackedchart' => 'Вложена диаграма',
        'barchart' => 'Диаграма тип "Bar"',
        'horizontalbarchart' => 'Диаграма тип "Horizontal Bar"',
        'linechart' => 'Диаграма тип "Line"',
        'noData' => 'Няма въведени данни',
        'print' => 'Печат',
        'pieWedgeName' => 'секции',
    ),
    'release_status_dom' => array(
        'Active' => 'Активен',
        'Inactive' => 'Неактивен',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Единична кавичка (\')',
        '"' => 'Кавички (&#34;)',
        '' => 'Без отговор',
        'other' => 'Други:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Други:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Нов прозорец',
        '_self' => 'Текущ прозорец',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Да не се опреснява автоматично',
        '30' => 'Всеки 30 секунди',
        '60' => 'Всяка минута',
        '180' => 'Всеки 3 минути',
        '300' => 'Всеки 5 минути',
        '600' => 'Всеки 10 минути',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Никога',
        '30' => 'Всеки 30 секунди',
        '60' => 'Всяка минута',
        '180' => 'Всеки 3 минути',
        '300' => 'Всеки 5 минути',
        '600' => 'Всеки 10 минути',
    ),
    'date_range_search_dom' => array(
        '=' => 'Е равно на',
        'not_equal' => 'Е различно от',
        'greater_than' => 'След',
        'less_than' => 'Преди',
        'last_7_days' => 'Последните 7 дни',
        'next_7_days' => 'Следващите 7 дни',
        'last_30_days' => 'Последните 30 дни',
        'next_30_days' => 'Следващите 30 дни',
        'last_month' => 'Последния месец',
        'this_month' => 'Текущия месец',
        'next_month' => 'Следващия месец',
        'last_year' => 'Последната година',
        'this_year' => 'Текущата година',
        'next_year' => 'Следващата година',
        'between' => 'В период',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Е равно на',
        'not_equal' => 'Е различно от',
        'greater_than' => 'По-голямо от',
        'greater_than_equals' => 'По-голямо или равно на',
        'less_than' => 'По-малко от',
        'less_than_equals' => 'По-малко или равно на',
        'between' => 'В период',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Копирай',
        'move' => 'Премести',
        'donothing' => 'Не прави нищо',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Резултати',
    'ERR_SEARCH_INVALID_QUERY' => 'По време на търсенето възникна грешка. Възможно е да сте направили синтактична грешка в изписването на термините за търсене.',
    'ERR_SEARCH_NO_RESULTS' => 'Няма намерени резултати при търсенето. Опитайте да разширите критериите за търсене.',
    'LBL_SEARCH_PERFORMED_IN' => 'Търсенето, е осъществено в',
    'LBL_EMAIL_CODE' => 'Код на електронната поща:',
    'LBL_SEND' => 'Изпрати',
    'LBL_LOGOUT' => 'Изход',
    'LBL_TOUR_NEXT' => 'Следваща стъпка',
    'LBL_TOUR_SKIP' => 'Пропусни',
    'LBL_TOUR_BACK' => 'Предишна стъпка',
    'LBL_TOUR_TAKE_TOUR' => 'Електронен помощник',
    'LBL_MOREDETAIL' => 'Детайли' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Редактирай' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Разгледай' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Филтър' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Добави' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Добавяне на адрес на електронна поща' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Скрий/Покажи' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Изтрий' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Изчисти' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Електронна визитка' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Изтрий' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Премахване на адреса за електронна поща' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Несъгласие',
    'LBL_ID_FF_INVALID' => 'Направи невалидно',
    'LBL_ADD' => 'Добави' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Лого на компанията' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Изскачащи прозорци на модула за свръзки',
    'LBL_CLOSEINLINE' => 'Затвори',
    'LBL_VIEWINLINE' => 'Разгледай',
    'LBL_INFOINLINE' => 'Информация',
    'LBL_PRINT' => 'Печат',
    'LBL_HELP' => 'Помощ',
    'LBL_ID_FF_SELECT' => 'Избери',
    'DEFAULT' => 'Свързани с тип базов',
    'LBL_SORT' => 'Соритрай',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Използване на SMTP през SSL или TLS?',
    'LBL_NO_ACTION' => 'Няма действие с това име: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Няма възможни действия.',
    'LBL_NO_DATA' => 'Няма въведени данни',

    'LBL_ROUTING_FLAGGED' => 'flag set',
    'LBL_ROUTING_TO' => '-',
    'LBL_ROUTING_TO_ADDRESS' => 'на адрес',
    'LBL_ROUTING_WITH_TEMPLATE' => 'с шаблон',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Полетата "Телефон" и "Адрес" съдържат вече въведени стойности. За замяна на стойностите с тези на избраната организация, натиснете "OK". За да се запазят текущите стойности, натиснете "Отказ"',
    'LBL_DROP_HERE' => '[Поставете тук]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Настройки по подразбиране от Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Име',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Сървър за изходяща поща',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Парола',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Порт',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Сървър за електронна поща',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Потребител',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'По подразбиране',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Предупреждение: Липшсващо потребителско име и парола на кутията за изходяща поща.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Настройте пощенски кутии за да имате достъп до входящите писма.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Предоставяне на информация SMTP сървъра да се използва за изходящи електронната поща в домейна.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Добави',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Изчисти',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'До:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Копие:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Скрито копие до:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Адрес на ел. поща',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Филтър',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Име',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Няма намерени адреси',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Запази и добави към Адреси',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Select Address Book Entries',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Справочник с адреси',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Warning! The outbound account you are trying to delete is associated to an existing inbound account.  Are you sure you want to continue?',
    'LBL_EMAIL_ADDRESSES' => 'Електронна поща',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Адрес на ел. поща',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Вие сте потвърдили, че вашият адрес на електронната поща е разрешен за ползване: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Не може да се потвърди адреса на електронната поща',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Импортиране към SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Разпределение',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Прикачване на файл',
    'LBL_EMAIL_ATTACHMENT' => 'Прикачване на файл',
    'LBL_EMAIL_ATTACHMENTS' => 'Прикачване на файлове',
    'LBL_EMAIL_ATTACHMENTS2' => 'Прикачване на SuiteCRM документи',
    'LBL_EMAIL_ATTACHMENTS3' => 'Приложения',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Файл',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Документ',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Отмени',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Знаков набор',
    'LBL_EMAIL_CHECK' => 'Проверяване за нови писма',
    'LBL_EMAIL_CHECKING_NEW' => 'Проверяване за нови писма',
    'LBL_EMAIL_CHECKING_DESC' => 'Проверка за нови писма. <br><br>Първоначалната проверка на пощенската кутия, може да отнеме време.',
    'LBL_EMAIL_CLOSE' => 'Затвори',
    'LBL_EMAIL_COFFEE_BREAK' => 'Проверка за нова поща. <br><br>Големите акаунти може да отнемат значително време.',

    'LBL_EMAIL_COMPOSE' => 'Електронна поща',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Моля, въведете получател(и) за това писмо.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Това писмо е с празно съдържание. Изпрати?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Това писмо няма дефинирана тема. Изпрати и запази?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(без зададена тема)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Моля, въведете валиден адрес в полетата До, Копие и Скрито копие',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Изтриване на това писмо?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Сигурни ли сте, че искате да изтриете този подпис?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Електронната поща е изпратена',

    'LBL_EMAIL_CREATE_NEW' => '--Създаване при запис--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Множество',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Празно',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Дата',
    'LBL_EMAIL_DATE_TODAY' => 'Днес',
    'LBL_EMAIL_DELETE' => 'Изтрий',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Изтриване на маркираните писма?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Изтриването е успешно.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Изтриване на писмата',
    'LBL_EMAIL_DETAILS' => 'Допълнителна информация',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'При работа с контакти ще се използва основния адрес.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Изтриване съдържанието на кошчето',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Изтриване на сървър за изходяща поща',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Изтриване на кеш-файлове',
    'LBL_EMAIL_EMPTY_MSG' => 'Липсва електронна поща за показване.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Няма адреси на електронна поща за показване.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Името на папката трябва да е уникално. Моля, опитайте отново.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Изтриването на папката е невъзможно. Тя или свързаните с нея папки са асоциирани с пощенска кутия.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Не могат да се определят предназначените папка от контекста. Опитайте отново.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Моля, проверете настройките.',
    'LBL_EMAIL_ERROR_DESC' => 'Бяха открити следните грешки:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Не разполагате с необходимите права за достъп. Моля, свържете се със системния администратор.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Името на SuiteCRM папка трябва да е уникално.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Моля, въведете някакви критерии за търсене.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Грешка',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Съобщението е отстранено от сървъра',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Съобщението може да е изтрито от сървъра или преместено в друга папка',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Връзката с mail сървъра е неуспешна. Моля, свържете се със системния администратор',
    'LBL_EMAIL_ERROR_MOVE' => 'Преместването на имейл между сървъри и/или поща не се поддържа в момента.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Грешка при преместване',
    'LBL_EMAIL_ERROR_NAME' => '"Име" е задължително поле.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => '"Адрес на подателя" е задължително поле.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Моля, изберете файл.',
    'LBL_EMAIL_ERROR_SERVER' => 'Сървър за входяша поща" е задължително поле.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Акаунта може би няма да бъде запаметен.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Грешка при комуникацията със сървъра за електронна поща.',
    'LBL_EMAIL_ERROR_USER' => '"Потребител" е задължително поле.',
    'LBL_EMAIL_ERROR_PORT' => '"Порт на сървъра" е задължително поле.',
    'LBL_EMAIL_ERROR_PROTOCOL' => '"Протокол за изтегляне" е задължително поле.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => '"Папка с получени съобщения" е задължително поле.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => '"Папка за изтрити съобщения " е задължително поле.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Тази информация е недостъпна',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Не е зададен сървър за изходяща поща.',
    'LBL_EMAIL_ERROR_SENDING' => 'Грешка при изпращане на електронната поща. Моля обърнете се към вашия администратор за съдействие.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Папки',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Добави',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Добавяне на нова папка',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Преименувай папка',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Съхрани',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Добавяне на папката към',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Тази папка не може да бъде променена',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Сигурни ли сте, че искате да изтриете тази папка?\nПроцесът е необратим.\С изтриването на папката ще бъдат изтрити и всички включени към нея папки.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Нова папка',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Моля, изберете папка преди да продължите.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Управление на папките',

    'LBL_EMAIL_FORWARD' => 'Препращане',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Изтеглени [[count]] от [[total]] писма',
    'LBL_EMAIL_FROM' => 'Подател',
    'LBL_EMAIL_GROUP' => 'група',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Група',
    'LBL_EMAIL_HOME_FOLDER' => 'Начало',
    'LBL_EMAIL_IE_DELETE' => 'Изтриване на пощенска кутия',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Изтриване на подпис',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Сигурни ли сте, че искате да изтриете тази пощенска кутия?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Изтриването е успешно.',
    'LBL_EMAIL_IE_SAVE' => 'Запазване на информация за пощенската кутия',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Импортиране на писма',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Импортирай в SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Импортиране на настройки',
    'LBL_EMAIL_INVALID' => 'Невалиден',
    'LBL_EMAIL_LOADING' => 'Зареждане...',
    'LBL_EMAIL_MARK' => 'Маркирай',
    'LBL_EMAIL_MARK_FLAGGED' => 'с флаг',
    'LBL_EMAIL_MARK_READ' => 'като прочетени',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'без флаг',
    'LBL_EMAIL_MARK_UNREAD' => 'като непрочетени',
    'LBL_EMAIL_ASSIGN_TO' => 'Отговорник',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Създаване на папка',
    'LBL_EMAIL_MENU_COMPOSE' => 'Ново писмо',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Изтриване на папка',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Изтриване съдържанието на кошчето',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Синхронизиране',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Изтриване на кеш-файлове',
    'LBL_EMAIL_MENU_REMOVE' => 'Изтрий',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Преименувай папка',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Преименуване на папка',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Необходимо е да направите избор, преди да продължите.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Създаване на папка (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Изтриване на папка (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Изтриване съдържанието на всички Кошчета в наличните пощенски кутии',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Маркиране на писмата като прочетени',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Маркиране на писмата без флаг',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Преименуване на папка (remote or in SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'съобщения',

    'LBL_EMAIL_ML_NAME' => 'Списък с имена',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Списък с избрани адреси',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Списък с налични адреси',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> за маркиране на повече редове <br />(Потребителите на Mac използват <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Не',
    'LBL_EMAIL_NOT_SENT' => 'Системата не е в състояние да обработи заявката Ви. Моля, свържете се със системния администратор.',

    'LBL_EMAIL_OK' => 'ОK',
    'LBL_EMAIL_ONE_MOMENT' => 'Моля, изчакайте...',
    'LBL_EMAIL_OPEN_ALL' => 'Отворете няколко съобщения',
    'LBL_EMAIL_OPTIONS' => 'Опции',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Бързо съставяне',
    'LBL_EMAIL_OPT_OUT' => 'Да не се изпраща електронна поща',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Несъгласен и невалиден',
    'LBL_EMAIL_PERFORMING_TASK' => 'Изпълнение на задача',
    'LBL_EMAIL_PRIMARY' => 'Основен',
    'LBL_EMAIL_PRINT' => 'Печат',

    'LBL_EMAIL_QC_BUGS' => 'Проблеми',
    'LBL_EMAIL_QC_CASES' => 'Казус',
    'LBL_EMAIL_QC_LEADS' => 'Потенциален клиент',
    'LBL_EMAIL_QC_CONTACTS' => 'Контакт',
    'LBL_EMAIL_QC_TASKS' => 'Задача',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Възможност',
    'LBL_EMAIL_QUICK_CREATE' => 'Създаване на обект',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Възстановяване на папки',
    'LBL_EMAIL_RELATE_TO' => 'Релация с друг модул',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Преглед на връзки с други модули',
    'LBL_EMAIL_RECORD' => 'Email запис',
    'LBL_EMAIL_REMOVE' => 'Изтрий',
    'LBL_EMAIL_REPLY' => 'Отговор',
    'LBL_EMAIL_REPLY_ALL' => 'Отговор до всички',
    'LBL_EMAIL_REPLY_TO' => 'Отговор до',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Отваряне на съобщението',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Отваряне на записа',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Моля, изберете само един запис',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Връщане към предишния модул?',
    'LBL_EMAIL_REVERT' => 'Връщане',
    'LBL_EMAIL_RELATE_EMAIL' => 'Отнасям мейла',

    'LBL_EMAIL_RULES_TITLE' => 'Управление на правила',

    'LBL_EMAIL_SAVE' => 'Съхрани',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Запиши и отговори',
    'LBL_EMAIL_SAVE_DRAFT' => 'Запис като чернова',
    'LBL_EMAIL_DRAFT_SAVED' => 'Черновата е записана',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'От дата',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'До дата',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Не са намерени резултати отговарящи на зададените критерии.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Резултати от търсенето',

    'LBL_EMAIL_SELECT' => 'Избери',

    'LBL_EMAIL_SEND' => 'Изпрати',
    'LBL_EMAIL_SENDING_EMAIL' => 'Изпращане на писма',

    'LBL_EMAIL_SETTINGS' => 'Настройки',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Пощенски кутии',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Изчисти',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Проверка за нови писма',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Адрес на подателя',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Адрес на ел. поща за тест на Известяване:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Подател',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Адрес за отговор',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Синхронизиране на наличните пощенски кутии',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Една електронна поща е изпратена на конкретен адрес, използвайки изходящите настройки за електронната поща. Моля, проверете дали електронното писмо е получено за да се знае, че настройките за правилни.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Вижте пълния SMTP лог файл',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Цялостна синхронизация?nОбработката на по-обемните пощенски кутии ще отнеме няколко минути.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Shift или Ctrl за маркиране на повече папки.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Базови настройки',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Създаване на групови папки',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Редактиране на групова папка',

    'LBL_EMAIL_SETTINGS_NAME' => 'Име',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Тези настройки изискват презареждане на страницата, за да влязат в сила.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Извличане на акаунт за поща',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Настройките са записани.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Изпращане на писмото в текстови режим',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Брой писма на страница',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Представяне на информацията',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Конфигурация на клиента за електронна поща',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Наличните потребителски папки',
    'LBL_EMAIL_ERROR_PREPEND' => 'Възникна грешка:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Изходящият пощенски сървър, който използвате е невалиден. Проверете настройките, или изберете друг пощенски сървър за поща.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Изходящият пощенски сървър не е конфигуриран за изходящата поща, която използвате. Моля, изберете или добавете изходящ пощенски сървър.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Подпис по подразбиране',
    'LBL_EMAIL_SIGNATURES' => 'Подписи',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Други',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM папки]',
    'LBL_EMAIL_SUBJECT' => 'Относно',
    'LBL_EMAIL_SUCCESS' => 'Успешно',
    'LBL_EMAIL_SUITE_FOLDER' => 'Папка SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Шаблона е празен',
    'LBL_EMAIL_TEMPLATES' => 'Шаблони',
    'LBL_EMAIL_TO' => 'До',
    'LBL_EMAIL_VIEW' => 'Разгледай',
    'LBL_EMAIL_VIEW_HEADERS' => 'Показване на заглавия',
    'LBL_EMAIL_VIEW_RAW' => 'Покажи недообработеното писмо',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Не се поддържа при използване на POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Текст на препратката по подразбиране.',
    'LBL_EMAIL_YES' => 'Да',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Изпрати тестово писмо',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email Sent',
    'LBL_EMAIL_MESSAGE_NO' => 'Съобщение №',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Импортиране: извършено',
    'LBL_EMAIL_IMPORT_FAIL' => 'Грешка при импортиране: съобщението вече е било импортирано или е изтрито от пощенския сървър',

    'LBL_LINK_NONE' => 'Без отговор',
    'LBL_LINK_ALL' => 'Всички записи',
    'LBL_LINK_RECORDS' => 'Записи',
    'LBL_LINK_SELECT' => 'Избери',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Потвърждавам',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Искате ли да затворите този модул?',
    'LBL_INVALID_FILE_EXTENSION' => 'Невалидно файлово разширение',

    'ERR_AJAX_LOAD' => 'Възникна следната грешка:',
    'ERR_AJAX_LOAD_FAILURE' => 'Грешка при обработка на заявката. Моля опитайте отново по-късно.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ако грешката възникне отново, моля забранете използването на потребителски интерфейс Ajax за този модул',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Знакът за разделяне на десетичните числа следва да е различен от знака за разделяне на хилядите.nn  Моля, изберете друга стойност.',
    'ERR_DELETE_RECORD' => 'Трябва да въведете номер на записа, за да изтриете този контакт.',
    'ERR_EXPORT_DISABLED' => 'Експортирането на данни е забранено.',
    'ERR_EXPORT_TYPE' => 'Грешка при експортиране',
    'ERR_INVALID_EMAIL_ADDRESS' => 'невалиден адрес за електронна поща.',
    'ERR_INVALID_FILE_REFERENCE' => 'Невалидна референция към файл',
    'ERR_NO_HEADER_ID' => 'Тази опция не се поддържа от текущата визуализация.',
    'ERR_NOT_ADMIN' => 'Достъпът до панел "Администриране" не е разрешен.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Липсва задължително поле:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Липсва задължително поле:',
    'ERR_INVALID_VALUE' => 'Невалидна стойност:',
    'ERR_NO_SUCH_FILE' => 'Файлът не съществува в системата',
    'ERR_NO_SINGLE_QUOTE' => 'Символът \'кавичка\' не може да се използва за',
    'ERR_NOTHING_SELECTED' => 'Моля, маркирайте преди да продължите.',
    'ERR_SELF_REPORTING' => 'Потребителят не може да докладва сам на себе си.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Няма съвпадения за полето:',
    'ERR_SQS_NO_MATCH' => 'Няма съвпадения',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify &amp;amp;amp;amp;amp;amp;#39;key&amp;amp;amp;amp;amp;amp;#39; index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Грешка: Дадено име за портала вече съществува.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Стойността на полето е несъвместима с изискваната стойност',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Грешка при запазване във външна организация.',
    'ERR_NO_DB' => 'Грешка при опита за връзка с базата данни. Детайли за грешката ще намерите във файла suitecrm.log.',
    'ERR_DB_FAIL' => 'Грешка в база данни. Вижте suitecrm.log за подробности.',
    'ERR_DB_VERSION' => 'Файловете на SuiteCRM {0} могат да бъдат използвани единствено с база данни на SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Организация',
    'LBL_ACCOUNTS' => 'Организации',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Резюме',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Резюме',
    'LBL_ADD_BUTTON' => 'Добави',
    'LBL_ADD_DOCUMENT' => 'Добавяне на документ',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Добави към целева група',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Добавяне на контакти към целевия списък',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Натиснете за затваряне',
    'LBL_ADDITIONAL_DETAILS' => 'Допълнителни детайли',
    'LBL_ADMIN' => 'Администриране',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Архив',
    'LBL_ASSIGNED_TO_USER' => 'Отговорник',
    'LBL_ASSIGNED_TO' => 'Отговорник:',
    'LBL_BACK' => 'Предишна стъпка',
    'LBL_BILLING_ADDRESS' => 'Данъчен адрес',
    'LBL_QUICK_CREATE' => 'Създай ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM с отворен код',
    'LBL_BUGS' => 'Проблеми',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'Обаждания',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Изпрати електронните съобщения от опашката',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Изпрати',
    'LBL_CASE' => 'Казус',
    'LBL_CASES' => 'Казуси',
    'LBL_CHANGE_PASSWORD' => 'Смяна на парола',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Check All',
    'LBL_CITY' => 'Град',
    'LBL_CLEAR_BUTTON_LABEL' => 'Изчисти',
    'LBL_CLEAR_BUTTON_TITLE' => 'Изчисти',
    'LBL_CLEARALL' => 'Изчисти всички полета',
    'LBL_CLOSE_BUTTON_TITLE' => 'Затвори',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Финализирай и създай нов запис',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Финализирай и създай нов запис',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Ново писмо',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Ново писмо',
    'LBL_SEARCH_DROPDOWN_YES' => 'Да',
    'LBL_SEARCH_DROPDOWN_NO' => 'Не',
    'LBL_CONTACT_LIST' => 'Списък с контакти:',
    'LBL_CONTACT' => 'Контакт',
    'LBL_CONTACTS' => 'Контакти',
    'LBL_CONTRACT' => 'Договор',
    'LBL_CONTRACTS' => 'Договори',
    'LBL_COUNTRY' => 'Държава:',
    'LBL_CREATE_BUTTON_LABEL' => 'Създай',
    'LBL_CREATED_BY_USER' => 'Създадено от потребител',
    'LBL_CREATED_USER' => 'Създадено от потребител',
    'LBL_CREATED' => 'Създадено от',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Валута:',
    'LBL_DOCUMENTS' => 'Документи',
    'LBL_DATE_ENTERED' => 'Създадено на:',
    'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
    'LBL_EDIT_BUTTON' => 'Редактиране',
    'LBL_DUPLICATE_BUTTON' => 'Дублирай',
    'LBL_DELETE_BUTTON' => 'Изтрий',
    'LBL_DELETE' => 'Изтрий',
    'LBL_DELETED' => 'Изтрити',
    'LBL_DIRECT_REPORTS' => 'Докладва на',
    'LBL_DONE_BUTTON_LABEL' => 'Добави',
    'LBL_DONE_BUTTON_TITLE' => 'Добави',
    'LBL_FAVORITES' => 'Предпочитани записи',
    'LBL_VCARD' => 'Електронна визитка',
    'LBL_EMPTY_VCARD' => 'Моля изберете vCard файл',
    'LBL_EMPTY_REQUIRED_VCARD' => 'визитката не разполага с всички необходими полета за този модул. Вижте suitecrm.log за подробности.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Каченият файл надвишава ограничението за размер до 30000 байта, което е посочено в HTML формуляра.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Възникна грешка при качването на vCard файл. Вижте suitecrm.log за подробности.',
    'LBL_IMPORT_VCARD' => 'Импортиране на електронна визитка:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Импортиране на електронна визитка',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Импортиране на електронна визитка',
    'LBL_VIEW_BUTTON' => 'Разгледай',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Изпрати в PDF формат',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Изпрати в PDF формат',
    'LBL_EMAILS' => 'Електронна поща',
    'LBL_EMPLOYEES' => 'Служители',
    'LBL_ENTER_DATE' => 'Въведи дата',
    'LBL_EXPORT' => 'Експортиране',
    'LBL_FAVORITES_FILTER' => 'Моите предпочитани записи:',
    'LBL_GO_BUTTON_LABEL' => 'Старт',
    'LBL_HIDE' => 'Скрий',
    'LBL_ID' => 'Идентификационен номер',
    'LBL_IMPORT' => 'Импортирай',
    'LBL_IMPORT_STARTED' => 'Импортирането започнато:',
    'LBL_LAST_VIEWED' => 'Разгледани записи',
    'LBL_LEADS' => 'Потенциални клиенти',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'Кампания:',
    'LBL_CAMPAIGNS' => 'Кампании',
    'LBL_CAMPAIGNLOG' => 'Дневник на събития на кампанията',
    'LBL_CAMPAIGN_CONTACT' => 'Кампании',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Без отговор',
    'LBL_THEME' => 'Визуализация:',
    'LBL_FOUND_IN_RELEASE' => 'Открито във версия',
    'LBL_FIXED_IN_RELEASE' => 'Поправено във версия',
    'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_LIST_ASSIGNED_USER' => 'Потребител',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_CONTACT_ROLE' => 'Роля',
    'LBL_LIST_DATE_ENTERED' => 'Създадено на',
    'LBL_LIST_EMAIL' => 'Електронна поща',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_RELATED_TO' => 'Свързано със:',
    'LBL_LIST_USER_NAME' => 'Потребител',
    'LBL_LISTVIEW_NO_SELECTED' => 'Необходимо е да маркирате поне 1 запис, за да продължите.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Необходимо е да маркирате най-малко 2 записа, за да продължите.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Маркираните записи',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Маркирани: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Иван',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Иванов',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Д-р.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Отмени',
    'LBL_VERIFY' => 'Потвърждаване',
    'LBL_RESEND' => 'Повторно изпращане',
    'LBL_PROFILE' => 'Профил',
    'LBL_MAILMERGE' => 'Сливане на писма',
    'LBL_MASS_UPDATE' => 'Масова актуализация',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Няма достъпни полета за масова актуализация',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Блокирай основен електронен адрес',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Съгласен за основния адрес на електронната поща',
    'LBL_MEETINGS' => 'Срещи',
    'LBL_MEETING_GO_BACK' => 'Обратно към срещата',
    'LBL_MEMBERS' => 'Членове',
    'LBL_MEMBER_OF' => 'Член на',
    'LBL_MODIFIED_BY_USER' => 'Модифицирано от потребител',
    'LBL_MODIFIED_USER' => 'Модифицирано от потребител',
    'LBL_MODIFIED' => 'Модифицирано от',
    'LBL_MODIFIED_NAME' => 'Модифицирано от',
    'LBL_MORE' => 'Още',
    'LBL_MY_ACCOUNT' => 'Персонални настройки',
    'LBL_NAME' => 'Име',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Създай',
    'LBL_NEW_BUTTON_TITLE' => 'Създай',
    'LBL_NEXT_BUTTON_LABEL' => 'Следваща стъпка',
    'LBL_NONE' => '--Няма въведени данни--',
    'LBL_NOTES' => 'Бележки',
    'LBL_OPPORTUNITIES' => 'Възможности',
    'LBL_OPPORTUNITY_NAME' => 'Сделка',
    'LBL_OPPORTUNITY' => 'Възможност',
    'LBL_OR' => 'ИЛИ',
    'LBL_PANEL_OVERVIEW' => 'Информация',
    'LBL_PANEL_ASSIGNMENT' => 'Друга',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Parent тип',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Пощенски код:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основен адрес: град',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основен адрес: държава',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основен адрес: пощенски код',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основен адрес: област',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Адрес за кореспонденция: улица 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Адрес за кореспонденция: улица 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основен адрес: улица',
    'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',

    'LBL_PROSPECTS' => 'Перспективи',
    'LBL_PRODUCTS' => 'Продукти',
    'LBL_PROJECT_TASKS' => 'Задачи по проекта',
    'LBL_PROJECTS' => 'Проекти',
    'LBL_QUOTES' => 'Оферти',

    'LBL_RELATED' => 'Относно',
    'LBL_RELATED_RECORDS' => 'Свързани записи',
    'LBL_REMOVE' => 'Изтрий',
    'LBL_REPORTS_TO' => 'Докладва на',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Задължителни полета',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Добави',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Разширен шаблон',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Разширен шаблон',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Съхрани и създай нов запис',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Съхрани и създай нов запис',
    'LBL_SAVE_OBJECT' => 'Запази {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Търси',
    'LBL_SEARCH_BUTTON_TITLE' => 'Търси',
    'LBL_FILTER' => 'Филтър',
    'LBL_SEARCH' => 'Търси',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'more',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Невалиден файлов формат, можете да качите само изображение.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Избери',
    'LBL_SELECT_BUTTON_TITLE' => 'Избери',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Разгледай',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Разгледай',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Избери контакт',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Избери контакт',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Избери със справка',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Избери със справка',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Избери потребител',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Избери потребител',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Изчистване на избраното',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Изчистване на избраното',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Изчистване на избраното',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Изчистване на избраното',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Избиране на файл',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Избиране на файл',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Изчисти избрания файл',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Изчисти избрания файл',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Избери потребител',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Избери потребител',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Изчистване на потребителя',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Изчистване на потребителя',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Избери организация',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Избери организация',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Изчисти избраната Организация',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Изчисти избраната Организация',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Избери Кампания',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Избери Кампания',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Изчисти избраната Кампания',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Изчисти избраната Кампания',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Избери контакт',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Избери контакт',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Премахване на човек за връзка',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Премахване на човек за връзка',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Избери оперативна група',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Избери оперативна група',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Изчистване на екип',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Изчистване на екип',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ресурси, използвани за създаването на текущата страница (заявки, файлове)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'секунди.',
    'LBL_SERVER_RESPONSE_TIME' => 'Време за изпълнение на заявката:',
    'LBL_SERVER_MEMORY_BYTES' => 'байта',
    'LBL_SERVER_MEMORY_USAGE' => 'Използвана памет на сървъра: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Използвани:-модул: {0} - действие: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Използвана пикова памет на сървъра: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Адрес за кореспонденция',
    'LBL_SHOW' => 'Покажи',
    'LBL_STATE' => 'Статус:',
    'LBL_STATUS_UPDATED' => 'Статусът Ви за това събитие бе актуализиран!',
    'LBL_STATUS' => 'Статус:',
    'LBL_STREET' => 'Улица',
    'LBL_SUBJECT' => 'Относно',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound Email ID',

    'LBL_SCENARIO_SALES' => 'Продажби',
    'LBL_SCENARIO_MARKETING' => 'Маркетинг',
    'LBL_SCENARIO_FINANCE' => 'Финанси',
    'LBL_SCENARIO_SERVICE' => 'Услуга',
    'LBL_SCENARIO_PROJECT' => 'Управление на проекти',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Този сценарий улеснява управлението на продажбите',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Този сценарий улеснява управлението на маркетингови елементи',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Този сценарий улеснява управлението на финансово свързани елементи',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Този сценарий улеснява управлението на елементи свързани с услуги',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Този сценарий улеснява управлението на проекти',

    'LBL_SYNC' => 'Синхронизация',
    'LBL_TABGROUP_ALL' => 'Всички записи',
    'LBL_TABGROUP_ACTIVITIES' => 'Дейности',
    'LBL_TABGROUP_COLLABORATION' => 'Управление на проекти',
    'LBL_TABGROUP_MARKETING' => 'Маркетинг',
    'LBL_TABGROUP_OTHER' => 'Други',
    'LBL_TABGROUP_SALES' => 'Продажби',
    'LBL_TABGROUP_SUPPORT' => 'Поддръжка',
    'LBL_TASKS' => 'Задачи',
    'LBL_THOUSANDS_SYMBOL' => 'хил.',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Създаване на запис за изпратена поща',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Създаване на запис за изпратена поща',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Възстанови',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Възстанови',
    'LBL_UNDELETE_BUTTON' => 'Възстанови',
    'LBL_UNDELETE' => 'Възстанови',
    'LBL_UNSYNC' => 'Прекъсни синхронизацията',
    'LBL_UPDATE' => 'Актуализирай',
    'LBL_USER_LIST' => 'Списък с потребители',
    'LBL_USERS' => 'Потребители',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Преглед за съществуващ пощенски запис...',
    'LBL_VERIFY_PORTAL_NAME' => 'Преглед за съществуващо име на портал...',
    'LBL_VIEW_IMAGE' => 'изглед',

    'LNK_ABOUT' => 'За програмата',
    'LNK_ADVANCED_FILTER' => 'Разширен филтър',
    'LNK_BASIC_FILTER' => 'Бързо филтриране',
    'LBL_ADVANCED_SEARCH' => 'Разширен филтър',
    'LBL_QUICK_FILTER' => 'Бързо филтриране',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Покажи всички',
    'LNK_CLOSE' => 'Затвори',
    'LBL_MODIFY_CURRENT_FILTER' => 'Промяна на текущия филтър',
    'LNK_SAVED_VIEWS' => 'Настройки на подредби',
    'LNK_DELETE' => 'Изтрий',
    'LNK_EDIT' => 'Редактиране',
    'LNK_GET_LATEST' => 'Виж последният',
    'LNK_GET_LATEST_TOOLTIP' => 'Обнови с последна версия',
    'LNK_HELP' => 'Помощ',
    'LNK_CREATE' => 'Създай',
    'LNK_LIST_END' => 'Край',
    'LNK_LIST_NEXT' => 'Следваща стъпка',
    'LNK_LIST_PREVIOUS' => 'Предишна',
    'LNK_LIST_RETURN' => 'Връщане към списъка',
    'LNK_LIST_START' => 'Начало',
    'LNK_LOAD_SIGNED' => 'Подпис',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Замени с подписан документ',
    'LNK_PRINT' => 'Печат',
    'LNK_BACKTOTOP' => 'Начало на страницата',
    'LNK_REMOVE' => 'Изтрий',
    'LNK_RESUME' => 'Резюме',
    'LNK_VIEW_CHANGE_LOG' => 'Разгледай направените промени',

    'NTC_CLICK_BACK' => 'Натиснете бутонът за предишен екран в браузъра и отстранете проблема.',
    'NTC_DATE_FORMAT' => '(гггг-мм-дд)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Сигурни ли сте, че искате да изтриете избраните записи?',
    'NTC_TEMPLATE_IS_USED' => 'Шаблонът е включен в маркетингово послание за кампании. Изтриване?',
    'NTC_TEMPLATES_IS_USED' => 'Следните шаблони се използват в email маркетинговите записи. Наистина ли желаете да ги изтриете?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Сигурни ли сте, че искате да изтриете',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Сигурни ли сте, че искате да актуализирате',
    'NTC_DELETE_SELECTED_RECORDS' => 'маркиран(и) запис(и)?',
    'NTC_LOGIN_MESSAGE' => 'Моля, въведете потребителско име и парола.',
    'NTC_NO_ITEMS_DISPLAY' => 'няма',
    'NTC_REMOVE_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете тази връзка?',
    'NTC_REQUIRED' => 'Задължителни полета',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Потребител:',
    'NTC_YEAR_FORMAT' => '(гггг)',
    'WARN_UNSAVED_CHANGES' => 'Вие сте на път да излезете от този запис, без да се запазят всички промени, които може да сте направили. Наистина ли желаете да затворите този запис?',
    'ERROR_NO_RECORD' => 'Грешка при опит за достъп до записа.  Може да е изтрит или не разполагате с необходимите права за достъп до записа.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Внимание:</b>Използваният от вас интернет браузър не се поддържа от SuiteCRM.</p><p>Препоръчват се следните интернет браузъри:</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (или по-нова версия)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Предупреждение:</b> Вашият браузър е в режим за съвместимост на IE, който не се поддържа.',
    'ERROR_TYPE_NOT_VALID' => 'Грешка. Невалидно въведени данни.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Търсене на дублирани записи',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Управление на абонамента',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Управление на абонамента за',
    // Ajax status strings
    'LBL_LOADING' => 'Зареждане...',
    'LBL_SEARCHING' => 'Търси се...',
    'LBL_SAVING_LAYOUT' => 'Запазване на подредбата ...',
    'LBL_SAVED_LAYOUT' => 'Подредбата е запазена.',
    'LBL_SAVED' => 'Запазено',
    'LBL_SAVING' => 'Запазване',
    'LBL_DISPLAY_COLUMNS' => 'Показвани колони',
    'LBL_HIDE_COLUMNS' => 'Скрити колони',
    'LBL_SEARCH_CRITERIA' => 'Критерии за търсене',
    'LBL_SAVED_VIEWS' => 'Запазени изгледи',
    'LBL_PROCESSING_REQUEST' => 'Обработва се...',
    'LBL_REQUEST_PROCESSED' => 'Добави',
    'LBL_AJAX_FAILURE' => 'Проблем с Ajax',
    'LBL_MERGE_DUPLICATES' => 'Сливане',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Моите филтри',
    'LBL_SEARCH_POPULATE_ONLY' => 'Търсене с използване на критериите горе',
    'LBL_DETAILVIEW' => 'Форма за визуализиране на детайли',
    'LBL_LISTVIEW' => 'Списък на записите',
    'LBL_EDITVIEW' => 'Форма за редактиране',
    'LBL_BILLING_STREET' => 'Улица:',
    'LBL_SHIPPING_STREET' => 'Улица:',
    'LBL_SEARCHFORM' => 'Форма за търсене',
    'LBL_SAVED_SEARCH_ERROR' => 'Моля, за тази цел въведете име.',
    'LBL_DISPLAY_LOG' => 'Покажи хронология на действията',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Системни настройки',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Изтичане на сесията',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Сесията Ви изтича до 2 минути. Моля, запазете направените промени',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Сесията Ви е изтекла.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Среща',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Обаждане',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Час:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Местоположение:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Описание:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Статус: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Свързано с: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Събитие',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Събитието не е зададено.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Местоположението не е зададено.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Началната дата не е дефинирана.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Не са открити резултати.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Няма намерени резултати... Променете вашите критерии за търсене и опитайте отново?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Няма намерени резултати за: %s',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Създаване на <item1>като нов <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'или променете вашите критерии за търсене',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Няма създадени записи. <item2> или <item3> сега.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Добави към "Избрани"',
    'LBL_CREATE_CONTACT' => 'Създаване на контакт',
    'LBL_CREATE_CASE' => 'Въвеждане на казус',
    'LBL_CREATE_NOTE' => 'Въвеждане на бележки',
    'LBL_CREATE_OPPORTUNITY' => 'Създаване на възможност',
    'LBL_SCHEDULE_CALL' => 'Планиране на обаждане',
    'LBL_SCHEDULE_MEETING' => 'Насрочване на среща',
    'LBL_CREATE_TASK' => 'Добавяне на задача',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Създай формата',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Запазване на Уеб форма',
    'LBL_AVAILABLE_FIELDS' => 'Налични полета',
    'LBL_FIRST_FORM_COLUMN' => 'Първа колона на формуляра',
    'LBL_SECOND_FORM_COLUMN' => 'Втора колона на формуляра',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Липсва задължително поле: Свързано с',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Липсва задължително поле: Свързана кампания',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Създаване на web-формуляр ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Подаването на този формуляр ще създаде ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Добави всички полета',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Презареди всички полета',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Премахни всички полета',
    'LBL_NEXT_BTN' => 'Следваща стъпка',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Само приложения с изображения могат да бъдат вмъкнатиd',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Промяна в контескта на базата данни',
    'ERR_MSSQL_WARNING' => 'Внимание:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Грешка: Файлът [[file]] липсва.  Не може да създаден, не е намерен нужния HTML файл.',
    'ERR_CANNOT_FIND_MODULE' => 'Грешка: Модулът [module] не бе намерен в системата.',
    'LBL_ALT_ADDRESS' => 'Алтернативен адрес:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Грешка: Има различен брой аргументи за "ключ" и "копие" в масива.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Базови настройки',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Филтри',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Моите записи',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Титла',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Показване на редове',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Достигнахте максималния брой раздели, определени от администратора. Необходимо е да премахнете раздел, за да добавите нови.',
    'LBL_ADDING_DASHLET' => 'Добавяне на раздел ...',
    'LBL_ADDED_DASHLET' => 'Разделът е добавен',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Сигурни ли сте, че искате да премахнете този раздел?',
    'LBL_REMOVING_DASHLET' => 'Изтриване на раздел ...',
    'LBL_REMOVED_DASHLET' => 'Разделът е изтрит',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Страницата се зарежда, моля изчакайте...',

    'LBL_RELOAD_PAGE' => 'Моля <a href="javascript: window.location.reload()">презаредете страницата,</a> за да използвате този раздел.',
    'LBL_ADD_DASHLETS' => 'Добавяне на раздели',
    'LBL_CLOSE_DASHLETS' => 'Затвори',
    'LBL_OPTIONS' => 'Опции',
    'LBL_1_COLUMN' => '1 колона',
    'LBL_2_COLUMN' => '2 колона',
    'LBL_3_COLUMN' => '3 колона',
    'LBL_PAGE_NAME' => 'Име на страницата',

    'LBL_SEARCH_RESULTS' => 'Резултати от търсенето',
    'LBL_SEARCH_MODULES' => 'Модули',
    'LBL_SEARCH_TOOLS' => 'Други',
    'LBL_SEARCH_HELP_TITLE' => 'Работа със съхранени критерии за търсене',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Липсва изображение',

    'LBL_MODULE' => 'Модул',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Копирай основния адрес:',
    'LBL_SAVE_AND_CONTINUE' => 'Запази и продължи',

    'LBL_SEARCH_HELP_TEXT' => '<p>< br / > <strong>Множествен избор</strong></p> <ul><li>Щракнете върху стойности, за да изберете атрибут.</li> <li>Щракнете Ctrl за да изберете няколко елемента. Mac потребителите използват CMD.</li> <li>За да изберете всички стойности между два атрибута, щракнете върху първата стойност и тогава преместете и щракнете отново върху последната стойност.</li></ul> <p><strong>Разширени опции за търсене & оформление</strong> <br><br>С опцията <b>Записано търсене & оформление</b>, можете да запишете един набор от параметри за търсене и/или оформлението на изглед за да получите бързо желаните резултати при търсене в бъдеще. Можете да запишете неограничен брой оформления и персонализирани търсения. Всички записани търсения се появяват по име в списъка на записани търсения, като последно записаното търсене се появява в горната част на списъка. <br><br>За да персонализирате оформлението на изглед, използвайте полетата Скрий колоните и Показване на колони, за да изберете кои полета да се показват в резултатите от търсенето. Например можете да видите или скриете подробности като името на записа и потребителя. За да добавите колона, изберете поле от списъка Скрий колоните и използвайте лява стрелка, за да го преместите в списъка с колони за показване. За да премахнете колоната от изгледа на списък, изберете го от списъка колони за показване и използвайте дясната стрелка, за да го преместите в списъка Скрий колоните. <br><br>Ако запишете настройките за оформление ще успеете да ги заредите по всяко време за да видите резултатите от търсенето в на персонализираното оформление. <br> <br>За да запишете търсене и/или оформление: <ol><li>Въведете име на търсенето в полето <b>запиши като</b> поле и щракнете върху <b>Запиши</b>. Името се показва в близост до бутона <b>Изчисти</b> в списъка на записани търсения.</li> <li>За да видите записано търсене, изберете го от списъка на записани търсения. Резултатите от търсенето се показват в изгледа на списъка.</li> <li>За да актуализирате свойствата на записано търсене, изберете записаното търсене от списъка, въведете нови критерии за търсене и/или оформление в областта Разширено търсене и щракнете върху <b>актуализиране</b>. <b>Промяна на текущото търсене</b>.</li> <li>За да изтриете записано търсене, изберете го в списъка на записани търсения, щракнете върху <b>Изтриване</b> до адреса или <b>Промени текущото търсене</b> и след това щракнете върху <b>OK</b>, за да потвърдите.</li></ol> <p><strong>Съвети</strong> <br><br>Ако използвате % като маска на оператор, можете да направите търсенето по-широко.  Например вместо за просто търсене на резултати, които са равни на "Ябълки" може да промените търсенето на "Ябълки %" и това ще отговаря на всички резултати, които започват с думата ябълки, но може да съдържа други знаци.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Грешка: Достигнат лимитът на заявка на $limit за $module модул.',
    'ERROR_NOTIFY_OVERRIDE' => 'Грешка: ResourceObserver->notify() трябва да бъде отменено.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Грешка: Не може да създаде наблюдател, защото файла с метаданни е празен или не съществува.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Грешка: Няма наблюдател заисканото име',
    'ERR_UNDEFINED_METRIC' => 'Грешка: Не може да зададете стойност за неопределен метрика',
    'ERR_STORE_FILE_MISSING' => 'Грешка: Не може да се намери файл за прилагане на магазина',

    'LBL_MONITOR_ID' => 'Id на наблюдател',
    'LBL_USER_ID' => 'Потребител',
    'LBL_MODULE_NAME' => 'Име на модула',
    'LBL_ITEM_ID' => 'Id на елемент',
    'LBL_ITEM_SUMMARY' => 'Резюме',
    'LBL_ACTION' => 'Действие',
    'LBL_SESSION_ID' => 'Сесия',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack, създаден за потребителски Ид {0}',
    'LBL_VISIBLE' => 'Видим запис',
    'LBL_DATE_LAST_ACTION' => 'Дата',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'не е преди',
    'MSG_IS_MORE_THAN' => 'е повече от',
    'MSG_SHOULD_BE' => 'трябва да бъде',
    'MSG_OR_GREATER' => 'или по-голямо',

    'LBL_LIST' => 'Списък',
    'LBL_CREATE_BUG' => 'Добавяне на проблем',

    'LBL_OBJECT_IMAGE' => 'обект - изображение',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Изберете дата',

    'LBL_VALIDATE_RANGE' => 'не е във валиден диапазон',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Моля изберете както начална, така и крайна дата на диапазон',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Моля изберете както начална, така и крайна дата на диапазон',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Всички записи',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector. The service may currently be inaccessible or the configuration settings may be invalid. Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Име',
    'LBL_COLLECTION_PRIMARY' => 'Основен',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Потребител',
    'LBL_DESCRIPTION' => 'Описание',

    'LBL_YESTERDAY' => 'вчера',
    'LBL_TODAY' => 'днес',
    'LBL_TOMORROW' => 'утре',
    'LBL_NEXT_WEEK' => 'следващата седмица',
    'LBL_NEXT_MONDAY' => 'следващия месец',
    'LBL_NEXT_FRIDAY' => 'следващия петък',
    'LBL_TWO_WEEKS' => 'две седмици',
    'LBL_NEXT_MONTH' => 'следващия месец',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'първия ден на следващия месец',
    'LBL_THREE_MONTHS' => 'три месеца',
    'LBL_SIXMONTHS' => 'шест месеца',
    'LBL_NEXT_YEAR' => 'следващата година',

    //Datetimecombo fields
    'LBL_HOURS' => 'Часа',
    'LBL_MINUTES' => 'Минути',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Дата:',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Автоматично обновяване',

    'LBL_DURATION_DAY' => 'ден',
    'LBL_DURATION_HOUR' => 'час',
    'LBL_DURATION_MINUTE' => 'минута',
    'LBL_DURATION_DAYS' => 'дни',
    'LBL_DURATION_HOURS' => 'Времетраене (часове)',
    'LBL_DURATION_MINUTES' => 'Времетраене (минути)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Изберете месец',
    'LBL_ENTER_YEAR' => 'Въведете година',
    'LBL_ENTER_VALID_YEAR' => 'Въведете валидна година',

    //File write error label
    'ERR_FILE_WRITE' => 'Грешка: Файлът {0} не може да бъде записан. Проверете системните настройки и правата на достъп до уеб сървъра.',
    'ERR_FILE_NOT_FOUND' => 'Грешка: Файлът {0} не може да бъде зареден. Проверете системните настройки и правата на достъп до уеб сървъра.',

    'LBL_AND' => 'И',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Сигурност',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
„Това е примерен макет за импортиране, онагледяващ очакваното съдържание на файла, който е готов за импортиране.“
"Файлът е в .csv формат, използващ за разделител запетая, и двойни кавички като идентификатор на поле."

„Заглавният ред е най-горният ред във файла и съдържа етикетите на полетата, както бихте ги виждали в приложението.“
„Тези етикети се използват за съпоставяне на данните от файла към полетата в приложението.“

„Забележки: Имената на базата данни също могат да се използват в заглавния ред. Това е полезно, когато използвате phpMyAdmin или друг инструмент за работа с база данни, за да предоставите експортен списък от данни като файл за импортиране.“
„Подредбата на колоните не е критична, тъй като процесът на импортиране съпоставя данните от съответните полета въз основа на заглавния ред.“


"За да използвате този файл като шаблон, направете следното:"
"1. Премахнете примерните редове от данни"
"2. Премахнете помощния текст, който четете в момента"
"3. Въведете собствените си данни в съответните редове и колони"
"4. Запишете файла в директория на вашия диск"
"5. Щракнете върху опцията за импортиране от менюто Действия в приложението и изберете файла, който да качите"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Няма текущи уведомления',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'Соритрай',
    'LBL_ALT_SHOW_OPTIONS' => 'Допълнителни опции',
    'LBL_ALT_HIDE_OPTIONS' => 'Скриване на опции',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Премества избрания елемент в списъка в ляво',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Премества избрания елемент в списъка в дясно',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Преместване на избрания елемент нагоре в реда на показване',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Преместване на избрания елемент надолу в реда на показване',
    'LBL_ALT_INFO' => 'Информация',
    'MSG_DUPLICATE' => 'Създаденият запис {0} има вероятност да дублира вече съществуващ такъв {0} . {1}Записите с близки имена са изброени отдолу.<br>Натиснете бутона Съхрани {1} ако желаете да създадете новия {0} или изберете съществуващият {0} показан по-долу.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'Електронна поща',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'невалиден адрес на електронна поща',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Маркирай всички',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Изберете този ред',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ГРЕШКА: Възникна грешка по време на качване. Код на грешка: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ГРЕШКА: Възникна грешка по време на качване. Код на грешка: {0} - {1}. Upload_maxsize е {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ГРЕШКА: Възникна грешка по време на качване, моля свържете се с администратора за помощ.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Размер на качваните файлове, ({0} байта) надхвърля позволени максимум от {1} байта',
    'UPLOAD_REQUEST_ERROR' => 'Възникна грешка. Обновете страницата и опитайте отново.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Редактиране',
    'LBL_EDIT_BUTTON_TITLE' => 'Редактиране',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Дублирай',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Дублирай',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Изтрий',
    'LBL_DELETE_BUTTON_TITLE' => 'Изтрий',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Действие',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Съхрани',
    'LBL_SAVE_BUTTON_TITLE' => 'Съхрани',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Отмени',
    'LBL_CANCEL_BUTTON_TITLE' => 'Отмени',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Оферта',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Продажна цена',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Ръчно',
        '5' => 'Всеки 5 минути',
        '15' => 'На всеки 15 минути',
        '30' => 'На всеки 30 минути',
        '60' => 'На всеки час',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Няма адресати за напомнянето.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Напомнянето не е насочено към никого. Искате ли да го премахнете?',
    'LBL_DELETE_REMINDER' => 'Изтриване на напомняне',
    'LBL_OK' => 'Ок',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Избор на колони',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Запиши промените',
    'LBL_DISPLAYED' => 'Показани',
    'LBL_HIDDEN' => 'Скрита',
    'ERR_EMPTY_COLUMNS_LIST' => 'Изисква се поне един елемент',

    'LBL_FILTER_HEADER_TITLE' => 'Филтър',

    'LBL_CATEGORY' => 'Категория',
    'LBL_LIST_CATEGORY' => 'Категория',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Стил',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Зазоряване',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Ден',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Здрач',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Нощ',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Обяд',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Игнорирай черновата',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Тази операция ще изтрие този имейл, желаете ли да продължите?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Приложете шаблон за имейл',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'Съгласие',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primary Group",

    // footer
    'LBL_SUITE_TOP' => 'Начало на страницата',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Промяна на парола',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Библиотека';
$app_list_strings['moduleList']['EmailAddresses'] = 'Адрес на ел. поща';
$app_list_strings['project_priority_default'] = 'Средна';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Висока',
    'Medium' => 'Средна',
    'Low' => 'Ниска',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Съгласие',
    'contract' => 'Договор',
    'legal_obligation' => 'Правно задължение',
    'protection_of_interest' => 'Защита на интересите',
    'public_interest' => 'Обществен интерес',
    'legitimate_interest' => 'Законен интерес',
    'withdrawn' => 'Оттеглени',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Сайт',
    'phone' => 'Телефон',
    'given_to_user' => 'Дадено на служителя',
    'email' => 'Електронна поща',
    'third_party' => 'Трети страни',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'База от знания';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'АБУ ДАБИ',
    'ADEN' => 'АДЕН',
    'AFGHANISTAN' => 'АФГАНИСТАН',
    'ALBANIA' => 'АЛБАНИЯ',
    'ALGERIA' => 'АЛЖИР',
    'AMERICAN SAMOA' => 'АМЕРИКАНСКА САМОА',
    'ANDORRA' => 'АНДОРА',
    'ANGOLA' => 'АНГОЛА',
    'ANTARCTICA' => 'АНТАРКТИКА',
    'ANTIGUA' => 'АНТИГУА',
    'ARGENTINA' => 'АРЖЕНТИНА',
    'ARMENIA' => 'АРМЕНИЯ',
    'ARUBA' => 'АРУБА',
    'AUSTRALIA' => 'АВСТРАЛИЯ',
    'AUSTRIA' => 'АВСТРИЯ',
    'AZERBAIJAN' => 'АЗЕРБАЙДЖАН',
    'BAHAMAS' => 'БАХАМСКИ ОСТРОВИ',
    'BAHRAIN' => 'БАХРЕЙН',
    'BANGLADESH' => 'БАНГЛАДЕШ',
    'BARBADOS' => 'БАРБАДОС',
    'BELARUS' => 'БЕЛАРУС',
    'BELGIUM' => 'БЕЛГИЯ',
    'BELIZE' => 'БЕЛИЗ',
    'BENIN' => 'БЕНИН',
    'BERMUDA' => 'БЕРМУДСКИ ОСТРОВИ',
    'BHUTAN' => 'БУТАН',
    'BOLIVIA' => 'БОЛИВИЯ',
    'BOSNIA' => 'БОСНА И ХЕРЦЕГОВИНА',
    'BOTSWANA' => 'БОТСВАНА',
    'BOUVET ISLAND' => 'ОСТРОВ БУВЕ',
    'BRAZIL' => 'БРАЗИЛИЯ',
    'BRITISH ANTARCTICA TERRITORY' => 'БРИТАНСКА АНТАРКТИЧЕСКА ТЕРИТОРИЯ',
    'BRITISH INDIAN OCEAN TERRITORY' => 'БРИТАНСКА ИНДООКЕАНСКА ТЕРИТОРИЯ',
    'BRITISH VIRGIN ISLANDS' => 'БРИТАНСКИ ВИРДЖИНСКИ ОСТРОВИ',
    'BRITISH WEST INDIES' => 'БРИТАНСКИ АНТИЛИ',
    'BRUNEI' => 'БРУНЕЙ',
    'BULGARIA' => 'БЪЛГАРИЯ',
    'BURKINA FASO' => 'БУРКИНА ФАСО',
    'BURUNDI' => 'БУРУНДИ',
    'CAMBODIA' => 'КАМБОДЖА',
    'CAMEROON' => 'КАМЕРУН',
    'CANADA' => 'КАНАДА',
    'CANAL ZONE' => 'ЗОНА НА ПАНАМСКИЯ КАНАЛ',
    'CANARY ISLAND' => 'КАНАРСКИ ОСТРОВИ',
    'CAPE VERDI ISLANDS' => 'КАБО ВЕРДЕ',
    'CAYMAN ISLANDS' => 'КАЙМАНОВИ ОСТРОВИ',
    'CHAD' => 'ЧАД',
    'CHANNEL ISLAND UK' => 'НОРМАНДСКИ ОСТРОВИ',
    'CHILE' => 'ЧИЛИ',
    'CHINA' => 'КИТАЙ',
    'CHRISTMAS ISLAND' => 'ОСТРОВ РОЖДЕСТВО',
    'COCOS (KEELING) ISLAND' => 'КОКОСОВИ ОСТРОВИ',
    'COLOMBIA' => 'КОЛУМБИЯ',
    'COMORO ISLANDS' => 'КОМОРСКИ ОСТРОВИ',
    'CONGO' => 'ДЕМОКРАТИЧНА РЕПУБЛИКА КОНГО',
    'CONGO KINSHASA' => 'КОНГО КИНШАСА',
    'COOK ISLANDS' => 'ОСТРОВИ КУК',
    'COSTA RICA' => 'КОСТА РИКА',
    'CROATIA' => 'ХЪРВАТИЯ',
    'CUBA' => 'КУБА',
    'CURACAO' => 'КЮРАСАО',
    'CYPRUS' => 'КИПЪР',
    'CZECH REPUBLIC' => 'ЧЕХИЯ',
    'DAHOMEY' => 'БЕНИН',
    'DENMARK' => 'ДАНИЯ',
    'DJIBOUTI' => 'ДЖИБУТИ',
    'DOMINICA' => 'ДОМИНИКА',
    'DOMINICAN REPUBLIC' => 'ДОМИНИКАНСКА РЕПУБЛИКА',
    'DUBAI' => 'ДУБАЙ',
    'ECUADOR' => 'ЕКВАДОР',
    'EGYPT' => 'ЕГИПЕТ',
    'EL SALVADOR' => 'ЕЛ САЛВАДОР',
    'EQUATORIAL GUINEA' => 'ЕКВАТОРИАЛНА ГВИНЕЯ',
    'ESTONIA' => 'ЕСТОНИЯ',
    'ETHIOPIA' => 'ЕТИОПИЯ',
    'FAEROE ISLANDS' => 'ФАРЬОРСКИ ОСТРОВИ',
    'FALKLAND ISLANDS' => 'ФОЛКЛАНДСКИ ОСТРОВИ',
    'FIJI' => 'ФИДЖИ',
    'FINLAND' => 'ФИНЛАНДИЯ',
    'FRANCE' => 'ФРАНЦИЯ',
    'FRENCH GUIANA' => 'ФРЕНСКА ГВИАНА',
    'FRENCH POLYNESIA' => 'ФРЕНСКА ПОЛИНЕЗИЯ',
    'GABON' => 'ГАБОН',
    'GAMBIA' => 'ГАМБИЯ',
    'GEORGIA' => 'ГРУЗИЯ',
    'GERMANY' => 'ГЕРМАНИЯ',
    'GHANA' => 'ГАНА',
    'GIBRALTAR' => 'ГИБРАЛТАР',
    'GREECE' => 'ГЪРЦИЯ',
    'GREENLAND' => 'ГРЕНЛАНДИЯ',
    'GUADELOUPE' => 'ГВАДЕЛУПЕ',
    'GUAM' => 'ГУАМ',
    'GUATEMALA' => 'ГВАТЕМАЛА',
    'GUINEA' => 'ГВИНЕЯ',
    'GUYANA' => 'ГВИАНА',
    'HAITI' => 'ХАИТИ',
    'HONDURAS' => 'ХОНДУРАС',
    'HONG KONG' => 'ХОНКОНГ',
    'HUNGARY' => 'УНГАРИЯ',
    'ICELAND' => 'ИСЛАНДИЯ',
    'IFNI' => 'ИФНИ',
    'INDIA' => 'ИНДИЯ',
    'INDONESIA' => 'ИНДОНЕЗИЯ',
    'IRAN' => 'ИРАН',
    'IRAQ' => 'ИРАК',
    'IRELAND' => 'ИРЛАНДИЯ',
    'ISRAEL' => 'ИЗРАЕЛ',
    'ITALY' => 'ИТАЛИЯ',
    'IVORY COAST' => 'КОТ ДИВОАР',
    'JAMAICA' => 'ЯМАЙКА',
    'JAPAN' => 'ЯПОНИЯ',
    'JORDAN' => 'ЙОРДАНИЯ',
    'KAZAKHSTAN' => 'КАЗАХСТАН',
    'KENYA' => 'КЕНИЯ',
    'KOREA' => 'СЕВЕРНА КОРЕЯ',
    'KOREA, SOUTH' => 'ЮЖНА КОРЕЯ',
    'KUWAIT' => 'КУВЕЙТ',
    'KYRGYZSTAN' => 'КИРГИЗСТАН',
    'LAOS' => 'ЛАОС',
    'LATVIA' => 'ЛАТВИЯ',
    'LEBANON' => 'ЛИВАН',
    'LEEWARD ISLANDS' => 'ПОДВЕТРЕНИ ОСТРОВИ',
    'LESOTHO' => 'ЛЕСОТО',
    'LIBYA' => 'ЛИБИЯ',
    'LIECHTENSTEIN' => 'ЛИХТЕНЩАЙН',
    'LITHUANIA' => 'ЛАТВИЯ',
    'LUXEMBOURG' => 'ЛЮКСЕМБУРГ',
    'MACAO' => 'МАКАО',
    'MACEDONIA' => 'РЕПУБЛИКА МАКЕДОНИЯ',
    'MADAGASCAR' => 'МАДАГАСКАР',
    'MALAWI' => 'МАЛАВИ',
    'MALAYSIA' => 'МАЛАЙЗИЯ',
    'MALDIVES' => 'МАЛДИВИ',
    'MALI' => 'МАЛИ',
    'MALTA' => 'МАЛТА',
    'MARTINIQUE' => 'МАРТИНИКА',
    'MAURITANIA' => 'МАВРИТАНИЯ',
    'MAURITIUS' => 'МАВРИЦИЙ',
    'MELANESIA' => 'МЕЛАНЕЗИЯ',
    'MEXICO' => 'МЕКСИКО',
    'MOLDOVIA' => 'МОЛДОВА',
    'MONACO' => 'МОНАКО',
    'MONGOLIA' => 'МОНГОЛИЯ',
    'MOROCCO' => 'МАРОКО',
    'MOZAMBIQUE' => 'МОЗАМБИК',
    'MYANAMAR' => 'МИАНМАР',
    'NAMIBIA' => 'НАМИБИЯ',
    'NEPAL' => 'НЕПАЛ',
    'NETHERLANDS' => 'ХОЛАНДИЯ',
    'NETHERLANDS ANTILLES' => 'ХОЛАНДСКИ АНТИЛИ',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ХОЛАНДСКИ АНТИЛИ (НЕУТРАЛНА ЗОНА)',
    'NEW CALADONIA' => 'НОВА КАЛЕДОНИЯ',
    'NEW HEBRIDES' => 'НОВИ ХЕБРИДИ',
    'NEW ZEALAND' => 'НОВА ЗЕЛАНДИЯ',
    'NICARAGUA' => 'НИКАРАГУА',
    'NIGER' => 'НИГЕР',
    'NIGERIA' => 'НИГЕРИЯ',
    'NORFOLK ISLAND' => 'ОСТРОВ НОРФОЛК',
    'NORWAY' => 'НОРВЕГИЯ',
    'OMAN' => 'ОМАН',
    'OTHER' => 'Друга',
    'PACIFIC ISLAND' => 'ТИХООКЕАНСКИ ОСТРОВИ',
    'PAKISTAN' => 'ПАКИСТАН',
    'PANAMA' => 'ПАНАМА',
    'PAPUA NEW GUINEA' => 'ПАПУА НОВА ГВИНЕЯ',
    'PARAGUAY' => 'ПАРАГВАЙ',
    'PERU' => 'ПЕРУ',
    'PHILIPPINES' => 'ФИЛИПИНИ',
    'POLAND' => 'ПОЛША',
    'PORTUGAL' => 'ПОРТУГАЛИЯ',
    'PORTUGUESE TIMOR' => 'ТИМОР',
    'PUERTO RICO' => 'ПУЕРТО РИКО',
    'QATAR' => 'КАТАР',
    'REPUBLIC OF BELARUS' => 'БЕЛАРУС',
    'REPUBLIC OF SOUTH AFRICA' => 'РЕПУБЛИКА ЮЖНА АФРИКА',
    'REUNION' => 'РЕУНИОН',
    'ROMANIA' => 'РУМЪНИЯ',
    'RUSSIA' => 'РУСИЯ',
    'RWANDA' => 'РУАНДА',
    'RYUKYU ISLANDS' => 'ОСТРОВИ РЮКЮ',
    'SABAH' => 'САБАХ',
    'SAN MARINO' => 'САН МАРИНО',
    'SAUDI ARABIA' => 'САУДИТСКА АРАБИЯ',
    'SENEGAL' => 'СЕНЕГАЛ',
    'SERBIA' => 'СЪРБИЯ',
    'SEYCHELLES' => 'СЕЙШЕЛСКИ ОСТРОВИ',
    'SIERRA LEONE' => 'СИЕРА ЛЕОНЕ',
    'SINGAPORE' => 'СИНГАПУР',
    'SLOVAKIA' => 'СЛОВАКИЯ',
    'SLOVENIA' => 'СЛОВЕНИЯ',
    'SOMALILIAND' => 'СОМАЛИЯ',
    'SOUTH AFRICA' => 'ЮЖНА АФРИКА',
    'SOUTH YEMEN' => 'ЮЖЕН ЙЕМЕН',
    'SPAIN' => 'ИСПАНИЯ',
    'SPANISH SAHARA' => 'САХАРА',
    'SRI LANKA' => 'ШРИ ЛАНКА',
    'ST. KITTS AND NEVIS' => 'СЕЙНТ КИТС И НЕВИС',
    'ST. LUCIA' => 'СЕЙНТ ЛУСИЯ',
    'SUDAN' => 'СУДАН',
    'SURINAM' => 'СУРИНАМ',
    'SW AFRICA' => 'АФРИКА',
    'SWAZILAND' => 'СВАЗИЛЕНД',
    'SWEDEN' => 'ШВЕЦИЯ',
    'SWITZERLAND' => 'ШВЕЙЦАРИЯ',
    'SYRIA' => 'СИРИЯ',
    'TAIWAN' => 'ТАЙВАН',
    'TAJIKISTAN' => 'ТАДЖИКИСТАН',
    'TANZANIA' => 'ТАНЗАНИЯ',
    'THAILAND' => 'ТАЙЛАНД',
    'TONGA' => 'ТОНГА',
    'TRINIDAD' => 'ТРИНИДАД И ТОБАГО',
    'TUNISIA' => 'ТУНИС',
    'TURKEY' => 'ТУРЦИЯ',
    'UGANDA' => 'УГАНДА',
    'UKRAINE' => 'УКРАЙНА',
    'UNITED ARAB EMIRATES' => 'ОБЕДИНЕНИ АРАБСКИ ЕМИРСТВА',
    'UNITED KINGDOM' => 'ВЕЛИКОБРИТАНИЯ',
    'URUGUAY' => 'УРУГВАЙ',
    'US PACIFIC ISLAND' => 'АМЕРИКАНСКИ ТИХООКЕАНСКИ ОСТРОВИ',
    'US VIRGIN ISLANDS' => 'АМЕРИКАНСКИ ВИРДЖИНСКИ ОСТРОВИ',
    'USA' => 'СЪЕДИНЕНИ АМЕРИКАНСКИ ЩАТИ',
    'UZBEKISTAN' => 'УЗБЕКИСТАН',
    'VANUATU' => 'ВАНУАТУ',
    'VATICAN CITY' => 'ВАТИКАНА',
    'VENEZUELA' => 'ВЕНЕЦУЕЛА',
    'VIETNAM' => 'ВИЕТНАМ',
    'WAKE ISLAND' => 'ОСТРОВ УЕЙК',
    'WEST INDIES' => 'ЗАПАДНА ИНДИЯ',
    'WESTERN SAHARA' => 'ЗАПАДНА САХАРА',
    'YEMEN' => 'ЙЕМЕН',
    'ZAIRE' => 'ЗАИР',
    'ZAMBIA' => 'ЗАМБИЯ',
    'ZIMBABWE' => 'ЗИМБАБВЕ',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European &amp;amp;amp;amp;amp;amp; US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Африка/Алжир',
    'Africa/Luanda' => 'Африка/Луанда',
    'Africa/Porto-Novo' => 'Африка/Порто-Ново',
    'Africa/Gaborone' => 'Африка/Gaborone',
    'Africa/Ouagadougou' => 'Африка/Уагадугу',
    'Africa/Bujumbura' => 'Африка/Бужумбура',
    'Africa/Douala' => 'Африка/Дуала',
    'Atlantic/Cape_Verde' => 'Атлантик/Капо_Верде',
    'Africa/Bangui' => 'Африка/Банги',
    'Africa/Ndjamena' => 'Африка/Нджамена',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Африка/Киншаса',
    'Africa/Lubumbashi' => 'Африка/Лубумбаши',
    'Africa/Brazzaville' => 'Африка/Бразъвил',
    'Africa/Abidjan' => 'Африка/Абиджан',
    'Africa/Djibouti' => 'Африка/Джибути',
    'Africa/Cairo' => 'Африка/Кайро',
    'Africa/Malabo' => 'Африка/Малабо',
    'Africa/Asmera' => 'Африка/Асмара',
    'Africa/Addis_Ababa' => 'Африка/Адис_Абеба',
    'Africa/Libreville' => 'Африка/Либревил',
    'Africa/Banjul' => 'Африка/Банджул',
    'Africa/Accra' => 'Африка/Акра',
    'Africa/Conakry' => 'Африка/Конакри',
    'Africa/Bissau' => 'Африка/Бисау',
    'Africa/Nairobi' => 'Африка/Найроби',
    'Africa/Maseru' => 'Африка/Масеру',
    'Africa/Monrovia' => 'Африка/Монровия',
    'Africa/Tripoli' => 'Африка/Триполи',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Африка/Блантайр',
    'Africa/Bamako' => 'Африка/Бамако',
    'Africa/Nouakchott' => 'Африка/Нуакшот',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Африка/Казабланка',
    'Africa/El_Aaiun' => 'Африка/Ел_Аюн',
    'Africa/Maputo' => 'Африка/Мапуто',
    'Africa/Windhoek' => 'Африка/Виндхук',
    'Africa/Niamey' => 'Африка/Ниамей',
    'Africa/Lagos' => 'Африка/Лагос',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Африка/Кигали',
    'Atlantic/St_Helena' => 'Atlantic/St_Helena',
    'Africa/Sao_Tome' => 'Африка_Сао_Томе',
    'Africa/Dakar' => 'Африка/Дакар',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'фрика/Фритаун',
    'Africa/Mogadishu' => 'Африка/Могадишу',
    'Africa/Johannesburg' => 'Африка/Йоханесбург',
    'Africa/Khartoum' => 'Африка/Хартун',
    'Africa/Mbabane' => 'Африка/Мбабане',
    'Africa/Dar_es_Salaam' => 'Африка/Дар_Ес_Салаам',
    'Africa/Lome' => 'Африка/Ломе',
    'Africa/Tunis' => 'Африка/Тунис',
    'Africa/Kampala' => 'Африка/Кампала',
    'Africa/Lusaka' => 'Африка/Лусака',
    'Africa/Harare' => 'Африка/Хараре',
    'Antarctica/Casey' => 'Антарктида/Кейси',
    'Antarctica/Davis' => 'Антарктика/Дейвис',
    'Antarctica/Mawson' => 'Антарктида/Моусън',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Антарктида/Syowa',
    'Antarctica/Vostok' => 'Антарктика/Восток',
    'Antarctica/Rothera' => 'Антарктика/Ротера',
    'Antarctica/Palmer' => 'Антарктика/Палмър',
    'Antarctica/McMurdo' => 'Антарктида/Макмърдо',
    'Asia/Kabul' => 'Азия/Кабул',
    'Asia/Yerevan' => 'Азия/Ереван',
    'Asia/Baku' => 'Азия/Баку',
    'Asia/Bahrain' => 'Азия/Бахрейн',
    'Asia/Dhaka' => 'Азия/Дака',
    'Asia/Thimphu' => 'Азия/Тхимпху',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Азия/Бруней',
    'Asia/Rangoon' => 'Азия/Янгон',
    'Asia/Phnom_Penh' => 'Азия/Пном_Пен',
    'Asia/Beijing' => 'Азия/Пекин',
    'Asia/Harbin' => 'Азия/Харбин',
    'Asia/Shanghai' => 'Азия/Шанхай',
    'Asia/Chongqing' => 'Азия/Чунцин',
    'Asia/Urumqi' => 'Азия/Урумчи',
    'Asia/Kashgar' => 'Азия/Кашгар',
    'Asia/Hong_Kong' => 'Азия/Хонг_Конг',
    'Asia/Taipei' => 'Азия/Тайпе',
    'Asia/Macau' => 'Азия/Макао',
    'Asia/Nicosia' => 'Азия/Никозия',
    'Asia/Tbilisi' => 'Азия/Тбилиси',
    'Asia/Dili' => 'Азия/Дили',
    'Asia/Calcutta' => 'Азия/Калкута',
    'Asia/Jakarta' => 'Азия/Джакарта',
    'Asia/Pontianak' => 'Азия/Понтианак',
    'Asia/Makassar' => 'Азия/Макасар',
    'Asia/Jayapura' => 'Азия/Аяпура',
    'Asia/Tehran' => 'Азия/Техеран',
    'Asia/Baghdad' => 'Азия/Багдат',
    'Asia/Jerusalem' => 'Азия/Йерусалим',
    'Asia/Tokyo' => 'Азиа/Токио',
    'Asia/Amman' => 'Азиа/Аман',
    'Asia/Almaty' => 'Азия/Алма_Ата',
    'Asia/Qyzylorda' => 'Азия/Къйзъйлорда',
    'Asia/Aqtobe' => 'Азия/Актебе',
    'Asia/Aqtau' => 'Азия/Актау',
    'Asia/Oral' => 'Азия/Орал',
    'Asia/Bishkek' => 'Азия/Бишкек',
    'Asia/Seoul' => 'Азия/Сеул',
    'Asia/Pyongyang' => 'Азия/Пхенян',
    'Asia/Kuwait' => 'Азия/Кувейт',
    'Asia/Vientiane' => 'Азия/Виентян',
    'Asia/Beirut' => 'Азия/Бейрут',
    'Asia/Kuala_Lumpur' => 'Азия/Куала Лумпур',
    'Asia/Kuching' => 'Азия/Кучинг',
    'Indian/Maldives' => 'Индия/Малдиви',
    'Asia/Hovd' => 'Азия/Ховд',
    'Asia/Ulaanbaatar' => 'Азия/Уланбатор',
    'Asia/Choibalsan' => 'Азия/Чойбалсан',
    'Asia/Katmandu' => 'Азия/Катманду',
    'Asia/Muscat' => 'Азия/Мускат',
    'Asia/Karachi' => 'Азия/Карачи',
    'Asia/Gaza' => 'Азия/Газа',
    'Asia/Manila' => 'Азия/Манила',
    'Asia/Qatar' => 'Азия/Катар',
    'Asia/Riyadh' => 'Азия/Рияд',
    'Asia/Singapore' => 'Азия/Сингапур',
    'Asia/Colombo' => 'Азия/Коломбо',
    'Asia/Damascus' => 'Асия/Дамаск',
    'Asia/Dushanbe' => 'Азия/Душамбе',
    'Asia/Bangkok' => 'Азия/Банкок',
    'Asia/Ashgabat' => 'Азия/Ашхабат',
    'Asia/Dubai' => 'Азия/Дубай',
    'Asia/Samarkand' => 'Азия/Самарканд',
    'Asia/Tashkent' => 'Азия/Ташкент',
    'Asia/Saigon' => 'Асия/Сейгон',
    'Asia/Aden' => 'Азия/Аден',
    'Australia/Darwin' => 'Австралия/Дарвин',
    'Australia/Perth' => 'Австралия/Пърт',
    'Australia/Brisbane' => 'Австралия/Брисбейн',
    'Australia/Lindeman' => 'Австралия/Линдеман',
    'Australia/Adelaide' => 'Австралия/Аделаида',
    'Australia/Hobart' => 'Австралия/Хобарт',
    'Australia/Currie' => 'Австралия/Кърие',
    'Australia/Melbourne' => 'Австралия/Мелбърн',
    'Australia/Sydney' => 'Австралия/Сидни',
    'Australia/Broken_Hill' => 'Австралия/Броукън_Хил',
    'Indian/Christmas' => 'Индия/Christmas (Кристмас)',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Пасифик/Фиджи',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Пасифик/Таити',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Европа/Лондон',
    'Europe/Dublin' => 'Европа/Дъблин',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Европа/Тирана',
    'Europe/Andorra' => 'Европа/Андора',
    'Europe/Vienna' => 'Европа/Виена',
    'Europe/Minsk' => 'Европа/Минск',
    'Europe/Brussels' => 'Европа/Брюксел',
    'Europe/Sofia' => 'Европа/София',
    'Europe/Prague' => 'Европа/Прага',
    'Europe/Copenhagen' => 'Европа/Копенхаген',
    'Atlantic/Faeroe' => 'Атлантик/Фарьорски_острови',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Европа/Талин',
    'Europe/Helsinki' => 'Европа/Хелзинки',
    'Europe/Paris' => 'Европа/Париж',
    'Europe/Berlin' => 'Европа/Берлин',
    'Europe/Gibraltar' => 'Европа/Гибралтар',
    'Europe/Athens' => 'Европа/Атина',
    'Europe/Budapest' => 'Европа/Будапеща',
    'Atlantic/Reykjavik' => 'Атлантик/Рейкявик',
    'Europe/Rome' => 'Европа/Рим',
    'Europe/Riga' => 'Европа/Рига',
    'Europe/Vaduz' => 'Европа/Вадуц',
    'Europe/Vilnius' => 'Европа/Вилниус',
    'Europe/Luxembourg' => 'Европа/Люксембург',
    'Europe/Malta' => 'Европа/Малта',
    'Europe/Chisinau' => 'Европа/Кишинев',
    'Europe/Monaco' => 'Европа/Монако',
    'Europe/Amsterdam' => 'Европа/Амстердам',
    'Europe/Oslo' => 'Европа/Осло',
    'Europe/Warsaw' => 'Европа/Варшава',
    'Europe/Lisbon' => 'Европа/Лисабон',
    'Atlantic/Azores' => 'Атлантик/Азорски острови',
    'Atlantic/Madeira' => 'Аталантик/Мадейра',
    'Europe/Bucharest' => 'Европа/Букурещ',
    'Europe/Kaliningrad' => 'Европа/Калининград',
    'Europe/Moscow' => 'Европа/Москва',
    'Europe/Samara' => 'Европа/Самара',
    'Asia/Yekaterinburg' => 'Азия/Екатеринбург',
    'Asia/Omsk' => 'Азия/Омск',
    'Asia/Novosibirsk' => 'Азия/Новосибирск',
    'Asia/Krasnoyarsk' => 'Азия/Краноярск',
    'Asia/Irkutsk' => 'Азия/Иркутск',
    'Asia/Yakutsk' => 'Азия/Якутск',
    'Asia/Vladivostok' => 'Азия/Владивосток',
    'Asia/Sakhalin' => 'Азия/Сахалин',
    'Asia/Magadan' => 'Азия/Магадан',
    'Asia/Kamchatka' => 'Азия/Камчатка',
    'Asia/Anadyr' => 'Азия/Анадир',
    'Europe/Belgrade' => 'Европа/Белград',
    'Europe/Madrid' => 'Европа/Мадрид',
    'Africa/Ceuta' => 'Африка/Сеута',
    'Atlantic/Canary' => 'Атлантик/Канарски_острови',
    'Europe/Stockholm' => 'Европа/Стокхолм',
    'Europe/Zurich' => 'Европа/Цюрих',
    'Europe/Istanbul' => 'Европа/Истанбул',
    'Europe/Kiev' => 'Европа/Киев',
    'Europe/Uzhgorod' => 'Европа/Ужгород',
    'Europe/Zaporozhye' => 'Европа/Запорожие',
    'Europe/Simferopol' => 'Европа/Симферопол',
    'America/New_York' => 'Америка/Ню_Йорк',
    'America/Chicago' => 'Америка_Чикаго',
    'America/North_Dakota/Center' => 'Америка/Северна_Дакота/Център',
    'America/Denver' => 'Америка/Денвер',
    'America/Los_Angeles' => 'Америка/Лос_Анжелос',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'Америка/Якутат',
    'America/Anchorage' => 'Америка/Анкъридж',
    'America/Nome' => 'Америка/Ноум',
    'America/Adak' => 'Америка/Адак',
    'Pacific/Honolulu' => 'Пасифик/Хонолулу',
    'America/Phoenix' => 'Америка/Феникс',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'Америка/Индиана/Индианаполис',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Америка/Кентъки/Луисвил',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'Америка/Детройт',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'Америка/Халифакс',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'Америка/Монреал',
    'America/Toronto' => 'Америка/Торонто',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy_River',
    'America/Winnipeg' => 'Америка/Уинипег',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'Америка/Едмънтън',
    'America/Vancouver' => 'Америка/Ванкувър',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'Америка/Канкун',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'Америка/Монтерей',
    'America/Mexico_City' => 'Америка/Мексико_Сити',
    'America/Chihuahua' => 'Америка/Чихуахуа',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'Америка/Антигуа',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'Америка/Барбадос',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Аталантик/Бермудски_острови',
    'America/Cayman' => 'Америка/Кайманови_острови',
    'America/Costa_Rica' => 'Америка/Коста_Рика',
    'America/Havana' => 'Америка/Хавана',
    'America/Dominica' => 'Америка/Доминиканска_република',
    'America/Santo_Domingo' => 'Америка/Санто_Доминго',
    'America/El_Salvador' => 'Америка/Ел_Салвадор',
    'America/Grenada' => 'Америка/Гранада',
    'America/Guadeloupe' => 'Америка/Гваделупа',
    'America/Guatemala' => 'Америка/Гватемала',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'Америка/Ямайка',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'Америка/Манагуа',
    'America/Panama' => 'Америка/Панама',
    'America/Puerto_Rico' => 'Америка/Пуерто_Рико',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'Америка/Аруба',
    'America/La_Paz' => 'Америка/Ла_Пас',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'Америка/Сао_Пауло',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'Америка/Сантяго',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'Америка/Богота',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Пасифик/Галапагоски_острови',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'Америка/Лима',
    'Atlantic/South_Georgia' => 'Атлантик/Южна_Джарджия',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'Америка/Монтевидео',
    'America/Caracas' => 'Америка/Каракас',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Request',
    2 => 'Достъп',
    3 => 'Невалиден',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Кампании',
    'email' => 'Електронна поща',
    'event' => 'Събитие',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Кампании',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Кампании',
    'email' => 'Електронна поща',
    'event' => 'Събитие',
    'system' => 'Системни настройки',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'База от знания';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Работен вариант';
$app_list_strings['aok_status_list']['Expired'] = 'С изтекъл срок на валидност';
$app_list_strings['aok_status_list']['In_Review'] = 'В процес на планиране';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Частен';
$app_list_strings['aok_status_list']['published_public'] = 'Публичен';

$app_list_strings['moduleList']['FP_events'] = 'Събития';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Местоположения';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Поканен';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Not Invited';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Attended';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Not Attended';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Приет';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Отхвърлена';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Без отговор';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Статус на поканата';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Текуща страница';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Всички записи';
$app_strings['LBL_LISTVIEW_NONE'] = 'Нито един запис';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Индекс';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Моля отговорете над тази линия ===';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Затворен',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Нов',
        'Open_Assigned' => 'Разпределен',
        'Closed_Closed' => 'Затворен',
        'Open_Pending Input' => 'Висяща',
        'Closed_Rejected' => 'Отхвърлен',
        'Closed_Duplicate' => 'Дублирай',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Единичен потребител',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'По подразбиране',
    'singleUser' => 'Единичен потребител',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Случайно',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Справки';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Условия на справката';
$app_list_strings['moduleList']['AOR_Charts'] = 'Допълнителни графики';
$app_list_strings['moduleList']['AOR_Fields'] = 'Полета за справката';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Равно';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Е различно от';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'По-голямо от';
$app_list_strings['aor_operator_list']['Less_Than'] = 'По-малко от';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'По-голямо или равно на';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'По-малко или равно';
$app_list_strings['aor_operator_list']['Contains'] = 'Съдържа';
$app_list_strings['aor_operator_list']['Starts_With'] = 'По първата част от името';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Завършва с';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'И';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ИЛИ';
$app_list_strings['aor_condition_type_list']['Value'] = 'Стойност';
$app_list_strings['aor_condition_type_list']['Field'] = 'Поле';
$app_list_strings['aor_condition_type_list']['Date'] = 'Дата:';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Един от';
$app_list_strings['aor_condition_type_list']['Period'] = 'Период';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Текущ потребител';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Минути';
$app_list_strings['aor_date_type_list']['hour'] = 'Часа';
$app_list_strings['aor_date_type_list']['day'] = 'Дни';
$app_list_strings['aor_date_type_list']['week'] = 'Седмици';
$app_list_strings['aor_date_type_list']['month'] = 'Месеци';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Работно време';
$app_list_strings['aor_date_options']['now'] = 'Сега';
$app_list_strings['aor_date_options']['field'] = 'Това поле';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Във възходящ ред';
$app_list_strings['aor_sort_operator']['DESC'] = 'В нисходящ ред';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Брой';
$app_list_strings['aor_function_list']['MIN'] = 'Минимум';
$app_list_strings['aor_function_list']['MAX'] = 'Максимум';
$app_list_strings['aor_function_list']['SUM'] = 'Сума';
$app_list_strings['aor_function_list']['AVG'] = 'Средно аритметично';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Брой';
$app_list_strings['aor_total_options']['SUM'] = 'Сума';
$app_list_strings['aor_total_options']['AVG'] = 'Средно аритметично';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Кръгова диаграма';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Месечно';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Седмично';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Дневно';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Активен';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Неактивен';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Електронна поща';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Потребител';
$app_list_strings['aor_email_type_list']['Users'] = 'Потребители';
$app_list_strings['aor_assign_options']['all'] = 'Всички потребители';
$app_list_strings['aor_assign_options']['role'] = 'Всички потребители с тази роля';
$app_list_strings['aor_assign_options']['security_group'] = 'Всички потребители от тази група за сигурност';
$app_list_strings['date_time_period_list']['today'] = 'Днес';
$app_list_strings['date_time_period_list']['yesterday'] = 'Вчера';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Миналата седмица';
$app_list_strings['date_time_period_list']['last_month'] = 'Последния месец';
$app_list_strings['date_time_period_list']['this_month'] = 'Текущия месец';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Текущото тримесечие';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Изминалото тримесечие';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Разширен';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Ден';
$app_strings['LBL_CRON_MONTH'] = 'Месец';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Дневно';
$app_strings['LBL_CRON_WEEKLY'] = 'Седмично';
$app_strings['LBL_CRON_MONTHLY'] = 'Месечно';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Договори';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Фактури';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Продукти';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Оферти';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Анализатор';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Конкурент';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Клиент';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Интегратор';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Инвеститор';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Партньор';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Медиа';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'В процес на преговори';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Дистрибутор';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Други';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Работен вариант';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Преговори по офертата';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Изпратена';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Висяща';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Потвърдена';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Приета';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Загубена';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Замразена';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Одобрено';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Не е одобрено';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Пцнт';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Анализатор';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Конкурент';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Клиент';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Интегратор';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Инвеститор';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Партньор';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Медиа';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'В процес на преговори';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Дистрибутор';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Други';
$app_list_strings['invoice_status_dom']['Paid'] = 'Платени';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Неплатени';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Отказани';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Не фактурирани';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Фактурирани';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Good';
$app_list_strings['product_type_dom']['Service'] = 'Услуга';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Оферти';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Фактури';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Договори';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Оферти';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Фактури';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Договори';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Организации';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Контакти';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Потенциални клиенти';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Планирана';
$app_list_strings['contract_status_list']['In Progress'] = 'В процес на изпълнение';
$app_list_strings['contract_status_list']['Signed'] = 'Подписан';
$app_list_strings['contract_type_list']['Type'] = 'Тип';
$app_strings['LBL_PRINT_AS_PDF'] = 'Принтирай в PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Моля изберете шаблон';
$app_strings['LBL_NO_TEMPLATE'] = 'ГРЕШКА\nНе е намерен шаблон.\nМоля отидете в модул шаблони за PDF и създайте такъв';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Работен процес';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Условия За Работен Поток';
$app_list_strings['moduleList']['AOW_Processed'] = 'Одит на процес';
$app_list_strings['moduleList']['AOW_Actions'] = 'Действията на работния процес';
$app_list_strings['aow_status_list']['Active'] = 'Активен';
$app_list_strings['aow_status_list']['Inactive'] = 'Неактивен';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Равно';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Е различно от';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'По-голямо от';
$app_list_strings['aow_operator_list']['Less_Than'] = 'По-малко от';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'По-голямо или равно на';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'По-малко или равно';
$app_list_strings['aow_operator_list']['Contains'] = 'Съдържа';
$app_list_strings['aow_operator_list']['Starts_With'] = 'По първата част от името';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Завършва с';
$app_list_strings['aow_operator_list']['is_null'] = 'Е Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Завършена';
$app_list_strings['aow_process_status_list']['Running'] = 'В процес на работа';
$app_list_strings['aow_process_status_list']['Pending'] = 'Висяща';
$app_list_strings['aow_process_status_list']['Failed'] = 'Завършил неуспешно';
$app_list_strings['aow_condition_operator_list']['And'] = 'И';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ИЛИ';
$app_list_strings['aow_condition_type_list']['Value'] = 'Стойност';
$app_list_strings['aow_condition_type_list']['Field'] = 'Поле';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Има промяна';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'В група за сигурност';
$app_list_strings['aow_condition_type_list']['Date'] = 'Дата:';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Един от';
$app_list_strings['aow_action_type_list']['Value'] = 'Стойност';
$app_list_strings['aow_action_type_list']['Field'] = 'Поле';
$app_list_strings['aow_action_type_list']['Date'] = 'Дата:';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Най-малко зает';
$app_list_strings['aow_action_type_list']['Random'] = 'Случайно';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Стойност';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Поле';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Минути';
$app_list_strings['aow_date_type_list']['hour'] = 'Часа';
$app_list_strings['aow_date_type_list']['day'] = 'Дни';
$app_list_strings['aow_date_type_list']['week'] = 'Седмици';
$app_list_strings['aow_date_type_list']['month'] = 'Месеци';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Работно време';
$app_list_strings['aow_date_options']['now'] = 'Сега';
$app_list_strings['aow_date_options']['today'] = 'Днес';
$app_list_strings['aow_date_options']['field'] = 'Това поле';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Всички потребители';
$app_list_strings['aow_assign_options']['role'] = 'Всички потребители с тази роля';
$app_list_strings['aow_assign_options']['security_group'] = 'Всички потребители от тази група за сигурност';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Електронна поща';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Запис на мейл';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Потребител';
$app_list_strings['aow_email_type_list']['Users'] = 'Потребители';
$app_list_strings['aow_email_to_list']['to'] = 'До';
$app_list_strings['aow_email_to_list']['cc'] = 'Копие';
$app_list_strings['aow_email_to_list']['bcc'] = 'Скрито копие (BCC)';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Всички записи';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Нови записи';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Променени записи';
$app_list_strings['aow_run_when_list']['Always'] = 'Винаги';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Само при запис';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Само в плана';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Проекти - Макети';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'Дни';
$app_list_strings['duration_unit_dom']['Hours'] = 'Часа';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Въвеждане на проект';

//gmaps
$app_strings['LBL_MAP'] = 'Карта';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Адрес';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Карти';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Организации';
$app_list_strings['map_module_type_list']['Contacts'] = 'Контакти';
$app_list_strings['map_module_type_list']['Cases'] = 'Казуси';
$app_list_strings['map_module_type_list']['Leads'] = 'Потенциални клиенти';
$app_list_strings['map_module_type_list']['Meetings'] = 'Срещи';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Възможности';
$app_list_strings['map_module_type_list']['Project'] = 'Проекти';
$app_list_strings['map_module_type_list']['Prospects'] = 'Целеви клиенти';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Организация';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Контакт';
$app_list_strings['map_relate_type_list']['Cases'] = 'Казус';
$app_list_strings['map_relate_type_list']['Leads'] = 'Потенциален клиент';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Среща';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Възможност';
$app_list_strings['map_relate_type_list']['Project'] = 'Проекти';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Целеви клиенти';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Административен';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aircraft Small';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Airplane Tourism';
$app_list_strings['marker_image_list']['airport'] = 'Airport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Apartment';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Beach';
$app_list_strings['marker_image_list']['beautiful'] = 'Beautiful';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicycle Parking';
$app_list_strings['marker_image_list']['big_city'] = 'Big City';
$app_list_strings['marker_image_list']['bridge'] = 'Bridge';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Bridge Modern';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Car';
$app_list_strings['marker_image_list']['car_rental'] = 'Car Rental';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Castle';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathedral';
$app_list_strings['marker_image_list']['chapel'] = 'Chapel';
$app_list_strings['marker_image_list']['church'] = 'Church';
$app_list_strings['marker_image_list']['city_square'] = 'City Square';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Coffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Свързани с тип организация';
$app_list_strings['marker_image_list']['conference'] = 'Конференция';
$app_list_strings['marker_image_list']['construction'] = 'Строителство';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Cycling';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment Store';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Falling Rocks';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forest';
$app_list_strings['marker_image_list']['fountain'] = 'Fountain';
$app_list_strings['marker_image_list']['friday'] = 'Петък';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Начало';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Информация';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Библиотека';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Понеделник';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palace';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Снимка';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Порт';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Rain';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant African';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fish';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Greek';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japanese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Korean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterranean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turkish';
$app_list_strings['marker_image_list']['right'] = 'Right';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Right Then Up';
$app_list_strings['marker_image_list']['saturday'] = 'Събота';
$app_list_strings['marker_image_list']['school'] = 'School';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Sight';
$app_list_strings['marker_image_list']['small_city'] = 'Small City';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Speed 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Speed 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Speed 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Speed 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Speed 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Speed 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Speed 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Speed 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Speed 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Speed 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Speed 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Speed 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam Train';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'Нд';
$app_list_strings['marker_image_list']['sunday'] = 'Неделя';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Telephone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'Четвъртък';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Вторник';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Turn Left';
$app_list_strings['marker_image_list']['turn_right'] = 'Turn Right';
$app_list_strings['marker_image_list']['university'] = 'University';
$app_list_strings['marker_image_list']['up'] = 'Up';
$app_list_strings['marker_image_list']['up_left'] = 'Up Left';
$app_list_strings['marker_image_list']['up_right'] = 'Up Right';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'Сряда';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Out of Office';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In a Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Дата';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Please select a valid date';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Please select a reason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Call Attempts';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Роля';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Филтър';

$app_strings['LBL_COLLECTION_TYPE'] = 'Тип';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Редактиране на табулатори';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Number of Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Задачи',
    'Meetings' => 'Срещи',
    'Calls' => 'Обаждания',
    'Notes' => 'Бележки',
    'Emails' => 'Електронна поща'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Продажби',
    'getAccountsSpotsData' => 'Организации',
    'getLeadsSpotsData' => 'Потенциални клиенти',
    'getServiceSpotsData' => 'Услуга',
    'getMarketingSpotsData' => 'Маркетинг',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Дейности',
    'getQuotesSpotsData' => 'Оферти'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Работно време';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'Понеделник';
$app_list_strings['day_list']['Tuesday'] = 'Вторник';
$app_list_strings['day_list']['Wednesday'] = 'Сряда';
$app_list_strings['day_list']['Thursday'] = 'Четвъртък';
$app_list_strings['day_list']['Friday'] = 'Петък';
$app_list_strings['day_list']['Saturday'] = 'Събота';
$app_list_strings['day_list']['Sunday'] = 'Неделя';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Портрет';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Лендскейп';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Работен вариант';
$app_list_strings['survey_status_list']['Public'] = 'Публичен';
$app_list_strings['survey_status_list']['Closed'] = 'Затворен';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Отметка';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio бутон';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Дата:';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Оценка';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Поканата за очаквано потвърждение на съгласие не е изпратена';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Изпратена е покана за очаквано потвърждаване на съгласие';
$app_strings['LBL_OPT_IN'] = 'Съгласен';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Да не се изпраща електронна поща';
$app_strings['LBL_OPT_IN_INVALID'] = 'Невалиден';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Забранени модули',
    'opt-in' => 'Съгласие',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Съгласие',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Unable to send email to %s email address(es), because they are not opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s email address do not have a valid id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Two Factor Authentication failed';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Two Factor Authentication code sent.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Thank you for submitting your interest.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicit',
    'authorization_code' => 'Authorization Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'мин.',
    'hour' => 'час.',
    'day' => 'дни',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Персонална',
    'shared' => 'Групов',
    'group' => 'Група',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Connected',
    'failed' => 'Завършил неуспешно',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'В процес на изпълнение',
    'success' => 'Успешно',
    'warning' => 'Предупреждение',
    'error' => 'Грешка:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Error';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Error occurred.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Version: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Please ensure you fill in the fields required';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API expects body of the request to be JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Response';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API cannot find resource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API expects the "Accept" header to be application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API expects the "Content-Type" header to be application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Desktop notifications are now enabled for this web browser.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Desktop notifications are disabled for this web browser. Use your browser preferences to enable them again.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'This browser does not support desktop notifications.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'There was an error: ';
$app_strings['LBL_CLICK_HERE'] = 'Натиснете тук';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Търси';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Търси';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Търси';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Предишна';
$app_strings['LBL_SEARCH_NEXT'] = 'Следваща стъпка';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' of ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Use Advanced Search';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Use Basic Search';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Legacy MPDF Engine';
$app_strings['LBL_TCPDF_ENGINE'] = 'TCPDF Engine';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Invalid file name:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'This can only be alphanumeric characters, plus \'.\' , \'-\' and \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Invalid import file name';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Password set. Enter value to set new password.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Value set. Enter new value to override current one.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login with Inbound Email server. For connection: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'Your IMAP OAuth session has expired, please login again in the connection: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'Код';
$app_strings['LBL_VALUE'] = 'Стойност';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Подпис';

$app_list_strings['email_import_timeframe_start_dom'] = [
    '-1 year' => '1 Year',
    '-6 months' => '6 Months',
    '-3 months' => '3 Months',
    '-30 days' => '30 Days',
    '-15 days' => '15 Days',
    '-5 days' => '5 Days',
    '-1 days' => '1 Day',
    '0 days' => '0 Days',
];
