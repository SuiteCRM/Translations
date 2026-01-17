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
    'ERR_DELETE_RECORD' => 'Изберете номер на записа, за да изтриете контакта.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_ACCOUNT_NAME' => 'Организация:',
    'LBL_CAMPAIGN' => 'Кампания:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
    'LBL_ALT_ADDRESS_CITY' => 'Алтернативен адрес: град',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Алтернативен адрес: държава',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Алтернативен адрес: пощенски код:',
    'LBL_ALT_ADDRESS_STATE' => 'Алтернативен адрес: област',
    'LBL_ALT_ADDRESS_STREET_2' => 'Алтернативен адрес: улица 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Алтернативен адрес: улица 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Алтернативен адрес: улица',
    'LBL_ALTERNATE_ADDRESS' => 'Алтернативен адрес:',
    'LBL_ALT_ADDRESS' => 'Алтернативен адрес:',
    'LBL_ANY_ADDRESS' => 'Адрес:',
    'LBL_ANY_EMAIL' => 'Електронна поща:',
    'LBL_ANY_PHONE' => 'Телефон:',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_ASSIGNED_TO_ID' => 'Отговорник',
    'LBL_ASSISTANT_PHONE' => 'Телефон на асистента:',
    'LBL_ASSISTANT' => 'Асистент:',
    'LBL_BIRTHDATE' => 'Дата на раждане:',
    'LBL_CITY' => 'Град:',
    'LBL_CAMPAIGN_ID' => 'Кампания',
    'LBL_CONTACT_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Контакт:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Контакт-Възможност:',
    'LBL_CONTACT_ROLE' => 'Роля:',
    'LBL_CONTACT' => 'Контакт:',
    'LBL_COUNTRY' => 'Държава:',
    'LBL_CREATED_ACCOUNT' => 'Въведена е нова организация',
    'LBL_CREATED_CALL' => 'Планирано е ново обаждане',
    'LBL_CREATED_CONTACT' => 'Въведен е нов контакт',
    'LBL_CREATED_MEETING' => 'Насрочена е нова среща',
    'LBL_CREATED_OPPORTUNITY' => 'Въведена е нова възможност',
    'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контакти',
    'LBL_DEPARTMENT' => 'Отдел:',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Докладва на',
    'LBL_DO_NOT_CALL' => 'Да не бъде търсен по телефон:',
    'LBL_DUPLICATE' => 'Possible Duplicate Contacts',
    'LBL_EMAIL_ADDRESS' => 'Електронна поща:',
    'LBL_EMAIL_OPT_OUT' => 'Блокиран',
    'LBL_EXISTING_ACCOUNT' => 'Използвана е вече съществуваща организация',
    'LBL_EXISTING_CONTACT' => 'Използван е вече съществуващ контакт',
    'LBL_EXISTING_OPPORTUNITY' => 'Използвана е вече съществуваща възможност',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_HOME_PHONE' => 'Домашен телефон:',
    'LBL_ID' => 'Идентификационен номер:',
    'LBL_IMPORT_VCARD' => 'Импортиране на електронна визитка',
    'LBL_VCARD' => 'Електронна визитка',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматично създаване на контакт чрез импортиране на електронна визитка от системата.',
    'LBL_INVALID_EMAIL' => 'Неработеща електронна поща:',
    'LBL_INVITEE' => 'Докладва на',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_LEAD_SOURCE' => 'Източник:',
    'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
    'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_CONTACT_ROLE' => 'Роля',
    'LBL_LIST_EMAIL_ADDRESS' => 'Електронна поща',
    'LBL_LIST_FIRST_NAME' => 'Име',
    'LBL_LIST_FORM_TITLE' => 'Списък с контакти:',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Мобилен номер:',
    'LBL_MODIFIED' => 'Модифицирано от:',
    'LBL_MODULE_NAME' => 'Контакти',
    'LBL_MODULE_TITLE' => 'Контакти',
    'LBL_NAME' => 'Име:',
    'LBL_NEW_FORM_TITLE' => 'Нов контакт',
    'LBL_NOTE_SUBJECT' => 'Note Subject',
    'LBL_OFFICE_PHONE' => 'Служебен телефон:',
    'LBL_OPP_NAME' => 'Възможност:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Роля при реализиране на възможност:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща:',
    'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_PORTAL_APP' => 'Приложения:',
    'LBL_PORTAL_INFORMATION' => 'Информация',
    'LBL_PORTAL_NAME' => 'Име на портала:',
    'LBL_STREET' => 'Улица',
    'LBL_POSTAL_CODE' => 'Пощенски код:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основен адрес: град',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основен адрес: държава',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основен адрес: пощенски код',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основен адрес: област',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Адрес за кореспонденция: улица 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Адрес за кореспонденция: улица 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основен адрес: улица',
    'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
    'LBL_PRODUCTS_TITLE' => 'Продукти',
    'LBL_REPORTS_TO_ID' => 'Докладва на:',
    'LBL_REPORTS_TO' => 'Докладва на:',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Поздрав:',
    'LBL_SAVE_CONTACT' => 'Save Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Синхронизиране с Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Целева група',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Списък с контакти',
    'LNK_IMPORT_VCARD' => 'Създаване от електронна визитка',
    'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
    'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
    'LNK_NEW_CALL' => 'Планиране на обаждане',
    'LNK_NEW_CASE' => 'Въвеждане на казус',
    'LNK_NEW_CONTACT' => 'Създаване на контакт',
    'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_NEW_NOTE' => 'Въвеждане на бележки',
    'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
    'LNK_NEW_TASK' => 'Добавяне на задача',
    'LNK_SELECT_ACCOUNT' => "Избери организация",
    'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'За да запазите тази възможност е необходимо да посочите организация.n Моля, въведете нова или изберете от вече съществуващи.',
    'NTC_REMOVE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този контакт от казусa?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Копирай в основния адрес',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Копирай в алтернативния адрес',

    'LBL_CASES_SUBPANEL_TITLE' => 'Казуси',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_CAMPAIGNS' => 'Кампании',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Кампании',
    'LBL_LIST_CITY' => 'Град',
    'LBL_LIST_STATE' => 'Област',
    'LBL_HOMEPAGE_TITLE' => 'Моите контакти',
    'LBL_OPPORTUNITIES' => 'Възможности',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LNK_IMPORT_CONTACTS' => 'Импортиране на контакти',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Събития',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Договори',
    'LBL_AOS_INVOICES' => 'Фактури',
    'LBL_AOS_QUOTES' => 'Оферти',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
