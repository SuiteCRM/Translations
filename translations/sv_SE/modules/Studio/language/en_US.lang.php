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
    'LBL_EDIT_LAYOUT' => 'Redigera layout',
    'LBL_EDIT_FIELDS' => 'Redigera anpassade fält',
    'LBL_SELECT_FILE' => 'Välj Fil',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Verktygsbox',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'Visa SuiteCRM-fält',
    'LBL_FAILED_TO_SAVE' => 'Misslyckades med att spara',
    'LBL_CONFIRM_UNSAVE' => 'Förändringar kommer inte sparas. Är du säker på att du vill fortsätta?',
    'LBL_PUBLISHING' => 'Publisera ...',
    'LBL_PUBLISHED' => 'Publiserad',
    'LBL_FAILED_PUBLISHED' => 'Misslyckades med Publisering',
    'LBL_DROP_HERE' => '[Släpp Här]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Namn',
    'LBL_LABEL' => 'Etikett',
    'LBL_MASS_UPDATE' => 'Mass Uppdatering',
    'LBL_DEFAULT_VALUE' => 'Standardvärde',
    'LBL_REQUIRED' => 'Obligatoriskt',
    'LBL_DATA_TYPE' => 'Typ',


    'LBL_HISTORY' => 'Historia',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Välkommen till Studio!</h2><br> Wad skulle du vlija göra idag?<br><b> Vänligen välj från valen nedanför.</b>',
    'LBL_SW_EDIT_MODULE' => 'Ändra en Modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Ändra Rullgardins menyer',
    'LBL_SW_EDIT_TABS' => 'Konfigurera Flikar',
    'LBL_SW_RENAME_TABS' => 'Döpa om Flikar',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurera Flikgrupperingar',
    'LBL_SW_EDIT_PORTAL' => 'Ändra Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Reparera Egna Fält',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Överför egna fält',

//Manager Backups History
    'LBL_MB_DELETE' => 'Radera',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Skapa en Rullgardins meny',
    'LBL_DROPDOWN_NAME' => 'Rullgardins Namn:',
    'LBL_DROPDOWN_LANGUAGE' => 'Rullgardins Språk:',
    'LBL_TABGROUP_LANGUAGE' => 'Språk:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Visa Värden',
    'LBL_DD_DATABASEVALUE' => 'Database Värden',
    'LBL_DD_ALL' => 'Alla',

//BUTTONS
    'LBL_BTN_SAVE' => 'Spara',
    'LBL_BTN_CANCEL' => 'Ångra',
    'LBL_BTN_SAVEPUBLISH' => 'Spara & Publisera',
    'LBL_BTN_HISTORY' => 'Historia',
    'LBL_BTN_ADDROWS' => 'Lägg till Rader',
    'LBL_BTN_UNDO' => 'Ångra',
    'LBL_BTN_REDO' => 'Göra om Ångra',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Lägg till Egna Fält',
    'LBL_BTN_TABINDEX' => 'Ändra Flik Edit Tabbing Ordning',

//TABS
    'LBL_MODULES' => 'Modul',
    'LBL_MODULE_NAME' => 'Administrering',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurera gruppflikar',
    'LBL_GROUP_TAB_WELCOME' => 'Gruppfliks layouten nedan kommer att användas när en användare väljer att använda gruppflikar istället för vanliga modulflikar i Mitt Konto>Layout Val.',
    'LBL_RENAME_TAB_WELCOME' => 'Klicka på en flik Visa Värde i tabellen nedan för att döpa om fliken.',
    'LBL_DELETE_MODULE' => 'Ta bort&nbsp;modul<br />från&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Välj ett tillgängligt språk, ändra grupp labels och klicka på "Spara & distribuera" för att lägga till labels i valt språk.',
    'LBL_ADD_GROUP' => 'Lägg till filter',
    'LBL_NEW_GROUP' => 'Ny Grupp',
    'LBL_RENAME_TABS' => 'Döp om flikar',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Error: Ogiltigt nyckel värde: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Spara' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Ångra' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Göra om Ångra' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Radera' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Lägg till Fält' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximera' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimera' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'publicera' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Lägg till Rader' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Lägg till Fält' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Redigera' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Välj språket du vill redigera.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural-etikett',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
