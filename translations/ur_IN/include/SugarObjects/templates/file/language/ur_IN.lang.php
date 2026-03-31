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
    'LNK_DOCUMENT_LIST' => 'دستاویزات کی فہرست',
    'LBL_SEARCH_FORM_TITLE' => 'دستاویز کی تلاش',
    //vardef labels
    'LBL_NAME' => 'دستاویز کا نام',
    'LBL_DESCRIPTION' => 'تفصیل',
    'LBL_ASSIGNED_TO' => 'مقرر کردہ سے:',
    'LBL_CATEGORY' => 'زمرہ جات',
    'LBL_SUBCATEGORY' => 'ذیلی زمرہ جات',
    'LBL_STATUS' => 'حیثیت',
    'LBL_IS_TEMPLATE' => 'ایک سانچہ ہے',
    'LBL_TEMPLATE_TYPE' => 'دستاویز کی قسم',
    'LBL_REVISION_NAME' => 'نظر ثانی نمبر',
    'LBL_MIME' => 'مائم کی قسم',
    'LBL_REVISION' => 'نظر ثانی',
    'LBL_DOCUMENT' => 'متعلقہ دستاویز',
    'LBL_LATEST_REVISION' => 'تازہ ترین نظر ثانی',
    'LBL_CHANGE_LOG' => 'لاگ ان کو تبدیل کیجیے',
    'LBL_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'LBL_EXPIRATION_DATE' => 'ختم ہونے کی مدت',
    'LBL_FILE_EXTENSION' => 'فائل کی توسیع',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'غیر مقرر شدہ',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'نئی دستاویز',
    //document edit and detail view
    'LBL_DOC_NAME' => 'دستاویز کا نام:',
    'LBL_FILENAME' => 'فایل کا نام:',
    'LBL_FILE_UPLOAD' => 'فایل:',
    'LBL_DOC_VERSION' => 'نظر ثانی:',
    'LBL_CATEGORY_VALUE' => 'زمرہ:',
    'LBL_SUBCATEGORY_VALUE' => 'ذیلی زمرہ:',
    'LBL_DOC_STATUS' => 'حیثیت:',
    'LBL_DET_TEMPLATE_TYPE' => 'دستاویز کی قسم:',
    'LBL_DOC_DESCRIPTION' => 'تفصیل:',
    'LBL_DOC_ACTIVE_DATE' => 'اشاعت کی تاریخ:',
    'LBL_DOC_EXP_DATE' => 'ختم ہونے کی تاریخ:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'دستاویزات کی فہرست',
    'LBL_LIST_DOCUMENT' => 'دستاویز',
    'LBL_LIST_CATEGORY' => 'زمرہ جات',
    'LBL_LIST_SUBCATEGORY' => 'ذیلی زمرہ جات',
    'LBL_LIST_REVISION' => 'نظر ثانی',
    'LBL_LIST_LAST_REV_CREATOR' => 'کے ذریعے شائع کردہ',
    'LBL_LIST_LAST_REV_DATE' => 'نظر ثانی کی تاریخ',
    'LBL_LIST_VIEW_DOCUMENT' => 'دیکھیں',
    'LBL_LIST_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'LBL_LIST_EXP_DATE' => 'ختم ہونے کی مدت',
    'LBL_LIST_STATUS' => 'حیثیت',

    //document search form.
    'LBL_SF_CATEGORY' => 'زمرہ:',
    'LBL_SF_SUBCATEGORY' => 'ذیلی زمرہ:',

    'DEF_CREATE_LOG' => 'دستاویز تیار ہیں',

    //error messages
    'ERR_DOC_NAME' => 'دستاویز کا نام',
    'ERR_DOC_ACTIVE_DATE' => 'تاریخ شائع کریں',
    'ERR_FILENAME' => 'فایل کا نام',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'دستاویز کا نام',

    'LBL_EDIT_BUTTON' => 'ردوبدل کیجیے ',
    'LBL_REMOVE' => 'نکال دیں',

);
