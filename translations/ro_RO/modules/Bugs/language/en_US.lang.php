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
    'LBL_MODULE_NAME' => 'Bug-uri',
    'LBL_MODULE_TITLE' => 'Defecte: Start',
    'LBL_MODULE_ID' => 'Bug-uri',
    'LBL_SEARCH_FORM_TITLE' => 'Caută defecte',
    'LBL_LIST_FORM_TITLE' => 'Lista de defecte',
    'LBL_NEW_FORM_TITLE' => 'Nou defect',
    'LBL_SUBJECT' => 'Subiect:',
    'LBL_NUMBER' => 'Număr:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Prioritate:',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_CONTACT_NAME' => 'Denumire Contact:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_LIST_NUMBER' => 'Număr.',
    'LBL_LIST_SUBJECT' => 'Subiect',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Prioritate',
    'LBL_LIST_RESOLUTION' => 'Rezoluție',
    'LBL_LIST_LAST_MODIFIED' => 'Data modificării',
    'LBL_INVITEE' => 'Contacte',
    'LBL_TYPE' => 'Tip:',
    'LBL_LIST_TYPE' => 'Tip',
    'LBL_RESOLUTION' => 'Categoria:',
    'LBL_RELEASE' => 'Distribuţie:',
    'LNK_NEW_BUG' => 'Nou defect',
    'LNK_BUG_LIST' => 'Defecte',
    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a şterge defectul.',
    'LBL_LIST_MY_BUGS' => 'Defectele mele',
    'LNK_IMPORT_BUGS' => 'Importa probleme',
    'LBL_FOUND_IN_RELEASE' => 'Găsit în distribuţia:',
    'LBL_FIXED_IN_RELEASE' => 'Rezolvat în distribuţia:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Rezolvate în distribuţie',
    'LBL_WORK_LOG' => 'Jurnal de activitate:',
    'LBL_SOURCE' => 'Sursă:',
    'LBL_PRODUCT_CATEGORY' => 'Categorie:',

    'LBL_CREATED_BY' => 'Creat de:',
    'LBL_MODIFIED_BY' => 'Modificat de:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Adresă Email',
    'LBL_LIST_CONTACT_NAME' => 'Denumire contact',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți acest contact din acest eroare?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Defecte',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Conturi',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cazuri',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documente',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',

    'LBL_BUG_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
