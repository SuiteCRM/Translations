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
    'LBL_MODULE_NAME' => 'Целеви клиенти',
    'LBL_MODULE_ID' => 'Целеви клиенти',
    'LBL_INVITEE' => 'Докладва на',
    'LBL_MODULE_TITLE' => 'Целеви клиенти: ',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Целеви клиенти"',
    'LBL_LIST_FORM_TITLE' => 'Целева група',
    'LBL_NEW_FORM_TITLE' => 'Въвеждане на целеви клиент',
    'LBL_LIST_NAME' => 'Име',
    'LBL_LIST_LAST_NAME' => 'Фамилия',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Електронна поща',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_FIRST_NAME' => 'Име',
    'LBL_ASSIGNED_TO_NAME' => 'Потребител',
    'LBL_ASSIGNED_TO_ID' => 'Отговорник:',
    'LBL_CAMPAIGN_ID' => 'Кампания',
    'LBL_EXISTING_ACCOUNT' => 'Използвана е вече съществуваща организация',
    'LBL_CREATED_ACCOUNT' => 'Въведена е нова организация',
    'LBL_CREATED_CALL' => 'Планирано е ново обаждане',
    'LBL_CREATED_MEETING' => 'Насрочена е нова среща',
    'LBL_NAME' => 'Име:',
    'LBL_PROSPECT_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Допълнителна информация',
    'LBL_FIRST_NAME' => 'Име:',
    'LBL_OFFICE_PHONE' => 'Служебен телефон:',
    'LBL_ANY_PHONE' => 'Телефон:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_LAST_NAME' => 'Фамилия:',
    'LBL_MOBILE_PHONE' => 'Мобилен номер:',
    'LBL_HOME_PHONE' => 'Домашен телефон:',
    'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основен адрес: улица',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основен адрес: град',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основен адрес: държава',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основен адрес: област',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основен адрес: пощенски код',
    'LBL_ALT_ADDRESS_STREET' => 'Алтернативен адрес: улица',
    'LBL_ALT_ADDRESS_CITY' => 'Алтернативен адрес: град',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Алтернативен адрес: държава',
    'LBL_ALT_ADDRESS_STATE' => 'Алтернативен адрес: област',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Алтернативен адрес: пощенски код:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Отдел:',
    'LBL_BIRTHDATE' => 'Дата на раждане:',
    'LBL_EMAIL_ADDRESS' => 'Електронна поща:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща:',
    'LBL_ANY_EMAIL' => 'Електронна поща:',
    'LBL_ASSISTANT' => 'Асистент:',
    'LBL_ASSISTANT_PHONE' => 'Телефон на асистента:',
    'LBL_DO_NOT_CALL' => 'Да не бъде търсен по телефон:',
    'LBL_EMAIL_OPT_OUT' => 'Блокиран',
    'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
    'LBL_ALTERNATE_ADDRESS' => 'Алтернативен адрес:',
    'LBL_ANY_ADDRESS' => 'Адрес:',
    'LBL_CITY' => 'Град:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Пощенски код:',
    'LBL_COUNTRY' => 'Държава:',
    'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_OPP_NAME' => 'Възможност:',
    'LBL_IMPORT_VCARD' => 'Импортиране на електронна визитка',
    'LBL_IMPORT_VCARDTEXT' => 'Автоматично създаване на контакт чрез импортиране на електронна визитка от системата.',
    'LBL_DUPLICATE' => 'Възможно дублиране на целеви клиенти',
    'MSG_SHOW_DUPLICATES' => 'Създаването на този контакт може да доведе до създаване на дублиращ контакт. Можете или да съхраните записа с вече въведените данни, или да изберете Отмени.',
    'MSG_DUPLICATE' => 'Създаването на този контакт може да доведе до създаване на дублиращ контакт. Можете или да съхраните записа с вече въведените данни, или да изберете Отмени.',
    'LNK_IMPORT_VCARD' => 'Създаване от електронна визитка',
    'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
    'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
    'LNK_NEW_CASE' => 'Въвеждане на казус',
    'LNK_NEW_NOTE' => 'Добавяне на бележка или приложение',
    'LNK_NEW_CALL' => 'Планиране на обаждане',
    'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
    'LNK_NEW_MEETING' => 'Насрочване на среща',
    'LNK_NEW_TASK' => 'Добавяне на задача',
    'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
    'LNK_IMPORT_PROSPECTS' => 'Импортиране на записи с целеви клиенти',
    'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
    'NTC_REMOVE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този контакт от казусa?',
    'ERR_DELETE_RECORD' => 'Трябва да въведете номер на записа, за да изтриете този контакт.',
    'LBL_SALUTATION' => 'Поздрав',
    'LBL_CREATED_OPPORTUNITY' => 'Въведена е нова възможност',
    'LNK_SELECT_ACCOUNT' => "Избери организация",
    'LNK_NEW_PROSPECT' => 'Създаване на целеви клиент',
    'LNK_PROSPECT_LIST' => 'Целеви клиенти',
    'LNK_NEW_CAMPAIGN' => 'Създаване на кампания',
    'LNK_CAMPAIGN_LIST' => 'Кампании',
    'LNK_NEW_PROSPECT_LIST' => 'Създаване на целева група',
    'LNK_PROSPECT_LIST_LIST' => 'Целеви групи',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Избери маркираните клиенти',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Избери маркираните клиенти',
    'LBL_INVALID_EMAIL' => 'Неработеща електронна поща:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Целеви клиенти',
    'LBL_PROSPECT_LIST' => 'Целева група',
    'LBL_CONVERT_BUTTON_TITLE' => 'Превръщане в потенциален клиент',
    'LBL_CONVERT_BUTTON_LABEL' => 'Превръщане в потенциален клиент',
    'LNK_NEW_CONTACT' => 'Нов контакт',
    'LBL_CREATED_CONTACT' => "Въведен е нов контакт",
    'LBL_CAMPAIGNS' => 'Кампании',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Дневник на събития на кампанията',
    'LBL_TRACKER_KEY' => 'Код',
    'LBL_LEAD_ID' => 'Възможности',
    'LBL_CONVERTED_LEAD' => 'Превърнат в потенциален контакт',
    'LBL_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_EDIT_ACCOUNT_NAME' => 'Организация:',
    'LBL_CREATED_USER' => 'Създаден потребител',
    'LBL_MODIFIED_USER' => 'Модифициран потребител',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Събития',
);
