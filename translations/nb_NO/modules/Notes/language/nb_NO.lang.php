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
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kontoen.',
    'LBL_ACCOUNT_ID' => 'Kunde ID:',
    'LBL_CASE_ID' => 'Sak ID:',
    'LBL_CLOSE' => 'Steng:',
    'LBL_CONTACT_ID' => 'Kontakt ID:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notater:',
    'LBL_DESCRIPTION' => 'Notater og vedlegg',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_EMAIL_ATTACHMENT' => 'Vedlegg',
    'LBL_FILE_MIME_TYPE' => 'Mime type',
    'LBL_FILE_URL' => 'Fil URL',
    'LBL_FILENAME' => 'Vedlegg:',
    'LBL_LEAD_ID' => 'Ledetråd ID:',
    'LBL_LIST_CONTACT_NAME' => 'Kontakter',
    'LBL_LIST_DATE_MODIFIED' => 'Sist endret',
    'LBL_LIST_FILENAME' => 'Vedlegg',
    'LBL_LIST_FORM_TITLE' => 'Vis notater',
    'LBL_LIST_RELATED_TO' => 'Knytt til',
    'LBL_LIST_SUBJECT' => 'Emne',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_MODULE_NAME' => 'Notater:',
    'LBL_MODULE_TITLE' => 'Notater: Forside',
    'LBL_NEW_FORM_TITLE' => 'Nytt notat eller vedlegg',
    'LBL_NOTE_STATUS' => 'Notater og vedlegg',
    'LBL_NOTE_SUBJECT' => 'Emne:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Vedlegg',
    'LBL_NOTE' => 'Notat:',
    'LBL_OPPORTUNITY_ID' => 'Salgsmulighet ID:',
    'LBL_PARENT_ID' => 'Forelder ID:',
    'LBL_PARENT_TYPE' => 'Foreldertype',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_PORTAL_FLAG' => 'Vis i portal?',
    'LBL_EMBED_FLAG' => 'Bygg inn i e-post?',
    'LBL_PRODUCT_ID' => 'Produkt ID:',
    'LBL_QUOTE_ID' => 'Tilbud ID:',
    'LBL_RELATED_TO' => 'Relatert til:',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter notat',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Emne:',
    'LNK_IMPORT_NOTES' => 'Importer notater',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NOTE_LIST' => 'Notater og vedlegg',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
    'LBL_REMOVING_ATTACHMENT' => 'Fjerner vedlegg...',
    'ERR_REMOVING_ATTACHMENT' => 'Kunne ikke fjerne vedlegg...',
    'LBL_CREATED_BY' => 'Opprettet av',
    'LBL_MODIFIED_BY' => 'Endret av',
    'LBL_SEND_ANYWAYS' => 'Denne e-postmeldingen har intet emne. Vil du sende/lagre likevel?',
    'LBL_NOTE_INFORMATION' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mine notater',
    'LBL_EDITLAYOUT' => 'Rediger oppsett' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Etternavn',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_DELETED' => 'Slettet',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Stigende',
    'LBL_DESCENDING' => 'Fallende',
);
