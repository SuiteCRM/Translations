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
    'LBL_EDIT_LAYOUT' => 'Baguhin ang layout',
    'LBL_EDIT_FIELDS' => 'Baguhin ang kustom na field',
    'LBL_SELECT_FILE' => 'Pumili ng file',
    'LBL_MODULE_TITLE' => 'Ang studyo',
    'LBL_TOOLBOX' => 'Ang kahon ng mga gamit',
    'LBL_SUITE_FIELDS_STAGE' => 'Ang mga field ng SuiteCRM (i-klik ang mga aytem para makapagdagdag ng lugar)',
    'LBL_VIEW_SUITE_FIELDS' => 'Tingnan ang mga Field ng SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Nabigong i-save',
    'LBL_CONFIRM_UNSAVE' => 'Kahit anong pagbabagi ay pupunta sa unsave. Sigurado ka bang na gusto mong magpatuloy?',
    'LBL_PUBLISHING' => 'Ipinapalabas...',
    'LBL_PUBLISHED' => 'Napalabas',
    'LBL_FAILED_PUBLISHED' => 'Nabigong i-publish',
    'LBL_DROP_HERE' => '[Dito i-drop]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Ang pangalan',
    'LBL_LABEL' => 'Ang label',
    'LBL_MASS_UPDATE' => 'Ang Mass ay i-Update',
    'LBL_DEFAULT_VALUE' => 'I-default ang halaga',
    'LBL_REQUIRED' => 'Kinakailangan',
    'LBL_DATA_TYPE' => 'Uri',


    'LBL_HISTORY' => 'Kasaysayan',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Welcome to Studio!</h2><br> Ano gusto mong ninais na gawin ngayun?<br><b> Mangyaring pumili mula sa ibaba ng opsyon',
    'LBL_SW_EDIT_MODULE' => 'I-edit ang modyul',
    'LBL_SW_EDIT_DROPDOWNS' => 'I-edit ang mga Drop down',
    'LBL_SW_EDIT_TABS' => 'I-configure ang mga tab',
    'LBL_SW_RENAME_TABS' => 'Palitan ng mga pangalan ang tab',
    'LBL_SW_EDIT_GROUPTABS' => 'I-configure ang mga grupong tab',
    'LBL_SW_EDIT_PORTAL' => 'I-edit ang portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Ipasaayos ang mga pasadyang patlang',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Lumipat ang mga pasadyang patlang',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Nagre-rebuild ng mga bersyon ng javascript sa mga language file',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Nagtatanggal ng mga bersyon ng javascript sa mga langauge file, muling magre-rebuild kung kinakailangan.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Tanggalin',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Lumikha ng Drop Down',
    'LBL_DROPDOWN_NAME' => 'Pangalan ng dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'Linggwaheng dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'Linggwahe:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'I-display ang halaga',
    'LBL_DD_DATABASEVALUE' => 'Halaga ng databese',
    'LBL_DD_ALL' => 'Lahat',

//BUTTONS
    'LBL_BTN_SAVE' => 'I-seyb',
    'LBL_BTN_CANCEL' => 'Kanselahin',
    'LBL_BTN_SAVEPUBLISH' => 'I-save at i-deploy',
    'LBL_BTN_HISTORY' => 'Kasaysayan',
    'LBL_BTN_ADDROWS' => 'Magdagdag ng mga hilera',
    'LBL_BTN_UNDO' => 'Magbalik sa dati',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Magdagdag ng pasadyang patlang',
    'LBL_BTN_TABINDEX' => 'I-edit ang pagtatab order',

//TABS
    'LBL_MODULES' => 'Mga modyul',
    'LBL_MODULE_NAME' => 'Ang pangangasiwa',
    'LBL_CONFIGURE_GROUP_TABS' => 'I-kumpigura ang modyul ng talaan ng modyul',
    'LBL_GROUP_TAB_WELCOME' => 'Ang mga filter sa ibaba na naka-displey sa lisahan ng iba pa sa modyul na pagpipilian para sa mga gumagamit upang gamitin para tingnan ang mga grupong modyul nakapaloob ng pagpipilian. I-drsg at i-drop ang mga modyul sa at mula sa mga fikter. Tandaan: Walng lamang filter ay hindi maaring mag-disply sa pagpipilian.',
    'LBL_RENAME_TAB_WELCOME' => 'Pindutin ang kahit anong mga tan na Display Value sa ibaba ng talaan upang palitan ng pangalan ang tab.',
    'LBL_DELETE_MODULE' => 'I-remove&nbsp;modyul<br />mula sa&nbsp;,filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Pumili ng magagamit ng linggwahe, i-dit ang mga grupong label at pindutin ang Save at Deploy upang maglagay ng mga kabel sa mga napiling linggwahe.',
    'LBL_ADD_GROUP' => 'Magdagdag ng filter',
    'LBL_NEW_GROUP' => 'Bagong grupo',
    'LBL_RENAME_TABS' => 'Palitan ng pangalan ang mga modyul',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "May mali: Hindi balido ang halaga ng susi:[']",

//SUGAR PORTAL
    'LBL_SAVE' => 'I-seyb' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Magbalik sa dati' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Redo' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Tanggalin' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Magdagdag ng patlang' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'I-maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'I-minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'I-publish' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Magdagdag ng mga hilera' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Magdagdag ng patlang' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'I-edit' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Pumili ng linggwahe upang i-edit.',
    'LBL_SINGULAR' => 'Nag-iisang label',
    'LBL_PLURAL' => 'Maramihang label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Pindutin anh <b>Save</b> upang maglagay ng pagbabago.'

);
