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
    'LBL_MODULE_NAME' => 'Νομίσματα',
    'LBL_LIST_FORM_TITLE' => 'Νομίσματα',
    'LBL_CURRENCY' => 'Νόμισμα',
    'LBL_ADD' => 'Προσθήκη',
    'LBL_MERGE' => 'Συγχώνευση',
    'LBL_MERGE_TXT' => 'Παρακαλώ, επιλέξτε τα νομίσματα που θα θέλατε να αντιστοιχίσετε με το επιλεγμένο νόμισμα. Αυτό θα διαγράψει όλα τα επιλεγμένα με νομίσματα και οποιαδήποτε σχετική αξία.',
    'LBL_US_DOLLAR' => 'Δολάριο Η.Π.Α.',
    'LBL_DELETE' => 'Διαγραφή',
    'LBL_LIST_SYMBOL' => 'Σύμβολο Νομίσματος',
    'LBL_LIST_NAME' => 'Ονομασία Νομίσματος',
    'LBL_LIST_ISO4217' => 'Κώδικας ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Εισάγετε τρία-γράμματα κώδικα ISO 4217που καθορίζει το όνομα του νομίσματος και το σύμβολο του νομίσματος.',
    'LBL_UPDATE' => 'Ενημέρωση',
    'LBL_LIST_RATE' => 'Ισοτιμία',
    'LBL_LIST_RATE_HELP' => 'Η Τιμή Μετατροπής των 0,5 για Ευρώ σημαίνει ότι 10 δολάρια = 5 Ευρώ.',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LNK_NEW_CONTACT' => 'Νέα επαφή',
    'LNK_NEW_ACCOUNT' => 'Νεος Λογαριασμός',
    'LNK_NEW_OPPORTUNITY' => 'Νεα ευκαιρία πώλησης',
    'LNK_NEW_CASE' => 'Νέα Υπόθεση',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_CALL' => 'Νέα Κλήση',
    'LNK_NEW_EMAIL' => 'Nέο Email',
    'LNK_NEW_MEETING' => 'Nέα Συνάντηση',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την εγγραφή; Οποιαδήποτε εγγραφή που χρησιμοποιεί αυτό το νόμισμα θα μετατραπεί στο νόμισμα προεπιλογής συστημάτων κατά την πρόσβαση. Συνιστάται να μετατραπεί η κατάσταση σε ανενεργή.',
    'LBL_BELOW_MIN' => 'Το ποσοστό μετατροπής πρέπει να είναι πάνω από 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Ενεργός',
            'Inactive' => 'Ανενεργός',
        ),
    'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
    'LBL_EDIT_LAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
);
