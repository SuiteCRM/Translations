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
    'LBL_ALL_MODULES' => 'همه',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'شناسه کاربر تخصیص یافته',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ID' => 'شناسه',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش',
    'LBL_MODIFIED' => 'تغییر یافته توسط',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_DESCRIPTION' => 'توضیحات',
    'LBL_DELETED' => 'حذف شده',
    'LBL_NONINHERITABLE' => 'غیر موروثی',
    'LBL_LIST_NONINHERITABLE' => 'غیر موروثی',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_LIST_FORM_TITLE' => 'گروه های امنیتی',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'ایجاد یک گروه امنیتی',
    'LNK_LIST' => 'نمای لیستی',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'سوابق',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'مدیریت گروه امنیتی',
    'LBL_USERS' => 'کاربرها',
    'LBL_USERS_SUBPANEL_TITLE' => 'کاربرها',
    'LBL_ROLES_SUBPANEL_TITLE' => 'نقش‌ها',
    'LBL_ROLES' => 'نقش‌ها',

    'LBL_CONFIGURE_SETTINGS' => 'پیکربندی',
    'LBL_ADDITIVE' => 'حقوق افزايشي',
    'LBL_ADDITIVE_DESC' => "User gets greatest rights of all roles assigned to the user or the user's group(s)",
    'LBL_STRICT_RIGHTS' => 'Strict Rights',
    'LBL_STRICT_RIGHTS_DESC' => "اگر کاربر عضو چند گروه است تنها حقوق مربوطه از گروه به رکورد فعلی استفاده می شود.",
    'LBL_USER_ROLE_PRECEDENCE' => 'کاربر نقش مقدم',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'اگر هر گونه نقش مستقیم به یک کاربر اختصاص داده می شود که نقش باید اولویت بیش از هر گروه نقش را.',
    'LBL_INHERIT_TITLE' => 'قوانین وراثت گروه',
    'LBL_INHERIT_CREATOR' => 'Inherit from Created By User',
    'LBL_INHERIT_CREATOR_DESC' => 'ثبت گروه های اختصاص یافته به کاربر است که آن را ایجاد ارث می برند.',
    'LBL_INHERIT_PARENT' => 'از رکورد والد به ارث می برند',
    'LBL_INHERIT_PARENT_DESC' => 'به عنوان مثال اگر برای یک مخاطب خدمات ایجاد شود، خدمات مذکور گروه‌های مرتبط را از مخاطب مذکور ارث بری می‌کند.',
    'LBL_USER_POPUP' => 'پرشی گروه کاربر جدید',
    'LBL_USER_POPUP_DESC' => 'When creating a new user show the SecurityGroups popup to assign the user to a group(s).',
    'LBL_INHERIT_ASSIGNED' => 'Inherit from Assigned To User',
    'LBL_INHERIT_ASSIGNED_DESC' => 'The record will inherit all the groups of the user assigned to the record. Other groups assigned to the record will NOT be removed.',
    'LBL_POPUP_SELECT' => 'استفاده از خالق گروه را انتخاب کنید',
    'LBL_POPUP_SELECT_DESC' => 'When a record is created by a user in more than one group show a group selection panel on the create screen. Otherwise inherit that one group.',
    'LBL_FILTER_USER_LIST' => 'فیلتر لیست کاربر',
    'LBL_FILTER_USER_LIST_DESC' => "Non-admin users can only assign to users in the same group(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Default Groups for New Records',
    'LBL_ADD_BUTTON_LABEL' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_REMOVE_BUTTON_LABEL' => 'حذف',
    'LBL_GROUP' => 'گروه:',
    'LBL_MODULE' => 'ماژول:',

    'LBL_MASS_ASSIGN' => 'Security Groups: Mass Assign',
    'LBL_ASSIGN' => 'اختصاص دادن',
    'LBL_REMOVE' => 'حذف',
    'LBL_ASSIGN_CONFIRM' => 'Are you sure that you want to add this group to the ',
    'LBL_REMOVE_CONFIRM' => 'Are you sure that you want to remove this group from the ',
    'LBL_CONFIRM_END' => ' رکورد (های) انتخاب شده؟',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroup/User',
    'LBL_USER_NAME' => 'نام کاربر',
    'LBL_SECURITYGROUP_NAME' => 'SecurityGroup Name',
    'LBL_HOMEPAGE_TITLE' => 'پیام های گروه',
    'LBL_TITLE' => 'عنوان',
    'LBL_ROWS' => 'ردیف ها',
    'LBL_POST' => 'ارسال',
    'LBL_SELECT_GROUP_ERROR' => 'Please select a group and try again.',

    'LBL_GROUP_SELECT' => 'Select which groups should have access to this record',
    'LBL_ERROR_DUPLICATE' => 'Due to a possible duplicate detected by SuiteCRM you will have to manually add Security Groups to your newly created record.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Inbound email account',
    'LBL_INBOUND_EMAIL_DESC' => 'Only allow access to an email account if user belongs to a group that is assigned to the mail account.',
    'LBL_PRIMARY_GROUP' => 'Primary Group',
    'LBL_CHECKMARK' => 'Checkmark',

);
