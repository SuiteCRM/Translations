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
    'LBL_MODULE_NAME' => 'Εργασίες',
    'LBL_MODULE_TITLE' => ' Υποχρεωσεις: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση υποχρέωσης',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος υποχρεωσεων',
    'LBL_NEW_FORM_TITLE' => 'Δημιουργία υποχρέωσης',
    'LBL_LIST_CLOSE' => 'Κλείσιμο',
    'LBL_LIST_SUBJECT' => 'Θέμα',
    'LBL_LIST_CONTACT' => 'Επαφή',
    'LBL_LIST_PRIORITY' => 'Προτεραιότητα',
    'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
    'LBL_LIST_DUE_DATE' => 'Ημ/νία λήξης',
    'LBL_LIST_DUE_TIME' => 'Ώρα λήξης',
    'LBL_SUBJECT' => 'Θέμα:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_DUE_DATE' => 'Ημ/νία λήξης:',
    'LBL_DUE_TIME' => 'Ώρα λήξης:',
    'LBL_PRIORITY' => 'Προτεραιότητα:',
    'LBL_DUE_DATE_AND_TIME' => 'Ημ/νία & ώρα λήξης:',
    'LBL_START_DATE_AND_TIME' => 'Ημ/νία & ώρα έναρξης:',
    'LBL_START_DATE' => 'Ημ/νία έναρξης:',
    'LBL_LIST_START_DATE' => 'Ημ/νία έναρξης',
    'LBL_START_TIME' => 'Ώρα έναρξης:',
    'DATE_FORMAT' => '(εεεε-μμ-ηη)',
    'LBL_NONE' => 'Καμία',
    'LBL_CONTACT' => 'Επαφή:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_PHONE' => 'Τηλέφωνο:',
    'LBL_EMAIL' => 'Email:',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_NAME' => 'Όνομα:',
    'LBL_CONTACT_NAME' => 'Όνομα επαφής: ',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_DATE_DUE_FLAG' => 'Χωρίς ημ/νία λήξης',
    'LBL_DATE_START_FLAG' => 'Χωρίς ημ/νία έναρξης',
    'LBL_LIST_MY_TASKS' => 'Οι ανοιχτές υποχρεώσεις μου',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_TASK_LIST' => 'Υποχρεώσεις',
    'LNK_IMPORT_TASKS' => 'Εισαγωγή Εργασιών',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος:',
    'LBL_LIST_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_CONTACT_ID' => 'Α/Α επαφής:',
    'LBL_PARENT_ID' => 'Α/Α αρχικού:',
    'LBL_CONTACT_PHONE' => 'Τηλέφωνο Επαφής',
    'LBL_PARENT_TYPE' => 'Parent Type:',
    'LBL_TASK_INFORMATION' => 'TASK OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Σημειώσεις',
    //For export labels
    'LBL_DATE_DUE' => 'Ημ/νία λήξης',
    'LBL_RELATED_TO' => 'Σχετικό με: ',
);
