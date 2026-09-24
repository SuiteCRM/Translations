<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ALL_MODULES' => 'Alla',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Tilldelat användar-id',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum Skapad',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Namn på den som ändrade',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NONINHERITABLE' => 'Kan inte ärvas',
    'LBL_LIST_NONINHERITABLE' => 'Kan inte ärvas',
    'LBL_NAME' => 'Namn',
    'LBL_CREATED_USER' => 'Skapad av användare',
    'LBL_MODIFIED_USER' => 'Ändrad av användare',
    'LBL_LIST_FORM_TITLE' => 'Säkerhetsgrupper',
    'LBL_MODULE_NAME' => 'Hantering av Säkerhetssvit',
    'LBL_MODULE_TITLE' => 'Hantering av Säkerhetssvit',
    'LNK_NEW_RECORD' => 'Skapa en säkerhetsgrupp',
    'LNK_LIST' => 'Listvy',
    'LBL_SEARCH_FORM_TITLE' => 'Sök hantering av säkerhetsgrupper',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Hantering av säkerhetsgrupper',
    'LBL_USERS' => 'Användare',
    'LBL_USERS_SUBPANEL_TITLE' => 'Användare',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
    'LBL_ROLES' => 'Roller',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurera',
    'LBL_ADDITIVE' => 'Additiva rättigheter',
    'LBL_ADDITIVE_DESC' => "Användaren får de största rättigheterna av alla roller som tilldelats användaren eller användarens grupper",
    'LBL_STRICT_RIGHTS' => 'Strikta rättigheter',
    'LBL_STRICT_RIGHTS_DESC' => "Om en användare är medlem i flera grupper används endast rättigheterna från gruppen som tilldelats den aktuella posten.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Användarrollers företräde',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Om en roll tilldelas direkt till en användare ska den rollen ha företräde framför grupproller.',
    'LBL_INHERIT_TITLE' => 'Regler för grupparv',
    'LBL_INHERIT_CREATOR' => 'Ärv från användaren som skapade posten',
    'LBL_INHERIT_CREATOR_DESC' => 'Posten ärver alla grupper som tilldelats användaren som skapade den.',
    'LBL_INHERIT_PARENT' => 'Ärv från överordnad post',
    'LBL_INHERIT_PARENT_DESC' => 'Om till exempel ett ärende skapas för en kontakt ärver ärendet grupperna som är kopplade till kontakten.',
    'LBL_USER_POPUP' => 'Popup för ny användargrupp',
    'LBL_USER_POPUP_DESC' => 'Visa SecurityGroups-popupen när en ny användare skapas för att tilldela användaren till grupper.',
    'LBL_INHERIT_ASSIGNED' => 'Ärv från användaren som posten är tilldelad till',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Posten ärver alla grupper från användaren som tilldelats posten. Andra grupper som tilldelats posten tas INTE bort.',
    'LBL_POPUP_SELECT' => 'Använd val av skapargrupp',
    'LBL_POPUP_SELECT_DESC' => 'När en post skapas av en användare i fler än en grupp visas en gruppvalspanel på skärmen för att skapa posten. Annars ärvs den enda gruppen.',
    'LBL_FILTER_USER_LIST' => 'Filtrera användarlista',
    'LBL_FILTER_USER_LIST_DESC' => "Icke-administratörer kan bara tilldela användare i samma grupper",

    'LBL_DEFAULT_GROUP_TITLE' => 'Standardgrupper för nya poster',
    'LBL_ADD_BUTTON_LABEL' => 'Lägg till',
    'LBL_REMOVE_BUTTON_LABEL' => 'Ta bort',
    'LBL_GROUP' => 'Grupp:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Säkerhetsgrupper: masstilldelning',
    'LBL_ASSIGN' => 'Tilldela',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_ASSIGN_CONFIRM' => 'Är du säker på att du vill lägga till den här gruppen till ',
    'LBL_REMOVE_CONFIRM' => 'Är du säker på att du vill ta bort den här gruppen från ',
    'LBL_CONFIRM_END' => ' valda poster?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroup/Användare',
    'LBL_USER_NAME' => 'Användarnamn',
    'LBL_SECURITYGROUP_NAME' => 'SecurityGroup-namn',
    'LBL_HOMEPAGE_TITLE' => 'Gruppmeddelanden',
    'LBL_TITLE' => 'Rubrik',
    'LBL_ROWS' => 'Rader',
    'LBL_POST' => 'Skicka',
    'LBL_SELECT_GROUP_ERROR' => 'Välj en grupp och försök igen.',

    'LBL_GROUP_SELECT' => 'Välj vilka grupper som ska ha åtkomst till den här posten',
    'LBL_ERROR_DUPLICATE' => 'På grund av en möjlig dubblett som upptäckts av SuiteCRM måste du manuellt lägga till säkerhetsgrupper till din nya post.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Uppdateringen misslyckades eftersom sökfiltret ändrades. Försök igen.',

    'LBL_INBOUND_EMAIL' => 'Konto för inkommande e-post',
    'LBL_INBOUND_EMAIL_DESC' => 'Tillåt endast åtkomst till ett e-postkonto om användaren tillhör en grupp som tilldelats e-postkontot.',
    'LBL_PRIMARY_GROUP' => 'Primär grupp',
    'LBL_CHECKMARK' => 'Bockmarkering',

);
