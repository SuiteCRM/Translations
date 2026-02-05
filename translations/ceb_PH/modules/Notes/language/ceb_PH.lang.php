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
    'ERR_DELETE_RECORD' => 'Kinahanglan nimo i-specify ang numero sa rekord para mawagtang ang account.',
    'LBL_ACCOUNT_ID' => 'ID sa Account:',
    'LBL_CASE_ID' => 'ID sa kaso:',
    'LBL_CLOSE' => 'Sirado:',
    'LBL_CONTACT_ID' => 'Kontak ID:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tima-ilhan',
    'LBL_DESCRIPTION' => 'Libro',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_ATTACHMENT' => 'Sumpay sa Email',
    'LBL_FILE_MIME_TYPE' => 'Matang sa Mime',
    'LBL_FILE_URL' => 'URL sa file',
    'LBL_FILENAME' => 'Pagsukip:',
    'LBL_LEAD_ID' => 'ID nga nagpasi-una:',
    'LBL_LIST_CONTACT_NAME' => 'Kontak',
    'LBL_LIST_DATE_MODIFIED' => 'Katapusan nga gi-usab',
    'LBL_LIST_FILENAME' => 'Sumpay',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa note',
    'LBL_LIST_RELATED_TO' => 'Naay kalabutan sa',
    'LBL_LIST_SUBJECT' => 'Sabjek',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_MODULE_NAME' => 'Tima-ilhan',
    'LBL_MODULE_TITLE' => 'Mga note: Home',
    'LBL_NEW_FORM_TITLE' => 'Paghimo og Note o Pagdugang og Sumpay',
    'LBL_NOTE_STATUS' => 'Libro',
    'LBL_NOTE_SUBJECT' => 'Sabjek:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Mga Sumpay',
    'LBL_NOTE' => 'Note:',
    'LBL_OPPORTUNITY_ID' => 'Opportonidad ID:',
    'LBL_PARENT_ID' => 'ID sa Ginikanan:',
    'LBL_PARENT_TYPE' => 'Ginikanan nga klase',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_FLAG' => 'I-displey sa portal?',
    'LBL_EMBED_FLAG' => 'I-embed sa email?',
    'LBL_PRODUCT_ID' => 'ID sa Produkto:',
    'LBL_QUOTE_ID' => 'ID sa quote:',
    'LBL_RELATED_TO' => 'Naay kalabutan sa:',
    'LBL_SEARCH_FORM_TITLE' => 'Mangita ug note',
    'LBL_STATUS' => 'Stado',
    'LBL_SUBJECT' => 'Sabjek:',
    'LNK_IMPORT_NOTES' => 'Import og mga Note',
    'LNK_NEW_NOTE' => 'Paghimo og Note o Sumpay',
    'LNK_NOTE_LIST' => 'Pagtan-aw sa mga Sulat',
    'LBL_MEMBER_OF' => 'Miyembro sa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Na assign nga manggagamit',
    'LBL_REMOVING_ATTACHMENT' => 'Nagtang-tang sa attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Napakyas sa pagtang-tang sa attachment...',
    'LBL_CREATED_BY' => 'Gihimo ni',
    'LBL_MODIFIED_BY' => 'Giusab Ni',
    'LBL_SEND_ANYWAYS' => 'Walay subject kini nga email. Gusto pa ba nimo nga ipadala gihapon?',
    'LBL_NOTE_INFORMATION' => 'Kinatibuk-ang panan-aw', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Akong mga note',
    'LBL_EDITLAYOUT' => 'I-edit ang Plano' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Pinakaunang Pangalan',
    'LBL_LAST_NAME' => 'Katapusang Pangalan',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Pasaka',
    'LBL_DESCENDING' => 'Pakanaog',
);
