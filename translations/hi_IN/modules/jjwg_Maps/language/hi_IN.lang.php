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

$mod_strings['LBL_MAP'] = 'मानचित्र';
$mod_strings['LBL_MODULE_NAME'] = 'मानचित्र';
$mod_strings['LBL_MODULE_TITLE'] = 'मानचित्र: होम';
$mod_strings['LBL_MODULE_ID'] = 'मानचित्र';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'मानचित्र सूची';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'कस्टम मार्कर';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'कस्टम क्षेत्र';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'मेरे मानचित्र सूची';

$mod_strings['LBL_FLEX_RELATE'] = '(केन्द्र) से संबंधित:';
$mod_strings['LBL_MODULE_TYPE'] = 'प्रदर्शित करने हेतु मॉड्यूल प्रकार:';
$mod_strings['LBL_DISTANCE'] = 'दूरी (त्रिज्या):';
$mod_strings['LBL_UNIT_TYPE'] = 'इकाई प्रकार:';

$mod_strings['LBL_MAP_DISPLAY'] = 'मानचित्र प्रदर्शन';
$mod_strings['LBL_MAP_LEGEND'] = 'दंतकथा:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'समूह:';
$mod_strings['LBL_MAP_GROUP'] = 'समूह';
$mod_strings['LBL_MAP_TYPE'] = 'प्रकार';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'को असाइन किया:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'दिशा - निर्देश प्राप्त करें';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'गूगल मैप्स दृश्य';

$mod_strings['LNK_NEW_MAP'] = 'नया मानचित्र जोड़ें';
$mod_strings['LNK_NEW_RECORD'] = 'नया मानचित्र जोड़ें';
$mod_strings['LNK_MAP_LIST'] = 'सूची मानचित्र';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'जियोकोडिंग टेस्ट';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'त्वरित त्रिज्या मानचित्र';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'कोई नहीं';
$mod_strings['LBL_MAP_ADDRESS'] = 'पता';
$mod_strings['LBL_MAP_PROCESS'] = 'इसकी प्रक्रिया!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'अंतिम जियोकोड स्थिति';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'मॉड्यूल जियोकोडेड गणना';
$mod_strings['LBL_CRON_URL'] = 'क्रॉन यूआरएल:';
$mod_strings['LBL_MODULE_HEADING'] = 'मोड्यूल';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'शून्य परिणाम';
$mod_strings['LBL_OK'] = 'ठीक है';
$mod_strings['LBL_INVALID_REQUEST'] = 'अमान्य अनुरोध';
$mod_strings['LBL_APPROXIMATE'] = 'अनुमानित';
$mod_strings['LBL_EMPTY'] = 'खाली';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'कुल';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'रीसेट';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'नीचे दी गई तालिका जियोकोडेड मॉड्यूल ऑब्जेक्ट की संख्या दिखाती है, जिसे जियोकोडिंग प्रतिक्रिया द्वारा समूहीकृत किया गया है। ध्यान रखें कि मानक Google मानचित्र उपयोग सीमा प्रति दिन 2500 अनुरोध है। यह मॉड्यूल प्रसंस्करण के दौरान पते की जियोकोडिंग जानकारी को कैश करेगा ताकि आवश्यक अनुरोधों की कुल संख्या कम हो सके।';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'जियोकोडिंग अनुरोधों को संसाधित करने के लिए रात्रिकालीन क्रॉन-जॉब सेटअप करने की अनुशंसा की जाती है। इस उद्देश्य के लिए एक कस्टम एंट्री पॉइंट बनाया गया है और इसे प्रमाणीकरण के बिना एक्सेस किया जा सकता है। नीचे दिखाया गया URL एक प्रशासनिक शेड्यूल किए गए कार्य के साथ उपयोग करने के लिए है। अधिक जानकारी के लिए कृपया दस्तावेज़ देखें।';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'यूआरएल निर्यात करें';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'जियोकोडिंग जानकारी की आवश्यकता वाले पूर्ण पतों को निर्यात करने के लिए नीचे दिए गए लिंक का उपयोग करें। फिर पतों को जियोकोड करने के लिए ऑनलाइन या ऑफ़लाइन बैच जियोकोडिंग टूल का उपयोग करें। जब आप जियोकोडिंग समाप्त कर लें, तो अपने मानचित्रों के साथ उपयोग करने के लिए पते को एड्रेस कैश मॉड्यूल में आयात करें। ध्यान दें, एड्रेस कैश मॉड्यूल वैकल्पिक है। सभी जियोकोडिंग जानकारी प्रतिनिधि मॉड्यूल में संग्रहीत की जाती है।';
$mod_strings['LBL_ADDRESS_CACHE'] = 'पता कैश';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'लक्ष्य सूची में जोड़ें';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'संसाधित हो रहा है...';


