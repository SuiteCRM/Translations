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
    'ERR_DELETE_RECORD' => 'Nomba igbasile gbodo je pato lati pa akkant re.',
    'LBL_ACCOUNT_NAME' => 'Oruko ile-ise:',
    'LBL_ACCOUNT' => 'Ile-ise:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Akitiyan',
    'LBL_ADDRESS_INFORMATION' => 'Alaye Adiresi',
    'LBL_ANNUAL_REVENUE' => 'Owo ti o n wole lododun:',
    'LBL_ANY_ADDRESS' => 'Adiresi eyikeyi:',
    'LBL_ANY_EMAIL' => 'Eyikeyi emaili:',
    'LBL_EMAIL_NON_PRIMARY' => 'Atejishe ti kii se akoko',
    'LBL_ANY_PHONE' => 'Foonu eyikeyi:',
    'LBL_ASSIGNED_TO_NAME' => 'Olumulo:',
    'LBL_RATING' => 'Iwonsi',
    'LBL_ASSIGNED_TO' => 'Ayan si:',
    'LBL_ASSIGNED_USER' => 'Ayan si:',
    'LBL_ASSIGNED_TO_ID' => 'Ayan si:',
    'LBL_BILLING_ADDRESS_CITY' => 'Ilu idiyele:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Orileede idiyele:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Idiyele nomba atejise:',
    'LBL_BILLING_ADDRESS_STATE' => 'Idiyele ipinle:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Idiyele opopona 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Idiyele opopona keta',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Idiyele opopona keji',
    'LBL_BILLING_ADDRESS_STREET' => 'Idiyele ita:',
    'LBL_BILLING_ADDRESS' => 'Adiresi idiyele:',
    'LBL_ACCOUNT_INFORMATION' => 'Alaye ile-ise',
    'LBL_CITY' => 'Ilu:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontati',
    'LBL_COUNTRY' => 'Orile-ede:',
    'LBL_DATE_ENTERED' => 'Ojo ti a da:',
    'LBL_DATE_MODIFIED' => 'Ojo ti a se Atunse:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Akanti',
    'LBL_DESCRIPTION_INFORMATION' => 'Alaye apejuwe',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_DUPLICATE' => 'Eda akanti ti o seese',
    'LBL_EMAIL' => 'Adiresi emaili:',
    'LBL_EMPLOYEES' => 'Awon Osise:',
    'LBL_FAX' => 'Faksi:',
    'LBL_INDUSTRY' => 'Ile ise:',
    'LBL_LIST_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_LIST_CITY' => 'Ilu',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adiresi emaili',
    'LBL_LIST_PHONE' => 'Foonu',
    'LBL_LIST_STATE' => 'Ipo',
    'LBL_MEMBER_OF' => 'Egbe ti:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Omo egbe idasile',
    'LBL_NAME' => 'Oruko:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Emaili awon omiran:',
    'LBL_OTHER_PHONE' => 'Foonu miiran:',
    'LBL_OWNERSHIP' => 'Oniwun:',
    'LBL_PARENT_ACCOUNT_ID' => 'Idanimo akanti awon obi',
    'LBL_PHONE_ALT' => 'Foonu miiran:',
    'LBL_PHONE_FAX' => 'Faksi ero ayelujara:',
    'LBL_PHONE_OFFICE' => 'Foonu Ofiisi:',
    'LBL_PHONE' => 'Foonu:',
    'LBL_EMAIL_ADDRESS' => 'Adiresi emaili',
    'LBL_EMAIL_ADDRESSES' => 'Imeeli adiresi (awon)',
    'LBL_POSTAL_CODE' => 'Koodu ifiweranse:',
    'LBL_SAVE_ACCOUNT' => 'Fi akkant pamo',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Fifi oko ojuomi ranse lo silu:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Fifi oko oju omi fi ranse lo si orileede:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Idiyele nomba atejise:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Fifi oko oju omi fi ranse si ipinle:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ita keji oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ita 3 oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ita 4 oko oju omi',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ita oko oju omi:',
    'LBL_SHIPPING_ADDRESS' => 'Adiresi ifi oko oju omi se nkan iranse:',

    'LBL_STATE' => 'Ipo:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Iru:',
    'LBL_WEBSITE' => 'Website:',

    'LNK_ACCOUNT_LIST' => 'Akanti',
    'LNK_NEW_ACCOUNT' => 'Seda akkant',

    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',

    'NTC_DELETE_CONFIRMATION' => 'Se o da e loju pe o fe pa igbasile yii re?',

    'LBL_EDIT_BUTTON' => 'Satunse  ',
    'LBL_REMOVE' => 'Yo kuro',

);
