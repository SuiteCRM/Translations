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
    'LBL_MODULE_NAME' => 'මුල',
    'LBL_NEW_FORM_TITLE' => 'නව අමතන්න',
    'LBL_FIRST_NAME' => 'මුල් නම:',
    'LBL_LAST_NAME' => 'අවසන් නම:',
    'LBL_LIST_LAST_NAME' => 'අවසන් නම',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'මගේ නල',
    'LBL_PIPELINE_FORM_TITLE' => 'විකුණුම් අදියර වන විට නල',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'විකුණුම් අදියර වන විට නල',
    'LNK_NEW_CONTACT' => 'ඇමතුම් සාදන්න',
    'LNK_NEW_ACCOUNT' => 'ගිණුම තනන්න',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_LEAD' => ' ඊයම් සාදන්න',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_EMAIL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_BUG' => 'වාර්තාව බග්',
    'LNK_NEW_SEND_EMAIL' => ' විද්යුත් රචනා',
    'LBL_NO_ACCESS' => 'ඔබ මෙම ප්රදේශයේ ප්රවේශ නැහැ. ප්රවේශ ලබා ගැනීම සඳහා ඔබේ වෙබ් අඩවිය පරිපාලක අමතන්න',
    'LBL_NO_RESULTS_IN_MODULE' => '- නෑ ප්රතිඵල -',
    'LBL_NO_RESULTS' => '<h2> සොයා ප්රතිඵල කිසිවක් නොමැත. නැවත සොයන්න කරන්න. </ H2> <br>',
    'LBL_NO_RESULTS_TIPS' => '<h3> සොයන්න ඉඟි:.. </ h3> <ul> <li> ඔබට ඉහත තේරූ නිසි කාණ්ඩ තිබෙන බවට වග බලා ගන්න </ li> <li> ඔබගේ සෙවුම් නිර්ණායක පුළුල් </ li> <li> ඔබට තවමත් සොයා ගැනීමට නොහැකි නම්, ප්රතිඵල කිසිවක් දියුණු කළ සෙවුම් විකල්පය උත්සාහ කරන්න. </ li> </ ul>',

    'LBL_ADD_DASHLETS' => 'SuiteCRM Dashlets එකතු කරන්න',
    'LBL_WEBSITE_TITLE' => 'වෙබ් අඩවිය',
    'LBL_RSS_TITLE' => 'පුවත් සංග්රහ',
    'LBL_CLOSE_DASHLETS' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_OPTIONS' => 'විකල්ප',
    // dashlet search fields
    'LBL_TODAY' => 'අද',
    'LBL_YESTERDAY' => 'ඊයේ',
    'LBL_TOMORROW' => 'හෙට',
    'LBL_NEXT_WEEK' => 'ලබන සතිය',
    'LBL_LAST_7_DAYS' => 'පසුගිය 7 දින',
    'LBL_NEXT_7_DAYS' => 'ඉදිරි දින 7',
    'LBL_LAST_MONTH' => 'පසුගිය මාසික',
    'LBL_NEXT_MONTH' => 'ඉදිරි මාසය',
    'LBL_LAST_YEAR' => 'පසුගිය වසර',
    'LBL_NEXT_YEAR' => 'ලබන වසර',
    'LBL_LAST_30_DAYS' => 'පසුගිය දින 30',
    'LBL_NEXT_30_DAYS' => 'ඉදිරි දින 30',
    'LBL_THIS_MONTH' => 'මේ මාසය',
    'LBL_THIS_YEAR' => 'මෙම වර්ෂය',

    'LBL_MODULES' => 'මොඩියුල',
    'LBL_CHARTS' => 'ප්රස්ථාර',
    'LBL_TOOLS' => 'මෙවලම්',
    'LBL_WEB' => 'වියමන',
    'LBL_SEARCH_RESULTS' => 'සොයන්න ප්රතිඵල',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'මොඩියුලය දසුන්',
        'Portal' => 'ද්වාරය',
        'Charts' => 'ප්රස්ථාර',
        'Tools' => 'මෙවලම්',
        'Miscellaneous' => 'විවිධ'
    ),
    'LBL_ADDING_DASHLET' => ' SuiteCRM Dashlet එක් කරමින් ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet එකතු',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'ඔබ මෙම SuiteCRM Dashlet ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_REMOVING_DASHLET' => ' SuiteCRM Dashlet ඉවත් ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet ඉවත්',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'ජනරාල්',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'පෙරහන්',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'පමණක් මගේ අයිතම',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'සිරැසිය',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'විදහා පේළි',

    'LBL_DASHLET_DELETE' => 'SuiteCRM Dashlet Delete',
    'LBL_DASHLET_REFRESH' => 'SuiteCRM Dashlet refresh කරන්න',
    'LBL_DASHLET_EDIT' => 'සංස්කරණය කරන්න SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'මගේ SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',

    'LBL_SEARCH' => 'ගවේෂණය',
    'LBL_CLEAR' => ' පැහැදිලි',

    'LBL_BASIC_CHARTS' => 'මූලික ප්රස්ථාර සටහන්',

    'LBL_DASHLET_SEARCH' => 'SuiteCRM Dashlet සොයන්න',

