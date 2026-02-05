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
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
    'LNK_NEW_EMAIL' => 'Arhivēt E-pastu [Alt+K]',
    'LNK_CALL_LIST' => 'Zvani',
    'LNK_MEETING_LIST' => 'Tikšanās',
    'LNK_TASK_LIST' => 'Uzdevumi',
    'LNK_NOTE_LIST' => 'Piezīmes',
    'LBL_ADD_FIELD' => 'Pievienot lauku:',
    'LBL_SEARCH_FORM_TITLE' => 'Moduļa meklēšana',
    'COLUMN_TITLE_NAME' => 'Lauka nosaukums',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Attēlošanas etiķete',
    'COLUMN_TITLE_LABEL_VALUE' => 'Etiķetes vērtība',
    'COLUMN_TITLE_LABEL' => 'Sistēmas etiķete',
    'COLUMN_TITLE_DATA_TYPE' => 'Datu tips',
    'COLUMN_TITLE_MAX_SIZE' => 'Maks. izmērs',
    'COLUMN_TITLE_HELP_TEXT' => 'Palīga teksts',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Komentāru teksts',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Obligātais lauks',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Noklusētā vērtība',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame augstums',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Noklusētais URL',
    'COLUMN_TITLE_AUDIT' => 'Audits',
    'COLUMN_TITLE_MIN_VALUE' => 'Min. vērtība',
    'COLUMN_TITLE_MAX_VALUE' => 'Maks. vērtība',
    'COLUMN_TITLE_LABEL_ROWS' => 'Rindas',
    'COLUMN_TITLE_LABEL_COLS' => 'Kolonnas',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# vienības parādītas',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Automātiski palielināt nākamo vērtību',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Atiestatīt formātu',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Atļaut diapazona meklēšanu',
    'LBL_DROP_DOWN_LIST' => 'Nolaižamais saraksts',
    'LBL_RADIO_FIELDS' => 'Radio lauki',
    'LBL_MULTI_SELECT_LIST' => 'Vairākizvēļu saraksts',
    'COLUMN_TITLE_PRECISION' => 'Precizitāte',
    'LBL_MODULE' => 'Modulis',
    'COLUMN_TITLE_MASS_UPDATE' => 'Masveida izmaiņas',
    'COLUMN_TITLE_IMPORTABLE' => 'Importējams',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Dublikātu sapludināšana',
    'LBL_LABEL' => 'Etiķete',
    'LBL_DATA_TYPE' => 'Datu tips',
    'LBL_DEFAULT_VALUE' => 'Noklusētā vērtība',
    'ERR_RESERVED_FIELD_NAME' => "Rezervēts atslēgvārds",
    'ERR_SELECT_FIELD_TYPE' => 'Lūdzu norādiet lauka tipu',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Tāds lauka nosaukums jau ir',
    'LBL_BTN_ADD' => 'Pievienot',
    'LBL_BTN_EDIT' => 'Rediģēt',
    'LBL_GENERATE_URL' => 'Ģenerēt URL',
    'LBL_CALCULATED' => 'Aprēķināta vērtība',
    'LBL_LINK_TARGET' => 'Atvērt saiti ar',
    'LBL_IMAGE_WIDTH' => 'Platums',
    'LBL_IMAGE_HEIGHT' => 'Augstums',
    'LBL_IMAGE_BORDER' => 'Mala',
    'LBL_HELP' => 'Palīdzība' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Rediģēšana rindā',
    'COLUMN_TITLE_PARENT_ENUM' => 'Parent DropDown',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
