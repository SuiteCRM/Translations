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
    'ERR_DELETE_RECORD' => 'ස්පර්ශ ඉවත් කිරීමට සඳහා වාර්තාගත සඳහන් කරන්න.',
    'LBL_ACCOUNT_ID' => 'ගිණුම ID:',
    'LBL_ACCOUNT_NAME' => 'ගිණුමේ නම:',
    'LBL_CAMPAIGN' => 'ව්යාපාරය:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_ALT_ADDRESS_CITY' => 'විකල්ප ලිපිනය නගරය:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'විකල්ප ලිපිනය රට:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'විකල්ප ලිපිනය තැපැල් සංකේතය:',
    'LBL_ALT_ADDRESS_STATE' => 'විකල්ප ලිපිනය රාජ්ය:',
    'LBL_ALT_ADDRESS_STREET_2' => 'විකල්ප ලිපිනය වීදිය 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'විකල්ප ලිපිනය වීදිය 3:',
    'LBL_ALT_ADDRESS_STREET' => 'විකල්ප ලිපිනය වීදිය:',
    'LBL_ALTERNATE_ADDRESS' => 'වෙනත් ෙමරට ලිපිනය:',
    'LBL_ALT_ADDRESS' => 'වෙනත් ෙමරට ලිපිනය:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක',
    'LBL_ASSISTANT_PHONE' => 'සහකාර දුරකථන:',
    'LBL_ASSISTANT' => 'සහකාර:',
    'LBL_BIRTHDATE' => 'උපන්දිනය:',
    'LBL_CITY' => 'නගරය:',
    'LBL_CAMPAIGN_ID' => 'ව්යාපාරය හැඳුනුම්',
    'LBL_CONTACT_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'සබඳතාවේ නම:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'අමතන්න-අවස්ථාවක්:',
    'LBL_CONTACT_ROLE' => 'කාර්යභාරය:',
    'LBL_CONTACT' => 'සබඳතාව:',
    'LBL_COUNTRY' => 'රට:',
    'LBL_CREATED_ACCOUNT' => 'නව ගිණුමක් නිර්මාණය',
    'LBL_CREATED_CALL' => 'නව ඇමතුම් නිර්මාණය',
    'LBL_CREATED_CONTACT' => 'නව සබඳතා නිර්මාණය',
    'LBL_CREATED_MEETING' => 'නව රැස්වීම නිර්මාණය',
    'LBL_CREATED_OPPORTUNITY' => 'නව අවස්ථාවක් නිර්මාණය',
    'LBL_DATE_MODIFIED' => 'දිනය නවීකරණය කරන ලද:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_DEPARTMENT' => 'දෙපාර්තමේන්තුවට:',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'සෘජු වාර්තා',
    'LBL_DO_NOT_CALL' => 'අමතන්න කරන්න එපා:',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත අප අමතන්න',
    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය:',
    'LBL_EMAIL_OPT_OUT' => 'විද්යුත් ඉවත්:',
    'LBL_EXISTING_ACCOUNT' => 'දැනට පවතින ගිණුම භාවිතා',
    'LBL_EXISTING_CONTACT' => 'දැනට පවතින ගිණුම භාවිතා',
    'LBL_EXISTING_OPPORTUNITY' => 'දැනට පවතින අවස්ථාව යොදා',
    'LBL_FAX_PHONE' => 'ෆැක්ස්:',
    'LBL_FIRST_NAME' => 'මුල් නම:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',
    'LBL_HOME_PHONE' => 'ගෙදර:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => ' ආනයන පත',
    'LBL_VCARD' => 'පත',
    'LBL_IMPORT_VCARDTEXT' => 'ස්වයංක්රීයව ඔබේ ගොනු පද්ධතිය සිට පත ආනයනය විසින් නව සබඳතා නිර්මාණය කරන්න.',
    'LBL_INVALID_EMAIL' => 'වලංගු නොවන විද්යුත් තැපෑල:',
    'LBL_INVITEE' => 'සෘජු වාර්තා',
    'LBL_LAST_NAME' => 'අවසන් නම:',
    'LBL_LEAD_SOURCE' => 'ඊයම් මූලාශ්රය:',
    'LBL_LIST_ACCEPT_STATUS' => 'තත්ත්වය පිළිගන්න',
    'LBL_LIST_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_LIST_CONTACT_NAME' => 'සබඳතාවේ නම',
    'LBL_LIST_CONTACT_ROLE' => 'කාර්යභාරය',
    'LBL_LIST_EMAIL_ADDRESS' => 'විද්යුත් තැපෑල',
    'LBL_LIST_FIRST_NAME' => 'මුල් නම',
    'LBL_LIST_FORM_TITLE' => ' ඇමතුම් ලැයිස්තුව',
    'LBL_LIST_LAST_NAME' => 'අවසන් නම',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_PHONE' => 'කාර්යාලය දුරකථන',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'ජංගම:',
    'LBL_MODIFIED' => 'වන විට නවීකරණය කරන ලද:',
    'LBL_MODULE_NAME' => 'සබඳතා',
    'LBL_MODULE_TITLE' => 'අප අමතන්න: මුල් පිටුව',
    'LBL_NAME' => 'නම:',
    'LBL_NEW_FORM_TITLE' => 'නව අමතන්න',
    'LBL_NOTE_SUBJECT' => 'සටහන යට යට ව',
    'LBL_OFFICE_PHONE' => 'කාර්යාලය දුරකථන:',
    'LBL_OPP_NAME' => 'අවස්ථාව නම:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'අවස්ථාව කාර්යභාරය ID:',
    'LBL_OPPORTUNITY_ROLE' => 'අවස්ථාව කාර්යභාරය',
    'LBL_OTHER_EMAIL_ADDRESS' => 'වෙනත් විද්යුත් තැපෑල:',
    'LBL_OTHER_PHONE' => 'වෙනත් දුරකථන:',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_PORTAL_APP' => 'ද්වාරය අයදුම්:',
    'LBL_PORTAL_INFORMATION' => 'ද්වාරය තොරතුරු',
    'LBL_PORTAL_NAME' => 'ද්වාරය නම:',
    'LBL_STREET' => 'වීදිය',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ප්රාථමික ලිපිනය නගරය:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ප්රාථමික ලිපිනය රට:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ප්රාථමික ලිපිනය තැපැල් සංකේතය:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ප්රාථමික ලිපිනය රාජ්ය:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ප්රාථමික ලිපිනය වීදිය 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ප්රාථමික ලිපිනය වීදිය 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ප්රාථමික ලිපිනය වීදිය:',
    'LBL_PRIMARY_ADDRESS' => 'ප්රාථමික ෙමරට ලිපිනය:',
    'LBL_PRODUCTS_TITLE' => 'නිෂ්පාදන',
    'LBL_REPORTS_TO_ID' => 'ID අංකය වාර්තා:',
    'LBL_REPORTS_TO' => 'වාර්තා කිරීම සඳහා:',
    'LBL_RESOURCE_NAME' => 'සම්පත් නම',
    'LBL_SALUTATION' => 'ආචාර:',
    'LBL_SAVE_CONTACT' => 'ඇමතුම් සුරකින්න',
    'LBL_SEARCH_FORM_TITLE' => 'ඇමතුම් සොයන්න',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'ජීවත්වන ව්යවස්ථාවකි අප අමතන්න තෝරන්න',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'ජීවත්වන ව්යවස්ථාවකි අප අමතන්න තෝරන්න',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'ඉදිරි දැක්මක් සහිතව වලට කඳුලුත් පිරෙනවා සමමුහුර්ත;:',
    'LBL_PROSPECT_LIST' => 'අනාගත ලැයිස්තුව',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'දැක්ම අප අමතන්න',
    'LNK_IMPORT_VCARD' => 'පත සිට අමතන්න සාදන්න',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'LNK_NEW_APPOINTMENT' => 'පත් නිර්මාණය',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_CONTACT' => 'ඇමතුම් සාදන්න',
    'LNK_NEW_EMAIL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_NOTE' => 'සටහන නිර්මාණය',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_SELECT_ACCOUNT' => " ගිණුම තෝරන්න",
    'NTC_DELETE_CONFIRMATION' => 'ඔබ මෙම වාර්තාව මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'අවස්ථාවක් නිර්මාණය ගිණුමක් අවශ්ය වේ. \ N එක්කෝ සතුටු කර නව ගිණුමක් සාදා හෝ පවතින එක් තෝරන්න.',
    'NTC_REMOVE_CONFIRMATION' => 'ඔබ මෙම නඩුව සිට මෙම සබඳතා ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ලිපි ලේඛන',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'ප්රාථමික ලිපිනය පිටපත් කරන්න',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'තවත් ලිපිනය පිටපත් කරන්න',

    'LBL_CASES_SUBPANEL_TITLE' => ' නඩු',
    'LBL_BUGS_SUBPANEL_TITLE' => ' බග්ස්',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_PROJECTS_RESOURCES' => 'ව්යාපෘති සම්පත්',
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'ප්රචාරණ ව්යාපාර',
    'LBL_LIST_CITY' => 'නගරය',
    'LBL_LIST_STATE' => 'රජයේ',
    'LBL_HOMEPAGE_TITLE' => 'මගේ සම්බන්ධතා',
    'LBL_OPPORTUNITIES' => 'අවස්ථා',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LNK_IMPORT_CONTACTS' => 'ආනයන අප අමතන්න',

    // SNIP
    'LBL_USER_SYNC' => 'පරිශීලක සමමුහුර්ත කරන්න',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'සිද්ධීන්',

    'LBL_AOP_CASE_UPDATES' => 'නඩු යාවත්කාලීන',
    'LBL_CREATE_PORTAL_USER' => 'ද්වාරය පරිශීලක සාදන්න',
    'LBL_ENABLE_PORTAL_USER' => 'ද්වාරය පරිශීලක සක්රිය කරන්න',
    'LBL_DISABLE_PORTAL_USER' => 'ද්වාරය පරිශීලක අක්රීය',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'ද්වාරය පරිශීලක නිර්මාණය කිරීම අසාර්ථකයි',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'ද්වාරය පරිශීලක සක්රීය කිරීම අසාර්ථක විය',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'ද්වාරය පරිශීලක අක්රිය කිරීමට නොහැකි විය',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'නිර්මාණය කරන ලද්දේ බිහිදොර පරිශීලක',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'සක්රීය බිහිදොර පරිශීලක',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'ආබාධිත බිහිදොර පරිශීලක',
    'LBL_NO_JOOMLA_URL' => 'දක්වා නොමැත බිහිදොර URL එක',
    'LBL_PORTAL_USER_TYPE' => 'ද්වාරය පරිශීලක වර්ගය',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'ගිණුම ආබාධිත',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account ID',

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_AOS_INVOICES' => 'ඉන්වොයිසි',
    'LBL_AOS_QUOTES' => 'මිල කැඳවීම්',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'ඇරයුමෙහි තත්වය',
);
