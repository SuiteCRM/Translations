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
    'LBL_SEARCH_FORM_TITLE' => 'Գործարքի որոնում',
    'LBL_LIST_FORM_TITLE' => 'Գործարքների ցուցակ',
    'LBL_OPPORTUNITY_NAME' => 'Գործարքի անվանումը․',
    'LBL_OPPORTUNITY' => 'Գործարք.',
    'LBL_NAME' => 'Գործարքի անվանում',
    'LBL_INVITEE' => 'Կոնտակտներ',
    'LBL_CURRENCIES' => 'Արտարժույթ',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Անվանում',
    'LBL_LIST_ACCOUNT_NAME' => 'Հաշվի անվանումը',
    'LBL_LIST_AMOUNT' => 'Գործարքի գումարը',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Գումար',
    'LBL_LIST_DATE_CLOSED' => 'Փակել',
    'LBL_LIST_SALES_STAGE' => 'Վաճառքների փուլը',
    'LBL_ACCOUNT_ID' => 'Հաշիվ ID',
    'LBL_CURRENCY_NAME' => 'Տարադրամի անունը',
    'LBL_CURRENCY_SYMBOL' => 'Արժույթի նշանը',

    'UPDATE' => 'Գործարքի հնարավորություններ - արժույթի թարմացում',
    'LBL_ACCOUNT_NAME' => 'Հաշվի անունը․',
    'LBL_AMOUNT' => 'Գործարքի գումարը․',
    'LBL_AMOUNT_USDOLLAR' => 'Գումարը․',
    'LBL_CURRENCY' => 'Արտարժույթ․',
    'LBL_DATE_CLOSED' => 'Ավարտի ամսաթիվը․',
    'LBL_TYPE' => 'Տիպ.',
    'LBL_CAMPAIGN' => 'Մարքեթինգային արշավ․',
    'LBL_NEXT_STEP' => 'Հաջորդ քայլը․',
    'LBL_LEAD_SOURCE' => 'Առաջատար աղբյուրներ․',
    'LBL_SALES_STAGE' => 'Վաճառքների փուլը․',
    'LBL_PROBABILITY' => 'Հավանականությունը (%)․',
    'LBL_DESCRIPTION' => 'Նկարագրություն.',
    'LBL_DUPLICATE' => 'Հնարավոր է լինեն կրկնվող հնարավորություններ',
    'MSG_DUPLICATE' => 'Գործարքի հնարավորության գրառումը, որը դուք ստեղծել եք արդեն գոյություն ունեցող գրառման կրկնօրինակ է։ Հնարավորության գրառումները պարունակող նմանատիպ անունները թվարկված են ներքևում։<br>Սեղմեք "Պահպանել" նոր հնարավորություն ստեղծելու համար կամ սեղմեք "Չեղարկել" առանց հնարավորություն ստեղծելու մոդուլին վերադառնալու համար:',
    'LBL_NEW_FORM_TITLE' => 'Ստեղծել գործարք',
    'LNK_NEW_OPPORTUNITY' => 'Ստեղծել գործարք',
    'LNK_OPPORTUNITY_LIST' => 'Դիտել գործարքները',
    'ERR_DELETE_RECORD' => 'Գործարքը հեռացնելուց առաջ պետք է նշված լինի գրառման համարը։',
    'LBL_TOP_OPPORTUNITIES' => 'Իմ ամենագլխավոր բաց գործարքի հնարավորությունները',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Համոզվա՞ծ եք, որ ցանկանում եք հեռացնել այս գործարքը նախագծից։',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Գործարքներ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Պատմություն',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Կոնտակտներ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Փաստաթղթեր',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Նախագծեր',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Պատասխանատու',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Իմ փակված գործարքի հնարավորությունները',
    'LBL_TOTAL_OPPORTUNITIES' => 'Ամբողջ գործարգները',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Հաջողությամբ ավարտված գործարքների հնարավորությունները',
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու.',
    'LBL_MODIFIED_NAME' => 'Փոփոխված ըստ օգտագործողի անվան',
    'LBL_CREATED_USER' => 'Ստեղծել օգտագործող',
    'LBL_MODIFIED_USER' => 'Փոփոխված օգտվող',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Կամպանիաներ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Նախագծեր',
    'LNK_IMPORT_OPPORTUNITIES' => 'Ներմուծել գործարքի հնարավորությունները',
    'LBL_EDITLAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Պայմանագրեր',
    'LBL_AOS_QUOTES' => 'Առաջարկներ',
);
