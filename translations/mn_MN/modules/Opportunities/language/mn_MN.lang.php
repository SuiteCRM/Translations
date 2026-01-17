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
    'LBL_MODULE_NAME' => 'Боломжууд /Opp/',
    'LBL_MODULE_TITLE' => 'Боломжууд: Үндсэн',
    'LBL_SEARCH_FORM_TITLE' => 'Opportunity Search',
    'LBL_LIST_FORM_TITLE' => 'Opportunity List',
    'LBL_OPPORTUNITY_NAME' => 'Боломжийн нэршил:',
    'LBL_OPPORTUNITY' => 'Opportunity:',
    'LBL_NAME' => 'Боломжийн Нэршил',
    'LBL_INVITEE' => 'Харилцагч',
    'LBL_CURRENCIES' => 'Вальют',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Нэр',
    'LBL_LIST_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_LIST_AMOUNT' => 'Боломжийн дүн',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Дүн',
    'LBL_LIST_DATE_CLOSED' => 'Хаах',
    'LBL_LIST_SALES_STAGE' => 'Борлуулалтын Үе',
    'LBL_ACCOUNT_ID' => 'Аккаунт ID',
    'LBL_CURRENCY_NAME' => 'Вальютын Нэр',
    'LBL_CURRENCY_SYMBOL' => 'Вальютын Тэмдэг',

    'UPDATE' => 'Opportunity - Currency Update',
    'LBL_ACCOUNT_NAME' => 'Байгууллагын Нэр:',
    'LBL_AMOUNT' => 'Opportunity Amount:',
    'LBL_AMOUNT_USDOLLAR' => 'Дүн:',
    'LBL_CURRENCY' => 'Вальют:',
    'LBL_DATE_CLOSED' => 'Хүлээгдэж хаагдах огноо:',
    'LBL_TYPE' => 'Tөрөл:',
    'LBL_CAMPAIGN' => 'Компанит ажил:',
    'LBL_NEXT_STEP' => 'Дараагийн алхам:',
    'LBL_LEAD_SOURCE' => 'Сонирхогч орж ирсэн суваг:',
    'LBL_SALES_STAGE' => 'Борлуулалтын Үе Шат:',
    'LBL_PROBABILITY' => 'Магадлал (%):',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
    'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
    'LBL_NEW_FORM_TITLE' => 'Боломж Үүсгэх',
    'LNK_NEW_OPPORTUNITY' => 'Боломж Үүсгэх',
    'LNK_OPPORTUNITY_LIST' => 'Боломж харах',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
    'LBL_TOP_OPPORTUNITIES' => 'Миний топ нээлттэй боломжууд',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this opportunity from the project?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Боломжууд /Opp/',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүх',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Сонирхогчид',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Баримтууд',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Төслүүд',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Миний хаагдсан боломж',
    'LBL_TOTAL_OPPORTUNITIES' => 'Нийт боломжууд',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Амжилттай хаагдсан боломжууд',
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагч:',
    'LBL_MODIFIED_NAME' => 'Өөрчилсөн',
    'LBL_CREATED_USER' => 'Үүсгэсэн хэрэглэгч',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн хэрэглэгч',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Компанит ажлууд',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Төслүүд',
    'LNK_IMPORT_OPPORTUNITIES' => 'Боломж импортлох',
    'LBL_EDITLAYOUT' => 'Үзэгдэц засах' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Гэрээ',
    'LBL_AOS_QUOTES' => 'Үнийн Санал',
);
