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
    'LBL_MODULE_NAME' => 'הזדמנויות',
    'LBL_MODULE_TITLE' => 'הזדמנויות: בית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש הזדמנויות',
    'LBL_LIST_FORM_TITLE' => 'רשימת הזדמנויות',
    'LBL_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_OPPORTUNITY' => 'הזדמנות:',
    'LBL_NAME' => 'שם הזדמנות:',
    'LBL_INVITEE' => 'אנשי קשר',
    'LBL_CURRENCIES' => 'מטבעות',
    'LBL_LIST_OPPORTUNITY_NAME' => 'שם',
    'LBL_LIST_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_LIST_AMOUNT' => 'סכום',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'סכום',
    'LBL_LIST_DATE_CLOSED' => 'סגור',
    'LBL_LIST_SALES_STAGE' => 'שלב במכירות',
    'LBL_ACCOUNT_ID' => 'מזהה חשבון',
    'LBL_CURRENCY_NAME' => 'שם מטבע',
    'LBL_CURRENCY_SYMBOL' => 'סימול מטבע',

    'UPDATE' => 'הזדמנות - עדכון מטבע',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_AMOUNT' => 'ערך ההזדמנות:',
    'LBL_AMOUNT_USDOLLAR' => 'סכום:',
    'LBL_CURRENCY' => 'מטבע:',
    'LBL_DATE_CLOSED' => 'תאריך סגירה צפוי:',
    'LBL_TYPE' => 'סוג:',
    'LBL_CAMPAIGN' => 'קמפיין:',
    'LBL_NEXT_STEP' => 'השלב הבא:',
    'LBL_LEAD_SOURCE' => 'מקור הליד:',
    'LBL_SALES_STAGE' => 'שלב במכירות:',
    'LBL_PROBABILITY' => 'הסתברות (%):',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_DUPLICATE' => 'הזדמוניות כפולות אפשריות',
    'MSG_DUPLICATE' => 'יצירת ההזדמנות הזאת יכול באופן פוטנציאלי ליצור שכפול הזדמנויות. אתה יכול לבחור הזדמנות מרשימה למטה או שאתה יכול ליצור הזדמנות חדשה עם המידע שהכנסת מקודם. ',
    'LBL_NEW_FORM_TITLE' => 'ליצור עסקה',
    'LNK_NEW_OPPORTUNITY' => 'ליצור עסקה',
    'LNK_OPPORTUNITY_LIST' => 'הזדמנויות',
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את הרשומה',
    'LBL_TOP_OPPORTUNITIES' => 'ההזדמניות נכי חשבות הפתוחות שלי',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'האם ברצונך להסיר את ההזדמנותהזאת מהפרוייקט הזה?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'הזדמנויות',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'הסטוריה',

    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'מסמכים',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרויקטים',
    'LBL_ASSIGNED_TO_NAME' => 'הקצה ל:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'ההזדמנויות הסגורות שלי',
    'LBL_TOTAL_OPPORTUNITIES' => 'סך-בכל הזדמנויות',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'הזדמנויות שנסגרו בהרכשה',
    'LBL_ASSIGNED_TO_ID' => 'מוקצה למשתמש:',
    'LBL_MODIFIED_NAME' => 'שונה על ידי משתמש ששמו',
    'LBL_CREATED_USER' => 'משתמשים שנוצרו',
    'LBL_MODIFIED_USER' => 'משתמשים ששונו',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'קמפיינים',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'פרויקטים',
    'LNK_IMPORT_OPPORTUNITIES' => 'ייבוא הזדמנויות',
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'חוזים',
    'LBL_AOS_QUOTES' => 'הצעות מחיר',
);
