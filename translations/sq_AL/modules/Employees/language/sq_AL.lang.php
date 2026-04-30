<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Employees',
    'LBL_MODULE_TITLE' => 'Puntorët: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'kërkim i puntorëve',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'Punëtor i ri',
    'LBL_LOGIN' => 'Hyrje',
    'LBL_RESET_PREFERENCES' => 'Rivendos në preferenca të çaktivizuara',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'Ora aktuale',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'Emri i punëtorit',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'Gabim:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'Lloji i përdoruesit',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Gjuha:',
    'LBL_ADMIN' => 'Administratori',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacioni i punëtorit',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'I raporton Id:',
    'LBL_REPORTS_TO_NAME' => 'I raporton',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'Shënimet',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'adresat',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Emri:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => 'Posta e klientit SuiteCRM: Dërgo një email duke perdorur emailin e klientit në aplikimin SuiteCRM.<br />Posta e jashtme e klientit: Dërgoni email duke përdorur një email të jashtëm të klientit në aplikimin SuiteCRM, të tilla si Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'telefoni i shtëpisë',
    'LBL_WORK_PHONE' => 'Telefoni i punës',
    'LBL_EMPLOYEE_STATUS' => 'statuti i punëtorit',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'IM emri',
    'LBL_MESSENGER_TYPE' => 'IM lloji',
    'ERR_LAST_ADMIN_1' => 'Emri i punëtorit "',
    'ERR_LAST_ADMIN_2' => 'është punëtori i fundit me qasje të administratorit. Së paku një punëtor duhet të jetë adiministrator',
    'LNK_NEW_EMPLOYEE' => 'Krijo punëtor',
    'LNK_EMPLOYEE_LIST' => 'Shih punëtorët',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statuti i punëtorit',

    'LBL_SUITE_LOGIN' => 'Është përdorues i SuiteCRM',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Shpall në detyrë',
    'LBL_IS_ADMIN' => 'Është administrator',
    'LBL_GROUP' => 'Përdorues grupi',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Ky punëtor është gjithashtu përdorues. Fshi regjistrimin e punëtorit dhe regjistrimin e punëtorit dhe Përdoruesi nuk do të ketë më qasje në aplikimin. A dëshironi të vazhdoni me fshirjen e regjistrimit?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'A jeni të sigurt që dëshironi të fshini këtë punëtor?',
    'LBL_ONLY_ACTIVE' => 'Punëtor aktiv',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID autentike',
    'LBL_EXT_AUTHENTICATE' => 'Autentifikim i jashtëm',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Përdoruesi portali API',
    'LBL_PSW_MODIFIED' => 'Ndryshimi i fundit i fjalëkalimit',
    'LBL_SHOW_ON_EMPLOYEES' => 'Shfaq regjistrimet e punëtorit',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Fjalëkalimi i formuar i sistemit',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Qyteti i adresës',
    'LBL_ADDRESS_COUNTRY' => 'Shteti i adresës',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'Kodi postal i adresës',
    'LBL_ADDRESS_STATE' => 'Rruga e adresës',
    'LBL_ADDRESS_STREET' => 'Rruga e adresës',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Deleted',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
