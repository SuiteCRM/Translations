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
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie să fie specificat pentru a șterge contul.',
    'LBL_ACCOUNT_ID' => 'ID Cont:',
    'LBL_CASE_ID' => 'ID caz:',
    'LBL_CLOSE' => 'Închide:',
    'LBL_CONTACT_ID' => 'ID contact:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Note',
    'LBL_DESCRIPTION' => 'Notă',
    'LBL_EMAIL_ADDRESS' => 'Adresă Email:',
    'LBL_EMAIL_ATTACHMENT' => 'Atașare e-mail',
    'LBL_FILE_MIME_TYPE' => 'Tip Mime',
    'LBL_FILE_URL' => 'URL fișier',
    'LBL_FILENAME' => 'Atașament:',
    'LBL_LEAD_ID' => 'ID oportunitate:',
    'LBL_LIST_CONTACT_NAME' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Data modificării',
    'LBL_LIST_FILENAME' => 'Atașament',
    'LBL_LIST_FORM_TITLE' => 'Lista de note',
    'LBL_LIST_RELATED_TO' => 'Asociat de',
    'LBL_LIST_SUBJECT' => 'Subiect',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_MODULE_NAME' => 'Note',
    'LBL_MODULE_TITLE' => 'Note: Start',
    'LBL_NEW_FORM_TITLE' => 'Creați o notă sau adăugați atașament',
    'LBL_NOTE_STATUS' => 'Notă',
    'LBL_NOTE_SUBJECT' => 'Subiect:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Atașamente',
    'LBL_NOTE' => 'Notă:',
    'LBL_OPPORTUNITY_ID' => 'ID oportunitate:',
    'LBL_PARENT_ID' => 'ID Părinte:',
    'LBL_PARENT_TYPE' => 'Tip părinte',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Afișează în portal?',
    'LBL_EMBED_FLAG' => 'Inserează în e-mail?',
    'LBL_PRODUCT_ID' => 'ID produs:',
    'LBL_QUOTE_ID' => 'ID ofertă:',
    'LBL_RELATED_TO' => 'Legat De:',
    'LBL_SEARCH_FORM_TITLE' => 'Caută notițe',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Subiect:',
    'LNK_IMPORT_NOTES' => 'Importă note',
    'LNK_NEW_NOTE' => 'Creează notă sau atașament',
    'LNK_NOTE_LIST' => 'Vizualizați Note',
    'LBL_MEMBER_OF' => 'Membru a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_REMOVING_ATTACHMENT' => 'Se elimină atașamentul...',
    'ERR_REMOVING_ATTACHMENT' => 'Ștergerea atașamentului a eșuat...',
    'LBL_CREATED_BY' => 'Creat De',
    'LBL_MODIFIED_BY' => 'Modificat de',
    'LBL_SEND_ANYWAYS' => 'Acest e-mail nu are subiect. Trimite/salvează oricum?',
    'LBL_NOTE_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Notele Mele',
    'LBL_EDITLAYOUT' => 'Editare aranjament' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Prenume',
    'LBL_LAST_NAME' => 'Nume de Familie',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_DELETED' => 'Şters',
    'LBL_FILE_CONTENTS' => 'Conținutul fișierului',

    'LBL_ASCENDING' => 'Ascendent',
    'LBL_DESCENDING' => 'Descendent',
);
