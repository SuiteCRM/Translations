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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    // Dashlet Categories
    'LBL_CHARTS' => 'Grafieken',
    'LBL_DEFAULT' => 'Overzichten',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om deze relatie te verwijderen.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERZICHT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Bedrijfsnaam:',
    'LBL_ACCOUNT' => 'Relatie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ANNUAL_REVENUE' => 'Jaarlijkse Inkomsten:',
    'LBL_ANY_ADDRESS' => 'Elk adres:',
    'LBL_ANY_EMAIL' => '(Deel van) e-mail:',
    'LBL_ANY_PHONE' => 'Elk telefoon:',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker:',
    'LBL_BILLING_ADDRESS_CITY' => 'Facturering plaats:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Facturering land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Facturering postcode:',
    'LBL_BILLING_ADDRESS_STATE' => 'Facturering Provincie:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Factuuradres straat 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Factuuradres straat 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Factuuradres straat 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Factuuradres straat:',
    'LBL_BILLING_ADDRESS' => 'Factuuradres:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fouten',
    'LBL_CAMPAIGN_ID' => 'Campagne Id',
    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_CITY' => 'Plaats:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Aangemaakt op:',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Organisaties',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschrijving informatie',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_DUPLICATE' => 'Mogelijk dubbel account',
    'LBL_EMAIL' => 'E-mailadres:',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt-out:',
    'LBL_EMAIL_ADDRESSES' => 'E-mailadressen',
    'LBL_EMPLOYEES' => 'Werknemers:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_HOMEPAGE_TITLE' => 'Mijn relaties',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_INVALID_EMAIL' => 'Ongeldig E-mail:',
    'LBL_INVITEE' => 'Contactpersonen',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kansen',
    'LBL_LIST_ACCOUNT_NAME' => 'Naam',
    'LBL_LIST_CITY' => 'Plaats',
    'LBL_LIST_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailadres',
    'LBL_LIST_FORM_TITLE' => 'Relaties',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_STATE' => 'Status',
    'LBL_MEMBER_OF' => 'Lid van:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Dochterorganisaties',
    'LBL_MODULE_NAME' => 'Organisaties',
    'LBL_MODULE_TITLE' => 'Relaties: Start',
    'LBL_MODULE_ID' => 'Organisaties',
    'LBL_NAME' => 'Naam: ',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe relatie',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Kansen',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Ander e-mailadres:',
    'LBL_OTHER_PHONE' => 'Ander telefoonnummer:',
    'LBL_OWNERSHIP' => 'Eigenaar:',
    'LBL_PARENT_ACCOUNT_ID' => 'Bovenliggende klant ID',
    'LBL_PHONE_ALT' => 'Alternatief telefoonnummer:',
    'LBL_PHONE_FAX' => 'Telefoon fax:',
    'LBL_PHONE_OFFICE' => 'Telefoon kantoor:',
    'LBL_PHONE' => 'Telefoonnummer:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_PRODUCTS_TITLE' => 'Producten',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopieer naar contacten',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopieer...',
    'LBL_RATING' => 'Beoordeling:',
    'LBL_SAVE_ACCOUNT' => 'Organisatie opslaan',
    'LBL_SEARCH_FORM_TITLE' => 'Relaties zoeken',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Plaats:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Postcode:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Verzend provincie:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Verzend straat 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Verzend straat 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Verzend straat 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Straat + huisnummer:',
    'LBL_SHIPPING_ADDRESS' => 'Afleveradres:',
    'LBL_SIC_CODE' => 'BIK code:',
    'LBL_STATE' => 'Provincie/regio:',
    'LBL_TICKER_SYMBOL' => 'Beurssymbool:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LNK_ACCOUNT_LIST' => 'Relaties bekijken',
    'LNK_NEW_ACCOUNT' => 'Nieuwe relatie',
    'LNK_IMPORT_ACCOUNTS' => 'Importeer relaties',
    'MSG_DUPLICATE' => 'Toevoegen van deze relatie kan resulteren in een dubbele relatie. U kunt een relatie kiezen uit de onderstaande lijst of een Nieuwe relatie toevoegen om door te gaan met toevoegen van het relatie.<br>Klik op Opslaan om door te gaan met het maken van deze nieuwe relatie, of klik Annuleren om terug te keren naar de module zonder de relatie aan te maken.',
    'MSG_SHOW_DUPLICATES' => 'Toevoegen van deze relatie kan resulteren in een dubbele relatie. U kunt een relatie kiezen uit de onderstaande lijst of een Nieuwe relatie toevoegen om door te gaan met toevoegen van het relatie.<br>Klik op Opslaan om door te gaan met het maken van deze nieuwe relatie, of klik Annuleren om terug te keren naar de module zonder de relatie aan te maken.',
    'LBL_ASSIGNED_USER_NAME' => 'Assigned to:',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Producten en diensten gekocht',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_LIST_WEBSITE' => 'website',
);
