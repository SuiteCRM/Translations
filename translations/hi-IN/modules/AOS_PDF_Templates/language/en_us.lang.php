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
    'LBL_DESCRIPTION' => 'बॉडी',
    'LBL_HEADER' => 'शीर्षक',
    'LBL_FOOTER' => 'पादिका',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_FORM_TITLE' => 'पीडीएफ टेम्पलेट्स सूची',
    'LBL_MODULE_NAME' => 'पीडीएफ टेम्पलेट्स',
    'LBL_MODULE_TITLE' => 'पीडीएफ टेम्पलेट्स: होम',
    'LBL_HOMEPAGE_TITLE' => 'मेरे पीडीएफ टेम्पलेट',
    'LNK_NEW_RECORD' => 'पीडीएफ टेम्पलेट बनाएं',
    'LNK_LIST' => 'पीडीएफ टेम्पलेट्स देखें',
    'LBL_SEARCH_FORM_TITLE' => 'पीडीएफ टेम्पलेट खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया पीडीएफ टेम्पलेट',
    'LBL_TYPE' => 'प्रकार',
    'LBL_ACTIVE' => 'सक्रिय',
    'LBL_BUTTON_INSERT' => 'शामिल करें',
    'LBL_WARNING_OVERWRITE' => 'चेतावनी, यह आपके वर्तमान कार्य को अधिलेखित कर देगा',
    'LBL_INSERT_FIELDS' => 'फ़ील्ड सम्मिलित करें',

    'LBL_SAMPLE' => 'नमूना लोड करें',
    'LBL_PAGE' => 'पन्ना',
    'LBL_PREPARED_FOR' => 'तैयार किया गया',
    'LBL_PREPARED_BY' => 'द्वारा तैयार',
    'LBL_QUOTE_SAMPLE' => 'उद्धरण नमूना',
    'LBL_INVOICE_SAMPLE' => 'चालान का नमूना',
    'LBL_ACCOUNT_SAMPLE' => 'खाता नमूना',
    'LBL_CONTACT_SAMPLE' => 'संपर्क नमूना',
    'LBL_LEAD_SAMPLE' => 'लीड नमूना',
    'LBL_ANY_STREET' => 'कोई भी सड़क',
    'LBL_ANY_TOWN' => 'कोई भी शहर',
    'LBL_ANY_WHERE' => 'कहीं भी',

    'LBL_QUOTE_GROUP_SAMPLE' => 'उद्धरण समूह नमूना',
    'LBL_INVOICE_GROUP_SAMPLE' => 'चालान समूह नमूना',
    'LBL_MARGIN_LEFT' => 'हाशिया बायां',
    'LBL_MARGIN_RIGHT' => 'मार्जिन राइट',
    'LBL_MARGIN_TOP' => 'मार्जिन टॉप',
    'LBL_MARGIN_BOTTOM' => 'मार्जिन तल',
    'LBL_MARGIN_HEADER' => 'मार्जिन हेडर',
    'LBL_MARGIN_FOOTER' => 'मार्जिन फ़ुटर',
    'LBL_EDITVIEW_PANEL1' => 'मार्जिन',
    'LBL_DETAILVIEW_PANEL1' => 'मार्जिन',
    'LBL_PAGE_SIZE' => 'पृष्ठ आकार',
    'LBL_ORIENTATION' => 'अभिविन्यास',
);
