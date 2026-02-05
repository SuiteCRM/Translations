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
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali kompaniju.',
    'LBL_ACCOUNT_ID' => 'ID naloga:',
    'LBL_CASE_ID' => 'ID broj slučaja:',
    'LBL_CLOSE' => 'Zatvori:',
    'LBL_CONTACT_ID' => 'ID broj kontakta:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Beleške',
    'LBL_DESCRIPTION' => 'Beleška',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_EMAIL_ATTACHMENT' => 'Pošalji e-poštom dodatak',
    'LBL_FILE_MIME_TYPE' => 'MIME tip',
    'LBL_FILE_URL' => 'URL fajla',
    'LBL_FILENAME' => 'Dodatak:',
    'LBL_LEAD_ID' => 'ID broj potencijalnog klijenta:',
    'LBL_LIST_CONTACT_NAME' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Poslednja izmena',
    'LBL_LIST_FILENAME' => 'Dodatak',
    'LBL_LIST_FORM_TITLE' => 'Lista beležaka',
    'LBL_LIST_RELATED_TO' => 'Poveži sa',
    'LBL_LIST_SUBJECT' => 'Naslov',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_MODULE_NAME' => 'Beleške',
    'LBL_MODULE_TITLE' => 'Beleške: Početna strana',
    'LBL_NEW_FORM_TITLE' => 'Kreiraj belešku ili dodaj prilog',
    'LBL_NOTE_STATUS' => 'Beleška',
    'LBL_NOTE_SUBJECT' => 'Naslov:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Dodaci',
    'LBL_NOTE' => 'Beleška:',
    'LBL_OPPORTUNITY_ID' => 'ID broj planirane prodaje:',
    'LBL_PARENT_ID' => 'Matični ID broj:',
    'LBL_PARENT_TYPE' => 'Matični tip',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Da li da prikažem u portalu?',
    'LBL_EMBED_FLAG' => 'Ugradi u elektronsku poruku?',
    'LBL_PRODUCT_ID' => 'ID broj proizvoda:',
    'LBL_QUOTE_ID' => 'ID broj ponude:',
    'LBL_RELATED_TO' => 'Povezano sa:',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga beležaka',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Naslov:',
    'LNK_IMPORT_NOTES' => 'Uvezi beleške',
    'LNK_NEW_NOTE' => 'Kreiraj belešku ili prilog',
    'LNK_NOTE_LIST' => 'Pregledaj beleške',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_REMOVING_ATTACHMENT' => 'Uklanjam dodatak...',
    'ERR_REMOVING_ATTACHMENT' => 'Neuspešno uklanjanje dodatka...',
    'LBL_CREATED_BY' => 'Autor',
    'LBL_MODIFIED_BY' => 'Izmenio',
    'LBL_SEND_ANYWAYS' => 'Ova e-poruka je bez naslova. Da li da je ipak pošaljem/sačuvam?',
    'LBL_NOTE_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Moje beleške',
    'LBL_EDITLAYOUT' => 'Izmeni izgled' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_LAST_NAME' => 'Prezime',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_DELETED' => 'Obrisan',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Rastući',
    'LBL_DESCENDING' => 'Opadajući',
);
