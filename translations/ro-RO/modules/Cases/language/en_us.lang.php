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
    'LBL_TOOL_TIP_BOX_TITLE' => 'Sugestii pentru Baza de Cunoștințe',
    'LBL_TOOL_TIP_TITLE' => 'Titlu:',
    'LBL_TOOL_TIP_BODY' => 'Corp:',
    'LBL_TOOL_TIP_INFO' => 'Informații Adiționale:',
    'LBL_TOOL_TIP_USE' => 'Folosiți ca:',
    'LBL_SUGGESTION_BOX' => 'Sugestii',
    'LBL_NO_SUGGESTIONS' => 'Fără sugestii',
    'LBL_RESOLUTION_BUTTON' => 'Rezoluție',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titlu',
    'LBL_SUGGESTION_BOX_REL' => 'Relevanță',

    'LBL_ACCOUNT_ID' => 'ID Cont',
    'LBL_ACCOUNT_NAME' => 'Nume Cont:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Conturi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug-uri',
    'LBL_CASE_NUMBER' => 'Număr de caz:',
    'LBL_CASE' => 'Caz:',
    'LBL_CONTACT_NAME' => 'Denumire Contact:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cazuri',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_INVITEE' => 'Contacte',
    'LBL_MEMBER_OF' => 'Cont',
    'LBL_MODULE_NAME' => 'Cazuri',
    'LBL_MODULE_TITLE' => 'Cazuri: Start',
    'LBL_NEW_FORM_TITLE' => 'Nou caz',
    'LBL_NUMBER' => 'Număr:',
    'LBL_PRIORITY' => 'Prioritate:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documente',
    'LBL_RESOLUTION' => 'Categoria:',
    'LBL_SEARCH_FORM_TITLE' => 'Caută cazuri',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Subiect:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_ASSIGNED' => 'Atribuit lui',
    'LBL_LIST_CLOSE' => 'Închide',
    'LBL_LIST_FORM_TITLE' => 'Lista de cazuri',
    'LBL_LIST_LAST_MODIFIED' => 'Data modificării',
    'LBL_LIST_MY_CASES' => 'Cazurile mele',
    'LBL_LIST_NUMBER' => 'Număr.',
    'LBL_LIST_PRIORITY' => 'Prioritate',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subiect',

    'LNK_CASE_LIST' => 'Cazuri',
    'LNK_NEW_CASE' => 'Creați Caz',
    'LBL_LIST_DATE_CREATED' => 'Data creării',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_TYPE' => 'Tip',
    'LBL_WORK_LOG' => 'Jurnal de lucru',
    'LNK_IMPORT_CASES' => 'Importă Cazuri',

    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Modificata de Utilizator',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_CASE_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Actualizări - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Actualizare Internă',
    'LBL_AOP_CASE_UPDATES' => 'Actualizări Cazuri',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Actualizări Cazuri pe Fire',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Restrânge tot',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Extindeți Tot',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Atașamente:',

    'LBL_AOP_CASE_EVENTS' => 'Evenimente caz',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Atașamente Caz:',
    'LBL_ADD_CASE_FILE' => 'Adaugă fișier',
    'LBL_REMOVE_CASE_FILE' => 'Înlăturați fișier',
    'LBL_SELECT_CASE_DOCUMENT' => 'Selectați Document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Înlăturați document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Document CRM intern',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Fișier extern',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Creat de contact',
    'LBL_CONTACT_CREATED_BY' => 'Creat de',
    'LBL_CASE_UPDATE_FORM' => 'Actualizări - formular atașament', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Contact necunoscut',
);
