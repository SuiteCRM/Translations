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
    'LBL_ALL_MODULES' => 'سب',//rost fix
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
    'LBL_NONINHERITABLE' => 'ناگزیر نہیں',
    'LBL_LIST_NONINHERITABLE' => 'ناگزیر نہیں',
    'LBL_NAME' => 'نام',
    'LBL_CREATED_USER' => 'صارف کی طرف سے پیدا شدہ',
    'LBL_MODIFIED_USER' => 'صارف کی طرف سے ترمیم',
    'LBL_LIST_FORM_TITLE' => 'سیکورٹی گروپ',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'ایک سیکورٹی گروپ بنائیں',
    'LNK_LIST' => 'فہرست کو دیکھنا',
    'LBL_SEARCH_FORM_TITLE' => 'تلاش سیکورٹی گروپ مینجمنٹ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'تاریخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'سرگرمیاں',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'افادات ہونے والے انتظامیہ کرو',
    'LBL_USERS' => 'صارفین',
    'LBL_USERS_SUBPANEL_TITLE' => 'صارفین',
    'LBL_ROLES_SUBPANEL_TITLE' => 'کردار',
    'LBL_ROLES' => 'کردار',

    'LBL_CONFIGURE_SETTINGS' => 'ترتیب دیں',
    'LBL_ADDITIVE' => 'اضافی حق',
    'LBL_ADDITIVE_DESC' => "یوزر صارف یا صارف کے گروپ (s) کو مقرر کردہ تمام کرداروں کا سب سے بڑا حق حاصل کرتا ہے",
    'LBL_STRICT_RIGHTS' => 'سخت حقوق',
    'LBL_STRICT_RIGHTS_DESC' => "اگر صارف بہت سے گروپوں کا رکن ہے تو موجودہ ریکارڈ کو تفویض کردہ گروہ کے صرف متعلقہ حقوق استعمال کیے جاتے ہیں.",
    'LBL_USER_ROLE_PRECEDENCE' => 'صارف کردار کی تیاری',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'اگر کسی بھی رول کو براہ راست ایک صارف کو تفویض کیا جاتا ہے جس میں کسی بھی کردار کے کردار پر کردار ادا کرنا چاہئے.',
    'LBL_INHERIT_TITLE' => 'گروپ کی وراثت قواعد',
    'LBL_INHERIT_CREATOR' => 'صارف کی طرف سے تخلیق کی طرف سے پیدا',
    'LBL_INHERIT_CREATOR_DESC' => 'ریکارڈ تمام گروہوں کو وارث کرے گا جسے صارف نے مقرر کیا ہے.',
    'LBL_INHERIT_PARENT' => 'والدین ریکارڈ سے پیدائش',
    'LBL_INHERIT_PARENT_DESC' => 'مثال کے طور پر اگر ایک رابطہ کے لئے ایک کیس پیدا ہوتا ہے تو کیس کیس سے منسلک گروپوں کا وارث کرے گا.',
    'LBL_USER_POPUP' => 'نیا صارف گروپ پاپ اپ',
    'LBL_USER_POPUP_DESC' => 'صارف کو ایک گروپ (s) کو تفویض کرنے کے لئے ایک نیا صارف تخلیق کرتے وقت سیکورٹی گروپ گروپ پاپ اپ دکھاتا ہے.',
    'LBL_INHERIT_ASSIGNED' => 'صارف کو تفویض کی طرف سے انفرادی',
    'LBL_INHERIT_ASSIGNED_DESC' => 'ریکارڈ ریکارڈ کرنے کے لئے مقرر کردہ تمام گروپوں کا وارث ہوگا. ریکارڈ کرنے کے لئے مقرر کردہ دیگر گروپوں کو ہٹا دیا جائے گا.',
    'LBL_POPUP_SELECT' => 'خالق گروپ کا انتخاب کریں',
    'LBL_POPUP_SELECT_DESC' => 'جب صارف کے ذریعہ ایک سے زیادہ گروپ میں ایک ریکارڈ تیار ہوتا ہے، تو اسکرین پر ایک گروپ کا انتخاب پینل دکھاتا ہے. ورنہ یہ ایک گروپ کا وارث ہے.',
    'LBL_FILTER_USER_LIST' => 'فلٹر صارف کی فہرست',
    'LBL_FILTER_USER_LIST_DESC' => "غیر منتظم صارفین صرف اسی گروہوں کے صارفین کو تفویض کرسکتے ہیں.",

    'LBL_DEFAULT_GROUP_TITLE' => 'نئے ریکارڈز کے لئے ڈیفالٹ گروپ',
    'LBL_ADD_BUTTON_LABEL' => 'شامل کریں',
    'LBL_REMOVE_BUTTON_LABEL' => 'ہٹا دیں',
    'LBL_GROUP' => 'گروپ:',
    'LBL_MODULE' => 'ماڈیول:',

    'LBL_MASS_ASSIGN' => 'سیکورٹی گروپ: ماسٹر مقرر',
    'LBL_ASSIGN' => 'تفویض',
    'LBL_REMOVE' => 'ہٹا دیں',
    'LBL_ASSIGN_CONFIRM' => 'کیا آپ واقعی اس گروپ کو شامل کرنا چاہتے ہیں ',
    'LBL_REMOVE_CONFIRM' => 'کیا آپ واقعی اس گروپ سے ہٹا دیں گے ',
    'LBL_CONFIRM_END' => ' منتخب کردہ ریکارڈ (ز)؟',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'سیکورٹی گروپ / صارف',
    'LBL_USER_NAME' => 'صارف کا نام',
    'LBL_SECURITYGROUP_NAME' => 'سیکورٹی گروپ کا نام',
    'LBL_HOMEPAGE_TITLE' => 'گروپ پیغامات',
    'LBL_TITLE' => 'عنوان',
    'LBL_ROWS' => 'صف',
    'LBL_POST' => 'پوسٹ',
    'LBL_SELECT_GROUP_ERROR' => 'براہ مہربانی ایک گروپ کا انتخاب کریں اور دوبارہ کوشش کریں.',

    'LBL_GROUP_SELECT' => 'منتخب کریں اس گروپ کو کونسا گروپ ہونا چاہئے',
    'LBL_ERROR_DUPLICATE' => 'سویٹ سی آر ایم کی طرف سے پتہ چلنے والی ممکنہ ڈپلیکیٹ کی وجہ سے آپ کو خود بخود سیکیورٹی گروپ کو اپنے نئے پیدا شدہ ریکارڈ میں شامل کرنا ہوگا.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'ناجائز ای میل اکاؤنٹ',
    'LBL_INBOUND_EMAIL_DESC' => 'صرف ایک ای میل اکاؤنٹ تک رسائی کی اجازت دیتے ہیں اگر صارف کسی گروپ سے تعلق رکھتا ہے جو میل اکاؤنٹس کو تفویض کیا جاتا ہے.',
    'LBL_PRIMARY_GROUP' => 'پرائمری گروپ',
    'LBL_CHECKMARK' => 'Checkmark',

);
