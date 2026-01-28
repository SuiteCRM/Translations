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
    'LBL_MODULE_NAME' => 'מטרות',
    'LBL_MODULE_ID' => 'מטרות',
    'LBL_INVITEE' => 'דוחות ישירים',
    'LBL_MODULE_TITLE' => 'מטרות:בית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש מטרה',
    'LBL_LIST_FORM_TITLE' => 'רשימת מטרה',
    'LBL_NEW_FORM_TITLE' => 'מטרה חדשה',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_LAST_NAME' => 'שם משפחה',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'מיילים',
    'LBL_LIST_PHONE' => 'טלפון',
    'LBL_LIST_FIRST_NAME' => 'שם פרטי',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ASSIGNED_TO_ID' => 'הקצה ל:',
    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_EXISTING_ACCOUNT' => 'השתמש בחשבון קיים',
    'LBL_CREATED_ACCOUNT' => 'צור חשבון חדש',
    'LBL_CREATED_CALL' => 'צור שיחה חדשה',
    'LBL_CREATED_MEETING' => 'צור פגישה חדשה',
    'LBL_NAME' => 'שם:',
    'LBL_PROSPECT_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'מידע נוסף',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_OFFICE_PHONE' => 'טלפון בעבודה:',
    'LBL_ANY_PHONE' => 'טלפון אחר:',
    'LBL_PHONE' => 'טל.:',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_MOBILE_PHONE' => 'נייד:',
    'LBL_HOME_PHONE' => 'בית:',
    'LBL_OTHER_PHONE' => 'טלפון נוסף:',
    'LBL_FAX_PHONE' => 'פקס:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'כתובת רחוב ראשית:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'כתובת עיר ראשי',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'כתובת ארץ ראשית',
    'LBL_PRIMARY_ADDRESS_STATE' => 'כתובת מדינה ראשית',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'מיקוד כתובת ראשי',
    'LBL_ALT_ADDRESS_STREET' => 'כתובת רחוב חלופי :',
    'LBL_ALT_ADDRESS_CITY' => 'כתובת חלופית עיר :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'כתובת חלופית  מדינה:',
    'LBL_ALT_ADDRESS_STATE' => 'כתובת חלופית ארץ:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'מיקוד כתובת חלופי:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'מחלקה:',
    'LBL_BIRTHDATE' => 'תאריך לידה:',
    'LBL_EMAIL_ADDRESS' => 'דואל:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'מייל אחר:',
    'LBL_ANY_EMAIL' => 'אי- מייל אחר:',
    'LBL_ASSISTANT' => 'עוזר:',
    'LBL_ASSISTANT_PHONE' => 'טלפון של העוזר:',
    'LBL_DO_NOT_CALL' => 'לא לצלצל:',
    'LBL_EMAIL_OPT_OUT' => 'דואר למשלוח מרשימות תפוצה:',
    'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',
    'LBL_ALTERNATE_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_ADDRESS' => 'כתובת אחרת:',
    'LBL_CITY' => 'עיר:',
    'LBL_STATE' => 'מדינה או אזור:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_COUNTRY' => 'ארץ:',
    'LBL_ADDRESS_INFORMATION' => 'פירוט כתובת ',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_OPP_NAME' => 'שם הזדמנות:',
    'LBL_IMPORT_VCARD' => 'יבא vCard',
    'LBL_IMPORT_VCARDTEXT' => 'צור חשבון חדש אוטומטית ע"י יבוא ה- vCard ממערכת הקבצים שלך',
    'LBL_DUPLICATE' => 'מטרות כפולות אפשריות',
    'MSG_SHOW_DUPLICATES' => 'יצירת איש קשר זה יכול באופן פוטנציאלי לי צור כפילות באנשי הקשר. אתה יכול לבחור ביצירת מטרה בכדי להמשיך ליצור את איש קשר זה עם המידע אשר הוכנס מקודם או שאתה יכול לבחור ביטול.',
    'MSG_DUPLICATE' => 'יצירת איש קשר זה יכול באופן פוטנציאלי לי צור כפילות באנשי הקשר. אתה יכול לבחור איש קשר מהרישמה למטה או שאתה יכול לבחור יצירת מטרה על מנת להמשיך ביצירת איש קשר חדש עם הפרטים אשר הזנת מקודם.',
    'LNK_IMPORT_VCARD' => 'צור מ- vCard',
    'LNK_NEW_ACCOUNT' => 'ליצור חשבון לקוח',
    'LNK_NEW_OPPORTUNITY' => 'ליצור עסקה',
    'LNK_NEW_CASE' => 'ליצור מקרה',
    'LNK_NEW_NOTE' => 'ליצור הערה',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_EMAIL' => 'דואל לארכיון',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_TASK' => 'ליצור משימה',
    'LNK_NEW_APPOINTMENT' => 'שיחות מתוזמנות',
    'LNK_IMPORT_PROSPECTS' => 'יבא מטרות',
    'NTC_DELETE_CONFIRMATION' => 'האם אתה בטוח כי ברצונך למחוק רשומה זו?',
    'NTC_REMOVE_CONFIRMATION' => 'האם אתה בטוח כי ברצונך להסיר את איש קשר זה מהתיק הנוכחי?',
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את איש הקשר',
    'LBL_SALUTATION' => 'איחול:',
    'LBL_CREATED_OPPORTUNITY' => 'צור הזדמנות חדשה',
    'LNK_SELECT_ACCOUNT' => "בחר חשבון",
    'LNK_NEW_PROSPECT' => 'צור מטרה',
    'LNK_PROSPECT_LIST' => 'צפייה במטרות',
    'LNK_NEW_CAMPAIGN' => 'קמפיין נוצר',
    'LNK_CAMPAIGN_LIST' => 'קמפיינים',
    'LNK_NEW_PROSPECT_LIST' => 'צור רשימת מטרות',
    'LNK_PROSPECT_LIST_LIST' => 'רשימת מטרות',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'בחר מטרות שסומנו',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'בחר מטרות שסומנו',
    'LBL_INVALID_EMAIL' => 'דואר אלקטרוני לא חוקי:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'מטרות',
    'LBL_PROSPECT_LIST' => 'רשימת תחזיות',
    'LBL_CONVERT_BUTTON_TITLE' => 'המר מטרה',
    'LBL_CONVERT_BUTTON_LABEL' => 'המר מטרה',
    'LNK_NEW_CONTACT' => 'איש קשר חדש:',
    'LBL_CREATED_CONTACT' => "צור איש קשר חדש",
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'יומן קמפיינים',
    'LBL_TRACKER_KEY' => 'מאתר',
    'LBL_LEAD_ID' => 'זיהוי ליד:',
    'LBL_CONVERTED_LEAD' => 'ליד מומר',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_EDIT_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_CREATED_USER' => 'משתמשים שנוצרו',
    'LBL_MODIFIED_USER' => 'משתמשים ששונו',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'אירועים',
);
