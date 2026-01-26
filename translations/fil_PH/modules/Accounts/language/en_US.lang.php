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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Mga dokumento',
    // Dashlet Categories
    'LBL_CHARTS' => 'Tsart',
    'LBL_DEFAULT' => 'Mga Pananaw',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Kailangan mong tukuyin ang isang talaan numero upang tanggalin ang akawnt,.',
    'LBL_ACCOUNT_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Pangalan ng akwant:',
    'LBL_ACCOUNT' => 'Ang akawnt:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_ANNUAL_REVENUE' => 'Taong Kita:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Ini-assign sa:',
    'LBL_ASSIGNED_TO_ID' => 'Itinalaga sa gumagamit:',
    'LBL_BILLING_ADDRESS_CITY' => 'Lungsod ng Pagsingil:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Bansa ng Pagsingil:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Pagsingil sa Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado ng Pagsingil:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Address ng Pagsingil:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ang mga bug',
    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ang mga kaso',
    'LBL_CITY' => 'Lungsod:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha:',
    'LBL_DATE_MODIFIED' => 'Petsang binago:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga account',
    'LBL_DESCRIPTION_INFORMATION' => 'Paglalarawan ng Impormasyon',
    'LBL_DESCRIPTION' => 'Ang deskripsyon:',
    'LBL_DUPLICATE' => 'Posibleng mga Duplicate Account',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Emai Opt Out:',
    'LBL_EMAIL_ADDRESSES' => 'Ang mga email address',
    'LBL_EMPLOYEES' => 'Mga Empleyado:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Kasaysayan',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga akawnt',
    'LBL_INDUSTRY' => 'Industriya:',
    'LBL_INVALID_EMAIL' => 'Hindi balindo ang email:',
    'LBL_INVITEE' => 'Mga kontak',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Mga naggagabay',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang pangalan',
    'LBL_LIST_CITY' => 'Syudad',
    'LBL_LIST_CONTACT_NAME' => 'Ang kontak na pangalan',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail address',
    'LBL_LIST_FORM_TITLE' => 'Ang mga listahan ng akawnt',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Myembro sa:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Myembro ng mga organisasyon',
    'LBL_MODULE_NAME' => 'Mga account',
    'LBL_MODULE_TITLE' => 'Ang mga home ng akawnt',
    'LBL_MODULE_ID' => 'Mga account',
    'LBL_NAME' => 'Pangalan:',
    'LBL_NEW_FORM_TITLE' => 'Bagong akwant',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ang mga oportunidad',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iba pang mga Email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_OWNERSHIP' => 'Pagmamay-ari:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID ng Magulang na Account',
    'LBL_PHONE_ALT' => 'Kahaliling Telepono:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Telepono ng opisina:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Ang mga Produkto',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Mga proyekto',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopyahin sa mga kontak',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopya...',
    'LBL_RATING' => 'Ang marka:',
    'LBL_SAVE_ACCOUNT' => 'I-save ang Account',
    'LBL_SEARCH_FORM_TITLE' => 'Ang paghahanap ng akawnt',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Lungsod na papadalhan:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Bansa ng papadalhan:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pagpapadala ng Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado ng Pagpapadala:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_SIC_CODE' => 'Ang SIC kowd:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_TICKER_SYMBOL' => 'Simbolo ng Ticker:',
    'LBL_TYPE' => 'Uri:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Ang mga Kampanya',
    'LNK_ACCOUNT_LIST' => 'Tignan ang mga akawnt',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'LNK_IMPORT_ACCOUNTS' => 'I-import ang mga akawnt',
    'MSG_DUPLICATE' => 'Ang talaan ng account na iyong gagawin ay maaaring maging isang duplicate ng rekord ng account na umiiral na. Ang mga talaan ng account na naglalaman ng mga katulad na pangalan ay nakalista sa ibaba. <br>I-click ang Lumikha ng Account upang magpatuloy sa paglikha ng bagong account na ito, o pumili ng isang umiiral na account na nakalista sa ibaba.',
    'MSG_SHOW_DUPLICATES' => 'Ang talaan ng account na iyong gagawin ay maaaring maging isang duplicate ng rekord ng account na umiiral na. Ang mga talaan ng account na naglalaman ng mga katulad na pangalan ay nakalista sa ibaba. <br> I-click ang I-save upang ipagpatuloy ang paglikha ng bagong account na ito, o i-click ang Kanselahin upang bumalik sa module nang hindi lumilikha ng account.',
    'LBL_ASSIGNED_USER_NAME' => 'Ini-assign sa:',
    'LBL_PROSPECT_LIST' => 'Listahan ng prospect',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Mga account',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Mga proyekto',
    //For export labels
    'LBL_PARENT_ID' => 'ID ng magulang',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Ang mga produkto at mga serbisyo na binili',

    'LBL_AOS_CONTRACTS' => 'Mga kontrata',
    'LBL_AOS_INVOICES' => 'Ang mga invoice',
    'LBL_AOS_QUOTES' => 'Siping-banggit',
    'LBL_LIST_WEBSITE' => 'website',
);
