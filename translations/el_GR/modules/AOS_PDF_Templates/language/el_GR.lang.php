<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Body',
    'LBL_HEADER' => 'Κεφαλίδα',
    'LBL_FOOTER' => 'Υποσέλιδο',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Προτύπων PDF',
    'LBL_MODULE_NAME' => 'Πρότυπα PDF',
    'LBL_MODULE_TITLE' => 'Πρότυπα PDF: Αρχική',
    'LBL_HOMEPAGE_TITLE' => 'Τα PDF πρώτυπά μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Πρωτύπου PDF',
    'LNK_LIST' => 'Προβολή Προτύπων PDF',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Προτύπων PDF',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Νέο Πρότυπο PDF',
    'LBL_TYPE' => 'Type',
    'LBL_ACTIVE' => 'Active',
    'LBL_BUTTON_INSERT' => 'Εισαγωγή',
    'LBL_WARNING_OVERWRITE' => 'Προειδοποίηση, αυτή η ενέργεια θα αντικαταστήσει την παρούσα εργασία σας',
    'LBL_INSERT_FIELDS' => 'Εισαγωγή Πεδίων',

    'LBL_SAMPLE' => 'Φόρτωση Δείγματος',
    'LBL_PAGE' => 'Σελίδα',
    'LBL_PREPARED_FOR' => 'Προετοιμάστηκε Για',
    'LBL_PREPARED_BY' => 'Προετοιμάστηκε Από',
    'LBL_QUOTE_SAMPLE' => 'Δείγμα Προσφοράς',
    'LBL_INVOICE_SAMPLE' => 'Δείγμα Τιμολογίου',
    'LBL_ACCOUNT_SAMPLE' => 'Δείγμα Λογαριασμού',
    'LBL_CONTACT_SAMPLE' => 'Δείγμα Επαφής',
    'LBL_LEAD_SAMPLE' => 'Δείγμα Ευκαιρίας',
    'LBL_ANY_STREET' => 'Οποιαδήποτε Οδός',
    'LBL_ANY_TOWN' => 'Όλες οι Πόλεις',
    'LBL_ANY_WHERE' => 'Οπουδήποτε',

    'LBL_QUOTE_GROUP_SAMPLE' => 'Δείγμα Ομάδας Προσφορών',
    'LBL_INVOICE_GROUP_SAMPLE' => 'Δείγμα Ομάδας Τιμολογίων',
    'LBL_MARGIN_LEFT' => 'Αριστερό Περιθώριο',
    'LBL_MARGIN_RIGHT' => 'Δεξιά Περιθώριο',
    'LBL_MARGIN_TOP' => 'Επάνω Περιθώριο',
    'LBL_MARGIN_BOTTOM' => 'Κάτω Περιθώριο',
    'LBL_MARGIN_HEADER' => 'Περιθώριο Κεφαλίδας',
    'LBL_MARGIN_FOOTER' => 'Περιθώριο Υποσέλιδου',
    'LBL_EDITVIEW_PANEL1' => 'Περιθώρια',
    'LBL_DETAILVIEW_PANEL1' => 'Margins',
    'LBL_PAGE_SIZE' => 'Μέγεθος Σελίδας',
    'LBL_ORIENTATION' => 'Προσανατολισμός',
);