//ABOUT page
    'LBL_VERSION' => 'පිටපත',
    'LBL_BUILD' => 'ගොඩනගනු',

    'LBL_SOURCE_SUGAR' => 'SugarCRM ඉන්ක් - ක්රිස්තු වර්ෂ රාමුව සපයන්නන්',

    'LBL_DASHLET_TITLE' => 'මාගේ අඩවි',
    'LBL_DASHLET_OPT_TITLE' => 'සිරැසිය',
    'LBL_DASHLET_INCORRECT_URL' => 'වැරදි වෙබ් අඩවිය ස්ථානය දක්වා ඇත',
    'LBL_DASHLET_OPT_URL' => 'වෙබ් අඩවිය ස්ථානය',
    'LBL_DASHLET_OPT_HEIGHT' => '(පික්සල් වලින්) Dashlet උස',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM පුවත්',
    'LBL_DASHLET_DISCOVER_SUITE' => ' ඩිස්කවර් SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'මුල් පිටුව අයිකනය',
    'LBL_TOUR_HOME_DESCRIPTION' => 'ඉක්මනින් ආපහු එක් ක්ලික් ඔබේ මුල් පිටුව උපකරණ පුවරුව ලබා ගන්න',
    'LBL_TOUR_MODULES' => 'මොඩියුල',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'ඔබගේ සියලු වැදගත් මොඩියුලයන් ඇත.',
    'LBL_TOUR_MORE' => 'තවත් මොඩියුල',
    'LBL_TOUR_MORE_DESCRIPTION' => 'ඔබගේ මොඩියුල ඉතිරි මෙතන.',
    'LBL_TOUR_SEARCH' => 'පූර්ණ පෙළ සොයන්න',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'සොයන්න යන්තම් මුළු ගොඩක් හොඳ විය.',
    'LBL_TOUR_NOTIFICATIONS' => 'දැනුම්දීම්',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SiteCORE අයදුම් දැනුම්දීම් මෙහි යන්න ඇත.',
    'LBL_TOUR_PROFILE' => 'පැතිකඩ',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'ප්රවේශ පැතිකඩ සැකසීම් සහ පිට වීමේ.',
    'LBL_TOUR_QUICKCREATE' => ' ඉක්මන් සාදන්න',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'ඉක්මනින් ඔබේ ස්ථානය අහිමි තොරව වාර්තා නිර්මාණය කරන්න.',
    'LBL_TOUR_FOOTER' => 'කොටසේ, පාදක',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'පහසුවෙන් පාලනය කරන්න තැබුවහොත් පුළුල් කිරීමට සහ බිඳ.',
    'LBL_TOUR_CUSTOM' => 'රේගු යෙදුම්',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'රේගු මනුෂ්යත්වයක් මෙහි යන්න ඇත.',
    'LBL_TOUR_BRAND' => 'ඔබේ වෙළඳ නාමය',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'ඔබේ ලාංඡනය මෙතන යයි. ඔබ වැඩිදුර තොරතුරු සඳහා වැඩි මූසිකය පුළුවන්.',
    'LBL_TOUR_WELCOME' => 'SuiteCRM ඔබ සාදරයෙන් පිළිගනිමු',
    'LBL_TOUR_WATCH' => 'SiteCORE මොනවාද නව Watch',
    'LBL_TOUR_FEATURES' => '<ul ශෛලිය = ""> <li class = "අයිකනය-හරි"> නව සරල සංචලනය තීරුව </ li> <li class = "අයිකනය-හරි"> නව කොටසේ පාදකය </ li> <li class = "අයිකනය-හරි "> වැඩිදියුණු සොයන්න </ li> <li class =" අයිකනය-හරි "> යාවත්කාලීන කිරීම ක්රියාවන් මෙනුව </ li> </ ul> <p> හා තවත් බොහෝ දේ! </ p>',
    'LBL_TOUR_VISIT' => 'වැඩි විස්තර සඳහා අපගේ අයදුම් අඩවියට පිවිසෙන්න',
    'LBL_TOUR_DONE' => 'ඔබ සිදු කරන ලදි නැවත \!',
    'LBL_TOUR_REFERENCE_1' => 'සෑම විටම ඔබට, අපගේ අදාල හැකි',
    'LBL_TOUR_REFERENCE_2' => 'පැතිකඩ ටැබය යටතේ ඇති "සහාය" සබැඳිය හරහා.',
    'LNK_TOUR_DOCUMENTATION' => 'ලේඛගතකිරීම',
    'LBL_TOUR_CALENDAR_URL_1' => 'ඔබ එවැනි මයික්රොසොෆ්ට් ඉදිරි දැක්මක් හෝ විනිමය ලෙස 3 වන පාර්ශවීය වැඩසටහන් සමඟ ඔබේ SuiteCRM දින දර්ශනය බෙදා කරන්නේ කෙසේද? එසේ නම් ඔබ නව URL එක තියෙනවා. මෙම නව වඩා ආරක්ෂිත URL එක ඔබේ දින දර්ශනයේ අනවසරයෙන් ප්රකාශන අවුරාලන පෞද්ගලික යතුර ඇතුලත් වේ.',
    'LBL_TOUR_CALENDAR_URL_2' => 'ඔබගේ නව හවුල් දින දර්ශනය URL එක ලබාගන්න.',
    'LBL_CONTRIBUTORS' => 'දායක වූවෝ',
    'LBL_ABOUT_SUITE' => 'SiteCORE ගැන',
    'LBL_PARTNERS' => 'හවුල්කරුවන්',
    'LBL_EDIT_ALL_RECURRENCES' => 'සංස්කරණය කරන්න සියලුම සිදුවීම්',
    'LBL_REMOVE_ALL_RECURRENCES' => 'සියලුම සිදුවීම් Delete',
    'LBL_CONFIRM_REMOVE' => 'ඔබ වාර්තාව ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - ලොව සඳහා විවෘත කේත සී.ආර්.එම්',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'ජේසන් එගර්ස් විසින් ආරක්ෂක සූට්',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'ජෙෆ්රි ජේ වෝල්ටර්ස් විසින් JJWDesign Google සිතියම්',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM විවෘත මූලාශ්ර බලපත්රය යටතේ පල වේ - GPL 3',
    'LBL_ABOUT_SUITE_4' => 'මෙම ව්යාපෘතිය මගින් කළමනාකරණය හා සංවර්ධනය සියලුම SuiteCRM කේතය විවෘත මූලාශ්ර ලෙස නිකුත් කරනු ඇත - GPL 3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM සහාය නිදහස් හා ගෙවා-සඳහා විකල්ප යන දෙයාකාරයෙන්ම පවතී',

    'LBL_SUITE_PARTNERS' => 'අපි විවෘත මූලාශ්ර පිළිබඳව මහත් සිටින විශ්වාසවන්ත SiteCORE හවුල්කරුවන් ඇති. අපගේ සම්පූර්ණ සහකරු ලැයිස්තුව බැලීමට අපේ වෙබ් බලන්න.',

    'LBL_SAVE_BUTTON' => 'සුරකින්න',
    'LBL_DELETE_BUTTON' => 'මකා',
    'LBL_APPLY_BUTTON' => 'අයදුම් කරන්න',
    'LBL_SEND_INVITES' => 'ආරාධනා සුරකින්න & යවන්න',
    'LBL_CANCEL_BUTTON' => 'අවලංගු කරන්න',
    'LBL_CLOSE_BUTTON' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',

    'LBL_CREATE_NEW_RECORD' => 'ක්රියාකාරකම් නිර්මාණය',
    'LBL_CREATE_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LBL_CREATE_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',

    'LBL_GENERAL_TAB' => 'විස්තර',
    'LBL_PARTICIPANTS_TAB' => 'ආරාධිත අමුත්තන්',
    'LBL_REPEAT_TAB' => 'පුනරාගමනය',

    'LBL_REPEAT_TYPE' => 'නැවත',
    'LBL_REPEAT_INTERVAL' => 'සෑම',
    'LBL_REPEAT_END' => ' අවසානය',
    'LBL_REPEAT_END_AFTER' => 'පසු',
    'LBL_REPEAT_OCCURRENCES' => 'නිතර මෙම',
    'LBL_REPEAT_END_BY' => 'විසින්',
    'LBL_REPEAT_DOW' => '	මත',
    'LBL_REPEAT_UNTIL' => 'තුරු නැවත නැවත',
    'LBL_REPEAT_COUNT' => 'සිදුවීම් සංඛ්යාව',
    'LBL_REPEAT_LIMIT_ERROR' => 'ඔබගේ ඉල්ලීම $ සීමාව රැස්වීම් වඩා නිර්මාණය කිරීමට යන්නේ.',

    //Events
    'LNK_EVENT' => 'අවස්ථාවට',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'සිරැසිය: ',
    'LBL_HOUR_ABBREV' => 'පැය',
    'LBL_HOURS_ABBREV' => 'පැය',
    'LBL_MINSS_ABBREV' => 'මිනිත්තු',
    'LBL_LOCATION' => 'පිහිටීම:',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_DESCRIPTION' => ' විස්තරය:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
