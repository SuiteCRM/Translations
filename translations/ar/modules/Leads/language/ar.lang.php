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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل ليتم حذف العميل المحتمل.',
    'LBL_ACCOUNT_DESCRIPTION' => 'وصف الحساب',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'عنوان المدينة البديل',
    'LBL_ALT_ADDRESS_COUNTRY' => 'عنوان البلد البديل',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'عنوان الرمز البريدي البديل',
    'LBL_ALT_ADDRESS_STATE' => 'عنوان المحافظة البديل',
    'LBL_ALT_ADDRESS_STREET_2' => 'العنوان البديل - شارع 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'العنوان البديل - شارع 3',
    'LBL_ALT_ADDRESS_STREET' => 'العنوان البديل - الشارع',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'معرف جهة الاتصال',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'اسم العميل المحتمل:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'فرصة-عميل محتمل:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'عميل محتمل:',
    'LBL_CONVERTED_ACCOUNT' => 'الحساب المحول:',
    'LBL_CONVERTED_CONTACT' => 'جهة الاتصال المحوّلة:',
    'LBL_CONVERTED_OPP' => 'الفرصة المحوّلة:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'العميل المحتمل المحوّل',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'تحذير: حالة العميل المحتمل الذي أنت على وشك تحويله هي "محوّل". قد يكون تم بالفعل إنشاء سجلات الاتصال و/أو الحساب من العميل المحتمل. إذا كنت ترغب في الاستمرار في تحويل العميل المحتمل، انقر فوق حفظ. للعودة إلى العميل المحتمل دون تحويله، انقر فوق إلغاء.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' جهة اتصال محتملة: ',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'تم إنشاء',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'العملاء المحتملون المماثلون',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'إنشاء عميل محتمل جديد تلقائيًا عن طريق استيراد بطاقة جهة اتصال (vCard) من نظام الملفات الخاص بك.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'وصف مصدر العميل المحتمل:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'اسم العميل المحتمل',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'قائمة العملاء المحتملين',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'وصف مصدر العميل المحتمل',
    'LBL_LIST_LEAD_SOURCE' => 'مصدر العميل المحتمل',
    'LBL_LIST_MY_LEADS' => 'العملاء المحتملون الخاصون بي',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'عرف بواسطة',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_TITLE' => 'العملاء المحتملين: الصفحة الرئيسية',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'عميل محتمل جديد',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'مبلغ الفرصة:',
    'LBL_OPPORTUNITY_ID' => 'معرف الفرصة',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'تطبيق البوابة',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'العنوان الرئيسي - المدينة',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'العنوان الرئيسي - الدولة',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'العنوان الرئيسي - الرمز البريدي',
    'LBL_PRIMARY_ADDRESS_STATE' => 'العنوان الرئيسي - المحافظة',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'العنوان الرئيسي - شارع 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'العنوان الرئيسي - شارع 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي - الشارع',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'عرف بواسطة:',
    'LBL_REPORTS_TO_ID' => 'يرفع تقريره إلى',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'البحث عن عميل محتمل',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'حدد العملاء المحتملين المُختارين',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'وصف الحالة:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'إنشاء عميل محتمل من بطاقة جهة اتصال (vCard)',
    'LNK_LEAD_LIST' => 'عرض العملاء المحتملين',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => ' <b>أو</b> حدد الحساب',
    'LNK_SELECT_CONTACTS' => ' <b>أو</b> حدد جهة الاتصال',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_REMOVE_CONFIRMATION' => 'هل أنت متأكد أنك تريد إزالة العميل المحتمل هذا من القضية؟',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Campaigns',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'السماح بالاختيار',
    'LBL_CONVERT_COPY' => 'نسخ البيانات',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'إضافة وحدة',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => ' <b>أو</b> اختر',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'استيراد العملاء المحتملين',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'الوحدة التي سيتم إنشاء سجل جديد فيها.',
    'LBL_REQUIRED_TIP' => 'يجب إنشاء الوحدات المطلوبة أو إختيارها قبل أن يمكن تحويل العميل المحتمل.',
    'LBL_COPY_TIP' => 'إذا تم تحديده، سيتم نسخ الحقول من العميل المحتمل إلى حقول بنفس الاسم في السجلات المنشأة حديثا.',
    'LBL_SELECTION_TIP' => 'يمكن تحديد الوحدات التي فيها حقل علاقة في جهات الاتصال بدلاً من إنشائها أثناء عملية تحويل العميل المحتمل.',
    'LBL_EDIT_TIP' => 'تعديل تخطيط التحويل لهذه الوحدة.',
    'LBL_DELETE_TIP' => 'إزالة هذه الوحدة من تصميم التحويل.',

    'LBL_ACTIVITIES_MOVE' => 'نقل الأنشطة إلى',
    'LBL_ACTIVITIES_COPY' => 'نسخ الأنشطة إلى',
    'LBL_ACTIVITIES_MOVE_HELP' => "حدد السجل الذي سيتم تحريك الأنشطة الخاصة بالعميل المحتمل. سيتم نقل المهام والمكالمات والاجتماعات والملاحظات والبريد الإلكتروني إلى السجل (السجلات) المحددة.",
    'LBL_ACTIVITIES_COPY_HELP' => "حدد السجل (السجلات) التي سيتم إنشاء نسخ فيها من الأنشطة الخاصة بالعميل المحتمل. سيتم إنشاء مهام جديدة ورسائل واجتماعات وملاحظات لكل سجل من السجلات المحددة. سيتم ربط رسائل البريد الإلكتروني بالسجل (السجلات) المحددة.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
