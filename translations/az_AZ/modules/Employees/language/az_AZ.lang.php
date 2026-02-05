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
    'LBL_MODULE_NAME' => 'İşçilər',
    'LBL_MODULE_TITLE' => 'Employees: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Employee Search',
    'LBL_LIST_FORM_TITLE' => 'İşçilər',
    'LBL_NEW_FORM_TITLE' => 'New Employee',
    'LBL_LOGIN' => 'Login',
    'LBL_RESET_PREFERENCES' => 'Reset To Default Preferences',
    'LBL_TIME_FORMAT' => 'Vaxt formatı:',
    'LBL_DATE_FORMAT' => 'Tarix formatı:',
    'LBL_TIMEZONE' => 'Current Time:',
    'LBL_CURRENCY' => 'Valyuta:',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_EMPLOYEE_NAME' => 'Employee Name',
    'LBL_LIST_DEPARTMENT' => 'Departament',
    'LBL_LIST_REPORTS_TO_NAME' => 'Hesabat ver',
    'LBL_LIST_EMAIL' => 'E-poçt',
    'LBL_LIST_USER_NAME' => 'İstifadəçi adı',
    'LBL_ERROR' => 'Xəta:',
    'LBL_PASSWORD' => 'Şifrə:',
    'LBL_USER_NAME' => 'İstifadəçi adı:',
    'LBL_USER_TYPE' => 'İstifadəçi növü',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_LAST_NAME' => 'Soyad:',
    'LBL_THEME' => 'Mövzu:',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'İşçi məlumatı',
    'LBL_OFFICE_PHONE' => 'İş Telefonu:',
    'LBL_REPORTS_TO' => 'Reports to Id:',
    'LBL_REPORTS_TO_NAME' => 'Reports to',
    'LBL_OTHER_PHONE' => 'Başqa telefon:',
    'LBL_NOTES' => 'Notes:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ANY_PHONE' => 'Digər telefon:',
    'LBL_ANY_EMAIL' => 'Başqa email:',
    'LBL_ADDRESS' => 'Address:',
    'LBL_CITY' => 'Şəhər:',
    'LBL_STATE' => 'Ştat/Bölgə:',
    'LBL_POSTAL_CODE' => 'Poçt Kodu:',
    'LBL_COUNTRY' => 'Ölkə:',
    'LBL_NAME' => 'Ad:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'E-poçt Ünvanı:',
    'LBL_EMAIL_LINK_TYPE' => 'E-poçt Müştərisi',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Poçt Müştərisi</b> SuiteCRM tətbiqindəki e-poçt müştərisindən istifadə edərək e-poçt göndərin.<br><b>Xarici Poçt Müştərisi:</b> SuiteCRM tətbiqindən kənar e-poçt müştərisindən istifadə edərək e-poçt göndərin, məsələn Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_WORK_PHONE' => 'Work Phone:',
    'LBL_EMPLOYEE_STATUS' => 'Employee Status:',
    'LBL_PRIMARY_ADDRESS' => 'Əsas ünvan:',
    'LBL_SAVED_SEARCH' => 'Tərtibat tənzimləmələri',
    'LBL_MESSENGER_ID' => 'IM Name:',
    'LBL_MESSENGER_TYPE' => 'IM Type:',
    'ERR_LAST_ADMIN_1' => 'The employee name "',
    'ERR_LAST_ADMIN_2' => '" is the last employee with administrator access. At least one employee must be an administrator.',
    'LNK_NEW_EMPLOYEE' => 'Create Employee',
    'LNK_EMPLOYEE_LIST' => 'View Employees',
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeyd nömrəsini göstərməlisiniz.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'İşçi statusu',

    'LBL_SUITE_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notify on Assignment',
    'LBL_IS_ADMIN' => 'Administratordur',
    'LBL_GROUP' => 'Qrup istifadəçisi',
    'LBL_PHOTO' => 'Şəkil',
    'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Are you sure you want to delete this employee?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Seç' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Autentifikasiya id',
    'LBL_EXT_AUTHENTICATE' => 'Xarici doğrulama',
    'LBL_GROUP_USER' => 'Qrup istifadəçisi',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Redaktə etdi',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Müəllif', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API İstifadəçisi',
    'LBL_PSW_MODIFIED' => 'Son şifrə dəyişdirildi',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_USER_HASH' => 'Şifrə',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistem tərəfindən yaradılan şifrə',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_ADDRESS_CITY' => 'Ünvan Şəhər',
    'LBL_ADDRESS_COUNTRY' => 'Ölkə ünvanı',
    'LBL_ADDRESS_INFORMATION' => 'Ünvan məlumatları',
    'LBL_ADDRESS_POSTALCODE' => 'Poçt kodu ünvanı',
    'LBL_ADDRESS_STATE' => 'Address State',
    'LBL_ADDRESS_STREET' => 'Ünvan Küçəsi',

    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_DATE_ENTERED' => 'Daxil olma tarixi',
    'LBL_DELETED' => 'Silinib',

    'LBL_BUTTON_SELECT' => 'Seç',
    'LBL_BUTTON_CLEAR' => 'Təmizlə',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokenləri',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Rol',
    'LBL_SECURITYGROUPS' => 'Təhlükəsizlik Qrupları',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
