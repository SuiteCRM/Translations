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
    'LBL_SECURITYGROUPS' => 'सुरक्षा समूह',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'सुरक्षा समूह',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_LIST_FORM_TITLE' => 'पिवट सूची',
    'LBL_MODULE_NAME' => 'प्रधान आधार',
    'LBL_MODULE_TITLE' => 'प्रधान आधार',
    'LBL_HOMEPAGE_TITLE' => 'मेरा धुरी',
    'LNK_NEW_RECORD' => 'पिवट बनाएं',
    'LNK_LIST' => 'पिवट देखें',
    'LBL_SEARCH_FORM_TITLE' => 'खोज धुरी',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया धुरी',
    'LBL_CONFIG' => 'कॉन्फ़िग',
    'LBL_TYPE' => 'विश्लेषण क्षेत्र',
    'LNK_SPOT_LIST' => 'स्थान देखें',
    'LNK_SPOT_CREATE' => 'स्पॉट बनाएं',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'विन्यास',

    'LBL_AN_UNSUPPORTED_DB' => 'क्षमा करें, Suite Spots वर्तमान में केवल MySQL और MS SQL के लिए ही कॉन्फ़िगर किए गए हैं',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'नाम',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'खाता प्रकार',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'उद्योग',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'बिलिंग देश',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_AN_LEADS_STATUS' => 'स्थिति',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'लीड स्रोत',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'अभियान का नाम',
    'LBL_AN_LEADS_YEAR' => 'वर्ष',
    'LBL_AN_LEADS_QUARTER' => 'तिमाही',
    'LBL_AN_LEADS_MONTH' => 'महीना',
    'LBL_AN_LEADS_WEEK' => 'सप्ताह',
    'LBL_AN_LEADS_DAY' => 'दिन',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'अवसर का नाम',
    'LBL_AN_SALES_ASSIGNED_USER' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'अवसर प्रकार',
    'LBL_AN_SALES_LEAD_SOURCE' => 'लीड स्रोत',
    'LBL_AN_SALES_AMOUNT' => 'रकम',
    'LBL_AN_SALES_STAGE' => 'बिक्री चरण',
    'LBL_AN_SALES_PROBABILITY' => 'संभावना',
    'LBL_AN_SALES_DATE' => 'बिक्री तिथि',
    'LBL_AN_SALES_QUARTER' => 'बिक्री तिमाही',
    'LBL_AN_SALES_MONTH' => 'बिक्री माह',
    'LBL_AN_SALES_WEEK' => 'बिक्री सप्ताह',
    'LBL_AN_SALES_DAY' => 'बिक्री दिवस',
    'LBL_AN_SALES_YEAR' => 'बिक्री वर्ष',
    'LBL_AN_SALES_CAMPAIGN' => 'अभियान',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_AN_SERVICE_STATE' => 'राज्य',
    'LBL_AN_SERVICE_STATUS' => 'स्थिति',
    'LBL_AN_SERVICE_PRIORITY' => 'प्राथमिकता',
    'LBL_AN_SERVICE_CREATED_DAY' => 'निर्मित दिवस',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'निर्मित सप्ताह',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'निर्मित माह',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'निर्मित तिमाही',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'निर्मित वर्ष',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'संपर्क नाम',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'निर्दिष्ट उपयोगकर्ता',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'प्रकार',
    'LBL_AN_ACTIVITIES_NAME' => 'नाम',
    'LBL_AN_ACTIVITIES_STATUS' => 'स्थिति',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'निर्दिष्ट उपयोगकर्ता',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'स्थिति',
    'LBL_AN_MARKETING_TYPE' => 'प्रकार',
    'LBL_AN_MARKETING_BUDGET' => 'बजट',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'अपेक्षित लागत',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'अपेक्षीत आमदनी',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'अवसर का नाम',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'अवसर राशि',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'अवसर बिक्री चरण',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'अवसर आवंटित किया गया',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'खाता नाम',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'अभियान का नाम',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'गतिविधि दिनांक',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'गतिविधि प्रकार',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'संबंधित प्रकार',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'संबंधित आईडी',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'अवसर का नाम',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'अवसर का प्रकार',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'अवसर लीड स्रोत',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'अवसर बिक्री चरण',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'संपर्क नाम',
    'LBL_AN_QUOTES_ITEM_NAME' => 'आइटम का नाम',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'वस्तु का प्रकार',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'वस्तु श्रेणी',
    'LBL_AN_QUOTES_ITEM_QTY' => 'वस्तु मात्रा',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'वस्तु सूची मूल्य',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'वस्तु की बिक्री कीमत',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'वस्तु की लागत मूल्य',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'आइटम छूट मूल्य',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'छूट राशि',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'आइटम का कुल',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'कुल योग',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_AN_QUOTES_DATE_CREATED' => 'बनाया गया दिनांक',
    'LBL_AN_QUOTES_DAY_CREATED' => 'दिन बनाया गया',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'सप्ताह निर्मित',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'महीना बनाया गया',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'तिमाही निर्मित',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'निर्माण वर्ष',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'धुरी उप-क्षेत्र के लिए लेबल निर्धारित करने में त्रुटि',
);
