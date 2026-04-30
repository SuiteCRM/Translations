<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2 प्राधिकरण कोड',
    'LBL_MODULE_TITLE' => 'OAuth2 प्राधिकरण कोड',
    'LBL_MODULE_ID'=> 'OAuth2 प्राधिकरण कोड',
    'LBL_CLIENT' => 'ग्राहक',
    'LBL_SCOPES' => 'कार्यक्षेत्र',
    'LBL_AUTO_AUTHORIZE' => 'स्वचालित रूप से अनुमोदित करें',
    'LBL_USER' => 'उपयोगकर्ता को अधिकृत करना',
    'LBL_OAUTH_AUTHORIZE_AND_SAVE' => 'अधिकृत करें',
    'LBL_OAUTH_AUTHORIZE_ONCE' => 'एक बार अधिकृत करें',
    'LBL_OAUTH_ABORT' => 'अस्वीकृत',
    'LBL_OAUTH_CLIENT' => 'ग्राहक:',
    'LBL_OAUTH_WHO_IS_REQUESTING' => 'अनुरोध कौन कर रहा है (ग्राहक):',
    'LBL_AUTH_CODE_EXPIRES' => 'प्राधिकरण कोड की समय सीमा समाप्त हो रही है',
    'LBL_OAUTH_REDIRECT' => 'पुनर्निर्देशित यूआरएल',
    'LBL_CURRENT_USER' => 'उपयोगकर्ता',
    'LBL_OAUTH_REQUESTED_PERMISSIONS' => 'अनुरोधित अनुमतियाँ',
    'LBL_OAUTH_ACCESS_TO_USER_INFO' => 'आप CRM पर दिखाई देने वाली सभी जानकारी तक पहुंच सकते हैं',
    'LBL_OAUTH_INFO_1' => 'यह एप्लिकेशन आपके SuiteCRM खाते तक पहुंच का अनुरोध कर रहा है।',
    'LBL_OAUTH_INFO_2' => 'यदि आप ग्राहक को नहीं जानते या उस पर भरोसा नहीं करते हैं, तो आपको उसे पहुंच प्रदान नहीं करनी चाहिए।',
    'LBL_OAUTH_BACK_TO_HOME' => '<< डैशबोर्ड पर वापस जाने के लिए यहां क्लिक करें।',
    'LBL_INVALID_REQUEST' => 'अमान्य अनुरोध',
    'LBL_DELETE_BUTTON_LABEL' => 'निरस्त करें और हटाएँ',
    'LBL_DELETE_BUTTON_TITLE' => 'निरस्त करें और हटाएँ',
    'LBL_DELETE' => 'निरस्त करें और हटाएँ',
    'LBL_DELETE_CONFIRMATION' => 'क्या आप वाकई इस रिकॉर्ड को हटाना चाहते हैं? क्लाइंट को अब कोई प्राधिकरण कोड नहीं दिया जाएगा।',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAuth2 टोकन की सूची बनाएं',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2 क्लाइंट की सूची बनाएं',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'OAuth2 प्राधिकरण कोडों की सूची',

    'LNK_NEW_OAUTH2_CLIENT' => 'OAuth2 क्लाइंट बनाएँ',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'नया पासवर्ड क्लाइंट',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'नए ग्राहक क्रेडेंशियल्स क्लाइंट',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'नया इंप्लिसिट क्लाइंट',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'नया प्राधिकरण क्लाइंट',

    'LBL_OAUTH_AUTHORIZATION_REQUESTED' => 'अनुमति का अनुरोध किया गया',
    'LBL_OAUTH_AUTHORIZE' => 'अधिकृत करें',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS' => 'मॉड्यूल डेटा',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS_DESC' => 'आपको उन सभी मॉड्यूल के डेटा तक पूर्ण पहुंच प्रदान करता है जिन तक आपकी पहुंच है',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS' => 'व्यक्तिगत उपयोगकर्ता डेटा',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS_DESC' => 'नाम और ईमेल पते जैसे व्यक्तिगत उपयोगकर्ता डेटा तक पहुंच प्रदान करता है',
    'LBL_OAUTH_AUTHORIZING_WILL_REDIRECT' => 'अनुमति देने पर आपको इस पृष्ठ पर पुनर्निर्देशित किया जाएगा:',
    'LBL_OAUTH_NOTE' => 'टिप्पणी:',
    'LBL_OAUTH_CLIENT_INFO_DESCRIPTION' => 'आपके खाते तक पहुंच चाहता है',
    'LBL_OAUTH_CLIENT_INFO' => 'ग्राहक जानकारी',
];
