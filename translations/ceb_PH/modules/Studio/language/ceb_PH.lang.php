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
    'LBL_EDIT_LAYOUT' => 'I-edit ang Plano',
    'LBL_EDIT_FIELDS' => 'Editon Una ang Field',
    'LBL_SELECT_FILE' => 'Pilia ang File',
    'LBL_MODULE_TITLE' => 'Studyo',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM mga Field (Pindota para ma add sa stagging areaja)',
    'LBL_VIEW_SUITE_FIELDS' => 'Tan aw SuiteCRM mga Field',
    'LBL_FAILED_TO_SAVE' => 'Pakyad na maluwas',
    'LBL_CONFIRM_UNSAVE' => 'Uban na mausab na muadto dili ma saved. Sigurado kaha ka nga ganahan ka mo sunod gehapon?',
    'LBL_PUBLISHING' => 'Gepublish...',
    'LBL_PUBLISHED' => 'Punlished',
    'LBL_FAILED_PUBLISHED' => 'Na tagak sa Publsih',
    'LBL_DROP_HERE' => '[Ihulog Diri]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Pangalan',
    'LBL_LABEL' => 'Label',
    'LBL_MASS_UPDATE' => 'Mass update',
    'LBL_DEFAULT_VALUE' => 'Default nga Balyo',
    'LBL_REQUIRED' => 'Kinahanglan',
    'LBL_DATA_TYPE' => 'Isulat',


    'LBL_HISTORY' => 'Kasaysayan',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Welcome sa studyo!</h2><br>Unsaman imong gusto karun adlawa?<br><b>Palihug kog pili sa form ang options sa ubos.</b>',
    'LBL_SW_EDIT_MODULE' => 'Editon ang Module',
    'LBL_SW_EDIT_DROPDOWNS' => 'Editon ang nahulog paubos',
    'LBL_SW_EDIT_TABS' => 'Konfigure mga Tab',
    'LBL_SW_RENAME_TABS' => 'Alisdan og panganalan ang mga Tan',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigure sa gropu mga Tab',
    'LBL_SW_EDIT_PORTAL' => 'Editon ang Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Ayohon ang Kustom Fields',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Nagpa-usab og Kustom mga Field',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Mag buhat og javascript bersyon sa linguhe sa mga file',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Tangtangon ang javascript bersyon sa linguahe nga mga file, dapat mag usab kay gamit kaayo.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Tangtangon',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Buhat og na hagbong nagpaubos',
    'LBL_DROPDOWN_NAME' => 'Ipaubos ang pangalan:',
    'LBL_DROPDOWN_LANGUAGE' => 'Nahulog na nagpaubos og Linguahe:',
    'LBL_TABGROUP_LANGUAGE' => 'Lingwahe:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Display ang Balyo',
    'LBL_DD_DATABASEVALUE' => 'Database nga Balyo',
    'LBL_DD_ALL' => 'Tanan',

//BUTTONS
    'LBL_BTN_SAVE' => 'I-save',
    'LBL_BTN_CANCEL' => 'Kanselahon',
    'LBL_BTN_SAVEPUBLISH' => 'I-save og tubag',
    'LBL_BTN_HISTORY' => 'Kasaysayan',
    'LBL_BTN_ADDROWS' => 'Dugangan og Rows',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dugangan Kustom Field',
    'LBL_BTN_TABINDEX' => 'Editon ang Tabbing Orderon',

//TABS
    'LBL_MODULES' => 'Mga Module',
    'LBL_MODULE_NAME' => 'Mga Admin',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configure Module Menu Filteran',
    'LBL_GROUP_TAB_WELCOME' => 'Ang filters sa ubos na ge displayed og sa dghang listahan sa module menu para manggagamit og gamiton para ma tan aw ang grupo sa modules sama sa menu. Guroya og i-hulog ang modules og gikan sa pilter. Nota: Way sulod na mga pilters kay dili ma displayed sa menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Pislita sa bisag unsang tab Display Balyo sa alisdan nga pangalan og tab.',
    'LBL_DELETE_MODULE' => 'Tangtanga &nbsp;module<br />gikan&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Pilia ang naay Available linguahe, editon ang gropu mga label og pislita ang Save & Larga para maka aply ang Labels sa ge pilian nga linguahe.',
    'LBL_ADD_GROUP' => 'Dugangan og Pilter',
    'LBL_NEW_GROUP' => 'Bag-ong Groupo',
    'LBL_RENAME_TABS' => 'Alisdan og Pangalan sa Modules',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Mali: Inbalid ang Key Balyou",

//SUGAR PORTAL
    'LBL_SAVE' => 'I-save' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Undo' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Redo' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Naas linya' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tangtangon' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Dugangan ug Lugar' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Pagamayon' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Pagamayon' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Imantala' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Dugangan og Rows' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Dugangan ug Lugar' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Usba' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Pilia ang linguahe para ma edit.',
    'LBL_SINGULAR' => 'Gamay ra na Label',
    'LBL_PLURAL' => 'Dghan na Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Pislita <b>Luwas</b> mka apply nga na bag-o.'

);
