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
    'LBL_EDIT_LAYOUT' => 'Upraviť rozloženie',
    'LBL_EDIT_FIELDS' => 'Upraviť zákaznícke polia',
    'LBL_SELECT_FILE' => 'Vybrať súbor',
    'LBL_MODULE_TITLE' => 'Štúdio',
    'LBL_TOOLBOX' => 'Nástroje',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM polia (kliknite na položky k pridaniu na scénu)',
    'LBL_VIEW_SUITE_FIELDS' => 'Zobraziť SuiteCRM polia',
    'LBL_FAILED_TO_SAVE' => 'Neúspešné k uloženiu',
    'LBL_CONFIRM_UNSAVE' => 'Zmeny nebudú uložené. Skutočne chcete pokračovať?',
    'LBL_PUBLISHING' => 'Publikovanie ...',
    'LBL_PUBLISHED' => 'Uverejnený',
    'LBL_FAILED_PUBLISHED' => 'Neúspešné publikovanie',
    'LBL_DROP_HERE' => '[Vlož sem]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Meno',
    'LBL_LABEL' => 'Štítok',
    'LBL_MASS_UPDATE' => 'Hromadná aktualizácia',
    'LBL_DEFAULT_VALUE' => 'Prednastavená hodnota',
    'LBL_REQUIRED' => 'Povinné',
    'LBL_DATA_TYPE' => 'Typ',


    'LBL_HISTORY' => 'História',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Vitajte v Štúdiu!</h2><br> Čo by ste chceli dnes?<br><b> Prosím, zvoľte z nasledujúcich možností.</b>',
    'LBL_SW_EDIT_MODULE' => 'Upraviť modul',
    'LBL_SW_EDIT_DROPDOWNS' => 'Upraviť vysúvacie menu',
    'LBL_SW_EDIT_TABS' => 'Konfigurovať záložky',
    'LBL_SW_RENAME_TABS' => 'Premenovať záložky',
    'LBL_SW_EDIT_GROUPTABS' => 'Konfigurácia skupiny záložiek',
    'LBL_SW_EDIT_PORTAL' => 'Upraviť portál',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Opraviť zákaznícke polia',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Presunúť zákaznícke polia',

//Manager Backups History
    'LBL_MB_DELETE' => 'Vymazať',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Vytvoriť rozbaľovaciu ponuku',
    'LBL_DROPDOWN_NAME' => 'Názov rozbaľovacej ponuky:',
    'LBL_DROPDOWN_LANGUAGE' => 'Jazyk rozbaľovacej ponuky:',
    'LBL_TABGROUP_LANGUAGE' => 'Jazyk:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Zobraziť hodnotu',
    'LBL_DD_DATABASEVALUE' => 'Databázový údaj',
    'LBL_DD_ALL' => 'Všetko',

//BUTTONS
    'LBL_BTN_SAVE' => 'Uložiť',
    'LBL_BTN_CANCEL' => 'Zrušiť',
    'LBL_BTN_SAVEPUBLISH' => 'Uložiť a nasadiť',
    'LBL_BTN_HISTORY' => 'História',
    'LBL_BTN_ADDROWS' => 'Pridať riadky',
    'LBL_BTN_UNDO' => 'Vrátiť späť',
    'LBL_BTN_REDO' => 'Znovu',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Pridať zákaznícke pole',
    'LBL_BTN_TABINDEX' => 'Úprava poradia záložiek',

//TABS
    'LBL_MODULES' => 'Moduly',
    'LBL_MODULE_NAME' => 'Administrácia',
    'LBL_CONFIGURE_GROUP_TABS' => 'Konfigurovať zoskupené moduly',
    'LBL_GROUP_TAB_WELCOME' => 'Skupina nižšie môže byť zobrazená v navigačnej lište pre užívateľov, ktorí zvolili zobrazenie Zoskupených modulov. Chyť a ťahaj moduly do a zo Skupín, k nastaveniu, ktoré= moduly sa objavia v rámci skupiny. <i>Poznámka: Prázdne skupiny nemôžu byť zobrazené na navigačnej lište</i>',
    'LBL_RENAME_TAB_WELCOME' => 'Kliknite na niektorú záložku Zobrazenia hodnôt v nasledovnej tabuľke, k premenovaniu záložky.',
    'LBL_DELETE_MODULE' => 'Odstránenie&nbsp;modulu<br />zo&nbsp;skupiny',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Zvoľte dostupný jazyk. upravte štítky Skupiny a kliknite na Uložiť a uplatniť k použitiu štítkov v zvolenom jazyku.',
    'LBL_ADD_GROUP' => 'Pridať skupinu',
    'LBL_NEW_GROUP' => 'Nová skupina',
    'LBL_RENAME_TABS' => 'Premenovať moduly',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Chyba: Nesprávna hodnota kľúča Key Value: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Uložiť' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Vrátiť späť' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Znovu' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'V rade' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Vymazať' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Pridať pole:' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximalizovať' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimalizovať' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Zverejniť' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Pridať riadky' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Pridať pole:' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Upraviť' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Vyberte jazyk k úprave',
    'LBL_SINGULAR' => 'Jednotný štítok',
    'LBL_PLURAL' => 'štítky',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Stlačte Uložiť k prevedeniu zmien.'

);
