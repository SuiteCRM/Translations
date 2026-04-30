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
    'LBL_SALUTATION' => 'ವಂದನೆಯ ಪರಿ',
    'LBL_NAME' => 'ಹೆಸರು',
    'LBL_FIRST_NAME' => 'ಮೊದಲ ಹೆಸರು',
    'LBL_LAST_NAME' => 'ಕೊನೆಯ ಹೆಸರು',
    'LBL_TITLE' => 'ಶೀರ್ಷಿಕೆ/ಪದವಿ',
    'LBL_DEPARTMENT' => 'ಇಲಾಖೆ',
    'LBL_DO_NOT_CALL' => 'ಕರೆ ಮಾಡಬೇಡಿ',
    'LBL_HOME_PHONE' => 'ಮನೆಯ ದೂರವಾಣಿ',
    'LBL_MOBILE_PHONE' => 'ಮೊಬೈಲ್ ಫೋನ್',
    'LBL_OFFICE_PHONE' => 'ಕಚೇರಿ ದೂರವಾಣಿ',
    'LBL_OTHER_PHONE' => 'ಇತರೆ ಫೋನ್',
    'LBL_FAX_PHONE' => 'ಫ್ಯಾಕ್ಸ್',
    'LBL_EMAIL_ADDRESS' => 'ಇಮೇಲ್ ವಿಳಾಸ(ಗಳು)',
    'LBL_PRIMARY_ADDRESS' => 'ಪ್ರಾಥಮಿಕ ವಿಳಾಸ',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ಪ್ರಾಥಮಿಕ ವಿಳಾಸ',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ಪ್ರಾಥಮಿಕ ವಿಳಾಸ ಬೀದಿ 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ಪ್ರಾಥಮಿಕ ವಿಳಾಸ ಬೀದಿ 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ಪ್ರಾಥಮಿಕ ನಗರ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ಪ್ರಾಥಮಿಕ ರಾಜ್ಯ',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ಪ್ರಾಥಮಿಕ ಅಂಚೆ ಕೋಡ್',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ಪ್ರಾಥಮಿಕ ವಿಳಾಸ ದೇಶ:',
    'LBL_ALT_ADDRESS' => 'ಪರ್ಯಾಯ ವಿಳಾಸ',
    'LBL_ALT_ADDRESS_STREET' => 'ಪರ್ಯಾಯ ವಿಳಾಸ',
    'LBL_ALT_ADDRESS_STREET_2' => 'ಪರ್ಯಾಯ ವಿಳಾಸ ಸ್ಟ್ರೀಟ್ 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'ಪರ್ಯಾಯ ವಿಳಾಸ ಸ್ಟ್ರೀಟ್ 3:',
    'LBL_ALT_ADDRESS_CITY' => 'ಪರ್ಯಾಯ ನಗರ',
    'LBL_ALT_ADDRESS_STATE' => 'ಪರ್ಯಾಯ ರಾಜ್ಯ',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'ಪರ್ಯಾಯ ಅಂಚೆ ಕೋಡ್',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ಪರ್ಯಾಯ ದೇಶ',
    'LBL_PRIMARY_STREET' => 'ವಿಳಾಸ',
    'LBL_ALT_STREET' => 'ಇತರೆ ವಿಳಾಸ',
    'LBL_STREET' => 'ಇತರೆ ವಿಳಾಸ',
    'LBL_CITY' => 'ನಗರ',
    'LBL_STATE' => 'ಸ್ಥಿತಿ',
    'LBL_POSTAL_CODE' => 'ಪಿನ್ ಕೋಡ್',
    'LBL_COUNTRY' => 'ದೇಶ',
    'LBL_CONTACT_INFORMATION' => 'ಸಂಪರ್ಕ ಮಾಹಿತಿ',
    'LBL_ADDRESS_INFORMATION' => 'ವಿಳಾಸ(ಗಳು)',
    'LBL_ASSIGNED_TO_NAME' => 'ಬಳಕೆದಾರ',
    'LBL_OTHER_EMAIL_ADDRESS' => 'ಇತರೇ ಮಿಂಚೆ:',
    'LBL_ASSISTANT' => 'ಸಹಾಯಕ',
    'LBL_ASSISTANT_PHONE' => 'ಸಹಾಯಕ ಫೋನ್',
    'LBL_WORK_PHONE' => 'ಕೆಲಸದ ದೂರವಾಣಿ',
    'LNK_IMPORT_VCARD' => 'Vcard ನಿಂದ ರಚಿಸಿ',
    'LBL_ANY_EMAIL' => 'ಯಾವುದೇ ಇಮೇಲ್',
    'LBL_EMAIL_NON_PRIMARY' => 'ಪ್ರಾಥಮಿಕವಲ್ಲದ ಮಿಂಚೆಗಳು',
    'LBL_PHOTO' => 'ಫೋಟೋ',
    'LBL_EDIT_BUTTON' => 'ತಿದ್ದು',
    'LBL_REMOVE' => 'ತೆಗೆಯಿರಿ',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'ಕಾನೂನುಬದ್ಧ ಆಧಾರ',
    'LBL_DATE_REVIEWED' => 'ಕಾನೂನುಬದ್ಧ ಆಧಾರದ ಪರಿಶೀಲಿಸಲಾದ ದಿನಾಂಕ',
    'LBL_LAWFUL_BASIS_SOURCE' => 'ಕಾನೂನುಬದ್ಧ ಆಧಾರ ಮೂಲ',
    'LBL_CONSENT' => 'ಒಪ್ಪಿಗೆ',
    //End Lawful Basis labels
);
