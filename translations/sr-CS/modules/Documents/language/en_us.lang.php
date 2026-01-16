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
    'LBL_MODULE_TITLE' => 'Dokumenti',
    'LNK_NEW_DOCUMENT' => 'Kreiraj dokument',
    'LNK_DOCUMENT_LIST' => 'Prikaži dokumenate',
    'LBL_DOC_REV_HEADER' => 'Revizije dokumenta',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje dokumenata',
    //vardef labels
    'LBL_NAME' => 'Ime dokumenta',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY' => 'Podkategorija',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Autor',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_DELETED' => 'Obrisan',
    'LBL_MODIFIED' => 'ID broj korisnika koji je promenio',
    'LBL_MODIFIED_USER' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_REVISIONS' => 'Revizije',
    'LBL_RELATED_DOCUMENT_ID' => 'ID broj povezanog dokumenta',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID broj revizije povezanog dokumenta',
    'LBL_IS_TEMPLATE' => 'je šablon',
    'LBL_TEMPLATE_TYPE' => 'Tip dokumenta',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_REVISION_NAME' => 'Broj revizije',
    'LBL_MIME' => 'MIME tip',
    'LBL_REVISION' => 'Revizija',
    'LBL_DOCUMENT' => 'Povezani dokumenti',
    'LBL_LATEST_REVISION' => 'Poslednja revizija',
    'LBL_CHANGE_LOG' => 'Dnevnik promena',
    'LBL_ACTIVE_DATE' => 'Datum objave',
    'LBL_EXPIRATION_DATE' => 'Datum isteka',
    'LBL_FILE_EXTENSION' => 'Ekstenzija fajla',
    'LBL_LAST_REV_MIME_TYPE' => 'MIME tip poslednje revizije',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Neodređana',
    'LBL_HOMEPAGE_TITLE' => 'Moja dokumenta',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Novi dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Ime dokumenta:',
    'LBL_FILENAME' => 'Ime fajla:',
    'LBL_LIST_FILENAME' => 'Ime fajla',
    'LBL_DOC_VERSION' => 'Revizija:',
    'LBL_FILE_UPLOAD' => 'Ime fajla',

    'LBL_CATEGORY_VALUE' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'LBL_SUBCATEGORY_VALUE' => 'Podkategorija:',
    'LBL_DOC_STATUS' => 'Status',
    'LBL_LAST_REV_CREATOR' => 'Autor revizije:',
    'LBL_LASTEST_REVISION_NAME' => 'Naziv poslednje revizije:',
    'LBL_SELECTED_REVISION_NAME' => 'Naziv odabrane revizije',
    'LBL_CONTRACT_STATUS' => 'Status ugovora:',
    'LBL_CONTRACT_NAME' => 'Naziv ugovora:',
    'LBL_DET_RELATED_DOCUMENT' => 'Povezani dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revizija povezanog dokumenta:",
    'LBL_DET_IS_TEMPLATE' => 'Šablon? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Tip dokumenta:',
    'LBL_DOC_DESCRIPTION' => 'Opis:',
    'LBL_DOC_ACTIVE_DATE' => 'Datum objave:',
    'LBL_DOC_EXP_DATE' => 'Datum isteka:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista dokumenata',
    'LBL_LIST_DOCUMENT' => 'Dokumenti',
    'LBL_LIST_SUBCATEGORY' => 'Podkategorija',
    'LBL_LIST_REVISION' => 'Revizija',
    'LBL_LIST_LAST_REV_CREATOR' => 'Postavio',
    'LBL_LIST_LAST_REV_DATE' => 'Datum revizije',
    'LBL_LIST_VIEW_DOCUMENT' => 'Pregledaj',
    'LBL_LIST_ACTIVE_DATE' => 'Datum objave',
    'LBL_LIST_EXP_DATE' => 'Datum isteka',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Id povezanog',
    'LBL_SELECTED_REVISION_ID' => 'Id izabrane revizije',
    'LBL_LATEST_REVISION_ID' => 'Id poslednje revizije',
    'LBL_SELECTED_REVISION_FILENAME' => 'Fajl izabrane revizije',
    'LBL_FILE_URL' => 'URL fajla',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorija:',
    'LBL_SF_SUBCATEGORY' => 'Podkategorija:',

    'DEF_CREATE_LOG' => 'Dokument kreiran',

    //error messages
    'ERR_DOC_NAME' => 'Ime dokumenta',
    'ERR_DOC_ACTIVE_DATE' => 'Datum objave',
    'ERR_FILENAME' => 'Ime fajla',
    'ERR_DOC_VERSION' => 'Verzija dokumenta',
    'ERR_DELETE_CONFIRM' => 'Da li želite da obrišete ovu reviziju dokumenta?',
    'ERR_DELETE_LATEST_VERSION' => 'Niste ovlašćeni za brisanje poslednje revizije dokumenta.',
    'LNK_NEW_MAIL_MERGE' => 'Spajanje Email-ova',
    'ERR_MISSING_FILE' => 'Nije pronađena datoteka ovog dokumenta, najverovatnije zbog greške prilikom postavljanja. Molimo ponovo pokušajte da postavite datoteku ili kontaktirajte svog administratora.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ime',
    'LBL_LIST_IS_TEMPLATE' => 'Šablon?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tip dokumenta',
    'LBL_LAST_REV_CREATE_DATE' => 'Datum kreiranja poslednje revizije',
    'LBL_CONTRACTS' => 'Ugovori',
    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_DOCUMENT_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID broj izvora dokumenta',
    'LBL_DOC_TYPE' => 'Izvor',
    'LBL_DOC_TYPE_POPUP' => 'Izaberite izvor na koji će ovaj dokument biti poslat<br>i sa kod će biti dostupan.',
    'LBL_DOC_URL' => 'URL izvora dokumenta',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Ime fajla',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Prvih 20 najskorije izmenjenih fajlova se prikazuju u opadajućem redosledu na listi ispod. Koristite Pretragu za pronalaženje drugih fajlova.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Ime fajla',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Korisnik je pokušao da pristupi eksternom API interfejsu koji nije validan',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Neuspešna login provera za eksterni API interfejs  ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prodajne prilike',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Praćenje defekata',

    'LBL_AOS_CONTRACTS' => 'Ugovori',
);
