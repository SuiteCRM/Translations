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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'מסמכים',
    // Dashlet Categories
    'LBL_CHARTS' => 'תרשים',
    'LBL_DEFAULT' => 'צפייה',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'יש לציין מספר רשומה לצורך מחיקת החשבון.',
    'LBL_ACCOUNT_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_ACCOUNT' => 'חשבון:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_ADDRESS_INFORMATION' => 'פירוט כתובת ',
    'LBL_ANNUAL_REVENUE' => 'רווח שנתי:',
    'LBL_ANY_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_EMAIL' => 'אי- מייל אחר:',
    'LBL_ANY_PHONE' => 'טלפון אחר:',
    'LBL_ASSIGNED_TO_NAME' => 'הקצה ל:',
    'LBL_ASSIGNED_TO_ID' => 'מוקצה למשתמש:',
    'LBL_BILLING_ADDRESS_CITY' => 'עיר לחשבונית:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'מחוז להתחשבנות:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'מיקוד להתחשבנות:',
    'LBL_BILLING_ADDRESS_STATE' => 'רחוב להתחשבנות:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'כתובת לדואר 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'כתובת לדואר 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'כתובת לדואר 4',
    'LBL_BILLING_ADDRESS_STREET' => 'רחוב להתחשבנות:',
    'LBL_BILLING_ADDRESS' => 'כתובת להתחשבנות:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'תקלות',
    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_CASES_SUBPANEL_TITLE' => 'קריאות',
    'LBL_CITY' => 'עיר:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_COUNTRY' => 'ארץ:',
    'LBL_DATE_ENTERED' => 'תאריך יצירה:',
    'LBL_DATE_MODIFIED' => 'תאריך שינוי:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_DESCRIPTION_INFORMATION' => 'תאור',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_DUPLICATE' => 'בטל חשבונות כפולים',
    'LBL_EMAIL' => 'דואל:',
    'LBL_EMAIL_OPT_OUT' => 'דואר למשלוח מרשימות תפוצה:',
    'LBL_EMAIL_ADDRESSES' => 'כתובות דוא"ל',
    'LBL_EMPLOYEES' => 'עובדים:',
    'LBL_FAX' => 'פקס:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',
    'LBL_HOMEPAGE_TITLE' => 'החשבונות שלי',
    'LBL_INDUSTRY' => 'תחום העיסוק:',
    'LBL_INVALID_EMAIL' => 'דואר אלקטרוני לא חוקי:',
    'LBL_INVITEE' => 'אנשי קשר',
    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_LIST_ACCOUNT_NAME' => 'שם',
    'LBL_LIST_CITY' => 'עיר',
    'LBL_LIST_CONTACT_NAME' => 'שם איש קשר',
    'LBL_LIST_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני',
    'LBL_LIST_FORM_TITLE' => 'רשימת חשבונות',
    'LBL_LIST_PHONE' => 'טלפון',
    'LBL_LIST_STATE' => 'מדינה',
    'LBL_MEMBER_OF' => 'חבר ב',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'חבר בארגונים',
    'LBL_MODULE_NAME' => 'חשבונות',
    'LBL_MODULE_TITLE' => 'חשבונות: דף ראשי',
    'LBL_MODULE_ID' => 'חשבונות',
    'LBL_NAME' => 'שם:',
    'LBL_NEW_FORM_TITLE' => 'חשבון חדש',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'הזדמנויות',
    'LBL_OTHER_EMAIL_ADDRESS' => 'מייל אחר:',
    'LBL_OTHER_PHONE' => 'טלפון נוסף:',
    'LBL_OWNERSHIP' => 'בבעלות:',
    'LBL_PARENT_ACCOUNT_ID' => 'זהות חשבון אב',
    'LBL_PHONE_ALT' => 'טלפון נוסף:',
    'LBL_PHONE_FAX' => 'פקסמיליה:',
    'LBL_PHONE_OFFICE' => 'טלפון בעבודה:',
    'LBL_PHONE' => 'טל.:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_PRODUCTS_TITLE' => 'מוצרים',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרויקטים',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'העתק לאנשי קשר',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'העתק...',
    'LBL_RATING' => 'דרוג:',
    'LBL_SAVE_ACCOUNT' => 'שמור חשבון',
    'LBL_SEARCH_FORM_TITLE' => 'חפש חשבון',
    'LBL_SHIPPING_ADDRESS_CITY' => 'עיר למשלוח:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'מחוז למשלוח:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'מיקוד למשלוח:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'מדינה למשלוח:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'כתובת למשלוח 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'כתובת למשלוח 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'כתובת למשלוח 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'רחוב למשלוח:',
    'LBL_SHIPPING_ADDRESS' => 'כתובת למשלוח:',
    'LBL_SIC_CODE' => 'מספר ספק משרד הבטחון:',
    'LBL_STATE' => 'מדינה או אזור:',
    'LBL_TICKER_SYMBOL' => 'סימול מניה:',
    'LBL_TYPE' => 'סוג:',
    'LBL_WEBSITE' => 'אתר אינטרנט:',
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LNK_ACCOUNT_LIST' => 'צפה בחשבונות',
    'LNK_NEW_ACCOUNT' => 'ליצור חשבון לקוח',
    'LNK_IMPORT_ACCOUNTS' => 'ייבא חשבון',
    'MSG_DUPLICATE' => 'ייתכן והנתונים בתיק הלקוח שאתה עומד ליצור הם שכפול של רשומת תיק לקוח שכבר קיים. תיקי לקוח המכילים רשומות דומות מפורטים להלן. <br>לחץ על צור חשבון להמשיך ליצור חשבון חדש זה, או לבחור חשבון קיים מהרשימה המפורטת להלן.',
    'MSG_SHOW_DUPLICATES' => 'ייתכן והנתונים בתיק הלקוח שאתה עומד ליצור הם שכפול של רשומת תיק לקוח שכבר קיים. תיקי לקוח המכילים רשומות דומות מפורטים להלן. <br>לחץ על צור חשבון להמשיך ליצור חשבון חדש זה, או לבחור חשבון קיים מהרשימה המפורטת להלן.',
    'LBL_ASSIGNED_USER_NAME' => 'הקצה ל:',
    'LBL_PROSPECT_LIST' => 'רשימת תחזיות',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'פרויקטים',
    //For export labels
    'LBL_PARENT_ID' => 'מזהה האב',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'מוצרים ושירותים שנרכשו',

    'LBL_AOS_CONTRACTS' => 'חוזים',
    'LBL_AOS_INVOICES' => 'חשבוניות',
    'LBL_AOS_QUOTES' => 'הצעות מחיר',
    'LBL_LIST_WEBSITE' => 'website',
);
