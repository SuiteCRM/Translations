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
    'LBL_EDIT_LAYOUT' => 'Uredi izgled',
    'LBL_EDIT_FIELDS' => 'Uredi prilagođena polja',
    'LBL_SELECT_FILE' => 'Odaberi datoteku',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Alatna kutija',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Neuspjelo spremanje',
    'LBL_CONFIRM_UNSAVE' => 'Sve promjene neće biti spremljene. Jeste li sigurni želite li nastaviti?',
    'LBL_PUBLISHING' => 'Objavljivanje...',
    'LBL_PUBLISHED' => 'Objavljeno',
    'LBL_FAILED_PUBLISHED' => 'Neuspjelo objavljivanje',
    'LBL_DROP_HERE' => '[Odbaci ovdje]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Ime',
    'LBL_LABEL' => 'Oznaka',
    'LBL_MASS_UPDATE' => 'Masovno ažuriranje',
    'LBL_DEFAULT_VALUE' => 'Zadana veličina',
    'LBL_REQUIRED' => 'Potrebno',
    'LBL_DATA_TYPE' => 'Tip',


    'LBL_HISTORY' => 'Povijest',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Dobrodošli u Studio!</h2><br> Što želite učiniti danas?<br><b> Molim odaberite od opcija ispod.</b>',
    'LBL_SW_EDIT_MODULE' => 'Uredi modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Uredi padajuće izbornike',
    'LBL_SW_EDIT_TABS' => 'Konfiguriraj kartice',
    'LBL_SW_RENAME_TABS' => 'Preimenuj kartice',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfiguriraj grupne kartice',
    'LBL_SW_EDIT_PORTAL' => 'Uredi portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Popravi prilagođeno polje',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Preseli prilagođena polja',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Obnavlja javscript verzije jezičnih datoteka',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Uklanjanje javascript verzija jezičnih datoteka, obnoviti će se po potrebi.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Izbriši',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Kreiraj padajući izbornik',
    'LBL_DROPDOWN_NAME' => 'Ime padajućeg izbornika:',
    'LBL_DROPDOWN_LANGUAGE' => 'Jezik padajućeg izbornika:',
    'LBL_TABGROUP_LANGUAGE' => 'Jezik:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Vrijednost prikaza',
    'LBL_DD_DATABASEVALUE' => 'Vrijednost baze podataka',
    'LBL_DD_ALL' => 'Sve',

//BUTTONS
    'LBL_BTN_SAVE' => 'Spremi',
    'LBL_BTN_CANCEL' => 'Odustani',
    'LBL_BTN_SAVEPUBLISH' => 'Spremi i razvij',
    'LBL_BTN_HISTORY' => 'Povijest',
    'LBL_BTN_ADDROWS' => 'Dodaj retke',
    'LBL_BTN_UNDO' => 'Vrati',
    'LBL_BTN_REDO' => 'Preuredi',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dodaj prilagođeno polje',
    'LBL_BTN_TABINDEX' => 'Edit Tabbing Order',

//TABS
    'LBL_MODULES' => 'Moduli',
    'LBL_MODULE_NAME' => 'Administracija',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfiguriraj filtere izbornika modula',
    'LBL_GROUP_TAB_WELCOME' => 'Filteri ispod biti će prikazani u listi Više u izborniku modula za korisnike kako bi vidjeli grupe modula unutar izbornika. Povucite i odbacite module na i sa filtera. Bilješka: Prazni filteri neće biti prikazani u izborniku.',
    'LBL_RENAME_TAB_WELCOME' => 'Kliknite na bilo koju karticu Prikaži vrijedosti u tablici ispod za preimenovanje kartice.',
    'LBL_DELETE_MODULE' => 'Ukloni&nbsp;modul<br />iz&nbsp;filtera',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Select an available language, edit the Group labels and click Save & Deploy to apply the labels in the selected language.',
    'LBL_ADD_GROUP' => 'Dodaj filter',
    'LBL_NEW_GROUP' => 'Nova grupa',
    'LBL_RENAME_TABS' => 'Preimenuj module',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Greška: Pogrešna vrijednost ključa: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Spremi' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Vrati' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Preuredi' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Izbriši' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Dodaj Polje' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maksimiziraj' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimiziraj' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Objavi' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Dodaj retke' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Dodaj Polje' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Uredi' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Odaberite jezik za uređivanje.',
    'LBL_SINGULAR' => 'Oznaka jednine',
    'LBL_PLURAL' => 'Oznaka množine',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Kliknite <b>Spremi</b> kako bi primijenili promjene.'

);
