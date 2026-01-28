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
    'LBL_EDIT_LAYOUT' => 'Ndrysho formatin',
    'LBL_EDIT_FIELDS' => 'Ndrysho',
    'LBL_SELECT_FILE' => 'Selekto dosje',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Kutia e veglave',
    'LBL_SUITE_FIELDS_STAGE' => 'Fushat e SuiteCRM',
    'LBL_VIEW_SUITE_FIELDS' => 'Shih fushat e SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Dështoi të ruhet',
    'LBL_CONFIRM_UNSAVE' => 'Çdo ndryshim nuk do të ruhet. A jeni të sigurt që dëshironi të vazhdoni?',
    'LBL_PUBLISHING' => 'Publikim...',
    'LBL_PUBLISHED' => 'publikuar',
    'LBL_FAILED_PUBLISHED' => 'Dështoi të publikohet.',
    'LBL_DROP_HERE' => 'Hudhu këtu',

//CUSTOM FIELDS
    'LBL_NAME' => 'Emri',
    'LBL_LABEL' => 'Label',
    'LBL_MASS_UPDATE' => 'Masa e rinovuar',
    'LBL_DEFAULT_VALUE' => 'Vlerë e gabuar',
    'LBL_REQUIRED' => 'E nevojshme',
    'LBL_DATA_TYPE' => 'Lloji',


    'LBL_HISTORY' => 'Historia',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => 'Mirësivini në Studio!<br />Çfarë dëshironi të bëni sot?<br />Ju lutemi selktoni një nga opcionet e poshtme.',
    'LBL_SW_EDIT_MODULE' => 'Ndrysho një modulë',
    'LBL_SW_EDIT_DROPDOWNS' => 'Ndrysho lëshimet',
    'LBL_SW_EDIT_TABS' => 'Lidhëset e konfigurimit',
    'LBL_SW_RENAME_TABS' => 'Riemëro lidhëset',
    'LBL_SW_EDIT_GROUPTABS' => 'Lidhëset e konfigurimit të grupit',
    'LBL_SW_EDIT_PORTAL' => 'Ndrysho portalin',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Riparo fusha të rëndomta',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migro fushat e zakonshme',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Rindërtimet e versioneve javascript të dosjeve të gjuhës',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Heqja e versioneve javascript të dosjeve të gjuhës, do të rindërtohet sipas nevojes.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Fshi',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Krijo një lëshim',
    'LBL_DROPDOWN_NAME' => 'Emri i lëshimit:',
    'LBL_DROPDOWN_LANGUAGE' => 'Gjuha e lëshimit',
    'LBL_TABGROUP_LANGUAGE' => 'Gjuha:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Shfaq vlerën',
    'LBL_DD_DATABASEVALUE' => 'Vlera e bazës së të dhënave',
    'LBL_DD_ALL' => 'Të gjitha',

//BUTTONS
    'LBL_BTN_SAVE' => 'Ruaj',
    'LBL_BTN_CANCEL' => 'Anulo',
    'LBL_BTN_SAVEPUBLISH' => 'Ruaj dhe vendos',
    'LBL_BTN_HISTORY' => 'Historia',
    'LBL_BTN_ADDROWS' => 'Shto reshta',
    'LBL_BTN_UNDO' => 'Zhbëj',
    'LBL_BTN_REDO' => 'Ribëj',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Shto fushë të rëndomtë',
    'LBL_BTN_TABINDEX' => 'Ndrysho urdhërat e butonave',

//TABS
    'LBL_MODULES' => 'Modulet',
    'LBL_MODULE_NAME' => 'Administrata',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfiguro modulet e grupuara',
    'LBL_GROUP_TAB_WELCOME' => 'Filtrat e mëposhtme do të shfaqet në listën e më shumë menynë të modulit për përdoruesit që të përdorin për të parë grupet e moduleve në meny. Tërhiqeni dhe lëshoni modulet për dhe nga filtrat. Shënim: Filtrat e zbrazëta nuk do të shfaqen në meny.',
    'LBL_RENAME_TAB_WELCOME' => 'Shtyp në cilindo shfaqje të vlerës së butonit në tabelën e mëposhtme për të riemëruar butonin.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selekto një gjuhë të disponueshme, ndrysho klasifikimin e grupit dhe shtyp Ruaj dhe Poziciono për të aplikuar klasifikimet në gjuhët e selektuara.',
    'LBL_ADD_GROUP' => 'Shto filtër',
    'LBL_NEW_GROUP' => 'Grup i ri',
    'LBL_RENAME_TABS' => 'Riemëro modulat',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Gabim: vlerë jovalide e çelësit:[&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Ruaj' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Zhbëj' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Ribëj' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Në linjë' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Fshi' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Mksimizo' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizo' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publiko' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Shto reshta' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Add Field' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Ndrysho' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Selekto gjuhën për ta ndryshuar',
    'LBL_SINGULAR' => 'Etiketë Njëjësi',
    'LBL_PLURAL' => 'Etiketë Shumësi',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Kliko Ruaj të aplikoni ndryshimet.'

);
