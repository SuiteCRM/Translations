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
    'LBL_MODULE_NAME' => 'Awon ifojusi',
    'LBL_MODULE_ID' => 'Awon ifojusi',
    'LBL_INVITEE' => 'Awon itosona taara',
    'LBL_MODULE_TITLE' => 'Targets: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Target Search',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => 'New Target',
    'LBL_LIST_NAME' => 'Oruko',
    'LBL_LIST_LAST_NAME' => 'Oruko ikehin',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Imeeli',
    'LBL_LIST_PHONE' => 'Foonu',
    'LBL_LIST_FIRST_NAME' => 'Oruko akoko',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si',
    'LBL_ASSIGNED_TO_ID' => 'Assigned To:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Lo accounti ti o wa tẹlẹ',
    'LBL_CREATED_ACCOUNT' => 'Seda accounti titun kan',
    'LBL_CREATED_CALL' => 'Seda ipe titun kan',
    'LBL_CREATED_MEETING' => 'Seda ipade titun kan',
    'LBL_NAME' => 'Oruko:',
    'LBL_PROSPECT_INFORMATION' => 'Isonisoki', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Alaye die si',
    'LBL_FIRST_NAME' => 'Oruko akoko:',
    'LBL_OFFICE_PHONE' => 'Foonu Ofiisi:',
    'LBL_ANY_PHONE' => 'Foonu eyikeyi:',
    'LBL_PHONE' => 'Foonu:',
    'LBL_LAST_NAME' => 'Oruko ikehin:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Ile:',
    'LBL_OTHER_PHONE' => 'Foonu miiran:',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adiresi opopona akoko:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adiresi Ilu akoko:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adiresi Orile-ede akoko:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adiresi Ipinle akoko:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Koodu ifiweranse adiresi akoko:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Eka:',
    'LBL_BIRTHDATE' => 'Ojo ibi:',
    'LBL_EMAIL_ADDRESS' => 'Adiresi emaili:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Emaili awon omiran:',
    'LBL_ANY_EMAIL' => 'Eyikeyi emaili:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Ma ṣe pe:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Adiresi akoko:',
    'LBL_ALTERNATE_ADDRESS' => 'Adiresi miran:',
    'LBL_ANY_ADDRESS' => 'Adiresi eyikeyi:',
    'LBL_CITY' => 'Ilu:',
    'LBL_STATE' => 'Ipinle tabi Agbegbe:',
    'LBL_POSTAL_CODE' => 'Koodu ifiweranse:',
    'LBL_COUNTRY' => 'Orile-ede:',
    'LBL_ADDRESS_INFORMATION' => 'Alaye Adiresi',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_OPP_NAME' => 'Oruko anfani:',
    'LBL_IMPORT_VCARD' => 'Se agbewole vcard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Seda akkant',
    'LNK_NEW_OPPORTUNITY' => 'Seda Anfani',
    'LNK_NEW_CASE' => 'Da ejo',
    'LNK_NEW_NOTE' => 'Seda Akosile abi Asomo',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Iṣeto ipade',
    'LNK_NEW_TASK' => 'Seda Ise',
    'LNK_NEW_APPOINTMENT' => 'Ṣẹda ipinnu lati pade',
    'LNK_IMPORT_PROSPECTS' => 'Import Targets',
    'NTC_DELETE_CONFIRMATION' => 'Se o da e loju pe o fe pa igbasile yii re?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'Nomba igbasile gbodo je pato lati pa kontati re.',
    'LBL_SALUTATION' => 'Kiki',
    'LBL_CREATED_OPPORTUNITY' => 'Ṣẹda anfani tuntun kan',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'View Targets',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Ipolongo',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Targets',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Awon ifojusi',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convert Target',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Seda kontati titun kan",
    'LBL_CAMPAIGNS' => 'Ipolongo',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Akoole Ipolongo',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Lead Id',
    'LBL_CONVERTED_LEAD' => 'Converted Lead',
    'LBL_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_EDIT_ACCOUNT_NAME' => 'Oruko Akkant:',
    'LBL_CREATED_USER' => 'Seda awon Onilo',
    'LBL_MODIFIED_USER' => 'Atunse nipa se onilo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Itan',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Awon isele',
);
