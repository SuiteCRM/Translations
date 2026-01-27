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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    // Dashlet Categories
    'LBL_CHARTS' => 'Графики',
    'LBL_DEFAULT' => 'Визуализиране',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Необходимо е да маркирате поне 1 запис, за да продължите.',
    'LBL_ACCOUNT_INFORMATION' => 'Информация', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Организация:',
    'LBL_ACCOUNT' => 'Организация:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
    'LBL_ANNUAL_REVENUE' => 'Годишни приходи:',
    'LBL_ANY_ADDRESS' => 'Адрес:',
    'LBL_ANY_EMAIL' => 'Електронна поща:',
    'LBL_ANY_PHONE' => 'Телефон:',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_ASSIGNED_TO_ID' => 'Отговорник:',
    'LBL_BILLING_ADDRESS_CITY' => 'Данъчен адрес: град:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Данъчен адрес: държава:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Данъчен адрес: пощенски код:',
    'LBL_BILLING_ADDRESS_STATE' => 'Данъчен адрес: област:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Данъчен адрес: улица 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Данъчен адрес: улица 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Данъчен адрес: улица 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Данъчен адрес: улица:',
    'LBL_BILLING_ADDRESS' => 'Данъчен адрес:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',
    'LBL_CAMPAIGN_ID' => 'Кампания',
    'LBL_CASES_SUBPANEL_TITLE' => 'Казуси',
    'LBL_CITY' => 'Град:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_COUNTRY' => 'Държава:',
    'LBL_DATE_ENTERED' => 'Създадено на:',
    'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Организации',
    'LBL_DESCRIPTION_INFORMATION' => 'Допълнителна информация',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DUPLICATE' => 'Възможно дублиране с въведена организация',
    'LBL_EMAIL' => 'Електронна поща:',
    'LBL_EMAIL_OPT_OUT' => 'Блокиран',
    'LBL_EMAIL_ADDRESSES' => 'Адреси',
    'LBL_EMPLOYEES' => 'Служители:',
    'LBL_FAX' => 'Факс:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_HOMEPAGE_TITLE' => 'Моите организации',
    'LBL_INDUSTRY' => 'Отрасъл:',
    'LBL_INVALID_EMAIL' => 'Неработеща електронна поща:',
    'LBL_INVITEE' => 'Контакти',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_LIST_ACCOUNT_NAME' => 'Име',
    'LBL_LIST_CITY' => 'Град',
    'LBL_LIST_CONTACT_NAME' => 'Контакт',
    'LBL_LIST_EMAIL_ADDRESS' => 'Адрес на ел. поща',
    'LBL_LIST_FORM_TITLE' => 'Списък с организации:',
    'LBL_LIST_PHONE' => 'Телефон',
    'LBL_LIST_STATE' => 'Област',
    'LBL_MEMBER_OF' => 'Член на:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Дъщерни дружества',
    'LBL_MODULE_NAME' => 'Организации',
    'LBL_MODULE_TITLE' => 'Организации',
    'LBL_MODULE_ID' => 'Организации',
    'LBL_NAME' => 'Име:',
    'LBL_NEW_FORM_TITLE' => 'Нова организация',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща:',
    'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
    'LBL_OWNERSHIP' => 'Вид на организацията:',
    'LBL_PARENT_ACCOUNT_ID' => 'Компания майка',
    'LBL_PHONE_ALT' => 'Алтернативен телефонен номер:',
    'LBL_PHONE_FAX' => 'Телефон / Факс:',
    'LBL_PHONE_OFFICE' => 'Служебен телефон:',
    'LBL_PHONE' => 'Телефон:',
    'LBL_POSTAL_CODE' => 'Пощенски код:',
    'LBL_PRODUCTS_TITLE' => 'Продукти',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Копиране в модул контакти',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Копиране...',
    'LBL_RATING' => 'Рейтинг:',
    'LBL_SAVE_ACCOUNT' => 'Запазване на организация',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Организации"',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Адрес за кореспонденция: град:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Адрес за кореспонденция: държава:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Адрес за кореспонденция: пощенски код:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Адрес за кореспонденция: област:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Адрес за кореспонденция: улица 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Адрес за кореспонденция: улица 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Адрес за кореспонденция: улица 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Адрес за кореспонденция: улица:',
    'LBL_SHIPPING_ADDRESS' => 'Адрес за кореспонденция:',
    'LBL_SIC_CODE' => 'Код по НКИД:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Борсов код:',
    'LBL_TYPE' => 'Категория:',
    'LBL_WEBSITE' => 'Сайт:',
    'LBL_CAMPAIGNS' => 'Кампании',
    'LNK_ACCOUNT_LIST' => 'Списък с организации',
    'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
    'LNK_IMPORT_ACCOUNTS' => 'Импортиране на организации',
    'MSG_DUPLICATE' => 'Създаването на тази организация може да доведе до създаване на дублираща организация. Можете или да изберете организация от списъка долу, или да съхраните записа с вече въведените данни чрез натискане на бутон "Запази".',
    'MSG_SHOW_DUPLICATES' => 'Създаването на тази организация може да доведе до създаване на дублираща организация. Можете или да изберете организация от списъка долу, или да съхраните записа с вече въведените данни чрез натискане на бутон "Запази".',
    'LBL_ASSIGNED_USER_NAME' => 'Отговорник:',
    'LBL_PROSPECT_LIST' => 'Целева група',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Products and Services Purchased',

    'LBL_AOS_CONTRACTS' => 'Договори',
    'LBL_AOS_INVOICES' => 'Фактури',
    'LBL_AOS_QUOTES' => 'Оферти',
    'LBL_LIST_WEBSITE' => 'website',
);
