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
    'LBL_EDIT_LAYOUT' => 'Muuda paigutust',
    'LBL_EDIT_FIELDS' => 'Redigeeri kohaldatud välju',
    'LBL_SELECT_FILE' => 'Vali fail',
    'LBL_MODULE_TITLE' => 'Stuudio',
    'LBL_TOOLBOX' => 'Tööriistakast',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'Vaata SuiteCRM-i välju',
    'LBL_FAILED_TO_SAVE' => 'Salvestamine ebaõnnestus',
    'LBL_CONFIRM_UNSAVE' => 'Muudatusi ei salvestata. Kas oled kindel, et soovid jätkata?',
    'LBL_PUBLISHING' => 'Avaldamine...',
    'LBL_PUBLISHED' => 'Avaldatud',
    'LBL_FAILED_PUBLISHED' => 'Avaldamine ebaõnnestus',
    'LBL_DROP_HERE' => '[Aseta siia]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nimi',
    'LBL_LABEL' => 'Märgistus',
    'LBL_MASS_UPDATE' => 'Üldine ajakohastamine',
    'LBL_DEFAULT_VALUE' => 'Vaikeväärtus',
    'LBL_REQUIRED' => 'Kohustuslik',
    'LBL_DATA_TYPE' => 'Tüüp:',


    'LBL_HISTORY' => 'Ajalugu',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => 'Teretulemast Studiosse!<br /><br />Mida sa tahaksid täna teha?<br />Palun tee valik allolevast.',
    'LBL_SW_EDIT_MODULE' => 'Redigeeri moodulit',
    'LBL_SW_EDIT_DROPDOWNS' => 'Redigeeri rippmenüüsid',
    'LBL_SW_EDIT_TABS' => 'Konfigureeri sakid',
    'LBL_SW_RENAME_TABS' => 'Ümbernimeta sakid',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigureeri grupi sakid',
    'LBL_SW_EDIT_PORTAL' => 'Muuda portaali',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Paranda kohandatud väljad',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrate Custom Fields',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Rebuilds javascript versions of language files',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Removing javascript versions of language files, will rebuild when needed.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Kustuta',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Loo rippmenuu',
    'LBL_DROPDOWN_NAME' => 'Rippmenüü nimi:',
    'LBL_DROPDOWN_LANGUAGE' => 'Rippmenüü keel:',
    'LBL_TABGROUP_LANGUAGE' => 'Keel:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Kuva väärtus',
    'LBL_DD_DATABASEVALUE' => 'Andmebaasi väärtus',
    'LBL_DD_ALL' => 'Kõik',

//BUTTONS
    'LBL_BTN_SAVE' => 'Salvesta',
    'LBL_BTN_CANCEL' => 'Tühista',
    'LBL_BTN_SAVEPUBLISH' => 'Salvesta ja paigalda',
    'LBL_BTN_HISTORY' => 'Ajalugu',
    'LBL_BTN_ADDROWS' => 'Lisa ridu',
    'LBL_BTN_UNDO' => 'Tagasi',
    'LBL_BTN_REDO' => 'Tee ümber',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Lisa kohandatud väli',
    'LBL_BTN_TABINDEX' => 'Edit Tabbing Order',

//TABS
    'LBL_MODULES' => 'Moodulid',
    'LBL_MODULE_NAME' => 'Administreerimine',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigureeri grupeeritud moodulid',
    'LBL_GROUP_TAB_WELCOME' => 'The filters below will be displayed in the More list in the module menu for users to use to view groups of modules within the menu. Drag and drop modules to and from the filters. Note: Empty filters will not be displayed in the menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Click on any tab\'s Display Value in the table below to rename the tab.',
    'LBL_DELETE_MODULE' => 'Eemalda&nbsp;moodul<br />Grupist',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Select an available language, edit the Group labels and click Save & Deploy to apply the labels in the selected language.',
    'LBL_ADD_GROUP' => 'Lisa filter',
    'LBL_NEW_GROUP' => 'Uus grupp',
    'LBL_RENAME_TABS' => 'Nimeta sakid ümber',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Viga: Kehtetu võtmeväärtus: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Salvesta' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Tagasi' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Tee ümber' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Tekstisisene' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Kustuta' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Lisa väli' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maksimeeri' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimeeri' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Yayınla' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Lisa ridu' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Lisa väli' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Redigeeri' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Vali keel, mida muuta.',
    'LBL_SINGULAR' => 'Ainsuse silt',
    'LBL_PLURAL' => 'Mitmuse silt',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Muudatuste rakendamiseks kliki <b>Salvesta</b>.'

);
