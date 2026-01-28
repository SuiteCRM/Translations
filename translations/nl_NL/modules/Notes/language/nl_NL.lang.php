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
    'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om deze relatie te verwijderen.',
    'LBL_ACCOUNT_ID' => 'Relatie ID:',
    'LBL_CASE_ID' => 'Verzoek ID:',
    'LBL_CLOSE' => 'Sluiten:',
    'LBL_CONTACT_ID' => 'Contactpersoon ID:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notities',
    'LBL_DESCRIPTION' => 'Notities',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_ATTACHMENT' => 'E-mail bijlage',
    'LBL_FILE_MIME_TYPE' => 'Mime type',
    'LBL_FILE_URL' => 'BestandsURL',
    'LBL_FILENAME' => 'Bijlage:',
    'LBL_LEAD_ID' => 'Lead ID:',
    'LBL_LIST_CONTACT_NAME' => 'Contactpersonen',
    'LBL_LIST_DATE_MODIFIED' => 'Laatste wijziging',
    'LBL_LIST_FILENAME' => 'Bijlage',
    'LBL_LIST_FORM_TITLE' => 'Notities',
    'LBL_LIST_RELATED_TO' => 'Gerelateerd aan',
    'LBL_LIST_SUBJECT' => 'Onderwerp',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Contactpersonen',
    'LBL_MODULE_NAME' => 'Notities',
    'LBL_MODULE_TITLE' => 'Notitie: Start',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe notitie of bijlage',
    'LBL_NOTE_STATUS' => 'Notities',
    'LBL_NOTE_SUBJECT' => 'Onderwerp:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Bijlagen',
    'LBL_NOTE' => 'Notitie:',
    'LBL_OPPORTUNITY_ID' => 'Kans ID:',
    'LBL_PARENT_ID' => 'Bovenliggend ID:',
    'LBL_PARENT_TYPE' => 'Gerelateerd aan type',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_PORTAL_FLAG' => 'Weergeven in portal?',
    'LBL_EMBED_FLAG' => 'Invoegen in e-mail?',
    'LBL_PRODUCT_ID' => 'Product-ID:',
    'LBL_QUOTE_ID' => 'Beurskoers ID:',
    'LBL_RELATED_TO' => 'Gerelateerd aan:',
    'LBL_SEARCH_FORM_TITLE' => 'Notitie zoeken',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Onderwerp:',
    'LNK_IMPORT_NOTES' => 'Notities importeren',
    'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
    'LNK_NOTE_LIST' => 'Notities',
    'LBL_MEMBER_OF' => 'Onderdeel van:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_REMOVING_ATTACHMENT' => 'Attachment verwijderen...',
    'ERR_REMOVING_ATTACHMENT' => 'Kon attachment niet verwijderen...',
    'LBL_CREATED_BY' => 'Aangemaakt door',
    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_SEND_ANYWAYS' => 'Deze E-mail heeft geen Onderwerp. Toch versturen/bewaren?',
    'LBL_NOTE_INFORMATION' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mijn Notities',
    'LBL_EDITLAYOUT' => 'Bewerk lay-out' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Voornaam',
    'LBL_LAST_NAME' => 'Achternaam',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_FILE_CONTENTS' => 'Bestand inhoud',

    'LBL_ASCENDING' => 'Oplopend',
    'LBL_DESCENDING' => 'Aflopend',
);
