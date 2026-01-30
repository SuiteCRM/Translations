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
    'LBL_ADD_DOCUMENT' => 'הוסף מסמך',
    'LBL_ADD_FILE' => 'הוסף קובץ',
    'LBL_ATTACHMENTS' => 'צרופות לדואר אלקטרוני',
    'LBL_BODY' => 'גוף: ',
    'LBL_CLOSE' => 'סגור:',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_EDIT_ALT_TEXT' => 'ערוך כטקסט פשוט',
    'LBL_EMAIL_ATTACHMENT' => 'צרופת דואר אלקטרוני',
    'LBL_HIDE_ALT_TEXT' => 'הסתר טקסט פשוט',
    'LBL_HTML_BODY' => 'HTML גוף ב',
    'LBL_INSERT_VARIABLE' => 'הוסף משתנים:',
    'LBL_INSERT_URL_REF' => 'הוסף לינק להפנייה',
    'LBL_INSERT_TRACKER_URL' => 'הכנס לינק לגשש:',
    'LBL_INSERT' => 'הכנס',
    'LBL_LIST_DATE_MODIFIED' => 'שונה לאחרונה',
    'LBL_LIST_DESCRIPTION' => 'תיאור',
    'LBL_LIST_FORM_TITLE' => 'רשימת תבניות דואר אלקטרוני',
    'LBL_LIST_NAME' => 'שם',
    'LBL_MODULE_NAME' => 'תבניות מייל',
    'LBL_MODULE_TITLE' => 'תבניות דואר אלקטרוני: דף ראשי',
    'LBL_NAME' => 'שם:',
    'LBL_NEW_FORM_TITLE' => 'צור תבנית דואר אלקטרוני',
    'LBL_PUBLISH' => 'פרסם:',
    'LBL_RELATED_TO' => 'קשור ל:',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש בתניות דואר אלקטרוני',
    'LBL_SHOW_ALT_TEXT' => 'הצג כטקסט פשוט',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_SUITE_DOCUMENT' => 'מסמך',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'גוף ההודעה',
    'LBL_USERS' => 'משתמשים',

    'LNK_EMAIL_TEMPLATE_LIST' => 'צפייה בתבנית דואר אלקטרוני',
    'LNK_IMPORT_NOTES' => 'יבא תזכורות',
    'LNK_NEW_EMAIL_TEMPLATE' => 'צור תבנית דואר אלקטרוני',
    'LNK_NEW_EMAIL' => 'דואל לארכיון',
    'LNK_NEW_SEND_EMAIL' => 'יצירת דואל',
    'LNK_SENT_EMAIL_LIST' => 'שלח הודעה',
    'LNK_VIEW_CALENDAR' => 'היום',
    // for Inbox
    'LBL_NEW' => 'חדש',
    'LNK_MY_DRAFTS' => 'הטיוטות שלי',
    'LNK_MY_INBOX' => 'הדואר שלי',
    'LBL_TEXT_ONLY' => 'טקסט בלבד',
    'LBL_SEND_AS_TEXT' => 'שלח כטקסט בלבד',
    'LBL_ACCOUNT' => 'חשבון',
    'LBL_FROM_NAME' => 'שם השולח',
    'LBL_PLAIN_TEXT' => 'טקסט פשוט',
    'LBL_CREATED_BY' => 'נוצר ע"י',
    'LBL_PUBLISHED' => 'פורסם',
    'LNK_VIEW_MY_INBOX' => 'צפייה בהודעות שלי',
    'LBL_ASSIGNED_TO_ID' => 'העבר ל',
    'LBL_EDIT_LAYOUT' => 'ערוך תצוגה' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'בחר' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'נקה' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'סוג',
    'LBL_WIDTH' => 'Width Default',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);
