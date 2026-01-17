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
    //module
    'LBL_MODULE_NAME' => 'دستاویزات',
    'LBL_MODULE_TITLE' => 'دستاویزات: ہوم',
    'LNK_NEW_DOCUMENT' => 'دستاویز بنائیں',
    'LNK_DOCUMENT_LIST' => 'دستاویزات دیکھیں',
    'LBL_DOC_REV_HEADER' => 'دستاویزی نظرثانیاں',
    'LBL_SEARCH_FORM_TITLE' => 'دستاویز کی تلاش',
    //vardef labels
    'LBL_NAME' => 'دستاویز کا نام',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_CATEGORY' => 'زمرہ جات',
    'LBL_SUBCATEGORY' => 'ذیلی زمرہ جات',
    'LBL_STATUS' => 'حیثیت',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا',
    'LBL_DATE_ENTERED' => 'تاریخ بنائی گئی ہے',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_DELETED' => 'ختم کر دیا گیا',
    'LBL_MODIFIED' => 'معلمات کو تبدیل کریں',
    'LBL_MODIFIED_USER' => 'کسی کی طرف سے درست کرنا',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا',
    'LBL_REVISIONS' => 'ترمیم',
    'LBL_RELATED_DOCUMENT_ID' => 'دستاویز کے مطابق معلومات',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'دستاویز ورژن کے مطابق معلومات',
    'LBL_IS_TEMPLATE' => 'ایک سانچہ ہے',
    'LBL_TEMPLATE_TYPE' => 'دستاویز کی قسم',
    'LBL_ASSIGNED_TO_NAME' => 'مقرر کردہ سے:',
    'LBL_REVISION_NAME' => 'نظر ثانی نمبر',
    'LBL_MIME' => 'مائم کی قسم',
    'LBL_REVISION' => 'نظر ثانی',
    'LBL_DOCUMENT' => 'متعلقہ دستاویز',
    'LBL_LATEST_REVISION' => 'تازہ ترین نظر ثانی',
    'LBL_CHANGE_LOG' => 'لاگ ان کو تبدیل کریں',
    'LBL_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'LBL_EXPIRATION_DATE' => 'ختم ہونے کی مدت',
    'LBL_FILE_EXTENSION' => 'فائل کی توسیع',
    'LBL_LAST_REV_MIME_TYPE' => 'آخری برین کی ایم ای ایم ای قسم',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'غیر مقرر شدہ',
    'LBL_HOMEPAGE_TITLE' => 'میرے دستاویز',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'نئی دستاویز',
    //document edit and detail view
    'LBL_DOC_NAME' => 'دستاویز کا نام:',
    'LBL_FILENAME' => 'فائل کا نام:',
    'LBL_LIST_FILENAME' => 'فائل:',
    'LBL_DOC_VERSION' => 'نظر ثانی:',
    'LBL_FILE_UPLOAD' => 'فائل:',

    'LBL_CATEGORY_VALUE' => 'زمرہ:',
    'LBL_LIST_CATEGORY' => 'زمرہ جات',
    'LBL_SUBCATEGORY_VALUE' => 'ذیلی زمرہ:',
    'LBL_DOC_STATUS' => 'حیثیت:',
    'LBL_LAST_REV_CREATOR' => 'نظرثانی کی طرف سے بن گئی ہے:',
    'LBL_LASTEST_REVISION_NAME' => 'تازہ ترین ترحیم کا نام:',
    'LBL_SELECTED_REVISION_NAME' => 'منتخب نظر ثانی شدہ نام:',
    'LBL_CONTRACT_STATUS' => 'معاہدہ کی حیثیت:',
    'LBL_CONTRACT_NAME' => 'معاہدہ نام:',
    'LBL_DET_RELATED_DOCUMENT' => 'متعلقہ دستاویز:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "دستاویز کے مطابق ترین:",
    'LBL_DET_IS_TEMPLATE' => 'سانچے؟ :',
    'LBL_DET_TEMPLATE_TYPE' => 'دستاویز کی قسم:',
    'LBL_DOC_DESCRIPTION' => 'تفصیل:',
    'LBL_DOC_ACTIVE_DATE' => 'اشاعت کی تاریخ:',
    'LBL_DOC_EXP_DATE' => 'ختم ہونے کی تاریخ:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'دستاویز کی فہرست',
    'LBL_LIST_DOCUMENT' => 'دستاویز',
    'LBL_LIST_SUBCATEGORY' => 'ذیلی زمرہ جات',
    'LBL_LIST_REVISION' => 'نظر ثانی',
    'LBL_LIST_LAST_REV_CREATOR' => 'کے ذریعے شائع کردہ',
    'LBL_LIST_LAST_REV_DATE' => 'نظر ثانی کی تاریخ',
    'LBL_LIST_VIEW_DOCUMENT' => 'دیکھیں',
    'LBL_LIST_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'LBL_LIST_EXP_DATE' => 'ختم ہونے کی مدت',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_LINKED_ID' => 'منسلکہ شناخت',
    'LBL_SELECTED_REVISION_ID' => 'منتخب کردہ ترمیم کی شناخت',
    'LBL_LATEST_REVISION_ID' => 'تازہ ترین ترمیم کی شناخت',
    'LBL_SELECTED_REVISION_FILENAME' => 'ترحیم دستاویز نام منتخب کریں',
    'LBL_FILE_URL' => 'فائل یو آر ایل',

    //document search form.
    'LBL_SF_CATEGORY' => 'زمرہ:',
    'LBL_SF_SUBCATEGORY' => 'ذیلی زمرہ:',

    'DEF_CREATE_LOG' => 'دستاویز تیار ہیں',

    //error messages
    'ERR_DOC_NAME' => 'دستاویز کا نام',
    'ERR_DOC_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'ERR_FILENAME' => 'فائل کا نام',
    'ERR_DOC_VERSION' => 'دستاویز ورژن',
    'ERR_DELETE_CONFIRM' => 'کیا آپ اس دستاویز کی نظر ثانی کو ختم کرنا چاہتے ہیں?',
    'ERR_DELETE_LATEST_VERSION' => 'آپ کو ایک دستاویز کی تازہ ترین نظرثانی حذف کرنا اجازت نہیں ہے.',
    'LNK_NEW_MAIL_MERGE' => 'ڈاک ضم',
    'ERR_MISSING_FILE' => 'یہ دستاویز ایک فائل غائب ہے، جس کا امکان ہے اپ لوڈ کے دوران ایک غلطی کی وجہ سے. براہ کرم فائل اپ لوڈ کریں یا اپنے منتظم سے رابطہ کریں.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'نام',
    'LBL_LIST_IS_TEMPLATE' => 'سانچے?',
    'LBL_LIST_TEMPLATE_TYPE' => 'دستاویز کی قسم',
    'LBL_LAST_REV_CREATE_DATE' => 'آخری ترمیم تخلیق کی تاریخ',
    'LBL_CONTRACTS' => 'معاہدے',
    'LBL_CREATED_USER' => 'صارف بنائیں',
    'LBL_DOCUMENT_INFORMATION' => 'جائزہ', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'دستاویز ماخذ شناخت',
    'LBL_DOC_TYPE' => 'ذریعہ',
    'LBL_DOC_TYPE_POPUP' => 'جو دستاویز چڑھایا جارہا ہے اس کے ذرائع کو منتخب کریں<br> جو کے دستیاب ہوگا.',
    'LBL_DOC_URL' => 'دستاویز ماخذ یو آر ایل',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'فائل کا نام',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'سب سے پہلے 20 سب سے زیادہ ترمیم کردہ فائلیں ترتیب نزولی میں دیئے گئے فہرست میں اترتے ہیں. دیگر فائلوں کو ڈھونڈنے کرنے کے لئے تلاش کا استعمال کریں.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'فائل کا نام',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'صارف نے غیر قانونی بیرونی API ({0} تک رسائی حاصل کرنے کی کوشش کی',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'بیرونی API کے لئے لاگ ان چیک ناکام ہوگئی({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'کهاتے',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'رابطے',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'مواقعے',
    'LBL_CASES_SUBPANEL_TITLE' => 'معاملے',
    'LBL_BUGS_SUBPANEL_TITLE' => 'مسئلے',

    'LBL_AOS_CONTRACTS' => 'معاہدے',
);
