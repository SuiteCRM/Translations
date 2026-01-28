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
    'LBL_ALL_MODULES' => 'Alles',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NONINHERITABLE' => 'Niet erfbaar',
    'LBL_LIST_NONINHERITABLE' => 'Niet erfbaar',
    'LBL_NAME' => 'Naam',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_LIST_FORM_TITLE' => 'Security Groepen',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Maak een Security Groep',
    'LNK_LIST' => 'Lijst view',
    'LBL_SEARCH_FORM_TITLE' => 'Doorzoek Security Suite Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Suite Management',
    'LBL_USERS' => 'Gebruikers',
    'LBL_USERS_SUBPANEL_TITLE' => 'Gebruikers',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Rollen',
    'LBL_ROLES' => 'Rollen',

    'LBL_CONFIGURE_SETTINGS' => 'Configureer',
    'LBL_ADDITIVE' => 'Gestapelde Rechten',
    'LBL_ADDITIVE_DESC' => "Gebruiker krijgt de maximale rechten van alle aan de gebruiker of gebruikersgroep(en) toegewezen rollen.",
    'LBL_STRICT_RIGHTS' => 'Stricte Rechten',
    'LBL_STRICT_RIGHTS_DESC' => "Als een gebruiker lid is van meerere groepen worden enkel de rechten van de aan het huidige record toegewezen groep toegekend.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Gebruikers Rol Voorkeur',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Als een rol is toegekend aan een gebruiker dan heeft die rol voorkeur boven alle groep rollen.',
    'LBL_INHERIT_TITLE' => 'Groep Erf Regels',
    'LBL_INHERIT_CREATOR' => 'Erf van de Aangemaakt door Gebruiker',
    'LBL_INHERIT_CREATOR_DESC' => 'Het record erft al de groepen van de gebruiker die het heeft aangemaakt.',
    'LBL_INHERIT_PARENT' => 'Erf van bovenliggend record',
    'LBL_INHERIT_PARENT_DESC' => 'B.v. Als een Case wordt aangemaakt voor een Contactpersoon dan zal de Case de aan de contactpersoon toegezen groepen erven.',
    'LBL_USER_POPUP' => 'Nieuwe Gebruiker Groep Popup',
    'LBL_USER_POPUP_DESC' => 'Wanneer een nieuwe gebruiker wordt aangemaakt, toon de SecurityGroep popup om de gebruiker toe te wijzen aan een (of meerdere) groep(en).',
    'LBL_INHERIT_ASSIGNED' => 'Erf van Toegewezen Aan Gebruiker',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Het record zal alle groepen erven van de gebruiker die is toegewezen aan het record. Andere groepen die zijn toegewezen aan het record worden NIET verwijderd.',
    'LBL_POPUP_SELECT' => 'Gebruik Schepper Groep selecteren',
    'LBL_POPUP_SELECT_DESC' => 'Wanneer een record wordt aangemaakt door een gebruiker in meer dan een groep tonen een panel voor de selectie op het cre�ren scherm. Anders erven dat een groep.',
    'LBL_FILTER_USER_LIST' => 'Filter Gebruikers Lijst',
    'LBL_FILTER_USER_LIST_DESC' => "Niet-beheerders kunnen enkel toewijzen aan gebruikers in dezelfde groep(en)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Standaard Groepen voor Nieuwe Records',
    'LBL_ADD_BUTTON_LABEL' => 'Toevoegen',
    'LBL_REMOVE_BUTTON_LABEL' => 'Verwijderen',
    'LBL_GROUP' => 'Groep:',
    'LBL_MODULE' => 'Module:',

    'LBL_MASS_ASSIGN' => 'Security Groepen: Wijs toe',
    'LBL_ASSIGN' => 'Toekennen',
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_ASSIGN_CONFIRM' => 'Weet u zeker dat u deze groep wil toevoegen aan de ',
    'LBL_REMOVE_CONFIRM' => 'Weet u zeker dat u deze groep wil verwijderen van de ',
    'LBL_CONFIRM_END' => 'Geselecteerde record(s)',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroep/Gebruiker',
    'LBL_USER_NAME' => 'Gebruikersnaam',
    'LBL_SECURITYGROUP_NAME' => 'SecurityGroep Naam',
    'LBL_HOMEPAGE_TITLE' => 'Groep Berichten',
    'LBL_TITLE' => 'Titel',
    'LBL_ROWS' => 'Rijen',
    'LBL_POST' => 'Bericht',
    'LBL_SELECT_GROUP_ERROR' => 'Selecteer een groep en probeer opnieuw',

    'LBL_GROUP_SELECT' => 'Selecteer welke groepen moeten toegang hebben tot deze record',
    'LBL_ERROR_DUPLICATE' => 'Als gevolg van een mogelijke duplicaat gedetecteerd door SuiteCRM moet u handmatig beveiligingsgroepen toe te voegen aan uw nieuwe record.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update mislukt omdat het zoekfilter is gewijzigd. Probeer het opnieuw.',

    'LBL_INBOUND_EMAIL' => 'Inkomende e-mailaccount',
    'LBL_INBOUND_EMAIL_DESC' => 'Sta alleen toegang tot een e-mailaccount als de gebruiker behoort tot een groep die is toegewezen aan de e-mail account.',
    'LBL_PRIMARY_GROUP' => 'Primaire Groep',
    'LBL_CHECKMARK' => 'Vinkje',

);
