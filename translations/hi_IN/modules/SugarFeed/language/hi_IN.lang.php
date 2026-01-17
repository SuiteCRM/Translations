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
    'LBL_SAVING' => 'सहेजा जा रहा है...',
    'LBL_SAVED' => 'सहेजा गया',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_FORM_TITLE' => 'फ़ीड सूची',
    'LBL_MODULE_NAME' => 'गतिविधि स्ट्रीम',
    'LBL_MODULE_TITLE' => 'गतिविधि स्ट्रीम',
    'LBL_DASHLET_DISABLED' => 'चेतावनी: फ़ीड सिस्टम अक्षम है, इसे सक्रिय किए जाने तक कोई नई फ़ीड प्रविष्टियाँ पोस्ट नहीं की जाएंगी',
    'LBL_RECORDS_DELETED' => 'सभी पिछली फ़ीड प्रविष्टियाँ हटा दी गई हैं, यदि फ़ीड सिस्टम सक्षम है, तो नई प्रविष्टियाँ स्वचालित रूप से उत्पन्न हो जाएंगी।',
    'LBL_CONFIRM_DELETE_RECORDS' => 'क्या आप वाकई सभी फ़ीड प्रविष्टियाँ हटाना चाहते हैं?',
    'LBL_FLUSH_RECORDS' => 'फ़ीड प्रविष्टियाँ हटाएँ',
    'LBL_ENABLE_FEED' => 'मेरी गतिविधि स्ट्रीम डैशलेट सक्षम करें',
    'LBL_ENABLE_MODULE_LIST' => 'इसके लिए फ़ीड सक्रिय करें',
    'LBL_HOMEPAGE_TITLE' => 'मेरी गतिविधि स्ट्रीम',
    'LNK_NEW_RECORD' => 'फ़ीड बनाएँ',
    'LNK_LIST' => 'खिलाना',
    'LBL_SEARCH_FORM_TITLE' => 'खोज फ़ीड',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नए फीड',
    'LBL_ALL' => 'सब',
    'LBL_USER_FEED' => 'उपयोगकर्ता फ़ीड',
    'LBL_ENABLE_USER_FEED' => 'उपयोगकर्ता फ़ीड सक्रिय करें',
    'LBL_TO' => 'टीम को दिखाई देगा',
    'LBL_IS' => 'है',
    'LBL_DONE' => 'खत्म',
    'LBL_TITLE' => 'शीर्षक',
    'LBL_ROWS' => 'पंक्तियाँ',
    'LBL_CATEGORIES' => 'मॉड्यूल',
    'LBL_TIME_LAST_WEEK' => 'पिछले सप्ताह',
    'LBL_TIME_WEEKS' => 'सप्ताह',
    'LBL_TIME_DAYS' => 'दिन',
    'LBL_TIME_YESTERDAY' => 'कल',
    'LBL_TIME_HOURS' => 'घंटे',
    'LBL_TIME_HOUR' => 'घंटे',
    'LBL_TIME_MINUTES' => 'मिनट',
    'LBL_TIME_MINUTE' => 'मिनट',
    'LBL_TIME_SECONDS' => 'सेकंड',
    'LBL_TIME_SECOND' => 'सेकंड',
    'LBL_TIME_AND' => 'और',
    'LBL_TIME_AGO' => 'पूर्व',
// Activity stream
    'CREATED_CONTACT' => '<b>नया</b> {0} बनाया गया',
    'CREATED_OPPORTUNITY' => '<b>नया</b> {0} बनाया गया',
    'CREATED_CASE' => '<b>नया</b> {0} बनाया गया',
    'CREATED_LEAD' => '<b>नया</b> {0} बनाया गया',
    'FOR' => 'के लिए', // Activity stream for cases
    'FOR_AMOUNT' => 'राशि के लिए', // Activity stream for cases
    'CLOSED_CASE' => '<b>बंद</b> {0} ',
    'CONVERTED_LEAD' => '<b>परिवर्तित</b> एक {0}',
    'WON_OPPORTUNITY' => '{0} <b>जीता</b> है',
    'WITH' => 'साथ',

    'LBL_LINK_TYPE_Link' => 'लिंक',
    'LBL_LINK_TYPE_Image' => 'छवि',
    'LBL_LINK_TYPE_YouTube' => 'यूट्यूब&#153;',

    'LBL_SELECT' => 'चयन',
    'LBL_POST' => 'लेख',
    'LBL_AUTHENTICATE' => 'से कनेक्ट',
    'LBL_AUTHENTICATION_PENDING' => 'आपके द्वारा चुने गए सभी बाहरी खातों को प्रमाणित नहीं किया गया है। बाहरी खातों को प्रमाणित करने के लिए विकल्प विंडो पर वापस जाने के लिए \'रद्द करें\' पर क्लिक करें, या बिना प्रमाणीकरण के आगे बढ़ने के लिए \'ठीक\' पर क्लिक करें।',
    'LBL_ADVANCED_SEARCH' => 'आधुनिक फ़िल्टर ' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'अधिक विकल्प दिखाएं',
    'LBL_HIDE_OPTIONS' => 'विकल्प छिपाएँ',
    'LBL_VIEW' => 'देखें',
    'LBL_POST_TITLE' => 'इसके लिए स्थिति अद्यतन पोस्ट करें ',
    'LBL_URL_LINK_TITLE' => 'उपयोग करने के लिए URL लिंक',
);
