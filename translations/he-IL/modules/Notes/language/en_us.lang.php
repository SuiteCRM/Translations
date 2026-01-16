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
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את החשבון',
    'LBL_ACCOUNT_ID' => 'זיהוי חשבון:',
    'LBL_CASE_ID' => 'זיהוי תיק:',
    'LBL_CLOSE' => 'סגור:',
    'LBL_CONTACT_ID' => 'זיהוי/ פרטי איש קשר',
    'LBL_CONTACT_NAME' => 'איש קשר:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'רשימות',
    'LBL_DESCRIPTION' => 'תזכורת',
    'LBL_EMAIL_ADDRESS' => 'דואל:',
    'LBL_EMAIL_ATTACHMENT' => 'צרופת דואר אלקטרוני',
    'LBL_FILE_MIME_TYPE' => 'סוג mime',
    'LBL_FILE_URL' => 'קובץ  URL',
    'LBL_FILENAME' => 'קובץ מצורץ:',
    'LBL_LEAD_ID' => 'זיהוי ליד:',
    'LBL_LIST_CONTACT_NAME' => 'אנשי קשר',
    'LBL_LIST_DATE_MODIFIED' => 'שונה לאחרונה',
    'LBL_LIST_FILENAME' => 'צירוף קובץ',
    'LBL_LIST_FORM_TITLE' => 'רשימת תזכורות',
    'LBL_LIST_RELATED_TO' => 'השב אל',
    'LBL_LIST_SUBJECT' => 'נושא',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_CONTACT' => 'אנשי קשר',
    'LBL_MODULE_NAME' => 'רשימות',
    'LBL_MODULE_TITLE' => 'תזכורות: בית',
    'LBL_NEW_FORM_TITLE' => 'צור תזכורת או קישור',
    'LBL_NOTE_STATUS' => 'תזכורת',
    'LBL_NOTE_SUBJECT' => 'נושא:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'צרופות לדואר אלקטרוני',
    'LBL_NOTE' => 'תזכורת:',
    'LBL_OPPORTUNITY_ID' => 'זיהוי הזדמנות',
    'LBL_PARENT_ID' => 'זיהוי הורה:',
    'LBL_PARENT_TYPE' => 'סוג הורה',
    'LBL_PHONE' => 'טל.:',
    'LBL_PORTAL_FLAG' => 'להציג בפורטל?',
    'LBL_EMBED_FLAG' => 'להטביע בדוא"ל?',
    'LBL_PRODUCT_ID' => 'זיהוי מוצר:',
    'LBL_QUOTE_ID' => 'זיהוי ציטוט:',
    'LBL_RELATED_TO' => 'קשור ל:',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש תזכורת',
    'LBL_STATUS' => 'סטטוס',
    'LBL_SUBJECT' => 'נושא:',
    'LNK_IMPORT_NOTES' => 'יבא תזכורות',
    'LNK_NEW_NOTE' => 'ליצור הערה',
    'LNK_NOTE_LIST' => 'תזכורות',
    'LBL_MEMBER_OF' => 'חבר ב',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
    'LBL_REMOVING_ATTACHMENT' => 'Removing attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'לא הצליחה להסיר קובץ מצורף...',
    'LBL_CREATED_BY' => 'נוצר ע"י',
    'LBL_MODIFIED_BY' => 'שונה ע"י',
    'LBL_SEND_ANYWAYS' => 'שורת הנושא ריקה.  לשלוח/לשמור בכלזאת?',
    'LBL_NOTE_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
    'LBL_EDITLAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'שם פרטי',
    'LBL_LAST_NAME' => 'שם משפחה',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_DELETED' => 'נמחק',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'בסדר עולה',
    'LBL_DESCENDING' => 'סדר יורד',
);
