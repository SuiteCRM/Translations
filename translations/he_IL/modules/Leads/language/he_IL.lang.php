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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'תיאור החשבון',
    'LBL_ACCOUNT_ID' => 'מזהה חשבון',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_ADDRESS_INFORMATION' => 'פירוט כתובת ',
    'LBL_ALT_ADDRESS_CITY' => 'עיר אלטרנטיבית',
    'LBL_ALT_ADDRESS_COUNTRY' => 'מחוז אלטרנטיבי',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'מיקוד אלטרנטיבי',
    'LBL_ALT_ADDRESS_STATE' => 'מדינה אלטרנטיבית',
    'LBL_ALT_ADDRESS_STREET_2' => 'רחוב אלטרנטיבי 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'רחוב אלטרנטיבי 3',
    'LBL_ALT_ADDRESS_STREET' => 'רחוב אלטרנטיבי',
    'LBL_ALTERNATE_ADDRESS' => 'כתובת אחרת:',
    'LBL_ALT_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_EMAIL' => 'אי- מייל אחר:',
    'LBL_ANY_PHONE' => 'טלפון אחר:',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ASSIGNED_TO_ID' => 'מוקצה למשתמש:',
    'LBL_CITY' => 'עיר:',
    'LBL_CONTACT_ID' => 'איש קשר זהות',
    'LBL_CONTACT_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'שם הליד:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'ליד-בזדמנות:',
    'LBL_CONTACT_ROLE' => 'תפקיד:',
    'LBL_CONTACT' => 'ליד:',
    'LBL_CONVERTED_ACCOUNT' => 'המר חשבון:',
    'LBL_CONVERTED_CONTACT' => 'אנשי קשר שהומרו:',
    'LBL_CONVERTED_OPP' => 'הזדמנויות שהומרו:',
    'LBL_CONVERTED' => 'מומר',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'המר ליד [Alt+V]',
    'LBL_CONVERTLEAD' => 'המר ליד [Alt+V]',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' איש קשר אפשרי: ',
    'LBL_COUNTRY' => 'ארץ:',
    'LBL_CREATED_NEW' => 'נוצר חדש ',
    'LBL_CREATED_ACCOUNT' => 'צור חשבון חדש',
    'LBL_CREATED_CALL' => 'צור שיחה חדשה',
    'LBL_CREATED_CONTACT' => 'צור איש קשר חדש',
    'LBL_CREATED_MEETING' => 'צור פגישה חדשה',
    'LBL_CREATED_OPPORTUNITY' => 'צור הזדמנות חדשה',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'לידים',
    'LBL_DEPARTMENT' => 'מחלקה:',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_DO_NOT_CALL' => 'לא לצלצל:',
    'LBL_DUPLICATE' => 'לידים דומים',
    'LBL_EMAIL_ADDRESS' => 'דואל:',
    'LBL_EMAIL_OPT_OUT' => 'דואר למשלוח מרשימות תפוצה:',
    'LBL_EXISTING_ACCOUNT' => 'השתמש בחשבון קיים',
    'LBL_EXISTING_CONTACT' => 'השתמש באיש קשר קיים',
    'LBL_EXISTING_OPPORTUNITY' => 'השתמש בהזדמנות קיימת',
    'LBL_FAX_PHONE' => 'פקס:',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',
    'LBL_HOME_PHONE' => 'טלפון בבית:',
    'LBL_IMPORT_VCARD' => 'יבא vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'תיצר אוטומטית ליד חדש על ידי ייבוא vCard ממערכת הקבצים.',
    'LBL_INVALID_EMAIL' => 'דואר אלקטרוני לא חוקי:',
    'LBL_INVITEE' => 'דוחות ישירים',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'תיאור מקור הליד:',
    'LBL_LEAD_SOURCE' => 'מקור הליד:',
    'LBL_LIST_ACCEPT_STATUS' => 'אשר סטטוס',
    'LBL_LIST_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_LIST_CONTACT_NAME' => 'שם הליד',
    'LBL_LIST_CONTACT_ROLE' => 'תפקיד',
    'LBL_LIST_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_LIST_EMAIL_ADDRESS' => 'מיילים',
    'LBL_LIST_FIRST_NAME' => 'שם פרטי',
    'LBL_LIST_FORM_TITLE' => 'רשימת לידים',
    'LBL_LIST_LAST_NAME' => 'שם משפחה',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'תיאור מקור הליד',
    'LBL_LIST_LEAD_SOURCE' => 'מקור הליד',
    'LBL_LIST_MY_LEADS' => 'הלידים שלי',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_PHONE' => 'טלפון עבודה',
    'LBL_LIST_REFERED_BY' => 'הופנה על ידי',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'נייד:',
    'LBL_MODULE_NAME' => 'לידים',
    'LBL_MODULE_TITLE' => 'לידים: דף ראשי',
    'LBL_NAME' => 'שם:',
    'LBL_NEW_FORM_TITLE' => 'ליד חדש',
    'LBL_OFFICE_PHONE' => 'טלפון בעבודה:',
    'LBL_OPP_NAME' => 'שם הזדמנות:',
    'LBL_OPPORTUNITY_AMOUNT' => 'ערך ההזדמנות:',
    'LBL_OPPORTUNITY_ID' => 'הזדמנות זהות',
    'LBL_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'מייל אחר:',
    'LBL_OTHER_PHONE' => 'טלפון נוסף:',
    'LBL_PHONE' => 'טל.:',
    'LBL_PORTAL_APP' => 'פורטל אפליקציות',
    'LBL_PORTAL_INFORMATION' => 'פרטי פורטל',
    'LBL_PORTAL_NAME' => 'שם פורטל:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_STREET' => 'רחוב',
    'LBL_PRIMARY_ADDRESS_CITY' => 'עיר',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'מחוז',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'מיקוד',
    'LBL_PRIMARY_ADDRESS_STATE' => 'מדינה',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'רחוב 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'רחוב 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'רחוב',
    'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',
    'LBL_REFERED_BY' => 'הופנה על ידי:',
    'LBL_REPORTS_TO_ID' => 'מדווח אל זהות',
    'LBL_REPORTS_TO' => 'דווח ל:',
    'LBL_SALUTATION' => 'איחול:',
    'LBL_MODIFIED' => 'שונה ע"י',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש ליד',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'בחר בלידים שסומנו',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'בחר בלידים שסומנו',
    'LBL_STATE' => 'מדינה או אזור:',
    'LBL_STATUS_DESCRIPTION' => 'תיאור הסטאטוס:',
    'LBL_STATUS' => 'סטטוס',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'צור ליד מ - vCard',
    'LNK_LEAD_LIST' => 'צפייה בלידים',
    'LNK_NEW_ACCOUNT' => 'ליצור חשבון לקוח',
    'LNK_NEW_APPOINTMENT' => 'שיחות מתוזמנות',
    'LNK_NEW_CONTACT' => 'ליצור איש קשר',
    'LNK_NEW_LEAD' => 'צור ליד',
    'LNK_NEW_NOTE' => 'צור תזכורת או קישור',
    'LNK_NEW_TASK' => 'ליצור משימה',
    'LNK_NEW_CASE' => 'ליצור מקרה',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_OPPORTUNITY' => 'ליצור עסקה',
    'LNK_SELECT_ACCOUNTS' => ' <b>או</b> בחר חשבון',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'האם אתה בטוח כי ברצונך למחוק רשומה זו?',
    'NTC_REMOVE_CONFIRMATION' => 'אתה בטוח שברצונך להסיר ליד זה מאירוע זה?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'קמפיינים',
    'LBL_CAMPAIGN' => 'קמפיין:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
    'LBL_PROSPECT_LIST' => 'רשימת תחזיות',
    'LBL_CAMPAIGN_LEAD' => 'קמפיינים',
    'LBL_BIRTHDATE' => 'תאריך לידה:',
    'LBL_ASSISTANT_PHONE' => 'טלפון של העוזר:',
    'LBL_ASSISTANT' => 'עוזר:',
    'LBL_CREATED_USER' => 'משתמשים שנוצרו',
    'LBL_MODIFIED_USER' => 'משתמשים ששונו',
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LBL_CONVERT_MODULE_NAME' => 'מודל',
    'LBL_CONVERT_REQUIRED' => 'נדרש',
    'LBL_CONVERT_SELECT' => 'אפשר בחירה',
    'LBL_CONVERT_COPY' => 'העתק נתונים',
    'LBL_CONVERT_EDIT' => 'עריכה',
    'LBL_CONVERT_DELETE' => 'מחק',
    'LBL_CONVERT_ADD_MODULE' => 'הוסף מודול',
    'LBL_CREATE' => 'צור',
    'LBL_SELECT' => ' <b>או</b> בחר',
    'LBL_WEBSITE' => 'אתר אינטרנט',
    'LNK_IMPORT_LEADS' => 'ייבא לידים',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'הכנס תאריך' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'עריכה' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'אירועים',
);
