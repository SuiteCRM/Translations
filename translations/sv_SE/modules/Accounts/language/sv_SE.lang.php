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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    // Dashlet Categories
    'LBL_CHARTS' => 'Diagram',
    'LBL_DEFAULT' => 'Vyer',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Du måste ange ett postnummer för att kunna ta bort företaget.',
    'LBL_ACCOUNT_INFORMATION' => 'ÖVERSIKT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_ACCOUNT' => 'Företag:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ADDRESS_INFORMATION' => 'Adressuppgifter',
    'LBL_ANNUAL_REVENUE' => 'Årsomsättning:',
    'LBL_ANY_ADDRESS' => 'Valfri adress:',
    'LBL_ANY_EMAIL' => 'Valfri e-postadress:',
    'LBL_ANY_PHONE' => 'Valfritt telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användare:',
    'LBL_BILLING_ADDRESS_CITY' => 'Faktureringsort:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faktureringsland:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faktureringspostnummer:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faktureringsregion:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faktureringsadressrad 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faktureringsadressrad 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faktureringsadressrad 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faktureringsgatuadress:',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadress:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fel',
    'LBL_CAMPAIGN_ID' => 'Kampanj-ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_CITY' => 'Ort:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Skapat datum:',
    'LBL_DATE_MODIFIED' => 'Ändringsdatum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Företag',
    'LBL_DESCRIPTION_INFORMATION' => 'Beskrivningsuppgifter',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_DUPLICATE' => 'Möjligt dubblettföretag',
    'LBL_EMAIL' => 'E-postadress:',
    'LBL_EMAIL_OPT_OUT' => 'Avstå från e-post:',
    'LBL_EMAIL_ADDRESSES' => 'E-postadresser',
    'LBL_EMPLOYEES' => 'Anställda:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_HOMEPAGE_TITLE' => 'Mina företag',
    'LBL_INDUSTRY' => 'Bransch:',
    'LBL_INVALID_EMAIL' => 'Ogiltig e-postadress:',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_LIST_ACCOUNT_NAME' => 'Namn',
    'LBL_LIST_CITY' => 'Ort',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktens namn',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_LIST_FORM_TITLE' => 'Företagslista',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Region',
    'LBL_MEMBER_OF' => 'Medlem i:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Medlemsorganisationer',
    'LBL_MODULE_NAME' => 'Företag',
    'LBL_MODULE_TITLE' => 'Företag: startsida',
    'LBL_MODULE_ID' => 'Företag',
    'LBL_NAME' => 'Namn:',
    'LBL_NEW_FORM_TITLE' => 'Nytt företag',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affärer',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Annan e-postadress:',
    'LBL_OTHER_PHONE' => 'Annan telefon:',
    'LBL_OWNERSHIP' => 'Ägarform:',
    'LBL_PARENT_ACCOUNT_ID' => 'Moderföretags-ID',
    'LBL_PHONE_ALT' => 'Alternativ telefon:',
    'LBL_PHONE_FAX' => 'Faxnummer:',
    'LBL_PHONE_OFFICE' => 'Telefon på arbetsplatsen:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Postnummer:',
    'LBL_PRODUCTS_TITLE' => 'Produkter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopiera till kontakter',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopiera…',
    'LBL_RATING' => 'Betyg:',
    'LBL_SAVE_ACCOUNT' => 'Spara företag',
    'LBL_SEARCH_FORM_TITLE' => 'Sök företag',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Leveransort:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Leveransland:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Leveranspostnummer:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Leveransregion:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Leveransadressrad 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Leveransadressrad 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Leveransadressrad 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Leveransgatuadress:',
    'LBL_SHIPPING_ADDRESS' => 'Leveransadress:',
    'LBL_SIC_CODE' => 'SIC-kod:',
    'LBL_STATE' => 'Region:',
    'LBL_TICKER_SYMBOL' => 'Börssymbol:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webbplats:',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LNK_ACCOUNT_LIST' => 'Visa företag',
    'LNK_NEW_ACCOUNT' => 'Skapa företag',
    'LNK_IMPORT_ACCOUNTS' => 'Importera företag',
    'MSG_DUPLICATE' => 'Företagsposten som du håller på att skapa kan vara en dubblett av en befintlig företagspost. Företagsposter med liknande namn visas nedan.<br>Klicka på Skapa företag för att fortsätta skapa det nya företaget eller välj ett befintligt företag nedan.',
    'MSG_SHOW_DUPLICATES' => 'Företagsposten som du håller på att skapa kan vara en dubblett av en befintlig företagspost. Företagsposter med liknande namn visas nedan.<br>Klicka på Spara för att fortsätta skapa det nya företaget eller på Avbryt för att återgå till modulen utan att skapa företaget.',
    'LBL_ASSIGNED_USER_NAME' => 'Tilldelad till:',
    'LBL_PROSPECT_LIST' => 'Prospektlista',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Företag',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    //For export labels
    'LBL_PARENT_ID' => 'Överordnat ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Köpta produkter och tjänster',

    'LBL_AOS_CONTRACTS' => 'Avtal',
    'LBL_AOS_INVOICES' => 'Fakturor',
    'LBL_AOS_QUOTES' => 'Offerter',
    'LBL_LIST_WEBSITE' => 'webbplats',
);
