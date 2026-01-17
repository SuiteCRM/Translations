<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2022 SalesAgility Ltd.
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

$mod_strings = [

    'LBL_ASSIGNED_TO_ID' => 'पहचानकर्ता कुंजी:
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_LIST_FORM_TITLE' => 'बाहरी OAuth प्रदाता सूची',
    'LBL_MODULE_NAME' => 'बाहरी OAuth प्रदाता',
    'LBL_MODULE_TITLE' => 'बाहरी OAuth प्रदाता',
    'LBL_HOMEPAGE_TITLE' => 'मेरे बाहरी OAuth प्रदाता',
    'LNK_NEW_RECORD' => 'बाहरी OAuth प्रदाता बनाएँ',

    'LNK_LIST' => 'बाहरी OAuth प्रदाता',
    'LBL_SEARCH_FORM_TITLE' => 'बाहरी OAuth प्रदाता खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया बाहरी OAuth प्रदाता',

    'LBL_LIST_DELETE' => 'हटाएं',
    'LBL_TYPE' => 'प्रकार',
    'LBL_CONNECTOR' => 'संबंधक',
    'LBL_REDIRECT_URI' => 'अनुप्रेषित URI',
    'LBL_REDIRECT_URI_TYPE' => 'Redirect URI Type',

    'LBL_CLIENT_ID' => 'ग्राहक आईडी',
    'LBL_CLIENT_SECRET' => 'ग्राहक रहस्य',
    'LBL_SCOPE' => 'स्कोप',
    'LBL_URL_AUTHORIZE' => 'यूआरएल अधिकृत करें',
    'LBL_AUTHORIZE_URL_OPTIONS' => 'यूआरएल विकल्प अधिकृत करें',
    'LBL_URL_ACCESS_TOKEN' => 'एक्सेस टोकन यूआरएल',
    'LBL_EXTRA_PROVIDER_PARAMS' => 'अतिरिक्त प्रदाता पैरामीटर',
    'LBL_GET_TOKEN_REQUEST_GRANT' => 'टोकन अनुरोध अनुदान प्रकार प्राप्त करें',
    'LBL_GET_TOKEN_REQUEST_OPTIONS' => 'टोकन अनुरोध विकल्प प्राप्त करें',
    'LBL_REFRESH_TOKEN_REQUEST_GRANT' => 'ताज़ा करें टोकन अनुरोध अनुदान प्रकार',
    'LBL_REFRESH_TOKEN_REQUEST_OPTIONS' => 'टोकन अनुरोध विकल्प ताज़ा करें',

    'LBL_ACCESS_TOKEN_MAPPING' => 'टोकन मैपिंग तक पहुंचें',
    'LBL_EXPIRES_IN_MAPPING' => 'मैपिंग में समाप्त हो जाता है',
    'LBL_REFRESH_TOKEN_MAPPING' => 'टोकन मैपिंग ताज़ा करें',
    'LBL_TOKEN_TYPE_MAPPING' => 'टोकन प्रकार मानचित्रण',

    'LBL_EXTRA' => 'अतिरिक्त विन्यास',
    'LBL_MAPPING' => 'मानचित्रण विन्यास',
    'LBL_OTHER' => 'अन्य',


    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal OAuth Provider',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group OAuth Provider',
    'LNK_LIST_INBOUND_EMAILS' => 'इनबाउंड ईमेल खाते',
    'LNK_LIST_OUTBOUND_EMAILS' => 'आउटबाउंड ईमेल खाते',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTION' => 'बाहरी OAuth कनेक्शन',

    'LBL_OWNER' => 'मालिक',
];
