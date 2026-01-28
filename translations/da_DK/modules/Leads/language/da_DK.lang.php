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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Kunde beskrivelse',
    'LBL_ACCOUNT_ID' => 'Kunde ID',
    'LBL_ACCOUNT_NAME' => 'Kundenavn:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ Adresse By',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ Adresse Land',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ Adresse Postnr',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ Adresse Stat',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ Adresse Gadenavn 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ Adresse Gadenavn 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ Adresse Gadenavn',
    'LBL_ALTERNATE_ADDRESS' => 'Anden adresse:',
    'LBL_ALT_ADDRESS' => 'Anden adresse:',
    'LBL_ANY_ADDRESS' => 'Nogen adresse:',
    'LBL_ANY_EMAIL' => 'Nogen email:',
    'LBL_ANY_PHONE' => 'Nogen telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger:',
    'LBL_CITY' => 'By:',
    'LBL_CONTACT_ID' => 'Kontakt ID',
    'LBL_CONTACT_INFORMATION' => 'Kunde Information', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Emnenavn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Emne-Mulighed:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Emne:',
    'LBL_CONVERTED_ACCOUNT' => 'Konverteret kunde:',
    'LBL_CONVERTED_CONTACT' => 'Konverteret kontakt:',
    'LBL_CONVERTED_OPP' => 'Konverteret mulighed:',
    'LBL_CONVERTED' => 'Konverteret',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konverter emne',
    'LBL_CONVERTLEAD' => 'Konverter emne',
    'LBL_CONVERTLEAD_WARNING' => 'Advarsel: Status på kundeemnet som du er ved at konvertere er "konverteret". Kontakt og/eller virksomheden er muligvis allerede oprettet fra kundeemnet. Hvis du ønsker at fortsætte med konverteringen, tryk Gem. For at gå tilbage til kundeemnet uden at konvertere, tryk Annullere.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mulig kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Opret ny',
    'LBL_CREATED_ACCOUNT' => 'Opret en ny kunde',
    'LBL_CREATED_CALL' => 'Oprettede et nyt opkald',
    'LBL_CREATED_CONTACT' => 'Oprettede en ny kontakt',
    'LBL_CREATED_MEETING' => 'Oprettede et nyt møde',
    'LBL_CREATED_OPPORTUNITY' => 'Oprettede en ny mulighed',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Emner',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_DO_NOT_CALL' => 'Ønsker ikke opkald:',
    'LBL_DUPLICATE' => 'Tilsvarende emne',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt-Out:',
    'LBL_EXISTING_ACCOUNT' => 'Brugte en eksisterende kunde',
    'LBL_EXISTING_CONTACT' => 'Brugte en eksisterende kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Brugte en eksisterende mulighed',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_HOME_PHONE' => 'Privat telefon:',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatisk oprettelse af et nyt emne ved importering af vCard.',
    'LBL_INVALID_EMAIL' => 'Ugyldig Email:',
    'LBL_INVITEE' => 'Rapporter',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Emne kilde beskrivelse:',
    'LBL_LEAD_SOURCE' => 'Kilde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accepter status',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_CONTACT_NAME' => 'Emnenavn',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_LIST_EMAIL_ADDRESS' => 'Emails',
    'LBL_LIST_FIRST_NAME' => 'Fornavn',
    'LBL_LIST_FORM_TITLE' => 'Emne liste',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Emne Kilde beskrivelse',
    'LBL_LIST_LEAD_SOURCE' => 'Emne kilde',
    'LBL_LIST_MY_LEADS' => 'Mine emner',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_PHONE' => 'Arbejdstelefon',
    'LBL_LIST_REFERED_BY' => 'Henvist af',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Jobtitel',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Emner',
    'LBL_MODULE_TITLE' => 'Emne: Hjem',
    'LBL_NAME' => 'Navn:',
    'LBL_NEW_FORM_TITLE' => 'Nyt emne',
    'LBL_OFFICE_PHONE' => 'Arbejdstelefon:',
    'LBL_OPP_NAME' => 'Navn på mulighed:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Mulighed Beløb:',
    'LBL_OPPORTUNITY_ID' => 'Mulighed ID',
    'LBL_OPPORTUNITY_NAME' => 'Navn på mulighed:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Andre Email:',
    'LBL_OTHER_PHONE' => 'Andre Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal Applikation',
    'LBL_PORTAL_INFORMATION' => 'Portal information',
    'LBL_PORTAL_NAME' => 'Portalnavn:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_STREET' => 'Gade',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær Adresse By',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær Adresse Land',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær Adresse Postnr',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær Adresse Stat',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær Adresse Gadenavn 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær Adresse Gadenavn 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær Adresse Gadenavn',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
    'LBL_REFERED_BY' => 'Henvist af:',
    'LBL_REPORTS_TO_ID' => 'Overordnet ID',
    'LBL_REPORTS_TO' => 'Overordnet:',
    'LBL_SALUTATION' => 'Tiltaleform',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_SEARCH_FORM_TITLE' => 'Emne søgning',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg checket emner',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg checket emner',
    'LBL_STATE' => 'Stat eller Region:',
    'LBL_STATUS_DESCRIPTION' => 'Status beskrivelse:',
    'LBL_STATUS' => 'Status',
    'LBL_TITLE' => 'Jobtitel:',
    'LNK_IMPORT_VCARD' => 'Opret fra vCard',
    'LNK_LEAD_LIST' => 'Vis emner',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'LNK_NEW_APPOINTMENT' => 'Planlæg opkald',
    'LNK_NEW_CONTACT' => 'Opret kontakt',
    'LNK_NEW_LEAD' => 'Opret emne',
    'LNK_NEW_NOTE' => 'Opret note',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>ELLER</b> Vælg kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du ønsker at slette dette emne fra sagen?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagner',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
    'LBL_CAMPAIGN_LEAD' => 'Kampagner',
    'LBL_BIRTHDATE' => 'Fødselsdato:',
    'LBL_ASSISTANT_PHONE' => 'Assistent telefon',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Obligatorisk',
    'LBL_CONVERT_SELECT' => 'Tillad valg',
    'LBL_CONVERT_COPY' => 'Kopier data',
    'LBL_CONVERT_EDIT' => 'Rediger',
    'LBL_CONVERT_DELETE' => 'Slet',
    'LBL_CONVERT_ADD_MODULE' => 'Tilføj modul',
    'LBL_CREATE' => 'Opret',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Websted',
    'LNK_IMPORT_LEADS' => 'Importér kundeemner',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulet til at oprette en ny post i.',
    'LBL_REQUIRED_TIP' => 'Nødvendige moduler skal oprettes eller vælges før kundeemnet kan konverteres.',
    'LBL_COPY_TIP' => 'Hvis markeret, vil felter fra kundeemnet blive kopieret til felter med samme navn i de nyoprettede poster.',
    'LBL_SELECTION_TIP' => 'Moduler med et relateret felt i kontakter kan vælges i stedet for skabt i løbet af konverter kundeemne processen.',
    'LBL_EDIT_TIP' => 'Ændre konverter layout for dette modul.',
    'LBL_DELETE_TIP' => 'Fjern dette modul fra konverter layout.',

    'LBL_ACTIVITIES_MOVE' => 'Flyt aktiviteter til',
    'LBL_ACTIVITIES_COPY' => 'Kopier aktiviteter til',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Indtast dato' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loader' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediger' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
