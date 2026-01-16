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
    'LBL_SEND_DATE_TIME' => 'تاریخ ارسال',
    'LBL_IN_QUEUE' => 'در حال پردازش',
    'LBL_IN_QUEUE_DATE' => 'تاریخ پیش‌‎‎فاکتور',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'فقط از مقادیر عددی جهت مشخص کردن تعداد ایمیل‌های ارسالی در هر دسته، استفاده کنید',

    'LBL_ATTACHMENT_AUDIT' => ' فرستاده شد. به منظور حفظ  فضای دیسک به صورت محلی نسخه دوم ایجاد نشد.',
    'LBL_CONFIGURE_SETTINGS' => 'پیکربندی تنظیمات ایمیل',
    'LBL_CUSTOM_LOCATION' => 'تعریف شده توسط کاربر',
    'LBL_DEFAULT_LOCATION' => 'پیش‌فرض',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'حذف یادداشت مرتبط & پیوست با ایمیل های حذف شده',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'تنظیمات ایمیل خروجی',
    'LBL_EMAILS_PER_RUN' => 'تعداد ایمیل‌های ارسال شده هر دسته:',
    'LBL_ID' => 'شناسه',
    'LBL_LIST_CAMPAIGN' => 'کمپین',
    'LBL_LIST_FORM_TITLE' => 'صف',
    'LBL_LIST_FROM_NAME' => 'نام فرستنده',
    'LBL_LIST_IN_QUEUE' => 'در حال پردازش',
    'LBL_LIST_MESSAGE_NAME' => 'پیام بازاریابی',
    'LBL_LIST_RECIPIENT_EMAIL' => 'گیرنده ایمیل',
    'LBL_LIST_RECIPIENT_NAME' => 'نام گیرنده',
    'LBL_LIST_SEND_ATTEMPTS' => 'تلاش برای ارسال',
    'LBL_LIST_SEND_DATE_TIME' => 'ارسال',
    'LBL_LIST_USER_NAME' => 'نام کاربر',
    'LBL_LOCATION_ONLY' => 'مکان',
    'LBL_LOCATION_TRACK' => 'محل فایل‌های ردیاب کمپین (مثل campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'از پیام‌های کمپین کپی نگه دار:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'آیا تمایل دارید که کپی‌های کاملی از <bold>تمام</bold> پیام‌های ایمیل ارسال شده در طول تمام کمپین‌ها ذخیره شود؟ <bold>پیشنهاد ما و حالت پیش‌فرض خیر است</bold>. انتخاب خیرتنها قالبی که ارسال شده و متغیرهای ضروری برای بازتولید تک‌تک پیام‌ها را ذخیره خواهد کرد.',
    'LBL_MAIL_SENDTYPE' => 'عامل انتقال ایمیل:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication:',
    'LBL_MAIL_SMTPPASS' => 'کلمه عبور:',
    'LBL_MAIL_SMTPPORT' => 'پورت SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'سرور SMTP پست الکترونیکی:',
    'LBL_MAIL_SMTPUSER' => 'نام کاربری:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'ارائه دهنده ایمیل خود را انتخاب کنید',
    'LBL_YAHOOMAIL_SMTPPASS' => 'رمز عبور ایمیل یاهو',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'رمز عبور Gmail',
    'LBL_GMAIL_SMTPUSER' => 'آدرس جیمیل',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password',
    'LBL_EXCHANGE_SMTPUSER' => 'نام کاربری Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'پورت سرور Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'سرور Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'نرم افزار ایمیل',
    'LBL_MARKETING_ID' => 'شناسه بازاریابی',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'تنظیمات ایمیل',
    'LBL_MODULE_TITLE' => 'Outbound Email Queue Management',
    'LBL_NOTIFICATION_ON_DESC' => 'When enabled, emails are sent to users when records are assigned to them.',
    'LBL_NOTIFY_FROMADDRESS' => '"از" آدرس:',
    'LBL_NOTIFY_FROMNAME' => '"از" نام:',
    'LBL_NOTIFY_ON' => 'Assignment Notifications',
    'LBL_NOTIFY_TITLE' => 'گزینه های ایمیل',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Outbound Email Options',
    'LBL_RELATED_ID' => 'شناسه مرتبط',
    'LBL_RELATED_TYPE' => 'نوع مرتبط',
    'LBL_SEARCH_FORM_TITLE' => 'صف جستجو',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'مقدار تنظمیات site_url فایل Config.php',
    'TXT_REMOVE_ME_ALT' => 'To remove yourself from this email list go to',
    'TXT_REMOVE_ME_CLICK' => 'اینجا کلیک کنید',
    'TXT_REMOVE_ME' => 'To remove yourself from this email list',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Email Security Settings',
    'LBL_SECURITY_DESC' => 'Check the following that should NOT be allowed in via InboundEmail or displayed in the Emails module.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'برچسب های پایه',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'برچسب iFrame',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Select Outlook default minimum security settings (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle All Options',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'بله',
    'LBL_NO' => 'خير',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'تلاش برای ارسال',
    'LBL_OUTGOING_SECTION_HELP' => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.<br> If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'کمک' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'مشاهده حساب ایمیل های خارجی',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
