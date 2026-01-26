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
    'LNK_NEW_CALL' => 'Hívásnapló',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány lérehozása',
    'LNK_NEW_EMAIL' => 'Email archiválása',
    'LNK_CALL_LIST' => 'Hívások',
    'LNK_MEETING_LIST' => 'Találkozók',
    'LNK_TASK_LIST' => 'Feladatok',
    'LNK_NOTE_LIST' => 'Jegyzetek',
    'LBL_ADD_FIELD' => 'Mező hozzáadása:',
    'LBL_SEARCH_FORM_TITLE' => 'Modul keresés',
    'COLUMN_TITLE_NAME' => 'Mező neve',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Címke megjelenítése',
    'COLUMN_TITLE_LABEL_VALUE' => 'Címke érték',
    'COLUMN_TITLE_LABEL' => 'Rendszer címke',
    'COLUMN_TITLE_DATA_TYPE' => 'Adattípus',
    'COLUMN_TITLE_MAX_SIZE' => 'Maximális méret',
    'COLUMN_TITLE_HELP_TEXT' => 'Súgószöveg',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Hozzászólás szöveg',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Kötelező mező',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Alapértelmezett érték',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'iFrame magasság',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Alapértelmezett URL',
    'COLUMN_TITLE_AUDIT' => 'Vizsgálat',
    'COLUMN_TITLE_MIN_VALUE' => 'Minimum érték',
    'COLUMN_TITLE_MAX_VALUE' => 'Maximum érték',
    'COLUMN_TITLE_LABEL_ROWS' => 'Sorok',
    'COLUMN_TITLE_LABEL_COLS' => 'Oszlopok',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# db tétel megjelenítve',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Automatikus növekmény a következő értékre',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Formátum letiltása',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Engedélyezni a tartományra keresést',
    'LBL_DROP_DOWN_LIST' => 'Legördülő listából',
    'LBL_RADIO_FIELDS' => 'Rádió-gombok',
    'LBL_MULTI_SELECT_LIST' => 'Többszörösen választható lista',
    'COLUMN_TITLE_PRECISION' => 'Pontosság',
    'LBL_MODULE' => 'Modul',
    'COLUMN_TITLE_MASS_UPDATE' => 'Tömeges frissítés',
    'COLUMN_TITLE_IMPORTABLE' => 'Importálható',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Duplikált tételek egyesítése',
    'LBL_LABEL' => 'Címke',
    'LBL_DATA_TYPE' => 'Adattípus',
    'LBL_DEFAULT_VALUE' => 'Alapértelmezett érték',
    'ERR_RESERVED_FIELD_NAME' => "Foglalt kulcsszó",
    'ERR_SELECT_FIELD_TYPE' => 'Kérem, válasszon egy mezőtípust',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Mezőnév már létezik',
    'LBL_BTN_ADD' => 'Hozzáadás',
    'LBL_BTN_EDIT' => 'Szerkesztés',
    'LBL_GENERATE_URL' => 'URL létrehozása',
    'LBL_CALCULATED' => 'Számított érték',
    'LBL_LINK_TARGET' => 'Nyissa meg a linket a',
    'LBL_IMAGE_WIDTH' => 'Szélesség',
    'LBL_IMAGE_HEIGHT' => 'Magasság',
    'LBL_IMAGE_BORDER' => 'Keret',
    'LBL_HELP' => 'Súgó' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Beágyazott szerkesztés',
    'COLUMN_TITLE_PARENT_ENUM' => 'Szülő legördülő',
    'LBL_INSERT_FIELD' => 'Mező beszúrása',
);
