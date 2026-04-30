<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_EDIT_LAYOUT' => 'Edit Layout',
    'LBL_EDIT_FIELDS' => 'Egyéni mezők szerkesztése',
    'LBL_SELECT_FILE' => 'Select File',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_SUITE_FIELDS_STAGE' => 'CRM mezők (kattintson az elemek hozzáadása az átmeneti területhez)',
    'LBL_VIEW_SUITE_FIELDS' => 'CRM mezők megtekintése',
    'LBL_FAILED_TO_SAVE' => 'Failed To Save',
    'LBL_CONFIRM_UNSAVE' => 'Egyes módosítások nem lettek elmentve. Biztos tovább akar menni?',
    'LBL_PUBLISHING' => 'Közzététel...',
    'LBL_PUBLISHED' => 'Published',
    'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
    'LBL_DROP_HERE' => '[Drop Here]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Név',
    'LBL_LABEL' => 'Label',
    'LBL_MASS_UPDATE' => 'Mass Update',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_REQUIRED' => 'Required',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Előzmények',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => 'Üdvözöljük a Stúdióban! Mit szeretne ma csinálni? Kérjük, válasszon az alábbi lehetőségek közül.',
    'LBL_SW_EDIT_MODULE' => 'Modul szerkesztése',
    'LBL_SW_EDIT_DROPDOWNS' => 'Legördülő lista szerkesztése',
    'LBL_SW_EDIT_TABS' => 'Fülek konfigurálása',
    'LBL_SW_RENAME_TABS' => 'Fülek átnevezése',
    'LBL_SW_EDIT_GROUPTABS' => 'Csoport fülek konfigurálása',
    'LBL_SW_EDIT_PORTAL' => 'Portál szerkesztése',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Egyéni mezők javítása',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrate Custom Fields',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Rebuilds javascript versions of language files',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Removing javascript versions of language files, will rebuild when needed.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Törlés',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Hozzon létre egy legördülő értéklistát',
    'LBL_DROPDOWN_NAME' => 'Legördülő neve:',
    'LBL_DROPDOWN_LANGUAGE' => 'Legördülő nyelve:',
    'LBL_TABGROUP_LANGUAGE' => 'Language:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Érték megjelnítése',
    'LBL_DD_DATABASEVALUE' => 'Adatbázis érték',
    'LBL_DD_ALL' => 'All',

//BUTTONS
    'LBL_BTN_SAVE' => 'Save',
    'LBL_BTN_CANCEL' => 'Cancel',
    'LBL_BTN_SAVEPUBLISH' => 'Save & Deploy',
    'LBL_BTN_HISTORY' => 'Előzmények',
    'LBL_BTN_ADDROWS' => 'Add Rows',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Add Custom Field',
    'LBL_BTN_TABINDEX' => 'Fülek sorrendszerkesztője',

//TABS
    'LBL_MODULES' => 'Modules',
    'LBL_MODULE_NAME' => 'Administration',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configure Module Menu Filters',
    'LBL_GROUP_TAB_WELCOME' => 'Azon felhasználók számára lesz látható a csoportos nézet a navigációs sávban, akik a Csoportos Modulok nézetet választják ki. A Fogd és Vidd modulok segítségével lehet konfigurálni, mely modulok mely csoportokban jelennek meg. Megjegyzés: Az üres csoportok nem jelennek meg a navigációs sávban.',
    'LBL_RENAME_TAB_WELCOME' => 'Kattintson a táblában bármelyik Képernyő fülre a fül átnevezéséhez.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Válasszon egy elérhető nyelvet, módosítsa a Csoportok címkét és kattintson a Mentés és Rendezés gombra.',
    'LBL_ADD_GROUP' => 'Csoport hozzáadása',
    'LBL_NEW_GROUP' => 'Új csoport',
    'LBL_RENAME_TABS' => 'Rename Modules',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Hiba: Érvénytelen kulcs érték: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Save' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Undo' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Redo' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Sorban' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Törlés' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximalizálása' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimalizálása' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publish' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Add Rows' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Szerkesztés' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Válasszon nyelvet módosítani',
    'LBL_SINGULAR' => 'Személyi címke',
    'LBL_PLURAL' => 'Számú Címke',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Kattintson a <b>Ment</b> -re a módosítások alkalmazásához.'

);
