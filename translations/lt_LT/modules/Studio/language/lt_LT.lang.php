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
    'LBL_EDIT_LAYOUT' => 'Redaguoti išdėstymą',
    'LBL_EDIT_FIELDS' => 'Redaguoti nestandartinius laukus',
    'LBL_SELECT_FILE' => 'Pasirinkti failą',
    'LBL_MODULE_TITLE' => 'Studija',
    'LBL_TOOLBOX' => 'Įrankių dėžė',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Nepavyko išsaugoti',
    'LBL_CONFIRM_UNSAVE' => 'Bet koks pakeitimai bus neišsaugoti. Ar tikrai norite tęsti?',
    'LBL_PUBLISHING' => 'Skelbiama ...',
    'LBL_PUBLISHED' => 'Paskelbtas',
    'LBL_FAILED_PUBLISHED' => 'Nepavyko paskelbti',
    'LBL_DROP_HERE' => '[Mesti čia]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Vardas',
    'LBL_LABEL' => 'Etiketė',
    'LBL_MASS_UPDATE' => 'Masinis atnaujinimas',
    'LBL_DEFAULT_VALUE' => 'Numatyta reikšmė',
    'LBL_REQUIRED' => 'Reikiamas',
    'LBL_DATA_TYPE' => 'Tipas:',


    'LBL_HISTORY' => 'Istorija',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Sveiki!</h2><br> Ką norėtumėte daryti šiandien?<br><b> Prašome pasirinkti.</b>',
    'LBL_SW_EDIT_MODULE' => 'Redaguoti modulį',
    'LBL_SW_EDIT_DROPDOWNS' => 'Redaguoti iššokančius sąrašus',
    'LBL_SW_EDIT_TABS' => 'Konfigūruoti korteles',
    'LBL_SW_RENAME_TABS' => 'Pervadinti korteles',
    'LBL_SW_EDIT_GROUPTABS' => 'Nustatyti grupės korteles',
    'LBL_SW_EDIT_PORTAL' => 'Redaguoti portalą',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Taisyti nestandartinį lauką',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Perkelti nestandartinius laukus',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Atstatyti javascript kalbų failus',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Pašalinamos javascript kalbų failai, bus atstatyta, kai prireiks.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Ištrinti',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Sukurti iššokantį sąrašą',
    'LBL_DROPDOWN_NAME' => 'Iššokančio sąrašo pavadinimas:',
    'LBL_DROPDOWN_LANGUAGE' => 'Iššokančio sąrašo kalba:',
    'LBL_TABGROUP_LANGUAGE' => 'Kalba:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Rodyti reikšmę',
    'LBL_DD_DATABASEVALUE' => 'Duomenų bazės reikšmė',
    'LBL_DD_ALL' => 'Visi susiję',

//BUTTONS
    'LBL_BTN_SAVE' => 'Saugoti',
    'LBL_BTN_CANCEL' => 'Atšaukti',
    'LBL_BTN_SAVEPUBLISH' => 'Saugoti ir išdėstyti',
    'LBL_BTN_HISTORY' => 'Istorija',
    'LBL_BTN_ADDROWS' => 'Pridėti eilutes',
    'LBL_BTN_UNDO' => 'Atstatyti',
    'LBL_BTN_REDO' => 'Sutaisyti',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Pridėti nestandartinį lauką',
    'LBL_BTN_TABINDEX' => 'Redaguoti tabuliatorius seką',

//TABS
    'LBL_MODULES' => 'Moduliai:',
    'LBL_MODULE_NAME' => 'Administravimas',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigūruoti grupių korteles',
    'LBL_GROUP_TAB_WELCOME' => 'Grupės kortelės išdėstymas bus naudojamas, kai vartotojas pasirinks grupės kortelę vietoj nuolatinio modulio kortelės esantį Mano klientai.',
    'LBL_RENAME_TAB_WELCOME' => 'Kad pervadinti, paspauskite ant kortelės rodomos reikšmės.',
    'LBL_DELETE_MODULE' => 'Ištrinti modulį<br />iš&nbsp;grupės',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Paspauskite Saugoti ir išdėstyti norėdami priskirti Grupių pavadinimus pasirinktai kalbai.',
    'LBL_ADD_GROUP' => 'Pridėti filtrą',
    'LBL_NEW_GROUP' => 'Nauja grupė',
    'LBL_RENAME_TABS' => 'Pervadinti korteles',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Klaida: Neteisinga rakto reikšmė: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Saugoti' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Atstatyti' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Sutaisyti' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Pagal' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ištrinti' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Pridėti lauką' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Padidinti' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Sumažinti' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Paskelbti' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Pridėti eilutes' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Pridėti lauką' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Redaguoti' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Pasirinkite kalbą redaguoti.',
    'LBL_SINGULAR' => 'Vienaskaitos žymė',
    'LBL_PLURAL' => 'Daugiskaitos žymė',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Spustelėkite <b>įrašyti</b> taikyti pakeitimus.'

);
