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
    'LBL_ASSIGNED_TO_ID' => 'מזהה המשתמש המוקצה',
    'LBL_ASSIGNED_TO_NAME' => 'משתמש SuiteCRM',
    'LBL_ID' => 'מזהה',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_MODIFIED' => 'שונה ע"י',
    'LBL_MODIFIED_NAME' => 'שונה על ידי (שם)',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'שם משתמש',
    'LBL_CREATED_USER' => 'נוצר על ידי המשתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי המשתמש',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_FORM_TITLE' => 'רשימת חשבונות חיצונית',
    'LBL_MODULE_NAME' => 'חשבון חיצוני',
    'LBL_MODULE_TITLE' => 'חשבונות חיצוניים',
    'LBL_HOMEPAGE_TITLE' => 'החשבונות החיצוניים שלי',
    'LNK_NEW_RECORD' => 'צור חשבון חיצוני',
    'LNK_LIST' => 'צפייה בחשבונות חיצוניים',
    'LBL_SEARCH_FORM_TITLE' => 'חפש מקור חיצוני',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'חשבון חיצוני חדש',
    'LBL_PASSWORD' => 'סיסמא לאפליקציה',
    'LBL_USER_NAME' => 'שם משתמש',
    'LBL_URL' => 'כתובת אתר אינטרנט',
    'LBL_APPLICATION' => 'אפליקציות',
    'LBL_API_DATA' => 'API נתוני',
    'LBL_API_CONSKEY' => 'מפתח לקוח',
    'LBL_API_CONSSECRET' => 'סיסמא של לשוח',
    'LBL_API_OAUTHTOKEN' => 'OAuth אסימון',
    'LBL_AUTH_UNSUPPORTED' => "שיטת האוטנתיקציה איננה מאופשרת לאפליקציה הזו",
    'LBL_AUTH_ERROR' => 'ניסיון הכניסה לחשבון חיצוני נחשלה.',
    'LBL_VALIDATED' => 'הגישה אושרה',
    'LBL_ACTIVE' => 'פעיל',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'התחבר',
    'LBL_NOTE' => 'שים לב',
    'LBL_CONNECTED' => 'הגישה אושרה',

    'LBL_ERR_NO_AUTHINFO' => 'אין פרטי התחברות לחשבון זה.',
    'LBL_ERR_NO_TOKEN' => 'אין אסימון התחברות תקף לחשבון זה.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'אינך מחובר כרגע לחשבון שלך {0} . הקש OK כדי להתחבר לחשבון שלך ולהפעיל רשומות בחשבון החיצוני.',

    'LBL_CLICK_TO_EDIT' => 'Click to Edit',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'כנס מחדש למערכת',
    'LBL_APPLICATION_FOUND_NOTICE' => 'חשבון לאפליקציה הזו כבר קיים. בוצע שיבוץ מחדש לחשבון.',
    'LBL_OMIT_URL' => '(נכשל http:// or https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Click <b>Connect</b> to be directed to a page to provide your account information and to authorize access to the account by SuiteCRM. After connecting, you will be directed back to SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Click <b>Connect</b> to connect this account to SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
