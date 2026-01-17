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
    'ERR_NO_OPPS' => 'कृपया अवसर ग्राफ़ देखने के लिए कुछ अवसर बनाएँ।',
    'LBL_ALL_OPPORTUNITIES' => 'सभी अवसरों की कुल राशि है',
    'LBL_CHART_TYPE' => 'चार्ट प्रकार:',
    'LBL_CREATED_ON' => 'आखिरी बार चला',
    'LBL_CLOSE_DATE_START' => 'अपेक्षित समापन तिथि - से:',
    'LBL_CLOSE_DATE_END' => 'अपेक्षित समापन तिथि - तक:',
    'LBL_DATE_END' => 'समाप्ति दिनांक:',
    'LBL_DATE_RANGE_TO' => 'को',
    'LBL_DATE_RANGE' => 'दिनांक सीमा है',
    'LBL_DATE_START' => 'आरंभ दिनांक:',
    'LBL_EDIT' => 'संशोधन करें',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'चयनित उपयोगकर्ताओं के लिए परिणाम द्वारा चयनित लीड स्रोत द्वारा संचयी अवसर राशियाँ दिखाता है। परिणाम इस पर आधारित है कि क्या बिक्री चरण बंद जीत, बंद हार, या कोई अन्य मूल्य है।',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'सभी अवसरों द्वारा लीड स्रोत द्वारा परिणाम',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'चयनित उपयोगकर्ताओं के लिए चयनित लीड स्रोत द्वारा संचयी अवसर राशियाँ दिखाता है।',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'सभी अवसर लीड सोर्स द्वारा',
    'LBL_LEAD_SOURCE_OTHER' => 'अन्य',
    'LBL_LEAD_SOURCES' => 'प्रमुख स्रोत:',
    'LBL_MODULE_NAME' => 'डैशबोर्ड',
    'LBL_MODULE_TITLE' => 'डैशबोर्ड: होम',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'चयनित उपयोगकर्ताओं के लिए परिणाम के आधार पर महीने के हिसाब से संचयी अवसर की मात्रा दिखाता है, जहां अपेक्षित समापन तिथि निर्दिष्ट तिथि सीमा के भीतर है। परिणाम इस पर आधारित है कि क्या बिक्री चरण बंद जीत, बंद हार, या कोई अन्य मूल्य है।',
    'LBL_OPP_SIZE' => 'अवसर का आकार',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'अवसर जहां मुख्य स्रोत है',
    'LBL_OPPS_IN_STAGE' => ' जहां बिक्री चरण है',
    'LBL_OPPS_OUTCOME' => ' जहां परिणाम है',
    'LBL_OPPS_WORTH' => 'अवसरों के लायक',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'आपके अवसरों के लिए चयनित बिक्री चरणों द्वारा संचयी मात्राएँ दिखाता है जहाँ अपेक्षित समापन तिथि निर्दिष्ट तिथि सीमा के भीतर है।',
    'LBL_REFRESH' => 'रिफ्रेश करें',
    'LBL_ROLLOVER_DETAILS' => 'विवरण के लिए बार को रोलओवर करें।',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'विवरण के लिए एक पच्चर को रोलओवर करें।',
    'LBL_SALES_STAGE_FORM_DESC' => 'चयनित उपयोगकर्ताओं के लिए चयनित बिक्री चरणों द्वारा संचयी अवसर राशियाँ दिखाता है जहाँ अपेक्षित समापन तिथि निर्दिष्ट तिथि सीमा के भीतर है।',
    'LBL_SALES_STAGE_FORM_TITLE' => 'बिक्री चरण द्वारा पाइपलाइन',
    'LBL_SALES_STAGES' => 'बिक्री चरण:',
    'LBL_TOTAL_PIPELINE' => 'पाइपलाइन कुल है',
    'LBL_USERS' => 'उपयोगकर्ता:',
    'LBL_YEAR_BY_OUTCOME' => 'महीने दर महीने पाइपलाइन परिणाम के अनुसार',
    'LBL_YEAR' => 'वर्ष:',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_CASE' => 'केस बनाएं',
    'LNK_NEW_CONTACT' => 'नया कोन्टैक्ट बनाएँ',
    'LNK_NEW_LEAD' => 'लीड बनाएं',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_OPPORTUNITY' => 'अवसर बनाएँ',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'NTC_NO_LEGENDS' => 'कोई नहीं',

    'LBL_TITLE' => 'शीर्षक',
    'LBL_MY_MODULES_USED_SIZE' => 'पहुंच गणना',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'बिक्री चरण द्वारा पाइपलाइन',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'परिणाम द्वारा लीड स्रोत',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'माह के अनुसार परिणाम',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'लीड स्रोत द्वारा पाइपलाइन',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'बिक्री चरण द्वारा मेरी पाइपलाइन',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'मेरे प्रयुक्त मॉड्यूल (पिछले 30 दिन)',
);
