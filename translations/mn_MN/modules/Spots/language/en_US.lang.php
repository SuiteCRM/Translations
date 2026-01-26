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
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагчийн ID',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_SECURITYGROUPS' => 'Нууцлалын Групп',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Нууцлалын Групп',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Үүссэн Огноо',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED_NAME' => 'Өөрчилсөн',
    'LBL_CREATED' => 'Үүсгэсэн',
    'LBL_DESCRIPTION' => 'Тайлбар',
    'LBL_DELETED' => 'Устгасан',
    'LBL_NAME' => 'Нэр',
    'LBL_CREATED_USER' => 'Үүсгэсэн',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_EDIT_BUTTON' => 'Засах',
    'LBL_REMOVE' => 'Устгах',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Create Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Search Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүхийг харах',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'View Spots',
    'LNK_SPOT_CREATE' => 'Create Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Нэр',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Харилцагчийн төрөл',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Салбар',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Нэхэмжлэл илгэх улс',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Хариуцагч',
    'LBL_AN_LEADS_STATUS' => 'Төлөв',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Сонирхогч орж ирсэн суваг',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Компанит ажлын нэр',
    'LBL_AN_LEADS_YEAR' => 'Он',
    'LBL_AN_LEADS_QUARTER' => 'Улирал',
    'LBL_AN_LEADS_MONTH' => 'Сар',
    'LBL_AN_LEADS_WEEK' => '7 хоног',
    'LBL_AN_LEADS_DAY' => 'Өдөр',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Боломжийн Нэршил',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Хариуцагч',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'БоломжийнТөрөл',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Сонирхогч орж ирсэн суваг',
    'LBL_AN_SALES_AMOUNT' => 'Дүн',
    'LBL_AN_SALES_STAGE' => 'Борлуулалтын Үе',
    'LBL_AN_SALES_PROBABILITY' => 'Боломж (%)',
    'LBL_AN_SALES_DATE' => 'Борлуулалтын огноо',
    'LBL_AN_SALES_QUARTER' => 'Борл.Улирал',
    'LBL_AN_SALES_MONTH' => 'Борл.Сар',
    'LBL_AN_SALES_WEEK' => 'Борл.7х',
    'LBL_AN_SALES_DAY' => 'Борл.Өдөр',
    'LBL_AN_SALES_YEAR' => 'Борл.Жил',
    'LBL_AN_SALES_CAMPAIGN' => 'Компанит ажил',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_AN_SERVICE_STATE' => 'Муж',
    'LBL_AN_SERVICE_STATUS' => 'Төлөв',
    'LBL_AN_SERVICE_PRIORITY' => 'Эрэмбэ',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Үүсгэсэн',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Үүссэн 7хоног',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Үүссэн сар',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Үүссэн улирал',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Үүссэн жил',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Харилцагчийн Нэр',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Хариуцагч',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Төрөл',
    'LBL_AN_ACTIVITIES_NAME' => 'Нэр',
    'LBL_AN_ACTIVITIES_STATUS' => 'Төлөв',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Хариуцагч',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Төлөв',
    'LBL_AN_MARKETING_TYPE' => 'Төрөл',
    'LBL_AN_MARKETING_BUDGET' => 'Төсөв',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Хүлээгдэж буй зардал',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Хүлээгдэж буй борлуулалт',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Боломжийн Нэршил',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Боломжийн дүн',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Боломжийн борл-ын үе шат',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Боломжийг хариуцагч',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Харилцагчийн Нэр',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Компанит ажлын нэр',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Үйл ажиллагааны огноо',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Үйл ажиллагааны төрөл',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Хамаарлын төрөл',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Холбоотой ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Боломжийн Нэршил',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Боломжийн төрөл',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Боломжийн Сонирхоц орж ирсэн суваг',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Боломжийн борл-ын үе шат',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Харилцагчийн Нэр',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Зүйлийн нэр',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Зүйлийн төрөл',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Зүйлийн категори',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Зүйлийн тоо.ш',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Зүйлийн үндсэн үнэ',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Зүйлийн борлуулах үнэ',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item Cost Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item Discount Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Discount Amount',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Нийт дүн',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Хариуцагч',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Үүссэн Огноо',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Day Created',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Week Created',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Month Created',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quarter Created',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Year Created',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',
);
