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
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_LIST_FORM_TITLE' => 'घटना सूची',
    'LBL_MODULE_NAME' => 'घटना',
    'LBL_MODULE_TITLE' => 'घटना',
    'LBL_HOMEPAGE_TITLE' => 'मेरा इवेंट',
    'LNK_NEW_RECORD' => 'ईवेंट बनाएं',
    'LNK_LIST' => 'घटनाएँ देखें',
    'LBL_SEARCH_FORM_TITLE' => 'इवेंट खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नयी घटना',
    'LBL_LOCATION' => 'स्थान',
    'LBL_START_DATE' => 'आरंभ दिनांक',
    'LBL_END_DATE' => 'समाप्ति दिनांक/समय',
    'LBL_BUDGET' => 'बजट',
    'LBL_DATE' => 'आरंभ करने की तिथि',
    'LBL_DATE_END' => 'समाप्ति दिनांक',
    'LBL_DURATION' => 'अवधि',
    'LBL_INVITE_TEMPLATES' => 'ईमेल आमंत्रण टेम्पलेट',
    'LBL_INVITE_PDF' => 'निमंत्रण भेजें',
    'LBL_EDITVIEW_PANEL1' => 'मीटिंग विवरण',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'प्रतिनिधियों',
    'LBL_ACCEPT_REDIRECT' => 'रीडायरेक्ट यूआरएल स्वीकार करें',
    'LBL_DECLINE_REDIRECT' => 'रीडायरेक्ट यूआरएल अस्वीकार करें',
    'LBL_SELECT_DELEGATES' => 'प्रतिनिधियों का चयन करें',
    'LBL_SELECT_DELEGATES_TITLE' => 'प्रतिनिधियों का चयन करें:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'लक्ष्य सूची',
    'LBL_SELECT_DELEGATES_TARGETS' => 'लक्ष्यों को ',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'संपर्कों',
    'LBL_SELECT_DELEGATES_LEADS' => 'नेतृत्व',
    'LBL_MANAGE_DELEGATES' => 'प्रतिनिधियों को प्रबंधित करें',
    'LBL_MANAGE_DELEGATES_TITLE' => 'प्रतिनिधियों को प्रबंधित करें:-',
    'LBL_MANAGE_ACCEPTANCES' => 'स्वीकृतियां प्रबंधित करें',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'स्वीकृतियां प्रबंधित करें:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'स्वीकृत',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'मना कर दिया',
    'LBL_MANAGE_POPUP_ERROR' => 'किसी भी प्रतिनिधि का चयन नहीं किया गया है.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'आमंत्रित',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'आमंत्रित नहीं',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'उपस्थित होना',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'भाग नहीं लिया',
    'LBL_SUCCESS_MSG' => 'सभी आमंत्रण सफलतापूर्वक भेज दिए गए हैं.',
    'LBL_ERROR_MSG_1' => 'सभी लिंक किए गए संपर्कों को पहले ही आमंत्रित किया जा चुका है.',
    'LBL_ERROR_MSG_2' => 'आमंत्रण ईमेल भेजना विफल हो गया है! कृपया अपनी ईमेल सेटिंग जांचें.',
    'LBL_ERROR_MSG_3' => '10 से अधिक ईमेल भेजने में विफल रहे हैं। कृपया जांच लें कि आप जिन संपर्कों को आमंत्रित कर रहे हैं उनके पास वैध ईमेल पता है। (suitecrm.log देखें)',
    'LBL_ERROR_MSG_4' => ' ईमेल भेजने में विफल रहे हैं. कृपया जांच लें कि आप जिन संपर्कों को आमंत्रित कर रहे हैं उनके पास वैध ईमेल पता है। (suitecrm.log देखें)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'अमान्य ईमेल टेम्प्लेट',
    'LBL_EMAIL_INVITE' => 'ईमेल आमंत्रण',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'संपर्कों',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'जगहे',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'नेतृत्व',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'लक्ष्यों को ',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'प्रतिनिधियों',

    // Attendance report
    'LBL_CONTACT_NAME' => 'नाम',
    'LBL_ACCOUNT_NAME' => 'कंपनी',
    'LBL_SIGNATURE' => 'हस्ताक्षर',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'आमंत्रित',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'स्थिति',

    'LBL_ACTIVITY_STATUS' => 'गतिविधि स्थिति',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'इवेंट शीर्षक से इवेंट स्थान',
    // Email links
    'LBL_ACCEPT_LINK' => 'स्वीकार करना',
    'LBL_DECLINE_LINK' => 'अस्वीकृत',
    
);
