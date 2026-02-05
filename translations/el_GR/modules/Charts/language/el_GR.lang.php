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
    'ERR_NO_OPPS' => 'Παρακαλώ δημιουργήστε κάποιες ευκαιρίες για να δείτε γραφήματα Ευκαιρίας.',
    'LBL_ALL_OPPORTUNITIES' => 'Συνολικό ποσό όλων των ευκαιριών είναι',
    'LBL_CHART_TYPE' => 'Τύπος Γραφήματος:',
    'LBL_CREATED_ON' => 'Τελευταία εκτέλεση',
    'LBL_CLOSE_DATE_START' => 'Αναμενόμενη Ημερομηνία Κλεισίματος - Από:',
    'LBL_CLOSE_DATE_END' => 'Αναμενόμενη Ημερομηνία Κλεισίματος - Σε:',
    'LBL_DATE_END' => 'Ημερομηνία Λήξης:',
    'LBL_DATE_RANGE_TO' => 'σε',
    'LBL_DATE_RANGE' => 'Εύρος ημερομηνίας είναι',
    'LBL_DATE_START' => 'Ημερομηνία Εκκίνησης',
    'LBL_EDIT' => 'Επεξεργασία',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Εμφανίζει αθροιστικά ποσά ευκαιρία ανά επιλεγμένες πηγές προέλευσης ανά αποτέλεσμα για επιλεγμένους χειριστές. Το Αποτέλεσμα βασίζεται είτε εάν το στάδιο πωλήσεων  Έκλεισε Κερδισμένο, Έκλεισε Χαμένο, ή οποιαδήποτε άλλη αξία.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Ολες οι ευκαιριες ανα πηγη ερισματος και εισοδημα',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Εμφανίζει αθροιστικά ποσά ευκαιρίας από επιλεγμένη πηγή προέλευσης για επιλεγμένους χειριστές.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Όλες οι Ευκαιρίες Ανά Πηγή Προέλευσης',
    'LBL_LEAD_SOURCE_OTHER' => 'Άλλο',
    'LBL_LEAD_SOURCES' => 'Υποψήφιες Πηγές:',
    'LBL_MODULE_NAME' => 'Πίνακα Εργαλείων',
    'LBL_MODULE_TITLE' => 'Πίνακας Εργαλείων: Αρχή',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Εμφανίζει αθροιστικά ποσά ανά μήνα ευκαιρίας με αποτέλεσμα για επιλεγμένους χειριστές όπου η αναμενόμενη ημερομηνία είναι κλειστή εντός του καθορισμένου εύρους ημερομηνιών. Το Αποτέλεσμα βασίζεται είτε εάν το στάδιο πωλήσεων  Έκλεισε Κερδισμένο, Έκλεισε Χαμένο, ή οποιαδήποτε άλλη αξία.',
    'LBL_OPP_SIZE' => 'Μέγεθος ευκαιρίας είναι',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'ευκαιρίες, όπου η πηγή προέλευσης είναι',
    'LBL_OPPS_IN_STAGE' => 'όπου το στάδιο πωλήσεων είναι',
    'LBL_OPPS_OUTCOME' => 'όπου το αποτέλεσμα είναι',
    'LBL_OPPS_WORTH' => 'ευκαιρίες αξίζουν',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Εμφανίζει αθροιστικά ποσά από επιλεγμένα στάδια των πωλήσεων για τις ευκαιρίες σας όπου η αναμενόμενη ημερομηνία είναι κλεισίματος είναι εντός του καθορισμένου εύρους ημερομηνίας.',
    'LBL_REFRESH' => 'Ανανέωση',
    'LBL_ROLLOVER_DETAILS' => 'Ανατροπή ένας φραγμός για τις λεπτομέρειες.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Ανατροπή μιας σφήνας για τις λεπτομέρειες.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Εμφανίζει αθροιστικά ποσά ευκαιρία από επιλεγμέα στάδια πωλήσεων για επιλεγμένους χειριστές όπου η αναμενόμενη ημερομηνία είναι κλεισίματος είναι εντός του καθορισμένου εύρους ημερομηνίας.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Οι προσφορες μου',
    'LBL_SALES_STAGES' => 'Στάδια Πωλήσεων:',
    'LBL_TOTAL_PIPELINE' => 'Σύνολο διαδρομής είναι',
    'LBL_USERS' => 'Χειριστές',
    'LBL_YEAR_BY_OUTCOME' => 'Διαδρομή Ανά Μήνα Ανά Αποτέλεσμα',
    'LBL_YEAR' => 'Έτος:',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία λογαριασμού',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LNK_NEW_CONTACT' => 'Δημιουργία Επαφής',
    'LNK_NEW_LEAD' => 'Δημιουργία Υποψήφιου Πελάτη',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'NTC_NO_LEGENDS' => 'Καμία',

    'LBL_TITLE' => 'Τίτλος:',
    'LBL_MY_MODULES_USED_SIZE' => 'Αρίθμηση Πρόσβασης',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Αγωγός ανά Στάδιο Πώλησης',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Πηγή Προέλευσης από Αποτέλεσμα',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Αποτελέσματα ανά μήνα',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Αγωγός Ανά Πηγή Προέλευσης',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Ο Αγωγός Μου ανά Στάδιο Πώλησης',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Ενότητες Χρήσης Μου (Τελευταίες 30 Ημέρες)',
);
