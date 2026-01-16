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
    'LBL_MODULE_NAME' => 'Έγγραφα',
    'LBL_MODULE_TITLE' => 'Έγγραφα',
    'LNK_NEW_DOCUMENT' => 'Δημιουργία Εγγράφου',
    'LNK_DOCUMENT_LIST' => 'Λίστα Εγγράφων',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση εγγράφων',
    //vardef labels
    'LBL_NAME' => 'Όνομα εγγράφου',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_ASSIGNED_TO' => 'Υπεύθυνος:',
    'LBL_CATEGORY' => 'Κατηγορία',
    'LBL_SUBCATEGORY' => 'Υποκατηγορία',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_IS_TEMPLATE' => 'Πρότυπο',
    'LBL_TEMPLATE_TYPE' => 'Τύπος εγγράφου',
    'LBL_REVISION_NAME' => 'Αριθμός έκδοσης',
    'LBL_MIME' => 'Τύπος Mime',
    'LBL_REVISION' => 'Έκδοση',
    'LBL_DOCUMENT' => 'Σχετικό εγγραφο',
    'LBL_LATEST_REVISION' => 'Τελευταία έκδοσηναθεώρηση',
    'LBL_CHANGE_LOG' => 'Ημερολόγιο αλλαγών',
    'LBL_ACTIVE_DATE' => 'Ημ/νία δημοσίευσης',
    'LBL_EXPIRATION_DATE' => 'Ημ/νία λήξης',
    'LBL_FILE_EXTENSION' => 'Κατάληξη',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Μ/Δ',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Νέο Έγγραφο',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Όνομα εγγράφου:',
    'LBL_FILENAME' => 'Όνομα αρχείου:',
    'LBL_FILE_UPLOAD' => 'Όνομα αρχείου',
    'LBL_DOC_VERSION' => 'Εκδοση:',
    'LBL_CATEGORY_VALUE' => 'Κατηγορία:',
    'LBL_SUBCATEGORY_VALUE' => 'Υποκατηγορία:',
    'LBL_DOC_STATUS' => 'Κατάσταση:',
    'LBL_DET_TEMPLATE_TYPE' => 'Τύπος εγγράφου:',
    'LBL_DOC_DESCRIPTION' => 'Περιγραφή:',
    'LBL_DOC_ACTIVE_DATE' => 'Ημ/νία δημοσίευσης:',
    'LBL_DOC_EXP_DATE' => 'Ημ/νία λήξης:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Καταλογος Εγγραφων',
    'LBL_LIST_DOCUMENT' => 'Έγγραφο',
    'LBL_LIST_CATEGORY' => 'Κατηγορία',
    'LBL_LIST_SUBCATEGORY' => 'Υποκατηγορία',
    'LBL_LIST_REVISION' => 'Έκδοση',
    'LBL_LIST_LAST_REV_CREATOR' => 'Δημοσιεύτηκε από',
    'LBL_LIST_LAST_REV_DATE' => 'Ημ/νία έκδοσης ',
    'LBL_LIST_VIEW_DOCUMENT' => 'Προβολή',
    'LBL_LIST_ACTIVE_DATE' => 'Ημ/νία δημοσίευσης',
    'LBL_LIST_EXP_DATE' => 'Ημ/νία λήξης',
    'LBL_LIST_STATUS' => 'Κατάσταση',

    //document search form.
    'LBL_SF_CATEGORY' => 'Κατηγορία:',
    'LBL_SF_SUBCATEGORY' => 'Υποκατηγορία:',

    'DEF_CREATE_LOG' => 'Δημιουργία εγγράφου',

    //error messages
    'ERR_DOC_NAME' => 'Όνομα εγγράφου',
    'ERR_DOC_ACTIVE_DATE' => 'Ημ/νία δημοσίευσης',
    'ERR_FILENAME' => 'Όνομα αρχείου',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Όνομα εγγράφου',

    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',

);
