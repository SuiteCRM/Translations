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
    'LNK_NEW_CALL' => 'I-log ang tawag',
    'LNK_NEW_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LNK_NEW_TASK' => 'Gumawa ng Gawain',
    'LNK_NEW_NOTE' => 'Gumawa ng Nota o Ilalakip',
    'LNK_NEW_EMAIL' => 'Email na Nasinup',
    'LNK_CALL_LIST' => 'Ang mga tawag',
    'LNK_MEETING_LIST' => 'Ang mga pagpupulong',
    'LNK_TASK_LIST' => 'Ang mga gawain',
    'LNK_NOTE_LIST' => 'Ang mga tala',
    'LBL_ADD_FIELD' => 'Ang patlang ay idadgdag:',
    'LBL_SEARCH_FORM_TITLE' => 'Ang paghahanap ng modyul',
    'COLUMN_TITLE_NAME' => 'Pangalan ng patlang',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Ipakita ang Label',
    'COLUMN_TITLE_LABEL_VALUE' => 'Ang Halaga ng tatak',
    'COLUMN_TITLE_LABEL' => 'Lebel ng sistema',
    'COLUMN_TITLE_DATA_TYPE' => 'Uri ng datos',
    'COLUMN_TITLE_MAX_SIZE' => 'Pinakamalaking sukat',
    'COLUMN_TITLE_HELP_TEXT' => 'Tulungan ang teksto',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Magkomento ng teksto',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Kinakailangang field',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Default na Halaga',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame na taas',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Default na URL',
    'COLUMN_TITLE_AUDIT' => 'Pag-awdit',
    'COLUMN_TITLE_MIN_VALUE' => 'Pinakamababang halaga',
    'COLUMN_TITLE_MAX_VALUE' => 'Pinakamataas na halaga',
    'COLUMN_TITLE_LABEL_ROWS' => 'Mga hanay',
    'COLUMN_TITLE_LABEL_COLS' => 'Mga haligi',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# ipinakitang mga bagay',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto na pagdagdag ng susunod na halaga',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Huwag paganahin ang ayos',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Paganahin ang saklaw ng paghahanap',
    'LBL_DROP_DOWN_LIST' => 'Listahan ng bumaba',
    'LBL_RADIO_FIELDS' => 'Mga field ng radyo',
    'LBL_MULTI_SELECT_LIST' => 'Listahan ng maraming napili',
    'COLUMN_TITLE_PRECISION' => 'Katumpakan',
    'LBL_MODULE' => 'Module',
    'COLUMN_TITLE_MASS_UPDATE' => 'Maramihang Updeyt',
    'COLUMN_TITLE_IMPORTABLE' => 'Maaaring i-angkat',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Kopyahin ang pinagsama',
    'LBL_LABEL' => 'Tatak',
    'LBL_DATA_TYPE' => 'Uri ng datos',
    'LBL_DEFAULT_VALUE' => 'Default na Halaga',
    'ERR_RESERVED_FIELD_NAME' => "Ang Nakareserbang Keyword",
    'ERR_SELECT_FIELD_TYPE' => 'Pakiusap pumili ng Uri ng Patlang',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Ang pangalan ng patlang ay mga umiiral na',
    'LBL_BTN_ADD' => 'Magdagdag',
    'LBL_BTN_EDIT' => 'I-edit',
    'LBL_GENERATE_URL' => 'Bumuo ng URL',
    'LBL_CALCULATED' => 'Ang kinalkulang halaga',
    'LBL_LINK_TARGET' => 'Ang link ay buksan sa',
    'LBL_IMAGE_WIDTH' => 'Ang Lapad',
    'LBL_IMAGE_HEIGHT' => 'Ang taas',
    'LBL_IMAGE_BORDER' => 'Ang hangganan',
    'LBL_HELP' => 'Saklolo' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'I-edit ang nasa linya',
    'COLUMN_TITLE_PARENT_ENUM' => 'Bumaba ang sanhi',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
