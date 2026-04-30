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
    'LBL_MODULE_NAME' => 'Ευκαιρίες',
    'LBL_MODULE_TITLE' => 'Ευκαιρίες : Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση ευκαιρίας',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος ευκαιριων',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY' => 'Ευκαιρία',
    'LBL_NAME' => 'Όνομα Ευκαιρίας',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Currencies',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Όνομα',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
    'LBL_LIST_AMOUNT' => 'Ποσό',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
    'LBL_LIST_DATE_CLOSED' => 'Close',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => 'Ευκαιρίες πώλησης - Ενημέρωση νομίσματος',
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_AMOUNT' => 'Opportunity Amount:',
    'LBL_AMOUNT_USDOLLAR' => 'Amount:',
    'LBL_CURRENCY' => 'Νόμισμα:',
    'LBL_DATE_CLOSED' => 'Expected Close Date:',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Εκστρατεία:',
    'LBL_NEXT_STEP' => 'Next Step:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_SALES_STAGE' => 'Sales Stage:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Πιθανότητα διπλότυπης ευκαιρίας πώλησης',
    'MSG_DUPLICATE' => 'Δημιουργώντας αυτήν την ευκαιρία πώλησης πιθανόν να δημιουργήσετε μια διπλότυπη εγγραφή. Μπορείτε να επιλέξετε μια ευκαιρία πώλησης από την παρακάτω λίστα ή να επιλέξετε Δημιουργία Νέας Ευκαιρίας Πώλησης για να συνεχίσετε δημιουργώντας μαι νέα ευκαιρία πώλησης με τα προηγούμενα δεδομένα.',
    'LBL_NEW_FORM_TITLE' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_OPPORTUNITY_LIST' => 'Ευκαιρίες πώλησης',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή της ευκαιρίας πώλησης.',
    'LBL_TOP_OPPORTUNITIES' => 'Οι 10 καλυτερες ευκαιριες μου',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την ευκαιρία πώλησης από αυτό το project;',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Κλεισμένες Ευκαιρίες',
    'LBL_TOTAL_OPPORTUNITIES' => 'Συνολικές Ευκαιρείες',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Κλειστές κ Ολοκληρωμένες Ευκαιρίες',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_MODIFIED_NAME' => 'Modified by User Name',
    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Εκστρατείες',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_OPPORTUNITIES' => 'Εισαγωγή Ευκαιρειών',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Συμβάσεις',
    'LBL_AOS_QUOTES' => 'Προσφορές',

    'LBL_SIZE_ANALYSIS' => 'Size Analysis',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
