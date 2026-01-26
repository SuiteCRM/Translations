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
    'LBL_REPLY_ADDR' => 'آدرس "پاسخ به": ',
    'LBL_REPLY_NAME' => 'نام «پاسخ-به»: ',

    'LBL_MODULE_NAME' => 'بازاریابی ایمیلی',
    'LBL_MODULE_TITLE' => 'بازاریابی ایمیلی: صفحه اصلی',
    'LBL_LIST_FORM_TITLE' => 'کمپین‌های بازاریابی ایمیلی',
    'LBL_NAME' => 'نام: ',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FROM_ADDR' => 'ایمیل فرستنده',
    'LBL_LIST_DATE_START' => 'تاریخ شروع',
    'LBL_LIST_TEMPLATE_NAME' => 'قالب ایمیل',
    'LBL_LIST_STATUS' => 'وضعیت',
    'LBL_STATUS' => 'وضعیت',
    'LBL_STATUS_TEXT' => 'وضعیت',
    'LBL_TEMPLATE_NAME' => 'نام قالب',
    'LBL_DATE_ENTERED' => 'تاریخ وارد شده',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'ویرایش کننده: ',
    'LBL_CREATED' => 'ایجاد کننده: ',
    'LBL_MESSAGE_FOR' => 'ارسال این پیام به:',

    'LBL_FROM_NAME' => 'نام فرستنده: ',
    'LBL_FROM_ADDR' => 'From Email Address: ',
    'LBL_DATE_START' => 'تاریخ شروع',
    'LBL_TIME_START' => 'زمان شروع ',
    'LBL_START_DATE_TIME' => 'زمان و تاریخ شروع: ',
    'LBL_TEMPLATE' => 'قالب ایمیل: ',

    'LBL_MODIFIED_BY' => 'ویرایش کننده: ',
    'LBL_CREATED_BY' => 'ایجاد کننده: ',

    'LNK_NEW_CAMPAIGN' => 'ایجاد کمپین',
    'LNK_CAMPAIGN_LIST' => 'کمپین‌ها',
    'LNK_NEW_PROSPECT_LIST' => 'ایجاد لیست هدف',
    'LNK_PROSPECT_LIST_LIST' => 'لیست‌های هدف',
    'LNK_NEW_PROSPECT' => 'ایجاد هدف',
    'LNK_PROSPECT_LIST' => 'اهداف',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'بازاریابی ایمیلی',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'ایجاد',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'ویرایش',
    'LBL_FROM_MAILBOX' => 'از صندوق پستی',
    'LBL_FROM_MAILBOX_NAME' => 'صندوق پستی استفاده کنید:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'حساب ایمیل خارجی:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'لیست‌های هدف',
    'LBL_ALL_PROSPECT_LISTS' => 'Select to choose all Target List(s) in the Campaign.',
    'LBL_RELATED_PROSPECT_LISTS' => 'All Target List(s) related to this message.',
    'LBL_PROSPECT_LIST_NAME' => 'نام لیست هدف',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'ارسال',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'ارسال',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'شناسه کمپین',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'قالب ایمیل',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',

);
