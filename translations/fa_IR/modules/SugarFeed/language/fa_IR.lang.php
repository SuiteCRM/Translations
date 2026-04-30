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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NAME' => 'نام',
    'LBL_SAVING' => 'درحال ذخیره...',
    'LBL_SAVED' => 'Saved',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_FORM_TITLE' => 'Feed List',
    'LBL_MODULE_NAME' => 'جریان فعالیت‌ها',
    'LBL_MODULE_TITLE' => 'Activity Streams',
    'LBL_DASHLET_DISABLED' => 'اخطار: سیستم اشتراک غیر فعال شده است، تا آن را فعال می شود هیچ ورودی خوراک جدید خواهد شد نوشته شده',
    'LBL_RECORDS_DELETED' => 'تمام نوشته های قبلی اس حذف شده, اگر سیستم اشتراک فعال، جدید ها به طور خودکار تولید می شود.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Are you sure you wish to delete all of the Feed entries?',
    'LBL_FLUSH_RECORDS' => 'Delete Feed Entries',
    'LBL_ENABLE_FEED' => 'Dashlet جریان فعالیت من را قادر می سازد',
    'LBL_ENABLE_MODULE_LIST' => 'منابع خبری برای فعال کردن',
    'LBL_HOMEPAGE_TITLE' => 'من جریان فعالیت',
    'LNK_NEW_RECORD' => 'ایجاد اشتراک',
    'LNK_LIST' => 'Feed',
    'LBL_SEARCH_FORM_TITLE' => 'Search Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_NEW_FORM_TITLE' => 'New Feed',
    'LBL_ALL' => 'All',
    'LBL_USER_FEED' => 'User Feed',
    'LBL_ENABLE_USER_FEED' => 'فعال کردن اشتراک کاربر',
    'LBL_TO' => 'قابل مشاهده برای تیم',
    'LBL_IS' => 'است',
    'LBL_DONE' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_TITLE' => 'Title',
    'LBL_ROWS' => 'Rows',
    'LBL_CATEGORIES' => 'Modules',
    'LBL_TIME_LAST_WEEK' => 'Last Week',
    'LBL_TIME_WEEKS' => 'weeks',
    'LBL_TIME_DAYS' => 'days',
    'LBL_TIME_YESTERDAY' => 'Yesterday',
    'LBL_TIME_HOURS' => 'ساعت',
    'LBL_TIME_HOUR' => 'ساعت',
    'LBL_TIME_MINUTES' => 'دقیقه',
    'LBL_TIME_MINUTE' => 'دقیقه',
    'LBL_TIME_SECONDS' => 'ثانیه',
    'LBL_TIME_SECOND' => 'ثانیه',
    'LBL_TIME_AND' => ' و ',
    'LBL_TIME_AGO' => 'پیش',
// Activity stream
    'CREATED_CONTACT' => 'یک <b>رکورد جدید</b> ایجاد کرد {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'for', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>CLOSED</b> a {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTED</b> a {0}',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'با',

    'LBL_LINK_TYPE_Link' => 'Link',
    'LBL_LINK_TYPE_Image' => 'Image',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'انتخاب',
    'LBL_POST' => 'Post',
    'LBL_AUTHENTICATE' => 'اتصال به',
    'LBL_AUTHENTICATION_PENDING' => 'Not all of the external accounts you have selected have been authenticated. Click \'Cancel\' to return to the Options window to authenticate the external accounts, or click \'Ok\' to proceed without authenticating.',
    'LBL_ADVANCED_SEARCH' => 'فیلتر پیشرفته' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'نشان دادن گزینه های بیشتر',
    'LBL_HIDE_OPTIONS' => 'Hide Options',
    'LBL_VIEW' => 'View',
    'LBL_POST_TITLE' => 'Post Status Update for ',
    'LBL_URL_LINK_TITLE' => 'URL Link to use',
);
