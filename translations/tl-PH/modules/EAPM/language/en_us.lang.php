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
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Ang gumagamit ng SuiteCRM',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Ang pangalang ginagamit sa App',
    'LBL_CREATED_USER' => 'Nilikha sa pamamagitan ng gumagamit',
    'LBL_MODIFIED_USER' => 'Ang nabago sa pamamagitan ng gumagamit',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Ang listahan ng eksternal akawnt',
    'LBL_MODULE_NAME' => 'Ang eksternal akawnt',
    'LBL_MODULE_TITLE' => 'Eksternal na Mga Akawnt',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga eksternal akawnt',
    'LNK_NEW_RECORD' => 'Lumikha ng eksternal akawnt',
    'LNK_LIST' => 'Tingnan ang mga eksternal akawnt',
    'LBL_SEARCH_FORM_TITLE' => 'Pinaghahanap ang eksternal na pinagmumulan',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Ang bagong external akawnt',
    'LBL_PASSWORD' => 'Password sa App',
    'LBL_USER_NAME' => 'Ang pangalang ginagamit sa App',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'Aplikasyon',
    'LBL_API_DATA' => 'Data ng API',
    'LBL_API_CONSKEY' => 'Mamimili ng Susi',
    'LBL_API_CONSSECRET' => 'Sekretong Mamimili',
    'LBL_API_OAUTHTOKEN' => 'Token ng OAuth',
    'LBL_AUTH_UNSUPPORTED' => "Ang paraan ng awtorisasyon na ito ay hindi suportado ng aplikasyon",
    'LBL_AUTH_ERROR' => 'Bigo ang pag-tangka sa pagkonek sa account an ito.',
    'LBL_VALIDATED' => 'Nakakonekta',
    'LBL_ACTIVE' => 'Gawing aktibo',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Konek',
    'LBL_NOTE' => 'Tandaan',
    'LBL_CONNECTED' => 'Nakakonekta',

    'LBL_ERR_NO_AUTHINFO' => 'Walang patunay na impormasyon para sa account na ito.',
    'LBL_ERR_NO_TOKEN' => 'Walang balid na mga login token para sa account na ito.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Kasalukuyang hindi ka konektado sa iyong {0} account. Pindutin ang OK para maka-login sa iyong account at para ma-reactivate ang koneksyon.',

    'LBL_CLICK_TO_EDIT' => 'I-click para maka-edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'I-authenticate muli',
    'LBL_APPLICATION_FOUND_NOTICE' => 'May account na para sa ganitong aplikasyon. Binalik na namin sa dati ang umiiral na account.',
    'LBL_OMIT_URL' => '(Tanggalin ang http:// o https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Pindutin ang <b>Konek</b> para mapunta ka sa pahina na mabibigay mo ang mga impormasyon sa iyong account at i-authorize ang pag-aksis sa account sa pamamagitan ng SuiteCRM. Pagkatapos mong ma-konek, mapupunta ka ulit sa SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Pindutin ang <b>Konek</b> para ma-konek ang account na ito sa SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Pakiusap i-enable ang browser popup windows o magdagdag ng eksepsyon para sa website "{0}" para sa listahan ng mga eksepyon para ma-konek.',

    'LBL_API_OAUTHSECRET' => 'Sikreto ng API OAuth',
);
