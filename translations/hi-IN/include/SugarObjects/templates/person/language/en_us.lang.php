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
    'LBL_SALUTATION' => 'अभिवादन',
    'LBL_NAME' => 'नाम',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_LAST_NAME' => 'परिवार का नाम',
    'LBL_TITLE' => 'शीर्षक',
    'LBL_DEPARTMENT' => 'विभाग',
    'LBL_DO_NOT_CALL' => 'फ़ोन मत करो',
    'LBL_HOME_PHONE' => 'घर का फोन',
    'LBL_MOBILE_PHONE' => 'मोबाइल फोन',
    'LBL_OFFICE_PHONE' => 'कार्यालय फ़ोन',
    'LBL_OTHER_PHONE' => 'अन्य फ़ोन',
    'LBL_FAX_PHONE' => 'फेक्स',
    'LBL_EMAIL_ADDRESS' => 'ईमेल पता',
    'LBL_PRIMARY_ADDRESS' => 'प्राथमिक पता',
    'LBL_PRIMARY_ADDRESS_STREET' => 'प्राथमिक पता',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'प्राथमिक पता पंक्ति 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'प्राथमिक पता पंक्ति 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'प्राथमिक शहर',
    'LBL_PRIMARY_ADDRESS_STATE' => 'प्राथमिक राज्य',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'प्राथमिक पोस्टल कोड',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'प्राथमिक पता देश:',
    'LBL_ALT_ADDRESS' => 'वैकल्पिक पता',
    'LBL_ALT_ADDRESS_STREET' => 'वैकल्पिक पता',
    'LBL_ALT_ADDRESS_STREET_2' => 'वैकल्पिक पता पंक्ति 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'प्राथमिक पता पंक्ति 3:',
    'LBL_ALT_ADDRESS_CITY' => 'वैकल्पिक शहर',
    'LBL_ALT_ADDRESS_STATE' => 'वैकल्पिक राज्य',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'वैकल्पिक डाक कोड',
    'LBL_ALT_ADDRESS_COUNTRY' => 'वैकल्पिक देश',
    'LBL_PRIMARY_STREET' => 'पता',
    'LBL_ALT_STREET' => 'अन्य पता',
    'LBL_STREET' => 'अन्य पता',
    'LBL_CITY' => 'शहर',
    'LBL_STATE' => 'राज्य',
    'LBL_POSTAL_CODE' => 'डाक कोड',
    'LBL_COUNTRY' => 'देश',
    'LBL_CONTACT_INFORMATION' => 'संपर्क जानकारी',
    'LBL_ADDRESS_INFORMATION' => 'पता()',
    'LBL_ASSIGNED_TO_NAME' => 'उपयोगकर्ता',
    'LBL_OTHER_EMAIL_ADDRESS' => 'अन्य ईमेल:',
    'LBL_ASSISTANT' => 'सहायक',
    'LBL_ASSISTANT_PHONE' => 'सहायक फ़ोन',
    'LBL_WORK_PHONE' => 'कार्यालय का फ़ोन',
    'LNK_IMPORT_VCARD' => 'वीकार्ड से बनाएं',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल',
    'LBL_EMAIL_NON_PRIMARY' => 'गैर प्राथमिक ई-मेल',
    'LBL_PHOTO' => 'फोटो',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'वैध आधार',
    'LBL_DATE_REVIEWED' => 'वैध आधार तिथि की समीक्षा की गई',
    'LBL_LAWFUL_BASIS_SOURCE' => 'वैध आधार स्रोत',
    'LBL_CONSENT' => 'अनुमति',
    //End Lawful Basis labels
);
