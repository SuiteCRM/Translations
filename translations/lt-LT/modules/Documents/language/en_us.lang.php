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
    'LBL_MODULE_NAME' => 'Dokumentai',
    'LBL_MODULE_TITLE' => 'Dokumentai: Pradžia',
    'LNK_NEW_DOCUMENT' => 'Sukurti dokumentą',
    'LNK_DOCUMENT_LIST' => 'Dokumentų sąrašas',
    'LBL_DOC_REV_HEADER' => 'Dokumento versijos',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentų paieška',
    //vardef labels
    'LBL_NAME' => 'Dokumento pavadinimas',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_CATEGORY' => 'Kategorija:',
    'LBL_SUBCATEGORY' => 'Subkategorija',
    'LBL_STATUS' => 'Būsena',
    'LBL_CREATED_BY' => 'Sukūrė:',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_MODIFIED' => 'Redaguotojo ID',
    'LBL_MODIFIED_USER' => 'Redagavo:',
    'LBL_CREATED' => 'Sukūrė:',
    'LBL_REVISIONS' => 'Versijos',
    'LBL_RELATED_DOCUMENT_ID' => 'Susijusio dokumento Id',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Susijusio dokumento versijos Id',
    'LBL_IS_TEMPLATE' => 'Yra Šablonas',
    'LBL_TEMPLATE_TYPE' => 'Dokumento tipas',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas:',
    'LBL_REVISION_NAME' => 'Versijos Nr.',
    'LBL_MIME' => 'Mime tipas',
    'LBL_REVISION' => 'Versija',
    'LBL_DOCUMENT' => 'Susiję dokumentai',
    'LBL_LATEST_REVISION' => 'Naujausia versija',
    'LBL_CHANGE_LOG' => 'Pakeitimų istorija',
    'LBL_ACTIVE_DATE' => 'Publikavimo data',
    'LBL_EXPIRATION_DATE' => 'Pasibaigimo datą',
    'LBL_FILE_EXTENSION' => 'Failo plėtinys',
    'LBL_LAST_REV_MIME_TYPE' => 'Paskutinės versijos MIME tipas',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nenurodyta',
    'LBL_HOMEPAGE_TITLE' => 'Mano dokumentai',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Naujas dokumentas',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumento pavadinimas:',
    'LBL_FILENAME' => 'Failo pavadinimas:',
    'LBL_LIST_FILENAME' => 'Filo:',
    'LBL_DOC_VERSION' => 'Versija:',
    'LBL_FILE_UPLOAD' => 'Filo:',

    'LBL_CATEGORY_VALUE' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija:',
    'LBL_SUBCATEGORY_VALUE' => 'Subkategorija:',
    'LBL_DOC_STATUS' => 'Būsena:',
    'LBL_LAST_REV_CREATOR' => 'Versiją sukūrė:',
    'LBL_LASTEST_REVISION_NAME' => 'Naujausios versijos pavadinimas:',
    'LBL_SELECTED_REVISION_NAME' => 'Pasirinktos versijos pavadinimas:',
    'LBL_CONTRACT_STATUS' => 'Sutarties statusas:',
    'LBL_CONTRACT_NAME' => 'Sutarties pavadinimas:',
    'LBL_DET_RELATED_DOCUMENT' => 'Susijęs dokumentas:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Susijusi dokumento versija:",
    'LBL_DET_IS_TEMPLATE' => 'Šablonas? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumento tipas:',
    'LBL_DOC_DESCRIPTION' => 'Aprašymas:',
    'LBL_DOC_ACTIVE_DATE' => 'Paskelbimo data:',
    'LBL_DOC_EXP_DATE' => 'Pasibaigimo data:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentų sąrašas',
    'LBL_LIST_DOCUMENT' => 'Dokumentas',
    'LBL_LIST_SUBCATEGORY' => 'Subkategorija',
    'LBL_LIST_REVISION' => 'Versija',
    'LBL_LIST_LAST_REV_CREATOR' => 'Paskelbė',
    'LBL_LIST_LAST_REV_DATE' => 'Versijos data',
    'LBL_LIST_VIEW_DOCUMENT' => 'Peržiūrėti',
    'LBL_LIST_ACTIVE_DATE' => 'Publikavimo data',
    'LBL_LIST_EXP_DATE' => 'Pasibaigimo datą',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LINKED_ID' => 'Susijęs id',
    'LBL_SELECTED_REVISION_ID' => 'Pasirinktos versijos ID',
    'LBL_LATEST_REVISION_ID' => 'Paskutinės versijos id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Pasirinktos versijos failo pavadinimas',
    'LBL_FILE_URL' => 'Failo nuoroda',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategorija:',
    'LBL_SF_SUBCATEGORY' => 'Subkategorija:',

    'DEF_CREATE_LOG' => 'Dokumentas sukurtas',

    //error messages
    'ERR_DOC_NAME' => 'Dokumento pavadinimas',
    'ERR_DOC_ACTIVE_DATE' => 'Publikavimo data',
    'ERR_FILENAME' => 'Failo pavadinimas',
    'ERR_DOC_VERSION' => 'Dokumento versija',
    'ERR_DELETE_CONFIRM' => 'Ar Jūs norite ištrinti šią dokumento versiją?',
    'ERR_DELETE_LATEST_VERSION' => 'Jums neleidžiama trinti naujausios dokumento versijos.',
    'LNK_NEW_MAIL_MERGE' => 'El. paštas apjungiamas',
    'ERR_MISSING_FILE' => 'Šiame dokumente trūksta failo, greičiausiai dėl per įkėlimo klaida.  Bandykite iš naujo įkelti failą arba kreipkitės į administratorių.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Vardas',
    'LBL_LIST_IS_TEMPLATE' => 'Šablonas?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumento tipas',
    'LBL_LAST_REV_CREATE_DATE' => 'Naujausia versija sukurta',
    'LBL_CONTRACTS' => 'Sutartys',
    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_DOCUMENT_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumento šaltinio ID',
    'LBL_DOC_TYPE' => 'Šaltinis',
    'LBL_DOC_TYPE_POPUP' => 'Pasirinkite vietą į kur dokumentas bus užkrautas<br>ir iš kur galėsite jį pasiekti.',
    'LBL_DOC_URL' => 'Dokumento šaltinio nuoroda',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Failo pavadinimas',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Pirmiausia 20 vėliausiai modifikuotus failus rodomi mažėjančia tvarka toliau pateikiamame sąraše. Naudokite paiešką rasti kitus failus.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Failo pavadinimas',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Vartotojas bandė prieiti prie neleistinas išorės API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Prisijungimo tikrinimas nepavyko išorės API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Galimybės',
    'LBL_CASES_SUBPANEL_TITLE' => 'Atvejai',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',

    'LBL_AOS_CONTRACTS' => 'Sutartys',
);
