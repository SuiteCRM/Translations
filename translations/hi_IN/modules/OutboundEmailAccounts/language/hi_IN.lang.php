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
    'LBL_LIST_FORM_TITLE' => 'आउटबाउंड ईमेल खातों की सूची',
    'LBL_MODULE_NAME' => 'आउटबाउंड ईमेल खाते',
    'LBL_MODULE_TITLE' => 'आउटबाउंड ईमेल खाते',
    'LBL_HOMEPAGE_TITLE' => 'मेरे आउटबाउंड ईमेल खाते',
    'LNK_NEW_RECORD' => 'आउटबाउंड ईमेल खाते बनाएं',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'नया सिस्टम आउटबाउंड ईमेल अकाउंट ओवरराइड करता है',

    'LNK_LIST' => 'आउटबाउंड ईमेल खाते',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'इनबाउंड ईमेल खाते',
    'LBL_SEARCH_FORM_TITLE' => 'आउटबाउंड ईमेल खाते खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नए आउटबाउंड ईमेल खाते',
    'LBL_USERNAME' => 'उपयोगकर्ता नाम',
    'LBL_PASSWORD' => 'पासवर्ड',
    'LBL_SMTP_SERVERNAME' => 'SMTP सर्वर नाम',
    'LBL_SMTP_AUTH' => 'एसएमटीपी प्रमाणीकरण',
    'LBL_SMTP_PORT' => 'एसएमटीपी पोर्ट',
    'LBL_SMTP_PROTOCOL' => 'एसएमटीपी प्रोटोकॉल',
    'LBL_EDITVIEW_PANEL1' => 'खाता सेटिंग',
    'LBL_OUTBOUND_CONFIGURATION' => 'आउटबाउंड कॉन्फ़िगरेशन',
    'LBL_CONNECTION_CONFIGURATION' => 'सर्वर कॉन्फ़िगरेशन',
    'LBL_CHANGE_PASSWORD' => 'पासवर्ड का परिवर्तित करें',
    'LBL_SEND_TEST_EMAIL' => 'परीक्षण ईमेल भेजें',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'व्यवस्थापक ने अभी तक डिफ़ॉल्ट आउटबाउंड खाता कॉन्फ़िगर नहीं किया है. परीक्षण ईमेल भेजने में असमर्थ.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'एसएमटीपी प्रमाणीकरण का प्रयोग करें?',
    'LBL_MAIL_SMTPPASS' => 'पासवर्ड',
    'LBL_MAIL_SMTPPORT' => 'पोर्ट',
    'LBL_MAIL_SMTPSERVER' => 'सर्वर',
    'LBL_MAIL_SMTPUSER' => 'उपयोगकर्ता नाम',
    'LBL_MAIL_SMTP_SETTINGS' => 'एसएमटीपी सर्वर विशिष्टता',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'अपना ईमेल प्रदाता चुनें:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'याहू! मेल पासवर्ड:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'याहू! मेल आईडी:',
    'LBL_GMAIL_SMTPPASS' => 'जीमेल पासवर्ड:',
    'LBL_GMAIL_SMTPUSER' => 'जीमेल ईमेल पता:',
    'LBL_EXCHANGE_SMTPPASS' => 'पासवर्ड एक्सचेंज करें:',
    'LBL_EXCHANGE_SMTPUSER' => 'एक्सचेंज उपयोगकर्ता नाम:',
    'LBL_EXCHANGE_SMTPPORT' => 'एक्सचेंज सर्वर पोर्ट:',
    'LBL_EXCHANGE_SMTPSERVER' => 'सर्वर की अदला बदली करें:',

    'LBL_TYPE' => 'प्रकार',
    'LBL_MAIL_SENDTYPE' => 'मेल भेजने का प्रकार',
    'LBL_MAIL_SMTPSSL' => 'मेल एसएमटीपी/एसएसएल',
    'LBL_SMTP_FROM_NAME' => '"से" नाम',
    'LBL_SMTP_FROM_ADDR' => '"इस" पते से',
    'LBL_REPLY_TO_NAME' => '"उत्तर-को" नाम',
    'LBL_REPLY_TO_ADDR' => '"उत्तर-को" पता',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'सुरक्षा समूह',

    'LBL_OWNER' => 'मालिक',
    'LBL_OWNER_NAME' => 'मालिक',

    'LBL_AUTH_TYPE' => 'प्रमाणीकरण प्रकार',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'बाहरी OAuth कनेक्शन',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'बाहरी OAuth कनेक्शन आईडी',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'बाहरी OAuth कनेक्शन',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'बाहरी OAuth कनेक्शन',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
