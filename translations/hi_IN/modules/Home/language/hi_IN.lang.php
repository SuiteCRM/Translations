<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'निवास',
    'LBL_NEW_FORM_TITLE' => 'नया संपर्क',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_LAST_NAME' => 'अंतिम नाम:',
    'LBL_LIST_LAST_NAME' => 'परिवार का नाम',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_EMAIL_ADDRESS' => 'ई-मेल पता:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'मेरी पाइपलाइन',
    'LBL_PIPELINE_FORM_TITLE' => 'बिक्री चरण द्वारा पाइपलाइन',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'बिक्री चरण द्वारा पाइपलाइन',
    'LNK_NEW_CONTACT' => 'नया कोन्टैक्ट बनाएँ',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',
    'LNK_NEW_OPPORTUNITY' => 'अवसर बनाएँ',
    'LNK_NEW_LEAD' => 'लीड बनाएं',
    'LNK_NEW_CASE' => 'केस बनाएं',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_EMAIL' => 'ईमेल संग्रहित करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_NEW_BUG' => 'रिपोर्ट बग',
    'LNK_NEW_SEND_EMAIL' => 'ईमेल लिखें',
    'LBL_NO_ACCESS' => 'इस क्षेत्र तक आपकी पहुंच नहीं है. पहुंच प्राप्त करने के लिए अपने साइट व्यवस्थापक से संपर्क करें',
    'LBL_NO_RESULTS_IN_MODULE' => '-- कोई परिणाम नहीं --',
    'LBL_NO_RESULTS' => '<h2>कोई परिणाम नहीं मिला. कृपया पुनः खोजें.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>खोज युक्तियाँ:</h3><ul><li>सुनिश्चित करें कि आपने ऊपर उचित श्रेणियां चुनी हैं।</li><li>अपने खोज मानदंड को विस्तृत करें।</li><li>यदि आप अभी भी नहीं ढूंढ पा रहे हैं कोई भी परिणाम उन्नत खोज विकल्प आज़माएँ।</li></ul>',

    'LBL_ADD_DASHLETS' => 'सुइटसीआरएम डैशलेट जोड़ें',
    'LBL_WEBSITE_TITLE' => 'वेबसाइट',
    'LBL_RSS_TITLE' => 'समाचार फ़ीड',
    'LBL_CLOSE_DASHLETS' => 'बंद करें',
    'LBL_OPTIONS' => 'विकल्प',
    // dashlet search fields
    'LBL_TODAY' => 'आज',
    'LBL_YESTERDAY' => 'कल',
    'LBL_TOMORROW' => 'कल',
    'LBL_NEXT_WEEK' => 'अगले सप्ताह',
    'LBL_LAST_7_DAYS' => 'पिछले 7 दिन',
    'LBL_NEXT_7_DAYS' => 'अगले 7 दिन',
    'LBL_LAST_MONTH' => 'पिछला महीना',
    'LBL_NEXT_MONTH' => 'अगले महीने',
    'LBL_LAST_YEAR' => 'पिछले साल',
    'LBL_NEXT_YEAR' => 'अगले साल',
    'LBL_LAST_30_DAYS' => 'पिछले 30 दिन',
    'LBL_NEXT_30_DAYS' => 'अगले 30 दिन',
    'LBL_THIS_MONTH' => 'इस महीने',
    'LBL_THIS_YEAR' => 'इस साल',

    'LBL_MODULES' => 'मॉड्यूल',
    'LBL_CHARTS' => 'चार्ट्स',
    'LBL_TOOLS' => 'उपकरण',
    'LBL_WEB' => 'वेब',
    'LBL_SEARCH_RESULTS' => 'Search Results',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'मॉड्यूल दृश्य',
        'Portal' => 'पोर्टल',
        'Charts' => 'चार्ट्स',
        'Tools' => 'उपकरण',
        'Miscellaneous' => 'विविध'
    ),
    'LBL_ADDING_DASHLET' => 'सुइटसीआरएम डैशलेट जोड़ा जा रहा है...',
    'LBL_ADDED_DASHLET' => 'सुइटसीआरएम डैशलेट जोड़ा गया',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'क्या आप वाकई इस सुइटसीआरएम डैशलेट को हटाना चाहते हैं?',
    'LBL_REMOVING_DASHLET' => 'सुइटसीआरएम डैशलेट हटाया जा रहा है...',
    'LBL_REMOVED_DASHLET' => 'सुइटसीआरएम डैशलेट हटाया गया',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'सामान्य',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'फ़िल्टर',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'केवल मेरे आइटम',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'शीर्षक',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'पंक्तियाँ प्रदर्शित करें',

    'LBL_DASHLET_DELETE' => 'सुइटसीआरएम डैशलेट हटाएं',
    'LBL_DASHLET_REFRESH' => 'सुइटसीआरएम डैशलेट को रिफ्रेश करें',
    'LBL_DASHLET_EDIT' => 'सुइटसीआरएम डैशलेट संपादित करें',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'मेरा सुइटसीआरएम',
    'LBL_CLOSE_SITEMAP' => 'बंद करें',

    'LBL_SEARCH' => 'खोजें',
    'LBL_CLEAR' => 'साफ़ करें',

    'LBL_BASIC_CHARTS' => 'बुनियादी चार्ट',

    'LBL_DASHLET_SEARCH' => 'सुइटसीआरएम डैशलेट ढूंढें',

