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
    'LBL_MODULE_NAME' => 'परियोजना',
    'LBL_MODULE_TITLE' => 'परियोजनाएं: होम',
    'LBL_SEARCH_FORM_TITLE' => 'प्रोजेक्ट खोज',
    'LBL_LIST_FORM_TITLE' => 'परियोजना सूची',
    'LBL_HISTORY_TITLE' => 'इतिहास',
    'LBL_ID' => 'पहचान:',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक:',
    'LBL_DATE_MODIFIED' => 'संशोधन दिनांक:',
    'LBL_ASSIGNED_USER_ID' => 'को सौंपना:',
    'LBL_ASSIGNED_USER_NAME' => 'प्रोजेक्ट मैनेजर:',
    'LBL_MODIFIED_USER_ID' => 'संशोधित उपयोगकर्ता आईडी:',
    'LBL_CREATED_BY' => 'के द्वारा बनाई गई:',
    'LBL_NAME' => 'नाम:',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_DELETED' => 'हटाए गए:',
    'LBL_DATE' => 'तिथि:',
    'LBL_DATE_START' => 'प्रारंभ दिनांक:',
    'LBL_DATE_END' => 'समाप्ति दिनांक:',
    'LBL_PRIORITY' => 'प्राथमिकता:',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'कुल अनुमानित प्रयास (घंटे)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'कुल वास्तविक प्रयास (घंटे)',
    'LBL_LIST_END_DATE' => 'समाप्ति दिनांक',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'प्रोजेक्ट कार्य ',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'मौक़े ',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'कोई नहीं',
    'LBL_ALL_PROJECTS' => 'सभी परियोजनाएं',
    'LBL_ALL_USERS' => 'सभी उपयोगकर्ता',
    'LBL_ALL_CONTACTS' => 'सभी संपर्क',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'नई परियोजना',
    'LNK_NEW_PROJECT' => 'प्रोजेक्ट बनाएँ',
    'LNK_PROJECT_LIST' => 'प्रोजेक्ट सूची देखें',
    'LNK_NEW_PROJECT_TASK' => 'प्रोजेक्ट कार्य बनाएँ',
    'LNK_PROJECT_TASK_LIST' => 'प्रोजेक्ट कार्य देखें',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'खाता',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'मौक़े ',
    'LBL_CASES_SUBPANEL_TITLE' => 'मांमले ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Galatiya',
    'LBL_TASK_ID' => 'आईडी',
    'LBL_TASK_NAME' => 'कार्य का नाम',
    'LBL_DURATION' => 'अवधि',
    'LBL_ACTUAL_DURATION' => 'वास्तविक अवधि',
    'LBL_START' => 'प्रारंभ करें',
    'LBL_FINISH' => 'समाप्त करें',
    'LBL_PREDECESSORS' => 'पूर्ववर्तियों',
    'LBL_PERCENT_COMPLETE' => '% पूर्ण',
    'LBL_MORE' => 'अधिक...',
    'LBL_OPPORTUNITIES' => 'मौक़े ',
    'LBL_NEXT_WEEK' => 'अगले',
    'LBL_PROJECT_INFORMATION' => 'परियोजना अवलोकन',
    'LBL_EDITLAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'प्रोजेक्ट कार्य ',
    'LBL_VIEW_GANTT_TITLE' => 'गैंट देखें',
    'LBL_VIEW_GANTT_DURATION' => 'अवधि',
    'LBL_TASK_TITLE' => 'कार्य संपादित करें',
    'LBL_DURATION_TITLE' => 'अवधि संपादित करें',
    'LBL_LAG' => 'पीछे रह जाना',
    'LBL_DAYS' => 'दिन',
    'LBL_HOURS' => 'घंटे',
    'LBL_MONTHS' => 'महीने',
    'LBL_SUBTASK' => 'कार्य',
    'LBL_MILESTONE_FLAG' => 'मील का पत्थर',
    'LBL_ADD_NEW_TASK' => 'नया कार्य जोड़ें',
    'LBL_DELETE_TASK' => 'कार्य हटाएँ',
    'LBL_EDIT_TASK_PROPERTIES' => 'कार्य गुण संपादित करें.',
    'LBL_PARENT_TASK_ID' => 'मूल कार्य आईडी',
    'LBL_RESOURCE_CHART' => 'संसाधन कैलेंडर',
    'LBL_RELATIONSHIP_TYPE' => 'संबंध प्रकार',
    'LBL_ASSIGNED_TO' => 'प्रोजेक्ट मैनेजर',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'प्रोजेक्ट टेम्पलेट',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'प्रोजेक्ट मैनेजर',
    'LBL_TOOLTIP_PROJECT_NAME' => 'परियोजना',
    'LBL_TOOLTIP_TASK_NAME' => 'कार्य का नाम',
    'LBL_TOOLTIP_TITLE' => 'इस दिन के कार्य',
    'LBL_TOOLTIP_TASK_DURATION' => 'अवधि',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'संसाधन एक उपयोगकर्ता है',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'संसाधन एक संपर्क है',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'पिछला महीना',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'अगले महीने',
    'LBL_RESOURCE_CHART_WEEK' => 'सप्ताह',
    'LBL_RESOURCE_CHART_DAY' => 'दिन',
    'LBL_RESOURCE_CHART_WARNING' => 'किसी परियोजना को कोई संसाधन आवंटित नहीं किया गया है।',
    'LBL_PROJECT_DELETE_MSG' => 'क्या आप वाकई इस प्रोजेक्ट और इससे संबंधित कार्यों को हटाना चाहते हैं?',
    'LBL_LIST_MY_PROJECT' => 'मेरी परियोजनाएं',
    'LBL_LIST_ASSIGNED_USER' => 'प्रोजेक्ट मैनेजर',
    'LBL_UNASSIGNED' => 'असाइन नहीं है',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'संसाधन',

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
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_VIEW_DETAIL' => 'विवरण देखें',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'कार्य दिवसों पर विचार करें',

    'LBL_IMPORT_PROJECTS' => 'आयात परियोजनाएं',

    'LBL_PROJECTS_SEARCH' => 'प्रोजेक्ट खोजें',
    'LBL_USERS_SEARCH' => 'उपयोगकर्ता खोजें',
    'LBL_CONTACTS_SEARCH' => 'संपर्क चुनें',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'खोजें',

    'LBL_CHART_TYPE' => 'प्रकार',
    'LBL_CHART_WEEKLY' => 'साप्ताहिक',
    'LBL_CHART_MONTHLY' => 'मासिक',
    'LBL_CHART_QUARTERLY' => 'त्रैमासिक',

    'LBL_RESOURCE_CHART_MONTH' => 'महीना',
    'LBL_RESOURCE_CHART_QUARTER' => 'तिमाही',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'संपर्क शीर्षक से परियोजना संपर्क',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'प्रोजेक्ट टेम्प्लेट: प्रोजेक्ट शीर्षक से प्रोजेक्ट',
    'LBL_AOS_QUOTES_PROJECT' => 'उद्धरण: परियोजना',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'आरोही',
    'LBL_DESCENDING' => 'अवरोही',
);
