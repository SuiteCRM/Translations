<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
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
 * along with this program.  If not, see http://www.gnu.org/licenses.
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
 * Module-specific labels for ManualMigrationTasks.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'प्रवासन सूची',
    'LBL_MODULE_NAME' => 'स्थानांतरगमन',
    'LBL_MODULE_TITLE' => 'स्थानांतरगमन',
    'LBL_HOMEPAGE_TITLE' => 'मेरे स्थानांतरगमन',
    'LNK_NEW_RECORD' => 'स्थानांतरगमन बनाएं',
    'LNK_LIST' => 'स्थानांतरगमन देखना',
    'LBL_SEARCH_FORM_TITLE' => 'स्थानांतरगमन खोज',
    'LBL_NEW_FORM_TITLE' => 'स्थानांतरगमन नया',

    // Module-specific trigger action
    'LBL_RUN_MIGRATION' => 'स्थानांतरगमन चलाना',
    'LBL_RUN_MIGRATION_CONFIRMATION' => 'क्या आप वाकई इस माइग्रेशन को चलाना चाहते हैं?',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'क्या आप वाकई इस माइग्रेशन को शुरू से दोबारा चलाना चाहते हैं? सभी मौजूदा आइटम हटा दिए जाएंगे और माइग्रेशन फिर से शुरू हो जाएगा।',
    'LBL_RERUN_SUCCESS' => 'माइग्रेशन को पुनः कतार में डाल दिया गया है और यह शुरू से फिर से शुरू होगा।',
    'LBL_DISMISS_CONFIRMATION' => 'क्या आप वाकई इस माइग्रेशन कार्य को रद्द करना चाहते हैं? ऐसा करने से यह कार्य और इससे संबंधित सभी डेटा हटा दिया जाएगा।',
    'LBL_DISMISS_SUCCESS' => 'माइग्रेशन कार्य सफलतापूर्वक समाप्त हो गया।',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'यह माइग्रेशन मैसेज क्यू वर्कर के माध्यम से बैकग्राउंड में चलता है। यह आइटम को बैचों में प्रोसेस करता है और यूआई को ब्लॉक नहीं करता है।',
    'LBL_TYPE_IMMEDIATE_HELP' => 'यह माइग्रेशन ट्रिगर होते ही तुरंत शुरू हो जाता है। यह एक ही अनुरोध में सभी आइटमों को प्रोसेस करता है और बड़े डेटासेट के लिए इसमें अधिक समय लग सकता है।',


    // Messenger setup widget
    'LBL_MESSENGER_SETUP' => 'पृष्ठभूमि कार्य विन्यास',
    'LBL_MESSENGER_SETUP_DESC1' => 'माइग्रेशन संबंधी कार्य पृष्ठभूमि में संसाधित किए जाते हैं।',
    'LBL_MESSENGER_SETUP_DESC2' => 'इन कार्यों को सफलतापूर्वक पूरा करने के लिए, कृपया सुनिश्चित करें कि Symfony Messenger वर्कर चल रहा हो।',
    'LBL_MESSENGER_SETUP_DESC3' => 'किसी सक्रिय कार्यकर्ता के अभाव में, कार्य "लंबित" स्थिति में रहेंगे।',
    'LBL_MESSENGER_SETUP_DOC_LINK' => 'सेटअप गाइड देखें (सुपरवाइजर, सिस्टमडी, क्रॉन)',
];
