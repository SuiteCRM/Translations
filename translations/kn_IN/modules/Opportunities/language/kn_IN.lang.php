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
    'LBL_MODULE_NAME' => 'ಅವಕಾಶಗಳು',
    'LBL_MODULE_TITLE' => 'Opportunities: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Opportunity Search',
    'LBL_LIST_FORM_TITLE' => 'Opportunity List',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY' => 'Opportunity:',
    'LBL_NAME' => 'Opportunity Name',
    'LBL_INVITEE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_CURRENCIES' => 'ಕರೆನ್ಸಿಗಳು',
    'LBL_LIST_OPPORTUNITY_NAME' => 'ಹೆಸರು',
    'LBL_LIST_ACCOUNT_NAME' => 'ಖಾತೆ ಹೆಸರು',
    'LBL_LIST_AMOUNT' => 'Opportunity Amount',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'ಮೊತ್ತ',
    'LBL_LIST_DATE_CLOSED' => 'ಮುಚ್ಚಿ',
    'LBL_LIST_SALES_STAGE' => 'ಮಾರಾಟದ ಹಂತ',
    'LBL_ACCOUNT_ID' => 'ಖಾತೆಯ ID',
    'LBL_CURRENCY_NAME' => 'ಕರೆನ್ಸಿ ಹೆಸರು',
    'LBL_CURRENCY_SYMBOL' => 'ಕರೆನ್ಸಿ ಚಿಹ್ನೆ',

    'UPDATE' => 'Opportunity - Currency Update',
    'LBL_ACCOUNT_NAME' => 'ಖಾತೆಯ ಹೆಸರು:',
    'LBL_AMOUNT' => 'Opportunity Amount:',
    'LBL_AMOUNT_USDOLLAR' => 'ಮೊತ್ತ:',
    'LBL_CURRENCY' => 'ಕರೆನ್ಸಿ:',
    'LBL_DATE_CLOSED' => 'ನಿರೀಕ್ಷಿತ ಮುಕ್ತಾಯ ದಿನಾಂಕ:',
    'LBL_TYPE' => 'ಮಾದರಿ:',
    'LBL_CAMPAIGN' => 'ಪ್ರಚಾರ:',
    'LBL_NEXT_STEP' => 'ಮುಂದಿನ ಹೆಜ್ಜೆ:',
    'LBL_LEAD_SOURCE' => 'ಲೀಡ್ ಮೂಲ:',
    'LBL_SALES_STAGE' => 'ಮಾರಾಟದ ಹಂತ:',
    'LBL_PROBABILITY' => 'ಸಂಭವನೀಯತೆ (%):',
    'LBL_DESCRIPTION' => 'ವಿವರಣೆ:',
    'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
    'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
    'LBL_NEW_FORM_TITLE' => 'Create Opportunity',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_OPPORTUNITY_LIST' => 'View Opportunities',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
    'LBL_TOP_OPPORTUNITIES' => 'My Top Open Opportunities',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this opportunity from the project?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ಅವಕಾಶಗಳು',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ಚಟುವಟಿಕೆ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ಇತಿಹಾಸ',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ಲೀಡ್ಸ್',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ಸಂಪರ್ಕಗಳು',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ದಾಸ್ತವೇಜುಗಳು',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LBL_ASSIGNED_TO_NAME' => 'ಇವರಿಗೆ ನಿಯೋಜಿಸಲಾಗಿದೆ:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ನಿಯೋಜಿತ ಬಳಕೆದಾರ',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'My Closed Opportunities',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total Opportunities',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Closed Won Opportunities',
    'LBL_ASSIGNED_TO_ID' => 'ನಿಯೋಜಿತ ಬಳಕೆದಾರ:',
    'LBL_MODIFIED_NAME' => 'ಮಾರ್ಪಡಿಸಿದ ಬಳಕೆದಾರ ಹೆಸರು',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'ಪ್ರಚಾರಗಳು',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ಯೋಜನೆಗಳು',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import Opportunities',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'ಒಪ್ಪಂದಗಳು',
    'LBL_AOS_QUOTES' => 'ಬೆಲೆ ಸೂಚಕ',
);
