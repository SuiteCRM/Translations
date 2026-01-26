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
    'LBL_MODIFIED_ID' => 'आईडी द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_CREATED_ID' => 'आईडी द्वारा बनाया गया',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'कार्य का नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_LIST_FORM_TITLE' => 'प्रोजेक्ट कार्य टेम्पलेट सूची',
    'LBL_MODULE_NAME' => 'प्रोजेक्ट कार्य टेम्पलेट्स',
    'LBL_MODULE_TITLE' => 'प्रोजेक्ट कार्य टेम्पलेट्स',
    'LBL_HOMEPAGE_TITLE' => 'मेरा प्रोजेक्ट कार्य टेम्पलेट्स',
    'LNK_NEW_RECORD' => 'प्रोजेक्ट टास्क टेम्प्लेट बनाएं',
    'LNK_LIST' => 'प्रोजेक्ट कार्य टेम्पलेट देखें',
    'LNK_IMPORT_AM_TASKTEMPLATES' => 'प्रोजेक्ट कार्य टेम्पलेट आयात करें',
    'LBL_SEARCH_FORM_TITLE' => 'प्रोजेक्ट कार्य टेम्पलेट खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_AM_TASKTEMPLATES_SUBPANEL_TITLE' => 'प्रोजेक्ट कार्य टेम्पलेट्स',
    'LBL_NEW_FORM_TITLE' => 'नए प्रोजेक्ट कार्य टेम्पलेट',
    'LBL_STATUS' => 'स्थिति',
    'LBL_PRIORITY' => 'प्राथमिकता',
    'LBL_PERCENT_COMPLETE' => 'पूर्ण प्रतिशत',
    'LBL_PREDECESSORS' => 'पूर्ववर्तियों',
    'LBL_MILESTONE_FLAG' => 'मील का पत्थर झंडा',
    'LBL_RELATIONSHIP_TYPE' => 'संबंध प्रकार',
    'LBL_TASK_NUMBER' => 'कार्य क्रमांक',
    'LBL_ORDER_NUMBER' => 'आदेश ',
    'LBL_ESTIMATED_EFFORT' => 'अनुमानित प्रयास (घंटे)',
    'LBL_UTILIZATION' => 'उपयोग (%)',
    'LBL_DURATION' => 'अवधि (दिन)',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_PROJECTTEMPLATES_TITLE' => 'प्रोजेक्ट टेम्प्लेट',

    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'टास्क टेम्प्लेट: टास्क टेम्प्लेट शीर्षक से प्रोजेक्ट टेम्प्लेट',
);
