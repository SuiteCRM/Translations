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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'গ্রুপ নির্ধারণ করতে পারে না',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'মালিক নির্ধারণ করা যাবে না',
    'ERR_UW_CONFIG_WRITE' => 'নতুন সংস্করণ তথ্যের সাথে config.php আপডেট করার সময় ত্রুটি।.',
    'ERR_UW_CONFIG' => 'দয়া করে আপনার config.php ফাইলটি লিখনযোগ্য করুন এবং এই পৃষ্ঠাটিকে পুনরায় লোড করুন।.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'ডিরেক্টরি লিখনযোগ্য নয়',
    'ERR_UW_FILE_NOT_COPIED' => 'ফাইল অনুলিপি করা হয়নি',
    'ERR_UW_FILE_NOT_DELETED' => 'প্যাকেজ অপসারণ সমস্যা ',
    'ERR_UW_FILE_NOT_READABLE' => 'ফাইলটি পড়তে পারে না।.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'ফাইল সরানো বা লেখা যাবে না',
    'ERR_UW_FLAVOR_2' => 'আপগ্রেড গন্ধ: ',
    'ERR_UW_FLAVOR' => 'সুইটসিআরএম সিস্টেমের সুবাস: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log তৈরি করতে / লিখিত করা যায়নি। অনুগ্রহ করে আপনার SuiteCRM ডিরেক্টরিতে অনুমতি দিন।.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload 1 এর চেয়ে বেশি মান সেট করুন। দয়া করে এটি আপনার php.ini এ পরিবর্তন করুন এবং ওয়েব সার্ভার পুনরায় চালু করুন।.',
    'ERR_UW_NO_FILE_UPLOADED' => 'দয়া করে একটি ফাইল নির্দিষ্ট করুন এবং আবার চেষ্টা করুন!',
    'ERR_UW_NO_FILES' => 'একটি ত্রুটি ঘটেছে, কোন ফাইল চেক পাওয়া যায়নি।.',
    'ERR_UW_NO_MANIFEST' => 'জিপ ফাইলটি একটি manifest.php ফাইলটি অনুপস্থিত। এগিয়ে যেতে পারবেন না.',
    'ERR_UW_NO_VIEW' => 'অবৈধ দর্শন নির্দিষ্ট.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'বৈধ আপলোড না.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'টেম্প ডিরেক্টরি তৈরি করা যায়নি ফাইল অনুমতি চেক করুন।.',
    'ERR_UW_ONLY_PATCHES' => 'আপনি এই পৃষ্ঠায় শুধুমাত্র প্যাচ আপলোড করতে পারেন।.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Preflight চেক সময় পাওয়া ত্রুটি',
    'ERR_UW_UPLOAD_ERR' => 'ফাইল আপলোড করার সময় একটি ত্রুটি ছিল, দয়া করে আবার চেষ্টা করুন! <br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'স্যুটরিং সিস্টেম সংস্করণ: ',
    'ERR_UW_PHP_VERSION' => 'পিএইচপি সংস্করণ: ',
    'ERR_UW_SUITECRM_VERSION' => 'স্যুটরিং সিস্টেম সংস্করণ: ',
    'ERR_UW_WRONG_TYPE' => 'এই পৃষ্ঠাটি চলমান জন্য নয় ',
    'LBL_BUTTON_BACK' => '<পিছনে',
    'LBL_BUTTON_CANCEL' => 'বাতিল',
    'LBL_BUTTON_DELETE' => 'প্যাকেজ মুছুন',
    'LBL_BUTTON_DONE' => 'সম্পন্ন',
    'LBL_BUTTON_EXIT' => 'বাহির',
    'LBL_BUTTON_NEXT' => 'পরবর্তী>',
    'LBL_BUTTON_RECHECK' => 'পুনঃপরীক্ষা',
    'LBL_BUTTON_RESTART' => 'আবার শুরু',

    'LBL_UPLOAD_UPGRADE' => 'আপগ্রেড প্যাকেজ আপলোড করুন ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'ফাইল ব্যাকআপ',
    'LBL_UW_BACKUP_FILES_EXIST' => 'এই আপগ্রেড থেকে ব্যাক আপ আপ ফাইল পাওয়া যাবে',
    'LBL_UW_BACKUP' => 'ফাইল ব্যাকআপ',
    'LBL_UW_CANCEL_DESC' => 'আপগ্রেড বাতিল করা হয়েছে। যে অস্থায়ী ফাইলগুলি অনুলিপি করা হয়েছিল এবং আপলোড করা কোনও আপগ্রেড ফাইলগুলি মুছে ফেলা হয়েছে.',
    'LBL_UW_CHECK_ALL' => 'সবগুলু যাচাই করুন',
    'LBL_UW_CHECKLIST' => 'পদক্ষেপগুলি আপগ্রেড করুন',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Overwritten Files এর ব্যাকআপ নিম্নোক্ত ডিরেক্টরির মধ্যে রয়েছে: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'ম্যানুয়ালি নিম্নোক্ত ফাইলগুলিকে একত্রিত করুন: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'আপগ্রেড প্রক্রিয়া: ম্যানুয়ালি ফাইল একত্রিত করুন',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'এই ফাইলগুলি একত্রিত করার জন্য যে কোনও পার্থক্য পদ্ধতিটি আপনার কাছে সর্বাধিক পরিচিত। যতক্ষণ পর্যন্ত এটি সম্পূর্ণ না হয়, আপনার SuiteCRM ইনস্টলেশনটি অনিশ্চিত অবস্থায় থাকবে এবং আপগ্রেড অসম্পূর্ণ থাকবে।.',
    'LBL_UW_COMPLETE' => 'সম্পূর্ণ',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'সমস্ত সিস্টেম সেটিংস প্রয়োজনীয়তা সন্তুষ্ট',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'পিএইচপি সেটিং: রেফারেন্স দ্বারা সময় পাস পাসপোর্ট',
    'LBL_UW_COMPLIANCE_CURL' => 'সি Url মডিউল',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP মডিউল',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'এমবিএস ট্রান্সিং মডিউল',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'এমবিএস ট্রিংস mbstring.func_overload পরামিতি',
    'LBL_UW_COMPLIANCE_MEMORY' => 'পিএইচপি সেটিং: মেমরি সীমা',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimum Database Version',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Location of php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Minimum PHP Version',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Detected Settings',
    'LBL_UW_COMPLIANCE_XML' => 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Files Copied Successfully',

    'LBL_UW_DB_CHOICE1' => 'Upgrade Wizard Runs SQL',
    'LBL_UW_DB_CHOICE2' => 'Manual SQL Queries',
    'LBL_UW_DB_ISSUES_PERMS' => 'Database Privileges',
    'LBL_UW_DB_METHOD' => 'Database Update Method',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'All Privileges Available',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Necessary Privilege',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'The following upgrade packages have been installed:',
    'LBL_UW_END_LOGOUT_PRE' => 'The upgrade is complete.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Click Done to exit the Upgrade Wizard.',
    'LBL_UW_END_LOGOUT' => 'If you plan to apply another upgrade package using the Upgrade Wizard, log out and log back in prior to doing so.',

    'LBL_UW_FILE_DELETED' => ' has been removed.<br>',
    'LBL_UW_FILE_GROUP' => 'গ্রুপ',
    'LBL_UW_FILE_ISSUES_PERMS' => 'File Permissions',
    'LBL_UW_FILE_NO_ERRORS' => '<b>All Files Writable</b>',
    'LBL_UW_FILE_OWNER' => 'Owner',
    'LBL_UW_FILE_PERMS' => 'Permissions',
    'LBL_UW_FILE_UPLOADED' => ' has been uploaded',
    'LBL_UW_FILE' => 'ফাইলের নাম',
    'LBL_UW_FILES_QUEUED' => 'The following upgrade packages are ready to be installed:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Click Next to upload upgrade packages.</b>',
    'LBL_UW_FROZEN' => 'Upload a package before continuing.',
    'LBL_UW_HIDE_DETAILS' => 'Hide Details',
    'LBL_UW_IN_PROGRESS' => 'চলমান',
    'LBL_UW_INCLUDING' => 'Including',
    'LBL_UW_INCOMPLETE' => 'Incomplete',
    'LBL_UW_MANUAL_MERGE' => 'File Merge',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'No recorded Upgrades detected.',
    'LBL_UW_NONE' => 'না',
    'LBL_UW_OVERWRITE_DESC' => 'All changed files will be overwritten, including any code customizations and template changes you have made. Are you sure you want to proceed?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Create Task Item for Manual Merge?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Email Yourself a Reminder for Manual Merge?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'The files listed below have been modified. Uncheck items that require a manual merge. <i>Any detected layout changes are automatically unchecked; checkmark any that should be overwritten.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'No Manual File Merge Required.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Not needed.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Auto-preserved Files:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'All preflight tests have passed.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Click Next to copy the upgraded files to the system.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Note: </b> The rest of the upgrade process is mandatory, and clicking Next will require you to complete the process. If you do not wish to proceed, click the Cancel button.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Toggle All Files',

    'LBL_UW_REBUILD_TITLE' => 'Rebuild Result',
    'LBL_UW_SCHEMA_CHANGE' => 'Schema Changes',

    'LBL_UW_SHOW_COMPLIANCE' => 'Show Detected Settings',
    'LBL_UW_SHOW_DB_PERMS' => 'Show Missing Database Permissions',
    'LBL_UW_SHOW_DETAILS' => 'Show Details',
    'LBL_UW_SHOW_DIFFS' => 'Show Files Requiring Manual Merge',
    'LBL_UW_SHOW_NW_FILES' => 'Show Files with Bad Permissions',
    'LBL_UW_SHOW_SCHEMA' => 'Show Schema Change Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Show Bad Queries',
    'LBL_UW_SHOW' => 'Show',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Skipped Files',
    'LBL_UW_SQL_RUN' => 'Check when SQL has been manually run',
    'LBL_UW_START_DESC' => 'This wizard will assist you in upgrading this SuiteCRM instance.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Click Next to perform a check on your system to make sure that the system is ready for the upgrade. The check includes file permissions, database privileges and server settings.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'The new Upgrade Wizard will now resume the upgrade process. Please continue your upgrade.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Welcome to the new Upgrade Wizard',

    'LBL_UW_TITLE_CANCEL' => 'বাতিল',
    'LBL_UW_TITLE_COMMIT' => 'Commit Upgrade',
    'LBL_UW_TITLE_END' => 'Debrief',
    'LBL_UW_TITLE_PREFLIGHT' => 'Preflight Check',
    'LBL_UW_TITLE_START' => 'Welcome',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'System Check',
    'LBL_UW_TITLE_UPLOAD' => 'Upload Package',
    'LBL_UW_TITLE' => 'আপগ্রেড উইজার্ড',
    'LBL_UW_UNINSTALL' => 'Uninstall',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Accept License',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convert License',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Start in progress',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'System Check in Progress',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'License Check in progress',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight Check in Progress',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'File Copying in Progress',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade in Progress',
    'LBL_UW_COMMIT_DESC' => 'Click Next to run additional upgrade scripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts in Progress',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Summary in Progress',
    'LBL_UPGRADE_IN_PROGRESS' => 'in progress     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Time elapsed',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade Cancel and Cleanup in Progress',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Upgrade may take some time',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Upload Checks in Progress',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uploading Upgrade Package ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard Drops old 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Old Schema Drop Method',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Show Old Schema that could be dropped',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Skipped Queries',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php version 5 or above is required.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Your version of PHP is not supported by SuiteCRM. You will need to install a version that is compatible with the SuiteCRM application. Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'কর্ম',
    'LBL_ML_CANCEL' => 'বাতিল',
    'LBL_ML_COMMIT' => 'Commit',
    'LBL_ML_DESCRIPTION' => 'বিবরণ',
    'LBL_ML_INSTALLED' => 'Date Installed',
    'LBL_ML_NAME' => 'নাম',
    'LBL_ML_PUBLISHED' => 'Date Published',
    'LBL_ML_TYPE' => 'Type',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Version',
    'LBL_ML_INSTALL' => 'Install',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Your current php version is: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'UpgradeWizard',
    'LBL_UPLOAD_SUCCESS' => 'Upgrade package successfully uploaded. Click Next to perform a final check.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirm Layouts',
    'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
    'LBL_LAYOUT_MERGE_DESC' => 'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts. To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Click Next to confirm changes and to finish the upgrade.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Click Next to complete the upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirm Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirm Layout Results',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'The following layouts were merged successfully:',
    'LBL_SELECT_FILE' => 'Select File:',
    'ERROR_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of SuiteCRM: ',
    'LBL_LANGPACKS' => 'Language Packs' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Module Loader' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Patch Upgrades' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Themes' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'আপগ্রেড' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Processing' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'The uploaded file was only partially uploaded.',
        4 => 'No file was uploaded.',
        5 => 'Unknown error.',
        6 => 'Missing a temporary folder.',
        7 => 'Failed to write file to disk.',
        8 => 'File upload stopped by extension.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
