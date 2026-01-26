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
    'ERR_DELETE_RECORD' => 'Kailangang tumukoy ng isang record number para mabura ang account.',
    'LBL_ACCOUNT_ID' => 'ID ng Account:',
    'LBL_CASE_ID' => 'Ang kaso ng ID:',
    'LBL_CLOSE' => 'Sarado:',
    'LBL_CONTACT_ID' => 'Ang kontak ID:',
    'LBL_CONTACT_NAME' => 'Kontak:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang mga tala',
    'LBL_DESCRIPTION' => 'Tandaan',
    'LBL_EMAIL_ADDRESS' => 'Ang Email Address:',
    'LBL_EMAIL_ATTACHMENT' => 'Kakabit sa Email',
    'LBL_FILE_MIME_TYPE' => 'Ang uri ng panggagaya',
    'LBL_FILE_URL' => 'URL ng payl',
    'LBL_FILENAME' => 'Ang pagkakabit:',
    'LBL_LEAD_ID' => 'Ang ID ay humantong:',
    'LBL_LIST_CONTACT_NAME' => 'Kontak',
    'LBL_LIST_DATE_MODIFIED' => 'Ang Huling Nabago',
    'LBL_LIST_FILENAME' => 'Nakakabit',
    'LBL_LIST_FORM_TITLE' => 'Ang listahan ng talaan',
    'LBL_LIST_RELATED_TO' => 'Kaugnay Sa',
    'LBL_LIST_SUBJECT' => 'Paksa',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LIST_CONTACT' => 'Kontak',
    'LBL_MODULE_NAME' => 'Ang mga tala',
    'LBL_MODULE_TITLE' => 'Ang mga talaan: Tirahan',
    'LBL_NEW_FORM_TITLE' => 'Lumikha ng tala o magdagdag ng attachment',
    'LBL_NOTE_STATUS' => 'Tandaan',
    'LBL_NOTE_SUBJECT' => 'Ang Paksa:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Ang mga pagkaka-ugnay',
    'LBL_NOTE' => 'Ang talaan:',
    'LBL_OPPORTUNITY_ID' => 'Ang ID ng oportunidad:',
    'LBL_PARENT_ID' => 'Ang parent ID:',
    'LBL_PARENT_TYPE' => 'Uri ng magulang',
    'LBL_PHONE' => 'Telepono:',
    'LBL_PORTAL_FLAG' => 'Ipakita sa portal?',
    'LBL_EMBED_FLAG' => 'I-embed sa email?',
    'LBL_PRODUCT_ID' => 'Ang produkto ng ID:',
    'LBL_QUOTE_ID' => 'Ang Kowt ng ID:',
    'LBL_RELATED_TO' => 'Nakaugnay sa:',
    'LBL_SEARCH_FORM_TITLE' => 'Ang paghahanap ng talaan',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_SUBJECT' => 'Ang Paksa:',
    'LNK_IMPORT_NOTES' => 'Ipasok ang mga tala',
    'LNK_NEW_NOTE' => 'Gumawa ng Nota o Ilalakip',
    'LNK_NOTE_LIST' => 'Tingnan ang mga Notes',
    'LBL_MEMBER_OF' => 'Ang Myembro ng:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Magtalaga ng gumagamit',
    'LBL_REMOVING_ATTACHMENT' => 'Ang Pag-alis ng attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Nabigong alisin ang attachment...',
    'LBL_CREATED_BY' => 'Nilikha ni',
    'LBL_MODIFIED_BY' => 'Binago sa pamamagitan ng',
    'LBL_SEND_ANYWAYS' => 'Ang email na ito ay walang paksa. Ipadala/I-save pa rin?',
    'LBL_NOTE_INFORMATION' => 'Sa taas ng tanawin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Ang aking mga talaan',
    'LBL_EDITLAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Unang pangalan',
    'LBL_LAST_NAME' => 'Huling pangalan',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Pataas',
    'LBL_DESCENDING' => 'Pababa',
);
