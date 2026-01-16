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
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette kontakten.',
    'LBL_ACCOUNT_ID' => 'Kunde ID:',
    'LBL_ACCOUNT_NAME' => 'Navn på Kunde:',
    'LBL_CAMPAIGN' => 'Kampanje:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Addresseinfo',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse, sted:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse, land:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse, postnr:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse, stat:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adresse, gatenavn 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adresse, gatenavn 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse, gatenavn:',
    'LBL_ALTERNATE_ADDRESS' => 'Annen adresse:',
    'LBL_ALT_ADDRESS' => 'Annen adresse:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_ANY_EMAIL' => 'Vilkårlig e-post:',
    'LBL_ANY_PHONE' => 'Vilkårlig tlf:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt brukers navn:',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruker',
    'LBL_ASSISTANT_PHONE' => 'Assistents telefonnr:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_CITY' => 'By:',
    'LBL_CAMPAIGN_ID' => 'Kampanje ID',
    'LBL_CONTACT_INFORMATION' => 'Info om kunden', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontaktnavn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt - salgsmulighet',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Opprettet en ny Kunde',
    'LBL_CREATED_CALL' => 'Opprettet en ny oppringning',
    'LBL_CREATED_CONTACT' => 'Opprettet en ny kontakt',
    'LBL_CREATED_MEETING' => 'Opprettet et nytt møte',
    'LBL_CREATED_OPPORTUNITY' => 'Opprettet en ny salgsmulighet',
    'LBL_DATE_MODIFIED' => 'Date endret:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DEPARTMENT' => 'Avdeling:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direkterapporter',
    'LBL_DO_NOT_CALL' => 'Ikke ring:',
    'LBL_DUPLICATE' => 'Mulig duplikat av en kontakt',
    'LBL_EMAIL_ADDRESS' => 'E-post:',
    'LBL_EMAIL_OPT_OUT' => 'E-post Opt Out (bortvelg):',
    'LBL_EXISTING_ACCOUNT' => 'Benyttet en eksisterende Kunde',
    'LBL_EXISTING_CONTACT' => 'Benyttet en eksisterende kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Fra en eksisterende salgsmulighet',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_HOME_PHONE' => 'Forside:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Opprett en ny kontakt automatisk ved å importere et vCard.',
    'LBL_INVALID_EMAIL' => 'Ugyldig e-post',
    'LBL_INVITEE' => 'Direkterapporter',
    'LBL_LAST_NAME' => 'Etternavn:',
    'LBL_LEAD_SOURCE' => 'Kilde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aksepter status',
    'LBL_LIST_ACCOUNT_NAME' => 'Navn på kunden',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktens navn',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
    'LBL_LIST_FIRST_NAME' => 'Fornavn:',
    'LBL_LIST_FORM_TITLE' => 'Kontaktliste',
    'LBL_LIST_LAST_NAME' => 'Etternavn',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_PHONE' => 'Tlf arbeid:',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Endret av bruker ID:',
    'LBL_MODULE_NAME' => 'Kontakter',
    'LBL_MODULE_TITLE' => 'Kontakter: Forside',
    'LBL_NAME' => 'Navn:',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_NOTE_SUBJECT' => 'Notat emne',
    'LBL_OFFICE_PHONE' => 'Tlf jobb:',
    'LBL_OPP_NAME' => 'Salgsmulighetens betegnelse:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Salgsmulighet rolle ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Salgsmulighet Rolle',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annen e-post:',
    'LBL_OTHER_PHONE' => 'Annet telefonnr:',
    'LBL_PHONE' => 'Telefonnr:',
    'LBL_PORTAL_APP' => 'Portal applikasjon:',
    'LBL_PORTAL_INFORMATION' => 'Portalinformasjon',
    'LBL_PORTAL_NAME' => 'Portalens navn:',
    'LBL_STREET' => 'Gate',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primæradresse, sted:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primæradresse, land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primæradresse, postnr:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primæradresse, stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primæradresse, gatenavn 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primæradresse, gatenavn 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primæradresse, gatenavn:',
    'LBL_PRIMARY_ADDRESS' => 'Primæradresse:',
    'LBL_PRODUCTS_TITLE' => 'Produkter',
    'LBL_REPORTS_TO_ID' => 'Rapporterer til ID:',
    'LBL_REPORTS_TO' => 'Rapporterer til:',
    'LBL_RESOURCE_NAME' => 'Ressursnavn',
    'LBL_SALUTATION' => 'Tittel',
    'LBL_SAVE_CONTACT' => 'Lagre kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter kontakt',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Velg merkede kontakter',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Velg merkede kontakter',
    'LBL_STATE' => 'Delstat eller område:',
    'LBL_SYNC_CONTACT' => 'Synkroniser til Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospektliste',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'Kontakter',
    'LNK_IMPORT_VCARD' => 'Opprett ved hjelp av vCard',
    'LNK_NEW_ACCOUNT' => 'Ny forbindelse',
    'LNK_NEW_APPOINTMENT' => 'Ny oppringning',
    'LNK_NEW_CALL' => 'Ny oppringning',
    'LNK_NEW_CASE' => 'Ny sak (kundestøtte)',
    'LNK_NEW_CONTACT' => 'Opprett kontakt',
    'LNK_NEW_EMAIL' => 'Arkiver e-post',
    'LNK_NEW_MEETING' => 'Nytt møte',
    'LNK_NEW_NOTE' => 'Nytt notat eller vedlegg',
    'LNK_NEW_OPPORTUNITY' => 'Ny salgsmulighet',
    'LNK_NEW_TASK' => 'Ny oppgave',
    'LNK_SELECT_ACCOUNT' => "Velg Kunde",
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Opprettelsen av en ny salgsmulighet krever en Kunde.<br> Enten opprett ny, eller velg en allerede eksisterende.',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du vil fjerne denne kontakten fra saken?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Ledetråder',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Salgsmuligheter',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopier til primæradresse',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopier til annen adresse',

    'LBL_CASES_SUBPANEL_TITLE' => 'Kundestøtte',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Feil',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Prosjekter',
    'LBL_PROJECTS_RESOURCES' => 'Prosjektressurser',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjer',
    'LBL_LIST_CITY' => 'By:',
    'LBL_LIST_STATE' => 'Fylke:',
    'LBL_HOMEPAGE_TITLE' => 'Mine kontakter',
    'LBL_OPPORTUNITIES' => 'Salgsmuligheter',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Prosjekter',
    'LNK_IMPORT_CONTACTS' => 'Importer kontakter',

    // SNIP
    'LBL_USER_SYNC' => 'Bruker synkronisering',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Hendelser',

    'LBL_AOP_CASE_UPDATES' => 'Sak Oppdateringer',
    'LBL_CREATE_PORTAL_USER' => 'Lag Portal Bruker',
    'LBL_ENABLE_PORTAL_USER' => 'Slå på Portalbruker',
    'LBL_DISABLE_PORTAL_USER' => 'Slå av Portalbruker',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Kunne ikke opprette Portalbruker',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Kunne ikke slå på portalbruker',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Kunne ikke slå av portalbruker',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Opprettet portalbruker',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Slo på portalbruker',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Slo av portalbruker',
    'LBL_NO_JOOMLA_URL' => 'Ingen portal-URL oppgitt',
    'LBL_PORTAL_USER_TYPE' => 'Portalbrukertype',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto deaktivert',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Konto ID',

    'LBL_AOS_CONTRACTS' => 'Kontrakter',
    'LBL_AOS_INVOICES' => 'Fakturaer',
    'LBL_AOS_QUOTES' => 'Tilbud',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project Contacts from Project Title',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'Status invitasjon',
);
