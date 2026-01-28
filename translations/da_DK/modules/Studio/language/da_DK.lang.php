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
    'LBL_EDIT_LAYOUT' => 'Rediger layout',
    'LBL_EDIT_FIELDS' => 'Rediger brugerdefinerede felter',
    'LBL_SELECT_FILE' => 'Vælg fil',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Værktøjskasse',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Det lykkedes ikke at gemme',
    'LBL_CONFIRM_UNSAVE' => 'Eventuelle ændringer gemmes ikke. Er du sikker på, at du vil fortsætte?',
    'LBL_PUBLISHING' => 'Udgiver ...',
    'LBL_PUBLISHED' => 'Udgivet',
    'LBL_FAILED_PUBLISHED' => 'Det lykkedes ikke at udgive',
    'LBL_DROP_HERE' => '[Slip her]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Navn',
    'LBL_LABEL' => 'Label',
    'LBL_MASS_UPDATE' => 'Masse opdatering',
    'LBL_DEFAULT_VALUE' => 'Standardværdi',
    'LBL_REQUIRED' => 'Obligatorisk',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Historik',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Velkommen til Studio!</h2><br> Hvad vil du gøre i dag?<br><b> Vælg blandt indstillingerne nedenfor.</b>',
    'LBL_SW_EDIT_MODULE' => 'Rediger et modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Rediger rullelister',
    'LBL_SW_EDIT_TABS' => 'Konfigurer faner',
    'LBL_SW_RENAME_TABS' => 'Omdøb faner',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurer gruppefaner',
    'LBL_SW_EDIT_PORTAL' => 'Rediger portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Reparer brugerdefinerede felter',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Overflyt brugerdefinerede felter',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Gendanner javascript-versioner af sprogfiler',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Fjerner javascript-versioner af sprogfiler og gendanner efter behov.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Slet',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Opret en rulleliste',
    'LBL_DROPDOWN_NAME' => 'Rullelistenavn:',
    'LBL_DROPDOWN_LANGUAGE' => 'Rullelistesprog:',
    'LBL_TABGROUP_LANGUAGE' => 'Sprog:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Vis værdi',
    'LBL_DD_DATABASEVALUE' => 'Databaseværdi',
    'LBL_DD_ALL' => 'Alle',

//BUTTONS
    'LBL_BTN_SAVE' => 'Gem',
    'LBL_BTN_CANCEL' => 'Afbryd',
    'LBL_BTN_SAVEPUBLISH' => 'Gem og installer',
    'LBL_BTN_HISTORY' => 'Historik',
    'LBL_BTN_ADDROWS' => 'Tilføj rækker',
    'LBL_BTN_UNDO' => 'Fortryd',
    'LBL_BTN_REDO' => 'Annuller fortryd',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Tilføj brugerdefineret felt',
    'LBL_BTN_TABINDEX' => 'Rediger fanerækkefølge',

//TABS
    'LBL_MODULES' => 'Moduler',
    'LBL_MODULE_NAME' => 'Administration',
    'LBL_CONFIGURE_GROUP_TABS' => 'Configure Module Menu Filters',
    'LBL_GROUP_TAB_WELCOME' => 'Fanerne og de grupperede faner nedenfor vises for de brugere, der vælger at få vist grupperede moduler på navigationslinjen. Træk og slip moduler til og fra fanefelterne for at konfigurere, hvilke underfaner der skal vises under hvilke faner. Tomme fanegrupper vises ikke på navigationslinjen.',
    'LBL_RENAME_TAB_WELCOME' => 'Klik på en fanes Vis værdi i tabellen nedenfor for at omdøbe fanen.',
    'LBL_DELETE_MODULE' => 'Fjern modul<br />fra gruppe',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Hvis du vil angive fanegruppeetiketterne på andre tilgængelige sprog, skal du vælge et sprog, redigere etiketterne og klikke på Gem og installer for at foretage ændringerne på det pågældende sprog.',
    'LBL_ADD_GROUP' => 'Tilføj filter',
    'LBL_NEW_GROUP' => 'Ny gruppe',
    'LBL_RENAME_TABS' => 'Rename Tabs',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Fejl: Ugyldig nøgleværdi: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Gem' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Fortryd' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Annuller fortryd' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Slet' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Tilføj felt' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Udgiv' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Tilføj rækker' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Tilføj felt' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Rediger' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
