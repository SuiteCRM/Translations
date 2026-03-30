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
    'LBL_MODULE_TITLE' => 'الموظفون: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الموظفين',
    'LBL_LIST_FORM_TITLE' => 'Employees',
    'LBL_NEW_FORM_TITLE' => 'موظف جديد',
    'LBL_LOGIN' => 'تسجيل الدخول',
    'LBL_RESET_PREFERENCES' => 'إعادة ضبط إلى التفضيلات الافتراضية',
    'LBL_TIME_FORMAT' => 'Time Format:',
    'LBL_DATE_FORMAT' => 'Date Format:',
    'LBL_TIMEZONE' => 'الوقت الحالي:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'اسم الموظف',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'خطأ:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'User Name:',
    'LBL_USER_TYPE' => 'نوع المستخدم',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'Language:',
    'LBL_ADMIN' => 'مدير نظام:',
    'LBL_EMPLOYEE_INFORMATION' => 'معلومات الموظف',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'معرف المدير المباشر:',
    'LBL_REPORTS_TO_NAME' => 'المسؤول المباشر',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'ملاحظات:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ADDRESS' => 'العنوان:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b> تطبيق بريد SuiteCRM:</b> أرسل رسائل بريد إلكتروني باستخدام تطبيق البريد الإلكتروني في نظام SuiteCRM.<br><b>تطبيق البريد الخارجي:</b> أرسل بريدًا إلكترونيًا باستخدام تطبيق بريد إلكتروني خارج نظام SuiteCRM، مثل مايكروسوفت أوتلوك.',
    'LBL_HOME_PHONE' => 'هاتف المنزل:',
    'LBL_WORK_PHONE' => 'هاتف العمل:',
    'LBL_EMPLOYEE_STATUS' => 'حالة الموظف:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'الاسم في تطبيق المحادثة الفورية (IM):',
    'LBL_MESSENGER_TYPE' => 'نوع تطبيق المحادثة الفورية (IM):',
    'ERR_LAST_ADMIN_1' => 'اسم الموظف "',
    'ERR_LAST_ADMIN_2' => '" هو آخر موظف له صلاحيات مدير النظام. يجب أن يكون هناك موظف واحد على الأقل كمدير للنظام.',
    'LNK_NEW_EMPLOYEE' => 'إنشاء موظف',
    'LNK_EMPLOYEE_LIST' => 'عرض الموظفين',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'حالة الموظف',

    'LBL_SUITE_LOGIN' => 'هو مستخدم',
    'LBL_RECEIVE_NOTIFICATIONS' => 'تنبيه عند وجود إسناد',
    'LBL_IS_ADMIN' => 'هو مدير للنظام',
    'LBL_GROUP' => 'مستخدم مجموعة',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'هذا الموظف هو أيضا مستخدم سيؤدي حذف سجل الموظف إلى حذف سجل المستخدم أيضا، ولن يكون المستخدم قادرا على الدخول إلى النظام. هل تريد المضي قدما في حذف هذا السجل؟',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'هل أنت متأكد من أنك تريد حذف هذا الموظف؟',
    'LBL_ONLY_ACTIVE' => 'الموظفون النشطون',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'مُعرف المصادقة',
    'LBL_EXT_AUTHENTICATE' => 'مصادقة خارجية',
    'LBL_GROUP_USER' => 'Group User',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'Modified By',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'Created By', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'مستخدم واجهة تطبيق (API) البوابة',
    'LBL_PSW_MODIFIED' => 'آخر تغيير لكلمة المرور',
    'LBL_SHOW_ON_EMPLOYEES' => 'عرض سجل الموظف',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'كلمة مرور منشأة آليا من النظام',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'مدينة العنوان',
    'LBL_ADDRESS_COUNTRY' => 'دولة العنوان',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'الرمز البريدي للعنوان',
    'LBL_ADDRESS_STATE' => 'محافظة العنوان',
    'LBL_ADDRESS_STREET' => 'الشارع',

    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'Deleted',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'مزامنة جهات الاتصال',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'مستخدمو المشروع من عنوان المشروع',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'جهات اتصال المشروع من عنوان جهات الاتصال',
    'LBL_ROLES' => 'Roles',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'واجهة التوثيق الثنائي:',
    'LBL_EDITOR_TYPE' => 'محرر',
);
