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
    'LBL_MODULE_NAME' => 'Revizija dokumenta',

    'LNK_NEW_DOCUMENT' => 'Kreiraj dokument',
    'LNK_DOCUMENT_LIST' => 'Prikaži dokumenate',

    //vardef labels
    'LBL_REVISION_NAME' => 'Broj revizije',
    'LBL_FILENAME' => 'Ime fajla',
    'LBL_MIME' => 'MIME tip',
    'LBL_REVISION' => 'Revizija',
    'LBL_DOCUMENT' => 'Povezani dokumenti',
    'LBL_LATEST_REVISION' => 'Poslednja revizija',
    'LBL_CHANGE_LOG' => 'Dnevnik promena',
    'LBL_ACTIVE_DATE' => 'Datum objave',
    'LBL_EXPIRATION_DATE' => 'Datum isteka',
    'LBL_FILE_EXTENSION' => 'Ekstenzija fajla',

    'LBL_DOC_NAME' => 'Ime dokumenta:',
    'LBL_DOC_VERSION' => 'Revizija:',

    //document revisions.
    'LBL_REV_LIST_REVISION' => 'Revizija',
    'LBL_REV_LIST_ENTERED' => 'Datum kreiranja',
    'LBL_REV_LIST_CREATED' => 'Autor',
    'LBL_REV_LIST_LOG' => 'Dnevnik promena',
    'LBL_REV_LIST_FILENAME' => 'Fajl',

    'LBL_CURRENT_DOC_VERSION' => 'Poslednja revizija:',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje dokumenata',
    'LBL_REVISIONS' => 'Revizije',

    //error messages
    'ERR_FILENAME' => 'Ime fajla',
    'ERR_DOC_VERSION' => 'Verzija dokumenta',
    'ERR_DELETE_CONFIRM' => 'Da li želite da obrišete ovu reviziju dokumenta?',
    'ERR_DELETE_LATEST_VERSION' => 'Niste ovlašćeni za brisanje poslednje revizije dokumenta.',
    'LNK_NEW_MAIL_MERGE' => 'Spajanje Email-ova',
    'LBL_DOC_ID' => 'ID broj izvora dokumenta',
    'LBL_DOC_TYPE' => 'Izvor',
    'LBL_DOC_URL' => 'URL izvora dokumenta',

    'LBL_CREATED_BY_NAME' => 'Created by Name',
);
