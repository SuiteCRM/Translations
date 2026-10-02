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
    'ERR_DELETE_RECORD' => 'Ange postnumret för den kontakt som ska tas bort.',
    'LBL_ACCOUNT_ID' => 'Företags-ID:',
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_CAMPAIGN' => 'Kampanj:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressuppgifter',
    'LBL_ALT_ADDRESS_CITY' => 'Alternativ adressort:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adressland:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativt postnummer:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternativ region:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adressrad 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adressrad 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternativ gatuadress:',
    'LBL_ALTERNATE_ADDRESS' => 'Annan adress:',
    'LBL_ALT_ADDRESS' => 'Annan adress:',
    'LBL_ANY_ADDRESS' => 'Valfri adress:',
    'LBL_ANY_EMAIL' => 'Valfri e-postadress:',
    'LBL_ANY_PHONE' => 'Valfritt telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare',
    'LBL_ASSISTANT_PHONE' => 'Assistentens telefon:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Födelsedatum:',
    'LBL_CITY' => 'Ort:',
    'LBL_CAMPAIGN_ID' => 'Kampanj-ID',
    'LBL_CONTACT_INFORMATION' => 'ÖVERSIKT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Kontaktens namn:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt–affär:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Skapade ett nytt företag',
    'LBL_CREATED_CALL' => 'Skapade ett nytt samtal',
    'LBL_CREATED_CONTACT' => 'Skapade en ny kontakt',
    'LBL_CREATED_MEETING' => 'Skapade ett nytt möte',
    'LBL_CREATED_OPPORTUNITY' => 'Skapade en ny affär',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DEPARTMENT' => 'Avdelning:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Underordnade',
    'LBL_DO_NOT_CALL' => 'Ring inte:',
    'LBL_DUPLICATE' => 'Möjliga dubblettkontakter',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_EMAIL_OPT_OUT' => 'Avstå från e-post:',
    'LBL_EXISTING_ACCOUNT' => 'Använde ett befintligt företag',
    'LBL_EXISTING_CONTACT' => 'Använde en befintlig kontakt',
    'LBL_EXISTING_OPPORTUNITY' => 'Använde en befintlig affär',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_HOME_PHONE' => 'Hem:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importera vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Skapa automatiskt en ny kontakt genom att importera ett vCard från ditt filsystem.',
    'LBL_INVALID_EMAIL' => 'Ogiltig e-postadress:',
    'LBL_INVITEE' => 'Underordnade',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_LEAD_SOURCE' => 'Leadkälla:',
    'LBL_LIST_ACCEPT_STATUS' => 'Svarsstatus',
    'LBL_LIST_ACCOUNT_NAME' => 'Företagsnamn',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktens namn',
    'LBL_LIST_CONTACT_ROLE' => 'Roll',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
    'LBL_LIST_FIRST_NAME' => 'Förnamn',
    'LBL_LIST_FORM_TITLE' => 'Kontaktlista',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_LIST_PHONE' => 'Telefon på arbetsplatsen',
    'LBL_LIST_TITLE' => 'Befattning',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODIFIED' => 'Ändrad av:',
    'LBL_MODULE_NAME' => 'Kontakter',
    'LBL_MODULE_TITLE' => 'Kontakter: startsida',
    'LBL_NAME' => 'Namn:',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_NOTE_SUBJECT' => 'Anteckningens ämne',
    'LBL_OFFICE_PHONE' => 'Telefon på arbetsplatsen:',
    'LBL_OPP_NAME' => 'Affärsnamn:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Affärsrolls-ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Affärsroll',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annan e-postadress:',
    'LBL_OTHER_PHONE' => 'Annan telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portalprogram:',
    'LBL_PORTAL_INFORMATION' => 'Portaluppgifter',
    'LBL_PORTAL_NAME' => 'Portalnamn:',
    'LBL_STREET' => 'Gata',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primär adressort:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primärt adressland:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primärt postnummer:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primär region:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primär adressrad 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primär adressrad 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primär gatuadress:',
    'LBL_PRIMARY_ADDRESS' => 'Primär adress:',
    'LBL_PRODUCTS_TITLE' => 'Produkter',
    'LBL_REPORTS_TO_ID' => 'Rapporterar till-ID:',
    'LBL_REPORTS_TO' => 'Rapporterar till:',
    'LBL_RESOURCE_NAME' => 'Resursnamn',
    'LBL_SALUTATION' => 'Tilltal:',
    'LBL_SAVE_CONTACT' => 'Spara kontakt',
    'LBL_SEARCH_FORM_TITLE' => 'Sök kontakter',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade kontakter',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade kontakter',
    'LBL_STATE' => 'Region:',
    'LBL_SYNC_CONTACT' => 'Synkronisera med Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospektlista',
    'LBL_TITLE' => 'Befattning:',
    'LNK_CONTACT_LIST' => 'Visa kontakter',
    'LNK_IMPORT_VCARD' => 'Skapa kontakt från vCard',
    'LNK_NEW_ACCOUNT' => 'Skapa företag',
    'LNK_NEW_APPOINTMENT' => 'Skapa avtalad tid',
    'LNK_NEW_CALL' => 'Registrera samtal',
    'LNK_NEW_CASE' => 'Skapa ärende',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_EMAIL' => 'Arkivera e-post',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_NOTE' => 'Skapa anteckning',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affär',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_SELECT_ACCOUNT' => "Välj företag",
    'NTC_DELETE_CONFIRMATION' => 'Vill du verkligen ta bort den här posten?',
    'NTC_SNOOZE_CONFIRMATION' => 'Vill du verkligen skjuta upp?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'För att skapa en affär krävs ett företag.\n Skapa ett nytt företag eller välj ett befintligt.',
    'NTC_REMOVE_CONFIRMATION' => 'Vill du verkligen ta bort den här kontakten från ärendet?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affärer',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiera till primär adress',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiera till annan adress',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fel',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_PROJECTS_RESOURCES' => 'Projektresurser',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjer',
    'LBL_LIST_CITY' => 'Ort',
    'LBL_LIST_STATE' => 'Region',
    'LBL_HOMEPAGE_TITLE' => 'Mina kontakter',
    'LBL_OPPORTUNITIES' => 'Affärer',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    'LNK_IMPORT_CONTACTS' => 'Importera kontakter',

    // SNIP
    'LBL_USER_SYNC' => 'Användarsynkronisering',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Evenemang',

    'LBL_AOP_CASE_UPDATES' => 'Ärendeuppdateringar',
    'LBL_CREATE_PORTAL_USER' => 'Skapa portalanvändare',
    'LBL_ENABLE_PORTAL_USER' => 'Aktivera portalanvändare',
    'LBL_DISABLE_PORTAL_USER' => 'Inaktivera portalanvändare',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Det gick inte att skapa portalanvändaren',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Det gick inte att aktivera portalanvändaren',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Det gick inte att inaktivera portalanvändaren',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portalanvändaren har skapats',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portalanvändaren har aktiverats',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portalanvändaren har inaktiverats',
    'LBL_FAILED_TO_CONNECT_JOOMLA' => 'Det gick inte att skapa portalanvändaren eftersom anslutningen till Joomla misslyckades',
    'LBL_ERROR_CONTACT_ID_OR_EMAIL_EMPTY' => 'Kontakt-ID eller e-postadress saknas',
    'LBL_NO_JOOMLA_URL' => 'Ingen portal-URL har angetts',
    'LBL_PORTAL_USER_TYPE' => 'Typ av portalanvändare',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Kontot är inaktiverat',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla-konto-ID',
    'LBL_AOP_DISABLED' => 'AOP är inaktiverat. Aktivera den i inställningarna',

    'LBL_AOS_CONTRACTS' => 'Avtal',
    'LBL_AOS_INVOICES' => 'Fakturor',
    'LBL_AOS_QUOTES' => 'Offerter',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projektkontakter från projektets titel',
    'LBL_LAST_MEETING' => 'Din senaste interaktion var ett möte den:',
    'LBL_LAST_CALL' => 'Din senaste interaktion var ett samtal den:',
    'LBL_LAST_EMAIL' => 'Din senaste interaktion var ett e-postmeddelande den:',
    'LBL_NO_INTERACTION' => 'Du har ännu inte haft någon interaktion med den här kontakten.',

    'LBL_LIST_INVITE_STATUS' => 'Inbjudningsstatus',
);
