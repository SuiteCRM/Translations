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
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක අංකය',
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_ID' => 'හැඳු.',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NAME' => 'නම',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_LIST_NAME' => 'නම',
    'LBL_EDIT_BUTTON' => 'සංස්කරණය',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_LIST_FORM_TITLE' => 'අවස්ථාවට ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'අවස්ථාවට',
    'LBL_MODULE_TITLE' => 'අවස්ථාවට',
    'LBL_HOMEPAGE_TITLE' => 'මගේ Event',
    'LNK_NEW_RECORD' => 'Event සාදන්න',
    'LNK_LIST' => 'දැක්ම සිදුවීම්',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න Event',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_NEW_FORM_TITLE' => 'නව සිද්ධිය',
    'LBL_LOCATION' => 'පිහිටීම',
    'LBL_START_DATE' => 'ආරම්භක දිනය',
    'LBL_END_DATE' => 'අවසානය දිනය / වේලාව',
    'LBL_BUDGET' => 'අයවැය',
    'LBL_DATE' => 'ආරම්භක දිනය',
    'LBL_DATE_END' => 'අවසාන දිනය',
    'LBL_DURATION' => 'කාල සීමාව',
    'LBL_INVITE_TEMPLATES' => 'විද්යුත් සැකිල්ල ඇරයුම් කරන්න',
    'LBL_INVITE_PDF' => 'ආරාධනා යවන්න',
    'LBL_EDITVIEW_PANEL1' => 'අවස්ථාවට විස්තර',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'නියෝජිත',
    'LBL_ACCEPT_REDIRECT' => 'යළි-යොමුවීම් URL එක පිළිගන්න',
    'LBL_DECLINE_REDIRECT' => 'යළි-යොමුවීම් URL එක ප්රතික්ෂේප',
    'LBL_SELECT_DELEGATES' => 'නියෝජිත තෝරන්න',
    'LBL_SELECT_DELEGATES_TITLE' => 'නියෝජිත තෝරන්න: -',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'ඉලක්ක ලැයිස්තුව',
    'LBL_SELECT_DELEGATES_TARGETS' => 'ඉලක්ක',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'සබඳතා',
    'LBL_SELECT_DELEGATES_LEADS' => 'ඇද්ද',
    'LBL_MANAGE_DELEGATES' => 'නියෝජිත කළමනාකරණය',
    'LBL_MANAGE_DELEGATES_TITLE' => 'නියෝජිත කළමනාකරණය: -',
    'LBL_MANAGE_ACCEPTANCES' => 'පිළිගන්නා කළමනාකරණය',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'පිළිගන්නා කළමනාකරණය: -',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'පිළිගත්',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'පහත වැටීම',
    'LBL_MANAGE_POPUP_ERROR' => 'මෙයට නියෝජිතයින් තෝරා ගෙන ඇත.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'ආරාධනා',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'ආරාධිත නොවේ',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'සහභාගි',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'සහභාගී නොවේ',
    'LBL_SUCCESS_MSG' => 'සියළු ඉන්වොයිසිවල සාර්ථකව යොමු කර තිබේ.',
    'LBL_ERROR_MSG_1' => 'සියලුම සම්බන්ධිත සබඳතා දැනටමත් ආරාධනා කර තිබේ.',
    'LBL_ERROR_MSG_2' => 'ආරාධනා විද්යුත් තැපැල් යැවීම අසාර්ථක වී ඇත! ඔබගේ ඊ-තැපැල් ලිපිනය සැකසුම් පරීක්ෂා කරන්න.',
    'LBL_ERROR_MSG_3' => '10 කට වඩා වැඩි ඊ-තැපැල් යැවීමට අසමත් වී ඇත. ඔබ ආරාධනා කරන්නේ සියලු සම්බන්ධතා, වලංගු විද්යුත්-තැපැල් ලිපිනයක් ඇති බව පරීක්ෂා කරන්න. (Sitecore.log බලන්න)',
    'LBL_ERROR_MSG_4' => ' ඊ-තැපැල් යැවීමට අසමත් වී ඇත. ඔබ ආරාධනා කරන්නේ සියලු සම්බන්ධතා, වලංගු විද්යුත්-තැපැල් ලිපිනයක් ඇති බව පරීක්ෂා කරන්න. (Sitecore.log බලන්න)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'වලංගු නොවන විද්යුත් සැකිල්ල',
    'LBL_EMAIL_INVITE' => 'විද්යුත් ඇරයුම් කරන්න',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'සබඳතා',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'ස්ථාන',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'ඇද්ද',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'ඉලක්ක',

    'LBL_HOURS_ABBREV' => 'ඌ',
    'LBL_MINSS_ABBREV' => 'එම්',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'නියෝජිත',

    // Attendance report
    'LBL_CONTACT_NAME' => 'නම',
    'LBL_ACCOUNT_NAME' => 'සමාගම',
    'LBL_SIGNATURE' => '	අත්සන',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'ආරාධනා',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'තත්වය',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'පිළිගන්න',
    'LBL_DECLINE_LINK' => 'පහත වැටීම',
    
);
