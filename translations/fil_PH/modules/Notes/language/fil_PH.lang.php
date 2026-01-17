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
    'ERR_DELETE_RECORD' => 'Dapat mong tukuyin ang bilang ng ulat upang burahin ang akwant.',
    'LBL_ACCOUNT_ID' => 'Akwant ID:',
    'LBL_CASE_ID' => 'ID ng kaso:',
    'LBL_CLOSE' => 'Isara:',
    'LBL_CONTACT_ID' => 'Kontak ID:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga tandaan',
    'LBL_DESCRIPTION' => 'Tandaan',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_ATTACHMENT' => 'Email ng paglalakip',
    'LBL_FILE_MIME_TYPE' => 'Uri ng Mime',
    'LBL_FILE_URL' => 'URL ng file',
    'LBL_FILENAME' => 'Paglalakip:',
    'LBL_LEAD_ID' => 'ID ng lead:',
    'LBL_LIST_CONTACT_NAME' => 'Ang kontak',
    'LBL_LIST_DATE_MODIFIED' => 'Huling Binago',
    'LBL_LIST_FILENAME' => 'Paglalakip',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng talaan',
    'LBL_LIST_RELATED_TO' => 'Kaugnay sa',
    'LBL_LIST_SUBJECT' => 'Ang paksa',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LIST_CONTACT' => 'Ang kontak',
    'LBL_MODULE_NAME' => 'Mga tandaan',
    'LBL_MODULE_TITLE' => 'Mga talaan: Home',
    'LBL_NEW_FORM_TITLE' => 'Lumikha ng talaan o magdagdag mg paglalakip',
    'LBL_NOTE_STATUS' => 'Tandaan',
    'LBL_NOTE_SUBJECT' => 'Paksa:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Mga Attachment',
    'LBL_NOTE' => 'Tandaan:',
    'LBL_OPPORTUNITY_ID' => 'Opturnidad ID:',
    'LBL_PARENT_ID' => 'ID ng magulang:',
    'LBL_PARENT_TYPE' => 'Uri ng magulang',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_FLAG' => 'Naka-displey sa Portal?',
    'LBL_EMBED_FLAG' => 'I-embed sa email?',
    'LBL_PRODUCT_ID' => 'ID ng produkto:',
    'LBL_QUOTE_ID' => 'ID ng Quote:',
    'LBL_RELATED_TO' => 'Ini-ugnay sa:',
    'LBL_SEARCH_FORM_TITLE' => 'Talaan ng paghahanap',
    'LBL_STATUS' => 'Katayuan',
    'LBL_SUBJECT' => 'Paksa:',
    'LNK_IMPORT_NOTES' => 'I-import ang mga talaan',
    'LNK_NEW_NOTE' => 'Lumikha ng talaan o paglalakip',
    'LNK_NOTE_LIST' => 'Tumanaw ng mga tala',
    'LBL_MEMBER_OF' => 'Myembro sa:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Itinalaga sa gumagamit',
    'LBL_REMOVING_ATTACHMENT' => 'Pag-alis g nakalakip...',
    'ERR_REMOVING_ATTACHMENT' => 'Nabigong paalisin ang nakalakip...',
    'LBL_CREATED_BY' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_MODIFIED_BY' => 'Binago ni',
    'LBL_SEND_ANYWAYS' => 'Ang email ito ay walang paksa, Ipada o i-save pa rin?',
    'LBL_NOTE_INFORMATION' => 'Buod', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Aking mga tala',
    'LBL_EDITLAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
