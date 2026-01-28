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
    'LBL_EDIT_LAYOUT' => 'Bewerk lay-out',
    'LBL_EDIT_FIELDS' => 'Bewerkt Customized velden',
    'LBL_SELECT_FILE' => 'Selecteer bestand',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Gereedschapskist',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (klik items om aan te maken op staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'Overzicht SuiteCRM veldem',
    'LBL_FAILED_TO_SAVE' => 'Opslaan is mislukt',
    'LBL_CONFIRM_UNSAVE' => 'Alle veranderingen worden niet opgeslagen Weet u zeter dat u door wilt gaan?',
    'LBL_PUBLISHING' => 'Bezig met publiceren ...',
    'LBL_PUBLISHED' => 'Gepubliceerd',
    'LBL_FAILED_PUBLISHED' => 'Publiceren is mislukt',
    'LBL_DROP_HERE' => '[Sleep hier]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Naam',
    'LBL_LABEL' => 'Omschrijving',
    'LBL_MASS_UPDATE' => 'Massa update',
    'LBL_DEFAULT_VALUE' => 'Standaardwaarde',
    'LBL_REQUIRED' => 'Verplicht',
    'LBL_DATA_TYPE' => 'Type',


    'LBL_HISTORY' => 'Geschiedenis',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Welkom bij Studio!</h2><br> Wat wilt u doen vandaag?<br><b> Selecteer een optie hier beneden.</b>',
    'LBL_SW_EDIT_MODULE' => 'Bewerk een module',
    'LBL_SW_EDIT_DROPDOWNS' => 'bewerk drop-downs',
    'LBL_SW_EDIT_TABS' => 'Configureer Ttabs',
    'LBL_SW_RENAME_TABS' => 'Herbenoem tabs',
    'LBL_SW_EDIT_GROUPTABS' => 'Instellingen Ggroep Tabs',
    'LBL_SW_EDIT_PORTAL' => 'Bewerk portaal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Repareer customized velden',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migreer Zelfgemaakte Velden',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Herbouwen javascript versies van de taal bestanden',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Verwijderen van javascript versies van taalbestanden. Deze zullen herbouwd worden indien nodig.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Verwijder',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Aanmaken drop-down',
    'LBL_DROPDOWN_NAME' => 'Drop-down naam:',
    'LBL_DROPDOWN_LANGUAGE' => 'Drop-down taal:',
    'LBL_TABGROUP_LANGUAGE' => 'Taal:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Laat waarde zien',
    'LBL_DD_DATABASEVALUE' => 'Database waarde',
    'LBL_DD_ALL' => 'Alles',

//BUTTONS
    'LBL_BTN_SAVE' => 'Opslaan',
    'LBL_BTN_CANCEL' => 'Annuleren',
    'LBL_BTN_SAVEPUBLISH' => 'Opslaan & Implementeren (Deploy)',
    'LBL_BTN_HISTORY' => 'Geschiedenis',
    'LBL_BTN_ADDROWS' => 'Rijen Toevoegen',
    'LBL_BTN_UNDO' => 'Ongedaan maken',
    'LBL_BTN_REDO' => 'Opnieuw doen',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Eigen veld Toevoegen',
    'LBL_BTN_TABINDEX' => 'Bewerken tab volgorde',

//TABS
    'LBL_MODULES' => 'Modulen',
    'LBL_MODULE_NAME' => 'Beheer',
    'LBL_CONFIGURE_GROUP_TABS' => 'Instellen module menu filters',
    'LBL_GROUP_TAB_WELCOME' => 'De filters hieronder zullen te zien zijn in de Meer lijst in het module menu voor gebruikers, tevens voor een overzicht voor groepen modulen in de menu structuur. Sleep en zet neer de modulen van de filters. Opmerking: Lege filters zullen niet getoont worden in het menu',
    'LBL_RENAME_TAB_WELCOME' => 'Klik op een tab\'s Toon de waarde in de tabel hier beneden om de tab te hernoemen.',
    'LBL_DELETE_MODULE' => 'Verwijder&nbsp;module<br />van&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecteer een beschikbare taal, bewerk de groep labels en klik Opslaan & Toepassen om de veranderingen door te voeren in de geselecteerde taal.',
    'LBL_ADD_GROUP' => 'Aanmaken filter',
    'LBL_NEW_GROUP' => 'Nieuw Groep',
    'LBL_RENAME_TABS' => 'Hernoem Tabs',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Fout: Ongeldige sleutel Waarde: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Opslaan' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Ongedaan maken' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Opnieuw doen' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inlijn' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Verwijder' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Veld toevoegen' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximaliseren' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimaliseren' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'publiceer' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Rijen Toevoegen' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Veld toevoegen' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Bewerken' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Selecteer de taal om te bewerken.',
    'LBL_SINGULAR' => 'Enkelvoud label',
    'LBL_PLURAL' => 'Meervoud label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Klik <b>Opslaan</b> om de wijzigingen door te voeren.'

);
