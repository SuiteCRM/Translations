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
    'ERR_DELETE_RECORD' => 'Ang numero nga rekord kay gikinahanglan nga hinganlan sa pagtangtang sa account.',
    'LBL_ACCOUNT_NAME' => 'Pangan sa kompanya:',
    'LBL_ACCOUNT' => 'Kompanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_ADDRESS_INFORMATION' => 'Impormasyon sa nahimutangan',
    'LBL_ANNUAL_REVENUE' => 'Tinuig nga Kita:',
    'LBL_ANY_ADDRESS' => 'Bisan-unsa nga Address:',
    'LBL_ANY_EMAIL' => 'Bisan-unsa nga Email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Mga E-mail nga dili pang-una',
    'LBL_ANY_PHONE' => 'Bisan-unsa nga Telepono:',
    'LBL_ASSIGNED_TO_NAME' => 'Tiggamitan:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_TO' => 'Gi-assign sa:',
    'LBL_ASSIGNED_USER' => 'Gi-assign sa:',
    'LBL_ASSIGNED_TO_ID' => 'Gi-assign sa:',
    'LBL_BILLING_ADDRESS_CITY' => 'Syudad sa Pagbill:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Nasud sa Pagbill:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Postal Code sa Pagbill:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado sa Pagbill:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Dalan sa Pagbill 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Dalan sa Pagbill 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Dalan sa Pagbill 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Dalan sa Pagbill:',
    'LBL_BILLING_ADDRESS' => 'Address sa Pagbill:',
    'LBL_ACCOUNT_INFORMATION' => 'Mga Impormasyon sa kompanya',
    'LBL_CITY' => 'Siyudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_COUNTRY' => 'Nasud:',
    'LBL_DATE_ENTERED' => 'Adlaw nga Gihimo:',
    'LBL_DATE_MODIFIED' => 'Adlaw nga Gi-usab:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_DESCRIPTION_INFORMATION' => 'Impormasyon sa deskripsyon',
    'LBL_DESCRIPTION' => 'Deskripsyon:',
    'LBL_DUPLICATE' => 'Posible nga Kopya nga Account',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMPLOYEES' => 'Mga Empleyado:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industriya:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_CITY' => 'Siyudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Miyembro sa:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Miyembro sa mga Organisasyon',
    'LBL_NAME' => 'Pangalan:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Uban pang Email:',
    'LBL_OTHER_PHONE' => 'Uban pang Telepono:',
    'LBL_OWNERSHIP' => 'Pagpanag-iya:',
    'LBL_PARENT_ACCOUNT_ID' => 'Gigikanan nga Account ID',
    'LBL_PHONE_ALT' => 'Alternatibo nga Telepono:',
    'LBL_PHONE_FAX' => 'Fax sa Telepono:',
    'LBL_PHONE_OFFICE' => 'Telepono sa Opisina:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_EMAIL_ADDRESS' => 'Email Address',
    'LBL_EMAIL_ADDRESSES' => '(mga) Email Address',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'I-save ang Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Siyudad nga Padal-an:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Padal-an nga Nasud:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Postal Code sa Padal-an:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado nga Padal-an:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Dalan sa Padal-an 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Dalan sa Padal-an 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Dalan sa Padal-an 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Dalan sa Padal-an:',
    'LBL_SHIPPING_ADDRESS' => 'Address nga Padal-an:',

    'LBL_STATE' => 'Estado:',
    'LBL_TICKER_SYMBOL' => 'Simbolo sa Ticker:',
    'LBL_TYPE' => 'Matang:',
    'LBL_WEBSITE' => 'Website:',

    'LNK_ACCOUNT_LIST' => 'Mga Account',
    'LNK_NEW_ACCOUNT' => 'Maghimo ug Account',

    'MSG_DUPLICATE' => 'Ang rekord sa akawnt nga padulong nimong himuon kay basing pariho sa usa ka rekord sa akawnt nga naa na. Mga rekord sa akawnt nga adunay mga pariha nga mga ngalan kay nakalista sa ubos.<br>pislita ang Maghimo og akawnt para mopadayun sa paghimo sa kaning bag-ong akawnt, o pili og usa ka naa na daan nga akawnt nga nakalista sa ubos.',
    'MSG_SHOW_DUPLICATES' => 'Ang rekord sa akawnt nga padulong nimong himuon kay basin pariho sa usa ka rekord sa akawnt nga naa na. mga rekord sa akawnt nga adunay mga pariha og ngalan kay nakalista sa ubos.<br>pislita ang i-save para mopadayun sa paghimo og bag-ong akawnt. o Pislita ang kansel para mubalik sa modyul nga wala gihimo ang akawnt.',

    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',

    'LBL_EDIT_BUTTON' => 'I-edit  ',
    'LBL_REMOVE' => 'Tangtangon',

);
