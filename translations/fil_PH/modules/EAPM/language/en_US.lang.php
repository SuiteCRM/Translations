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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Ang gumagamit ng SuiteCRM',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Ang pangalan ng gumagamit ng app',
    'LBL_CREATED_USER' => 'Ito ay inilikha ng gumagamit',
    'LBL_MODIFIED_USER' => 'Ito ay binago ng gumagamit',
    'LBL_LIST_NAME' => 'Ang pangalan',
    'LBL_LIST_FORM_TITLE' => 'Ang eksternal listahan ng mga account',
    'LBL_MODULE_NAME' => 'External Akwant',
    'LBL_MODULE_TITLE' => 'Panlabas na mga Account',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga external akwant',
    'LNK_NEW_RECORD' => 'Lumikha ng External Akwant',
    'LNK_LIST' => 'Tingnan ang mga external akwant',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang external na pinagkukunan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_NEW_FORM_TITLE' => 'Bagong external akwant',
    'LBL_PASSWORD' => 'Password ng App',
    'LBL_USER_NAME' => 'Ang pangalan ng gumagamit ng app',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikasyon',
    'LBL_API_DATA' => 'Data ng API',
    'LBL_API_CONSKEY' => 'Susi ng gumagamit',
    'LBL_API_CONSSECRET' => 'Lihim ng consumer',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "Itong awotorisasyong paraan ay hindi suporta sa isang aplikasyon",
    'LBL_AUTH_ERROR' => 'Ang pagtatangka sa pag-konketa ito sa akwat ay nabigo.',
    'LBL_VALIDATED' => 'Konektado',
    'LBL_ACTIVE' => 'Aktibo',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Ikonekta',
    'LBL_NOTE' => 'Mangyaring tandaan',
    'LBL_CONNECTED' => 'Konektado',

    'LBL_ERR_NO_AUTHINFO' => 'Walang mga pagpapatunay na impormasyon para sa akwant na ito.',
    'LBL_ERR_NO_TOKEN' => 'Walang mga balidong token para sa akwant na ito.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Ikaaw ay hindi kasalukuyang konektado sa iyong {0} akwant. Pindutin ang OK upang mag-login sa iyong akwant at upang i-aktibo ang koneksyon.',

    'LBL_CLICK_TO_EDIT' => 'Pindutin upang i-edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Reauthenticate',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Ang akwant para sa aplikasyon ay umiiral na. Mayroon kaming naka reinstate ng umiiral na akwant.',
    'LBL_OMIT_URL' => '(Omit http:// or https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Pindutin ang <b>Connect</b>upang dumiretso sa isang oahina na nagbibigay ng iyong impornasyong akwant at upang pahintulutan na maka-access sa akwant sa pamamagitan ng SuiteCRM. Pagkatapos, ikaw ay didiretsong babalik sa SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Pindutin ang <b>Connect</b> upang komonekta sa akwant na ito sa SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Mangyaring paganahin ang mga browser popup window o magdagdag ng exception para sa website "{0}" sa listahan ng exception.',

    'LBL_API_OAUTHSECRET' => 'Sekreto ng API OAuth',
);
