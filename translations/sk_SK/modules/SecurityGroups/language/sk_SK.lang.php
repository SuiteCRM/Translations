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
    'LBL_ALL_MODULES' => 'Všetko',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NONINHERITABLE' => 'Nie dedičné',
    'LBL_LIST_NONINHERITABLE' => 'Nie dedičné',
    'LBL_NAME' => 'Meno',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_FORM_TITLE' => 'CRM Skupiny',
    'LBL_MODULE_NAME' => 'Správa zabezpečenia',
    'LBL_MODULE_TITLE' => 'Správa zabezpečenia',
    'LNK_NEW_RECORD' => 'Vytvoriť bezpečnostnú skupinu',
    'LNK_LIST' => 'Zobraziť zoznam',
    'LBL_SEARCH_FORM_TITLE' => 'Hľadať v správe zabezpečenia',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Správa zabezpečenia',
    'LBL_USERS' => 'Užívatelia',
    'LBL_USERS_SUBPANEL_TITLE' => 'Užívatelia',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Pozície',
    'LBL_ROLES' => 'Pozície',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurovať',
    'LBL_ADDITIVE' => 'Prídavné práva',
    'LBL_ADDITIVE_DESC' => "Užívateľ získa najväčšie práva všetkých rolí, priradených používateľovi alebo skupine(ám) používateľov",
    'LBL_STRICT_RIGHTS' => 'Prísne pravidlá',
    'LBL_STRICT_RIGHTS_DESC' => "Ak je používateľ členom viacerých skupín, používajú sa iba príslušné práva zo skupiny priradenej k aktuálnemu záznamu.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Priorita užívateľskej roly',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Ak je akákoľvek rola priradená priamo používateľovi, potom by táto rola mala mať prednosť pred akoukoľvek skupinovou rolou.',
    'LBL_INHERIT_TITLE' => 'Pravidlá dedičnosti v skupine',
    'LBL_INHERIT_CREATOR' => 'Dedičnosť podľa užívateľa, ktorý záznam vytvoril',
    'LBL_INHERIT_CREATOR_DESC' => 'Záznam bude dediť všetky skupiny, priradené užívateľovi, ktorý záznam vytvoril.',
    'LBL_INHERIT_PARENT' => 'Dedenie z nadradeného záznamu',
    'LBL_INHERIT_PARENT_DESC' => 'napr. ak prípad je vytvorený pre kontakt, prípad zdedí skupiny priradené ku kontaktu.',
    'LBL_USER_POPUP' => 'Vyskakovacie okno nová užívateľská skupina',
    'LBL_USER_POPUP_DESC' => 'Pri vytváraní nového používateľa zobraz okno SecurityGroups pre priradenie užívateľa do skup(iny/ín).',
    'LBL_INHERIT_ASSIGNED' => 'Zdediť z priradeného užívateľa',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Záznam zdedí všetky skupiny užívateľov, priradených k záznamu. Ďalšie skupiny priradené k záznamu nebudú odstránené.',
    'LBL_POPUP_SELECT' => 'Použite výber Creator Group',
    'LBL_POPUP_SELECT_DESC' => 'Ak je záznam vytvorený užívateľom, ktorý je viac než v jednej skupine, zobraz výber skupín. Inak zdediť túto skupinu.',
    'LBL_FILTER_USER_LIST' => 'Filtrovať zoznam užívateľov',
    'LBL_FILTER_USER_LIST_DESC' => "Užívateľ, ktorý nie je správca, môže priradiť užívateľov iba do rovnakých skupín",

    'LBL_DEFAULT_GROUP_TITLE' => 'Predvolené skupiny pre nové záznamy',
    'LBL_ADD_BUTTON_LABEL' => 'Pridať',
    'LBL_REMOVE_BUTTON_LABEL' => 'Odstrániť',
    'LBL_GROUP' => 'Skupina:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Skupiny zabezpečenia: Hromadné priradenie',
    'LBL_ASSIGN' => 'Priradiť',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_ASSIGN_CONFIRM' => 'Ste si istí, že chcete pridať túto skupinu do ',
    'LBL_REMOVE_CONFIRM' => 'Ste si istí, že chcete odstrániť túto skupinu z ',
    'LBL_CONFIRM_END' => 'vybraný záznam (y)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Skupina zabezpečenia/užívateľ',
    'LBL_USER_NAME' => 'Užívateľské meno',
    'LBL_SECURITYGROUP_NAME' => 'Meno skupiny zabezpečenia',
    'LBL_HOMEPAGE_TITLE' => 'Správy spupiny',
    'LBL_TITLE' => 'Titul',
    'LBL_ROWS' => 'Riadky',
    'LBL_POST' => 'Zverejniť',
    'LBL_SELECT_GROUP_ERROR' => 'Vyberte skupinu a skúste znova.',

    'LBL_GROUP_SELECT' => 'Vyberte skupiny, ktoré by mali mať prístup do tohto záznamu',
    'LBL_ERROR_DUPLICATE' => 'Vzhľadom na možnú duplicitu, ktorú zistil SuiteCRM, do nového záznamu budete musieť pridať skupiny zabezpečenia manuálne.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Aktualizácia zlyhala, pretože bol zmenený filter vyhľadávania. Prosím, skúste znova.',

    'LBL_INBOUND_EMAIL' => 'Emailový účet prichádzajúcej pošty',
    'LBL_INBOUND_EMAIL_DESC' => 'Umožní prístup k emailovému účtu iba vtedy, ak používateľ patrí do skupiny, ktorá je priradená k tomuto účtu.',
    'LBL_PRIMARY_GROUP' => 'Primárna skupina',
    'LBL_CHECKMARK' => 'Skontrolujte Označiť',

);
