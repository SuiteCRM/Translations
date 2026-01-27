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
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος Χρήστης Α/Α ',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Όνομα',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Αναφορών',
    'LBL_MODULE_NAME' => 'Αναφορές',
    'LBL_MODULE_TITLE' => 'Αναφορές',
    'LBL_HOMEPAGE_TITLE' => 'Οι Αναφορές μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Αναφοράς',
    'LNK_LIST' => 'Αναφορές',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Αναφορών',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_NEW_FORM_TITLE' => 'Νέες Αναφορές',
    'LBL_REPORT_MODULE' => 'Ενότητα Αναφοράς',
    'LBL_GRAPHS_PER_ROW' => 'Γραφήματα ανά γραμμή',
    'LBL_FIELD_LINES' => 'Εμφάνιση Πεδίων',
    'LBL_ADD_FIELD' => 'Προσθήκη Πεδίου',
    'LBL_CONDITION_LINES' => 'Συνθήκες',
    'LBL_ADD_CONDITION' => 'Προσθήκη Συνθήκης',
    'LBL_EXPORT' => 'Εξαγωγή',
    'LBL_DOWNLOAD_PDF' => 'Λήψη PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Προσθήκη στη Λίστα Στόχων',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Δέντρο ενοτήτων',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Πεδία',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Συνθήκες',
    'LBL_TOTAL' => 'Σύνολο',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Γραφήματα',
    'LBL_ADD_CHART' => 'Προσθήκη Γραφήματος',
    'LBL_ADD_PARENTHESIS' => 'Πτώση παρένθεσης',
    'LBL_CHART_TITLE' => 'Τίτλος',
    'LBL_CHART_TYPE' => 'Τύπος',
    'LBL_CHART_X_FIELD' => 'Άξονας Χ',
    'LBL_CHART_Y_FIELD' => 'Άξονας Ψ',
    'LBL_AOR_REPORTS_DASHLET' => 'Αναφορές',
    'LBL_DASHLET_TITLE' => 'Τίτλος',
    'LBL_DASHLET_REPORT' => 'Αναφορά',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Παρακαλώ επιλέξτε μία αναφορά',
    'LBL_DASHLET_SAVE' => 'Αποθήκευση',
    'LBL_DASHLET_CHARTS' => 'Γραφήματα',
    'LBL_DASHLET_ONLY_CHARTS' => 'Εμφάνιση μόνο γραφημάτων',
    'LBL_UPDATE_PARAMETERS' => 'Ενημέρωση',
    'LBL_PARAMETERS' => 'Παράμετροι',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Μεταφέρετε και αποθέστε στοιχεία στην περιοχή πεδίων ή συνθηκών',
    'LBL_MAIN_GROUPS' => 'Κύρια Ομάδα:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Ανώνυμο Γράφημα',
    'LBL_REPORT' => 'Αναφορά',
);
