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
    'ERR_DELETE_RECORD' => 'Specify the record number to delete the contact.',
    'LBL_ACCOUNT_ID' => 'Аккаунт ID:',
    'LBL_ACCOUNT_NAME' => 'Байгууллагын Нэр:',
    'LBL_CAMPAIGN' => 'Компанит ажил:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_ADDRESS_INFORMATION' => 'Хаягын мэдээлэл',
    'LBL_ALT_ADDRESS_CITY' => 'Нэмэлт Хаяг - Хот:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Нэмэлт Хаяг - Улс:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Нэмэлт хаяг - Шуудангийн код:',
    'LBL_ALT_ADDRESS_STATE' => 'Нэмэлт Хаяг - Аймаг/муж:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Нэмэлт Хаяг - Гудамж 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Нэмэлт Хаяг - Гудамж 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Нэмэлт Хаяг - Гудамж:',
    'LBL_ALTERNATE_ADDRESS' => 'Бусад хаяг:',
    'LBL_ALT_ADDRESS' => 'Бусад хаяг:',
    'LBL_ANY_ADDRESS' => 'Дурын хаяг:',
    'LBL_ANY_EMAIL' => 'Дурын Е-Майл:',
    'LBL_ANY_PHONE' => 'Дурын Утас:',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч:',
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагч',
    'LBL_ASSISTANT_PHONE' => 'Туслахын утас:',
    'LBL_ASSISTANT' => 'Туслах:',
    'LBL_BIRTHDATE' => 'Төрсөн өдөр:',
    'LBL_CITY' => 'Хот:',
    'LBL_CAMPAIGN_ID' => 'Компанит ажлын ID',
    'LBL_CONTACT_INFORMATION' => 'Тойм', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Харилцагчийн Нэр:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Харилцагч хүн-Боломж:',
    'LBL_CONTACT_ROLE' => 'Үүрэг:',
    'LBL_CONTACT' => 'Харилцагч (хүн):',
    'LBL_COUNTRY' => 'Улс:',
    'LBL_CREATED_ACCOUNT' => 'Шинэ харилцагч үүсгэв',
    'LBL_CREATED_CALL' => 'Шинэ дуудлага үүсгэв',
    'LBL_CREATED_CONTACT' => 'Шинэ харилцагч бүртгэв',
    'LBL_CREATED_MEETING' => 'Шинэ уулзалт үүсгэв',
    'LBL_CREATED_OPPORTUNITY' => 'Шинэ боломж үүсгэв',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_DEPARTMENT' => 'Хэлтэс:',
    'LBL_DESCRIPTION' => 'Тайлбар:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Шууд удирдлага',
    'LBL_DO_NOT_CALL' => 'Бүү Залга:',
    'LBL_DUPLICATE' => 'Давхардсан хүн байж магад',
    'LBL_EMAIL_ADDRESS' => 'Мэйл Хаяг:',
    'LBL_EMAIL_OPT_OUT' => 'Мэйл илгээж болохгүй:',
    'LBL_EXISTING_ACCOUNT' => 'Бүртгэгдсэн харилцагч ашиглав',
    'LBL_EXISTING_CONTACT' => 'Бүртгэгдсэн хүн ашиглав',
    'LBL_EXISTING_OPPORTUNITY' => 'Бүртгэгдсэн боломж ашиглав',
    'LBL_FAX_PHONE' => 'Факс:',
    'LBL_FIRST_NAME' => 'Өөрийн нэр:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүх',
    'LBL_HOME_PHONE' => 'Гэрийн:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Нэрийн хуудсыг импортлох',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Алдаатай мэйл:',
    'LBL_INVITEE' => 'Шууд удирдлага',
    'LBL_LAST_NAME' => 'Эцэг эхийн нэр:',
    'LBL_LEAD_SOURCE' => 'Сонирхогч орж ирсэн суваг:',
    'LBL_LIST_ACCEPT_STATUS' => 'Урилга зөвшөөрсөн төлөв',
    'LBL_LIST_ACCOUNT_NAME' => 'Харилцагчийн Нэр',
    'LBL_LIST_CONTACT_NAME' => 'Харилцагчийн Нэр',
    'LBL_LIST_CONTACT_ROLE' => 'Үүрэг',
    'LBL_LIST_EMAIL_ADDRESS' => 'Е-мэйл',
    'LBL_LIST_FIRST_NAME' => 'Өөрийн Нэр',
    'LBL_LIST_FORM_TITLE' => 'Харилцагчийн жагсаалт',
    'LBL_LIST_LAST_NAME' => 'Овог Нэр',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_PHONE' => 'Ажлын Утас',
    'LBL_LIST_TITLE' => 'Албан тушаал',
    'LBL_MOBILE_PHONE' => 'Гар утас:',
    'LBL_MODIFIED' => 'Өөрчилсөн:',
    'LBL_MODULE_NAME' => 'Харилцагч',
    'LBL_MODULE_TITLE' => 'Хүн: Үндсэн',
    'LBL_NAME' => 'Нэр:',
    'LBL_NEW_FORM_TITLE' => 'Шинэ хүн',
    'LBL_NOTE_SUBJECT' => 'Тэмдэглэлийн гарчиг',
    'LBL_OFFICE_PHONE' => 'Ажлын утас:',
    'LBL_OPP_NAME' => 'Боломжийн нэршил:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Боломж дахь үүргийн ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Боломж дахь үүрэг',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Өөр мэйл:',
    'LBL_OTHER_PHONE' => 'Бусад утас:',
    'LBL_PHONE' => 'Утас:',
    'LBL_PORTAL_APP' => 'Portal Application:',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_STREET' => 'Гудамж',
    'LBL_POSTAL_CODE' => 'Шуудангийн код:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Үндсэн хаяг - Хот:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Үндсэн хаяг - Улс:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Үндсэн хаяг - Шуудангийн код:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Үндсэн хаяг - Муж:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Үндсэн хаяг - Гудамж 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Үндсэн хаяг - Гудамж 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Үндсэн хаяг - Гудамж:',
    'LBL_PRIMARY_ADDRESS' => 'Үндсэн хаяг:',
    'LBL_PRODUCTS_TITLE' => 'Бүтээгдэхүүн',
    'LBL_REPORTS_TO_ID' => 'Удирдах ажилтны ID:',
    'LBL_REPORTS_TO' => 'Удирдах ажилтан:',
    'LBL_RESOURCE_NAME' => 'Нөөцийн нэр',
    'LBL_SALUTATION' => 'Гуншин:',
    'LBL_SAVE_CONTACT' => 'Save Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'Аймаг/Муж:',
    'LBL_SYNC_CONTACT' => 'Sync to Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Боломжит харилцагчийн жагсаалт',
    'LBL_TITLE' => 'Албан Тушаал:',
    'LNK_CONTACT_LIST' => 'View Contacts',
    'LNK_IMPORT_VCARD' => 'Create Contact From vCard',
    'LNK_NEW_ACCOUNT' => 'Аккаунт Үүсгэх',
    'LNK_NEW_APPOINTMENT' => 'Дуудлага товлох',
    'LNK_NEW_CALL' => 'Дуудлага бүртгэх',
    'LNK_NEW_CASE' => 'Кейс Нээх',
    'LNK_NEW_CONTACT' => 'Харилцагч үүсгэх',
    'LNK_NEW_EMAIL' => 'Мэйл Архивлах',
    'LNK_NEW_MEETING' => 'Уулзалт товлох',
    'LNK_NEW_NOTE' => 'Тэмдэглэл үүсгэх',
    'LNK_NEW_OPPORTUNITY' => 'Боломж Үүсгэх',
    'LNK_NEW_TASK' => 'Ажил үүсгэх',
    'LNK_SELECT_ACCOUNT' => "Аккаунт сонго",
    'NTC_DELETE_CONFIRMATION' => 'Та энэ мэдээллийг устгахыг хүсч байна уу?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Creating an opportunity requires an account.\n Please either create a new account or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Сонирхогчид',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Боломжууд /Opp/',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Баримтууд',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy to Primary Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy to Other Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Кейсүүд',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Прог-ын Алдаа',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Төслүүд',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_CAMPAIGNS' => 'Компанит ажлууд',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Компанит ажлууд',
    'LBL_LIST_CITY' => 'Хот',
    'LBL_LIST_STATE' => 'Муж',
    'LBL_HOMEPAGE_TITLE' => 'My Contacts',
    'LBL_OPPORTUNITIES' => 'Боломжууд /Opp/',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Харилцагч',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Төслүүд',
    'LNK_IMPORT_CONTACTS' => 'Import Contacts',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Үйл явдлууд',

    'LBL_AOP_CASE_UPDATES' => 'Кейс шинэчлэх',
    'LBL_CREATE_PORTAL_USER' => 'Create Portal User',
    'LBL_ENABLE_PORTAL_USER' => 'Enable Portal User',
    'LBL_DISABLE_PORTAL_USER' => 'Disable Portal User',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',
    'LBL_NO_JOOMLA_URL' => 'No portal URL specified',
    'LBL_PORTAL_USER_TYPE' => 'Portal User Type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account Disabled',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'Гэрээ',
    'LBL_AOS_INVOICES' => 'Нэхэмжлэх',
    'LBL_AOS_QUOTES' => 'Үнийн Санал',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',

    'LBL_LIST_INVITE_STATUS' => 'Урьсан төлөв',
);
