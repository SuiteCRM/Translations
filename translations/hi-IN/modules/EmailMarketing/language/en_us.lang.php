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
    'LBL_NAME' => 'नाम: ',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_FROM_ADDR' => 'ईमेल से',
    'LBL_LIST_DATE_START' => 'आरंभ करने की तिथि',
    'LBL_LIST_TEMPLATE_NAME' => 'ईमेल टेम्पलेट',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_STATUS' => 'स्थिति',
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
    'LBL_TIME_START' => 'प्रारंभ समय',
    'LBL_START_DATE_TIME' => 'प्रारंभ दिनांक और समय: ',
    'LBL_TEMPLATE' => 'ईमेल टेम्पलेट: ',

    'LBL_MODIFIED_BY' => 'के द्वारा संशोधित: ',
    'LBL_CREATED_BY' => 'Created By: ',

    'LNK_NEW_CAMPAIGN' => 'अभियान बनाएँ',
    'LNK_CAMPAIGN_LIST' => 'अभीयाँन ',
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
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'लक्ष्य सूचियाँ',
    'LBL_ALL_PROSPECT_LISTS' => 'अभियान में सभी लक्ष्य सूची(सूचियों) को चुनने के लिए चयन करें।',
    'LBL_RELATED_PROSPECT_LISTS' => 'इस संदेश से संबंधित सभी लक्ष्य सूचियाँ।',
    'LBL_PROSPECT_LIST_NAME' => 'लक्ष्य सूची का नाम',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'लक्षित सूचियाँ',
    'LBL_MODULE_SEND_TEST' => 'अभियान: परीक्षण भेजें',
    'LBL_MODULE_SEND_EMAILS' => 'अभियान: ईमेल भेजें',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'कृपया उन अभियान संदेशों का चयन करें जिनका आप परीक्षण करना चाहते हैं:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'कृपया उन अभियान संदेशों का चयन करें जिन्हें आप निर्दिष्ट प्रारंभ तिथि और समय पर वितरण के लिए शेड्यूल करना चाहते हैं:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'भेजें',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'भेजें',
    'LBL_ERROR_ON_MARKETING' => 'आवश्यक फ़ील्ड गुम हैं',

    'LBL_CAMPAIGN_ID' => 'अभियान आईडी',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'आउटबाउंड ईमेल खाता',
    'LBL_EMAIL_TEMPLATE' => 'ईमेल टेम्पलेट',
    'LBL_PROSPECT_LISTS' => 'संभावना सूचियाँ',

);
