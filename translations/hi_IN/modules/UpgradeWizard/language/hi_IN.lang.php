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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'समूह निर्धारित नहीं किया जा सकता',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'स्वामी का निर्धारण नहीं किया जा सकता',
    'ERR_UW_CONFIG_WRITE' => 'Config.php को नए संस्करण की जानकारी के साथ अपडेट करने में त्रुटि।',
    'ERR_UW_CONFIG' => 'कृपया अपनी config.php फ़ाइल को लिखने योग्य बनाएं और इस पृष्ठ को पुनः लोड करें।',
    'ERR_UW_DIR_NOT_WRITABLE' => 'निर्देशिका लिखने योग्य नहीं है',
    'ERR_UW_FILE_NOT_COPIED' => 'फ़ाइल कॉपी नहीं हुई',
    'ERR_UW_FILE_NOT_DELETED' => 'पैकेज हटाने में समस्या ',
    'ERR_UW_FILE_NOT_READABLE' => 'फ़ाइल पढ़ी नहीं जा सकी.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'फ़ाइल को स्थानांतरित या लिखा नहीं जा सकता',
    'ERR_UW_FLAVOR_2' => 'स्वाद उन्नयन: ',
    'ERR_UW_FLAVOR' => 'सूइटसीआरएम सिस्टम स्वाद: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log बनाया/लिखा नहीं जा सका। कृपया अपनी SuiteCRM निर्देशिका पर अनुमतियाँ ठीक करें।',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload को 1 से अधिक मान पर सेट करें। कृपया इसे अपने php.ini में बदलें और वेब सर्वर को पुनः आरंभ करें।',
    'ERR_UW_NO_FILE_UPLOADED' => 'कृपया फ़ाइल निर्दिष्ट करें और पुनः प्रयास करें!',
    'ERR_UW_NO_FILES' => 'एक त्रुटि हुई, जाँच करने के लिए कोई फ़ाइल नहीं मिली.',
    'ERR_UW_NO_MANIFEST' => 'ज़िप फ़ाइल में एक मेनिफ़ेस्ट.php फ़ाइल गुम है। आगे नहीं बढ़ सकते.',
    'ERR_UW_NO_VIEW' => 'अमान्य दृश्य निर्दिष्ट किया गया.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'वैध अपलोड नहीं.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'अस्थायी निर्देशिका नहीं बनाई जा सकी। फ़ाइल अनुमतियाँ जाँचें।',
    'ERR_UW_ONLY_PATCHES' => 'आप इस पेज पर केवल पैच अपलोड कर सकते हैं।',
    'ERR_UW_PREFLIGHT_ERRORS' => 'उड़ान-पूर्व जांच के दौरान त्रुटियाँ पाई गईं',
    'ERR_UW_UPLOAD_ERR' => 'फ़ाइल अपलोड करने में त्रुटि हुई, कृपया पुनः प्रयास करें!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'सूइटसीआरएम सिस्टम संस्करण: ',
    'ERR_UW_PHP_VERSION' => 'PHP संस्करण: ',
    'ERR_UW_SUITECRM_VERSION' => 'सूइटसीआरएम सिस्टम संस्करण: ',
    'ERR_UW_WRONG_TYPE' => 'यह पृष्ठ चलाने के लिए नहीं है ',
    'LBL_BUTTON_BACK' => '< पीछे',
    'LBL_BUTTON_CANCEL' => 'रद्द करें',
    'LBL_BUTTON_DELETE' => 'पैकेज हटाएँ',
    'LBL_BUTTON_DONE' => 'खत्म',
    'LBL_BUTTON_EXIT' => 'बाहर जाएं',
    'LBL_BUTTON_NEXT' => 'अगला >',
    'LBL_BUTTON_RECHECK' => 'पुनः जाँच',
    'LBL_BUTTON_RESTART' => 'फिर से शुरू करें',

    'LBL_UPLOAD_UPGRADE' => 'अपग्रेड पैकेज अपलोड करें ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'फ़ाइल बैकअप',
    'LBL_UW_BACKUP_FILES_EXIST' => 'इस अपग्रेड से बैकअप की गई फ़ाइलें यहां पाई जा सकती हैं',
    'LBL_UW_BACKUP' => 'फ़ाइल बैकअप',
    'LBL_UW_CANCEL_DESC' => 'अपग्रेड को रद्द कर दिया गया है। कॉपी की गई सभी अस्थायी फ़ाइलें और अपलोड की गई सभी अपग्रेड फ़ाइलें हटा दी गई हैं।',
    'LBL_UW_CHECK_ALL' => 'सभी की जाँच करें',
    'LBL_UW_CHECKLIST' => 'अपग्रेड चरण',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'अधिलेखित फ़ाइलों का बैकअप निम्नलिखित निर्देशिका में है: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'निम्नलिखित फ़ाइलों को मैन्युअल रूप से मर्ज करें: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'अपग्रेड प्रक्रिया: फ़ाइलों को मैन्युअल रूप से मर्ज करें',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'कृपया इन फ़ाइलों को मर्ज करने के लिए जो भी अंतर विधि आपको सबसे अधिक परिचित लगे उसका उपयोग करें। जब तक यह पूरा नहीं हो जाता, तब तक आपका सूइटसीआरएम इंस्टॉलेशन अनिश्चित स्थिति में रहेगा, और अपग्रेड अधूरा रहेगा।',
    'LBL_UW_COMPLETE' => 'पूर्ण',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'सभी सिस्टम सेटिंग आवश्यकताएँ पूरी की गईं',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP सेटिंग: संदर्भ द्वारा कॉल टाइम पास',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL मॉड्यूल',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP मॉड्यूल',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'एमबीस्ट्रिंग्स मॉड्यूल',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload पैरामीटर',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP सेटिंग: मेमोरी सीमा',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP सेटिंग: स्ट्रीम',
    'LBL_UW_COMPLIANCE_DB' => 'न्यूनतम डेटाबेस संस्करण',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Php.ini का स्थान',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'न्यूनतम PHP संस्करण',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP सेटिंग: सुरक्षित मोड',
    'LBL_UW_COMPLIANCE_TITLE2' => 'पता लगाई गई सेटिंग्स',
    'LBL_UW_COMPLIANCE_XML' => 'XML की पार्सिंग',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'ज़िप समर्थन',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'पीसीआरई संस्करण',
    'LBL_UW_COPIED_FILES_TITLE' => 'फ़ाइलें सफलतापूर्वक कॉपी की गईं',

    'LBL_UW_DB_CHOICE1' => 'अपग्रेड विज़ार्ड SQL चलाता है',
    'LBL_UW_DB_CHOICE2' => 'मैनुअल SQL क्वेरीज़',
    'LBL_UW_DB_ISSUES_PERMS' => 'डेटाबेस विशेषाधिकार',
    'LBL_UW_DB_METHOD' => 'डेटाबेस अद्यतन विधि',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'सभी विशेषाधिकार उपलब्ध',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'आवश्यक विशेषाधिकार',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'निम्नलिखित अपग्रेड पैकेज स्थापित किये गये हैं:',
    'LBL_UW_END_LOGOUT_PRE' => 'उन्नयन पूरा हो गया है.',
    'LBL_UW_END_LOGOUT_PRE2' => 'अपग्रेड विज़ार्ड से बाहर निकलने के लिए संपन्न पर क्लिक करें।',
    'LBL_UW_END_LOGOUT' => 'यदि आप अपग्रेड विज़ार्ड का उपयोग करके कोई अन्य अपग्रेड पैकेज लागू करने की योजना बनाते हैं, तो ऐसा करने से पहले लॉग आउट करें और पुनः लॉग इन करें।',

    'LBL_UW_FILE_DELETED' => ' हटा दिया गया है.<br>',
    'LBL_UW_FILE_GROUP' => 'समूह',
    'LBL_UW_FILE_ISSUES_PERMS' => 'फ़ाइल अनुमतियाँ',
    'LBL_UW_FILE_NO_ERRORS' => '<b>सभी फ़ाइलें लिखने योग्य</b>',
    'LBL_UW_FILE_OWNER' => 'मालिक',
    'LBL_UW_FILE_PERMS' => 'अनुमतियाँ',
    'LBL_UW_FILE_UPLOADED' => ' अपलोड कर दिया गया है.',
    'LBL_UW_FILE' => 'फ़ाइल का नाम',
    'LBL_UW_FILES_QUEUED' => 'निम्नलिखित अपग्रेड पैकेज स्थापित करने के लिए तैयार हैं:',
    'LBL_UW_FILES_REMOVED' => 'निम्न फ़ाइलें सिस्टम से हटा दी जाएंगी:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>अपग्रेड पैकेज अपलोड करने के लिए अगला क्लिक करें.</b>',
    'LBL_UW_FROZEN' => 'आगे बढ़ने से पहले पैकेज अपलोड करें.',
    'LBL_UW_HIDE_DETAILS' => 'विवरण छुपाएँ',
    'LBL_UW_IN_PROGRESS' => 'प्रगति में',
    'LBL_UW_INCLUDING' => 'शामिल',
    'LBL_UW_INCOMPLETE' => 'अधूरा',
    'LBL_UW_MANUAL_MERGE' => 'फ़ाइल मर्ज',
    'LBL_UW_MODULE_READY' => 'मॉड्यूल इंस्टॉल होने के लिए तैयार है। इंस्टॉलेशन के साथ आगे बढ़ने के लिए "कमिट" पर क्लिक करें।',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'कोई भी अपग्रेड दर्ज नहीं किया गया.',
    'LBL_UW_NONE' => 'कोई नहीं',
    'LBL_UW_OVERWRITE_DESC' => 'सभी परिवर्तित फ़ाइलें अधिलेखित हो जाएँगी, जिनमें आपके द्वारा किए गए कोड अनुकूलन और टेम्पलेट परिवर्तन शामिल हैं। क्या आप वाकई आगे बढ़ना चाहते हैं?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'मैन्युअल मर्ज के लिए कार्य आइटम बनाएं?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'मैन्युअल मर्ज के लिए स्वयं को ईमेल से अनुस्मारक भेजें?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'नीचे सूचीबद्ध फ़ाइलों को संशोधित किया गया है। उन आइटम को अनचेक करें जिन्हें मैन्युअल मर्ज की आवश्यकता है। <i>कोई भी पता लगाया गया लेआउट परिवर्तन स्वचालित रूप से अनचेक हो जाता है; उन सभी को चेकमार्क करें जिन्हें ओवरराइट किया जाना चाहिए।',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'कोई मैनुअल फ़ाइल मर्ज आवश्यक नहीं है.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'जरूरत नहीं।',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'स्वतः संरक्षित फ़ाइलें:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'सभी उड़ान-पूर्व परीक्षण पास हो गए हैं।',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'अपग्रेड की गई फ़ाइलों को सिस्टम में कॉपी करने के लिए अगला क्लिक करें।',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>नोट:</b> अपग्रेड प्रक्रिया का बाकी हिस्सा अनिवार्य है, और अगला क्लिक करने पर आपको प्रक्रिया पूरी करनी होगी। यदि आप आगे बढ़ना नहीं चाहते हैं, तो रद्द करें बटन पर क्लिक करें।',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'सभी फ़ाइलें टॉगल करें',

    'LBL_UW_REBUILD_TITLE' => 'पुनर्निर्माण परिणाम',
    'LBL_UW_SCHEMA_CHANGE' => 'स्कीमा परिवर्तन',

    'LBL_UW_SHOW_COMPLIANCE' => 'पता लगाई गई सेटिंग्स दिखाएँ',
    'LBL_UW_SHOW_DB_PERMS' => 'गुम डेटाबेस अनुमतियाँ दिखाएँ',
    'LBL_UW_SHOW_DETAILS' => 'विवरण दिखाएँ',
    'LBL_UW_SHOW_DIFFS' => 'मैन्युअल मर्ज की आवश्यकता वाली फ़ाइलें दिखाएँ',
    'LBL_UW_SHOW_NW_FILES' => 'गलत अनुमति वाली फ़ाइलें दिखाएँ',
    'LBL_UW_SHOW_SCHEMA' => 'स्कीमा परिवर्तन स्क्रिप्ट दिखाएँ',
    'LBL_UW_SHOW_SQL_ERRORS' => 'खराब क्वेरीज़ दिखाएँ',
    'LBL_UW_SHOW' => 'प्रदर्शन',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'छोड़ी गई फ़ाइलें',
    'LBL_UW_SQL_RUN' => 'जाँचें कि SQL को मैन्युअल रूप से कब चलाया गया है',
    'LBL_UW_START_DESC' => 'यह विज़ार्ड इस सूइटसीआरएम इंस्टैंस को अपग्रेड करने में आपकी सहायता करेगा।',
    'LBL_UW_START_DESC2' => 'नोट: हम अत्यधिक अनुशंसा करते हैं कि आप उत्पादन में उपयोग किए जाने वाले SuiteCRM इंस्टेंस की एक प्रति बनाएँ, और नए संस्करण को परिनियोजित करने से पहले अपग्रेड पैकेज का परीक्षण करें। यदि आपने "composer.json" फ़ाइल बदल दी है, तो कृपया, अपग्रेड प्रक्रिया पूरी होने के बाद, यह कमांड चलाएँ:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'अपने सिस्टम पर जाँच करने के लिए अगला क्लिक करें ताकि यह सुनिश्चित हो सके कि सिस्टम अपग्रेड के लिए तैयार है। जाँच में फ़ाइल अनुमतियाँ, डेटाबेस विशेषाधिकार और सर्वर सेटिंग शामिल हैं।',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'नया अपग्रेड विज़ार्ड अब अपग्रेड प्रक्रिया को फिर से शुरू करेगा। कृपया अपना अपग्रेड जारी रखें।',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'नए अपग्रेड विज़ार्ड में आपका स्वागत है',

    'LBL_UW_TITLE_CANCEL' => 'रद्द करें',
    'LBL_UW_TITLE_COMMIT' => 'प्रतिबद्ध उन्नयन',
    'LBL_UW_TITLE_END' => 'सवाल-जवाब',
    'LBL_UW_TITLE_PREFLIGHT' => 'उड़ान पूर्व जांच',
    'LBL_UW_TITLE_START' => 'स्वागत है',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'सिस्टम जांच',
    'LBL_UW_TITLE_UPLOAD' => 'पैकेज अपलोड करें',
    'LBL_UW_TITLE' => 'उन्नत जादूगर ',
    'LBL_UW_UNINSTALL' => 'अप्रतिष्ठापन',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'लाइसेंस स्वीकार करें',
    'LBL_UW_CONVERT_THE_LICENSE' => 'लाइसेंस परिवर्तित करें',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'प्रारंभ प्रगति पर है',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'सिस्टम जाँच प्रगति पर है',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'लाइसेंस जाँच जारी है',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'उड़ान-पूर्व जांच जारी है',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'फ़ाइल कॉपी करने का काम जारी है',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'प्रतिबद्ध उन्नयन प्रगति पर है',
    'LBL_UW_COMMIT_DESC' => 'अतिरिक्त अपग्रेड स्क्रिप्ट चलाने के लिए अगला क्लिक करें.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'स्क्रिप्ट अपग्रेड करने का काम जारी है',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'अपग्रेड सारांश प्रगति पर है',
    'LBL_UPGRADE_IN_PROGRESS' => 'प्रगति पर है     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'समय बीता',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'अपग्रेड रद्द करें और सफाई जारी है',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'अपग्रेड में कुछ समय लग सकता है',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'प्रगति में जाँच अपलोड करें',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'अपग्रेड पैकेज अपलोड करना ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'अपग्रेड विज़ार्ड पुराने 451 स्कीमा को हटा देता है',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'मैनुअल ड्रॉप स्कीमा पोस्ट अपग्रेड',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'पुरानी स्कीमा ड्रॉप विधि',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'पुराने स्कीमा दिखाएँ जिन्हें हटाया जा सकता है',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'छोड़े गए प्रश्न',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php संस्करण 5 या उससे ऊपर की आवश्यकता है.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP का आपका संस्करण SuiteCRM द्वारा समर्थित नहीं है। आपको एक संस्करण स्थापित करने की आवश्यकता होगी जो सुइटसीआरएम एप्लिकेशन के साथ संगत हो। कृपया समर्थित PHP संस्करणों के लिए रिलीज नोट्स में संगतता मैट्रिक्स से परामर्श लें। आपका संस्करण है ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php बैकवर्ड कम्पैटिबिलिटी मोड चालू है। आगे बढ़ने के लिए zend.ze1_compatibility_mode को बंद पर सेट करें',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'कार्रवाई',
    'LBL_ML_CANCEL' => 'रद्द करें',
    'LBL_ML_COMMIT' => 'पक्का करो',
    'LBL_ML_DESCRIPTION' => 'विवरण',
    'LBL_ML_INSTALLED' => 'स्थापित तिथि',
    'LBL_ML_NAME' => 'नाम',
    'LBL_ML_PUBLISHED' => 'प्रकाशित तिथि',
    'LBL_ML_TYPE' => 'प्रकार',
    'LBL_ML_UNINSTALLABLE' => 'अनइंस्टॉल किये',
    'LBL_ML_VERSION' => 'संस्करण',
    'LBL_ML_INSTALL' => 'स्थापित करना',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'आपका वर्तमान php संस्करण है: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'अनुशंसित php संस्करण है ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' या उससे अधिक.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'अपग्रेडविज़ार्ड',
    'LBL_UPLOAD_SUCCESS' => 'अपग्रेड पैकेज सफलतापूर्वक अपलोड हो गया है। अंतिम जांच करने के लिए अगला क्लिक करें।',
    'LBL_UW_TITLE_LAYOUTS' => 'लेआउट की पुष्टि करें',
    'LBL_LAYOUT_MODULE_TITLE' => 'रूपरेखा',
    'LBL_LAYOUT_MERGE_DESC' => 'ऐसे नए फ़ील्ड उपलब्ध हैं जिन्हें इस अपग्रेड के भाग के रूप में जोड़ा गया है और इन्हें आपके मौजूदा मॉड्यूल लेआउट में स्वचालित रूप से जोड़ा जा सकता है। नए फ़ील्ड के बारे में अधिक जानने के लिए, कृपया उस संस्करण के लिए रिलीज़ नोट्स देखें जिसमें आप अपग्रेड कर रहे हैं।<br><br>यदि आप नए फ़ील्ड जोड़ना नहीं चाहते हैं, तो कृपया मॉड्यूल को अनचेक करें, और आपके कस्टम लेआउट अपरिवर्तित रहेंगे। अपग्रेड के बाद फ़ील्ड स्टूडियो में उपलब्ध होंगे। <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'परिवर्तनों की पुष्टि करने और अपग्रेड पूरा करने के लिए अगला क्लिक करें.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'अपग्रेड पूरा करने के लिए अगला क्लिक करें.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'लेआउट की पुष्टि करें',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'लेआउट परिणाम की पुष्टि करें',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'निम्नलिखित लेआउट सफलतापूर्वक मर्ज किये गये:',
    'LBL_SELECT_FILE' => 'फ़ाइल का चयन करें:',
    'ERROR_VERSION_INCOMPATIBLE' => 'अपलोड की गई फ़ाइल SuiteCRM के इस संस्करण के साथ संगत नहीं है: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'अपलोड की गई फ़ाइल PHP के इस संस्करण के साथ संगत नहीं है: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'अपलोड की गई फ़ाइल SuiteCRM के इस संस्करण के साथ संगत नहीं है: ',
    'LBL_LANGPACKS' => 'भाषा पैक' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'मॉड्यूल लोडर' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'पैच अपग्रेड' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'विषय-वस्तु' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'कार्यप्रवाह' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'अपग्रेड करें' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'प्रसंस्करण' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'संगत संस्करण मैनिफ़ेस्ट फ़ाइल में सेट नहीं है',
    'LBL_UPGRD_CSTM_CHK' => 'अपग्रेड प्रक्रिया कुछ फ़ाइलों को अपडेट करेगी लेकिन ये फ़ाइलें कस्टम/ फ़ोल्डर में भी मौजूद हैं। कृपया आगे बढ़ने से पहले परिवर्तनों की समीक्षा करें:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'अपलोड की गई फ़ाइल php.ini में upload_max_filesize निर्देश से अधिक है।',
        2 => 'अपलोड की गई फ़ाइल HTML फॉर्म में निर्दिष्ट MAX_FILE_SIZE निर्देश से अधिक है।',
        3 => 'अपलोड की गई फ़ाइल केवल आंशिक रूप से अपलोड की गई थी।',
        4 => 'कोई फ़ाइल अपलोड नहीं की गई.',
        5 => 'अज्ञात त्रुटि‍.',
        6 => 'कोई अस्थायी फ़ोल्डर छोड़ देना।',
        7 => 'डिस्क पर फ़ाइल लिखने में विफल.',
        8 => 'एक्सटेंशन द्वारा फ़ाइल अपलोड रोका गया.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'चेतावनी: पासवर्ड समाप्ति तिथि कोई नहीं पर सेट है!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'कृपया अपनी सेटिंग यहां अपडेट करें',
);
