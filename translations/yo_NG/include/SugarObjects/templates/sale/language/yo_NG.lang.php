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
    'LBL_MODULE_NAME' => 'Titaa',
    'LBL_MODULE_TITLE' => 'Ile',
    'LBL_SEARCH_FORM_TITLE' => 'Sale Search',
    'LBL_LIST_FORM_TITLE' => 'Sale List',
    'LBL_NAME' => 'Sale Name',
    'LBL_LIST_SALE_NAME' => 'Oruko',
    'LBL_LIST_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_LIST_AMOUNT' => 'Iye',
    'LBL_LIST_DATE_CLOSED' => 'Pade',
    'LBL_LIST_SALE_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => 'Account ID',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Oruko Akkant:',
    'LBL_AMOUNT' => 'Iye:',
    'LBL_AMOUNT_USDOLLAR' => 'Iye USD:',
    'LBL_CURRENCY' => 'Owo:',
    'LBL_DATE_CLOSED' => 'Ọjọ ipari ti a reti:',
    'LBL_TYPE' => 'Iru:',
    'LBL_CAMPAIGN' => 'Ipolongo:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Yorisi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Awon Ise agbese',
    'LBL_NEXT_STEP' => 'Igbese itele:',
    'LBL_LEAD_SOURCE' => 'Orisun to siwaju:',
    'LBL_SALES_STAGE' => 'Ipele tita:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_DUPLICATE' => 'Possible Duplicate Sale',
    'MSG_DUPLICATE' => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
    'LBL_NEW_FORM_TITLE' => 'Create Sale',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the sale.',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Titaa',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Akitiyan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Itan',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontati',
    'LBL_ASSIGNED_TO_NAME' => 'Olumulo:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Onilo ti ayan',
    'LBL_ASSIGNED_TO_ID' => 'Assigned to ID',
    'LBL_MODIFIED_NAME' => 'Atunse nipa Oruko',
    'LBL_SALE_INFORMATION' => 'Sale Information',
    'LBL_CURRENCY_NAME' => 'Oruko owo',
    'LBL_CURRENCY_SYMBOL' => 'Aami Owo',
    'LBL_EDIT_BUTTON' => 'Satunko',
    'LBL_REMOVE' => 'Yo kuro',

);
