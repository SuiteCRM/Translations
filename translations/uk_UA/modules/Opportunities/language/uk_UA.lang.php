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
    'LBL_MODULE_NAME' => 'Opportunities',
    'LBL_MODULE_TITLE' => 'Угоди: Головна',
    'LBL_SEARCH_FORM_TITLE' => 'Пошук угоди',
    'LBL_LIST_FORM_TITLE' => 'Список угод',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY' => 'Угода:',
    'LBL_NAME' => 'Opportunity Name',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Currencies',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Назва',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_AMOUNT' => 'Сума по угоді:',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
    'LBL_LIST_DATE_CLOSED' => 'Close',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => 'Контрагент',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',

    'UPDATE' => 'Угода - оновлення валюти',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_AMOUNT' => 'Opportunity Amount:',
    'LBL_AMOUNT_USDOLLAR' => 'Amount:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_DATE_CLOSED' => 'Expected Close Date:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_NEXT_STEP' => 'Next Step:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_SALES_STAGE' => 'Sales Stage:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => 'Опис: ',
    'LBL_DUPLICATE' => 'Можливо, дублююча угода',
    'MSG_DUPLICATE' => 'Запис, який Ви створюєте, можливо, дублює вже наявний запис. Схожі угоди показані нижче. Натисніть кнопку "Зберегти" для продовження створення нової угоди або кнопку "Скасувати" для повернення в модуль без створення угоди.',
    'LBL_NEW_FORM_TITLE' => 'Create Opportunity',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_OPPORTUNITY_LIST' => 'Перегляд угод',
    'ERR_DELETE_RECORD' => 'Ви повинні вказати номер запису перед видаленням угоди.',
    'LBL_TOP_OPPORTUNITIES' => 'Мої основні відкриті угоди',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ви дійсно хочете видалити цю угоду з проекту',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_ASSIGNED_TO_NAME' => 'Відповідальна особа:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Відповідальна особа',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Мої закриті угоди',
    'LBL_TOTAL_OPPORTUNITIES' => 'Всі угоди',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Успішно закриті угоди',
    'LBL_ASSIGNED_TO_ID' => 'Відповідальна особа:',
    'LBL_MODIFIED_NAME' => 'Modified by User Name',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campaigns',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_OPPORTUNITIES' => 'Імпорт угод',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Угоди',
    'LBL_AOS_QUOTES' => 'Комерційні пропозиції',
);
