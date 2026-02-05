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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'සමූහ තීරණය කළ ෙනොහැකි',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'අයිතිකරු තීරණය කළ ෙනොහැකි',
    'ERR_UW_CONFIG_WRITE' => 'නව අනුවාදය තොරතුරු යාවත්කාලීන කිරීමේ දෝෂය config.php.',
    'ERR_UW_CONFIG' => 'ඔබගේ config.php ගොනුව, ලිවිය-හැකි ගොනුවක් කරන්න මෙම පිටුව අලුත් කරන්න.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'ඩිරෙක්ටරියට ලිවිය නොහැකි',
    'ERR_UW_FILE_NOT_COPIED' => 'ගොනුව පිටපත් නොවන',
    'ERR_UW_FILE_NOT_DELETED' => 'පැකේජය ඉවත් ගැටළු',
    'ERR_UW_FILE_NOT_READABLE' => 'ගොනුව කියවිය නොහැක.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'ගොනුව වෙත ගෙන හෝ ලිඛිත කළ නොහැකි',
    'ERR_UW_FLAVOR_2' => 'හොදයි නවීකරණය: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM පද්ධතිය හොදයි: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'Wizard.log ලියා / නිර්මාණය කළ නොහැකි විය ./upgrade. ඔබගේ SuiteCRM බහලුම අවසරයන් විසින් අදාල කරුණ නිවැරදි කරන්න.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => '1. ඔබේ php.ini මෙම වෙනස් වෙබ් සේවාදායකය නැවත ආරම්භ කරන්න වඩා ඉහළ අගය සකසා mbstring.func_overload.',
    'ERR_UW_NO_FILE_UPLOADED' => 'ගොනුව නියම කර නැවත උත්සාහ කරන්න!',
    'ERR_UW_NO_FILES' => 'දෝෂයක් ඇතිවිය, කිසිදු ගොනු පරීක්ෂා කිරීමට සොයා ගන්නා ලදී.',
    'ERR_UW_NO_MANIFEST' => 'මෙම තැපැල් ගොනුව ගොනුව manifest.php අතුරුදහන්. ලැබෙන්නේ නැත.',
    'ERR_UW_NO_VIEW' => 'වලංගු නොවන දැක්ම නියම.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'නැත වලංගු උඩුගත.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'මෙම තාවකාලික ඩිරෙක්ටරිය නිර්මාණය කළ නොහැකි විය. ගොනුව අවසර පරීක්ෂා කරන්න.',
    'ERR_UW_ONLY_PATCHES' => 'ඔබ පමණක් මෙම පිටුවේ පැච් උඩුගත කළ හැකිය.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Preflight පරීක්ෂා තුළ හමු දෝෂ',
    'ERR_UW_UPLOAD_ERR' => 'කරුණාකර නැවත උත්සාහ කරන්න ගොනු උඩුගත දෝෂයක් විය!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM පද්ධතිය සංස්කරණය: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM පද්ධතිය සංස්කරණය: ',
    'ERR_UW_WRONG_TYPE' => 'මෙම පිටුව ධාවන සඳහා නොවේ ',
    'LBL_BUTTON_BACK' => ' <නැවතත්',
    'LBL_BUTTON_CANCEL' => 'අවලංගු කරන්න',
    'LBL_BUTTON_DELETE' => 'පැකේජය Delete',
    'LBL_BUTTON_DONE' => 'හරි',
    'LBL_BUTTON_EXIT' => 'පිටවීම',
    'LBL_BUTTON_NEXT' => 'Next',
    'LBL_BUTTON_RECHECK' => 'නැවත පරීක්ෂාව',
    'LBL_BUTTON_RESTART' => 'යළි අරඹන්න',

    'LBL_UPLOAD_UPGRADE' => 'උත්ශ්රේණි කිරීම පැකේජය උඩුගත',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'ගොනුව බැකප්',
    'LBL_UW_BACKUP_FILES_EXIST' => 'මෙම උත්ශ්රේණි කිරීම පිටුබලය-අප් ගොනු සොයා ගත හැකි',
    'LBL_UW_BACKUP' => 'ගොනුව උපස්ථ',
    'LBL_UW_CANCEL_DESC' => 'නවීකරණ අවලංගු කර ඇත. පිටපත් කරන ලද අතර උඩුගත ඇතැයි යන කවර හෝ ප්රගමනය ගොනු මකා දැමීම සිදු කර ඇත. ඕනෑම තාවකාලික ගොනු ආදිය',
    'LBL_UW_CHECK_ALL' => ' සියලුම පරීක්ෂා කරන්න',
    'LBL_UW_CHECKLIST' => 'පියවර නවීකරණය කිරීමට',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'ක්රියාවලිය නවීකරණය: අතින් ගොනු ඒකාබද්ධ කරන්න',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'ක්රමය මෙම ගොනු ඒකාබද්ධ කිරීමට ඔබට වඩාත් හුරුපුරුදු ය යන දෙකෙන් වෙනස භාවිතා කරන්න. මෙම සම්පූර්ණ වන තුරු',
    'LBL_UW_COMPLETE' => 'සම්පූර්ණ',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'තෘප්තිමත් සියලුම System Settings අවශ්යතා',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP හි සැකසුම: විමර්ශන වන විට වේලාව මංකඩ අමතන්න',
    'LBL_UW_COMPLIANCE_CURL' => 'සමහර දත්ත සම්පිණ්ඩක මොඩියුලය',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP මොඩියුලය',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBSTRING මොඩියුලය',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload පරාමිති',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP හි සැකසුම: මතකය සීමාව',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP හි සැකසුම: ඇල',
    'LBL_UW_COMPLIANCE_DB' => 'අවම දත්ත සමුදාය සංස්කරණය',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Php.ini පිහිටීම',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'අවම PHP අනුවාදය',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP හි සැකසුම: නිරාපද ප්රකාර',
    'LBL_UW_COMPLIANCE_TITLE2' => 'අනාවරණය සැකසුම්',
    'LBL_UW_COMPLIANCE_XML' => 'XML සටහන',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'zip සහාය',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE සංස්කරණය',
    'LBL_UW_COPIED_FILES_TITLE' => 'සාර්ථකව පිටපත් ගොනු',

    'LBL_UW_DB_CHOICE1' => 'නවීකරණය කිරීමට විශාරද SQL යනවා',
    'LBL_UW_DB_CHOICE2' => 'ස්වයංක්රීය ගියර් සහිත මෝටර් රථ SQL විමසුම්',
    'LBL_UW_DB_ISSUES_PERMS' => 'දත්ත සමුදාය වරප්රසාද',
    'LBL_UW_DB_METHOD' => 'දත්ත සමුදාය යාවත්කාලීන ක්රමය',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'වගුව වෙනස් [table] තීරුවක් එක් [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'වගුව වෙනස් [table] වෙනසක් COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'වගුව [table] නිර්මාණය',
    'LBL_UW_DB_NO_DELETE' => '[table] සිට DELETE',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'වගුව වෙනස් [table] COLUMN Drop [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'වගුව Drop [table]',
    'LBL_UW_DB_NO_ERRORS' => 'භාවිතයට ගත හැකි සියලුම වරප්රසාද',
    'LBL_UW_DB_NO_INSERT' => '[table] තුලට ඇතුල්',
    'LBL_UW_DB_NO_SELECT' => '[table] සිට [x] SELECT',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'අවශ්ය වරප්රසාද',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'පහත දැක්වෙන උත්ශ්රේණි කිරීම ඇසුරුම් ස්ථාපනය කර ඇත:',
    'LBL_UW_END_LOGOUT_PRE' => 'නවීකරණ සම්පූර්ණ කර තිබේ.',
    'LBL_UW_END_LOGOUT_PRE2' => 'මෙම උත්ශ්රේණි කිරීම විශාරද පිටවීමට කළා මත ක්ලික් කරන්න.',
    'LBL_UW_END_LOGOUT' => 'ඔබ නවීකරණය කිරීමට විශාරද භාවිතයෙන් වෙනත් නවීකරණ ඇසුරුම් අයදුම් කිරීමට අදහස් කරන්නේ නම්, එයින් පිටවන්නේ අතර ඊට පෙර එසේ කිරීමට නැවත පිවිසෙන්න.',

    'LBL_UW_FILE_DELETED' => ' ඉවත් කර ඇත. <br>',
    'LBL_UW_FILE_GROUP' => 'සමූහය',
    'LBL_UW_FILE_ISSUES_PERMS' => 'ගොනු අවසර',
    'LBL_UW_FILE_NO_ERRORS' => '<b> සියළු ගොනු ලිවිය හැකි </ bPermissions',
    'LBL_UW_FILE_OWNER' => 'හිමිකරු',
    'LBL_UW_FILE_PERMS' => 'ගොනුවේ නම',
    'LBL_UW_FILE_UPLOADED' => 'පහත දැක්වෙන උත්ශ්රේණි කිරීම ඇසුරුම් ස්ථාපනය කිරීමට සූදානම්:',
    'LBL_UW_FILE' => 'ගොනුවේ නම',
    'LBL_UW_FILES_QUEUED' => 'පහත දැක්වෙන උත්ශ්රේණි කිරීම ඇසුරුම් ස්ථාපනය කිරීමට සූදානම්:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b> පැකේජ ප්රගමනය උඩුගත කිරීමට Next ක්ලික් කරන්න. </ b>',
    'LBL_UW_FROZEN' => 'තවදුරටත් පවත්වාගෙන යාමට පෙර පැකේජයක් උඩුගත කරන්න.',
    'LBL_UW_HIDE_DETAILS' => ' සඟවන්න විස්තර',
    'LBL_UW_IN_PROGRESS' => 'ප්රගතියේ',
    'LBL_UW_INCLUDING' => 'ඇතුළු',
    'LBL_UW_INCOMPLETE' => 'අසම්පූර්ණ',
    'LBL_UW_MANUAL_MERGE' => 'ගොනුව ඒකාබද්ධ',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'අනාවරණය නොමැත වාර්තා ඒම.',
    'LBL_UW_NONE' => 'කිසිවක් නැත',
    'LBL_UW_OVERWRITE_DESC' => 'ඕනෑම කේතය අභිමතකරණ සහ ඔබ කර ඇති සැකිලි වෙනස්කම් ඇතුළුව. ඔබ ඉදිරියට කිරීමට අවශ්ය බව ඔබට විශ්වාසද? ',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'ස්වයංක්රීය ගියර් සහිත මෝටර් රථ ඒකාබද්ධ සඳහා කාර්ය සාධක අයිතමය නිර්මාණය කරන්නද?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'ඔබම අත්පොත ඒකාබද්ධ සඳහා මතක් ඊ-මේල් කරන්න?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'පහත ලැයිස්තු ගත කර ඇති ගොනු විකරණය කොට තිබේ. අතින් මුසුව අවශ්ය බව තේරීම් ඉවත් භාණ්ඩ. <i> ඕනෑම අනාවරණය සැකැස්ම වෙනස්කම් ස්වයංක්රීයව අපරීක්ෂා ය; උඩින් ලීවීම කළ යුතු බව ඕනෑම කතිර ලකුණක්.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'මෙයට අත්පොත ගොනුව අවශ්ය ඒකාබද්ධ කරන්න.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'අවශ්ය නොවේ.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'වාහන සංරක්ෂණය ගොනු:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'සියලුම preflight පරීක්ෂණ සම්මත කර ඇත.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'පද්ධතිය වෙත යාවත්කාලීන වූ ගොනු පිටපත් කිරීමට Next ක්ලික් කරන්න.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b> සටහන: </ b> ප්රගමන ක්රියාවලිය ඉතිරි අනිවාර්ය වන අතර, ඉදිරි ක්රියාවලිය සම්පූර්ණ කිරීම සඳහා ඔබට අවශ්ය වනු ඇත ක්ලික් කරන්න. මේ පිළිබඳ කටයුතු සිදු කිරීමට ඇවැසි නොවන්නේ නම්, අවලංගු කරන්න බොත්තම ක්ලික් කරන්න.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'ටොගල් සියළු ගොනු',

    'LBL_UW_REBUILD_TITLE' => 'ප්රතිඵල නැවත',
    'LBL_UW_SCHEMA_CHANGE' => 'යෝජිත සැලසුම් වෙනස්',

    'LBL_UW_SHOW_COMPLIANCE' => 'පෙන්වන්න අනාකරණය සැකසුම්',
    'LBL_UW_SHOW_DB_PERMS' => 'අතුරුදන් වූ දත්ත සමුදාය අවසර පෙන්වන්න',
    'LBL_UW_SHOW_DETAILS' => ' විස්තර පෙන්වන්න',
    'LBL_UW_SHOW_DIFFS' => 'ස්වයංක්රීය ගියර් සහිත මෝටර් රථ ඒකාබද්ධ ගැටුමකට පෙන්වන්න ගොනු',
    'LBL_UW_SHOW_NW_FILES' => 'නරක අවසර සමඟ පෙන්වන්න ගොනු',
    'LBL_UW_SHOW_SCHEMA' => 'යෝජිත සැලසුම් වෙනස් කේත රචනය පෙන්වන්න',
    'LBL_UW_SHOW_SQL_ERRORS' => 'නරක විමසුම් පෙන්වන්න',
    'LBL_UW_SHOW' => 'පෙන්වන්න',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'ගොනු හැරී',
    'LBL_UW_SQL_RUN' => 'SQL අතින් ලකුණු කර ඇති විට පරීක්ෂා කරන්න',
    'LBL_UW_START_DESC' => 'මෙම මායා අඳුන විසින් මෙම SuiteCRM උදාහරණයක් සිදුකරන ඔබට සහාය වනු ඇත.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'පද්ධතිය ප්රගමනය සඳහා සූදානම් වන බව තහවුරු කර ගන්න ඔබේ පද්ධතිය මත පරීක්ෂා කර Next ක්ලික් කරන්න. චෙක්පත ගොනු අවසර ඇතුළත්',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'මෙම නව නවීකරණය කිරීමට විශාරද දැන් ප්රගමන ක්රියාවලිය නැවත ආරම්භ වනු ඇත. ප්රගමනය දිගටම කරන්න.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'නව උත්ශ්රේණි කිරීම විශාරද වෙත සාදරයෙන් පිළිගනිමු',

    'LBL_UW_TITLE_CANCEL' => 'අවලංගු කරන්න',
    'LBL_UW_TITLE_COMMIT' => 'උත්ශ්රේණි කිරීම සිදු',
    'LBL_UW_TITLE_END' => 'නොවරදවා සහභාගි',
    'LBL_UW_TITLE_PREFLIGHT' => 'Preflight පරීක්ෂා කරන්න',
    'LBL_UW_TITLE_START' => 'ඔබ සාදරයෙන් පිළිගනිමු',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'පද්ධතිය පරීක්ෂා කරන්න',
    'LBL_UW_TITLE_UPLOAD' => 'පැකේජය උඩුගත',
    'LBL_UW_TITLE' => 'විශාරද නවීකරණය කිරීමට',
    'LBL_UW_UNINSTALL' => 'අස්ථාපනය කරන්න',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'බලපත්ර පිළිගන්න',
    'LBL_UW_CONVERT_THE_LICENSE' => 'බලපත්ර බවට පරිවර්තනය',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'ප්රගතිය ආරම්භ',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'ප්රගති පද්ධතිය පරීක්ෂා කරන්න',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'ප්රගතිය බලපත්ර පරීක්ෂා කරන්න',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'ප්රගති දී Preflight පරීක්ෂා කරන්න',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'ප්රගති ගොනු පිටපත් කිරීම',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'ප්රගති දී නවීකරණය කිරීමට කැප',
    'LBL_UW_COMMIT_DESC' => 'අමතර යාවත්කාලීන කිරීම පිටපත් ක්රියාත්මක කිරීමට Next ක්ලික් කරන්න.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'ප්රගති දී රචනා, නවීකරණය කිරීමට',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'ප්රගති දී සාරාංශය නවීකරණය කිරීමට',
    'LBL_UPGRADE_IN_PROGRESS' => 'ප්රගතියේ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'වේලාව ගත',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'අවලංගු කරන්න නවීකරණය කිරීමට හා ප්රගතිය කෙරෙහි කුණුකූඩය',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'උත්ශ්රේණි කිරීම තරමක කාලයක් ගත විය හැක',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'ප්රගති දී චෙක්පත් උඩුගත',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'උත්ශ්රේණි කිරීම පැකේජය උඩුගත',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'නවීකරණය කිරීමට විශාරද පැරණි 451 ක්රමානුරූපය බිංදු',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'ස්වයංක්රීය ගියර් සහිත මෝටර් රථ Drop යෝජිත සැලසුම් තැපැල් උත්ශ්රේණි කිරීම',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'පරණ යෝජිත සැලසුම් Drop ක්රමය',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'පහත වැටී කළ හැකි බව පැරණි යෝජිත සැලසුම් පෙන්වන්න',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'විමසුම් හැරී',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP අනුවාදය 5 හෝ ඉහත අවශ්ය වේ.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP හි ඔබේ අනුවාදය SuiteCRM විසින් පහසුකම් සපයන්නේ නැත. ඔබ SuiteCRM අයදුම් ගැලපෙන අනුවාදය ස්ථාපනයට අවශ්ය වනු ඇත. සහාය, PHP අනුවාද සඳහා කරන ලද මුදා හැරීමේ සටහන් දී ගැලපුම් නියමයන් උපදෙස් ලබාගන්න. ඔබේ අනුවාදය වේ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php පසු ගැළපුම mode සක්රිය කර ඇත. ඉදිරියට සඳහා අක්රිය zend.ze1_compatibility_mode සකසන්න',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'කටයුතු',
    'LBL_ML_CANCEL' => 'අවලංගු කරන්න',
    'LBL_ML_COMMIT' => 'කැප',
    'LBL_ML_DESCRIPTION' => 'විස්තරය',
    'LBL_ML_INSTALLED' => 'දිනය ප්රාප්ත',
    'LBL_ML_NAME' => 'නම',
    'LBL_ML_PUBLISHED' => 'දිනය ප්රකාශයට පත් කරන',
    'LBL_ML_TYPE' => 'වර්ගය',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'පිටපත',
    'LBL_ML_INSTALL' => 'ස්ථාපනය',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'ඔබේ වත්මන් PHP අනුවාදය වේ: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'UpgradeWizard',
    'LBL_UPLOAD_SUCCESS' => 'නවීකරණ ඇසුරුම් සාර්ථකව උඩුගත. අවසන් පරීක්ෂා කර Next ක්ලික් කරන්න.',
    'LBL_UW_TITLE_LAYOUTS' => 'පිරිසැලසුම් තහවුරු',
    'LBL_LAYOUT_MODULE_TITLE' => 'පිරිසැලසුම්',
    'LBL_LAYOUT_MERGE_DESC' => 'මෙම උත්ශ්රේණි කිරීම කොටසක් ලෙස එකතු කර ඇති අතර, ස්වයංක්රීයව ඔබගේ දැනට පවතින මොඩියුලය විලාසිතා යෙදීමෙන් කිරීමට ඇත්තා වූ ද, කළ හැකි ලබා ගත හැකි, නව කුඹුරු තියෙනවා. නව ක්ෂේත්ර පිළිබඳ වැඩි අවබෝධයක් සඳහා, ඔබ උත්ශ්රේණි කිරීමට අනුවාදය සඳහා කරන ලද මුදා හැරීමේ සටහන් වෙත යොමුවන්න. <br> <br> ඔබට නව ක්ෂේත්ර එකතු කිරීමට ඔබ අකමැති නම්, මෙම මොඩියුලය නොතේරූ නිසාවෙන්, සහ ඔබේ අභිරුචි විලාසිතා යෙදීමෙන් ඇත කරුණාකර නොවෙනස්ව පවතී. ක්ෂේත්ර යාවත්කාලීන කිරීම පසු ශබ්දාගාර ලබාගත හැකි වනු ඇත. <br> <br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'වෙනස්කම් තහවුරු කිරීමට හා යාවත්කාලීන කිරීම අවසන් කිරීමට Next ක්ලික් කරන්න.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'උත්ශ්රේණි කිරීම සම්පූර්ණ කිරීමට Next ක්ලික් කරන්න ..',
    'LBL_UW_CONFIRM_LAYOUTS' => 'පිරිසැලසුම් තහවුරු',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => ' පිරිසැලසුම ප්රතිඵල තහවුරු',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'පහත දැක්වෙන සැකසුම් වේ සාර්ථකව ඒකාබද්ධ කරන ලදී:',
    'LBL_SELECT_FILE' => 'තේරීම් ගොනුව:',
    'ERROR_VERSION_INCOMPATIBLE' => 'උඩුගත SuiteCRM මෙම සංස්කරණය සමග අනුකූල නොවේ:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'උඩුගත SuiteCRM මෙම සංස්කරණය සමග අනුකූල නොවේ:',
    'LBL_LANGPACKS' => 'භාෂා ඇසුරුම්' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'මොඩියුලය කාරකය' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => '  පැච් ඒම' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'තේමා' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'කාර්ය ප්රවාහ' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'උත්ශ්රේණි කිරීම' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'සැකසුම්' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'මෙම ගොනුව උඩුගත php.ini දී upload_max_filesize උපදෙස් ඉක්මවා යයි.',
        2 => 'මෙම ගොනුව උඩුගත HTML ආකෘති පත්රය, හි නිශ්චිතව දක්වා ඇති බව ද MAX_FILE_SIZE උපදෙස් ඉක්මවා යයි.',
        3 => 'මෙම ගොනුව උඩුගත කෙරුම භාගික වශයෙන් පමණක් උඩුගත කර ඇත.',
        4 => 'ගොනුව උඩුගත නොමැත කරන ලදි.',
        5 => 'නොදන්නා දෝෂයක්.',
        6 => 'තාවකාලික ෆෝල්ඩරය අතුරුදන්.',
        7 => 'තැටිය වෙත ගොනු ලිවීම අසමත් විය.',
        8 => 'දීර්ඝ විසින් නතර ගොනුව උඩුගත කරන්න.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
