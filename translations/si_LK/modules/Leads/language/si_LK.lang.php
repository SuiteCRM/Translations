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

    'ERR_DELETE_RECORD' => 'වාර්තාගත පෙරමුණ ඉවත් කිරීමට නියම කළ යුතු ය.',
    'LBL_ACCOUNT_DESCRIPTION' => 'ගිණුම විස්තරය',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'කටයුතු',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ALT_ADDRESS_CITY' => 'Alt ලිපිනය නගරය',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt ලිපිනය රටේ',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt ලිපිනය Postalcode',
    'LBL_ALT_ADDRESS_STATE' => 'Alt ලිපිනය රාජ්ය',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt ලිපිනය වීදිය 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt ලිපිනය වීදිය 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt ලිපිනය වීදිය',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'ඇමතුම් හැඳුනුම්',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'ඊයම් නම:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'නායකත්වය-අවස්ථාවක්:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'ඊයම්:',
    'LBL_CONVERTED_ACCOUNT' => 'පරිවර්තනය කරන ගිණුම:',
    'LBL_CONVERTED_CONTACT' => 'පරිවර්තනය කරන අමතන්න:',
    'LBL_CONVERTED_OPP' => 'පරිවර්තනය කරන අවස්ථාවක්:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => ' V වන',
    'LBL_CONVERTLEAD_TITLE' => 'ඊයම් පරිවර්තනය',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'අවවාදයයි: ඔබ බවට පරිවර්තනය කිරීමට ගැන වේ පෙරමුණ තත්ත්වය "බවට පරිවර්තනය" ඇත. ඇමතුම් සහ / හෝ ගිණුමේ වාර්තා දැනටමත් පෙරමුණ සිට නිර්මාණය සිදු කර ඇතිවා විය හැක. ඔබ පෙරමුණ පරිවර්තනය දිගටම කරගෙන යාමට අදහස් කරන්නේ නම්, සුරකින්න ක්ලික් කරන්න. පරිවර්තනය තොරව ආපසු පෙරමුණ යන්න, අවලංගු කරන්න ක්ලික් කරන්න.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' හැකි අමතන්න:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'නව නිර්මාණය',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'සමාන ඇද්ද',
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
    'LBL_IMPORT_VCARDTEXT' => 'ස්වයංක්රීයව ඔබේ ගොනු පද්ධතිය සිට පත ආනයනය විසින් නව පෙරමුණ නිර්මාණය කරන්න.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'ඊයම් ප්රභවය විස්තරය:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'තත්ත්වය පිළිගන්න',
    'LBL_LIST_ACCOUNT_NAME' => ' ගිණුමේ නම',
    'LBL_LIST_CONTACT_NAME' => 'ඊයම් නම',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_LIST_EMAIL_ADDRESS' => 'වි-තැපෑල',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'ඊයම් ලැයිස්තුව',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'ඊයම් ප්රභවය විස්තරය',
    'LBL_LIST_LEAD_SOURCE' => 'ඊයම් ප්රභවය',
    'LBL_LIST_MY_LEADS' => 'මගේ ඇද්ද',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'යොමු කරන ලද්දේ',
    'LBL_LIST_STATUS' => 'තත්ත්වය',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'ඇද්ද',
    'LBL_MODULE_TITLE' => 'ආදර්ශ: මුල් පිටුව',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'නව ඊයම්',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'අවස්ථාව ප්රමාණය:',
    'LBL_OPPORTUNITY_ID' => 'අවස්ථාව හැඳුනුම්',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'ද්වාරය අයදුම්',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ප්රාථමික ලිපිනය නගරය',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ප්රාථමික ලිපිනය රටේ',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ප්රාථමික ලිපිනය Postalcode',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ප්රාථමික ලිපිනය රාජ්ය',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ප්රාථමික ලිපිනය වීදිය 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ප්රාථමික ලිපිනය වීදිය 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ප්රාථමික ලිපිනය වීදිය',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'යොමු කරන ලද්දේ:',
    'LBL_REPORTS_TO_ID' => 'හැඳුනුම් කිරීම වාර්තා',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'නිර්මාණය කළේ',
    'LBL_SEARCH_FORM_TITLE' => 'ඊයම් සොයන්න',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'ජීවත්වන ව්යවස්ථාවකි ඇද්ද තෝරන්න',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'තත්වය විස්තරය:',
    'LBL_STATUS' => 'තත්ත්වය:',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'පත සිට ඊයම් සාදන්න',
    'LNK_LEAD_LIST' => 'අදහස මග',
    'LNK_NEW_ACCOUNT' => 'ගිණුම සාදන්න',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'සබඳතාවය සාදන්න',
    'LNK_NEW_LEAD' => ' ඊයම් සාදන්න',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_SELECT_ACCOUNTS' => ' <b> හෝ </ b> තේරීම් ගිණුම',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'ඔබ මෙම නඩුව සිට මෙම ඊයම් ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CAMPAIGN_LEAD' => 'ප්රචාරණ ව්යාපාර',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'අවශ්‍යයි',
    'LBL_CONVERT_SELECT' => 'තේරීම් ඉඩ දෙන්න',
    'LBL_CONVERT_COPY' => 'දත්ත පිටපත්',
    'LBL_CONVERT_EDIT' => '  සංස්කරණය',
    'LBL_CONVERT_DELETE' => 'මකා',
    'LBL_CONVERT_ADD_MODULE' => 'මොඩියුලය එකතු කරන්න',
    'LBL_CREATE' => 'සාදන්න',
    'LBL_SELECT' => ' <b> හෝ </ b> තෝරන්න',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'ආනයන ඇද්ද',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'නව වාර්තාවක් නිර්මාණය කිරීමට මොඩියුලය.',
    'LBL_REQUIRED_TIP' => 'පෙරමුණ පරිවර්තනය කළ හැක පෙර අවශ්ය මොඩියුල නිර්මාණය හෝ තෝරා ගත යුතු ය.',
    'LBL_COPY_TIP' => 'පරීක්ෂා නම්, ඊයම් ක්ෂේත්ර අලුතින් නිර්මාණය වාර්තා එකම නම සමඟ ක්ෂේත්ර වෙත පිටපත් කිරීමට නියමිතය.',
    'LBL_SELECTION_TIP' => 'අප අමතන්න දී සම්බන්ධ ක්ෂේත්රය සමග මොඩියුල මේ ආගමට හරවා පෙරමුණ ක්රියාවලිය තුළ තෝරා ගත් වෙනුවට නිර්මාණය කිරීම ද කළ හැක.',
    'LBL_EDIT_TIP' => 'මෙම මොඩියුලය සඳහා ආගමට හරවා සැකසුම වෙනස් කරන්න.',
    'LBL_DELETE_TIP' => 'මෙම ආගමට හරවා සැකැස්ම සිට මෙම මොඩියුලය ඉවත් කරන්න.',

    'LBL_ACTIVITIES_MOVE' => 'කිරීමට කටයුතු ගෙන යන්න',
    'LBL_ACTIVITIES_COPY' => 'පිටපත් ක්රියාකාරකම් සඳහා',
    'LBL_ACTIVITIES_MOVE_HELP' => "පෙරමුණ ක්රියාකාරකම් ගමන් කිරිම සඳහා වාර්තා තෝරන්න. කර්තව්යයෝ",
    'LBL_ACTIVITIES_COPY_HELP' => "පෙරමුණ ක්රියාකාරකම් පිටපත් නිර්මාණය කිරීමට සඳහා වූ වාර්තාව (ව) තෝරන්න. නව කර්තව්යයෝ",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'පිරිසැලසුම සංස්කරණය' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '  සංස්කරණය' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
