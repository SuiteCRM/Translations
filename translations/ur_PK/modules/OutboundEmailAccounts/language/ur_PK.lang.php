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
    'LBL_ASSIGNED_TO_ID' => 'مقرر کردہ صارف کی شناخت',
    'LBL_ASSIGNED_TO_NAME' => 'کے لئے تفویض',
    'LBL_ID' => 'شناخت',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کی طرف سے ترمیم',
    'LBL_MODIFIED_NAME' => 'نام کی طرف سے ترمیم',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_NAME' => 'نام',
    'LBL_EDIT_BUTTON' => 'ردوبدل',
    'LBL_REMOVE' => 'ہٹا دیں',
    'LBL_LIST_FORM_TITLE' => 'اوٹ بانڈ ای میل کی فہرست',
    'LBL_MODULE_NAME' => 'اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LBL_MODULE_TITLE' => 'اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LBL_HOMEPAGE_TITLE' => 'میرا اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LNK_NEW_RECORD' => 'اوٹ بانڈ ای میل کا اکاؤنٹ بنے',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'اوٹ بانڈ ای میل کا اکاؤنٹ کو تلاش کرنا',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نیا اوٹ بانڈ ای میل کا اکاؤنٹ',
    'LBL_USERNAME' => 'صارف کا نام',
    'LBL_PASSWORD' => 'پاس ورڈ',
    'LBL_SMTP_SERVERNAME' => 'ایس ایم ٹی پی سرور کا نآم',
    'LBL_SMTP_AUTH' => 'ایس ایم ٹی پی متغیر',
    'LBL_SMTP_PORT' => 'ایس ایم ٹی پی کا دروازہ',
    'LBL_SMTP_PROTOCOL' => 'ایس ایم پی پی پروٹوکول',
    'LBL_EDITVIEW_PANEL1' => 'اکاؤنٹ کی ترتیب',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'کوڈ تبدیل کرنا',
    'LBL_SEND_TEST_EMAIL' => 'پیغمات چیک کرنے کے لئے بھیجی',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'ابھی تک ایڈمنسٹریٹر کے پاس غلفت کرنے کا اوٹبوند کا اکاؤنٹ نہیں ہے جانچ پڑتال کا ای میل بھی نہیں بھیج سکتا.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'ایس ایم ٹی پی کی توصیف کو استعمال کریں?',
    'LBL_MAIL_SMTPPASS' => 'پاس ورڈ',
    'LBL_MAIL_SMTPPORT' => 'پورٹ',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'صارف کا نام',
    'LBL_MAIL_SMTP_SETTINGS' => 'ایس ایم ٹی پی سرور کی خصوصیت',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اپنا ای میل فراہم کرنے والا منتخب کریں:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! میل پاس ورڈ:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! میل id:',
    'LBL_GMAIL_SMTPPASS' => 'جی میل کا پاسوڈ:',
    'LBL_GMAIL_SMTPUSER' => 'جی میل کا پتا:',
    'LBL_EXCHANGE_SMTPPASS' => 'ایکسچینج پاس ورڈ:',
    'LBL_EXCHANGE_SMTPUSER' => 'ایکسچینج صارف کا نام:',
    'LBL_EXCHANGE_SMTPPORT' => 'سرور پورٹ کا تبادلہ:',
    'LBL_EXCHANGE_SMTPSERVER' => 'سرور کا تبادلہ:',

    'LBL_TYPE' => 'قسم',
    'LBL_MAIL_SENDTYPE' => 'کی طرح کی میل بھیجنا',
    'LBL_MAIL_SMTPSSL' => 'میل سمتپ/سسل',
    'LBL_SMTP_FROM_NAME' => 'نام سے',
    'LBL_SMTP_FROM_ADDR' => 'پتہ سے',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'سیکورٹی گروپ',

    'LBL_OWNER' => 'مالک',
    'LBL_OWNER_NAME' => 'مالک',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
