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
    'LBL_MODULE_NAME' => 'Mål',
    'LBL_MODULE_ID' => 'Mål',
    'LBL_INVITEE' => 'Direkterapporter',
    'LBL_MODULE_TITLE' => 'Mål: Forside',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter mål',
    'LBL_LIST_FORM_TITLE' => 'Målliste',
    'LBL_NEW_FORM_TITLE' => 'Nytt mål',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_LAST_NAME' => 'Etternavn',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
    'LBL_LIST_PHONE' => 'Telefonnr:',
    'LBL_LIST_FIRST_NAME' => 'Fornavn:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt:',
    'LBL_CAMPAIGN_ID' => 'Kampanje ID',
    'LBL_EXISTING_ACCOUNT' => 'Benyttet en eksisterende Kunde',
    'LBL_CREATED_ACCOUNT' => 'Opprettet en ny Kunde',
    'LBL_CREATED_CALL' => 'Opprettet en ny oppringning',
    'LBL_CREATED_MEETING' => 'Opprettet et nytt møte',
    'LBL_NAME' => 'Navn:',
    'LBL_PROSPECT_INFORMATION' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mer informasjon',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_OFFICE_PHONE' => 'Tlf jobb:',
    'LBL_ANY_PHONE' => 'Vilkårlig tlf:',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_LAST_NAME' => 'Etternavn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_HOME_PHONE' => 'Forside:',
    'LBL_OTHER_PHONE' => 'Annet telefonnr:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primæradresse, gatenavn:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primæradresse, sted:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primæradresse, land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primæradresse, stat:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primæradresse, postnr:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse, gatenavn:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse, sted:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse, land:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse, stat:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse, postnr:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Avdeling:',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annen e-post:',
    'LBL_ANY_EMAIL' => 'Vilkårlig e-post:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Assistents telefonnr:',
    'LBL_DO_NOT_CALL' => 'Ikke ring:',
    'LBL_EMAIL_OPT_OUT' => 'E-post Opt Out (bortvelg):',
    'LBL_PRIMARY_ADDRESS' => 'Primæradresse:',
    'LBL_ALTERNATE_ADDRESS' => 'Annen adresse:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_CITY' => 'By:',
    'LBL_STATE' => 'Delstat eller område:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Addresseinfo',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_OPP_NAME' => 'Salgsmulighetens betegnelse:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Opprett en ny kontakt automatisk ved å importere et vCard.',
    'LBL_DUPLICATE' => 'Mulig duplikat av et mål',
    'MSG_SHOW_DUPLICATES' => 'Opprettelse av denne kontakten kan føre til to identiske kontakter. Du kan enten klikke på <b>Opprett kontakt</b> for å fortsette, eller klikke på <b>Avbryt</b>.',
    'MSG_DUPLICATE' => 'Opprettelse av denne kontakten kan føre til to identiske kontakter. Du kan enten velge en kontakt fra listen under, eller klikke på <b>Opprett mål</b> for å fortsette.',
    'LNK_IMPORT_VCARD' => 'Opprett ved hjelp av vCard',
    'LNK_NEW_ACCOUNT' => 'Ny forbindelse',
    'LNK_NEW_OPPORTUNITY' => 'Ny salgsmulighet',
    'LNK_NEW_CASE' => 'Ny sak (kundestøtte)',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NEW_CALL' => 'Ny oppringning',
    'LNK_NEW_EMAIL' => 'Arkiver e-post',
    'LNK_NEW_MEETING' => 'Nytt møte',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'LNK_NEW_APPOINTMENT' => 'Ny oppringning',
    'LNK_IMPORT_PROSPECTS' => 'Importer mål',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du vil fjerne denne kontakten fra saken?',
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette kontakten.',
    'LBL_SALUTATION' => 'Hilsener',
    'LBL_CREATED_OPPORTUNITY' => 'Opprettet en ny salgsmulighet',
    'LNK_SELECT_ACCOUNT' => "Velg Kunde",
    'LNK_NEW_PROSPECT' => 'Nytt mål',
    'LNK_PROSPECT_LIST' => 'Mål',
    'LNK_NEW_CAMPAIGN' => 'Ny kampanje',
    'LNK_CAMPAIGN_LIST' => 'Kampanjer',
    'LNK_NEW_PROSPECT_LIST' => 'Ny liste over mål',
    'LNK_PROSPECT_LIST_LIST' => 'Mållister',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Velg avkryssede mål',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Velg avkryssede mål',
    'LBL_INVALID_EMAIL' => 'Ugyldig e-post',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mål',
    'LBL_PROSPECT_LIST' => 'Prospektliste',
    'LBL_CONVERT_BUTTON_TITLE' => 'Gjør om utvalgt mål',
    'LBL_CONVERT_BUTTON_LABEL' => 'Gjør om utvalgt mål',
    'LNK_NEW_CONTACT' => 'Ny kontakt',
    'LBL_CREATED_CONTACT' => "Opprettet en ny kontakt",
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje logg',
    'LBL_TRACKER_KEY' => 'Sporingsnøkkel',
    'LBL_LEAD_ID' => 'Ledetråd Id',
    'LBL_CONVERTED_LEAD' => 'Omgjort ledetråd',
    'LBL_ACCOUNT_NAME' => 'Navn på kunden',
    'LBL_EDIT_ACCOUNT_NAME' => 'Navn på Kunde:',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Bruker er endret',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Hendelser',
);
