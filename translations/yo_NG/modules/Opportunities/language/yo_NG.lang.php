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
    'LBL_MODULE_NAME' => 'Awon Anfaani',
    'LBL_MODULE_TITLE' => 'Awọn anfani: Ile',
    'LBL_SEARCH_FORM_TITLE' => 'Iwadi anfani',
    'LBL_LIST_FORM_TITLE' => 'Akojo Anfaani',
    'LBL_OPPORTUNITY_NAME' => 'Oruko anfani:',
    'LBL_OPPORTUNITY' => 'Anfaani:',
    'LBL_NAME' => 'Oruko anfani',
    'LBL_INVITEE' => 'Kontati',
    'LBL_CURRENCIES' => 'Awon owo',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Oruko',
    'LBL_LIST_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_LIST_AMOUNT' => 'Iye anfani',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Iye',
    'LBL_LIST_DATE_CLOSED' => 'Pade',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_CURRENCY_NAME' => 'Oruko owo',
    'LBL_CURRENCY_SYMBOL' => 'Aami Owo',

    'UPDATE' => 'Opportunity - Currency Update',
    'LBL_ACCOUNT_NAME' => 'Oruko Akkant:',
    'LBL_AMOUNT' => 'Iye anfani:',
    'LBL_AMOUNT_USDOLLAR' => 'Iye:',
    'LBL_CURRENCY' => 'Owo:',
    'LBL_DATE_CLOSED' => 'Ọjọ ipari ti a reti:',
    'LBL_TYPE' => 'Iru:',
    'LBL_CAMPAIGN' => 'Ipolongo:',
    'LBL_NEXT_STEP' => 'Igbese itele:',
    'LBL_LEAD_SOURCE' => 'Orisun to siwaju:',
    'LBL_SALES_STAGE' => 'Ipele tita:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
    'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
    'LBL_NEW_FORM_TITLE' => 'Seda Anfani',
    'LNK_NEW_OPPORTUNITY' => 'Seda Anfani',
    'LNK_OPPORTUNITY_LIST' => 'Wo Awọn anfani',
    'ERR_DELETE_RECORD' => 'Nọmba igbasilẹ gbọdọ wa ni pàtó lati pa anfani rẹ.',
    'LBL_TOP_OPPORTUNITIES' => 'Awon anfaani mi to sile to ga ju',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Ṣe o da ọ loju pe o fẹ yọ anfani yii kuro lati inu iṣẹ naa?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Awon Anfaani',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Akitiyan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Itan',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Yorisi',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontati',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Awon iwe ase',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Awon Ise agbese',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Onilo ti ayan',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Awon anfaani mi to ti',
    'LBL_TOTAL_OPPORTUNITIES' => 'Awon anfaani lapaapo',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Closed Won Opportunities',
    'LBL_ASSIGNED_TO_ID' => 'Onilo ti ayan:',
    'LBL_MODIFIED_NAME' => 'Atunse nipa Oruko',
    'LBL_CREATED_USER' => 'Seda awon Onilo',
    'LBL_MODIFIED_USER' => 'Atunse nipa se onilo',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Ipolongo',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Awon Ise agbese',
    'LNK_IMPORT_OPPORTUNITIES' => 'Gbe Awọn anfani wọle',
    'LBL_EDITLAYOUT' => 'Ṣatunkọ Aṣayan' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Awon adehun',
    'LBL_AOS_QUOTES' => 'Isiro',
);
