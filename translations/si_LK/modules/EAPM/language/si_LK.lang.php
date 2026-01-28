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
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM පරිශීලක',
    'LBL_ID' => 'හැඳු.',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_MODIFIED' => ' වන විට නවීකරණය කරන ලද',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_NAME' => 'යෙදුම පරිශීලක නම',
    'LBL_CREATED_USER' => 'පරිශීලක විසින් නිර්මාණය කරන',
    'LBL_MODIFIED_USER' => 'පරිශීලක වන විට නවීකරණය කරන ලද',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_FORM_TITLE' => 'විදේශ ගිණුම් ලයිස්තුව',
    'LBL_MODULE_NAME' => 'විදේශ ගිණුම්',
    'LBL_MODULE_TITLE' => 'විදේශ ගිණුම්',
    'LBL_HOMEPAGE_TITLE' => 'මගේ විදේශ ගිණුම්',
    'LNK_NEW_RECORD' => 'විදේශ ගිණුමක් නිර්මාණය කරන්න',
    'LNK_LIST' => 'දැක්ම විදේශ ගිණුම්',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න විදේශ මූලාශ්රය',
    'LBL_HISTORY_SUBPANEL_TITLE' => ' දැක්ම ඉතිහාසය',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_NEW_FORM_TITLE' => 'නව විදේශ ගිණුම්',
    'LBL_PASSWORD' => 'යෙදුම මුරපදය',
    'LBL_USER_NAME' => 'යෙදුම පරිශීලක නම',
    'LBL_URL' => 'ඒ.ස.නි.',
    'LBL_APPLICATION' => 'අයදුම්පත',
    'LBL_API_DATA' => 'API දත්ත',
    'LBL_API_CONSKEY' => 'පාරිභෝගික කී',
    'LBL_API_CONSSECRET' => 'පාරිභෝගික රහස්',
    'LBL_API_OAUTHTOKEN' => 'OAuth ටෝකනය',
    'LBL_AUTH_UNSUPPORTED' => "මෙම බලය ක්රමය යෙදුම මඟින් පහසුකම් සපයන්නේ නැත",
    'LBL_AUTH_ERROR' => 'මෙම ගිණුම සම්බන්ධ කර ගැනීමට උත්සාහ කිරීම අසාර්ථක විය.',
    'LBL_VALIDATED' => 'සම්බන්ධ',
    'LBL_ACTIVE' => 'ක්රියාකාරී',
    'LBL_OAUTH_NAME' => '%s,',
    'LBL_CONNECT_BUTTON_TITLE' => 'සම්බන්ධ',
    'LBL_NOTE' => 'කරුණාකර සටහන් කර ගන්න',
    'LBL_CONNECTED' => 'සම්බන්ධ',

    'LBL_ERR_NO_AUTHINFO' => 'මෙම ගිණුම සඳහා කිසිදු තහවුරු කරගැනීමේ තොරතුරු පවතී.',
    'LBL_ERR_NO_TOKEN' => 'මෙම ගිණුම සඳහා වලංගු පිවිසුම් තිළිණ ඇත.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'ඔබ දැන් භාවිතා කරනුයේ ඔබගේ {0} ගිණුමට සම්බන්ධ නැහැ. ඔබගේ ගිණුම පවත්වගෙන යාමට හා සම්බන්ධ නැවත ක්රියාත්මක කිරීම සඳහා OK ක්ලික් කරන්න.',

    'LBL_CLICK_TO_EDIT' => 'Click to Edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'නැවත සහතික',
    'LBL_APPLICATION_FOUND_NOTICE' => 'මෙම යෙදුම සඳහා ගිණුමක් දැනටමත් පවතී. අපි දැනට පවතින ගිණුමක් ස්ථාපිත කර ඇත.',
    'LBL_OMIT_URL' => '(Http පළමුෙවන්: // හෝ https: //)',
    'LBL_OAUTH_SAVE_NOTICE' => 'ඔබගේ ගිණුම් තොරතුරු ලබා දීමට හා SuiteCRM විසින් ගිණුමට ප්රවේශ බලය සඳහා පිටුවක් වෙත යොමු කළ යුතු, <b> Connect </ b> ක්ලික් කරන්න. සම්බන්ධ කළ පසු, ඔබ නැවත SuiteCRM වෙත යොමු කරනු ඇත.',
    'LBL_BASIC_SAVE_NOTICE' => 'SuiteCRM මෙම ගිණුම සම්බන්ධ කිරීමට, <b> Connect </ b> ක්ලික් කරන්න.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
