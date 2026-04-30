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
    'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti klientą.',
    'LBL_ACCOUNT_ID' => 'Kliento ID:',
    'LBL_CASE_ID' => 'Aptarnavimo ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'Kontakto ID:',
    'LBL_CONTACT_NAME' => 'Kontaktas:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
    'LBL_DESCRIPTION' => 'Užrašas',
    'LBL_EMAIL_ADDRESS' => 'El. paštas:',
    'LBL_EMAIL_ATTACHMENT' => 'Prisegtukai',
    'LBL_FILE_MIME_TYPE' => 'Mime Type',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => 'Prisegtukas:',
    'LBL_LEAD_ID' => 'Potencialaus kontakto ID:',
    'LBL_LIST_CONTACT_NAME' => 'Adresatas',
    'LBL_LIST_DATE_MODIFIED' => 'Redaguota',
    'LBL_LIST_FILENAME' => 'Attachment',
    'LBL_LIST_FORM_TITLE' => 'Užrašų sąrašas',
    'LBL_LIST_RELATED_TO' => 'Susiję su',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_LIST_STATUS' => 'Statusas:',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_MODULE_NAME' => 'Notes',
    'LBL_MODULE_TITLE' => 'Užrašai: Pradžia',
    'LBL_NEW_FORM_TITLE' => 'Create Note or Add Attachment',
    'LBL_NOTE_STATUS' => 'Aprašymas',
    'LBL_NOTE_SUBJECT' => 'Tema:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => 'Pastaba:',
    'LBL_OPPORTUNITY_ID' => 'Pardavimo ID:',
    'LBL_PARENT_ID' => 'Pagrindinis ID:',
    'LBL_PARENT_TYPE' => 'Pirminis tipas',
    'LBL_PHONE' => 'Telefonas',
    'LBL_PORTAL_FLAG' => 'Rodyti portale?',
    'LBL_EMBED_FLAG' => 'Įterpti į laišką?',
    'LBL_PRODUCT_ID' => 'Produkto ID:',
    'LBL_QUOTE_ID' => 'Pasiūlymo ID:',
    'LBL_RELATED_TO' => 'Susiję su:',
    'LBL_SEARCH_FORM_TITLE' => 'Užrašų paieška',
    'LBL_STATUS' => 'Statusas:',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NOTE_LIST' => 'View Notes',
    'LBL_MEMBER_OF' => 'Priklauso:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas',
    'LBL_REMOVING_ATTACHMENT' => 'Išimamas prisegtukas...',
    'ERR_REMOVING_ATTACHMENT' => 'Nepavyko išimti prisegtuko...',
    'LBL_CREATED_BY' => 'Sukūrė',
    'LBL_MODIFIED_BY' => 'Redagavo',
    'LBL_SEND_ANYWAYS' => 'Šis laiškas neturi temos. Siųsti vis tiek?',
    'LBL_NOTE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mano užrašai',
    'LBL_EDITLAYOUT' => 'Redaguoti išdėstymą' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_DATE_ENTERED' => 'Sukūrimo data',
    'LBL_DATE_MODIFIED' => 'Redaguota',
    'LBL_DELETED' => 'Ištrinta',
    'LBL_FILE_CONTENTS' => 'Failo turinys',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
