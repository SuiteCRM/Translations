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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Բովանդակություն',
    'LBL_HEADER' => 'Էջագլուխ',
    'LBL_FOOTER' => 'Էջատակ',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Անվանում',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_FORM_TITLE' => 'PDF ձևանմուշների ցուցակ',
    'LBL_MODULE_NAME' => 'PDF ձևանմուշներ',
    'LBL_MODULE_TITLE' => 'PDF ձևանմուշներ․ Գլխավոր',
    'LBL_HOMEPAGE_TITLE' => 'Իմ PDF ձևանմուշներ',
    'LNK_NEW_RECORD' => 'Ստեղծել PDF ձևանմուշ',
    'LNK_LIST' => 'Դիտել PDF ձևանմուշներ',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել PDF ձևանմուշներ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր PDF ձևանմուշ',
    'LBL_TYPE' => 'Տեսակ',
    'LBL_ACTIVE' => 'Ակտիվ է',
    'LBL_BUTTON_INSERT' => 'Զետեղել',
    'LBL_WARNING_OVERWRITE' => 'Ուշադրություն՝ ընթացիկ նմուշի բոլոր չպահպանված տվյալները կկորեն',
    'LBL_INSERT_FIELDS' => 'Տեղադրել դաշտերը',

    'LBL_SAMPLE' => 'Բեռնել օրինակի ձևը',
    'LBL_PAGE' => 'Էջ',
    'LBL_PREPARED_FOR' => 'Պատրաստված',
    'LBL_PREPARED_BY' => 'Պատրաստել է',
    'LBL_QUOTE_SAMPLE' => 'Quote Sample',
    'LBL_INVOICE_SAMPLE' => 'Invoice Sample',
    'LBL_ACCOUNT_SAMPLE' => 'Account Sample',
    'LBL_CONTACT_SAMPLE' => 'Contact Sample',
    'LBL_LEAD_SAMPLE' => 'Lead Sample',
    'LBL_ANY_STREET' => 'Ցանկացած փողոց',
    'LBL_ANY_TOWN' => 'Ցանկացած քաղաք',
    'LBL_ANY_WHERE' => 'Ցանկացած երկիր',

    'LBL_QUOTE_GROUP_SAMPLE' => 'Quote Group Sample',
    'LBL_INVOICE_GROUP_SAMPLE' => 'Invoice Group Sample',
    'LBL_MARGIN_LEFT' => 'Ձախ լուսանցք',
    'LBL_MARGIN_RIGHT' => 'Աջ լուսանցք',
    'LBL_MARGIN_TOP' => 'Վերին լուսանցք',
    'LBL_MARGIN_BOTTOM' => 'Ստորին լուսանցք',
    'LBL_MARGIN_HEADER' => 'Վերնագրի լուսանցքը',
    'LBL_MARGIN_FOOTER' => 'Էջատակի լուսանցք',
    'LBL_EDITVIEW_PANEL1' => 'Էջի լուսանցքի սահմանները',
    'LBL_DETAILVIEW_PANEL1' => 'Էջի լուսանցքի սահմանները',
    'LBL_PAGE_SIZE' => 'Page Size',
    'LBL_ORIENTATION' => 'Orientation',
);
