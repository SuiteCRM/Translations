<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2026 SuiteCRM Ltd.
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

/**
 * Shared language labels for all async task modules.
 * Module-specific labels (module name strings, action confirmation/success messages)
 * are defined in each module's own language file, where they override these defaults.
 *
 * This file is automatically merged into inheriting modules by LanguageManager
 * when VardefManager::createVardef() lists 'asynctask' in the templates array.
 */
$mod_strings = [

    // Standard record field labels
    'LBL_ASSIGNED_TO_ID' => 'असाइन किया गया उपयोगकर्ता आईडी',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण ',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संपादित करें',
    'LBL_REMOVE' => 'हटाएँ',
    'LBL_LIST_DELETE' => 'हटाएं',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',

    // Async task field labels
    'LBL_DATA' => 'डेटा',
    'LBL_TYPE' => 'प्रकार',
    'LBL_ESTIMATED_RUN_TIME' => 'रन टाइम अनुमान',
    'LBL_STATUS' => 'स्थिति',
    'LBL_SERVICE_KEY' => 'सेवा कुंजी',
    'LBL_LAST_RUN_DATETIME' => 'आखरी बार',
    'LBL_ATTACHMENTS' => 'संलग्नक',
    'LBL_PHASE' => 'चरण',
    'LBL_OWNER' => 'मालिक',

    // Progress field labels
    'LBL_PROGRESS' => 'प्रगति',
    'LBL_PROGRESS_PERCENT' => 'प्रतिशत',
    'LBL_PROGRESS_COMPLETED' => 'पूरा हुआ',
    'LBL_PROGRESS_FAILED' => 'असफल',
    'LBL_PROGRESS_PERCENT_TPL' => '{{fields.progress.attributes.percent|default:-}}% ({{fields.progress.attributes.completed|default:-}} सफल, {{fields.progress.attributes.failed|default:-}} असफल / {{fields.progress.attributes.total|default:-}} कुल)',
    'LBL_PROGRESS_NOT_STARTED' => 'शुरू नही हुआ',
    'LBL_PROGRESS_QUEUING_TPL' => 'कतार: {{fields.progress.attributes.total|default:0}} आइटम कतार में डाले गए',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'पुन: प्रयास करें',
    'LBL_RERUN' => 'पुन: चलाएँ',
    'LBL_DISMISS' => 'बर्खास्त करें',
    'LBL_DELETE' => 'हटाएं',
    'LBL_DELETE_COMPLETED_CONFIRMATION' => 'क्या आप वाकई इस पूर्ण किए गए कार्य को हटाना चाहते हैं?',
    'LBL_DELETE_COMPLETED_WITH_FAILURES_CONFIRMATION' => 'यह कार्य कुछ असफलताओं के साथ पूरा हुआ। इसे हटाने से असफल कार्यों की जानकारी सहित सभी कार्य डेटा हट जाएगा। क्या आप आगे बढ़ना चाहते हैं?',
    'LBL_DELETE_FAILED_CONFIRMATION' => 'यह कार्य विफल हो गया है। इसे हटाने से त्रुटि विवरण सहित सभी कार्य डेटा हट जाएगा। क्या आप आगे बढ़ना चाहते हैं?',

    // Retry action messages (shared — generic phrasing)
    'LBL_RETRY_CONFIRMATION' => 'क्या आप वाकई दोबारा कोशिश करना चाहते हैं? इससे प्रोसेसिंग के लिए सभी असफल आइटम दोबारा कतार में लग जाएंगे।',
    'LBL_RETRY_SUCCESS' => 'असफल आइटमों को प्रोसेसिंग के लिए दोबारा कतार में डाल दिया गया है।',

    // Retry-failed action messages (shared)
    'LBL_RETRY_FAILED' => 'पुनः प्रयास विफल',
    'LBL_RETRY_FAILED_CONFIRMATION' => 'क्या आप वाकई दोबारा कोशिश करना चाहते हैं? इससे प्रोसेसिंग के लिए सभी असफल आइटम दोबारा कतार में लग जाएंगे।',
    'LBL_RETRY_FAILED_SUCCESS' => 'असफल आइटमों को प्रोसेसिंग के लिए दोबारा कतार में डाल दिया गया है।',

    // Capability flag field labels
    'LBL_ALLOW_FAILURE_RETRY_ACTION' => 'विफलता पुनः प्रयास कार्रवाई की अनुमति दें',
    'LBL_ALLOW_FAILURE_RERUN_ACTION' => 'विफलता की अनुमति दें और कार्रवाई को पुनः चलाएँ',

    // Subpanel
    'LBL_FAILED_ITEMS' => 'असफल आइटम',
    'LBL_COMPLETED_ITEMS' => 'पूर्ण किए गए आइटम',
];
