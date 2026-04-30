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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_CASE_ID' => 'Verzoek ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'Contactpersoon ID:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
    'LBL_DESCRIPTION' => 'Note',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_ATTACHMENT' => 'Email Attachment',
    'LBL_FILE_MIME_TYPE' => 'Mime Type',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => 'Bijlage:',
    'LBL_LEAD_ID' => 'Lead ID:',
    'LBL_LIST_CONTACT_NAME' => 'Contactpersonen',
    'LBL_LIST_DATE_MODIFIED' => 'Last Modified',
    'LBL_LIST_FILENAME' => 'Attachment',
    'LBL_LIST_FORM_TITLE' => 'Notities',
    'LBL_LIST_RELATED_TO' => 'Related To',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_MODULE_NAME' => 'Notes',
    'LBL_MODULE_TITLE' => 'Notitie: Start',
    'LBL_NEW_FORM_TITLE' => 'Create Note or Add Attachment',
    'LBL_NOTE_STATUS' => 'Note',
    'LBL_NOTE_SUBJECT' => 'Subject:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => 'Notitie:',
    'LBL_OPPORTUNITY_ID' => 'Kans ID:',
    'LBL_PARENT_ID' => 'Bovenliggend ID:',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_FLAG' => 'Weergeven in portal?',
    'LBL_EMBED_FLAG' => 'Invoegen in e-mail?',
    'LBL_PRODUCT_ID' => 'Product-ID:',
    'LBL_QUOTE_ID' => 'Beurskoers ID:',
    'LBL_RELATED_TO' => 'Related To:',
    'LBL_SEARCH_FORM_TITLE' => 'Notitie zoeken',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Subject:',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NOTE_LIST' => 'View Notes',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_REMOVING_ATTACHMENT' => 'Attachment verwijderen...',
    'ERR_REMOVING_ATTACHMENT' => 'Kon attachment niet verwijderen...',
    'LBL_CREATED_BY' => 'Aangemaakt door',
    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_SEND_ANYWAYS' => 'This email has no subject. Send/save anyway?',
    'LBL_NOTE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mijn Notities',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_FILE_CONTENTS' => 'Bestand inhoud',

    'LBL_ASCENDING' => 'Oplopend',
    'LBL_DESCENDING' => 'Aflopend',
);
