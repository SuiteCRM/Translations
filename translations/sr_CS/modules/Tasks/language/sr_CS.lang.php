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
    'LBL_MODULE_NAME' => 'Zadaci',
    'LBL_MODULE_TITLE' => ' Zadaci: Početna strana',
    'LBL_SEARCH_FORM_TITLE' => ' Pretraga zadataka',
    'LBL_LIST_FORM_TITLE' => ' Lista zadataka',
    'LBL_NEW_FORM_TITLE' => ' Napravi zadatak',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_LIST_SUBJECT' => 'Naslov',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_DUE_DATE' => 'Datum dospeća',
    'LBL_LIST_DUE_TIME' => 'Vreme zaduženja',
    'LBL_SUBJECT' => 'Naslov:',
    'LBL_STATUS' => 'Status',
    'LBL_DUE_DATE' => 'Datum zaduživanja:',
    'LBL_DUE_TIME' => 'Vreme zaduživanja:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DUE_DATE_AND_TIME' => 'Datum i vreme zaduženja:',
    'LBL_START_DATE_AND_TIME' => 'Datum i vreme početka:',
    'LBL_START_DATE' => 'Datum početka:',
    'LBL_LIST_START_DATE' => 'Datum početka',
    'LBL_START_TIME' => 'Vreme početka:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_NONE' => 'Nijedno',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'Adresa elektronske pošte:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_NAME' => 'Ime:',
    'LBL_CONTACT_NAME' => 'Ime kontakta ',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_DATE_DUE_FLAG' => 'Nema datuma zaduženja',
    'LBL_DATE_START_FLAG' => 'Nema datuma početka',
    'LBL_LIST_MY_TASKS' => 'Moji aktuelni zadaci',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_TASK_LIST' => 'Pregledaj zadatke',
    'LNK_IMPORT_TASKS' => 'Uvezi zadatke',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_LIST_DATE_MODIFIED' => 'Datum izmene',
    'LBL_CONTACT_ID' => 'ID broj kontakta:',
    'LBL_PARENT_ID' => 'Matični ID broj:',
    'LBL_CONTACT_PHONE' => 'Telefon kontakta:',
    'LBL_PARENT_TYPE' => 'Matični tip:',
    'LBL_TASK_INFORMATION' => 'Pregled zadatka', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Izmeni izgled' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Beleške',
    //For export labels
    'LBL_DATE_DUE' => 'Datum zaduživanja',
    'LBL_RELATED_TO' => 'Povezano sa',
);