//ABOUT page
    'LBL_VERSION' => 'संस्करण',
    'LBL_BUILD' => 'निर्माण',

    'LBL_SOURCE_SUGAR' => 'शुगरसीआरएम इंक - सीई ढांचे के प्रदाता',

    'LBL_DASHLET_TITLE' => 'मेरी साइट ',
    'LBL_DASHLET_OPT_TITLE' => 'शीर्षक',
    'LBL_DASHLET_INCORRECT_URL' => 'ग़लत वेबसाइट स्थान निर्दिष्ट किया गया है',
    'LBL_DASHLET_OPT_URL' => 'वेबसाइट स्थान',
    'LBL_DASHLET_OPT_HEIGHT' => 'डैशलेट ऊंचाई (पिक्सेल में)',
    'LBL_DASHLET_SUITE_NEWS' => 'सुइटसीआरएम न्यूज़',
    'LBL_DASHLET_DISCOVER_SUITE' => 'सुइटसीआरएम खोजें',
    'LBL_BASIC_SEARCH' => 'त्वरित फ़िल्टर ' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'आधुनिक फ़िल्टर ' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'होम आइकन',
    'LBL_TOUR_HOME_DESCRIPTION' => 'एक क्लिक में तुरंत अपने होम पेज डैशबोर्ड पर वापस जाएँ।',
    'LBL_TOUR_MODULES' => 'मॉड्यूल',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'आपके सभी महत्वपूर्ण मॉड्यूल यहां हैं।',
    'LBL_TOUR_MORE' => 'अधिक मॉड्यूल',
    'LBL_TOUR_MORE_DESCRIPTION' => 'आपके बाकी मॉड्यूल यहां हैं.',
    'LBL_TOUR_SEARCH' => 'पूरा पाठ खोजें',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'खोज अब काफी बेहतर हो गई है।',
    'LBL_TOUR_NOTIFICATIONS' => 'सूचनाएं ',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'सुइटसीआरएम एप्लिकेशन सूचनाएं यहां जाएंगी।',
    'LBL_TOUR_PROFILE' => 'प्रोफ़ाइल',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'प्रोफ़ाइल, सेटिंग्स और लॉगआउट तक पहुंचें।',
    'LBL_TOUR_QUICKCREATE' => 'त्वरित निर्माण',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'अपना स्थान खोए बिना तुरंत रिकॉर्ड बनाएं।',
    'LBL_TOUR_FOOTER' => 'बंधनेवाला पाद',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'फ़ुटर को आसानी से विस्तृत और संक्षिप्त करें।',
    'LBL_TOUR_CUSTOM' => 'कस्टम ऐप्स',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'कस्टम एकीकरण यहां होंगे.',
    'LBL_TOUR_BRAND' => 'आपका ब्रांड',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'आपका लोगो यहाँ जाता है. अधिक जानकारी के लिए आप माउस पर क्लिक कर सकते हैं।',
    'LBL_TOUR_WELCOME' => 'सुइटसीआरएम में आपका स्वागत है',
    'LBL_TOUR_WATCH' => 'सुइटसीआरएम में नया क्या है देखें',
    'LBL_TOUR_FEATURES' => '<ul style=\'\'><li class=\'icon-ok\'>नया सरलीकृत नेविगेशन बार</li><li class=\'icon-ok\'>नया कोलैप्सेबल फ़ुटर</li><li class=\'icon-ok ">बेहतर खोज</li><li class="icon-ok">अद्यतित क्रिया मेनू</li></ul><p>और भी बहुत कुछ!</p>',
    'LBL_TOUR_VISIT' => 'अधिक जानकारी के लिए कृपया हमारे एप्लिकेशन पर जाएँ',
    'LBL_TOUR_DONE' => 'हो गया!',
    'LBL_TOUR_REFERENCE_1' => 'आप हमेशा हमारा संदर्भ ले सकते हैं',
    'LBL_TOUR_REFERENCE_2' => 'प्रोफ़ाइल टैब के अंतर्गत "सहायता फ़ोरम" लिंक के माध्यम से।',
    'LNK_TOUR_DOCUMENTATION' => 'दस्तावेज़ीकरण',
    'LBL_TOUR_CALENDAR_URL_1' => 'क्या आप अपना सुइटसीआरएम कैलेंडर माइक्रोसॉफ्ट आउटलुक या एक्सचेंज जैसे तृतीय पक्ष एप्लिकेशन के साथ साझा करते हैं? यदि हां, तो आपके पास एक नया यूआरएल है। इस नए, अधिक सुरक्षित URL में एक व्यक्तिगत कुंजी शामिल है जो आपके कैलेंडर के अनधिकृत प्रकाशन को रोकेगी।',
    'LBL_TOUR_CALENDAR_URL_2' => 'अपना नया साझा कैलेंडर URL पुनः प्राप्त करें.',
    'LBL_CONTRIBUTORS' => 'योगदानकर्ताओं',
    'LBL_ABOUT_SUITE' => 'सुइटसीआरएम के बारे में',
    'LBL_PARTNERS' => 'भागीदारों',
    'LBL_EDIT_ALL_RECURRENCES' => 'सभी पुनरावृत्तियाँ संपादित करें',
    'LBL_REMOVE_ALL_RECURRENCES' => 'सभी पुनरावृत्तियाँ हटाएँ',
    'LBL_CONFIRM_REMOVE' => 'क्या आप वाकई रिकॉर्ड हटाना चाहते हैं?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'सुइटसीआरएम - दुनिया के लिए ओपन सोर्स सीआरएम',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'जेसन एगर्स द्वारा सिक्योरिटीसुइट',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'जेफरी जे. वाल्टर्स द्वारा जेजेडब्ल्यूडिज़ाइन गूगल मैप्स',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'मेहनती प्रौद्योगिकी और व्यापार परामर्श जीएमबीएच द्वारा योगदान किए गए वर्कफ़्लो परिकलित फ़ील्ड',

    'LBL_LANGUAGE_ABOUT' => 'सुइटसीआरएम अनुवाद के बारे में',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'सुइटसीआरएम समुदाय द्वारा सहयोगात्मक अनुवाद',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'क्राउडिन का उपयोग करके अनुवाद बनाया गया',

    'LBL_ABOUT_SUITE_2' => 'सुइटसीआरएम एक ओपन सोर्स लाइसेंस - AGPLv3 के तहत प्रकाशित किया गया है',
    'LBL_ABOUT_SUITE_4' => 'परियोजना द्वारा प्रबंधित और विकसित किए गए सभी SuiteCRM कोड को ओपन सोर्स - AGPLv3 के रूप में जारी किया जाएगा',
    'LBL_ABOUT_SUITE_5' => 'सुइटसीआरएम समर्थन मुफ़्त और भुगतान दोनों विकल्पों में उपलब्ध है',

    'LBL_SUITE_PARTNERS' => 'हमारे पास वफादार सुइटसीआरएम भागीदार हैं जो ओपन सोर्स के प्रति उत्साही हैं। हमारी पूरी भागीदार सूची देखने के लिए, हमारी वेबसाइट देखें।',

    'LBL_SAVE_BUTTON' => 'रखना',
    'LBL_DELETE_BUTTON' => 'हटाएं',
    'LBL_APPLY_BUTTON' => 'लागू करें',
    'LBL_SEND_INVITES' => 'आमंत्रण सहेजें और भेजें',
    'LBL_CANCEL_BUTTON' => 'रद्द करें',
    'LBL_CLOSE_BUTTON' => 'बंद करें',

    'LBL_CREATE_NEW_RECORD' => 'गतिविधि बनाएँ',
    'LBL_CREATE_CALL' => 'कॉल लॉग करें',
    'LBL_CREATE_MEETING' => 'मीटिंग शेड्यूल करें',

    'LBL_GENERAL_TAB' => 'विवरण',
    'LBL_PARTICIPANTS_TAB' => 'आमंत्रित',
    'LBL_REPEAT_TAB' => 'पुनरावृत्ति',

    'LBL_REPEAT_TYPE' => 'दोहराएँ',
    'LBL_REPEAT_INTERVAL' => 'प्रत्येक',
    'LBL_REPEAT_END' => 'अंत',
    'LBL_REPEAT_END_AFTER' => 'बाद',
    'LBL_REPEAT_OCCURRENCES' => 'पुनरावृत्ति',
    'LBL_REPEAT_END_BY' => 'द्वारा',
    'LBL_REPEAT_DOW' => 'पर',
    'LBL_REPEAT_UNTIL' => 'दोहराओ जब तक',
    'LBL_REPEAT_COUNT' => 'पुनरावृत्तियों की संख्या',
    'LBL_REPEAT_LIMIT_ERROR' => 'आपका अनुरोध $limit से अधिक बैठकें बनाने वाला था।',

    //Events
    'LNK_EVENT' => 'घटना',
    'LNK_EVENT_VIEW' => 'घटना देखें',
    'LBL_DATE' => 'तारीख: ',
    'LBL_DURATION' => 'अवधि: ',
    'LBL_NAME' => 'शीर्षक: ',
    'LBL_HOUR_ABBREV' => 'घंटा',
    'LBL_HOURS_ABBREV' => 'घंटा',
    'LBL_MINSS_ABBREV' => 'मिनट',
    'LBL_LOCATION' => 'स्थान:',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_DESCRIPTION' => 'विवरण: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'खोज करते समय एक त्रुटि हुई है। आपका क्वेरी सिंटैक्स मान्य नहीं हो सकता है।',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'अनुरोधित SearchEngine ढूँढने में असमर्थ। खोज फिर से करने का प्रयास करें।',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Elasticsearch सर्वर से कनेक्ट करने में विफल।',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'खोज में आंतरिक त्रुटि हुई है।',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'खोज करते समय एक अज्ञात त्रुटि हुई है।',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'यदि समस्या बनी रहती है तो व्यवस्थापक से संपर्क करें. अधिक जानकारी लॉग में उपलब्ध है.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'एक या अधिक मॉड्यूल के लिए खोज सूचकांक नहीं मिल सका। कृपया सुनिश्चित करें कि crontab कॉन्फ़िगर किया गया है और चल रहा है, Elasticsearch कॉन्फ़िगरेशन खोलें और "पूर्ण अनुक्रमणिका शेड्यूल करें" पर क्लिक करें और अस्तित्व में न होने पर शेड्यूलर कार्य "Elasticsearch Indexer" बनाने पर विचार करें।',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'आपके खोज मापदंड से मेल खाने वाला कोई परिणाम नहीं। अपनी खोज को विस्तृत करने का प्रयास करें.',

    'LNK_TASK_VIEW' => 'कार्य देखें',
);
