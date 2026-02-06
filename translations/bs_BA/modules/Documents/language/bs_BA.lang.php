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
    //module
    'LBL_MODULE_NAME' => 'Dokumenti',
    'LBL_MODULE_TITLE' => 'Dokumenti: Početna',
    'LNK_NEW_DOCUMENT' => 'Kreiraj dokument',
    'LNK_DOCUMENT_LIST' => 'Pogledaj dokumente',
    'LBL_DOC_REV_HEADER' => 'Revizija dokumenta',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga dokumenata',
    //vardef labels
    'LBL_NAME' => 'Naziv dokumenta',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY' => 'Pod kategorija',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Kreirao',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmjene',
    'LBL_DELETED' => 'Izbrisano',
    'LBL_MODIFIED' => 'Izmjenjeno od',
    'LBL_MODIFIED_USER' => 'Modifikovao-la',
    'LBL_CREATED' => 'Kreirao',
    'LBL_REVISIONS' => 'Revizije',
    'LBL_RELATED_DOCUMENT_ID' => 'ID povezanog dokumenta',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revizije povezanog dokumenta',
    'LBL_IS_TEMPLATE' => 'Ovo je predložak',
    'LBL_TEMPLATE_TYPE' => 'Vrsta dokumenta',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku:',
    'LBL_REVISION_NAME' => 'Broj revizije',
    'LBL_MIME' => 'Mime tip',
    'LBL_REVISION' => 'Revizija',
    'LBL_DOCUMENT' => 'Povezani dokument',
    'LBL_LATEST_REVISION' => 'Posljednja revizija',
    'LBL_CHANGE_LOG' => 'Lista izmjena',
    'LBL_ACTIVE_DATE' => 'Datum objave',
    'LBL_EXPIRATION_DATE' => 'Datum isteka',
    'LBL_FILE_EXTENSION' => 'Ekstenzija datoteke',
    'LBL_LAST_REV_MIME_TYPE' => 'Posljednja revizija MIME tipa',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Neodređeno',
    'LBL_HOMEPAGE_TITLE' => 'Moji dokumenti',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Novi dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Naziv dokumenta:',
    'LBL_FILENAME' => 'Naziv datoteke:',
    'LBL_LIST_FILENAME' => 'Datoteka:',
    'LBL_DOC_VERSION' => 'Revizija:',
    'LBL_FILE_UPLOAD' => 'Datoteka:',

    'LBL_CATEGORY_VALUE' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY_VALUE' => 'Pod kategorija:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => 'Revizija kreirana od:',
    'LBL_LASTEST_REVISION_NAME' => 'Naziv posljednje revizije:',
    'LBL_SELECTED_REVISION_NAME' => 'Ime odabrane revizije:',
    'LBL_CONTRACT_STATUS' => 'Status ugovora:',
    'LBL_CONTRACT_NAME' => 'Ime ugovora:',
    'LBL_DET_RELATED_DOCUMENT' => 'Povezani dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revizija povezanih dokumenata:",
    'LBL_DET_IS_TEMPLATE' => 'Predložak? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Vrsta dokumenta:',
    'LBL_DOC_DESCRIPTION' => 'Opis:',
    'LBL_DOC_ACTIVE_DATE' => 'Datum objave:',
    'LBL_DOC_EXP_DATE' => 'Datum isteka:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista dokumenata',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Pod kategorija',
    'LBL_LIST_REVISION' => 'Revizija',
    'LBL_LIST_LAST_REV_CREATOR' => 'Objavljeno od',
    'LBL_LIST_LAST_REV_DATE' => 'Datum revizije',
    'LBL_LIST_VIEW_DOCUMENT' => 'Pregledaj',
    'LBL_LIST_ACTIVE_DATE' => 'Datum objave',
    'LBL_LIST_EXP_DATE' => 'Datum isteka',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Povezani id',
    'LBL_SELECTED_REVISION_ID' => 'Id odabrane revizije',
    'LBL_LATEST_REVISION_ID' => 'Id najnovije revizije',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ime datoteke odabrane revizije',
    'LBL_FILE_URL' => 'Url datoteke',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorija:',
    'LBL_SF_SUBCATEGORY' => 'Pod kategorija:',

    'DEF_CREATE_LOG' => 'Dokument kreiran',

    //error messages
    'ERR_DOC_NAME' => 'Naziv dokumenta',
    'ERR_DOC_ACTIVE_DATE' => 'Datum objave',
    'ERR_FILENAME' => 'Naziv fajla',
    'ERR_DOC_VERSION' => 'Verzija dokumenta',
    'ERR_DELETE_CONFIRM' => 'Želite li izbrisati reviziju ovog dokumenta?',
    'ERR_DELETE_LATEST_VERSION' => 'Nije Vam dozvoljeno da izbrišete posljednju reviziju dokumenta.',
    'LNK_NEW_MAIL_MERGE' => 'Spajanje e-pošte',
    'ERR_MISSING_FILE' => 'U dokumentu nedostaju datoteke, vjerojatno zbog greške prilikom uploada. Molim ponovo pokušajte uploadati datoteku ili kontaktirajte Vašeg administratora.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ime',
    'LBL_LIST_IS_TEMPLATE' => 'Predložak?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Vrsta dokumenta',
    'LBL_LAST_REV_CREATE_DATE' => 'Datum kreiranja posljednje revizije',
    'LBL_CONTRACTS' => 'Ugovori',
    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_DOCUMENT_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID izvora dokumenta',
    'LBL_DOC_TYPE' => 'Izvor',
    'LBL_DOC_TYPE_POPUP' => 'Select a source to which this document will be uploaded<br> and from which it will be available.',
    'LBL_DOC_URL' => 'URL izvora dokumenta',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Naziv fajla',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Zadnjih 20 izmijenjenih datoteka prikazane su u padajućem redoslijedu na listi ispod. Koristite Pretraživanje za pronalazak ostalih datoteka.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Naziv fajla',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Korisnik je pokušao da pristupi nevažećem vanjskom API-u({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Provjera prijave neuspjela za vanjski API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klijenti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Poslovne prilike',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugovi',

    'LBL_AOS_CONTRACTS' => 'Ugovori',
);
