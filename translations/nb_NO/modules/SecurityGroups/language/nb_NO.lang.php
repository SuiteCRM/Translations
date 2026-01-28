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
    'LBL_ALL_MODULES' => 'Alle',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Tilordnet brukerID',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_NAME' => 'Endret av navn',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DELETED' => 'Slettet',
    'LBL_NONINHERITABLE' => 'Ikke arvbar',
    'LBL_LIST_NONINHERITABLE' => 'Ikke arvbar',
    'LBL_NAME' => 'Navn',
    'LBL_CREATED_USER' => 'Opprettet av bruker',
    'LBL_MODIFIED_USER' => 'Modifisert av bruker',
    'LBL_LIST_FORM_TITLE' => 'Sikkerhetsgrupper',
    'LBL_MODULE_NAME' => 'Sikkerhets pakke håndtering',
    'LBL_MODULE_TITLE' => 'Sikkerhets pakke håndtering',
    'LNK_NEW_RECORD' => 'Opprett en sikkerhetsgruppe',
    'LNK_LIST' => 'Liste',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Groups Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groups Management',
    'LBL_USERS' => 'Brukere:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Brukere:',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
    'LBL_ROLES' => 'Roller',

    'LBL_CONFIGURE_SETTINGS' => 'Konfigurer',
    'LBL_ADDITIVE' => 'Additive rettigheter',
    'LBL_ADDITIVE_DESC' => "Bruker får den høyeste tillatelse av alle roller tildelt seg eller brukerens gruppe(r).",
    'LBL_STRICT_RIGHTS' => 'Strenge rettigheter.',
    'LBL_STRICT_RIGHTS_DESC' => "Dersom en bruker er medlem av flere grupper, blir bare de respektive rettigheter fra gruppen tildelt denne oppføringen brukt.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Forrang for brukerroller',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Derosm en rolle er tildelt direkte til en bruker, den rollen bør ha prioritet over andre grupperoller.',
    'LBL_INHERIT_TITLE' => 'Regler for gruppearv',
    'LBL_INHERIT_CREATOR' => 'Arv fra opprettet av bruker',
    'LBL_INHERIT_CREATOR_DESC' => 'Oppføringen vil arve alle grupper fra brukeren som opprettet den.',
    'LBL_INHERIT_PARENT' => 'Arv fra opphavsoppføring',
    'LBL_INHERIT_PARENT_DESC' => 'For eksempel: Dersom en sak opprettes for en kontakt, vil saken arve gruppene assosiert med kontakten.',
    'LBL_USER_POPUP' => 'Ny bruker gruppe-sprettopp',
    'LBL_USER_POPUP_DESC' => 'Når nye brukere opprettes vises sikkerhetsgruppe-sprettoppvinduet for å legge brukeren til i en eller flere gruppe(r).',
    'LBL_INHERIT_ASSIGNED' => 'Arv fra tildelt bruker',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Oppføringen vil arve alle gruppene fra brukeren som har oppføringen tildelt seg. Andre grupper som oppføringen allerede har fått tildelt vil IKKE bli slettet.',
    'LBL_POPUP_SELECT' => 'Bruk gruppevalg for oppretting',
    'LBL_POPUP_SELECT_DESC' => 'Når en oppføring blir laget av en bruker i mer enn én gruppe, vis et gruppevalgpanel på opprettingsskjermen. Ellers, arv den ene gruppen.',
    'LBL_FILTER_USER_LIST' => 'Filtrer brukerliste',
    'LBL_FILTER_USER_LIST_DESC' => "Brukere uten administrator-rettigheter kan bare legge til brukere i de samme gruppe(ne)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Standardgruppe for nye oppføringer',
    'LBL_ADD_BUTTON_LABEL' => 'Legg til',
    'LBL_REMOVE_BUTTON_LABEL' => 'Fjern',
    'LBL_GROUP' => 'Gruppe:',
    'LBL_MODULE' => 'Modul:',

    'LBL_MASS_ASSIGN' => 'Sikkerhetsgruppe: Mengdetildeling',
    'LBL_ASSIGN' => 'Tildel',
    'LBL_REMOVE' => 'Fjern',
    'LBL_ASSIGN_CONFIRM' => 'Er du sikker på at du vil legge denne gruppen til i',
    'LBL_REMOVE_CONFIRM' => 'Er du sikker på at du vil fjerne denne gruppen fra',
    'LBL_CONFIRM_END' => 'valgte poster?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Sikkerhetsgruppe/Bruker',
    'LBL_USER_NAME' => 'Brukernavn',
    'LBL_SECURITYGROUP_NAME' => 'Sikkerhetsgruppenavn',
    'LBL_HOMEPAGE_TITLE' => 'Gruppemeldinger',
    'LBL_TITLE' => 'Tittel:',
    'LBL_ROWS' => 'Rader',
    'LBL_POST' => 'Lagre',
    'LBL_SELECT_GROUP_ERROR' => 'Vennligst velg en gruppe og prøv på nytt',

    'LBL_GROUP_SELECT' => 'Velg hvilke grupper som skal ha tilgang til denne oppføringen',
    'LBL_ERROR_DUPLICATE' => 'På grunn av en mulig kopi oppdaget av SuiteCRM må du legge til Sikkerhetsgrupper til den nye oppføringen manuelt',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'Inngående e-postkonto',
    'LBL_INBOUND_EMAIL_DESC' => 'Bare tillatt tilgang til e-postkonto dersom brukeren tilhører en gruppe som er tildelt den bestemte e-postkontoen.',
    'LBL_PRIMARY_GROUP' => 'Primærgruppe',
    'LBL_CHECKMARK' => 'Hake',

);
