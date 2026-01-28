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
    'LBL_MODULE_NAME' => 'Kombinovani zapisi',
    'LBL_MODULE_TITLE' => 'Kombinovani zapisi: Početna strana',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga kombinacija',
    'LBL_LIST_FORM_TITLE' => 'Lista kombinacija',

    'LBL_LBL_MERGE_RECORDS_STEP_1' => 'Korak 1: Nađi Traži zapise koje ćeš da kombinuješ sa',
    'LBL_AVAIL_FIELDS' => 'Polja koja su na raspolaganju',
    'LBL_FILTER_COND' => 'Uslov filtriranja',
    'LBL_MERGE_VALUE_OVER' => 'Spoji vrednosti preko',

    'LBL_NEXT_STEP_TITLE' => 'Pređi na sledeći korak',
    'LBL_NEXT_STEP_BUTTON_LABEL' => 'Sledeći korak >',

    'LBL_PERFORM_MERGE_BUTTON_TITLE' => 'Uradi spajanje',
    'LBL_PERFORM_MERGE_BUTTON_KEY' => 'P',
    'LBL_PERFORM_MERGE_BUTTON_LABEL' => 'Uradi spajanje',

    'LBL_SAVE_MERGED_RECORD_BUTTON_TITLE' => 'Sačuvaj spojeno',
    'LBL_SAVE_MERGED_RECORD_BUTTON_LABEL' => 'Sačuvaj spojeno',

    'LBL_STEP2_FORM_TITLE' => 'Zapisi koji su nađeni da se spoje sa:',
    'LBL_SELECT_ERROR' => 'Morate da napravite izbor pre nego što nastavite dalje.',
    'LBL_CHANGE_PARENT' => 'Postavite kao osnovi',
    'LBL_REMOVE_FROM_MERGE' => 'Ukloni',
    'LBL_DIFF_COL_VALUES' => 'Kolone čija se vrednost u osnovnom redu razlikuje od vrednosti u spojenom redu:',
    'LBL_SAME_COL_VALUES' => 'Kolone čija je vrednost slična kroz sve redove:',
    'LBL_DELETE_MESSAGE' => 'Ovom akcijom biće obrisani sledeći zapis(i):',
    'LBL_PROCEED' => 'Nastavi?',
    'LBL_STEP1_DIRECTIONS' => 'Pronađite moguće duplikate zapisa. Ako su mogući duplikati pronađeni, možete da izaberete zapise koje će te spojiti sa aktivnim zapisima.',
);
