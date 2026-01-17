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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Nomba igbasile gbodo je pato lati pa ti waju re.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Account Description',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Oruko Akkant:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Akitiyan',
    'LBL_ADDRESS_INFORMATION' => 'Alaye Adiresi',
    'LBL_ALT_ADDRESS_CITY' => 'Alt Address City',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Address Country',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Address Postalcode',
    'LBL_ALT_ADDRESS_STATE' => 'Alt Address State',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt Address Street 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt Address Street 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt Address Street',
    'LBL_ALTERNATE_ADDRESS' => 'Adiresi miran:',
    'LBL_ALT_ADDRESS' => 'Adiresi miran:',
    'LBL_ANY_ADDRESS' => 'Adiresi eyikeyi:',
    'LBL_ANY_EMAIL' => 'Eyikeyi emaili:',
    'LBL_ANY_PHONE' => 'Foonu eyikeyi:',
    'LBL_ASSIGNED_TO_NAME' => 'Ayan si',
    'LBL_ASSIGNED_TO_ID' => 'Onilo ti ayan:',
    'LBL_CITY' => 'Ilu:',
    'LBL_CONTACT_ID' => 'Contact ID',
    'LBL_CONTACT_INFORMATION' => 'Isonisoki', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Oruko iwa ju:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Anfaani iwaju:',
    'LBL_CONTACT_ROLE' => 'Ipa:',
    'LBL_CONTACT' => 'Yorisi:',
    'LBL_CONVERTED_ACCOUNT' => 'Converted Account:',
    'LBL_CONVERTED_CONTACT' => 'Converted Contact:',
    'LBL_CONVERTED_OPP' => 'Converted Opportunity:',
    'LBL_CONVERTED' => 'Yipada',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Yipada iwaju',
    'LBL_CONVERTLEAD' => 'Yipada iwaju',
    'LBL_CONVERTLEAD_WARNING' => 'Ikilo: ipo asiwaju ti o fẹ lati yi pada ni "yipada". Olubasọrọ ati / tabi Awọn igbasilẹ akọọlẹ le ti wa tẹlẹ lati ṣẹda. Ti o ba fẹ lati tẹsiwaju pẹlu yiyi Iwọn pada, tẹ Fipamọ. Lati lọ pada si Ilana laisi yiyi pada, tẹ Fagilee.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Kontati to le je: ',
    'LBL_COUNTRY' => 'Orile-ede:',
    'LBL_CREATED_NEW' => 'Ṣẹda titun kan',
    'LBL_CREATED_ACCOUNT' => 'Seda accounti titun kan',
    'LBL_CREATED_CALL' => 'Seda ipe titun kan',
    'LBL_CREATED_CONTACT' => 'Seda kontati titun kan',
    'LBL_CREATED_MEETING' => 'Seda ipade titun kan',
    'LBL_CREATED_OPPORTUNITY' => 'Ṣẹda anfani tuntun kan',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Yorisi',
    'LBL_DEPARTMENT' => 'Eka:',
    'LBL_DESCRIPTION' => 'Apejuwe:',
    'LBL_DO_NOT_CALL' => 'Ma ṣe pe:',
    'LBL_DUPLICATE' => 'Itọsọna irufẹ',
    'LBL_EMAIL_ADDRESS' => 'Adiresi emaili:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Lo accounti ti o wa tẹlẹ',
    'LBL_EXISTING_CONTACT' => 'Lo kontati ti o wa tẹlẹ',
    'LBL_EXISTING_OPPORTUNITY' => 'Lo anfaani to wa tele',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_FIRST_NAME' => 'Oruko akoko:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Itan',
    'LBL_HOME_PHONE' => 'Foonu tile:',
    'LBL_IMPORT_VCARD' => 'Se agbewole vcard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new lead by importing a vCard from your file system.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Awon itosona taara',
    'LBL_LAST_NAME' => 'Oruko ikehin:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Lead Source Description:',
    'LBL_LEAD_SOURCE' => 'Orisun to siwaju:',
    'LBL_LIST_ACCEPT_STATUS' => 'Gba Ipo',
    'LBL_LIST_ACCOUNT_NAME' => 'Oruko Akkant',
    'LBL_LIST_CONTACT_NAME' => 'Oruko iwa ju',
    'LBL_LIST_CONTACT_ROLE' => 'Ipa',
    'LBL_LIST_DATE_ENTERED' => 'Ojo ti a seda',
    'LBL_LIST_EMAIL_ADDRESS' => 'Imeeli',
    'LBL_LIST_FIRST_NAME' => 'Oruko akoko',
    'LBL_LIST_FORM_TITLE' => 'Akojo iwaju',
    'LBL_LIST_LAST_NAME' => 'Oruko ikehin',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Apejuwe orisun iwaju',
    'LBL_LIST_LEAD_SOURCE' => 'Orisun to siwaju',
    'LBL_LIST_MY_LEADS' => 'Iwaju mi',
    'LBL_LIST_NAME' => 'Oruko',
    'LBL_LIST_PHONE' => 'Foonu Ofiisi',
    'LBL_LIST_REFERED_BY' => 'Referred By',
    'LBL_LIST_STATUS' => 'Ipo',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Yorisi',
    'LBL_MODULE_TITLE' => 'Leads: Home',
    'LBL_NAME' => 'Oruko:',
    'LBL_NEW_FORM_TITLE' => 'Asiwaju titun',
    'LBL_OFFICE_PHONE' => 'Foonu Ofiisi:',
    'LBL_OPP_NAME' => 'Oruko anfani:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Iye anfani:',
    'LBL_OPPORTUNITY_ID' => 'Opportunity ID',
    'LBL_OPPORTUNITY_NAME' => 'Oruko anfani:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Emaili awon omiran:',
    'LBL_OTHER_PHONE' => 'Foonu miiran:',
    'LBL_PHONE' => 'Foonu:',
    'LBL_PORTAL_APP' => 'Portal Application',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Koodu ifiweranse:',
    'LBL_STREET' => 'Opopona',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adiresi Ilu akoko',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adiresi Orile-ede akoko',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adiresi Ipinle akoko',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Akoko Adiresi opopona keji',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Akoko Adiresi opopona keta',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Akoko Adiresi adugbo',
    'LBL_PRIMARY_ADDRESS' => 'Adiresi akoko:',
    'LBL_REFERED_BY' => 'Referred By:',
    'LBL_REPORTS_TO_ID' => 'Reports To ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Kiki',
    'LBL_MODIFIED' => 'Se iyipada nipasẹ',
    'LBL_CREATED' => 'Siseda nipa',
    'LBL_SEARCH_FORM_TITLE' => 'Lead Search',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'Ipinle tabi Agbegbe:',
    'LBL_STATUS_DESCRIPTION' => 'Status Description:',
    'LBL_STATUS' => 'Ipo:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Create Lead From vCard',
    'LNK_LEAD_LIST' => 'View Leads',
    'LNK_NEW_ACCOUNT' => 'Seda akkant',
    'LNK_NEW_APPOINTMENT' => 'Ṣẹda ipinnu lati pade',
    'LNK_NEW_CONTACT' => 'Seda Olubasoro',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_NOTE' => 'Seda akosile',
    'LNK_NEW_TASK' => 'Seda Ise',
    'LNK_NEW_CASE' => 'Da ejo',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Iṣeto ipade',
    'LNK_NEW_OPPORTUNITY' => 'Seda Anfani',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Se o da e loju pe o fe pa igbasile yii re?',
    'NTC_REMOVE_CONFIRMATION' => 'Ṣe o da ọ loju pe o fẹ yọ asiwaju yi kuro ninu ọran yii?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ipolongo',
    'LBL_CAMPAIGN' => 'Ipolongo:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Onilo ti ayan',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'Ipolongo',
    'LBL_BIRTHDATE' => 'Ojo ibi:',
    'LBL_ASSISTANT_PHONE' => 'Iranlowo Foonu',
    'LBL_ASSISTANT' => 'Iranlowo',
    'LBL_CREATED_USER' => 'Seda awon Onilo',
    'LBL_MODIFIED_USER' => 'Atunse nipa se onilo',
    'LBL_CAMPAIGNS' => 'Ipolongo',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Ti beere',
    'LBL_CONVERT_SELECT' => 'Gba yiyan',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Satunko',
    'LBL_CONVERT_DELETE' => 'Paare',
    'LBL_CONVERT_ADD_MODULE' => 'Add Module',
    'LBL_CREATE' => 'Seda',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Import Leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'Ti o ba ṣayẹwo, awọn aaye lati ọdọ yoo wa ni dakọ si awọn aaye pẹlu orukọ kanna ni awọn iwe-ipilẹ tuntun ti a ṣẹda.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Gbe awon siṣe si',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Ṣatunkọ Aṣayan' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Fi deeti si' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ikojopo' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Satunko' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Awon isele',
);
