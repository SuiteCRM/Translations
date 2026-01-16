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
    'LBL_MODULE_NAME' => 'Documenti',
    'LBL_MODULE_TITLE' => 'Documenti: Home',
    'LNK_NEW_DOCUMENT' => 'Nuovo Documento',
    'LNK_DOCUMENT_LIST' => 'Visualizza Documenti',
    'LBL_DOC_REV_HEADER' => 'Revisioni Documento',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Documento',
    //vardef labels
    'LBL_NAME' => 'Nome Documento',
    'LBL_DESCRIPTION' => 'Descrizione',
    'LBL_CATEGORY' => 'Categoria',
    'LBL_SUBCATEGORY' => 'Sottocategoria',
    'LBL_STATUS' => 'Stato',
    'LBL_CREATED_BY' => 'Creato da',
    'LBL_DATE_ENTERED' => 'Data di Creazione',
    'LBL_DATE_MODIFIED' => 'Data Modifica',
    'LBL_DELETED' => 'Eliminato',
    'LBL_MODIFIED' => 'Modificato da ID',
    'LBL_MODIFIED_USER' => 'Modificato da',
    'LBL_CREATED' => 'Creato da',
    'LBL_REVISIONS' => 'Revisioni',
    'LBL_RELATED_DOCUMENT_ID' => 'ID documento associato',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID revisione documento associato',
    'LBL_IS_TEMPLATE' => 'È un Modello',
    'LBL_TEMPLATE_TYPE' => 'Tipo Documento',
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
    'LBL_REVISION_NAME' => 'Numero Revisione',
    'LBL_MIME' => 'Tipo Mime',
    'LBL_REVISION' => 'Revisione',
    'LBL_DOCUMENT' => 'Documento Correlato',
    'LBL_LATEST_REVISION' => 'Ultima versione',
    'LBL_CHANGE_LOG' => 'Registro Modifiche',
    'LBL_ACTIVE_DATE' => 'Data Pubblicazione',
    'LBL_EXPIRATION_DATE' => 'Data di Scadenza',
    'LBL_FILE_EXTENSION' => 'Estensione File',
    'LBL_LAST_REV_MIME_TYPE' => 'Ultima revisione tipo MIME',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Non Specificato',
    'LBL_HOMEPAGE_TITLE' => 'I miei Documenti',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nuovo Documento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nome Documento:',
    'LBL_FILENAME' => 'Nome del file:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Revisione:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Categoria:',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'LBL_SUBCATEGORY_VALUE' => 'Sottocategoria:',
    'LBL_DOC_STATUS' => 'Stato:',
    'LBL_LAST_REV_CREATOR' => 'Revisione Creata Da:',
    'LBL_LASTEST_REVISION_NAME' => 'Nome ultima versione:',
    'LBL_SELECTED_REVISION_NAME' => 'Nome revisione selezionata:',
    'LBL_CONTRACT_STATUS' => 'Stato Contratto:',
    'LBL_CONTRACT_NAME' => 'Nome Contratto:',
    'LBL_DET_RELATED_DOCUMENT' => 'Documento associato:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revisione del Documento Associato:",
    'LBL_DET_IS_TEMPLATE' => 'Modello?:',
    'LBL_DET_TEMPLATE_TYPE' => 'Tipo Documento:',
    'LBL_DOC_DESCRIPTION' => 'Descrizione:',
    'LBL_DOC_ACTIVE_DATE' => 'Data Pubblicazione:',
    'LBL_DOC_EXP_DATE' => 'Data Scadenza:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Elenco Documenti',
    'LBL_LIST_DOCUMENT' => 'Documento',
    'LBL_LIST_SUBCATEGORY' => 'Sottocategoria',
    'LBL_LIST_REVISION' => 'Revisione',
    'LBL_LIST_LAST_REV_CREATOR' => 'Pubblicato Da',
    'LBL_LIST_LAST_REV_DATE' => 'Data Revisione',
    'LBL_LIST_VIEW_DOCUMENT' => 'Visualizza',
    'LBL_LIST_ACTIVE_DATE' => 'Data Pubblicazione',
    'LBL_LIST_EXP_DATE' => 'Data di Scadenza',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_LINKED_ID' => 'Id collegato',
    'LBL_SELECTED_REVISION_ID' => 'Id revisione selezionata',
    'LBL_LATEST_REVISION_ID' => 'Id ultima versione',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nome del file di revisione selezionato',
    'LBL_FILE_URL' => 'Url File',

    //document search form.
    'LBL_SF_CATEGORY' => 'Categoria:',
    'LBL_SF_SUBCATEGORY' => 'Sottocategoria:',

    'DEF_CREATE_LOG' => 'Documento Creato',

    //error messages
    'ERR_DOC_NAME' => 'Nome Documento',
    'ERR_DOC_ACTIVE_DATE' => 'Data Pubblicazione',
    'ERR_FILENAME' => 'Nome del File',
    'ERR_DOC_VERSION' => 'Versione Documento',
    'ERR_DELETE_CONFIRM' => 'Vuoi eliminare questa revisione del documento ?',
    'ERR_DELETE_LATEST_VERSION' => 'Non sei autorizzato a cancellare l´ultima versione di un documento.',
    'LNK_NEW_MAIL_MERGE' => 'Stampa Unione',
    'ERR_MISSING_FILE' => 'Questo documento è privo di un file, molto probabilmente a causa di un errore durante il caricamento. Si prega di riprovare a caricare il file o contattare l´amministratore del sistema.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nome',
    'LBL_LIST_IS_TEMPLATE' => 'Modello?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tipo Documento',
    'LBL_LAST_REV_CREATE_DATE' => 'Data Creazione Ultima Revisione',
    'LBL_CONTRACTS' => 'Contratti',
    'LBL_CREATED_USER' => 'Utente Creato',
    'LBL_DOCUMENT_INFORMATION' => 'Informazioni', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID Sorgente Documento',
    'LBL_DOC_TYPE' => 'Sorgente',
    'LBL_DOC_TYPE_POPUP' => 'Seleziona una sorgente nella quale verrà caricato il documento e dalla quale il documento sarà disponibile.',
    'LBL_DOC_URL' => 'URL Sorgente Documento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome del File',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'I primi 20 files modificati più di recente sono visualizzati in ordine decrescente nella lista qui sotto. Utilizza la ricerca per trovare altri files.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome del File',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L´utente ha tentato di accedere con una API ({0}) esterna non valida',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Controllo di accesso per API ({0}) esterna non riuscito',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunità',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Errori',

    'LBL_AOS_CONTRACTS' => 'Contratti',
);
