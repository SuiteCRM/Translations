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
    'LBL_MODULE_NAME' => 'בית',
    'LBL_NEW_FORM_TITLE' => 'איש קשר חדש:',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_LIST_LAST_NAME' => 'שם משפחה',
    'LBL_PHONE' => 'טל.:',
    'LBL_EMAIL_ADDRESS' => 'דואל:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'הדוחות שלי',
    'LBL_PIPELINE_FORM_TITLE' => 'טבלת צינורות לפי שלב במכירה',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'טבלת צינורות לפי שלב במכירה',
    'LNK_NEW_CONTACT' => 'ליצור איש קשר',
    'LNK_NEW_ACCOUNT' => 'ליצור חשבון לקוח',
    'LNK_NEW_OPPORTUNITY' => 'ליצור עסקה',
    'LNK_NEW_LEAD' => 'צור ליד',
    'LNK_NEW_CASE' => 'ליצור מקרה',
    'LNK_NEW_NOTE' => 'ליצור הערה',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_EMAIL' => 'דואל לארכיון',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_TASK' => 'ליצור משימה',
    'LNK_NEW_BUG' => 'דוח תקלות',
    'LNK_NEW_SEND_EMAIL' => 'יצירת דואל',
    'LBL_NO_ACCESS' => 'איך לך הרשאה לגשת לאזור זה.  צור קשר עם מנהל האתר על מנת לקבל גישה לאזור זה',
    'LBL_NO_RESULTS_IN_MODULE' => '-- אין תוצאות --',
    'LBL_NO_RESULTS' => '<h2>לא נמצאו תוצאות.בצע י חיפוש מחדש.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Search Tips:</h3><ul><li>Make sure you have the proper categories selected above.</li><li>Broaden your search criteria.</li><li>If you still cannot find any results try the advanced search option.</li></ul>',

    'LBL_ADD_DASHLETS' => 'הוסף תאסופות',
    'LBL_WEBSITE_TITLE' => 'אתר אינטרנט',
    'LBL_RSS_TITLE' => 'עדכוני החדשות',
    'LBL_CLOSE_DASHLETS' => 'סגור',
    'LBL_OPTIONS' => 'פרמטרים',
    // dashlet search fields
    'LBL_TODAY' => 'היום',
    'LBL_YESTERDAY' => 'אתמול',
    'LBL_TOMORROW' => 'מחר',
    'LBL_NEXT_WEEK' => 'שבוע הבא',
    'LBL_LAST_7_DAYS' => 'בשבעת הימים האחרונים',
    'LBL_NEXT_7_DAYS' => 'בשבעת הימים הבאים',
    'LBL_LAST_MONTH' => 'בחודש שעבר',
    'LBL_NEXT_MONTH' => 'חודש הבא',
    'LBL_LAST_YEAR' => 'בשנה האחרונה',
    'LBL_NEXT_YEAR' => 'שנה הבאה',
    'LBL_LAST_30_DAYS' => 'בשלושים הימים האחרונים',
    'LBL_NEXT_30_DAYS' => 'בשלושים הימים הבאים',
    'LBL_THIS_MONTH' => 'החודש',
    'LBL_THIS_YEAR' => 'השנה',

    'LBL_MODULES' => 'מודל',
    'LBL_CHARTS' => 'תרשים',
    'LBL_TOOLS' => 'שירות',
    'LBL_WEB' => 'ווב',
    'LBL_SEARCH_RESULTS' => 'תוצאות חיפוש',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'מודולים',
        'Portal' => 'פורטל',
        'Charts' => 'תרשים',
        'Tools' => 'שירות',
        'Miscellaneous' => 'שונות'
    ),
    'LBL_ADDING_DASHLET' => 'הוספת SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet נוסף',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'האם אתה בטוח שברצונך להסיר את SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'הסרת SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'הסרת SuiteCRM Dashlet',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'כללי',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'מסנן',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'רק הפריטים שלי',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'כותרת',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'הצג שורות',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'סגור',

    'LBL_SEARCH' => 'חיפוש',
    'LBL_CLEAR' => 'נקה',

    'LBL_BASIC_CHARTS' => 'טבלה בסיסית',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'גרסא',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'פורטל',
    'LBL_DASHLET_OPT_TITLE' => 'כותרת',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'מיקום אתר אינטרנט',
    'LBL_DASHLET_OPT_HEIGHT' => 'גובה תאסופית (in pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'גלה SuiteCRM',
    'LBL_BASIC_SEARCH' => 'חיפוש מהיר' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'חיפוש מתקדם' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'מודל',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Full Text Search',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'הודעות',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'פרופיל',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'יצירה מהירה',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'סיימת!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_EDIT_ALL_RECURRENCES' => 'עריכת כל המופעים החוזרים',
    'LBL_REMOVE_ALL_RECURRENCES' => 'מחיקת כל המופעים החוזרים',
    'LBL_CONFIRM_REMOVE' => 'האם אתה בטוח שברצונך למחוק את הרשומה?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => 'שמור',
    'LBL_DELETE_BUTTON' => 'מחק',
    'LBL_APPLY_BUTTON' => 'החל',
    'LBL_SEND_INVITES' => 'שלח הזמנות',
    'LBL_CANCEL_BUTTON' => 'בטל',
    'LBL_CLOSE_BUTTON' => 'סגור',

    'LBL_CREATE_NEW_RECORD' => 'צור פעילות',
    'LBL_CREATE_CALL' => 'לקבוע שיחה',
    'LBL_CREATE_MEETING' => 'לקבוע פגישה',

    'LBL_GENERAL_TAB' => 'פרטים',
    'LBL_PARTICIPANTS_TAB' => 'מוזמנים',
    'LBL_REPEAT_TAB' => 'מופע חוזר',

    'LBL_REPEAT_TYPE' => 'חזור שוב',
    'LBL_REPEAT_INTERVAL' => 'כל',
    'LBL_REPEAT_END' => 'סוף',
    'LBL_REPEAT_END_AFTER' => 'לאחר',
    'LBL_REPEAT_OCCURRENCES' => 'מופעים חוזרים',
    'LBL_REPEAT_END_BY' => 'על ידי',
    'LBL_REPEAT_DOW' => 'פועל',
    'LBL_REPEAT_UNTIL' => 'חזור עד ש',
    'LBL_REPEAT_COUNT' => 'מספר מופעים חוזרים',
    'LBL_REPEAT_LIMIT_ERROR' => 'הבקשה שלך תיצור יותר מאשר $limit פגישות.',

    //Events
    'LNK_EVENT' => 'ארוע',
    'LNK_EVENT_VIEW' => 'הצג אירוע',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'כותרת: ',
    'LBL_HOUR_ABBREV' => 'שעה',
    'LBL_HOURS_ABBREV' => ' שעות',
    'LBL_MINSS_ABBREV' => ' דקות ',
    'LBL_LOCATION' => 'מיקום:',
    'LBL_STATUS' => 'סטטוס',
    'LBL_DESCRIPTION' => 'תיאור:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'אירעה שגיאה בעת החיפוש, אנא בדוק את מילות החיפוש.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'לא נמצאו תוצאות העונות על מילות החיפוש, נסה להרחיב את החיפוש.',

    'LNK_TASK_VIEW' => 'תצוגת משימה',
);
