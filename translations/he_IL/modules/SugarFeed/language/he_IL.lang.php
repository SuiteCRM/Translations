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
    'LBL_ASSIGNED_TO_ID' => 'מזהה המשתמש רשום',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ID' => 'מזהה',
    'LBL_DATE_ENTERED' => 'תאריך יצירה:',
    'LBL_DATE_MODIFIED' => 'התאריך שונה',
    'LBL_MODIFIED' => 'עודכן ע"י',
    'LBL_MODIFIED_NAME' => 'השתנה על-ידי שם',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'שם',
    'LBL_SAVING' => 'Saving...',
    'LBL_SAVED' => 'Saved',
    'LBL_CREATED_USER' => 'נוצר על ידי המשתמש',
    'LBL_MODIFIED_USER' => 'עודכן על ידי המשתמש',
    'LBL_LIST_FORM_TITLE' => 'רשימת פידים',
    'LBL_MODULE_NAME' => 'פיד',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'אזהרה: מערכת הפידים מנוטרלת, לא יוצגו פידים עד אשר היא תופעל',
    'LBL_RECORDS_DELETED' => 'כל הפידים נמחקו , אם מערכתה פידים פעילה, פיד חדש יוצג באופן אוטומטי.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'אתה בטוח שברצונך לצחוק את הפידים המופיעים?',
    'LBL_FLUSH_RECORDS' => 'מחיקת פידים המופיעים',
    'LBL_ENABLE_FEED' => 'הפעל תאסופת פידים לפעילויות שלי',
    'LBL_ENABLE_MODULE_LIST' => 'הפעל פידים עבור',
    'LBL_HOMEPAGE_TITLE' => 'תזרים הפעילויות שלי',
    'LNK_NEW_RECORD' => 'צור פיד',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'חפש פיד',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'פיד חדש',
    'LBL_ALL' => 'All',
    'LBL_USER_FEED' => 'פיד לשמשתמש',
    'LBL_ENABLE_USER_FEED' => 'הפעל פיד למשתמש',
    'LBL_TO' => 'נראה לצוות',
    'LBL_IS' => 'הוא',
    'LBL_DONE' => 'Done',
    'LBL_TITLE' => 'כותרת',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Last Week',
    'LBL_TIME_WEEKS' => 'שבועות',
    'LBL_TIME_DAYS' => 'days',
    'LBL_TIME_YESTERDAY' => 'Yesterday',
    'LBL_TIME_HOURS' => 'Hours',
    'LBL_TIME_HOUR' => 'Hours',
    'LBL_TIME_MINUTES' => 'Minutes',
    'LBL_TIME_MINUTE' => 'דקה',
    'LBL_TIME_SECONDS' => 'שניות',
    'LBL_TIME_SECOND' => 'שניה',
    'LBL_TIME_AND' => 'and',
    'LBL_TIME_AGO' => 'לשעבר',
// Activity stream
    'CREATED_CONTACT' => 'created a <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'for', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'עם',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Select',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'אוטנתיקציה',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'חיפוש מתקדם' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'הצג יותר אפשרויות',
    'LBL_HIDE_OPTIONS' => 'Hide Options',
    'LBL_VIEW' => 'צפיה',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
