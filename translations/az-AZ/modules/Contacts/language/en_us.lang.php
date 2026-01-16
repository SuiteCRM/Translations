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
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_ACCOUNT_NAME' => 'Hesab Adı:',
    'LBL_CAMPAIGN' => 'Kampaniya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_ADDRESS_INFORMATION' => 'Ünvan məlumatları',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ Ünvan Küçəsi 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ Ünvan Küçəsi 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ Ünvan Küçəsi:',
    'LBL_ALTERNATE_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ALT_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ANY_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ANY_EMAIL' => 'Başqa email:',
    'LBL_ANY_PHONE' => 'Digər telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin edilsin:',
    'LBL_ASSIGNED_TO_ID' => 'Təyin edilmiş İstifadəçi',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_CITY' => 'Şəhər:',
    'LBL_CAMPAIGN_ID' => 'Kampaniya ID',
    'LBL_CONTACT_INFORMATION' => '	İcmal', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Əlaqəli şəxs Adı:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Əlaqə:',
    'LBL_COUNTRY' => 'Ölkə:',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Birbaşa Hesabatlar',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Possible Duplicate Contacts',
    'LBL_EMAIL_ADDRESS' => 'E-poçt Ünvanı:',
    'LBL_EMAIL_OPT_OUT' => 'E-poçtdan imtina:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçə',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Vcard İdxal',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Səhv e-mail:',
    'LBL_INVITEE' => 'Birbaşa Hesabatlar',
    'LBL_LAST_NAME' => 'Soyad:',
    'LBL_LEAD_SOURCE' => 'Aparıcı Mənbə:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'İstifadəçinin adı',
    'LBL_LIST_CONTACT_NAME' => 'Əlaqə adı',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poçt',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Əlaqə siyahısı',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PHONE' => 'Ofis telefonu',
    'LBL_LIST_TITLE' => 'Vəzifə',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODIFIED' => 'Modified By:',
    'LBL_MODULE_NAME' => 'Əlaqələr',
    'LBL_MODULE_TITLE' => 'Contacts: Home',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_NOTE_SUBJECT' => 'Note Subject',
    'LBL_OFFICE_PHONE' => 'İş Telefonu:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Opportunity Role',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Başqa e-poçt:',
    'LBL_OTHER_PHONE' => 'Başqa telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal Application:',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_STREET' => 'Küçə',
    'LBL_POSTAL_CODE' => 'Poçt Kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Əsas şəhər ünvanı:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Əsas Ölkə ünvanı:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Əsas ünvanın Poçt kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Əsas Ştat ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Əsas 2-ci küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Əsas 3-cü küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Əsas küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS' => 'Əsas ünvan:',
    'LBL_PRODUCTS_TITLE' => 'Məhsullar',
    'LBL_REPORTS_TO_ID' => 'Reports to ID:',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Salutation:',
    'LBL_SAVE_CONTACT' => 'Save Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'Ştat/Bölgə:',
    'LBL_SYNC_CONTACT' => 'Sync to Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'View Contacts',
    'LNK_IMPORT_VCARD' => 'Create Contact From vCard',
    'LNK_NEW_ACCOUNT' => 'Hesab Yarat',
    'LNK_NEW_APPOINTMENT' => 'Görüş yaradın',
    'LNK_NEW_CALL' => 'Zəng Günlüyü',
    'LNK_NEW_CASE' => 'Mübahisə Yarat',
    'LNK_NEW_CONTACT' => 'Əlaqə Yarat',
    'LNK_NEW_EMAIL' => 'Arxiv e-poçt',
    'LNK_NEW_MEETING' => 'Görüş cədvəli',
    'LNK_NEW_NOTE' => 'Qeyd Yarat',
    'LNK_NEW_OPPORTUNITY' => 'Fürsət Yarat',
    'LNK_NEW_TASK' => 'Tapşırıq Yarat',
    'LNK_SELECT_ACCOUNT' => "Hesab seçin",
    'NTC_DELETE_CONFIRMATION' => 'Bu qeydləri silmək istədiyinizə əminsiniz?',
    'NTC_SNOOZE_CONFIRMATION' => 'Mürgüləmək istədiyinizə əminsiniz?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Creating an opportunity requires an account.\n Please either create a new account or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Rəhbərlər',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'İmkanlar',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Sənədlər',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copy to Primary Address',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copy to Other Address',

    'LBL_CASES_SUBPANEL_TITLE' => 'Mübahisələr',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Boşluqlar',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Layihələr',
    'LBL_PROJECTS_RESOURCES' => 'Projects Resources',
    'LBL_CAMPAIGNS' => 'Kampaniyalar',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaniyalar',
    'LBL_LIST_CITY' => 'Şəhər',
    'LBL_LIST_STATE' => 'Ştat',
    'LBL_HOMEPAGE_TITLE' => 'My Contacts',
    'LBL_OPPORTUNITIES' => 'İmkanlar',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Layihələr',
    'LNK_IMPORT_CONTACTS' => 'Import Contacts',

    // SNIP
    'LBL_USER_SYNC' => 'User Sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
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

    'LBL_AOS_CONTRACTS' => 'Müqavilələr',
    'LBL_AOS_INVOICES' => 'Qəbzlər',
    'LBL_AOS_QUOTES' => 'Qiymətlər',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
