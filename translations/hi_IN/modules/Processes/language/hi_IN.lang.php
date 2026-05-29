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
 * Module-specific labels for Processes.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'प्रक्रियाओं की सूची',
    'LBL_MODULE_NAME' => 'प्रक्रियाओं',
    'LBL_MODULE_TITLE' => 'प्रक्रियाओं',
    'LBL_HOMEPAGE_TITLE' => 'मेरी प्रक्रियाएँ',
    'LNK_NEW_RECORD' => 'प्रक्रिया बनाएं',
    'LNK_LIST' => 'प्रक्रियाएँ देखें',
    'LBL_SEARCH_FORM_TITLE' => 'खोज प्रक्रियाएँ',
    'LBL_NEW_FORM_TITLE' => 'नई प्रक्रिया',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'क्या आप वाकई इस प्रक्रिया को शुरू से दोबारा चलाना चाहते हैं? सभी मौजूदा आइटम हटा दिए जाएंगे और प्रक्रिया फिर से शुरू हो जाएगी।',
    'LBL_RERUN_SUCCESS' => 'प्रक्रिया को पुनः कतार में डाल दिया गया है और यह शुरू से पुनः शुरू होगी।',
    'LBL_DISMISS_CONFIRMATION' => 'क्या आप वाकई इस प्रक्रिया को रद्द करना चाहते हैं? ऐसा करने से यह प्रक्रिया और इससे संबंधित सभी डेटा हट जाएगा।',
    'LBL_DISMISS_SUCCESS' => 'प्रक्रिया सफलतापूर्वक समाप्त हो गई।',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'यह प्रक्रिया मैसेज क्यू वर्कर के माध्यम से बैकग्राउंड में चलती है। यह आइटम को बैचों में प्रोसेस करती है और यूआई को ब्लॉक नहीं करती है।',
    'LBL_TYPE_IMMEDIATE_HELP' => 'यह प्रक्रिया शुरू होते ही तुरंत चलने लगती है। यह एक ही अनुरोध में सभी मदों को संसाधित करती है और बड़े डेटासेट के लिए इसमें अधिक समय लग सकता है।',
];
