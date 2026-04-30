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
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'මගේ නල',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'සබඳතාවය සාදන්න',
    'LNK_NEW_ACCOUNT' => 'ගිණුම සාදන්න',
    'LNK_NEW_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LNK_NEW_LEAD' => ' ඊයම් සාදන්න',
    'LNK_NEW_CASE' => ' නඩු සාදන්න',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම සාදන්න',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => ' විද්යුත් රචනා',
    'LBL_NO_ACCESS' => 'ඔබ මෙම ප්රදේශයේ ප්රවේශ නැහැ. ප්රවේශ ලබා ගැනීම සඳහා ඔබේ වෙබ් අඩවිය පරිපාලක අමතන්න',
    'LBL_NO_RESULTS_IN_MODULE' => '- නෑ ප්රතිඵල -',
    'LBL_NO_RESULTS' => '<h2> සොයා ප්රතිඵල කිසිවක් නොමැත. නැවත සොයන්න කරන්න. </ H2> <br>',
    'LBL_NO_RESULTS_TIPS' => '<h3> සොයන්න ඉඟි:.. </ h3> <ul> <li> ඔබට ඉහත තේරූ නිසි කාණ්ඩ තිබෙන බවට වග බලා ගන්න </ li> <li> ඔබගේ සෙවුම් නිර්ණායක පුළුල් </ li> <li> ඔබට තවමත් සොයා ගැනීමට නොහැකි නම්, ප්රතිඵල කිසිවක් දියුණු කළ සෙවුම් විකල්පය උත්සාහ කරන්න. </ li> </ ul>',

    'LBL_ADD_DASHLETS' => ' SuiteCRM Dashlets එකතු කරන්න',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'පුවත් සංග්රහ',
    'LBL_CLOSE_DASHLETS' => 'වසන්න',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'හෙට',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'ප්‍රස්ථාර',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'වියමන',
    'LBL_SEARCH_RESULTS' => 'සොයන්න ප්රතිඵල',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'මොඩියුලය දසුන්',
        'Portal' => 'ද්වාරය',
        'Charts' => 'ප්‍රස්ථාර',
        'Tools' => 'Tools',
        'Miscellaneous' => 'විවිධ'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'සිරැසිය',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'SuiteCRM Dashlet Delete',
    'LBL_DASHLET_REFRESH' => 'SuiteCRM Dashlet refresh කරන්න',
    'LBL_DASHLET_EDIT' => 'සංස්කරණය කරන්න SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'මගේ SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'වසන්න',

    'LBL_SEARCH' => 'සොයන්න',
    'LBL_CLEAR' => ' පැහැදිලි',

    'LBL_BASIC_CHARTS' => 'මූලික ප්රස්ථාර සටහන්',

    'LBL_DASHLET_SEARCH' => 'SuiteCRM Dashlet සොයන්න',

//ABOUT page
    'LBL_VERSION' => 'Version',
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
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'ඔබගේ සියලු වැදගත් මොඩියුලයන් ඇත.',
    'LBL_TOUR_MORE' => 'තවත් මොඩියුල',
    'LBL_TOUR_MORE_DESCRIPTION' => 'ඔබගේ මොඩියුල ඉතිරි මෙතන.',
    'LBL_TOUR_SEARCH' => 'පූර්ණ පෙළ සොයන්න',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'සොයන්න යන්තම් මුළු ගොඩක් හොඳ විය.',
    'LBL_TOUR_NOTIFICATIONS' => 'දැනුම්දීම්',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SiteCORE අයදුම් දැනුම්දීම් මෙහි යන්න ඇත.',
    'LBL_TOUR_PROFILE' => 'Profile',
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
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
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
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'වසන්න',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LBL_CREATE_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',

    'LBL_GENERAL_TAB' => 'විස්තර',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'සිරැසිය: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'තත්ත්වය:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',

    'LNK_TASK_VIEW' => 'View Task',
);
