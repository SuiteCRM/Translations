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
    'LBL_DESCRIPTION' => 'جسم',
    'LBL_HEADER' => 'ہیڈر',
    'LBL_FOOTER' => 'فوٹر',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_FORM_TITLE' => 'پی ڈی ایف سانچے کی فہرست',
    'LBL_MODULE_NAME' => 'پی ڈی ایف سانچے',
    'LBL_MODULE_TITLE' => 'پی ڈی ایف سانچے: گھر',
    'LBL_HOMEPAGE_TITLE' => 'میرا پی ڈی ایف سانچے',
    'LNK_NEW_RECORD' => 'پی ڈی ایف سانچہ بنائیں',
    'LNK_LIST' => 'پی ڈی ایف سانچے دیکھیں',
    'LBL_SEARCH_FORM_TITLE' => 'پی ڈی ایف سانچے تلاش کریں',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ دیکھیں',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_NEW_FORM_TITLE' => 'نیا پی ڈی ایف سانچہ',
    'LBL_TYPE' => 'قسم',
    'LBL_ACTIVE' => 'فعال ہے',
    'LBL_BUTTON_INSERT' => 'داخل کریں',
    'LBL_WARNING_OVERWRITE' => 'انتباہ یہ آپ کو موجودہ کام کو مسترد کر دے گا',
    'LBL_INSERT_FIELDS' => 'فیلڈ داخل کریں',

    'LBL_SAMPLE' => 'نمونہ لوڈ کریں',
    'LBL_PAGE' => 'صفحہ',
    'LBL_PREPARED_FOR' => 'کے لئے تیاری',
    'LBL_PREPARED_BY' => 'کے ذریعے تیار کیا گیا',
    'LBL_QUOTE_SAMPLE' => 'نمونہ نمونہ',
    'LBL_INVOICE_SAMPLE' => 'انوائس نمونہ',
    'LBL_ACCOUNT_SAMPLE' => 'اکاؤنٹ نمونہ',
    'LBL_CONTACT_SAMPLE' => 'نمونہ سے رابطہ کریں',
    'LBL_LEAD_SAMPLE' => 'لیڈ نمونہ',
    'LBL_ANY_STREET' => 'کوئی سڑک',
    'LBL_ANY_TOWN' => 'کوئی ٹاؤن',
    'LBL_ANY_WHERE' => 'کوئی کہاں',

    'LBL_QUOTE_GROUP_SAMPLE' => 'اقتباس گروپ نمونہ',
    'LBL_INVOICE_GROUP_SAMPLE' => 'انوائس گروپ نمونہ',
    'LBL_MARGIN_LEFT' => 'مارجن بائیں',
    'LBL_MARGIN_RIGHT' => 'مارجن دائیں',
    'LBL_MARGIN_TOP' => 'مارجن اوپر',
    'LBL_MARGIN_BOTTOM' => 'مارجن نیچے',
    'LBL_MARGIN_HEADER' => 'مارجن ہیڈر',
    'LBL_MARGIN_FOOTER' => 'مارجن فوٹر',
    'LBL_EDITVIEW_PANEL1' => 'مارجن',
    'LBL_DETAILVIEW_PANEL1' => 'مارجن',
    'LBL_PAGE_SIZE' => 'صفحہ سائز',
    'LBL_ORIENTATION' => 'واقفیت',
);
