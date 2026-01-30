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
    'LBL_MODULE_NAME' => 'מסמכים',
    'LBL_MODULE_TITLE' => 'מסמכים:',
    'LNK_NEW_DOCUMENT' => 'צור מסמך',
    'LNK_DOCUMENT_LIST' => 'רשימת מסמכים',
    'LBL_DOC_REV_HEADER' => 'בדיקת מסמך מחודשת',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש מסמך',
    //vardef labels
    'LBL_NAME' => ' שם מסמך',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_CATEGORY' => 'קטגוריה',
    'LBL_SUBCATEGORY' => 'תת קטגוריה',
    'LBL_STATUS' => 'סטטוס',
    'LBL_CREATED_BY' => 'נוצר ע"י:',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_DELETED' => 'נמחק',
    'LBL_MODIFIED' => 'שונה על ידי שזהותו',
    'LBL_MODIFIED_USER' => 'שונה ע"י:',
    'LBL_CREATED' => 'נוצר ע"י:',
    'LBL_REVISIONS' => 'בדיקות מחדש',
    'LBL_RELATED_DOCUMENT_ID' => 'קשור למסמך שזהותו',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'קשור למסמך בבדיקה מחדש שזהותה',
    'LBL_IS_TEMPLATE' => 'השתמש בתבנית',
    'LBL_TEMPLATE_TYPE' => 'סוג מסמך',
    'LBL_ASSIGNED_TO_NAME' => 'הקצה ל:',
    'LBL_REVISION_NAME' => 'בדיקה מחודשת של מספר',
    'LBL_MIME' => 'סוג mime',
    'LBL_REVISION' => 'רויזיה',
    'LBL_DOCUMENT' => 'מסמכים קשורים',
    'LBL_LATEST_REVISION' => 'גרסה אחרונה',
    'LBL_CHANGE_LOG' => 'שנה יומן',
    'LBL_ACTIVE_DATE' => 'תאריך פרסום',
    'LBL_EXPIRATION_DATE' => 'תאריך תפוגה',
    'LBL_FILE_EXTENSION' => 'שלוחת קובץ',
    'LBL_LAST_REV_MIME_TYPE' => 'בדיקה מחדש האחרונה MIME type',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'לא מפורט',
    'LBL_HOMEPAGE_TITLE' => 'המסמכים שלי',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'מסמך חדש',
    //document edit and detail view
    'LBL_DOC_NAME' => 'שם מסמך:',
    'LBL_FILENAME' => 'שם קובץ:',
    'LBL_LIST_FILENAME' => 'קובץ',
    'LBL_DOC_VERSION' => 'ריויזיה:',
    'LBL_FILE_UPLOAD' => 'קובץ',

    'LBL_CATEGORY_VALUE' => 'קטגוריה:',
    'LBL_LIST_CATEGORY' => 'קטגוריה',
    'LBL_SUBCATEGORY_VALUE' => 'תת קטגוריה:',
    'LBL_DOC_STATUS' => 'סטטוס',
    'LBL_LAST_REV_CREATOR' => 'בדיקה מחדש נוצרה על ידי:',
    'LBL_LASTEST_REVISION_NAME' => 'שם הבדיקה מחדש האחרונה:',
    'LBL_SELECTED_REVISION_NAME' => 'שמות שנבחרו לבדיקה מחדש:',
    'LBL_CONTRACT_STATUS' => 'סטאטוס איש קשר:',
    'LBL_CONTRACT_NAME' => 'שם איש קשר:',
    'LBL_DET_RELATED_DOCUMENT' => 'קובץ שקשור:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "בדיקה מחדש של מסמך שקשור:",
    'LBL_DET_IS_TEMPLATE' => 'תבנית? :',
    'LBL_DET_TEMPLATE_TYPE' => 'סוג מסמך:',
    'LBL_DOC_DESCRIPTION' => 'תאור:',
    'LBL_DOC_ACTIVE_DATE' => 'תאריך פרסום:',
    'LBL_DOC_EXP_DATE' => 'תאריך תפוגה:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'רשימת מסמכים',
    'LBL_LIST_DOCUMENT' => 'מסמך',
    'LBL_LIST_SUBCATEGORY' => 'תת קטגוריה',
    'LBL_LIST_REVISION' => 'רויזיה',
    'LBL_LIST_LAST_REV_CREATOR' => 'פורסם ע"י',
    'LBL_LIST_LAST_REV_DATE' => 'תאריך רויזיה',
    'LBL_LIST_VIEW_DOCUMENT' => 'תצוגה',
    'LBL_LIST_ACTIVE_DATE' => 'תאריך פרסום',
    'LBL_LIST_EXP_DATE' => 'תאריך תפוגה',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LINKED_ID' => 'זהות הקישור',
    'LBL_SELECTED_REVISION_ID' => 'זהות בדיקה מחדש שנבחרה',
    'LBL_LATEST_REVISION_ID' => 'זהות בדיקה מחדש האחרונה',
    'LBL_SELECTED_REVISION_FILENAME' => 'שם קובץ של הבדיקה המחדש',
    'LBL_FILE_URL' => 'כתובת של הקובץ',

    //document search form.
    'LBL_SF_CATEGORY' => 'קטגוריה:',
    'LBL_SF_SUBCATEGORY' => 'תת קטגוריה:',

    'DEF_CREATE_LOG' => 'מסמך נוצר',

    //error messages
    'ERR_DOC_NAME' => ' שם מסמך',
    'ERR_DOC_ACTIVE_DATE' => 'תאריך פרסום',
    'ERR_FILENAME' => 'שם קובץ',
    'ERR_DOC_VERSION' => 'גרסת מסמך',
    'ERR_DELETE_CONFIRM' => 'האם ברצונך למחוק את ריויזית המסך הזה?',
    'ERR_DELETE_LATEST_VERSION' => 'אתה לא מורשה למחוק את הרויזיה החדשה של מסמך זה.',
    'LNK_NEW_MAIL_MERGE' => 'מיזוג דואר',
    'ERR_MISSING_FILE' => 'This document is missing a file, most likely due to  an error during upload. Please retry uploading the file or contact your administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'שם',
    'LBL_LIST_IS_TEMPLATE' => 'תבנית?',
    'LBL_LIST_TEMPLATE_TYPE' => 'סוג מסמך',
    'LBL_LAST_REV_CREATE_DATE' => 'תאריך יצירה של הבדיקה מחדש האחרונה',
    'LBL_CONTRACTS' => 'חוזים',
    'LBL_CREATED_USER' => 'משתמשים שנוצרו',
    'LBL_DOCUMENT_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'מקור',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'שם קובץ',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'The first 20 most recently modified files are displayed in descending order in the list below. Use the Search to find other files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'שם קובץ',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'חשבונות',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'הזדמנויות',
    'LBL_CASES_SUBPANEL_TITLE' => 'קריאות',
    'LBL_BUGS_SUBPANEL_TITLE' => 'תקלות',

    'LBL_AOS_CONTRACTS' => 'חוזים',
);
