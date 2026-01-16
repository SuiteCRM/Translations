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
    'LBL_EDIT_FIELDS' => 'Uredi prilagojena polja',
    'LBL_SELECT_FILE' => 'Izberi datoteko',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Orodjarna',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Fields (click items to add to staging area)',
    'LBL_VIEW_SUITE_FIELDS' => 'View SuiteCRM Fields',
    'LBL_FAILED_TO_SAVE' => 'Shranjevanje ni uspelo',
    'LBL_CONFIRM_UNSAVE' => 'Spremembe ne bodo shranjene. Ste prepričani, da želite nadaljevati?',
    'LBL_PUBLISHING' => 'Objavljam ...',
    'LBL_PUBLISHED' => 'Objavljeno',
    'LBL_FAILED_PUBLISHED' => 'Objavljanje ni uspelo',
    'LBL_DROP_HERE' => '[Spusti tukaj]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Ime',
    'LBL_LABEL' => 'Nalepka',
    'LBL_MASS_UPDATE' => 'Skupna posodobitev',
    'LBL_DEFAULT_VALUE' => 'Prednastavljena vrednost',
    'LBL_REQUIRED' => 'Zahtevano',
    'LBL_DATA_TYPE' => 'Tip',


    'LBL_HISTORY' => 'Zgodovina',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '&lt;h2&gt;Dobrodošli v Studiu!&lt;/h2&gt;&lt;br&gt; Kaj bi radi počeli danes?&lt;br&gt;&lt;b&gt; Prosim izberite iz spodnjih možnosti.&lt;/b&gt;',
    'LBL_SW_EDIT_MODULE' => 'Uredi modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Uredi Spustne menije',
    'LBL_SW_EDIT_TABS' => 'Nastavi zavihke',
    'LBL_SW_RENAME_TABS' => 'Preimenuj zavihke',
    'LBL_SW_EDIT_GROUPTABS' => 'Nastavi skupinske zavihke',
    'LBL_SW_EDIT_PORTAL' => 'Uredi portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Popravi prilagojena polja',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Prenesi prilagojena polja',

//Manager Backups History
    'LBL_MB_DELETE' => 'Izbriši',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Ustvari spustni meni',
    'LBL_DROPDOWN_NAME' => 'Ime spustnega menija:',
    'LBL_DROPDOWN_LANGUAGE' => 'Jezik spustnega menija:',
    'LBL_TABGROUP_LANGUAGE' => 'Jezik:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Prikaži vrednost',
    'LBL_DD_DATABASEVALUE' => 'Vrednost v bazi',
    'LBL_DD_ALL' => 'Vse',

//BUTTONS
    'LBL_BTN_SAVE' => 'Shrani',
    'LBL_BTN_CANCEL' => 'Prekliči',
    'LBL_BTN_SAVEPUBLISH' => 'Shrani in objavi',
    'LBL_BTN_HISTORY' => 'Zgodovina',
    'LBL_BTN_ADDROWS' => 'Dodaj vrstice',
    'LBL_BTN_UNDO' => 'korak nazaj',
    'LBL_BTN_REDO' => 'korak naprej',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Dodaj prilagojeno polje',
    'LBL_BTN_TABINDEX' => 'Uredi vrstni red zavihkov',

//TABS
    'LBL_MODULES' => 'Moduli',
    'LBL_MODULE_NAME' => 'Administracija',
    'LBL_CONFIGURE_GROUP_TABS' => 'Nastavi skupinske zavihke',
    'LBL_GROUP_TAB_WELCOME' => 'The filters below will be displayed in the More list in the module menu for users to use to view groups of modules within the menu. Drag and drop modules to and from the filters. Note: Empty filters will not be displayed in the menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Click on any tab\'s Display Value in the table below to rename the tab.',
    'LBL_DELETE_MODULE' => 'Remove&nbsp;module<br />from&nbsp;filter',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Select an available language, edit the Group labels and click Save & Deploy to apply the labels in the selected language.',
    'LBL_ADD_GROUP' => 'Dodaj skupino',
    'LBL_NEW_GROUP' => 'Nova skupina',
    'LBL_RENAME_TABS' => 'Preimenuj zavihke',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Napaka: napačna vrednost: [&#039;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Shrani' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'korak nazaj' /*for 508 compliance fix*/,
    'LBL_REDO' => 'korak naprej' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Izbriši' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Add Field ' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximize' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimize' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'objavi' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Dodaj vrstice' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Add Field ' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Uredi' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Select the language to edit.',
    'LBL_SINGULAR' => 'Singular Label',
    'LBL_PLURAL' => 'Plural Label',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Click <b>Save</b> to apply the changes.'

);
