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
    'LBL_MODULE_NAME' => 'Գործարքներ',
    'LBL_MODULE_TITLE' => 'Գործարքներ․ Գլխավոր',
    'LBL_SEARCH_FORM_TITLE' => 'Վաճառքի որոնում',
    'LBL_LIST_FORM_TITLE' => 'Վաճառքների ցուցակ',
    'LBL_NAME' => 'Գործարքի անվանումը',
    'LBL_LIST_SALE_NAME' => 'Անվանում',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_AMOUNT' => 'Գումար',
    'LBL_LIST_DATE_CLOSED' => 'Փակել',
    'LBL_LIST_SALE_STAGE' => 'Վաճառքների փուլը',
    'LBL_ACCOUNT_ID' => 'Հաշիվ ID',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'Հաշվի անունը․',
    'LBL_AMOUNT' => 'Գումարը․',
    'LBL_AMOUNT_USDOLLAR' => 'Գումարը ԱՄՆ դոլարով․',
    'LBL_CURRENCY' => 'Արտարժույթ․',
    'LBL_DATE_CLOSED' => 'Ավարտի ամսաթիվը․',
    'LBL_TYPE' => 'Տիպ.',
    'LBL_CAMPAIGN' => 'Մարքեթինգային արշավ․',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_NEXT_STEP' => 'Հաջորդ քայլը․',
    'LBL_LEAD_SOURCE' => 'Առաջատար աղբյուրներ․',
    'LBL_SALES_STAGE' => 'Վաճառքների փուլը․',
    'LBL_PROBABILITY' => 'Հավանականությունը (%)․',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DUPLICATE' => 'Հնարավոր է վաճառքի կրկնօրինակ',
    'MSG_DUPLICATE' => 'Վաճառքի գրառումը, որը դուք ստեղծել եք արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Վաճառքի գրառումները պարունակող նմանատիպ անունները թվարկված են ներքևում։<br>Սեղմեք "Պահպանել" նոր գրագում ստեղծելու համար կամ սեղմեք "Չեղարկել" մոդուլին վերադառնալու համար, առանց վաճառքը ստեղծելու:',
    'LBL_NEW_FORM_TITLE' => 'Ստեղծել գործարք',
    'ERR_DELETE_RECORD' => 'Վաճառքը հեռացնելուց առաջ պետք է նշել գրառման համարը:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Գործարքներ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_ASSIGNED_TO_NAME' => 'Օգտագործող.',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_ASSIGNED_TO_ID' => 'Կատարող ID',
    'LBL_MODIFIED_NAME' => 'Փոփոխված ըստ օգտագործողի անվան',
    'LBL_SALE_INFORMATION' => 'Վաճառքի տեղեկատվություն',
    'LBL_CURRENCY_NAME' => 'Տարադրամի անունը',
    'LBL_CURRENCY_SYMBOL' => 'Արժույթի նշանը',
    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',

);
