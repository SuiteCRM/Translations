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
    'ERR_DELETE_RECORD' => 'En post måste specificeras för att ta bort företaget.',
    'LBL_ACCOUNT_ID' => 'Företags-ID:',
    'LBL_CASE_ID' => 'Ärende-ID:',
    'LBL_CLOSE' => 'Stäng:',
    'LBL_CONTACT_ID' => 'Kontakt-ID:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Anteckningar:',
    'LBL_DESCRIPTION' => 'Anteckningar',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_EMAIL_ATTACHMENT' => 'E-postbilaga',
    'LBL_FILE_MIME_TYPE' => 'Mime-typ',
    'LBL_FILE_URL' => 'Fil-URL',
    'LBL_FILENAME' => 'Bilaga:',
    'LBL_LEAD_ID' => 'Lead-ID:',
    'LBL_LIST_CONTACT_NAME' => 'Kontakter',
    'LBL_LIST_DATE_MODIFIED' => 'Senast ändrad',
    'LBL_LIST_FILENAME' => 'Bilaga',
    'LBL_LIST_FORM_TITLE' => 'Anteckningslista',
    'LBL_LIST_RELATED_TO' => 'Relatera till',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Kontakter',
    'LBL_MODULE_NAME' => 'Anteckningar:',
    'LBL_MODULE_TITLE' => 'Anteckningar: Hem',
    'LBL_NEW_FORM_TITLE' => 'Skapa anteckning eller bilaga',
    'LBL_NOTE_STATUS' => 'Anteckningar',
    'LBL_NOTE_SUBJECT' => 'Ämne:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Bilagor',
    'LBL_NOTE' => 'Anteckning:',
    'LBL_OPPORTUNITY_ID' => 'Affärs-ID:',
    'LBL_PARENT_ID' => 'Förälder-ID:',
    'LBL_PARENT_TYPE' => 'Föräldrertyp',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Visa i portal?',
    'LBL_EMBED_FLAG' => 'Placera till Email?',
    'LBL_PRODUCT_ID' => 'Produkt-ID:',
    'LBL_QUOTE_ID' => 'Offert-ID:',
    'LBL_RELATED_TO' => 'Relaterad till:',
    'LBL_SEARCH_FORM_TITLE' => 'Sök anteckning',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Ämne:',
    'LNK_IMPORT_NOTES' => 'Importera anteckningar',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NOTE_LIST' => 'Anteckningar',
    'LBL_MEMBER_OF' => 'Medlem av:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_REMOVING_ATTACHMENT' => 'Ta bort bilaga...',
    'ERR_REMOVING_ATTACHMENT' => 'Misslyckades med att ta bort bilagan...',
    'LBL_CREATED_BY' => 'Skapad av',
    'LBL_MODIFIED_BY' => 'Ändrad av',
    'LBL_SEND_ANYWAYS' => 'Epostmeddelandet saknar ämne. Skicka/spara ändå?',
    'LBL_NOTE_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Mina anteckningar',
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Förnamn',
    'LBL_LAST_NAME' => 'Efternamn',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Datum Ändrad',
    'LBL_DELETED' => 'Raderad',
    'LBL_FILE_CONTENTS' => 'Fileinnehåll',

    'LBL_ASCENDING' => 'Stigande',
    'LBL_DESCENDING' => 'Fallande',
);
