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
    'LBL_MODULE_NAME' => 'ඉලක්ක',
    'LBL_MODULE_ID' => 'ඉලක්ක',
    'LBL_INVITEE' => 'සෘජු වාර්තා',
    'LBL_MODULE_TITLE' => 'ඉලක්ක: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'ඉලක්ක සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'ඉලක්ක ලැයිස්තුව',
    'LBL_NEW_FORM_TITLE' => 'නව ඉලක්ක',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_LAST_NAME' => 'අවසන් නම',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'විද්යුත් තැපෑල',
    'LBL_LIST_PHONE' => 'දුරකතන',
    'LBL_LIST_FIRST_NAME' => 'මුල් නම',
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_ASSIGNED_TO_ID' => ' කිරීම සඳහා පවරා:',
    'LBL_CAMPAIGN_ID' => 'ව්යාපාරය හැඳුනුම්',
    'LBL_EXISTING_ACCOUNT' => 'දැනට පවතින ගිණුම භාවිතා',
    'LBL_CREATED_ACCOUNT' => 'නව ගිණුමක් නිර්මාණය',
    'LBL_CREATED_CALL' => 'නව ඇමතුම් නිර්මාණය',
    'LBL_CREATED_MEETING' => 'නව රැස්වීම නිර්මාණය',
    'LBL_NAME' => 'නම:',
    'LBL_PROSPECT_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'වැඩිදුර තොරතුරු',
    'LBL_FIRST_NAME' => 'මුල් නම:',
    'LBL_OFFICE_PHONE' => 'කාර්යාලය දුරකථන:',
    'LBL_ANY_PHONE' => 'ඕනෑම දුරකථනයක්:',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_LAST_NAME' => 'අවසන් නම:',
    'LBL_MOBILE_PHONE' => 'ජංගම:',
    'LBL_HOME_PHONE' => 'ගෙදර:',
    'LBL_OTHER_PHONE' => 'වෙනත් දුරකථන:',
    'LBL_FAX_PHONE' => 'ෆැක්ස්:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ප්රාථමික ලිපිනය වීදිය:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ප්රාථමික ලිපිනය නගරය:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ප්රාථමික ලිපිනය රට:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ප්රාථමික ලිපිනය රාජ්ය:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ප්රාථමික ලිපිනය තැපැල් සංකේතය:',
    'LBL_ALT_ADDRESS_STREET' => 'විකල්ප ලිපිනය වීදිය:',
    'LBL_ALT_ADDRESS_CITY' => 'විකල්ප ලිපිනය නගරය:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'විකල්ප ලිපිනය රට:',
    'LBL_ALT_ADDRESS_STATE' => 'විකල්ප ලිපිනය රාජ්ය:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'විකල්ප ලිපිනය තැපැල් සංකේතය:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'දෙපාර්තමේන්තුවට:',
    'LBL_BIRTHDATE' => 'උපන්දිනය:',
    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'වෙනත් විද්යුත් තැපෑල:',
    'LBL_ANY_EMAIL' => 'ඕනෑම වි-තැපෑලක්:',
    'LBL_ASSISTANT' => 'සහකාර:',
    'LBL_ASSISTANT_PHONE' => 'සහකාර දුරකථන:',
    'LBL_DO_NOT_CALL' => 'අමතන්න කරන්න එපා:',
    'LBL_EMAIL_OPT_OUT' => 'විද්යුත් ඉවත්:',
    'LBL_PRIMARY_ADDRESS' => 'ප්රාථමික ෙමරට ලිපිනය:',
    'LBL_ALTERNATE_ADDRESS' => 'වෙනත් ෙමරට ලිපිනය:',
    'LBL_ANY_ADDRESS' => 'ඕනෑම ලිපිනයක්:',
    'LBL_CITY' => 'නගරය:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය:',
    'LBL_COUNTRY' => 'රට:',
    'LBL_ADDRESS_INFORMATION' => 'ලිපිනයේ තොරතුරු',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_OPP_NAME' => 'අවස්ථාව නම:',
    'LBL_IMPORT_VCARD' => ' ආනයන පත',
    'LBL_IMPORT_VCARDTEXT' => 'ස්වයංක්රීයව ඔබේ ගොනු පද්ධතිය සිට පත ආනයනය විසින් නව සබඳතා නිර්මාණය කරන්න.',
    'LBL_DUPLICATE' => 'හැකි දෙවන පිටපත ඉලක්ක',
    'MSG_SHOW_DUPLICATES' => 'ඔබ නිර්මාණය කිරීමට නියමිත ඉලක්කය වාර්තා දැනටමත් පවතින ඉලක්කයක් වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහ / හෝ විද්යුත් තැපැල් ලිපිනය අඩංගු ඉලක්ක වාර්තා පහත ලැයිස්තු ගත කර ඇත. මෙම නව ඉලක්කයක් නිර්මානය දිගටම ඉලක්ක Create ක්ලික් කරන්න, හෝ පහත ලැයිස්තු ගත කර, දැනට පවතින ඉලක්කය තෝරා <br>.',
    'MSG_DUPLICATE' => 'ඔබ නිර්මාණය කිරීමට නියමිත ඉලක්කය වාර්තා දැනටමත් පවතින ඉලක්කයක් වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහ / හෝ විද්යුත් තැපැල් ලිපිනය පහත ලැයිස්තු ගත කර ඇත අඩංගු ඉලක්ක වාර්තා. මෙම නව ඉලක්කයක් නිර්මානය දිගටම Save ක්ලික් කරන්න, හෝ ඉලක්කය නිර්මාණය නොකර මොඩියුලය නැවත අවලංගු කරන්න ක්ලික් කරන්න <br>.',
    'LNK_IMPORT_VCARD' => 'Vcard සිට නිර්මාණය',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_EMAIL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_APPOINTMENT' => 'පත් නිර්මාණය',
    'LNK_IMPORT_PROSPECTS' => 'ආනයන ඉලක්ක',
    'NTC_DELETE_CONFIRMATION' => 'ඔබ මෙම වාර්තාව මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'NTC_REMOVE_CONFIRMATION' => 'ඔබ මෙම නඩුව සිට මෙම සබඳතා ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'ERR_DELETE_RECORD' => 'වාර්තාගත ස්පර්ශ මැකීමට නියම කළ යුතු ය.',
    'LBL_SALUTATION' => 'ආචාර',
    'LBL_CREATED_OPPORTUNITY' => 'නව අවස්ථාවක් නිර්මාණය',
    'LNK_SELECT_ACCOUNT' => " ගිණුම තෝරන්න",
    'LNK_NEW_PROSPECT' => 'ඉලක්ක නිර්මාණය',
    'LNK_PROSPECT_LIST' => 'දැක්ම ඉලක්ක',
    'LNK_NEW_CAMPAIGN' => 'ව්යාපාරය නිර්මාණය කරන්න',
    'LNK_CAMPAIGN_LIST' => 'ප්රචාරණ ව්යාපාර',
    'LNK_NEW_PROSPECT_LIST' => 'ඉලක්ක ලැයිස්තුවක් නිර්මාණය',
    'LNK_PROSPECT_LIST_LIST' => 'ඉලක්ක ලැයිස්තු',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'ජීවත්වන ව්යවස්ථාවකි ඉලක්ක තෝරන්න',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'ජීවත්වන ව්යවස්ථාවකි ඉලක්ක තෝරන්න',
    'LBL_INVALID_EMAIL' => 'වලංගු නොවන විද්යුත් තැපෑල:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ඉලක්ක',
    'LBL_PROSPECT_LIST' => 'අනාගත ලැයිස්තුව',
    'LBL_CONVERT_BUTTON_TITLE' => 'ඉලක්ක බවට පත්',
    'LBL_CONVERT_BUTTON_LABEL' => 'ඉලක්ක බවට පත්',
    'LNK_NEW_CONTACT' => 'නව අමතන්න',
    'LBL_CREATED_CONTACT' => "නව සබඳතා නිර්මාණය",
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'ව්යාපාරය ලොග්',
    'LBL_TRACKER_KEY' => 'ට්රැකර් කී',
    'LBL_LEAD_ID' => 'ඊයම් අංකය',
    'LBL_CONVERTED_LEAD' => 'පරිවර්තනය කරන ඊයම්',
    'LBL_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_EDIT_ACCOUNT_NAME' => 'ගිණුමේ නම:',
    'LBL_CREATED_USER' => 'නිර්මාණය කරන ලද්දේ පරිශීලක',
    'LBL_MODIFIED_USER' => 'නවීකරණය කරන ලද පරිශීලක',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'සිද්ධීන්',
);
