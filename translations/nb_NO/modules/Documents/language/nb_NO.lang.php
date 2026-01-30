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
    'LBL_MODULE_NAME' => 'Dokumenter',
    'LBL_MODULE_TITLE' => 'Dokumenter',
    'LNK_NEW_DOCUMENT' => 'Opprett nytt dokument',
    'LNK_DOCUMENT_LIST' => 'Dokumentliste',
    'LBL_DOC_REV_HEADER' => 'Dokumentversjoner',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter dokument',
    //vardef labels
    'LBL_NAME' => 'Dokumentets navn',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY' => 'Underkategori',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY' => 'Opprettet av',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_DELETED' => 'Slettet',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_USER' => 'Endret av',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_REVISIONS' => 'Revisjoner',
    'LBL_RELATED_DOCUMENT_ID' => 'Relatert dokument Id',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Relatert dokument versjons Id',
    'LBL_IS_TEMPLATE' => 'Er en mal',
    'LBL_TEMPLATE_TYPE' => 'Dokumenttype',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt brukers navn:',
    'LBL_REVISION_NAME' => 'Versjonsnr',
    'LBL_MIME' => 'Mime type',
    'LBL_REVISION' => 'Versjon',
    'LBL_DOCUMENT' => 'Relatert dokument',
    'LBL_LATEST_REVISION' => 'Siste versjon',
    'LBL_CHANGE_LOG' => 'Endre log:',
    'LBL_ACTIVE_DATE' => 'Plubliseringsdato',
    'LBL_EXPIRATION_DATE' => 'Utløpsdato',
    'LBL_FILE_EXTENSION' => 'Filtype',
    'LBL_LAST_REV_MIME_TYPE' => 'Siste revisjon MIME-type',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Uspesifiesert',
    'LBL_HOMEPAGE_TITLE' => 'Mine dokumenter',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nytt dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentets navn:',
    'LBL_FILENAME' => 'Filnavn:',
    'LBL_LIST_FILENAME' => 'Filnavn',
    'LBL_DOC_VERSION' => 'Versjon:',
    'LBL_FILE_UPLOAD' => 'Filnavn',

    'LBL_CATEGORY_VALUE' => 'Kategori:',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY_VALUE' => 'Underkategori:',
    'LBL_DOC_STATUS' => 'Status',
    'LBL_LAST_REV_CREATOR' => 'Versjon opprettet av:',
    'LBL_LASTEST_REVISION_NAME' => 'Siste revisjon navn:',
    'LBL_SELECTED_REVISION_NAME' => 'Valgt revisjon navn',
    'LBL_CONTRACT_STATUS' => 'Kontrakt status',
    'LBL_CONTRACT_NAME' => 'Kontraktens betegnelse:',
    'LBL_DET_RELATED_DOCUMENT' => 'Relatert dokument:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Relatert dokuments revisjon:",
    'LBL_DET_IS_TEMPLATE' => 'Mal? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumenttype:',
    'LBL_DOC_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DOC_ACTIVE_DATE' => 'Publiserings Dato:',
    'LBL_DOC_EXP_DATE' => 'Utløpsdato:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_SUBCATEGORY' => 'Underkategori',
    'LBL_LIST_REVISION' => 'Versjon',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publisert av',
    'LBL_LIST_LAST_REV_DATE' => 'Versjonsdato',
    'LBL_LIST_VIEW_DOCUMENT' => 'Vis',
    'LBL_LIST_ACTIVE_DATE' => 'Plubliseringsdato',
    'LBL_LIST_EXP_DATE' => 'Utløpsdato',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LINKED_ID' => 'Linked ID',
    'LBL_SELECTED_REVISION_ID' => 'Valgt revisjon ID',
    'LBL_LATEST_REVISION_ID' => 'Siste revisjon ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valgt revisjon filnavn',
    'LBL_FILE_URL' => 'Fil URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategori:',
    'LBL_SF_SUBCATEGORY' => 'Underkategori:',

    'DEF_CREATE_LOG' => 'Dokument opprettet',

    //error messages
    'ERR_DOC_NAME' => 'Dokumentets navn',
    'ERR_DOC_ACTIVE_DATE' => 'Plubliseringsdato',
    'ERR_FILENAME' => 'Filnavn',
    'ERR_DOC_VERSION' => 'Dokumentversjon',
    'ERR_DELETE_CONFIRM' => 'Ønsker du å slette denne versjonen av dokumentet?',
    'ERR_DELETE_LATEST_VERSION' => 'Det er ikke tillatt å slette siste versjon av et dokument.',
    'LNK_NEW_MAIL_MERGE' => 'Fletting av e-post',
    'ERR_MISSING_FILE' => 'Dette dokumentet mangler en fil, sannsynligvis på grunn av en feil under opplastning. Prøv å laste opp filen på nytt eller ta kontakt med din administrator.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Navn',
    'LBL_LIST_IS_TEMPLATE' => 'Mal?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumenttype',
    'LBL_LAST_REV_CREATE_DATE' => 'Opprettelsessato for siste rev.',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_DOCUMENT_INFORMATION' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Dokumentkilde ID',
    'LBL_DOC_TYPE' => 'Kilde',
    'LBL_DOC_TYPE_POPUP' => 'Velg en kilde hvor dette dokumentet vil bli lastet opp fra der det er tilgjengelig.',
    'LBL_DOC_URL' => 'Dokumentkilde URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Filnavn',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De 20 mest nylig endrede filene vises i synkende rekkefølge i listen under. Bruk søkefunksjonen for å finne andre filer.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Filnavn',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Brukeren forsøkte å få tilgang til et ugyldig eksternt API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Innloggingen feilet for det eksterne APIet ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kunder',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Salgsmuligheter',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kundestøtte',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Feil',

    'LBL_AOS_CONTRACTS' => 'Kontrakter',
);
