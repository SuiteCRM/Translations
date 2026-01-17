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
    'LBL_ASSIGNED_TO_NAME' => 'प्रोजेक्ट मैनेजर',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नमूना नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_LIST_FORM_TITLE' => 'प्रोजेक्ट टेम्प्लेट सूची',
    'LBL_MODULE_NAME' => 'प्रोजेक्ट टेम्प्लेट',
    'LBL_MODULE_TITLE' => 'प्रोजेक्ट टेम्प्लेट',
    'LBL_HOMEPAGE_TITLE' => 'मेरा प्रोजेक्ट टेम्प्लेट',
    'LNK_NEW_RECORD' => 'प्रोजेक्ट टेम्प्लेट बनाएं',
    'LNK_LIST' => 'प्रोजेक्ट टेम्पलेट देखें',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'प्रोजेक्ट टेम्प्लेट आयात करें',
    'LBL_SEARCH_FORM_TITLE' => 'प्रोजेक्ट टेम्पलेट खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नये प्रोजेक्ट टेम्प्लेट',
    'LBL_STATUS' => 'स्थिति',
    'LBL_PRIORITY' => 'प्राथमिकता',
    'LBL_PROJECT_NAME' => 'प्रोजेक्ट का नाम',
    'LBL_START_DATE' => 'आरंभ करने की तिथि',
    'LBL_CREATE_PROJECT_TITLE' => 'इस टेम्पलेट से एक नया प्रोजेक्ट बनाएं?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'कार्य टेम्पलेट्स',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'उपयोगकर्ताओं ',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'संपर्कों',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'संसाधन चुनें',
    'LBL_NEW_PROJECT_CREATED' => 'नया प्रोजेक्ट बनाया गया',
    'LBL_NEW_PROJECT' => 'प्रोजेक्ट बनाएँ',
    'LBL_CANCEL_PROJECT' => 'रद्द करें',

    'LBL_SUBTASK' => 'कार्य',
    'LBL_MILESTONE_FLAG' => 'मील का पत्थर',
    'LBL_RELATIONSHIP_TYPE' => 'संबंध प्रकार',
    'LBL_LAG' => 'पीछे रह जाना',
    'LBL_DAYS' => 'दिन',
    'LBL_HOURS' => 'घंटे',
    'LBL_MONTHS' => 'महीने',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'प्रोजेक्ट कार्य ',
    'LBL_VIEW_GANTT_TITLE' => 'गैंट देखें',
    'LBL_VIEW_GANTT_DURATION' => 'अवधि',
    'LBL_TASK_TITLE' => 'कार्य संपादित करें',
    'LBL_DURATION_TITLE' => 'अवधि संपादित करें',
    'LBL_DESCRIPTION' => 'नोट्स',
    'LBL_ASSIGNED_USER_ID' => 'को सौंपना:',

    'LBL_LIST_ASSIGNED_USER' => 'प्रोजेक्ट मैनेजर',
    'LBL_UNASSIGNED' => 'असाइन नहीं है',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'संसाधन',
    'LBL_DELETE_TASK' => 'कार्य हटाएँ',
    'LBL_VIEW_DETAIL' => 'विवरण देखें',
    'LBL_ADD_NEW_TASK' => 'नया कार्य जोड़ें',
    'LBL_ASSIGNED_USER_NAME' => 'प्रोजेक्ट मैनेजर:',

    'LBL_TASK_ID' => 'आईडी',
    'LBL_TASK_NAME' => 'कार्य का नाम',
    'LBL_DURATION' => 'अवधि',
    'LBL_ACTUAL_DURATION' => 'वास्तविक अवधि',
    'LBL_START' => 'प्रारंभ करें',
    'LBL_FINISH' => 'समाप्त करें',
    'LBL_PREDECESSORS' => 'पूर्ववर्तियों',
    'LBL_PERCENT_COMPLETE' => '% पूर्ण',
    'LBL_EDIT_TASK_PROPERTIES' => 'कार्य गुण संपादित करें.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'कार्य दिवसों पर विचार करें',
    'LBL_COPY_ALL_TASKS' => 'संसाधनों के साथ सभी कार्यों की प्रतिलिपि बनाएँ',
    'LBL_COPY_SEL_TASKS' => 'संसाधनों के साथ चयनित कार्यों की प्रतिलिपि बनाएँ',
    'LBL_TOOLTIP_TITLE' => 'संकेत देना',
    'LBL_TOOLTIP_TEXT' => 'असाइन किए गए उपयोगकर्ताओं के साथ सभी कार्यों की प्रतिलिपि बनाएँ',

    'LBL_EMAIL' => 'ईमेल',
    'LBL_PHONE' => 'फ़ोन कार्यालय:',
    'LBL_ADD_BUTTON' => 'जोड़ें',
    'LBL_ADD_INVITEE' => 'संसाधन जोड़ें',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_LAST_NAME' => 'परिवार का नाम',
    'LBL_SEARCH_BUTTON' => 'खोजें',
    'LBL_EMPTY_SEARCH_RESULT' => 'क्षमा करें, कोई परिणाम नहीं खोजे जा सके। कृपया नीचे एक आमंत्रित व्यक्ति बनाएं.',
    'LBL_CREATE_INVITEE' => 'एक संसाधन बनाएँ',
    'LBL_CREATE_CONTACT' => 'संपर्क के रूप में',
    'LBL_CREATE_AND_ADD' => 'बनाएं और जोड़ें',
    'LBL_CANCEL_CREATE_INVITEE' => 'रद्द करें',
    'LBL_NO_ACCESS' => 'आपके पास $module बनाने की कोई पहुंच नहीं है',
    'LBL_SCHEDULING_FORM_TITLE' => 'संसाधन सूची',
    'LBL_NONE' => 'कोई नहीं',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'प्रोजेक्ट टेम्प्लेट: प्रोजेक्ट शीर्षक से प्रोजेक्ट',


);
