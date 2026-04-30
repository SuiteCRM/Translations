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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    // Dashlet Categories
    'LBL_CHARTS' => 'Diagramos',
    'LBL_DEFAULT' => 'Peržiūros',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Paskyros ištrynimui turite nurodyti įrašo eilės numerį.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_ACCOUNT' => 'Klientas:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Priminimai',
    'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
    'LBL_ANNUAL_REVENUE' => 'Metinės pajamos:',
    'LBL_ANY_ADDRESS' => 'Bet koks adresas:',
    'LBL_ANY_EMAIL' => 'Bet koks el. paštas:',
    'LBL_ANY_PHONE' => 'Bet koks tel. Nr.:',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas:',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas vartotojas:',
    'LBL_BILLING_ADDRESS_CITY' => 'Registracijos adreso miestas:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Registracijos adreso šalis:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Registracijos adreso pašto kodas:',
    'LBL_BILLING_ADDRESS_STATE' => 'Sąskaitos adreso rajonas:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Registracijos adreso gatvė 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Registracijos adreso gatvė 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Registracijos adreso gatvė 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Registracijos adreso gatvė:',
    'LBL_BILLING_ADDRESS' => 'Registracijos adresas:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidų fiksavimas',
    'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Aptarnavimai',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kliento kontaktai',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => 'Sukurta:',
    'LBL_DATE_MODIFIED' => 'Redaguota:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_DESCRIPTION_INFORMATION' => 'Aprašymo informacija',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DUPLICATE' => 'Galimas kliento dubliavimasis',
    'LBL_EMAIL' => 'El.paštas:',
    'LBL_EMAIL_OPT_OUT' => 'Nesiųsti el. pašto:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOMEPAGE_TITLE' => 'Mano paskyros',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
    'LBL_INVITEE' => 'Kliento kontaktai',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Galimybės',
    'LBL_LIST_ACCOUNT_NAME' => 'Pilnas vardas',
    'LBL_LIST_CITY' => 'Miestas:',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_EMAIL_ADDRESS' => 'El. paštas:',
    'LBL_LIST_FORM_TITLE' => 'Klientų sąrašas',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'Rajonas',
    'LBL_MEMBER_OF' => 'Priklauso:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => 'Naudotojai',
    'LBL_MODULE_TITLE' => 'Klientai: Pradžia',
    'LBL_MODULE_ID' => 'Naudotojai',
    'LBL_NAME' => 'Vardas:',
    'LBL_NEW_FORM_TITLE' => 'Naujas klientas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Pardavimai',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas laiškas:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Banko sąskaita:',
    'LBL_PARENT_ACCOUNT_ID' => 'Pagrindinio kliento ID',
    'LBL_PHONE_ALT' => 'Kitas telefonas:',
    'LBL_PHONE_FAX' => 'Tel./fax:',
    'LBL_PHONE_OFFICE' => 'Telefonas:',
    'LBL_PHONE' => 'Telefonas',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Prekės',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopijuoti į kontaktus',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopijuoti...',
    'LBL_RATING' => 'Bankas:',
    'LBL_SAVE_ACCOUNT' => 'Saugoti klientą',
    'LBL_SEARCH_FORM_TITLE' => 'Kliento paieška',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Pristatymo adreso miestas:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pristatymo adreso šalis:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pristatymo adreso pašto kodas:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Pristatymo adreso regionas:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Pristatymo adreso gatvė 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Pristatymo adreso gatvė 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Pristatymo adreso gatvė 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Pristatymo adreso gatvė:',
    'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas:',
    'LBL_SIC_CODE' => 'EVRK kodas:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'PVM mokėtojo kodas:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Tinklapis:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LNK_ACCOUNT_LIST' => 'Peržiūrėti paskyras',
    'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
    'LNK_IMPORT_ACCOUNTS' => 'Importuoti paskyras',
    'MSG_DUPLICATE' => 'Sukūrus šį klientą, gali atsirasti įrašų dublikatų.',
    'MSG_SHOW_DUPLICATES' => 'Įrašas, kurį dabar norite sukurti, gali dubliuotis su jau egzistuojančiais įrašais. Paspauskite Išsaugoti, jei vis tiek norite sukurti šį klientą, arba paspauskite Atšaukti, kad grįžtumėte atgal nesukūrę kliento.',
    'LBL_ASSIGNED_USER_NAME' => 'Priskirtas:',
    'LBL_PROSPECT_LIST' => 'Kandidatų sąrašas',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Įsigytos prekės ir paslaugos',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_LIST_WEBSITE' => 'website',
);
