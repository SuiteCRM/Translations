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
    'LBL_ALL_MODULES' => 'Visi susiję',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Atsakingo Vartotojo Id',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ID' => 'Id',
    'LBL_DATE_ENTERED' => 'Sukurta',
    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_MODIFIED' => 'Redagavo',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_CREATED' => 'Sukūrė',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_NONINHERITABLE' => 'Ne pirmines',
    'LBL_LIST_NONINHERITABLE' => 'Ne pirmines',
    'LBL_NAME' => 'Vardas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_LIST_FORM_TITLE' => 'Apsaugotos grupės',
    'LBL_MODULE_NAME' => 'Saugumo nustatymų valdymas',
    'LBL_MODULE_TITLE' => 'Saugumo nustatymų valdymas',
    'LNK_NEW_RECORD' => 'Saugos grupės kūrimas',
    'LNK_LIST' => 'Rodyti sąrašą',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => 'Vartotojas',
    'LBL_USERS_SUBPANEL_TITLE' => 'Vartotojas',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Funkcijos',
    'LBL_ROLES' => 'Funkcijos',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigūruoti',
    'LBL_ADDITIVE' => 'Priedų Teisės',
    'LBL_ADDITIVE_DESC' => "Vartotojas gauna didžiausią teises visiems priskirto vartotojo ar vartotojų grupės vaidmenims.",
    'LBL_STRICT_RIGHTS' => 'Griežtos Teisės',
    'LBL_STRICT_RIGHTS_DESC' => "Jei vartotojas yra iš kelių grupių narys, bus naudojamas tik atitinkamos teisės iš grupės, priskirtą prie dabartinio įrašo.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Vartotojo vaidmens viršenybė',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Jei bet koks vaidmuo tiesiogiai priskirtas vartotojui, šis vaidmuo turėtų būti viršesnis už bet kokios grupės vaidmenį.',
    'LBL_INHERIT_TITLE' => 'Grupė Paveldėjimo Taisyklės',
    'LBL_INHERIT_CREATOR' => 'Paveldėti iš Sukūrė Vartotojas',
    'LBL_INHERIT_CREATOR_DESC' => 'Įrašas paveldės visas grupes priskirtas vartotojo, kurias sukūrė jis.',
    'LBL_INHERIT_PARENT' => 'Paveldėti iš pagrindinio įrašo',
    'LBL_INHERIT_PARENT_DESC' => 'Pavyzdžiui jei byloje yra sukurta kontakto atveju paveldės grupių, susijusių su kontaktu.',
    'LBL_USER_POPUP' => 'Nauja vartotojų grupė iškylantys',
    'LBL_USER_POPUP_DESC' => 'Kuriant naują vartotoją parodyti Saugumo Grupes, Iššokantis langas, priskirta vartotojo su grupe.',
    'LBL_INHERIT_ASSIGNED' => 'Paveldėti iš Priskirto Vartotojo',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Įrašas paveldės visos grupės vartotojo priskirtus įrašus. Kitos grupės susijusios su įrašui nebus pašalintos.',
    'LBL_POPUP_SELECT' => 'Vartotojo Kūrėjo Grupės Pasirinkimas',
    'LBL_POPUP_SELECT_DESC' => 'Kai sukuriamas įrašas vartotojo apimantis daugiau nei vieną grupę, kūrimo metu rodyti grupės pasirinkimo panelę. Priešingu atveju paveldės vieną grupę.',
    'LBL_FILTER_USER_LIST' => 'Filtruoti vartotojų sąrašas',
    'LBL_FILTER_USER_LIST_DESC' => "Non-admin vartotojai gali priskirti tos pačios grupės avrtotojus",

    'LBL_DEFAULT_GROUP_TITLE' => 'Numatytosios grupės naujiems įrašams',
    'LBL_ADD_BUTTON_LABEL' => 'Įdėti',
    'LBL_REMOVE_BUTTON_LABEL' => 'Išmesti',
    'LBL_GROUP' => 'Grupė:',
    'LBL_MODULE' => 'Modulis:',

    'LBL_MASS_ASSIGN' => 'Saugos Grupės: Masinis Priskirimas',
    'LBL_ASSIGN' => 'Priskirti',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_ASSIGN_CONFIRM' => 'Ar tikrai norite įtraukti šią grupę į ',
    'LBL_REMOVE_CONFIRM' => 'Ar tikrai norite pašalinti šią grupę, iš',
    'LBL_CONFIRM_END' => 'pasirinktus įrašus?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SaugosGrupė/Vartotojas',
    'LBL_USER_NAME' => 'Vartotojas vardas',
    'LBL_SECURITYGROUP_NAME' => 'SaugosGrupė Pavadinimas',
    'LBL_HOMEPAGE_TITLE' => 'Grupuoti pranešimus',
    'LBL_TITLE' => 'Pareigybės',
    'LBL_ROWS' => 'Eilutės',
    'LBL_POST' => 'Patalpinti',
    'LBL_SELECT_GROUP_ERROR' => 'Pasirinkite grupę ir bandykite dar kartą.',

    'LBL_GROUP_SELECT' => 'Pasirinkite, kurios grupės turėtų turėti prieigą prie šio įrašo',
    'LBL_ERROR_DUPLICATE' => 'Due to a possible duplicate detected by SuiteCRM you will have to manually add Security Groups to your newly created record.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Gaunamo pašto dėžutės vartotojas',
    'LBL_INBOUND_EMAIL_DESC' => 'Tik suteikti prieigą prie el. pašto paskyros, jei vartotojas priklauso grupei, kuriai priskirtas pašto dėžutės vartotojas.',
    'LBL_PRIMARY_GROUP' => 'Pirminės Grupės',
    'LBL_CHECKMARK' => 'Checkmark',

);
