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
    'LBL_MODULE_NAME' => 'Opportunities',
    'LBL_MODULE_TITLE' => '商業機會:首頁',
    'LBL_SEARCH_FORM_TITLE' => '搜尋商業機會',
    'LBL_LIST_FORM_TITLE' => '商業機會列表',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY' => '商業機會:',
    'LBL_NAME' => 'Opportunity Name',
    'LBL_INVITEE' => '聯繫人',
    'LBL_CURRENCIES' => 'Currencies',
    'LBL_LIST_OPPORTUNITY_NAME' => '名稱:',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_AMOUNT' => '商業機會金額',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
    'LBL_LIST_DATE_CLOSED' => '關閉',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => '帳戶 ID',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',
    'LBL_DAYS_OPEN_FOR' => '商業機會開放給',

    'UPDATE' => '商業機會-貨幣更新',
    'LBL_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_AMOUNT' => '商業機會金額:',
    'LBL_AMOUNT_USDOLLAR' => '數量:',
    'LBL_CURRENCY' => '貨幣:',
    'LBL_DATE_CLOSED' => 'Expected Close Date:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_NEXT_STEP' => '下一步:',
    'LBL_LEAD_SOURCE' => '潛在客戶資源:',
    'LBL_SALES_STAGE' => 'Sales Stage:',
    'LBL_PROBABILITY' => '可能性(%):',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_DUPLICATE' => '可能重覆的商業機會',
    'MSG_DUPLICATE' => '您將要創建的商業機會可能是一個已經存在的商業技術的副本。下面列出了包含類似名稱的商業機會。<br>按一下儲存以繼續創建這個新的商業機會，或按一下取消以返回到該模組而不創建這個紀錄。',
    'LBL_NEW_FORM_TITLE' => 'Create Opportunity',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_OPPORTUNITY_LIST' => '商業機會',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除商業機會。',
    'LBL_TOP_OPPORTUNITIES' => '我的重要商業機會',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '您確定要從這個專案移除商業機會嗎?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史記錄',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '聯繫人',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '我的關閉的商業機會',
    'LBL_TOTAL_OPPORTUNITIES' => '商業機會總數',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '談成結束的商業機會',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_MODIFIED_NAME' => 'Modified by User Name',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGN_OPPORTUNITY' => '市場活動',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    'LNK_IMPORT_OPPORTUNITIES' => '導入商業機會',
    'LBL_EDITLAYOUT' => 'Edit Layout'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => '合約',
    'LBL_AOS_QUOTES' => '報價單',

    'LBL_SIZE_ANALYSIS' => '規模分析',
    'LBL_POSITION' => '職位',
    'LBL_OUT_OF' => '之外的',
);
