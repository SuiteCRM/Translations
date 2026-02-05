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
    'LBL_SAVING' => 'ඉතිරිය ...',
    'LBL_SAVED' => ' දිවි ගළවාගත්',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_LIST_FORM_TITLE' => 'ආහාර ලැයිස්තුව',
    'LBL_MODULE_NAME' => 'ක්රියාකාරකම් දහරා',
    'LBL_MODULE_TITLE' => 'ක්රියාකාරකම් දහරා',
    'LBL_DASHLET_DISABLED' => 'අවවාදයයි: මෙම කැවීම් පද්ධතිය ම එය ක්රියාත්මක කරන තෙක් කිසිදු නව ආහාර ඇතුළත් කිරීම් පල කෙරෙනු ඇත, ආබාධිත වේ',
    'LBL_RECORDS_DELETED' => 'මෙම කැවීම් පද්ධතිය සක්රිය කරන්නේ නම් සියලුම පෙර කැවීම් සටහන් ඇතුළත් කිරීම්, ඉවත් කර ඇත, නව ඇතුළත් කිරීම් ස්වයංක්රීයව නිර්මානය වනු ඇත.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'ඔබ කැවීම් සියලු ඇතුළත් කිරීම් ඉවත් කිරීමට කැමති බව ඔබට විශ්වාස ද?',
    'LBL_FLUSH_RECORDS' => 'කැවීම් අයැදුම්පත් Delete',
    'LBL_ENABLE_FEED' => 'මගේ ක්රියාකාරකම් විෂය ධාරාව Dashlet සක්රිය කරන්න',
    'LBL_ENABLE_MODULE_LIST' => 'සක්රීය සංග්රහ',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ක්රියාකාරකම් විෂය ධාරාව',
    'LNK_NEW_RECORD' => 'කැවීම් නිර්මාණය',
    'LNK_LIST' => 'ආහාර',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න කැවීම්',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_NEW_FORM_TITLE' => 'නව කැවීම්',
    'LBL_ALL' => 'සියලු',
    'LBL_USER_FEED' => 'පරිශීලක කැවීම්',
    'LBL_ENABLE_USER_FEED' => 'පරිශීලක කැවීම් සක්රීය',
    'LBL_TO' => 'කණ්ඩායම දර්ශනය',
    'LBL_IS' => 'වේ',
    'LBL_DONE' => 'හරි',
    'LBL_TITLE' => 'සිරැසිය',
    'LBL_ROWS' => 'පේළි',
    'LBL_CATEGORIES' => 'මොඩියුල',
    'LBL_TIME_LAST_WEEK' => 'පසුගිය සතිය',
    'LBL_TIME_WEEKS' => 'weeks',
    'LBL_TIME_DAYS' => 'දවස්',
    'LBL_TIME_YESTERDAY' => 'ඊයේ',
    'LBL_TIME_HOURS' => 'පැය',
    'LBL_TIME_HOUR' => 'පැය',
    'LBL_TIME_MINUTES' => 'විනාඩි',
    'LBL_TIME_MINUTE' => 'ව්යවස්ථාව',
    'LBL_TIME_SECONDS' => 'තත්පර',
    'LBL_TIME_SECOND' => 'දෙවැනි',
    'LBL_TIME_AND' => 'සහ',
    'LBL_TIME_AGO' => 'පෙර',
// Activity stream
    'CREATED_CONTACT' => 'එය, <b> නව </ b> නිර්මාණය {0}',
    'CREATED_OPPORTUNITY' => 'එය, <b> නව </ b> නිර්මාණය {0}',
    'CREATED_CASE' => 'එය, <b> නව </ b> නිර්මාණය {0}',
    'CREATED_LEAD' => 'එය, <b> නව </ b> නිර්මාණය {0}',
    'FOR' => 'වෙනුවෙන්', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b> වසා ඇති </ b> ඇති { 0} ',
    'CONVERTED_LEAD' => '<b> ඇති {0} </ b> බවට පරිවර්තනය',
    'WON_OPPORTUNITY' => '<b> දිනා ඇති </ b> ලෙස {0} ඇත',
    'WITH' => 'සමග',

    'LBL_LINK_TYPE_Link' => 'ලින්ක්',
    'LBL_LINK_TYPE_Image' => 'රූප',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => ' තෝරන්න',
    'LBL_POST' => 'තැපැල්',
    'LBL_AUTHENTICATE' => 'සම්බන්ධ වෙන්න',
    'LBL_AUTHENTICATION_PENDING' => 'ඔබ සියළු තෝරාගෙන ඇති බාහිර ගිණුම් සත්යතාව තහවුරු කොට ඇත. බාහිර ගිණුම් සත්යතාවයක් කිරීමට විකල්ප කවුළුව වෙත ආපසු යාමට \ අවලංගු කරන්න \' ක්ලික් කරන්න',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'තවත් විකල්ප පෙන්වන්න',
    'LBL_HIDE_OPTIONS' => 'විකල්ප සඟවන්න',
    'LBL_VIEW' => 'දැක්ම',
    'LBL_POST_TITLE' => 'සඳහා තැපැල් තත්වය යාවත්කාලීන',
    'LBL_URL_LINK_TITLE' => 'භාවිතය URL එක ලින්ක්',
);
