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
    'LBL_ALL_MODULES' => 'Všechno',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NONINHERITABLE' => 'Nezděditelné',
    'LBL_LIST_NONINHERITABLE' => 'Nezděditelné',
    'LBL_NAME' => 'Název',
    'LBL_CREATED_USER' => 'Vytvořeno dle Uživatele',
    'LBL_MODIFIED_USER' => 'Změněno dle Uživatele',
    'LBL_LIST_FORM_TITLE' => 'Skupiny zabezpečení',
    'LBL_MODULE_NAME' => 'Správa zabezpečení',
    'LBL_MODULE_TITLE' => 'Správa zabezpečení',
    'LNK_NEW_RECORD' => 'Vytvořit skupinu zabezpečení',
    'LNK_LIST' => 'Seznam',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat správu bezpečnostních skupin',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Správa bezpečnostních skupin',
    'LBL_USERS' => 'Uživatelé',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Role',
    'LBL_ROLES' => 'Role',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurovat',
    'LBL_ADDITIVE' => 'Přídavná práva',
    'LBL_ADDITIVE_DESC' => "Uživatel získá nejvyšší práva všech rolí přiřazené uživateli nebo uživatelově skupině (skupinám)",
    'LBL_STRICT_RIGHTS' => 'Přísná pravidla',
    'LBL_STRICT_RIGHTS_DESC' => "Je-li uživatel členem několika skupin, budou použita pouze práva ze skupiny přiřazené současnému záznamu.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Priorita uživatelské role',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Je-li jakákoliv role přiřazena přímo uživateli, tato role by měla mít navrch nad rolemi skupiny.',
    'LBL_INHERIT_TITLE' => 'Pravidla dědičnosti ve skupině',
    'LBL_INHERIT_CREATOR' => 'Dědičnost dle uživatele, který záznam vytvořil',
    'LBL_INHERIT_CREATOR_DESC' => 'Záznam zdědí všechny skupiny přiřazené uživateli, který záznam vytvořil.',
    'LBL_INHERIT_PARENT' => 'Zdědit z nadřazeného záznamu',
    'LBL_INHERIT_PARENT_DESC' => 'např. jestliže je Případ vytvořen k nějakému kontaktu, zdědí skupiny spojené s kontaktem.',
    'LBL_USER_POPUP' => 'Nová uživatelská skupina',
    'LBL_USER_POPUP_DESC' => 'Při vytváření nového uživatele zobraz okno Skupiny zabezpečení k přiřazení uživatele do skupin/y.',
    'LBL_INHERIT_ASSIGNED' => 'Zdědit od Přiřazeno uživateli',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Záznam zdědí všechny skupiny uživatele přiřazeného k záznamu. Jiné skupiny přiřazené k záznamu NEBUDOU odstraněny.',
    'LBL_POPUP_SELECT' => 'Použijte výběr tvůrce skupin',
    'LBL_POPUP_SELECT_DESC' => 'Když je záznam vytvořen uživatelem, který je ve více než jedné skupině, zobraz na obrazovce výběr skupin. Jinak zdědit jednu skupinu.',
    'LBL_FILTER_USER_LIST' => 'Filtrovat seznam uživatelů',
    'LBL_FILTER_USER_LIST_DESC' => "Uživatelé, kteří nejsou správci, přiřadí uživatele pouze ke stejné skupině",

    'LBL_DEFAULT_GROUP_TITLE' => 'Výchozí skupiny pro nové záznamy',
    'LBL_ADD_BUTTON_LABEL' => 'Přidat',
    'LBL_REMOVE_BUTTON_LABEL' => 'Odebrat',
    'LBL_GROUP' => 'Skupina:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Skupiny zabezpečení: Hromadného přiřazení',
    'LBL_ASSIGN' => 'Přiřadit',
    'LBL_REMOVE' => 'Odebrat',
    'LBL_ASSIGN_CONFIRM' => 'Opravdu chcete přidat tuto skupinu do ',
    'LBL_REMOVE_CONFIRM' => 'Opravdu chcete odebrat tuto skupinu z ',
    'LBL_CONFIRM_END' => ' zvolené záznamy?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Bezpečnostní skupina/uživatel',
    'LBL_USER_NAME' => 'Uživatelské jméno',
    'LBL_SECURITYGROUP_NAME' => 'Název bezpečnostní skupiny',
    'LBL_HOMEPAGE_TITLE' => 'Zprávy skupiny',
    'LBL_TITLE' => 'Nadpis',
    'LBL_ROWS' => 'Řádky',
    'LBL_POST' => 'Zveřejni',
    'LBL_SELECT_GROUP_ERROR' => 'Prosím vyberte skupinu a opakujte akci.',

    'LBL_GROUP_SELECT' => 'Vyberte, které skupiny by měly mít přístup k tomuto záznamu',
    'LBL_ERROR_DUPLICATE' => 'Kvůli možnému duplicitnímu detekování od SuiteCRM budete muset ručně přidat skupiny zabezpečení pro váš nově vytvořený záznam.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Aktualizace se nezdařila, protože vyhledávací filtr byl změněn. Zkuste to znovu.',

    'LBL_INBOUND_EMAIL' => 'Příchozí emailový účet',
    'LBL_INBOUND_EMAIL_DESC' => 'Umožní přístup k e-mailovému účtu, pokud uživatel patří do skupiny přiřazené k tomu e-mailovému účtu.',
    'LBL_PRIMARY_GROUP' => 'Primární skupina',
    'LBL_CHECKMARK' => 'Zaškrtnutí',

);
