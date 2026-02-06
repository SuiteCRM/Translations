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
    'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu',
    'LBL_EDIT_FIELDS' => 'Rediģēt pielāgotos laukus',
    'LBL_SELECT_FILE' => 'Izvēlēties failu [Alt+F]',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Rīkjosla',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM lauki (klikšķiniet uz vienumiem, lai pievienotu sākuma zonai)',
    'LBL_VIEW_SUITE_FIELDS' => 'Skatīt SuiteCRM laukus',
    'LBL_FAILED_TO_SAVE' => 'Neizdevās saglabāt',
    'LBL_CONFIRM_UNSAVE' => 'Izmaiņas netiks saglabātas. Vai tiešām vēlaties turpināt?',
    'LBL_PUBLISHING' => 'Publicē...',
    'LBL_PUBLISHED' => 'Nopublicēts',
    'LBL_FAILED_PUBLISHED' => 'Neizdevās nopublicēt',
    'LBL_DROP_HERE' => '[Nomest šeit]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Vārds:',
    'LBL_LABEL' => 'Etiķete',
    'LBL_MASS_UPDATE' => 'Masveida izmaiņas',
    'LBL_DEFAULT_VALUE' => 'Noklusētā vērtība',
    'LBL_REQUIRED' => 'Obligāts',
    'LBL_DATA_TYPE' => 'Tips:',


    'LBL_HISTORY' => 'Vēsture',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Esiet sveicināti Studio!</h2><br> Ko jūs šodien vēlaties darīt?<br><b> Lūdzu izvēlaties iespējas zemāk.</b>',
    'LBL_SW_EDIT_MODULE' => 'Rediģēt moduli',
    'LBL_SW_EDIT_DROPDOWNS' => 'Rediģēt izkrītošās izvēlnes',
    'LBL_SW_EDIT_TABS' => 'Konfigurēt cilnes',
    'LBL_SW_RENAME_TABS' => 'Pārsaukt cilnes',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurēt grupu cilnes',
    'LBL_SW_EDIT_PORTAL' => 'Rediģēt portālu',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Salabot pielāgotos laukus',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrēt pielāgotos laukus',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Pārbūvē javascript versijas no valodas failiem',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Noņem javascript versijas no no valodas failiem, kas tiks izveidotas pēc vajadzības.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Dzēsts',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Izveidot nolaižamo izvēlni',
    'LBL_DROPDOWN_NAME' => 'Dropdown nosaukums:',
    'LBL_DROPDOWN_LANGUAGE' => 'Valoda:',
    'LBL_TABGROUP_LANGUAGE' => 'Valoda:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Attēlojuma vērtība',
    'LBL_DD_DATABASEVALUE' => 'Datubāzes vērtība',
    'LBL_DD_ALL' => 'Visus',

//BUTTONS
    'LBL_BTN_SAVE' => 'Pabeigt',
    'LBL_BTN_CANCEL' => 'Atcelt',
    'LBL_BTN_SAVEPUBLISH' => 'Saglabāt un izvietot',
    'LBL_BTN_HISTORY' => 'Vēsture',
    'LBL_BTN_ADDROWS' => 'Pievienot rindas',
    'LBL_BTN_UNDO' => 'Atsaukt',
    'LBL_BTN_REDO' => 'Atatsaukt',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Pievienot pielāgotu lauku',
    'LBL_BTN_TABINDEX' => 'Tabulēšanas secības rediģēšana',

//TABS
    'LBL_MODULES' => 'Moduļi:',
    'LBL_MODULE_NAME' => 'Administrēšana',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurēt grupētos moduļus',
    'LBL_GROUP_TAB_WELCOME' => 'Zemāk esošās grupas tiks attēlotas navigācijas joslā lietotājiem, kuri izvēlēsies aplūkot Grupētos moduļus. Velc un nomet moduļus uz un no grupām, lai konfigurētu, kuri moduļi parādīsies grupās. Piezīme: Tukšas grupas navigācijas joslā netiks parādītas.',
    'LBL_RENAME_TAB_WELCOME' => 'Lai pārsauktu cilni, spiediet uz jebkura Attēlot vērtību.',
    'LBL_DELETE_MODULE' => 'Izņemt&nbsp;moduli<br />no&nbsp;grupas',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Izvēlieties pieejamo valodu, rediģējiet grupu nosaukumus un spiediet "Saglabāt & Izvietot", lai nosaukumi parādītos izvēlētajā  valodā.',
    'LBL_ADD_GROUP' => 'Pievienot filtru',
    'LBL_NEW_GROUP' => 'Jauna grupa',
    'LBL_RENAME_TABS' => 'Pārsaukt moduļus',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Kļūda: Nederīga atslēgas vērtība: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Pabeigt' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Atsaukt' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Atatsaukt' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Iekļauts' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Dzēsts' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Pievienot lauku' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maksimizēt' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizēt' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publicēt' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Pievienot rindas' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Pievienot lauku' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Rediģēt' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Norādiet rediģējamo valodu',
    'LBL_SINGULAR' => 'Viendabīga etiķete',
    'LBL_PLURAL' => 'Daudzveidīga etiķete',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Spiediet <b>Saglabāt</b>, lai apstiprinātu izmaiņas.'

);
