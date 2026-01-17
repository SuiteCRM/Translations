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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2 क्लाइंट',
    'LBL_MODULE_TITLE' => 'OAuth2 क्लाइंट',
    'LBL_MODULE_ID' => 'OAuth2 क्लाइंट',
    'LBL_IS_CONFIDENTIAL' => 'गोपनीय है',
    'LBL_SECRET' => 'गुप्त',
    'LBL_SECRET_HASHED' => 'गुप्त परिवर्तन',
    'LBL_LEAVE_BLANK' => 'जब तक बदलाव न हो जाए, खाली छोड़ दें',
    'LBL_REMEMBER_SECRET' => 'कृपया इस गुप्त जानकारी को नोट कर लें क्योंकि आपके द्वारा इसे सहेजने के बाद यह उपलब्ध नहीं होगी।',
    'LBL_REDIRECT_URL' => 'पुनर्निर्देशित यूआरएल',
    'LBL_ALLOWED_GRANT_TYPE' => 'स्वीकृत अनुदान प्रकार',
    'LBL_DURATION_AMOUNT' => 'अवधि राशि',
    'LBL_DURATION_UNIT' => 'अवधि इकाई',
    'LBL_DURATION_VALUE' => 'अवधि मान',
    'LBL_USER' => 'संबद्ध उपयोगकर्ता',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'सक्रिय OAuth2 टोकन',
    'LBL_TOKEN_ID' => 'टोकन',
    'LBL_DATE_ENTERED' => 'निर्माण दिनांक',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'एक्सेस टोकन की समयसीमा समाप्त हो गई',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'रिफ्रेश टोकन की समयसीमा समाप्त हो गई',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAuth2 टोकन की सूची बनाएं',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2 क्लाइंट की सूची बनाएं',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',

    'LNK_NEW_OAUTH2_CLIENT' => 'OAuth2 क्लाइंट बनाएँ',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'नया पासवर्ड क्लाइंट',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'नए ग्राहक क्रेडेंशियल्स क्लाइंट',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'नया इंप्लिसिट क्लाइंट',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'नया प्राधिकरण क्लाइंट',

];
