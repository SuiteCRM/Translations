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
    'LBL_MODULE_NAME' => 'Punëtorët',
    'LBL_MODULE_TITLE' => 'Puntorët: Ballina',
    'LBL_SEARCH_FORM_TITLE' => 'kërkim i puntorëve',
    'LBL_LIST_FORM_TITLE' => 'Punëtorët',
    'LBL_NEW_FORM_TITLE' => 'Punëtor i ri',
    'LBL_LOGIN' => 'Hyrje',
    'LBL_RESET_PREFERENCES' => 'Rivendos në preferenca të çaktivizuara',
    'LBL_TIME_FORMAT' => 'Formati i kohës',
    'LBL_DATE_FORMAT' => 'Formati i datës',
    'LBL_TIMEZONE' => 'Ora aktuale',
    'LBL_CURRENCY' => 'monedha:',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_LAST_NAME' => 'Mbiemri',
    'LBL_LIST_EMPLOYEE_NAME' => 'Emri i punëtorit',
    'LBL_LIST_DEPARTMENT' => 'Departamentet',
    'LBL_LIST_REPORTS_TO_NAME' => 'I reporton',
    'LBL_LIST_EMAIL' => 'Emailet',
    'LBL_LIST_USER_NAME' => 'Emri i përdoruesit',
    'LBL_ERROR' => 'Gabim:',
    'LBL_PASSWORD' => 'Fjalëkalimi:',
    'LBL_USER_NAME' => 'Emri i përdoruesit:',
    'LBL_USER_TYPE' => 'Lloji i përdoruesit',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_THEME' => 'Albumi:',
    'LBL_LANGUAGE' => 'Gjuha:',
    'LBL_ADMIN' => 'Administratori',
    'LBL_EMPLOYEE_INFORMATION' => 'Informacioni i punëtorit',
    'LBL_OFFICE_PHONE' => 'Telefoni i zyrës',
    'LBL_REPORTS_TO' => 'I raporton Id:',
    'LBL_REPORTS_TO_NAME' => 'I raporton',
    'LBL_OTHER_PHONE' => 'Telefon tjetër',
    'LBL_NOTES' => 'Shënimet',
    'LBL_DEPARTMENT' => 'Departamenti',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'çdo adresë',
    'LBL_ANY_PHONE' => 'çdo numër telefoni',
    'LBL_ANY_EMAIL' => 'çdo email',
    'LBL_ADDRESS' => 'adresat',
    'LBL_CITY' => 'Qyteti',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_NAME' => 'Emri',
    'LBL_MOBILE_PHONE' => 'Celulari',
    'LBL_FAX' => 'faks',
    'LBL_EMAIL' => 'Email adresa',
    'LBL_EMAIL_LINK_TYPE' => 'Dergo email konsumatorit',
    'LBL_EMAIL_LINK_TYPE_HELP' => 'Posta e klientit SuiteCRM: Dërgo një email duke perdorur emailin e klientit në aplikimin SuiteCRM.<br />Posta e jashtme e klientit: Dërgoni email duke përdorur një email të jashtëm të klientit në aplikimin SuiteCRM, të tilla si Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'telefoni i shtëpisë',
    'LBL_WORK_PHONE' => 'Telefoni i punës',
    'LBL_EMPLOYEE_STATUS' => 'statuti i punëtorit',
    'LBL_PRIMARY_ADDRESS' => 'Adresa primare',
    'LBL_SAVED_SEARCH' => 'Opcionet e formatit:',
    'LBL_MESSENGER_ID' => 'IM emri',
    'LBL_MESSENGER_TYPE' => 'IM lloji',
    'ERR_LAST_ADMIN_1' => 'Emri i punëtorit "',
    'ERR_LAST_ADMIN_2' => 'është punëtori i fundit me qasje të administratorit. Së paku një punëtor duhet të jetë adiministrator',
    'LNK_NEW_EMPLOYEE' => 'Krijo punëtor',
    'LNK_EMPLOYEE_LIST' => 'Shih punëtorët',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë llogarinë',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Statuti i punëtorit',

    'LBL_SUITE_LOGIN' => 'Është përdorues i SuiteCRM',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Shpall në detyrë',
    'LBL_IS_ADMIN' => 'Është administrator',
    'LBL_GROUP' => 'Përdorues grupi',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'Ky punëtor është gjithashtu përdorues. Fshi regjistrimin e punëtorit dhe regjistrimin e punëtorit dhe Përdoruesi nuk do të ketë më qasje në aplikimin. A dëshironi të vazhdoni me fshirjen e regjistrimit?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'A jeni të sigurt që dëshironi të fshini këtë punëtor?',
    'LBL_ONLY_ACTIVE' => 'Punëtor aktiv',
    'LBL_SELECT' => 'Selekto' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID autentike',
    'LBL_EXT_AUTHENTICATE' => 'Autentifikim i jashtëm',
    'LBL_GROUP_USER' => 'Përdorues grupi',
    'LBL_LIST_ACCEPT_STATUS' => 'Prano statusin',
    'LBL_MODIFIED_BY' => 'Modifikuar nga',
    'LBL_MODIFIED_BY_ID' => 'Modifikuar nga Id',
    'LBL_CREATED_BY_NAME' => 'Krijuar nga', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Përdoruesi portali API',
    'LBL_PSW_MODIFIED' => 'Ndryshimi i fundit i fjalëkalimit',
    'LBL_SHOW_ON_EMPLOYEES' => 'Shfaq regjistrimet e punëtorit',
    'LBL_USER_HASH' => 'Fjalëkalimi',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Fjalëkalimi i formuar i sistemit',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_FAX_PHONE' => 'faks',
    'LBL_STATUS' => 'Statusi',
    'LBL_ADDRESS_CITY' => 'Qyteti i adresës',
    'LBL_ADDRESS_COUNTRY' => 'Shteti i adresës',
    'LBL_ADDRESS_INFORMATION' => 'informacion rreth adresës',
    'LBL_ADDRESS_POSTALCODE' => 'Kodi postal i adresës',
    'LBL_ADDRESS_STATE' => 'Rruga e adresës',
    'LBL_ADDRESS_STREET' => 'Rruga e adresës',

    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_DATE_ENTERED' => 'Data e shkruar',
    'LBL_DELETED' => 'E fshirë',

    'LBL_BUTTON_SELECT' => 'Selekto',
    'LBL_BUTTON_CLEAR' => 'Fshi',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Shenjat',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Rolet',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Lista e prospektit',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
