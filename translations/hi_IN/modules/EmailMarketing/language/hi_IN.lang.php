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
    'LBL_REPLY_ADDR' => '"जवाब दें" पता: ',
    'LBL_REPLY_NAME' => '"उत्तर-प्रदाता" नाम: ',

    'LBL_MODULE_NAME' => 'ईमेल मार्केटिंग ',
    'LBL_MODULE_TITLE' => 'ईमेल मार्केटिंग: होम',
    'LBL_LIST_FORM_TITLE' => 'ईमेल विपणन अभियान',
    'LBL_NAME' => 'नाम',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_FROM_ADDR' => 'ईमेल से',
    'LBL_LIST_DATE_START' => 'आरंभ करने की तिथि',
    'LBL_LIST_TEMPLATE_NAME' => 'ईमेल टेम्पलेट',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_STATUS' => 'स्थिति',
    'LBL_QUEUEING_STATUS' => 'कतार की स्थिति',
    'LBL_STATUS_TEXT' => 'स्थिति:',
    'LBL_TEMPLATE_NAME' => 'नमूना नाम',
    'LBL_DATE_ENTERED' => 'दर्ज किया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'के द्वारा संशोधित: ',
    'LBL_CREATED' => 'Created By: ',
    'LBL_MESSAGE_FOR' => 'यह संदेश यहां भेजें:',

    'LBL_FROM_NAME' => 'नाम से: ',
    'LBL_FROM_ADDR' => 'ईमेल पते से: ',
    'LBL_DATE_START' => 'आरंभ करने की तिथि',
    'LBL_SEND_DATE' => 'तारीख बताएं',
    'LBL_SCHEDULED_START_DATE' => 'निर्धारित प्रदर्शन तिथि',
    'LBL_CHECK_DUPLICATE' => 'डुप्लिकेट हैंडलिंग',
    'LBL_TIME_START' => 'प्रारंभ समय',
    'LBL_START_DATE_TIME' => 'प्रारंभ दिनांक और समय: ',
    'LBL_TEMPLATE' => 'ईमेल टेम्पलेट: ',
    'LBL_TEMPLATE_SELECTED' => 'खाका',

    'LBL_MODIFIED_BY' => 'के द्वारा संशोधित: ',
    'LBL_CREATED_BY' => 'Created By: ',

    'LNK_NEW_CAMPAIGN' => 'अभियान बनाएँ',
    'LNK_CAMPAIGN_LIST' => 'अभीयाँन ',
    'LBL_RELATED_CAMPAIGN' => 'संबंधित अभियान',
    'LNK_NEW_PROSPECT_LIST' => 'लक्ष्य सूची बनाएं',
    'LNK_PROSPECT_LIST_LIST' => 'लक्ष्य सूचियाँ',
    'LNK_NEW_PROSPECT' => 'लक्ष्य बनाएं',
    'LNK_PROSPECT_LIST' => 'लक्ष्यों को ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ईमेल मार्केटिंग ',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'बनाएँ',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'संशोधन करें',
    'LBL_FROM_MAILBOX' => 'मेलबॉक्स से',
    'LBL_FROM_MAILBOX_NAME' => 'मेलबॉक्स का उपयोग करें:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'आउटबाउंड ईमेल खाता:',
    'LBL_FROM' => 'से',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'लक्ष्य सूचियाँ',
    'LBL_ALL_PROSPECT_LISTS' => 'अभियान में सभी लक्ष्य सूची(सूचियों) को चुनने के लिए चयन करें।',
    'LBL_RELATED_PROSPECT_LISTS' => 'इस संदेश से संबंधित सभी लक्ष्य सूचियाँ।',
    'LBL_PROSPECT_LIST_NAME' => 'लक्ष्य सूची का नाम',
    'LBL_TARGET_LISTS' => 'लक्ष्य सूची(सूचियाँ)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'लक्षित सूचियाँ',
    'LBL_MODULE_SEND_TEST' => 'अभियान: परीक्षण भेजें',
    'LBL_MODULE_SEND_EMAILS' => 'अभियान: ईमेल भेजें',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'कृपया उन अभियान संदेशों का चयन करें जिनका आप परीक्षण करना चाहते हैं:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'कृपया उन अभियान संदेशों का चयन करें जिन्हें आप निर्दिष्ट प्रारंभ तिथि और समय पर वितरण के लिए शेड्यूल करना चाहते हैं:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'भेजें',
    'LBL_SEND_BUTTON_LABEL' => 'भेजें',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'अनुसूची',
    'LBL_ERROR_ON_MARKETING' => 'आवश्यक फ़ील्ड गुम हैं',

    'LBL_CAMPAIGN_ID' => 'अभियान आईडी',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'आउटबाउंड ईमेल खाता',
    'LBL_EMAIL_TEMPLATE' => 'ईमेल टेम्पलेट',
    'LBL_PROSPECT_LISTS' => 'संभावना सूचियाँ',
    'LBL_OVERVIEW' => 'मूल',
    'LBL_EMAIL_CONFIG' => 'ईमेल सेटिंग्स',
    'LBL_CONFIGS' => 'कॉन्फ़िगरेशन',
    'LBL_EMAIL' => 'ई-मेल',
    'LBL_BODY' => 'बॉडी',
    'LBL_MARKETING_TYPE' => 'विपणन प्रकार',
    'LBL_SURVEY' => 'सर्वेक्षण',
    'LBL_SCHEDULE' => 'अनुसूची',
    'LBL_DELETE_TEST_ENTRIES' => 'परीक्षण प्रविष्टियाँ हटाएँ',
    'LBL_UNSCHEDULE' => 'गैर अनुसूचित',
    'LBL_ABORT' => 'बीच में बंद करें',
    'LBL_USERS' => 'उपयोगकर्ताओं',
    'LBL_SEND_TEST_EMAIL' => 'परीक्षण ईमेल भेजें',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'कृपया ईमेल वाले रिकॉर्ड चुनें',
    'LBL_MESSAGE_QUEUE_TITLE' => 'संदेश कतार',
    'LBL_SCHEDULED_START_DATE_HELP' => 'भेजने की प्रक्रिया बैचों में की जाएगी। इसमें कुछ मिनट/घंटे लग सकते हैं।',
    'LBL_TARGET_LISTS_HELP' => 'मार्केटिंग प्राप्तकर्ताओं को संदेश भेजे जाएंगे। अभियान की प्रतिबंधित सूचियों में शामिल प्राप्तकर्ताओं को ब्लॉक कर दिया जाएगा।',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'विपणन प्रक्रिया निर्धारित समय पर ही शुरू होगी।',
    'LBL_TYPE_MARKETING_HELP' => 'प्राप्तकर्ताओं को ऑप्ट-आउट सत्यापन के अधीन किया जाता है।',
    'LBL_TYPE_LEGACY_HELP' => 'यह एक पुराना ईमेल मार्केटिंग रिकॉर्ड है और ऐतिहासिक डेटा के उद्देश्य से मौजूद है।',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'प्राप्तकर्ताओं को ऑप्ट-आउट सत्यापन के अधीन नहीं किया जाता है।',

    'LBL_SCHEDULER_WIDGET' => 'ईमेल मार्केटिंग निदान',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'क्यू कैंपेन ईमेल',
    'LBL_OOTB_BOUNCE' => 'रात्रिकालीन प्रक्रिया के तहत बाउंस हुए अभियान ईमेल चलाएँ',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'अभियान संबंधी ईमेल भेजें',
    'LBL_SCHEDULERS' => 'समयबद्दक ',
    'LBL_INBOUND_EMAIL' => 'भीतर का ईमेल ',

    'LBL_TRACKERS_ENABLED' => 'ट्रैकर्स सक्षम',
    'LBL_TRACKER_LINKS_ENABLED' => 'ट्रैकर लिंक सक्षम किए गए',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'सक्षम होने पर, लिंक को ट्रैकर लिंक से बदल दिया जाएगा जो क्लिक की निगरानी करते हैं।',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'जब यह विकल्प निष्क्रिय होगा, तो क्लिक की निगरानी करने वाले ट्रैकर लिंक से लिंक प्रतिस्थापित नहीं किए जाएंगे।',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'ट्रैकिंग सेवाएं वैश्विक स्तर पर बंद कर दी गई हैं। ईमेल व्यू और क्लिक ट्रैक नहीं किए जाएंगे।',
    'LBL_HAS_TEST_DATA' => 'परीक्षण डेटा है',
);
