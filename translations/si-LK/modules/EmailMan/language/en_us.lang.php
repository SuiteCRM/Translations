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
    'LBL_SEND_DATE_TIME' => 'දිනය යවන්න',
    'LBL_IN_QUEUE' => 'ක්රියාවලිය තුළ',
    'LBL_IN_QUEUE_DATE' => 'පේළි දිනය',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'කණ්ඩායම එක් යවන ඊමේල් සංඛ්යාව නියම කිරීමට පමණක් පූර්ණ සංඛ්යාමය අගයන් භාවිතා කරන්න',

    'LBL_ATTACHMENT_AUDIT' => 'යවන ලදී. එය තැටියට භාවිතය සංරක්ෂණය කිරීම සඳහා එක්කෝ කොබැඳි නැත්නම් ස්ථානීකව නොපවතියි, දෙබිඩි නැත.',
    'LBL_CONFIGURE_SETTINGS' => 'විද්යුත් සැකසුම් සකසන්න',
    'LBL_CUSTOM_LOCATION' => 'පරිශීලක අර්ථ දක්වන',
    'LBL_DEFAULT_LOCATION' => 'පෙරනිමි',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'මකාදැමුවා විද්යුත් තැපැල් පණිවුඩ සමග සම්බන්ධ සටහන් සහ ඇමුණුම් Delete',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'පිටතට යන තැපැල් වින්යාස',
    'LBL_EMAILS_PER_RUN' => 'කණ්ඩායම එක් විද්යුත් තැපැල් ගණන:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'ව්යාපාරය',
    'LBL_LIST_FORM_TITLE' => 'පෝලිමේ',
    'LBL_LIST_FROM_NAME' => 'නම සිට',
    'LBL_LIST_IN_QUEUE' => 'ක්රියාවලිය තුළ',
    'LBL_LIST_MESSAGE_NAME' => 'අලෙවි පණිවුඩය',
    'LBL_LIST_RECIPIENT_EMAIL' => 'පලමු වරට පිරිනැමු විද්යුත්',
    'LBL_LIST_RECIPIENT_NAME' => 'පලමු වරට පිරිනැමු නම',
    'LBL_LIST_SEND_ATTEMPTS' => 'උත්සාහ යවන්න',
    'LBL_LIST_SEND_DATE_TIME' => 'දින යවන්න',
    'LBL_LIST_USER_NAME' => ' පරිශීලක නාමය',
    'LBL_LOCATION_ONLY' => 'පිහිටීම',
    'LBL_LOCATION_TRACK' => '(ව්යාපාරය tracker.php වැනි) ව්යාපාරය ගැනීමේ ගොනු පිහිටීම',
    'LBL_CAMP_MESSAGE_COPY' => 'ව්යාපාරය පණිවුඩ පිටපත් තබා ගන්න:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'ඔබ සියලු ව්යාපාර තුළ යවා <නිර්භීත> සෑම </ නිර්භීත> විද්යුත්-තැපැල් පණිවුඩය සම්පූර්ණ පිටපත් ගබඩා කිරීමට කැමතිද? <නිර්භීත> අපි </ නිර්භීත> කිසිදු නිර්දේශ කර ප්රකෘති. කිසිදු තෝරා ගැනීම පුද්ගලයා පණිවිඩය ප්රතිනිර්මානය කිරීමට පමණක් යවා ඇති බව මෙම සැකිල්ලට හා අවශ්ය විචල්යයන් ගබඩා කරනු ඇත.',
    'LBL_MAIL_SENDTYPE' => 'තැපැල් හුවමාරු නියෝජිත:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP සත්යාපනය භාවිතා කරන්න:',
    'LBL_MAIL_SMTPPASS' => 'මුරපදය:',
    'LBL_MAIL_SMTPPORT' => 'SMTP තොට:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP තැපැල් සේවාදායකය:',
    'LBL_MAIL_SMTPUSER' => 'පරිශීලක නාමය:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ඔබගේ විද්යුත් සපයන්නා තෝරා ගන්න',
    'LBL_YAHOOMAIL_SMTPPASS' => 'යාහු! තැපැල් මුරපදය',
    'LBL_YAHOOMAIL_SMTPUSER' => 'යාහු! තැපැල් හැඳුනුම්පත',
    'LBL_GMAIL_SMTPPASS' => 'ජීමේල් මුරපදය',
    'LBL_GMAIL_SMTPUSER' => 'ජීමේල් විද්යුත් තැපැල් ලිපිනය',
    'LBL_EXCHANGE_SMTPPASS' => 'විනිමය මුරපදය',
    'LBL_EXCHANGE_SMTPUSER' => 'විනිමය පරිශීලක නාමය',
    'LBL_EXCHANGE_SMTPPORT' => 'විනිමය සේවාදායකය වරාය',
    'LBL_EXCHANGE_SMTPSERVER' => 'විනිමය සේවාදායකය',
    'LBL_EMAIL_LINK_TYPE' => 'විද්යුත් සේවාලාභියා',
    'LBL_MARKETING_ID' => 'අලෙවි Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'විද්යුත් සැකසුම්',
    'LBL_MODULE_TITLE' => 'බැහැරගත විද්යුත් පෝලිමේ කළමනාකරණ',
    'LBL_NOTIFICATION_ON_DESC' => 'වාර්තා ඔවුන්ට පවරා විට සක්රීය ඊ-තැපැල් පරිශීලකයන් වෙත එවූ විට.',
    'LBL_NOTIFY_FROMADDRESS' => 'ලිපිනය "සිට":',
    'LBL_NOTIFY_FROMNAME' => 'නම "වෙතින්":',
    'LBL_NOTIFY_ON' => 'පැවරුම නිවේදන',
    'LBL_NOTIFY_TITLE' => 'විද්යුත් විකල්ප',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'බැහැරගත විද්යුත් විකල්ප',
    'LBL_RELATED_ID' => 'ආශ්රිත Id',
    'LBL_RELATED_TYPE' => 'සබැඳි වර්ගය',
    'LBL_SEARCH_FORM_TITLE' => 'පෝලිමේ සොයන්න',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php සැකසුම site_url වටිනාකම',
    'TXT_REMOVE_ME_ALT' => 'මෙම ඊ-තැපැල් ලැයිස්තුව සිට ඔබ ඉවත් කිරීම සඳහා යන්න',
    'TXT_REMOVE_ME_CLICK' => 'මෙහි ක්ලික් කරන්න',
    'TXT_REMOVE_ME' => 'මෙම ඊ-තැපැල් ලැයිස්තුව සිට ඔබ ඉවත් කිරීම සඳහා',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'විද්යුත් ආරක්ෂක සැකසුම්',
    'LBL_SECURITY_DESC' => 'රට තුළට පැමිණෙන සංචාරකයින්ට විද්යුත් හරහා අවසර දී හෝ විද්යුත් තැපැල් පණිවුඩ මොඩියුලය ප්රදර්ශනය නොකළ යුතු බව පහත සඳහන් පරීක්ෂා කරන්න.',
    'LBL_SECURITY_APPLET' => 'යෙදුමිත්ත ටැගය',
    'LBL_SECURITY_BASE' => 'මූලික ටැගය',
    'LBL_SECURITY_EMBED' => 'embed ටැගය',
    'LBL_SECURITY_FORM' => 'ආකෘතිය ටැගය',
    'LBL_SECURITY_FRAME' => 'රාමු ටැගය',
    'LBL_SECURITY_FRAMESET' => 'Frameset ටැගය',
    'LBL_SECURITY_IFRAME' => 'iFrame ටැගය',
    'LBL_SECURITY_IMPORT' => 'ආනයන ටැගය',
    'LBL_SECURITY_LAYER' => 'ස්ථරය ටැගය',
    'LBL_SECURITY_LINK' => 'ලින්ක් ටැගය',
    'LBL_SECURITY_OBJECT' => 'වස්තූන් ටැගය',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'ඉදිරි දැක්මක් සහිතව තෝරන්න (නිවැරදි ප්රදර්ශනය පැත්තේ අයෙකුට අමතකවුණත්) අවම ආරක්ෂක සැකසුම් පැහැර.',
    'LBL_SECURITY_STYLE' => 'ස්ටයිල් ටැගය',
    'LBL_SECURITY_TOGGLE_ALL' => 'සියලුම විකල්ප ටොගල් කරන්න',
    'LBL_SECURITY_XMP' => 'Xmp ටැගය',
    'LBL_YES' => 'ඔව්',
    'LBL_NO' => 'නැහැ',
    'LBL_PREPEND_TEST' => '[ටෙස්ට්]:',
    'LBL_SEND_ATTEMPTS' => 'උත්සාහ යවන්න',
    'LBL_OUTGOING_SECTION_HELP' => 'කාර්ය ප්රවාහ ඇඟවීම් ඇතුළු විද්යුත් තැපැල් දැන්වීම්, යැවීම සඳහා පෙරනිමි පිටතට යන තැපැල් සේවාදායකය මානන්න.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'මෙම විකල්පය තෝරාගත විට, සියළු පරිශීලකයන් හට පද්ධතිය දැනුම්දීම් හා පණිවිඩ යැවීමට භාවිතා එම ධූරයෙන් ඉවත්ව යන <br> තැපැල් ගිණුම භාවිතා ඊ-තැපැල් යැවීමට හැකි වනු ඇත. එම විකල්පය තෝරා ගෙන නොමැති නම්, <br> පරිශීලකයන් තවමත් තමන්ගේ ගිණුම් තොරතුරු ලබා පසු පිටතට යන තැපැල් සේවාදායකය භාවිතා කළ හැකිය.',
    'LBL_FROM_ADDRESS_HELP' => 'මෙය සක්රිය කල ඇති විට, පැවරීම පරිශීලකයන් නම හා ඊ-මේල් ලිපිනය ඊමේල් සිට ක්ෂේත්රයේ ඇතුළත් වනු ඇත. මෙම ලක්ෂණය සේවාදායකය ගිණුමක් වඩා වෙනස් ඊ-තැපැල් ගිණුම සිට යැවීම ඉඩ නැති බව SMTP සේවාදායක සමඟ වැඩ නොකරන විය හැක. ',
    'LBL_HELP' => 'උදව්' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
