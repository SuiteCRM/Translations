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
    'LBL_MODULE_NAME' => 'प्रोजेक्ट कार्य ',
    'LBL_MODULE_TITLE' => 'प्रोजेक्ट कार्य: होम',

    'LBL_ID' => 'पहचान:',
    'LBL_PROJECT_TASK_ID' => 'परियोजना कार्य आईडी:',
    'LBL_PROJECT_ID' => 'परियोजना आईडी:',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक:',
    'LBL_DATE_MODIFIED' => 'संशोधन दिनांक:',
    'LBL_ASSIGNED_USER_ID' => 'को सौंपना:',
    'LBL_MODIFIED_USER_ID' => 'संशोधित उपयोगकर्ता आईडी:',
    'LBL_CREATED_BY' => 'के द्वारा बनाई गई:',
    'LBL_NAME' => 'नाम:',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_DATE_DUE' => 'अन्तिम तिथि:',
    'LBL_TIME_DUE' => 'निश्चित समय:',
    'LBL_PREDECESSORS' => 'पूर्ववर्ती',
    'LBL_DATE_START' => 'प्रारंभ दिनांक:',
    'LBL_DATE_FINISH' => 'समाप्ति तिथि:',
    'LBL_TIME_START' => 'प्रारंभ समय:',
    'LBL_TIME_FINISH' => 'समाप्ति समय:',
    'LBL_DURATION' => 'अवधि:',
    'LBL_DURATION_UNIT' => 'अवधि इकाई:',
    'LBL_ACTUAL_DURATION' => 'वास्तविक अवधि:',
    'LBL_PARENT_ID' => 'परियोजना:',
    'LBL_PARENT_TASK_ID' => 'मूल कार्य आईडी:',
    'LBL_PERCENT_COMPLETE' => '% कारपोरल',
    'LBL_PRIORITY' => 'प्राथमिकता:',
    'LBL_DESCRIPTION' => 'नोट्स:',
    'LBL_ORDER_NUMBER' => 'आर्डर:',
    'LBL_TASK_NUMBER' => 'कार्य क्रमांक:',
    'LBL_TASK_ID' => 'कार्य आईडी:',
    'LBL_MILESTONE_FLAG' => 'मील का पत्थर:',
    'LBL_ESTIMATED_EFFORT' => 'अनुमानित प्रयास (घंटे):',
    'LBL_ACTUAL_EFFORT' => 'वास्तविक प्रयास (घंटे):',
    'LBL_UTILIZATION' => 'उपयोग (%):',
    'LBL_DELETED' => 'हटाए गए:',
    'LBL_IMPORT_PROJECT_TASKS' => 'प्रोजेक्ट कार्य आयात करें',

    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_PARENT_NAME' => 'परियोजना',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% पूर्ण',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_ASSIGNED_USER_ID' => 'को सौंपना',
    'LBL_LIST_DATE_DUE' => 'देय तिथि',
    'LBL_LIST_PRIORITY' => 'प्राथमिकता',
    'LBL_LIST_CLOSE' => 'बंद करें',
    'LBL_PROJECT_NAME' => 'प्रोजेक्ट का नाम',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'प्रोजेक्ट बनाएँ',
    'LNK_PROJECT_LIST' => 'परियोजना सूची',
    'LNK_NEW_PROJECT_TASK' => 'प्रोजेक्ट कार्य बनाएँ',
    'LNK_PROJECT_TASK_LIST' => 'प्रोजेक्ट कार्य ',

    'LBL_LIST_MY_PROJECT_TASKS' => 'मेरे प्रोजेक्ट कार्य',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'प्रोजेक्ट कार्य ',
    'LBL_NEW_FORM_TITLE' => 'नया प्रोजेक्ट कार्य',

    'LBL_HISTORY_TITLE' => 'इतिहास',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',

    'LBL_ASSIGNED_USER_NAME' => 'को सौंपना',
    'LBL_PARENT_NAME' => 'प्रोजेक्ट का नाम',
    'LBL_EDITLAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'समयरेखा',

    'LBL_SUBTASK' => 'उप-कार्य',
    'LBL_LAG' => 'पीछे रह जाना',
    'LBL_DAYS' => 'दिन',
    'LBL_HOURS' => 'घंटे',
    'LBL_RELATIONSHIP_TYPE' => 'संबंध प्रकार',

    'LBL_ASCENDING' => 'आरोही',
    'LBL_DESCENDING' => 'अवरोही',
);
