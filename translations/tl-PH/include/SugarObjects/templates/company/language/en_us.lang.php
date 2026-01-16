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
    'ERR_DELETE_RECORD' => 'Ang talaan ng numero ay dapat na tukuyin upang mabura ang akawnt.',
    'LBL_ACCOUNT_NAME' => 'Ang pangalan ng kumpanya:',
    'LBL_ACCOUNT' => 'Ang Kompanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_ADDRESS_INFORMATION' => 'Ang Impormasyon ng address',
    'LBL_ANNUAL_REVENUE' => 'Ang Taunang Kita:',
    'LBL_ANY_ADDRESS' => 'Ang Anumang address:',
    'LBL_ANY_EMAIL' => 'Ang Anumang email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Ang hindi pangunahing mga email',
    'LBL_ANY_PHONE' => 'Ang Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Ang gumagamit:',
    'LBL_RATING' => 'Ang Marka',
    'LBL_ASSIGNED_TO' => 'Ang Itinalaga kay:',
    'LBL_ASSIGNED_USER' => 'Ang Itinalaga kay:',
    'LBL_ASSIGNED_TO_ID' => 'Ang Itinalaga kay:',
    'LBL_BILLING_ADDRESS_CITY' => 'Ang Pagsingil sa Lungsod:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Ang Pagsingil sa Bansa:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Ang Pagsingil Postal na Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Ang Pagsingil sa Estado:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ang Pagsingil sa Kalye 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ang Pagsingil sa Kalye 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ang Pagsingil sa Kalye 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Ang Pagsingil sa Kalye:',
    'LBL_BILLING_ADDRESS' => 'Ang Pagsingil sa Address:',
    'LBL_ACCOUNT_INFORMATION' => 'Ang impormasyon ng kumpanya',
    'LBL_CITY' => 'Ang Syudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ang mga koneksyon',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_DATE_ENTERED' => 'Ang Petsa ng Pagkagawa:',
    'LBL_DATE_MODIFIED' => 'Huling binago:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga Akawnt',
    'LBL_DESCRIPTION_INFORMATION' => 'Ang Paglarawan sa Impormasyon',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan:',
    'LBL_DUPLICATE' => 'Ang Posibilidad na Nadobleng Account',
    'LBL_EMAIL' => 'Ang Email Address:',
    'LBL_EMPLOYEES' => 'Ang Mga empleyado:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industriya:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_CITY' => 'Ang Syudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Ang email na padalahan',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_STATE' => 'Ang Estado',
    'LBL_MEMBER_OF' => 'Ang Myembro ng:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Ang Myembrong ng mga organisasyon',
    'LBL_NAME' => 'Ang Pangalan:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ibang email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_OWNERSHIP' => 'Pag-mamayari:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ang Akawnt ID ng parent',
    'LBL_PHONE_ALT' => 'Alternatibong Telepono:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Ang Telepono ng opisina:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_EMAIL_ADDRESS' => 'Ang email na padalahan',
    'LBL_EMAIL_ADDRESSES' => 'Ang mga email address',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_SAVE_ACCOUNT' => 'I-save ang akawnt',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ang Pagpapadala ng Lungsod:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Ang Pagpapadala ng Bansa:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Ang Pagpapadala ng Postal kowd:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Ang Pagpapadala ng Estado:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Ang Pagpapadala ng Kalye 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Ang Pagpapadala ng Kalye 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Ang Pagpapadala ng Kalye 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Ang kalye na pagpapadalahan:',
    'LBL_SHIPPING_ADDRESS' => 'Ang Address ng pagpapadalahan:',

    'LBL_STATE' => 'Estado:',
    'LBL_TICKER_SYMBOL' => 'Ang Simbolo ng Ticker:',
    'LBL_TYPE' => 'Uri:',
    'LBL_WEBSITE' => 'Website:',

    'LNK_ACCOUNT_LIST' => 'Ang mga Akawnt',
    'LNK_NEW_ACCOUNT' => 'Lumikha ng Akawnt',

    'MSG_DUPLICATE' => 'Ang account record na iyong lilikhainn ay maaring kopya na lamang ng isang account record na kasalukuyang umiiral. Ang mga Account record ay naglalaman ng kaparehang mga pangalan na nakatala sa ilalim.<br>Pindutin ang Gumawa ng Account para magpatuloy sa paggawa ng bagong account, o pumili ng isang umiiral na account na nakatala sa ilalim.',
    'MSG_SHOW_DUPLICATES' => 'Ang talaang akawnt na iyong lilikhainn ay maaring kopya na lamang ng isang talaang akawnt na kasalukuyang umiiral. Ang mga talaang akawnt ay naglalaman ng kaparehang mga pangalan na nakatala sa ilalim.<br>Pindutin ang I-save para magpatuloy sa paglikha nitong bagong account, o i-click ang Cancel para bumalik sa module ng hindi gumagawa ng akawnt.',

    'NTC_DELETE_CONFIRMATION' => 'Sigurado kabang gusto mong burahin itong talaan?',

    'LBL_EDIT_BUTTON' => 'I-edit  ',
    'LBL_REMOVE' => 'Alisin',

);
