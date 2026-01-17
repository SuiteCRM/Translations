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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM nga tiggamit',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'App sa Pangalan sa Tiggamit',
    'LBL_CREATED_USER' => 'Gibuhat sa Tiggamit',
    'LBL_MODIFIED_USER' => 'Giusab Sa Tiggamit',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Eksternal na Lista sa Account',
    'LBL_MODULE_NAME' => 'Eksternal na Account',
    'LBL_MODULE_TITLE' => 'Eksternal na mga Account',
    'LBL_HOMEPAGE_TITLE' => 'Akong eksternal na mga account',
    'LNK_NEW_RECORD' => 'Paghimo og eksternal na account',
    'LNK_LIST' => 'Tan-awon ang eksternal na mga Account',
    'LBL_SEARCH_FORM_TITLE' => 'Pangitaa ang eskternal na tinubdan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-o nga eksternal na account',
    'LBL_PASSWORD' => 'App Pasword',
    'LBL_USER_NAME' => 'App sa Pangalan sa Tiggamit',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikasyon',
    'LBL_API_DATA' => 'API na datos',
    'LBL_API_CONSKEY' => 'Yawi sa kunsomer',
    'LBL_API_CONSSECRET' => 'Sekreto sa kunsomer',
    'LBL_API_OAUTHTOKEN' => 'OAuth nga Kinubtanan',
    'LBL_AUTH_UNSUPPORTED' => "Ang kini nga paagi sa pag-awtorisar kay wala gisuportahan sa aplikasyon",
    'LBL_AUTH_ERROR' => 'Ang pagsulay sa pagkonekta sa kini nga account kay napakyas.',
    'LBL_VALIDATED' => 'Nakonekta',
    'LBL_ACTIVE' => 'Aktib',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Konekta',
    'LBL_NOTE' => 'Palihug pagnota',
    'LBL_CONNECTED' => 'Nakonekta',

    'LBL_ERR_NO_AUTHINFO' => 'Walay impormasyon sa pagkatinuod sa kini nga acount.',
    'LBL_ERR_NO_TOKEN' => 'Walay mga balido nga login na mga kinubtanan para sa kini nga account.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Ikaw kay wala karon naka konekta sa imong {0} nga account. Pinduta ang OK para ma login sa imohang account og para pag-aktibo og balik sa koneksyon.',

    'LBL_CLICK_TO_EDIT' => 'Pinduta para ma-edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'I-reauthenticate',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Ang account para sa kini nga aplikasyon kay anaa na. Amo ng gibalik ang kini nga account.',
    'LBL_OMIT_URL' => '(Omit http:// o https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'I-klik ang <b>Konekta</b> para maadto sa pahina nga mohatag sa imong account og impormasyon og pag-awtorisar sa pagsulod sa account sa SuiteCRM. Paghuman og konekta, ikaw madirekta balik sa SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'I-klik ang <b>Konekta</b> para makonekta ang kini nga account adto sa SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Palihug og pahimo sa popup na mga bintana sa browser o pagpuno og eksepsiyon para sa website na "{0}" ngadto sa lista sa mga eksepsiyon para makakonekta.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Sekreto',
);
