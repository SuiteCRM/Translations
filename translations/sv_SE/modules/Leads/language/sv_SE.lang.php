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

    'ERR_DELETE_RECORD' => 'Du måste ange ett postnummer för att kunna ta bort leaden.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Företagsbeskrivning',
    'LBL_ACCOUNT_ID' => 'Företags-ID',
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressuppgifter',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adressort',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adressland',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativt postnummer',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ region',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adressrad 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adressrad 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ gatuadress',
    'LBL_ALTERNATE_ADDRESS' => 'Annan adress:',
    'LBL_ALT_ADDRESS' => 'Annan adress:',
    'LBL_ANY_ADDRESS' => 'Valfri adress:',
    'LBL_ANY_EMAIL' => 'Valfri e-postadress:',
    'LBL_ANY_PHONE' => 'Valfritt telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare:',
    'LBL_CITY' => 'Ort:',
    'LBL_CONTACT_ID' => 'Kontakt-ID',
    'LBL_CONTACT_INFORMATION' => 'ÖVERSIKT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Leadnamn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead–affär:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT' => 'Konverterat företag:',
    'LBL_CONVERTED_CONTACT' => 'Konverterad kontakt:',
    'LBL_CONVERTED_OPP' => 'Konverterad affärsmöjlighet',
    'LBL_CONVERTED' => 'Konverterad',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Konvertera lead',
    'LBL_CONVERTLEAD' => 'Konvertera lead',
    'LBL_CONVERTLEAD_WARNING' => 'Varning: Statusen har redan den status du försöker ändra till. Kontakt och/eller Konto posterna kan redan ha skapats från ditt lead. Om du önskar fortsätta ändra statusen, klicka "Spara". För att gå tillbaka utan att uppdatera, klicka "Avbryt".',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Möjlig kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_NEW' => 'Skapade ny',
    'LBL_CREATED_ACCOUNT' => 'Skapade ett nytt företag',
    'LBL_CREATED_CALL' => 'Skapade ett nytt samtal',
    'LBL_CREATED_CONTACT' => 'Skapade en ny kontakt',
    'LBL_CREATED_MEETING' => 'Skapade ett nytt möte',
    'LBL_CREATED_OPPORTUNITY' => 'Skapade en ny affärsmöjlighet',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kundämnen',
    'LBL_DEPARTMENT' => 'Avdelning:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DO_NOT_CALL' => 'Ring inte:',
    'LBL_DUPLICATE' => 'Liknande kundämnen',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_EMAIL_OPT_OUT' => 'Avregistrera från e-post:',
    'LBL_EXISTING_ACCOUNT' => 'Använde ett befintligt företag',
    'LBL_EXISTING_CONTACT' => 'Använde en befintlig kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Använde en befintlig affärsmöjlighet',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_HOME_PHONE' => 'Hemtelefon:',
    'LBL_IMPORT_VCARD' => 'Importera vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Skapa ett lead automatiskt vid import av vCard från ditt filsystem.',
    'LBL_INVALID_EMAIL' => 'Ogiltig e-postadress:',
    'LBL_INVITEE' => 'Direktrapporterande',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Lead källa, beskrivning:',
    'LBL_LEAD_SOURCE' => 'Leadkälla:',
    'LBL_LIST_ACCEPT_STATUS' => 'Svarsstatus',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_CONTACT_NAME' => 'Lead namn',
    'LBL_LIST_CONTACT_ROLE' => 'Roll',
    'LBL_LIST_DATE_ENTERED' => 'Datum Skapat',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
    'LBL_LIST_FIRST_NAME' => 'Förnamn',
    'LBL_LIST_FORM_TITLE' => 'Lista kundämne',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Lead källa, beskrivning',
    'LBL_LIST_LEAD_SOURCE' => 'Kundämne källa',
    'LBL_LIST_MY_LEADS' => 'Mina kundämnen',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_PHONE' => 'Jobb Telefon',
    'LBL_LIST_REFERED_BY' => 'Refererad av',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Jobbtitel',
    'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
    'LBL_MODULE_NAME' => 'Kundämnen',
    'LBL_MODULE_TITLE' => 'Kundämnen: Hem',
    'LBL_NAME' => 'Namn:',
    'LBL_NEW_FORM_TITLE' => 'Nytt lead',
    'LBL_OFFICE_PHONE' => 'Telefon arbete:',
    'LBL_OPP_NAME' => 'Affärsmöjlighetens namn:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Affärsmöjlighet summa',
    'LBL_OPPORTUNITY_ID' => 'Affärsmöjlighet ID',
    'LBL_OPPORTUNITY_NAME' => 'Affärsmöjlighetens namn:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternativ E-post:',
    'LBL_OTHER_PHONE' => 'Övrig telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal applikation:',
    'LBL_PORTAL_INFORMATION' => 'Portaluppgifter',
    'LBL_PORTAL_NAME' => 'Portalnamn:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_STREET' => 'Gata',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primär adress stad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primär adress land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primär adress postnummer:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primär adress stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primär adress gata 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primär adress gata 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primär adress gata:',
    'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
    'LBL_REFERED_BY' => 'Refererad av:',
    'LBL_REPORTS_TO_ID' => 'Rapporterar till ID:',
    'LBL_REPORTS_TO' => 'Rapporterar till:',
    'LBL_SALUTATION' => 'Hälsningsfras',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_CREATED' => 'Skapad av',
    'LBL_SEARCH_FORM_TITLE' => 'Sök lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade kundämnen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade kundämnen',
    'LBL_STATE' => 'Län/region:',
    'LBL_STATUS_DESCRIPTION' => 'Status beskrivning:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Jobbtitel:',
    'LNK_IMPORT_VCARD' => 'Skapa från vCard',
    'LNK_LEAD_LIST' => 'Visa kundämnen',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_APPOINTMENT' => 'Skapa bokning',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_LEAD' => 'Skapa lead',
    'LNK_NEW_NOTE' => 'Skapa anteckning',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_NEW_CASE' => 'Skapa ärende',
    'LNK_NEW_CALL' => 'Logga samtal',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
    'LNK_SELECT_ACCOUNTS' => '<B>ELLER</B> Välj konto',
    'LNK_SELECT_CONTACTS' => ' <b>ELLER</b> välj kontakt',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort den här posten?',
    'NTC_SNOOZE_CONFIRMATION' => 'Är du säker på att du vill skjuta upp påminnelsen?',
    'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort leadet från ärendet?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjer',
    'LBL_CAMPAIGN' => 'Kampanj:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_PROSPECT_LIST' => 'Prospektlista',
    'LBL_CAMPAIGN_LEAD' => 'Kampanjer',
    'LBL_BIRTHDATE' => 'Födelsedatum:',
    'LBL_ASSISTANT_PHONE' => 'Assistent Telefon',
    'LBL_ASSISTANT' => 'Assistent',
    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Obligatoriskt',
    'LBL_CONVERT_SELECT' => 'Tillåt val',
    'LBL_CONVERT_COPY' => 'Kopiera data',
    'LBL_CONVERT_EDIT' => 'Redigera',
    'LBL_CONVERT_DELETE' => 'Ta bort',
    'LBL_CONVERT_ADD_MODULE' => 'Lägg till modul',
    'LBL_CREATE' => 'Skapa',
    'LBL_SELECT' => '<b>OR</B> Välj',
    'LBL_WEBSITE' => 'Webbplats',
    'LNK_IMPORT_LEADS' => 'Importera kundämnen',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Modulen att skapa nya poster i.',
    'LBL_REQUIRED_TIP' => 'Obligatorisk modul måste först skapas eller väljas innan ett lead kan konverteras.',
    'LBL_COPY_TIP' => 'Om checkad, fält från det lead som ska kopieras kommer att kopieras till fält med samma namn i nyligen skapade poster.',
    'LBL_SELECTION_TIP' => 'Moduler med ett relationsfält i kontakter kan väljas istället för skapas under lead konverteringsprocessen.',
    'LBL_EDIT_TIP' => 'Ändra konverterings layouten för denna modul.',
    'LBL_DELETE_TIP' => 'Ta bort denna modul från konverterings layouten.',

    'LBL_ACTIVITIES_MOVE' => 'Flytta aktiviteter till',
    'LBL_ACTIVITIES_COPY' => 'Kopiera aktiviteter till',
    'LBL_ACTIVITIES_MOVE_HELP' => "Välj den post som leadets aktiviteter ska flyttas till. Uppgifter, samtal, möten, anteckningar och e-postmeddelanden flyttas till de valda posterna.",
    'LBL_ACTIVITIES_COPY_HELP' => "Välj de poster som kopior av leadets aktiviteter ska skapas för. Nya uppgifter, samtal, möten och anteckningar skapas för var och en av de valda posterna. E-postmeddelanden kopplas till de valda posterna.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampanj-ID',
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Ange datum' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Laddar' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redigera' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Evenemang',
);
