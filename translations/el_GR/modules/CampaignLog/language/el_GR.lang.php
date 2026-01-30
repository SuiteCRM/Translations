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
    'LBL_LIST_ID' => 'A/A καταλόγου υποψηφίων',
    'LBL_ID' => 'Α/Α',
    'LBL_TARGET_TRACKER_KEY' => 'Target Tracker Key',
    'LBL_TARGET_ID' => 'Α/Α στόχου',
    'LBL_TARGET_TYPE' => 'Τύπος στόχου',
    'LBL_ACTIVITY_TYPE' => 'Τύπος δραστηριότητας',
    'LBL_ACTIVITY_DATE' => 'Ημ/νία δραστηριότητας',
    'LBL_RELATED_ID' => 'Συσχετισμός',
    'LBL_RELATED_TYPE' => 'Τύπος συσχετισμού',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_MODULE_NAME' => 'Σύνδεση Εκστρατείας',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Παραλήπτης email',
    'LBL_LIST_RECIPIENT_NAME' => 'Όνομα παραλήπτη',
    'LBL_ARCHIVED' => 'Αρχειοθετημένο',
    'LBL_HITS' => 'Ανταπόκριση',

    'LBL_CAMPAIGN_NAME' => 'Όνομα:',
    'LBL_CAMPAIGN' => 'Καμπάνια:',
    'LBL_NAME' => 'Όνομα: ',
    'LBL_INVITEE' => 'Επαφές',
    'LBL_LIST_CAMPAIGN_NAME' => 'Εκστρατεία',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_TYPE' => 'Τύπος',
    'LBL_LIST_END_DATE' => 'Ημερομηνία Λήξης',
    'LBL_DATE_ENTERED' => 'Ημ/νία εισαγωγής',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από: ',
    'LBL_CREATED' => 'Δημιουργήθηκε από: ',
    'LBL_TEAM' => 'Ομάδα: ',
    'LBL_ASSIGNED_TO' => 'Ανατέθηκε σε: ',
    'LBL_CAMPAIGN_START_DATE' => 'Ημ/νία έναρξης: ',
    'LBL_CAMPAIGN_END_DATE' => 'Ημ/νία λήξης: ',
    'LBL_CAMPAIGN_STATUS' => 'Κατάσταση: ',
    'LBL_CAMPAIGN_BUDGET' => 'Προϋπολογισμός:',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Αναμενόμενο κόστος: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Πραγματικό κόστος: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Αναμενόμενα έσοδα: ',
    'LBL_CAMPAIGN_TYPE' => 'Τύπος: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Αντικειμενικός σκοπός: ',
    'LBL_CAMPAIGN_CONTENT' => 'Περιγραφή: ',
    'LBL_CREATED_LEAD' => 'Lead που δημιουργήθηκαν ',
    'LBL_CREATED_CONTACT' => 'Η Επαφή Δημιουργήθηκε',
    'LBL_CREATED_OPPORTUNITY' => 'Ευκαιρίες που δημιουργήθηκαν ',
    'LBL_TARGETED_USER' => 'Στοχευμένος Χρήστης',
    'LBL_SENT_EMAIL' => 'Στάλθηκε Email',
    'LBL_LIST_FORM_TITLE' => 'Στοχοποιημένες καμπάνιες',
    'LBL_LIST_ACTIVITY_DATE' => 'Ημ/νία δραστηριότητας',
    'LBL_RELATED' => 'Σχετικά',
    'LBL_MORE_INFO' => 'Περισσότερες πληροφορίες',

    'LBL_CAMPAIGNS' => 'Εκστρατείες',
    'LBL_LIST_MARKETING_NAME' => 'Μάρκετινγκ Id',

    'LBL_MARKETING_ID' => 'Μάρκετινγκ Id',
    'LBL_RELATED_NAME' => 'Related Name',
);
