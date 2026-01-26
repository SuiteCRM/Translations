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
    'ERR_DELETE_RECORD' => 'Geef een record ID op om de contactpersoon te verwijderen.',
    'LBL_ACCOUNT_ID' => 'Relatie ID:',
    'LBL_ACCOUNT_NAME' => 'Relatienaam:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatief adres plaats:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatief land adres:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatieve postcode adres:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatief adres provincie:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatief adres straat 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatief adres straat 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatief adres straat:',
    'LBL_ALTERNATE_ADDRESS' => 'Alt. adres:',
    'LBL_ALT_ADDRESS' => 'Alt. adres:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_ANY_EMAIL' => 'Willekeurige E-mail:',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker',
    'LBL_ASSISTANT_PHONE' => 'Telefoonnr assistent',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Verjaardag:',
    'LBL_CITY' => 'Plaats:',
    'LBL_CAMPAIGN_ID' => 'Campagne Id',
    'LBL_CONTACT_INFORMATION' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contactpersoon-kans:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Naam contactpersoon:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Nieuwe relatie aangemaakt',
    'LBL_CREATED_CALL' => 'Nieuw telefoongesprek aangemaakt',
    'LBL_CREATED_CONTACT' => 'Nieuwe contactpersoon aangemaakt',
    'LBL_CREATED_MEETING' => 'Nieuwe afspraak aangemaakt',
    'LBL_CREATED_OPPORTUNITY' => 'Nieuwe kans aangemaakt',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Directe Rapportages',
    'LBL_DO_NOT_CALL' => 'Niet bellen:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele contactpersoon',
    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt-out:',
    'LBL_EXISTING_ACCOUNT' => 'Bestaande relatie gebruikt',
    'LBL_EXISTING_CONTACT' => 'Bestaande contactpersoon gebruikt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestaande kans gebruikt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_HOME_PHONE' => 'Priv',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importeer vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Maak automatisch een nieuwe contactpersoon aan door een vCard van uw computer te importeren.',
    'LBL_INVALID_EMAIL' => 'Ongeldig E-mail:',
    'LBL_INVITEE' => 'Directe Rapportages',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accepteer status',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mails',
    'LBL_LIST_FIRST_NAME' => 'Voornaam',
    'LBL_LIST_FORM_TITLE' => 'Contactpersonen',
    'LBL_LIST_LAST_NAME' => 'Achternaam',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_PHONE' => 'Zakelijk telefoon',
    'LBL_LIST_TITLE' => 'Functieomschrijving',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_MODIFIED' => 'Gewijzigd door:',
    'LBL_MODULE_NAME' => 'Contactpersonen',
    'LBL_MODULE_TITLE' => 'Contactpersonen: Start',
    'LBL_NAME' => 'Naam:',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe contactpersoon',
    'LBL_NOTE_SUBJECT' => 'Notitie onderwerp',
    'LBL_OFFICE_PHONE' => 'Telefoon (werk):',
    'LBL_OPP_NAME' => 'Kansnaam:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Kans rol ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Kans rol',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alternatief e-mailadres:',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_PHONE' => 'Telefoon:',
    'LBL_PORTAL_APP' => 'Portal Applicatie:',
    'LBL_PORTAL_INFORMATION' => 'Portal gegevens',
    'LBL_PORTAL_NAME' => 'Portal naam:',
    'LBL_STREET' => 'Straat',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Plaats:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primair Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primair provincie:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primair adres straat 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primair adres straat 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Straat + huisnummer:',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
    'LBL_PRODUCTS_TITLE' => 'Producten',
    'LBL_REPORTS_TO_ID' => 'Leidinggevende ID:',
    'LBL_REPORTS_TO' => 'Rapporteert aan:',
    'LBL_RESOURCE_NAME' => 'Resource naam',
    'LBL_SALUTATION' => 'Aanhef:',
    'LBL_SAVE_CONTACT' => 'Contactpersoon opslaan',
    'LBL_SEARCH_FORM_TITLE' => 'Contactpersoon zoeken',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteer gekozen contacten.',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecteer gekozen contacten.',
    'LBL_STATE' => 'Provincie of regio:',
    'LBL_SYNC_CONTACT' => 'Synchroniseer naar MS Outlook:',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LNK_CONTACT_LIST' => 'Contactpersonen',
    'LNK_IMPORT_VCARD' => 'Aanmaken vanaf vCard',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_NEW_APPOINTMENT' => 'Nieuwe afspraak',
    'LNK_NEW_CALL' => 'Telefoongesprek inplannen',
    'LNK_NEW_CASE' => 'Nieuw verzoek',
    'LNK_NEW_CONTACT' => 'Nieuw contactpersoon',
    'LNK_NEW_EMAIL' => 'E-mail archiveren',
    'LNK_NEW_MEETING' => 'Vergadering plannen',
    'LNK_NEW_NOTE' => 'Nieuwe notitie',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe kans',
    'LNK_NEW_TASK' => 'Nieuwe taak',
    'LNK_SELECT_ACCOUNT' => "Kies een relatie",
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Voor het aanmaken van een kans is een relatie nodig. Maak een nieuwe relatie aan of kies een bestaande relatie waaraan u deze kans wilt koppelen.',
    'NTC_REMOVE_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen voor dit verzoek?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiëren naar primair adres',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiëren naar ander adres',

    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fouten',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_PROJECTS_RESOURCES' => 'Project resources',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_STATE' => 'Status',
    'LBL_HOMEPAGE_TITLE' => 'Mijn contactpersonen',
    'LBL_OPPORTUNITIES' => 'Kansen',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LNK_IMPORT_CONTACTS' => 'Importeren Contactpersonen ',

    // SNIP
    'LBL_USER_SYNC' => 'Gebruikers sync',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Evenementen',

    'LBL_AOP_CASE_UPDATES' => 'Verzoeklijst bijwerken',
    'LBL_CREATE_PORTAL_USER' => 'Aanmaken Portal gebruiker',
    'LBL_ENABLE_PORTAL_USER' => 'Inschakelen Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER' => 'Uitschakelen Portal gebruiker',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker aan te maken',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker in te schakelen',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Mislukt om een Portal gebruiker uit te schakelen',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal gebruiker aangemaakt',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Ingeschakelt Portal gebruiker',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Uitgeschakelt Portal gebruiker',
    'LBL_NO_JOOMLA_URL' => 'Geen Portal URL gespecificeerd',
    'LBL_PORTAL_USER_TYPE' => 'Portal gebruikers type',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Account uitgeschakeld',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla Account-ID',

    'LBL_AOS_CONTRACTS' => 'Contracten',
    'LBL_AOS_INVOICES' => 'Facturen',
    'LBL_AOS_QUOTES' => 'Offerten',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Project contactpersonen uit de titel van het Project',

    'LBL_LIST_INVITE_STATUS' => 'Status uitnodiging',
);
