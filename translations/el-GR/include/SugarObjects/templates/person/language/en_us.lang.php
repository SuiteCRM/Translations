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
    'LBL_SALUTATION' => 'Προσφώνηση',
    'LBL_NAME' => 'Όνομα',
    'LBL_FIRST_NAME' => 'Όνομα',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_TITLE' => 'Τίτλος',
    'LBL_DEPARTMENT' => 'Τμήμα',
    'LBL_DO_NOT_CALL' => 'Μην καλέσετε',
    'LBL_HOME_PHONE' => 'Τηλέφωνο σπιτιού',
    'LBL_MOBILE_PHONE' => 'Κινητό Τηλέφωνο',
    'LBL_OFFICE_PHONE' => 'Τηλέφωνο εργασίας',
    'LBL_OTHER_PHONE' => 'Άλλο τηλέφωνο',
    'LBL_FAX_PHONE' => 'Φαξ',
    'LBL_EMAIL_ADDRESS' => 'Email Διεύθυνση(εις)',
    'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Κύρια Διεύθυνση',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Οδός 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Οδός 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Κύρια Πόλη',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Κύρια Περιοχή',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Κύριος Ταχυδρομικός Κώδικας',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Χώρα:',
    'LBL_ALT_ADDRESS' => 'Άλλη Διεύθυνση',
    'LBL_ALT_ADDRESS_STREET' => 'Άλλη Διεύθυνση',
    'LBL_ALT_ADDRESS_STREET_2' => 'Άλλη οδός 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Άλλη οδός 3:',
    'LBL_ALT_ADDRESS_CITY' => 'Άλλη πόλη:',
    'LBL_ALT_ADDRESS_STATE' => 'Άλλος Νομός',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Εναλλακτικός Ταχυδρομικός Κώδικας',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Άλλη Χώρα:',
    'LBL_PRIMARY_STREET' => 'Διεύθυνση',
    'LBL_ALT_STREET' => 'Άλλη Διεύθυνση',
    'LBL_STREET' => 'Άλλη Διεύθυνση',
    'LBL_CITY' => 'Πόλη',
    'LBL_STATE' => 'Νομός',
    'LBL_POSTAL_CODE' => 'ΤΚ',
    'LBL_COUNTRY' => 'Χώρα',
    'LBL_CONTACT_INFORMATION' => 'Πληροφορίες Επικοινωνίας',
    'LBL_ADDRESS_INFORMATION' => 'Διεύθυνση(εις)',
    'LBL_ASSIGNED_TO_NAME' => 'Χρήστης',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Άλλο email:',
    'LBL_ASSISTANT' => 'Βοηθός',
    'LBL_ASSISTANT_PHONE' => 'Τηλέφωνο Βοηθού',
    'LBL_WORK_PHONE' => 'Τηλέφωνο εργασίας',
    'LNK_IMPORT_VCARD' => 'Δημιουργία από vCard',
    'LBL_ANY_EMAIL' => 'Άλλο email',
    'LBL_EMAIL_NON_PRIMARY' => 'Μη πρωτεύοντα E-mails',
    'LBL_PHOTO' => 'Φωτογραφία',
    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'Νομική Βάσης',
    'LBL_DATE_REVIEWED' => 'Ημ/νία αναθεώρησης Νομικής Βάσης',
    'LBL_LAWFUL_BASIS_SOURCE' => 'Πηγή Νομικής Βάσης',
    'LBL_CONSENT' => 'Συγκατάθεση',
    //End Lawful Basis labels
);
