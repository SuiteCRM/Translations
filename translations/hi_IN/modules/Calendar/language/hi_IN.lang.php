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

    'LBL_SHAREDWEEK' => 'साझा सप्ताह',
    'LBL_SHAREDMONTH' => 'साझा महीना',

    'LBL_MODULE_NAME' => 'कैलेंडर',
    'LBL_MODULE_TITLE' => 'कैलेंडर',
    'LNK_NEW_CALL' => 'कॉल शेड्यूल करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_CALL_LIST' => 'कॉल',
    'LNK_MEETING_LIST' => 'बैठकें',
    'LNK_TASK_LIST' => 'कार्य',
    'LNK_TASK' => 'कार्य',
    'LNK_TASK_VIEW' => 'कार्य देखें',
    'LNK_EVENT' => 'घटना',
    'LNK_EVENT_VIEW' => 'घटना देखें',
    'LNK_VIEW_CALENDAR' => 'आज',
    'LNK_IMPORT_CALLS' => 'कॉल आयात करें',
    'LNK_IMPORT_MEETINGS' => 'आयात बैठकें',
    'LNK_IMPORT_TASKS' => 'कार्य आयात करें',
    'LBL_MONTH' => 'महीना',
    'LBL_AGENDADAY' => 'दिन',
    'LBL_YEAR' => 'वर्ष',

    'LBL_AGENDAWEEK' => 'सप्ताह',
    'LBL_PREVIOUS_MONTH' => 'पिछला महीना',
    'LBL_PREVIOUS_DAY' => 'पिछला दिन',
    'LBL_PREVIOUS_YEAR' => 'पिछला साल',
    'LBL_PREVIOUS_WEEK' => 'पिछला सप्ताह',
    'LBL_NEXT_MONTH' => 'अगले महीने',
    'LBL_NEXT_DAY' => 'अगला दिन',
    'LBL_NEXT_YEAR' => 'अगले साल',
    'LBL_NEXT_WEEK' => 'अगले सप्ताह',
    'LBL_AM' => 'पूर्वाह्न',
    'LBL_PM' => 'बजे',
    'LBL_SCHEDULED' => 'अनुसूची',
    'LBL_BUSY' => 'व्यस्त',
    'LBL_CONFLICT' => 'विरोध',
    'LBL_USER_CALENDARS' => 'उपयोगकर्ता कैलेंडर',
    'LBL_SHARED' => 'साझाकृत',
    'LBL_PREVIOUS_SHARED' => 'पिछला',
    'LBL_NEXT_SHARED' => 'अगले',
    'LBL_SHARED_CAL_TITLE' => 'साझा कैलेंडर',
    'LBL_USERS' => 'उपयोगकर्ताओं ',
    'LBL_REFRESH' => 'रिफ्रेश करें',
    'LBL_EDIT_USERLIST' => 'उपयोगकर्ता सूची',
    'LBL_SELECT_USERS' => 'कैलेंडर प्रदर्शन के लिए उपयोगकर्ताओं का चयन करें',
    'LBL_FILTER_BY_TEAM' => 'टीम द्वारा उपयोगकर्ता सूची फ़िल्टर करें:',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_DATE' => 'प्रारंभ दिनांक और समय:',
    'LBL_CREATE_MEETING' => 'मीटिंग शेड्यूल करें',
    'LBL_CREATE_CALL' => 'कॉल लॉग करें',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'हाँ',
    'LBL_NO' => 'नहीं',
    'LBL_SETTINGS' => 'सेटिंग',
    'LBL_CREATE_NEW_RECORD' => 'गतिविधि बनाएँ',
    'LBL_LOADING' => 'लोड हो रहा है...',
    'LBL_SAVING' => 'सहेजा जा रहा है...',
    'LBL_SENDING_INVITES' => 'आमंत्रण सहेजा जा रहा है और भेजा जा रहा है...',
    'LBL_CONFIRM_REMOVE' => 'क्या आप वाकई रिकॉर्ड हटाना चाहते हैं?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'क्या आप वाकई सभी आवर्ती रिकॉर्ड हटाना चाहते हैं?',
    'LBL_EDIT_RECORD' => 'गतिविधि संपादित करें',
    'LBL_ERROR_SAVING' => 'सहेजते समय त्रुटि',
    'LBL_ERROR_LOADING' => 'लोड करते समय त्रुटि',
    'LBL_GOTO_DATE' => 'दिनांक पर जाएँ',
    'NOTICE_DURATION_TIME' => 'अवधि का समय 0 से अधिक होना चाहिए',
    'LBL_STYLE_BASIC' => 'वुनियादी ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'विकसित', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'फ़ील्ड के लिए कोई मेल नहीं: को सौंपा गया',
    'LBL_SUBJECT' => 'विषय',
    'LBL_DURATION' => 'अवधि',
    'LBL_STATUS' => 'स्थिति',
    'LBL_PRIORITY' => 'प्राथमिकता',

    'LBL_SETTINGS_TITLE' => 'सेटिंग',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'दिन और सप्ताह दृश्यों में समय स्लॉट प्रदर्शित करें:',
    'LBL_SETTINGS_TIME_STARTS' => 'प्रारंभ समय:',
    'LBL_SETTINGS_TIME_ENDS' => 'समाप्ति समय:',
    'LBL_SETTINGS_CALLS_SHOW' => 'कॉल दिखाएँ:',
    'LBL_SETTINGS_TASKS_SHOW' => 'कार्य दिखाएँ:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'पूरी हो चुकी मीटिंग, कॉल और कार्य दिखाएँ:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'साझा कैलेंडर अलग:',

    'LBL_SAVE_BUTTON' => 'रखना',
    'LBL_DELETE_BUTTON' => 'हटाएं',
    'LBL_APPLY_BUTTON' => 'लागू करें',
    'LBL_SEND_INVITES' => 'आमंत्रण सहेजें और भेजें',
    'LBL_CANCEL_BUTTON' => 'रद्द करें',
    'LBL_CLOSE_BUTTON' => 'बंद करें',

    'LBL_GENERAL_TAB' => 'विवरण',
    'LBL_PARTICIPANTS_TAB' => 'आमंत्रित',
    'LBL_REPEAT_TAB' => 'पुनरावृत्ति',

    'LBL_REPEAT_TYPE' => 'दोहराएँ',
    'LBL_REPEAT_INTERVAL' => 'प्रत्येक',
    'LBL_REPEAT_END' => 'अंत',
    'LBL_REPEAT_END_AFTER' => 'बाद',
    'LBL_REPEAT_OCCURRENCES' => 'पुनरावृत्ति',
    'LBL_REPEAT_END_BY' => 'द्वारा',
    'LBL_REPEAT_DOW' => 'पर',
    'LBL_REPEAT_UNTIL' => 'दोहराओ जब तक',
    'LBL_REPEAT_COUNT' => 'पुनरावृत्तियों की संख्या',
    'LBL_REPEAT_LIMIT_ERROR' => 'आपका अनुरोध $limit से अधिक बैठकें बनाने वाला था।',

    'LBL_EDIT_ALL_RECURRENCES' => 'सभी पुनरावृत्तियाँ संपादित करें',
    'LBL_REMOVE_ALL_RECURRENCES' => 'सभी पुनरावृत्तियाँ हटाएँ',

    'LBL_DATE_END_ERROR' => 'समाप्ति तिथि आरंभ तिथि से पहले की है',
    'ERR_YEAR_BETWEEN' => 'क्षमा करें, कैलेंडर आपके अनुरोधित वर्ष को संभाल नहीं सकता<br>वर्ष 1970 और 2037 के बीच होना चाहिए',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: इस दृश्य के लिए परिभाषित नहीं है',
    'LBL_NO_ITEMS_MOBILE' => 'सप्ताह के लिए आपका कैलेंडर स्पष्ट है.',
    'LBL_GENERAL_SETTINGS' => 'सामान्य सेटिंग्स',
    'LBL_COLOR_SETTINGS' => 'रंग सेटिंग्स',
    'LBL_MODULE' => 'मोड्यूल',
    'LBL_BODY' => 'बॉडी',
    'LBL_BORDER' => 'सीमा',
    'LBL_TEXT' => 'सूत्र',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "रवि",
            '1' => "सोम",
            '2' => "मंगल",
            '3' => "बुध",
            '4' => "गुरू",
            '5' => "शुक्र",
            '6' => "शनि",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "रविवार",
            '1' => "सोमवार",
            '2' => "मंगलवार",
            '3' => "बुधवार",
            '4' => "गुरुवार",
            '5' => "शुक्रवार",
            '6' => "शनिवार",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "जन",
            '2' => "फरवरी",
            '3' => "मार्च",
            '4' => "अप्रैल",
            '5' => "मई",
            '6' => "जून",
            '7' => "जुल",
            '8' => "अगस्त",
            '9' => "सितंबर",
            '10' => "अक्टूबर",
            '11' => "नवम्बर",
            '12' => "दिसम्बर",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "जनवरी",
            '2' => "फरवरी",
            '3' => "मार्च",
            '4' => "अप्रैल",
            '5' => "मई",
            '6' => "जून",
            '7' => "जुलाई",
            '8' => "अगस्त",
            '9' => "सितंबर",
            '10' => "अक्तूबर",
            '11' => "नवंबर",
            '12' => "दिसंबर",
        ),
);
