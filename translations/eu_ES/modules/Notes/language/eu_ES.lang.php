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
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_ACCOUNT_ID' => 'Kontuko ID-a',
    'LBL_CASE_ID' => 'Kasuaren ID',
    'LBL_CLOSE' => 'Itxita',
    'LBL_CONTACT_ID' => 'Kontaktuaren ID-a',
    'LBL_CONTACT_NAME' => 'Kontaktua',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oharrak',
    'LBL_DESCRIPTION' => 'Oharrak',
    'LBL_EMAIL_ADDRESS' => 'Helbide elektronikoa',
    'LBL_EMAIL_ATTACHMENT' => 'Posta elektronikoaren erantsia',
    'LBL_FILE_MIME_TYPE' => 'MIME mota',
    'LBL_FILE_URL' => 'Artxiboaren URL',
    'LBL_FILENAME' => 'Eranskina',
    'LBL_LEAD_ID' => 'Hautagaiaren ID',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktuak',
    'LBL_LIST_DATE_MODIFIED' => 'Aldatua',
    'LBL_LIST_FILENAME' => 'Eranskina',
    'LBL_LIST_FORM_TITLE' => 'Ohar-zerrenda',
    'LBL_LIST_RELATED_TO' => 'Zeri buruzkoa',
    'LBL_LIST_SUBJECT' => 'Gaia',
    'LBL_LIST_STATUS' => 'Egoera',
    'LBL_LIST_CONTACT' => 'Kontaktuak',
    'LBL_MODULE_NAME' => 'Oharrak',
    'LBL_MODULE_TITLE' => 'Oharrak: hasiera',
    'LBL_NEW_FORM_TITLE' => 'Ohar edo Txertatutako Artxibo berria',
    'LBL_NOTE_STATUS' => 'Oharrak',
    'LBL_NOTE_SUBJECT' => 'Gaia',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Gehituak',
    'LBL_NOTE' => 'Oharra',
    'LBL_OPPORTUNITY_ID' => 'Aukera ID-a',
    'LBL_PARENT_ID' => 'Goi-maila ID',
    'LBL_PARENT_TYPE' => 'Goi-maila mota',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_PORTAL_FLAG' => 'Atarian erakutsi?',
    'LBL_EMBED_FLAG' => 'Embed in email?',
    'LBL_PRODUCT_ID' => 'Produktuaren ID',
    'LBL_QUOTE_ID' => 'Aurrekontuaren ID',
    'LBL_RELATED_TO' => 'Zeri buruzkoa',
    'LBL_SEARCH_FORM_TITLE' => 'Oharren bilaketa',
    'LBL_STATUS' => 'Egoera',
    'LBL_SUBJECT' => 'Gaia',
    'LNK_IMPORT_NOTES' => 'Oharrak inportatu',
    'LNK_NEW_NOTE' => 'Oharra edo eranskina sortu',
    'LNK_NOTE_LIST' => 'Oharrak',
    'LBL_MEMBER_OF' => 'Partaidea',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Nori esleitua',
    'LBL_REMOVING_ATTACHMENT' => 'Removing attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Failed to remove attachment...',
    'LBL_CREATED_BY' => 'Sortzailea',
    'LBL_MODIFIED_BY' => 'Nork aldatua',
    'LBL_SEND_ANYWAYS' => 'Posta honek ez du gairik. Edonola, bidali/gorde?',
    'LBL_NOTE_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_DATE_ENTERED' => 'Sortze-data',
    'LBL_DATE_MODIFIED' => 'Aldaketa-data',
    'LBL_DELETED' => 'Ezabatua',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
