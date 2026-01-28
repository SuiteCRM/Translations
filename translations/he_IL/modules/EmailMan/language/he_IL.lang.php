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
    'LBL_SEND_DATE_TIME' => 'תאריך שליחה',
    'LBL_IN_QUEUE' => 'בתהליכי עיבוד',
    'LBL_IN_QUEUE_DATE' => 'Queued Date',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'שליחת מיילים בקבוצה מצריכה שימוש במספרים שלמם  בלבד',

    'LBL_ATTACHMENT_AUDIT' => 'נשלח. זה לא שוכפל מקומית על מנת לשמר שימוש בדיסק.',
    'LBL_CONFIGURE_SETTINGS' => 'קונפיג / עיצוב',
    'LBL_CUSTOM_LOCATION' => 'משתמש מוגדר',
    'LBL_DEFAULT_LOCATION' => 'ברירת מחדל',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Delete related notes & attachments with deleted Emails',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Outgoing Mail Configuration',
    'LBL_EMAILS_PER_RUN' => 'שליחת מספר מיילים לקבוצה',
    'LBL_ID' => 'מזהה',
    'LBL_LIST_CAMPAIGN' => 'קמפיינים',
    'LBL_LIST_FORM_TITLE' => 'תור',
    'LBL_LIST_FROM_NAME' => 'שם השולח',
    'LBL_LIST_IN_QUEUE' => 'בתהליכי עיבוד',
    'LBL_LIST_MESSAGE_NAME' => 'הודעה משווקת',
    'LBL_LIST_RECIPIENT_EMAIL' => 'מייל המקבל',
    'LBL_LIST_RECIPIENT_NAME' => 'שם המקבל',
    'LBL_LIST_SEND_ATTEMPTS' => 'נסיונות שליחה',
    'LBL_LIST_SEND_DATE_TIME' => 'נשלח',
    'LBL_LIST_USER_NAME' => 'שם משתמש',
    'LBL_LOCATION_ONLY' => 'מיקום',
    'LBL_LOCATION_TRACK' => 'מיקום של מאתר קבצי קמפיין כמו (campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Keep copies of campaign messages:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Would you like to store complete copies of <bold>EACH</bold> email message sent during all campaigns?  <bold>We recommend and default to no</bold>. Choosing no will store only the template that is sent and the needed variables to recreate the individual message.',
    'LBL_MAIL_SENDTYPE' => 'סוכן המעביר מייל:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'השתמש האוטנטיקצית SMTP',
    'LBL_MAIL_SMTPPASS' => 'סיסמא:',
    'LBL_MAIL_SMTPPORT' => 'פורט של SMTP',
    'LBL_MAIL_SMTPSERVER' => 'שרת SMTP',
    'LBL_MAIL_SMTPUSER' => 'שם משתמש SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'לקוח דואר אלקטרוני',
    'LBL_MARKETING_ID' => 'זיהוי שיווק',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'הגדרות דוא"ל',
    'LBL_MODULE_TITLE' => 'ניהול רשימת מיילים בהמתנה',
    'LBL_NOTIFICATION_ON_DESC' => 'שלח  הודעות מייל בעת האצלת רשומות',
    'LBL_NOTIFY_FROMADDRESS' => 'כתובת שולח',
    'LBL_NOTIFY_FROMNAME' => 'שם השולח:',
    'LBL_NOTIFY_ON' => 'הפעל הודעות?',
    'LBL_NOTIFY_TITLE' => 'אפשרויות  הודעת מייל',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'אפשרויות אי- מייל  יוצא',
    'LBL_RELATED_ID' => 'זיהוי מקורב',
    'LBL_RELATED_TYPE' => 'סוג מקורב',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש תור',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'ערך של  Config.php הגדרות  site_url',
    'TXT_REMOVE_ME_ALT' => 'בכדי להסיר את עצמך מרשימת המיילים אנא פנה',
    'TXT_REMOVE_ME_CLICK' => 'הקלק כאן',
    'TXT_REMOVE_ME' => 'בכדי להסיר את עצמך מרשימת המיילים אנא פנה',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Email Security Settings',
    'LBL_SECURITY_DESC' => 'Check the following that should NOT be allowed in via InboundEmail or displayed in the Emails module.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Select Outlook default minimum security settings (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle All Options',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'כן',
    'LBL_NO' => 'לא',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'נסיונות שליחה',
    'LBL_OUTGOING_SECTION_HELP' => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.<br> If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'עזרה' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
