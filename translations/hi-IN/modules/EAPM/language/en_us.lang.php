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
    'LBL_ASSIGNED_TO_ID' => 'पहचानकर्ता कुंजी:
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']',
    'LBL_ASSIGNED_TO_NAME' => 'सुइटसीआरएम उपयोगकर्ता',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'ऐप उपयोगकर्ता नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_FORM_TITLE' => 'बाहरी खाता सूची',
    'LBL_MODULE_NAME' => 'बाहरी खाता',
    'LBL_MODULE_TITLE' => 'बाहरी खाते',
    'LBL_HOMEPAGE_TITLE' => 'मेरे बाहरी खाते',
    'LNK_NEW_RECORD' => 'बाहरी खाता बनाएँ',
    'LNK_LIST' => 'बाहरी खाते देखें',
    'LBL_SEARCH_FORM_TITLE' => 'बाहरी स्रोत खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया बाहरी खाता',
    'LBL_PASSWORD' => 'ऐप पासवर्ड',
    'LBL_USER_NAME' => 'ऐप उपयोगकर्ता नाम',
    'LBL_URL' => 'यूआरएल',
    'LBL_APPLICATION' => 'अनुप्रयोग',
    'LBL_API_DATA' => 'डेटा एपीआई',
    'LBL_API_CONSKEY' => 'उपभोक्ता कुंजी',
    'LBL_API_CONSSECRET' => 'उपभोक्ता रहस्य',
    'LBL_API_OAUTHTOKEN' => 'OAuth टोकन',
    'LBL_AUTH_UNSUPPORTED' => "यह प्राधिकरण पद्धति एप्लिकेशन द्वारा समर्थित नहीं है",
    'LBL_AUTH_ERROR' => 'इस खाते से जुड़ने का प्रयास विफल रहा.',
    'LBL_VALIDATED' => 'जुड़े हुए',
    'LBL_ACTIVE' => 'सक्रिय',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'जोड़ना',
    'LBL_NOTE' => 'कृपया टिप्पणी',
    'LBL_CONNECTED' => 'जुड़े हुए',

    'LBL_ERR_NO_AUTHINFO' => 'इस खाते के लिए कोई प्रमाणीकरण जानकारी नहीं है',
    'LBL_ERR_NO_TOKEN' => 'इस खाते के लिए कोई वैध लॉगिन टोकन नहीं हैं.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'आप वर्तमान में अपने {0} खाते से कनेक्ट नहीं हैं. अपने खाते में लॉगिन करने और कनेक्शन को पुनः सक्रिय करने के लिए ओके पर क्लिक करें।',

    'LBL_CLICK_TO_EDIT' => 'सम्पादन के लिए क्लिक करो',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'पुन: प्रमाणित करें',
    'LBL_APPLICATION_FOUND_NOTICE' => 'इस एप्लिकेशन के लिए एक खाता पहले से मौजूद है. हमने मौजूदा खाता बहाल कर दिया है.',
    'LBL_OMIT_URL' => '(http:// या https:// छोड़ें)',
    'LBL_OAUTH_SAVE_NOTICE' => 'अपने खाते की जानकारी प्रदान करने और SuiteCRM द्वारा खाते तक पहुंच को अधिकृत करने के लिए एक पृष्ठ पर निर्देशित होने के लिए <b>कनेक्ट</b> पर क्लिक करें। कनेक्ट करने के बाद, आपको वापस SuiteCRM पर निर्देशित किया जाएगा।',
    'LBL_BASIC_SAVE_NOTICE' => 'इस खाते को सुइटसीआरएम से कनेक्ट करने के लिए <b>कनेक्ट</b> पर क्लिक करें।',
    'LBL_ERR_POPUPS_DISABLED' => 'कनेक्ट करने के लिए कृपया ब्राउज़र पॉपअप विंडो सक्षम करें या अपवाद सूची में वेबसाइट "{0}" के लिए एक अपवाद जोड़ें।',

    'LBL_API_OAUTHSECRET' => 'एपीआई OAuth रहस्य',
);