$mod_strings['LBL_CONFIG_TITLE'] = 'कॉन्फ़िगरेशन सेटिंग्स';
$mod_strings['LBL_CONFIG_SAVED'] = 'सेटिंग्स सफलतापूर्वक सहेजी गईं!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'बिल भेजने का पता';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'शिपिंग पता';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'प्राथमिक पता';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'वैकल्पिक पता';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'फ्लेक्स संबंधित';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'पता (सरल, उपयोगकर्ता)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'कस्टम (कस्टम नियंत्रक तर्क)';
$mod_strings['LBL_ENABLED'] = 'सक्रिय';
$mod_strings['LBL_DISABLED'] = 'विकलांग';
$mod_strings['LBL_DEFAULT'] = 'डिफॉल्ट:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'डिफॉल्ट:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'वैध जियोकोड मॉड्यूल:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'वैध जियोकोड तालिकाएँ:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "पता प्रकार सेटिंग: यह मॉड्यूल के पता प्रकारों को परिभाषित करता है जिनका उपयोग पतों को जियोकोड करते समय किया जाता है। स्वीकार्य मान: 'बिलिंग'; 'शिपिंग'; 'प्राथमिक'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'पता प्रकार ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'खातों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'संपर्कों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'लीड्स के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'अवसरों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(संबंधित खाते का)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'मामलों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'परियोजनाओं के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(संबंधित खाता/अवसर का)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'बैठकों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'संभावित/लक्ष्यों के लिए पता प्रकार:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'फ्लेक्स रिलेट फील्ड के माध्यम से संबंधित ऑब्जेक्ट';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "मार्कर समूह फ़ील्ड सेटिंग: यह मानचित्र पर मार्कर प्रदर्शित करते समय समूह पैरामीटर के रूप में उपयोग किए जाने वाले 'फ़ील्ड' को परिभाषित करता है। उदाहरण: असाइन किया गया उपयोगकर्ता नाम, उद्योग, स्थिति, बिक्री चरण, प्राथमिकता";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'समूह फ़ील्ड के लिए ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'खातों के लिए समूह फ़ील्ड:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'संपर्कों के लिए समूह फ़ील्ड:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'लीड्स के लिए समूह फ़ील्ड:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'अवसरों के लिए समूह क्षेत्र:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'मामलों के लिए समूह फ़ील्ड:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'परियोजनाओं के लिए समूह फ़ील्ड:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'बैठकों के लिए समूह क्षेत्र:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'संभावनाओं/लक्ष्यों के लिए समूह क्षेत्र:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'जियोकोडिंग/गूगल सेटिंग्स:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'जियोकोडिंग एपीआई यूआरएल:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google मानचित्र API V3 या प्रॉक्सी का URL';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'प्रॉक्सी के लिए गुप्त वाक्यांश:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'प्रॉक्सी MD5 तुलना के साथ उपयोग किया जाने वाला गुप्त वाक्यांश।';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'जियोकोडिंग सीमा:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' जियोकोड के लिए रिकॉर्ड का चयन करते समय क्वेरी सीमा निर्धारित करता है।";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'गूगल जियोकोडिंग सीमा:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' Google मानचित्र API का उपयोग करते हुए जियोकोडिंग करते समय अनुरोध सीमा निर्धारित करता है।";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'निर्यात पते की सीमा:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' निर्यात करने के लिए रिकॉर्ड का चयन करते समय क्वेरी सीमा निर्धारित करता है।";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'अनुमानित' स्थान प्रकारों की अनुमति दें:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - 'APPROXIMATE' स्थान प्रकारों को 'OK' जियोकोडिंग परिणाम माना जाता है।";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'पता कैश सेटिंग्स:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'पता कैश सक्षम करें (प्राप्त करें):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' पता कैश मॉड्यूल को कैश तालिका से डेटा पुनर्प्राप्त करने की अनुमति देता है।";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'पता कैश सहेजना सक्षम करें (सहेजें):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' पता कैश मॉड्यूल को कैश तालिका में डेटा सहेजने की अनुमति देता है।";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'तर्क हुक सेटिंग:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'सभी लॉजिक हुक सक्षम करें: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' संबंधित ऑब्जेक्ट के आधार पर स्वचालित अपडेट के लिए लॉजिक हुक की अनुमति देता है। अपने SuiteCRM को अपग्रेड करते समय इसे अक्षम करने की अनुशंसा की जाती है।";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'मार्कर/मैपिंग सेटिंग्स:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "मानचित्र मार्कर सीमा:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' मानचित्र पर प्रदर्शित करने के लिए अभिलेखों का चयन करते समय क्वेरी सीमा निर्धारित करता है।";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "मानचित्र डिफ़ॉल्ट केंद्र अक्षांश:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' मानचित्रों के लिए डिफ़ॉल्ट केंद्र अक्षांश स्थिति निर्धारित करता है।";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "मानचित्र डिफ़ॉल्ट केंद्र देशांतर:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' मानचित्रों के लिए डिफ़ॉल्ट केंद्र देशांतर स्थिति निर्धारित करता है।";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "मानचित्र डिफ़ॉल्ट इकाई प्रकार:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' दूरी की गणना के लिए डिफ़ॉल्ट इकाई माप प्रकार सेट करता है। मान: 'mi' (मील) या 'km' (किलोमीटर)।";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "मानचित्र डिफ़ॉल्ट दूरी:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' दूरी आधारित मानचित्रों के लिए प्रयुक्त डिफ़ॉल्ट दूरी निर्धारित करता है।";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "मानचित्र डुप्लिकेट मार्कर समायोजन:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' डुप्लिकेट मार्कर स्थिति के मामले में देशांतर और अक्षांश में जोड़े जाने वाले ऑफसेट समायोजन को सेट करता है।";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "मानचित्र मार्कर क्लस्टर ग्रिड आकार:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' का उपयोग मानचित्र क्लस्टरर्स की गणना के लिए ग्रिड आकार निर्धारित करने के लिए किया जाता है।";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "मानचित्र मार्कर क्लस्टरर अधिकतम ज़ूम:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' का उपयोग अधिकतम ज़ूम स्तर निर्धारित करने के लिए किया जाता है जिस पर क्लस्टरिंग लागू नहीं होगी।";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "महत्वपूर्ण नोट: सभी सहेजी गई सेटिंग्स 'jjwg' श्रेणी के अंतर्गत 'config' तालिका में पाई जा सकती हैं। ध्यान दें, सेटिंग्स को ओवरराइड करने के लिए अब कस्टम controller.php फ़ाइल का उपयोग नहीं किया जाना चाहिए।";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'क्षेत्रों';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'मार्करों';
$mod_strings['LBL_PARENT_ID'] = 'माता पिता की पहचान';
$mod_strings['LBL_JJWP_PARTNERS'] = 'जेजेडब्ल्यूपी पार्टनर्स';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'एक कुंजी प्राप्त करें';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'गूगल एपीआई कुंजी';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'कृपया Google मानचित्र प्रशासनिक पैनल में Google Api कुंजी सेट करें.';
