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
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    // Dashlet Categories
    'LBL_CHARTS' => 'Grafi',
    'LBL_DEFAULT' => 'Pogledi',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Za brisanje Partnerja je potrebno specificirati število zapisa.',
    'LBL_ACCOUNT_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Naziv partnerja:',
    'LBL_ACCOUNT' => 'Partner:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ADDRESS_INFORMATION' => 'Informacije o naslovu',
    'LBL_ANNUAL_REVENUE' => 'Letni prihodki:',
    'LBL_ANY_ADDRESS' => 'Katerikoli naslov:',
    'LBL_ANY_EMAIL' => 'Katerakoli e-pošta:',
    'LBL_ANY_PHONE' => 'Katerikoli telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_ASSIGNED_TO_ID' => 'Dodeljeno uporabniku:',
    'LBL_BILLING_ADDRESS_CITY' => 'Mesto:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Regija:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Poštna številka:',
    'LBL_BILLING_ADDRESS_STATE' => 'Država:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Ulica 2:',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Ulica 3:',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Ulica 4:',
    'LBL_BILLING_ADDRESS_STREET' => 'Ulica:',
    'LBL_BILLING_ADDRESS' => 'Naslov za račun:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hrošči',
    'LBL_CAMPAIGN_ID' => 'ID Kampanje',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_CITY' => 'Mesto:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_COUNTRY' => 'Regija:',
    'LBL_DATE_ENTERED' => 'Datum vnosa:',
    'LBL_DATE_MODIFIED' => 'Datum spremembe:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Računi',
    'LBL_DESCRIPTION_INFORMATION' => 'Opisne informacije',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DUPLICATE' => 'Mogoča podvojitev Partnerja',
    'LBL_EMAIL' => 'E-pošta:',
    'LBL_EMAIL_OPT_OUT' => 'Odjavljena E-pošta:',
    'LBL_EMAIL_ADDRESSES' => 'E-poštni naslovi',
    'LBL_EMPLOYEES' => 'Zaposleni:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_HOMEPAGE_TITLE' => 'Moji Partnerji',
    'LBL_INDUSTRY' => 'Panoga:',
    'LBL_INVALID_EMAIL' => 'Napačen Email:',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciali',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime',
    'LBL_LIST_CITY' => 'Mesto',
    'LBL_LIST_CONTACT_NAME' => 'Ime Kontakta',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_LIST_FORM_TITLE' => 'Seznam partnerjev',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Država',
    'LBL_MEMBER_OF' => 'Član:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Članske organizacije',
    'LBL_MODULE_NAME' => 'Računi',
    'LBL_MODULE_TITLE' => 'Partnerji: Domov',
    'LBL_MODULE_ID' => 'Računi',
    'LBL_NAME' => 'Ime:',
    'LBL_NEW_FORM_TITLE' => 'Nov Partner',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Priložnosti',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Druga e-pošta:',
    'LBL_OTHER_PHONE' => 'Drugi telefon:',
    'LBL_OWNERSHIP' => 'Lastništvo:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID nadrejenega Partnerja',
    'LBL_PHONE_ALT' => 'Alternativni telefon:',
    'LBL_PHONE_FAX' => 'Telefon, Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon pisarna:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Poštna številka:',
    'LBL_PRODUCTS_TITLE' => 'Proizvodi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopiraj v Kontakte',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopiraj...',
    'LBL_RATING' => 'Ocena:',
    'LBL_SAVE_ACCOUNT' => 'Shrani Partnerja',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje Partnerja',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Naslov pošiljanja, mesto:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Naslov pošiljanja, regija:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Naslov pošiljanja, poštna številka:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Naslov pošiljanja, država:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Naslov pošiljanja, ulica 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Naslov pošiljanja, ulica 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Naslov pošiljanja, ulica 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Naslov pošiljanja, ulica:',
    'LBL_SHIPPING_ADDRESS' => 'Naslov pošiljanja:',
    'LBL_SIC_CODE' => 'Šifra dejavnosti:',
    'LBL_STATE' => 'Država ali regija:',
    'LBL_TICKER_SYMBOL' => 'Kratica:',
    'LBL_TYPE' => 'Tip:',
    'LBL_WEBSITE' => 'Spletna stran:',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LNK_ACCOUNT_LIST' => 'Partnerji',
    'LNK_NEW_ACCOUNT' => 'Ustvari partnerja',
    'LNK_IMPORT_ACCOUNTS' => 'Uvozi partnerje',
    'MSG_DUPLICATE' => 'Podvajate Partnerja. Lahko izberete partnerja iz spodnjega seznama, ali pa kliknite Shrani za podvojitev Partnerja',
    'MSG_SHOW_DUPLICATES' => 'Podvajate Partnerja. Kliknite Shrani za podvojitev Partnerja, ali pa klikni Prekliči.',
    'LBL_ASSIGNED_USER_NAME' => 'Dodeljeno:',
    'LBL_PROSPECT_LIST' => 'Seznam tarč',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Računi',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    //For export labels
    'LBL_PARENT_ID' => 'ID nadrejenega',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Kupljeni proizvodi in storitve',

    'LBL_AOS_CONTRACTS' => 'Pogodbe',
    'LBL_AOS_INVOICES' => 'Računi',
    'LBL_AOS_QUOTES' => 'Ponudbe',
    'LBL_LIST_WEBSITE' => 'spletna stran',
);
