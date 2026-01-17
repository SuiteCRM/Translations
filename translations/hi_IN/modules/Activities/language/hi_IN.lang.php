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
    'LBL_MODULE_NAME' => 'गतिविधियाँ',
    'LBL_MODULE_TITLE' => 'गतिविधियाँ: घर',
    'LBL_SEARCH_FORM_TITLE' => 'गतिविधियाँ खोज',
    'LBL_LIST_FORM_TITLE' => 'गतिविधियों की सूची',
    'LBL_LIST_SUBJECT' => 'विषय',
    'LBL_OVERVIEW' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'कार्य', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'बैठकें', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'कॉल', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'ईमेल', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'नोट्स', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'प्रिंट', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'मुलाकात',
    'LBL_CALL_TYPE' => 'कॉल',
    'LBL_EMAIL_TYPE' => 'ईमेल',
    'LBL_NOTE_TYPE' => 'ध्यान दें',
    'LBL_DATA_TYPE_START' => 'शुरू करना:',
    'LBL_DATA_TYPE_SENT' => 'भेजा गया:',
    'LBL_DATA_TYPE_MODIFIED' => 'रूपांतरित:',
    'LBL_LIST_CONTACT' => 'संपर्क करें',
    'LBL_LIST_RELATED_TO' => 'संदर्भ के',
    'LBL_LIST_DATE' => 'तारीख',
    'LBL_LIST_CLOSE' => 'बंद करें',
    'LBL_SUBJECT' => 'विषय:',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_LOCATION' => 'स्थान:',
    'LBL_DATE_TIME' => 'प्रारंभ दिनांक और समय:',
    'LBL_DATE' => 'प्रारंभ दिनांक:',
    'LBL_TIME' => 'प्रारंभ समय:',
    'LBL_DURATION' => 'अवधि:',
    'LBL_HOURS_MINS' => '(घंटे/मिनट)',
    'LBL_CONTACT_NAME' => 'संपर्क नाम: ',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'कॉल देखें',
    'LNK_MEETING_LIST' => 'बैठकें देखें',
    'LNK_TASK_LIST' => 'कार्य देखें',
    'LNK_NOTE_LIST' => 'नोट्स देखें',
    'LBL_DELETE_ACTIVITY' => 'क्या आप वाकई इस गतिविधि को हटाना चाहते हैं?',
    'ERR_DELETE_RECORD' => 'खाता हटाने के लिए आपको एक रिकॉर्ड संख्या निर्दिष्ट करनी होगी।',
    'LBL_INVITEE' => 'आमंत्रित',
    'LBL_LIST_DIRECTION' => 'दिशा',
    'LBL_DIRECTION' => 'दिशा',
    'LNK_NEW_APPOINTMENT' => 'नई नियुक्ति',
    'LNK_VIEW_CALENDAR' => 'कैलेंडर देखें',
    'LBL_OPEN_ACTIVITIES' => 'गतिविधियाँ खोलें',
    'LBL_HISTORY' => 'इतिहास',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'कार्य बनाएँ',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'कार्य बनाएँ',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'मीटिंग शेड्यूल करें',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'मीटिंग शेड्यूल करें',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'कॉल लॉग करें',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'नोट या अनुलग्नक बनाएँ',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'नोट या अनुलग्नक बनाएँ',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'ईमेल संग्रहित करें',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'ईमेल संग्रहित करें',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_DUE_DATE' => 'अन्तिम तिथि',
    'LBL_LIST_LAST_MODIFIED' => 'अंतिम रूपांतरित',
    'LNK_IMPORT_CALLS' => 'कॉल आयात करें',
    'LNK_IMPORT_MEETINGS' => 'आयात बैठकें',
    'LNK_IMPORT_TASKS' => 'कार्य आयात करें',
    'LNK_IMPORT_NOTES' => 'नोट्स आयात करें',
    'LBL_ACCEPT_THIS' => 'स्वीकार करना?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'गतिविधियाँ खोलें',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'निर्दिष्ट उपयोगकर्ता',

    'LBL_ACCEPT' => 'स्वीकार करना' /*for 508 compliance fix*/,
);
