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
    'ERR_DELETE_RECORD' => 'অ্যাকাউন্টটি মুছে ফেলতে একটি রেকর্ড নম্বর নির্দিষ্ট করা আবশ্যক।.',
    'LBL_ACCOUNT_NAME' => 'কোমপানির নাম:',
    'LBL_ACCOUNT' => 'কোম্পানি:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'কার্যকলাপসমূহ',
    'LBL_ADDRESS_INFORMATION' => 'ঠিকানার তথ্য',
    'LBL_ANNUAL_REVENUE' => 'বার্ষিক আয়:',
    'LBL_ANY_ADDRESS' => 'কোন ঠিকানা:',
    'LBL_ANY_EMAIL' => 'কোনও ই-মেল:',
    'LBL_EMAIL_NON_PRIMARY' => 'অ প্রাথমিক ই মেইল',
    'LBL_ANY_PHONE' => 'কোন ফোন:',
    'LBL_ASSIGNED_TO_NAME' => 'ব্যবহারকারী:',
    'LBL_RATING' => 'নির্ধারণ',
    'LBL_ASSIGNED_TO' => 'নির্ধারিত:',
    'LBL_ASSIGNED_USER' => 'নির্ধারিত:',
    'LBL_ASSIGNED_TO_ID' => 'নির্ধারিত:',
    'LBL_BILLING_ADDRESS_CITY' => 'বিলিং শহর:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'বিলিং শহর:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'বিলিং ডাক কোড:',
    'LBL_BILLING_ADDRESS_STATE' => 'বিলিং স্টেট:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'বিলিং স্টেট ২ঃ',
    'LBL_BILLING_ADDRESS_STREET_3' => 'বিলিং স্টেট ৩ঃ',
    'LBL_BILLING_ADDRESS_STREET_4' => 'বিলিং স্টেট ৪ঃ',
    'LBL_BILLING_ADDRESS_STREET' => 'বিলিং স্টেট:',
    'LBL_BILLING_ADDRESS' => 'বিলিং ঠিকানা:',
    'LBL_ACCOUNT_INFORMATION' => 'কোম্পানির তথ্য',
    'LBL_CITY' => 'শহর:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'যোগাযোগ',
    'LBL_COUNTRY' => 'দেশ:',
    'LBL_DATE_ENTERED' => 'তারিখ তৈরী:',
    'LBL_DATE_MODIFIED' => 'পরিবর্তিত তারিখ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'অ্যাকাউন্ট',
    'LBL_DESCRIPTION_INFORMATION' => 'বিবরণ তথ্য',
    'LBL_DESCRIPTION' => 'বর্ণনা:',
    'LBL_DUPLICATE' => 'সম্ভাব্য ডুপ্লিকেট অ্যাকাউন্ট',
    'LBL_EMAIL' => 'ইমেল ঠিকানা:',
    'LBL_EMPLOYEES' => 'এমপ্লয়িজ:',
    'LBL_FAX' => 'ফ্যাক্স:',
    'LBL_INDUSTRY' => 'শিল্প:',
    'LBL_LIST_ACCOUNT_NAME' => 'হিসাবের নাম',
    'LBL_LIST_CITY' => 'শহর',
    'LBL_LIST_EMAIL_ADDRESS' => 'ইমেল ঠিকানা',
    'LBL_LIST_PHONE' => 'ফোন',
    'LBL_LIST_STATE' => 'রাষ্ট্র',
    'LBL_MEMBER_OF' => 'এর সদস্য:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'সদস্য সংগঠন',
    'LBL_NAME' => 'নাম:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'অন্যান্য ইমেল:',
    'LBL_OTHER_PHONE' => 'অন্যান্য ইমেল:',
    'LBL_OWNERSHIP' => 'মালিকানা:',
    'LBL_PARENT_ACCOUNT_ID' => 'মূল অ্যাকাউন্ট আইডি',
    'LBL_PHONE_ALT' => 'বিকল্প ফোন:',
    'LBL_PHONE_FAX' => 'ফোন ফ্যাক্স:',
    'LBL_PHONE_OFFICE' => 'অফিসে ফোন:',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'ইমেল ঠিকানা',
    'LBL_EMAIL_ADDRESSES' => 'Email Address(es)',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Shipping Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',

    'LBL_STATE' => 'State:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',

    'LNK_ACCOUNT_LIST' => 'অ্যাকাউন্ট',
    'LNK_NEW_ACCOUNT' => 'Create Account',

    'MSG_DUPLICATE' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Create Account to continue creating this new account, or select an existing account listed below.',
    'MSG_SHOW_DUPLICATES' => 'The account record you are about to create might be a duplicate of an account record that already exists. Account records containing similar names are listed below.<br>Click Save to continue creating this new account, or click Cancel to return to the module without creating the account.',

    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',

    'LBL_EDIT_BUTTON' => 'Edit  ',
    'LBL_REMOVE' => 'অপসারণ',

);
